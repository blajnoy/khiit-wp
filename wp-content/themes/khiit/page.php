<?php
/*
Template Name: Default template
*/
get_header(); ?>

    <section class="content-wrapper">
        <h1 class="heading with-separator"><?php echo the_title(); ?></h1>
        <?php
        while ( have_posts() ) : the_post();

            the_content();

        endwhile;
        ?>
    </section>

<?php get_footer(); ?>