<div class="table-responsive">
    <table class="table" id="arabicFootnotes-table">
        <thead>
            <tr>
                <th>Arabic Id</th>
        <th>Heading</th>
        <th>Notes</th>
        <th>Files</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($arabicFootnotes as $arabicFootnote)
            <tr>
                <td>{{ $arabicFootnote->arabic_id }}</td>
            <td>{{ $arabicFootnote->heading }}</td>
            <td>{{ $arabicFootnote->notes }}</td>
            <td>{{ $arabicFootnote->files }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['arabicFootnotes.destroy', $arabicFootnote->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('arabicFootnotes.show', [$arabicFootnote->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('arabicFootnotes.edit', [$arabicFootnote->id]) }}" class='btn btn-default btn-xs'>
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
