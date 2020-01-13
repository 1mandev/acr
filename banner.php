<!-- Featured Banner -->
<div class="banner">
        <div class="add-banner__block">
            <?php $results = mysqli_query($db, "SELECT * FROM bannerads");
            if ($row = mysqli_fetch_array($results)):
            ?>
            <div class="banner__image">
                <?php echo $row['script'];?>
            </div>
            <?php endif;?>
        </div>
</div>