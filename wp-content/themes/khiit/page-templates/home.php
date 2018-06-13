<?php
/*
Template Name: Homepage template
*/
get_header(); ?>
    <?php
        $slogan = get_field('slogan');
    ?>

    <div class="slogan-wrapper container">
        <h1 class="slogan"><?php echo $slogan; ?></h1>
    </div>
    <div class="features-list-wrapper container">
        <div class="ttl-row">
            <a href="/education" class="lnk-view-all">View more
                <svg class="ico-arrow" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 109.907" xml:space="preserve">
                    <g>
                        <circle style="fill:#AAABAB;" cx="15.623" cy="55.266" r="15.623"/>
                        <circle style="fill:#AAABAB;" cx="70.405" cy="55.266" r="15.623"/>
                        <circle style="fill:#AAABAB;" cx="125.188" cy="55.266" r="15.623"/>
                        <path style="fill:#AAABAB;" d="M152.651,109.907c-2.749,0-5.509-0.957-7.742-2.907c-4.898-4.279-5.4-11.718-1.122-16.616l30.95-35.431l-30.95-35.43c-4.278-4.898-3.776-12.337,1.122-16.616c4.898-4.279,12.337-3.775,16.616,1.122l33.987,38.907c5.984,6.851,5.984,17.182,0,24.033l-33.987,38.908C159.197,108.543,155.932,109.907,152.651,109.907z M177.775,58.43h0.01H177.775z"/>
                    </g>
                </svg>
            </a>
        </div>

        <?php if( have_rows('features_list') ): ?>

            <div class="features-list">

                <?php while( have_rows('features_list') ): the_row();
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $hoverText = get_sub_field('hover-text');
                    $link = get_sub_field('link');
                ?>

                <div class="item">
                    <a href="<?php echo $link; ?>">
                        <div class="img-h">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                            <span class="text-h"><?php echo $hoverText; ?></span>
                        </div>
                        <strong class="name"><?php echo $title; ?></strong>
                    </a>
                </div>

                <?php endwhile; ?>

            </div>

        <?php endif; ?>

    </div>

<?php get_footer(); ?>