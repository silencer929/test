<?php
/**
 * 
 */
abstract class Command
{
	abstract public function execute();
	abstract public function undo();
}
class power_btn extends Command
{
	//one property of the command will take the electronic device and turn it on
	public electronicDevice $device;
	function __construct()
	{

	}
	public function execute()
	{
		$this->device->turnON();
	}
	public function undo(){
		$device->turnOFF();
	}
}
?>