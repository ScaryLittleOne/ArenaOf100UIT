<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
<<<<<<< HEAD

=======
>>>>>>> 1031daf3d1566ac4c2c9bdb172d5cc00535e6cdd
    public function histories()
    {
        return $this->hasMany('App\History');
    }
}
<<<<<<< HEAD
=======

    
>>>>>>> 1031daf3d1566ac4c2c9bdb172d5cc00535e6cdd
