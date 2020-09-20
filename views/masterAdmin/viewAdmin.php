<?php
	include('../../partials/masterAdmin/masterAdminHeader.php');
	include('../../routes/masterAdmin/adminData.php');
?>	
		
	<div class="pageHeading">
		DELETE ADMIN
	</div>

	<table class="formTable">

		<?php
			while ($data = mysqli_fetch_assoc($run)) {
				$count++;
		?>

					<tr align="center">
						<td><?php echo $count; ?></td>						
						<td><?php echo $data['username'] ?></td>
						<td><?php echo $data['email_id'] ?></td>
					</tr>
		
		<?php	
			}
		?>

	</table>	


<?php
    include('../../partials/masterAdmin/masterAdminFooter.php');
?>