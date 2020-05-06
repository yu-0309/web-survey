@extends('layouts.app')

@section('content')

<div class='justify-content-around'>
    {!! link_to_route('surveys.index', '戻る', [], ['class' => 'btn btn-success']) !!}
    {!! link_to_route('surveyunits.create', '調査の新規作成', ['id' => $survey->id], ['class' => 'btn btn-success']) !!}
</div><br>

<li class="media mb-4">
    <div class="media-body">
        <h2> {{$survey->name}}　調査ユニット一覧</h2>
            <table class="table table-striped table-bordered text-center">
            <thead>
                <tr class=”table-info”>
                    <th scope=”col”>ID</th>
                    <th scope=”col”>調査情報</th>
                    <th scope=”col”>調査日</th>
                    <th scope=”col”>ターム</th>
                    <th scope=”col”>集計</th>
                    <th scope=”col”>メモ</th>
                    <th scope=”col”>作成日時</th>
                    <th scope=”col”>更新日時</th>
                    <th>修正</th>
                    <th>削除</th>
                </tr>
            </thead>
            
            <tbody>
            @foreach ($surveyunits as $surveyunit)
                <tr>
                    <td>{{ $surveyunit->id}}</td>
                    <td>{{ $surveyunit->survey->name}}</td>
                    <td>{{ $surveyunit->survey_date }}</td>
                    <td>{{ $surveyunit->term->name }}</td>
                    <td>{{ $surveyunit->total->name }}</td>
                    <td>{{ $surveyunit->memo }}</td>
                    <td>{{ $surveyunit->created_at }}</td>
                    <td>{{ $surveyunit->updated_at }}</td>
                    <td>
                        {!! link_to_route('surveyunits.edit', '修正', ['surveyunit' => $surveyunit->id,'id' => $survey->id], ['class' => 'btn btn-primary btn-sm']) !!}
                    </td>
                    <td>
                        {!! Form::model($surveyunit, ['route' => ['surveyunits.destroy', $surveyunit->id,$survey->id], 'method' => 'delete']) !!}
                        {!! Form::submit('削除', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        
        @if (empty($surveyunit->id))
        <h4>まだデータは１件も登録されてません</h4>
        @endif

    </div>
</div>
@endsection