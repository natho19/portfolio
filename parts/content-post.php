<!-- Composant projet -->
<li class='item'>
    <a class='inner' href='<?php esc_url(the_permalink()); ?>' style='background:url(<?= esc_url(get_the_post_thumbnail_url()); ?>);'>
        <div class='caption'>
            <?php if (has_tag()) : ?>
                <div class='field'>
                    <?= implode(', ', wp_get_post_tags(get_the_ID(), array('fields' => 'names'))); ?>
                </div>
            <?php endif; ?>
            <div class='titles'>
                <h2 class='title'><?php the_title(); ?></h2>
                <?php if (get_field('subtitle')) : ?>
                    <h3 class='subtitle'><?php the_field('subtitle'); ?></h3>
                <?php endif; ?>
            </div>
        </div>
    </a>
</li>