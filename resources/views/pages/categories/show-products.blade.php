@extends('layouts.master')
@section('menu')
@include('layouts.menu')
@endsection
@section('content')


<section>

  <div class="card p-3">

    <p class="text-info font-weight-bold text-center">{{ $category->a_descr}}</p>

    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead class="thead-light">
        {{-- <tr>
          <th class="col">Produto</th>
          <th class="col">Preço</th>
        </tr> --}}
      </thead>
      <tbody>
        @foreach($category->products as $product)
        @include('pages.products._all')
        @endforeach
      </tbody>
    </table>
  </div>

</section>




@endsection
