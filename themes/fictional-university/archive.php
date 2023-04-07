<?php
get_header();
pageBanner(array(
    'title' => get_the_archive_title(),
    'subtitle' => get_the_archive_description()
));
?>

<div class="container container--narrow page-section">
    <?php
    while (have_posts()) {
        the_post();
    ?>
        <div class="post-item">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <div class="metabox">
                <p>Posted by <?php the_author_posts_link(); ?> on 
                <?php the_time('d-M-Y'); ?> in <?php echo get_the_category_list(', '); ?></p>
            </div>

            <div class="generice-content">
                <?php the_excerpt(); ?>
                <p class="btn btn--blue"><a href="<?php the_permalink(); ?>">Contine reading &raquo;</a></p>
            </div>
        </div>

    <?php
    }
    echo paginate_links();
    ?>
</div>

<?php
get_footer();
?>