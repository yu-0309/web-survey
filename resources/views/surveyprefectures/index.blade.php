@extends('layouts.app')

@section('content')

<div class='justify-content-around'>
    {!! link_to_route('surveys.index', '調査情報一覧に戻る', [], ['class' => 'btn btn-success']) !!}
</div><br>

<div class="form-group col-5 justify-content-around">
    <select type="text" class="form-control" name="area">
    @foreach(config('pref') as $key => $score)
    <option value="{{ $score }}">{{ $score }}</option>
    @endforeach
    </select>
<br>
    {!! link_to_route('surveyprefectures.create', '都道府県を追加する', ['id' => $survey->id], ['class' => 'btn btn-success']) !!}
<br>
</div>

<li class="media mb-4">
    <div class="media-body">
        <h2> {{$survey->name}}　調査対象の都道府県一覧</h2>
            <table class="table table-striped table-bordered text-center">
            <thead>
                <tr class=”table-info”>
                    <th scope=”col”>No</th>
                    <th scope=”col”>都道府県</th>
                    <th scope=”col”>作成日時</th>
                    <th scope=”col”>更新日時</th>
                    <th>調査エリア</th>
                    <th>削除</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($surveyprefectures as $key=> $surveyprefecture)
                <tr>
                    <td>{{ $key=$key+1 }}</td>
                    <td>{{ $surveyprefecture->name }}</td>
                    <td>{{ $surveyprefecture->created_at }}</td>
                    <td>{{ $surveyprefecture->updated_at }}</td>
                    <td>
                        {!! link_to_route('surveyareas.index', '設定', ['id' => $survey->id,'surveyprefectureid' => $surveyprefecture->id], ['class' => 'btn btn-primary btn-sm']) !!}
                    </td>
                    <td>
                        {!! Form::model($surveyprefecture, ['route' => ['surveyprefectures.destroy','surveyprefectureid' => $surveyprefecture->id,'id' => $survey->id], 'method' => 'delete']) !!}
                        {!! Form::submit('削除', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @if (empty($surveyprefecture->id))
        <h4>まだデータは１件も登録されてません</h4>
        @endif
    </div>
</div>
@endsection