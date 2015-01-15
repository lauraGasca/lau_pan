<?php

class PrincipalController extends BaseController{

    protected $layout = 'layouts.principal';


    public function getIndex()
    {
        $this->layout->content = View::make('principal.index');
    }

    public function getMistica()
    {
        $this->layout->content = View::make('principal.mistica');
    }

    public function getProductos()
    {
        $this->layout->content = View::make('principal.productos');
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