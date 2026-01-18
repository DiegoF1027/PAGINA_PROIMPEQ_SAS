<?php require_once('./components/layout/head.php') ?>
<?php require_once('./components/navbar.php') ?>
<?php require_once('./components/btn_whatsapp.php') ?>

<main class="nosotros-main" aria-label="Contenido principal - Nosotros">
    <!-- HERO con parallax suave -->
    <section class="nosotros-hero nosotros-reveal" role="region" aria-label="Hero - Nosotros">
        <div class="nosotros-hero__bg" data-parallax></div>
        <div class="nosotros-hero__content">
            <span class="nosotros-hero__badge">Desde 2011</span>
            <h1 class="nosotros-hero__title">Construyendo el Futuro de la Infraestructura</h1>
            <p class="nosotros-hero__subtitle">24 años de excelencia en soluciones hidráulicas y eléctricas</p>
            <div class="nosotros-hero__ctas">
                <a href="servicios.php" class="nosotros-btn nosotros-btn--solid">Conoce nuestros servicios</a>
                <a href="tel:3108530777" class="nosotros-btn nosotros-btn--outline">Contáctanos</a>
            </div>
            <div class="nosotros-hero__scroll">↓</div>
        </div>
    </section>

    <!-- INTRO + ESTADÍSTICAS -->
    <section class="nosotros-section nosotros-intro nosotros-reveal">
        <div class="nosotros-container">
            <div class="nosotros-intro__copy" style="max-width:800px;margin:0 auto;text-align:center;">
                <h2>Líderes en Innovación Industrial</h2>
                <p>Transformamos desafíos complejos en soluciones eficientes. Somos el socio estratégico elegido para
                    proyectos críticos de infraestructura.</p>
            </div>

            <div class="nosotros-stats nosotros-grid nosotros-grid--4" aria-hidden="false">
                <div class="nosotros-stat" data-count="24">
                    <div class="nosotros-stat__num">15</div>
                    <div class="nosotros-stat__label">Años</div>
                </div>
                <div class="nosotros-stat" data-count="800">
                    <div class="nosotros-stat__num">500+</div>
                    <div class="nosotros-stat__label">Proyectos</div>
                </div>
                <div class="nosotros-stat" data-count="98">
                    <div class="nosotros-stat__num">100</div>
                    <div class="nosotros-stat__label">Satisfacción (%)</div>
                </div>
                <div class="nosotros-stat" data-count="24">
                    <div class="nosotros-stat__num">24</div>
                    <div class="nosotros-stat__label">Soporte 24/7</div>
                </div>
            </div>
        </div>
    </section>

    <!-- QUIÉNES SOMOS - storytelling visual -->
    <section class="nosotros-section nosotros-about nosotros-reveal">
        <div class="nosotros-container">
            <div class="nosotros-grid nosotros-grid--2">
                <div>
                    <span class="nosotros-badge">Nuestra Historia</span>
                    <h2>¿Quiénes Somos?</h2>
                    <p>Somos PROIMPEQ, especialistas en proyectos hidráulicos, eléctricos y obras civiles. 24 años
                        entregando soluciones técnicas que garantizan seguridad y eficiencia.</p>
                    <ul class="nosotros-highlights">
                        <li>Certificaciones y cumplimiento normativo</li>
                        <li>Equipo técnico altamente calificado</li>
                        <li>Tecnología y compromiso ambiental</li>
                    </ul>
                </div>
                <figure class="nosotros-art-image">
                    <img src="./assets/imgs/diseñoHidraulico.png" alt="Bombas azules" loading="lazy">
                </figure>
            </div>
        </div>
    </section>

    <!-- VISIÓN -->
    <section class="nosotros-section nosotros-vision nosotros-reveal">
        <div class="nosotros-container">
            <div class="nosotros-grid nosotros-grid--2">
                <figure class="nosotros-art-image">
                    <img src="./assets/imgs/img1.png" alt="Tanque industrial" loading="lazy">
                </figure>
                <div>
                    <span class="nosotros-badge">Visión</span>
                    <h3>Hacia Dónde Vamos</h3>
                    <p>Ser referentes en soluciones hidráulicas y eléctricas sostenibles, transformando la gestión del
                        agua con tecnología innovadora y prácticas responsables.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- MISIÓN -->
    <section class="nosotros-section nosotros-mision nosotros-reveal">
        <div class="nosotros-container">
            <div class="nosotros-grid nosotros-grid--2 nosotros-grid--reverse">
                <div>
                    <span class="nosotros-badge">Misión</span>
                    <h3>Nuestro Compromiso</h3>
                    <p>Entregar servicios de máxima calidad en instalación, mantenimiento y optimización de redes
                        hidráulicas y eléctricas, con asesoría personalizada y soluciones confiables.</p>
                </div>
                <figure class="nosotros-art-image">
                    <img src="./assets/imgs/img2.png" alt="Técnico trabajando" loading="lazy">
                </figure>
            </div>
        </div>
    </section>

    <!-- VALORES -->
    <section class="nosotros-section nosotros-values nosotros-reveal">
        <div class="nosotros-container">
            <h3 class="nosotros-values__title">Nuestros Valores</h3>
            <div class="nosotros-values__grid nosotros-grid nosotros-grid--4">
                <article class="nosotros-value"><i class="bi bi-award-fill"></i>
                    <h4>Excelencia</h4>
                    <p>Alta calidad en cada proyecto</p>
                </article>
                <article class="nosotros-value"><i class="bi bi-lightbulb-fill"></i>
                    <h4>Innovación</h4>
                    <p>Tecnologías avanzadas y sostenibles</p>
                </article>
                <article class="nosotros-value"><i class="bi bi-shield-check"></i>
                    <h4>Confianza</h4>
                    <p>Socio confiable para tu negocio</p>
                </article>
                <article class="nosotros-value"><i class="bi bi-globe-americas"></i>
                    <h4>Sostenibilidad</h4>
                    <p>Compromiso con el medio ambiente</p>
                </article>
            </div>
        </div>
    </section>

    <!-- POR QUÉ ELEGIRNOS -->
    <section class="nosotros-section nosotros-why nosotros-reveal">
        <div class="nosotros-container">
            <h3 style="text-align:center;margin-bottom:18px;">¿Por Qué Elegirnos?</h3>
            <div class="nosotros-grid" style="grid-template-columns:repeat(3,1fr);gap:18px;">
                <div class="nosotros-why__item"><i class="bi bi-patch-check"></i>
                    <h4>Experiencia</h4>
                    <p>Trayectoria comprobada</p>
                </div>
                <div class="nosotros-why__item"><i class="bi bi-lightning-charge"></i>
                    <h4>Respuesta</h4>
                    <p>Atención rápida</p>
                </div>
                <div class="nosotros-why__item"><i class="bi bi-person-badge"></i>
                    <h4>Equipo</h4>
                    <p>Técnicos certificados</p>
                </div>
                <div class="nosotros-why__item"><i class="bi bi-gear-wide-connected"></i>
                    <h4>Tecnología</h4>
                    <p>Soluciones modernas</p>
                </div>
                <div class="nosotros-why__item"><i class="bi bi-cash-coin"></i>
                    <h4>Precios</h4>
                    <p>Competitivos</p>
                </div>
                <div class="nosotros-why__item"><i class="bi bi-shield-fill-check"></i>
                    <h4>Garantía</h4>
                    <p>Trabajo garantizado</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA FINAL -->
    <section class="nosotros-cta">
        <div class="nosotros-cta__inner">
            <h2>Transformemos Tu Próximo Proyecto</h2>
            <p>Únete a las empresas que confían en nuestra experiencia y compromiso</p>
            <div class="nosotros-cta__actions">
                <a class="nosotros-btn nosotros-btn--solid" href="servicios.php">Solicitar Cotización</a>
                <a class="nosotros-btn nosotros-btn--outline" href="tel:3108530777">Llamar Ahora</a>
            </div>
        </div>
    </section>
</main>

<script src="assets/js/nosotros.js" defer></script>

<?php require_once('./components/footer.php') ?>