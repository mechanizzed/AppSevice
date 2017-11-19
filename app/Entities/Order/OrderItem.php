<?php

namespace AppService\Entities\Order;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = "order_items";
    protected $guarded = ['id'];
}
