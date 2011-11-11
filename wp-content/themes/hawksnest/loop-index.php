<?php

// The Query
query_posts(array('category_name' => 'birdfeeder', 'posts_per_page' => 10 ));

// The Loop
while ( have_posts() ) : the_post();
	echo '<li>';
	the_title();
	echo '</li>';
endwhile;

// Reset Query
wp_reset_query();

?>