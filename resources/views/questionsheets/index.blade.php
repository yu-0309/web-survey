@extends('layouts.app')

@section('content')

<div class='row justify-content-start'>
    <a href='questionsheets/create' class='btn btn-success'>　新規作成　</a>
</div><br>

<div class='row justify-content-start'>
    <a href='/surveys' class='btn btn-success'>戻る</a>
</div><br>

<li class="media mb-4">
    <div class="media-body">
        <h2>アンケート一覧</h2>
            <table class="table table-striped">
            <thead>
                <tr class=”table-info”>
                    <th scope=”col”>アンケートID</th>
                    <th scope=”col”>調査情報ID</th>
                    <th scope=”col”>調査日</th>
                    <th scope=”col”>ターム</th>
                    <th scope=”col”>集計フラグ</th>
                    <th scope=”col”>メモ</th>
                    <th scope=”col”>作成日時</th>
                    <th scope=”col”>更新日時</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($questionsheets as $questionsheet)
                <tr>
                    <td>{{ $questionsheet->id}}</td>
                    <td>{{ $questionsheet->survey_id}}</td>
                    <td>{{ $questionsheet->survey_date }}</td>
                    <td>{{ $questionsheet->term_id }}</td>
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