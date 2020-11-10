<?php 
	$update_emp_id = $_GET['update_emp_id'];
	$query = "SELECT * FROM emp_info WHERE emp_id='$update_emp_id'";
	$emp_update_query = mysqli_query($conn, $query);
	
	while($row = mysqli_fetch_assoc($emp_update_query)){
		$emp_name = $row['emp_name'];
		$emp_phone_no = $row['emp_phone_no'];
		$emp_email = $row['emp_email'];
		$emp_address = $row['emp_address'];
		$emp_city = $row['emp_city'];
		$emp_state = $row['emp_state'];
		$emp_zipcode = $row['emp_zipcode'];		
	}

?>

<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" name="name" value='<?php echo "$emp_name";?>' required>
	</div>
	
	<div class="form-group">
		<label for="ph_no">Ph No.</label>
		<input type="text" class="form-control" name="phone_no" value='<?php echo "$emp_phone_no";?>' required>
	</div>
	
	<div class="form-group">
		<label for="email">E-Mail</label>
		<input type="email" class="form-control" name="email" value='<?php echo "$emp_email";?>' required>
	</div>
	
	<div class="form-group">
		<label for="address">Address</label>
		<input type="text" class="form-control" name="address" value='<?php echo "$emp_address";?>' required>
	</div>
	
	<div class="form-group">
		<label for="city">City</label>
		<input type="text" class="form-control" name="city" value='<?php echo "$emp_city";?>' required>
	</div>
	
	<div class="form-group">
		<label for="state">State</label>
		<input type="text" class="form-control" name="state" value='<?php echo "$emp_state";?>' required>
	</div>
	
	<div class="form-group">
		<label for="zipcode">Zipcode</label>
		<input type="text" class="form-control" name="zipcode" value='<?php echo "$emp_zipcode";?>' required>
	</div>
	
	<div class="form-group">		
		<input type="submit" class="btn btn-primary" name="update_emp" value="Update">
	</div>

</form>
