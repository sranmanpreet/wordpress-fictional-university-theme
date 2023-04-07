<div class="post-item">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <div class="generic-content">
        <?php the_field('main_body_content'); ?>
        <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">View Program</a></p>
    </div>
</div>