<?php include('auth-handler.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login | ActualCashRewards</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon" href="../assets/logo/favicon.ico" type="image/x-icon">
</head>
<body>
<div class="content-box">
  <div class="header">
  	<h2>ACR Control Panel</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors-handler.php'); ?>
  	<div class="input-group">
  		<label>Email Address</label>
  		<input type="text" name="email" placeholder="Enter Email Address">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password"  placeholder="Type Password">
  	</div>
  	<div class="input-group">
  		<div class="center-btn">
		  <button type="submit" class="btn" name="login_user">Login</button>
		</div>
  	</div>
  	<p class="auth-info">
  		Haven't registered yet? <a href="register.php">Sign up</a>
  	</p>
  </form>
</div>
</body>
</html>