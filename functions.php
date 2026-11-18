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

/**
 * =========================================================================
 * 1. CONFIGURACIÓN GLOBAL DE WHATSAPP Y CONTACTO
 * =========================================================================
 */
if ( ! defined( 'CONDENUEDO_WHATSAPP_NUMBER' ) ) {
    define( 'CONDENUEDO_WHATSAPP_NUMBER', '584245197963' );
}

if ( ! defined( 'CONDENUEDO_CONTACT_EMAIL' ) ) {
    define( 'CONDENUEDO_CONTACT_EMAIL', 'condenuedo2026@gmail.com' );
}

function condenuedo_get_whatsapp_url( $mensaje = '' ) {
    $base = 'https://wa.me/' . CONDENUEDO_WHATSAPP_NUMBER;
    if ( ! empty( $mensaje ) ) {
        return $base . '?text=' . rawurlencode( $mensaje );
    }
    return $base;
}

/**
 * Pasar variables de AJAX y WhatsApp al frontend de forma segura
 */
add_action( 'wp_enqueue_scripts', 'condenuedo_scripts_y_ajax_vars' );
function condenuedo_scripts_y_ajax_vars() {
    wp_localize_script( 'tailpress-app', 'condenuedoData', [
        'ajaxUrl'        => admin_url( 'admin-ajax.php' ),
        'whatsappNumber' => CONDENUEDO_WHATSAPP_NUMBER,
        'homeUrl'        => home_url( '/' ),
    ] );
}

/**
 * =========================================================================
 * 2. REGISTRO DE CUSTOM POST TYPE: EVENTOS
 * =========================================================================
 */
add_action( 'init', 'condenuedo_registrar_cpt_evento' );
function condenuedo_registrar_cpt_evento() {
    $labels = [
        'name'               => _x( 'Eventos', 'post type general name', 'tailpress' ),
        'singular_name'      => _x( 'Evento', 'post type singular name', 'tailpress' ),
        'menu_name'          => _x( 'Eventos', 'admin menu', 'tailpress' ),
        'name_admin_bar'     => _x( 'Evento', 'add new on admin bar', 'tailpress' ),
        'add_new'            => _x( 'Añadir Nuevo', 'evento', 'tailpress' ),
        'add_new_item'       => __( 'Añadir Nuevo Evento / Invitación', 'tailpress' ),
        'new_item'           => __( 'Nuevo Evento', 'tailpress' ),
        'edit_item'          => __( 'Editar Evento', 'tailpress' ),
        'view_item'          => __( 'Ver Evento', 'tailpress' ),
        'all_items'          => __( 'Todos los Eventos', 'tailpress' ),
        'search_items'       => __( 'Buscar Eventos', 'tailpress' ),
        'not_found'          => __( 'No se encontraron eventos.', 'tailpress' ),
        'not_found_in_trash' => __( 'No hay eventos en la papelera.', 'tailpress' )
    ];

    $args = [
        'labels'             => $labels,
        'description'        => __( 'Invitaciones y eventos donde Con Denuedo es invitado a tocar el shofar.', 'tailpress' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => [ 'slug' => 'eventos' ],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-calendar-alt',
        'supports'           => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
        'show_in_rest'       => true,
    ];

    register_post_type( 'evento', $args );
}

/**
 * Meta Boxes para detalles del Evento (Fecha, Lugar, Hora, Tipo)
 */
add_action( 'add_meta_boxes', 'condenuedo_agregar_metaboxes_evento' );
function condenuedo_agregar_metaboxes_evento() {
    add_meta_box(
        'condenuedo_evento_detalles',
        'Detalles del Evento e Invitación',
        'condenuedo_render_metabox_evento',
        'evento',
        'normal',
        'high'
    );
}

function condenuedo_render_metabox_evento( $post ) {
    wp_nonce_field( 'condenuedo_evento_meta_nonce', 'evento_meta_nonce' );
    $fecha  = get_post_meta( $post->ID, '_evento_fecha', true );
    $hora   = get_post_meta( $post->ID, '_evento_hora', true );
    $lugar  = get_post_meta( $post->ID, '_evento_lugar', true );
    $ciudad = get_post_meta( $post->ID, '_evento_ciudad', true );
    $tipo   = get_post_meta( $post->ID, '_evento_tipo', true );
    $estado = get_post_meta( $post->ID, '_evento_estado', true ) ?: 'proximo';
    ?>
    <table class="form-table">
        <tr>
            <th><label for="evento_fecha">Fecha del Evento</label></th>
            <td>
                <input type="text" id="evento_fecha" name="evento_fecha" value="<?php echo esc_attr( $fecha ); ?>" class="regular-text" placeholder="Ej: 15 de Noviembre, 2026">
                <p class="description">Indica la fecha en que se realizará el toque del shofar o la actividad.</p>
            </td>
        </tr>
        <tr>
            <th><label for="evento_hora">Hora</label></th>
            <td>
                <input type="text" id="evento_hora" name="evento_hora" value="<?php echo esc_attr( $hora ); ?>" class="regular-text" placeholder="Ej: 6:00 PM">
            </td>
        </tr>
        <tr>
            <th><label for="evento_lugar">Lugar / Iglesia / Auditorio</label></th>
            <td>
                <input type="text" id="evento_lugar" name="evento_lugar" value="<?php echo esc_attr( $lugar ); ?>" class="regular-text" placeholder="Ej: Catedral Cristo Vive Avivamiento">
            </td>
        </tr>
        <tr>
            <th><label for="evento_ciudad">Ciudad / Estado</label></th>
            <td>
                <input type="text" id="evento_ciudad" name="evento_ciudad" value="<?php echo esc_attr( $ciudad ); ?>" class="regular-text" placeholder="Ej: Barquisimeto, Estado Lara">
            </td>
        </tr>
        <tr>
            <th><label for="evento_tipo">Tipo de Evento</label></th>
            <td>
                <select id="evento_tipo" name="evento_tipo">
                    <option value="Invitación Ministerial" <?php selected( $tipo, 'Invitación Ministerial' ); ?>>Invitación Ministerial</option>
                    <option value="Vigilia de Centinelas" <?php selected( $tipo, 'Vigilia de Centinelas' ); ?>>Vigilia de Centinelas</option>
                    <option value="Congreso Profético" <?php selected( $tipo, 'Congreso Profético' ); ?>>Congreso Profético</option>
                    <option value="Taller de Shofaristas" <?php selected( $tipo, 'Taller de Shofaristas' ); ?>>Taller de Shofaristas</option>
                    <option value="Apertura / Toque Especial" <?php selected( $tipo, 'Apertura / Toque Especial' ); ?>>Apertura / Toque Especial</option>
                </select>
            </td>
        </tr>
        <tr>
            <th><label for="evento_estado">Estado</label></th>
            <td>
                <select id="evento_estado" name="evento_estado">
                    <option value="proximo" <?php selected( $estado, 'proximo' ); ?>>Próximo Evento</option>
                    <option value="realizado" <?php selected( $estado, 'realizado' ); ?>>Evento Realizado</option>
                </select>
            </td>
        </tr>
    </table>
    <?php
}

add_action( 'save_post_evento', 'condenuedo_guardar_meta_evento' );
function condenuedo_guardar_meta_evento( $post_id ) {
    if ( ! isset( $_POST['evento_meta_nonce'] ) || ! wp_verify_nonce( $_POST['evento_meta_nonce'], 'condenuedo_evento_meta_nonce' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    $campos = [ 'evento_fecha', 'evento_hora', 'evento_lugar', 'evento_ciudad', 'evento_tipo', 'evento_estado' ];
    foreach ( $campos as $campo ) {
        if ( isset( $_POST[$campo] ) ) {
            update_post_meta( $post_id, '_' . $campo, sanitize_text_field( $_POST[$campo] ) );
        }
    }
}

/**
 * =========================================================================
 * 3. PROCESAMIENTO AJAX DE FORMULARIOS: INSCRIPCIÓN, COTIZACIONES Y WHATSAPP
 * =========================================================================
 */
add_action( 'wp_ajax_condenuedo_enviar_formulario', 'condenuedo_procesar_formulario_ajax' );
add_action( 'wp_ajax_nopriv_condenuedo_enviar_formulario', 'condenuedo_procesar_formulario_ajax' );

function condenuedo_procesar_formulario_ajax() {
    $action_type = isset( $_POST['form_type'] ) ? sanitize_text_field( $_POST['form_type'] ) : 'inscripcion_academia';
    $nombre      = isset( $_POST['nombre'] ) ? sanitize_text_field( $_POST['nombre'] ) : '';
    $correo      = isset( $_POST['correo'] ) ? sanitize_email( $_POST['correo'] ) : '';
    $telefono    = isset( $_POST['telefono'] ) ? sanitize_text_field( $_POST['telefono'] ) : '';
    $ciudad      = isset( $_POST['ciudad'] ) ? sanitize_text_field( $_POST['ciudad'] ) : '';
    $edad        = isset( $_POST['edad'] ) ? sanitize_text_field( $_POST['edad'] ) : '';
    $modalidad   = isset( $_POST['modalidad'] ) ? sanitize_text_field( $_POST['modalidad'] ) : 'General';
    $instrumento = isset( $_POST['instrumento'] ) ? sanitize_text_field( $_POST['instrumento'] ) : 'No especificado';
    $mensaje_txt = isset( $_POST['mensaje'] ) ? sanitize_textarea_field( $_POST['mensaje'] ) : '';

    if ( empty( $nombre ) || empty( $telefono ) ) {
        wp_send_json_error( [ 'message' => 'Por favor completa al menos tu nombre y número de teléfono.' ] );
    }

    $destinatarios = [ CONDENUEDO_CONTACT_EMAIL ];
    $admin_email   = get_option( 'admin_email' );
    if ( $admin_email && ! in_array( $admin_email, $destinatarios ) ) {
        $destinatarios[] = $admin_email;
    }

    // Configuración según el tipo de formulario
    if ( $action_type === 'inscripcion_academia' ) {
        $asunto = "¡Nueva Inscripción Academia! - " . $nombre;
        
        // Mensaje para WhatsApp
        $whatsapp_text = "¡Hola Con Denuedo! Deseo realizar mi inscripción en la Escuela de Shofaristas:\n\n"
            . "👤 *Nombre:* " . $nombre . "\n"
            . "📧 *Correo:* " . ( $correo ?: 'No indicado' ) . "\n"
            . "📱 *Teléfono:* " . $telefono . "\n"
            . "📍 *Ciudad:* " . ( $ciudad ?: 'No indicada' ) . "\n"
            . "🎂 *Edad:* " . ( $edad ?: 'No indicada' ) . "\n"
            . "📚 *Modalidad de interés:* " . $modalidad . "\n"
            . "🎺 *¿Tiene Shofar?:* " . $instrumento . "\n";
            
        if ( ! empty( $mensaje_txt ) ) {
            $whatsapp_text .= "📝 *Notas:* " . $mensaje_txt . "\n";
        }
        $whatsapp_text .= "\nQuedo a la espera de confirmación y detalles de inicio. ¡Muchas gracias y bendiciones!";

    } elseif ( $action_type === 'invitacion_evento' ) {
        $asunto = "¡Solicitud de Invitación a Evento! - " . $nombre;
        $iglesia = isset( $_POST['iglesia'] ) ? sanitize_text_field( $_POST['iglesia'] ) : '';
        $fecha_evento = isset( $_POST['fecha_evento'] ) ? sanitize_text_field( $_POST['fecha_evento'] ) : '';

        $whatsapp_text = "¡Hola Con Denuedo! Nos gustaría invitarlos a sonar el Shofar en nuestra congregación/evento:\n\n"
            . "👤 *Contacto:* " . $nombre . "\n"
            . "⛪ *Iglesia/Ministerio:* " . $iglesia . "\n"
            . "📍 *Ciudad/Lugar:* " . $ciudad . "\n"
            . "📅 *Fecha Estimada:* " . $fecha_evento . "\n"
            . "📱 *Teléfono:* " . $telefono . "\n"
            . "📧 *Correo:* " . $correo . "\n";
            
        if ( ! empty( $mensaje_txt ) ) {
            $whatsapp_text .= "📝 *Detalles de la invitación:* " . $mensaje_txt . "\n";
        }

    } else {
        // Cotización general
        $servicio = isset( $_POST['servicio'] ) ? sanitize_text_field( $_POST['servicio'] ) : 'Cotización';
        $asunto = "¡Solicitud de Cotización! - " . $nombre;

        $whatsapp_text = "¡Hola Con Denuedo! Me comunico para solicitar una cotización:\n\n"
            . "👤 *Nombre:* " . $nombre . "\n"
            . "📱 *Teléfono:* " . $telefono . "\n"
            . "📧 *Correo:* " . $correo . "\n"
            . "📍 *Ciudad:* " . $ciudad . "\n"
            . "🏷️ *Servicio/Producto:* " . $servicio . "\n";
            
        if ( ! empty( $mensaje_txt ) ) {
            $whatsapp_text .= "📝 *Detalles:* " . $mensaje_txt . "\n";
        }
    }

    // Contenido del Correo Electrónico
    $cuerpo_email = "<h2>" . esc_html( $asunto ) . "</h2>";
    $cuerpo_email .= "<p>Se ha recibido una nueva solicitud desde el sitio web con los siguientes datos:</p>";
    $cuerpo_email .= "<ul>";
    $cuerpo_email .= "<li><strong>Nombre:</strong> " . esc_html( $nombre ) . "</li>";
    $cuerpo_email .= "<li><strong>Teléfono:</strong> " . esc_html( $telefono ) . "</li>";
    $cuerpo_email .= "<li><strong>Correo:</strong> " . esc_html( $correo ) . "</li>";
    $cuerpo_email .= "<li><strong>Ciudad:</strong> " . esc_html( $ciudad ) . "</li>";
    if ( ! empty( $edad ) ) {
        $cuerpo_email .= "<li><strong>Edad:</strong> " . esc_html( $edad ) . "</li>";
    }
    if ( ! empty( $modalidad ) ) {
        $cuerpo_email .= "<li><strong>Modalidad/Servicio:</strong> " . esc_html( $modalidad ) . "</li>";
    }
    if ( ! empty( $instrumento ) ) {
        $cuerpo_email .= "<li><strong>Instrumento Propio:</strong> " . esc_html( $instrumento ) . "</li>";
    }
    if ( ! empty( $mensaje_txt ) ) {
        $cuerpo_email .= "<li><strong>Mensaje/Notas:</strong> " . nl2br( esc_html( $mensaje_txt ) ) . "</li>";
    }
    $cuerpo_email .= "</ul>";
    $cuerpo_email .= "<p><small>Enviado el " . date('d/m/Y H:i') . " desde " . esc_url( home_url() ) . "</small></p>";

    $headers = [ 'Content-Type: text/html; charset=UTF-8' ];
    if ( ! empty( $correo ) ) {
        $headers[] = 'Reply-To: ' . $nombre . ' <' . $correo . '>';
    }

    // Enviar correo (no bloquea si el servidor local no tiene SMTP)
    @wp_mail( $destinatarios, $asunto, $cuerpo_email, $headers );

    // Generar URL directa de WhatsApp
    $whatsapp_url = condenuedo_get_whatsapp_url( $whatsapp_text );

    wp_send_json_success( [
        'message'      => '¡Datos recibidos exitosamente! Serás redirigido a WhatsApp para confirmar tu solicitud.',
        'whatsapp_url' => $whatsapp_url,
    ] );
}