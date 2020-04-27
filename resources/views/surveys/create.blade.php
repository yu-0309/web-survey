@extends('layouts.app')

@section('content')
    {!! Form::open(['route' => 'surveys.store']) !!}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header alert-danger">
                        新規
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-5 text-right">
                                {!! Form::label('name', '調査情報名:') !!}
                            </div>
                            <div class="form-group col-5">
                                {!! Form::text('name', old('name'), ['maxlength'=>30,'class' => 'form-control']) !!}
                            </div>
                        </div>
                       <div class="row">
                                <div class="form-group col-5 text-right">
                                    {!! Form::label('team_id', '担当:') !!}
                                </div>
                                <div class="form-group col-5">
                                    {!! Form::select('team_id', $teams, null, ['class' => 'form', 'id'=>'teams_id']) !!}
<!--                                    {!! Form::text('team_id', old('reference_date'), ['class' => 'form-control']) !!}-->
                                </div>
                        </div>
                       <div class="row">
                                <div class="form-group col-5 text-right">
                                    {!! Form::label('reference_date', '基準日:') !!}
                                </div>
                                <div class="form-group col-5">
                                    {!! Form::text('reference_date', old('reference_date'), ['class' => 'form-control']) !!}
                                </div>
                        </div>
                        <div class="row">
                                <div class="form-group col-5 text-right">
                                    {!! Form::label('memo', 'メモ:') !!}
                                </div>
                                <div class="form-group col-5">
                                    {!! Form::text('memo', old('memo'), ['maxlength'=>50,'class' => 'form-control']) !!}
                                </div>
                        </div>

                        <div class = "row">
                                <div class="form-group col-5">
                                    {!! Form::submit('登録', ['class' => 'btn btn-primary btn-sm form-control']) !!}
                                </div>
                                <div class="form-group col-5">
                                    {!! Form::submit('戻る', ['class' => 'btn btn-primary btn-sm form-control']) !!}
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection