<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>

    <header class="site-header">
        <div class="container">
            <div class="logo">
                <a href="<?php echo esc_url( home_url('/') ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                </a>
            </div>
            <div class="header-extras">
                <div class="social-menu-container">
                <?php
                $args = array(
                    'theme_location' => 'social-menu',
                    'container' => 'nav',
                    'container_class' => 'social-menu',
                    'container_id' => 'social-menu',
                    'link_before' => '<span class="sr-text">',
                    'link_after' => '</span>'
                );

                wp_nav_menu($args);
                ?>
                <div class="contact-info">
                    <p>Dirección hardcodeada por cambiar<br>
                    Teléfono hardcodedado</p>
                </div>
                </div>
            </div>
        </div>
    </header>

    <div class="header-menu-container">
        <div class="header-menu-switch">
            <a href="#" class="mobile"><i class="fa fa-bars" aria-hidden="true"></i></a>
        </div>
        <div class="container navigation">
        <?php
        $args = array(
            'theme_location' => 'header-menu',
            'container' => 'nav',
            'container_class' => 'header-menu'
        );
    
        wp_nav_menu($args);
        ?>
        </div>
    </div>

    <main>