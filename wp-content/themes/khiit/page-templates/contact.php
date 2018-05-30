<?php
/*
Template Name: Contact template
*/
get_header(); ?>

    <section class="contact-form">
        <strong class="title with-separator"><?php echo the_title(); ?></strong>
        <?php
            while ( have_posts() ) : the_post();

                the_content();

            endwhile;
        ?>
    </section>

<?php get_footer(); ?>