<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    
    protected $fillable = ['user_id',     'contest_id',     'question_id',     'questions_answer_id'];
    
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
    	
    	return $this->belongsTo('App\Questions_answer', 'questions_answer_id', 'id');
    }
}

