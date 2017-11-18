<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>AppService</title>

  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/af-2.2.2/b-1.4.2/b-colvis-1.4.2/fh-3.1.3/r-2.2.0/datatables.min.css"/>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>


  <header>
    <div class="row text-center">
      <div class="col"></div>
      <div class="col p-3 title">
        <h4>AppService</h4>
      </div>
      <div class="col p-3">
        <a href="{{ route('logout') }}"
        styles="color: #FFFFFF !important";
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        <small>Sair</small>
      </a>
    </div>
  </div>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
  </form>

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

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    @yield('content')
  </section>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/af-2.2.2/b-1.4.2/b-colvis-1.4.2/fh-3.1.3/r-2.2.0/datatables.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#data').DataTable({
        fnClearTable: 0,
        "bLengthChange": false,
        "bInfo": true,
        "bPaginate": false,
        iDefaultSortIndex: 0,
        "iDisplayLength": 100,
        "aaSorting": [],
        responsive: true,
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
