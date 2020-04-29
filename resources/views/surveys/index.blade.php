@extends('layouts.app')

@section ('content')

        <div class='row justify-content-start'>
            <a href='surveys/create' class='btn btn-success'>　新規作成　</a>
        </div><br>
        
        <div class='row justify-content-start'>
            {!! Form::open(['route' => ['surveys.delete']]) !!}
            <input type='submit' value='削除' class='btn btn-success'>
            {!! Form::close() !!}
        </div><br>

        <li class="media mb-4">
            <div class="alt-table-responsive">
                <h2>調査情報一覧</h2>
                <form method="POST" action="delete">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>項番</th>
                        <th>選択</th>
                        <th>調査名</th>
                        <th>分類</th>
                        <th>基準日</th>
                        <th>作成日時</th>
                        <th>更新日時</th>
                        <th>メモ</th>
                        <th>アンケート</th>
                        <th>調査地点</th>
                        <th>調査担当者</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($survey as $survey)
                        <tr>
                            <td>{{ $survey->id }}</td>
                            <td>
                                <input type="checkbox" name="ids[]" value="{{$survey->id }}"></td>
                            <td>{{ $survey->name }}</td>
                            <td>{{ $survey->team_id }}</td>
                            <td>{{ $survey->reference_date }}</td>
                            <td>{{ $survey->created_at }}</td>
                            <td>{{ $survey->updated_at }}</td>
                            <td>{!! nl2br(e($survey->memo)) !!}</td>
                            <td>
                                {!! link_to_route('questionsheets.index', '設定', [], ['class' => 'btn btn-success btn-sm']) !!}<br><br>
                            </td>
                            <td>
                                {!! link_to_route('surveyprefectures.index', '設定', [], ['class' => 'btn btn-success btn-sm']) !!}<br><br>
                            </td>
                            <td>
                                {!! link_to_route('surveyusers.index', '設定', [], ['class' => 'btn btn-success btn-sm']) !!}<br><br>
                            </td>
                            <td>
                                {!! link_to_route('surveys.edit', '更新', ['id' => $survey->id], ['class' => 'btn btn-primary btn-sm']) !!}
                            </td>
                            <td>
                                {!! link_to_route('surveys.destroy', '削除', ['id' => $survey->id], ['class' => 'btn btn-danger btn-sm']) !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                    <input type="submit" value="選択した記事を削除">
                </form>                
            </div>
        </li>
@endsection