<?php
/**
 * The template for displaying the About page
 
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */



get_header(); ?>

	<section class="home-page">
			<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
			</div>
		<?php endwhile ?>
			</div><!-- .container -->
	</section><!-- .about-page -->
	
	<div class ="services">
		<ul class = "about-page-services">	
		<?php query_posts('post_type=services'); ?>
			<?php while ( have_posts() ) : the_post (); 
				$service_description = get_field('service_description');
				$icon = get_field('icon'); 
			?>
			
			<h4><?php the_title(); ?></h4>
			<p><?php echo $service_description?></p>
			</ul>
	   
		
	<div class="services-icons">
  	  	<?php if($icon) { 
  			 echo wp_get_attachment_image( $icon, $size );
  			 } ?>
	</div>	
	
		 <?php endwhile ?>
		 <?php wp_reset_query(); ?>
    

	</div>

		
<?php get_footer(); ?>