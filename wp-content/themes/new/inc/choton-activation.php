<?php

require_once get_template_directory(). '/inc/class-tgm-plugin-activation.php';

function choton_activation(){

	$plugins = array(
    array(
            'name' => __('Advanced Custom Fields', 'new'),
            'slug' => 'advanced-custom-fields',
            'required' => true
    ),
     array(
      'name' => __('Codestar Framework', 'new'),
      'slug' => 'codestar-framework',
      'source' => 'https://github.com/Codestar/codestar-framework/archive/master.zip',
      'required' => true
    ),
     array(
      'name' => __('Contact Form 7', 'new'),
      'slug' => 'contact-form-7',
      
      'required' => true
    )
	);

	$config = array(
   
       'id' => 'choton_plugins_activation',
       'menu'         => 'choton-plugins-activation',
       'parent_slug'  => 'themes.php',
       'has_notices'  => true
    
	);
	tgmpa($plugins, $config);
}
add_action('tgmpa_register', 'choton_activation');
