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
				<div class="dog-info">

					<h2><?php _e('Dog info', 'understrap'); ?></h2>
					<br>

					<?php if(get_field('animal_storlek')): ?>
						<p><?php _e('Storlek:', 'understrap'); ?> <?php $storlek = get_the_term_list( $post->ID, 'animal_storlek'); echo strip_tags($storlek); ?> cm </p>
					<?php endif; ?>

					<?php if(get_field('alder')): ?>
					<p><?php _e('Ålder:', 'understrap'); ?> <?php the_field('alder'); ?></p>
					<?php endif; ?>

					<?php if(get_field('kon')): ?>
					<p><?php _e('Kön:', 'understrap'); ?> <?php the_field('kon'); ?></p>
					<?php endif; ?>

					<?php if(get_field('mankhojd') ): ?>
					<p><?php _e('Mankhöjd:', 'understrap'); ?> <?php the_field('mankhojd'); ?> cm </p>
					<?php endif; ?>

					<?php if(get_field('vikt') ): ?>
					<p><?php _e('Vikt:', 'understrap'); ?> <?php the_field('vikt'); ?> kg </p>
					<?php endif; ?>

					<p><?php _e('Finns i:', 'understrap'); ?> <?php $land = get_the_term_list( $post->ID, 'animal_land'); echo strip_tags($land); ?></p>

					<?php if(get_field('adopterad')): ?>
					<p><?php _e('Adopterad:', 'understrap'); ?> <?php the_field('adopterad'); ?></p>
          			<?php endif; ?>
          			
			</aside>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->


<?php 

get_footer();