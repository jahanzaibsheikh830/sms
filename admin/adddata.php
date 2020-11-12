<?php

session_start();


if (isset($_SESSION['uid'])) {
	echo "";
	}
	else{
		header('location: ../login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
	*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;	
}
.header{
	text-align: center;
	height: 100px;
	background-color: #4466;
	padding-top: 25px;
}
.logout{
	background-color: #7575;
	height: 20px;
}
.logout a{
	text-decoration: none;
	color: #fff;
	background-color: #000;
}
	</style>
</head>
<body>
	<div class="header">
		<h1>Welcome to Admin Dashboard</h1>
	</div>
	<div class="logout">
		<a href="logout.php">Logout</a>
	</div>
	<div>
		<a href="admindash.php">Back To Dashboard</a>
	</div>
	<div>
		<form action="adddata.php" method="post" enctype="multipart/form-data" style="text-align: center;">
			<label>Roll No<input type="text" name="rollno" placeholder="Enter Roll No"></label><br>
			<label>Full Name<input type="text" name="sname" placeholder="Enter Name"></label><br>
			<label>City<input type="text" name="city" placeholder="Enter City"></label><br>
			<label>Contact<input type="text" name="cont" placeholder="Enter Contact"></label><br>
			<label>Standard<input type="number" name="standard" placeholder="Enter Standard"></label><br>
			<label>Image<input type="file" name="simg"></label><br>
			<label><input type="submit" name="submit" value="Submit"></label>
		</form>
	</div>
</body>
</html>

<?php

	if (isset($_POST['submit'])) {
	 	include('../dbconn.php');

	 	$rollno=$_POST['rollno'];
	 	$sname=$_POST['sname'];
	 	$city=$_POST['city'];
	 	$cont=$_POST['cont'];
	 	$std=$_POST['standard'];
	 	$imagename=$_FILES['simg']['name'];
	 	$tempname=$_FILES['simg']['tmp_name'];
	 	move_uploaded_file($tempname,"../dataimage/$imagename");
	 	$query="INSERT INTO `student`(`rollno`, `name`, `city`, `contact`, `standard`, `image`) VALUES ('$rollno','$sname','$city','$cont','$std','$imagename')";
	 	$run=mysqli_query($conn,$query);
	 	if ($run == true) {
	 		?>
	 		<script>
	 		alert('Data Insert Sucessfully');
	 		</script>
	 		<?php
	 	}

	 } 
 ?>