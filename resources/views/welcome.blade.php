@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Web-Survey</h1>
        </div>
    </div>
        
    <!-- 調査するへのリンク -->
    {!! link_to_route('surveys.index', '調査する', [], ['class' => 'btn btn-primary']) !!}
    {!! link_to_route('questions.index', '回答する', [], ['class' => 'btn btn-primary']) !!}
    {!! link_to_route('answers.index', '集計する', [], ['class' => 'btn btn-primary']) !!}
    {!! link_to_route('maintenances.index', '各種設定', [], ['class' => 'btn btn-primary']) !!}
@endsection