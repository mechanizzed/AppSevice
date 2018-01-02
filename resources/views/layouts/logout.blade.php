<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="text-danger">Tem certeza que deseja sair do sistema?</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if (Cache::has('order_id'))
          <p>Você não pode sair do sitema, existe um pedido em aberto.</p>
        @else
          <div class="row">
            <div class="col">
              <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Não</button>
            </div>
            <div class="col text-right">
              <a class="btn btn-sm btn-danger" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Sim</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </div>
          </div>

        @endif
      </div>
    </div>
  </div>
</div>
