<?php
	if(isset($_POST['submit'])){
		include('../../database/dbcon.php');
		include('../../functions/adminFunctions.php');
		$username = strip_tags( trim( $_POST['username'] ) );
        $password = $_POST["password"];
		$email_id = $_POST["email"];
        $mobile = $_POST['mobile'];
		$name =strip_tags( trim( $_POST['name'] ) );
		
		$hashed = hashed_password_genertor($password);
        
        $qry = "INSERT INTO `admins`(`id`,`username`,`hashed_password`,`name`,`mobile`,`email_id`)";
        $qry .= " VALUES (NULL, '$username', '$hashed','$name','$mobile','$email_id');";
		$run = mysqli_query($conn,$qry);
		if($run == true){
			?>
			<script type="text/javascript">
				alert("DATA INSERTED SUCCESSFULLY!!");
                window.open('../../views/masterAdmin/masterAdminDashboard.php','_self');
			</script>
		<?php	
		}else{
			echo "INVALID !!";
			?>
			<script type="text/javascript">
				alert("UNSUCCESSFULL PROCESS. Error: <?php echo mysqli_error($conn); ?>. Please Try Again or Contact Management!!");
                window.open('../../views/masterAdmin/masterAdminDashboard.php','_self');
			</script>
		<?php	
		}
	}
?>