<?php
/**
 * Listify child theme.
 */

function listify_child_styles() {
    wp_enqueue_style( 'listify-child', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'listify_child_styles', 999 );

/** Place any new code below this line */

/**
 * Plugin Name: Listify - Custom Single Listing Hero Button
 */

function custom_listify_single_job_listing_actions_after() {
    global $post;
    
    $url = get_post_meta( $post->ID, ‘_company_website', true );
    
    echo '<a href="' . esc_url( $url ) . '" class="button”>Book A Room</a>';
}
add_filter( 'listify_single_job_listing_actions_after', 'custom_listify_single_job_listing_actions_after' );
