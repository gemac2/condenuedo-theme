<?php
/**
 * Formulario de Login y Registro Interactivo y Funcional
 * Diseñado con TailPress + Tailwind CSS (Vite)
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
get_header(); ?>

<div class="bg-[#0a0a0a] text-white min-h-screen font-sans selection:bg-[#cda052] selection:text-black py-20 flex flex-col items-center justify-center">
    
    <div class="w-full max-w-md mx-auto px-4">
        
        <!-- Cabecera unificada -->
        <div class="text-center mb-8">
            <span class="text-[#cda052] text-[10px] uppercase font-bold tracking-[0.2em] border border-[#cda052]/20 bg-[#cda052]/5 px-3.5 py-1.5 rounded-full">
                Área de Clientes
            </span>
            <h1 id="account-title" class="text-2xl sm:text-3xl font-black mt-4 tracking-tight uppercase">
                Iniciar <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#cda052] via-[#f3d393] to-[#cda052]">Sesión</span>
            </h1>
        </div>

        <!-- Muestra mensajes de error o éxito nativos de WooCommerce (ej: "Contraseña corta", "Usuario ya existe") -->
        <?php if ( function_exists( 'wc_print_notices' ) ) { wc_print_notices(); } ?>

        <!-- TARJETA DEL FORMULARIO -->
        <div class="bg-[#111111] border border-zinc-900 rounded-3xl p-6 sm:p-8 shadow-2xl relative overflow-hidden">
            
            <!-- VISTA 1: INICIAR SESIÓN -->
            <div id="view-login" class="space-y-5 block">
                <form class="space-y-4" method="post" action="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>">
                    <div>
                        <label for="username" class="block text-[11px] uppercase tracking-wider text-zinc-400 font-semibold mb-1.5">Correo electrónico o Usuario</label>
                        <input type="text" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" class="w-full bg-zinc-950 border border-zinc-800 text-white rounded-xl py-3 px-4 text-sm focus:outline-none focus:border-[#cda052] transition-colors" placeholder="tu@correo.com" required>
                    </div>
                    
                    <div>
                        <div class="flex justify-between items-center mb-1.5">
                            <label for="password" class="block text-[11px] uppercase tracking-wider text-zinc-400 font-semibold">Contraseña</label>
                            <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" class="text-[10px] text-[#cda052] hover:underline font-light">¿La olvidaste?</a>
                        </div>
                        <input type="password" name="password" id="password" autocomplete="current-password" class="w-full bg-zinc-950 border border-zinc-800 text-white rounded-xl py-3 px-4 text-sm focus:outline-none focus:border-[#cda052] transition-colors" placeholder="••••••••" required>
                    </div>

                    <div class="flex items-center pt-1">
                        <input type="checkbox" name="rememberme" id="rememberme" value="forever" class="w-4 h-4 rounded bg-zinc-950 border-zinc-800 text-[#cda052] focus:ring-0 accent-[#cda052]">
                        <label for="rememberme" class="ml-2 text-xs text-zinc-400 font-light select-none">Recordarme en este equipo</label>
                    </div>

                    <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                    <button type="submit" name="login" value="Login" class="w-full bg-[#cda052] text-black font-black text-xs uppercase tracking-widest py-3.5 px-6 rounded-xl hover:bg-[#f3d393] transition-all duration-300 shadow-lg shadow-[#cda052]/5 mt-2">
                        Acceder
                    </button>
                </form>

                <div class="pt-5 mt-2 border-t border-zinc-900 text-center">
                    <p class="text-xs text-zinc-400 font-light">
                        ¿No tienes una cuenta aún? 
                        <button type="button" id="btn-go-register" class="text-[#cda052] hover:underline font-semibold ml-1 focus:outline-none">
                            Regístrate aquí
                        </button>
                    </p>
                </div>
            </div>

            <!-- VISTA 2: CREAR CUENTA -->
            <div id="view-register" class="space-y-5 hidden">
                <form class="space-y-4" method="post" action="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>">
                    
                    <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
                        <div>
                            <label for="reg_username" class="block text-[11px] uppercase tracking-wider text-zinc-400 font-semibold mb-1.5">Nombre de Usuario</label>
                            <input type="text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" class="w-full bg-zinc-950 border border-zinc-800 text-white rounded-xl py-3 px-4 text-sm focus:outline-none focus:border-[#cda052] transition-colors" placeholder="ej. usuario_shofar" required>
                        </div>
                    <?php endif; ?>

                    <div>
                        <label for="reg_email" class="block text-[11px] uppercase tracking-wider text-zinc-400 font-semibold mb-1.5">Dirección de correo electrónico</label>
                        <input type="email" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" class="w-full bg-zinc-950 border border-zinc-800 text-white rounded-xl py-3 px-4 text-sm focus:outline-none focus:border-[#cda052] transition-colors" placeholder="tu@correo.com" required>
                    </div>

                    <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
                        <div>
                            <label for="reg_password" class="block text-[11px] uppercase tracking-wider text-zinc-400 font-semibold mb-1.5">Contraseña</label>
                            <input type="password" name="password" id="reg_password" autocomplete="new-password" class="w-full bg-zinc-950 border border-zinc-800 text-white rounded-xl py-3 px-4 text-sm focus:outline-none focus:border-[#cda052] transition-colors" placeholder="Crea una contraseña segura" required>
                        </div>
                    <?php endif; ?>

                    <p class="text-[10px] text-zinc-500 font-light leading-relaxed pt-1">
                        Tus datos se utilizarán para procesar tu pedido y mejorar tu experiencia según nuestra política de privacidad.
                    </p>

                    <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
                    <button type="submit" name="register" value="Register" class="w-full bg-[#cda052] text-black font-black text-xs uppercase tracking-widest py-3.5 px-6 rounded-xl hover:bg-[#f3d393] transition-all duration-300 shadow-lg shadow-[#cda052]/5 mt-2">
                        Registrarme
                    </button>
                </form>

                <div class="pt-5 mt-2 border-t border-zinc-900 text-center">
                    <p class="text-xs text-zinc-400 font-light">
                        ¿Ya tienes una cuenta? 
                        <button type="button" id="btn-go-login" class="text-[#cda052] hover:underline font-semibold ml-1 focus:outline-none">
                            Inicia sesión
                        </button>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const loginView = document.getElementById('view-login');
    const registerView = document.getElementById('view-register');
    const pageTitle = document.getElementById('account-title');
    
    const btnGoRegister = document.getElementById('btn-go-register');
    const btnGoLogin = document.getElementById('btn-go-login');

    // Mantener la vista correcta si la página recarga debido a un error de validación de WP
    <?php if ( isset( $_POST['register'] ) ) : ?>
        loginView.classList.replace('block', 'hidden');
        registerView.classList.replace('hidden', 'block');
        pageTitle.innerHTML = 'Crear <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#cda052] via-[#f3d393] to-[#cda052]">Cuenta</span>';
    <?php endif; ?>

    btnGoRegister.addEventListener('click', function() {
        loginView.classList.replace('block', 'hidden');
        registerView.classList.replace('hidden', 'block');
        pageTitle.innerHTML = 'Crear <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#cda052] via-[#f3d393] to-[#cda052]">Cuenta</span>';
    });

    btnGoLogin.addEventListener('click', function() {
        registerView.classList.replace('block', 'hidden');
        loginView.classList.replace('hidden', 'block');
        pageTitle.innerHTML = 'Iniciar <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#cda052] via-[#f3d393] to-[#cda052]">Sesión</span>';
    });
});
</script>

<?php get_footer(); ?>