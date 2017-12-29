<?php

namespace AppService\Http\Controllers\Order;

use Illuminate\Http\Request;
use AppService\Http\Controllers\Controller;
use AppService\Entities\Order\Repository as Order;
use Illuminate\Support\Facades\Cache;

class OrderController extends Controller
{

  private $order;

  public function __construct(Order $order)
  {
    $this->order = $order;
  }

  public function show()
  {
    $order = $this->order->find(Cache::get('order_id'));
    $items = count($order->items);
    if(Cache::has('order_id') == null || $items == 0 ){
      return redirect()->route('products.index')->with('alert', 'Nenhum produto adicionado');
    }
    return view('pages.order.show', compact('order'));
  }

  public function checkout()
  {
    $order = $this->order->find(Cache::get('order_id'));
    $items = count($order->items);
    $values = ['qtd' => $items,'tag' => "P"];
    if ($this->order->update($order->id, $values) == true) {
      Cache::forget('order_id');
      return redirect()->route('home')->with('success', 'Pedido realizado com sucesso!');
    }
    return redirect()->route('home')->with('alert', 'Ocorreu algum erro');
  }


  public function destroy()
  {
    $id = Cache::get('order_id');
    $this->order->update($id, ['status' => 0]);
    Cache::forget('order_id');
    return redirect()->route('home')->with('success', 'Pedido cancelado com sucesso!');
  }

}
