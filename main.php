<?php
require_once "testPaper.php";
class teacher
{
	private string $role="record";
	private array $subject=[];


	public function recordMarks()
	{
		// insert into results (studentId,score,grade) values (:testpaper->studentId,:testpaper->score,:testPaper->grade);
		$testPaper= new testpaper();
		$testPaper->setScore(100);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
</body>
</html>