<section class='work'>
    <ul class='col-2 grid'>
        <?php while (have_posts()) : the_post(); ?>
            <li class='item'>
                <a class='inner' href='<?php the_permalink(); ?>' style='background:url(<?= get_the_post_thumbnail_url(); ?>);'>
                    <div class='caption'>
                        <div class='field'>
                            Wordpress, Intégration
                        </div>
                        <div class='titles'>
                            <div class='title'><?php the_title(); ?></div>
                            <div class='subtitle'>Développement du site web de <?php the_title(); ?></div>
                        </div>
                    </div>
                </a>
            </li>
        <?php endwhile; ?>
    </ul>
    <?php if (function_exists('my_pagination')) : ?>
        <?php my_pagination(); ?>
    <?php endif; ?>
</section>