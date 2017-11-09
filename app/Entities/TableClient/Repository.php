<?php

namespace AppService\Entities\TableClient;

class Repository
{

	private $tableClient;

	public function __construct(TableClient $tableClient)
	{
		$this->tableClient = $tableClient;
	}


	public function all()
	{
		return $this->tableClient->orderBy('number')->get();
	}

}