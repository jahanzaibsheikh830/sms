<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Student MAnagement System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>
	<div>
		<a href="login.php" title="" class="btn">Admin Login</a>
	</div>
	<section align="center" class="form">
					<h2>Student Info</h2>
					<form action="index.php" method="post">
						<div>Roll NO</div>
						<input type="text" name="rollno"><br>
						<div>Standard</div>
						<select name="standard">
							<option value="">Select your standard</option>
							<option value="1st">1st</option>
							<option value="2nd">2nd</option>
							<option value="3rd">3rd</option>
							<option value="4th">4th</option>
							<option value="5th">5th</option>
							<option value="6th">6th</option>
						</select><br>
						<input type="submit" name="submit" value="Show Info">		
					</form>				
				</div>
	</section>
</body>
</html>
<?php

if (isset($_POST['submit'])) {	
	$rollno=$_POST['rollno'];
	$standard=$_POST['standard'];
	include('dbconn.php');
	include('function.php');
	showdetails($rollno,$standard);
}


 ?>