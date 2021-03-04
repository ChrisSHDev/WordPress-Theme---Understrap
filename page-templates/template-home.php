<?php
/**
 * Template Name: Template-home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
    <div class="home-banner">
        <div class="container">
            <h1>A Dining Experience</h1>
        </div>
    </div>
    <div class="home-call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="call-to-action">
                        <div class="image"></div>
                        <div class="title">Dining Menu</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="call-to-action second">
                        <div class="image"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="call-to-action third">
                        <div class="image"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
