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
                <p><?php the_field('about'); ?></p>
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
                <h2>Derniers projets</h2>
            </div>
        </div>
    </div>
    <ul class='col-2 grid'>
        <li class='item'>
            <a class='inner' href='http://localhost/portfolio/bonjour-tout-le-monde/' style='background:url(https://ununsplash.imgix.net/photo-1414637104192-f9ab9a0ee249?fit=crop&amp;fm=jpg&amp;h=700&amp;q=75&amp;w=1050);'>
                <div class='caption'>
                    <div class='field'>
                        Design
                    </div>
                    <div class='titles'>
                        <div class='title'>Books</div>
                        <div class='subtitle'>The branding</div>
                    </div>
                </div>
            </a>
        </li>
        <li class='item'>
            <a class='inner' href='http://localhost/portfolio/bonjour-tout-le-monde/' style='background:url(https://unsplash.imgix.net/photo-1423145406370-2b342ae5b597?fit=crop&amp;fm=jpg&amp;h=700&amp;q=75&amp;w=1050);'>
                <div class='caption'>
                    <div class='field'>
                        Photography
                    </div>
                    <div class='titles'>
                        <div class='title'>Suitable</div>
                        <div class='subtitle'>Clothing</div>
                    </div>
                </div>
            </a>
        </li>
        <li class='item'>
            <a class='inner' href='http://localhost/portfolio/bonjour-tout-le-monde/' style='background:url(https://unsplash.imgix.net/photo-1418479631014-8cbf89db3431?fit=crop&amp;fm=jpg&amp;h=700&amp;q=75&amp;w=1050);'>
                <div class='caption'>
                    <div class='field'>
                        Design + Identity
                    </div>
                    <div class='titles'>
                        <div class='title'>Yellow Mellow</div>
                        <div class='subtitle'>Brand identity</div>
                    </div>
                </div>
            </a>
        </li>
        <li class='item'>
            <a class='inner' href='http://localhost/portfolio/bonjour-tout-le-monde/' style='background:url(https://unsplash.imgix.net/photo-1423145406370-2b342ae5b597?fit=crop&amp;fm=jpg&amp;h=700&amp;q=75&amp;w=1050);'>
                <div class='caption'>
                    <div class='field'>
                        Photography
                    </div>
                    <div class='titles'>
                        <div class='title'>Suitable</div>
                        <div class='subtitle'>Clothing</div>
                    </div>
                </div>
            </a>
        </li>
    </ul>
    <div class='text-center'>
        <a href='#' class='btn btn-default'>Tous mes projets</a>
    </div>
</section>

<?php get_footer(); ?>