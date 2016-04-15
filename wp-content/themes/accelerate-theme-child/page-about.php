<?php
/**
 * The template for displaying the About page
 
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */



get_header(); ?>

	<section class="about-page">
			<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content();?>
			</div>
				</div><!-- .container -->
				</section><!-- .about-page -->
	
	
			
		<?php while ( have_posts() ) : the_post();
				$service_description = get_field('service_description);
				$icon = get_field('icon');?>
				
					
		<ul class = "about-page-services">	
				<h4><?php the_title(); ?></h4>
				
				<p><?php echo $service_description?></p>
    	</ul>
		
	<div class="services-icons">
  	  	<?php if($icon) { 
  			 echo wp_get_attachment_image( $icon, $size );
  	
		 } ?>
	
    </div>	

	
				
			<?php endwhile; // end of the loop. ?>

		
<?php get_footer(); ?>