<div class="table-responsive">
    <table class="table" id="ubaseins-table">
        <thead>
            <tr>
                <th>Chapter</th>
        <th>Verse</th>
        <th>Translation</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ubaseins as $ubasein)
            <tr>
                <td>{{ $ubasein->chapter }}</td>
            <td>{{ $ubasein->verse }}</td>
            <td>{{ $ubasein->translation }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['ubaseins.destroy', $ubasein->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ubaseins.show', [$ubasein->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('ubaseins.edit', [$ubasein->id]) }}" class='btn btn-default btn-xs'>
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
