<?php

namespace App\Http\Controllers;

use App\Questionsheet;
use Illuminate\Http\Request;

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
        
        return view('questionsheets.index', [
            'questionsheets' => $questionsheets,
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
