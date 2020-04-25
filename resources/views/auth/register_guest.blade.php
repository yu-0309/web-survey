@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>ユーザ登録画面</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('role_name', '権限') !!}
                    {!! Form::select('role_name', ['1' => '管理者','2' => '一般','3' => 'ゲスト'],'3') !!}
                </div>

                <div class="form-group">
                    {!! Form::label('name', '表示名') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('user_id', 'ID') !!}
                    {!! Form::text('user_id', old('user_id'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'パスワード（再確認）') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('tel', '電話番号') !!}
                    {!! Form::text('tel', old('tel'), ['class' => 'form-control']) !!}
                </div>
 
                {!! Form::submit('登録する', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection