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
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">
	<header id="header" class="header">
        <div class="container">
            <div class="logo-container">
                <?php the_custom_logo(); ?>
<!--
                <?php
/*                    $logo_img = '';
                    if( $custom_logo_id = get_theme_mod('custom_logo') ){
                        $logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                            'alt' => 'logo'
                        ) );
                    }
                    echo $logo_img;
                */?>

-->
                <!--<a class="logo" href="#" title="khiil">
                    <img src="images/logo.png" alt="Logo" width="159" height="46">
                </a>-->
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

    <main class="main-content">
