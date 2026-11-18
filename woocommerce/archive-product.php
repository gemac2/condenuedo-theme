<?php
/**
 * Catálogo de Productos Real - WooCommerce + Tailwind v4
 * Tema: TailPress (Desarrollo Local en VS Code)
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>

<div class="bg-brand-dark text-brand-light min-h-screen font-sans">
    
    <!-- Hero / Banner Superior del Catálogo (Convertido a Section para evitar colisión con el Header global) -->
    <section class="max-w-7xl mx-auto pt-12 pb-10 px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 text-brand-gold text-[10px] uppercase font-bold tracking-[0.2em] border border-brand-gold/20 bg-brand-gold/5 px-3.5 py-1.5 rounded-full">
            Colección Exclusiva
        </span>
        <h1 class="text-3xl sm:text-5xl font-black mt-4 tracking-tight uppercase">
            La <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-gold via-brand-light to-brand-gold">Tienda</span>
        </h1>
        <div class="mt-5">
            <a href="https://wa.me/584245197963?text=<?php echo rawurlencode('¡Hola Con Denuedo! Quisiera asesoría sobre los productos de la tienda.'); ?>" 
               target="_blank" 
               rel="noopener"
               class="inline-flex items-center gap-2 text-xs font-semibold text-emerald-400 hover:text-white bg-emerald-500/10 hover:bg-emerald-600 border border-emerald-500/25 px-5 py-2.5 rounded-full transition-all">
                <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                <span>Cotizaciones y pedidos por WhatsApp: +58 424 519 7963</span>
            </a>
        </div>
    </section>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-24">
        
        <?php if ( woocommerce_product_loop() ) : ?>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <?php
                while ( have_posts() ) :
                    the_post();
                    global $product;
                    $prod_wa_msg = "¡Hola Con Denuedo! Quisiera cotizar el producto: " . get_the_title() . " (" . strip_tags($product->get_price_html()) . ") - " . get_permalink();
                    $prod_wa_url = function_exists('condenuedo_get_whatsapp_url') ? condenuedo_get_whatsapp_url($prod_wa_msg) : 'https://wa.me/584245197963?text=' . rawurlencode($prod_wa_msg);
                    ?>
                    
                    <article class="group bg-brand-dark/40 border border-white/5 rounded-2xl overflow-hidden transition-all duration-500 hover:border-brand-gold/30 flex flex-col justify-between">
                        
                        <!-- Contenedor de Imagen -->
                        <div class="relative overflow-hidden h-64 bg-black/20 w-full flex items-center justify-center border-b border-white/5">
                            <?php 
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail('large', [
                                    'class' => 'w-full h-full object-cover transition-transform duration-700 group-hover:scale-105'
                                ]);
                            }
                            ?>
                        </div>

                        <!-- Información y Acción -->
                        <div class="p-6 flex-1 flex flex-col justify-between space-y-6">
                            <div class="space-y-3">
                                <span class="text-[10px] text-brand-gold font-bold uppercase tracking-widest block">
                                    <?php echo wc_get_product_category_list( $product->get_id(), ', ', '' ); ?>
                                </span>
                                
                                <h2 class="text-lg font-bold tracking-tight text-brand-light group-hover:text-brand-gold transition-colors">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                
                                <p class="text-xs text-brand-muted font-light line-clamp-2">
                                    <?php echo wp_strip_all_tags( $product->get_short_description() ); ?>
                                </p>
                            </div>

                            <div class="pt-5 border-t border-white/5 flex flex-col gap-3">
                                <div class="flex items-center justify-between">
                                    <div class="flex flex-col">
                                        <span class="text-[9px] text-brand-muted uppercase tracking-widest font-semibold">Precio</span>
                                        <span class="text-base font-black text-brand-gold mt-0.5">
                                            <?php echo $product->get_price_html(); ?>
                                        </span>
                                    </div>
                                    
                                    <!-- Botón de Compra Directa al Carrito Local o Vista de Producto -->
                                    <a href="<?php echo esc_url( $product->add_to_cart_url() ); ?>"
                                       class="inline-flex items-center gap-2 bg-brand-dark border border-white/10 text-brand-light hover:bg-brand-gold hover:text-brand-dark text-[11px] font-bold uppercase tracking-wider px-4 py-2.5 rounded-xl transition-all duration-300">
                                        <?php echo esc_html( $product->add_to_cart_text() ); ?>
                                    </a>
                                </div>

                                <!-- Botón Cotizar por WhatsApp -->
                                <a href="<?php echo esc_url( $prod_wa_url ); ?>" 
                                   target="_blank"
                                   rel="noopener"
                                   class="inline-flex items-center justify-center gap-2 text-[10px] uppercase tracking-wider font-bold text-emerald-400 hover:text-white bg-emerald-500/10 hover:bg-emerald-600 py-2 px-3 rounded-lg border border-emerald-500/20 transition-all">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                                    Cotizar por WhatsApp
                                </a>
                            </div>
                        </div>

                    </article>

                <?php endwhile; ?>
                
            </div>

            <div class="mt-12 flex justify-center">
                <?php woocommerce_pagination(); ?>
            </div>

        <?php else : ?>
            <div class="text-center py-24 border border-dashed border-white/10 rounded-2xl max-w-md mx-auto">
                <p class="text-brand-muted text-sm font-mono">No hay productos publicados.</p>
            </div>
        <?php endif; ?>
        
    </main>
</div>

<?php get_footer(); ?>
