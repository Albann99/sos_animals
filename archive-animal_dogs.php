<?php
 
get_header();
 
if ( have_posts() ) :
  ?>
  <div class="container">
  <h2>Hund Arkiv</h2>
  <?php
  while ( have_posts() ) : the_post(); ?>
    <div class="container">
    <article class="post">
      <div class="card-body" style="border:1px solid black;">
     <em><p class="post-meta"><?php the_time( 'F jS, Y' ); ?> | <a
          href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
        |
      </p></em>
       <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('dog-thumbnail', ['class' => 'img-fluid']); ?>
                </a>
            <?php endif; ?>
            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
      <?php the_excerpt() ?>
      <?php if(get_field('kon')): ?>
      <p><?php the_field('kon_dog'); ?>: <?php the_field('kon'); ?></p>
    <?php endif; ?>
    </article>
  </div>
  
  <?php endwhile;
 
else :
  echo '<p>There are no posts!</p>';
 
endif;
 
get_footer();
 
?>