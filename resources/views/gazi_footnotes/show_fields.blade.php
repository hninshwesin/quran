<!-- Gazi Id Field -->
<div class="col-sm-12">
    {!! Form::label('gazi_id', 'Gazi Id:') !!}
    <p>{{ $gaziFootnote->gazi_id }}</p>
</div>

<!-- Heading Field -->
<div class="col-sm-12">
    {!! Form::label('heading', 'Heading:') !!}
    <p>{{ $gaziFootnote->heading }}</p>
</div>

<!-- Notes Field -->
<div class="col-sm-12">
    {!! Form::label('notes', 'Notes:') !!}
    <p>{{ $gaziFootnote->notes }}</p>
</div>

<!-- Files Field -->
<div class="col-sm-12">
    {!! Form::label('files', 'Files:') !!}
    <p>{{ $gaziFootnote->files }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $gaziFootnote->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $gaziFootnote->updated_at }}</p>
</div>

