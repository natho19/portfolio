<?php get_header(); ?>

<!-- Erreur 404 -->
<section class='jumbotron bg-white'>
    <section>
        <h1>Oups ! Cette page n'existe pas.</h1>
        <h2>Erreur 404. Page introuvable.</h2>
        <a href='<?= home_url(); ?>' class='btn btn-default'>Accueil</a>
    </section>
</section>

<?php get_footer(); ?>