@extends(‘layouts.app’)
@section(‘content’)
<div class=”container”>
    <div class=”mt-2 row”>
        <table class=”table table-striped”>
            <thead>
                <tr class=”table-info”>
                    <th scope=”col”>ID</th>
                    <th scope=”col”>調査名</th>
                    <th scope=”col”>管轄</th>
                    <th scope=”col”>基準日</th>
                    <th scope=”col”>メモ</th>
                    <th scope=”col”>作成日時</th>
                    <th scope=”col”>更新日時</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($surveys as $survey)
                <tr>
                    <td>{{ $survey->id}}</td>
                    <td>{{ $survey->name }}</td>
                    <td>{{ $survey->team_id }}</td>
                    <td>{{ $survey->reference_date }}</td>
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