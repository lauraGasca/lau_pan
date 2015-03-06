<?php namespace Panaderia\Managers;


class SuscripcionEditarManager extends BaseManager
{
    public function getRules()
    {
        $rules = array(
            'nombre_completo'   =>    'required|max:100',
            'email'             =>    'required|email|max:60|unique:suscripciones,email,'.$this->entity->id
        );

        return $rules;
    }
}