<?php
		
		include('../../database/dbcon.php');
		$qry = "SELECT * FROM `admins` WHERE 1;";
		$run = mysqli_query($conn,$qry);
		if(mysqli_num_rows($run)<1){
			?>
			<script type="text/javascript">
				alert("NO ADMIN FOUND");
				window.open('../../views/masterAdmin/masterAdminDashboard.php','_self');
			</script>	
			<?php
		}else{
			$count = 0;//ITERATOR
		}