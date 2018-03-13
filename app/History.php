<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    public function user()
    {

    	return $this->belongsTo('App\User');
    }

    public function contest()
    {
    	
    	return $this->belongsTo('App\Contest');
    }

    public function question()
    {
    	
    	return $this->belongsTo('App\Question');
    }

    public function question_answer()
    {
    	
    	return $this->belongsTo('App\Questions_answer');
    }
}
}

