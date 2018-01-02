<div class="p-3 mb-2 bg-lighter text-center">
  <small>Quantidade:</small> <br>
  <div class="row">
    <div class="col">
      <button type="button" class="btn btn-sm btn-secondary qtd_remove" data-id="{{ $item->id }}"><i class="fa fa-minus-circle" aria-hidden="true"></i></button>
    </div>
    <div class="col">
      {!! Form::text('qtd', null, ['id' => "qtd_$item->id", 'class' => 'text-center form-control']) !!}
    </div>
    <div class="col">
      <button type="button" class="btn btn-sm btn-secondary qtd_add" data-id="{{ $item->id }}"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
    </div>
  </div>
</div>
