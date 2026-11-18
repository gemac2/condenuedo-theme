<?php
/* Template Name: Eventos */
get_header(); ?>

<main class="w-full bg-brand-dark pt-32 pb-24 min-h-screen relative overflow-hidden">
    <!-- Fondos de iluminación ambiental -->
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-brand-gold/5 rounded-full blur-[150px] pointer-events-none"></div>
    <div class="absolute bottom-1/3 left-0 w-[500px] h-[500px] bg-brand-light/5 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- ENCABEZADO PRINCIPAL -->
        <div class="text-center mb-16 sm:mb-20">
            <span class="inline-flex items-center gap-2 text-brand-gold text-[10px] sm:text-xs uppercase font-bold tracking-[0.25em] border border-brand-gold/30 bg-brand-gold/10 px-4 py-1.5 rounded-full mb-4">
                Agenda Ministerial & Convocatorias
            </span>
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white tracking-tight mb-6">
                Eventos e <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-gold via-yellow-200 to-brand-gold">Invitaciones</span>
            </h1>
            <div class="w-24 h-1 bg-brand-gold mx-auto rounded-full mb-8"></div>
            <p class="text-brand-light/70 text-base sm:text-lg max-w-3xl mx-auto leading-relaxed font-light">
                Conoce las fechas, congresos, vigilias y reuniones donde somos convocados a desatar el sonido del shofar y transformar atmósferas espirituales. Si deseas invitarnos a tu iglesia o ministerio, gestiona tu solicitud directamente aquí.
            </p>
        </div>

        <!-- BANNER DESTACADO: ¿DESEAS INVITARNOS A TU IGLESIA O EVENTO? -->
        <div class="mb-20 bg-gradient-to-br from-[#16181f] via-[#13151a] to-[#0c0d11] border border-brand-gold/30 rounded-3xl p-8 sm:p-12 shadow-[0_0_50px_rgba(197,160,89,0.1)] relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-80 h-80 bg-brand-gold/10 rounded-full blur-[80px] pointer-events-none"></div>
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
                <div class="lg:col-span-8 space-y-4">
                    <div class="inline-flex items-center gap-2 text-brand-gold text-xs font-bold uppercase tracking-wider">
                        <span class="w-2 h-2 rounded-full bg-brand-gold animate-pulse"></span>
                        Invitaciones Ministeriales Abiertas
                    </div>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-white leading-tight">
                        ¿Deseas invitar al equipo de Shofaristas a tu congregación?
                    </h2>
                    <p class="text-brand-light/75 text-sm sm:text-base leading-relaxed font-light max-w-2xl">
                        Acompañamos a pastores, líderes y ministerios en tiempos de apertura profética, vigilias de guerra espiritual, congresos de adoración y aniversarios dentro y fuera del Estado Lara.
                    </p>
                </div>
                <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-4 justify-center">
                    <a href="https://wa.me/584245197963?text=<?php echo rawurlencode('¡Paz de Dios! Deseo solicitar información para invitar a los Shofaristas de Con Denuedo a tocar en nuestra congregación/evento.'); ?>" 
                       target="_blank" 
                       rel="noopener"
                       class="inline-flex items-center justify-center gap-3 px-6 py-4 bg-gradient-to-r from-emerald-600 to-green-500 hover:from-emerald-500 hover:to-green-400 text-white font-bold rounded-2xl shadow-lg transition-all duration-300 hover:scale-[1.02] text-sm uppercase tracking-wider text-center">
                        <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        Invitar por WhatsApp
                    </a>
                    <a href="#solicitar-invitacion" class="inline-flex items-center justify-center gap-2 px-6 py-4 bg-white/5 border border-white/10 hover:border-brand-gold/50 text-white font-semibold rounded-2xl transition-all duration-300 text-sm uppercase tracking-wider text-center">
                        Llenar Ficha de Invitación
                    </a>
                </div>
            </div>
        </div>

        <!-- LISTADO DE EVENTOS DINÁMICOS / CRONOGRAMA -->
        <div class="mb-24">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4 border-b border-white/5 pb-6">
                <div>
                    <h2 class="text-xs font-bold text-brand-gold tracking-[0.2em] uppercase mb-2">Cronograma Oficial</h2>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-white">Próximos Toques de Shofar</h3>
                </div>
                <div class="text-xs text-brand-light/50 flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 inline-block"></span>
                    Actualizado constantemente según agenda pastoral
                </div>
            </div>

            <?php
            $args_eventos = [
                'post_type'      => 'evento',
                'posts_per_page' => 12,
                'post_status'    => 'publish',
            ];
            $query_eventos = new WP_Query( $args_eventos );

            if ( $query_eventos->have_posts() ) : ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php while ( $query_eventos->have_posts() ) : $query_eventos->the_post(); 
                        $fecha  = get_post_meta( get_the_ID(), '_evento_fecha', true ) ?: 'Fecha por confirmar';
                        $hora   = get_post_meta( get_the_ID(), '_evento_hora', true ) ?: 'Hora a convenir';
                        $lugar  = get_post_meta( get_the_ID(), '_evento_lugar', true ) ?: 'Sede Pastoral';
                        $ciudad = get_post_meta( get_the_ID(), '_evento_ciudad', true ) ?: 'Barquisimeto';
                        $tipo   = get_post_meta( get_the_ID(), '_evento_tipo', true ) ?: 'Invitación Ministerial';
                        $estado = get_post_meta( get_the_ID(), '_evento_estado', true ) ?: 'proximo';
                        $img_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                        if ( ! $img_url ) {
                            $img_url = get_template_directory_uri() . '/images/foto-clase.jpeg';
                        }
                    ?>
                        <article class="flex flex-col bg-[#13151a] border border-white/5 rounded-3xl overflow-hidden hover:border-brand-gold/30 transition-all duration-300 group shadow-lg">
                            <div class="relative h-56 bg-black/40 overflow-hidden">
                                <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#13151a] via-[#13151a]/30 to-transparent"></div>
                                <span class="absolute top-4 left-4 bg-brand-dark/90 backdrop-blur-md border border-brand-gold/40 text-brand-gold text-[11px] font-bold uppercase tracking-wider px-3.5 py-1 rounded-full">
                                    <?php echo esc_html( $tipo ); ?>
                                </span>
                                <?php if ( $estado === 'realizado' ) : ?>
                                    <span class="absolute top-4 right-4 bg-zinc-800 text-zinc-300 text-[10px] font-bold uppercase px-3 py-1 rounded-full">
                                        Realizado
                                    </span>
                                <?php else : ?>
                                    <span class="absolute top-4 right-4 bg-emerald-500/90 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full animate-pulse">
                                        Próximo
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="p-6 sm:p-8 flex-1 flex flex-col justify-between space-y-6">
                                <div class="space-y-4">
                                    <div class="flex items-center gap-3 text-xs text-brand-gold font-medium">
                                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                        <span><?php echo esc_html( $fecha ); ?> &bull; <?php echo esc_html( $hora ); ?></span>
                                    </div>
                                    <h4 class="text-xl font-bold text-white group-hover:text-brand-gold transition-colors">
                                        <?php the_title(); ?>
                                    </h4>
                                    <div class="text-xs text-brand-light/60 flex items-start gap-2">
                                        <svg class="w-4 h-4 text-brand-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                        <span><strong><?php echo esc_html( $lugar ); ?></strong> &mdash; <?php echo esc_html( $ciudad ); ?></span>
                                    </div>
                                    <div class="text-xs text-brand-light/70 font-light line-clamp-3 leading-relaxed">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>

                                <div class="pt-4 border-t border-white/5 flex items-center justify-between">
                                    <a href="https://wa.me/584245197963?text=<?php echo rawurlencode('¡Hola! Deseo más información sobre el evento: ' . get_the_title() . ' (' . $fecha . ')'); ?>" 
                                       target="_blank" 
                                       rel="noopener"
                                       class="inline-flex items-center gap-2 text-xs font-bold text-brand-gold hover:text-white transition-colors">
                                        Consultar por WhatsApp
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>

            <?php else : ?>
                <!-- Eventos Destacados de Ejemplo Curado si aún no hay CPT creados en WP-Admin -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    <!-- Tarjeta 1 -->
                    <article class="flex flex-col bg-[#13151a] border border-white/5 rounded-3xl overflow-hidden hover:border-brand-gold/30 transition-all duration-300 group shadow-lg">
                        <div class="relative h-56 bg-black/40 overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/foto-clase.jpeg" alt="Vigilia de Guerra Espiritual" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#13151a] via-[#13151a]/30 to-transparent"></div>
                            <span class="absolute top-4 left-4 bg-brand-dark/90 backdrop-blur-md border border-brand-gold/40 text-brand-gold text-[11px] font-bold uppercase tracking-wider px-3.5 py-1 rounded-full">
                                Vigilia de Centinelas
                            </span>
                            <span class="absolute top-4 right-4 bg-emerald-500/90 text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full animate-pulse">
                                Confirmado
                            </span>
                        </div>
                        <div class="p-6 sm:p-8 flex-1 flex flex-col justify-between space-y-6">
                            <div class="space-y-4">
                                <div class="flex items-center gap-3 text-xs text-brand-gold font-medium">
                                    <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    <span>Viernes de Gloria &bull; 9:00 PM</span>
                                </div>
                                <h4 class="text-xl font-bold text-white group-hover:text-brand-gold transition-colors">
                                    Gran Noche de Rompimiento y Toque de Shofar
                                </h4>
                                <div class="text-xs text-brand-light/60 flex items-start gap-2">
                                    <svg class="w-4 h-4 text-brand-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    <span><strong>Iglesia Catedral Cristo Vive</strong> &mdash; Barquisimeto, Edo. Lara</span>
                                </div>
                                <p class="text-xs text-brand-light/70 font-light leading-relaxed">
                                    Tiempo de intercesión y guerra espiritual convocando a los centinelas de la ciudad para liberar el sonido que quiebra cadenas yugales.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-white/5 flex items-center justify-between">
                                <a href="https://wa.me/584245197963?text=<?php echo rawurlencode('¡Paz de Dios! Deseo información de asistencia para la Gran Noche de Rompimiento en Catedral Cristo Vive.'); ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-xs font-bold text-brand-gold hover:text-white transition-colors">
                                    Más Información vía WhatsApp
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- Tarjeta 2 -->
                    <article class="flex flex-col bg-[#13151a] border border-white/5 rounded-3xl overflow-hidden hover:border-brand-gold/30 transition-all duration-300 group shadow-lg">
                        <div class="relative h-56 bg-black/40 overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/fundadores.jpeg" alt="Congreso de Avivamiento" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#13151a] via-[#13151a]/30 to-transparent"></div>
                            <span class="absolute top-4 left-4 bg-brand-dark/90 backdrop-blur-md border border-brand-gold/40 text-brand-gold text-[11px] font-bold uppercase tracking-wider px-3.5 py-1 rounded-full">
                                Invitación Ministerial
                            </span>
                            <span class="absolute top-4 right-4 bg-brand-gold/90 text-brand-dark text-[10px] font-bold uppercase px-3 py-1 rounded-full">
                                Próxima Fecha
                            </span>
                        </div>
                        <div class="p-6 sm:p-8 flex-1 flex flex-col justify-between space-y-6">
                            <div class="space-y-4">
                                <div class="flex items-center gap-3 text-xs text-brand-gold font-medium">
                                    <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    <span>Convocatoria Especial &bull; 6:30 PM</span>
                                </div>
                                <h4 class="text-xl font-bold text-white group-hover:text-brand-gold transition-colors">
                                    Apertura Profética con Shofares en Congreso de Jóvenes
                                </h4>
                                <div class="text-xs text-brand-light/60 flex items-start gap-2">
                                    <svg class="w-4 h-4 text-brand-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    <span><strong>Iglesia Rayos del Sol Naciente</strong> &mdash; Barquisimeto</span>
                                </div>
                                <p class="text-xs text-brand-light/70 font-light leading-relaxed">
                                    Participación ministerial desatando los toques sagrados de Tekiah y Teruah para marcar el inicio de la jornada apostólica.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-white/5 flex items-center justify-between">
                                <a href="https://wa.me/584245197963?text=<?php echo rawurlencode('¡Paz de Dios! Deseo información sobre la participación de Shofares en el Congreso.'); ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-xs font-bold text-brand-gold hover:text-white transition-colors">
                                    Más Información vía WhatsApp
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- Tarjeta 3 -->
                    <article class="flex flex-col bg-[#13151a] border border-white/5 rounded-3xl overflow-hidden hover:border-brand-gold/30 transition-all duration-300 group shadow-lg">
                        <div class="relative h-56 bg-black/40 overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/shofar-3.jpeg" alt="Taller Regional" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#13151a] via-[#13151a]/30 to-transparent"></div>
                            <span class="absolute top-4 left-4 bg-brand-dark/90 backdrop-blur-md border border-brand-gold/40 text-brand-gold text-[11px] font-bold uppercase tracking-wider px-3.5 py-1 rounded-full">
                                Taller & Impartición
                            </span>
                            <span class="absolute top-4 right-4 bg-brand-gold/90 text-brand-dark text-[10px] font-bold uppercase px-3 py-1 rounded-full">
                                En Planificación
                            </span>
                        </div>
                        <div class="p-6 sm:p-8 flex-1 flex flex-col justify-between space-y-6">
                            <div class="space-y-4">
                                <div class="flex items-center gap-3 text-xs text-brand-gold font-medium">
                                    <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    <span>Jornada Intensiva &bull; Sábado Completo</span>
                                </div>
                                <h4 class="text-xl font-bold text-white group-hover:text-brand-gold transition-colors">
                                    Encuentro Regional de Shofaristas Fuera del Estado
                                </h4>
                                <div class="text-xs text-brand-light/60 flex items-start gap-2">
                                    <svg class="w-4 h-4 text-brand-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    <span><strong>Sede por Asignar</strong> &mdash; Valencia / Yaracuy / Caracas</span>
                                </div>
                                <p class="text-xs text-brand-light/70 font-light leading-relaxed">
                                    Atendiendo a iglesias hermanas que desean entrenar a sus ministros en técnicas acústicas y principios bíblicos de combate en los aires.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-white/5 flex items-center justify-between">
                                <a href="https://wa.me/584245197963?text=<?php echo rawurlencode('¡Hola Con Denuedo! Nos gustaría coordinar un Taller o Encuentro de Shofaristas en nuestra ciudad.'); ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-xs font-bold text-brand-gold hover:text-white transition-colors">
                                    Cotizar Taller para mi Ciudad
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                            </div>
                        </div>
                    </article>

                </div>
            <?php endif; ?>
        </div>

        <!-- FORMULARIO DE SOLICITUD DE INVITACIÓN DIRECTA -->
        <div id="solicitar-invitacion" class="scroll-mt-32 max-w-4xl mx-auto bg-gradient-to-b from-[#16181f] to-[#111217] border border-brand-gold/30 rounded-3xl p-8 sm:p-12 shadow-2xl relative">
            <div class="text-center mb-10">
                <span class="text-brand-gold text-xs font-bold uppercase tracking-widest block mb-2">Formulario Ministerial</span>
                <h3 class="text-2xl sm:text-4xl font-extrabold text-white mb-3">Solicitar Invitación a mi Iglesia</h3>
                <p class="text-brand-light/65 text-sm max-w-xl mx-auto">
                    Completa estos breves datos. Recibiremos tu solicitud al correo y podrás enviarla al WhatsApp <strong class="text-brand-gold font-bold">+58 424 519 7963</strong> en un solo clic.
                </p>
            </div>

            <form id="form-invitacion-evento" class="space-y-6">
                <input type="hidden" name="action" value="condenuedo_enviar_formulario">
                <input type="hidden" name="form_type" value="invitacion_evento">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs uppercase font-bold text-brand-light/80 tracking-wider mb-2">Nombre del Pastor o Contacto *</label>
                        <input type="text" name="nombre" required placeholder="Ej: Pastor Carlos Méndez" class="w-full bg-[#0d0f13] border border-white/10 rounded-xl px-4 py-3.5 text-white placeholder-zinc-500 focus:outline-none focus:border-brand-gold transition-colors text-sm">
                    </div>
                    <div>
                        <label class="block text-xs uppercase font-bold text-brand-light/80 tracking-wider mb-2">Iglesia o Ministerio *</label>
                        <input type="text" name="iglesia" required placeholder="Ej: Iglesia Cristiana El Shadai" class="w-full bg-[#0d0f13] border border-white/10 rounded-xl px-4 py-3.5 text-white placeholder-zinc-500 focus:outline-none focus:border-brand-gold transition-colors text-sm">
                    </div>
                    <div>
                        <label class="block text-xs uppercase font-bold text-brand-light/80 tracking-wider mb-2">Teléfono / WhatsApp *</label>
                        <input type="tel" name="telefono" required placeholder="Ej: +58 412 1234567" class="w-full bg-[#0d0f13] border border-white/10 rounded-xl px-4 py-3.5 text-white placeholder-zinc-500 focus:outline-none focus:border-brand-gold transition-colors text-sm">
                    </div>
                    <div>
                        <label class="block text-xs uppercase font-bold text-brand-light/80 tracking-wider mb-2">Correo Electrónico</label>
                        <input type="email" name="correo" placeholder="correo@ejemplo.com" class="w-full bg-[#0d0f13] border border-white/10 rounded-xl px-4 py-3.5 text-white placeholder-zinc-500 focus:outline-none focus:border-brand-gold transition-colors text-sm">
                    </div>
                    <div>
                        <label class="block text-xs uppercase font-bold text-brand-light/80 tracking-wider mb-2">Ciudad y Estado *</label>
                        <input type="text" name="ciudad" required placeholder="Ej: Barquisimeto, Lara / San Felipe, Yaracuy" class="w-full bg-[#0d0f13] border border-white/10 rounded-xl px-4 py-3.5 text-white placeholder-zinc-500 focus:outline-none focus:border-brand-gold transition-colors text-sm">
                    </div>
                    <div>
                        <label class="block text-xs uppercase font-bold text-brand-light/80 tracking-wider mb-2">Fecha Estimada del Evento</label>
                        <input type="text" name="fecha_evento" placeholder="Ej: Noviembre 2026 / Fin de semana" class="w-full bg-[#0d0f13] border border-white/10 rounded-xl px-4 py-3.5 text-white placeholder-zinc-500 focus:outline-none focus:border-brand-gold transition-colors text-sm">
                    </div>
                </div>

                <div>
                    <label class="block text-xs uppercase font-bold text-brand-light/80 tracking-wider mb-2">Detalles del Evento o Propósito de la Convocatoria</label>
                    <textarea name="mensaje" rows="4" placeholder="Explícanos brevemente qué actividad realizarán (Vigilia, Congreso, Aniversario, Taller) y qué esperan de la participación de los shofaristas..." class="w-full bg-[#0d0f13] border border-white/10 rounded-xl px-4 py-3 text-white placeholder-zinc-500 focus:outline-none focus:border-brand-gold transition-colors text-sm"></textarea>
                </div>

                <div id="invitacion-status" class="hidden p-4 rounded-xl text-sm font-medium"></div>

                <div class="pt-2 text-center">
                    <button type="submit" id="btn-submit-invitacion" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 px-10 py-4 bg-brand-gold hover:bg-white text-brand-dark font-extrabold uppercase tracking-widest text-xs rounded-xl shadow-lg shadow-brand-gold/20 transition-all duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                        Enviar Invitación por Correo y WhatsApp
                    </button>
                </div>
            </form>
        </div>

    </div>
</main>

<!-- SCRIPT DE ENVÍO ASÍNCRONO DEL FORMULARIO DE INVITACIONES -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('form-invitacion-evento');
    if (!form) return;

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const submitBtn = document.getElementById('btn-submit-invitacion');
        const statusBox = document.getElementById('invitacion-status');
        const originalText = submitBtn.innerHTML;

        submitBtn.disabled = true;
        submitBtn.innerHTML = 'Enviando solicitud...';

        const formData = new FormData(form);

        fetch('<?php echo admin_url( 'admin-ajax.php' ); ?>', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                statusBox.className = 'p-4 rounded-xl text-sm font-medium bg-emerald-500/10 border border-emerald-500/30 text-emerald-300 block';
                statusBox.innerHTML = '<strong>¡Solicitud enviada con éxito!</strong> Se ha enviado al correo. Abriendo WhatsApp para confirmar directamente... ' +
                    '<div class="mt-2"><a href="' + data.data.whatsapp_url + '" target="_blank" class="inline-block bg-emerald-600 text-white font-bold px-4 py-2 rounded-lg text-xs hover:bg-emerald-500">Abrir WhatsApp Manualmente</a></div>';
                
                // Abrir WhatsApp automáticamente
                setTimeout(function() {
                    window.open(data.data.whatsapp_url, '_blank');
                }, 800);

                form.reset();
            } else {
                statusBox.className = 'p-4 rounded-xl text-sm font-medium bg-red-500/10 border border-red-500/30 text-red-300 block';
                statusBox.textContent = data.data && data.data.message ? data.data.message : 'Ocurrió un error al enviar. Por favor intenta de nuevo.';
            }
        })
        .catch(err => {
            statusBox.className = 'p-4 rounded-xl text-sm font-medium bg-red-500/10 border border-red-500/30 text-red-300 block';
            statusBox.textContent = 'Error de conexión. Puedes escribirnos directamente al WhatsApp +58 424 519 7963.';
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
        });
    });
});
</script>

<?php get_footer(); ?>
