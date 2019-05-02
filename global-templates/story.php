<?php
/**
 * Story setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Get the three latest Story Post
$story = new WP_Query([
	'post_type' => 'success_stories',
	'posts_per_page' => 3,
]);

// Did we get any Story Post?
if ($story->have_posts()) {
	// GREAT SUCCESS!

	?>
		<div class="story">
			<div class="container">
				
					<h1 style="text-align:center;"><?php the_field('success_story_title'); ?></h1>

				<div class="card" style="width: 18rem;">



					<!-- Loop over the Story Posts -->
					<?php
						while ($story->have_posts()) {
							$story->the_post();
							?>
								<!-- For each Story, include a template part? -->
								<?php get_template_part('loop-templates/content-story'); ?>
							<?php
						}

						// DON'T FORGET TO RESET POSTDATA!
						wp_reset_postdata();
					?>
				</div>
			</div>
			</div>
		</div>
	<?php
}
