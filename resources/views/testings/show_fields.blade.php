<!-- Chapter Field -->
<div class="col-sm-12">
    {!! Form::label('chapter', 'Chapter:') !!}
    <p>{{ $testing->chapter }}</p>
</div>

<!-- Verse Field -->
<div class="col-sm-12">
    {!! Form::label('verse', 'Verse:') !!}
    <p>{{ $testing->verse }}</p>
</div>

<!-- Translation Field -->
<div class="col-sm-12">
    {!! Form::label('translation', 'Translation:') !!}
    <p>{{ $testing->translation }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $testing->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $testing->updated_at }}</p>
</div>

