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
                <div class="col-md-4">
                    <a href="#" class="call-to-action">
                        <div class="image"></div>
                        <div class="title">Dining Menu</div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="call-to-action second">
                        <div class="image"></div>
                        <div class="title">Lunch Menu</div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="call-to-action third">
                        <div class="image"></div>
                        <div class="title">Functions</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="home-welcome">
        <div class="title-holder">
            <div class="container">
                <h2>
                    <span> Welcome to </span>
                    The Backbeach Eating House
                </h2>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-8">
                    <p class="tag-line">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    </p>
                    <p>
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    </p>
                </div>
                <div class="col-lg-3">
                    <a href="#" class="button">
                        Learn More <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
