<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $fillable = [
    	'dsc'
    ];

	public function solicitud()
    {
        return $this->hasMany(Solicitude::class);
    }
}