<?php
/**
 * The front page template file.
 *
 * @package TailPress
 */

get_header();
?>

<main class="flex-grow">
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-brand-dark pt-32 pb-20">
        
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full opacity-20 pointer-events-none">
            <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-brand-gold rounded-full blur-[120px]"></div>
            <div class="absolute bottom-[-10%] right-[-10%] w-[30%] h-[30%] bg-brand-gold rounded-full blur-[100px]"></div>
        </div>

        <div class="container relative z-10 mx-auto px-6 text-center">
            <span class="inline-block max-w-[90vw] py-1.5 px-4 mb-8 border border-brand-gold/30 rounded-full bg-brand-gold/10 text-brand-gold text-[9px] sm:text-[10px] font-bold tracking-[0.15em] sm:tracking-[0.25em] uppercase leading-relaxed">
                Academia y Tienda de Shofares y Elementos Bíblicos
            </span>

            <h1 class="text-4xl sm:text-5xl md:text-7xl lg:text-8xl font-extrabold leading-[1.1] mb-10 tracking-tight">
                Despierta el <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-gold via-yellow-200 to-brand-gold">Sonido</span> <br class="hidden sm:block"> de una Nueva Temporada
            </h1>

            <p class="max-w-2xl mx-auto text-lg md:text-xl text-brand-light/60 mb-14 leading-relaxed font-light">
                Aprende el arte milenario del Shofar en nuestra academia y adquiere shofares y elementos bíblicos seleccionados con los más altos estándares de calidad.
            </p>

            <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-center gap-4 sm:gap-6 max-w-md mx-auto sm:max-w-none">
                <a href="<?php echo esc_url( home_url( '/academia' ) ); ?>" class="group relative text-center px-8 sm:px-12 py-4 sm:py-5 bg-brand-gold text-brand-dark text-base sm:text-lg font-bold rounded-full overflow-hidden transition-all duration-300 hover:scale-105 active:scale-95 shadow-[0_10px_30px_rgba(197,160,89,0.3)]">
                    Explorar Academia
                </a>
                <a href="<?php echo esc_url( home_url( '/tienda' ) ); ?>" class="text-center px-8 sm:px-12 py-4 sm:py-5 border border-brand-light/20 text-brand-light text-base sm:text-lg font-bold rounded-full hover:bg-brand-light hover:text-brand-dark transition-all duration-300">
                    Ver Tienda
                </a>
            </div>
        </div>
    </section>
    <section class="py-24 bg-[#13151a] relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                
                <div>
                    <h2 class="text-sm font-bold text-brand-gold tracking-[0.2em] uppercase mb-3">Nuestra Historia</h2>
                    <h3 class="text-4xl md:text-5xl font-extrabold text-brand-light mb-6 leading-tight">
                        De la adoración a la <br>
                        <span class="text-brand-gold">Guerra Espiritual</span>
                    </h3>
                    
                    <div class="space-y-4 text-brand-light/70 text-lg leading-relaxed font-light">
                        <p>
                            Todo comenzó con una transformación personal profunda. Tras años en la música secular, el diseño divino nos guió hacia un instrumento que emitía un sonido capaz de incrustarse en el espíritu: el Shofar.
                        </p>
                        <p>
                            Tras tiempos de ayuno, oración y confirmación profética, fuimos equipados para iniciar este ministerio. Hoy, junto a mi esposa, dirigimos la <strong>Primera Escuela en Venezuela para shofaristas "Guerreros del Shofar"</strong> en Barquisimeto, Estado Lara.
                        </p>
                        <p>
                            Desde 2024, hemos visto generaciones formarse, contando actualmente con nuestra V promoción de guerreros entrenándose bajo la cobertura de la Iglesia Catedral Cristo Vive.
                        </p>
                    </div>

                    <div class="mt-8">
                        <a href="<?php echo esc_url( home_url( '/nosotros' ) ); ?>" class="inline-flex items-center gap-2 text-brand-gold font-bold hover:text-white transition-colors">
                            Leer testimonio completo 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="space-y-6">
                    
                    <div class="bg-brand-dark p-8 border border-white/5 rounded-2xl shadow-2xl relative group hover:border-brand-gold/30 transition-colors duration-500">
                        <div class="absolute top-0 right-0 p-6 opacity-10 group-hover:opacity-20 transition-opacity">
                            <svg class="w-16 h-16 text-brand-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 22h20L12 2zm0 4.5l6.5 13h-13L12 6.5z"/></svg>
                        </div>
                        <h4 class="text-2xl font-bold text-brand-light mb-4 flex items-center gap-3">
                            <span class="w-2 h-8 bg-brand-gold rounded-full"></span>
                            Nuestra Misión
                        </h4>
                        <p class="text-brand-light/70 leading-relaxed relative z-10">
                            Conectar a las personas con experiencias únicas a nivel espiritual a través del taller, para que sea revelada la palabra y cada toque sea impregnado de la voz de Dios.
                        </p>
                    </div>

                    <div class="bg-brand-dark p-8 border border-white/5 rounded-2xl shadow-2xl relative group hover:border-brand-gold/30 transition-colors duration-500">
                        <div class="absolute top-0 right-0 p-6 opacity-10 group-hover:opacity-20 transition-opacity">
                            <svg class="w-16 h-16 text-brand-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 100-16 8 8 0 000 16zm-1-5h2v2h-2v-2zm0-8h2v6h-2V7z"/></svg>
                        </div>
                        <h4 class="text-2xl font-bold text-brand-light mb-4 flex items-center gap-3">
                            <span class="w-2 h-8 bg-brand-gold rounded-full"></span>
                            Nuestra Visión
                        </h4>
                        <p class="text-brand-light/70 leading-relaxed relative z-10">
                            Formar un equipo de guerreros en el uso del shofar en Venezuela, con un impacto que trascienda las fronteras nacionales hacia las naciones.
                        </p>
                    </div>

                </div>
            </div>
            
        </div>
    </section>
    <section class="py-24 bg-brand-dark relative border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-sm font-bold text-brand-gold tracking-[0.2em] uppercase mb-3">La Excelencia</h2>
                <h3 class="text-3xl md:text-5xl font-extrabold text-brand-light">¿Por qué elegirnos?</h3>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white/[0.02] border border-white/10 p-8 rounded-2xl hover:border-brand-gold/30 transition-all group">
                    <div class="w-14 h-14 bg-brand-gold/10 rounded-xl flex items-center justify-center text-brand-gold mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                    </div>
                    <h4 class="text-xl font-bold text-brand-light mb-3">Formación Integral</h4>
                    <p class="text-brand-light/60 text-sm leading-relaxed">No solo enseñamos a ejecutar el instrumento; formamos el carácter espiritual y la técnica necesaria para que cada toque sea un diseño divino.</p>
                </div>
                <div class="bg-white/[0.02] border border-white/10 p-8 rounded-2xl hover:border-brand-gold/30 transition-all group">
                    <div class="w-14 h-14 bg-brand-gold/10 rounded-xl flex items-center justify-center text-brand-gold mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h4 class="text-xl font-bold text-brand-light mb-3">Instrumentos Genuinos</h4>
                    <p class="text-brand-light/60 text-sm leading-relaxed">Nuestra tienda ofrece shofares importados, tratados y probados acústicamente para garantizar un sonido de guerra impecable.</p>
                </div>
                <div class="bg-white/[0.02] border border-white/10 p-8 rounded-2xl hover:border-brand-gold/30 transition-all group">
                    <div class="w-14 h-14 bg-brand-gold/10 rounded-xl flex items-center justify-center text-brand-gold mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21"/></svg>
                    </div>
                    <h4 class="text-xl font-bold text-brand-light mb-3">Cobertura Espiritual</h4>
                    <p class="text-brand-light/60 text-sm leading-relaxed">Nacimos y operamos bajo la cobertura ministerial de la Iglesia Catedral Cristo Vive, asegurando un respaldo apostólico serio.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 4: TESTIMONIOS (Diseño Editorial con Espaciado Corregido) -->
    <section class="py-24 bg-[#13151a] relative overflow-hidden">
        <!-- Efecto de fondo -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[80%] h-[50%] bg-brand-gold/5 rounded-full blur-[150px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            
            <!-- Título y Botones alineados -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
                <div>
                    <h2 class="text-sm font-bold text-brand-gold tracking-[0.2em] uppercase mb-3">Guerreros Formados</h2>
                    <h3 class="text-3xl md:text-5xl font-extrabold text-brand-light">Testimonios de Impacto</h3>
                </div>
                
                <!-- Botones de Navegación del Carrusel -->
                <div class="flex items-center gap-3">
                    <button onclick="slideTestimonios(-1)" class="w-12 h-12 rounded-full border border-white/10 bg-white/5 flex items-center justify-center text-brand-light hover:bg-brand-gold hover:text-brand-dark hover:border-brand-gold transition-all duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                    </button>
                    <button onclick="slideTestimonios(1)" class="w-12 h-12 rounded-full border border-white/10 bg-white/5 flex items-center justify-center text-brand-light hover:bg-brand-gold hover:text-brand-dark hover:border-brand-gold transition-all duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>

            <!-- Contenedor del Carrusel -->
            <div id="testimonio-slider" class="flex overflow-x-auto snap-x snap-mandatory no-scrollbar gap-6 pb-8 scroll-smooth">
                
                <!-- Tarjeta 1: Yessica Bonilla -->
                <div class="snap-center shrink-0 w-[85vw] md:w-[450px] h-[580px] sm:h-[640px] md:h-[650px] flex flex-col bg-brand-dark p-6 sm:p-8 rounded-3xl border border-white/5 relative group hover:border-brand-gold/30 transition-colors">
                    <!-- Encabezado con gap-8 para mayor separación -->
                    <div class="flex items-center gap-4 sm:gap-8 mb-6 pb-6 border-b border-white/10 relative">
                        <div class="w-24 h-32 sm:w-32 sm:h-40 md:w-36 md:h-48 rounded-2xl bg-[#13151a] border border-brand-gold/30 overflow-hidden flex-shrink-0 shadow-[0_0_20px_rgba(197,160,89,0.1)] relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/foto-yessica.jpeg" alt="Yessica Bonilla" class="w-full h-full object-cover object-top opacity-90 group-hover:opacity-100 transition-opacity">
                        </div>
                        <div class="flex-1 pr-4">
                            <h5 class="text-white font-extrabold text-xl mb-1">Yessica Bonilla</h5>
                            <span class="text-brand-gold text-sm font-medium">Shofarista Certificada</span>
                        </div>
                        <svg class="w-8 h-8 text-brand-gold/10 absolute top-0 right-0 group-hover:text-brand-gold/20 transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    </div>
                    <!-- Texto del Testimonio -->
                    <div class="flex-grow overflow-y-auto pr-3 custom-scrollbar">
                        <p class="text-brand-light/80 italic text-[15px] leading-relaxed">
                            "Pertenezco a la congregación Iglesia Apostólica y Profética Rayos del Sol Naciente. El nacimiento de mi pasión por el Shofar surgió en la Iglesia Catedral Cristo Vive al escuchar al líder Iván Mujica sonar el Shofar, eso hizo despertar en mi espíritu un hambre espiritual por prepararme en esa área. Fue un proceso de aproximadamente dos meses de mucha enseñanza, experiencias únicas y sobre todo mucho renunciar para poder permitirle a Dios hablar a través de mi Shofar. Hoy en día, puedo decir que mi formación como guerrera creció aún más con el instrumento ya que es un arma de guerra muy poderoso."
                        </p>
                    </div>
                </div>

                <!-- Tarjeta 2: Luis Rivas -->
                <div class="snap-center shrink-0 w-[85vw] md:w-[450px] h-[580px] sm:h-[640px] md:h-[650px] flex flex-col bg-brand-dark p-6 sm:p-8 rounded-3xl border border-white/5 relative group hover:border-brand-gold/30 transition-colors">
                    <div class="flex items-center gap-4 sm:gap-8 mb-6 pb-6 border-b border-white/10 relative">
                        <div class="w-24 h-32 sm:w-32 sm:h-40 md:w-36 md:h-48 rounded-2xl bg-[#13151a] border border-brand-gold/30 overflow-hidden flex-shrink-0 shadow-[0_0_20px_rgba(197,160,89,0.1)] relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/foto-luis.jpeg" alt="Luis Rivas" class="w-full h-full object-cover object-center opacity-90 group-hover:opacity-100 transition-opacity">
                        </div>
                        <div class="flex-1 pr-4">
                            <h5 class="text-white font-extrabold text-xl mb-1">Luis Rivas</h5>
                            <span class="text-brand-gold text-sm font-medium">Egresado de la Academia</span>
                        </div>
                        <svg class="w-8 h-8 text-brand-gold/10 absolute top-0 right-0 group-hover:text-brand-gold/20 transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    </div>
                    <div class="flex-grow overflow-y-auto pr-3 custom-scrollbar">
                        <p class="text-brand-light/80 italic text-[15px] leading-relaxed">
                            "Mi pasión por el shofar comenzó desde que supe la existence del instrumento, pero me dijeron que yo no lo podía tocar porque solo era para pastores y me desanimé. Luego fui a Catedral Cristo Vive Avivamiento por una invitación y vi a un hermano tocando el shofar. Le pregunté y me dijo 'aquí está el instructor del shofar'. En ese momento conocí al instructor Iván Mujica, comenzó las clases en su Primera escuela para shofaristas y aprendí a tocarlo. Gracias a DIOS pude comprar mi instrumento y estoy agradecido con el instructor Iván que me enseñó."
                        </p>
                    </div>
                </div>

                <!-- Tarjeta 3: Emmanuel Navas -->
                <div class="snap-center shrink-0 w-[85vw] md:w-[450px] h-[580px] sm:h-[640px] md:h-[650px] flex flex-col bg-brand-dark p-6 sm:p-8 rounded-3xl border border-white/5 relative group hover:border-brand-gold/30 transition-colors">
                    <div class="flex items-center gap-4 sm:gap-8 mb-6 pb-6 border-b border-white/10 relative">
                        <div class="w-24 h-32 sm:w-32 sm:h-40 md:w-36 md:h-48 rounded-2xl bg-[#13151a] border border-brand-gold/30 overflow-hidden flex-shrink-0 shadow-[0_0_20px_rgba(197,160,89,0.1)] relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/foto-emmanuel.jpeg" alt="Emmanuel Navas" class="w-full h-full object-cover object-center opacity-90 group-hover:opacity-100 transition-opacity">
                        </div>
                        <div class="flex-1 pr-4">
                            <h5 class="text-white font-extrabold text-xl mb-1">Emmanuel Navas</h5>
                            <span class="text-brand-gold text-sm font-medium">Centinela y Shofarista</span>
                        </div>
                        <svg class="w-8 h-8 text-brand-gold/10 absolute top-0 right-0 group-hover:text-brand-gold/20 transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    </div>
                    <div class="flex-grow overflow-y-auto pr-3 custom-scrollbar">
                        <p class="text-brand-light/80 italic text-[15px] leading-relaxed">
                            "Hace aproximadamente 9 años escuché un sonido que retumbó en mis oídos llamado TEKIA, marcó cada fibra de mi corazón. Comencé a entrenarme y capacitarme como un Guerrero bajo el liderazgo de Iván Mujica, representando una experiencia muy bonita y curiosa porque observé que de un cuerno se pueden ejecutar sonidos que no solo convocan, sino que también se puede golpear al mundo de las tinieblas. Hoy en día, El Señor me ha permitido ver cómo cadenas se rompen y ver presencia del Espíritu Santo descender mientras ejecutamos el sonido. No simplemente soy un espectador, Soy un Centinela, un Guerrero, un Shofarista."
                        </p>
                    </div>
                </div>

                <!-- Tarjeta 4: Angel Arroyo Briceño -->
                <div class="snap-center shrink-0 w-[85vw] md:w-[450px] h-[580px] sm:h-[640px] md:h-[650px] flex flex-col bg-brand-dark p-6 sm:p-8 rounded-3xl border border-white/5 relative group hover:border-brand-gold/30 transition-colors">
                    <div class="flex items-center gap-4 sm:gap-8 mb-6 pb-6 border-b border-white/10 relative">
                        <div class="w-24 h-32 sm:w-32 sm:h-40 md:w-36 md:h-48 rounded-2xl bg-[#13151a] border border-brand-gold/30 overflow-hidden flex-shrink-0 shadow-[0_0_20px_rgba(197,160,89,0.1)] relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/foto-angel.jpeg" alt="Angel Arroyo Briceño" class="w-full h-full object-cover object-center opacity-90 group-hover:opacity-100 transition-opacity">
                        </div>
                        <div class="flex-1 pr-4">
                            <h5 class="text-white font-extrabold text-xl mb-1">Angel Arroyo Briceño</h5>
                            <span class="text-brand-gold text-sm font-medium">Guerrero Shofarista</span>
                        </div>
                        <svg class="w-8 h-8 text-brand-gold/10 absolute top-0 right-0 group-hover:text-brand-gold/20 transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    </div>
                    <div class="flex-grow overflow-y-auto pr-3 custom-scrollbar">
                        <p class="text-brand-light/80 italic text-[15px] leading-relaxed">
                            "Llegó el hermano Iván Mujica a tocar el shofar, lo escuché y me llamó la atención ya que yo venía del ejército de tocar la trompeta. Él me dijo que ese instrumento no era solo tocarlo sino que era un sonido que El Señor revelaba. Fue así como comencé a llenarme del conocimiento sobre lo referente al shofar. He caminado bajo la dirección de Dios sirviéndole para alabar pero también para romper los aires y derribar todo plan del enemigo. He tenido grandes luchas ya que no es nada fácil guerrear en contra de las tinieblas a través de este instrumento pero he tenido el respaldo de mi líder y principalmente de Dios."
                        </p>
                    </div>
                </div>

                <!-- Tarjeta 5: Karlines Jiménez -->
                <div class="snap-center shrink-0 w-[85vw] md:w-[450px] h-[580px] sm:h-[640px] md:h-[650px] flex flex-col bg-brand-dark p-6 sm:p-8 rounded-3xl border border-white/5 relative group hover:border-brand-gold/30 transition-colors">
                    <div class="flex items-center gap-4 sm:gap-8 mb-6 pb-6 border-b border-white/10 relative">
                        <div class="w-24 h-32 sm:w-32 sm:h-40 md:w-36 md:h-48 rounded-2xl bg-[#13151a] border border-brand-gold/30 overflow-hidden flex-shrink-0 shadow-[0_0_20px_rgba(197,160,89,0.1)] relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/foto-karlines.jpeg" alt="Karlines Jiménez" class="w-full h-full object-cover object-center opacity-90 group-hover:opacity-100 transition-opacity">
                        </div>
                        <div class="flex-1 pr-4">
                            <h5 class="text-white font-extrabold text-xl mb-1">Karlines Jiménez</h5>
                            <span class="text-brand-gold text-sm font-medium">Voz Profética y Shofarista</span>
                        </div>
                        <svg class="w-8 h-8 text-brand-gold/10 absolute top-0 right-0 group-hover:text-brand-gold/20 transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    </div>
                    <div class="flex-grow overflow-y-auto pr-3 custom-scrollbar">
                        <p class="text-brand-light/80 italic text-[15px] leading-relaxed">
                            "Aprender a tocar el shofar con nuestro líder Iván Mujica, ha sido una de las experiencias más hermosas y profundas de mi vida espiritual. No lo veo como un simple instrumento musical, sino como una voz profética que Dios ha puesto en mis manos. He entendido que cada nota tiene el poder divino para limpiar la atmósfera, derribar fortalezas y despejar los aires de cualquier opresión demoníaca. Tocarlo es activar una alarma espiritual que le recuerda al enemigo que la victoria es del Señor, tal como vemos en Jueces 7:22 cuando los muros cayeron o en el Salmo 47:5. Mi corazón se siente orgulloso por haber aprendido a tocarlo."
                        </p>
                    </div>
                </div>

                <!-- Tarjeta 6: Zuleima Urrego -->
                <div class="snap-center shrink-0 w-[85vw] md:w-[450px] h-[580px] sm:h-[640px] md:h-[650px] flex flex-col bg-brand-dark p-6 sm:p-8 rounded-3xl border border-white/5 relative group hover:border-brand-gold/30 transition-colors">
                    <div class="flex items-center gap-4 sm:gap-8 mb-6 pb-6 border-b border-white/10 relative">
                        <div class="w-24 h-32 sm:w-32 sm:h-40 md:w-36 md:h-48 rounded-2xl bg-[#13151a] border border-brand-gold/30 overflow-hidden flex-shrink-0 shadow-[0_0_20px_rgba(197,160,89,0.1)] relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/foto-zuleima.jpeg" alt="Zuleima Urrego" class="w-full h-full object-cover object-center opacity-90 group-hover:opacity-100 transition-opacity">
                        </div>
                        <div class="flex-1 pr-4">
                            <h5 class="text-white font-extrabold text-xl mb-1">Zuleima Urrego</h5>
                            <span class="text-brand-gold text-sm font-medium">Pastora / Shofarista</span>
                        </div>
                        <svg class="w-8 h-8 text-brand-gold/10 absolute top-0 right-0 group-hover:text-brand-gold/20 transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    </div>
                    <div class="flex-grow overflow-y-auto pr-3 custom-scrollbar">
                        <p class="text-brand-light/80 italic text-[15px] leading-relaxed">
                            "Siendo profeta y asistiendo a la iglesia Catedral Cristo vive Avivamiento, a un servicio de pastores, por primera vez escuché el sonido de un shofar y como profeta me llamó la atención y me gustó mucho el sonido, de allí sentí que me gustó el instrumento y tuve un profeta que me prestó brevemente el shofar y vi como Dios obraba a través del instrumento. Al ver su trabajo y el de su equipo de shofaristas sabía que era mi oportunidad para aprender. Así que decidí entrar a la Primera escuela para shofaristas "Guerreros del shofar" dirigida por Iván Mujica. Al principio me costó mucho pero con su instrucción y su enseñanza pude tocar el instrumento. Actualmente estoy esperando adquirir mi propio shofar para poner en práctica lo que aprendí con este lider shofarista. Estoy agradecida con Dios de haber podido aprender y de ser una guerrera shofarista"
                        </p>
                    </div>
                </div>

                <!-- Tarjeta 7: Jhorman Torres -->
                <div class="snap-center shrink-0 w-[85vw] md:w-[450px] h-[580px] sm:h-[640px] md:h-[650px] flex flex-col bg-brand-dark p-6 sm:p-8 rounded-3xl border border-white/5 relative group hover:border-brand-gold/30 transition-colors">
                    <div class="flex items-center gap-4 sm:gap-8 mb-6 pb-6 border-b border-white/10 relative">
                        <div class="w-24 h-32 sm:w-32 sm:h-40 md:w-36 md:h-48 rounded-2xl bg-[#13151a] border border-brand-gold/30 overflow-hidden flex-shrink-0 shadow-[0_0_20px_rgba(197,160,89,0.1)] relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/jhorman.png" alt="Jhorman Torres" class="w-full h-full object-cover object-center opacity-90 group-hover:opacity-100 transition-opacity">
                        </div>
                        <div class="flex-1 pr-4">
                            <h5 class="text-white font-extrabold text-xl mb-1">Jhorman Torres</h5>
                            <span class="text-brand-gold text-sm font-medium">Guerrero / Shofarista</span>
                        </div>
                        <svg class="w-8 h-8 text-brand-gold/10 absolute top-0 right-0 group-hover:text-brand-gold/20 transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    </div>
                    <div class="flex-grow overflow-y-auto pr-3 custom-scrollbar">
                        <p class="text-brand-light/80 italic text-[15px] leading-relaxed">
                            "Mi pasión por el shofar nace cuando llega un shofar por primera vez a mi iglesia, Catedral Cristo vive Avivamiento, al ver el instrumento no muy común entre los demás pero con un sonido hermoso, y es en ese momento cuando comienzo a investigar y me apasioné por el instrumento y el impacto que causa en el ámbito espiritual. La experiencia vivida en la preparación ya que me formé en la Primera escuela para shofaristas "Guerreros del shofar", con el instructor Iván Mujica, fue conocer los diferentes alertas y sonidos y aprender que tenían diferentes nombres. Fue un momento muy agradable ya que cada sonido tenía un contacto con la presencia de Dios, la experiencia ha sido muy bonita ya que al ministrar la presencia del Señor a través de cada sonido y como centinela, nuestro deber es estar apercibido en qué atmósfera es la que se está manifestando y así realizar el respectivo sonido a la congregación y avisar a nuestras autoridades."
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <script>
            function slideTestimonios(direction) {
                const slider = document.getElementById('testimonio-slider');
                const scrollAmount = window.innerWidth > 768 ? 474 : window.innerWidth * 0.85; 
                slider.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
            }
        </script>
    </section>

    <section class="py-24 bg-brand-dark relative border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                
                <div>
                    <h2 class="text-sm font-bold text-brand-gold tracking-[0.2em] uppercase mb-3">Dirección de la Academia</h2>
                    <h3 class="text-3xl md:text-4xl font-extrabold text-brand-light mb-6">Equipando a la próxima generación</h3>
                    <p class="text-brand-light/70 mb-8 leading-relaxed">
                        Somos una familia apasionada por el diseño de Dios. Como instructor principal y administrador, junto a mi esposa, hemos asumido el llamado de levantar la primera institución de este tipo en Venezuela. Nuestro compromiso es entregar impartición real en cada lección y excelencia en cada instrumento que llega a tus manos.
                    </p>
                    <div class="w-full h-64 bg-white/5 border border-white/10 rounded-2xl flex items-center justify-center overflow-hidden relative group">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/images/fundadores.jpeg" 
                            alt="Fundadores de Con Denuedo" 
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        >
                    </div>
                </div>

                <div class="bg-[#13151a] p-8 md:p-10 rounded-3xl border border-brand-gold/20 shadow-[0_0_40px_rgba(197,160,89,0.05)] relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-brand-gold/10 blur-[50px] pointer-events-none"></div>
                    
                    <h3 class="text-2xl font-bold text-white mb-2">Únete a nuestras filas</h3>
                    <p class="text-brand-light/50 text-sm mb-8">Déjanos tus datos para recibir información sobre las inscripciones a la próxima promoción o catálogos de la tienda.</p>
                    
                    <div class="relative z-10">
                        <?php echo do_shortcode('[contact-form-7 id="80905e1" title="Formulario Portada"]'); ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
