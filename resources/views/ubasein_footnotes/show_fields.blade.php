<!-- Ubasein Id Field -->
<div class="col-sm-12">
    {!! Form::label('ubasein_id', 'Ubasein Id:') !!}
    <p>{{ $ubaseinFootnote->ubasein_id }}</p>
</div>

<!-- Heading Field -->
<div class="col-sm-12">
    {!! Form::label('heading', 'Heading:') !!}
    <p>{{ $ubaseinFootnote->heading }}</p>
</div>

<!-- Notes Field -->
<div class="col-sm-12">
    {!! Form::label('notes', 'Notes:') !!}
    <p>{{ $ubaseinFootnote->notes }}</p>
</div>

<!-- Files Field -->
<div class="col-sm-12">
    {!! Form::label('files', 'Files:') !!}
    <p>{{ $ubaseinFootnote->files }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $ubaseinFootnote->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $ubaseinFootnote->updated_at }}</p>
</div>

