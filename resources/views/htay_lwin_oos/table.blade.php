<div class="table-responsive">
    <table class="table" id="htayLwinOos-table">
        <thead>
            <tr>
                <th>Chapter</th>
        <th>Verse</th>
        <th>Translation</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($htayLwinOos as $htayLwinOo)
            <tr>
                <td>{{ $htayLwinOo->chapter }}</td>
            <td>{{ $htayLwinOo->verse }}</td>
            <td>{{ $htayLwinOo->translation }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['htayLwinOos.destroy', $htayLwinOo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('htayLwinOos.show', [$htayLwinOo->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('htayLwinOos.edit', [$htayLwinOo->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
