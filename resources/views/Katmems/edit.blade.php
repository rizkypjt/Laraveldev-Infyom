@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Katmem
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($katmem, ['route' => ['katmems.update', $katmem->id], 'method' => 'patch']) !!}

                        @include('katmems.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection