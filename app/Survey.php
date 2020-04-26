<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $fillable = ['user_id','name','team_id','reference_date','memo'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questionsheet()
    {
        return $this->belongsTo(Questionsheet::class);
    }
}
