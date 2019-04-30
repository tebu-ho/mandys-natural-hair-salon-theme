<?php

function add_mandys_theme_scripts()
{

    //Loading Bootstrap version 3.0.0
    wp_enqueue_style(
        'bootstrap', 
        get_template_directory_uri() . '/css/bootstrap.css', 
        array(), 
        '3.0.0', 
        'all'
    );

    wp_enqueue_style(
        'font-awesome', 
        '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 
        array(), 
        '4.7',
        'all'
    );

    //Loading Google fonts
    wp_enqueue_style(
        'google-fonts', 
        '//fonts.googleapis.com/css?family=Montserrat|Open+Sans|Source+Sans+Pro' 
    );

    wp_enqueue_style(
        'google-fonts-headings', 
        '//fonts.googleapis.com/css?family=Chicle|Shrikhand' 
    );

    //The main stylesheet in the root directory
    wp_enqueue_style(
        'main-style', 
        get_stylesheet_uri(), 
        array(), 
        '1.0',
        'all'
    );

    //Loading JavaScript files
    wp_enqueue_script(
        'jQuery', 
        get_theme_file_uri('/js/jquery.js'), 
        null, 
        '1.11.1', 
        true
    );
    wp_enqueue_script(
        'bootstrap-min', 
        get_theme_file_uri('/js/bootstrap.min.js'), 
        null, 
        '3.0.3', 
        true
    );

    wp_enqueue_script(
        'init', 
        get_theme_file_uri('/js/init.js'), 
        null, 
        '1.0', 
        true
    );
    wp_enqueue_script(
        'modernizr', 
        get_theme_file_uri('/js/modernizr.custom.js'), 
        null, 
        '2.6.2', 
        true
    );
    wp_enqueue_script(
        'masonry', 
        get_theme_file_uri('/js/masonry.pkgd.min.js'), 
        null, 
        '3.1.2', 
        true
    );
    wp_enqueue_script(
        'classie', 
        get_theme_file_uri('/js/classie.js'), 
        null, 
        '', 
        true
    );
    wp_enqueue_script(
        'AnimOnScroll', 
        get_theme_file_uri('/js/AnimOnScroll.js'), 
        null, 
        '1.0.0', 
        true
    );
}
add_action('wp_enqueue_scripts', 'add_mandys_theme_scripts');

/**
 * Features supported by this theme
 * @since 1.0.0
 */
function mandys_theme_support()
{
    add_theme_support(
        'custom-logo', array(
        'height'      => 72,
        'width'       => 217,
        'flex-height' => true,
        'flex-width'  => true,
        'header_text' => array('site-title', 'description'),
        )
    );
    $args = array(
        'default-image' => get_template_directory_uri() . '/img/header_image.png',
        'uploads'       => true,
    );
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menu( 'navBar', 'Primary Menu' );
}
add_action( 'after_setup_theme', 'mandys_theme_support' );

/**
 * Theme customize options accessible from the Admin area
 * @since 1.0.0
 */
function customize_mandys( $wp_customize )
{
    /** 
     * Creating a section for contact information that can be customised
     */
    $wp_customize->add_section(
        'contact_information_section', array(
            'title' => __( 'Contact Information', 'mandys' )
        )
    );

    /** 
     * Settings for customizing the phone number
     */
    $wp_customize->add_setting(
      'phone_number', array(
          'default'   => '(021) 689-0289',
          'transport' => 'refresh',
      )  
    );

    $wp_customize->add_control(
        'physical_address_control', array(
            'label'    => __( 'Physical Address', 'mandys' ),
            'section'  => 'contact_information_section',
            'settings' => 'physical_address',
            'type'     => 'textarea',
        )
        );

    /** 
     * Settings for customizing the phone number
     */
    $wp_customize->add_setting(
        'physical_address', array(
            'default'   => '23 Main Road, Mowbray, Cape Town, 7700',
            'transport' => 'refresh',
        )  
      );

    $wp_customize->add_control(
        'phone_number_control', array(
            'label'    => __( 'Phone Number', 'mandys' ),
            'section'  => 'contact_information_section',
            'settings' => 'phone_number',
            'type'     => 'text',
        )
        );

    /** 
     * Settings for customizing the email address
     */
        $wp_customize->add_setting(
          'email_address', array(
              'default'   => 'mandys@mandys.co.za',
              'transport' => 'refresh',
          )  
        );
    
        $wp_customize->add_control(
            'email_address_control', array(
                'label'    => __( 'Email Address', 'mandys' ),
                'section'  => 'contact_information_section',
                'settings' => 'email_address',
                'type'     => 'text',
            )
            );

    /** 
     * Creating a section for the footer that can be customised
     */
        $wp_customize->add_section(
            'footer_section', array(
                'title' => __( 'Footer', 'mandys' )
            )
        );
    
    /** 
     * Settings for customizing the copyright
     */
        $wp_customize->add_setting(
            'copyright', array(
                'default'   => 'Mandy\'s Hair Salon',
                'transport' => 'refresh',
            )  
        );
    
        $wp_customize->add_control(
            'copyright_control', array(
                'label'    => __( 'Copyright', 'mandys' ),
                'section'  => 'footer_section',
                'settings' => 'copyright',
                'type'     => 'text',
            )
            );
    
    /** 
     * Settings for customizing the first social media
     */
        $wp_customize->add_setting(
            'social_media_one', array(
                'default'   => 'Twitter',
                'transport' => 'refresh',
            )  
        );
    
        $wp_customize->add_control(
            'social_media_one_control', array(
                'label'    => __( 'Social Media #1', 'mandys' ),
                'section'  => 'footer_section',
                'settings' => 'social_media_one',
                'type'     => 'text',
            )
            );
    
        /** 
         * Settings for customizing the second social media
         */
            $wp_customize->add_setting(
                'social_media_two', array(
                    'default'   => 'Instagram',
                    'transport' => 'refresh',
                )  
            );
        
            $wp_customize->add_control(
                'social_media_two_control', array(
                    'label'    => __( 'Social Media #2', 'mandys' ),
                    'section'  => 'footer_section',
                    'settings' => 'social_media_two',
                    'type'     => 'text',
                )
                );
    
            /** 
             * Settings for customizing the third social media
             */
                $wp_customize->add_setting(
                    'social_media_three', array(
                        'default'   => 'Facebook',
                        'transport' => 'refresh',
                    )  
                );
            
                $wp_customize->add_control(
                    'social_media_three_control', array(
                        'label'    => __( 'Social Media #3', 'mandys' ),
                        'section'  => 'footer_section',
                        'settings' => 'social_media_three',
                        'type'     => 'text',
                    )
                    );
}
add_action( 'customize_register', 'customize_mandys' );

/** 
 * The front page navbaris different from other pages
 */
function setNavBar()
{
    if ( is_front_page() ) : ?>
    
   
   <div class="navbar navbar-default">
     <div class="container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
          <?php the_custom_logo(); ?>
        </a>
       </div>
        <?php

        wp_nav_menu(
            array(
            'theme_location' => 'navBar',
            'menu_id'        => 'menu-primary-menu'
            )
        );
        ?>
     </div>
   </div>

   <?php else: ?>
   
   <div class="navbar navbar-default" style="background-color:white">
     <div class="container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
          <?php the_custom_logo(); ?>
        </a>
       </div>
        <?php

        wp_nav_menu(
            array(
            'theme_location' => 'navBar',
            'menu_id'        => 'menu-primary-menu'
            )
        );
        ?>
     </div>
   </div>   

    <?php endif; 
}