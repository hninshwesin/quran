<!-- Shwe Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shwe_id', 'Shwe Id:') !!}
    {!! Form::number('shwe_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Heading Field -->
<div class="form-group col-sm-6">
    {!! Form::label('heading', 'Heading:') !!}
    {!! Form::text('heading', null, ['class' => 'form-control']) !!}
</div>

<!-- Notes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('notes', 'Notes:') !!}
    {!! Form::text('notes', null, ['class' => 'form-control']) !!}
</div>

<!-- Files Field -->
<div class="form-group col-sm-6">
    {!! Form::label('files', 'Files:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('files', ['class' => 'custom-file-input']) !!}
            {!! Form::label('files', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>