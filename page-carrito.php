<?php
/**
 * Template Name: Carrito de Compras Funcional
 * Target Page: /carrito/
 */

get_header(); 

$theme_uri = get_stylesheet_directory_uri();
?>

<div class="bg-[#0a0a0a] text-white min-h-screen font-sans selection:bg-[#cda052] selection:text-black pt-12 pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-12 text-center md:text-left">
            <span class="text-[#cda052] text-[10px] uppercase font-bold tracking-[0.2em] border border-[#cda052]/20 bg-[#cda052]/5 px-3.5 py-1.5 rounded-full">
                Tu Selección
            </span>
            <h1 class="text-3xl font-black mt-4 tracking-tight uppercase">
                Carrito de <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#cda052] via-[#f3d393] to-[#cda052]">Compras</span>
            </h1>
        </div>

        <?php if ( function_exists('wc_print_notices') ) { wc_print_notices(); } ?>

        <?php if ( ! WC()->cart->is_empty() ) : ?>
            
            <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    
                    <!-- COLUMNA IZQUIERDA: Productos -->
                    <div class="lg:col-span-8 space-y-4">
                        
                        <?php
                        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                            $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                            $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                            if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                                $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                                ?>
                                
                                <div class="bg-[#111111] border border-zinc-900 rounded-2xl p-4 sm:p-6 flex flex-col sm:flex-row items-center justify-between gap-6 transition-all duration-300 hover:border-zinc-800">
                                    
                                    <!-- Imagen y Título -->
                                    <div class="flex flex-col sm:flex-row items-center gap-6 w-full sm:w-auto">
                                        <div class="w-24 h-24 bg-zinc-950 rounded-xl overflow-hidden flex-shrink-0 border border-zinc-900">
                                            <?php
                                            $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
                                            echo $thumbnail;
                                            ?>
                                        </div>
                                        <div class="text-center sm:text-left space-y-1">
                                            <h2 class="text-base font-bold text-zinc-100 tracking-tight">
                                                <?php echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) ); ?>
                                            </h2>
                                            <p class="text-[11px] text-zinc-500 font-mono">SKU: <?php echo esc_html( $_product->get_sku() ); ?></p>
                                        </div>
                                    </div>

                                    <!-- Controles y Precio -->
                                    <div class="flex items-center justify-between sm:justify-end gap-8 w-full sm:w-auto border-t sm:border-t-0 pt-4 sm:pt-0 border-zinc-900">
                                        
                                        <!-- Selector de Cantidad Nativo Oculto / Input Estilizado -->
                                        <div class="flex items-center bg-zinc-950 border border-zinc-900 rounded-lg overflow-hidden">
                                            <?php
                                            if ( $_product->is_sold_individually() ) {
                                                $product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                                            } else {
                                                $product_quantity = woocommerce_quantity_input(
                                                    array(
                                                        'input_name'   => "cart[{$cart_item_key}][qty]",
                                                        'input_value'  => $cart_item['quantity'],
                                                        'max_value'    => $_product->get_max_purchase_quantity(),
                                                        'min_value'    => '0',
                                                        'product_name' => $_product->get_name(),
                                                    ),
                                                    $_product,
                                                    false
                                                );
                                            }
                                            echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
                                            ?>
                                        </div>

                                        <!-- Precio -->
                                        <div class="text-right flex flex-col">
                                            <span class="text-[9px] text-zinc-500 uppercase tracking-widest font-semibold">Total</span>
                                            <span class="text-base font-black text-[#cda052] mt-0.5">
                                                <?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
                                            </span>
                                        </div>

                                        <!-- Eliminar -->
                                        <?php
                                        echo apply_filters(
                                            'woocommerce_cart_item_remove_link',
                                            sprintf(
                                                '<a href="%s" class="text-zinc-600 hover:text-red-400 transition-colors p-1" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
                                                esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                                esc_html__( 'Remove this item', 'woocommerce' ),
                                                esc_attr( $product_id ),
                                                esc_attr( $_product->get_sku() )
                                            ),
                                            $cart_item_key
                                        );
                                        ?>
                                    </div>

                                </div>
                                <?php
                            }
                        }
                        ?>
                        
                        <!-- Botón oculto requerido para actualizar cambios de cantidad -->
                        <button type="submit" name="update_cart" value="Actualizar" class="hidden">Actualizar Carrito</button>
                        <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
                    </div>

                    <!-- COLUMNA DERECHA: Resumen -->
                    <div class="lg:col-span-4 bg-[#111111] border border-zinc-900 rounded-2xl p-6 sm:p-8 space-y-6 shadow-xl">
                        <h3 class="text-sm font-bold uppercase tracking-widest text-zinc-100 border-b border-zinc-900 pb-4">
                            Resumen de Pedido
                        </h3>

                        <div class="space-y-3 text-xs font-light">
                            <div class="flex justify-between text-zinc-400">
                                <span>Subtotal</span>
                                <span class="font-mono text-zinc-200"><?php wc_cart_totals_subtotal_html(); ?></span>
                            </div>
                            
                            <div class="pt-4 border-t border-zinc-900/80 flex justify-between items-baseline">
                                <span class="text-sm font-bold text-zinc-300 uppercase tracking-wider">Total</span>
                                <span class="text-2xl font-black text-transparent bg-clip-text bg-gradient-to-r from-[#cda052] via-[#f3d393] to-[#cda052] font-mono">
                                    <?php wc_cart_totals_order_total_html(); ?>
                                </span>
                            </div>
                        </div>

                        <div class="pt-2">
                            <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="w-full inline-flex items-center justify-center gap-2 bg-[#cda052] text-black hover:bg-[#f3d393] font-black text-xs uppercase tracking-widest py-4 px-6 rounded-xl transition-all duration-300 shadow-lg shadow-[#cda052]/5 text-center">
                                Proceder al Pago
                            </a>
                        </div>
                    </div>

                </div>
            </form>
            
        <?php else : ?>
            <div class="text-center py-24 border border-dashed border-zinc-800 rounded-2xl max-w-md mx-auto">
                <p class="text-zinc-500 text-sm font-mono mb-6">Tu carrito está vacío.</p>
                <a href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>" class="inline-flex bg-zinc-900 border border-zinc-800 text-[#cda052] text-xs font-bold uppercase tracking-wider px-6 py-3 rounded-xl hover:bg-[#cda052] hover:text-black transition-all">Volver a la Tienda</a>
            </div>
        <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>