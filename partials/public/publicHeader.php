<!DOCTYPE html>
<html>
<head>
<title>WIDGET CORP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../public/css/publicStyle.css">

</head>
<body>

<div class="navbar">
  <span id="mainHeading" onclick="location.href='../public_html/index.php'">WIDGET CORP ADMIN</span>
  <a href="../admin/adminLogin.php">ADMIN</a>
  <a href="../masterAdmin/masterAdminLogin.php">MASTER ADMIN</a>

</div>

<div class="sidenav">
    <?php 
        include('../../database/dbcon.php');
        $qry = "SELECT * FROM `subjects` WHERE `visibility`='1' ORDER BY `position`";
        $run = mysqli_query($conn,$qry);
        while($data = mysqli_fetch_assoc($run)){
            $subject_id = $data['id'];
    ?>
	<button class="collapsible">
      <?php echo $data['name']; ?>         
  </button>
	<div class="content">
		<ul >
            <?php 
                $qry1 = "SELECT * FROM `pages` WHERE `subject_id`='$subject_id' AND `visible`='1' ORDER BY `position`;";
                $run1 = mysqli_query($conn,$qry1) or die(mysqli_error());
                while($data1 = mysqli_fetch_assoc($run1)){
            ?>
                <li class="pages" onclick="location.href='../public_html/viewPage.php?page_id=<?php echo $data1['id'] ?>&subject_id=<?php echo $data['id']; ?>';">
                    <?php echo $data1['menu_name']; ?>
                </li>
            <?php
                }
            ?>
        </ul>
    </div>    
    <?php
        }
    ?>
</div>
<script type="text/javascript">
	var coll = document.getElementsByClassName("collapsible");
	var i;

	for (i = 0; i < coll.length; i++) {
	  coll[i].addEventListener("click", function() {
	    this.classList.toggle("active");
	    var content = this.nextElementSibling;
	    if (content.style.maxHeight){
	      content.style.maxHeight = null;
	    } else {
	      content.style.maxHeight = content.scrollHeight + "px";
	    } 
	  });
	}
</script> 

<div class="main">

