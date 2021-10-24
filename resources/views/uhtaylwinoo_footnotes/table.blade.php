<div class="table-responsive">
    <table class="table" id="uhtaylwinooFootnotes-table">
        <thead>
            <tr>
                <th>Uhtaylwinoo Id</th>
        <th>Heading</th>
        <th>Notes</th>
        <th>Files</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($uhtaylwinooFootnotes as $uhtaylwinooFootnote)
            <tr>
                <td>{{ $uhtaylwinooFootnote->uhtaylwinoo_id }}</td>
            <td>{{ $uhtaylwinooFootnote->heading }}</td>
            <td>{{ $uhtaylwinooFootnote->notes }}</td>
            <td>{{ $uhtaylwinooFootnote->files }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['uhtaylwinooFootnotes.destroy', $uhtaylwinooFootnote->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('uhtaylwinooFootnotes.show', [$uhtaylwinooFootnote->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('uhtaylwinooFootnotes.edit', [$uhtaylwinooFootnote->id]) }}" class='btn btn-default btn-xs'>
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
