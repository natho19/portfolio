<?php
/*
* Template Name: Accueil
*/
?>

<?php get_header(); ?>

<!-- Slides -->
<div class='slider'>
    <ul class='slides'>
        <li class='slide dark'>
            <section class='jumbotron'>
                <div class='bg' style='background:url(<?= TR_IMG_URL . '/background.jpg' ?>);'></div>
                <section>
                    <div class='row'>
                        <div class='col-md-12'>
                        <h1>Hello, Je suis Nathan Akpawu, <br>Développeur Web.</h1>
                        </div>
                    </div>
                </section>
            </section>
        </li>
    </ul>
</div>

<!-- A propos -->
<section>
    <div class='row block'>
        <div class='col-md-6 col-md-offset-3'>
            <div class='text-center'>
                <div class='title-block'>
                    <h2>A propos</h2>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem tenetur nesciunt totam laborum esse veritatis sunt officiis beatae odit maxime. Hic corporis dignissimos autem quas maiores, tenetur quaerat magnam accusantium!</p>
            </div>
        </div>
    </div>
</section>

<!-- Mes compétences -->
<section class='contact wide gray mobile-center'>
    <div class='block text-center'>
        <div class="title-block">
            <h2>Mes compétences</h2>
        </div>
        <div class='row skills'>
            <div class='col-md-4 skill'>
                <div class='skill-icon'>
                    <i class='fa fa-code'></i>
                </div>
                <div class='skill-description'>
                    <h3>Backend</h3>
                    <p>PHP, Node.js, C#</p>
                </div>
            </div>
            <div class='col-md-4 skill'>
                <div class='skill-icon'>
                    <i class='fa fa-laptop'></i>
                </div>
                <div class='skill-description'>
                    <h3>Frontend</h3>
                    <p>HTML, CSS, JS, Vue.js, SASS, Bootstrap</p>
                </div>
            </div>
            <div class='col-md-4 skill'>
                <div class='skill-icon'>
                    <i class='fa fa-wordpress'></i>
                </div>
                <div class='skill-description'>
                    <h3>Wordpress</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut facilis libero dignissimos.</p>
                </div>
            </div>
        </div>
    </div>
</section>

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
    <div class="text-center">
        <a href='#' class="btn btn-default">Tous mes projets</a>
    </div>
</section>

<?php get_footer(); ?>