<?php
if(isset($_POST['submit'])){

		include('../../functions/subjectFunctions.php');
        include('../../database/dbcon.php');
        $s_id = $_POST['id'];
        $name = $_POST['name'];
		$position = $_POST['position'];
		$previous_data = getSubjectData($s_id);
		if($previous_data['position'] != $position){
			subject_justify_position($previous_data['position'],$position);
		}
        $visibility = $_POST['visibility'];
        $qry = "UPDATE `subjects` SET `name`='$name',`visibility`=$visibility,`position`='$position' WHERE `id`='$s_id';";
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