<?php
/**
 * The Header for Fullpage
 *
 * Displays all of the <head>
 * 
 * @package 	WP_Fullpage\Templates\Layout
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

    <header id="header" class="header">
        <div class="container">
            <div class="logo-container">
                <?php the_custom_logo(); ?>
                <strong class="logo-slogan"><?php bloginfo( 'description' ); ?></strong>
            </div>
            <nav class="navbar">
                <ul class="nav">
                    <li><a href="#">Our Story</a>
                        <ul class="sub-nav">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Consulting</a></li>
                            <li><a href="#">Venture Capital</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Engineering</a>
                        <ul class="sub-nav">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Outsourcing</a></li>
                            <li><a href="#">Software development</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Publishing</a>
                        <ul class="sub-nav">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Local authors</a></li>
                            <li><a href="#">International rights</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Education</a>
                        <ul class="sub-nav">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Specialized training</a></li>
                            <li><a href="#">Distance education</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
	<?php

		if( WPFP_Query()->fullpage_has_full_navigation() )
			WPFP()->get_sidebar( 'menu' );