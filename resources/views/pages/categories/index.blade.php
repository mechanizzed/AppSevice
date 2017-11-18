@extends('layouts.master')
@section('menu')
@include('layouts.menu')
@endsection
@section('content')


<section>

  <div class="card pt-3">


    <table id="data" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead class="thead-light">
        <tr>
          <th>Categoria</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $category)
        <tr>
          <td class="link">
            <a href="{{ route('category.show', ['id' => $category->id, 'slug' => \Illuminate\Support\Str::slug($category->a_descr)]) }}">
              <small>{{ $category->a_descr }}</small>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</section>




@endsection