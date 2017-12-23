@extends('layouts.master')
@section('menu')
@include('layouts.menu')
@endsection
@section('content')


<section>
  <div class="card p-3">


    <p class="font-weight-bold">{{ $product->pro_descr }}</p>


    {!! Form::open(['route' => 'products.store', 'method' => 'post']) !!}
    <div class="jumbotron text-center">
      <small>Quantidade:</small> <br>
      <input type="text" name="qtd" id="qtd" value="1" class="text-center form-control">
      <input type="button" value="-" onclick="$('#qtd').val(parseInt($('#qtd').val())-1)">
      <input type="button" value="+" onclick="$('#qtd').val(parseInt($('#qtd').val())+1)">
    </div>

    <div class="form-group">
      <small>Observações:</small> <br>
      <textarea name="observations" rows="4" class="form-control"></textarea>
    </div>

    <div class="form-group">
      <input type="hidden" name="product_id" value="{{ $product->id }}">
      <button class="btn btn-success btn-100" type="submit"><i class="fa fa-plus" aria-hidden="true"></i> <small>Adicionar produto</small></button>
    </div>
    {!! Form::close() !!}

  </div>
</section>




@endsection
