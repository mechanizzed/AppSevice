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

  public function findTable($table)
  {
    return $this->table->where('table', $table)->firstOrFail();
  }

  public function lists()
  {
    return $this->table
    //->where('status', 0)
    ->orderBy('table', 'ASC')
    ->pluck('table', 'table');
  }

  public function update($id, $values)
  {
    return $this->table->find($id)->update($values);
  }

  public function whereStatusOnline()
  {
    return $this->table->where('status', 1)->get();
  }

}
