<?php
/**
 * 
 */
abstract class electronicDevice
{
	private string $name="";
	public function __construct(string $name)
	{
		$this->name=$name;
	}
}
class TV extends electronicDevice
{
	
	function __construct($name)
	{
		parent::__construct($name);
	}
}
 /**
  * 
  */
 class decoder extends electronicDevice
 {
 	
 	function __construct($name)
 	{
 		parent::__construct($name);
 	}
 }
 $TV_one=new TV("plasma TV");
 $TV_two=new TV("Great wall");
 echo "<pre>";
 print_r($TV_one);
 print_r($TV_two);
 ?>
 