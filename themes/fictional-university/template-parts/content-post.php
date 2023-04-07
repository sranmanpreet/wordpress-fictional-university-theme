<div class="post-item">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <div class="metabox">
        <p>Posted by <?php the_author_posts_link(); ?> on
            <?php the_time('d-M-Y'); ?> in <?php echo get_the_category_list(', '); ?></p>
    </div>

    <div class="generice-content">
        <?php the_excerpt(); ?>
        <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Contine reading &raquo;</a></p>
    </div>
</div>