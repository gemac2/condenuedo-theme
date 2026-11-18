<?php
/**
 * Archivo público de eventos. WordPress lo usa para la ruta /eventos/.
 */
get_header();

$whatsapp_eventos = 'https://wa.me/584245197963?text=' . rawurlencode( '¡Paz de Dios! Me gustaría recibir información sobre las actividades e invitaciones de Con Denuedo.' );
$whatsapp_invitacion = 'https://wa.me/584245197963?text=' . rawurlencode( '¡Paz de Dios! Me gustaría invitar al equipo de Con Denuedo a nuestra iglesia o evento.' );
?>

<main class="bg-brand-dark text-brand-light min-h-screen overflow-hidden">
    <section class="relative overflow-hidden border-b border-white/5">
        <div class="absolute inset-0">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/foto-clase.jpeg' ); ?>" alt="" class="w-full h-full object-cover object-center opacity-20">
            <div class="absolute inset-0 bg-gradient-to-r from-brand-dark via-brand-dark/90 to-brand-dark/60"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-6 py-24 sm:py-32">
            <div class="max-w-3xl">
                <span class="inline-block text-brand-gold text-xs font-bold uppercase tracking-[0.25em] mb-5">Con Denuedo · Agenda ministerial</span>
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white leading-tight mb-6">
                    Eventos e <span class="text-brand-gold">invitaciones</span>
                </h1>
                <p class="text-brand-light/75 text-base sm:text-lg leading-relaxed max-w-2xl mb-8">
                    Un espacio para compartir el sonido del shofar, reunirnos en comunidad y conocer las actividades de nuestra escuela.
                </p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="#agenda" class="inline-flex items-center justify-center bg-brand-gold text-brand-dark font-bold text-xs uppercase tracking-widest rounded-xl px-7 py-4 hover:bg-white transition-colors">Explorar la agenda</a>
                    <a href="<?php echo esc_url( $whatsapp_invitacion ); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center border border-white/20 text-white font-bold text-xs uppercase tracking-widest rounded-xl px-7 py-4 hover:border-brand-gold hover:text-brand-gold transition-colors">Invitar al equipo</a>
                </div>
            </div>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-6">
        <section id="agenda" class="scroll-mt-24 py-20 sm:py-24">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-5 border-b border-white/10 pb-7 mb-10">
                <div>
                    <span class="block text-brand-gold text-xs font-bold uppercase tracking-[0.2em] mb-3">Nuestra agenda</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white">Encuentros y actividades</h2>
                </div>
                <p class="text-sm text-brand-light/60 max-w-md">Aquí compartiremos la información de nuestras actividades y participaciones.</p>
            </div>

            <?php if ( have_posts() ) : ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php while ( have_posts() ) : the_post();
                        $evento_id = get_the_ID();
                        $fecha = get_post_meta( $evento_id, '_evento_fecha', true );
                        $hora = get_post_meta( $evento_id, '_evento_hora', true );
                        $lugar = get_post_meta( $evento_id, '_evento_lugar', true );
                        $ciudad = get_post_meta( $evento_id, '_evento_ciudad', true );
                        $tipo = get_post_meta( $evento_id, '_evento_tipo', true );
                        $estado = get_post_meta( $evento_id, '_evento_estado', true );
                        $imagen = get_the_post_thumbnail_url( $evento_id, 'large' ) ?: get_template_directory_uri() . '/images/foto-clase.jpeg';
                        $consulta = 'https://wa.me/584245197963?text=' . rawurlencode( '¡Hola! Quisiera información sobre ' . get_the_title() . '.' );
                        ?>
                        <article class="bg-[#13151a] border border-white/10 rounded-3xl overflow-hidden flex flex-col">
                            <div class="h-56 relative overflow-hidden bg-brand-dark">
                                <img src="<?php echo esc_url( $imagen ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#13151a] to-transparent"></div>
                                <span class="absolute top-4 left-4 bg-brand-dark/90 border border-brand-gold/30 text-brand-gold text-xs font-bold rounded-full px-4 py-2">
                                    <?php echo esc_html( $estado === 'realizado' ? 'Realizado' : 'Próximo' ); ?>
                                </span>
                            </div>
                            <div class="p-6 sm:p-8 flex flex-col flex-1">
                                <?php if ( $tipo ) : ?><p class="text-brand-gold text-xs font-bold uppercase tracking-widest mb-3"><?php echo esc_html( $tipo ); ?></p><?php endif; ?>
                                <h3 class="text-xl font-bold text-white mb-4"><?php the_title(); ?></h3>
                                <p class="text-sm text-brand-light/70 mb-2"><?php echo esc_html( $fecha ?: 'Fecha por confirmar' ); ?><?php if ( $hora ) : ?> · <?php echo esc_html( $hora ); ?><?php endif; ?></p>
                                <?php if ( $lugar || $ciudad ) : ?><p class="text-sm text-brand-light/60 mb-4"><?php echo esc_html( implode( ' · ', array_filter( [ $lugar, $ciudad ] ) ) ); ?></p><?php endif; ?>
                                <div class="text-sm text-brand-light/70 leading-relaxed mb-6"><?php the_excerpt(); ?></div>
                                <a href="<?php echo esc_url( $consulta ); ?>" target="_blank" rel="noopener noreferrer" class="text-brand-gold text-xs font-bold uppercase tracking-wider hover:text-white mt-auto">Consultar por WhatsApp &rarr;</a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
                <div class="mt-10"><?php the_posts_pagination(); ?></div>
            <?php else : ?>
                <div class="grid grid-cols-1 lg:grid-cols-12 overflow-hidden rounded-3xl border border-brand-gold/20 bg-[#13151a]">
                    <div class="lg:col-span-7 p-8 sm:p-12">
                        <span class="inline-flex items-center gap-2 text-brand-gold text-xs font-bold uppercase tracking-widest mb-5">
                            <span class="w-2 h-2 rounded-full bg-brand-gold"></span> Agenda en actualización
                        </span>
                        <h3 class="text-2xl sm:text-3xl font-extrabold text-white mb-4">Pronto compartiremos nuestros próximos encuentros</h3>
                        <p class="text-brand-light/70 leading-relaxed max-w-xl mb-7">
                            Estamos preparando este espacio para publicar fechas, lugares y detalles de nuestras actividades. Mientras tanto, puedes escribirnos para conocer la agenda o invitarnos a tu congregación.
                        </p>
                        <a href="<?php echo esc_url( $whatsapp_eventos ); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center text-brand-gold font-bold text-sm hover:text-white transition-colors">Consultar la agenda por WhatsApp &rarr;</a>
                    </div>
                    <div class="lg:col-span-5 min-h-64 relative overflow-hidden">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/shofar-3.jpeg' ); ?>" alt="Shofar" loading="lazy" class="absolute inset-0 w-full h-full object-cover opacity-70">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#13151a] to-transparent"></div>
                    </div>
                </div>
            <?php endif; ?>
        </section>

        <section class="pb-20 sm:pb-24">
            <div class="max-w-2xl mb-10">
                <span class="block text-brand-gold text-xs font-bold uppercase tracking-[0.2em] mb-3">Compartimos juntos</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-4">Espacios para encontrarnos</h2>
                <p class="text-brand-light/70 leading-relaxed">Estas son algunas de las actividades que pueden formar parte de nuestra agenda. Las fechas y los detalles se publicarán cuando estén disponibles.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <article class="rounded-2xl bg-white/5 border border-white/10 p-8">
                    <span class="text-brand-gold text-sm font-bold">01 / COMUNIDAD</span>
                    <h3 class="text-xl font-bold text-white mt-5 mb-3">Encuentros y vigilias</h3>
                    <p class="text-sm text-brand-light/70 leading-relaxed">Momentos de oración, adoración y encuentro en comunidad alrededor del sonido del shofar.</p>
                </article>
                <article class="rounded-2xl bg-white/5 border border-white/10 p-8">
                    <span class="text-brand-gold text-sm font-bold">02 / FORMACIÓN</span>
                    <h3 class="text-xl font-bold text-white mt-5 mb-3">Talleres de shofar</h3>
                    <p class="text-sm text-brand-light/70 leading-relaxed">Espacios para aprender, compartir conocimientos y crecer en el uso de este instrumento.</p>
                </article>
                <article class="rounded-2xl bg-white/5 border border-white/10 p-8">
                    <span class="text-brand-gold text-sm font-bold">03 / INVITACIONES</span>
                    <h3 class="text-xl font-bold text-white mt-5 mb-3">Congresos y congregaciones</h3>
                    <p class="text-sm text-brand-light/70 leading-relaxed">Participaciones junto a iglesias y ministerios, coordinadas según cada invitación.</p>
                </article>
            </div>
        </section>

        <section class="mb-24 rounded-3xl border border-brand-gold/30 bg-gradient-to-br from-[#1b1a17] to-[#13151a] p-8 sm:p-12 md:p-16">
            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8">
                <div class="max-w-2xl">
                    <span class="block text-brand-gold text-xs font-bold uppercase tracking-[0.2em] mb-3">Invitaciones ministeriales</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-4">¿Quieres invitarnos a tu congregación?</h2>
                    <p class="text-brand-light/70 leading-relaxed">Cuéntanos sobre tu actividad, la ciudad y la fecha que tienes prevista. Nuestro equipo podrá conversar contigo y coordinar los detalles.</p>
                </div>
                <a href="<?php echo esc_url( $whatsapp_invitacion ); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex shrink-0 items-center justify-center bg-emerald-700 hover:bg-emerald-600 text-white font-bold text-xs uppercase tracking-widest rounded-xl px-8 py-4 transition-colors">Solicitar invitación por WhatsApp</a>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
