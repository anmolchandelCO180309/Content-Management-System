<?php
	include('../../database/dbcon.php');
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$qry = "SELECT * FROM `masterAdmin` WHERE `username`='$username' AND `hashed_password`='$password';";

		$run = mysqli_query($conn,$qry);

		$row = mysqli_num_rows($run);

		if($row<1){
			?>
			<script type="text/javascript">
				alert("INVALID CREDENTIALS");
				window.open('../../views/masterAdmin/masterAdminLogin.php','_self');
			</script>
			<?php
		}else{
			$data = mysqli_fetch_assoc($run);

			$masterAdmin_id = $data['id'];
			session_start();
			$_SESSION['master_ad_id'] = $masterAdmin_id;
			header('location: ../../views/masterAdmin/masterAdminDashboard.php');

		}
	}

?>