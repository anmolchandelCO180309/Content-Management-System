<?php
    include('../../partials/admin/adminHeader.php');
?>


<div class="pageHeading">UPDATE PROFILE</div>

<form method="POST" action="../../routes/Admin/updateAdmin.php">
  <table class="formTable">
    <tr>  
      <td>
        <label><b>Username</b></label>
      </td>
      <td>
        <input type="hidden" value="<?php echo $admin_data['id']; ?>" name="admin_id">
        <input type="text"value="<?php echo $admin_data['username']; ?>" name="username" disabled>
      </td>
    </tr>
    <tr>  
      <td>
        <label><b>Password</b>
      </td>
      <td>
        <input type="password" placeholder="Enter Password" name="password" required>
      </td>
    </tr>
    <tr>  
      <td>
        <label><b>Name</b></label>
      </td>
      <td>
        <input type="text" name="name" value=" <?php echo $admin_data['name']; ?>" required>
      </td>
    </tr>
    <tr>  
      <td>
        <label><b>MOBILE NO</b></label>
      </td>
      <td>
        <input type="tel" pattern="[0-9]{2}-[0-9]{10}" name="mobile" value="<?php echo $admin_data['mobile']; ?>" required><br>
        <small style="font-size:18px;">FORMAT: 91-9814888888</small>
      </td>
    </tr>
    <tr>  
      <td>
        <label><b>Email</b></label>
      </td>
      <td>
        <input type="email" name="email" value="<?php echo $admin_data['email_id']; ?>" required>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <button style="width:200px;" class="functionalBtn" type="submit" name="submit">UPDATE PROFILE</button>
      </td>  
    </tr>
  </table>    
</form>	
<?php
    include('../../partials/admin/adminFooter.php');  
?>
