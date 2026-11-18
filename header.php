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
                        src="<?php echo esc_url( get_template_directory_uri() . '/images/logo-condenuedo.png' ); ?>"
                        alt="<?php bloginfo('name'); ?>" 
                        class="h-12 sm:h-14 md:h-20 w-auto object-contain transition-transform duration-300 hover:scale-105 origin-left block"
                    >
                </a>
            </div>

            <!-- Navegación Principal -->
            <nav class="hidden md:flex items-center gap-7 lg:gap-8">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-sm font-medium text-brand-light/80 hover:text-brand-gold transition-colors duration-300">Inicio</a>
                <a href="<?php echo esc_url( home_url( '/academia' ) ); ?>" class="text-sm font-medium text-brand-light/80 hover:text-brand-gold transition-colors duration-300">Academia</a>
                <a href="<?php echo esc_url( home_url( '/eventos' ) ); ?>" class="text-sm font-medium text-brand-light/80 hover:text-brand-gold transition-colors duration-300 relative group">
                    <span>Eventos</span>
                    <span class="absolute -top-2 -right-3 w-1.5 h-1.5 bg-brand-gold rounded-full group-hover:scale-125 transition-transform"></span>
                </a>
                <a href="<?php echo esc_url( home_url( '/tienda' ) ); ?>" class="text-sm font-medium text-brand-light/80 hover:text-brand-gold transition-colors duration-300">Tienda</a>
                <a href="<?php echo esc_url( home_url( '/nosotros' ) ); ?>" class="text-sm font-medium text-brand-light/80 hover:text-brand-gold transition-colors duration-300">Nosotros</a>
            </nav>

            <!-- Acciones WooCommerce y WhatsApp (Escritorio) -->
            <div class="hidden md:flex items-center gap-4 lg:gap-5">
                <!-- Enlace Directo a WhatsApp -->
                <a href="https://wa.me/584245197963?text=<?php echo rawurlencode('¡Hola Con Denuedo! Deseo información y cotización sobre sus productos y academia.'); ?>" 
                   target="_blank" 
                   rel="noopener"
                   class="inline-flex items-center gap-2 text-xs font-semibold text-emerald-400 hover:text-white bg-emerald-500/10 hover:bg-emerald-600 border border-emerald-500/25 px-3.5 py-2 rounded-full transition-all duration-300"
                   title="Escríbenos por WhatsApp: +58 424 519 7963">
                    <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    <span class="hidden lg:inline">WhatsApp</span>
                </a>

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
                   class="bg-brand-gold text-brand-dark text-xs uppercase tracking-wider font-bold px-5 lg:px-6 py-2.5 rounded-full hover:bg-white transition-all duration-300 shadow-[0_0_15px_rgba(197,160,89,0.3)]">
                    Mi Cuenta
                </a>
            </div>

            <!-- Acciones Móviles: WhatsApp + Carrito + Hamburguesa -->
            <div class="md:hidden flex items-center gap-1">
                <a href="https://wa.me/584245197963?text=<?php echo rawurlencode('¡Hola Con Denuedo! Deseo información y cotización.'); ?>" 
                   target="_blank" 
                   rel="noopener"
                   class="text-emerald-400 hover:text-emerald-300 p-2"
                   aria-label="WhatsApp Directo">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                </a>

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
            <a href="<?php echo esc_url( home_url( '/eventos' ) ); ?>" class="py-3.5 border-b border-white/5 text-base font-medium text-brand-light/90 hover:text-brand-gold transition-colors flex items-center justify-between">
                <span>Eventos e Invitaciones</span>
                <span class="text-[10px] bg-brand-gold/20 text-brand-gold font-bold px-2 py-0.5 rounded-full uppercase">Nuevo</span>
            </a>
            <a href="<?php echo esc_url( home_url( '/tienda' ) ); ?>" class="py-3.5 border-b border-white/5 text-base font-medium text-brand-light/90 hover:text-brand-gold transition-colors">Tienda</a>
            <a href="<?php echo esc_url( home_url( '/nosotros' ) ); ?>" class="py-3.5 border-b border-white/5 text-base font-medium text-brand-light/90 hover:text-brand-gold transition-colors">Nosotros</a>
            
            <a href="https://wa.me/584245197963?text=<?php echo rawurlencode('¡Hola Con Denuedo! Deseo información y cotización.'); ?>"
               target="_blank"
               rel="noopener"
               class="mt-4 flex items-center justify-center gap-2 bg-emerald-600 hover:bg-emerald-500 text-white text-xs uppercase tracking-wider font-bold px-6 py-3.5 rounded-full transition-all duration-300">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                WhatsApp: +58 424 519 7963
            </a>

            <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"
               class="mt-3 inline-flex items-center justify-center bg-brand-gold text-brand-dark text-xs uppercase tracking-wider font-bold px-6 py-3.5 rounded-full transition-all duration-300">
                Mi Cuenta
            </a>
        </nav>
    </div>
</header>

<main class="flex-grow">
