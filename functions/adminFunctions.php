<?php


    function getAdminData($admin_id){
        $conn = $GLOBALS['conn'];
        $qry = "SELECT * FROM `admins` WHERE `id`='$admin_id';";
        $run = mysqli_query($conn,$qry) or die(mysqli_error($conn));
        $data = mysqli_fetch_assoc($run);
        return $data;
    }

    function hashed_password_genertor($password){
		$salted = "dsfds8990sdfds".$password."sdfs8979sdfsd";
        $hashed = hash('sha512',$salted);
        return $hashed;
    }

?>