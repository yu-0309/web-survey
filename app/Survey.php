<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $fillable = ['user_id','name','team_id','reference_date','memo'];

    public function surveyusers()
    {
        return $this->hasMany(SurveyUser::class);
    }

    public function surveyprefectures()
    {
        return $this->hasMany(SurveyPrefecture::class);
    }

    public function surveyunits()
    {
        return $this->hasMany(SurveyUnit::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
