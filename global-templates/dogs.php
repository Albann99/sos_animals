<?php
/**
 * Dog setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Get the three latest Dog Posts
$dogs = new WP_Query([
	'post_type' => 'animal_dogs',
	'posts_per_page' => 3,
	'orderby' => 'title',
	'order' => 'ASC',
]);

// Did we get any Dog Posts?
if ($dogs->have_posts()) {
	// GREAT SUCCESS!
	?>
		<div class="wrapper" id="wrapper-dogs">
			<div class="container">

				<h1><?php the_field('latest_dog_title'); ?></h1>

				<div class="row">
					<!-- Loop over the Dog Posts -->
					<?php
						while ($dogs->have_posts()) {
							$dogs->the_post();
							?>
								<!-- For each Dog post, include a template part? -->
								<?php get_template_part('loop-templates/content-animal_dogs'); ?>
							<?php
						}

						// DON'T FORGET TO RESET POSTDATA!
						wp_reset_postdata();
					?>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /#wrapper-dog -->
	<?php
}

