<div class="wrapper-dog col-md-6 col-lg-4">
    <article class="dog">
        <header>
            <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('dog-thumbnail', ['class' => 'img-fluid']); ?>
                </a>
            <?php endif; ?>

            <h1><?php the_title(); ?></h1>
        </header>

        <main>
            <?php the_excerpt(); ?>
        </main>
         <div class="card-footer">
            <small class="text-muted"><?php _e('Post Created: ', 'understrap'); ?> <?php echo get_the_date(); ?> <?php _e('by', 'understrap'); ?> <?php the_author_posts_link(); ?></small>
        </div><!-- /.card-footer -->
    </article>
</div>
