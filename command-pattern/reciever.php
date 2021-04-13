<?php
/**
 * 
 */
require_once "invoker.php";
require_once "client.php";
class Remote extends Command
{
	public array $commands=[];
	function __construct()
	{
	}
	public function execute(Command $command)
	{
		$command->execute();
		array_push($commands, $command);
	}
	public function undo()
	{
		$command=array_pop($commands);
		$command->undo();
	}
}
?>