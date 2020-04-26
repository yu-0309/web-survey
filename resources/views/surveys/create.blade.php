@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <div class="col-sm-12">
                @if (Auth::id() == $user->id)
                    {!! Form::open(['route' => 'surveys.store']) !!}
                        <div class="form-group">
                            {!! Form::textarea('name', old('name'), ['class' => 'form-control', 'rows' => '2']) !!}
                            {!! Form::textarea('team_id', old('team_id'), ['class' => 'form-control', 'rows' => '2']) !!}
                            {!! Form::textarea('reference_date', old('reference_date'), ['class' => 'form-control', 'rows' => '2']) !!}
                            {!! Form::textarea('memo', old('memo'), ['class' => 'form-control', 'rows' => '2']) !!}
                            {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                        </div>
                    {!! Form::close() !!}
                @endif
                @if (count($surveys) > 0)
                    @include('surveys.surveys', ['surveys' => $surveys])
                @endif
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Surveys</h1>
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection