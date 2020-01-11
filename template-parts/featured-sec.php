<section class="featured section__primary">
    <div class="section__header">
        <svg>
            <use xlink:href="assets/icons/sprite.svg#acr-Star"></use>
        </svg>
        <h4 class="section__header--title">Featured</h4>
    </div>

    <div class="slider__wrapper">
        <div class="featured__slider">
            <?php
                foreach($allSubDirs as $subdir):
                    if($subdir == "featured"):
                        $all_thumbs = GetImagesArray("images/".$subdir."/"."thumb/");
                        $arrayLen = count($all_thumbs);
                        $r_all_thumbs = array_random($all_thumbs,$arrayLen);
                        foreach($r_all_thumbs as $image):
                            $full_img = "images/".$subdir."/"."full/".$image;
                            $thumb_img = "images/".$subdir."/"."thumb/".$image;
            ?>
                <a href="<?php echo $full_img; ?>">
                    <img src="<?php echo $thumb_img; ?>" alt="<?php echo $image; ?>">
                </a>

            <?php endforeach; 
        endif; endforeach; ?>
        </div>
    </div>
</section>