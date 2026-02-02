<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules\bootstrap-icons\font\bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>ContaPortable | WhaFactura</title>

    <!-- Google tag (gtag.js) yec: Actualizado 14 dic 2023 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C7Q8Z1DBFJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-C7Q8Z1DBFJ');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '553915085081143');
        fbq('track', 'PageView');
    </script>
</head>

<body>
    <header class="py-5 bg-gradient-magic">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="fw-bold t1 text-white">WhaFactura</h1>
                        <h3 class="t1 fw-bold" style="color: #F6DBA2">ContaPortable</h3>
                        <div class="col-lg-8 text-white">
                            <h4>Crea facturas desde la comodidad de tu whatsapp</h4>
                            <p>Descubre el nuevo servicio de facturación electrónica via WhatsApp</p>
                        </div>
                        <div class="text-start text-white">
                            <ul>
                                <li>No necesitas instalar nada</li>
                                <li>No necesitas aprender nada</li>
                                <li>Tan fácil como chatear con alguien</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <img class="img-fluid" src="img/Mockups/whafacturalogov3.png" alt="Factura electrónica via whatsapp" width="350"/>
                </div>
            </div>
        </div>
    </header>
    <main>
        <!--Caracteristicas-->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center fw-bold pb-3">¿Comó funciona whafactura? </h2>
                <h4 class="text-center fw-bold pb-3">Emite facturas en minutos y envíalas automáticamente por correo o WhatsApp.</h4>
                <div class="row gy-3 justify-content-center">
                    <div class="col-lg-6 col-xl-4">
                        <div class="card bg-elephant-900">
                            <div class="d-flex justify-content-center">
                                <img class="img-card" src="img/icons/bot.png" alt="Bot de WhaFactura">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">¡Solicita la factura!</h5>
                                <p class="card-text">Inicia el proceso pidiendo una factura al bot.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <img class="img-card" src="img/icons/planificacion-fiscal.png" alt="Planificación Fiscal">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">¡Ingresa datos Fiscales!</h5>
                                <p class="card-text">Proprociana los datos tributarios de tu empresa y RUT.
                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <img class="img-card" src="img/icons/lista.png" alt="Lista de Productos">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">¡Agrega los detalles!</h5>
                                <p class="card-text">Llena los campos con productos o servicios a facturar.
                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <img class="img-card" src="img/icons/recibir .png" alt="Recibir Comprobante">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">¡Recibe tu comprobante!</h5>
                                <p class="card-text">Recibe la factura electrónica en el metodo elegido.
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Caracteristicas-->

        
        <!--Productos-->
        <section class="py-5">
            <div class="container">
                <h2 class="fw-bold text-center">Producto WhaFactura</h2>
                <p class="text-center">A continuación te presentamos nuestros producto ContaPortable con WhaFactura.
                <div class="row gy-3 justify-content-center pt-3">
                    <div class="col-lg-6 col-xl-3">
                        <div class="card boder-cp">
                            <div class="d-flex justify-content-center">
                                <img class="img-card" src="img/products/box-facturacion.jpg" alt="">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">ContaPortable WhaFactura</h5>
                                <p class="card-text"> Facturador para emisión de hasta 50 
                                    Documentos Electrónicos</p>
                                <p class="h2 fw-bold mb-0 text-primary">$20.00 </p>
                                <small class="fw-bold">Para una empresa con hasta 50 DTE's mensuales</small>
                                <div>
                                    <small>Mas IVA</small>
                                </div>
                            </div>
                            <div class="d-grid gap-2 px-3 pb-3">
                                <a href="https://api.whatsapp.com/send?phone=50379898203&text=¡Hola ContaPortable! Deseo una cotización formal del producto WhaFactura" target="_blank" class="btn btn-primary"><i class="bi bi-file-earmark-text-fill me-2"></i>Solicitar una Cotización</a>
                                <!--<a href="" class="btn btn-outline-primary">Más Información</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                    
        <!--Productos-->

        <!--Servicios-->
        <section class="bg-black-haze-50">
            <div class="container py-5">
                <h2 class="fw-bold text-center pb-3">¿Que ofrecemos en nuestros servicios?</h2>
                <div class="row gy-3 justify-content-center">
                    <div class="col-lg-6 col-xl-4">
                        <div class="card bg-elephant-900">
                            <div class="d-flex justify-content-center">
                                <img class="img-card" src="img/icons/capacitacion.png" alt="">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">Capacitaciones</h5>
                                <p class="card-text">En ContaPortable, ofrecemos capacitaciones remotas al personal
                                    correspondiente para asegurar un óptimo manejo del software. ¡La compra del software
                                    ya incluye capacitaciones!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <img class="img-card" src="img/icons/actualizacion.png" alt="">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">Actualizaciones</h5>
                                <p class="card-text">Todos nuestros programas reciben actualizaciones constantes, ya sea
                                    para adaptarse a cambios legislativos en El Salvador, mejorar la interfaz de usuario
                                    o incorporar nuevas herramientas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <img class="img-card" src="img/icons/apoyo-tecnico.png" alt="">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">Soporte Técnico</h5>
                                <p class="card-text">Nuestro equipo de soporte técnico está disponible para ayudarte a
                                    resolver dudas e inquietudes o problemas relacionados con el software, ya sea a
                                    través de correo electrónico, conexiones remotas o videoconferencia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Servicios-->

       
         <!--Contacto-->
        <section class="bg-elephant-cp">
            <div class="container py-5">
                <div class="text-center">
                    <h2 class="fw-bold text-salomie-200">¡Contactate con nosotros!</h2>
                    <p class="text-white">Contáctanos para obtener más información sobre nuestros productos con Factura
                        Electrónica. Puedes programar una presentación remota a través de Google Meet para explorar a
                        fondo el funcionamiento de nuestros programas y elegir la mejor opción para tu negocio.</p>
                    <a class="" href="https://api.whatsapp.com/send?phone=50379898203&text=¡Hola ContaPortable! tengo algunas dudas sobre WhaFactura, ¿me pueden ayudar?" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="¡Contactate con nosotros!">
                        <i class="bi bi-whatsapp text-shamrock-400" style="font-size: 150px;"></i>
                    </a>

                    <p class="fw-bold-1" style="color: #F7E378;">*Solo WhatsApp Chat, atención telefónica no disponible.
                    </p>
                    <p class="fw-bold text-white fs-5"><i class="bi bi-clock-fill" style="font-size:20px; margin-right: 10px;"></i>Horarios de atención:</p>
                    <ul class="list-unstyled text-white">
                        <li><span class="fw-bold">Lunes a Viernes:</span> 8:00 am - 5:00 pm</li>
                        <li><span class="fw-bold">Sábado:</span> 8:00 am - 12:00 pm</li>
                        <li><span class="fw-bold">Domingo:</span> Cerrado</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Contacto-->

        <section class="bg-black-haze-50 py-5">
            <div class="container">
                <p class="text-muted small mb-4 mb-lg-0 text-center">&copy; ContaPortable 2026.Todos los derechos
                    reservados.
            </div>
        </section>
    </main>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>