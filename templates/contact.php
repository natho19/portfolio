<?php
/*
* Template Name: Contact
*/
?>

<?php get_header(); ?>

<!-- Formulaire de contact -->
<section class='contact jumbotron bg-yellow'>
    <section>
        <?= do_shortcode('[contact-form-7 id="260" title="Formulaire de contact" html_class="row"]'); ?>
    </section>
</section>

<?php get_footer(); ?>