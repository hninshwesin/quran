<div class="table-responsive">
    <table class="table" id="uhtaylwinoowithcodeFootnotes-table">
        <thead>
            <tr>
                <th>Uhtaylwinoowithcode Id</th>
        <th>Heading</th>
        <th>Notes</th>
        <th>Files</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($uhtaylwinoowithcodeFootnotes as $uhtaylwinoowithcodeFootnote)
            <tr>
                <td>{{ $uhtaylwinoowithcodeFootnote->uhtaylwinoowithcode_id }}</td>
            <td>{{ $uhtaylwinoowithcodeFootnote->heading }}</td>
            <td>{{ $uhtaylwinoowithcodeFootnote->notes }}</td>
            <td>{{ $uhtaylwinoowithcodeFootnote->files }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['uhtaylwinoowithcodeFootnotes.destroy', $uhtaylwinoowithcodeFootnote->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('uhtaylwinoowithcodeFootnotes.show', [$uhtaylwinoowithcodeFootnote->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('uhtaylwinoowithcodeFootnotes.edit', [$uhtaylwinoowithcodeFootnote->id]) }}" class='btn btn-default btn-xs'>
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
