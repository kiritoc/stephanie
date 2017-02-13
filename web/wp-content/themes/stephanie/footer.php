<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stephanie
 */
if (!get_theme_mod('show_only_main_header')):
?>

    <footer class="footer">
        <div class="container">
            <span>footer content</span>
        </div>
    </footer>
</div> <!-- #container end (start tag is in header.php) -->

<?php endif;
wp_footer(); ?>

</body>
</html>
