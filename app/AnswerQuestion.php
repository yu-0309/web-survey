<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerQuestion extends Model
{
    protected $fillable = ['survey_user_id','survey_unit_id','question_id'];

    public function surveyuser()
    {
        return $this->belongsTo(SurveyUser::class);
    }

    public function surveyunit()
    {
        return $this->belongsTo(SurveyUnit::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
