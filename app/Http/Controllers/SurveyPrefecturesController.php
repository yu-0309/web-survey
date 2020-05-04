<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Survey;

class SurveyPrefecturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        $survey = Survey::find($id);
        $surveyprefectures = $survey->surveyprefectures()->get();

        return view('surveyprefectures.index', [
            'surveyprefectures' => $surveyprefectures,
            'survey' => $survey,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id)
    {
        $survey = Survey::find($id);
        $surveyprefectures = $survey->surveyprefectures()->get();

        return view('surveyprefectures.create',[
            'surveyprefectures' => $surveyprefectures,
            'survey' => $survey,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->$survey->surveyprefectures()->create([
            'name' => $request->name,
        ]);        
        return redirect('/surveyprefectures');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
