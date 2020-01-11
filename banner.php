<!-- Featured Banner -->
<div class="banner">
    <?php $results = mysqli_query($db, "SELECT * FROM bannerads");
        if ($row = mysqli_fetch_array($results)):
    ?>
        <div class="add-banner__block">

            <div class="banner__image">
                <?php echo $row['script'];?>
            </div>
        </div>
    <?php endif;?>
</div>