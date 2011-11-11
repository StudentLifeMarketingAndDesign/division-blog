<?php

// Add Read More link to manual excerpts.
add_action('the_excerpt', 'child_add_manual_read_more', 20);
function child_add_manual_read_more($excerpt) {
 
    if ( has_excerpt() ) {
 
        // Trim the newline.
        $excerpt = rtrim($excerpt);
 
        // Check for the <p> tags
        if ( '<p>' == substr($excerpt, 0, 3) && '</p>' == substr($excerpt, -4) )
            $excerpt = sprintf( '<p>%s <a href="%s" rel="nofollow" class="morelink">Read More ...</a></p>', substr($excerpt, 3, -4), get_permalink() );
    }
    return $excerpt;
}

?>