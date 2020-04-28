<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Survey;
use App\Team;

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
//        $this->validate($request, [
//           'name' => 'required|max:30',
//            'team_id' => 'required|max:5',
//            'reference_date' => 'required|max:10',
//            'memo' => 'required|max:50',
//        ]);

//        $request->user()->surveys()->create([
//            'name' => $name,
//            'team_id' => $team_id,
//            'reference_date' => $reference_date,
//            'memo' => $memo,
//        ]);

        $teams = Team::all();

        return view('surveys.create',[
            'teams' => $teams,
        ]);
    }
    
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'team_id' => 'required|max:5',
            'reference_date' => 'required|max:10',
            'memo' => 'required|max:50',
        ]);

        $request->user()->surveys()->create([
            'name' => $request->name,
            'team_id' => $request->team_id,
            'reference_date' => $request->reference_date,
            'memo' => $request->memo,
        ]);

        return redirect('/surveys');
    }
    public function destroy($id)
    {
        $survey = \App\Survey::find($id);

        if (\Auth::id() === $survey->user_id) { //これを外せばだれでも削除できてしまう
            $survey->delete();
        }                                       //これを外せばだれでも削除できてしまう

        return back();
    }
    
}
