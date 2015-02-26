@section('contenido')

    <!-- SUB BANNER -->
    <section class="sub-banner text-center section">
        <div class="awe-parallax bg-4"></div>
        <div class="awe-title awe-title-3">
            <h3 class="lg text-uppercase">Productos</h3>
        </div>
    </section>
    <!-- END / SUB BANNER -->

    <!-- THE MENU -->
    <section id="the-menu" class="the-menu section">
        <div class="tabs-menu tabs-page">
            <div class="container">
                <ul class="nav-tabs text-center" role="tablist">
                    <li @if($categoria==null) class="active" @endif ><a href="{{url('/productos')}}">Linea Tradicional</a></li>
                    <li @if($categoria=='integral') class="active" @endif ><a href="{{url('/productos/integral')}}">Linea Integral</a></li>
                    <li @if($categoria=='especial') class="active" @endif ><a href="{{url('/productos/especial')}}">Linea Especial</a></li>
                    <li @if($categoria=='peques') class="active" @endif ><a href="{{url('/productos/peques')}}">Para los Peques</a></li>
                </ul>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="tab-menu-content tab-content">
                    <!-- BREAKFAST -->
                    <div class="tab-pane fade
                        @if($categoria==null) in active @endif " id="breakfast">
                        <div class="row">

                            <!-- THE MENU ITEM -->
                            <div class="col-lg-6">
                                <div class="the-menu-item">
                                    <div class="image-wrap">
                                        {{ HTML::image('images/themenu/IMG_5930.JPG','',['width'=>"130px"]) }}
                                    </div>
                                    <div class="the-menu-body">
                                        <h4 class="xsm">Pan de Ajonjoli</h4>
                                        <p>Se decora con semillas de ajonjoli, los cortes que se le hacen son los m&aacute;s antiguos en la historia del pan de Acambaro.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END / THE MENU ITEM -->

                            <!-- THE MENU ITEM -->
                            <div class="col-lg-6">
                                <div class="the-menu-item">
                                    <div class="image-wrap">
                                        {{ HTML::image('images/themenu/Pan Tallado.JPG','',['width'=>"130px"]) }}
                                    </div>
                                    <div class="the-menu-body">
                                        <h4 class="xsm">Pan Tallado</h4>
                                        <p>Debe su nombre a que actualmente se tallaba la masa en un metate. Las rayas caracteristicas evocan la fertilidad de los campos del bajio.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END / THE MENU ITEM -->

                            <!-- THE MENU ITEM -->
                            <div class="col-lg-6">
                                <div class="the-menu-item">
                                    <div class="image-wrap">
                                        {{ HTML::image('images/themenu/PAN PICON.JPG','',['width'=>"130px"]) }}
                                    </div>
                                    <div class="the-menu-body">
                                        <h4 class="xsm">Picon</h4>
                                        <p>Su nombre recuerda el pico usado en agricultura, adornado con una trenza a todo lo largo. Solia untarse con leche "clavel".</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END / THE MENU ITEM -->

                            <!-- THE MENU ITEM -->
                            <div class="col-lg-6">
                                <div class="the-menu-item">
                                    <div class="image-wrap">
                                        {{ HTML::image('images/themenu/Pan Ranchero.JPG','',['width'=>"130px"]) }}
                                    </div>
                                    <div class="the-menu-body">
                                        <h4 class="xsm">Pan Ranchero</h4>
                                        <p>Su nombre se debe a que evoca un sombrero tipico de la regi&oacute;n tarasca, o bien, un volcan en erupcion</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END / THE MENU ITEM -->

                            <!-- THE MENU ITEM -->
                            <div class="col-lg-6">
                                <div class="the-menu-item">
                                    <div class="image-wrap">
                                        {{ HTML::image('images/themenu/PAN DE AGUA.JPG','',['width'=>"130px"]) }}
                                    </div>
                                    <div class="the-menu-body">
                                        <h4 class="xsm">Pan de Agua</h4>
                                        <p>Su figura semeje a un maguey de que esta brotando la vara que dara su flor y fertilizara las flores femeninas para dar origen a otras plantas.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END / THE MENU ITEM -->

                            <!-- THE MENU ITEM -->
                            <div class="col-lg-6">
                                <div class="the-menu-item">
                                    <div class="image-wrap">
                                        {{ HTML::image('images/themenu/IMG_5956.JPG','',['width'=>"130px"]) }}
                                    </div>
                                    <div class="the-menu-body">
                                        <h4 class="xsm">Concha</h4>
                                        <p>Su nombre se debe al dibujo hecho con un molde especial sobre la cubierta hecha a base de azucar</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END / THE MENU ITEM -->

                            <!-- THE MENU ITEM -->
                            <div class="col-lg-6">
                                <div class="the-menu-item">
                                    <div class="image-wrap">
                                        {{ HTML::image('images/themenu/222.JPG','',['width'=>"130px"]) }}
                                    </div>
                                    <div class="the-menu-body">
                                        <h4 class="xsm">Puerquitos</h4>
                                        <p>Deben su nombre precisamente a su figura en forma de un peque&ntilde;o cerdo.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END / THE MENU ITEM -->

                            <!-- THE MENU ITEM -->
                            <div class="col-lg-6">
                                <div class="the-menu-item">
                                    <div class="image-wrap">
                                        {{ HTML::image('images/themenu/PAN DE LECHE.JPG','',['width'=>"130px"]) }}
                                    </div>
                                    <div class="the-menu-body">
                                        <h4 class="xsm">Pan de leche</h4>
                                        <p>De aspecto brillante debido a ser con clara de huevo, aunque en la primera mitad del siglo veinte se untaba con leche.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END / THE MENU ITEM -->

                        </div>

                    </div>
                    <!-- END / BREAKFAST -->

                    <!-- LUNCH -->
                    <div class="tab-pane fade @if($categoria=='integral') in active @endif " id="lunch">
                        <div class="row">

                            <!-- THE MENU ITEM -->
                            <div class="col-lg-6">
                                <div class="the-menu-item">
                                    <div class="image-wrap">
                                        {{ HTML::image('images/themenu/IMG_5882.JPG','',['width'=>"130px"]) }}
                                    </div>
                                    <div class="the-menu-body">
                                        <h4 class="xsm">Cema de Granillo</h4>
                                        <p>Es el producto m&aacute;s integral de la gama de pan grande de Acambaro en el proceso de blanqueamiento de la harina.</p>
                                    </div>
                                    <div class="prices">
                                        <span class="price xsm">$16.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END / THE MENU ITEM -->

                            <!-- THE MENU ITEM -->
                            <div class="col-lg-6">
                                <div class="the-menu-item">
                                    <div class="image-wrap">
                                        {{ HTML::image('images/themenu/PAN DE GRANILLO.JPG','',['width'=>"130px"]) }}
                                    </div>
                                    <div class="the-menu-body">
                                        <h4 class="xsm">Pan de Granillo</h4>
                                        <p>Es el producto m&aacute;s integral de la gama de pan grande de Acambaro en el proceso de blanqueamiento de la harina</p>
                                    </div>
                                    <div class="prices">
                                        <span class="price xsm">$16.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END / THE MENU ITEM -->

                        </div>
                    </div>
                    <!-- END / LUNCH -->

                    <!-- DINNER -->
                    <div class="tab-pane fade @if($categoria=='especial') in active @endif " id="dinner">
                        <div class="row">

                            <!-- THE MENU ITEM -->
                            <div class="col-lg-6">
                                <div class="the-menu-item">
                                    <div class="image-wrap">
                                        {{ HTML::image('images/themenu/Acambarita.JPG','',['width'=>"130px"]) }}
                                    </div>
                                    <div class="the-menu-body">
                                        <h4 class="xsm">Acambaritas</h4>
                                        <p>Debe su nombre a que actualmente se tallaba la masa en un metate. Las rayas caracteristicas evocan la fertilidad de los campos del bajio.</p>
                                    </div>
                                    <div class="prices">
                                        <span class="price xsm">$16.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END / THE MENU ITEM -->

                            <!-- THE MENU ITEM -->
                            <div class="col-lg-6">
                                <div class="the-menu-item">
                                    <div class="image-wrap">
                                        {{ HTML::image('images/themenu/PAN PICON.JPG','',['width'=>"130px"]) }}
                                    </div>
                                    <div class="the-menu-body">
                                        <h4 class="xsm">Picon</h4>
                                        <p>Su nombre recuerda el pico usado en agricultura, adornado con una trenza a todo lo largo. Solia untarse con leche "clavel".</p>
                                    </div>
                                    <div class="prices">
                                        <span class="price xsm">$16.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END / THE MENU ITEM -->

                            <!-- THE MENU ITEM -->
                            <div class="col-lg-6">
                                <div class="the-menu-item">
                                    <div class="image-wrap">
                                        {{ HTML::image('images/themenu/Pan Tallado.JPG','',['width'=>"130px"]) }}
                                    </div>
                                    <div class="the-menu-body">
                                        <h4 class="xsm">Pan Tallado</h4>
                                        <p>Debe su nombre a que actualmente se tallaba la masa en un metate. Las rayas caracteristicas evocan la fertilidad de los campos del bajio.</p>
                                    </div>
                                    <div class="prices">
                                        <span class="price xsm">$16.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END / THE MENU ITEM -->

                            <!-- THE MENU ITEM -->
                            <div class="col-lg-6">
                                <div class="the-menu-item">
                                    <div class="image-wrap">
                                        {{ HTML::image('images/themenu/Pan Ranchero.JPG','',['width'=>"130px"]) }}
                                    </div>
                                    <div class="the-menu-body">
                                        <h4 class="xsm">Pan Ranchero</h4>
                                        <p>Su nombre se debe a que evoca un sombrero tipico de la regi&oacute;n tarasca, o bien, un volcan en erupcion</p>
                                    </div>
                                    <div class="prices">
                                        <span class="price xsm">$16.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END / THE MENU ITEM -->

                            <!-- THE MENU ITEM -->
                            <div class="col-lg-6">
                                <div class="the-menu-item">
                                    <div class="image-wrap">
                                        {{ HTML::image('images/themenu/Pan Ranchero.JPG','',['width'=>"130px"]) }}
                                    </div>
                                    <div class="the-menu-body">
                                        <h4 class="xsm">Estropajo</h4>
                                        <p>Relleno de chocolate, les encantaran. </p>
                                    </div>
                                    <div class="prices">
                                        <span class="price xsm">$16.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END / THE MENU ITEM -->

                        </div>
                    </div>
                    <!-- END / DINNER -->

                    <!-- DESSERT -->
                    <div class="tab-pane fade @if($categoria=='peques') in active @endif " id="dessert">
                        <div class="row">

                            <!-- THE MENU ITEM -->
                            <div class="col-lg-6">
                                <div class="the-menu-item">
                                    <div class="image-wrap">
                                        {{ HTML::image('images/themenu/Pan Ranchero.JPG','',['width'=>"130px"]) }}
                                    </div>
                                    <div class="the-menu-body">
                                        <h4 class="xsm">Volc&aacute;n</h4>
                                        <p>Riquisimo pan en forma de volcán relleno de vainilla. </p>
                                    </div>
                                    <div class="prices">
                                        <span class="price xsm">$16.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END / THE MENU ITEM -->

                            <!-- THE MENU ITEM -->
                            <div class="col-lg-6">
                                <div class="the-menu-item">
                                    <div class="image-wrap">
                                        {{ HTML::image('images/themenu/Pan Ranchero.JPG','',['width'=>"130px"]) }}
                                    </div>
                                    <div class="the-menu-body">
                                        <h4 class="xsm">Estropajo</h4>
                                        <p>Relleno de chocolate, les encantaran. </p>
                                    </div>
                                    <div class="prices">
                                        <span class="price xsm">$16.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END / THE MENU ITEM -->

                            <!-- THE MENU ITEM -->
                            <div class="col-lg-6">
                                <div class="the-menu-item">
                                    <div class="image-wrap">
                                        {{ HTML::image('images/themenu/Pan Ranchero.JPG','',['width'=>"130px"]) }}
                                    </div>
                                    <div class="the-menu-body">
                                        <h4 class="xsm">Acambaritas de chocolate</h4>
                                        <p>Con la misma tradición pero ahora de chocolate. </p>
                                    </div>
                                    <div class="prices">
                                        <span class="price xsm">$16.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END / THE MENU ITEM -->

                            <!-- THE MENU ITEM -->
                            <div class="col-lg-6">
                                <div class="the-menu-item">
                                    <div class="image-wrap">
                                        {{ HTML::image('images/themenu/Pan Ranchero.JPG','',['width'=>"130px"]) }}
                                    </div>
                                    <div class="the-menu-body">
                                        <h4 class="xsm">Acambaritas Napolitanas </h4>
                                        <p>Sabrosas acambaritas marmoleadas de nata y chocolate. </p>
                                    </div>
                                    <div class="prices">
                                        <span class="price xsm">$16.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END / THE MENU ITEM -->

                        </div>
                    </div>
                    <!-- END / DESSERT -->

                </div>
            </div>
        </div>
    </section>
    <!-- END / THE MENU -->
@stop