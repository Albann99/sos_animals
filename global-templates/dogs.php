<?php
/**
 * Portfolio Items setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Get the three latest Portfolio Items
$dogs = new WP_Query([
	'post_type' => 'animal_dogs',
	'posts_per_page' => 3,
]);

// Did we get any Portfolio Items?
if ($dogs->have_posts()) {
	// GREAT SUCCESS!
	?>
		<div class="wrapper" id="wrapper-dogs">
			<div class="container">

				<h1 style="color:black;"><?php _e('Senaste Hundar', 'understrap'); ?></h1>

				<div class="row">
					<!-- Loop over the Portfolio Items -->
					<?php
						while ($dogs->have_posts()) {
							$dogs->the_post();
							?>
								<!-- For each Portfolio Item, include a template part? -->
								<?php get_template_part('loop-templates/content-animal_dogs'); ?>
							<?php
						}

						// DON'T FORGET TO RESET POSTDATA!
						wp_reset_postdata();
					?>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /#wrapper-portfolio-items -->
	<?php
}
