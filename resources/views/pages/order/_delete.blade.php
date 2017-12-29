<div class="modal fade" id="delete_{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title">{{ $item->product->pro_descr }}</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <span class="text-danger">Tem certeza que deseja deletar este item?</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Fechar</button>
        <a href="{{ route('itemDestroy', $item->id)}}" class="btn btn-sm btn-danger">Deletar</a>
      </div>
    </div>
  </div>
</div>
