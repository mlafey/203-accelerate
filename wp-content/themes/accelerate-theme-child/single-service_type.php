<?php
/**
 * The service custom post type

 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			
	<?php while ( have_posts() ) : the_post(); 
		$service_image = get_field('service_image');
		$size = "full";
	?>

	<section class="services">
			<aside class="service-sidebar">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</aside>
			
			<figure class="service-image">
				<?php if($service_image){
				echo wp_get_attachment_image( $service_image, $size );
				} ?>
			</figure>
	</section>

	<?php endwhile; ?>

		</div><!-- .main-content -->

	</div><!-- #primary -->


<?php get_footer(); ?>
