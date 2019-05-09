<div class="col-md">
    <div class="story">
        <div class="story-image">
        <?php if ( has_post_thumbnail() ) {
    the_post_thumbnail();
  }
  ?>
</div>
<div class="story-content">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>

    </div>
</div>