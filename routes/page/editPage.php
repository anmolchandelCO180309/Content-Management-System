<?php

    if(isset($_POST['submit'])){

        include('../../functions/pageFunctions.php');
        include('../../database/dbcon.php');
        $page_id = $_POST['id'];
        $name = $_POST['name'];
        $position = $_POST['position'];
        //echo $position;
        $visible = $_POST['visible'];
        $content = $_POST['content'];
        
        $previous_data = getPageData($page_id);
        //echo "vsdfd".$previous_data['position'];
        if($previous_data['position'] != $position){
            justify_positions($previous_data['position'],$position,$previous_data['subject_id']);
        }
        
        $qry = "UPDATE `pages` SET `menu_name`='$name',`visible`='$visible',`position`='$position',`content`='$content' WHERE `id`='$page_id';";
        $run = mysqli_query($conn,$qry);
        
		if($run == true){
			?>
			<script type="text/javascript">
				alert("DATA INSERTED SUCCESSFULLY!!");
                window.open('../../views/admin/adminDashboard.php','_self');
			</script>
		<?php	
		}else{
            echo "INVALID !!";
			?>
			<script type="text/javascript">
				alert("UNSUCCESSFULL PROCESS. Error: <?php echo mysqli_error($conn); ?>. Please Try Again or Contact Management!!");
                window.open('../../views/Admin/AdminDashboard.php','_self');
			</script>
		<?php
        }    
            
    }
 
?>