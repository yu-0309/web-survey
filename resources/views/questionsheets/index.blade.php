@extends('layouts.app')
@section('content')
<div class=”container”>
    <div class=”mt-2 row”>
        <table class=”table table-striped”>
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
            @foreach ($surveys as $survey)
                <tr>
                    <td>{{ $survey->id}}</td>
                    <td>{{ $survey->survey_id}}</td>
                    <td>{{ $survey->date }}</td>
                    <td>{{ $survey->term_id }}</td>
                    <td>{{ $survey->total_flag }}</td>
                    <td>{{ $survey->memo }}</td>
                    <td>{{ $survey->created_at }}</td>
                    <td>{{ $survey->updated_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection