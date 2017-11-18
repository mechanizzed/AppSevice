<?php

namespace AppService\Http\Controllers\Products;

use Illuminate\Http\Request;
use AppService\Http\Controllers\Controller;
use AppService\Entities\Product\Repository as Product;
use Illuminate\Support\Facades\Cache;

class ProductsController extends Controller
{
	private $product;

	public function __construct(Product $product)
	{
		$this->product = $product;
	}
	
	public function index()
	{
		$products = $this->product->all();
		return view('pages.products.index', compact('products'));
	}

	public function store($id)
	{
		if(Cache::has('order')){
			$cache = Cache::get('order');
		}
		$cache['product'] = $id;
		Cache::forever('order', $cache);
		dd(Cache::get('order'));
	}

}
