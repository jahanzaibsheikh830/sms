<?php
include('../dbconn.php');

	 	$rollno=$_POST['rollno'];
	 	$sname=$_POST['sname'];
	 	$city=$_POST['city'];
	 	$cont=$_POST['cont'];
	 	$std=$_POST['standard'];
	 	$id=$_POST['sid'];
	 	$imagename=$_FILES['simg']['name'];
	 	$tempname=$_FILES['simg']['tmp_name'];
	 	move_uploaded_file($tempname,"../dataimage/$imagename");
	 	$query="UPDATE `student` SET `rollno`='$rollno',`name`='$sname',`city`='$city',`contact`='$cont',`standard`='$std',`image`='$imagename' WHERE `id`='$id'";
	 	$run=mysqli_query($conn,$query);
	 	if ($run == true) {
	 		?>
	 		<script>
	 		alert('Data Update Sucessfully');
	 		window.open('updateform.php?sid=<?php echo $id;?>','_self');
	 		</script>
	 		<?php
	 	} 
 ?>