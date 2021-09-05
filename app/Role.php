<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['dsc','sueldo','sueldoEscrito'];

    public function usuarios()
	{
		return $this->hasMany(User::class);
	}
}
