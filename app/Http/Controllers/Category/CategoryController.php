<?php

namespace AppService\Http\Controllers\Category;

use AppService\Http\Controllers\Controller;
use Illuminate\Http\Request;
use AppService\Entities\Category\Repository as Category;

class CategoryController extends Controller
{
	private $category;

	public function __construct(Category $category)
	{
		$this->category = $category;
	}



	public function index()
	{
		$categories = $this->category->all();
		return view('pages.categories.index', compact('categories'));
	}

	public function show($id)
	{
		$category = $this->category->find($id);
		return view('pages.categories.show-products',compact('category'));
	}
    
}
