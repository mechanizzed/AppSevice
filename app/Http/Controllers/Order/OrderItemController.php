<?php

namespace AppService\Http\Controllers\Order;

use Illuminate\Http\Request;
use AppService\Http\Controllers\Controller;
use AppService\Entities\Order\OrderItem;

class OrderItemController extends Controller
{
  private $item;

  public function __construct(OrderItem $item)
  {
    $this->item = $item;
  }

  public function update(Request $request)
  {
    $this->item->find($request->get('id'))->update($request->all());
    return redirect()->route('order.show')->with('success', 'Dados atualizados com sucesso!');
  }

  public function destroy($id)
  {
    $this->item->destroy($id);
    return redirect()->route('order.show')->with('success', 'Item excluído com sucesso!');
  }

}
