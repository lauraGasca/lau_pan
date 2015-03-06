@section('contenido')
    <div class="mail-apps-wrap">
        <div class="the-box bg-success no-border no-margin heading">
            <div class="row">
                <div class="col-sm-6">
                    <h1><i class="fa fa-pencil icon-lg icon-circle icon-bordered"></i> Editar Suscriptor</h1>
                </div>
            </div>
        </div><br/>
        <div class="the-box no-margin">
            @if(Session::get('confirm'))
                <div class="alert alert-success alert-bold-border square fade in alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{Session::get('confirm')}}
                </div>
            @endif
            @if(count($errors)>0)
                <div class="alert alert-danger alert-block fade in alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>¡Por favor!</strong> Revise los datos del formulario.
                </div>
            @endif
            {{ Form::model($suscriptor, array('url'=>'suscripciones/update', 'method' => 'post', 'enctype'=>'multipart/form-data') )}}
                {{Form::hidden('id')}}
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Nombre Completo</label>
                            {{Form::text('nombre_completo', null, ['placeholder'=>'Nombre Completo', 'class'=>"form-control input-ls"])}}
                            <span class="message-error">{{$errors->first('nombre_completo')}}</span>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Correo Electronico</label>
                            {{Form::email('email', null, ['placeholder'=>'Correo Electronico', 'class'=>"form-control input-ls"])}}
                            <span class="message-error">{{$errors->first('email')}}</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a class="btn btn-danger" href="{{url('suscripciones')}}">Cancelar</a>
                </div>
            {{Form::close()}}
        </div>
        <footer>
            &copy; 2015 <a href="{{url('/')}}" style="color: #666666;">El Triunfo</a>
        </footer>
    </div>
@stop