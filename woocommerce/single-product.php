<?php
/**
 * Página de Producto Individual Real - WooCommerce + Tailwind v4 + Galería Dinámica Interactiva
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>

<div class="bg-brand-dark text-brand-light min-h-screen font-sans pt-12 pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <?php while ( have_posts() ) : the_post(); global $product; ?>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                
                <!-- COLUMNA IZQUIERDA: Galería Real e Interactiva -->
                <div class="lg:col-span-7 space-y-4">
                    
                    <!-- Imagen Principal con Contenedor Proporcional -->
                    <div id="main-image-container" class="relative bg-black/20 border border-white/5 rounded-3xl overflow-hidden aspect-[4/3] flex items-center justify-center shadow-2xl">
                        <?php 
                        if ( has_post_thumbnail() ) {
                            $main_image_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                            echo '<img id="main-product-image" src="' . esc_url( $main_image_url ) . '" class="w-full h-full object-cover transition-opacity duration-300 opacity-100" alt="' . esc_attr( get_the_title() ) . '">';
                        } else {
                            $main_image_url = wc_placeholder_img_src( 'large' );
                            echo '<img id="main-product-image" src="' . esc_url( $main_image_url ) . '" class="w-full h-full object-cover" alt="Placeholder">';
                        }
                        ?>
                    </div>

                    <!-- Fila de Miniaturas (Solo se renderiza si hay imágenes en la galería) -->
                    <?php
                    $attachment_ids = $product->get_gallery_image_ids();
                    if ( $attachment_ids ) : ?>
                        <div class="grid grid-cols-5 gap-3">
                            
                            <!-- Miniatura 1: Imagen Destacada Principal -->
                            <button onclick="changeProductImage(this, '<?php echo esc_url( $main_image_url ); ?>')" class="thumb-btn border-2 border-brand-gold rounded-xl overflow-hidden aspect-[4/3] bg-black/20 transition-all duration-200 focus:outline-none">
                                <img src="<?php echo esc_url( $main_image_url ); ?>" class="w-full h-full object-cover pointer-events-none" alt="Miniatura Principal">
                            </button>

                            <!-- Miniaturas de la Galería de WooCommerce -->
                            <?php foreach ( $attachment_ids as $attachment_id ) : 
                                $image_url = wp_get_attachment_url( $attachment_id ); 
                                if ( ! $image_url ) continue;
                                ?>
                                <button onclick="changeProductImage(this, '<?php echo esc_url( $image_url ); ?>')" class="thumb-btn border border-white/5 rounded-xl overflow-hidden aspect-[4/3] bg-black/20 opacity-60 hover:opacity-100 hover:border-white/20 transition-all duration-200 focus:outline-none">
                                    <img src="<?php echo esc_url( $image_url ); ?>" class="w-full h-full object-cover pointer-events-none" alt="Miniatura Galería">
                                </button>
                            <?php endforeach; ?>

                        </div>
                    <?php endif; ?>

                </div>

                <!-- COLUMNA DERECHA: Datos Reales y Botón Funcional -->
                <div class="lg:col-span-5 space-y-8">
                    
                    <div class="space-y-3">
                        <span class="text-[10px] text-brand-gold font-black uppercase tracking-[0.2em] block">
                            <?php echo wc_get_product_category_list( $product->get_id(), ', ', '' ); ?>
                        </span>
                        <h1 class="text-3xl font-black tracking-tight text-brand-light uppercase leading-tight">
                            <?php the_title(); ?>
                        </h1>
                        <?php if ( $product->get_sku() ) : ?>
                            <p class="text-xs text-brand-muted font-mono">SKU: <?php echo esc_html( $product->get_sku() ); ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Caja de Precio Real -->
                    <div class="bg-black/10 border border-white/5 p-6 rounded-2xl flex items-center justify-between">
                        <div>
                            <span class="text-[9px] text-brand-muted uppercase tracking-widest block font-semibold">Precio</span>
                            <span class="text-2xl font-black text-brand-gold mt-1 block">
                                <?php echo $product->get_price_html(); ?>
                            </span>
                        </div>
                    </div>

                    <!-- Descripción Real -->
                    <div class="space-y-3">
                        <h3 class="text-xs font-bold uppercase tracking-widest text-brand-gold">Descripción del Ejemplar</h3>
                        <div class="text-xs sm:text-sm text-brand-muted font-light leading-relaxed prose prose-invert">
                            <?php the_content(); ?>
                        </div>
                    </div>

                    <!-- Botón NATIVO y FUNCIONAL para Añadir al Carrito -->
                    <div class="pt-4 border-t border-white/5 dynamic-woo-form">
                        <?php 
                        // Carga el formulario real de compra nativo (maneja inventario, variaciones y el botón)
                        woocommerce_template_single_add_to_cart(); 
                        ?>
                    </div>

                </div>
            </div>

        <?php endwhile; ?>

    </div>
</div>

<!-- LÓGICA DE INTERACCIÓN DE LA GALERÍA -->
<script>
function changeProductImage(element, url) {
    const mainImage = document.getElementById('main-product-image');
    if (!mainImage) return;

    // Efecto de transición suave (fade out)
    mainImage.classList.add('opacity-0');
    
    setTimeout(() => {
        // Cambiamos la URL de la imagen principal
        mainImage.src = url;
        // Restauramos la opacidad (fade in)
        mainImage.classList.remove('opacity-0');
    }, 200);

    // Actualizar los bordes activos de los botones de las miniaturas
    document.querySelectorAll('.thumb-btn').forEach(btn => {
        btn.classList.remove('border-brand-gold', 'opacity-100');
        btn.classList.add('border-white/5', 'opacity-60');
    });

    // Resaltar la miniatura que fue seleccionada
    element.classList.remove('border-white/5', 'opacity-60');
    element.classList.add('border-brand-gold', 'opacity-100');
}
</script>

<?php get_footer(); ?>