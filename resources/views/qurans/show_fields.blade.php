<!-- Chapter Field -->
<div class="col-sm-12">
    {!! Form::label('chapter', 'Chapter:') !!}
    <p>{{ $quran->chapter }}</p>
</div>

<!-- Verse Field -->
<div class="col-sm-12">
    {!! Form::label('verse', 'Verse:') !!}
    <p>{{ $quran->verse }}</p>
</div>

<!-- Translation Field -->
<div class="col-sm-12">
    {!! Form::label('translation', 'Translation:') !!}
    <p>{{ $quran->translation }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $quran->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $quran->updated_at }}</p>
</div>

