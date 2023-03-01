<?php get_header() ?>

<section>
    <div class="hero paralax">
        <?php if( get_field('hero_video') ): ?>
            <div class="hero__video">
                <video autoplay loop muted>
                    <source src="<?php the_field('hero_video'); ?>" type="video/mp4">
                </video>
            </div>
        <?php elseif ( get_field('hero_image') ) : ?>
            <div class="paralax-bg" style="background-image: url(<?php the_field('hero_image'); ?>)"></div>
        <?php else: ?>
            <div class="paralax-bg paralax-bg-default"></div>
        <?php endif; ?>
        
        <h1 class="hero__title gsap-hero">
            <?php if( get_field('page_title_1') ): ?>
                <span class=""><?php the_field('page_title_1'); ?></span>
            <?php endif; ?>
            <?php if( get_field('page_title_2') ): ?>
                <span class=""><?php the_field('page_title_2'); ?></span>
            <?php endif; ?>
        </h1>

        <?php if( get_field('page_sub_title') ): ?>
            <p class="hero__text gsap-hero">
                <?php the_field('page_sub_title'); ?>
            </p>
        <?php endif; ?>

        <div class="hero__icons gsap-hero">
            <a href="#FoodAndDrink" class="">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/icon-hero-food-drink.png" alt="Food and Drink" width="180" height="180">
            </a>
            <a href="#WhatsOn" class="">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/icon-hero-whats-on.png" alt="What's On" width="180" height="180">
            </a>
            <a href="#FindUs" class="">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/icon-hero-find-us.png" alt="Find Us" width="180" height="180">
            </a>
            <a href="#OpeningHours" class="">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/icon-hero-opening.png" alt="Opening Hours" width="180" height="180">
            </a>
        </div>
    </div>

    <div class="hero__bottom">
        <?php if( get_field('hero_text') ): ?>
            <div class="hero__intro gsap-hero">
                <?php the_field('hero_text'); ?>
            </div>
        <?php endif; ?>

        <ul class="hero__offering gsap-hero">
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/icon-offering-wifi.svg" alt="" width="40" height="33">
                <span>FREE WIFI</span>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/icon-offering-dog.svg" alt="" width="40" height="33">
                <span>DOG FRIENDLY</span>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/icon-offering-sun.svg" alt="" width="40" height="40">
                <span>OUTSIDE SEATING</span>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/icon-offering-baby.svg" alt="" width="40" height="37">
                <span>FAMILY FRIENDLY</span>
            </li>

            <?php if(! get_field('no_parking') ): ?>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/icon-offering-car.svg" alt="" width="40" height="32">
                    <span>PARKING</span>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</section>

<section class="section drinks__section bg-teal" id="FoodAndDrink">
    <div class="drinks__bg"></div>

    <div class="container">
        <div class="row drinks__row">
            <div class="col drinks__col">
                <div class="text-center">
                    <h2 class="drinks__title">Drinks</h2>

                    <?php if( get_field('drinks_text') ): ?>
                        <div class="drinks__text">
                            <?php the_field('drinks_text'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="btn-group">
                        <?php if( get_field('drinks_menu') ): ?>
                            <a href="<?php the_field('drinks_menu'); ?>" class="btn btn-dark" target="_blank">Drinks Menu</a>
                        <?php endif; ?>
                        <?php if( get_field('drinks_spritz_menu') ): ?>
                            <a href="<?php the_field('drinks_spritz_menu'); ?>" class="btn btn-dark" target="_blank">Spritz Menu</a>
                        <?php endif; ?>
                        <?php if( get_field('drinks_wine_menu') ): ?>
                            <a href="<?php the_field('drinks_wine_menu'); ?>" class="btn btn-dark" target="_blank">Wine List</a>
                        <?php endif; ?>
                        <?php if( get_field('drinks_tequila_menu') ): ?>
                            <a href="<?php the_field('drinks_tequila_menu'); ?>" class="btn btn-dark" target="_blank">Tequila Menu</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="splide splide__drinks drinks__carousel">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/img-drink-1.jpg" alt="" width="330" height="300">
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/img-drink-2.jpg" alt="" width="330" height="300">
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/img-drink-3.jpg" alt="" width="330" height="300">
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/img-drink-4.jpg" alt="" width="330" height="300">
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/img-drink-5.jpg" alt="" width="330" height="300">
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/img-drink-6.jpg" alt="" width="330" height="300">
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row food__row">
            <div class="food__col">
                <div class="text-center">
                    <h2 class="drinks__title">Food</h2>

                    <?php if( get_field('food_text') ): ?>
                        <div class="drinks__text">
                            <?php the_field('food_text'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="btn-group">
                        <?php if( get_field('food_menu') ): ?>
                            <a href="<?php the_field('food_menu'); ?>" class="btn btn-dark" target="_blank">Food Menu</a>
                        <?php endif; ?>
                        <?php if( get_field('kids_menu') ): ?>
                            <a href="<?php the_field('kids_menu'); ?>" class="btn btn-dark" target="_blank">Kids Menu</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="food__col">
                <?php if( get_field('food_image') ): ?>
                    <div class="food__image">
                        <img src="<?php the_field('food_image'); ?>" alt="" width="552" height="503">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="section whats-on__section" id="WhatsOn">
    <div class="container relative">
        <div class="whats-on__bg"></div>

        <h2 class="whats-on__title gsap-whats-on"><span>What's On</span></h2>
    </div>

    <div class="splide splide__whats-on whats-on__carousel">
        <div class="splide__track">
            <?php if( have_rows('whats_on') ): ?>
                <ul class="splide__list">
                    <?php while( have_rows('whats_on') ) : the_row(); ?>
                        <?php if( get_sub_field('whats_on_image') ): ?>
                            <li class="splide__slide">
                                <img src="<?php echo get_sub_field('whats_on_image') ?>" alt="" width="330" height="300" class="modal-target">
                            </li>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>

    <div class="container find-us__container">
        <div class="find-us" id="FindUs">
            <div class="find-us__title-wrapper">
                <h2 class="find-us__title">FIND US</h2>
            </div>

            <div
                id="map"
                class="map"
                data-map-lat="<?php the_field('map_lat'); ?>"
                data-map-long="<?php the_field('map_long'); ?>"
                data-map-address="<?php the_field('map_address'); ?>"
            ></div>
        </div>

        <div class="find-us__text">
            <p><a href="#OpeningHours">Looking to book?<br>Read about booking <span>here</span></a></p>

            <div class="find-us__bg"></div>
        </div>
    </div>
</section>

<section class="section gallery">
    <div class="container gallery__container relative">
        <div class="gallery__bg"></div>

        <div class="text-center">
            <h2 class="gallery__title">Gallery</h2>

            <?php if( have_rows('gallery') ): ?>
                <ul class="gallery__list">
                    <?php while( have_rows('gallery') ) : the_row(); ?>
                        <?php if( get_sub_field('gallery_image') ): ?>
                            <li class="splide__slide">
                                <img src="<?php echo get_sub_field('gallery_image') ?>" alt="" width="800" height="800" class="modal-target">
                            </li>
                        <?php endif ?>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="section about" id="About">
    <div class="container">
        <div class="row about__row">
            <div class="col about__col">
                <div class="about__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/img-about-1.png" alt="" class="about__image">
                    <h3 class="about__title">Sign Up to Our Newsletter</h3>
                    <a href="#" class="btn btn-sm btn--teal about__btn">Find out more</a>
                </div>
            </div>

            <div class="col about__col">
                <div class="about__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/img-about-2.png" alt="" class="about__image">
                    <h3 class="about__title">Work for<br>Salt</h3>
                    <a href="#" class="btn btn-sm btn--teal about__btn">Find out more</a>
                </div>
            </div>

            <div class="col about__col">
                <div class="about__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/img-about-3.png" alt="" class="about__image">
                    <h3 class="about__title">About<br>Salt</h3>
                    <a href="#" class="btn btn-sm btn--teal about__btn">Find out more</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section opening" id="OpeningHours">
    <div class="container">
        <h2 class="sr-only">Opening Hours</h2>

        <div class="row opening__row">
            <div class="col opening__col">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/img-opening.png" alt="" class="opening__image">
            </div>

            <div class="col opening__col">
                <?php if( get_field('opening_times') ): ?>
                    <div class="opening__table">
                        <?php the_field('opening_times'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <?php if( get_field('booking_text') ): ?>
            <h3 class="opening__title">Bookings</h3>

            <div class="opening__text">
                <?php the_field('booking_text'); ?>
            </div>
        <?php endif; ?>

        <ul class="social opening__contact">
            <?php if( get_field('contact_email') ): ?>
                <li>
                    <a href="mailto:<?php the_field('contact_email'); ?>"><span class="icon"><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 64C150 64 64 150 64 256s86 192 192 192c17.7 0 32 14.3 32 32s-14.3 32-32 32C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256v32c0 53-43 96-96 96c-29.3 0-55.6-13.2-73.2-33.9C320 371.1 289.5 384 256 384c-70.7 0-128-57.3-128-128s57.3-128 128-128c27.9 0 53.7 8.9 74.7 24.1c5.7-5 13.1-8.1 21.3-8.1c17.7 0 32 14.3 32 32v80 32c0 17.7 14.3 32 32 32s32-14.3 32-32V256c0-106-86-192-192-192zm64 192c0-35.3-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64s64-28.7 64-64z"/></svg></span><?php the_field('contact_email'); ?></a>
                </li>
            <?php endif; ?>

            <?php if( get_field('contact_phone') ): ?>
                <li>
                    <?php $phone = str_replace(' ', '', get_field('contact_phone')); ?>
                    <a href="tel:<?php echo $phone; ?>"><span class="icon"><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg></span><?php the_field('contact_phone'); ?></a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</section>

<section class="section faqs" id="Faqs">
    <div class="container faqs__container">
        <h2 class="faqs__title">Faqs</h2>

        <?php if( have_rows('faqs') ): ?>
            <?php while( have_rows('faqs') ) : the_row(); ?>
                <?php if( get_sub_field('faqs_question') ): ?>
                    <button class="faqs__btn js-accordion">
                        <span><?php echo get_sub_field('faqs_question') ?></span>
                    </button>
                <?php endif; ?>

                <?php if( get_sub_field('faqs_answer') ): ?>
                    <div class="faqs__content">
                        <div class="faqs__text">
                            <?php echo get_sub_field('faqs_answer') ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    
    <h2 class="faqs__title shop__title">Browse Our Online Shop</h2>

    <div class="splide splide__shop shop__carousel">
        <div class="splide__track">
            <ul class="splide__list text-center">
                <li class="splide__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/img-can-1.jpg" alt="" width="360" height="360">
                    <p>JUTE SESSION IPA</p>
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/img-can-2.jpg" alt="" width="360" height="360">
                    <p>LOOM PALE</p>
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/img-can-3.jpg" alt="" width="360" height="360">
                    <p>CITRA NEIPA JNR</p>
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/img-can-4.jpg" alt="" width="360" height="360">
                    <p>HUCKABACK NEIPA</p>
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/img-can-5.jpg" alt="" width="360" height="360">
                    <p>TRAM DOUBLE NEIPA</p>
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/img-can-6.jpg" alt="" width="360" height="360">
                    <p>ALPACA DDH IPA</p>
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/img-can-7.jpg" alt="" width="360" height="360">
                    <p>IKAT DDH DIPA</p>
                </li>
            </ul>
        </div>
    </div>
</section>

<?php get_footer() ?>
