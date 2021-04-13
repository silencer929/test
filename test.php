<?php

class person
{
	public string $name="";
	public string $email="";
	public int $age=0;
	public string $status="";
	public bool $male;
	public bool $female;

	public function __construct()
	{
		echo "I am " .$this->name;echo "<br>";
		foreach ($this as $key => $value) {
			print_r($value);echo "<br>";
		}
	}
	public function setname($name) :void
	{
		$this->name=$name;
	}	
	public function getname():string
	{
		return $this->name;
	}
	public function setEmail($email) :void
	{
		$this->email=$email;
	}	
	public function getEmail():string
	{
		return $this->email;
	}
	public function setAge($age) :void
	{
		$this->age=$age;
	}	
	public function getAge():string
	{
		return $this->age;
	}
	public function setMale($name) :void
	{
		$this->male=$male;
	}	
	public function getMale():string
	{
		return $this->male;
	}
}
function create(){
	$new=new person();
	$new->setname("peter");
	$new->setEmail("peter@gmail.com");
	$new->setAge(30);
	foreach ($new as $key => $value) {
		print_r($value); echo "<br>";
	}
}
echo "<pre>";
create();
?>