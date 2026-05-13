<?php include 'templates/header.php'; ?>

    <div class="jumbotron jumbotron-fluid jumbotron-help-hero mb-5">
        <div class="container text-center py-5">
            <h1 class="display-3 text-uppercase text-white mb-3" data-aos="fade-down">Centro de Ayuda</h1>
            <p class="lead text-white mb-4" data-aos="fade-up" data-aos-delay="100">
                Resolvemos tus dudas para que tu experiencia sea la mejor.
            </p>
            <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                <ol class="breadcrumb justify-content-center bg-transparent p-0">
                    <li class="breadcrumb-item"><a href="index.php" class="text-white">Inicio</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">FAQs y Ayuda</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-10 offset-lg-1" data-aos="fade-up">
                
                <div class="text-center">
                    <h2 id="faqs" class="display-4 font-weight-bold">Preguntas Frecuentes</h2>
                    <p class="mb-5">Respuestas rápidas a las dudas más comunes de nuestros clientes.</p>
                </div>
                
                <div class="accordion" id="faqAccordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    ¿Cómo funciona el proceso para cotizar y comprar una pieza?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                            <div class="card-body">
                                ¡Es muy fácil! <strong>1.</strong> Llenas el formulario de contacto o cotización con los detalles de la pieza que necesitas. <strong>2.</strong> Nuestro equipo investiga y te envía una cotización detallada con el precio final. <strong>3.</strong> Si la apruebas, realizas el pago. <strong>4.</strong> Nosotros nos encargamos de todo el proceso de importación y te enviamos la pieza hasta tu domicilio.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    ¿Qué incluye el precio de la cotización?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                            <div class="card-body">
                                Nuestras cotizaciones son 100% transparentes. El precio que te damos es el precio final, e incluye: el costo de la pieza, el envío dentro de EE.UU., los impuestos y aranceles de importación, nuestros honorarios y el envío final hasta tu domicilio en México. <strong>Sin costos ocultos ni sorpresas.</strong>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ¿Cuánto tiempo tarda en llegar mi pedido?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                            <div class="card-body">
                                El tiempo de entrega promedio es de <strong>7 a 15 días hábiles</strong> una vez que se ha procesado el pago. Este tiempo puede variar ligeramente dependiendo de la ubicación del proveedor en EE.UU. y los procesos en la aduana, pero siempre te mantendremos informado sobre el estado de tu pedido.
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    ¿Qué métodos de pago aceptan?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqAccordion">
                            <div class="card-body">
                                Aceptamos transferencias bancarias (SPEI), depósitos en efectivo en tiendas de conveniencia y pagos con tarjeta de crédito o débito a través de un enlace de pago seguro que te proporcionaremos.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    ¿Las piezas que importan tienen garantía?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqAccordion">
                            <div class="card-body">
                                Sí. Todas las piezas nuevas cuentan con la garantía original del fabricante. Nosotros actuamos como intermediarios para facilitar cualquier proceso de reclamación con el proveedor en EE.UU. Es importante mencionar que la garantía generalmente cubre defectos de fabricación y no cubre costos de instalación o envío.
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-5">

                <div id="ayuda" class="text-center mt-5">
                    <h2 class="display-4 font-weight-bold">¿Aún Necesitas Ayuda?</h2>
                    <p class="mb-5">Si no encontraste la respuesta a tu duda, contáctanos. Estamos para servirte.</p>
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-right">
                            <div class="bg-secondary p-4 rounded h-100 d-flex flex-column">
                                <h3 class="font-weight-bold"><i class="fa fa-file-invoice text-primary mr-2"></i>Cotizaciones y Pedidos</h3>
                                <p class="flex-grow-1">Para solicitar la cotización de una o más piezas, la forma más eficiente es a través de nuestro formulario detallado.</p>
                                <a href="contact.php" class="btn btn-primary mt-auto">Ir al Formulario</a>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-left">
                            <div class="bg-secondary p-4 rounded h-100 d-flex flex-column">
                                <h3 class="font-weight-bold"><i class="fab fa-whatsapp text-primary mr-2"></i>Asesoría Personalizada</h3>
                                <p class="flex-grow-1">Si tienes dudas sobre qué pieza es la mejor para tu proyecto o necesitas una respuesta más inmediata, envíanos un WhatsApp.</p>
                                <a href="https://wa.me/528129185691?text=Hola%20JT%20Imports,%20necesito%20asesoría." class="btn btn-success mt-auto" target="_blank" rel="noopener noreferrer">Iniciar Chat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php include 'templates/footer.php'; ?>