<?php
/**
 * USPs setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Get the three latest USPs
$usps = new WP_Query([
	'post_type' => 'animal_usps',
	'posts_per_page' => 3,
]);

// Did we get any USPs?
if ($usps->have_posts()) {
	// GREAT SUCCESS!

	$bg_img = get_field('usps_background_image');
	?>
		<div class="wrapper" id="wrapper-usps" style="background-image: url(<?php echo $bg_img; ?>);">
			<div class="container">
				<div class="row">
					<!-- Loop over the USPs -->
					<?php
						while ($usps->have_posts()) {
							$usps->the_post();
							?>
								<!-- For each USP, include a template part? -->
								<?php get_template_part('loop-templates/content', 'usp'); ?>
							<?php
						}

						// DON'T FORGET TO RESET POSTDATA!
						wp_reset_postdata();
					?>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /#wrapper-usps -->
	<?php
}
