<?php

class Productos extends \Eloquent {
	protected $table = 'productos';
	protected $fillable = ["nombre"];

	public function categorias()
    {
        return $this->belongsTo('Categorias');
    }
    public function marcas()
    {
        return $this->belongsTo('Marcas');
    }
}