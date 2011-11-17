<?php

$content_width = "500px";

add_theme_support( 'menus' );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 80, 80 ); // 50 pixels wide by 50 pixels tall, box resize mode

// Add Read More link to manual excerpts.
//add_action('the_excerpt', 'child_add_manual_read_more', 20);
//function child_add_manual_read_more($excerpt) {
 
//    if ( has_excerpt() ) {
 
        // Trim the newline.
//        $excerpt = rtrim($excerpt);
 
        // Check for the <p> tags
//        if ( '<p>' == substr($excerpt, 0, 3) && '</p>' == substr($excerpt, -4) )
//            $excerpt = sprintf( '<p>%s <a href="%s" rel="nofollow" class="morelink">Read More ...</a></p>', substr($excerpt, 3, -4), get_permalink() );
//    }
//    return $excerpt;
//}

// Include all the Shortcodes

foreach (glob("wp-content/themes/hawksnest/shortcodes/*.php") as $filename)
{
    include $filename;
}

// Exclude stuff from stuff

add_filter( 'getarchives_where', 'customarchives_where' );
add_filter( 'getarchives_join', 'customarchives_join' );

function customarchives_join( $x ) {

	global $wpdb;

	return $x . " INNER JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id) INNER JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)";

}

function customarchives_where( $x ) {

	global $wpdb;

	$exclude = '2,3,4,5,6,7'; // category id to exclude

	return $x . " AND $wpdb->term_taxonomy.taxonomy = 'category' AND $wpdb->term_taxonomy.term_id NOT IN ($exclude)";

}




?>