<?php

// The Query
query_posts(array('category_name' => 'featured', 'posts_per_page' => 1 ));

// The Loop
while ( have_posts() ) : the_post();
?>
<div id="featured"><div id="featured_post">
<h2 class="entry-title">

	<a href="<?php the_permalink(); ?>">
	<?php the_title();?>
	</a>
</h2>
	<div class="entry-content">
				<?php the_excerpt();?>
				
	</div><!-- .entry-content -->
	</div><!-- featured_post -->
	</div><!-- featured -->
<?php
endwhile;

// Reset Query
wp_reset_query();

// The Query
query_posts(array('category_name' => 'birdfeeder', 'posts_per_page' => 10 ));

// The Loop
while ( have_posts() ) : the_post();
?>
<h2 class="entry-title">

	<a href="<?php the_permalink(); ?>">
	<?php the_title();?>
	</a>
</h2>
	<div class="entry-content">
				<?php the_excerpt();?>
				
	</div><!-- .entry-content -->
<?php
endwhile;

// Reset Query
wp_reset_query();

?>