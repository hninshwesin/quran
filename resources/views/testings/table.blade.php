<div class="table-responsive">
    <table class="table" id="testings-table">
        <thead>
            <tr>
                <th>Chapter</th>
        <th>Verse</th>
        <th>Translation</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($testings as $testing)
            <tr>
                <td>{{ $testing->chapter }}</td>
            <td>{{ $testing->verse }}</td>
            <td>{{ $testing->translation }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['testings.destroy', $testing->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('testings.show', [$testing->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('testings.edit', [$testing->id]) }}" class='btn btn-default btn-xs'>
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
