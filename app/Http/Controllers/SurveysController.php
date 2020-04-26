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
    
    public function create()
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'team_id' => 'required|max:5',
            'reference_date' => 'required|max:10',
            'memo' => 'required|max:50',
        ]);

        $request->user()->microposts()->create([
            'name' => $request->name,
            'team_id' => $request->team_id,
            'reference_date' => $request->reference_date,
            'memo' => $request->memo,
        ]);

        return back();
    }
    
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'team_id' => 'required|max:5',
            'reference_date' => 'required|max:10',
            'memo' => 'required|max:50',
        ]);

        $request->user()->microposts()->create([
            'name' => $request->name,
            'team_id' => $request->team_id,
            'reference_date' => $request->reference_date,
            'memo' => $request->memo,
        ]);

        return back();
    }
    public function destroy($id)
    {
        $survey = \App\Survey::find($id);

        if (\Auth::id() === $survey->user_id) {
            $survey->delete();
        }

        return back();
    }
    
}
