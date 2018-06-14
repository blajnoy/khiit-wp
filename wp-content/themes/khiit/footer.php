<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package khiit
 */
?>

    <?php if ( is_front_page() ) : ?>
        </main><!-- #main-content -->
        <footer id="footer" class="footer">
            <div class="container">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer-menu',
                        'menu_id'        => 'footer-nav',
                        'container'=> false
                    ));
                ?>
                <p class="copy">&copy; KHIIT 2001‐2018. All rights reserved.</p>
            </div>
        </footer>
        </div><!-- #wrapper -->
    <?php elseif (is_page( 'contact' )) : ?>
        </main><!-- #main-content -->
        </div><!-- #wrapper -->
    <?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
