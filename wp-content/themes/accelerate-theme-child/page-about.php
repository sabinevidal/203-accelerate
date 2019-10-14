<?php
/**
 * The template for displaying the about page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="about-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="about-hero">
					<?php the_content(); ?>
				</div>	
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
</div><!-- #primary -->

<section class="about-page our-services">
	<div class="our-services">
		<div class="services-header">
			<h4>Our Services</h4>
			<p>We take pride in our clients and the content create for them. <br>Here’s a brief overview of our offered services.</p>
		</div>
		<ul class="about-page-services">
				<?php query_posts('posts_per_page=4&post_type=services-offered'); ?>
				<?php while ( have_posts() ) : the_post(); 
					$description = get_field('description');
					$image = get_field('image');
					$size = "full";
				?>
				<li class="individual-service">
					<div class="service-container">
					<div class="service-image"><?php echo wp_get_attachment_image($image, $size); ?></div>
						<div class="about-text">
							<h2><?php the_title(); ?></h2>
							<p><?php echo $description ?></p>
						</div>
						 
					</div>
				</li>
				<?php endwhile; ?>
					<?php wp_reset_query(); ?>  
		</ul>
	</div>
</section>


<section class="about-contact">
	<h2> Interested in working with us?</h2>
	<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
</section>







<?php get_footer(); ?>
