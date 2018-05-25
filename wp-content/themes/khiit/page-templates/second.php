<?php
/*
Template Name: Second template
*/
get_header(); ?>

<?php /*if (have_posts()) : while (have_posts()) : the_post(); */?><!--
    <?php /*the_content(); */?>
--><?php /*endwhile; endif; */?>

<?php
$args = array( 'post_type' => 'fullpage_section' );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
    echo '<section class="fullpage">';
    ?>
    <?php
        the_title();
        the_content();
    ?>
    <?php
    wp_reset_postdata();
    echo '</section>';
endwhile;
?>

<?php get_footer(); ?>