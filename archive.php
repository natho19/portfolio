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
    <!-- Liste des projets -->
    <?php if (have_posts()) : ?>
        <ul class='col-2 grid'>
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('parts/content', 'post'); ?>
            <?php endwhile; ?>
        </ul>
    <!-- Aucun projet -->
    <?php else : ?>
        <?php get_template_part('parts/content', 'none'); ?>
    <?php endif; ?>
    
    <!-- Pagination  -->
    <?php if (function_exists('my_pagination')) : ?>
        <?php my_pagination(); ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>