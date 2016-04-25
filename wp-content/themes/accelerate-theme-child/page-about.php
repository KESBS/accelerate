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
		<?php endwhile; ?>
				
			</div><!-- .container -->
	</section><!-- .home-page -->
	
	<div class ="services">
		<h5>OUR SERVICES</h5>
		<?php echo get_field("our_services"); ?>
			
		<ul class = "about-page-services">	
		<?php query_posts('post_type=services&order=ASC'); ?>
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
		 	<?php endwhile; ?>
		 <?php wp_reset_query(); ?>
    </div>
	
<div class="interested">
	<?php echo get_field("contact_us");
	?>
	<a class="button" href="<?php echo home_url(); ?>/about">Contact Us</a>	
	
<?php get_footer(); ?>