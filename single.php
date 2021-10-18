<?php get_header(); ?>

<!-- Page Header -->
<section class='jumbotron small'>
    <section class="text-center">
        <h1><?php the_title(); ?></h1>
        <h2><?php the_field('subtitle'); ?></h2>
    </section>
</section>

<!-- Description -->
<section class='wide'>
    <div class='block'>
        <div class='row'>
            <div class='col-md-5 project-content'>
                <h4>Description</h4>
                <?php the_content(); ?>
                <?php if (get_field('link')) : ?>
                    <a href="<?= esc_url(get_field('link')['url']); ?>" class="btn btn-default mb-30"><?= get_field('link')['title']; ?></a>
                <?php endif; ?>
            </div>
            <div class='col-md-3 col-md-offset-1'>
                <?php if (get_field('customer')) : ?>
                    <div>
                        <h4>Client</h4>
                        <p><?php the_field('customer'); ?></p>
                    </div>
                <?php endif; ?>
                <?php if (get_field('frontend')) : ?>
                    <div>
                        <h4>Frontend</h4>
                        <p><?php the_field('frontend'); ?></p>
                    </div>
                <?php endif; ?>
            </div>
            <div class='col-md-3'>
                <?php if (get_field('role')) : ?>
                    <div>
                        <h4>Rôle</h4>
                        <p><?php the_field('role'); ?></p>
                    </div>
                <?php endif; ?>
                <?php if (get_field('backend')) : ?>
                    <div>
                        <h4>Backend</h4>
                        <p><?php the_field('backend'); ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Contenus -->
<section class='wide gray'>
    <div class='block'>
        <?php if (have_rows('details')) : ?>
            <?php $i = 0; while (have_rows('details')) : the_row() ?>
                <?php if ($i % 2 == 0) : ?>
                    <?php get_template_part('parts/project', 'left'); ?>
                <?php else : ?>
                    <?php get_template_part('parts/project', 'right'); ?>
                <?php endif; $i++ ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php
        $images = get_field('gallery');
        $i = 1;
        if ($images) : ?>
            <div class="other-images">
                <ul class='col-3 grid'>
                    <?php foreach ($images as $image) : ?>
                        <li class='item'>
                            <a class='inner lightbox' href='<?= esc_url($image['url']); ?>' style='background:url(<?= esc_url($image['url']); ?>);'>
                                <div class='caption'>
                                    <div class='field'>#<?= $i; ?></div>
                                </div>
                            </a>
                        </li>
                    <?php $i++; endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Autres projets -->
<?php
    $args = array(
        'numberposts' => 2,
        'orderby' => 'rand',
        'post_type' => 'post',
        'post_status' => 'publish',
        'post__not_in' => array(get_the_ID())
    );
    $random_two_posts = get_posts($args);
?>
<?php if ($random_two_posts) : ?>
    <section class='block'>
        <div class='row'>
            <div class='col-md-12'>
                <div class='title-block'>
                    <h3>Autres projets</h3>
                </div>
            </div>
        </div>
        <ul class='col-2 grid'>
            <?php foreach ($random_two_posts as $post) : setup_postdata($post); ?>
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
            <?php endforeach; wp_reset_postdata(); ?>
        </ul>
    </section>
<?php endif; ?>

<?php get_footer(); ?>