<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package new
 */

?>
<?php
   $config = get_option('Choton_options');
   
?>
<!-- Footer Area End -->
<footer class="footer-area pt-50 pb-50">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-6">
         
            <div class="single-footer footer-logo">
               <?php dynamic_sidebar('footer_widget1'); ?>
               
            </div>


         </div>
         <div class="col-lg-2 col-md-6">
            <div class="single-footer">
               <?php dynamic_sidebar('footer_widget2'); ?>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="single-footer">
               <?php dynamic_sidebar('footer_widget3'); ?>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="single-footer contact-box">
               <?php dynamic_sidebar('footer_widget4'); ?>
               
            </div>
         </div>
      </div>
      <div class="row copyright">
         <div class="col-md-6">
            <p><?php echo $config['footer_text']; ?></p>
         </div>
         <div class="col-md-6 text-right">
            <ul>

               <?php
               $footer_socials = $config['footer_social'];
               foreach ($footer_socials as $footer_social) {
                  ?>
                  <li><a href="<?php echo $footer_social['footer_social_url']; ?>" target="<?php echo $config['footer_link_target'];?>"><i class="<?php echo $footer_social['footer_social_icon']; ?>"></i></a></li>

                  <?php
               }


               ?>
             
            </ul>
         </div>
      </div>
   </div>
</footer>
<!-- Footer Area End -->
<!-- Main JS -->
<script src="<?php bloginfo('template_directory');?>/assets/js/jquery.min.js"></script>
<!-- Popper JS -->
<script src="<?php bloginfo('template_directory');?>/assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>
<!-- Owl Carousel JS -->
<script src="<?php bloginfo('template_directory');?>/assets/js/owl.carousel.min.js"></script>
<!-- Manific Popup JS -->
<script src="<?php bloginfo('template_directory');?>/assets/js/jquery.magnific-popup.min.js"></script>
<!-- Isotope JS -->
<script src="<?php bloginfo('template_directory');?>/assets/js/isotope.min.js"></script>
<!-- Imageload JS -->
<script src="<?php bloginfo('template_directory');?>/assets/js/imageloaded.min.js"></script>
<!-- Counter JS -->
<script src="<?php bloginfo('template_directory');?>/assets/js/jquery.counterup.min.js"></script>
<!-- Waypoint JS -->
<script src="<?php bloginfo('template_directory');?>/assets/js/waypoint.min.js"></script>
<!-- Main JS -->
<script src="<?php bloginfo('template_directory');?>/assets/js/main.js"></script>

	
<?php wp_footer(); ?>

</body>
</html>
