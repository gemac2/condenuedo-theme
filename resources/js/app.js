window.addEventListener('load', function () {
    const toggle = document.getElementById('mobile-menu-toggle')
    const menu = document.getElementById('mobile-menu')
    const iconOpen = document.getElementById('mobile-menu-icon-open')
    const iconClose = document.getElementById('mobile-menu-icon-close')

    if (toggle && menu) {
        const setOpen = (open) => {
            menu.classList.toggle('hidden', !open)
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false')
            if (iconOpen) iconOpen.classList.toggle('hidden', open)
            if (iconClose) iconClose.classList.toggle('hidden', !open)
        }

        toggle.addEventListener('click', function (e) {
            e.preventDefault()
            setOpen(menu.classList.contains('hidden'))
        })

        // Cerrar el menú al elegir una opción
        menu.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => setOpen(false))
        })
    }

    // Fallback del boilerplate de TailPress (por si se usa otro header)
    let mainNavigation = document.getElementById('primary-navigation')
    let mainNavigationToggle = document.getElementById('primary-menu-toggle')

    if (mainNavigation && mainNavigationToggle) {
        mainNavigationToggle.addEventListener('click', function (e) {
            e.preventDefault()
            mainNavigation.classList.toggle('hidden')
        })
    }
})
