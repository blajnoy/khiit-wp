<?php
/*
Template Name: Second template
*/
get_header(); ?>

<?php

    $slug = basename(get_permalink());
    $args = array( 'post_type' => $slug );
    $query = new WP_Query( $args );

    $posts = $query->posts;
    uasort($posts, function ($a, $b) {
        $aOrder = get_field('order', $a->ID);
        $bOrder = get_field('order', $b->ID);

        if ($aOrder == $bOrder) {
            return 0;
        }

        return ($aOrder < $bOrder) ? -1 : 1;
    });

    echo '<div class="fullpage">';
        foreach ($posts as $post) {
            setup_postdata($post);


            echo '<section class="section" id="' . get_post_type($post) . '_' . strtolower(str_replace(' ', '_', the_title('', '', false))) . '">';

            ?>

            <?php
            $image = get_field('image');
            $heading = get_field('heading');

            ?>

            <div class="content-col">
                <strong class="ttl"><?php echo the_title(); ?></strong>
                <h1 class="heading with-separator"><?php echo $heading; ?></h1>
                <?php echo the_content(); ?>


                <a href="#" class="lnk-next">arrow-down</a>
            </div>
            <div class="aside-img">
                <img src="<?php echo $image['url']; ?>" alt="" />
            </div>

            <?php
            wp_reset_postdata();
            echo '</section>';
        }

    echo '</fullpage>';

?>

<?php get_footer(); ?>