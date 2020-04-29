@extends('layouts.app')

@section ('content')

        <div class='row justify-content-start'>
            <a href='surveys/create' class='btn btn-success'>　新規作成　</a>
        </div><br>

        <li class="media mb-3">
            <div class="media-body">
                <h2>調査情報一覧</h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>項番</th>
                        <th>調査名</th>
                        <th>分類</th>
                        <th>基準日</th>
                        <th>作成日時</th>
                        <th>更新日時</th>
                        <th>メモ</th>
                        <th>ボタン</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($surveys as $survey)
                        <tr>
                            <td>{{ $survey->id }}</td>
                            <td>{{ $survey->name }}</td>
                            <td>{{ $survey->team_id }}</td>
                            <td>{{ $survey->reference_date }}</td>
                            <td>{{ $survey->created_at }}</td>
                            <td>{{ $survey->updated_at }}</td>
                            <td>{!! nl2br(e($survey->memo)) !!}</td>
                            <td>
                                {!! Form::open(['route' => ['surveys.destroy', $survey->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </li>
@endsection