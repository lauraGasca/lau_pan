@section('contenido')
    <!-- SUB BANNER -->
    <section class="sub-banner text-center section">
        <div class="awe-parallax bg-3"></div>
        <div class="awe-title awe-title-3">
            <h3 class="lg text-uppercase">Contactanos</h3>
        </div>
    </section>
    <!-- END / SUB BANNER -->

    <!-- CONTACT US -->
    <section id="contact" class="contact section">

        <div class="contact-form contact-form-2">
            <div class="divider divider-2"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <address class="find-us">
                            <span class="md">Contactanos</span>
                            <!--<div class="location-1">
                                <i class="icon awe_map_marker"></i>
                                <strong>Dr. Jolly</strong>
                            </div>-->

                            <div class="location-1">
                                <i class="icon awe_map_marker"></i>
                                <strong>Mariano Abasolo #29</strong>
                                Zona Centro, Ac&aacute;mbaro, Gto.
                            </div>

                            <div class="phone">
                                <strong>Telefonos</strong>
                                172-3163, 172-2011
                            </div>

                            <div class="phone">
                                <strong>Correo</strong>
                                panificadora_triunfo@live.com
                            </div>
                        </address>
                    </div>
                    <div class="col-md-8">
                        <div class="form-row">
                            <form id="send-message-form" action="http://envato.megadrupal.com/html/ambrosia/processContact.php" method="post">
                                <div class="form-item form-textarea">
                                    <textarea placeholder="Mensaje" name="message"></textarea>
                                </div>
                                <div class="form-item form-type-name">
                                    <input type="text" placeholder="Nombre" name="name">
                                </div>
                                <div class="form-item form-type-email">
                                    <input type="text" placeholder="Correo" name="email">
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Enviar" class="awe-btn awe-btn-2 awe-btn-default text-uppercase">
                                </div>
                                <div id="contact-content"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-first">

            <!-- OVERLAY -->
            <div class="awe-overlay overlay-default"></div>
            <!-- END / OVERLAY -->

            <div class="section-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="contact-body text-center">
                                <h3 class="lg text-uppercase">Contactanos</h3>
                                <hr class="_hr">
                                <address class="address-wrap">
                                    <span class="address">Mariano Abasolo #29, Zona Centro, Ac&aacute;mbaro, Gto.</span>
                                    <span class="phone">(417) 172-3163</span>
                                </address>
                            </div>

                            <div class="see-map text-center">
                                <a href="#" data-see-contact="Ver Informaci&oacute;n de Contacto" data-see-map="Ver Mapa de localicacion" class="awe-btn awe-btn-5 awe-btn-default text-uppercase"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MAP -->
            <div id="map" data-map-zoom="14" data-map-latlng="20.0338901, -100.7235857" data-snazzy-map-theme="grayscale" data-map-marker="images/marker.png" data-map-marker-size="200*60">            </div>
            <!-- END / MAP -->
        </div>

        <div class="contact-second tb">

            <!-- NEWS LETTER -->
            <div class="tb-cell">
                <div class="news-letter text-center">
                    <div class="inner wow fadeInUp" data-wow-delay=".6s">
                        <div class="letter-heading">
                            <h4 class="sm text-uppercase">Recibe actualizaciones</h4>
                            <p>Suscribete para recibir en tu correo nuestras actualizaciones</p>
                        </div>
                        <form>
                            <div class="form-item">
                                <input type="text" placeholder="Correo Electronico" class="text-uppercase" name="email">
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Suscribirse" class="awe-btn awe-btn-2 awe-btn-default text-uppercase">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END / NEWS LETTER -->
        </div>

    </section>

    <!-- END / CONTACT US -->
@stop