</div>
    <!-- footer -->
    <footer class="footer section__primary">
        <div class="footer__content">
            <div class="footer__head">
                <!-- <svg>
                    <use xlink:href="/logo/icon.svg">
                    </use>
                </svg> -->
                <img class="logo-icon" src="assets/logo/icon.png" alt="" srcset="">
                <h2>Actual<span>Ca$h</span>Rewards</h2>
            </div>
            <ul class="footer__social">
                <li>
                    <a href="#">
                        <svg>
                            <use xlink:href="assets/icons/sprite.svg#acr-Facebook">
                            </use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg>
                            <use xlink:href="assets/icons/sprite.svg#acr-Twitter">
                            </use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg>
                            <use xlink:href="assets/icons/sprite.svg#acr-instagram">
                            </use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg>
                            <use xlink:href="assets/icons/sprite.svg#acr-Linkdin">
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
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/vendor/lightbox/simple-lightbox.min.js"></script>
    <script src="assets/vendor/slick/slick.min.js"></script>
    <script src="assets/vendor/light/baguetteBox.min.js"></script>
    <script src="assets/js/acr-main.js"></script>
    <script>
        var $gallery = $('.image a').simpleLightbox();
    </script>
    <script>
        baguetteBox.run('.image__slider');
    </script>
</body>

</html>