</main>
<aside class="home-aside content__sidebar section__primary">
    <?php $results = mysqli_query($db, "SELECT * FROM sidebarads");
        while ($row = mysqli_fetch_array($results)):
        ?>
            <div class="append__add--elements">
                <div class="sidebar__image">
                    <div class="sidebar__add--content">
                        <?php echo $row['script']?>
                    </div>
                </div>
            </div>
    <?php endwhile;?>
</aside>