<?php
/**
 * Catálogo de Productos Real - WooCommerce + Tailwind v4
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>

<div class="bg-brand-dark text-brand-light min-h-screen font-sans">
    
    <header class="relative max-w-7xl mx-auto pt-24 pb-16 px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-flex items-center gap-2 text-brand-gold text-[10px] uppercase font-bold tracking-[0.2em] border border-brand-gold/20 bg-brand-gold/5 px-3.5 py-1.5 rounded-full">
            Colección Exclusiva 2026
        </span>
        <h1 class="text-4xl sm:text-5xl font-black mt-6 tracking-tight uppercase">
            La <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-gold via-brand-light to-brand-gold">Tienda</span>
        </h1>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-24">
        
        <?php if ( woocommerce_product_loop() ) : ?>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <?php
                while ( have_posts() ) :
                    the_post();
                    global $product;
                    ?>
                    
                    <article class="group bg-brand-dark/40 border border-white/5 rounded-2xl overflow-hidden transition-all duration-500 hover:border-brand-gold/30 flex flex-col justify-between">
                        
                        <div class="relative overflow-hidden h-64 bg-black/20 w-full flex items-center justify-center border-b border-white/5">
                            <?php 
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail('large', [
                                    'class' => 'w-full h-full object-cover transition-transform duration-700 group-hover:scale-105'
                                ]);
                            }
                            ?>
                        </div>

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

                            <div class="pt-5 border-t border-white/5 flex items-center justify-between">
                                <div class="flex flex-col">
                                    <span class="text-[9px] text-brand-muted uppercase tracking-widest font-semibold">Precio</span>
                                    <span class="text-base font-black text-brand-gold mt-0.5">
                                        <?php echo $product->get_price_html(); ?>
                                    </span>
                                </div>
                                
                                <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-2 bg-brand-dark border border-white/10 text-brand-light hover:bg-brand-gold hover:text-brand-dark text-[11px] font-bold uppercase tracking-wider px-4 py-3 rounded-xl transition-all duration-300">
                                    Ver Pieza
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
                <p class="text-brand-muted text-sm font-mono">No hay shofares publicados.</p>
            </div>
        <?php endif; ?>
        
    </main>
</div>

<?php get_footer(); ?>