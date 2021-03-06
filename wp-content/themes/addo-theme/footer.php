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
            var image = 'http://addoplay.com.gridhosted.co.uk/wp-content/themes/addo-theme/assets/img/splat_two.png';
            var marker = new google.maps.Marker({
                position: addo,
                map: map,
                icon: image
            });
        }
        
        // Text animation
        
        

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPP-BJ4auiypa9o9R0M-pwqYdWOQIDvRY&callback=initMap">
    </script>

    <!--<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/vendor/jquery-1.11.2.min.js "></script>-->
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/vendor/bootstrap.min.js "></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/vendor/slick.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/vendor/jquery.slotmachine.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/vendor/jquery.fullpage.min.js "></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/vendor/jquery.jSlots.js "></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/vendor/jquery.slotmachine.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/vendor/typed.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js "></script>
    <script>
        (function($) {
            $("#txt-switch").cooltext({
                sequence:[
                    {action:"update", text:"Toys for everyday play"},
                    {action:"animation", animation:"cool37", stagger:50 },
                    {action:"animation", animation:"cool257", stagger:50 },
                    {action:"update", text:"Available worldwide"},
                    {action:"animation", animation:"cool37", stagger:50 },
                    {action:"animation", animation:"cool257", stagger:50 },
                    {action:"update", text:"Outstanding value"},
                    {action:"animation", animation:"cool37", stagger:50 },
                    {action:"animation", animation:"cool257", stagger:50 },
                    {action:"update", text:"Intelligent and thoughtful design"},
                    {action:"animation", animation:"cool37", stagger:50 },
                    {action:"animation", animation:"cool257", stagger:50 },
                    {action:"update", text:"Inspiring play"},
                    {action:"animation", animation:"cool37", stagger:50 },
                    {action:"animation", animation:"cool257", stagger:50 }
                ],
                cycle:true
             });
        })(jQuery);
        </script>
</body>

</html>