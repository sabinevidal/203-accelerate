<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">

            <?php while ( have_posts() ) : the_post(); 
              	$description = get_field('description');
                $image = get_field('image');
                $size = "full";
            ?>
            <section class="service-container">
                <div class="service-text">
                    <h2><?php the_title(); ?></h2>
                    <h5><?php echo $description; ?></h5>
                </div>
                <figure class="service-image">
                    <?php if($image) {
                        echo wp_get_attachment_image( $image, $size );
                    } ?> 
                </figure>
                </section>
                <?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

    </div><!-- #primary -->

<?php get_footer(); ?> 
