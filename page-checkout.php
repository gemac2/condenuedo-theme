<?php
/**
 * Template Name: Checkout Funcional
 * Target Page: /checkout/
 */

get_header(); ?>

<div class="bg-[#0a0a0a] text-white min-h-screen font-sans selection:bg-[#cda052] selection:text-black pt-12 pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-12 text-center md:text-left">
            <span class="text-[#cda052] text-[10px] uppercase font-bold tracking-[0.2em] border border-[#cda052]/20 bg-[#cda052]/5 px-3.5 py-1.5 rounded-full">
                Finalizar Compra
            </span>
            <h1 class="text-3xl font-black mt-4 tracking-tight uppercase">
                Caja de <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#cda052] via-[#f3d393] to-[#cda052]">Pago</span>
            </h1>
        </div>

        <?php
        // Verifica si el usuario necesita estar logueado antes de pagar bajo tu flujo estricto
        if ( ! is_user_logged_in() && 'yes' === get_option( 'woocommerce_enable_checkout_login_reminder' ) ) {
            echo '<div class="bg-[#111] border border-zinc-900 p-6 rounded-2xl text-sm mb-6 text-center">¿Ya tienes cuenta? <a href="'.esc_url( wc_get_page_permalink( 'myaccount' ) ).'" class="text-[#cda052] underline">Inicia sesión aquí antes de pagar</a></div>';
        }

        // Ejecuta el shortcode nativo de WooCommerce adaptado a tus estilos globales
        echo do_shortcode('[woocommerce_checkout]');
        ?>

    </div>
</div>

<?php get_footer(); ?>