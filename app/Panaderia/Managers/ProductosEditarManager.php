<?php namespace Panaderia\Managers;


class ProductosEditarManager extends BaseManager
{
    public function getRules()
    {
        $rules = array(
            'nombre'        =>    'required|max:50|unique:productos,nombre,'.$this->entity->id,
            'descripcion'   =>    'required|max:200',
            'categoria'     =>    'required|max:20',
            'foto'          =>    'max:50'
        );

        return $rules;
    }
}