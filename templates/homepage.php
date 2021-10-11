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
                <div class='bg' style='background:url(<?= TR_IMG_URL . '/projects/test.png' ?>);'></div>
                <section>
                    <div class='row'>
                        <div class='col-md-6'>
                        <p>Hello, Je suis Nathan Akpawu. <br>Développeur web freelance.</p>
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
<section class='contact top-line mobile-center'>
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
<section class='work' id='work'>
    <div class='row'>
        <div class='col-md-8'>
            <div class='pull-left' id='filter-trigger'>Filter</div>
            <ul id='filters'>
                <li>
                    <button data-filter='*'>All</button>
                </li>
                <li>
                    <button data-filter='.design'>Design</button>
                </li>
                <li>
                    <button data-filter='.photography'>Photography</button>
                </li>
                <li>
                    <button data-filter='.illustration'>Illustration</button>
                </li>
                <li>
                    <button data-filter='.identity'>Identity</button>
                </li>
            </ul>
        </div>
    </div>
    <ul class='col-3' id='grid'>
        <li class='item photography illustration'>
            <a class='inner' href='single.html' style='background:url(<?= TR_IMG_URL . '/projects/17.jpg' ?>);'>
                <div class='caption'>
                    <div class='field'>
                        Identity + Design
                    </div>
                    <div class='titles'>
                        <div class='title'>Enhanced Drilling</div>
                        <div class='subtitle'>Businesscards</div>
                    </div>
                </div>
            </a>
        </li>
        <li class='item photography wide'>
            <a class='inner' href='single.html' style='background:url(<?= TR_IMG_URL . '/projects/05.png' ?>);'>
                <div class='caption'>
                    <div class='field'>
                        Design
                    </div>
                    <div class='titles'>
                        <div class='title'>Badaboom</div>
                        <div class='subtitle'>Packages</div>
                    </div>
                </div>
            </a>
        </li>
        <li class='item identity'>
            <a class='inner' href='single.html' style='background:url(https://ununsplash.imgix.net/photo-1414637104192-f9ab9a0ee249?fit=crop&amp;fm=jpg&amp;h=700&amp;q=75&amp;w=1050);'>
                <div class='caption'>
                    <div class='field'>
                        Typography + Branding
                    </div>
                    <div class='titles'>
                        <div class='title'>Tilli</div>
                        <div class='subtitle'>Branding</div>
                    </div>
                </div>
            </a>
        </li>
        <li class='item design'>
            <a class='inner' href='single.html' style='background:url(https://unsplash.imgix.net/photo-1423145406370-2b342ae5b597?fit=crop&amp;fm=jpg&amp;h=700&amp;q=75&amp;w=1050);'>
                <div class='caption'>
                    <div class='field'>
                        Design + Print
                    </div>
                    <div class='titles'>
                        <div class='title'>The Magazine</div>
                        <div class='subtitle'>Issue #01</div>
                    </div>
                </div>
            </a>
        </li>
        <li class='item high design identity'>
            <a class='inner' href='single.html' style='background:url(<?= TR_IMG_URL . '/projects/02.jpg' ?>);'>
                <div class='caption'>
                    <div class='field'>
                        Design + Identity
                    </div>
                    <div class='titles'>
                        <div class='title'>Badaboom</div>
                        <div class='subtitle'>Clothing</div>
                    </div>
                </div>
            </a>
        </li>
        <li class='item design identity'>
            <a class='inner' href='single.html' style='background:url(https://unsplash.imgix.net/photo-1423109437485-813895ed077f?fit=crop&amp;fm=jpg&amp;h=700&amp;q=75&amp;w=1050);'>
                <div class='caption'>
                    <div class='field'>
                        Design + Identity
                    </div>
                    <div class='titles'>
                        <div class='title'>Touromi</div>
                        <div class='subtitle'>Briefpaper</div>
                    </div>
                </div>
            </a>
        </li>
        <li class='item design illustration'>
            <a class='inner' href='single.html' style='background:url(https://unsplash.imgix.net/photo-1416400453940-65c69d70ad91?fit=crop&amp;fm=jpg&amp;h=700&amp;q=75&amp;w=1050);'>
                <div class='caption'>
                    <div class='field'>
                        Design + Illustration
                    </div>
                    <div class='titles'>
                        <div class='title'>Touromi</div>
                        <div class='subtitle'>Interaction Design</div>
                    </div>
                </div>
            </a>
        </li>
    </ul>
</section>

<?php get_footer(); ?>