<?php
/**
 * Template Name: Contact page
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
<?php
   $config = get_option('Choton_options');
   
?>
<!-- Contact Us Area End -->
<section class="contact-area pb-100 pt-100" id="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-10 mx-auto">
                  <div class="row text-center">

                     <?php

                     $contact_items = $config['contact_info'];
                     if ($contact_items) {
                        foreach ($contact_items as $contact_item) {
                           
                     ?>
                     <div class="col-md-4">
                        <div class="contact-address">
                           <i class="<?php echo $contact_item['contact_info_icon']; ?> "></i>
                           <h4><?php echo $contact_item['contact_info_title']; ?> <span><?php echo $contact_item['counter_info_subtitle']; ?></span></h4>
                        </div>
                     </div>
                   <?php
                    }
                 }

                    ?>
                  </div>
                  <div class="row">
                     <div class="col-md-7">
                        <div class="contact-form">
                           <?php echo do_shortcode('[contact-form-7 id="111" title="contact form"]'); ?>
                        </div>
                     </div>
                     <div class="col-md-5">

                        <?php
                        $google_map = $config['contact_map'];

                        ?>
                        <div class="google-map">
                          <iframe src="https://maps.google.com/maps?q=<?php echo $google_map['latitude'];?>, <?php echo $google_map['longitude'];?>&z=15&output=embed"></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Contact Us Area End -->
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
