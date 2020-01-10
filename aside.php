</main>
<aside class="content__sidebar section__primary">
    <?php $results = mysqli_query($db, "SELECT * FROM ads");
        while ($row = mysqli_fetch_array($results)):
            if ($row['name']== 'sidebar'):
        ?>
    <div class="add__box">
        <a href="<?php echo $row['url'] ?>"><img src="<?php echo "ads/".$row['ads_img'] ?>" alt="featured__image"></a>
    </div>
    <?php endif; endwhile;?>
</aside>