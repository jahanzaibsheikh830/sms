<?php 
function showdetails($rollno,$standard)
	{
		include('dbconn.php');
		$query="SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standard`='$standard'";
		$run=mysqli_query($conn,$query);

		if (mysqli_num_rows($run)>0) {
			$data=mysqli_fetch_assoc($run)
			?>
			<table border="1" width="500px" style="margin-left: 400px; margin-top: 50px;">
				<tr>
					<th colspan="3">Show Details</th>
				</tr>
				<tr>
					<td rowspan="5"><img src="dataimage/<?php echo $data['image']; ?>" alt="" style="max-width: 200px;"></td>
					<th>Roll No</th>
					<td><?php echo $data['rollno']; ?></td>
				</tr>
				<tr>
					<th>Name</th>
					<td><?php echo $data['name']; ?></td>
				</tr>
				<tr>
					<th>Standard</th>
					<td><?php echo $data['standard']; ?></td>
				</tr>
				<tr>
					<th>Contact No</th>
					<td><?php echo $data['contact']; ?></td>
				</tr>
				<tr>
					<th>City</th>
					<td><?php echo $data['city']; ?></td>
				</tr>
			</table>
			<?php
			
		}
		else{
			echo "<script>alert('No Recode Found')</script>";
		}

	}



 ?>