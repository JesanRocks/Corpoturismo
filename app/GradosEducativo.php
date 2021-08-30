<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradosEducativo extends Model
{
        protected $fillable = [
        'dsc','niveleduc_id'
    ];

    public function niveleduc()
    {
        return $this->belongsTo(NivelesEducativo::class);
    }
}
