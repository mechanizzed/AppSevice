@extends('layouts.master')
@section('menu')
  @include('layouts.menu')
@endsection
@section('content')


  <section>
    <div class="card p-3">


      <p class="font-weight-bold text-center text-primary">Resumo do pedido:</p>

      <p class="text-center text-primary">Mesa: {{ $order->table}}</small>

        <table class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead class="thead-light">
            <tr>
              <th>Produto</th>
              <th>Qtd</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($order->items as $item)
              <tr>
                <td>
                  <small>{{ $item->product->pro_descr }}</small> <br>
                  <small>{{ $item->observations }}</small>
                </td>
                <td><small></small> {{ $item->qtd }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>

        <hr>
        <a href="{{ route('order.checkout') }}" class="btn btn-success">Finalizar pedido</a>

        <div class="mb-5"></div>
      </div>
    </section>




  @endsection
