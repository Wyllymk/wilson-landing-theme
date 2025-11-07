<?php
/**
 * The template for displaying landing page
 *
 * @package Wilson_Landing
 * @version 1.0.0
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

get_header();
?>

<main class="landing-page">
    <div class="landing-page__container">

        <!-- Hero Section -->
        <header class="hero">
            <div class="hero__background"></div>

            <div class="hero__content">
                <div class="hero__title-wrapper">
                    <h1 class="hero__title">Form Pages</h1>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/pro-badge.svg"
                        alt="Pro" class="hero__badge">
                </div>

                <p class="hero__description">
                    Want to improve your form conversions? Form Pages by WPForms allows you to create completely custom
                    "distraction-free" form landing pages to boost conversions (without writing any code).
                </p>

                <div class="hero__actions">
                    <button class="btn btn--secondary">Try the Demo</button>
                    <button class="btn btn--primary">Get WPForms Now</button>
                </div>
            </div>

            <div class="hero__video-wrapper">
                <div class="video-player" id="videoContainer">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/form-pages.svg"
                        alt="Video Thumbnail" class="video-player__thumbnail" id="thumbnail">
                    <button class="video-player__play-btn" id="playButton" aria-label="Play video">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/play-button.svg"
                            alt="Play">
                    </button>
                    <div class="video-player__iframe-wrapper" id="videoIframe"></div>
                </div>
            </div>
        </header>

        <!-- Features Section -->
        <section class="features">
            <div class="features__wrapper">
                <div class="features__item">
                    <div class="features__item-content">
                        <div class="features__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/eye.svg" alt="">
                        </div>
                        <h3 class="features__title">Distraction Free<br>Landing Pages</h3>
                        <p class="features__description">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit.
                            Pellentesque aliquet nibh nec urna.
                        </p>
                    </div>
                    <div class="features__divider features__divider--right"></div>
                    <div class="features__divider features__divider--bottom"></div>
                </div>

                <div class="features__item">
                    <div class="features__item-content">
                        <div class="features__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/paint-brush.svg"
                                alt="">
                        </div>
                        <h3 class="features__title">Multiple Styles to<br>Choose From</h3>
                        <p class="features__description">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit.
                            Pellentesque aliquet nibh nec urna.
                        </p>
                    </div>
                    <div class="features__divider features__divider--right"></div>
                    <div class="features__divider features__divider--bottom"></div>
                </div>

                <div class="features__item">
                    <div class="features__item-content">
                        <div class="features__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/swatchbook.svg"
                                alt="">
                        </div>
                        <h3 class="features__title">Pre-made & Custom<br>Color Schemes</h3>
                        <p class="features__description">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit.
                            Pellentesque aliquet nibh nec urna.
                        </p>
                    </div>
                    <div class="features__divider features__divider--bottom"></div>
                </div>

                <div class="features__item">
                    <div class="features__item-content">
                        <div class="features__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/image.svg" alt="">
                        </div>
                        <h3 class="features__title">Custom Logo<br>Support</h3>
                        <p class="features__description">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit.
                            Pellentesque aliquet nibh nec urna.
                        </p>
                    </div>
                    <div class="features__divider features__divider--right"></div>
                </div>

                <div class="features__item">
                    <div class="features__item-content">
                        <div class="features__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/smile-beam.svg"
                                alt="">
                        </div>
                        <h3 class="features__title">No Coding Knowledge<br>Required</h3>
                        <p class="features__description">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit.
                            Pellentesque aliquet nibh nec urna.
                        </p>
                    </div>
                    <div class="features__divider features__divider--right"></div>
                    <div class="features__divider features__divider--top"></div>
                </div>

                <div class="features__item">
                    <div class="features__item-content">
                        <div class="features__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/check-circle.svg"
                                alt="">
                        </div>
                        <h3 class="features__title">Quick & Easy<br>Setup</h3>
                        <p class="features__description">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit.
                            Pellentesque aliquet nibh nec urna.
                        </p>
                    </div>
                    <div class="features__divider features__divider--top"></div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials">
            <div class="testimonials__wrapper">
                <article class="testimonial" data-animation-delay="0">
                    <p class="testimonial__text">
                        "The user interface is very smooth, and quite quick. It does open a separate screen for form
                        creation and editing, but I suspect it does this to improve flow and speed."
                    </p>
                    <div class="testimonial__footer">
                        <span class="testimonial__author">- WebEndev</span>
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star-solid.svg"
                                alt="5 stars" class="testimonial__rating">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star-solid.svg"
                                alt="5 stars" class="testimonial__rating">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star-solid.svg"
                                alt="5 stars" class="testimonial__rating">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star-solid.svg"
                                alt="5 stars" class="testimonial__rating">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star-solid.svg"
                                alt="5 stars" class="testimonial__rating">
                        </div>
                    </div>
                </article>

                <article class="testimonial" data-animation-delay="200">
                    <p class="testimonial__text">
                        "I don't know why the existing form plugins never thought of templates. 99% of people installing
                        this plugin want a simple contact form. Instead of you having to build it, you click the Simple
                        Contact Form template and it's built for you!"
                    </p>
                    <div class="testimonial__footer">
                        <span class="testimonial__author">- Bill Erickson</span>
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star-solid.svg"
                                alt="5 stars" class="testimonial__rating">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star-solid.svg"
                                alt="5 stars" class="testimonial__rating">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star-solid.svg"
                                alt="5 stars" class="testimonial__rating">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star-solid.svg"
                                alt="5 stars" class="testimonial__rating">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star-solid.svg"
                                alt="5 stars" class="testimonial__rating">
                        </div>
                    </div>
                </article>

                <article class="testimonial" data-animation-delay="400">
                    <p class="testimonial__text">
                        "I've used this plugin on several sites I've built and it's perfect — easy to use, and just
                        works. Very grateful that this plugin exists."
                    </p>
                    <div class="testimonial__footer">
                        <span class="testimonial__author">- LouisePKelly</span>
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star-solid.svg"
                                alt="5 stars" class="testimonial__rating">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star-solid.svg"
                                alt="5 stars" class="testimonial__rating">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star-solid.svg"
                                alt="5 stars" class="testimonial__rating">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star-solid.svg"
                                alt="5 stars" class="testimonial__rating">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/star-solid.svg"
                                alt="5 stars" class="testimonial__rating">
                        </div>
                    </div>
                </article>
            </div>

            <div class="testimonials__actions">
                <button class="btn btn--secondary">Try the Demo</button>
                <button class="btn btn--primary">Get WPForms Now</button>
            </div>
        </section>

        <!-- Content Section -->
        <section class="content-section">
            <div class="content-section__wrapper">
                <div class="content-section__media">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/screenshot-01.png"
                        alt="Screenshot" class="content-section__image">
                </div>

                <div class="content-section__text">
                    <h2 class="content-section__heading">Gain Control of Your Forms</h2>
                    <p class="content-section__paragraph">
                        The biggest challenge with WordPress forms until now has been that all form layouts are
                        controlled by WordPress themes, and most themes simply don't prioritize form layouts. And worst,
                        a lot of them lack the ability to create custom landing pages. WPForms Form Pages addon fixes
                        this problem, so you don't have to settle for mediocre form layouts and low form conversions…
                        With Form Pages, you can instantly create a custom landing page for any of your WordPress forms
                        by simply enabling the Form Page Mode from your Form Settings. You can add your logo, choose
                        from two different high-converting form styles, pick a color scheme and that's it. Your
                        distraction-free custom form landing page is ready to be shared.
                    </p>
                </div>
            </div>
        </section>

        <!-- Use Cases Section -->
        <section class="use-cases">
            <div class="use-cases__screenshots">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/screenshot-02.png"
                    alt="Screenshot" class="use-cases__screenshot">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/screenshot-03.png"
                    alt="Screenshot" class="use-cases__screenshot">
            </div>

            <h2 class="use-cases__heading">
                Form Pages by WPForms is an exceptional Google Forms alternative for WordPress,
                and you can use it to create custom landing pages for:
            </h2>

            <div class="use-cases__items-wrapper">
                <div class="use-cases__item">
                    <div class="use-cases__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/envelope.svg" alt="icon">
                    </div>
                    <h3 class="use-cases__title">Lead Generation</h3>
                    <p class="use-cases__description">
                        Make subscribing to your email list super simple for users by creating a webpage
                        dedicated solely to signing up.
                    </p>
                </div>

                <div class="use-cases__divider"></div>

                <div class="use-cases__item">
                    <div class="use-cases__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/poll.svg" alt="icon">
                    </div>
                    <h3 class="use-cases__title">Surveys</h3>
                    <p class="use-cases__description">
                        Whether it be a survey to gauge customer loyalty, an employee satisfaction survey,
                        or an event feedback form, having a webpage
                    </p>
                </div>

                <div class="use-cases__divider"></div>

                <div class="use-cases__item">
                    <div class="use-cases__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/id-badge.svg" alt="icon">
                    </div>
                    <h3 class="use-cases__title">Membership Sites</h3>
                    <p class="use-cases__description">
                        Create a form landing web page on your site with user registration and login forms,
                        making it easier on people to sign up and login to your
                    </p>
                </div>
            </div>

            <div class="use-cases__cta">
                <p class="use-cases__cta-title">
                    We took the pain out of creating form landing pages and made it easy.
                </p>
                <p class="use-cases__cta-text">
                    What are you waiting for?
                    <a href="#" class="use-cases__cta-link">Create custom form landing pages with WPForms today!</a>
                </p>
            </div>
        </section>

    </div>
</main>

<?php
get_footer();