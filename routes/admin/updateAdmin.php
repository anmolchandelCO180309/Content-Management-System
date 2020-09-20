<?php
	if(isset($_POST['submit'])){
		include('../../functions/adminFunctions.php');
		include('../../database/dbcon.php');
        $admin_id = $_POST["admin_id"];
        $password = $_POST["password"];
		$email_id = $_POST["email"];
        $mobile = $_POST['mobile'];
        $name = $_POST['name'];
		$hashed = hashed_password_genertor($password);
        
        $qry ="UPDATE `admins` SET `hashed_password`='$hashed',`name`='$name',`mobile`='$mobile',`email_id`='$email_id' WHERE `id`='$admin_id';";
		
		$run = mysqli_query($conn,$qry);
		if($run == true){
			?>
			<script type="text/javascript">
				alert("DATA UPDATED SUCCESSFULLY!!");
                window.open('logout.php','_self');
			</script>
		<?php	
		}else{
			echo "INVALID !!";
			?>
				<script type="text/javascript">
					alert("UNSUCCESSFULL PROCESS. Error: <?php echo mysqli_error($conn); ?>. Please Try Again or Contact Management!!");
					window.open('../../views/Admin/AdminDashboard.php','_self');
				</script>
			<?php
		}
	}
?>