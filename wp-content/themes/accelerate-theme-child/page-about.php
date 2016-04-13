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
		<div class='homepage-hero'>	
			<div class="site-content">
		<a href="http://localhost:8888/Accelerate/'>Accelerate</a> is a strategy and marketing agency located in the heart of NYC.  Our goal is to build businesses by making our clients visible and making their customers smile.	
		</div>
		
			
			<?php while ( have_posts() ) : the_post(); ?>
				$service_description = get_field('service_description);
				$icon = get_field('icon')
				
				<h2><?php the_title(); ?></h2>
				<p><?php echo $service_description?></p>
    
	<div class="services-icons">
  	  	<?php if($icon) { 
  			 echo wp_get_attachment_image( $icon, $size );
  		 } ?>
    </div>	
				
	<section class="contact-us">
		<div class="interested"
		<h3><strong> Interested in working with us? </strong><a href="http://localhost:8888/Accelerate/contact-us/"><span style="background-color: #45ac9d;color: white; padding:10px 20px 10px;"> Contact Us </span></a></h3>
		
		</div>
		</section>
		
					
					<?php the_content(); ?>	
					
				
					
				
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>