<div class="table-responsive">
    <table class="table" id="gaziFootnotes-table">
        <thead>
            <tr>
                <th>Gazi Id</th>
        <th>Heading</th>
        <th>Notes</th>
        <th>Files</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($gaziFootnotes as $gaziFootnote)
            <tr>
                <td>{{ $gaziFootnote->gazi_id }}</td>
            <td>{{ $gaziFootnote->heading }}</td>
            <td>{{ $gaziFootnote->notes }}</td>
            <td>{{ $gaziFootnote->files }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['gaziFootnotes.destroy', $gaziFootnote->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('gaziFootnotes.show', [$gaziFootnote->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('gaziFootnotes.edit', [$gaziFootnote->id]) }}" class='btn btn-default btn-xs'>
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
