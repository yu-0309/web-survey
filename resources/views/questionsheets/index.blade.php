@extends('layouts.app')

@section('content')

<td>
    {!! link_to_route('surveys.index', '戻る', [], ['class' => 'btn btn-success']) !!}<br><br>
</td>

<td>
    {!! link_to_route('questionsheets.create', '調査の新規作成', [], ['class' => 'btn btn-success']) !!}<br><br>
</td>

<td>
    {!! link_to_route('questions.index', 'アンケートの設定', [], ['class' => 'btn btn-success']) !!}<br><br>
</td>

<li class="media mb-4">
    <div class="media-body">
        <h2>調査一覧</h2>
            <table class="table table-striped">
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
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection