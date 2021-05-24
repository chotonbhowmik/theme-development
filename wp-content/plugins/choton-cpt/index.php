<?php

/*
Plugin Name: Choton custom post type
Description: Commmon custom post types for choton theme
Plugin URI: https://www.chotonbhowmik.com/choton-cpt
Author: Choton
Author URI: https://www.chotonbhowmik.com
Text Domain: new


*/
	//custom post

		function choton_custom_posts(){

			//slider custom post
			register_post_type('Sliders',array(
               'labels'  => array(
                 'name' => __('Slides', 'new'),
                 'singular_name'  => __('Slider', 'new')
               ),
               'public' => true,
               'supports' => array('title','editor','thumbnail','custom-fields'),
               'menu_icon' => 'dashicons-dashboard'

			));

			//service custom field
			register_post_type('Services',array(
               'labels'  => array(
                 'name' => __('services', 'new'),
                 'singular_name'  => __('service', 'new')
               ),
               'public' => true,
               'supports' => array('title','editor','custom-fields'),
               'menu_icon' => 'dashicons-admin-generic'
			));


			
			//team custom post
			register_post_type('Team',array(
               'labels'  => array(
                 'name' => __('Teams', 'new'),
                 'singular_name'  => __('Team', 'new')
               ),
               'public' => true,
               'supports' => array('title','editor','thumbnail','custom-fields', 'page-attributes'),
               'menu_icon' => 'dashicons-welcome-write-blog'

			));

			//testimonials post
			register_post_type('Testimonial',array(
               'labels'  => array(
                 'name' => __('Testimonials', 'new'),
                 'singular_name'  => __('Testimonial', 'new')
               ),
               'public' => true,
               'supports' => array('thumbnail','custom-fields', 'page-attributes'),
               'menu_icon' => 'dashicons-admin-site-alt3'
			));
			//Gallery Section
			register_post_type('Gallery',array(
               'labels'  => array(
                 'name' => __('Gallery', 'new'),
                 'singular_name'  => __('Gallery', 'new')
               ),
               'public' => true,
               'supports' => array('title','thumbnail','custom-fields', 'page-attributes'),
               'menu_icon' => 'dashicons-format-gallery'
			));

			//Portfolio Section
			register_post_type('portfolio',array(
               'labels'  => array(
                 'name' => __('Portfolio', 'new'),
                 'singular_name'  => __('Portfolio', 'new')
               ),
               'public' => true,
               'supports' => array('title','editor','thumbnail','custom-fields', 'page-attributes')
			));

			//portfolio taxonomy

			register_taxonomy('portfolio-cat','portfolio', array(
               'labels' =>array(
               'name' => __('Categories', 'new'),
               'singular_name' => __('Category', 'new')
               ),
               'hierarchical' => true,
               'show_admin_column' => true
			));
		}

		add_action('init','choton_custom_posts');