<?php require_once('./components/layout/head.php') ?>
<?php require_once('./components/navbar.php') ?>
<?php require_once('./components/btn_whatsapp.php') ?>

<main class="se-main" >
    <!-- Hero -->
    <section class="se-hero" role="region" aria-label="Hero Lavado de Tanques"
        style="--se-hero-image: url('assets/imgs/servicios/hero-tank-cleaning.jpg')">
        <div class="se-hero__overlay"></div>
        <div class="se-hero__content">
            <h1 class="se-hero__title">Lavado de Tanques</h1>
            <p class="se-hero__subtitle">Higiene, seguridad y preservación para tus tanques</p>
        </div>
    </section>

    <!-- Descripción -->
    <section class="se-desc" id="descripcion" aria-labelledby="se-desc-title">
        <div class="se-container">
            <div class="se-desc__left">
                <h2 id="se-desc-title">Servicios profesionales de lavado y mantenimiento de tanques</h2>
                <p>
                    En PROIMPEQ realizamos lavado, desinfección e inspección de tanques de almacenamiento
                    para agua, combustibles y productos industriales. Nuestro equipo aplica protocolos
                    seguros y técnicas que aseguran la remoción de sedimentos, incrustaciones y biofilm.
                </p>
                <p>
                    Utilizamos equipos especializados, detergentes y desinfectantes certificados, así como
                    procedimientos que minimizan riesgos ambientales y garantizan la calidad del contenido
                    del tanque tras el servicio.
                </p>
                <p>
                    Ofrecemos además inspección interna, reparación menor y programas preventivos para
                    extender la vida útil de tus tanques y reducir la probabilidad de contaminación.
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
                        Eliminación de sedimentos y residuos
                    </li>
                    <li class="se-benefit-item">
                        <span class="se-icon" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" focusable="false" aria-hidden="true">
                                <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        Desinfección y control microbiológico
                    </li>
                    <li class="se-benefit-item">
                        <span class="se-icon" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" focusable="false" aria-hidden="true">
                                <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        Inspección y mantenimiento preventivo
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
            <article class="se-card" role="listitem" data-servicio="lavado_interno">
                <figure class="se-card__media">
                    <img src="assets/imgs/servicios/tank_internal_cleaning.jpg"
                        alt="Lavado interno de tanques - eliminación de sedimentos" loading="lazy">
                </figure>
                <div class="se-card__overlay" aria-hidden="true">
                    <div class="se-card__text">
                        <h3>Lavado interno de tanques</h3>
                        <p>Limpieza profunda para remover lodos, sedimentos y residuos adheridos en el interior del tanque.</p>
                    </div>
                </div>
                <div class="se-card__more" aria-hidden="true">Ver más</div>
            </article>

            <!-- Card 2 -->
            <article class="se-card" role="listitem" data-servicio="desinfeccion">
                <figure class="se-card__media">
                    <img src="assets/imgs/servicios/tank_disinfection.jpg"
                        alt="Desinfección de tanques - control microbiológico" loading="lazy">
                </figure>
                <div class="se-card__overlay" aria-hidden="true">
                    <div class="se-card__text">
                        <h3>Desinfección y sanitización</h3>
                        <p>Aplicamos protocolos de desinfección certificados para asegurar la inocuidad del contenido.</p>
                    </div>
                </div>
                <div class="se-card__more" aria-hidden="true">Ver más</div>
            </article>

            <!-- Card 3 -->
            <article class="se-card" role="listitem" data-servicio="inspeccion">
                <figure class="se-card__media">
                    <img src="assets/imgs/servicios/tank_inspection.jpg"
                        alt="Inspección de tanques - evaluación visual e interna" loading="lazy">
                </figure>
                <div class="se-card__overlay" aria-hidden="true">
                    <div class="se-card__text">
                        <h3>Inspección y mantenimiento</h3>
                        <p>Inspección interna con reportes y recomendaciones para mantenimiento preventivo o reparación.</p>
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
            <h2 class="se-cta__title">¿Necesitas limpieza profesional de tanques?</h2>
            <a class="se-cta__btn" href="contacto.php">Solicitar servicio</a>
        </div>
    </section>
</main>

<!-- página: datos del servicio y llamada al inicializador compartido -->
<script>
    (function () {
        'use strict';
        window.se_serviciosData = {
            lavado_interno: {
                titulo: 'Lavado Interno de Tanques',
                imagen: 'https://images.unsplash.com/photo-1582719478173-2a1b1f9d6c3f?q=80&w=1600&auto=format&fit=crop',
                descripcion: `Limpieza técnica del interior del tanque para eliminar lodos, sedimentos y depósitos.
                Realizamos remojo, agitación y extracción de residuos siguiendo normas de seguridad.`,
                beneficios: [
                    'Eliminación de acumulaciones y sedimentos',
                    'Mejora de la calidad del contenido almacenado',
                    'Reducción de riesgos de obstrucción y contaminación'
                ]
            },
            desinfeccion: {
                titulo: 'Desinfección y Sanitización',
                imagen: 'https://images.unsplash.com/photo-1582719478173-3b2c2d4e5f6a?q=80&w=1600&auto=format&fit=crop',
                descripcion: `Aplicamos protocolos de desinfección con productos aprobados y dosificaciones
                controladas para garantizar la inocuidad microbiológica del tanque y su contenido.`,
                beneficios: [
                    'Control microbiológico certificado',
                    'Protocolos seguros y trazables',
                    'Reducción de olores y riesgos sanitarios'
                ]
            },
            inspeccion: {
                titulo: 'Inspección y Mantenimiento',
                imagen: 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&w=1600&auto=format&fit=crop',
                descripcion: `Inspección visual e interna para detectar corrosión, fisuras o daños. Emitimos
                reportes con recomendaciones y acciones correctivas cuando aplica.`,
                beneficios: [
                    'Detección temprana de daños estructurales',
                    'Recomendaciones para mantenimiento preventivo',
                    'Informes técnicos con evidencia fotográfica'
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