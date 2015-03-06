@section('contenido')
    <div class="mail-apps-wrap">
        <div class="the-box bg-success no-border no-margin heading">
            <div class="row">
                <div class="col-sm-6">
                    <h1><i class="fa fa-child icon-lg icon-circle icon-bordered"></i> Suscriptores</h1>
                </div>
            </div>
        </div><br/>
        <div class="container-fluid">
            <div class="the-box full no-border">
                @if(Session::get('confirm'))
                    <div class="alert alert-success alert-bold-border square fade in alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{Session::get('confirm')}}
                    </div>
                @endif
                <br/>
                <div class="btn-group">
                    <a href="{{url('suscripciones/crear')}}" class="btn btn-danger"><i class="fa fa-plus"></i> Agregar Suscriptor</a>
                </div>
                <div class="btn-group">
                    <a href="{{url('suscripciones/correo')}}" class="btn btn-info"><i class="fa fa-paper-plane"></i> Enviar Correo</a>
                </div><br/><br/>
                <div class="the-box no-border">
                    <div class="table-responsive">
                        <table class="table table-th-block table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 45%;">Nombre</th>
                                    <th style="width: 45%;">Correo</th>
                                    <th style="width: 10%;" colspan="2"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($suscripciones as $suscripcion)
                                    <tr>
                                        <td>{{$suscripcion->nombre_completo}}</td>
                                        <td>{{$suscripcion->email}}</td>
                                        <td>
                                            <a href="{{url('suscripciones/update/'.$suscripcion->id)}}" style="color: #666666;">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{url('suscripciones/delete/'.$suscripcion->id)}}" style="color: #666666;" onclick="return confirm('\u00BFSeguro que deseas eliminar?');" >
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            &copy; 2015 <a href="{{url('/')}}" style="color: #666666;">El Triunfo</a>
        </footer>
    </div>
@stop