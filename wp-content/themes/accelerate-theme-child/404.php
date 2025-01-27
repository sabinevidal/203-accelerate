<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>


	<div id="primary" class="lost-content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title">Oh dear, </h1>
			</header>

			<div class="page-content">
				<div class="lost-text">
					<p> Looks like you took a wrong turn somewhere.</p>
					<p> Why don't you head back to solid ground?</p>
				</div>
                <a class="button" href="<?php echo site_url('/case-studies/') ?>">Solid Ground</a>	
			</div><!-- .page-content -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php

get_footer();
