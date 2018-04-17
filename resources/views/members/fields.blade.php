<!-- Nama Lengkap Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_lengkap', 'Nama Lengkap:') !!}
    {!! Form::text('nama_lengkap', null, ['class' => 'form-control']) !!}
</div>

<!-- Telpon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telpon', 'Telpon:') !!}
    {!! Form::text('telpon', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-12">
    {!! Form::label('gender', 'Gender:') !!}
    <label class="radio-inline">
        {!! Form::radio('gender', "L", null) !!} Laki-laki
    </label>

    <label class="radio-inline">
        {!! Form::radio('gender', "", null) !!} 
    </label>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('members.index') !!}" class="btn btn-default">Cancel</a>
</div>
