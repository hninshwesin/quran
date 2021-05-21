<!-- Chapter Field -->
<div class="form-group col-sm-6">
    {!! Form::label('chapter', 'Chapter:') !!}
    {!! Form::number('chapter', null, ['class' => 'form-control']) !!}
</div>

<!-- Verse Field -->
<div class="form-group col-sm-6">
    {!! Form::label('verse', 'Verse:') !!}
    {!! Form::number('verse', null, ['class' => 'form-control']) !!}
</div>

<!-- Translation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('translation', 'Translation:') !!}
    {!! Form::text('translation', null, ['class' => 'form-control']) !!}
</div>