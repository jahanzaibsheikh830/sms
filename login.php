<?php
session_start();

if(isset($_SESSION['uid']))
{
	header('location: admin/admindash.php'); 
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<section align="center" class="form">
					<h2>Admin Login</h2>
					<form action="login.php" method="post">
						<div>User Name</div>
						<input type="text" name="uname" required="required"><br>
						<div>Password</div>
						<input type="password" name="pass" required="required"><br>
						<input type="submit" name="login" value="login">		
					</form>				
				</div>
	</section>
	
	<?php
	include('dbconn.php');
		if (isset($_POST['login'])) 
		{
			$username=$_POST['uname'];
			$password=$_POST['pass'];

			$query="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
			$run=mysqli_query($conn,$query);
			$row=mysqli_num_rows($run);
			if ($row<1) {
				?>
				<script>
					alert('Username or Password is wrong!!');
					window.open('login.php','_self'); 
				</script>
				<?php
			}
			else
			{
				$data=mysqli_fetch_assoc($run);
				$id=$data['id'];

				$_SESSION['uid']=$id;
				header('location: admin/admindash.php');
			}
		}



	?>








</body>
</html>