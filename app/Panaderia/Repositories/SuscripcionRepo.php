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
        return Suscripcion::all();
    }

    public function suscripciones_mail()
    {
        return Suscripcion::lists('email');
    }

    public function deleteSuscripcion($id)
    {
        $suscripcion = Suscripcion::find($id);
        $suscripcion->delete();
    }
}