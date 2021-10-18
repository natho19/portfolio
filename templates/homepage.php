<?php
/*
* Template Name: Accueil
*/
?>

<?php get_header(); ?>

<!-- Slides -->
<?php if (have_rows('slides')) : ?>
    <div class='slider'>
        <ul class='slides'>
            <?php while (have_rows('slides')) : the_row(); ?>
                <li class='slide dark'>
                    <section class='jumbotron'>
                        <div class='bg' style='background:url(<?= esc_url(get_sub_field('image')['url']); ?>);'></div>
                        <section>
                            <div class='row'>
                                <div class='col-md-12'>
                                    <h1><?php the_sub_field('text'); ?></h1>
                                </div>
                            </div>
                        </section>
                    </section>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
<?php endif; ?>

<!-- A propos -->
<section>
    <div class='row block'>
        <div class='col-md-6 col-md-offset-3'>
            <div class='text-center'>
                <div class='title-block'>
                    <h2><?php the_field('about_section_title'); ?></h2>
                </div>
                <?php the_field('about'); ?>
            </div>
        </div>
    </div>
</section>

<!-- Mes compétences -->
<?php if (have_rows('skills')) : ?>
    <section class='contact wide gray mobile-center'>
        <div class='block text-center'>
            <div class="title-block">
                <h2><?php the_field('skills_section_title'); ?></h2>
            </div>
            <div class='row skills'>
                <?php while (have_rows('skills')) : the_row(); ?>
                    <div class='col-md-4 skill'>
                        <div class='skill-icon'>
                            <i class='fa <?php the_sub_field('icon'); ?>'></i>
                        </div>
                        <div class='skill-description'>
                            <h3><?php the_sub_field('title'); ?></h3>
                            <p><?php the_sub_field('list'); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Projets -->
<section class='block'>
    <div class='row'>
        <div class='col-md-12'>
            <div class='title-block text-center'>
                <h2><?php the_field('projects_section_title'); ?></h2>
            </div>
        </div>
    </div>
    <?php if (have_rows('projects')) : ?>
        <ul class='col-2 grid'>
            <?php 
            while (have_rows('projects')) : the_row();
            $post = get_sub_field('project'); 
            setup_postdata($post); ?>
                <?php get_template_part('parts/content', 'post'); ?>
            <?php wp_reset_postdata(); endwhile; ?>
        </ul>
    <?php endif; ?>
    <div class='text-center'>
        <a href='<?= esc_url(get_field('projects_button')['url']); ?>' class='btn btn-default'><?= get_field('projects_button')['title']; ?></a>
    </div>
</section>

<?php get_footer(); ?>