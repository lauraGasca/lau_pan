<?php namespace Panaderia\Repositories;

use Panaderia\Entities\Frase;

class FraseRepo extends BaseRepo
{
    public function getModel()
    {
        return new Frase();
    }

    public function newFrase()
    {
        $frase = new Frase();
        return $frase;
    }

    public function frases()
    {
        return Frase::all();
    }

    public function deleteFrase($id)
    {
        $frase = Frase::find($id);
        $frase->delete();
    }
}