<?php
/**
 * Hero setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$bg_img = get_field('hero_background_image');
?>


<section id="hero" style="background-image: url(<?php echo $bg_img; ?>);">

	<div class="container">
		<h1><?php the_field('hero_heading'); ?></h1>
		<h2><?php the_field('hero_subheading'); ?></h2>
		<br>
		<a href="<?php the_field('hero_button_link'); ?>" class="btn btn-primary"><?php the_field('hero_button_text'); ?></a>
	</div>
</section>


