<?php

namespace AppService\Entities\Product;

class Repository
{

	private $product;

	public function __construct(Product $product)
	{
		$this->product = $product;
	}


	public function all()
	{
		return $this->product
		->where('pro_ad', 'A')
		->orderBy('pro_descr')
		->get();
	}

	public function find($id)
	{
		return $this->product->find($id);
	}



}
