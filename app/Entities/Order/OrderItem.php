<?php

namespace AppService\Entities\Order;

use Illuminate\Database\Eloquent\Model;
use AppService\Entities\Product\Product;

class OrderItem extends Model
{
  protected $table = "order_items";
  protected $guarded = ['id'];


  public function product()
  {
    return $this->belongsTo(Product::class, 'product_id' );
  }
}
