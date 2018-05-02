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

<!-- Institusi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('institusi', 'Institusi:') !!}
    {!! Form::text('institusi', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-12">
    {!! Form::label('gender', 'Gender:') !!}
    <label class="radio-inline">
        {!! Form::radio('gender', "L", null) !!} Laki-laki
    </label>

    <label class="radio-inline">
        {!! Form::radio('gender', "p", null) !!} Perempuan
    </label>

</div>

<!-- Kategori Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kategori_id', 'Kategori Id:') !!}
    {!! Form::select('kategori_id', ['1' => 'Alumni', '2' => 'Dosen', '3' => 'Mahasiswa'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('members.index') !!}" class="btn btn-default">Cancel</a>
</div>
