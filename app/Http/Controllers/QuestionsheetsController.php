<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Survey;
use App\Questionsheet;
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

        $request->questionsheets()->create([
            'survey_date' => $request->survey_date,
            'term_id' => $request->term_id,
            'total_flag' => $request->total_flag,
            'memo' => $request->memo,
        ]);

        dd($request);

        return redirect('/questionsheets');
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
    public function edit($id)
    {
        $questionsheet = Questionsheet::find($id);
        $terms = Term::all();

        return view('questionsheets.edit',[
            'questionsheet' => $questionsheet,
            'terms' => $terms,
            ]);

        return redirect('/questionsheets');        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Questionsheet  $questionsheet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'survey_date' => 'required|max:8',
            'term_id' => 'required|max:5',
            'total_flag' => 'required|max:5',
            'memo' => 'required|max:50',
        ]);

        $questionsheet = Questionsheet::find($id);

        $questionsheet->survey_date = $request->survey_date;
        $questionsheet->term_id = $request->term_id;
        $questionsheet->total_flag = $request->total_flag;
        $questionsheet->memo = $request->memo;
        $questionsheet->save();

        return redirect('/questionsheets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Questionsheet  $questionsheet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $questionsheet = Questionsheet::find($id);

        $questionsheet->delete();

        return redirect('/questionsheets');
    }
}
