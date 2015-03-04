<?php

use Panaderia\Repositories\SuscripcionRepo;
use Panaderia\Managers\ValidatorManager;
use Panaderia\Managers\SuscripcionManager;

class PrincipalController extends BaseController
{
    protected $layout = 'layouts.principal';
    protected $suscripcionRepo;

    public function __construct(SuscripcionRepo $suscripcionRepo)
    {
        $this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
        $this->suscripcionRepo = $suscripcionRepo;
    }

    public function getIndex()
    {
        $this->layout->content = View::make('principal.index');
    }

    public function getNosotros()
    {
        $this->layout->content = View::make('principal.mistica');
    }

    public function getProductos($categoria=null)
    {
        $this->layout->content = View::make('principal.productos', compact('categoria'));
    }

    public function getContacto()
    {
        $this->layout->content = View::make('principal.contacto');
    }

    public function postContacto()
    {
        $manager = new ValidatorManager('contacto', Input::all());
        $manager->validar();
        $nombre = Input::get('nombre');
        $correo = Input::get('correo');
        $mensaje = Input::get('mensaje');
        return View::make('emails.contacto', compact('nombre','correo','mensaje'));
        Mail::send('emails.contacto',
            ['nombre' => Input::get('nombre'), 'correo' => Input::get('correo'), 'mensaje' => Input::get('mensaje')],
            function ($message) {
                $message->subject('Contacto desde Sitio Web');
                $message->to('lau_lost@hotmail.com', 'Prueba');
            });
        return Redirect::back()->with(array('correo' => 'Gracias por contactarnos.'));
    }

    public function postSuscribir()
    {
        $suscripcion = $this->suscripcionRepo->newSuscripcion();
        $manager = new SuscripcionManager($suscripcion, Input::all());
        $manager->save();
        return Redirect::back()->with(array('confirm' => 'Gracias por suscribirte.'));
    }
}