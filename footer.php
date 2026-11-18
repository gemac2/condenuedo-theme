</main> <footer class="w-full bg-brand-dark relative overflow-hidden border-t border-white/5 pt-20 pb-10">
    <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-brand-gold/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            
            <div class="flex flex-col items-start">
                
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-block">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo-condenuedo.png' ); ?>" alt="Logo de Con Denuedo" class="h-24 w-auto object-contain">
                </a>
                
                <p class="text-brand-light/50 text-sm leading-relaxed pr-4 mt-4 mb-6 relative z-10">
                    Primera Escuela en Venezuela para shofaristas. Formando una generación de guerreros desde Barquisimeto.
                </p>
                
                <div class="flex items-center gap-4 relative z-10">
                    <a href="https://facebook.com/condenuedo" target="_blank" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-brand-light hover:border-brand-gold/40 hover:text-brand-gold transition-all">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" /></svg>
                    </a>
                    <a href="https://instagram.com/con_denuedo_" target="_blank" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-brand-light hover:border-brand-gold/40 hover:text-brand-gold transition-all">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" /></svg>
                    </a>
                </div>
            </div>

            <div class="flex flex-col items-start mt-4">
                <h4 class="text-white font-bold text-xs uppercase tracking-[0.2em] mb-6">Plataforma</h4>
                <ul class="space-y-3">
                    <li><a href="<?php echo esc_url( home_url( '/academia' ) ); ?>" class="text-brand-light/50 hover:text-brand-gold transition-colors text-sm">La Academia</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/eventos' ) ); ?>" class="text-brand-light/50 hover:text-brand-gold transition-colors text-sm">Eventos e Invitaciones</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/tienda' ) ); ?>" class="text-brand-light/50 hover:text-brand-gold transition-colors text-sm">Tienda Online</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/nosotros' ) ); ?>" class="text-brand-light/50 hover:text-brand-gold transition-colors text-sm">Nosotros</a></li>
                    <li><a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" class="text-brand-light/50 hover:text-brand-gold transition-colors text-sm">Mi Cuenta</a></li>
                </ul>
            </div>

            <div class="flex flex-col items-start mt-4">
                <h4 class="text-white font-bold text-xs uppercase tracking-[0.2em] mb-6">Ubicación</h4>
                <p class="text-brand-light/50 text-sm leading-relaxed">
                    Iglesia Catedral Cristo Vive.<br>
                    Carrera 19 entre calles 31 y 32, Barquisimeto,<br>
                    Edo. Lara, Venezuela.
                </p>
            </div>

            <div class="flex flex-col items-start mt-4 space-y-4">
                <h4 class="text-white font-bold text-xs uppercase tracking-[0.2em] mb-2">Contacto y Cotizaciones</h4>
                
                <!-- Tarjeta WhatsApp -->
                <a href="https://wa.me/584245197963?text=<?php echo rawurlencode('¡Hola Con Denuedo! Me comunico para cotizar / solicitar información.'); ?>" 
                   target="_blank" 
                   rel="noopener"
                   class="w-full inline-flex items-center gap-3 p-3.5 rounded-xl bg-emerald-500/10 border border-emerald-500/20 hover:border-emerald-500/50 hover:bg-emerald-500/15 transition-all group">
                    <div class="w-9 h-9 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    </div>
                    <div>
                        <span class="text-[10px] text-emerald-400 block uppercase font-bold tracking-widest">WhatsApp Oficial</span>
                        <span class="text-sm font-semibold text-white">+58 424 519 7963</span>
                    </div>
                </a>

                <!-- Tarjeta Correo -->
                <a href="mailto:condenuedo2026@gmail.com" class="w-full inline-block p-3.5 rounded-xl bg-white/5 border border-white/10 hover:border-brand-gold/30 transition-all">
                    <span class="text-[10px] text-brand-light/40 block mb-0.5 uppercase font-bold tracking-widest">Enviar correo a</span>
                    <span class="text-xs text-brand-light font-mono">condenuedo2026@gmail.com</span>
                </a>
            </div>

        </div>

        <div class="pt-8 border-t border-white/5 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="text-brand-light/30 text-[11px] uppercase tracking-widest">
                &copy; <?php echo date_i18n( 'Y' ); ?> CON DENUEDO &bull; Todos los derechos reservados
            </p>
            <div class="flex items-center gap-6 text-[11px] uppercase tracking-widest text-brand-light/30">
                <a href="<?php echo esc_url( home_url( '/academia' ) ); ?>" class="hover:text-brand-gold transition-colors">Academia</a>
                <a href="<?php echo esc_url( home_url( '/eventos' ) ); ?>" class="hover:text-brand-gold transition-colors">Eventos</a>
                <a href="<?php echo esc_url( home_url( '/tienda' ) ); ?>" class="hover:text-brand-gold transition-colors">Tienda</a>
            </div>
        </div>
    </div>
</footer>

<!-- WIDGET FLOTANTE INTERACTIVO DE WHATSAPP -->
<div id="condenuedo-whatsapp-widget" class="fixed bottom-6 right-6 z-50 flex flex-col items-end pointer-events-none">
    
    <!-- Ventana Emergente de Acciones Rápidas (Oculta por defecto) -->
    <div id="whatsapp-popup" class="hidden pointer-events-auto mb-3 w-[300px] sm:w-[340px] bg-[#16181f] border border-brand-gold/30 rounded-2xl shadow-[0_10px_40px_rgba(0,0,0,0.6)] overflow-hidden transition-all duration-300 transform origin-bottom-right">
        
        <!-- Cabecera del Popup -->
        <div class="bg-gradient-to-r from-emerald-600 to-green-600 p-4 text-white flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                </div>
                <div>
                    <h5 class="text-sm font-bold leading-tight">Con Denuedo Shofares</h5>
                    <p class="text-[11px] text-white/80">Atención en línea (+58 424 519 7963)</p>
                </div>
            </div>
            <button id="close-whatsapp-popup" type="button" class="text-white/80 hover:text-white p-1" aria-label="Cerrar">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        <!-- Mensaje de bienvenida -->
        <div class="p-4 bg-[#111217] border-b border-white/5 text-xs text-brand-light/75">
            ¡Paz de Dios! ¿En qué podemos servirte hoy? Selecciona una opción para escribirnos directamente:
        </div>

        <!-- Opciones Rápidas -->
        <div class="p-3 space-y-2">
            <a href="https://wa.me/584245197963?text=<?php echo rawurlencode('¡Hola! Deseo cotizar instrumentos y elementos bíblicos de la tienda.'); ?>" 
               target="_blank" 
               rel="noopener"
               class="flex items-center gap-3 p-2.5 rounded-xl bg-white/5 hover:bg-brand-gold hover:text-brand-dark text-brand-light transition-all text-xs font-semibold">
                <span class="text-base">🎺</span>
                <span>Cotizar Shofares o Instrumentos</span>
            </a>

            <a href="https://wa.me/584245197963?text=<?php echo rawurlencode('¡Hola! Deseo información sobre inscripciones para la Escuela de Shofaristas.'); ?>" 
               target="_blank" 
               rel="noopener"
               class="flex items-center gap-3 p-2.5 rounded-xl bg-white/5 hover:bg-brand-gold hover:text-brand-dark text-brand-light transition-all text-xs font-semibold">
                <span class="text-base">🎓</span>
                <span>Inscripción en la Academia</span>
            </a>

            <a href="https://wa.me/584245197963?text=<?php echo rawurlencode('¡Paz de Dios! Deseo invitar a los Shofaristas de Con Denuedo a tocar en nuestra Iglesia o Evento.'); ?>" 
               target="_blank" 
               rel="noopener"
               class="flex items-center gap-3 p-2.5 rounded-xl bg-white/5 hover:bg-brand-gold hover:text-brand-dark text-brand-light transition-all text-xs font-semibold">
                <span class="text-base">🕊️</span>
                <span>Invitar a tocar el Shofar a mi Iglesia</span>
            </a>

            <a href="https://wa.me/584245197963?text=<?php echo rawurlencode('¡Hola Con Denuedo! Quisiera conversar con un asesor.'); ?>" 
               target="_blank" 
               rel="noopener"
               class="flex items-center justify-center gap-2 p-3 mt-1 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs uppercase tracking-wider transition-all">
                <span>Chatear Directamente</span>
            </a>
        </div>
    </div>

    <!-- Botón Principal Flotante -->
    <button id="toggle-whatsapp-btn" 
            type="button" 
            class="pointer-events-auto relative group flex items-center justify-center w-14 h-14 sm:w-16 sm:h-16 rounded-full bg-emerald-500 text-white shadow-[0_10px_30px_rgba(16,185,129,0.4)] hover:scale-110 active:scale-95 transition-all duration-300 focus:outline-none"
            aria-label="Abrir WhatsApp">
        
        <!-- Anillo pulsante -->
        <span class="absolute -inset-1 rounded-full bg-emerald-400 opacity-40 animate-ping pointer-events-none"></span>

        <!-- Icono WhatsApp -->
        <svg class="w-8 h-8 sm:w-9 sm:h-9 relative z-10" fill="currentColor" viewBox="0 0 24 24">
            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
        </svg>

        <!-- Tooltip lateral en escritorio -->
        <span class="hidden md:block absolute right-full mr-3 px-3 py-1.5 bg-[#13151a] border border-brand-gold/30 text-brand-gold text-[11px] font-bold uppercase tracking-wider rounded-xl whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity shadow-lg pointer-events-none">
            ¿Cotizaciones o Dudas? WhatsApp
        </span>
    </button>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggleBtn = document.getElementById('toggle-whatsapp-btn');
    const popup = document.getElementById('whatsapp-popup');
    const closeBtn = document.getElementById('close-whatsapp-popup');

    if (toggleBtn && popup) {
        toggleBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            popup.classList.toggle('hidden');
        });

        if (closeBtn) {
            closeBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                popup.classList.add('hidden');
            });
        }

        // Cerrar al hacer clic fuera
        document.addEventListener('click', function(e) {
            if (!popup.contains(e.target) && !toggleBtn.contains(e.target)) {
                popup.classList.add('hidden');
            }
        });
    }
});
</script>

<?php wp_footer(); ?>
</body>
</html>
