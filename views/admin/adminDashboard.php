<?php
    include('../../partials/admin/adminHeader.php');

    

?>


<div class="pageHeading">WELCOME <b><?php echo $admin_data['username']; ?></b></div>
    <div class="pageContent">
        <h2>NAME:<span class="pageLinks"> <?php echo $admin_data['name']; ?></span></h2>
        <h2>EMAIL:<span class="pageLinks"> <?php echo $admin_data['email_id']; ?></span></h2>
        <h2>MOBILE NO:<span class="pageLinks"> <?php echo $admin_data['mobile']; ?></span></h2>    
        <a class="functionalBtn" href="../admin/updateAdmin.php">UPDATE PROFILE</a>
    </div>

<?php
    include('../../partials/admin/adminFooter.php');  
?>
