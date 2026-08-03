<?php

if (is_file(__DIR__.'/vendor/autoload_packages.php')) {
    require_once __DIR__.'/vendor/autoload_packages.php';
}

function tailpress(): TailPress\Framework\Theme
{
    return TailPress\Framework\Theme::instance()
        ->assets(fn($manager) => $manager
            ->withCompiler(new TailPress\Framework\Assets\ViteCompiler, fn($compiler) => $compiler
                ->registerAsset('resources/css/app.css')
                ->registerAsset('resources/js/app.js')
                ->editorStyleFile('resources/css/editor-style.css')
            )
            ->enqueueAssets()
        )
        ->features(fn($manager) => $manager->add(TailPress\Framework\Features\MenuOptions::class))
        ->menus(fn($manager) => $manager->add('primary', __( 'Primary Menu', 'tailpress')))
        ->themeSupport(fn($manager) => $manager->add([
            'title-tag',
            'custom-logo',
            'post-thumbnails',
            'align-wide',
            'wp-block-styles',
            'responsive-embeds',
            'woocommerce', // <-- Añadimos el soporte nativo de WooCommerce aquí
            'html5' => [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ]
        ]));
}

tailpress();

/**
 * Remover los estilos por defecto de WooCommerce para que no choquen 
 * con tus clases de Tailwind CSS en Vite.
 */

add_filter('woocommerce_loop_add_to_cart_link', 'condenuedo_estilo_boton_loop', 10, 2);
function condenuedo_estilo_boton_loop($html, $product) {
    return sprintf(
        '<a href="%s" data-quantity="1" class="%s" data-product_id="%s" data-product_sku="%s">%s</a>',
        esc_url($product->add_to_cart_url()),
        'inline-flex items-center justify-center bg-brand-gold text-brand-dark hover:bg-brand-light font-black text-xs uppercase tracking-widest py-3 px-5 rounded-xl transition-all duration-300 shadow-md',
        esc_attr($product->get_id()),
        esc_attr($product->get_sku()),
        esc_html($product->add_to_cart_text())
    );
}

add_action('wp_head', 'condenuedo_estilos_directos_formulario');
function condenuedo_estilos_directos_formulario() {
    echo '<style>
        /* Convertimos el formulario nativo en un flexbox alineado horizontalmente */
        .dynamic-woo-form form.cart {
            display: flex !important;
            align-items: center !important;
            gap: 1rem !important;
            width: 100% !important;
            margin-top: 1rem !important;
        }

        /* Estilizado del contenedor de cantidad de WooCommerce */
        .dynamic-woo-form form.cart .quantity {
            display: inline-block !important;
            margin: 0 !important;
        }

        /* Estilizado del input numérico nativo */
        .dynamic-woo-form form.cart .quantity input.qty {
            width: 60px !important;
            height: 50px !important;
            background-color: #0f1115 !important;
            color: #f3f4f6 !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            border-radius: 0.75rem !important;
            text-align: center !important;
            font-family: monospace !important;
            font-size: 0.875rem !important;
            outline: none !important;
        }

        /* Enfoque del input de cantidad */
        .dynamic-woo-form form.cart .quantity input.qty:focus {
            border-color: #c5a059 !important;
        }

        /* Ajuste y rediseño del Botón Añadir al Carrito para que se expanda a la par */
        .dynamic-woo-form form.cart .single_add_to_cart_button {
            flex: 1 !important;
            height: 50px !important;
            background-color: #c5a059 !important;
            color: #0f1115 !important;
            font-weight: 900 !important;
            text-transform: uppercase !important;
            letter-spacing: 0.1em !important;
            font-size: 0.75rem !important;
            border-radius: 0.75rem !important;
            border: none !important;
            cursor: pointer !important;
            transition: all 0.3s ease !important;
            margin: 0 !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
        }

        /* Efecto hover del botón */
        .dynamic-woo-form form.cart .single_add_to_cart_button:hover {
            background-color: #f3f4f6 !important;
        }
    </style>';
}