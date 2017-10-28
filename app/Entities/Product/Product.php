<?php

namespace AppService\Entities\Product;

use Illuminate\Database\Eloquent\Model;
use AppService\Entities\Category;

class Product extends Model
{
	protected $table = "produtos01";

	public function category()
	{
		return $this->belongsTo(Category::class,'pro_index');
	}
}
