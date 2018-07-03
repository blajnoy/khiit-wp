<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package khiit
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( is_front_page() ) : ?>
        <?php _wp_render_title_tag();?>
    <?php else: ?>
        <title>
            <?php wp_title('KHIIT - ', true,''); ?>
        </title>
    <?php endif; ?>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php /*wp_enqueue_script( 'jquery' ); */?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="wrapper">
        <header id="header" class="header">
            <div class="container">
                <div class="logo-container">
                    <?php the_custom_logo(); ?>
                    <strong class="logo-slogan"><?php bloginfo( 'description' ); ?></strong>
                </div>
                <div class="mobile-logo">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="mobile-nav-toggle"><span></span></div>
                <nav id="header__menu" class="navbar">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'main-menu',
                        'menu_id'        => 'primary-menu',
                        'container'=> false
                    ));
                    ?>
                </nav>
            </div>
        </header>

        <main class="main-content">