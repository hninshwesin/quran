<div class="table-responsive">
    <table class="table" id="shwes-table">
        <thead>
            <tr>
                <th>Chapter</th>
        <th>Verse</th>
        <th>Translation</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($shwes as $shwe)
            <tr>
                <td>{{ $shwe->chapter }}</td>
            <td>{{ $shwe->verse }}</td>
            <td>{{ $shwe->translation }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['shwes.destroy', $shwe->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('shwes.show', [$shwe->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('shwes.edit', [$shwe->id]) }}" class='btn btn-default btn-xs'>
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
