<?php 
	require_once $_SERVER['DOCUMENT_ROOT'].'/server-config.php';
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

    if (isset($_GET['edit-sidebar'])) {
        $id = $_GET['edit-sidebar'];
        $sidebar_script_id = $_GET['edit-sidebar'];
        
		$record = mysqli_query($db, "SELECT * FROM sidebarads WHERE id=$id");
		if ($row = mysqli_fetch_array($record)) {
            $sidebar_script=$row['script'];
        }
        $_SESSION['sidebar_edit'] = $id;
    }
    
    if (isset($_GET['edit-cancel'])) {
        header('location: index.php');
    }
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ActualCashRewards</title>
    <link rel="shortcut icon" href="<?php $_SERVER['DOCUMENT_ROOT'];?>/assets/logo/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'];?>/assets/vendor/slick/slick.css">
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/vendor/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/vendor/light/baguetteBox.min.css">
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/assets/css/acr-main.css">
</head>

<body>
    <header class="header section__primary">
        <div class="section__fluid">
            <div class="header__content">
                <div class="logo">
                    <a href="/">
                        <img class="logo-icon" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/assets/logo/logo-1d.jpg">
                    </a>
                </div>
				
				<div class="banner">
                        <?php 
                            $results = mysqli_query($db, "SELECT * FROM bannerads"); 
                            if($row = mysqli_fetch_array($results)):?>
                                <div class="add-banner__block">
                                    <div class="banner__action">
                                        <a class="banner__action--delete" href="ads-handler.php?del-banner=<?php echo $row['id']; ?>">Delete</a>
                                    </div>
                                    <div class="banner__image">
                                        <?php echo $row['script'];?>
                                    </div>
                                </div>
                        <?php else: ?>
                            <div class="add-banner__button">
                                <button>Add Banner Ads</button>
                            </div>
                            <form method="post" class="add-banner__form" action="ads-handler.php" id="banner-add__form">
                                <textarea name="add-script" id="add-script"></textarea>
                                <input type="submit" name="save-banner_ads" value="Submit">
                            </form>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </header>
	<?php  if (isset($_SESSION['email'])) : ?>
    <div class="content section__fluid">
        <main class="content__main">
            <section class="nav section__primary">
				<div class="control-home">
					<div class="control-home__info">
						<h2>Ads Management</h2>
						<p>User: <strong><?php echo $_SESSION['email']; ?></strong></p>
					</div>
					<div class="control-home__logout">
						<a href="index.php?logout='1'" class="btn">Logout</a>
					</div>
				</div>
            </section>
    </main>
    <aside class="content__sidebar section__primary">
        
        <div class="append__add--elements"> 
            <?php $results = mysqli_query($db, "SELECT * FROM sidebarads"); 
                while($row = mysqli_fetch_array($results)):?>
                    <div class="add-sidebar__block" id="sidebar-addblock-<?php echo $row['id']; ?>">
                        <div class="sidebar__action">
                        <?php if(isset($_SESSION['sidebar_edit'])):
                                if($_SESSION['sidebar_edit']== $row['id']): ?>
                            <a class="sidebar__action--cancel" href="index.php?edit-cancel">Cancel</a>
                        <?php endif; endif; ?>
                            <a class="sidebar__action--edit" href="index.php?edit-sidebar=<?php echo $row['id']; ?>">Edit</a>
                            <a class="sidebar__action--delete" href="ads-handler.php?del-sidebar=<?php echo $row['id']; ?>">Delete</a>
                        </div>
                        <div class="sidebar__image">
                            <div class="sidebar__add--content" id="<?php 
                            if(isset($_SESSION['sidebar_edit'])){
                                if($_SESSION['sidebar_edit']== $row['id']){
                                     echo 'editsidebar__hide';
                                     }
                            } ?>">
                                <?php echo $row['script']?>
                            </div>

                            <?php if(isset($_SESSION['sidebar_edit'])):
                                if($_SESSION['sidebar_edit']== $row['id']): ?>
                                    <form class="edit-sidebar__form" action="ads-handler.php" method="post">
                                        <input type="hidden" name="sidebar-id" value="<?php echo $row['id']; ?>">
                                        <textarea name="edit-sidebar-script" id="edit-sidebar-script"><?php echo $sidebar_script ?></textarea>
                                        <input name="update-sidebar_ads" type="submit" value="Submit">
                                    </form>
                            <?php endif; endif;?>
                        </div>
                    </div>
            <?php endwhile; unset($_SESSION['sidebar_edit'])?>
            
        </div>

           

            
            <form class="add-sidebar__form" action="ads-handler.php" method="post">
                <textarea name="add-sidebar-script" id="add-sidebar-script"></textarea>
                <input name="save-sidebar_ads" type="submit" value="Submit">
            </form>

            <div class="add-sidebar__button" id="add-sidebarads">
                <button>+ Add Sidebar Ads</button>
            </div>

            
    </aside>
    <?php endif; ?>
    

<?php include("../footer.php"); ?>