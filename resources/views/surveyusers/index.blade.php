@extends('layouts.app')

@section('content')

<div class='justify-content-around'>
    {!! link_to_route('surveys.index', '調査情報一覧画面に戻る', [], ['class' => 'btn btn-success']) !!}
</div><br>

<div>
    ここに調査担当者の新規追加ボタンを入れる
</div><br>

<li class="media mb-4">
    <div class="media-body">
        <h2> {{$survey->name}}　調査担当者一覧</h2>
            <table class="table table-striped table-bordered text-center">
            <thead>
                <tr class=”table-info”>
                    <th scope=”col”>ID</th>
                    <th scope=”col”>名前</th>
                    <th scope=”col”>担当エリア</th>
                    <th scope=”col”>電話番号</th>
                    <th scope=”col”>アドレス</th>
                    <th scope=”col”>作成日時</th>
                    <th scope=”col”>更新日時</th>
                    <th>修正</th>
                    <th>削除</th>
                </tr>
            </thead>
            
            <tbody>
            @foreach ($surveyusers as $surveyuser)
                <tr>
                    <td>{{ $surveyuser->id}}</td>
                    <td>{{ $surveyuser->name}}</td>
                    <td>{{ $surveyuser->survey_area_id }}</td>
                    <td>{{ $surveyuser->tel }}</td>
                    <td>{{ $surveyuser->mail }}</td>
                    <td>{{ $surveyuser->created_at }}</td>
                    <td>{{ $surveyuser->updated_at }}</td>
                    <td>
                        {!! link_to_route('surveyusers.edit', '修正', ['surveyuser' => $surveyuser->id,'id' => $survey->id], ['class' => 'btn btn-primary btn-sm']) !!}
                    </td>
                    <td>
                        {!! Form::model($surveyuser, ['route' => ['surveyusers.destroy', $surveyuser->id,$survey->id], 'method' => 'delete']) !!}
                        {!! Form::submit('削除', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        
        @if (empty($surveyuser->id))
        <h4>まだデータは１件も登録されてません</h4>
        @endif

    </div>
</div>
@endsection