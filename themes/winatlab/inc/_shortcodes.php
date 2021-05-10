<?php
defined( 'ABSPATH' ) || exit;

/*
 * Contact Form 7
 * Create Shortcode Image post
 */
add_action( 'wpcf7_init', 'custom_add_form_tag_image' );
function custom_add_form_tag_image() {
    wpcf7_add_form_tag( 'image', 'custom_image_form_tag_handler' );
}
function custom_image_form_tag_handler( $tag ) {

    $out = get_the_post_thumbnail_url(11);

    /*
     * return html
     */
    return $out;
}
