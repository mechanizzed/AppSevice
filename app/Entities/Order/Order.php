<?php

namespace AppService\Entities\Order;

use Illuminate\Database\Eloquent\Model;
use AppService\Entities\Order\OrderItem;
use AppService\Entities\Table\Table;

class Order extends Model
{
  protected $table = "orders";
  protected $guarded = ['id'];

  public function items()
  {
    return $this->hasMany(OrderItem::class , 'order_id');
  }

  public function table()
  {
    return $this->belongsTo(Table::class, 'table_id');
  }

}
