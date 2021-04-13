<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=no,minimum-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="corrective-action.css">
	<link rel="stylesheet" type="text/css" href="icons/css/all.css">
	<title>corrective action</title>
</head>
<body>
<div class="header">
	<div class="logo"><img src="img/logo.png" class="image"></div>
	<hr style="">
	<div class="nursery-details">
		<div class="nursery-name" style="font-size: 30px; color: darkgreen;text-transform: capitalize;">joy nurseries</div>
		<div class="rating"><img src="img/three_star.png" class="image"></div>
		<div class="score">score: <span style="color: #fff; font-size: 25px">80%</span> </div>
	</div>
</div>
<div class="body">
	<div class="info"><p>please make the proper observations and recommendations to help the forester improve the nursery to preserve top seat in our portal </p></div>
	<a href="#upload"><button class="upload-link btn">upload photo<i class="fas fa-upload"></i></button></a>
	<section class="corrective-action">
	<table>
		<thead>
			<tr>
				<th>No.</th>
				<th>Observation</th>
				<th>Recommendation</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td data-label="No.">1</td>
				<td data-label="observation">alot of weeds in the nursery</td>
				<td data-label="recommendation">weed the nursery for a well kept nursery attracts potential buyers and provideds good and quality photos for marketing purporses</td>
				<td data-label="edit"><button class="edit btn"><i class="fas fa-edit"></i></button></td>
				<td data-label="delete"><button class="delete btn"><i class="fas fa-trash-alt"></i></button></td>
			</tr>
			<tr>
				<td data-label="No.">2</td>
				<td data-label="observation">alot of weeds in the nursery</td>
				<td data-label="recommendation">weed the nursery for a well kept nursery attracts potential buyers and provideds good and quality photos for marketing purporses</td>
				<td data-label="edit"><button class="edit btn"><i class="fas fa-edit"></i></button></td>
				<td data-label="delete"><button class="delete btn"><i class="fas fa-trash-alt"></i></button></td>
			</tr>
			
		</tbody>
	</table>
	<form class="obs-rec-form" action="" method="GET">
		<p class="directive">Please fill in all fields! </p>
		<textarea class="observation" placeholder="please enter the observation made?" name="rec" value="" required=""></textarea>
		<textarea class="recommendation" placeholder="please enter the recommendation that will help the farmer imporve his/her nursery?"name='obs' value="" required=""></textarea>
		<input class="btn" type="submit" name="submit"value="add Corrective Action">
	</form>
	</section>
</div>
<section id="upload">
	<div class="images-upload-form">
		<form action="" method="POST" enctype="multipart/form-data">
			<div><p>upload pictures of the nursery here</p></div>
			<input type="file" name="image[]" multiple>
		</form>
	</div>
</section>
</body>
</html>
 ?>