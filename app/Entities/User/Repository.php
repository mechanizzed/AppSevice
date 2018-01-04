<?php

namespace AppService\Entities\User;

class Repository
{

	private $user;

	public function __construct(User $user)
	{
		$this->user= $user;
	}


	public function update($id, $values)
	{
		$this->user->find($id)->update($values);
	}

}
