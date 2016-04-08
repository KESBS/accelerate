<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Accelerate
 * @since Accelerate 1.0
 */

get_header(); ?>

	<div id="404-page" 
		
				<div class="404-content">
					<img src="http://localhost:8888/Accelerate/wp-content/uploads/2016/04/404-map.png" width="193" height="210" alt="map">
				<div class="404-message">
					<h2><?php _e( 'Whoops, Took a Wrong Turn...' ); ?></h2>
					<p><?php _e( 'Sorry, this page no longer exists, never existed or has been moved.  We feel like complete jerks for totally misleading you. </br> Feel free to take a look around our <a href="http://localhost:8888/Accelerate/blog/"><span style="color: #45ac9d"> blog </span></a> or some of our featured <a href="http://localhost:8888/Accelerate/case-studies/"><span style="color: #45ac9d"> work. </span></a>'); ?></p>
					
				</div><!-- .404-message>	
				
			</div><!-- .404-content -->

	</div><!-- #404-page -->
	
<?php get_footer(); ?>