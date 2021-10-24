<div class="table-responsive">
    <table class="table" id="utinmyints-table">
        <thead>
            <tr>
                <th>Chapter</th>
        <th>Verse</th>
        <th>Translation</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($utinmyints as $utinmyint)
            <tr>
                <td>{{ $utinmyint->chapter }}</td>
            <td>{{ $utinmyint->verse }}</td>
            <td>{{ $utinmyint->translation }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['utinmyints.destroy', $utinmyint->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('utinmyints.show', [$utinmyint->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('utinmyints.edit', [$utinmyint->id]) }}" class='btn btn-default btn-xs'>
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
