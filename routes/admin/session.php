<?php 
	session_start();

	if(isset($_SESSION['ad_id'])){
                $ad_id = $_SESSION['ad_id'];
                include('../../database/dbcon.php');
                
	}else{
		header('location: ../../views/admin/adminLogin.php');
	}
?>