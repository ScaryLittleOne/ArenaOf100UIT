<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    public function histories()
    {
        return $this->hasMany('App\History');
    }

    /*public function questions()
    {
        return $this->hasMany('App\Question');
    }
/**SAI
    public function current_questions()
    {
        return $this->hasOne('App\Question','currentquestion_id','id');
    }
*/


/// Do currentquestion_id la Khoa Ngoai, id (thuoc Bang questions) la Khoa Chinh
    public function current_questions()
    {
        return $this->belongsTo('App\Question','currentquestion_id');
    }

}
