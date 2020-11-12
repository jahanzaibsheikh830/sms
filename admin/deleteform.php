<?php
include('../dbconn.php');
		$id=$_REQUEST['sid'];
	 	
	 	$query="DELETE FROM `student` WHERE `id`='$id'";
	 	$run=mysqli_query($conn,$query);
	 	if ($run == true) {
	 		?>
	 		<script>
	 		alert('Data Deleted Sucessfully');
	 		window.open('deletedata.php','_self');
	 		</script>
	 		<?php
	 	} 
 ?>