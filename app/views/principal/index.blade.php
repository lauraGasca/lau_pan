@section('contenido')
    <section id="home-media" class="home-media section">
        <div class="home-fullscreen tb">
            <div class="awe-parallax bg-1"></div>
            <div class="awe-overlay overlay-default"></div>
            <div class="tb-cell text-center">
                <div class="home-content">
                    <div class="ribbon ribbon-1">
                        <h2 class="sm">Bienvenido a</h2>
                    </div>
                    <h1 class="sbig text-uppercase">El triunfo</h1>
                    <div class="awe-hr">
                        <i class="icon awe_certificate"></i>
                    </div>
                    <p class="xmd">Desde 1935</p>
                </div>
            </div>
        </div>
    </section>
    <section id="good-food" class="good-food section pd">
        <div class="container">
            <div class="good-food-heading text-center">
                <div class="good-food-title style-2">
                    <h6 class="xmd text-uppercase">Acambaro</h6>
                    <i class="icon awe_quote_left"></i>
                    <h2 class="lg text-capitalize">Lugar de Magueyes</h2>
                    <i class="icon awe_quote_right"></i>
                </div>
                <p>La ciudad fue fundada oficialmente el 19 de Septiembre de 1526 por el cacique Don Nicolás de San Luis Montañés, con el nombre de San Francisco de Acámbaro.</p>
                <a href="{{url('/nosotros')}}" class="awe-btn awe-btn-2 awe-btn-default text-uppercase">Nosotros</a>
            </div>
        </div>
        <div class="divider divider-2"></div>
    </section>
    <section id="testimonial" class="testimonial testimonial-2 section">
        <div class="awe-parallax bg-2"></div>
        <div class="divider divider-2"></div>
        <div class="container">
            <div class="testimonial-slider text-center">
                <div class="item">
                    <div class="icon-head">
                        <i class="icon awe_quote_left"></i>
                    </div>
                    <blockquote>
                        <p>No se trata de nutrientes y calorías.</p>
                        <span>Se trata de compartir. Se trata de la honestidad. Se trata de la identidad.</span>
                        <div class="test-footer">
                            <span class="sm">Robert Smith</span>
                        </div>
                    </blockquote>
                </div>
                <div class="item">
                    <div class="icon-head">
                        <i class="icon awe_quote_left"></i>
                    </div>
                    <blockquote>
                        <p>No se trata de nutrientes y calorías.</p>
                        <span>Se trata de compartir. Se trata de la honestidad. Se trata de la identidad.</span>
                        <div class="test-footer">
                            <span class="sm">Robert Smith</span>
                        </div>
                    </blockquote>
                </div>
                <div class="item">
                    <div class="icon-head">
                        <i class="icon awe_quote_left"></i>
                    </div>
                    <blockquote>
                        <p>No se trata de nutrientes y calorías.</p>
                        <span>Se trata de compartir. Se trata de la honestidad. Se trata de la identidad.</span>
                        <div class="test-footer">
                            <span class="sm">Robert Smith</span>
                        </div>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    <section id="fastfood" class="fastfood section pd70">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="fastfood-description">
                        <div class="content-heading mt">
                            <h4 class="lg text-uppercase">El triunfo</h4>
                            <hr class="_hr">
                        </div>
                        <div class="text-wrap">
                            <p>En 1976, Samuel Silva desarrolla una nueva fórmula y una nueva figura con el nombre de “ACAMBARITAS”, que a pesar de la enorme variedad de panes que hay en la panadería mexicana, es única y actualmente de marcada preferencia popular. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <div class="fastfood-items">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="fastfood-item">
                                    <img src="images/fastfood/img-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-xs-5">
                                <div class="fastfood-item">
                                    <img src="images/fastfood/img-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-xs-5">
                                <div class="fastfood-item">
                                    <img src="images/fastfood/img-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-xs-5">
                                <div class="fastfood-item">
                                    <img src="images/fastfood/img-4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-highlight section">
        <div class="divider divider-2 divider-color"></div>
        <div class="awe-color"></div>
        <div class="container"><div class="highlight-content tb"></div></div>
    </section>
    <section id="section-blog" class="section-blog section">
        <div class="divider divider-2"></div>
        <div class="container">
            <div class="row">
                <div class="blog-grid">
                    <div class="grid-sizer"></div>
                    <div class="post post-single w2">
                        <div class="post-media">
                            <img src="images/blog/img-1.jpg" alt="">
                        </div>
                        <div class="post-body">
                            <div class="post-title">
                                <h2 class="text-uppercase"><a href="{{url('/productos')}}">Nuestros Productos</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="post post-single">
                        <div class="post-media">
                            <img src="images/blog/img-2.jpg" alt="">
                        </div>
                        <div class="post-body">
                            <div class="post-title">
                                <h2 class="text-uppercase"><a href="{{url('/productos')}}">Linea Tradicional</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="post post-single">
                        <div class="post-media">
                            <img src="images/blog/img-3.jpg" alt="">
                        </div>
                        <div class="post-body">
                            <div class="post-title">
                                <h2 class="text-uppercase"><a href="{{url('/productos/integral')}}">Linea Integral</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="post post-single">
                        <div class="post-media">
                            <img src="images/blog/img-4.jpg" alt="">
                        </div>
                        <div class="post-body">
                            <div class="post-title">
                                <h2 class="text-uppercase"><a href="{{url('/productos/especial')}}">Linea Especial</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="post post-single">
                        <div class="post-media">
                            <img src="images/blog/img-12.jpg" alt="">
                        </div>
                        <div class="post-body">
                            <div class="post-title">
                                <h2 class="text-uppercase"><a href="{{url('/productos/peques')}}">Para los Peques</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact section">
        <div class="contact-first">
            <div class="awe-overlay overlay-default"></div>
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
            <div id="map" data-map-zoom="14" data-map-latlng="20.0338901, -100.7235857" data-snazzy-map-theme="grayscale" data-map-marker="images/marker.png" data-map-marker-size="200*60">            </div>
        </div>
        @if(count($errors)>0||Session::get('correo'))
            <script>
                location.href = "#formularios"
            </script>
        @endif
        <div class="contact-second tb" id="formularios">
            <div class="tb-cell">
                <div class="contact-form contact-form-1">
                    <div class="inner wow fadeInUp" data-wow-delay=".3s">
                        @if(Session::get('correo'))
                            <div class="alert alert-success alert-bold-border square fade in alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <strong>¡Gracias por contactarnos!</strong> Contestaremos tu correo lo m&aacute;s pronto posible.</a>
                            </div>
                        @endif
                        {{ Form::open(array('url'=>'contacto', 'method' => 'post') )}}
                            <div class="form-item form-type-name">
                                {{Form::text('nombre', null, array('placeholder'=>'Nombre'))}}
                                <span class="message-error">{{$errors->first('nombre')}}</span>
                            </div>
                            <div class="form-item form-type-email">
                                {{Form::email('correo', null, array('placeholder'=>'Correo'))}}
                                <span class="message-error">{{$errors->first('correo')}}</span>
                            </div>
                            <div class="form-item form-textarea">
                                {{ Form::textarea('mensaje', null, array('placeholder'=>'Mensaje')) }}
                                <span class="message-error">{{$errors->first('mensaje')}}</span>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Enviar" class="awe-btn awe-btn-2 awe-btn-default text-uppercase">
                            </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
            <div class="tb-cell">
                <div class="news-letter text-center">
                    <div class="inner wow fadeInUp" data-wow-delay=".6s">
                        <div class="letter-heading">
                            <h4 class="sm text-uppercase">Recibe actualizaciones</h4>
                            <p>Suscribete para recibir en tu correo nuestras actualizaciones</p>
                        </div>
                        {{ Form::open(array('url'=>'suscribir', 'method' => 'post') )}}
                            <div class="form-item">
                                {{Form::text('nombre_completo', null, array('placeholder'=>'Nombre Completo', 'class'=>"text-uppercase"))}}
                                <span class="message-error">{{$errors->first('nombre_completo')}}</span>
                            </div>
                            <div class="form-item">
                                {{Form::email('email', null, array('placeholder'=>'Correo Electronico', 'class'=>"text-uppercase"))}}
                                <span class="message-error">{{$errors->first('email')}}</span>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Suscribirse" class="awe-btn awe-btn-2 awe-btn-default text-uppercase">
                            </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop