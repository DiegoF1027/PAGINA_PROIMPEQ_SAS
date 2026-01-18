<?php require_once('./components/layout/head.php') ?>
<?php require_once('./components/navbar.php') ?>
<?php require_once('./components/btn_whatsapp.php') ?>

<main class="se-main" >
    <!-- Hero -->
    <section class="se-hero" role="region" aria-label="Hero Servicios Hidráulicos"
        style="--se-hero-image: url('assets/imgs/servicios/hero-electrician.jpg')">
        <div class="se-hero__overlay"></div>
        <div class="se-hero__content">
            <h1 class="se-hero__title">Servicios Hidraulicos</h1>
            <p class="se-hero__subtitle">Soluciones hidráulicas confiables para tus instalaciones</p>
        </div>
    </section>

    <!-- Descripción -->
    <section class="se-desc" id="descripcion" aria-labelledby="se-desc-title">
        <div class="se-container">
            <div class="se-desc__left">
                <h2 id="se-desc-title">Ofrecemos instalación, mantenimiento y reparación de sistemas hidráulicos</h2>
                <p>
                    En PROIMPEQ ofrecemos soluciones hidráulicas integrales para sectores industriales,
                    comerciales y residenciales. Nuestro equipo técnico diseña e implementa proyectos
                    de tuberías, bombeo, tanques, sistemas de riego y tratamiento de aguas con altos
                    estándares de seguridad y eficiencia.
                </p>
                <p>
                    Utilizamos bombas, válvulas y accesorios certificados y aplicamos protocolos de trabajo
                    que minimizan tiempos de inactividad. Buscamos optimizar el rendimiento de tus sistemas
                    hidráulicos y garantizar su durabilidad.
                </p>
                <p>
                    Ofrecemos planes de mantenimiento preventivo y atención correctiva rápida para reducir
                    riesgos operativos, prolongar la vida útil de los equipos y evitar paradas no previstas.
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
                        Equipos y repuestos certificados
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
                    <img src="assets/imgs/servicios/instalaciones-panel.jpg"
                        alt="Instalaciones hidráulicas - sistema de tuberías organizado" loading="lazy">
                </figure>
                <div class="se-card__overlay" aria-hidden="true">
                    <div class="se-card__text">
                        <h3>Instalaciones hidráulicas</h3>
                        <p>Diseñamos y ejecutamos instalaciones hidráulicas seguras y eficientes, optimizando
                            trazados, selección de tuberías y puntos de acceso para fácil mantenimiento.</p>
                    </div>
                </div>
                <div class="se-card__more" aria-hidden="true">Ver más</div>
            </article>

            <!-- Card 2 -->
            <article class="se-card" role="listitem" data-servicio="mantenimiento">
                <figure class="se-card__media">
                    <img src="assets/imgs/servicios/mantenimiento-multimetro.jpg"
                        alt="Mantenimiento preventivo de bombas y válvulas" loading="lazy">
                </figure>
                <div class="se-card__overlay" aria-hidden="true">
                    <div class="se-card__text">
                        <h3>Mantenimiento preventivo hidráulico</h3>
                        <p>Programas de inspección, limpieza y verificación de bombas, válvulas y redes hidráulicas
                            que garantizan desempeño continuo y evitan obstrucciones.</p>
                    </div>
                </div>
                <div class="se-card__more" aria-hidden="true">Ver más</div>
            </article>

            <!-- Card 3 -->
            <article class="se-card" role="listitem" data-servicio="reparaciones">
                <figure class="se-card__media">
                    <img src="assets/imgs/servicios/reparacion-diagnostico.jpg"
                        alt="Reparaciones y diagnóstico de sistemas hidráulicos" loading="lazy">
                </figure>
                <div class="se-card__overlay" aria-hidden="true">
                    <div class="se-card__text">
                        <h3>Reparaciones y diagnóstico hidráulico</h3>
                        <p>Diagnóstico rápido con instrumentación para fugas y obstrucciones, y reparaciones eficaces
                            con repuestos y pruebas posteriores.</p>
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
                                    src="https://images.unsplash.com/photo-1509395176047-4a66953fd231?q=80&w=1600&auto=format&fit=crop"
                                    alt="Proyecto 1"></div>
                            <div class="col-12 col-md-4"><img class="d-block w-100 carousel-thumb"
                                    src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1600&auto=format&fit=crop"
                                    alt="Proyecto 2"></div>
                            <div class="col-12 col-md-4"><img class="d-block w-100 carousel-thumb"
                                    src="https://images.unsplash.com/photo-1518779578993-ec3579fee39f?q=80&w=1600&auto=format&fit=crop"
                                    alt="Proyecto 3"></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 col-md-4"><img class="d-block w-100 carousel-thumb"
                                    src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=1600&auto=format&fit=crop"
                                    alt="Proyecto 4"></div>
                            <div class="col-12 col-md-4"><img class="d-block w-100 carousel-thumb"
                                    src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=1600&auto=format&fit=crop"
                                    alt="Proyecto 5"></div>
                            <div class="col-12 col-md-4"><!-- empty placeholder to keep layout --></div>
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
                            src="https://images.unsplash.com/photo-1509395176047-4a66953fd231?q=80&w=1600&auto=format&fit=crop"
                            alt="Proyecto 1">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 carousel-thumb"
                            src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1600&auto=format&fit=crop"
                            alt="Proyecto 2">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 carousel-thumb"
                            src="https://images.unsplash.com/photo-1518779578993-ec3579fee39f?q=80&w=1600&auto=format&fit=crop"
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
            <h2 class="se-cta__title">¿Necesitas un servicio hidráulico de calidad?</h2>
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
                titulo: 'Instalaciones Hidráulicas',
                imagen: 'https://images.unsplash.com/photo-1505751172876-fa1923c5c528?q=80&w=1600&auto=format&fit=crop',
                descripcion: `Realizamos diseños y ejecuciones completas de instalaciones hidráulicas en proyectos
                residenciales, comerciales e industriales. Incluye selección de tuberías, bombas, válvulas y
                montaje de tanques, priorizando seguridad, eficiencia hidráulica y accesibilidad para
                mantenimiento.`,
                beneficios: [
                    'Diseño a medida y planos hidráulicos',
                    'Selección de equipos y repuestos certificados',
                    'Instalación con pruebas de presión y puesta en marcha'
                ]
            },
            mantenimiento: {
                titulo: 'Mantenimiento Preventivo Hidráulico',
                imagen: 'https://images.unsplash.com/photo-1519822473349-2f8b45a8d8c6?q=80&w=1600&auto=format&fit=crop',
                descripcion: `Programas de mantenimiento preventivo que reducen fallas y maximizan la vida útil
                de tus sistemas hidráulicos. Incluye inspección periódica, limpieza de redes, verificación de
                bombas y pruebas funcionales según la frecuencia acordada.`,
                beneficios: [
                    'Menor probabilidad de paradas no planificadas',
                    'Informes técnicos con recomendaciones',
                    'Optimización del consumo y costos operativos'
                ]
            },
            reparaciones: {
                titulo: 'Reparaciones y Diagnóstico Hidráulico',
                imagen: 'https://images.unsplash.com/photo-1503945438517-f65904a52ce6?q=80&w=1600&auto=format&fit=crop',
                descripcion: `Servicio de diagnóstico y reparación con instrumentación para detectar fugas,
                obstrucciones y fallas en equipos. Ejecutamos reparaciones con repuestos originales y
                validamos funcionamiento antes de la entrega.`,
                beneficios: [
                    'Diagnóstico con instrumentación especializada',
                    'Repuestos y reparaciones en sitio',
                    'Reportes con acciones correctivas y preventivas'
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