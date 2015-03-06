@section('css')
    @parent
    {{ HTML::script('js/ckeditor/ckeditor.js') }}
@stop

@section('contenido')
    <div class="mail-apps-wrap">
        <div class="the-box bg-success no-border no-margin heading">
            <div class="row">
                <div class="col-sm-6">
                    <h1><i class="fa fa-pencil icon-lg icon-circle icon-bordered"></i> Editar Frase</h1>
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
                    <div class="the-box">
                        {{ Form::model($frase, ['url'=>'frases/update', 'method' => 'post'] )}}
                            {{Form::hidden('id')}}
                            <div class="form-group">
                                <label>Autor</label>
                                {{Form::text('autor', null, ['placeholder'=>'Autor', 'class'=>"form-control input"])}}
                                <span class="message-error">{{$errors->first('autor')}}</span>
                            </div>
                            <div class="form-group">
                                <label>Frase</label>
                                {{ Form::textarea('frase', null, ['class'=>"form-control no-resize", 'placeholder'=>'Frase', 'style'=>"height: 120px;"]) }}
                                <script type="text/javascript">
                                    CKEDITOR.replace( 'frase',
                                            {
                                                toolbar : 'Incuba'
                                            });
                                </script>
                                <span class="message-error">{{$errors->first('frase')}}</span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Guardar</button>
                                <a class="btn btn-danger" href="{{url('frases')}}">Cancelar</a>
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