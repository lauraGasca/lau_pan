<?php

use Panaderia\Repositories\SuscripcionRepo;
use Panaderia\Managers\ValidatorManager;
use Panaderia\Managers\SuscripcionManager;
use Panaderia\Managers\SuscripcionEditarManager;

class SuscripcionController extends BaseController
{

    protected $layout = 'layouts.sistema';
    protected $suscripcionRepo;

    public function __construct(SuscripcionRepo $suscripcionRepo)
    {
        $this->beforeFilter('auth');
        $this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
        $this->suscripcionRepo = $suscripcionRepo;
    }
    
    public function getIndex()
    {
        $suscripciones = $this->suscripcionRepo->suscripciones();
        $this->layout->content = View::make('suscripciones.index', compact('suscripciones'));
    }

    public function getCrear()
    {
        $this->layout->content = View::make('suscripciones.create');
    }

    public function postCrear()
    {
        $suscripcion = $this->suscripcionRepo->newSuscripcion();
        $manager = new SuscripcionManager($suscripcion, Input::all());
        $manager->save();
        return Redirect::to('suscripciones')->with(array('confirm' => 'Se ha creado correctamente'));
    }

    public function getUpdate($id)
    {
        $suscriptor = $this->suscripcionRepo->find($id);
        $this->layout->content = View::make('suscripciones.update', compact('suscriptor'));
    }

    public function postUpdate()
    {
        $suscripcion = $this->suscripcionRepo->find(Input::get('id'));
        $manager = new SuscripcionEditarManager($suscripcion, Input::all());
        $manager->save();
        return Redirect::back()->with(array('confirm' => 'Se ha guardado correctamente'));
    }

    public function getDelete($id)
    {
        $manager = new ValidatorManager('suscripcion', ['id'=>$id]);
        $manager->validar();
        $this->suscripcionRepo->deleteSuscripcion($id);
        return Redirect::back()->with(array('confirm' => 'Se ha eliminado correctamente'));
    }

    public function getCorreo()
    {
        $this->layout->content = View::make('suscripciones.mail');
    }

    public function postCorreo()
    {
        $manager = new ValidatorManager('correo', Input::all());
        $manager->validar();

        $imagen = 'correo.'.Input::file('archivo')->getClientOriginalExtension();
        Input::file('archivo')->move('images/correo', $imagen);
        //return View::make('emails.suscripciones', compact('imagen'));
        $suscripciones = $this->suscripcionRepo->suscripciones_mail();
        $asunto = Input::get('asunto');
        Mail::send('emails.suscripciones',
            ['imagen' => $imagen],
            function ($message) use ($asunto, $suscripciones) {
                $message->subject($asunto);
                $message->to('lau_lost@hotmail.com', 'El Triunfo');
                $message->bcc($suscripciones);
            });
        return Redirect::to('suscripciones')->with(array('confirm' => 'Se a enviado correctamente.'));
    }
}