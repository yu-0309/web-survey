<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Survey;
use App\SurveyUnit;
use App\Question;
use App\Term;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        $survey = Survey::find($id);
//      if (\Auth::id() === $survey->user_id) { //これを外せばだれでもアンケートが見える
        $questions = optional($survey)->questions;

        return view('questions.index', [
            'survey' => $survey,
            'questions' => $questions,
        ]);

//      }                                       //これを外せばだれでもアンケートが見える
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

        return view('questions.create',$data);
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
            'answercontent11' => 'max:30',
            'answercontent12' => 'max:30',
        ]);

        $request-survey()->questions()->create([
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
            'answercontent11' => $request->answercontent11,
            'answercontent12' => $request->answercontent12,
        ]);

        return back();
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
    public function edit($id,$questionid)
    {
        $question = Question::find($questionid);
        
         return view('questions.edit',[
             'question' => $question,
        ]);

        return redirect('/questions');        
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
            'questioncontent' => 'required|max:30',
            'answercontent1' => 'required|max:30',
            'answercontent2' => 'required|max:30',
            'answercontent3' => 'max:30',
            'answercontent4' => 'max:30',
            'answercontent5' => 'max:30',
            'answercontent6' => 'max:30',
            'answercontent7' => 'max:30',
            'answercontent8' => 'max:30',
            'answercontent9' => 'max:30',
            'answercontent10' => 'max:30',
            'answercontent11' => 'max:30',
            'answercontent12' => 'max:30',
        ]);

        $question = Question::find($id);

        $question->questioncontent = $request->questioncontent;
        $question->answercontent1 = $request->answercontent1;
        $question->answercontent2 = $request->answercontent2;
        $question->answercontent3 = $request->answercontent3;
        $question->answercontent4 = $request->answercontent4;
        $question->answercontent5 = $request->answercontent5;
        $question->answercontent6 = $request->answercontent6;
        $question->answercontent7 = $request->answercontent7;
        $question->answercontent8 = $request->answercontent8;
        $question->answercontent9 = $request->answercontent9;
        $question->answercontent10 = $request->answercontent10;
        $question->answercontent11 = $request->answercontent11;
        $question->answercontent12 = $request->answercontent12;
        $question->save();

        return redirect('/questions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$questionid)
    {
        Question::find($questionid)->delete();

        return back();
    }
}
