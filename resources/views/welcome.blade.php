@extends('layouts.app')

@section('content')
    @if (Auth::check())
    <div class="center jumbotron">
        <div class="text-center">

            <!-- 調査するへのリンク -->
            {!! link_to_route('surveys.index', '　アンケートを設定する　', [], ['class' => 'btn btn-success btn-lg']) !!}<br><br>
            {!! link_to_route('surveyunits.index', '　アンケートに回答する　', ['id' => 1], ['class' => 'btn btn-success btn-lg']) !!}<br><br>
            {!! link_to_route('answers.index','　アンケートを集計する　', [], ['class' => 'btn btn-success btn-lg']) !!}<br><br>
            {!! link_to_route('maintenances.index', '　　　　各種設定　　　　', [], ['class' => 'btn btn-success btn-lg']) !!}

        </div>
    </div>
    @else
        <div class="row">
        <div class="col-sm-6 offset-sm-3"><br>

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'ユーザ名') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('ログインする', ['class' => 'btn btn-success btn-block']) !!}
            {!! Form::close() !!}

            <p class="mt-2">New user? {!! link_to_route('signup.get', 'Sign up now!') !!}</p>
        </div>
        </div>
    @endif
@endsection