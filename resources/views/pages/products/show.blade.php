@extends('layouts.master')
@section('menu')
  @include('layouts.menu')
@endsection
@section('content')


  <section>
    <div class="card p-3">


      <p class="font-weight-bold">{{ $product->pro_descr }}</p>


      {!! Form::open(['route' => 'products.store', 'method' => 'post']) !!}
      @include('pages.products._qtd')

      <div class="form-group">
        <small>Observações:</small> <br>
        <textarea name="observations" rows="4" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <button class="btn btn-success btn-100" type="submit"><i class="fa fa-plus" aria-hidden="true"></i> <small>Adicionar produto</small></button>
      </div>
      <input type="hidden" name="qtd" class="qtd" value="1">
      {!! Form::close() !!}

    </div>
  </section>




@endsection
