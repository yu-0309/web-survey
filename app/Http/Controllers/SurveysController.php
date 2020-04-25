<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveysController extends Controller
{
    public function index()
    {
        $surveys = Survey::all();
        
        return view('surveys.index', [
            'surveys' => $surveys,
        ]);
    }
}
