@extends('layouts.master')
@section('menu')
  @include('layouts.menu')
@endsection
@section('content')


  <section>
    <div class="card p-3">
      @if (count($order->items) > 0 )
        <p class="font-weight-bold text-center text-primary">Resumo do pedido:</p>
        <div class="row">
          <div class="col text-center">
            <button type="button" class="btn btn-sm btn-primary">Mesa: {{ $order->table}}</button>
          </div>
          <div class="col text-center">
            <a href="{{ route('order.checkout') }}" class="btn btn-sm btn-success">Finalizar pedido</a>
          </div>
        </div>
        <div class="clearfix mb-3"></div>

        <table class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead class="thead-light">
            <tr>
              <th>Produto</th>
              <th>Qtd</th>
              <th>Preço</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($order->items as $item)
              <tr>
                <td>
                  <small>{{ $item->product->pro_descr }}</small> <br>
                  <small>{{ $item->observations }}</small>
                </td>
                <td><small>{{ $item->qtd }}</small></td>
                <td><small>R$ {{ number_format($item->product->pro_venda, 2, ',', ' ') }}</small></td>
                <td>
                  <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#edit_{{ $item->id }}">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-danger mb-2" data-toggle="modal" data-target="#delete_{{ $item->id }}">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                  </button>
                </td>
              </tr>
              @include('pages.order._edit')
              @include('pages.order._delete')
            @endforeach
          </tbody>
        </table>
      @else
        <p class="font-weight-bold text-center text-primary">Resumo do pedido:</p>
        <p class="text-center">Nenhum produto adicionado</p>
      @endif


    </div>
  </section>




@endsection
