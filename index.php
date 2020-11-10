<?php include("includes/header.php");?>

    <div id="wrapper">

        <!-- Navigation -->		
		<?php include("includes/navigation.php");?>
		
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Employement Details
                        </h1>
                        <?php
							if(isset($_GET['source'])){
								$source = $_GET['source'];
								switch($source){
									case "add_emp":
									include("includes/add_emp.php");
									break;
									
									case "view_all_emp":
									include("includes/view_all_emp.php");
									break;
									
									case "update_emp":
									include("includes/update_emp.php");
									break;
									
									case "search_emp":
									include("includes/search.php");
									break;
								}																
							}
						?>
						
						<?php 
							//update_emp
							if(isset($_POST['update_emp'])){
								$update_emp_id = $_GET['update_emp_id'];
								$emp_name = $_POST['name'];
								$emp_phone_no = $_POST['phone_no'];
								$emp_email = $_POST['email'];
								$emp_address = $_POST['address'];
								$emp_city = $_POST['city'];
								$emp_state = $_POST['state'];
								$emp_zipcode = $_POST['zipcode'];
																
								$query = "UPDATE emp_info SET emp_name='$emp_name',emp_phone_no='$emp_phone_no',emp_email='$emp_email',"; 
								$query .= "emp_address='$emp_address',emp_city='$emp_city',emp_state='$emp_state',emp_zipcode='$emp_zipcode' ";
								$query .= "WHERE emp_id='$update_emp_id'";
								$update_query = mysqli_query($conn, $query);
								header("Location: index.php?source=view_all_emp");
							}
						?>
						
						<?php
							//Delete emp
							if(isset($_GET['delete_emp'])){
								$delete_emp_id = $_GET['delete_emp'];
								$query = "DELETE FROM emp_info WHERE emp_id = '$delete_emp_id'";
								$emp= mysqli_query($conn, $query);
								header("Location: index.php?source=view_all_emp");
							}
						?>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

<?php include("includes/footer.php");?>   
