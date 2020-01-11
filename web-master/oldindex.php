<?php
	include('ads-handler.php');

	if (!isset($_SESSION['email'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['email']);
		header("location: login.php");
	}

  	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM ads WHERE id=$id");

		if ($record) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$url = $n['url'];
			$adsImgFile = $n['ads_img'];
		}
	}
  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Control Panel | ActualCashRewards</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="../assets/logo/favicon.ico" type="image/x-icon">
</head>
<body>
<div class="content-box">

<div class="header">
	<h2>ActualCashRewards</h2>
	<h3>Control Panel</h3>
</div>
<div class="content">
  	
	<!-- Ads Management -->
	<?php if (isset($_SESSION['message'])): ?>
		<div class="error success">
			<?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
		</div>
	<?php endif ?> 

    <!-- logged in user information -->
	<?php  if (isset($_SESSION['email'])) : ?>
		<div class="control-home">
			<div class="control-home__info">
				<h2>Ads Management</h2>
				<p>User: <strong><?php echo $_SESSION['email']; ?></strong></p>
			</div>
			<div class="control-home__logout">
				<a href="index.php?logout='1'" class="btn">Logout</a>
			</div>
		</div>
		
		<hr> 

		<?php $results = mysqli_query($db, "SELECT * FROM ads"); ?>
		<h3 class="text-center">Ads Form</h3>
		<form  method="post" action="ads-handler.php" enctype="multipart/form-data">
		<?php include('errors-handler.php'); ?>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="input-group">
				<div style="text-align:center; padding: 15px;">
					<p style="color:blueviolet;font-size:20px">Select Ads Type</p>
					<p>(Note that you can add only one 'Banner' ads.)</p>
				</div>
				<label for="select">Ads Type</label>
				<select name="name" id="select">
					<option value="sidebar" <?php if ($name=='sidebar')echo "selected";?>>Sidebar Ads</option>
					<option value="banner" <?php if ($name=='banner')echo "selected";?>>Banner Ads</option>
				</select>
			</div>
			<div class="input-group">
				<label>Ads URL</label>
				<input type="url" name="url" value="<?php echo $url;?>" required placeholder="Ads URL">
			</div>
			<div class="input-group">
				<input type="file" name="ads-img" required>
			</div>
			<div class="input-group">
				<?php if ($update == true): ?>
					<div class="center-btn">
					<button class="btn update-btn" type="submit" name="update">Update</button>
					</div>
				<?php else: ?>
					<div class="center-btn">
					<button class="btn" type="submit" name="save">Save</button>
					</div>
				<?php endif ?>
			</div>
		</form>

		<?php if ($update == true): ?>
		<form class="cancel-form" method="post" action="ads-handler.php"?>
			<div class="center-btn">
			<button class="btn cancel-btn" name="cancel" >Cancel</button>
			</div>
		</form>
		<?php endif; ?>

		<hr>
		<h3 class="text-center">All Ads</h3>
		<table id="all-ads">
			<thead>
				<tr>
					<th>Ads Image</th>
					<th>Ads Type</th>
					<th>Ads URL</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			
			<?php while ($row = mysqli_fetch_array($results)) { ?>
				<tr>
					<td><img src="<?php echo "../ads/".$row['ads_img']; ?>"></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['url']; ?></td>
					<td>
						<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >✏️ &nbsp;Edit</a>
					</td>
					<td>
						<a href="ads-handler.php?del=<?php echo $row['id']; ?>" class="del_btn">❌ &nbsp;Delete</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	<?php endif; ?>
	</div>

	<div class="copyright">
		&copy; ActualCashRewards <?php echo date('Y'); ?> | Made with ❤️ by <a href="http://1mandev.com">1MANDEV</a>
	</div>
</div>
</body>
</html>