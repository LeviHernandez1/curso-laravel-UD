<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

//#[Fillable(['name', 'email', 'password','username',])]
/* 
El fillable tambien puede definicer de esta manera
protected $fillable = [
        'name',
        'email',
        'password',
        'username'
    ];
*/
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     * El siguinete cast ayuda a agregar caracteristicas a los datos 
     * por ejemplo password nos aporta la proteccion a las constraseñas con hashed
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username'
    ];
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            //'password' => 'hashed',
        ];
    }  
}
