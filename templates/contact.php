<?php
/*
* Template Name: Contact
*/
?>

<?php get_header(); ?>

<!-- Formulaire de contact -->
<section class='jumbotron' style='background:#f9ee70'>
    <section>
        <form action='#' class='row' id='form' name='form'>
            <div class='col-md-8 col-md-offset-2'>
                <div class='block'>
                    <div class='title-block text-center'>
                        <h1>Hi !</h1>
                    </div>
                    <input class='form-element' id='name' name='name' placeholder='Nom' type='text'>
                    <input class='form-element' id='email' name='email' placeholder='Email' type='text'>
                    <input class='form-element' id='phone' name='phone' placeholder='Téléphone' type='text'>
                    <textarea class='form-element' id='message' name='message' placeholder='Message' type='text'></textarea>
                    <div class='text-center'>
                        <button class='btn btn-default' id='send' type='submit'>Envoyer</button>
                    </div>
                </div>
            </div>
        </form>
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