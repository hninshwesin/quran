<!-- Chapter Field -->
<div class="col-sm-12">
    {!! Form::label('chapter', 'Chapter:') !!}
    <p>{{ $shwe->chapter }}</p>
</div>

<!-- Verse Field -->
<div class="col-sm-12">
    {!! Form::label('verse', 'Verse:') !!}
    <p>{{ $shwe->verse }}</p>
</div>

<!-- Translation Field -->
<div class="col-sm-12">
    {!! Form::label('translation', 'Translation:') !!}
    <p>{{ $shwe->translation }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $shwe->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $shwe->updated_at }}</p>
</div>

