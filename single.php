<?php get_header(); ?>

<!-- Page Header -->
<section class='jumbotron small'>
    <section class="text-center">
        <h1>Single du projet</h1>
        <h2>Lorem ipsum dolor sit amet consectetur.</h2>
    </section>
</section>

<!-- Description -->
<section class='wide'>
    <div class='block'>
        <div class='row'>
            <div class='col-md-5'>
                <h4>Description</h4>
                <p class='mb-15'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mauris sapien, mollis nec gravida vitae, mollis in ligula. Nulla efficitur nibh in augue ullamcorper porta nec ultricies arcu. Nullam ac tellus consectetur.</p>
                <a href="#" class="btn btn-default">Voir le site</a>
            </div>
            <div class='col-md-3 col-md-offset-1'>
                <div>
                    <h4>Client</h4>
                    <p>Anchor</p>
                </div>
                <div>
                    <h4>Frontend</h4>
                    <p>2014-2015</p>
                </div>
            </div>
            <div class='col-md-3'>
                <div>
                    <h4>Rôle</h4>
                    <p>Designer</p>
                </div>
                <div>
                    <h4>Backend</h4>
                    <p>Designer</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contenus -->
<section class='wide gray'>
    <div class='block'>
        <div class='row project-part'>
            <div class='col-md-5'>
                <div class='block'>
                    <h3>Titre 1</h3>
                    <p>Nulla efficitur nibh in augue ullamcorper porta nec ultricies arcu. Nullam ac tellus consectetur, tincidunt lorem in, cursus erat.</p>
                </div>
            </div>
            <div class='col-md-7'>
                <img class="fadeIn" src="<?= TR_IMG_URL . '/projects/02.jpg' ?>" />
            </div>
        </div>
        <div class='row project-part'>
            <div class='col-md-7'>
                <img class="fadeIn" src="<?= TR_IMG_URL . '/projects/01.jpg' ?>" />
            </div>
            <div class='col-md-5'>
                <div class='block'>
                    <h3>Titre 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mauris sapien, mollis nec gravida vitae, mollis in ligula.</p>
                </div>
            </div>
        </div>
        <div class="other-images">
            <ul class='col-3 grid'>
                <li class='item identity'>
                    <a class='inner lightbox' href='https://ununsplash.imgix.net/photo-1414637104192-f9ab9a0ee249?fit=crop&amp;fm=jpg&amp;h=700&amp;q=75&amp;w=1050' style='background:url(https://ununsplash.imgix.net/photo-1414637104192-f9ab9a0ee249?fit=crop&amp;fm=jpg&amp;h=700&amp;q=75&amp;w=1050);'>
                        <div class='caption'>
                            <div class='field'>#01</div>
                        </div>
                    </a>
                </li>
                <li class='item design'>
                    <a class='inner lightbox' href='https://unsplash.imgix.net/photo-1423145406370-2b342ae5b597?fit=crop&amp;fm=jpg&amp;h=700&amp;q=75&amp;w=1050' style='background:url(https://unsplash.imgix.net/photo-1423145406370-2b342ae5b597?fit=crop&amp;fm=jpg&amp;h=700&amp;q=75&amp;w=1050);'>
                        <div class='caption'>
                            <div class='field'>#02</div>
                        </div>
                    </a>
                </li>
                <li class='item design identity'>
                    <a class='inner lightbox' href='https://unsplash.imgix.net/photo-1423109437485-813895ed077f?fit=crop&amp;fm=jpg&amp;h=700&amp;q=75&amp;w=1050' style='background:url(https://unsplash.imgix.net/photo-1423109437485-813895ed077f?fit=crop&amp;fm=jpg&amp;h=700&amp;q=75&amp;w=1050);'>
                        <div class='caption'>
                            <div class='field'>#03</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Plus de projets -->
<section class='block'>
    <div class='row'>
        <div class='col-md-12'>
            <div class='title-block'>
                <h3>Autres projets</h3>
            </div>
        </div>
    </div>
    <ul class='col-2 grid'>
        <li class='item'>
            <a class='inner' href='single.html' style='background:url(https://unsplash.imgix.net/photo-1418479631014-8cbf89db3431?fit=crop&amp;fm=jpg&amp;h=700&amp;q=75&amp;w=1050);'>
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
            <a class='inner' href='single.html' style='background:url(https://ununsplash.imgix.net/photo-1422479516648-9b1f0b6e8da8?fit=crop&amp;fm=jpg&amp;h=725&amp;q=75&amp;w=1050);'>
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
</section>

<?php get_footer(); ?>