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
    <title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">

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
                <nav id="header__menu" class="navbar">

                    <?php if ( is_front_page() ) : ?>
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'main-menu',
                                'menu_id'        => 'primary-menu',
                                'container'=> false
                            ));
                        ?>
                    <?php else : ?>
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'fullpage-menu',
                                'menu_id'        => 'fullpage-menu',
                                'container'=> false
                            ));
                        ?>
                    <?php endif; ?>
                </nav>
            </div>
        </header>

        <main class="main-content">