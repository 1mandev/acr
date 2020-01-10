<section class="all-rewards section__primary">
    <div class="section__header">
        <svg>
            <use xlink:href="assets/icons/sprite.svg#acr-folder">
            </use>
        </svg>
        <h4 class="section__header--title">all rewards</h4>
    </div>
    <div class="masonry-with-columns">
    <?php
        foreach($allSubDirs as $subdir):
            if($subdir == "all"):
                $all_thumbs = GetImagesArray("images/".$subdir."/"."thumb/");
                    foreach($all_thumbs as $image):
                        $full_img = "images/".$subdir."/"."full/".$image;
                        $thumb_img = "images/".$subdir."/"."thumb/".$image;
    ?>
        <div class="image">
            <a href="<?php echo $full_img ?>">
                <img src="<?php echo $thumb_img ?>">
            </a>
        </div>
        <?php endforeach; endif; endforeach; ?>
    </div>
    <div class="loadmore">
        <button class="loadmore__button">load more</button>
    </div>
</section>