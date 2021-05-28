<!-- Shwe Id Field -->
<div class="col-sm-12">
    {!! Form::label('shwe_id', 'Shwe Id:') !!}
    <p>{{ $shweFootnote->shwe_id }}</p>
</div>

<!-- Heading Field -->
<div class="col-sm-12">
    {!! Form::label('heading', 'Heading:') !!}
    <p>{{ $shweFootnote->heading }}</p>
</div>

<!-- Notes Field -->
<div class="col-sm-12">
    {!! Form::label('notes', 'Notes:') !!}
    <p>{{ $shweFootnote->notes }}</p>
</div>

<!-- Files Field -->
<div class="col-sm-12">
    {!! Form::label('files', 'Files:') !!}
    <p>{{ $shweFootnote->files }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $shweFootnote->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $shweFootnote->updated_at }}</p>
</div>

