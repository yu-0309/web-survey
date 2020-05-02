@extends('layouts.app')

@section('content')

<div class='justify-content-around'>
    {!! link_to_route('surveys.index', '戻る', [], ['class' => 'btn btn-success']) !!}
    {!! link_to_route('questionsheets.create', '調査の新規作成', [], ['class' => 'btn btn-success']) !!}
    {!! link_to_route('questions.index', 'アンケートの設定', [], ['class' => 'btn btn-success']) !!}
</div><br>

<li class="media mb-4">
    <div class="media-body">
        <h2>調査一覧</h2>
            <table class="table table-striped table-bordered text-center">
            <thead>
                <tr class=”table-info”>
                    <th scope=”col”>調査ID</th>
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
            @foreach ($questionsheets as $questionsheet)
                <tr>
                    <td>{{ $questionsheet->id}}</td>
                    <td>{{ $questionsheet->survey->name}}</td>
                    <td>{{ $questionsheet->survey_date }}</td>
                    <td>{{ $questionsheet->term->name }}</td>
                    <td>{{ $questionsheet->total_flag }}</td>
                    <td>{{ $questionsheet->memo }}</td>
                    <td>{{ $questionsheet->created_at }}</td>
                    <td>{{ $questionsheet->updated_at }}</td>
                    <td>
                        {!! link_to_route('questionsheets.edit', '修正', ['id' => $questionsheet->id], ['class' => 'btn btn-primary btn-sm']) !!}
                    </td>
                    <td>
                        {!! Form::model($questionsheet, ['route' => ['questionsheets.destroy', $questionsheet->id], 'method' => 'delete']) !!}
                        {!! Form::submit('削除', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection