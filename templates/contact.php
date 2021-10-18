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

<section class='contact mobile-center'>
    <div class='block'>
        <div class='row'>
            <div class='col-md-4'>
                <div class='row'>
                    <div class='col-md-2'>
                        <div class='fa fa-building-o'></div>
                    </div>
                    <div class='col-md-10'>
                        <p><?php the_field('address'); ?></p>
                    </div>
                </div>
            </div>
            <div class='col-md-4'>
                <div class='row'>
                    <div class='col-md-2'>
                        <div class='fa fa-phone'></div>
                    </div>
                    <div class='col-md-10'>
                        <p><?php the_field('telephone'); ?></p>
                    </div>
                </div>
            </div>
            <div class='col-md-4'>
                <div class='row'>
                    <div class='col-md-2'>
                        <div class='fa fa-envelope-o'></div>
                    </div>
                    <div class='col-md-10'>
                        <p>contact@nakpawu.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>