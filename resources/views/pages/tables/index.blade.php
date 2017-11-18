@extends('layouts.master')
@section('content')


<section>
	<div class="card p-2">
		{!! Form::open(['route' => 'table.store']) !!}
    <div class="form-group">
      {!! Form::text('table', null, ['class' => 'form-control','placeholder' => 'Digite o número da mesa:', 'required']) !!}
    </div>
    <div class="form-group">
      <button type="submit" class="bnt btn-primary btn-100">Enviar</button>
    </div>
    {!! Form::close() !!}


    
  </div>
</section>






@endsection