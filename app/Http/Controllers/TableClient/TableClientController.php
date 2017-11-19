<?php

namespace AppService\Http\Controllers\TableClient;

use AppService\Http\Controllers\Controller;
use Illuminate\Http\Request;
use AppService\Entities\Order\Order;
use Illuminate\Support\Facades\Cache;

class TableClientController extends Controller
{
  private $order;

  public function __construct(Order $order)
  {
    $this->order = $order;
  }


  public function index()
  {
    return view('pages.tables.index');
  }

  public function store(Request $request)
  {
    if(Cache::has('order_id')){
      $id = Cache::get('order_id');
      $this->order->destroy($id);
      Cache::forget('order_id');
    }
    $this->validate($request, ['table' => 'required|numeric']);
    $order = $this->order->create(['table' => $request->get('table')]);
    Cache::forever('order_id', $order->id);
    return redirect()->route('category.index');

  }


}
