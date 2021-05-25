<!-- Chapter Field -->
<div class="col-sm-12">
    {!! Form::label('chapter', 'Chapter:') !!}
    <p>{{ $test->chapter }}</p>
</div>

<!-- Verse Field -->
<div class="col-sm-12">
    {!! Form::label('verse', 'Verse:') !!}
    <p>{{ $test->verse }}</p>
</div>

<!-- Translation Field -->
<div class="col-sm-12">
    {!! Form::label('translation', 'Translation:') !!}
    <p>{{ $test->translation }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $test->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $test->updated_at }}</p>
</div>

