<?php

namespace AppService\Entities\Table;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
  protected $table = "tables";
  protected $guarded = ['id'];
}
