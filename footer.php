</div>
    <!-- footer -->
    <footer class="footer section__primary">
        <div class="footer__content">
            <div class="footer__head">
                <img class="logo-icon" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/assets/logo/logo-1d.jpg">
            </div>
            <ul class="footer__social">
                <li>
                    <a href="#">
                        <svg>
                            <use xlink:href="<?php $_SERVER['DOCUMENT_ROOT'];?>/assets/icons/sprite.svg#acr-Facebook">
                            </use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg>
                            <use xlink:href="<?php $_SERVER['DOCUMENT_ROOT'];?>/assets/icons/sprite.svg#acr-Twitter">
                            </use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg>
                            <use xlink:href="<?php $_SERVER['DOCUMENT_ROOT'];?>/assets/icons/sprite.svg#acr-instagram">
                            </use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg>
                            <use xlink:href="<?php $_SERVER['DOCUMENT_ROOT'];?>/assets/icons/sprite.svg#acr-Linkdin">
                            </use>
                        </svg>
                    </a>
                </li>
            </ul>
            <div class="footer__copy">
                <p><span>&#169;</span>Copyright ActualCashRewards <?php echo date('Y');?></p>
            </div>
        </div>
    </footer>

    <!-- back-to-top -->
    <a href="#content" class="back-to-top">Top</a>

    <!-- script -->
    <script src="<?php $_SERVER['DOCUMENT_ROOT'];?>/assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT'];?>/assets/vendor/slick/slick.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT'];?>/assets/vendor/light/baguetteBox.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT'];?>/assets/js/acr-main.js"></script>
    <script>
        baguetteBox.run('.featured__slider');
        baguetteBox.run('.image__slider');
        baguetteBox.run('.masonry-not-columns');
    </script>
</body>

</html>