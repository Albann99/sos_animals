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

					<h2>Dog info</h2>
					<br>

					<?php if(get_field('animal_storlek')): ?>
						<p><?php the_field('storlek_dog'); ?>: <?php $storlek = get_the_term_list( $post->ID,'animal_storlek'); echo strip_tags($storlek); ?> cm </p>
					<?php endif; ?>

					<?php if(get_field('alder')): ?>
					<p><?php the_field('alder_dog'); ?>: <?php the_field('alder'); ?></p>
					<?php endif; ?>

					<?php if(get_field('kon')): ?>
					<p><?php the_field('kon_dog'); ?>: <?php the_field('kon'); ?></p>
					<?php endif; ?>

					<?php if(get_field('mankhojd') ): ?>
					<p><?php the_field('mankhojd_dog'); ?>: <?php the_field('mankhojd'); ?> cm </p>
					<?php endif; ?>

					<?php if(get_field('vikt') ): ?>
					<p><?php the_field('vikt_dog'); ?>: <?php the_field('vikt'); ?> kg </p>
					<?php endif; ?>

					<p><?php the_field('finns_i_dog'); ?>: <?php $land = get_the_term_list( $post->ID, 'animal_land'); echo strip_tags($land); ?></p>

					<?php if(get_field('adopterad')): ?>
					<p><?php the_field('adopterad_dog'); ?>: <?php the_field('adopterad'); ?></p>
          			<?php endif; ?>
          			
			</aside>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<style>
.dog-info {
	background-color:black;
	color:white;
	padding:20px;
}

@media only screen and (max-width: 600px) {
.dog-info:before {
    content: .entry-content;
    position: absolute;
}
	}
</style>
