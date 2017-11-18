<?php

namespace AppService\Entities\Category;

class Repository
{
	private $category;

	public function __construct(Category $category)
	{
		$this->category = $category;
	}


	public function all()
	{
		return $this->category->orderBy('a_descr')->get();
	}

	public function find($id)
	{
		return $this->category->find($id);
	}


}