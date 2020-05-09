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
    
    public function create(){
        $teams = Team::all();

        return view('surveys.create',[
            'teams' => $teams
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'team_id' => 'required|max:5',
            'reference_date' => 'required|max:8',
            'memo' => 'max:50',
        ]);

        $request->user()->surveys()->create([
            'name' => $request->name,
            'team_id' => $request->team_id,
            'reference_date' => $request->reference_date,
            'memo' => $request->memo,
        ]);

        return redirect('/surveys');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Questionsheet  $questionsheet
     * @return \Illuminate\Http\Response
     */
    public function show(Survey $survey)
    {
        //
    }


    public function edit($id)
    {
        $survey = Survey::find($id);
        $teams = Team::all();

        if (\Auth::id() === $survey->user_id) { //これを外せばだれでも編集できてしまう
            return view('surveys.edit',[
                'survey' => $survey,
                'teams' => $teams,
            ]);
        }                                       //これを外せばだれでも編集できてしまう
        return redirect('/surveys');        
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'team_id' => 'required|max:5',
            'reference_date' => 'required|max:8',
            'memo' => 'required|max:50',
        ]);

        $survey = Survey::find($id);

//        if (\Auth::id() === $survey->user_id) { //これを外せばだれでも削除できてしまう
            $survey->name = $request->name;
            $survey->team_id = $request->team_id;
            $survey->reference_date = $request->reference_date;
            $survey->memo = $request->memo;
            $survey->save();
//        }                                       //これを外せばだれでも削除できてしまう

        return redirect('/surveys');
    }

    public function destroy($id)
    {
        $survey = Survey::find($id);

        if (\Auth::id() === $survey->user_id) { //これを外せばだれでも削除できてしまう
            $survey->delete();
        }                                       //これを外せばだれでも削除できてしまう

        return redirect('/surveys');
    }

//    public function delete(Request $request){

//        $request->ids->delete();
        
//       return redirect('/surveys');
//    }
}
