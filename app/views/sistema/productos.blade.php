@section('contenido')
    <div class="mail-apps-wrap">
        <div class="the-box bg-success no-border no-margin heading">
            <div class="row">
                <div class="col-sm-6">
                    <h1><i class="fa fa-cube icon-lg icon-circle icon-bordered"></i> Productos</h1>
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
                    <a href="{{url('producto/crear')}}" class="btn btn-danger"><i class="fa fa-plus"></i> Agregar Producto</a>
                </div><br/><br/>
                <div class="table-responsive">
                    <table class="table table-th-block table-dark">
                        <thead>
                            <tr>
                                <th style="width: 15%;">Nombre</th>
                                <th style="width: 50%;">Descripci&oacute;n</th>
                                <th style="width: 15%;">Categoria</th>
                                <th style="width: 15%;">Imagen</th>
                                <th style="width: 5%;" colspan="2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos as $producto)
                                <tr>
                                    <td>{{$producto->nombre}}</td>
                                    <td>{{$producto->descripcion}}</td>
                                    <td>{{$producto->categoria}}</td>
                                    <td>{{$producto->foto}}</td>
                                    <td>
                                        <a href="{{url('producto/update/'.$producto->id)}}" style="color: #666666;">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{url('producto/delete/'.$producto->id)}}" style="color: #666666;" onclick="return confirm('\u00BFSeguro que deseas eliminar?');" >
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$productos->links();}}
                </div>
            </div>
        </div>
        <footer>
            &copy; 2015 <a href="{{url('/')}}" style="color: #666666;">El Triunfo</a>
        </footer>
    </div>
@stop