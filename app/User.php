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
<<<<<<< HEAD

=======
>>>>>>> 1031daf3d1566ac4c2c9bdb172d5cc00535e6cdd
>>>>>>> 1075b2535649fc9e26666440a7eac1e976a5d0b0
    public function histories()
    {
        return $this->hasMany('App\History');
    }
}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

    
>>>>>>> 1031daf3d1566ac4c2c9bdb172d5cc00535e6cdd
>>>>>>> 1075b2535649fc9e26666440a7eac1e976a5d0b0
