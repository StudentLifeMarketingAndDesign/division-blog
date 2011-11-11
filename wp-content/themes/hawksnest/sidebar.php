<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

				<div id="upcoming_events_label"></div>
				
<?php

// The Query
query_posts(array('category_name' => 'event', 'posts_per_page' => 10 ));

// The Loop
while ( have_posts() ) : the_post();
	echo '<li>';
	the_title();
	echo '</li>';
endwhile;

// Reset Query
wp_reset_query();

?>
				
				<div id="facebook_label"></div>
				
				<div class="fb-like-box" data-href="http://www.facebook.com/iowahawksnest" data-width="292" data-colorscheme="dark" data-show-faces="true" data-border-color="#303030" data-stream="false" data-header="false"></div>
				
				<div id="twitter_label"></div>

				<div id="archive_label"></div>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>

			

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>
