<?php
    
    $sub_id = $_GET['sub_id'];
    $qry = "SELECT * FROM `subjects` WHERE `id`='$sub_id';";
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
        $qry1 = "SELECT * FROM `pages` WHERE `subject_id`='$sub_id';";
        $run1 = mysqli_query($conn,$qry1) or die(mysqli_error());   
    }  
?>
