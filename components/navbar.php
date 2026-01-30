<header>
    <!-- Styles específicos para el dropdown 'Servicios' (responsive, transition 0.3s) -->
    <style>
        /* Contenedor del dropdown */
        .nav-dropdown-wrapper {
            position: relative;
            display: inline-block;
            margin-left: 1rem;
            margin-right: 1.5rem;
        }

        .nav-dropdown-toggle {
            color: inherit;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        /* Flecha más cerca del texto */
        .nav-caret {
            font-size: 0.8em;
            margin-left: 2px;
            transition: transform .3s ease;
        }

        /* Menú desplegable */
        .nav-dropdown-menu {
            position: absolute;
            top: calc(100% + 8px);
            left: 0;
            background: #ffffff;
            color: #222;
            min-width: 200px;
            padding: 0.4rem 0;
            border-radius: 6px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, .08);
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: opacity .3s ease, transform .3s ease, visibility .3s;
            z-index: 9999;
            list-style: none;
            margin: 0;
        }

        .nav-dropdown-item a {
            display: block;
            padding: .6rem 1rem;
            color: #222;
            text-decoration: none;
            transition: background .2s, color .2s;
        }

        .nav-dropdown-item a:hover {
            background: #f5f5f5;
            color: #000;
        }

        /* Estado abierto */
        .nav-dropdown-wrapper.open .nav-dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .nav-dropdown-wrapper.open .nav-caret {
            transform: rotate(180deg);
        }

        /* Hover para desktop (pantallas grandes) */
        @media (hover: hover) and (min-width:769px) {
            .nav-dropdown-wrapper:hover .nav-dropdown-menu {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
            }

            .nav-dropdown-wrapper:hover .nav-caret {
                transform: rotate(180deg);
            }
        }

        /* Mobile / tablet: menú vertical, expandible por clic */
        @media (max-width:768px) {
            .nav-dropdown-wrapper {
                display: block;
                width: 100%;
            }

            .nav-dropdown-toggle {
                display: flex;
                justify-content: space-between;
                padding: .6rem 0;
                width: 100%;
                color: inherit;
            }

            .nav-dropdown-menu {
                position: static;
                transform: none;
                opacity: 1;
                visibility: visible;
                max-height: 0;
                overflow: hidden;
                transition: max-height .3s ease;
                background: transparent;
                box-shadow: none;
                padding: 0;
            }

            .nav-dropdown-wrapper:not(.open) .nav-dropdown-menu {
                max-height: 0;
            }

            .nav-dropdown-wrapper.open .nav-dropdown-menu {
                max-height: 500px;
                background: #ffffff;
                padding: .4rem 0;
                border-radius: 6px;
                box-shadow: 0 6px 18px rgba(0, 0, 0, .08);
            }

            .nav-dropdown-item a {
                padding: .8rem 1rem;
            }
        }

        /* Mantener consistencia visual con header oscuro */
        .nav-dropdown-toggle,
        .pg {
            color: #122;
        }

        /* ----------------------------
               Navbar responsive custom
               Prefixed classes: navbar-
               ---------------------------- */
        /* Hamburger button (hidden on desktop) */
        .navbar-toggle-button {
            display: none;
            width: 40px;
            height: 40px;
            border: none;
            background: transparent;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            padding: 0;
        }

        .navbar-toggle-button:focus {
            outline: none;
        }

        .navbar-toggle-line {
            display: block;
            width: 22px;
            height: 2px;
            background: #34556F;
            margin: 3px 0;
            transition: transform .3s ease, opacity .2s ease;
        }

        .navbar-toggle-button.open .navbar-toggle-line:nth-child(1) {
            transform: translateY(5px) rotate(45deg);
        }

        .navbar-toggle-button.open .navbar-toggle-line:nth-child(2) {
            opacity: 0;
        }

        .navbar-toggle-button.open .navbar-toggle-line:nth-child(3) {
            transform: translateY(-5px) rotate(-45deg);
        }

        /* Mobile menu overlay (hidden on desktop) */
        .navbar-mobile-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.98);
            z-index: 9998;
            transform: translateY(-100%);
            transition: transform .32s ease;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
        }

        .navbar-mobile-overlay.open {
            transform: translateY(0);
        }

        .navbar-mobile-content {
            max-width: 960px;
            margin: 0 auto;
            padding: 1rem 1rem 2rem 1rem;
        }

        .navbar-mobile-menu-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .navbar-mobile-item {
            padding: 14px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.06);
        }

        .navbar-mobile-item a {
            color: #122;
            text-decoration: none;
            font-size: 16px;
            display: block;
        }

        .navbar-mobile-services-toggle {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 8px;
        }

        .navbar-mobile-caret {
            color: #34556F;
            transition: transform .25s ease;
        }

        .navbar-mobile-caret.open {
            transform: rotate(180deg);
        }

        .navbar-mobile-submenu {
            list-style: none;
            padding: 0;
            margin: 0;
            max-height: 0;
            overflow: hidden;
            transition: max-height .28s ease;
        }

        .navbar-mobile-submenu.open {
            max-height: 400px;
        }

        .navbar-mobile-submenu .navbar-mobile-subitem a {
            padding-left: 18px;
            display: block;
            padding: 10px 0;
            background: rgba(52, 85, 111, 0.03);
        }

        /* show hamburger on small screens */
        @media (max-width:768px) {
            .navbar-toggle-button {
                display: flex;
            }

            /* hide desktop inline nav links from flow on mobile to avoid duplication; we keep their markup but they won't be visible here */
            .col-md-7 {
                display: none;
            }

            .col-md-2 {
                width: auto;
            }

            .col-md-3 {
                display: flex;
                align-items: center;
                gap: 8px;
                justify-content: flex-end;
            }
        }

        /* keep desktop behavior intact */
        @media (min-width:769px) {
            .navbar-mobile-overlay {
                display: none;
            }
        }

        /* Asegurar que la barra de páginas tenga los elementos alineados correctamente en móvil */
        @media (max-width: 768px) {

            /* Contenedor principal de la barra de navegación */
            .paginas .container .row {
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin: 0;
                padding: 10px 15px;
            }

            /* Logo - Izquierda */
            .paginas .col-md-2 {
                width: auto;
                flex: 0 0 auto;
                padding: 0;
                display: flex;
                align-items: center;
            }

            .icoProimpeq {
                max-height: 67px;
                width: auto;
                margin: 0 !important;
            }

            /* Ocultar links de navegación desktop en móvil */
            .paginas .col-md-7 {
                display: none !important;
            }

            /* Contenedor derecho - Botón Emergencias + Hamburguesa */
            .paginas .col-md-3 {
                width: auto;
                flex: 0 0 auto;
                padding: 0;
                display: flex !important;
                align-items: center;
                gap: 12px;
                justify-content: flex-end;
            }

            /* Botón Emergencias 24H - Más compacto en móvil */
            .paginas .col-md-3 .btn {
                padding: 8px 16px !important;
                font-size: 14px;
                white-space: nowrap;
                background-color: #34556F;
                color: white;
                border: none;
                border-radius: 6px;
                text-decoration: none;
                display: inline-block;
            }

            /* Botón hamburguesa */
            .navbar-toggle-button {
                display: flex !important;
                width: 40px;
                height: 40px;
                flex-shrink: 0;
            }

            /* Asegurar que la barra superior también se vea bien */
            .contactos .container .row {
                padding: 8px 15px;
            }

            .numeroycorreo {
                font-size: 13px;
                display: flex;
                flex-wrap: wrap;
                gap: 8px;
                align-items: center;
            }

            .numeroycorreo span {
                display: inline-flex;
                align-items: center;
            }
        }

        /* Para pantallas muy pequeñas (menos de 480px) */
        @media (max-width: 480px) {

            /* Hacer el botón de emergencias aún más compacto */
            .paginas .col-md-3 .btn {
                padding: 6px 12px !important;
                font-size: 13px;
            }

            /* Reducir gap entre elementos */
            .paginas .col-md-3 {
                gap: 8px;
            }

            /* Logo un poco más pequeño */
            .icoProimpeq {
                max-height: 67px;
            }

            /* Barra superior más compacta */
            .contactos {
                font-size: 12px;
            }

            .numeroycorreo {
                font-size: 12px;
                gap: 6px;
            }
        }

        /* Mantener el comportamiento desktop intacto */
        @media (min-width: 769px) {

            /* Desktop no necesita cambios, mantener estilos originales */
            .paginas .col-md-7 {
                display: block !important;
            }

            .navbar-toggle-button {
                display: none !important;
            }
        }
    </style>

    <nav class="w-100">
        <div class="contactos w-100">
            <div class="container">
                <div class="row">
                    <div class="numeroycorreo col-md-8">
                        <span><i class="iconoCorreo bi bi-envelope"></i></span>
                        <span><a href="mailto:proimpeq@gmail.com"
                                class="acontactos correo">proimpeq@gmail.com</a></span>
                        <span class="icoTelefono"><i class="bi bi-telephone"></i></span>
                        <span><a href="tel:3108530777" class="acontactos tel">(+57) 310 853 07 77</a></span>
                    </div>
                    <!-- <div class="redes col-md-3 offset-md-1 mt-1 text-center" style="margin-top: .6rem!important;">
                        <span><a href="https://www.facebook.com/proimpeq.sas.7" target="_blank" class="acontactos"><i class="bi bi-facebook"></i></a></span>
                        <span><a href="https://api.whatsapp.com/send?phone=573108530777&text=Hola!%20me%20interesa%20uno%20de%20tus%20servicios/productos!" target="_blank" class="acontactos"><i class="bi bi-whatsapp"></i></a></span>
                        <span><a href="https://www.instagram.com/proimpeqsas/" target="_blank" class="acontactos"><i class="bi bi-instagram"></i></a></span>
                        <span><a href="https://www.tiktok.com/@hidraulicosproimpeq" target="_blank" class="acontactos"><i class="bi bi-tiktok"></i></a></span>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="paginas w-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <a href="index.php">
                            <img src="./assets/imgs/iconoProimpeq.png" class="img-fluid mt-2 mb-2 icoProimpeq">
                        </a>
                    </div>
                    <div class="col-md-7" style="margin-top: 3%;">
                        <span><a class="pgs inicio" href="index.php">Inicio</a></span>

                        <!-- Dropdown: Servicios -->
                        <div class="nav-dropdown-wrapper">
                            <!-- Toggle link: on desktop hover opens, on mobile click toggles -->
                            <a class="pg nav-dropdown-toggle" href="servicios.php" id="serviciosToggle">Servicios <span
                                    class="nav-caret">▼</span></a>

                            <!-- Dropdown menu items -->
                            <ul class="nav-dropdown-menu" id="serviciosMenu" aria-labelledby="serviciosToggle">
                                <li class="nav-dropdown-item"><a href="./serviciosElectricos.php">Servicios
                                        Eléctricos</a></li>
                                <li class="nav-dropdown-item"><a href="./serviciosHidraulicos.php">Servicios
                                        Hidráulicos</a></li>
                                <li class="nav-dropdown-item"><a href="./lavadoTanques.php">Lavados de Tanques</a></li>
                                <li class="nav-dropdown-item"><a href="./obrasCiviles.php">Servicios de Obras
                                        Civiles</a>
                                </li>
                            </ul>
                        </div>

                        <span><a class="pg" href="contacto.php">Contacto</a></span>
                        <span><a class="pg" href="nosotros.php">Nosotros</a></span>
                    </div>
                    <div class="col-md-3">
                        <a href="index.php">
                            <button class="btn pt-2 pb-2">Emergencias 24H</button>
                        </a>

                        <!-- Hamburger button (mobile only) -->
                        <button id="navbarHamburger" class="navbar-toggle-button" aria-label="Menu"
                            aria-expanded="false" aria-controls="navbarMobileMenu">
                            <i class="bi bi-list"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile menu overlay (added for responsive behavior) -->
    <div id="navbarMobileMenu" class="navbar-mobile-overlay" aria-hidden="true">
        <div class="navbar-mobile-content">
            <ul class="navbar-mobile-menu-list">
                <li class="navbar-mobile-item"><a href="index.php">Inicio</a></li>
                <li class="navbar-mobile-item">
                    <div class="navbar-mobile-services-toggle">
                        <a href="servicios.php">Servicios</a>
                        <button id="navbarServicesToggle" class="navbar-services-button" aria-expanded="false"
                            aria-controls="navbarServicesSubmenu">
                            <span class="navbar-mobile-caret">▼</span>
                        </button>
                    </div>
                    <ul id="navbarServicesSubmenu" class="navbar-mobile-submenu" aria-hidden="true">
                        <li class="navbar-mobile-subitem"><a href="./serviciosElectricos.php">Servicios Eléctricos</a>
                        </li>
                        <li class="navbar-mobile-subitem"><a href="./serviciosHidraulicos.php">Servicios Hidráulicos</a>
                        </li>
                        <li class="navbar-mobile-subitem"><a href="./lavadoTanques.php">Lavados de Tanques</a></li>
                        <li class="navbar-mobile-subitem"><a href="./obrasCiviles.php">Servicios de Obras Civiles</a>
                        </li>
                    </ul>
                </li>
                <li class="navbar-mobile-item"><a href="contacto.php">Contacto</a></li>
                <li class="navbar-mobile-item"><a href="nosotros.php">Nosotros</a></li>
                <li class="navbar-mobile-item"><a
                        href="https://api.whatsapp.com/send?phone=573108530777&text=Hola!%20me%20interesa%20uno%20de%20tus%20servicios/productos!">Emergencias
                        24H</a></li>
            </ul>
        </div>
    </div>

    <!-- Script: comportamiento del dropdown 'Servicios' -->
    <script>
        (function () {
            // Elementos clave
            var wrapper = document.querySelector('.nav-dropdown-wrapper');
            var toggle = document.getElementById('serviciosToggle');
            var menu = document.getElementById('serviciosMenu');

            if (!wrapper || !toggle || !menu) return; // seguridad

            // Detecta mobile/tablet por ancho
            function isMobile() { return window.matchMedia('(max-width:768px)').matches; }

            // Toggle por click en dispositivos móviles/tablets
            toggle.addEventListener('click', function (e) {
                if (isMobile()) {
                    e.preventDefault(); // evitar navegación al abrir el menú
                    wrapper.classList.toggle('open');
                }
            });

            // Cerrar al hacer clic fuera
            document.addEventListener('click', function (e) {
                if (!wrapper.contains(e.target)) {
                    wrapper.classList.remove('open');
                }
            });

            // Cerrar con Escape
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') wrapper.classList.remove('open');
            });

            // Hover fallback (abre en desktop) - también soporta touch-friendly pointer events
            var hoverTimeout;
            wrapper.addEventListener('mouseenter', function () { if (!isMobile()) { clearTimeout(hoverTimeout); wrapper.classList.add('open'); } });
            wrapper.addEventListener('mouseleave', function () { if (!isMobile()) { hoverTimeout = setTimeout(function () { wrapper.classList.remove('open'); }, 150); } });

            // Teclado: Enter / Space abre en mobile
            toggle.addEventListener('keydown', function (e) {
                if ((e.key === 'Enter' || e.key === ' ') && isMobile()) {
                    e.preventDefault();
                    wrapper.classList.toggle('open');
                }
            });

            // Asegurar que al redimensionar se cierre el estado abierto no deseado
            window.addEventListener('resize', function () {
                if (!isMobile()) wrapper.classList.remove('open');
            });
            // -------------------------
            // Mobile menu behavior
            // -------------------------
            var hamburger = document.getElementById('navbarHamburger');
            var mobileMenu = document.getElementById('navbarMobileMenu');
            var servicesToggle = document.getElementById('navbarServicesToggle');
            var servicesSubmenu = document.getElementById('navbarServicesSubmenu');

            function lockBodyScroll(lock) {
                document.body.style.overflow = lock ? 'hidden' : '';
            }

            if (hamburger && mobileMenu) {
                hamburger.addEventListener('click', function (e) {
                    var open = hamburger.classList.toggle('open');
                    hamburger.setAttribute('aria-expanded', open ? 'true' : 'false');
                    mobileMenu.classList.toggle('open', open);
                    mobileMenu.setAttribute('aria-hidden', open ? 'false' : 'true');
                    lockBodyScroll(open);
                });

                // Close when clicking outside mobile content
                mobileMenu.addEventListener('click', function (e) {
                    if (e.target === mobileMenu) {
                        hamburger.classList.remove('open');
                        hamburger.setAttribute('aria-expanded', 'false');
                        mobileMenu.classList.remove('open');
                        mobileMenu.setAttribute('aria-hidden', 'true');
                        lockBodyScroll(false);
                    }
                });

                // Close on ESC
                document.addEventListener('keydown', function (e) {
                    if (e.key === 'Escape') {
                        if (mobileMenu.classList.contains('open')) {
                            hamburger.classList.remove('open');
                            hamburger.setAttribute('aria-expanded', 'false');
                            mobileMenu.classList.remove('open');
                            mobileMenu.setAttribute('aria-hidden', 'true');
                            lockBodyScroll(false);
                        }
                    }
                });

                // Close when clicking any link inside mobile menu
                mobileMenu.addEventListener('click', function (e) {
                    var target = e.target;
                    if (target.tagName.toLowerCase() === 'a') {
                        hamburger.classList.remove('open');
                        hamburger.setAttribute('aria-expanded', 'false');
                        mobileMenu.classList.remove('open');
                        mobileMenu.setAttribute('aria-hidden', 'true');
                        lockBodyScroll(false);
                    }
                });
            }

            // Toggle services submenu in mobile
            if (servicesToggle && servicesSubmenu) {
                servicesToggle.addEventListener('click', function (e) {
                    e.preventDefault();
                    var open = servicesSubmenu.classList.toggle('open');
                    servicesToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
                    var caret = servicesToggle.querySelector('.navbar-mobile-caret');
                    if (caret) { caret.classList.toggle('open', open); }
                });
            }
        })();
    </script>

</header>