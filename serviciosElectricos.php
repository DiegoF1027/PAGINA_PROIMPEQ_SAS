<?php require_once('./components/layout/head.php') ?>
<?php require_once('./components/navbar.php') ?>
<?php require_once('./components/btn_whatsapp.php') ?>

<main class="se-main">
    <!-- Hero -->
    <section class="se-hero" role="region" aria-label="Hero Servicios Eléctricos"
        style="--se-hero-image: url('/PAGINA_PROIMPEQ_SAS/assets/imgs/servicios/hero-electrician.png')">
        <div class="se-hero__overlay"></div>
        <div class="se-hero__content">
            <h1 class="se-hero__title">Servicios Eléctricos</h1>
            <p class="se-hero__subtitle">Energía y seguridad para tus instalaciones</p>
        </div>
    </section>

    <!-- Descripción -->
    <section class="se-desc" id="descripcion" aria-labelledby="se-desc-title">
        <div class="se-container">
            <div class="se-desc__left">
                <h2 id="se-desc-title">Ofrecemos instalación, mantenimiento y reparación</h2>
                <p>
                    En PROIMPEQ brindamos soluciones eléctricas integrales para sectores industriales,
                    comerciales y residenciales. Nuestro equipo de técnicos certificados diseña e
                    implementa proyectos con altos estándares de seguridad y eficiencia, desde nuevas
                    instalaciones hasta adaptaciones y ampliaciones de redes eléctricas.
                </p>
                <p>
                    Utilizamos equipos y materiales de primera calidad y aplicamos protocolos de trabajo
                    que minimizan tiempos de inactividad y garantizan cumplimiento normativo. Nuestro objetivo
                    es ofrecer continuidad energética y protección para tu infraestructura y personal.
                </p>
                <p>
                    Con una atención orientada al cliente, planeamos programas de mantenimiento preventivo
                    que extienden la vida útil de tus instalaciones y detectan fallas antes de convertirse
                    en emergencias costosas.
                </p>
            </div>

            <aside class="se-desc__right" aria-labelledby="se-benefits-title">
                <h3 id="se-benefits-title" class="se-benefits__title">Beneficios</h3>
                <ul class="se-benefits__list">
                    <li class="se-benefit-item">
                        <span class="se-icon" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" focusable="false" aria-hidden="true">
                                <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        Asesoría técnica personalizada
                    </li>
                    <li class="se-benefit-item">
                        <span class="se-icon" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" focusable="false" aria-hidden="true">
                                <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        Equipos certificados
                    </li>
                    <li class="se-benefit-item">
                        <span class="se-icon" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" focusable="false" aria-hidden="true">
                                <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        Atención 24/7
                    </li>
                </ul>
            </aside>
        </div>
    </section>

    <!-- Nuestros Servicios -->
    <section class="se-services" aria-labelledby="se-services-title">
        <h2 id="se-services-title" class="se-services__heading">Nuestros Servicios</h2>

        <div class="se-services__grid se-container" role="list">
            <!-- Card 1 -->
            <article class="se-card" role="listitem" data-servicio="instalaciones">
                <figure class="se-card__media">
                    <img src="https://aprende.com/wp-content/uploads/2022/10/que-es-un-panel-electrico-y-para-que-sirve.jpg"
                        alt="Instalaciones eléctricas - panel organizado" loading="lazy">
                </figure>
                <div class="se-card__overlay" aria-hidden="true">
                    <div class="se-card__text">
                        <h3>Instalaciones eléctricas</h3>
                        <p>Diseñamos y ejecutamos instalaciones ordenadas y seguras, optimizando rutas y protecciones
                            para larga durabilidad.</p>
                    </div>
                </div>
                <div class="se-card__more" aria-hidden="true">Ver más</div>
            </article>

            <!-- Card 2 -->
            <article class="se-card" role="listitem" data-servicio="mantenimiento">
                <figure class="se-card__media">
                    <img src="https://cesienergy.com/wp-content/uploads/2022/11/61SWE2LMYdL._SL1500_.jpg"
                        alt="Mantenimiento preventivo con multímetro" loading="lazy">
                </figure>
                <div class="se-card__overlay" aria-hidden="true">
                    <div class="se-card__text">
                        <h3>Mantenimiento preventivo</h3>
                        <p>Programas de inspección y pruebas periódicas para detectar desviaciones y garantizar
                            continuidad operativa.</p>
                    </div>
                </div>
                <div class="se-card__more" aria-hidden="true">Ver más</div>
            </article>

            <!-- Card 3 -->
            <article class="se-card" role="listitem" data-servicio="reparaciones">
                <figure class="se-card__media">
                    <img src="https://www.sevieste.com/s/cc_images/teaserbox_2491998251.jpg?t=1610472414"
                        alt="Reparaciones y diagnóstico de sistemas eléctricos" loading="lazy">
                </figure>
                <div class="se-card__overlay" aria-hidden="true">
                    <div class="se-card__text">
                        <h3>Reparaciones y diagnóstico</h3>
                        <p>Diagnóstico rápido y reparaciones efectivas, con reportes claros y recomendaciones para
                            evitar reincidencias.</p>
                    </div>
                </div>
                <div class="se-card__more" aria-hidden="true">Ver más</div>
            </article>
        </div>
    </section>

    <!-- Carrusel de Proyectos (Bootstrap) -->
    <section class="se-carousel" aria-labelledby="se-carousel-title">
        <div class="se-carousel__container container">
            <h2 id="se-carousel-title" class="se-carousel__heading">Nuestros Proyectos</h2>

            <!-- Desktop grouped 3-per-slide -->
            <div id="seProjectsCarousel" class="carousel slide d-none d-md-block" data-bs-ride="carousel"
                aria-label="Proyectos desktop">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-12 col-md-4"><img class="d-block w-100 carousel-thumb"
                                    src="https://www.sevieste.com/s/cc_images/teaserbox_2491998251.jpg?t=1610472414"
                                    alt="Proyecto 1"></div>
                            <div class="col-12 col-md-4"><img class="d-block w-100 carousel-thumb"
                                    src="https://www.sevieste.com/s/cc_images/teaserbox_2491998251.jpg?t=1610472414"
                                    alt="Proyecto 2"></div>
                            <div class="col-12 col-md-4"><img class="d-block w-100 carousel-thumb"
                                    src="https://www.sevieste.com/s/cc_images/teaserbox_2491998251.jpg?t=1610472414"
                                    alt="Proyecto 3"></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 col-md-4"><img class="d-block w-100 carousel-thumb"
                                    src="https://www.sevieste.com/s/cc_images/teaserbox_2491998251.jpg?t=1610472414"
                                    alt="Proyecto 4"></div>
                            <div class="col-12 col-md-4"><img class="d-block w-100 carousel-thumb"
                                    src="https://www.sevieste.com/s/cc_images/teaserbox_2491998251.jpg?t=1610472414"
                                    alt="Proyecto 5"></div>
                            <div class="col-12 col-md-4"><img class="d-block w-100 carousel-thumb"
                                    src="https://www.sevieste.com/s/cc_images/teaserbox_2491998251.jpg?t=1610472414"
                                    alt="Proyecto 5"></div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#seProjectsCarousel"
                    data-bs-slide="prev">
                    <span class="custom-icon carousel-prev">‹</span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#seProjectsCarousel"
                    data-bs-slide="next">
                    <span class="custom-icon carousel-next">›</span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>

            <!-- Mobile: single image per slide -->
            <div id="seProjectsCarouselMobile" class="carousel slide d-block d-md-none" data-bs-ride="carousel"
                aria-label="Proyectos mobile">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 carousel-thumb"
                            src="https://www.sevieste.com/s/cc_images/teaserbox_2491998251.jpg?t=1610472414"
                            alt="Proyecto 1">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 carousel-thumb"
                            src="https://www.sevieste.com/s/cc_images/teaserbox_2491998251.jpg?t=1610472414"
                            alt="Proyecto 2">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 carousel-thumb"
                            src="https://www.sevieste.com/s/cc_images/teaserbox_2491998251.jpg?t=1610472414"
                            alt="Proyecto 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#seProjectsCarouselMobile"
                    data-bs-slide="prev">
                    <span class="custom-icon carousel-prev">‹</span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#seProjectsCarouselMobile"
                    data-bs-slide="next">
                    <span class="custom-icon carousel-next">›</span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="se-cta" aria-label="Llamado a la acción">
        <div class="se-container se-cta__inner">
            <h2 class="se-cta__title">¿Necesitas un servicio eléctrico de calidad?</h2>
            <a class="se-cta__btn" href="contacto.php">Contáctanos</a>
        </div>
    </section>
</main>

<!-- página: datos del servicio y llamada al inicializador compartido -->
<script>
    (function () {
        'use strict';
        window.se_serviciosData = {
            instalaciones: {
                titulo: 'Instalaciones Eléctricas',
                imagen: 'https://www.sevieste.com/s/cc_images/teaserbox_2491998251.jpg?t=1610472414',
                descripcion: `Realizamos diseños y ejecuciones completas de instalaciones eléctricas en proyectos
                residenciales, comerciales e industriales. Aplicamos normativas técnicas, selección de
                protecciones, canalizaciones y tableros, priorizando seguridad, eficiencia energética
                y facilidad de mantenimiento.`,
                beneficios: [
                    'Diseño a medida y planos eléctricos',
                    'Selección de materiales certificados',
                    'Instalación con pruebas y puesta en marcha'
                ]
            },
            mantenimiento: {
                titulo: 'Mantenimiento Preventivo',
                imagen: 'https://www.sevieste.com/s/cc_images/teaserbox_2491998251.jpg?t=1610472414',
                descripcion: `Programas de mantenimiento preventivo que reducen fallas y maximizan la vida útil
                de tus equipos. Incluye inspección periódica, termografía, limpieza de contactos,
                verificación de protecciones y pruebas funcionales según frecuencia acordada.`,
                beneficios: [
                    'Menor probabilidad de paradas no planificadas',
                    'Informes técnicos periódicos',
                    'Ahorro operativo por optimización de equipos'
                ]
            },
            reparaciones: {
                titulo: 'Reparaciones y Diagnóstico',
                imagen: 'https://www.sevieste.com/s/cc_images/teaserbox_2491998251.jpg?t=1610472414',
                descripcion: `Servicio de diagnóstico y reparación con equipos de ensayo profesional. Realizamos
                análisis de falla, reemplazo o reparación de componentes y pruebas de verificación antes
                de entregar, con recomendaciones para evitar recurrencias.`,
                beneficios: [
                    'Diagnóstico con instrumentación avanzada',
                    'Repuestos y reparaciones en sitio',
                    'Reportes con acciones correctivas'
                ]
            }
        };

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', function () { if (typeof seCommonInit === 'function') seCommonInit(); });
        } else {
            if (typeof seCommonInit === 'function') seCommonInit();
        }
    })();
</script>

<?php require_once('./components/modal_service.php') ?>
<?php require_once('./components/footer.php') ?>
<?php require_once('./components/modal_image.php') ?>