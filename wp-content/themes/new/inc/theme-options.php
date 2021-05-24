<?php

if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'Choton_options';

  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => __('Theme Options', 'new'),
    'menu_slug'  => 'theme-options',
    'framework_title'  => 'choton bhowmik',
    'menu_parent' => 'themes.php',
    'menu_type' => 'submenu'
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'id'  => 'header_options',
    'title' => 'Header Options'

     ));
      

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'parent' => 'header_options',
    'title' =>  __('Header Left', 'new'),
    'fields' => array(
       array(
       'id' => 'header_email',
       'type' => 'text',
       'title' => __('Email Address', 'new'),
       ),
       array(
       'id' => 'header_phone',
       'type' => 'text',
       'title' => __('Mobile Number','new'),
       )
    )
  ));

   CSF::createSection( $prefix, array(
    'title' => 'Header Icons',
    'parent' => 'header_options',
    'fields' =>array(
     array(
      'id' => 'header_icons',
      'title' => 'Header Icons',
      'type' => 'group',
      'button_title' => 'Add Social Icon',
      'fields' => array(
        array(
        'id' => 'social_title',
        'type' => 'text',
        'title' => __('Social Title', 'new'),
       ),
       array(
        'id' => 'social_link',
        'type' => 'text',
        'title' => __('Social Link', 'new'),
       ),
       array(
        'id' => 'social_icon',
        'type' => 'icon',
        'title' => __('Social Icon','new'),
       )

      )
    )
    )
   ));
//for logo upload
    CSF::createSection( $prefix, array(
    'title' => 'Logo',
    'parent' => 'header_options',
    'fields' =>array(
     array(
      'id' => 'logo',
       'type' => 'media',
        'title' => __('Upload Logo','new'),

     )
   )
  ));

    //for logo upload
    CSF::createSection( $prefix, array(
    
    'parent' => 'header_options',
     'title' => __('Header Styling','new'),
    'fields' =>array(
     array(
      'id' => 'header_background',
       'type' => 'background',
        'title' => __('Header Background Image/Color','new'),
        'output' => array('.header-top')

     ),
      array(
      'id' => 'header_color',
       'type' => 'color',
        'title' => __('Header Color','new'),
        'output' => array('.header-top a')

     ),
      array(
      'id' => 'header-typography',
       'type' => 'typography',
        'title' => __('Header Typography','new'),
        'output' => array('.header-top a')

     ),
      array(
      'id' => 'header-link_hover',
       'type' => 'color',
        'title' => __('Header link hover','new'),
        'output' => array('.header-top a:hover')

     )
   )
  ));



//About section

    CSF::createSection($prefix, array(
      'id' =>'about_options',
      'title' => __('About Section', 'new')
    ));
     //about section title
    CSF::createSection($prefix, array(
      'parent' =>'about_options',
      'title' => __('About Section Title', 'new'),
      'icon' => 'fa fa-bars',
      'fields' => array(
        array(

       'id' =>'about_sec_title',
      'title' => __('Title', 'new'),
      'type' => 'text',
      'desc' => __('Write about section title here', 'new')

        ),
         array(

       'id' =>'about_sec_subtitle',
      'title' => __('Sub Title', 'new'),
      'type' => 'text',
      'desc' => __('Write about section Sub title here', 'new')

        ),
          array(

       'id' =>'about_sec_description',
      'title' => __('About Section Description', 'new'),
      'type' => 'textarea',
      'desc' => __('Write about section Description here', 'new')

        )
      )
    ));

     //about section left section
    CSF::createSection($prefix, array(
      'parent' =>'about_options',
      'title' => __('About Section Left  Title', 'new'),
      'icon' => 'fa fa-arrow-right',
      'fields' => array(
        array(

       'id' =>'about_sec_lefttitle',
      'title' => __('Left Title', 'new'),
      'type' => 'text',
      'desc' => __('Write about section title here', 'new')

        ),
         array(

       'id' =>'about_sec_leftsubtitle',
      'title' => __(' Left Sub Title', 'new'),
      'type' => 'textarea',
      'desc' => __('Write about section Sub title here', 'new')

        ),
          array(

       'id' =>'about_sec_btn',
      'title' => __('About Section Link', 'new'),
      'type' => 'text',
      'desc' => __('Write about section Description here', 'new')

        )
      )
    ));

     //about section right section
    CSF::createSection($prefix, array(
      'parent' =>'about_options',
      'title' => __('About Section right  side', 'new'),
      'icon' => 'fa fa-arrow-right',
      'fields' => array(
        array(

       'id' =>'about_sec_righttitle',
      'title' => __('Right Title', 'new'),
      'type' => 'group',
      'button_title' => __('add new feture','new'),
      'desc' => __('Write about section title here', 'new'),
      'fields' => array(
          array(
           'id' => 'about_sec_right_title',
           'title' => __('Title', 'new'),
           'type' => 'text'
          ),

           array(
           'id' => 'about_sec_right_icon',
           'title' => __('Icon', 'new'),
           'type' => 'icon'
          ),
            array(
           'id' => 'about_sec_right_subtitle',
           'title' => __('Sub Title', 'new'),
           'type' => 'textarea'
          )
      )

        )
      )
    ));

    CSF::createSection($prefix,array(
      'parent' => 'about_options',
      'title' => __('About Info', 'new'),
      'fields' =>array(
        array(
          'id' => 'about_faq_list',
          'title' => __('About Faq', 'new'),
          'type' => 'group',
          'button_title' => __('Add New Faq', 'new'),
          'fields' => array(
           array(
            'id' => 'faq_title',
            'title' => __('Faq Ttile', 'new'),
            'type' => 'text'
           ),
           array(
            'id' => 'faq_des',
            'title' => __('Faq Description', 'new'),
            'type' => 'textarea'
           )
          )
        )
      )
    ));

     CSF::createSection($prefix,array(
      'parent' => 'about_options',
      'title' => __('About Skills', 'new'),
      'fields' =>array(
        array(
          'id' => 'about_skill_list',
          'title' => __('About Skill', 'new'),
          'type' => 'group',
          'button_title' => __('Add New Skill', 'new'),
          'fields' => array(
           array(
            'id' => 'skill_title',
            'title' => __('Skill Ttile', 'new'),
            'type' => 'text'
           ),
           array(
            'id' => 'skill_number',
            'title' => __('Skill Number', 'new'),
            'type' => 'text'
           )
          )
        )
      )
    ));
     
     //counter option
      CSF::createSection($prefix,array(
      'id' => 'counter_option',
      'title' => __('Counter Options', 'new'),
      'icon'  => 'fas fa-rocket',
      'fields' =>array(
        array(
          'id' => 'counter_list',
          'title' => __('Counter List', 'new'),
          'type' => 'group',
          'button_title' => __('Add Counter', 'new'),
          'fields' => array(
           array(
            'id' => 'counter_icon',
            'title' => __('Counter Icon', 'new'),
            'type' => 'icon'
           ),
           array(
            'id' => 'counter_number',
            'title' => __('Counter Number', 'new'),
            'type' => 'number'
           ),
            array(
            'id' => 'counter_title',
            'title' => __('Counter title', 'new'),
            'type' => 'text'
           )
          )
        )
      )
    ));

      //CTA option
      CSF::createSection($prefix,array(
      'id' => 'cta_option',
      'title' => __('CTA Options', 'new'),
      'icon'  => 'fas fa-bullhorn',
      'fields' =>array(
        array(
            'id'    => 'cta_switch',
            'type'  => 'switcher',
            'title' => __('Show CTA?', 'new'),
            'default' => true
          ),
        array(     
            'id' => 'cta_title',
            'title' => __('CTA Title', 'new'),
            'type' => 'text',
            'help' => __(' Write CTA Title Here', 'new'),
            'dependency' => array('cta_switch','==','true')
           ),
           array(
            'id' => 'cta_subtitle',
            'title' => __('CTA Sub Title', 'new'),
            'type' => 'text',
            'help' => __(' Write CTA Sub Title Here', 'new'),
            'dependency' => array('cta_switch','==','true')
           ),
            array(
            'id' => 'cta_btn_txt',
            'title' => __('CTA Button Text', 'new'),
            'type' => 'text',
            'help' => __(' Write CTA button text Here', 'new'),
            'dependency' => array('cta_switch','==','true')
           ),
            array(
            'id' => 'cta_btn_url',
            'title' => __('CTA Button URL', 'new'),
            'type' => 'text',
            'dependency' => array('cta_switch','==','true')
           
        )
      )
    ));

      //Contact option
      CSF::createSection($prefix,array(
      'id' => 'contact_option',
      'title' => __('Contact Options', 'new'),
      'icon'  => 'fa fa-compress',
      'fields' =>array(
        array(
          'id' => 'contact_info',
          'title' => __('Contact Info', 'new'),
          'type' => 'group',
          'button_title' => __('Add New Contact Item', 'new'),
          'fields' => array(
            array(
            'id' => 'contact_info_title',
            'title' => __('Contact Info Title', 'new'),
            'type' => 'text'
           ),
           array(
            'id' => 'contact_info_icon',
            'title' => __('Contact Info Icon', 'new'),
            'type' => 'icon'
           ),
           
            array(
            'id' => 'counter_info_subtitle',
            'title' => __('Contact Info Sub title', 'new'),
            'type' => 'text'
           )
          )
        ),
        array(
         'id' => 'contact_map',
         'type' => 'map',
         'title' => __('Contact Map', 'new')
        )


      )
    ));


      //Bottom Footer Option
      CSF::createSection($prefix,array(
      'id' => 'footer_option',
      'title' => __('Footer Options', 'new'),
      'icon'  => 'fas fa-rocket',
      'fields' =>array(
        array(
          'id' => 'footer_text',
          'title' => __('Footer Text', 'new'),
           'type' => 'text',
          
          'title' => __('Copyright Text', 'new'),
          'default' => __('&copy; All Rights Reserved 2020', 'new')
           ),
           array(
            'id' => 'footer_social',
            'title' => __('Footer Social Link', 'new'),
            'button_title' => __('Add New Link', 'new'),
            'type' => 'group',
            'fields' => array(

              array(
                'id' => 'footer_social_title',
          'title' => __('Footer Link Title', 'new'),
           'type' => 'text',

              ),
               array(
                'id' => 'footer_social_icon',
          'title' => __('Footer Link Icon', 'new'),
           'type' => 'icon',

              ),
                array(
                'id' => 'footer_social_url',
          'title' => __('Footer Link URL', 'new'),
           'type' => 'text',

              )
            )
           ),
           array(
           'id' => 'footer_link_target',
           'type' => 'select',
           'title' => __('Select Link Target', 'new'),
           'options' => array(
            '_self' => __('Open In Same Tab', 'new'),
            '_blank' => __('Open In New Tab', 'new'),
            '_window' => __('Open In New Window', 'new')

               
           ),
           'default' => '_blank'
           )
            
          )
        
    ));


}
