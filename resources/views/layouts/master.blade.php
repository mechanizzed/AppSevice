<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>AppService</title>

  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/v001.css') }}">
</head>
<body>

  <div class="loader"></div>

  @if(Session::has('alert'))
    <div class="msg-alert">
      <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> {{ Session::get('alert') }}
    </div>
  @endif

  @if(Session::has('success'))
    <div class="msg-success">
      <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> {{ Session::get('success') }}
    </div>
  @endif

  @if ($errors->any())
    <div class="msg-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif


  <header>
    @yield('menu')
  </header>

  <div class="clearfix"></div>

  {{-- <section class="search">
  <div class="container">
  <div class="card rounded-0 box-card">
  <div class="card-body">
  <form action="#">
  <input type="text" name="search" class="form-control rounded-0" placeholder="Buscar Produtos...">
</form>
</div>
</div>
</section> --}}

<div class="clearfix"></div>


<section class="container">
  @yield('content')
</section>

<section class="footerTabs">
  <ul class="nav nav-pills nav-fill">
    @if(Cache::has('order_id'))
      <li class="nav-item">
        <a class="nav-link btn btn-sm btn-info" href="{{ route('order.show') }}"><small><i class="fa fa-pencil" aria-hidden="true"></i> Visualizar pedido</small></a>
      </li>
    @endif
    <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();"><small><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</small></a>
    </li>
  </ul>
</section>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  {{ csrf_field() }}
</form>


<script type="text/javascript" src="{{ asset('js/v001.js') }}">

</script>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/af-2.2.2/b-1.4.2/b-colvis-1.4.2/fh-3.1.3/r-2.2.0/datatables.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
  $('#data').DataTable({
    "fnClearTable": 0,
    "bLengthChange": false,
    "bInfo": true,
    "bPaginate": false,
    "iDefaultSortIndex": 0,
    "iDisplayLength": 100,
    "aaSorting": [],
    "responsive": true,
    language: {
      "sEmptyTable": "Nenhum registro encontrado",
      "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
      "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
      "sInfoFiltered": "(Filtrados de _MAX_ registros)",
      "sInfoPostFix": "",
      "sInfoThousands": ".",
      "sLengthMenu": "_MENU_ resultados por página",
      "sLoadingRecords": "Carregando...",
      "sProcessing": "Processando...",
      "sZeroRecords": "Nenhum registro encontrado",
      "sSearch": "Pesquisar",
      "oPaginate": {
        "sNext": "Próximo",
        "sPrevious": "Anterior",
        "sFirst": "Primeiro",
        "sLast": "Último"
      },
      "oAria": {
        "sSortAscending": ": Ordenar colunas de forma ascendente",
        "sSortDescending": ": Ordenar colunas de forma descendente"
      }
    }
  });
} );
</script>

</body>
</html>
