<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

/**
 * Deactive Gutenberg on Page post type
 *
 * @return object
 */
add_filter( 'use_block_editor_for_post_type', function( $current_status, $post_type ) {
    if ( 'page' === $post_type ) return false;
    return $current_status;
}, 10, 2 );
