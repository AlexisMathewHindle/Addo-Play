<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package addo-theme
 */

?>



<?php wp_footer(); ?>
            <!-- FOOTER -->

            <!--<div class="section fp-auto-height">-->
            <div class="footer-container footer-container--one">
                <div class="social-icons">
                    <ul>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li>
                            <a href="#">
                                <h1>@addoplay.com</h1>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="footer-container footer-container--two"></div>
            <div class="footer-container footer-container--three"></div>
            <div class="footer-container footer-container--four"></div>

            <!-- END OF FOOTER -->
        </div>
    </div>

    <!-- /container -->


   
    <script type="text/javascript">
        function initMap() {
            var addo = {
                lat: 51.636478,
                lng: -0.694725
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: addo
            });
            var marker = new google.maps.Marker({
                position: addo,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPP-BJ4auiypa9o9R0M-pwqYdWOQIDvRY&callback=initMap">
    </script>

    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/vendor/jquery-1.11.2.min.js "></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/vendor/bootstrap.min.js "></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/vendor/slick.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/vendor/jquery.slotmachine.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/vendor/jquery.fullpage.min.js "></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/vendor/jquery.jSlots.js "></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/vendor/jquery.slotmachine.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/vendor/typed.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js "></script>
</body>

</html>