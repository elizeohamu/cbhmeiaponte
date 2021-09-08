<?php

function meiaponte_customizer( $meiaponte_customize ){ 

    //
    // Header E-mail
    //
    $meiaponte_customize->add_section(
        'sec_header', array(
            'title' => __('Header E-mail', 'meiaponte'),
            'description' => __('Header E-mail', 'meiaponte')
        )
    );
    $meiaponte_customize->add_setting(
        'set_header_email', array(
            'type' => 'theme_mod',
            'default' => 'E-mail',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $meiaponte_customize->add_control(
        'set_header_email', array(
            'label' => __('E-mail', 'meiaponte'),
            'description' => __('Type your e-mail', 'meiaponte'),
            'section' => 'sec_header',
            'type' => 'text'
        )
    );

    //
    // Banner
    //
    $meiaponte_customize->add_section(
        'sec_banner', array(
            'title' => __('Banner', 'meiaponte'),
            'description' => __('Banner', 'meiaponte')
        )
    );
    $meiaponte_customize->add_setting(
        'set_banner', array(
            'type' => 'theme_mod',
            'default' => 'Shortcode',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $meiaponte_customize->add_control(
        'set_banner', array(
            'label' => __('Shortcode', 'meiaponte'),
            'description' => __('Insert your shortcode', 'meiaponte'),
            'section' => 'sec_banner',
            'type' => 'text'
        )
    );


    //
    // Footer Contact
    //
    $meiaponte_customize->add_section(
        'sec_contact', array(
            'title' => __('Footer Contact', 'meiaponte'),
            'description' => __('Footer Contact Section', 'meiaponte')
        )
    );
    //Title
    $meiaponte_customize->add_setting(
        'set_contact_title', array(
            'type' => 'theme_mod',
            'default' => 'Title',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $meiaponte_customize->add_control(
        'set_contact_title', array(
            'label' => __('Title', 'meiaponte'),
            'description' => __('Type your title', 'meiaponte'),
            'section' => 'sec_contact',
            'type' => 'text'
        )
    );
    //Text
    $meiaponte_customize->add_setting(
        'set_contact_text', array(
            'type' => 'theme_mod',
            'default' => 'Text',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $meiaponte_customize->add_control(
        'set_contact_text', array(
            'label' => __('Text', 'meiaponte'),
            'description' => __('Type your text', 'meiaponte'),
            'section' => 'sec_contact',
            'type' => 'textarea'
        )
    );
    //Logo
    $meiaponte_customize->add_setting(
        'set_logo', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $meiaponte_customize->add_control( new WP_Customize_Image_Control( $meiaponte_customize, 'logo_control', array(
        'label' => __('Upload Logo', 'meiaponte'),
        'priority' => 1,
        'section' => 'sec_contact',
        'settings' => 'set_logo',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'meiaponte'),
                    'remove' => __('Remove Logo', 'meiaponte'),
                    'change' => __('Change Logo', 'meiaponte'),
                    )
        ))
    );
    //Social
    $meiaponte_customize->add_setting(
        'set_facebook_link', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
            'transport' => 'refresh'
        )
    );
    $meiaponte_customize->add_control(
        'set_facebook_link', array(
            'label' => __('Link', 'meiaponte'),
            'description' => __('Type your Facebook link', 'meiaponte'),
            'section' => 'sec_contact',
            'type' => 'text'
        )
    );

    $meiaponte_customize->add_setting(
        'set_instagram_link', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
            'transport' => 'refresh'
        )
    );
    $meiaponte_customize->add_control(
        'set_instagram_link', array(
            'label' => __('Link', 'meiaponte'),
            'description' => __('Type your Instagram link', 'meiaponte'),
            'section' => 'sec_contact',
            'type' => 'text'
        )
    );

    $meiaponte_customize->add_setting(
        'set_twitter_link', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
            'transport' => 'refresh'
        )
    );
    $meiaponte_customize->add_control(
        'set_twitter_link', array(
            'label' => __('Link', 'meiaponte'),
            'description' => __('Type your Twitter link', 'meiaponte'),
            'section' => 'sec_contact',
            'type' => 'text'
        )
    );

    $meiaponte_customize->add_setting(
        'set_linkedin_link', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
            'transport' => 'refresh'
        )
    );
    $meiaponte_customize->add_control(
        'set_linkedin_link', array(
            'label' => __('Link', 'meiaponte'),
            'description' => __('Type your Linkedin link', 'meiaponte'),
            'section' => 'sec_contact',
            'type' => 'text'
        )
    );

    //
    // Utilities Sectopn
    //
    $meiaponte_customize->add_section(
        'sec_utilities', array(
            'title' => __('Section Utilities', 'meiaponte'),
            'description' => __('Utilities Section', 'meiaponte')
        )
    );
    //Utilities 1
    $meiaponte_customize->add_setting(
        'set_utilities_text_1', array(
            'type' => 'theme_mod',
            'default' => 'Text',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $meiaponte_customize->add_control(
        'set_utilities_text_1', array(
            'label' => __('Events', 'meiaponte'),
            'description' => __('Type your text', 'meiaponte'),
            'section' => 'sec_utilities',
            'type' => 'textarea'
        )
    );    
    $meiaponte_customize->add_setting(
        'set_utilities_link_1', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $meiaponte_customize->add_control(
        'set_utilities_link_1', array(
            'label' => __('Link for Events', 'meiaponte'),
            'description' => __('Type your link', 'meiaponte'),
            'section' => 'sec_utilities',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'meiaponte' ),
            )
        )
    );
    //Utilities 2
    $meiaponte_customize->add_setting(
        'set_utilities_text_2', array(
            'type' => 'theme_mod',
            'default' => 'Text',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $meiaponte_customize->add_control(
        'set_utilities_text_2', array(
            'label' => __('Events', 'meiaponte'),
            'description' => __('Type your text', 'meiaponte'),
            'section' => 'sec_utilities',
            'type' => 'textarea'
        )
    );    
    $meiaponte_customize->add_setting(
        'set_utilities_link_2', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $meiaponte_customize->add_control(
        'set_utilities_link_2', array(
            'label' => __('Link for Events', 'meiaponte'),
            'description' => __('Type your link', 'meiaponte'),
            'section' => 'sec_utilities',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'meiaponte' ),
            )
        )
    );
    //Utilities 3
    $meiaponte_customize->add_setting(
        'set_utilities_text_3', array(
            'type' => 'theme_mod',
            'default' => 'Text',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $meiaponte_customize->add_control(
        'set_utilities_text_3', array(
            'label' => __('Events', 'meiaponte'),
            'description' => __('Type your text', 'meiaponte'),
            'section' => 'sec_utilities',
            'type' => 'textarea'
        )
    );    
    $meiaponte_customize->add_setting(
        'set_utilities_link_3', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $meiaponte_customize->add_control(
        'set_utilities_link_3', array(
            'label' => __('Link for Events', 'meiaponte'),
            'description' => __('Type your link', 'meiaponte'),
            'section' => 'sec_utilities',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'meiaponte' ),
            )
        )
    );
    
    //
    // About
    //
    $meiaponte_customize->add_section(
        'sec_about', array(
            'title' => __('Section: About', 'meiaponte'),
            'description' => __('About Section', 'meiaponte')
        )
    );
    $meiaponte_customize->add_setting(
        'set_about_text', array(
            'type' => 'theme_mod',
            'default' => 'Text',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $meiaponte_customize->add_control(
        'set_about_text', array(
            'label' => __('Text', 'meiaponte'),
            'description' => __('Type your text', 'meiaponte'),
            'section' => 'sec_about',
            'type' => 'textarea'
        )
    ); 
    $meiaponte_customize->add_setting(
        'set_about_link', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $meiaponte_customize->add_control(
        'set_about_link', array(
            'label' => __('Link', 'meiaponte'),
            'description' => __('Type your link', 'meiaponte'),
            'section' => 'sec_about',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'meiaponte' ),
            )
        )
    );
    $meiaponte_customize->add_setting(
        'set_about_img', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $meiaponte_customize->add_control( new WP_Customize_Image_Control( $meiaponte_customize, 'image_control', array(
        'label' => __('Upload Image', 'meiaponte'),        
        'section' => 'sec_about',
        'settings' => 'set_about_img',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Image', 'meiaponte'),
                    'remove' => __('Remove Image', 'meiaponte'),
                    'change' => __('Change Image', 'meiaponte'),
                    )
        ))
    );

    //
    // Comites
    //
    $meiaponte_customize->add_section(
        'sec_comites', array(
            'title' => __('Section: Comitês', 'meiaponte'),
            'description' => __('Comitês Section', 'meiaponte')
        )
    );
    //Comite 1
    $meiaponte_customize->add_setting(
        'set_comites_title_1', array(
            'type' => 'theme_mod',
            'default' => 'Title 1',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $meiaponte_customize->add_control(
        'set_comites_title_1', array(
            'label' => __('Title 1', 'meiaponte'),
            'description' => __('Type your title', 'meiaponte'),
            'section' => 'sec_comites',
            'type' => 'text'
        )
    );
    $meiaponte_customize->add_setting(
        'set_comites_link_1', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $meiaponte_customize->add_control(
        'set_comites_link_1', array(
            'label' => __('Link for Logo 1', 'meiaponte'),
            'description' => __('Type your link', 'meiaponte'),
            'section' => 'sec_comites',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'meiaponte' ),
            )
        )
    );
    $meiaponte_customize->add_setting(
        'set_comites_img_1', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $meiaponte_customize->add_control( new WP_Customize_Image_Control( $meiaponte_customize, 'image_comite_1', array(
        'label' => __('Upload Logo 1', 'meiaponte'),        
        'section' => 'sec_comites',
        'settings' => 'set_comites_img_1',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'meiaponte'),
                    'remove' => __('Remove Logo', 'meiaponte'),
                    'change' => __('Change Logo', 'meiaponte'),
                    )
        ))
    );
    //Comite 2
    $meiaponte_customize->add_setting(
        'set_comites_title_2', array(
            'type' => 'theme_mod',
            'default' => 'Title 2',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $meiaponte_customize->add_control(
        'set_comites_title_2', array(
            'label' => __('Title 2', 'meiaponte'),
            'description' => __('Type your title', 'meiaponte'),
            'section' => 'sec_comites',
            'type' => 'text'
        )
    );
    $meiaponte_customize->add_setting(
        'set_comites_link_2', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $meiaponte_customize->add_control(
        'set_comites_link_2', array(
            'label' => __('Link for Logo 2', 'meiaponte'),
            'description' => __('Type your link', 'meiaponte'),
            'section' => 'sec_comites',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'meiaponte' ),
            )
        )
    );
    $meiaponte_customize->add_setting(
        'set_comites_img_2', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $meiaponte_customize->add_control( new WP_Customize_Image_Control( $meiaponte_customize, 'image_comite_2', array(
        'label' => __('Upload Logo 2', 'meiaponte'),        
        'section' => 'sec_comites',
        'settings' => 'set_comites_img_2',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'meiaponte'),
                    'remove' => __('Remove Logo', 'meiaponte'),
                    'change' => __('Change Logo', 'meiaponte'),
                    )
        ))
    );
    //Comite 3
    $meiaponte_customize->add_setting(
        'set_comites_title_3', array(
            'type' => 'theme_mod',
            'default' => 'Title 3',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $meiaponte_customize->add_control(
        'set_comites_title_3', array(
            'label' => __('Title 3', 'meiaponte'),
            'description' => __('Type your title', 'meiaponte'),
            'section' => 'sec_comites',
            'type' => 'text'
        )
    );
    $meiaponte_customize->add_setting(
        'set_comites_link_3', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $meiaponte_customize->add_control(
        'set_comites_link_3', array(
            'label' => __('Link for Logo 3', 'meiaponte'),
            'description' => __('Type your link', 'meiaponte'),
            'section' => 'sec_comites',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'meiaponte' ),
            )
        )
    );
    $meiaponte_customize->add_setting(
        'set_comites_img_3', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $meiaponte_customize->add_control( new WP_Customize_Image_Control( $meiaponte_customize, 'image_comite_3', array(
        'label' => __('Upload Logo 3', 'meiaponte'),        
        'section' => 'sec_comites',
        'settings' => 'set_comites_img_3',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'meiaponte'),
                    'remove' => __('Remove Logo', 'meiaponte'),
                    'change' => __('Change Logo', 'meiaponte'),
                    )
        ))
    );

    //
    // Partners
    //
    $meiaponte_customize->add_section(
        'sec_partners', array(
            'title' => __('Section: Partners', 'meiaponte'),
            'description' => __('Partners Section', 'meiaponte')
        )
    );

    $meiaponte_customize->add_setting(
        'set_partners_img_1', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $meiaponte_customize->add_control( new WP_Customize_Image_Control( $meiaponte_customize, 'image_partners_1', array(
        'label' => __('Upload Logo 1', 'meiaponte'),        
        'section' => 'sec_partners',
        'settings' => 'set_partners_img_1',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'meiaponte'),
                    'remove' => __('Remove Logo', 'meiaponte'),
                    'change' => __('Change Logo', 'meiaponte'),
                    )
        ))
    );

    $meiaponte_customize->add_setting(
        'set_partners_img_2', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $meiaponte_customize->add_control( new WP_Customize_Image_Control( $meiaponte_customize, 'image_partners_2', array(
        'label' => __('Upload Logo 2', 'meiaponte'),        
        'section' => 'sec_partners',
        'settings' => 'set_partners_img_2',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'meiaponte'),
                    'remove' => __('Remove Logo', 'meiaponte'),
                    'change' => __('Change Logo', 'meiaponte'),
                    )
        ))
    );
    $meiaponte_customize->add_setting(
        'set_partners_link', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $meiaponte_customize->add_control(
        'set_partners_link', array(
            'label' => __('Link for Page', 'meiaponte'),
            'description' => __('Type your link', 'meiaponte'),
            'section' => 'sec_partners',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'meiaponte' ),
            )
        )
    );

    //
    // News
    //
    $meiaponte_customize->add_section(
        'sec_news', array(
            'title' => __('News Link', 'meiaponte'),
            'description' => __('News Link', 'meiaponte')
        )
    );
    $meiaponte_customize->add_setting(
        'set_news_link', array(
            'type' => 'theme_mod',
            'default' => 'Link',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $meiaponte_customize->add_control(
        'set_news_link', array(
            'label' => __('Link', 'meiaponte'),
            'description' => __('Type your link', 'meiaponte'),
            'section' => 'sec_news',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'meiaponte' ),
            )
        )
    );
    
}

add_action( 'customize_register', 'meiaponte_customizer' );