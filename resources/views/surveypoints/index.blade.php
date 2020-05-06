@extends('layouts.app')

@section('content')

<div class='justify-content-around'>
    <a href="{{('/surveys/1/surveyprefectures')}}">都道府県一覧画面に戻る</a>
</div><br>

<div class="form-group col-5 justify-content-around">
    ここにテキストボックスを表示
<br>
<br>
</div>

<li class="media mb-4">
    @foreach ($surveyareas as $surveyarea)
    <div class="media-body">
        <h2>{{$surveyarea->name}}　調査対象地点一覧</h2>
            <table class="table table-striped table-bordered text-center">
            <thead>
                <tr class=”table-info”>
                    <th scope=”col”>ID</th>
                    <th scope=”col”>調査地点名</th>
                    <th scope=”col”>住所</th>
                    <th scope=”col”>作成日時</th>
                    <th scope=”col”>更新日時</th>
                    <th>修正</th>
                    <th>削除</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($surveypoints as $surveypoint)
                <tr>
                    <td>{{ $surveypoint->id}}</td>
                    <td>{{ $surveypoint->name }}</td>
                    <td>{{ $surveypoint->address }}</td>
                    <td>{{ $surveypoint->created_at }}</td>
                    <td>{{ $surveypoint->updated_at }}</td>
                    <td>
                        修正リンク
                    </td>
                    <td>
                        削除リンク
                    </td>
                    <td>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @endforeach
</div>
@endsection