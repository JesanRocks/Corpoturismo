<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
    	'nombres','apellidos','cedula','nacimiento','sexo','parroquia_id','direccion'
    ];

    public function usuarios()
	{
		return $this->hasMany(User::class);
	}

	public function parroquia()
    {
        return $this->belongsTo(Parroquia::class);
    }
}
