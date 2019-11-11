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

	<div id="primary" class="home-page hero-content">
		<div class="header-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
		</div><!-- #primary -->

	<div id="primary" class="site-content">
	<div class="main-content" role="main">
			<section class="our-services">
				<?php while ( have_posts() ) : the_post();
					$service_title = get_field('service_title');
					$service_overview = get_field('service_overview');
					$contact_text = get_field('contact_text');
				?>

					<h4><?php echo $service_title; ?></h4>
					<?php echo $service_overview; ?>		
				<?php endwhile; ?>	
			</section>

			<section class="services-container">
				<?php query_posts('posts_per_page=10&post_type=service_type'); ?>
				<?php while ( have_posts() ) : the_post();
				$service_image = get_field('service_image');
				$size = "medium";	
				?>

				<section class="individual-services">
					<div class="service-details">
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
					</div>	
									
					<div class=service-image >
						<?php echo wp_get_attachment_image($service_image, $size); ?>
</div>
				</section>
					
				<?php endwhile; ?>	
			</section>
		
			<section class="contact-section">
				<h3><?php echo $contact_text; ?></h3>
				<a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
			</section>

	</div>
	</div>

<?php get_footer(); ?>
