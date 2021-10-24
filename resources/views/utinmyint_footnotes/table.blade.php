<div class="table-responsive">
    <table class="table" id="utinmyintFootnotes-table">
        <thead>
            <tr>
                <th>Utinmyint Id</th>
        <th>Heading</th>
        <th>Notes</th>
        <th>Files</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($utinmyintFootnotes as $utinmyintFootnote)
            <tr>
                <td>{{ $utinmyintFootnote->utinmyint_id }}</td>
            <td>{{ $utinmyintFootnote->heading }}</td>
            <td>{{ $utinmyintFootnote->notes }}</td>
            <td>{{ $utinmyintFootnote->files }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['utinmyintFootnotes.destroy', $utinmyintFootnote->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('utinmyintFootnotes.show', [$utinmyintFootnote->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('utinmyintFootnotes.edit', [$utinmyintFootnote->id]) }}" class='btn btn-default btn-xs'>
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
