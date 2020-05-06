@extends('layouts.app')

@section('content')

<div class='justify-content-around'>
    <a href="{{('/surveys/1/surveyprefectures')}}">都道府県一覧画面に戻る</a>
</div><br>

<div class="form-group col-5 justify-content-around">
    ここにエリアを新規追加するテキストボックスを表示
<br>
<br>
</div>

<li class="media mb-4">
    @foreach ($surveyprefectures as $surveyprefecture)
    <div class="media-body">
        <h2>{{$survey->name}}　{{$surveyprefecture->name}}　調査対象エリア一覧</h2>
        <table class="table table-striped table-bordered text-center">
            <thead>
                <tr class=”table-info”>
                    <th scope=”col”>ID</th>
                    <th scope=”col”>調査エリア名</th>
                    <th scope=”col”>作成日時</th>
                    <th scope=”col”>更新日時</th>
                    <th>調査地点</th>
                    <th>編集</th>
                    <th>削除</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($surveyareas as $surveyarea)
                <tr>
                    <td>{{ $surveyarea->id}}</td>
                    <td>{{ $surveyarea->name }}</td>
                    <td>{{ $surveyarea->created_at }}</td>
                    <td>{{ $surveyarea->updated_at }}</td>
                    @foreach ($surveys as $survey)
                    <td>
                        {!! link_to_route('surveypoints.index', '設定する', ['surveyid' => $survey->id,'surveyprefectureid' => $surveyprefecture->id,'surveyareaid' => $surveyarea->id], ['class' => 'btn btn-primary btn-sm']) !!}
                    </td>
                    @endforeach
                    <td>
                        編集ボタンを入れる
                    </td>
                    <td>
                        削除ボタンを入れる
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @endforeach
</div>
@endsection