@extends('layouts.app')

@section('content')
    {!! Form::model($question, ['route' => ['questions.update', $question->id], 'method' => 'put']) !!}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header alert-danger">
                        アンケート項目　編集画面　（*は入力必須項目）
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-5 text-right">
                                {!! Form::label('questioncontent', '質問*') !!}
                            </div>
                            <div class="form-group col-5">
                                {!! Form::text('questioncontent', old('questioncontent'), ['maxlength'=>50,'class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-5 text-right">
                                {!! Form::label('answercontent1', '選択肢１*') !!}
                            </div>
                            <div class="form-group col-5">
                                {!! Form::text('answercontent1', old('answercontent1'), ['maxlength'=>50,'class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-5 text-right">
                                {!! Form::label('answercontent2', '選択肢２*') !!}
                            </div>
                            <div class="form-group col-5">
                                {!! Form::text('answercontent2', old('answercontent2'), ['maxlength'=>50,'class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-5 text-right">
                                {!! Form::label('answercontent3', '選択肢３') !!}
                            </div>
                            <div class="form-group col-5">
                                {!! Form::text('answercontent3', old('answercontent3'), ['maxlength'=>50,'class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-5 text-right">
                                {!! Form::label('answercontent4', '選択肢４') !!}
                            </div>
                            <div class="form-group col-5">
                                {!! Form::text('answercontent4', old('answercontent4'), ['maxlength'=>50,'class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-5 text-right">
                                {!! Form::label('answercontent5', '選択肢５') !!}
                            </div>
                            <div class="form-group col-5">
                                {!! Form::text('answercontent5', old('answercontent5'), ['maxlength'=>50,'class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-5 text-right">
                                {!! Form::label('answercontent6', '選択肢６') !!}
                            </div>
                            <div class="form-group col-5">
                                {!! Form::text('answercontent6', old('answercontent6'), ['maxlength'=>50,'class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-5 text-right">
                                {!! Form::label('answercontent7', '選択肢７') !!}
                            </div>
                            <div class="form-group col-5">
                                {!! Form::text('answercontent7', old('answercontent7'), ['maxlength'=>50,'class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-5 text-right">
                                {!! Form::label('answercontent8', '選択肢８') !!}
                            </div>
                            <div class="form-group col-5">
                                {!! Form::text('answercontent8', old('answercontent8'), ['maxlength'=>50,'class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-5 text-right">
                                {!! Form::label('answercontent9', '選択肢９') !!}
                            </div>
                            <div class="form-group col-5">
                                {!! Form::text('answercontent9', old('answercontent9'), ['maxlength'=>50,'class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-5 text-right">
                                {!! Form::label('answercontent10', '選択肢１０') !!}
                            </div>
                            <div class="form-group col-5">
                                {!! Form::text('answercontent10', old('answercontent10'), ['maxlength'=>50,'class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-5 text-right">
                                {!! Form::label('answercontent11', '選択肢１１') !!}
                            </div>
                            <div class="form-group col-5">
                                {!! Form::text('answercontent11', old('answercontent11'), ['maxlength'=>50,'class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-5 text-right">
                                {!! Form::label('answercontent12', '選択肢１２') !!}
                            </div>
                            <div class="form-group col-5">
                                {!! Form::text('answercontent12', old('answercontent12'), ['maxlength'=>50,'class' => 'form-control']) !!}
                            </div>
                        </div>
                    
                        <div class = "row">
                            <div class="form-group col-5">
                                {!! Form::submit('更新する', ['class' => 'btn btn-primary btn-sm form-control']) !!}
                            </div>
                            
                            <div class="form-group col-5">
                                <a href='/questions' class='btn btn-primary btm-sm form-control'>戻る</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection