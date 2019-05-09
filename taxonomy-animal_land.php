<?php
 
get_header();
 
if ( have_posts() ) :
  ?>
    <div class="container">
      <h2><?php _e('Finns i:', 'understrap'); ?> <?php single_term_title(); ?></h2>
      <div class="row">
        <?php
        while ( have_posts() ) : the_post(); ?>
          <article class="dog col-lg-4 col-md-5" style="padding-bottom: 10px;">
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
              <p><?php _e('Kön:', 'understrap'); ?> <?php the_field('kon'); ?></p>
            <?php endif; ?>

            <!-- Pagination -->
            <?php understrap_pagination(); ?>
            <!-- ./Pagination -->
            
          </article>
        <?php endwhile; ?>
      </div>
    </div>
 <?php
else :
  
  echo '<div class="container">', _e('There are no posts', 'understrap'), '</div>';
 
endif;
 
get_footer();
