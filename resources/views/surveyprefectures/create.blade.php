@extends('layouts.app')

@section('content')

    {!! Form::model($surveyprefecture, ['route' => ['surveyprefectures.store', $surveyprefecture->id,$survey->id], 'method' => 'store']) !!}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header alert-danger">
                        都道府県　追加画面　（*は入力必須項目）
                    </div>
                    <div class="card-body">
                       <div class="row">
<!--                                <div class="form-group col-5 text-right">
                                    {!! Form::label('team_name', '担当*') !!}
                                </div>
                                <div class="form-group col-5">
                                    {!! Form::select('team_id', $teams->pluck('name', 'id'), '', ['placeholder' => '選択してください　',], ['class' => 'form', 'id'=>'teams_id']) !!}
                                </div>
-->                        
                        <select type="text" class="form-control" name="area">
                            @foreach(config('pref') as $key => $score)
                                <option value="{{ $score }}">{{ $score }}</option>
                            @endforeach
                        </select>

                        </div>


                        <div class = "row">
                                <div class="form-group col-5">
                                    {!! Form::submit('登録', ['class' => 'btn btn-primary btn-sm form-control']) !!}
                                </div>
                                
                                <div class="form-group col-5">
                                    <a href='/surveyprefectures' class='btn btn-primary btm-sm form-control'>戻る</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection