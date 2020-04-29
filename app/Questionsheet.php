<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionsheet extends Model
{
    protected $fillable = ['survey_id','date','term_id','total_flag','memo'];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
    
    public function term()
    {
        return $this->belongsTo(Term::class);
    }

}
