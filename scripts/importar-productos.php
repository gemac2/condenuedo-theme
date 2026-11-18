<?php
/**
 * Ejecutar una sola vez con WP-CLI desde la instalación de WordPress:
 * wp eval-file wp-content/themes/tailpress-5.x/scripts/importar-productos.php
 *
 * No modifica productos existentes. Las imágenes deben estar en el tema activo.
 */
if ( ! defined( 'WP_CLI' ) || ! WP_CLI || ! class_exists( 'WooCommerce' ) ) {
    throw new RuntimeException( 'Se requiere WP-CLI y WooCommerce activo.' );
}

$products = [
    [ 'title' => 'Aceite para ungir', 'sku' => 'condenuedo-aceite-ungir' ],
    [ 'title' => 'Funda para shofar', 'sku' => 'condenuedo-funda-shofar' ],
];

// No asumir que un producto existente pertenece a esta importación.
foreach ( $products as $candidate ) {
    if ( wc_get_product_id_by_sku( $candidate['sku'] ) ) {
        WP_CLI::error( 'Ya existe el SKU ' . $candidate['sku'] . '. Revisa el catálogo antes de continuar.' );
    }
    $matches = get_posts( [
        'post_type' => 'product',
        'post_status' => [ 'publish', 'draft', 'pending', 'private', 'future', 'trash' ],
        'title' => $candidate['title'],
        'numberposts' => 1,
        'fields' => 'ids',
    ] );
    if ( $matches ) {
        WP_CLI::error( 'Ya existe un producto llamado "' . $candidate['title'] . '". Revisa el catálogo antes de continuar.' );
    }
}

$oil_images = [ 'aceites.jpeg', 'aceites2.jpeg', 'aceites3.jpeg', 'aceites4.jpeg', 'aceites5.jpeg', 'aceites6.jpeg', 'aceites7.jpeg', 'aceites8.jpeg', 'aceites9.jpeg', 'aceites10.jpeg', 'aceites11.jpeg' ];
$cover_images = [ 'fundas.jpeg', 'fundas3.jpeg', 'fundas4.jpeg' ];
$image_dir = get_template_directory() . '/images/';
foreach ( array_merge( $oil_images, $cover_images ) as $filename ) {
    if ( ! is_readable( $image_dir . $filename ) ) {
        WP_CLI::error( 'Falta la imagen ' . $filename . '.' );
    }
}

require_once ABSPATH . 'wp-admin/includes/file.php';
require_once ABSPATH . 'wp-admin/includes/media.php';
require_once ABSPATH . 'wp-admin/includes/image.php';

$attach_images = static function ( $product_id, $filenames, $alt ) use ( $image_dir ) {
    $ids = [];
    foreach ( $filenames as $filename ) {
        $temp = wp_tempnam( $filename );
        if ( ! $temp || ! copy( $image_dir . $filename, $temp ) ) {
            throw new RuntimeException( 'No se pudo preparar ' . $filename );
        }
        $id = media_handle_sideload( [ 'name' => $filename, 'tmp_name' => $temp ], $product_id );
        if ( is_wp_error( $id ) ) {
            @unlink( $temp );
            throw new RuntimeException( 'No se pudo importar ' . $filename . ': ' . $id->get_error_message() );
        }
        update_post_meta( $id, '_wp_attachment_image_alt', $alt );
        $ids[] = $id;
    }
    return $ids;
};

try {
    $oil = new WC_Product_Variable();
    $oil->set_name( 'Aceite para ungir' );
    $oil->set_sku( 'condenuedo-aceite-ungir' );
    $oil->set_status( 'draft' );
    $oil->set_description( 'Aceite para ungir, preparado con elementos bíblicos.' );
    $oil->set_short_description( 'Aceite para ungir, preparado con elementos bíblicos. Presentaciones de 30 ml y 60 ml.' );
    $attribute = new WC_Product_Attribute();
    $attribute->set_name( 'Presentación' );
    $attribute->set_options( [ '30 ml', '60 ml' ] );
    $attribute->set_visible( true );
    $attribute->set_variation( true );
    $oil->set_attributes( [ $attribute ] );
    $oil->save();
    $images = $attach_images( $oil->get_id(), $oil_images, 'Aceite para ungir' );
    $oil->set_image_id( array_shift( $images ) );
    $oil->set_gallery_image_ids( $images );
    $oil->save();
    foreach ( [ '30 ml' => '12', '60 ml' => '20' ] as $size => $price ) {
        $variation = new WC_Product_Variation();
        $variation->set_parent_id( $oil->get_id() );
        $variation->set_attributes( [ 'presentacion' => $size ] );
        $variation->set_regular_price( $price );
        $variation->set_status( 'publish' );
        $variation->save();
    }
    WC_Product_Variable::sync( $oil->get_id() );

    $cover = new WC_Product_Simple();
    $cover->set_name( 'Funda para shofar' );
    $cover->set_sku( 'condenuedo-funda-shofar' );
    $cover->set_status( 'draft' );
    $cover->set_regular_price( '15' );
    $cover->set_description( 'Funda para shofar de tela resistente, 70 % poliéster. Disponible en diferentes tamaños, todos al mismo precio.' );
    $cover->set_short_description( 'Tela resistente, 70 % poliéster. Diferentes tamaños al mismo precio.' );
    $cover->save();
    $images = $attach_images( $cover->get_id(), $cover_images, 'Funda para shofar' );
    $cover->set_image_id( array_shift( $images ) );
    $cover->set_gallery_image_ids( $images );
    $cover->save();

    // Publicar solamente después de importar las fotografías y las variaciones.
    $oil = wc_get_product( $oil->get_id() );
    $oil->set_status( 'publish' );
    $oil->save();
    $cover->set_status( 'publish' );
    $cover->save();
    WP_CLI::success( 'Productos publicados: aceite #' . $oil->get_id() . ', funda #' . $cover->get_id() . '.' );
} catch ( Throwable $error ) {
    WP_CLI::error( 'Importación interrumpida: ' . $error->getMessage() . '. Revisa los borradores antes de reintentar.' );
}
