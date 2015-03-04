<?php namespace Panaderia\Repositories;

use Panaderia\Entities\Producto;

class ProductoRepo extends BaseRepo
{
    public function getModel()
    {
        return new Producto();
    }

    public function newProducto()
    {
        $producto = new Producto();
        return $producto;
    }

    public function producto($id)
    {
        $producto = Producto::find($id);
        return $producto;
    }

    public function productos()
    {
        return Producto::paginate(10);
    }

    public function updateFoto($producto, $foto)
    {
        $this->deleteFoto($producto->foto);
        $producto->foto = $foto;
        $producto->save();
    }

    public function deleteProducto($id)
    {
        $producto = Producto::find($id);
        $this->deleteFoto($producto->foto);
        $producto->delete();
    }

    public function deleteFoto($foto)
    {
        \File::delete(public_path() . '\\images\\panes\\' . $foto);
    }
}