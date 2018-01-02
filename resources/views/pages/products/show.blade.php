@extends('layouts.master')
@section('menu')
  @include('layouts.menu')
@endsection
@section('content')


  <section>
    <div class="card p-3">


      <p class="font-weight-bold">{{ $product->pro_descr }}</p>


      {!! Form::model( $product, ['route' => 'products.store', 'method' => 'post']) !!}

      <div class="p-3 mb-2 bg-lighter text-center">
        <small>Quantidade:</small> <br>
        <div class="row">
          <div class="col">
            <button type="button" class="btn btn-sm btn-secondary qtd_remove" data-id="1"><i class="fa fa-minus-circle" aria-hidden="true"></i></button>
          </div>
          <div class="col">
            {!! Form::text('qtd', 1, ['id' => "qtd_1", 'class' => 'text-center form-control']) !!}
          </div>
          <div class="col">
            <button type="button" class="btn btn-sm btn-secondary qtd_add" data-id="1"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
          </div>
        </div>
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
