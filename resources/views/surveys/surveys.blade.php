<ul class="list-unstyled">
    @foreach ($surveys as $survey)
        <li class="media mb-3">
            <div class="media-body">
                <h2>調査一覧</h2>
                <table class="table table-striped">
                    <tr>
                        <th>項番</th>
                        <th>調査名</th>
                        <th>分類</th>
                        <th>基準日</th>
                        <th>メモ</th>
                        <th>作成者</th>
                        <th>作成日時</th>
                        <th>更新日時</th>
                        <th>メモ</th>
                    </tr>
                    <tr>
                        <td>{{ $survey->id }}</td>
                        <td>{{ $survey->name }}</td>
                        <td>{{ $survey->team_id }}</td>
                        <td>{{ $survey->reference_date }}</td>
                        <td>{{ $survey->memo }}</td>
                        <td>{{ $survey->user_id }}</td>
                        <td>{{ $survey->created_at }}</td>
                        <td>{{ $survey->updated_at }}</td>
                        <td>{!! nl2br(e($survey->memo)) !!}</td>
                    </tr>
                </table>
            
                <div>
                    @if (Auth::id() == $survey->user_id)
                        {!! Form::open(['route' => ['surveys.destroy', $survey->id], 'method' => 'delete']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    @endif
                </div>                
                
            </div>
        </li>
    @endforeach
</ul>
{{ $microposts->links('pagination::bootstrap-4') }}