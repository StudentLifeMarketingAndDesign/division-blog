<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

         			<div id="sidebar">
						<div id="sidebar_stuff">

				<div id="upcoming_events_label"></div>
				
<?php

$todaysDate = date('m/d/Y H:i:s');

// The Query
query_posts('showposts=5&category_name=event&meta_key=date%20(mm/dd/yy)&meta_compare=>=&meta_value=' . $todaysDate . '&orderby=meta_value&order=ASC');

// The Loop
while ( have_posts() ) : the_post();
	?>
	<li class="event">
	<h3 class="event_name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<div class="event_date"><?php the_excerpt(); ?></div>
	</li>
<?php endwhile;

// Reset Query
wp_reset_query();

?>
				
				<a href="mailto:hawks-nest@hawkeyesports.com "><div id="joinlist"></div></a>
				<div id="facebook_label"></div>
				
				<div class="fb-like-box" data-href="http://www.facebook.com/iowahawksnest" data-width="292" data-colorscheme="dark" data-show-faces="true" data-border-color="#303030" data-stream="false" data-header="false"></div>
				
				<div id="twitter_label"></div>
				
				<?php include 'twitter.php';
				twitter_messages("iowahawksnest"); ?>

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
						</div><!#-- sidebar_stuff -->
					</div><!-- #sidebar -->
