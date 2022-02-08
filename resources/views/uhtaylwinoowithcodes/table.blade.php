<div class="table-responsive">
    <table class="table" id="uhtaylwinoowithcodes-table">
        <thead>
            <tr>
                <th>Chapter</th>
        <th>Verse</th>
        <th>Translation</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($uhtaylwinoowithcodes as $uhtaylwinoowithcode)
            <tr>
                <td>{{ $uhtaylwinoowithcode->chapter }}</td>
            <td>{{ $uhtaylwinoowithcode->verse }}</td>
            <td>{{ $uhtaylwinoowithcode->translation }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['uhtaylwinoowithcodes.destroy', $uhtaylwinoowithcode->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('uhtaylwinoowithcodes.show', [$uhtaylwinoowithcode->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('uhtaylwinoowithcodes.edit', [$uhtaylwinoowithcode->id]) }}" class='btn btn-default btn-xs'>
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
