<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

        <div class="title-holder">
            <div class="container">
                <h2>
                    <span> Contact </span>
                    Send Us Message
                </h2>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-11">
                    <?php echo do_shortcode('[contact-form-7 id="24" title="Untitled"]'); ?>
                    <div class="copyright">
                        @ Copyright The Backbeach Eating House - All Rights Reserved
                    </div>
                </div>
            </div>
        </div>

</div><!-- wrapper end -->

<div class="footer-warning">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-1 col-lg-2 col-md-2">
            <img src="<?php echo get_template_directory_uri();?>/img/glass-cheers@2x.svg" alt="logo">
            </div>
            <div class="col-xl-11 col-lg-10 col-md-10">
                <h3>Warning!</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi unde, numquam quisquam repellat explicabo laudantium. Aliquid explicabo, voluptate esse officiis accusantium, deserunt deleniti harum consectetur quaerat eveniet, modi ratione iusto?</p>
            </div>
        </div>
    </div>
</div>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

