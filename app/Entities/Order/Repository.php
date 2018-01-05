<?php

namespace AppService\Entities\Order;

class Repository
{

  function __construct(Order $order)
  {
    $this->order = $order;
  }

  public function find($id)
  {
    return $this->order->find($id);
  }

  public function findWhere($id, $user)
  {
    return $this->order
    ->where('user_id', $user)
    ->where('id', $id)
    ->firstOrFail();
  }

  public function create($values)
  {
    return $this->order->create($values);
  }

  public function update($id, $values)
  {
    return $this->order->find($id)->update($values);
  }

  public function destroy($id)
  {
    return $this->order->destroy($id);
  }
}
