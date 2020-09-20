<?php
	include('../../database/dbcon.php');
	include('../../functions/adminFunctions.php');

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$hashed = hashed_password_genertor($password);

		$qry = "SELECT * FROM `admins` WHERE `username`='$username' AND `hashed_password`='$hashed';";

		$run = mysqli_query($conn,$qry);

		$row = mysqli_num_rows($run);

		if($row<1){
			?>
			<script type="text/javascript">
				alert("INVALID CREDENTIALS");
				window.open('../../views/admin/adminLogin.php','_self');
			</script>
			<?php
		}else{
			$data = mysqli_fetch_assoc($run);
			$admin_id = $data['id'];
			session_start();
			$_SESSION['ad_id'] = $admin_id;
			header('location: ../../views/admin/adminDashboard.php');

		}
	}

?>