<?php

class PrincipalController extends BaseController{

    protected $layout = 'layouts.principal';


    public function getIndex()
    {
        $this->layout->content = View::make('principal.index');
    }

    public function getNosotros()
    {
        $this->layout->content = View::make('principal.mistica');
    }

    public function getProductos($categoria=null)
    {
        $this->layout->content = View::make('principal.productos', compact('categoria'));
    }

    /*public function getReservacion()
    {
        $this->layout->content = View::make('principal.reservacion');
    }
    public function getEventos()
    {
        $this->layout->content = View::make('principal.eventos');
    }*/

    public function getContacto()
    {
        $this->layout->content = View::make('principal.contacto');
    }
}