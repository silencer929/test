<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, shrink-to-fit=no">
</head>
<body>
<input type="range" name="scale" min="1" max="100" step="1" value="25">
</body>
</html>
<?php
function search(int $num, array $arr){
	$high=count($arr)-1;
	$low=0;
	$comparisons=0;
	while($low <= $high){
		$mid= floor($low +($high - $low)/2);
		if($num == $arr[$mid]){
			echo "number ".$num . " found at index: " .$mid;
			return;
		}
		if($num < $arr[$mid]){
			$high=$mid-1;
			$comparisons++;
			echo $comparisons." at left"."<br>";
		}else{
			$comparisons++;
			echo $comparisons." at right"."<br>";
			$low=$mid+1;
		}
	}
	return "not found";
}
$arr=[1,2,4,20,22,38,44,50,61,62,70,75,100,120,133,144,150,157,164,170,190,200,211,234,240,360,449,500,555,600,611];
echo "<pre>";
$value=100;
print_r(search($value,$arr));
?>