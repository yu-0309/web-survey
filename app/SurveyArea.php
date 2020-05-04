<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyArea extends Model
{
    protected $fillable = ['survey_id','name'];

    public function surveyprefecture()
    {
        return $this->belongsTo(SurveyPrefecture::class);
    }

    public function surveyusers()
    {
        return $this->hasMany(SurveyUser::class);
    }

    public function surveypoints()
    {
        return $this->hasMany(SurveyPoint::class);
    }
    
}
