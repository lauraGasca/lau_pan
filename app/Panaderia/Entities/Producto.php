<?php namespace Panaderia\Entities;

class Producto extends \Eloquent
{
    protected $table = 'productos';

    protected $guarded = ['id', 'foto'];
    
}