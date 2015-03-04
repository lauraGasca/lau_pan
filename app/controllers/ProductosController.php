<?php

use Panaderia\Repositories\ProductoRepo;
use Panaderia\Managers\ProductosManager;
use Panaderia\Managers\ProductosEditarManager;
use Panaderia\Managers\ValidatorManager;

class ProductosController extends BaseController
{

    protected $layout = 'layouts.sistema';
    protected $productoRepo;

    public function __construct(ProductoRepo $productoRepo)
    {
        $this->beforeFilter('auth');
        $this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
        $this->productoRepo = $productoRepo;
    }
    
    public function getIndex()
    {
        $productos = $this->productoRepo->productos();
        $this->layout->content = View::make('sistema.productos', compact('productos'));
    }

    public function getCrear()
    {
        $this->layout->content = View::make('sistema.create');
    }

    public function postCrear()
    {
        $producto = $this->productoRepo->newProducto();
        $manager = new ProductosManager($producto, Input::all());
        $manager->save();
        $this->productoRepo->updateFoto($producto, $producto->id . "." . Input::file('foto')->getClientOriginalExtension());
        Input::file('foto')->move('images/panes', $producto->foto);
        return Redirect::to('producto')->with(array('confirm' => 'Se ha creado correctamente'));
    }

    public function getUpdate($id)
    {
        $producto = $this->productoRepo->producto($id);
        $this->layout->content = View::make('sistema.update', compact('producto'));
    }

    public function postUpdate()
    {
        $producto = $this->productoRepo->producto(Input::get('id'));
        $manager = new ProductosEditarManager($producto, Input::all());
        $manager->save();
        if(Input::hasfile('foto'))
        {
            $this->productoRepo->updateFoto($producto, $producto->id . "." . Input::file('foto')->getClientOriginalExtension());
            Input::file('foto')->move('images/panes', $producto->foto);
        }
        return Redirect::back()->with(array('confirm' => 'Se ha guardado correctamente'));
    }

    public function getDelete($id)
    {
        $manager = new ValidatorManager('producto', ['id'=>$id]);
        $manager->validar();
        $this->productoRepo->deleteProducto($id);
        return Redirect::back()->with(array('confirm' => 'Se ha eliminado correctamente'));
    }
}