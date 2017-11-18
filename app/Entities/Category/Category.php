<?php

namespace AppService\Entities\Category;

use Illuminate\Database\Eloquent\Model;
use AppService\Entities\Product\Product;

class Category extends Model
{
    protected $table = "agrupro01";

    public function products()
    {
    	return $this->hasMany(Product::class, 'pro_id')->orderBy('pro_descr');
    }
}
