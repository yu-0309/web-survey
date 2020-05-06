@extends('layouts.app')

@section('content')

<div class='justify-content-around'>
    {!! link_to_route('surveys.index', '調査情報一覧画面に戻る', [], ['class' => 'btn btn-success']) !!}
</div><br>

<div>
    ここにアンケート項目追加ボタンを入れる
</div><br>

<li class="media mb-4">
    <div class="media-body">
        <h2> {{$survey->name}}　アンケート項目</h2><br>
            <table class="table table-striped table-bordered text-center">
            <thead>
                <tr class=”table-info”>
                    <th class="col-ms-1">質問ID</th>
                    <th scope=”col”>質問項目</th>
                    <th scope=”col”>選択肢１</th>
                    <th scope=”col”>選択肢２</th>
                    <th scope=”col”>選択肢３</th>
                    <th scope=”col”>選択肢４</th>
                    <th scope=”col”>選択肢５</th>
                    <th scope=”col”>選択肢６</th>
                    <th scope=”col”>選択肢７</th>
                    <th scope=”col”>選択肢８</th>
                    <th scope=”col”>選択肢９</th>
                    <th scope=”col”>選択肢１０</th>
                    <th scope=”col”>選択肢１１</th>
                    <th scope=”col”>選択肢１２</th>
                    <th>修正</th>
                    <th>削除</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($questions as $question)
                <tr>
                    <td>{{ $question->id }}</td>
                    <td>{{ $question->questioncontent }}</td>
                    <td>{{ $question->answercontent1 }}</td>
                    <td>{{ $question->answercontent2 }}</td>
                    <td>{{ $question->answercontent3 }}</td>
                    <td>{{ $question->answercontent4 }}</td>
                    <td>{{ $question->answercontent5 }}</td>
                    <td>{{ $question->answercontent6 }}</td>
                    <td>{{ $question->answercontent7 }}</td>
                    <td>{{ $question->answercontent8 }}</td>
                    <td>{{ $question->answercontent9 }}</td>
                    <td>{{ $question->answercontent10 }}</td>
                    <td>{{ $question->answercontent11}}</td>
                    <td>{{ $question->answercontent12 }}</td>
                    <td>修正</td>
                    <td>削除</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection