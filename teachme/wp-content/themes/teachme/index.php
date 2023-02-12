<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TeachMe
 */

get_header();
$publications = new WP_Query([
  'post_type' => 'post',
  'posts_per_page' => 10,
  'orderby' => 'date',
  'order' => 'DESC',
  'paged' => 1,
]);
?>

	<main id="primary" class="site-main">

		<?php
		if ( $publications->have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<div class="container">
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</div>
				</header>

				<?php
			endif; ?>
			<div class="main_content">
				<div class="container">
					<div class="archive_loop">
			<?php

			/* Start the Loop */
			while ($publications->have_posts()):
				$publications->the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		wp_reset_postdata(); ?>

				</div>
				<div class="btn__wrapper">
				  <a href="#!" class="btn btn__primary" id="load-more">Load more</a>
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
