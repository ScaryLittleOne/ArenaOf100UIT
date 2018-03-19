<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions_answer extends Model
{
    public function histories()
    {
        return $this->hasMany('App\History');
    }

    public $timestamps = false;
    public function question()
    {
    	
    	return $this->belongsTo('App\Question');
    }
}
