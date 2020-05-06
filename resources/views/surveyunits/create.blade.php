@extends('layouts.app')

@section('content')
{!! Form::open(['route' => 'surveyunits.store']) !!}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header alert-danger">
                        {{$survey->name}}アンケート情報　新規登録画面　（*は入力必須項目）
                    </div>
                    <div class="card-body">
                       <div class="row">
                                <div class="form-group col-5 text-right">
                                    {!! Form::label('survey_date', '調査日*') !!}
                                </div>
                                <div class="form-group col-5">
                                    {!! Form::text('survey_date', old('survey_date'), ["placeholder"=>"YYYYMMDD"],['class' => 'form-control']) !!}
                                </div>
                        </div>
                       <div class="row">
                                <div class="form-group col-5 text-right">
                                    {!! Form::label('term_name', '分類*') !!}
                                </div>
                                <div class="form-group col-5">
                                    {!! Form::select('term_id', $terms->pluck('name', 'id'), '', ['placeholder' => '選択してください　',], ['class' => 'form', 'id'=>'terms_id']) !!}
                                </div>
                        </div>
                       <div class="row">
                                <div class="form-group col-5 text-right">
                                    {!! Form::label('total_name', '集計フラグ　') !!}
                                </div>
                                <div class="form-group col-5">
                                    {!! Form::select('total_id', $totals->pluck('name', 'id'), '', ['placeholder' => '選択してください　',], ['class' => 'form', 'id'=>'totals_id']) !!}
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
                                    {!! Form::submit('登録する', ['class' => 'btn btn-primary btn-sm']) !!}
                                </div>
                                
                                <div class="form-group col-5">
                                    <a href='/surveyunits' class='btn btn-primary btm-sm form-control'>戻る</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection