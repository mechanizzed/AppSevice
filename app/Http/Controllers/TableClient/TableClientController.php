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
		$this->validate($request, ['table' => 'required|numeric']);
		Cache::forever('order', $request->get('table'));
		return redirect()->route('category.index');

	}


}
