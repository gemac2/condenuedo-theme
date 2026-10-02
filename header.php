<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-brand-dark text-brand-light antialiased selection:bg-brand-gold selection:text-brand-dark flex flex-col min-h-screen' ); ?>>
<?php wp_body_open(); ?>

<header class="sticky top-0 z-50 w-full border-b border-white/5 bg-brand-dark/90 backdrop-blur-md transition-all">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20 md:h-24">

            <!-- Branding / Logo Proporcionado -->
            <div class="flex-shrink-0 flex items-center">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-flex items-center">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/images/logo-removebg.png" 
                        alt="<?php bloginfo('name'); ?>" 
                        class="h-12 sm:h-14 md:h-20 w-auto object-contain transition-transform duration-300 hover:scale-105 origin-left block"
                    >
                </a>
            </div>

            <!-- Navegación Principal -->
            <nav class="hidden md:flex items-center gap-8">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-sm font-medium text-brand-light/80 hover:text-brand-gold transition-colors duration-300">Inicio</a>
                <a href="<?php echo esc_url( home_url( '/academia' ) ); ?>" class="text-sm font-medium text-brand-light/80 hover:text-brand-gold transition-colors duration-300">Academia</a>
                <a href="<?php echo esc_url( home_url( '/tienda' ) ); ?>" class="text-sm font-medium text-brand-light/80 hover:text-brand-gold transition-colors duration-300">Tienda</a>
                <a href="<?php echo esc_url( home_url( '/nosotros' ) ); ?>" class="text-sm font-medium text-brand-light/80 hover:text-brand-gold transition-colors duration-300">Nosotros</a>
            </nav>

            <!-- Acciones WooCommerce (Escritorio) -->
            <div class="hidden md:flex items-center gap-5">
                <!-- Carrito Dinámico -->
                <a href="<?php echo function_exists('wc_get_cart_url') ? esc_url(wc_get_cart_url()) : '#'; ?>" 
                   class="text-brand-light hover:text-brand-gold transition-colors duration-300 relative p-1"
                   aria-label="Ver Carrito">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                    <?php if ( function_exists('WC') && WC()->cart && WC()->cart->get_cart_contents_count() > 0 ) : ?>
                        <span class="absolute -top-1 -right-1 bg-brand-gold text-brand-dark text-[10px] font-black w-4 h-4 rounded-full flex items-center justify-center">
                            <?php echo WC()->cart->get_cart_contents_count(); ?>
                        </span>
                    <?php endif; ?>
                </a>

                <!-- Botón Mi Cuenta -->
                <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" 
                   class="bg-brand-gold text-brand-dark text-xs uppercase tracking-wider font-bold px-6 py-2.5 rounded-full hover:bg-white transition-all duration-300 shadow-[0_0_15px_rgba(197,160,89,0.3)]">
                    Mi Cuenta
                </a>
            </div>

            <!-- Acciones Móviles: Carrito + Hamburguesa -->
            <div class="md:hidden flex items-center gap-1">
                <a href="<?php echo function_exists('wc_get_cart_url') ? esc_url(wc_get_cart_url()) : '#'; ?>" 
                   class="text-brand-light hover:text-brand-gold transition-colors duration-300 relative p-2"
                   aria-label="Ver Carrito">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                    <?php if ( function_exists('WC') && WC()->cart && WC()->cart->get_cart_contents_count() > 0 ) : ?>
                        <span class="absolute top-0 right-0 bg-brand-gold text-brand-dark text-[10px] font-black w-4 h-4 rounded-full flex items-center justify-center">
                            <?php echo WC()->cart->get_cart_contents_count(); ?>
                        </span>
                    <?php endif; ?>
                </a>

                <button type="button" id="mobile-menu-toggle"
                        class="text-brand-light hover:text-brand-gold focus:outline-none p-2"
                        aria-label="Abrir Menú" aria-controls="mobile-menu" aria-expanded="false">
                    <svg id="mobile-menu-icon-open" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="mobile-menu-icon-close" class="w-7 h-7 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Menú Móvil Desplegable -->
    <div id="mobile-menu" class="md:hidden hidden border-t border-white/5 bg-brand-dark">
        <nav class="container mx-auto px-4 sm:px-6 py-4 flex flex-col">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="py-3.5 border-b border-white/5 text-base font-medium text-brand-light/90 hover:text-brand-gold transition-colors">Inicio</a>
            <a href="<?php echo esc_url( home_url( '/academia' ) ); ?>" class="py-3.5 border-b border-white/5 text-base font-medium text-brand-light/90 hover:text-brand-gold transition-colors">Academia</a>
            <a href="<?php echo esc_url( home_url( '/tienda' ) ); ?>" class="py-3.5 border-b border-white/5 text-base font-medium text-brand-light/90 hover:text-brand-gold transition-colors">Tienda</a>
            <a href="<?php echo esc_url( home_url( '/nosotros' ) ); ?>" class="py-3.5 border-b border-white/5 text-base font-medium text-brand-light/90 hover:text-brand-gold transition-colors">Nosotros</a>
            <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"
               class="mt-5 inline-flex items-center justify-center bg-brand-gold text-brand-dark text-xs uppercase tracking-wider font-bold px-6 py-3.5 rounded-full transition-all duration-300">
                Mi Cuenta
            </a>
        </nav>
    </div>
</header>

<main class="flex-grow">