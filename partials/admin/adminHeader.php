<?php
    include('../../routes/admin/session.php');
    include('../../functions/adminFunctions.php');
    include('../../functions/pageFunctions.php');
    include('../../functions/subjectFunctions.php');
    $admin_data = getAdminData($_SESSION['ad_id']);
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
  <a href="../../routes/admin/logout.php">LOGOUT</a>
  <a href="../../views/admin/adminDashboard.php"><i class='fas fa-user-alt' style='font-size:32px'> </i> <?php echo $admin_data['username']; ?></a>
</div>

<div class="sidenav">
<?php 
  include('../../database/dbcon.php');
  $qry = "SELECT * FROM `subjects` ORDER BY `position`";
  $run = mysqli_query($conn,$qry);
  while($data = mysqli_fetch_assoc($run)){
    $subject_id = $data['id'];
    ?>
      <a class="menu_items" href="../../views/subject/viewSubject.php?sub_id=<?php echo $data['id']; ?>">
        <?php echo $data['name']; ?>         
      </a>
      <ul>
        <?php 
          $qry1 = "SELECT * FROM `pages` WHERE `subject_id`='$subject_id' ORDER BY `position`";
          $run1 = mysqli_query($conn,$qry1) or die(mysqli_error($conn));
          while($data1 = mysqli_fetch_assoc($run1)){
            ?>
            <li ><a class="menu_items" href="../page/viewPage.php?page_id=<?php echo $data1['id'];?>&subject_id=<?php echo $data['id'];?>"><?php echo $data1['menu_name']; ?></a></li>
            <?php
          }
        ?>
      </ul>
    <?php
  }
?>
  <a class="menu_items" href="../../views/subject/addSubject.php">+ADD SUBJECT</a>
</div>

<div class="main">

