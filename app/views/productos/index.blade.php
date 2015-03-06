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
            <div class="the-box no-border">
                <div class="btn-toolbar top-table" role="toolbar">
                    <div class="btn-group">
                        <a href="{{url('producto/crear')}}" class="btn btn-danger"><i class="fa fa-plus"></i> Agregar Producto</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-th-block table-hover">
                        <thead>
                            <tr>
                                <th style="width: 25%;">Nombre</th>
                                <th style="width: 55%;">Descripci&oacute;n</th>
                                <th style="width: 15%;">Categoria</th>
                                <th style="width: 5%;" colspan="2"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($productos as $producto)
                            <tr>
                                <td>
                                    {{ HTML::image('images/panes/'.$producto->foto, $producto->nombre, ['class' => 'avatar']) }}
                                    {{$producto->nombre}}
                                </td>
                                <td>{{$producto->descripcion}}</td>
                                <td>{{$producto->categoria}}</td>
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