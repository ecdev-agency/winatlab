<?php
defined( 'ABSPATH' ) || exit;
/**
 * winatlab Theme Customizer
 *
 * @package winatlab
 */

/**
 * Customizer
 * Logo
 * @customize_register action
 */
add_action('customize_register', function($wp_customize){

    $wp_customize->add_section(
        'my_parameters',
        array(
            'title'         => __( 'Logos', 'winatlab' ),
            'description'   => __( 'Upload a logo', 'winatlab' ),
            'priority'      => 11,
        )
    );

    $wp_customize->add_setting('logo');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo',
            array(
                'label'     => __( 'Logo Header', 'winatlab' ),
                'section'   => 'my_parameters',
                'settings'  => 'logo'
            )
        )
    );

    $wp_customize->add_setting('logo_footer');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo_footer',
            array(
                'label'     => __( 'Logo Footer', 'winatlab' ),
                'section'   => 'my_parameters',
                'settings'  => 'logo_footer'
            )
        )
    );

});
