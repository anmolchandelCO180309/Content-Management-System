<?php
if(isset($_POST['submit'])){
        
		include('../../database/dbcon.php');
		include('../../functions/pageFunctions.php');
        $subject_id = $_POST['subject_id'];
        $name = $_POST['name'];
        $position = $_POST['position'];
        $visible = $_POST['visible'];
		$content = $_POST['content'];
		
		position_adjust($position,$subject_id,1);

        $qry = "INSERT INTO `pages`(`id`, `subject_id`, `menu_name`, `visible`, `position`, `content`) VALUES (NULL,'$subject_id','$name','$visible','$position','$content');";
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