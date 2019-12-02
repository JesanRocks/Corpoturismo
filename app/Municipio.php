<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable = [
    	'dsc'
    ];

    public function parroquia()
	{
		return $this->belongsTo(Parroquia::class);
	}
}
