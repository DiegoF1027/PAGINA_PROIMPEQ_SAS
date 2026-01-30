<?php require_once('./components/layout/head.php') ?>
<?php require_once('./components/navbar.php') ?>
<?php require_once('./components/btn_whatsapp.php') ?>

<style>
    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .column {
        width: 100%;
        padding: 0 1em 1em 1em;
        text-align: center;
    }

    .card {
        width: 100%;
        height: 100%;
        padding: 2em 1.5em;
        background: linear-gradient(white 50%, lightgray 50%);
        background-size: 100% 200%;
        background-position: 0 2.5%;
        border-radius: 5px;
        box-shadow: 0 0 35px rgba(0, 0, 0, 0.12);
        cursor: pointer;
        transition: 0.5s;
    }

    h3 {
        font-size: 20px;
        font-weight: 600;
        color: #1f194c;
        margin: 1em 0;
    }

    p {
        color: #575a7b;
        font-size: 15px;
        line-height: 1.6;
        letter-spacing: 0.03em;
    }

    .icon-wrapper {
        background-color: #90CAF9;
        position: relative;
        margin: auto;
        font-size: 30px;
        height: 2.5em;
        width: 2.5em;
        color: #ffffff;
        border-radius: 50%;
        display: grid;
        place-items: center;
        transition: 0.5s;
    }

    .card:hover {
        background-position: 0 100%;
    }

    .card:hover .icon-wrapper {
        background-color: #2c7bfe;
        color: white;
    }

    .card:hover h3 {
        color: black;
    }

    .card:hover p {
        color: black;
    }

    @media screen and (min-width: 768px) {
        section {
            padding: 0 2em;
        }

        .column {
            flex: 0 50%;
            max-width: 50%;
        }
    }

    @media screen and (min-width: 992px) {
        .column {
            flex: 0 0 33.33%;
            max-width: 33.33%;
        }
    }
</style>

<section class="nuestrosServicios">
    <p><b>NUESTROS SERVICIOS</b></p>
</section>

<section id="serviciosElectricos" class="serviciosElectricos">
    <div class="container containerElec1">
        <div class="mt-4">
            <p><b>SERVICIOS ELÉCTRICOS</b></p>
        </div>
    </div>
    <div class="container containerElec2">
        <p>En PROIMPEQ SAS, ponemos a tu disposición una amplia gama de productos y servicios esenciales para asegurar
            el correcto funcionamiento del sistema eléctrico en tu empresa, edificio o proyecto.</p>
    </div>
    <div class="container containerElec3">
        <div class="row">
            <div class="col-md-5 offset-md-1">
                <img src="./assets/imgs/tablero_electrico.jpg" alt="">
            </div>
            <div class="col-md-6">
                <div class="main">
                    <!-- Your code -->
                    <section class="accordion-container">
                        <div class="tabs">
                            <div class="tab">
                                <!-- <input type="checkbox" id="id-1"> -->
                                <input type="radio" id="id-1" name="rad">
                                <label class="tab-title" for="id-1"><b>Automatización y Control</b></label>
                                <div class="tab-container">
                                    Automatización de procesos hidráulicos y neumáticos utilizando PLCs, controladores
                                    LOGO y variadores de velocidad, con programación adaptable a las necesidades del
                                    cliente.
                                </div>
                            </div>
                            <div class="tab">
                                <!-- <input type="checkbox" id="id-2"> -->
                                <input type="radio" id="id-2" name="rad">
                                <label class="tab-title" for="id-2"><b>Puesta en Marcha</b></label>
                                <div class="tab-container">
                                    Descubra nuestra solución profesional para la puesta en marcha de su sistema
                                    eléctrico. Con experiencia y precisión, garantizamos un inicio sin problemas para su
                                    proyecto. Contáctenos hoy mismo y asegúrese de un funcionamiento óptimo desde el
                                    primer momento.
                                </div>
                            </div>
                            <div class="tab">
                                <input type="radio" id="id-3" name="rad">
                                <label class="tab-title" for="id-3"><b>Ensamblaje e Instalación de Tableros
                                        Electricos</b></label>
                                <div class="tab-container">
                                    Descubra nuestra excelencia en montajes eléctricos y ensamblaje de tableros,
                                    cumpliendo con normas nacionales e internacionales. Desde dispositivos de control
                                    hasta cableado de fuerza y control, nos encargamos de todo. Confíe en nuestra
                                    experiencia para una instalación eléctrica segura y eficiente. Contáctenos hoy mismo
                                    para obtener un servicio de calidad.
                                </div>
                            </div>
                            <div class="tab">
                                <input type="radio" id="id-4" name="rad">
                                <label class="tab-title" for="id-4"><b>Variadores de Velocidad</b></label>
                                <div class="tab-container">
                                    Optimice sus sistemas eléctricos con nuestros variadores de velocidad. Instalamos y
                                    configuramos dispositivos de control según normativas nacionales e internacionales
                                    para un rendimiento óptimo. Confíe en nuestra experiencia para una operación
                                    eficiente y segura. Contáctenos hoy mismo para obtener más información.
                                </div>
                            </div>
                            <div class="tab">
                                <input type="radio" id="id-5" name="rad">
                                <label class="tab-title" for="id-5"><b>Mantenimiento Preventivo</b></label>
                                <div class="tab-container">
                                    Mantenga su sistema eléctrico en óptimas condiciones con nuestro servicio de
                                    mantenimiento preventivo de tableros eléctricos. Realizamos inspecciones, limpieza,
                                    ajustes y pruebas para detectar y prevenir problemas. Confíe en nuestra experiencia
                                    para garantizar la fiabilidad y seguridad de su instalación eléctrica. Contáctenos
                                    hoy mismo para proteger su inversión.
                                </div>
                            </div>
                            <div class="tab">
                                <!-- <input type="checkbox" id="id-3"> -->
                                <input type="radio" id="id-6" name="rad">
                                <label class="tab-title" for="id-6"><b>Mantenimiento de Plantas Electricas y
                                        Trasferencias</b></label>
                                <div class="tab-container">
                                    Mantenga sus plantas eléctricas y sistemas de transferencia en óptimas condiciones
                                    con nuestro servicio de mantenimiento especializado. Nuestro equipo realiza
                                    inspecciones, pruebas y ajustes para garantizar su fiabilidad y rendimiento
                                    continuo. Contáctenos hoy para proteger su inversión en energía eléctrica.
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <a class="se-cta__btn btn_servicios" href="serviciosElectricos.php">Ver más</a>
</section>

<section id="serviciosHidraulic" class="serviciosHidraulic">
    <div class="container containerHidro1">
        <p class="p1"><b>SERVICIOS HIDRAULICOS</b></p>
        <p class="p2">En PROIMPEQ SAS, ponemos a tu disposición una amplia gama de productos y servicios esenciales para
            asegurar el correcto funcionamiento del sistema eléctrico en tu empresa, edificio o proyecto.</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="bi bi-hammer"></i>
                    </div>
                    <h3>Venta e instalación de tuberia hidraulica</h3>
                    <p>Ofrecemos tuberías de alta calidad: PVC de presión, sanitario, ventilación, acero inoxidable, y
                        más. Confía en nuestra experiencia para instalaciones confiables.</p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="bi bi-brush"></i>
                    </div>
                    <h3>Pruebas de funcionamiento de la RCI</h3>
                    <p>Asegura tu protección con nuestras pruebas profesionales de redes contra incendios. Confía en
                        nuestro servicio experto para certificar la seguridad de tu espacio.</p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="bi bi-wrench"></i>
                    </div>
                    <h3>Suministro e instalación de equipos</h3>
                    <p>Suministro e instalación de equipos de presión para tu tranquilidad. Confía en nosotros para un
                        rendimiento óptimo.</p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="bi bi-gear"></i>
                    </div>
                    <h3>Mantenimiento de Gabinetes de la RCI</h3>
                    <p>Suministro, instalación y mantenimiento de equipos de presión, junto con el cuidado de gabinetes
                        de la RCI. Garantiza un funcionamiento óptimo y seguro.</p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="bi bi-droplet"></i>
                    </div>
                    <h3>Venta de accesorios e implementos para motobombas</h3>
                    <p>Amplia gama de accesorios disponibles para motobombas: flotadores eléctricos, mangueras, válvulas
                        y más. Mejora el rendimiento de tu equipo con nuestras opciones.</p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="bi bi-wrench"></i>
                    </div>
                    <h3>Mantenimiento Preventivo y Correctivo de Motobombas</h3>
                    <p>Ofreciendo un enfoque integral, proporcionan servicios de mantenimiento tanto preventivo como
                        correctivo para motobombas. Su experiencia garantiza un rendimiento óptimo y seguro del equipo,
                        asegurando la continuidad de las operaciones.</p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="bi bi-map"></i>
                    </div>
                    <h3>Diseño y Planificación de Sistemas Hidraulicos</h3>
                    <p>Diseño y planificación de sistemas hidráulicos a medida para garantizar eficiencia y fiabilidad
                        en tus proyectos.</p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="bi bi-eye"></i>
                    </div>
                    <h3>Revisión y Diagnostico</h3>
                    <p>Programa una visita técnica y deja que nuestros expertos evalúen tus necesidades para ofrecerte
                        la mejor solución.</p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="bi bi-exclamation-circle"></i>
                    </div>
                    <h3>Atención de Servicios de Emergencia</h3>
                    <p>Estamos aquí para atender tus emergencias las 24 horas del día. Contacta con nuestro equipo
                        especializado para recibir asistencia inmediata y soluciones eficaces.</p>
                </div>
            </div>
        </div>
    </div>
    <a class="se-cta__btn btn_servicios" href="serviciosHidraulicos.php">Ver más</a>
</section>

<section id="serviciosLavados" class="serviciosLavados">
    <div class="container containerLav1">
        <p class="p1"><b>LAVADOS DE TANQUES</b></p>
        <p class="p2">
            En PROIMPEQ SAS, ponemos a tu disposición una amplia gama de productos y servicios esenciales para asegurar
            el
            correcto funcionamiento del sistema eléctrico en tu empresa, edificio o proyecto.
        </p>
        <div class="row">
            <div class="col-md-3 offset-md-2">
                <div class="text1">

                    <b>Lavado de tanques de reserva</b>
                    <p>
                        Mantén la calidad del agua con nuestro servicio de lavado de tanques de reserva. En PROIMPEQ
                        SAS, nos
                        especializamos en limpieza y desinfección para garantizar un suministro seguro. Confía
                        en nuestro equipo experto para mantener tus tanques en óptimas condiciones. Contáctanos hoy
                        mismo.
                    </p>

                    <b>Pruebas de potabilidad</b>
                    <p>
                        Asegura la calidad del agua con nuestras pruebas de potabilidad. En PROIMPEQ SAS, ofrecemos
                        servicios
                        especializados para garantizar que tu suministro de agua cumpla con los estándares de calidad
                        requeridos. Confía en nuestra experiencia y precisión para evaluar la potabilidad del agua de
                        manera
                        confiable. Contáctanos para obtener resultados precisos y garantizar un agua segura para tu
                        consumo.
                    </p>

                    <b>Entrega de certificado de lavado</b>
                    <p>
                        Certifica la higiene de tus tanques con nuestros servicios avalados por la Secretaría de Salud
                        en
                        PROIMPEQ SAS. Garantizamos la limpieza y desinfección según estándares de salud. Contáctanos hoy
                        para obtener certificados de lavado confiables y autorizados.
                    </p>
                </div>
            </div>
            <div class="col-md-1 tecnicoLavado">
                <img src="assets\imgs\lavado.webp" alt="">
            </div>
            <div class="col-md-3 offset-md-1">
                <div class="text2">

                    <b>Pozos Eyectores</b>
                    <p>Optimiza el rendimiento de tus pozos eyectores con el servicio profesional de lavado de PROIMPEQ
                        SAS. Nuestra empresa cuenta con la experiencia y los recursos necesarios para garantizar una
                        limpieza eficiente y completa. Confía en nosotros para mantener tus pozos en perfecto estado y
                        maximizar su funcionamiento.</p>

                    <b>Pruebas de PH y coloración</b>
                    <p>Confía en PROIMPEQ SAS para evaluar el pH y la coloración de tus pozos eyectores. Nuestro
                        servicio profesional garantiza mediciones precisas y confiables para un mantenimiento óptimo.
                    </p>

                </div>
            </div>
        </div>
    </div>
    <a class="se-cta__btn btn_servicios" href="lavadoTanques.php">Ver más</a>
</section>

<section id="serviciosObras" class="serviciosObras">

    <div class="container containerCiv1">
        <p class="textObras1"><b>SERVICIOS DE OBRAS
                CIVILES</b></p>
        <p class="textObras2">En PROIMPEQ
            SAS, ponemos a tu disposición una amplia gama de productos y servicios esenciales para asegurar el correcto
            funcionamiento del sistema eléctrico en tu empresa, edificio o proyecto.</p>
    </div>

    <div class="container containerCiv2">
        <div class="row">
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="bi bi-hammer"></i>
                    </div>
                    <h3>Mantenimiento de Parques Infantiles</h3>
                    <p>
                        El mantenimiento de parques infantiles se realiza con el fin de preservar un ambiente seguro y
                        adecuado para el juego y la diversión de los niños.
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="bi bi-brush"></i>
                    </div>
                    <h3>Mantenimiento de Fachadas</h3>
                    <p>
                        Pintura para proteger y conservar, eliminación de graffiti para mantener la limpieza, lavado de
                        ventanas para mejorar la visibilidad, inspección de grietas, etc.
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="bi bi-wrench"></i>
                    </div>
                    <h3>Urbanismo</h3>
                    <p>
                        Se realizan obras civiles que incluyen la pavimentación de calles, la instalación de redes de
                        drenaje, la construcción de aceras y la adecuación de espacios públicos, todo con el objetivo de
                        mejorar la infraestructura y la calidad de vida en entornos urbanos.
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="bi bi-gear"></i>
                    </div>
                    <h3>Gerencia de Proyectos</h3>
                    <p>
                        Planificación, coordinación y control de recursos para alcanzar objetivos específicos dentro de
                        un marco de tiempo y presupuesto determinado.
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="bi bi-droplet"></i>
                    </div>
                    <h3>Intervención y ocupación del espacio publico</h3>
                    <p>
                        Licencias de acueducto y alcantallirado para redes de acueducto y alcantarillado
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="bi bi-eye"></i>
                    </div>
                    <h3>Revisión y Diagnostico</h3>
                    <p>
                        Inspección minuciosa de estructuras y sistemas para identificar posibles problemas, evaluar su
                        estado y proponer soluciones efectivas para garantizar la seguridad y durabilidad de las
                        construcciones.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <a class="se-cta__btn btn_servicios" href="obrasCiviles.php">Ver más</a>
</section>
<?php require_once('./components/footer.php') ?>