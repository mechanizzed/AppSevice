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
		$check = $this->orderItem->where('order_id', '=', Cache::get('order_id'))->where('product_id', '=', $request->get('product_id'))->first();
		if(count($check) > 0 ){
			$this->orderItem->find($check->id)->update(['qtd' => $check->qtd + $request->get('qtd')]);
			return redirect()->route('category.index')->with('success', 'Quantidade do Produto atualizado');
		}

		$values = $request->except('_token');
		$values['order_id'] = Cache::get('order_id');
		$this->orderItem->create($values);
		return redirect()->route('products.index')->with('success', 'Produto adicionado com sucesso!');
	}


}
