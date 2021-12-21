<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nr-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Навигация по сайту -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
    <div id="container">
        <a href="https://nr.kh.ua/"><img src="https://nr.kh.ua/wp-content/uploads/2021/04/noutremlogo.png" class="img-fluid logo pull-left" width="250" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button></div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
        <div class="dropdown-divider"></div>
        <p class="maincontact col-lg-1">
            <a href="tel:096-625-1010">number</a>
            <br> <a href="tel:095-936-6300">number</a> <a href="#"><i class="fab fa-telegram-plane"></i></a> <a href="#"><i class="fab fa-whatsapp"></i></a> <a href="#"><i class="fab fa-viber"></i></a>
            <br> <a href="tel:093-938-5050">number</a></p>
        <?php /* Primary navigation */
        wp_nav_menu( array(
                'menu' => 'top_menu',
                'depth' => 2,
                'container' => false,
                'menu_class' => 'navbar-nav mr-auto col-lg-11 justify-content-end',
                //Process nav menu using our custom nav walker
                'walker' => new wp_bootstrap_navwalker())
        );
        ?>

    </div>
</nav>
