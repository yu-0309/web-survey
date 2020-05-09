<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Survey;
use App\SurveyUnit;
use App\Term;
use App\Total;

class SurveyUnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        $survey = Survey::find($id);

//      if (\Auth::id() === $survey->user_id) { //これを外せばだれでも一覧が見える
        $surveyunits = $survey->surveyunits()->get();

        return view('surveyunits.index', [
            'surveyunits' => $surveyunits,
            'survey' => $survey,
        ]);

//      }                                       //これを外せばだれでも一覧が見える
        return redirect('/surveys');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $survey = Survey::find($id);
        $terms = Term::all();
        $totals = Total::all();
        
        $data = [
            'survey' => $survey,
            'terms' => $terms,
            'totals' => $totals,
        ];

        return view('surveyunits.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $survey = Survey::find($id);
        $surveyunit = $survey->surveyunits()->get();

        $this->validate($request, [
            'survey_date' => 'required|max:8',
            'term_id' => 'required|max:5',
            'total_id' => 'required|max:5',
            'memo' => 'max:30',
        ]);

        $request->survey()->surveyunits()->create([
            'survey_date' => $request->survey_date,
            'term_id' => $request->term_id,
            'total_id' => $request->total_id,
            'memo' => $request->memo,
        ]);
        
        return redirect('/surveyunits');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surveyunit = SurveyUnit::find($id);
        $terms = Term::all();
        $totals = Total::all();

        return view('surveyunits.edit',[
            'surveyunit' => $surveyunit,
            'terms' => $terms,
            'totals' => $totals,
            ]);

        return redirect('/surveyunits');     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'survey_date' => 'required|max:8',
            'term_id' => 'required|max:5',
            'total_id' => 'required|max:5',
            'memo' => 'required|max:50',
        ]);

        $surveyunit = SurveyUnit::find($id);

        $surveyunit->survey_date = $request->survey_date;
        $surveyunit->term_id = $request->term_id;
        $surveyunit->total_id = $request->total_id;
        $surveyunit->memo = $request->memo;
        $surveyunit->save();

        return redirect('/surveyunits');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$surveyunitid)
    {
        SurveyUnit::find($surveyunitid)->delete();

        return back();
    }
}
