<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $fillable = ['user_id','name','team_id','reference_date','memo'];

    public function surveyuser()
    {
        return $this->hasMany(SurveyUser::class);
    }

    public function surveyprefectures()
    {
        return $this->hasMany(SurveyPrefecture::class);
    }

    public function questionsheets()
    {
        return $this->hasMany(Questionsheet::class);
    }
    
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
