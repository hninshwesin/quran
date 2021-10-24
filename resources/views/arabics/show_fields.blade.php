<!-- Chapter Field -->
<div class="col-sm-12">
    {!! Form::label('chapter', 'Chapter:') !!}
    <p>{{ $arabic->chapter }}</p>
</div>

<!-- Verse Field -->
<div class="col-sm-12">
    {!! Form::label('verse', 'Verse:') !!}
    <p>{{ $arabic->verse }}</p>
</div>

<!-- Translation Field -->
<div class="col-sm-12">
    {!! Form::label('translation', 'Translation:') !!}
    <p>{{ $arabic->translation }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $arabic->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $arabic->updated_at }}</p>
</div>

