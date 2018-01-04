<?php
namespace AppService\Entities\Table;

class Repository
{
  private $table;

  public function __construct(Table $table)
  {
    $this->table = $table;
  }

  public function all()
  {
    return $this->table->orderBy('table', 'ASC')->get();
  }

  public function lists()
  {
    return $this->table->orderBy('table', 'ASC')->pluck('table', 'table');
  }

}
