<?php

class Categorias extends \Eloquent {
	protected $table = 'categorias';
	protected $fillable = ["nombre"];

	public function Productos()
    {
        return $this->hasMany('Productos');
    }
}