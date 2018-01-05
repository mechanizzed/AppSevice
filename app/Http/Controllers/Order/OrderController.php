<?php

namespace AppService\Http\Controllers\Order;

use Illuminate\Http\Request;
use AppService\Http\Controllers\Controller;
use AppService\Entities\Order\Repository as Order;
use AppService\Entities\Table\Repository as Table;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

  private $order;
  private $table;

  public function __construct(Order $order, Table $table)
  {
    $this->order = $order;
    $this->table = $table;
  }

  public function show()
  {
    $order = $this->order->findWhere(session()->get('order_id'), Auth::user()->id);
    return view('pages.order.show', compact('order'));
  }

  public function checkout()
  {
    $order = $this->order->find(session()->get('order_id'));
    $items = count($order->items);
    $values = ['qtd' => $items, 'status' => 2];
    $table = $this->table->findTable($order->table);
    $this->table->update($table->id, ['status' => 0]);
    if ($this->order->update($order->id, $values) == true) {
      session()->forget('order_id');
      session()->forget('table');
      return redirect()->route('home')->with('success', 'Pedido realizado com sucesso!');
    }
    return redirect()->route('home')->with('alert', 'Ocorreu algum erro');
  }


  public function destroy()
  {
    $order = $this->order->find(session()->get('order_id'));
    $this->order->update($order->id, ['status' => 0]);

    $table = $this->table->findTable($order->table);
    $this->table->update($table->id, ['status' => 0]);

    session()->forget('order_id');
    session()->forget('table');
    return redirect()->route('home')->with('success', 'Pedido cancelado com sucesso!');
  }

}
