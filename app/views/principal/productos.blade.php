@section('titulo')
    El triunfo | Productos
@show

@section('contenido')
    <section class="sub-banner text-center section">
        <div class="awe-parallax bg-4"></div>
        <div class="awe-title awe-title-3">
            <h3 class="lg text-uppercase">Productos</h3>
        </div>
    </section>
    <section id="the-menu" class="the-menu section">
        <div class="tabs-menu tabs-page">
            <div class="container">
                <ul class="nav-tabs text-center" role="tablist">
                    <li @if($categoria==null) class="active" @endif >
                        {{ HTML::link('productos', 'Linea Tradicional') }}
                    </li>
                    <li @if($categoria=='integral') class="active" @endif >
                        {{ HTML::link('productos/integral', 'Linea Integral') }}
                    </li>
                    <li @if($categoria=='especial') class="active" @endif >
                        {{ HTML::link('productos/especial', 'Linea Especial') }}
                    </li>
                    <li @if($categoria=='peques') class="active" @endif >
                        {{ HTML::link('productos/peques', 'Para los Peques') }}
                    </li>
                </ul>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="tab-menu-content tab-content">
                    <div class="tab-pane fade
                        @if($categoria==null) in active @endif " id="breakfast">
                        <div class="row">
                            @foreach($tradicionales as $tradicional)
                                <div class="col-lg-6">
                                    <div class="the-menu-item">
                                        <div class="image-wrap">
                                            {{ HTML::image('images/panes/'.$tradicional->foto,'',['width'=>"130px"]) }}
                                        </div>
                                        <div class="the-menu-body">
                                            <h4 class="xsm">{{$tradicional->nombre}}</h4>
                                            <p>{{$tradicional->descripcion}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade @if($categoria=='integral') in active @endif " id="lunch">
                        <div class="row">
                            @foreach($integrales as $integral)
                                <div class="col-lg-6">
                                    <div class="the-menu-item">
                                        <div class="image-wrap">
                                            {{ HTML::image('images/panes/'.$integral->foto,'',['width'=>"130px"]) }}
                                        </div>
                                        <div class="the-menu-body">
                                            <h4 class="xsm">{{$integral->nombre}}</h4>
                                            <p>{{$integral->descripcion}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade @if($categoria=='especial') in active @endif " id="dinner">
                        <div class="row">
                            @foreach($especiales as $especial)
                                <div class="col-lg-6">
                                    <div class="the-menu-item">
                                        <div class="image-wrap">
                                            {{ HTML::image('images/panes/'.$especial->foto,'',['width'=>"130px"]) }}
                                        </div>
                                        <div class="the-menu-body">
                                            <h4 class="xsm">{{$especial->nombre}}</h4>
                                            <p>{{$especial->descripcion}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade @if($categoria=='peques') in active @endif " id="dessert">
                        <div class="row">
                            @foreach($peques as $peque)
                                <div class="col-lg-6">
                                    <div class="the-menu-item">
                                        <div class="image-wrap">
                                            {{ HTML::image('images/panes/'.$peque->foto,'',['width'=>"130px"]) }}
                                        </div>
                                        <div class="the-menu-body">
                                            <h4 class="xsm">{{$peque->nombre}}</h4>
                                            <p>{{$peque->descripcion}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop