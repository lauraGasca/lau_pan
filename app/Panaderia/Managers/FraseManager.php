<?php namespace Panaderia\Managers;


class FraseManager extends BaseManager
{
    public function getRules()
    {
        $rules = [
            'frase'   =>    'required|max:200',
            'autor'   =>    'required|max:50'
        ];

        return $rules;
    }
}