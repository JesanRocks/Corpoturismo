<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    protected $fillable = [
    	'dsc','municipio_id'
    ];


    public function municipios()
	{
		return $this->belongsTo(Municipio::class);
	}
}
