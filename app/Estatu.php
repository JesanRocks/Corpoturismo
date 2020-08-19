<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estatu extends Model
{
    protected $fillable = [
    	'dsc'
    ];
    
    public function solicitud()
    {
        return $this->hasMany(Estatu::class);
    }

}