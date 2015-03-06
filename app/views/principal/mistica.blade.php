@section('titulo')
    El triunfo | Nosotros
@show

@section('contenido')
    <section class="sub-banner text-center section">
        <div class="awe-parallax bg-5"></div>
        <div class="awe-title awe-title-3">
            <h3 class="lg text-uppercase">Nosotros</h3>
        </div>
    </section>
    <section id="about-story" class="about-story section">
        <div class="divider divider-2"></div>
        <div class="container">
            <div class="block-first">
                <div class="row">
                    <div class="col-md-4">
                        <div class="image-wrap">
                            {{ HTML::image('images/about/img-1.jpg') }}
                        </div>
                    </div>
                    <div class="col-md-7 col-md-offset-1">
                        <h4 class="lg text-uppercase">Nuestra Misi&oacute;n</h4>
                        <p>Ser lideres representativos en la fabricación de Pan Grande de Acámbaro y productos para la industria alimenticia, asegurando una total calidad e higiene y puntualidad en nuestros procesos garantizando además la calidad de vida de nuestros trabajadores y sus familias. Alcanzando la excelencia mediante un plan de capacitación y mejora continua.</p>
                    </div>
                </div>
            </div>
            <div class="block-last">
                <div class="row">
                    <div class="col-md-4 col-md-push-8">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="image-wrap">
                                    {{ HTML::image('images/about/img-2.jpg') }}
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="image-wrap">
                                    {{ HTML::image('images/about/img-3.jpg') }}
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="image-wrap">
                                    {{ HTML::image('images/about/img-4.jpg') }}
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="image-wrap">
                                    {{ HTML::image('images/about/img-5.jpg') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-md-pull-4">
                        <h4 class="lg text-uppercase">Nuestra Visi&oacute;n</h4>
                        <p>Ser la empresa representativa del Pan Grande de Acámbaro, convirtiendonos en una opción alternativa en el mercado que provea productos de calidad altamente nutritivos en la cadena de suministros a nuestros clientes y que brinde alternativas de solución adicionales. Convirtiendonos en su proveedor estrategico totalmente confiable e indispensable.</p>
                    </div>
                </div>
            </div>
            <div class="block-first">
                <div class="row">
                    <div class="col-md-4">
                        <div class="image-wrap">
                            {{ HTML::image('images/about/img-6.jpg') }}
                        </div>
                    </div>
                    <div class="col-md-7 col-md-offset-1">
                        <h4 class="lg text-uppercase">Politica de Calidad</h4>
                        <p>Somos una empresa enfocada a la satisfacción de necesidades y expectativas de nuestros clientes a traves de la mejora continua, en el trabajo en equipo y la capacitación permanente a nuestro personal. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="milestones" class="milestones section">
        <div class="awe-color"></div>
        <div class="awe-pattern"></div>
        <div class="section-heading text-center">
            <div class="ribbon ribbon-4">
                <h2 class="sm">Nuestros Valores</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="milestones-slider">
                    <div class="milestones-item text-center">
                        <div class="image-wrap">
                            {{ HTML::image('images/milestones/img-1.jpg') }}
                        </div>
                        <div class="item-body">
                            <span class="time">Servicio</span>
                            <p>Servicio</p>
                        </div>
                    </div>
                    <div class="milestones-item text-center">
                        <div class="image-wrap">
                            {{ HTML::image('images/milestones/img-2.jpg') }}
                        </div>
                        <div class="item-body">
                            <span class="time">Seguridad</span>
                            <p>Seguridad</p>
                        </div>
                    </div>
                    <div class="milestones-item text-center">
                        <div class="image-wrap">
                            {{ HTML::image('images/milestones/img-3.jpg') }}
                        </div>
                        <div class="item-body">
                            <span class="time">Honestidad</span>
                            <p>Honestidad</p>
                        </div>
                    </div>
                    <div class="milestones-item text-center">
                        <div class="image-wrap">
                            {{ HTML::image('images/milestones/img-4.jpg') }}
                        </div>
                        <div class="item-body">
                            <span class="time">Disciplina</span>
                            <p>Disciplina</p>
                        </div>
                    </div>
                    <div class="milestones-item text-center">
                        <div class="image-wrap">
                            {{ HTML::image('images/milestones/img-5.jpg') }}
                        </div>
                        <div class="item-body">
                            <span class="time">Innovaci&oacute;n</span>
                            <p>Innovaci&oacute;n</p>
                        </div>
                    </div>
                    <div class="milestones-item text-center">
                        <div class="image-wrap">
                            {{ HTML::image('images/milestones/img-6.jpg') }}
                        </div>
                        <div class="item-body">
                            <span class="time">Orgullo</span>
                            <p>Orgullo</p>
                        </div>
                    </div>
                    <div class="milestones-item text-center">
                        <div class="image-wrap">
                            {{ HTML::image('images/milestones/img-7.jpg') }}
                        </div>
                        <div class="item-body">
                            <span class="time">Trabajo en equipo</span>
                            <p>Trabajo en equipo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonial" class="testimonial testimonial-2 section">
        <div class="divider divider-2"></div>
        <div class="container">
            <div class="testimonial-slider text-center">
                @foreach($frases as $frase)
                    <div class="item">
                        <div class="icon-head">
                            <i class="icon awe_quote_left"></i>
                        </div>
                        <blockquote>
                            <p>{{$frase->frase}}</p>
                            <div class="test-footer">
                                <span class="sm">{{$frase->autor}}</span>
                            </div>
                        </blockquote>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop