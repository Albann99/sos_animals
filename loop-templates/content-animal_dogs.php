<div class="wrapper-dog col-md-6 col-lg-4">
    <article class="dog">
        <header>
            <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('portfolio-thumbnail', ['class' => 'img-fluid']); ?>
                </a>
            <?php endif; ?>

            <h1><?php the_title(); ?></h1>
        </header>

        <main>
            <?php the_excerpt(); ?>
        </main>
        <div class="card-footer">
            <small class="text-muted">
                <?php
                    printf(
                        __('Post Created: %s by %s', 'understrap'),
                        get_the_date(),
                        get_the_author_posts_link(),
                    );
                ?>
            </small>
        </div><!-- /.card-footer -->
        <footer>

            <?php
                if ($client = get_post_meta(get_the_ID(), 'client', true)) {
                    printf(__('<div class="client">Client: %s</div>', 'understrap'), $client);
                }
            ?>

        </footer>
    </article>
</div>
