<table class="table table-responsive" id="members-table">
    <thead>
        <tr>
            <th>Nama Lengkap</th>
        <th>Institusi</th>
        <th>Telpon</th>
        <th>Gender</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($members as $member)
        <tr>
            <td>{!! $member->nama_lengkap !!}</td>
            <td>{!! $member->institusi !!}</td>
            <td>{!! $member->telpon !!}</td>
            <td>{!! $member->gender !!}</td>
            <td>
                {!! Form::open(['route' => ['members.destroy', $member->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('members.show', [$member->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('members.edit', [$member->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>