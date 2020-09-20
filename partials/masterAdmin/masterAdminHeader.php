<?php
    include('../../routes/masterAdmin/session.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ADMIN PORTAL</title>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" type="text/css" href="../../public/css/adminHeader.css">
</head>
<body>

<div class="navbar">
  <span id="mainHeading" onclick="location.href='../public_html/index.php'">WIDGET CORP ADMIN</span>
  <a href="../../routes/masterAdmin/logout.php">LOGOUT</a>
  <a href="../../views/masterAdmin/masterAdminDashboard.php"><i class='fas fa-user-alt' style='font-size:36px'></i>  <?php echo $data['username']; ?></a>
</div>


<div class="sidenav">
    <a class="menu_items" href="../../views/masterAdmin/addAdmin.php">ADD ADMIN</a>
    <a class="menu_items" href="../../views/masterAdmin/deleteAdmin.php">DELETE ADMIN</a>  
    <a class="menu_items" href="../../views/masterAdmin/viewAdmin.php">VIEW ADMIN LIST</a>    
</div>

<div class="main">

