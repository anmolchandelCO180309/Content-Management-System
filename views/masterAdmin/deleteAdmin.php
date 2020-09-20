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
						<td><a class="functionalBtn" onclick="document.getElementById('checkDelete').style.display='block'">DELETE</a></td>					
					</tr>
					<div id="checkDelete" class="modal">
						<span onclick="document.getElementById('checkDelete').style.display='none'" class="close" title="Close Modal">×</span>
						
						<div class="container">
						<h1>Delete Page</h1>
						<h2>Are you sure you want to delete your <u><?php echo $data['username']; ?></u></h3>
						<button type="button" onclick="document.getElementById('checkDelete').style.display='none'" class="functionalBtn">Cancel</button>
						<button onclick="location.href='../../routes/masterAdmin/deleteAdmin.php?ad_id=<?php echo $data['id'] ?>'" class="functionalBtn">
							Delete
						</button>
						</div>
					</div>

		<?php	
			}
		?>

	</table>	


<?php
    include('../../partials/masterAdmin/masterAdminFooter.php');
?>