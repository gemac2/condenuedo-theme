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

<header class="sticky top-0 z-50 w-full border-b border-white/5 bg-brand-dark/80 backdrop-blur-md">
    <div class="container mx-auto">
        <div class="flex items-center justify-between h-20">
            
            <div class="flex-shrink-0">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-block max-w-[240px] md:max-w-[400px]">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/images/logo-removebg.png" 
                        alt="Con Denuedo Logo" 
                        class="h-[90px] md:h-[150px] w-full max-w-full object-contain transition-transform duration-300 hover:scale-105 origin-left block"
                    >
                </a>
            </div>

            <nav class="hidden md:flex items-center gap-8">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-sm font-medium text-brand-light/80 hover:text-brand-gold transition-colors duration-300">Inicio</a>
                <a href="<?php echo esc_url( home_url( '/academia' ) ); ?>" class="text-sm font-medium text-brand-light/80 hover:text-brand-gold transition-colors duration-300">Academia</a>
                <a href="<?php echo esc_url( home_url( '/tienda' ) ); ?>" class="text-sm font-medium text-brand-light/80 hover:text-brand-gold transition-colors duration-300">Tienda</a>
                <a href="<?php echo esc_url( home_url( '/nosotros' ) ); ?>" class="text-sm font-medium text-brand-light/80 hover:text-brand-gold transition-colors duration-300">Nosotros</a>
            </nav>

            <div class="hidden md:flex items-center gap-4">
                <a href="#" class="text-brand-light hover:text-brand-gold transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                </a>
                <a href="/mi-cuenta" class="bg-brand-gold text-brand-dark text-sm font-bold px-6 py-2.5 rounded-full hover:bg-white transition-colors duration-300 shadow-[0_0_15px_rgba(197,160,89,0.3)]">
                    Mi Cuenta
                </a>
            </div>

            <div class="md:hidden flex items-center">
                <button type="button" class="text-brand-light hover:text-brand-gold focus:outline-none">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

        </div>
    </div>
</header>

<main class="flex-grow">