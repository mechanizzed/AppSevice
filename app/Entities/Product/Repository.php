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
		return $this->product->orderBy('pro_descr')->get();
	}



}