<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
	<br>
	<h3>Search Employee</h3>
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" name="name" required placeholder="Enter the name">
	</div>
	
	<div class="form-group">		
		<input type="submit" class="btn btn-primary" name="search_emp" value="Search">
	</div>

</form>



		
	<?php	
	if(isset($_POST['search_emp'])){
		$searchname = $_POST['name'];
		
		$query = "SELECT * FROM emp_info WHERE emp_name='$searchname'";
		$emp = mysqli_query($conn, $query);
		
		$count = mysqli_num_rows($emp);
		if($count == 0 ){ 
		echo "<br> <h2>NO RESULT</h2>";
		}
		else{
			echo "<table class = 'table table-bordered'>
				<tr>
					<th> Id </th>
					<th> Name </th>
					<th> Phone No.  </th>
					<th> Email </th>
					<th> Adress </th>
					<th> City </th>
					<th> State </th>
					<th> Zipcode </th>
					<th> Edit </th>
					<th> Delete </th>
				</tr>";
		while($row = mysqli_fetch_assoc($emp)){
			
			$emp_id = $row['emp_id'];
			$emp_name = $row['emp_name'];
			$emp_phone_no = $row['emp_phone_no'];
			$emp_email = $row['emp_email'];
			$emp_address = $row['emp_address'];
			$emp_state = $row['emp_state'];
			$emp_city = $row['emp_city'];
			$emp_zipcode = $row['emp_zipcode'];
			?>
			
				<tr>
					<td><?php echo $emp_id; ?> </td>
					<td><?php echo $emp_name; ?> </td>
					<td><?php echo $emp_phone_no; ?> </td>
					<td><?php echo $emp_email; ?> </td>
					<td><?php echo $emp_address; ?> </td>
					<td><?php echo $emp_city; ?> </td>
					<td><?php echo $emp_state; ?> </td>
					<td><?php echo $emp_zipcode; ?> </td>
					<td><a href = 'index.php?source=update_emp&update_emp_id=<?php echo $emp_id; ?> '>Edit</a></td>
					<td><a href = 'index.php?delete_emp=<?php echo $emp_id; ?>'>Delete</a></td>
				</tr>
			
			<?php
		}
		echo "</table>";
		
	}
	}
	?>
</table>     

