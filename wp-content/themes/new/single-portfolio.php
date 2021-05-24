<?php
/**
 * Template Name: Portfolio Single page
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
    </div>
</section>

<section class="portfolio-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <?php
                while (have_posts()){
                    the_post();
                    ?>

                    <h2><?php the_title(); ?></h2>
                <?php the_post_thumbnail(); ?>
                <p><?php the_content(); ?></p>

               <?php
                }
                ?>
                
            </div>
            <div class="col-xl-4">
                <div class="portfolio-sidebar">

                    <?php
                    $technology_lists = get_field('technology_used');
                    if ($technology_lists) {
                        ?>

                        <h4>technology used</h4>
                    <ul>
                        <?php
                        foreach($technology_lists as $technology_list){

                            ?>

                            <li><i class="fa fa-arrow-right"></i> <?php echo $technology_list; ?></li>
                       <?php
                        }


                        ?>
                        
                      
                    </ul>


                    <?php }


                    ?>
                    
                </div>
                <div class="portfolio-sidebar">

                     <?php
                    $project_lists = get_field('project_feature');
                    if ($project_lists) {
                        ?>

                    <h4>project features</h4>
                    <ul>

                        <?php
                        foreach($project_lists as $project_list){

                            ?>

                            <li><i class="fa fa-arrow-right"></i> <?php echo $project_list; ?></li>
                       <?php
                        }


                        ?>
                        
                        
                       
                    </ul>
                    <?php
                }
                ?>
                </div>
            </div>
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
