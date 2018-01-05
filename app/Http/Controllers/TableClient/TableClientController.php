<?php

namespace AppService\Http\Controllers\TableClient;

use AppService\Http\Controllers\Controller;
use Illuminate\Http\Request;
use AppService\Entities\Order\Repository as Order;
use AppService\Entities\Table\Repository as Table;
use Illuminate\Support\Facades\Session;
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
    if(session()->exists('order_id')){
      $order = $this->order->find(session()->get('order_id'));
      if($order->user_id == Auth::user()->id){
        return view('pages.order._delete_order', compact('order'));
      }
    }
    $tables = $this->table->lists();
    return view('pages.tables.index', compact('tables'));
  }

  public function store(Request $request)
  {
    $this->validate($request, ['table' => 'required|numeric']);

    //Get id table and update status to 1 (open)
    $tableId = $this->table->findTable($request->get('table'));
    $this->table->update($tableId->id, ['status' => 1]);

    //Create new order in database with status 1 (open)
    $order = $this->order->create(['table' => $request->get('table'), 'user_id' => Auth::id(), 'codfunci' => Auth::user()->codfunci]);

    session(['order_id' => $order->id]);
    session(['table' => $order->table]);
    return redirect()->route('products.index');

  }


}
