<?php require_once ('./components/layout/head.php') ?>
<?php require_once ('./components/navbar.php') ?>
<?php require_once ('./components/btn_whatsapp.php') ?>

<main>

    <section class="carrusel">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="./assets/imgs/bombas.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <h2><strong>Soluciones hidraulicas</strong></h2>
                        <p class="mt-2">Venta de tuberia, mantenimientos preventivos y correctivos de los equipos de presión, diseños, entre otros.</p>
                        <a href="./servicios.php#serviciosHidraulic"><button class="mt-3 verMas1">Ver más</button></a>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="./assets/imgs/lavadoTanque.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <h2><strong>Lavados de Tanques</strong></h2>
                        <p class="mt-2">Lavado de tanques y cajillas de reserva de todo tipo</p>
                        <a href="./servicios.php#serviciosLavados"><button class="mt-3 verMas1">Ver más</button></a>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="./assets/imgs/electricidad.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <h2><strong>Servicios Eléctricos</strong></h2>
                        <p class="mt-2">Mantenimientos preventivos, Mantenimientos correctivos, Inspecciones, etc.</p>
                        <a href="./servicios.php#serviciosElectricos"><button class="mt-3 verMas1">Ver más</button></a>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="./assets/imgs/obrasCiviles.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <h2><strong>Obras Civiles</strong></h2>
                        <p class="mt-2">Mantenimiento de fachadas, Obras de Urbanismo, Dirección de Proyectos, etc.</p>
                        <a href="./servicios.php#serviciosObras"><button class="mt-3 verMas1">Ver más</button></a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="serviciosHidraulicos">
        <div class="container">
            <h2>Soluciones de Sistemas Hidráulicos</h2>
            <h3>Ofrecemos todo tipo de servicios hidráulicos de primera priorizando tu satisfacción</h3>
            <div>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner cardsServicios mt-4">
                        <div class="carousel-item active">
                            <div class="card">
                                <img src="assets\imgs\plano_hidraulico.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Diseños para la red hidraulica</b></h5>
                                    <p class="card-text"> Potencia tus proyectos con nuestros diseños hidráulicos
                                        líderes en la industria, garantizando eficiencia y rendimiento excepcionales en
                                        diversas aplicaciones.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="assets\imgs\venta_tuberia.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Venta de tubería para el sistema hidráulico</b></h5>
                                    <p class="card-text">
                                        Explora nuestra diversa gama de tuberías, desde PVC hasta niples en acero
                                        inoxidable, galvanizado, al carbono y polipropileno
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="assets\imgs\fuga_de_agua.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Servicios de atención a emergencias hidraulicas</b></h5>
                                    <p class="card-text"> Estamos a tu disposición las 24 horas del día para brindarte
                                        soluciones rápidas y efectivas ante cualquier contratiempo que surja en tu
                                        sistema.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="assets\imgs\mtto_motobombas.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Mantenimientos para el sistema hidraulico</b></h5>
                                    <p class="card-text">Se realizan suministro, instalación y mantenimiento de flautas
                                        hidraulicas para la red de agua potable, RCI, y red hidraulica sanitaria tanto
                                        en acero, pvc, al carbono y polipropileno</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="./servicios.php#serviciosHidraulic"><button class="btn verMas2">Ver más</button></a>
            </div>
        </div>
    </section>
    <section class="bannerContacto">
        <div class="banner">
            <div class="container">
                <h2 class="display-4"><b>Contactanos</b></h2>
                <div class="contact-info mb-4">
                    <div class="info-item">
                        <i class="bi bi-phone"></i>
                        <a href="tel:3108530777">3108530777</a>
                    </div>
                    <div class="info-item">
                        <i class="bi bi-envelope"></i>
                        <a href="mailto:proimpeq@gmail.com">proimpeq@gmail.com</a>
                    </div>
                    <div class="info-item">
                        <i class="bi bi-geo-alt-fill"></i>
                        <a>Calle 78 #69H-54</a>
                    </div>
                </div>
            </div>

            <a href="contacto.php"><button class="button buttonContactanos">Contáctanos<i
                        class="bi bi-arrow-right"></i></button></a>
        </div>
    </section>
    <section class="obrasCiviles">
        <div class="container">
            <h2>Expertos en Obras Civiles</h2>
            <h3>Brindamos una amplia gama de servicios especializados en construcción civil, priorizando la calidad para
                asegurar tu completa satisfacción</h3>
            <div>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner cardsObras mt-4">
                        <div class="carousel-item active">
                            <div class="card">
                                <img src="assets\imgs\parque_infantil.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Parques infantiles</b></h5>
                                    <p class="card-text">Desarrollo, mantenimiento y restauración de espacios públicos
                                        dedicados al ocio y recreación al aire libre.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="assets\imgs\urbanismo.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Urbanismo</b></h5>
                                    <p class="card-text"> Planificación, mantenimiento y rehabilitación de
                                        infraestructuras urbanas</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="assets\imgs\mtto_fachada.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Fachadas</b></h5>
                                    <p class="card-text">Diseño, conservación y restauración de fachadas</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="assets\imgs\intervencion_espacio_publico.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Intervención y ocupación del espacio publico<b></b></h5>
                                    <p class="card-text">Licencias de acueducto y alcantallirado para redes de acueducto
                                        y alcantarillado</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="./servicios.php#serviciosObras"><button class="btn verMas2">Ver más</button></a>
            </div>
        </div>
    </section>
    <section class="limpiezaTanques">
        <div class="container contenedor">
            <h2>Limpieza Profesional de Tanques</h2>
            <h3>Nos especializamos en servicios de lavado de tanques, garantizando una limpieza impecable y la máxima
                eficiencia para tu tranquilidad y seguridad.</h3>
            <div class="container cards">
                <div class="carta-box">
                    <div class="carta">
                        <div class="cara">
                            <!-- Imagen con texto superpuesto -->
                            <div class="caradel">
                                <img src="assets\imgs\lavado1.jpg" width="200" height="250px">
                                <div class="text_card">
                                    <i class="fa-solid fa-jug-detergent icons"></i>
                                    <p><b>Lavado de tanques y cajillas</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="cara detras">
                            <div class="caratras">
                                <img src="assets\imgs\lavado2.jpg" width="200" height="250px">
                                <div class="text_card">
                                    <p><b>Ofrecemos servicios especializados en el lavado de cajillas y tanques,
                                            asegurando una limpieza completa y eficaz</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carta-box">
                    <div class="carta">
                        <div class="cara">
                            <!-- Imagen con texto superpuesto -->
                            <div class="caradel">
                                <img src="assets\imgs\ph1.jpeg" width="200" height="250px">
                                <div class="text_card">
                                    <i class="fa-solid fa-eye-dropper icons"></i>
                                    <p><b>Pruebas de pH y Coloración</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="cara detras">
                            <div class="caratras">
                                <img src="assets\imgs\ph2.jpg" width="200" height="250px">
                                <div class="text_card">
                                    <p><b>La calidad está asegurada gracias a nuestros análisis minuciosos de pH y
                                            coloración</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carta-box">
                    <div class="carta">
                        <div class="cara">
                            <!-- Imagen con texto superpuesto -->
                            <div class="caradel">
                                <img src="assets\imgs\potabilidad1.jpg" width="200" height="250px">
                                <div class="text_card">
                                    <i class="fa-solid fa-vial-circle-check icons"></i>
                                    <p><b>Pruebas de potabilidad</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="cara detras">
                            <div class="caratras">
                                <img src="assets\imgs\potabilidad2.jpg" width="200" height="250px">
                                <div class="text_card">
                                    <p><b>Garantizamos la calidad del agua con nuestras pruebas de potabilidad
                                            confiables y precisas</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carta-box">
                    <div class="carta">
                        <div class="cara">
                            <!-- Imagen con texto superpuesto -->
                            <div class="caradel">
                                <img src="assets\imgs\certificado1.jpg" width="200" height="250px">
                                <div class="text_card">
                                    <i class="fa-solid fa-droplet icons"></i>
                                    <p><b>Certificados de lavado de tanques</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="cara detras">
                            <div class="caratras">
                                <img src="assets\imgs\certificado2.jpg" width="200" height="250px">
                                <div class="text_card">
                                    <p><b>Certificados de lavado de tanques para garantizar tu tranquilidad y
                                            seguridad</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="./servicios.php#serviciosLavados"><button class="btn verMas2 mt-4">Ver más</button></a>
        </div>
    </section>
    <section class="serviciosElec">
        <div class="container">
            <h2>Soluciones Eléctricas de Confianza</h2>
            <h3>Ofrecemos una amplia variedad de servicios relacionados con sistemas eléctricos, comprometidos con
                sistemas electricos, comprometidos por la excelencia y seguridad en cada proyecto para satisfacer tus
                necesidades electricas con fiabilidad</h3>
            <div>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner cardsElec mt-4">
                        <div class="carousel-item active">
                            <div class="card">
                                <img src="assets\imgs\tablero1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Tableros electricos</b></h5>
                                    <p class="card-text">Suministro, mantenimiento preventivo, mantenimiento correctivo
                                        e instalación de tableros eléctricos, entre otros</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="assets\imgs\accesorios.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Accesorios y componentes</b></h5>
                                    <p class="card-text">
                                        Suministro e instalación de accesorios y componentes para el sistema electrico
                                        como guardamotores, botoneria, cables, etc.
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="assets\imgs\servicio_electrico.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Soluciones Eléctricas Completas</b></h5>
                                    <p class="card-text">Ofrecemos diseño, mantenimiento, reparación e instalación de
                                        componentes eléctricos. Desde guardamotores hasta cables, garantizamos
                                        resultados seguros y eficientes con nuestro equipo profesional.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="assets\imgs\inspeccion_electrica.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Inspección Eléctrica Profesional</b></h5>
                                    <p class="card-text">Realizamos inspecciones detalladas para garantizar la seguridad
                                        y eficiencia de su sistema eléctrico. Confíe en nosotros para detectar y
                                        solucionar cualquier problema potencial.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="./servicios.php#serviciosElectricos"><button class="btn verMas2">Ver más</button></a>
            </div>
        </div>
    </section>
    <section class="sliderAliados">
        <div class="container">
            <h2>Nuestros aliados</h2>
            <h3>Somos distribuidores de las mejores marcas en el mercado</h3>
        </div>
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                    <img src="./assets/imgs/1.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/2.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/3.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/4.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/5.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/6.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/7.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/8.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/9.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/10.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/11.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/12.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/1.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/2.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/3.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/4.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/5.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/6.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/7.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/8.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/9.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/10.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/11.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/imgs/12.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once ('./components/footer.php') ?>