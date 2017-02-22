<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
* Modelo para Usuário (autorizado ao sistema interno).
* @author Elixandre Baldi, Luiz Rosa, Victor Pozzan
* @version 1.0
*/
class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'username', 'password',
    ];

    protected $hidden = [
        'password'
    ];
}
