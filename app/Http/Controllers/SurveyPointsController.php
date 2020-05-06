<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyPointsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$surveyid,$surveyprefectureid,$surveyareaid)
    {
        $survey = Survey::find($surveyid);
        $surveyprefectures = $survey->surveyprefectures()->get();
        
        $surveyprefecture = SurveyPrefecture::find($surveyprefectureid);
        $surveyareas = $surveyprefecture->surveyareas()->get();

        $surveyarea = SurveyArea::find($surveyareaid);
        $surveypoints = $surveyarea->surveypoints()->get();


        return view('surveyareas.index', [
            'surveys' => $survey,
            'surveyprefectures' => $surveyprefectures,
            'surveyareas' => $surveyareas,
            'surveypoints' => $surveypoints,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
