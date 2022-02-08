<div class="table-responsive">
    <table class="table" id="ubaseinFootnotes-table">
        <thead>
            <tr>
                <th>Ubasein Id</th>
        <th>Heading</th>
        <th>Notes</th>
        <th>Files</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ubaseinFootnotes as $ubaseinFootnote)
            <tr>
                <td>{{ $ubaseinFootnote->ubasein_id }}</td>
            <td>{{ $ubaseinFootnote->heading }}</td>
            <td>{{ $ubaseinFootnote->notes }}</td>
            <td>{{ $ubaseinFootnote->files }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['ubaseinFootnotes.destroy', $ubaseinFootnote->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ubaseinFootnotes.show', [$ubaseinFootnote->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('ubaseinFootnotes.edit', [$ubaseinFootnote->id]) }}" class='btn btn-default btn-xs'>
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
