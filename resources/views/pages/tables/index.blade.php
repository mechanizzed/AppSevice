@extends('layouts.master')
@section('menu')
@include('layouts.menu')
@endsection
@section('content')

<section>
	<div class="card p-3">
		{!! Form::open(['route' => 'table.store']) !!}
    <div class="form-group">
			<h5 class="font-weight-bold text-center mb-3">Digite o número da mesa</h5>
      {!! Form::text('table', null, ['class' => 'form-control','placeholder' => 'Digite o número da mesa:', 'required']) !!}
    </div>
    <div class="form-group">
      <button type="submit" class="bnt btn-primary btn-100">Continuar</button>
    </div>
    {!! Form::close() !!}

  </div>
</section>






@endsection
