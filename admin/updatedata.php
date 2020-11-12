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
</head>
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
	<table border="1px">
		<form action="updatedata.php" method="post">
		<thead>
			<tr>
				<th>Standard</th>
				<th><input type="number" name="standard"></th>
				<td>Student Name</td>
				<td><input type="text" name="stname"</td>
				<td><input type="submit" name="submit" value="search"></td>
			</tr>
		</tbody>

		</form>
	</table>
	<table align="center" border="1px;">
		<tr>
			<th>no</th>
			<th>Image</th>
			<th>Name</th>
			<th>Rollno</th>
			<th>Edit</th>
		</tr>
		<?php
if (isset($_POST['submit'])) {
 	include('../dbconn.php');
 	$std=$_POST['standard'];
 	$name=$_POST['stname'];
 	$query="SELECT * FROM `student` WHERE `standard`='$std' AND `name` LIKE '%$name%'";
 	$run=mysqli_query($conn,$query);
 	if (mysqli_num_rows($run)<1) {
 		echo "<tr><td colspan='5'>No Recoed Found</td></tr>";
 	}
 	else
 	{
 		$count=0;
 		while ($data=mysqli_fetch_assoc($run)) {
 			$count++;	
 			?>
 				<tr>
					<td><?php echo $count; ?></td>
					<td><img src="../dataimage/<?php echo $data['image'] ?>" style="max-width: 100px;"></td>
					<td><?php echo $data['name']; ?></td>
					<td><?php echo $data['rollno']; ?></td>
					<td><a href="updateform.php?sid=<?php echo $data['id'];?>">Edit</a></td>
				</tr>
 			<?php
 		}
 	}
 } 
 ?>
	</table>
</body>
</html>

