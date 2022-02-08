<div class="table-responsive">
    <table class="table" id="gazis-table">
        <thead>
            <tr>
                <th>Chapter</th>
        <th>Verse</th>
        <th>Translation</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($gazis as $gazi)
            <tr>
                <td>{{ $gazi->chapter }}</td>
            <td>{{ $gazi->verse }}</td>
            <td>{{ $gazi->translation }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['gazis.destroy', $gazi->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('gazis.show', [$gazi->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('gazis.edit', [$gazi->id]) }}" class='btn btn-default btn-xs'>
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
