<?php
/**
 * Template Name: Gallery page
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
<!-- Header Area Start -->
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4>Gallery</h4>
                    <ul>
                        <li><a href=""></a>Home</li> / 
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery-area pt-100 pb-100">
    <div class="container">
        <div class="row">

<?php

          $args = array(

            'post_type' => 'Gallery',
            'posts_per_Page' => -1
        );
          $query = new WP_Query($args);
          while($query -> have_posts()){
            $query -> the_post();
            $normal_image = get_field('normal_image');
            $big_image = get_field('big_image');
            ?>

             <div class="col-xl-4">
                <div class="single-gallery">
                     <img src="<?php echo $normal_image['url']; ?>" alt="">
                     <div class="gallery-hover">
                        <div class="gallery-content">
                           <h3><a href="<?php echo $big_image['url']; ?>" class="gallery"><i class="fa fa-plus"></i> item name</a></h3>
                        </div>
                    </div>
                </div>
            </div>
         

            <?php
        }
            wp_reset_postdata();
            ?>
           
        </div>
    </div>
</section>
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
