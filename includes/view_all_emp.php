<table class = "table table-bordered">
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
	</tr>
		
	<?php 
	$query = "SELECT * FROM emp_info ";
	$emp = mysqli_query($conn, $query);
	if($emp){
		echo mysqli_error($conn);	
	}
	while($row = mysqli_fetch_assoc($emp)){
		
		$emp_id = $row['emp_id'];
		$emp_name = $row['emp_name'];
		$emp_phone_no = $row['emp_phone_no'];
		$emp_email = $row['emp_email'];
		$emp_address = $row['emp_address'];
		$emp_state = $row['emp_state'];
		$emp_city = $row['emp_city'];
		$emp_zipcode = $row['emp_zipcode'];
		
		echo
		"<tr>
			<td> $emp_id </td>
			<td> $emp_name </td>
			<td> $emp_phone_no </td>
			<td> $emp_email </td>
			<td> $emp_address </td>
			<td> $emp_city </td>
			<td> $emp_state </td>
			<td> $emp_zipcode </td>
			<td><a href = 'index.php?source=update_emp&update_emp_id=$emp_id'>Edit</a></td>
			<td><a href = 'index.php?delete_emp=$emp_id'>Delete</a></td>
		</tr>";
			
		
	} ?>
</table>     

