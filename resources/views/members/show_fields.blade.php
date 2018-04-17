<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $member->id !!}</p>
</div>

<!-- Nama Lengkap Field -->
<div class="form-group">
    {!! Form::label('nama_lengkap', 'Nama Lengkap:') !!}
    <p>{!! $member->nama_lengkap !!}</p>
</div>

<!-- Institusi Field -->
<div class="form-group">
    {!! Form::label('institusi', 'Institusi:') !!}
    <p>{!! $member->institusi !!}</p>
</div>

<!-- Telpon Field -->
<div class="form-group">
    {!! Form::label('telpon', 'Telpon:') !!}
    <p>{!! $member->telpon !!}</p>
</div>

<!-- Gender Field -->
<div class="form-group">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{!! $member->gender !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $member->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $member->updated_at !!}</p>
</div>

