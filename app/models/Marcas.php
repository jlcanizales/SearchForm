<?php

class Marcas extends \Eloquent {
	protected $table = 'Marcas';
	protected $fillable = ["nombre"];

	public function Productos()
    {
    	
        return $this->hasMany('Productos');
    }
}