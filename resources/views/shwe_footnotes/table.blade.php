<div class="table-responsive">
    <table class="table" id="shweFootnotes-table">
        <thead>
            <tr>
                <th>Shwe Id</th>
        <th>Heading</th>
        <th>Notes</th>
        <th>Files</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($shweFootnotes as $shweFootnote)
            <tr>
                <td>{{ $shweFootnote->shwe_id }}</td>
            <td>{{ $shweFootnote->heading }}</td>
            <td>{{ $shweFootnote->notes }}</td>
            <td>{{ $shweFootnote->files }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['shweFootnotes.destroy', $shweFootnote->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('shweFootnotes.show', [$shweFootnote->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('shweFootnotes.edit', [$shweFootnote->id]) }}" class='btn btn-default btn-xs'>
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
