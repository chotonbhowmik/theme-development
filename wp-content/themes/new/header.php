<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package new
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Font Google -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
      <!-- Bootstrap Css -->
      <link href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome Css -->
      <link href="<?php bloginfo('stylesheet_directory');?>/assets/css/font-awesome.min.css" rel="stylesheet">
      <!-- Magnific Popup Css -->
      <link href="<?php bloginfo('stylesheet_directory');?>/assets/css/magnific-popup.css" rel="stylesheet">
      <!-- Owl Carousel Css -->
      <link href="<?php bloginfo('stylesheet_directory');?>/assets/css/owl.carousel.css" rel="stylesheet">
      <!-- Main Css -->
      <link href="<?php bloginfo('stylesheet_directory');?>/assets/css/style.css" rel="stylesheet">
      <!-- Responsive Css -->
      <link href="<?php bloginfo('stylesheet_directory');?>/assets/css/responsive.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
 <section class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="header-left">
                     <?php
                     $config = get_option('Choton_options');

                     ?>
                     <?php
                     if ($config['header_email']) {
                        ?>
                        <a href="mailto:<?php echo $config['header_email']; ?>"><i class="fa fa-envelope"></i> <?php echo $config['header_email']; ?> </a>

                   <?php  }

                     ?>
                     
                     <?php
                     if ($config['header_phone']) {
                        ?>
                        <a href="tel:<?php echo $config['header_phone']; ?>"><i class="fa fa-phone"></i> <?php echo $config['header_phone']; ?> </a>

                   <?php  }

                     ?>
							
							
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="header-social">
                     <?php

                        $header_icons = $config['header_icons'];
                        foreach ($header_icons as $header_icon) {
                           ?>
                           <a href="<?php echo $header_icon['social_link']; ?>"><i class="<?php echo $header_icon['social_icon']; ?> "></i></a>
                         <?php  
                        }
                     ?>
							
							
						</div>
					</div>
				</div>
			</div>
	   </section>
      <!-- Header Area Start -->
      <header class="header header-fixed">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <nav class="navbar navbar-expand-md navbar-light">
                     <?php
                     if ($logo = $config['logo']) 
                     ?>
                  <a href="<?php echo site_url(); ?>">
                  <img src="<?php echo $logo['url']; ?>">
                </a>

                     
                    
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>

                       <?php
			        wp_nav_menu( array(

			  	'theme_location'     => 'primary',
			  	'container'          => 'nav',
			  	'container_class'    => 'collapse navbar-collapse', 
			  	'menu_class'         => 'navbar-nav ml-auto', 

			      ));
			      ?>
                     <!-- <div class="collapse navbar-collapse ml-auto mainmenu" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                           <li><a href="index.html">Home</a></li>
                           <li><a href="about.html">About</a></li>
                           <li><a href="services.html">Services</a></li>
                           <li><a href="portfolio.html">Portfolio</a></li>
                           <li><a href="gallery.html">Gallery</a></li>
                           <li><a href="blog.html">Blog</a></li>
                           <li><a href="contact.html">Contact</a></li>
                        </ul>
                     </div> -->
                  </nav>
               </div>
            </div>
         </div>
      </header>
