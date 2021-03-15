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

    <div class="home-news">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-6">
                    <a href="#" class="news-img">
                        <div class="image"></div>
                        <div class="date">10.06.2020</div>
                        <div class="category">What's On</div>
                    </a>
                </div>
                <div class="col-xl-1 d-none d-xl-block"></div>
                <div class="col-xl-6 col-md-6">
                    <h2>
                        Mother's Day
                    </h2>
                    <div class="content-holder">
                        <p>
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                        </p>
                     </div>
                    <a href="#" class="button">
                            Learn More <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="home-about">
        <div class="top-overay">
        <img src="<?php echo get_template_directory_uri();?>/img/vector.svg" alt="cut">
        </div>
        <div class="bottom-overay">
        <img src="<?php echo get_template_directory_uri();?>/img/Vector (1).svg" alt="cut">
        </div>
        <div class="title-holder">
            <div class="container">
                <h2>
                    <span> Served Fresh </span>
                    from the addock to the plate
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

    <div class="home-about-image">
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

    <div class="home-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-7">
                    <h2>Happy Customers</h2>
                    <div class="testimonial-holder">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga voluptatibus numquam tempora mollitia dignissimos animi magni amet. Perferendis provident deserunt quos libero, error quae sapiente doloremque quibusdam doloribus, voluptatem temporibus!
                        </p>
                        <div class="seperator"></div>
                        <div class="author">Author</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-subscribe">
        <div class="title-holder">
            <div class="container">
                <h2>
                    <span> Sign Up </span>
                    Subscribe to our email newsletter
                </h2>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-11">
                    <?php echo do_shortcode('[contact-form-7 id="23" title="Newsletter Subscription"]') ?>
                </div>
            </div>
        </div>
    </div>

    <div class="home-social">
        <div class="title-holder">
            <div class="container">
                <h2>
                    <span> Social </span>
                    Follow us on Facebook and Instagram
                </h2>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-11">
                    <div class="facebook-holder">
                        <div class="title">
                            <div class="fa fa-facebook-square"></div>
                            What's new on facebook
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="<?php echo get_template_directory_uri();?>/img/call-to-action-1.jpg" alt="logo">
                            </div>
                            <div class="col-lg-6">
                                <div class="content">
                                    <div class="meta-data">
                                        <div class="date"><i class="fa fa-calendar"></i>  Posted 21 Jan</div>
                                        <div class="likes"><i class="fa fa-thumbs-up"></i>235 </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora culpa quisquam, eligendi totam voluptates reprehenderit unde. Illum animi cupiditate possimus iusto amet itaque vel dolorem tempore sed quia, nemo molestias!
                                    </p>
                                    <a href="#" class="button">Read On Facebook</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="instagram-holder">
                        <div class="title">
                                <div class="fa fa-instagram"></div>
                                @chrislee0320
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
