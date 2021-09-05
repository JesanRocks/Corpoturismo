<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'username','telf_hab','telf_cel','email','fecha_ingreso','fecha_egreso','password','persona_id','rol_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    public function rol()
    {
        return $this->belongsTo(Role::class);
    }

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

    public function solicitud()
    {
        return $this->hasMany(Solicitude::class);
    }
}