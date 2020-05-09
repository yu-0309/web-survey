<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Survey;
use App\SurveyUnit;
use App\SurveyUser;
use App\Question;
use App\Term;

class SurveyUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        $survey = Survey::find($id);

//      if (\Auth::id() === $survey->user_id) { //これを外せばだれでも調査担当者が見える
        $surveyusers = $survey->surveyusers()->get();

        return view('surveyusers.index', [
            'survey' => $survey,
            'surveyusers' => $surveyusers,
        ]);

//      }                                       //これを外せばだれでも調査担当者が見える
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

        $data = [
            'survey' => $survey,
        ];

        return view('surveyusers.create',$data);
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
        $question = $survey->surveyusers()->get();

        $this->validate($request, [
            'name' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'tel' => 'string|unique:users',
            'email' => 'string|max:50',
            'role_id' => 'string|max:50',
            'survey_area_id'=> 'string|max:50',
        ]);

        $request-survey()->surveyusers()->create([
            'name' => $data['name'],
            'password' => bcrypt($data['password']),
            'tel' => $data['tel'],
            'email' => $data['email'],
            'role_id' => $data['role_id'],
            'survey_area_id' => $data['survey_area_id'],
        ]);

        return redirect('/surveyusers');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$surveyuserid)
    {
        SurveyUser::find($surveyuserid)->delete();

        return back();
    }
}
