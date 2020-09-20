<?php
		include('../../database/dbcon.php');
		include('../../routes/masterAdmin/session.php');
		$ad_id = $_GET["ad_id"];
		$sql= "DELETE FROM `admins` WHERE `id`='$ad_id';";
		$run = mysqli_query($conn,$sql);

		if($run == true){
			?>
			<script type="text/javascript">
				alert("DATA DELETEDD SUCCESSFULLY!!");
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
?>