<?php get_header(); ?>

<!-- Page Header -->
<section class='jumbotron small'>
    <section>
        <div class='row'>
            <div class='col-md-12 text-center'>
                <h1><?php the_archive_title(); ?></h1>
            </div>
        </div>
    </section>
</section>

<!-- Projets -->
<section class='work'>
    <?php if (have_posts()) : ?>
        <?php get_template_part('parts/content', 'post'); ?>
    <?php else : ?>
        <?php get_template_part('parts/content', 'none'); ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>