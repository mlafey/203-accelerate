<?php
/**
 * The template for the about pages
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
	<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>

	<section class="our-services">
		<?php while ( have_posts() ) : the_post();
			$about_header_img = get_field('about_header_img');
			$size = "full";
			$service_title = get_field('service_title');
			$service_overview = get_field('service_overview');
		?>

		<?php if($about_header_img){
			echo wp_get_attachment_image( $about_header_img, $size );
		} ?>
		<h5><?php echo $service_title; ?></h5>
		<?php echo $service_overview; ?>		
	</section>

	<?php endwhile; ?>	

			<ul class="about-services">
				<?php query_posts('posts_per_page=10&post_type=service_type'); ?>
					<?php while ( have_posts() ) : the_post();
							$service_image = get_field('service_image');
							$size = "small";
					?>
					<li class="individual-services">
						<div class="service-details">
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
						</div>	
						<div class=individual-service-image >
							<?php echo wp_get_attachment_image($service_image, $size); ?>
						</div>
					</li>	
				<?php endwhile; ?>	
			</ul>
		</div>
	</section>

	<section class="contact-section">
	<a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
	</section>	

	</div><!-- .main-content -->
</div><!-- #primary -->

<?php get_footer(); ?>
