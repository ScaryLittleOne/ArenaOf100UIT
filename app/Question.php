<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function histories()
    {
        return $this->hasMany('App\History');
    }

    public function questions_answers()
    {
        return $this->hasMany('App\Questions_answer');
    }

    public function correct_answer(){
    	return $this->questions_answers()->where(['correct'=>true]);
    }
}
