<?php namespace Panaderia\Managers;


class ProductosManager extends BaseManager
{
    public function getRules()
    {
        $rules = array(
            'nombre'        =>    'required|max:50|unique:productos,nombre',
            'descripcion'   =>    'required|max:200',
            'categoria'     =>    'required|max:20',
            'foto'          =>    'required|max:50'
        );

        return $rules;
    }
}