<?php
    if(isset($_POST['submit'])){
        include('../../functions/subjectFunctions.php');
        include('../../database/dbcon.php');
        $name = $_POST['name'];
        $position = $_POST['position'];
		$visibility = $_POST['visibility'];
		subject_position_adjust($position,+1);
        $qry = "INSERT INTO `subjects` (`id`,`name`,`visibility`,`position`) VALUES (NULL,'$name','$visibility','$position');";
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