@section('contenido')
    <div class="mail-apps-wrap">
        <div class="the-box bg-success no-border no-margin heading">
            <div class="row">
                <div class="col-sm-6">
                    <h1><i class="fa fa-envelope icon-lg icon-circle icon-bordered"></i> Enviar correo</h1>
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
            {{ Form::open(array('url'=>'suscripciones/correo', 'method' => 'post', 'enctype'=>'multipart/form-data') )}}
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Asunto</label>
                            {{Form::text('asunto', null, ['placeholder'=>'Agregar un Asunto', 'class'=>"form-control input-ls"])}}
                            <span class="message-error">{{$errors->first('asunto')}}</span>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Archivo</label>
                            <div class="input-group">
                                {{Form::text('texto', null, ['readonly', 'class'=>"form-control"])}}
                                <span class="input-group-btn">
                                    <span class="btn btn-primary btn-file">
                                        <i class="fa fa-plus"></i>
                                        {{Form::file('archivo')}}
                                    </span>
                                </span>
                            </div>
                            <span class="message-error">{{$errors->first('archivo')}}</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success"><i class="fa fa-rocket"></i> Enviar</button>
                    <a class="btn btn-danger" href="{{url('suscripciones')}}">Cancelar</a>
                </div>
            {{Form::close()}}
        </div>
        <footer>
            &copy; 2015 <a href="{{url('/')}}" style="color: #666666;">El Triunfo</a>
        </footer>
    </div>
@stop