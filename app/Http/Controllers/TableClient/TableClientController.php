<?php

namespace AppService\Http\Controllers\TableClient;

use AppService\Http\Controllers\Controller;
use Illuminate\Http\Request;
use AppService\Entities\Order\Repository as Order;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

class TableClientController extends Controller
{
  private $order;

  public function __construct(Order $order)
  {
    $this->order = $order;
  }


  public function index()
  {
    if(Cache::has('order_id')){
      return view('pages.order._delete_order');
    }
    return view('pages.tables.index');
  }

  public function store(Request $request)
  {
    $this->validate($request, ['table' => 'required|numeric']);
    $order = $this->order->create(['table' => $request->get('table'), 'user_id' => Auth::id()]);
    Cache::forever('order_id', $order->id);
    return redirect()->route('category.index');

  }


}
