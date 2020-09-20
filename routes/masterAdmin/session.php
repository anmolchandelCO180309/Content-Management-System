<?php

session_start();

if(isset($_SESSION['master_ad_id'])){
    $id = $_SESSION['master_ad_id'];
    include('../../database/dbcon.php');
    $qry = "SELECT * FROM `masteradmin` WHERE `id`='$id';";
    $run = mysqli_query($conn,$qry) or die(mysqli_error());
    $data = mysqli_fetch_assoc($run);
}else{
    header('location: ../../views/masterAdmin/masterAdminLogin.php');
}

?>