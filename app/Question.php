<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['questionsheet_id','content','fix_flag'];

    public function questionsheet()
    {
        return $this->belongsTo(Questionsheet::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
