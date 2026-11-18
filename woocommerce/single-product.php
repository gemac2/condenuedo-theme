<?php
/**
 * Página de Producto Individual Real - WooCommerce + Tailwind v4 + Galería Dinámica Interactiva
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>

<style>
.dynamic-woo-form form.variations_form.cart { display: block !important; }
.dynamic-woo-form .variations { width: 100%; margin-bottom: 1rem; }
.dynamic-woo-form .variations td { padding: .5rem 0; }
.dynamic-woo-form .variations label { color: #f3f4f6; font-weight: 700; }
.dynamic-woo-form .variations select { width: 100%; background: #0f1115; color: #f3f4f6; border: 1px solid rgba(255,255,255,.2); border-radius: .75rem; padding: .75rem; }
.dynamic-woo-form .reset_variations { color: #c5a059; margin-left: .5rem; }
.dynamic-woo-form .woocommerce-variation-price { margin-bottom: 1rem; color: #c5a059; }
.dynamic-woo-form .woocommerce-variation-add-to-cart { display: flex; align-items: center; gap: 1rem; }
</style>

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
                        <h3 class="text-xs font-bold uppercase tracking-widest text-brand-gold">Descripción del producto</h3>
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

                    <!-- Botón Directo para Cotizar o Consultar por WhatsApp -->
                    <?php
                    $prod_title = get_the_title();
                    $prod_sku   = $product->get_sku() ? ' (SKU: ' . $product->get_sku() . ')' : '';
                    $prod_price = strip_tags( $product->get_price_html() );
                    $prod_url   = get_permalink();
                    $wa_msg     = "¡Hola Con Denuedo! Quisiera cotizar / consultar disponibilidad del producto:\n" .
                                  "🎺 *" . $prod_title . "* " . $prod_sku . "\n" .
                                  "💰 Precio referencia: " . $prod_price . "\n" .
                                  "🔗 " . $prod_url;
                    $wa_url     = function_exists('condenuedo_get_whatsapp_url') 
                                    ? condenuedo_get_whatsapp_url( $wa_msg ) 
                                    : 'https://wa.me/584245197963?text=' . rawurlencode($wa_msg);
                    ?>
                    <div class="pt-2 flex flex-col gap-2.5">
                        <a id="product-whatsapp-link" href="<?php echo esc_url( $wa_url ); ?>"
                           target="_blank" 
                           rel="noopener"
                           class="w-full inline-flex items-center justify-center gap-3 bg-gradient-to-r from-emerald-600 to-green-600 hover:from-emerald-500 hover:to-green-500 text-white font-bold text-xs uppercase tracking-widest py-4 px-6 rounded-xl transition-all duration-300 shadow-lg shadow-emerald-900/20">
                            <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                            Cotizar / Consultar por WhatsApp
                        </a>
                        <p class="text-[11px] text-brand-light/50 text-center flex items-center justify-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                            Atención rápida por WhatsApp al +58 424 519 7963
                        </p>
                    </div>

                </div>
            </div>

        <?php endwhile; ?>

    </div>
</div>

<!-- LÓGICA DE INTERACCIÓN DE LA GALERÍA -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const link = document.getElementById('product-whatsapp-link');
    const form = document.querySelector('form.variations_form');
    if (!link || !form) return;

    const baseUrl = link.href;
    function updateWhatsAppLink() {
        const url = new URL(baseUrl);
        const selected = Array.from(form.querySelectorAll('select[name^="attribute_"]'))
            .filter(select => select.value)
            .map(select => {
                const label = form.querySelector('label[for="' + select.id + '"]');
                return (label ? label.textContent.trim() : 'Opción') + ': ' + select.options[select.selectedIndex].text;
            });
        if (selected.length) url.searchParams.set('text', url.searchParams.get('text') + '\n' + selected.join('\n'));
        link.href = url.toString();
    }
    form.addEventListener('change', updateWhatsAppLink);
    form.addEventListener('reset', () => setTimeout(updateWhatsAppLink, 0));
});

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
