<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitude extends Model
{
    protected $fillable = [
    	'cod','usuario_id','documento_id','estatus_id','razon'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function documento()
    {
        return $this->belongsTo(Documento::class);
    }

    public function estatus()
    {
        return $this->belongsTo(Estatu::class);
    }
}