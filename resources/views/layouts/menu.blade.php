<div class="headerTab p-2">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center text-uppercase">
        <small class="color-light">
          <i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }}
        </small>
        <small>
          <a href="{{ route('user.pass.index')}}" class="color-light"><i class="fa fa-lock" aria-hidden="true"></i> Altear senha</a>
        </small>
        <small class="color-light" style="cursor: pointer;" data-toggle="modal" data-target="#logout">
          (<i class="fa fa-sign-out" aria-hidden="true"></i> Sair )
        </small>
    </div>
  </div>
</div>

<div class="p-2">
  <div class="container">
    <div class="d-flex justify-content-between">
      <div><a href="{{ route('home') }}"><i class="fa fa-th-large" aria-hidden="true"></i> NOVO PEDIDO</a></div>
      <div><a href="{{ route('category.index') }}"><i class="fa fa-th-large" aria-hidden="true"></i> CATEGORIAS</a></div>
      <div><a href="{{ route('products.index') }}"><i class="fa fa-th-large" aria-hidden="true"></i> PRODUTOS</li></a></div>
    </div>
  </div>
</div>


@include('layouts.logout')
