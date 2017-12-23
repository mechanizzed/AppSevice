<?php

namespace AppService\Http\Controllers\Products;

use Illuminate\Http\Request;
use AppService\Http\Controllers\Controller;
use AppService\Entities\Product\Repository as Product;
use AppService\Entities\Order\OrderItem;
use Illuminate\Support\Facades\Cache;

class ProductsController extends Controller
{
	private $product;
	private $orderItem;

	public function __construct(Product $product, OrderItem $orderItem)
	{
		$this->product = $product;
		$this->orderItem = $orderItem;
	}

	public function index()
	{
		$products = $this->product->all();
		return view('pages.products.index', compact('products'));
	}

	public function show($id)
	{
		$product = $this->product->find($id);
		return view('pages.products.show', compact('product'));
	}

	public function store(Request $request)
	{
		if(Cache::has('order_id') == null){
			return redirect()->back()->with('alert', 'Selecione uma mesa');
		}
		$values = $request->except('_token');
		$values['order_id'] = Cache::get('order_id');
		$this->orderItem->create($values);
		return redirect()->route('category.index')->with('success', 'Produto adicionado com sucesso!');
	}

}
