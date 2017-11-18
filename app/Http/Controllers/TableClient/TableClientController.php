<?php

namespace AppService\Http\Controllers\TableClient;

use AppService\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TableClientController extends Controller
{


  public function index()
  {
    return view('pages.tables.index');
  }

  public function store(Request $request)
  {
    if (Cache::has('order')) {
      Cache::forget('order');
    }
    $this->validate($request, ['table' => 'required|numeric']);
    $cache = ['table' => $request->get('table')];
    Cache::forever('order', $cache);
    return redirect()->route('category.index');

  }


}
