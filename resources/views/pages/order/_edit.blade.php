<div class="modal fade" id="edit_{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title">{{ $item->product->pro_descr }}</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open(['route' => 'itemUpdate', 'method' => 'put']) !!}

        <div class="p-3 mb-2 bg-lighter text-center">
          <small>Quantidade:</small> <br>
          <div class="row">
            <div class="col">
              <button type="button" class="btn btn-sm btn-secondary" id="qtd_remove"><i class="fa fa-minus-circle" aria-hidden="true"></i></button>
            </div>
            <div class="col"><input type="text" id="qtd" value="{{ $item->qtd }}" class="text-center form-control" disabled></div>
            <div class="col">
              <button type="button" class="btn btn-sm btn-secondary" id="qtd_add"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>


        <div class="form-group">
          <small>Observações:</small> <br>
          <textarea name="observations" rows="4" class="form-control">{{ $item->observations }}</textarea>
        </div>

      </div>
      <div class="modal-footer">
        <input type="hidden" name="qtd" class="qtd" value="{{ $item->qtd }}">
        <input type="hidden" name="id" value="{{ $item->id }}">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
