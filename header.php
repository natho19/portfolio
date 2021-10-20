<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta content='width=device-width, initial-scale=1' name='viewport'>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= IMG_URL . '/favicon/apple-touch-icon.png'; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= IMG_URL . '/favicon/favicon-32x32.png'; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= IMG_URL . '/favicon/favicon-16x16.png'; ?>">
    <link rel="manifest" href="<?= IMG_URL . '/favicon/site.webmanifest'; ?>">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,400italic,300italic,100italic,700italic,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>
<body>
    <div class='container-fluid'>
        <header data-spy='affix'>
            <section>
                <a class='brand' href='http://localhost/portfolio/'>NA</a>
                <ul id='navigation'>
                    <div class='trigger'>
                        <div class='bar'></div>
                        <div class='bar'></div>
                        <div class='bar'></div>
                    </div>
                    <li><a href='http://localhost/portfolio/'>Accueil</a></li>
                    <li>
                        <a href='#'>Mes projets</a>
                        <ul>
                            <li><a href='http://localhost/portfolio/category/projets-professionnels/'>Pro</a></li>
                            <li><a href='http://localhost/portfolio/category/projets-scolaires/'>Scolaires</a></li>
                            <li><a href='http://localhost/portfolio/category/projets-personnels/'>Perso</a></li>
                            <li><a href='http://localhost/portfolio/?post_type=post'>Tous mes projets</a></li>
                        </ul>
                    </li>
                    <li><a href='http://localhost/portfolio/contact/'>Contact</a></li>
                </ul>
            </section>
        </header>