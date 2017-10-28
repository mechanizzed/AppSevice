<?php

namespace AppService\Http\Controllers\Home;

use Illuminate\Http\Request;
use AppService\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function index()
	{
		return view('pages.home.index');
	}
}
