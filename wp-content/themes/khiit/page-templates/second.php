<?php
/*
Template Name: Second template
*/
get_header(); ?>

<?php
    $args = array( 'post_type' => 'our_story' );
    $loop = new WP_Query( $args );

echo '<div class="fullpage">';
    while ( $loop->have_posts() ) : $loop->the_post();
        echo '<section class="section">';
        ?>
        <?php
            $image = get_field('image');
            $heading = get_field('heading');
            $title = trim(the_title());
        ?>

            <div class="content-col">
                <?php echo 'our_story_'.$title ?>
                <strong class="ttl"><?php echo the_title(); ?></strong>
                <h1 class="heading with-separator"><?php echo $heading; ?></h1>
                <?php echo the_content(); ?>
                <a href="#" class="lnk-next">arrow-down</a>
            </div>
            <div class="aside-img">
                <img src="<?php echo $image['url']; ?>" alt="" /><?php /*echo $image['alt'] */?>
            </div>

        <?php
            wp_reset_postdata();
            echo '</section>';
    endwhile;
echo '</fullpage>';

?>

<?php get_footer(); ?>