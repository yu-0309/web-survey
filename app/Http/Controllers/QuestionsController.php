<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Survey;
use App\Questionsheet;
use App\Question;
use App\Term;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();

        return view('questions.index', [
            'questions' => $questions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions.create');
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
            'questioncontent' => 'required|max:30',
            'answercontent1' => 'max:30',
            'answercontent2' => 'max:30',
            'answercontent3' => 'max:30',
            'answercontent4' => 'max:30',
            'answercontent5' => 'max:30',
            'answercontent6' => 'max:30',
            'answercontent7' => 'max:30',
            'answercontent8' => 'max:30',
            'answercontent9' => 'max:30',
            'answercontent10' => 'max:30',
        ]);

        $request->user()->questions()->create([
            'questioncontent' => $request->questioncontent,
            'answercontent1' => $request->answercontent1,
            'answercontent2' => $request->answercontent2,
            'answercontent3' => $request->answercontent3,
            'answercontent4' => $request->answercontent4,
            'answercontent5' => $request->answercontent5,
            'answercontent6' => $request->answercontent6,
            'answercontent7' => $request->answercontent7,
            'answercontent8' => $request->answercontent8,
            'answercontent9' => $request->answercontent9,
            'answercontent10' => $request->answercontent10,
        ]);

        return redirect('/questions');
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
