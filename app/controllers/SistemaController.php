<?php

use Panaderia\Repositories\SuscripcionRepo;
use Panaderia\Managers\ValidatorManager;

class SistemaController extends BaseController
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
        $this->layout->content = View::make('sistema.index', compact('suscripciones'));
    }

    public function postCorreo()
    {
        $manager = new ValidatorManager('correo', Input::all());
        $manager->validar();
        return Redirect::back()->with(array('confirm' => 'Se a enviado correctamente.'));
    }
}