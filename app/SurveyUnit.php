<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyUnit extends Model
{
    protected $fillable = ['survey_id','survey_date','term_id','total_flag','memo'];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
    
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answerquestions()
    {
        return $this->hasMany(AnswerQuestion::class);
    }

    public function term()
    {
        return $this->belongsTo(Term::class);
    }

    public function total()
    {
        return $this->belongsTo(Total::class);
    }
}
