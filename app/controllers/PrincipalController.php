<?php

use Panaderia\Repositories\SuscripcionRepo;
use Panaderia\Repositories\FraseRepo;
use Panaderia\Repositories\ProductoRepo;
use Panaderia\Managers\ValidatorManager;
use Panaderia\Managers\SuscripcionManager;

class PrincipalController extends BaseController
{
    protected $layout = 'layouts.principal';
    protected $suscripcionRepo;
    protected $fraseRepo;
    protected $productoRepo;

    public function __construct(SuscripcionRepo $suscripcionRepo, FraseRepo $fraseRepo, ProductoRepo $productoRepo)
    {
        $this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
        $this->suscripcionRepo = $suscripcionRepo;
        $this->fraseRepo = $fraseRepo;
        $this->productoRepo = $productoRepo;
    }

    public function getIndex()
    {
        $frases = $this->fraseRepo->frases();
        $this->layout->content = View::make('principal.index', compact('frases'));
    }

    public function getNosotros()
    {
        $frases = $this->fraseRepo->frases();
        $this->layout->content = View::make('principal.mistica', compact('frases'));
    }

    public function getProductos($categoria=null)
    {
        $tradicionales = $this->productoRepo->productos_cat('Linea Tradicional');
        $integrales = $this->productoRepo->productos_cat('Linea Integral');
        $especiales = $this->productoRepo->productos_cat('Linea Especial');
        $peques = $this->productoRepo->productos_cat('Para los Peques');
        $this->layout->content = View::make('principal.productos', compact('categoria', 'tradicionales','integrales','especiales','peques'));
    }

    public function getContacto()
    {
        $this->layout->content = View::make('principal.contacto');
    }

    public function postContacto()
    {
        $manager = new ValidatorManager('contacto', Input::all());
        $manager->validar();
        /*$nombre = Input::get('nombre');
        $correo = Input::get('correo');
        $mensaje = Input::get('mensaje');
        return View::make('emails.contacto', compact('nombre','correo','mensaje'));*/
        Mail::send('emails.contacto',
            ['nombre' => Input::get('nombre'), 'correo' => Input::get('correo'), 'mensaje' => Input::get('mensaje')],
            function ($message) {
                $message->subject('Contacto desde Sitio Web');
                $message->to('lau_lost@hotmail.com', 'El Triunfo');
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