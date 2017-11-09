<?php

namespace AppService\Http\Controllers\TableClient;

use AppService\Entities\TableClient\Repository;
use AppService\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableClientController extends Controller
{
	private $repository;

	public function __construct(Repository $repository)
	{
		$this->repository = $repository;
	}


	public function index()
	{
		$tables = $this->repository->all();
		return view('pages.tables.index', compact('tables'));
	}


}
