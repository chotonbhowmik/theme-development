<?php
/**
 * Template Name: Service page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package new
 */

get_header();
?>

<!-- Services Area Start -->
<section class="services-area pt-100 pb-50" id="services">
         <div class="container">
            <div class="row">
               <?php

          $args = array(

            'post_type' => 'Services',
            'posts_per_Page' => -1
        );
          $query = new WP_Query($args);
          while($query -> have_posts()){
            $query -> the_post();
            
            
            ?>

             <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="<?php echo get_field('service_icon'); ?>"></i>
                     <h4><?php the_title(); ?></h4>
                     <p><?php the_content(); ?></p>
                  </div>
               </div>
            <?php 

               };
            ?>
              
              
            </div>
         </div>
      </section>
      <!-- Services Area End -->
 <!-- CTA Area Start -->
 <section class="cta">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <h4>best solution for your business <span>the can be used on larger scale projectss as well as small scale projectss</span></h4>
         </div>
         <div class="col-md-6 text-center">
            <a href="#" class="box-btn">contact us <i class="fa fa-angle-double-right"></i></a>
         </div>
      </div>
   </div>
</section>
<!-- CTA Area End -->


<?php

get_footer();
