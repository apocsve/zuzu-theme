<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md fixed-top navbar-light bg-light">
                <div class="container-md">
                    <a class="navbar-brand" href="#">
                        ZuZu
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <?php
                            wp_nav_menu(
                                [
                                  'menu' => 'header-menu',
                                  'menu_class' => 'navbar-nav me-auto mb-2 mb-md-0',
                                  'container' => '',
                                  'add_li_class' => 'nav-item',
                                  'add_a_class' => 'nav-link'
                                ]
                            );
                        ?>
                        <span class="navbar-text">
                            Navbar text with an inline element
                        </span>
                    </div>
                </div>
            </nav>
        </header>