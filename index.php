<?php

class Customer
{
	private $name;
	public $age;


	public function __construct ($name, $age)
	{
		$this->age = $age;
		$this->name = $name;
	}

	public function setName($name) {
		$this->name = $name;
	}
	
	public function getName(){
		return $this->name;
	}
}

$account = new Customer("Prince", 36);
echo $account->getName(); // 100


