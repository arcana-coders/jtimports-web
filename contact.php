<?php include 'templates/header.php'; ?>

    <!-- Hero Contacto Start -->
    <div class="jumbotron jumbotron-fluid mb-5 position-relative text-white">
        <div class="container text-center py-5">
            <h1 class="display-3 font-weight-bold text-white">¿Tienes dudas? Contáctanos</h1>
            <p class="lead text-white mb-4">Estamos aquí para ayudarte con cualquier consulta, pedido o asesoría personalizada.</p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center bg-transparent p-0">
                    <li class="breadcrumb-item"><a href="index.php" class="text-white">Inicio</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Contacto</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Hero Contacto End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 pb-4 pb-lg-0" data-aos="fade-right">
                    <div class="bg-primary text-dark text-center p-4">
                        <h4 class="m-0">
                            <i class="fa fa-map-marker-alt text-white mr-2"></i>
                            San Nicolas de los Garza, N.L. México
                        </h4>
                    </div>
                    <iframe style="width: 100%; height: 470px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24176.667130001126!2d-100.29301750450327!3d25.741380125394983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662930bca7a0d03%3A0x1af2660b410f21a7!2sSan%20Nicol%C3%A1s%20de%20los%20Garza%2C%20N.L.!5e0!3m2!1ses-419!2smx!4v1750394637349!5m2!1ses-419!2smx"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

                <div class="col-lg-7" data-aos="fade-left">
                    <h6 class="text-primary text-uppercase font-weight-bold">Contáctanos</h6>
                    <h1 class="mb-4">¿Tienes dudas?</h1>
                    <div class="contact-form bg-secondary" style="padding: 30px;">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="name" placeholder="Tu nombre"
                                    required="required" data-validation-required-message="Por favor ingresa tu nombre" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" id="email" placeholder="Tu correo"
                                    required="required" data-validation-required-message="Por favor ingresa tu correo" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="subject" placeholder="Asunto"
                                    required="required" data-validation-required-message="Por favor ingresa un asunto" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control border-0 py-3 px-4" rows="3" id="message"
                                    placeholder="Escribe tu mensaje" required="required"
                                    data-validation-required-message="Por favor ingresa tu mensaje"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">
                                    Enviar mensaje
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    
    <!--faqs-->
    <div class="container-fluid py-5" data-aos="fade-up">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">FAQ</h6>
                <h1 class="mb-4">Preguntas Frecuentes</h1>
            </div>
            <div class="accordion" id="faqAccordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                ¿Cuánto tiempo tarda en llegar un pedido?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                        <div class="card-body">
                            El tiempo de entrega varía según la pieza, pero en promedio nuestros pedidos tardan de 7 a 15 días hábiles en llegar a su destino en México una vez procesado el pago.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                ¿Qué métodos de pago aceptan?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                        <div class="card-body">
                            Aceptamos transferencias bancarias (SPEI), depósitos en efectivo y pagos con tarjeta de crédito/débito a través de un enlace seguro de pago.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                ¿El precio de la cotización ya incluye todo?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                        <div class="card-body">
                            ¡Sí! Nuestras cotizaciones son transparentes. El precio que te damos ya incluye el costo de la pieza, el envío desde EE.UU., los impuestos de importación y el envío hasta tu domicilio. Si tienes dudas envía un correo a ventas@jtimports.com.mx. Sin sorpresas.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'templates/footer.php'; ?>