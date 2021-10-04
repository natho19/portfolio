<?php
/*
* Template Name: Accueil
*/
?>

<?php get_header(); ?>

<!-- Slider -->
<div class='slider'>
    <ul class='slides'>
        <li class='slide dark'>
            <section class='jumbotron'>
                <div class='bg' style='background-image:url(https://unsplash.imgix.net/photo-1423176281849-2d0f865692cc?fit=crop&amp;fm=jpg&amp;h=700&amp;q=75&amp;w=1050);'></div>
                <section>
                    <div class='row'>
                        <div class='col-md-6'>
                        <p>Meet Tera. <br>The Ultimate Portfolio Template.</p>
                        </div>
                    </div>
                </section>
            </section>
        </li>
        <li class='slide dark'>
            <section class='jumbotron'>
                <div class='bg' style='background-image:url(<?= TR_IMG_URL . '/projects/05.jpg' ?>);'></div>
                <section>
                    <div class='row'>
                        <div class='col-md-12 text-center'>
    
                        <h1>Think big.</h1>
                        </div>
                    </div>
                </section>
            </section>
        </li>
        <li class='slide text-right'>
            <section class='jumbotron'>
                <div class='bg' style='background-image:url(<?= TR_IMG_URL . '/projects/05.png' ?>);'></div>
                <section>
                    <div class='row'>
                        <div class='col-md-12 text-center'>
                        <h1>Show off.</h1>
                        </div>
                    </div>
                </section>
            </section>
        </li>
        <li class='slide dark'>
            <section class='jumbotron'>
                <div class='bg' style='background-image:url(<?= TR_IMG_URL . '/projects/01.jpg' ?>);'></div>
                <section>
                    <div class='row'>
                        <div class='col-md-4'>
                        <h1>Express.</h1>
                        <p>With the unique Tera slider, suitable for light and dark image backgrounds.</p>
                        </div>
                    </div>
                </section>
            </section>
        </li>
        <li class='slide dark'>
            <section class='jumbotron'>
                <div class='bg' style='background-image:url(https://unsplash.imgix.net/photo-1416400453940-65c69d70ad91?fit=crop&amp;fm=jpg&amp;h=700&amp;q=75&amp;w=1050);'></div>
                <section>
                    <div class='row'>
                        <div class='col-md-5'>
                        <h2>It's Ultimate.</h2>
                        </div>
                    </div>
                </section>
            </section>
        </li>
    </ul>
</div>

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

<!-- Informations de contact -->
<section class='contact top-line mobile-center'>
    <div class='block'>
        <div class='row'>
            <div class='col-md-4'>
                <div class='row'>
                    <div class='col-md-2'>
                        <div class='fa fa-building-o'></div>
                    </div>
                    <div class='col-md-10'>
                        <p>Teratstreet 404</p>
                        <p>13337, AB, CD</p>
                    </div>
                </div>
            </div>
            <div class='col-md-4'>
                <div class='row'>
                    <div class='col-md-2'>
                        <div class='fa fa-phone'></div>
                    </div>
                    <div class='col-md-10'>
                        <p>(10) 10 100 100</p>
                        <p>(13) 33 333 337</p>
                    </div>
                </div>
            </div>
            <div class='col-md-4'>
                <div class='row'>
                    <div class='col-md-2'>
                        <div class='fa fa-envelope-o'></div>
                    </div>
                    <div class='col-md-10'>
                        <p>support@themanoid.com</p>
                        <p>sales@themanoid.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>