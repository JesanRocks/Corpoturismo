<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
    	'nombres','apellidos','cedula','nacimiento','sexo','edocivil_id','parroquia_id','discapacidad_id','gradoeduc_id','condlab_id','sector_id','direccion'
    ];

    public function usuarios()
	{
		return $this->hasMany(User::class);
	}

	public function parroquia()
    {
        return $this->belongsTo(Parroquia::class);
    }

    public function edocivil()
    {
        return $this->belongsTo(EdoCivil::class);
    }

    public function discapacidad()
    {
        return $this->belongsTo(Discapacidade::class);
    }

    public function gradoeduc()
    {
        return $this->belongsTo(GradosEducativo::class);
    }

    public function condlab()
    {
        return $this->belongsTo(CondicionesLaborale::class);
    }    

    public function sector()
    {
        return $this->belongsTo(Sectore::class);
    } 
}
