<?php

namespace AppService\Http\Controllers\TableClient;

use AppService\Http\Controllers\Controller;
use Illuminate\Http\Request;
use AppService\Entities\Order\Repository as Order;
use AppService\Entities\Table\Repository as Table;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

class TableClientController extends Controller
{
  private $order;
  private $table;

  public function __construct(Order $order, Table $table)
  {
    $this->order = $order;
    $this->table = $table;
  }


  public function index()
  {
    if(Cache::has('order_id')){
      $order = $this->order->find(Cache::get('order_id'));
      return view('pages.order._delete_order', compact('order'));
    }
    $tables = $this->table->lists();
    return view('pages.tables.index', compact('tables'));
  }

  public function store(Request $request)
  {
    $this->validate($request, ['table' => 'required|numeric']);
    $order = $this->order->create(['table' => $request->get('table'), 'user_id' => Auth::id(), 'codfunci' => Auth::user()->codfunci]);
    Cache::forever('order_id', $order->id);
    Cache::forever('table', $order->table);
    return redirect()->route('products.index');

  }


}
