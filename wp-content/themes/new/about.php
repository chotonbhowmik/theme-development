<?php
/**
 * Template Name: About page
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
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
              <div class="breadcumb">
  <?php
  while (have_posts()) {
    the_post();
  ?>
  <h4><?php the_title();?></h4>
  <ul>
    <li><a href="<?php echo site_url();?>">Home</a></li>
    
  </ul>
<?php
}
  ?>
  
</div>
            </div>
        </div>
    </div>
</section>

<!-- About Area Start -->
<section class="about-area pt-100 pb-100" id="about">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <div class="about">
                     <div class="page-title">
                        <h4><?php echo get_field('about_us_title'); ?></h4>
                     </div>
                     <p><?php echo get_field('about_us_subtitle'); ?></p>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="single_about">
                     <i class="fa fa-laptop"></i>
                     <h4>our mission</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                  </div>
                  <div class="single_about">
                     <i class="fa fa-user"></i>
                     <h4>our vission</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                  </div>
                  <div class="single_about">
                     <i class="fa fa-pencil"></i>
                     <h4>our history</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- About Area End -->
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
