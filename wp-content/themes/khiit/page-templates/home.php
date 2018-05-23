<?php
/*
Template Name: Homepage template
*/
get_header(); ?>

<?php /*if (have_posts()) : while (have_posts()) : the_post(); */?><!--
    <?php /*the_content(); */?>
--><?php /*endwhile; endif; */?>

    <div class="slogan-wrapper container">
        <h1 class="slogan">A <a href="#">hub</a> for innovative people who really <a href="#">know</a> how to make <a href="#">technologies</a> work.</h1>
    </div>
    <div class="features-list-wrapper container">
        <div class="ttl-row">
            <span>From the Education</span>
            <a href="#" class="lnk-view-all">View all
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
        <div class="features-list">
            <div class="item">
                <a href="#">
                    <div class="img-h">
                        <img src="images/img01.jpg" alt="image">
                    </div>
                    <strong class="name">ABOUT</strong>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <div class="img-h">
                        <img src="images/img01.jpg" alt="image">
                    </div>
                    <strong class="name">DISTANCE EDUCATION</strong>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <div class="img-h">
                        <img src="images/img01.jpg" alt="image">
                    </div>
                    <strong class="name">SPECIALIZED TRAINING</strong>
                </a>
            </div>
        </div>
    </div>

<?php get_footer(); ?>