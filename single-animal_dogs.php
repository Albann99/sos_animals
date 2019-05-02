<?php
/**
 * The template for displaying a single Portfolio post.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main col-md-9" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content-animal_dogs', 'single' ); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<aside class="col-md-3">
				<?php
					if ($client = get_post_meta(get_the_ID(), 'client', true)) {
						printf(__('<div class="client">Client: %s</div>', 'understrap'), $client);
					}
				?>

				<div class="dog-info">
					<p><?php
						the_terms($post->ID, 'animal_storlek',__('Storlek: ', 'understrap')); ?></p>
						
					<p><?php __('Ålder:', 'understrap'); ?> <?php the_field('alder'); ?></p>
					<p>Kön: <?php the_field('kon'); ?></p>
					<p>Mankhöjd: <?php the_field('mankhojd'); ?></p>
					<p>Vikt: <?php the_field('vikt'); ?></p>
					<?php if( get_field('adopterad') ): ?>
					<p>Adopterad: <?php the_field('adopterad'); ?></p>
          			<?php endif; ?>
				</div><!-- /.branch -->
			</aside>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->
