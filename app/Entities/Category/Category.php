<?php

namespace AppService\Entities\Category;

use Illuminate\Database\Eloquent\Model;
use AppService\Entities\Product;

class Category extends Model
{
	protected $table "agrupo01";

	public function products()
	{
		return $this->hasMany(Product::class, 'pro_index');
	}
}
