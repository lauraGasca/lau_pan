<?php

use Panaderia\Repositories\FraseRepo;
use Panaderia\Managers\FraseManager;
use Panaderia\Managers\ValidatorManager;

class FraseController extends BaseController
{
    protected $layout = 'layouts.sistema';
    protected $fraseRepo;

    public function __construct(FraseRepo $fraseRepo)
    {
        $this->beforeFilter('auth');
        $this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
        $this->fraseRepo = $fraseRepo;
    }
    
    public function getIndex()
    {
        $frases = $this->fraseRepo->frases();
        $this->layout->content = View::make('frases.index', compact('frases'));
    }

    public function getCrear()
    {
        $this->layout->content = View::make('frases.create');
    }

    public function postCrear()
    {
        $frase = $this->fraseRepo->newFrase();
        $manager = new FraseManager($frase, Input::all());
        $manager->save();
        return Redirect::to('frases')->with(array('confirm' => 'Se ha creado correctamente'));
    }

    public function getUpdate($id)
    {
        $manager = new ValidatorManager('frase', ['id'=>$id]);
        $manager->validar();
        $frase = $this->fraseRepo->find($id);
        $this->layout->content = View::make('frases.update', compact('frase'));
    }

    public function postUpdate()
    {
        $frase = $this->fraseRepo->find(Input::get('id'));
        $manager = new FraseManager($frase, Input::all());
        $manager->save();
        return Redirect::to('frases')->with(array('confirm' => 'Se ha creado correctamente'));
    }

    public function getDelete($id)
    {
        $manager = new ValidatorManager('frase', ['id'=>$id]);
        $manager->validar();
        $this->fraseRepo->deleteFrase($id);
        return Redirect::to('frases')->with(array('confirm' => 'Se ha eliminado correctamente'));
    }
}