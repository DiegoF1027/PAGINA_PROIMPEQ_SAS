<?php require_once('./components/layout/head.php') ?>
<?php require_once('./components/navbar.php') ?>
<?php require_once('./components/btn_whatsapp.php') ?>

<main aria-label="Contenido principal de contacto" class="contacto-main">
    <!-- HERO SECTION -->
    <section class="contacto-hero" role="region" aria-label="Hero - Contáctanos">
        <div class="contacto-hero__overlay"></div>
        <div class="contacto-hero__content">
            <h1 class="contacto-hero__title">¡Contáctanos!</h1>
            <p class="contacto-hero__subtitle">Gracias por tu interés en ponerte en contacto con nosotros. Estamos aquí
                para responder a tus preguntas y atender tus inquietudes. Por favor, utiliza la siguiente información
                para comunicarte con nuestro equipo</p>
            <a class="contacto-hero__cta" href="tel:3108530777" aria-label="Llamar ahora">Llamar ahora</a>
        </div>
    </section>

    <!-- CONTACT METHODS CARDS -->
    <section class="contacto-methods" aria-label="Métodos de contacto">
        <div class="contacto-container contacto-grid--methods">
            <!-- WhatsApp -->
            <article class="contacto-card contacto-card--method contacto-reveal"
                aria-labelledby="contacto-whatsapp-title">
                <div class="contacto-card__icon">
                    <i class="bi bi-whatsapp" aria-hidden="true"></i>
                </div>
                <h3 id="contacto-whatsapp-title" class="contacto-card__title">WhatsApp</h3>
                <p class="contacto-card__info">3108530777</p>
                <a class="contacto-card__btn contacto-card__btn--whatsapp"
                    href="https://api.whatsapp.com/send?phone=573108530777" target="_blank" rel="noopener noreferrer"
                    aria-label="Enviar mensaje por WhatsApp">Enviar mensaje</a>
            </article>

            <!-- Celular(es) -->
            <article class="contacto-card contacto-card--method contacto-reveal" aria-labelledby="contacto-phone-title">
                <div class="contacto-card__icon">
                    <i class="bi bi-phone" aria-hidden="true"></i>
                </div>
                <h3 id="contacto-phone-title" class="contacto-card__title">Celular(es)</h3>
                <p class="contacto-card__info">3108530777</p>
                <a class="contacto-card__btn contacto-card__btn--primary" href="tel:3108530777"
                    aria-label="Llamar ahora">Llamar ahora</a>
            </article>

            <!-- Email -->
            <article class="contacto-card contacto-card--method contacto-reveal" aria-labelledby="contacto-email-title">
                <div class="contacto-card__icon">
                    <i class="bi bi-envelope" aria-hidden="true"></i>
                </div>
                <h3 id="contacto-email-title" class="contacto-card__title">Email</h3>
                <p class="contacto-card__info">proimpeq@gmail.com</p>
                <a class="contacto-card__btn contacto-card__btn--primary" href="mailto:proimpeq@gmail.com"
                    aria-label="Enviar correo">Enviar correo</a>
            </article>

            <!-- Horarios -->
            <article class="contacto-card contacto-card--method contacto-reveal" aria-labelledby="contacto-hours-title">
                <div class="contacto-card__icon">
                    <i class="bi bi-clock" aria-hidden="true"></i>
                </div>
                <h3 id="contacto-hours-title" class="contacto-card__title">Horarios de Atención</h3>
                <p class="contacto-card__info contacto-card__info--hours">
                    LUN - VIE: 8:00 am - 05:00 pm<br />
                    SÁB: 8:00 am - 12:00 m
                </p>
                <div class="contacto-card__badge" aria-hidden="true">Emergencias 24H</div>
            </article>
        </div>
    </section>

    <!-- MAP & LOCATION -->
    <section class="contacto-location" aria-label="Nuestra ubicación">
        <div class="contacto-container contacto-location__inner contacto-reveal">
            <h2 class="contacto-section__title">Nuestra Ubicación</h2>
            <p class="contacto-section__subtitle">Visítanos en nuestra oficina</p>
            <p class="contacto-location__address"><i class="bi bi-geo-alt" aria-hidden="true"></i> Calle 78#69h #54,
                Engativá, Bogotá</p>

            <div class="contacto-map__wrap">
                <!-- Iframe provisto por el usuario -->
                <iframe class="contacto-map__iframe"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d587.8304189411181!2d-74.08468118094021!3d4.687140949895139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b2276c79901%3A0xa206af9ce567aebf!2zQ2FsbGUgNzgjNjloICM1NCwgRW5nYXRpdsOhLCBCb2dvdMOhLCBDdW5kaW5hbWFyY2E!5e0!3m2!1ses-419!2sco!4v1707205839044!5m2!1ses-419!2sco"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    aria-label="Mapa de la ubicación"></iframe>
            </div>

            <div class="contacto-map__actions">
                <a class="contacto-map__btn"
                    href="https://maps.app.goo.gl/9kkBwvjpUzUXTVcT9"
                    target="_blank" rel="noopener noreferrer" aria-label="Cómo llegar"> <i class="bi bi-geo-alt"
                        aria-hidden="true"></i> Cómo llegar</a>
            </div>
        </div>
    </section>

    <!-- WHY CONTACT US -->
    <section class="contacto-why" aria-label="Por qué contactarnos">
        <div class="contacto-container">
            <h2 class="contacto-section__title contacto-section__title--center">¿POR QUÉ CONTACTARNOS?</h2>
            <div class="contacto-grid contacto-grid--why">
                <article class="contacto-why__card contacto-reveal" aria-labelledby="why-1-title">
                    <div class="contacto-why__icon"><i class="bi bi-lightning" aria-hidden="true"></i></div>
                    <h3 id="why-1-title" class="contacto-why__title">Respuesta Rápida</h3>
                    <p class="contacto-why__desc">Atendemos tus solicitudes en tiempo récord. Disponibilidad 24/7 para
                        emergencias.</p>
                </article>

                <article class="contacto-why__card contacto-reveal" aria-labelledby="why-2-title">
                    <div class="contacto-why__icon"><i class="bi bi-chat-dots" aria-hidden="true"></i></div>
                    <h3 id="why-2-title" class="contacto-why__title">Asesoría Personalizada</h3>
                    <p class="contacto-why__desc">Nuestros expertos te guían en cada paso del proyecto según tus
                        necesidades específicas.</p>
                </article>

                <article class="contacto-why__card contacto-reveal" aria-labelledby="why-3-title">
                    <div class="contacto-why__icon"><i class="bi bi-award" aria-hidden="true"></i></div>
                    <h3 id="why-3-title" class="contacto-why__title">Servicio Profesional</h3>
                    <p class="contacto-why__desc">Técnicos certificados con años de experiencia en la industria
                        garantizan trabajos de calidad.</p>
                </article>

                <article class="contacto-why__card contacto-reveal" aria-labelledby="why-4-title">
                    <div class="contacto-why__icon"><i class="bi bi-shield-check" aria-hidden="true"></i></div>
                    <h3 id="why-4-title" class="contacto-why__title">Equipos Certificados</h3>
                    <p class="contacto-why__desc">Utilizamos herramientas y materiales de primera calidad que cumplen
                        todas las normativas.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="contacto-cta" role="region" aria-label="Llamado a la acción final">
        <div class="contacto-cta__overlay"></div>
        <div class="contacto-cta__inner contacto-reveal">
            <h2 class="contacto-cta__title">¿Listo para comenzar tu proyecto?</h2>
            <p class="contacto-cta__subtitle">No esperes más. Contáctanos hoy y recibe una cotización sin compromiso</p>
            <div class="contacto-cta__actions">
                <a class="contacto-cta__btn contacto-cta__btn--outline" href="tel:3108530777"
                    aria-label="Llamar ahora">Llamar ahora</a>
                <a class="contacto-cta__btn contacto-cta__btn--outline"
                    href="https://api.whatsapp.com/send?phone=573108530777" target="_blank" rel="noopener noreferrer"
                    aria-label="Escribir por WhatsApp">Escribir por WhatsApp</a>
            </div>
        </div>
    </section>
</main>

<!-- Scripts específicos de la página -->
<script src="assets/js/contacto.js" defer></script>

<?php require_once('./components/footer.php') ?>