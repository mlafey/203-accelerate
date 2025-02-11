<?php
/**
 * The template for displaying case studies
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">

            <?php while ( have_posts() ) : the_post(); 
            	$services = get_field('services');		
                $website = get_field('site_link');
                $image_1 = get_field('image_1');
                $size = "full";
            ?>
                <article class="case-studies">
		            <aside class="case-study-sidebar">
                        <h2><?php the_title(); ?></h2>
                        <h5><?php echo $services; ?></h5>
                        <h6><?php echo $client; ?></h6>
                        <?php the_content(); ?>
                        <p class="read-more-link"><a href="<?php the_permalink(); ?>">View Project > </a></p>
		            </aside>
    
                <div class="case-study-images">
                    <a href="<?php the_permalink(); ?>"><?php if($image_1){
    			    echo wp_get_attachment_image( $image_1, $size );
	        	    } ?>
                </div>

        	<?php endwhile; // end of the loop. ?>

        </div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>