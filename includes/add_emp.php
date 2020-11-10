<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" name="name" required>
	</div>
	
	<div class="form-group">
		<label for="ph_no">Ph No.</label>
		<input type="text" class="form-control" name="phone_no" required>
	</div>
	
	<div class="form-group">
		<label for="email">E-Mail</label>
		<input type="email" class="form-control" name="email" required>
	</div>
	
	<div class="form-group">
		<label for="address">Address</label>
		<input type="text" class="form-control" name="address" required>
	</div>
	
	<div class="form-group">
		<label for="city">City</label>
		<input type="text" class="form-control" name="city" required>
	</div>
	
	<div class="form-group">
		<label for="state">State</label>
		<input type="text" class="form-control" name="state" required>
	</div>
	
	<div class="form-group">
		<label for="zipcode">Zipcode</label>
		<input type="text" class="form-control" name="zipcode" required>
	</div>
	
	<div class="form-group">		
		<input type="submit" class="btn btn-primary" name="submit_emp" value="Submit">
	</div>

</form>


<?php 
	if(isset($_POST['submit_emp'])){
		$emp_name = $_POST['name'];
		$emp_phone_no = $_POST['phone_no'];
		$emp_email = $_POST['email'];
		$emp_address = $_POST['address'];
		$emp_city = $_POST['city'];
		$emp_state = $_POST['state'];
		$emp_zipcode = $_POST['zipcode'];
		
		$query = "INSERT INTO emp_info (emp_name,emp_phone_no,emp_email,emp_address,emp_city,emp_state,emp_zipcode) "; 
		$query .= "VALUES ('$emp_name','$emp_phone_no','$emp_email','$emp_address','$emp_city','$emp_state','$emp_zipcode')";
		$add_emp = mysqli_query($conn, $query);
		// if($add_emp){
			// echo mysqli_error($conn);
		// }
		header("Location: index.php?source=view_all_emp");
	}
?>