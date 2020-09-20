<?php

        include('../../database/dbcon.php');
       $s_id = $_GET['sub_id'];
        $qry = "DELETE FROM `subjects` WHERE `id`='$s_id';";
		$run = mysqli_query($conn,$qry);
		if($run == true){
            $qry1 = "DELETE FROM `pages` WHERE `subject_id`='$s_id';";
            $run1 = mysqli_query($conn,$qry1);
            if($run1 == true){         
            ?>
			<script type="text/javascript">
				alert("SUBJECT AND ITS CORRESPONDING PAGES DELETED SUCCESSFULLY!!");
               window.open('../../views/admin/adminDashboard.php','_self');
			</script>
        <?php	
            }else{
                echo 'UNABLE TO DELETE THE CORRESPONDING PAGES';
            }
		}else{
			echo "INVALID !!";
			?>
				<script type="text/javascript">
					alert("UNSUCCESSFULL PROCESS. Error: <?php echo mysqli_error($conn); ?>. Please Try Again or Contact Management!!");
					window.open('../../views/Admin/AdminDashboard.php','_self');
				</script>
			<?php
        }        
        
?>