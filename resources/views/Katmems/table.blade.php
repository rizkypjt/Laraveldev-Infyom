<table class="table table-responsive" id="katmems-table">
    <thead>
        <tr>
            <th>Nama</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($katmems as $katmem)
        <tr>
            <td>{!! $katmem->nama !!}</td>
            <td>
                {!! Form::open(['route' => ['katmems.destroy', $katmem->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('katmems.show', [$katmem->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('katmems.edit', [$katmem->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>