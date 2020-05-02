<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['questionsheet_id','questioncontent','answercontent1','answercontent2','answercontent3','answercontent4','answercontent5','answercontent6','answercontent7','answercontent8','answercontent9','answercontent10'];

    public function questionsheet()
    {
        return $this->belongsTo(Questionsheet::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }

}
