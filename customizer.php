<?php
/**
* financial_empowerment Theme Customizer
*
* @package financial_empowerment
*/

/**
* Add postMessage support for site title and description for the Theme Customizer.
*
* @param WP_Customize_Manager $wp_customize Theme Customizer object.
*/
function financial_empowerment_customize_register( $wp_customize ) {

    $wp_customize->add_section(
        'financial_empowerment_social_media',
        array(
            'title'      => __( 'Social Media', 'financial_empowerment' ),
            'capability' => 'edit_theme_options',
        )
    );
        //Add facebook to wordpress customize
    $wp_customize->add_setting(
        'financial_empowerment_facebook_url',
        array(
            'default'   => 'https://www.facebook.com',
            'transport' => 'refresh',
        )
    );
        //add twitter to wordpress customize
    $wp_customize->add_setting(
        'financial_empowerment_twitter_url',
        array(
            'default'   => 'https://www.twitter.com',
            'transport' => 'refresh',
        )
    );
    //add instagram to wordpress  customize
    $wp_customize->add_setting(
        'financial_empowerment_instagram_url',
        array(
            'default'   => 'https://www.instagram.com',
            'transport' => 'refresh',
        )
    );
        
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'financial_empowerment_facebook_url',
            array(
                'label'   => __( 'Facebook', 'financial_empowerment' ),
                'type'    => 'text',
                'section' => 'financial_empowerment_social_media',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'financial_empowerment_twitter_url',
            array(
                'label'   => __( 'Twitter', 'financial_empowerment' ),
                'type'    => 'text',
                'section' => 'financial_empowerment_social_media',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'financial_empowerment_instagram_url',
            array(
                'label'   => __( 'Instagram', 'financial_empowerment' ),
                'type'    => 'text',
                'section' => 'financial_empowerment_social_media',
            )
        )
    );
    



    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial( 'blogname', array(
            'selector'        => '.site-title a',
            'render_callback' => 'financial_empowerment_customize_partial_blogname',
        ) );
        $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
            'selector'        => '.site-description',
            'render_callback' => 'financial_empowerment_customize_partial_blogdescription',
        ) );
    }
}
add_action( 'customize_register', 'financial_empowerment_customize_register' );

/**
* Render the site title for the selective refresh partial.
*
* @return void
*/
function financial_empowerment_customize_partial_blogname() {
    bloginfo( 'name' );
}

/**
* Render the site tagline for the selective refresh partial.
*
* @return void
*/
function financial_empowerment_customize_partial_blogdescription() {
    bloginfo( 'description' );
}

/**
* Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
*/
function financial_empowerment_customize_preview_js() {
    wp_enqueue_script( 'financial_empowerment-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'financial_empowerment_customize_preview_js' );