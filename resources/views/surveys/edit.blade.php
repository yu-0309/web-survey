@extends('layouts.app')

@section('content')
    {!! Form::model($survey, ['route' => ['surveys.update', $survey->id], 'method' => 'put']) !!}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header alert-danger">
                        調査情報　編集画面　（*は入力必須項目）
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-5 text-right">
                                {!! Form::label('name', '調査情報名*') !!}
                            </div>
                            <div class="form-group col-5">
                                {!! Form::text('name', old('name'), ['maxlength'=>30,'class' => 'form-control']) !!}
                            </div>
                        </div>
                       <div class="row">
                                <div class="form-group col-5 text-right">
                                    {!! Form::label('team_name', '担当*') !!}
                                </div>
                                <div class="form-group col-5">
                                    {!! Form::select('team_id', $teams->pluck('name', 'id'), '', ['placeholder' => '選択してください　',], ['class' => 'form', 'id'=>'teams_id']) !!}
                                </div>
                        </div>
                       <div class="row">
                                <div class="form-group col-5 text-right">
                                    {!! Form::label('reference_date', '基準日*') !!}
                                </div>
                                <div class="form-group col-5">
                                    {!! Form::text('reference_date', old('reference_date'), ["placeholder"=>"YYYYMMDD"],['class' => 'form-control']) !!}
                                </div>
                        </div>
                        <div class="row">
                                <div class="form-group col-5 text-right">
                                    {!! Form::label('memo', 'メモ') !!}
                                </div>
                                <div class="form-group col-5">
                                    {!! Form::text('memo', old('memo'), ['maxlength'=>50,'class' => 'form-control']) !!}
                                </div>
                        </div>

                        <div class = "row">
                                <div class="form-group col-5">
                                    {!! Form::submit('更新する', ['class' => 'btn btn-primary btn-sm form-control']) !!}
                                </div>
                                
                                <div class="form-group col-5">
                                    <a href='/surveys' class='btn btn-primary btm-sm form-control'>戻る</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection