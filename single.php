<?php get_header(); ?>

<!-- Page Header -->
<section class='jumbotron small'>
    <section class="text-center">
        <h1><?php the_title(); ?></h1>
        <?php if (get_field('subtitle')) : ?>
            <h2><?php the_field('subtitle'); ?></h2>
        <?php endif; ?>
    </section>
</section>

<!-- Description -->
<section class='wide'>
    <div class='block'>
        <div class='row project-content'>
            <div class='col-md-5'>
                <h3>Description</h3>
                <?php the_content(); ?>
                <?php if (get_field('link')) : ?>
                    <a href="<?= esc_url(get_field('link')['url']); ?>" class="btn btn-default mb-30"><?= get_field('link')['title']; ?></a>
                <?php endif; ?>
            </div>
            <div class='col-md-3 col-md-offset-1'>
                <?php if (get_field('customer')) : ?>
                    <div>
                        <h3>Client</h3>
                        <p><?php the_field('customer'); ?></p>
                    </div>
                <?php endif; ?>
                <?php if (get_field('frontend')) : ?>
                    <div>
                        <h3>Frontend</h3>
                        <p><?php the_field('frontend'); ?></p>
                    </div>
                <?php endif; ?>
            </div>
            <div class='col-md-3'>
                <?php if (get_field('role')) : ?>
                    <div>
                        <h3>Rôle</h3>
                        <p><?php the_field('role'); ?></p>
                    </div>
                <?php endif; ?>
                <?php if (get_field('backend')) : ?>
                    <div>
                        <h3>Backend</h3>
                        <p><?php the_field('backend'); ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Détails -->
<?php if (get_field('details')) : ?>
    <section class='wide gray'>
        <div class='block'>
            <!-- Affichage alterné de gauche à droite des détails -->
            <?php if (have_rows('details')) : ?>
                <?php $i = 0; while (have_rows('details')) : the_row() ?>
                    <?php if ($i % 2 == 0) : ?>
                        <?php get_template_part('parts/project', 'left'); ?>
                    <?php else : ?>
                        <?php get_template_part('parts/project', 'right'); ?>
                    <?php endif; $i++ ?>
                <?php endwhile; ?>
            <?php endif; ?>

            <!-- Galerie -->
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
<?php endif; ?>

<!-- Autres projets -->
<?php
// Requête pour sélectionner 2 projets aléatoires sans le projet en cours
$args = array(
    'numberposts' => 2,
    'orderby' => 'rand',
    'post_type' => 'post',
    'post_status' => 'publish',
    'post__not_in' => array(get_the_ID())
);
$random_two_projects = get_posts($args);
if ($random_two_projects) : ?>
    <section class='block'>
        <div class='row'>
            <div class='col-md-12'>
                <div class='title-block'>
                    <h2>Autres projets</h2>
                </div>
            </div>
        </div>
        <ul class='col-2 grid'>
            <?php foreach ($random_two_projects as $post) : setup_postdata($post); ?>
                <?php get_template_part('parts/content', 'post'); ?>
            <?php endforeach; wp_reset_postdata(); ?>
        </ul>
    </section>
<?php endif; ?>

<?php get_footer(); ?>