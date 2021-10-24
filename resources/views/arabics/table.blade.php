<div class="table-responsive">
    <table class="table" id="arabics-table">
        <thead>
            <tr>
                <th>Chapter</th>
        <th>Verse</th>
        <th>Translation</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($arabics as $arabic)
            <tr>
                <td>{{ $arabic->chapter }}</td>
            <td>{{ $arabic->verse }}</td>
            <td>{{ $arabic->translation }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['arabics.destroy', $arabic->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('arabics.show', [$arabic->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('arabics.edit', [$arabic->id]) }}" class='btn btn-default btn-xs'>
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
