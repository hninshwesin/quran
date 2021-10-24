<div class="table-responsive">
    <table class="table" id="uhtaylwinoos-table">
        <thead>
            <tr>
                <th>Chapter</th>
        <th>Verse</th>
        <th>Translation</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($uhtaylwinoos as $uhtaylwinoo)
            <tr>
                <td>{{ $uhtaylwinoo->chapter }}</td>
            <td>{{ $uhtaylwinoo->verse }}</td>
            <td>{{ $uhtaylwinoo->translation }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['uhtaylwinoos.destroy', $uhtaylwinoo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('uhtaylwinoos.show', [$uhtaylwinoo->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('uhtaylwinoos.edit', [$uhtaylwinoo->id]) }}" class='btn btn-default btn-xs'>
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
