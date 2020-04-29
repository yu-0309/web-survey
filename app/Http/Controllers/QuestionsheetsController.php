<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Questionsheet;
use App\Survey;
use App\Term;

class QuestionsheetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questionsheets = Questionsheet::all();
        $surveys = Survey::all();
        
        return view('questionsheets.index', [
            'questionsheets' => $questionsheets,
            'surveys' => $surveys,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $terms = Term::all();

        return view('questionsheets.create',[
            'terms' => $terms,
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
        $this->validate($request, [
            'survey_date' => 'required|max:8',
            'term_id' => 'required|max:5',
            'total_flag' => 'required|max:5',
            'memo' => 'required|max:50',
        ]);

        $request->survey()->questionsheets()->create([
            'survey_date' => $request->survey_date,
            'term_id' => $request->term_id,
            'total_flag' => $request->total_flag,
            'memo' => $request->memo,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Questionsheet  $questionsheet
     * @return \Illuminate\Http\Response
     */
    public function show(Questionsheet $questionsheet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Questionsheet  $questionsheet
     * @return \Illuminate\Http\Response
     */
    public function edit(Questionsheet $questionsheet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Questionsheet  $questionsheet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Questionsheet $questionsheet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Questionsheet  $questionsheet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questionsheet $questionsheet)
    {
        //
    }
}
