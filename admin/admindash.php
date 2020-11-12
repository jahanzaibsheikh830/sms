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
.st{
	text-align: center;
}
.st a{
	text-decoration: none;
	font-size: 20px;	
	color: #000;
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
	<div class="st">
		<a href="adddata.php">Insert Student Data</a><hr>
		<a href="updatedata.php">Update Student Data</a><hr>
		<a href="deletedata.php">Delete Student Data</a><hr>
	</div>
	
</body>
</html>