<?php require_once('./components/layout/head.php') ?>
<?php require_once('./components/navbar.php') ?>
<?php require_once('./components/btn_whatsapp.php') ?>

<main class="se-main" >
    <!-- Hero -->
    <section class="se-hero" role="region" aria-label="Hero Obras Civiles"
            style="--se-hero-image: url('assets/imgs/servicios/hero-construction.jpg')">
        <div class="se-hero__overlay"></div>
        <div class="se-hero__content">
                <h1 class="se-hero__title">Obras Civiles</h1>
                <p class="se-hero__subtitle">Construcción, infraestructura y soluciones estructurales</p>
        </div>
    </section>

    <!-- Descripción -->
    <section class="se-desc" id="descripcion" aria-labelledby="se-desc-title">
        <div class="se-container">
            <div class="se-desc__left">
                <h2 id="se-desc-title">Construimos proyectos duraderos y seguros</h2>
                <p>
                    En PROIMPEQ ofrecemos servicios de obras civiles para proyectos residenciales, comerciales
                    e industriales. Nuestro equipo desarrolla soluciones de urbanización, cimentación,
                    estructuras y acabados, garantizando cumplimiento normativo y control de calidad.
                </p>
                <p>
                    Empleamos materiales certificados y procesos que optimizan tiempos y costos, asegurando
                    durabilidad y seguridad en cada etapa de la obra, desde la planificación hasta la entrega.
                </p>
                <p>
                    Además, diseñamos programas de mantenimiento y rehabilitación para conservar la integridad
                    de las estructuras y prolongar la vida útil de la infraestructura existente.
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
                        Asesoría técnica personalizada en obra
                    </li>
                    <li class="se-benefit-item">
                        <span class="se-icon" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" focusable="false" aria-hidden="true">
                                <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        Materiales y equipos certificados
                    </li>
                    <li class="se-benefit-item">
                        <span class="se-icon" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" focusable="false" aria-hidden="true">
                                <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        Supervisión y control de calidad
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
            <article class="se-card" role="listitem" data-servicio="urbanizacion">
                <figure class="se-card__media">
                    <img src="assets/imgs/servicios/construction-urbanizacion.jpg"
                        alt="Urbanización y obra civil - maquinaria en sitio" loading="lazy">
                </figure>
                <div class="se-card__overlay" aria-hidden="true">
                    <div class="se-card__text">
                        <h3>Urbanización y movimiento de tierras</h3>
                        <p>Desarrollo de plataformas, vialidad, drenaje y acondicionamiento del terreno para nuevos proyectos.</p>
                    </div>
                </div>
                <div class="se-card__more" aria-hidden="true">Ver más</div>
            </article>

            <!-- Card 2 -->
            <article class="se-card" role="listitem" data-servicio="cimentaciones">
                <figure class="se-card__media">
                    <img src="assets/imgs/servicios/construction-cimentacion.jpg"
                        alt="Cimentaciones y estructuras - obra en construcción" loading="lazy">
                </figure>
                <div class="se-card__overlay" aria-hidden="true">
                    <div class="se-card__text">
                        <h3>Cimentaciones y estructuras</h3>
                        <p>Diseño y ejecución de cimentaciones profundas y superficiales, y estructuras resistentes.</p>
                    </div>
                </div>
                <div class="se-card__more" aria-hidden="true">Ver más</div>
            </article>

            <!-- Card 3 -->
            <article class="se-card" role="listitem" data-servicio="rehabilitacion">
                <figure class="se-card__media">
                    <img src="assets/imgs/servicios/construction-rehab.jpg"
                        alt="Rehabilitación estructural - reparación de muro" loading="lazy">
                </figure>
                <div class="se-card__overlay" aria-hidden="true">
                    <div class="se-card__text">
                        <h3>Rehabilitación y reparaciones</h3>
                        <p>Intervenciones en estructuras existentes: refuerzos, reparaciones y restauración funcional.</p>
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
            <h2 class="se-cta__title">¿Necesitas soluciones en obras civiles?</h2>
            <a class="se-cta__btn" href="contacto.php">Contáctanos</a>
        </div>
    </section>
</main>

<!-- página: datos del servicio y llamada al inicializador compartido -->
<script>
    (function () {
        'use strict';
        window.se_serviciosData = {
            urbanizacion: {
                titulo: 'Urbanización y Movimiento de Tierras',
                imagen: 'https://images.unsplash.com/photo-1501696466883-2c7b7d8f9b1a?q=80&w=1600&auto=format&fit=crop',
                descripcion: `Realizamos movimiento de tierras, conformación de plataformas, vialidad y obras
                de drenaje para preparar el terreno según especificaciones del proyecto.`,
                beneficios: [
                    'Nivelación y compactación profesional',
                    'Obras de drenaje y redes básicas',
                    'Coordinación con topografía y servicios'
                ]
            },
            cimentaciones: {
                titulo: 'Cimentaciones y Estructuras',
                imagen: 'https://images.unsplash.com/photo-1496307042754-b4aa456c4a2d?q=80&w=1600&auto=format&fit=crop',
                descripcion: `Diseño y ejecución de cimentaciones profundas y superficiales, armado y vaciado
                de estructuras de concreto y acero, con controles de calidad y seguridad en obra.`,
                beneficios: [
                    'Cimentaciones según carga y suelo',
                    'Control de calidad en concretos y armaduras',
                    'Coordinación estructural con ingeniería'
                ]
            },
            rehabilitacion: {
                titulo: 'Rehabilitación y Reparaciones Estructurales',
                imagen: 'https://images.unsplash.com/photo-1505842465776-3d3f3b2b3f9b?q=80&w=1600&auto=format&fit=crop',
                descripcion: `Intervenciones para recuperar la funcionalidad y seguridad de infraestructuras,
                incluyendo refuerzos, sellados, reparación de grietas y restauración de acabados.`,
                beneficios: [
                    'Diagnóstico estructural profesional',
                    'Intervenciones rápidas y duraderas',
                    'Mejoras para prolongar la vida útil'
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