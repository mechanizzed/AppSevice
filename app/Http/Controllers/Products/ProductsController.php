<?php

namespace AppService\Http\Controllers\Products;

use Illuminate\Http\Request;
use AppService\Http\Controllers\Controller;
use AppService\Entities\Product\Repository as Product;

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

}
