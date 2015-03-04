<?php namespace Panaderia\Repositories;

use Panaderia\Entities\Suscripcion;

class SuscripcionRepo extends BaseRepo
{
    public function getModel()
    {
        return new Suscripcion();
    }

    public function newSuscripcion()
    {
        $suscripcion = new Suscripcion();
        return $suscripcion;
    }

    public function suscripciones()
    {
        return Suscripcion::lists('nombre_completo', 'email');
    }
}