<?php

session_start();


if (isset($_SESSION['uid'])) {
	echo "";
	}
	else{
		header('location: ../login.php');
	}
?>
<?php
	include('../dbconn.php');
	$sid=$_GET['sid'];


	$query="SELECT * FROM `student` WHERE `id`='$sid'";
	$run=mysqli_query($conn,$query);
	$data=mysqli_fetch_assoc($run);

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
		<form action="updatedataa.php" method="post" enctype="multipart/form-data" style="text-align: center;">
			<label>Roll No<input type="text" name="rollno" value="<?php echo $data['rollno'] ?>"></label><br>
			<label>Full Name<input type="text" name="sname" value="<?php echo $data['name'] ?>"></label><br>
			<label>City<input type="text" name="city" value="<?php echo $data['city'] ?>"></label><br>
			<label>Contact<input type="text" name="cont" value="<?php echo $data['contact'] ?>"></label><br>
			<label>Standard<input type="number" name="standard" value="<?php echo $data['standard'] ?>"></label><br>
			<label>Image<input type="file" name="simg"></label><br>
			<label>
				<input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
				<input type="submit" name="submit" value="Submit">
			</label>
		</form>
	</div>
</body>
</html>