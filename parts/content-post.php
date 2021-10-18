<ul class='col-2 grid'>
    <?php while (have_posts()) : the_post(); ?>
        <li class='item'>
            <a class='inner' href='<?php the_permalink(); ?>' style='background:url(<?= get_the_post_thumbnail_url(); ?>);'>
                <div class='caption'>
                    <?php if (has_tag()) : ?>
                        <div class='field'>
                            <?= implode(', ', wp_get_post_tags(get_the_ID(), array('fields' => 'names'))); ?>
                        </div>
                    <?php endif; ?>
                    <div class='titles'>
                        <div class='title'><?php the_title(); ?></div>
                        <?php if (get_field('subtitle')) : ?>
                            <div class='subtitle'><?php the_field('subtitle'); ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </a>
        </li>
    <?php endwhile; ?>
</ul>
<?php if (function_exists('my_pagination')) : ?>
    <?php my_pagination(); ?>
<?php endif; ?>