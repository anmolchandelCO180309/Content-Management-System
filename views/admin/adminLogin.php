<?php
	session_start();		
	if(isset($_SESSION['ad_id'])){
		header('location: adminDashboard.php');
  }
  include('../../partials/public/publicHeader.php');
?>
<div class="loginTitle">ADMIN LOGIN PORTAL</div>

<form method="POST" action="../../routes/admin/login.php">

  <div class="loginForm">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required><br>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br>

    <button type="submit" name="submit" class="loginBtn">Login</button>
  </div>

</form>

<?php
  include('../../partials/public/publicFooter.php');
?>