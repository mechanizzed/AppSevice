<?php

namespace AppService\Entities\Order;

use Illuminate\Database\Eloquent\Model;
use AppService\Entities\Order\OrderItem;

class Order extends Model
{
  protected $table = "orders";
  protected $guarded = ['id'];

  public function items()
  {
    return $this->hasMany(OrderItem::class , 'order_id');
  }
  
}
