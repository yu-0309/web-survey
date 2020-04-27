<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function create(){
        $teams = \App\Team::orderBy('id','asc')->pluck('name','id');
        $teams = $teams -> prepend('', '');

        return view('teams.create')->with(['teams' => $teams]);
        }
}
