<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyUser extends Model
{
    protected $fillable = ['name','survey_id','password','role_id','tel','mail','survey_area_id'];

    public function surveyareas()
    {
        return $this->hasMany(SurveyArea::class);
    }
    
    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }

    public function enterquestions()
    {
        return $this->hasMany(EnterQuestion::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    
}
