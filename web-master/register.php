<?php include('auth-handler.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register | ActualCashRewards</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon" href="../assets/logo/favicon.ico" type="image/x-icon">
</head>
<body>
  <div class="content-box">
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors-handler.php'); ?>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter Email Address">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" placeholder="Type Password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" placeholder="Type Password Again">
  	</div>
  	<div class="input-group">
  	  	<div class="center-btn">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
  	</div>
  	<p class="auth-info">
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
  </div>
</body>
</html>