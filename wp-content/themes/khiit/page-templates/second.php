<?php
/*
Template Name: Second template
*/
get_header(); ?>

<?php

    $slug = basename(get_permalink());
    $args = array('post_type' => $slug);
    $query = new WP_Query($args);
    $posts = $query->posts;

    uasort($posts, function ($a, $b) {
        $aOrder = get_field('order', $a->ID);
        $bOrder = get_field('order', $b->ID);

        if ($aOrder == $bOrder) {
            return 0;
        }

        return ($aOrder < $bOrder) ? -1 : 1;
    });

    echo '<div class="fullpage" id="fullpage">';
    foreach ($posts as $post) {
        setup_postdata($post);
        echo '<section class="section" data-anchor="' . get_post_type($post) . '-' . strtolower(str_replace(' ', '-', the_title('', '', false))) . '">';
        ?>

        <?php
        $image = get_field('image');
        $heading = get_field('heading');
        ?>

        <div class="content-col">
            <strong class="ttl"><?php echo the_title(); ?></strong>
            <h1 class="heading with-separator"><?php echo $heading; ?></h1>
            <?php echo the_content(); ?>

            <?php if ($post !== end($posts)): ?>
                <a href="#" class="lnk-next">
                    <svg class="ico-arrow-down" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 109.907 200" xml:space="preserve">
                        <g>
                            <circle style="fill:#AAABAB;" cx="54.641" cy="15.623" r="15.623"/>
                            <circle style="fill:#AAABAB;" cx="54.641" cy="70.405" r="15.623"/>
                            <circle style="fill:#AAABAB;" cx="54.641" cy="125.188" r="15.623"/>
                            <path style="fill:#AAABAB;" d="M0,152.651c0-2.749,0.957-5.509,2.907-7.742c4.279-4.898,11.718-5.4,16.616-1.122l35.431,30.95l35.43-30.95c4.898-4.278,12.337-3.776,16.616,1.122c4.279,4.898,3.775,12.337-1.122,16.616L66.97,195.512c-6.851,5.984-17.182,5.984-24.033,0L4.029,161.525C1.364,159.197,0,155.932,0,152.651z M51.477,177.775v0.01V177.775z"/>
                        </g>
                    </svg>
                </a>
            <?php endif; ?>
        </div>
        <div class="aside-img">
            <img data-src="<?php echo $image['url']; ?>" alt=""/>
        </div>

        <?php
        wp_reset_postdata();
        echo '</section>';
    }

    echo '</fullpage>';

?>

<?php get_footer(); ?>