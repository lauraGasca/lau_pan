@section('contenido')
    <div class="mail-apps-wrap">
        <div class="the-box bg-success no-border no-margin heading">
            <div class="row">
                <div class="col-sm-6">
                    <h1><i class="fa fa-pencil icon-lg icon-circle icon-bordered"></i> Editar Producto</h1>
                </div>
            </div>
        </div><br/>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    @if(count($errors)>0)
                        <div class="alert alert-danger alert-block fade in alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <strong>¡Por favor!</strong> Revise los datos del formulario.
                        </div>
                    @endif
                    @if(Session::get('confirm'))
                        <div class="alert alert-success alert-bold-border square fade in alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            {{Session::get('confirm')}}
                        </div>
                    @endif
                    <div class="the-box">
                        {{ Form::model($producto, ['url'=>'producto/update', 'method' => 'post', 'enctype'=>'multipart/form-data'])}}
                            {{Form::hidden('id')}}
                            <div class="form-group">
                                <label>Nombre del producto</label>
                                {{Form::text('nombre', null, ['placeholder'=>'Nombre del producto', 'class'=>"form-control input"])}}
                                <span class="message-error">{{$errors->first('nombre')}}</span>
                            </div>
                            <div class="form-group">
                                <label>Descripci&oacute;n del producto</label>
                                {{ Form::textarea('descripcion', null, ['class'=>"form-control no-resize", 'placeholder'=>'Descripci&oacute;n del producto', 'style'=>"height: 120px;"]) }}
                                <span class="message-error">{{$errors->first('descripcion')}}</span>
                            </div>
                            <div class="form-group">
                                <label>Categoria</label>
                                {{Form::select('categoria',[null =>'Selecciona', 'Linea Tradicional'=>'Linea Tradicional', 'Linea Integral'=>'Linea Integral', 'Linea Especial'=>'Linea Especial', 'Para los Peques'=>'Para los Peques'],null, ['class'=>"form-control", 'tabindex'=>"2"])}}
                                <span class="message-error">{{$errors->first('categoria')}}</span>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <div class="input-group">
                                    {{Form::text('texto', null, ['class'=>"form-control", 'readonly'])}}
                                    <span class="input-group-btn">
                                        <span class="btn btn-primary btn-file">
                                            <i class="fa fa-plus"></i>{{Form::file('foto')}}
                                        </span>
                                    </span>
                                </div>
                                <p class="help-block">Tamaño preferido de 130x130 px</p>
                                <span class="message-error">{{$errors->first('foto')}}</span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Guardar</button>
                                <a class="btn btn-danger" href="{{url('producto')}}">Cancelar</a>
                            </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
        <footer>
            &copy; 2015 <a href="{{url('/')}}" style="color: #666666;">El Triunfo</a>
        </footer>
    </div>
@stop