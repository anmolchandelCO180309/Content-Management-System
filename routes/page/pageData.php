<?php
    $page_id = $_GET['page_id'];
    $subject_id = $_GET['subject_id'];
    $qry = "SELECT * FROM `pages` WHERE `id`='$page_id';";
    $run = mysqli_query($conn,$qry) or die(mysqli_error($conn));
   
    if(mysqli_num_rows($run)<1){
        ?>
        <script type="text/javascript">
            alert("NO RECORD FOUND");
            window.open("adminDashboard.php",_self);
        </script>
        <?php
	}else{
        $data = mysqli_fetch_assoc($run);  
    } 
?>