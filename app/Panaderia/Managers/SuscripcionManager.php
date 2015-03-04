<?php namespace Panaderia\Managers;


class SuscripcionManager extends BaseManager
{
    public function getRules()
    {
        $rules = array(
            'nombre_completo'   =>    'required|max:100',
            'email'             =>    'required|email|max:60|unique:suscripciones,email'
        );

        return $rules;
    }
}