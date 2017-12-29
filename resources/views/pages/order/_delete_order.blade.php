@extends('layouts.master')
@section('menu')
  @include('layouts.menu')
@endsection
@section('content')


  <section>
    <div class="card p-3">
      <h5 class="font-weight-bold text-center mb-3">Existe um pedido em aberto</h5>
      <h5 class="text-center mb-3">Mesa: {{ $order->table }} </h5>

      <div class="row">
        <div class="col text-center"><a href="{{ route('category.index') }}" class="btn btn-sm btn-primary">Continuar</a></div>
        <div class="col text-center"><a href="{{ route('order.destroy')}}" class="btn btn-sm btn-danger">Deletar pedido</a></div>
      </div>

    </div>
  </section>




@endsection
