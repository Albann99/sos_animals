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

		<a href="#" class="btn btn-primary">Klicka på mig</a>
	</div>
</section>


<style>
	
</style>

<!-- <style>

	#hero {
		height:500px;
		background-size: cover;

	}
	 #hero > .container {
		color:white;
	}

	#hero > .container {
		text-align: center;
	}

	@media only screen and (max-width: 820px) {
	#hero {  
	    background-repeat: no-repeat;
    	height: auto;
    	width: auto;
    	padding-bottom: 20px;
    	padding-top: 15px;
	}
}

@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px)  { 
	#hero {
		height: 300px;
    	background-size: cover;
	}

}
</style> -->