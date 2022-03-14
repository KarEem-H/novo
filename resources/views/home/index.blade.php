@extends('home.layouts.default')
@section('content')
                        <div class="modal loginModalOpened false">
                            <div class="modal-card">
                                <header class="modal-card-head">
                                    <p class="title-text-item
                                            modal-card-title has-text-black87
                                            en">Please verify your number</p>
                                    <div class="close-icon-container"><img src="assets/images/closeIcon.png"></div>
                                </header>
                                <form>
                                    <section class="modal-card-body has-padding">
                                        <p class="is-uppercase overline
                                                has-margin-bottom
                                                has-text-alternate">Your mobile
                                            number</p>
                                        <div class="has-prefix">
                                            <div class="input-container-text-field"><input type="number"
                                                    placeholder="501234567" class="text-field-type-1
                                                        has-shadow
                                                        has-extra-padding" value=""></div>
                                            <div class="prefix">+971</div>
                                        </div>
                                        <div class="is-flex
                                                next-button-container"><button type="submit" class="button
                                                    is-rounded has-text-white
                                                    has-text-weight-bold
                                                    next-step is-secondary
                                                    has-text-weight-bold
                                                    has-text-white btn-width" disabled="">Continue</button></div>
                                    </section>
                                </form>
                            </div>
                        </div>
                        <div class="sliding-menu en">
                            <div class="top-content"><img alt="Avatar" class="margin1rem" src="assets/fonts/avatar.svg"
                                    lazy="loaded" style="border-radius:
                                        100%;">
                                <h3 class="h3-text-item
                                        margin05rem has-text-white">-</h3>
                                <p class="helper-text-item phone-container
                                        has-text-secondary en">-</p>
                            </div> <a href="/home_assets/page_assets/settings">
                                <div class="list-item
                                        is-flex height72">
                                    <p class="button-text-item
                                            has-text-white">Settings</p>
                                    <div class="is-flex items-centered en">
                                        <img src="/assets/images/settings_white.svg" alt="Icon" class="icon-img">
                                    </div>
                                </div>
                            </a><a href="/home_assets/page_assets/bookings">
                                <div class="list-item
                                        is-flex height72">
                                    <p class="button-text-item
                                            has-text-white">Bookings</p>
                                    <div class="is-flex items-centered en">
                                        <img src="/assets/images/appointment_white.svg" alt="Icon" class="icon-img">
                                    </div>
                                </div>
                            </a><a href="/home_assets/page_assets/novo_credit">
                                <div class="list-item
                                        is-flex height72">
                                    <p class="button-text-item
                                            has-text-white">Top-up &amp; Credit</p>
                                    <div class="is-flex items-centered en">
                                        <img src="/assets/images/wallet-white.svg" alt="Icon" class="icon-img">
                                    </div>
                                </div>
                            </a><a href="/home_assets/page_assets/support">
                                <div class="list-item
                                        is-flex height72">
                                    <p class="button-text-item
                                            has-text-white">Support</p>
                                    <div class="is-flex items-centered en">
                                        <img src="/assets/images/support_white.svg" alt="Icon" class="icon-img">
                                    </div>
                                </div>
                            </a>
                            <div class="list-item is-flex height72">
                                <p class="button-text-item has-text-white
                                        text-danger">Logout</p>
                                <div class="is-flex items-centered en"></div>
                            </div>
                        </div>
                        <div class="main-content-wrapper">
                            <div class="wrapper
                                    welcome lazy-background en">
                                <div class="hero
                                        bg-gradient">
                                    <div class="hero-body">
                                        <div class="container">
                                            <div class="columns">
                                                <div class="column
                                                        is-6-desktop">
                                                    <div class="has-margin-top">
                                                        <h1 class="h1-text-item
                                                                has-margin
                                                                is-hidden-touch
                                                                has-text-black87">Hospitality Services.
                                                            Home Services.
                                                            Engineering Services.<br>
                                                            Call us Now: 800 HME (463)</h1>
                                                        <h2 class="h2-text-item
                                                                has-margin
                                                                is-hidden-desktop
                                                                has-text-black87
                                                                has-text-centered">Your
                                                            trusted home
                                                            service in UAE
                                                            starting from
                                                            AED 30 per hour</h2>
                                                        <!-- <div class="is-flex
                                                                book-now-container"><a
                                                                href="/home_assets/page_assets/service/home_cleaning"><button class="button
                                                                        is-rounded
                                                                        is-uppercase
                                                                        has-text-white
                                                                        has-text-weight-bold
                                                                        has-width
                                                                        is-secondary
                                                                        has-text-white">BOOK
                                                                    NOW</button></a></div> -->
                                                    </div>
                                                </div>
                                                <div class="column right-side
                                                        is-hidden-touch"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hero-bottom"></div>
                                </div>
                            </div>
                            <div class="wrapper middle-section">
                                <div class="container">
                                    <div>
                                        <h3 class="h3-text-item
                                                has-margin-bottom
                                                has-text-centered
                                                has-text-black87">Our
                                            Services</h3>
                                        <div class="seo-links-container
                                                is-relative">
                                            <div class="seo-links seo-slider
                                                    is-flex">
                                                <div class="seo-link-item-container
                                                        slick-item">
                                                    <div href="#" class="seo-link en">
                                                        <div class="seo-link-item">
                                                            <div class="icon
                                                                    img"><img alt="Disinfection
                                                                        Service"
                                                                    src="assets/images/home_services.png"
                                                                    class="lazy"></div>
                                                            <p class="subtitle-text-item
                                                                    has-text-black-87
                                                                    is-uppercase">Home Services</p>
                                                            <p class="caption-text-item
                                                                    description
                                                                    has-text-black60">Includes cleaning services, deep cleaning, regular and part time maids.</p>
                                                            <!-- <div class="funnel-badge
                                                                    mini-button"><a class="button
                                                                        is-small
                                                                        has-text-black38
                                                                        is-uppercase
                                                                        is-rounded
                                                                        is-primary">
                                                                    <p class="helper-text-item
                                                                            is-uppercase
                                                                            has-text-white">Book
                                                                        Now</p>
                                                                    <span class="icon
                                                                            is-small
                                                                            has-text-white"><i class="fas
                                                                                fa-chevron-right"></i></span>
                                                                </a></div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="seo-link-item-container
                                                        slick-item">
                                                    <div href="#" class="seo-link en">
                                                        <div class="seo-link-item">
                                                            <div class="icon
                                                                    img"><img alt="Disinfection
                                                                        Service" src="/home_assets/page_assets/assets/images/maintenance-services.png"
                                                                    class="lazy"></div>
                                                            <p class="subtitle-text-item
                                                                    has-text-black-87
                                                                    is-uppercase">Maintenance Services</p>
                                                            <p class="caption-text-item
                                                                    description
                                                                    has-text-black60">Includes plumbing, ac repair, duct cleaning, pool maintenance and more.</p>
                                                            <!-- <div class="funnel-badge
                                                                    mini-button"><a class="button
                                                                        is-small
                                                                        has-text-black38
                                                                        is-uppercase
                                                                        is-rounded
                                                                        is-primary">
                                                                    <p class="helper-text-item
                                                                            is-uppercase
                                                                            has-text-white">Book
                                                                        Now</p>
                                                                    <span class="icon
                                                                            is-small
                                                                            has-text-white"><i class="fas
                                                                                fa-chevron-right"></i></span>
                                                                </a></div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="seo-link-item-container
                                                        slick-item">
                                                    <div href="#" class="seo-link en">
                                                        <div class="seo-link-item">
                                                            <div class="icon
                                                                    img"><img alt="Disinfection
                                                                        Service"
                                                                    src="/home_assets/page_assets/assets/images/movers_packers.png"
                                                                    class="lazy"></div>
                                                            <p class="subtitle-text-item
                                                                    has-text-black-87
                                                                    is-uppercase">Movers & Packers</p>
                                                            <p class="caption-text-item
                                                                    description
                                                                    has-text-black60">We provide professional moving and packing services in dubai. We dont just pack your home, we pack your comfort.</p>
                                                            <!-- <div class="funnel-badge
                                                                    mini-button"><a class="button
                                                                        is-small
                                                                        has-text-black38
                                                                        is-uppercase
                                                                        is-rounded
                                                                        is-primary">
                                                                    <p class="helper-text-item
                                                                            is-uppercase
                                                                            has-text-white">Book
                                                                        Now</p>
                                                                    <span class="icon
                                                                            is-small
                                                                            has-text-white"><i class="fas
                                                                                fa-chevron-right"></i></span>
                                                                </a></div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="seo-link-item-container
                                                        slick-item">
                                                    <div href="#" class="seo-link en">
                                                        <div class="seo-link-item">
                                                            <div class="icon
                                                                    img"><img alt="Disinfection
                                                                        Service"
                                                                    src="/home_assets/page_assets/assets/images/movers_packers.png"
                                                                    class="lazy"></div>
                                                            <p class="subtitle-text-item
                                                                    has-text-black-87
                                                                    is-uppercase">Movers & Packers</p>
                                                            <p class="caption-text-item
                                                                    description
                                                                    has-text-black60">We provide professional moving and packing services in dubai. We dont just pack your home, we pack your comfort.</p>
                                                            <!-- <div class="funnel-badge
                                                                    mini-button"><a class="button
                                                                        is-small
                                                                        has-text-black38
                                                                        is-uppercase
                                                                        is-rounded
                                                                        is-primary">
                                                                    <p class="helper-text-item
                                                                            is-uppercase
                                                                            has-text-white">Book
                                                                        Now</p>
                                                                    <span class="icon
                                                                            is-small
                                                                            has-text-white"><i class="fas
                                                                                fa-chevron-right"></i></span>
                                                                </a></div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="seo-link-item-container
                                                        slick-item">
                                                    <div href="#" class="seo-link en">
                                                        <div class="seo-link-item">
                                                            <div class="icon
                                                                    img"><img alt="Disinfection
                                                                        Service"
                                                                    src="/home_assets/page_assets/assets/images/hospitality_Services.png"
                                                                    class="lazy"></div>
                                                            <p class="subtitle-text-item
                                                                    has-text-black-87
                                                                    is-uppercase">Hospitality Services</p>
                                                            <p class="caption-text-item
                                                                    description
                                                                    has-text-black60">We provide a wide range of hospitality services which includes manpower deployment, trainings, certifications and more.</p>
                                                            <!-- <div class="funnel-badge
                                                                    mini-button"><a class="button
                                                                        is-small
                                                                        has-text-black38
                                                                        is-uppercase
                                                                        is-rounded
                                                                        is-primary">
                                                                    <p class="helper-text-item
                                                                            is-uppercase
                                                                            has-text-white">Book
                                                                        Now</p>
                                                                    <span class="icon
                                                                            is-small
                                                                            has-text-white"><i class="fas
                                                                                fa-chevron-right"></i></span>
                                                                </a></div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="seo-link-item-container
                                                        slick-item">
                                                    <div href="#" class="seo-link en">
                                                        <div class="seo-link-item">
                                                            <div class="icon
                                                                    img"><img alt="Disinfection
                                                                        Service"
                                                                    src="/home_assets/page_assets/assets/images/hospitality_Services.png"
                                                                    class="lazy"></div>
                                                            <p class="subtitle-text-item
                                                                    has-text-black-87
                                                                    is-uppercase">Hospitality Services</p>
                                                            <p class="caption-text-item
                                                                    description
                                                                    has-text-black60">We provide a wide range of hospitality services which includes manpower deployment, trainings, certifications and more.</p>
                                                            <!-- <div class="funnel-badge
                                                                    mini-button"><a class="button
                                                                        is-small
                                                                        has-text-black38
                                                                        is-uppercase
                                                                        is-rounded
                                                                        is-primary">
                                                                    <p class="helper-text-item
                                                                            is-uppercase
                                                                            has-text-white">Book
                                                                        Now</p>
                                                                    <span class="icon
                                                                            is-small
                                                                            has-text-white"><i class="fas
                                                                                fa-chevron-right"></i></span>
                                                                </a></div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="seo-link-item-container
                                                        slick-item">
                                                    <div href="#" class="seo-link en">
                                                        <div class="seo-link-item">
                                                            <div class="icon
                                                                    img"><img alt="Disinfection
                                                                        Service" src="assets/images/sofa-cleaning.png"
                                                                    class="lazy"></div>
                                                            <p class="subtitle-text-item
                                                                    has-text-black-87
                                                                    is-uppercase">Sofa
                                                                Cleaning</p>
                                                            <p class="caption-text-item
                                                                    description
                                                                    has-text-black60">Give
                                                                Your Sofa
                                                                Plenty Of
                                                                Sparkle</p>
                                                            <div class="funnel-badge
                                                                    mini-button"><a class="button
                                                                        is-small
                                                                        has-text-black38
                                                                        is-uppercase
                                                                        is-rounded
                                                                        is-primary">
                                                                    <p class="helper-text-item
                                                                            is-uppercase
                                                                            has-text-white">Book
                                                                        Now</p>
                                                                    <span class="icon
                                                                            is-small
                                                                            has-text-white"><i class="fas
                                                                                fa-chevron-right"></i></span>
                                                                </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="seo-link-item-container
                                                        slick-item">
                                                    <div href="#" class="seo-link en">
                                                        <div class="seo-link-item">
                                                            <div class="icon
                                                                    img"><img alt="Disinfection
                                                                        Service"
                                                                    src="assets/images/special-request.png"
                                                                    class="lazy"></div>
                                                            <p class="subtitle-text-item
                                                                    has-text-black-87
                                                                    is-uppercase">REQUEST
                                                                A QUOTE</p>
                                                            <p class="caption-text-item
                                                                    description
                                                                    has-text-black60">Request
                                                                a quote for
                                                                any kind of
                                                                home
                                                                services you
                                                                need. Just
                                                                fill the
                                                                form and we
                                                                will call
                                                                you back!</p>
                                                            <div class="funnel-badge
                                                                    mini-button"><a class="button
                                                                        is-small
                                                                        has-text-black38
                                                                        is-uppercase
                                                                        is-rounded
                                                                        is-primary">
                                                                    <p class="helper-text-item
                                                                            is-uppercase
                                                                            has-text-white">Book
                                                                        Now</p>
                                                                    <span class="icon
                                                                            is-small
                                                                            has-text-white"><i class="fas
                                                                                fa-chevron-right"></i></span>
                                                                </a></div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="wrapper
                                        love-novoserivces-section
                                        lazy-background en">
                                    <div class="container">
                                        <div class="love-novoserivces">
                                            <h3 class="h3-text-item
                                                    has-margin-more
                                                    has-text-black87 mb-22">Why
                                                Novo!</h3>
                                            <div class="reasons">
                                                <div class="top is-flex">
                                                    <div class="reason en">
                                                        <p class="title-text-item
                                                                has-text-black87
                                                                en">Superior</p>
                                                        <div class="is-flex">
                                                            <p class="body-text-item
                                                                    has-text-black60">We
                                                                care about
                                                                quality more
                                                                than others
                                                                do</p>
                                                        </div>
                                                    </div>
                                                    <div class="reason en">
                                                        <p class="title-text-item
                                                                has-text-black87
                                                                en">Cheaper</p>
                                                        <div class="is-flex">
                                                            <p class="body-text-item
                                                                    has-text-black60">Best
                                                                price
                                                                guaranted</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bottom is-flex">
                                                    <div class="reason en">
                                                        <p class="title-text-item
                                                                has-text-black87
                                                                en">Reliable</p>
                                                        <div class="is-flex">
                                                            <p class="body-text-item
                                                                    has-text-black60">You
                                                                can rely on
                                                                us for any
                                                                home service
                                                                you need</p>
                                                        </div>
                                                    </div>
                                                    <div class="reason en">
                                                        <p class="title-text-item
                                                                has-text-black87
                                                                en">Availability</p>
                                                        <div class="is-flex">
                                                            <p class="body-text-item
                                                                    has-text-black60">We
                                                                are
                                                                available
                                                                24/7 ,
                                                                trusted and
                                                                verified
                                                                Professionals</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrapper testimonials-section
                                        lazy-background">
                                    <div class="container">
                                        <div class="columns">
                                            <div class="column is-8-desktop
                                                    is-offset-2-desktop">
                                                <h3 class="h3-text-item
                                                        has-text-centered
                                                        has-text-black87">What
                                                    Customers Say About Task
                                                    Fox</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal loginModalOpened
                                            false">
                                        <div class="modal-card">
                                            <header class="modal-card-head">
                                                <p class="title-text-item
                                                        modal-card-title
                                                        has-text-black87 en">Review</p>
                                                <div class="close-icon-container"><img
                                                        src="assets/images/closeIcon.png"></div>
                                            </header>
                                            <section class="modal-card-body
                                                    has-padding">
                                                <p class="has-margin-bottom"></p>
                                                <p class="rating-username"></p>
                                                <p>
                                                    March 9, 2022 </p>
                                            </section>
                                        </div>
                                    </div>
                                    <div style="display: flex; flex-flow: row
                                            wrap; justify-content: center;">
                                        <div class="rating-container">
                                            <h2 class="rating-title">Great
                                                service and great team</h2>
                                            <p class="rating-username">Stefano
                                                Sandro</p>
                                            <p> April 27, 2021
                                            </p>
                                            <div class="count-container">
                                                <div class="react-stars-wrapper-07447319719113479"
                                                    style="display: flex;">
                                                    <div aria-label="add
                                                            rating by typing an
                                                            integer from 0 to 5
                                                            or pressing arrow
                                                            keys" class="undefined
                                                            react-stars" style="overflow:
                                                            hidden; position:
                                                            relative;"><span class="" data-index="0" data-forhalf="★"
                                                            style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="1"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="2"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="3"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="4"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span>
                                                        <p role="status" style="position:
                                                                absolute; left:
                                                                -200rem;">5</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rating-container">
                                            <h2 class="rating-title">perfect
                                            </h2>
                                            <p class="rating-username">sara
                                                NMBR109</p>
                                            <p> June 13, 2021
                                            </p>
                                            <div class="count-container">
                                                <div class="react-stars-wrapper-023979591858335536"
                                                    style="display: flex;">
                                                    <div aria-label="add
                                                            rating by typing an
                                                            integer from 0 to 5
                                                            or pressing arrow
                                                            keys" class="undefined
                                                            react-stars" style="overflow:
                                                            hidden; position:
                                                            relative;"><span class="" data-index="0" data-forhalf="★"
                                                            style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="1"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="2"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="3"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="4"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span>
                                                        <p role="status" style="position:
                                                                absolute; left:
                                                                -200rem;">5</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rating-container">
                                            <h2 class="rating-title">loved
                                                Angel, she’s a sweetheart
                                                and very clean !
                                                if it’s possible to make her
                                                permanent for my house </h2>
                                            <p class="rating-username">novo
                                                NMBR91</p>
                                            <p> June 17, 2021
                                            </p>
                                            <div class="count-container">
                                                <div class="react-stars-wrapper-012063570187496064"
                                                    style="display: flex;">
                                                    <div aria-label="add
                                                            rating by typing an
                                                            integer from 0 to 5
                                                            or pressing arrow
                                                            keys" class="undefined
                                                            react-stars" style="overflow:
                                                            hidden; position:
                                                            relative;"><span class="" data-index="0" data-forhalf="★"
                                                            style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="1"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="2"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="3"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="4"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span>
                                                        <p role="status" style="position:
                                                                absolute; left:
                                                                -200rem;">5</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rating-container">
                                            <h2 class="rating-title">good</h2>
                                            <p class="rating-username">sara
                                                NMBR109</p>
                                            <p> June 18, 2021
                                            </p>
                                            <div class="count-container">
                                                <div class="react-stars-wrapper-008017697512118693"
                                                    style="display: flex;">
                                                    <div aria-label="add
                                                            rating by typing an
                                                            integer from 0 to 5
                                                            or pressing arrow
                                                            keys" class="undefined
                                                            react-stars" style="overflow:
                                                            hidden; position:
                                                            relative;"><span class="" data-index="0" data-forhalf="★"
                                                            style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="1"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="2"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="3"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="4"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span>
                                                        <p role="status" style="position:
                                                                absolute; left:
                                                                -200rem;">5</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rating-container">
                                            <h2 class="rating-title">Resty
                                                did an amazing job and
                                                cleaned very well. we are
                                                extremely happy with her
                                                work and would like to have
                                                her in the next bookin g as
                                                well...Good job Resty ????
                                                ???? ???? ???? </h2>
                                            <p class="rating-username">novo
                                                NMBR120</p>
                                            <p> June 26, 2021
                                            </p>
                                            <div class="count-container">
                                                <div class="react-stars-wrapper-04722552832722364"
                                                    style="display: flex;">
                                                    <div aria-label="add
                                                            rating by typing an
                                                            integer from 0 to 5
                                                            or pressing arrow
                                                            keys" class="undefined
                                                            react-stars" style="overflow:
                                                            hidden; position:
                                                            relative;"><span class="" data-index="0" data-forhalf="★"
                                                            style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="1"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="2"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="3"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="4"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span>
                                                        <p role="status" style="position:
                                                                absolute; left:
                                                                -200rem;">5</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rating-container">
                                            <h2 class="rating-title">shes
                                                amazing</h2>
                                            <p class="rating-username">sara
                                                NMBR109</p>
                                            <p> June 27, 2021
                                            </p>
                                            <div class="count-container">
                                                <div class="react-stars-wrapper-08322566419032129"
                                                    style="display: flex;">
                                                    <div aria-label="add
                                                            rating by typing an
                                                            integer from 0 to 5
                                                            or pressing arrow
                                                            keys" class="undefined
                                                            react-stars" style="overflow:
                                                            hidden; position:
                                                            relative;"><span class="" data-index="0" data-forhalf="★"
                                                            style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="1"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="2"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="3"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="4"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span>
                                                        <p role="status" style="position:
                                                                absolute; left:
                                                                -200rem;">5</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rating-container">
                                            <h2 class="rating-title">they
                                                were very clean and nice
                                            </h2>
                                            <p class="rating-username">novo
                                                NMBR135</p>
                                            <p> July 6, 2021
                                            </p>
                                            <div class="count-container">
                                                <div class="react-stars-wrapper-009612914428135055"
                                                    style="display: flex;">
                                                    <div aria-label="add
                                                            rating by typing an
                                                            integer from 0 to 5
                                                            or pressing arrow
                                                            keys" class="undefined
                                                            react-stars" style="overflow:
                                                            hidden; position:
                                                            relative;"><span class="" data-index="0" data-forhalf="★"
                                                            style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="1"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="2"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="3"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="4"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span>
                                                        <p role="status" style="position:
                                                                absolute; left:
                                                                -200rem;">5</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rating-container">
                                            <h2 class="rating-title">very
                                                good and clean they did
                                                thier job very good </h2>
                                            <p class="rating-username">novo
                                                NMBR135</p>
                                            <p> July 6, 2021
                                            </p>
                                            <div class="count-container">
                                                <div class="react-stars-wrapper-045201405795974137"
                                                    style="display: flex;">
                                                    <div aria-label="add
                                                            rating by typing an
                                                            integer from 0 to 5
                                                            or pressing arrow
                                                            keys" class="undefined
                                                            react-stars" style="overflow:
                                                            hidden; position:
                                                            relative;"><span class="" data-index="0" data-forhalf="★"
                                                            style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="1"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="2"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="3"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span><span class="" data-index="4"
                                                            data-forhalf="★" style="position:
                                                                relative;
                                                                overflow:
                                                                hidden; cursor:
                                                                default;
                                                                display: block;
                                                                float: left;
                                                                color: rgb(255,
                                                                215, 0);
                                                                font-size:
                                                                24px;">★</span>
                                                        <p role="status" style="position:
                                                                absolute; left:
                                                                -200rem;">5</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrapper
                                        mobile-app-downloader-section">
                                    <div class="container">
                                        <div class="mobile-app-downloader
                                                en">
                                            <div class="columns">
                                                <div class="column
                                                        is-5-desktop
                                                        is-12-mobile
                                                        mobile-app-left">
                                                    <div class="left-content">
                                                        <h3 class="h3-text-item
                                                                has-text-black87">You
                                                            are a few clicks
                                                            away from a
                                                            fresh happy home</h3>
                                                        <div class="is-flex">
                                                            <p class="body-text-item
                                                                    has-text-black87">Download
                                                                our App now
                                                                and enjoy
                                                                our service</p>
                                                        </div>
                                                        <div class="app-icons"><a class="en"
                                                                href="https://apps.apple.com"
                                                                target="_blank"><img alt="Download
                                                                        iOS App"
                                                                    src="/home_assets/page_assets/assets/images/download-app-ios@2x.jpg"
                                                                    class="lazy"></a><a class="en"
                                                                href="https://play.google.com"
                                                                target="_blank"><img alt="Download
                                                                        Android
                                                                        App"
                                                                    src="/home_assets/page_assets/assets/images/download-app-android@2x.jpg"
                                                                    class="lazy"></a></div>
                                                    </div>
                                                </div>
                                                <div class="column
                                                        is-5-desktop
                                                        is-12-mobile
                                                        mobile-app-right
                                                        is-offset-2-desktop en"><img alt="Footer app
                                                            image" src="/home_assets/page_assets/assets/images/footer-app-images@2x.png"
                                                        class="lazy"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal loginModalOpened false">
                                <div class="modal-card">
                                    <header class="modal-card-head">
                                        <p class="title-text-item
                                                modal-card-title
                                                has-text-black87 en">Special
                                            Request</p>
                                        <div class="close-icon-container"><img src="assets/images/closeIcon.png"></div>
                                    </header>
                                    <div class="content-section covid-modal">
                                        <form class="promo-form column
                                                is-12-touch has-margin-top card
                                                has-min-height">
                                            <div class="has-margin-bottom
                                                    text-input">
                                                <div class="text-field-type-2
                                                        address">
                                                    <div class="md-field
                                                            md-theme-default
                                                            md-focused
                                                            md-has-value"><label class="has-text-black38
                                                                label-text en">Request
                                                            Title</label><input type="text" placeholder="Enter
                                                                Request Title" class="text-field-type-1
                                                                md-textarea" value=""></div>
                                                </div>
                                            </div>
                                            <div class="has-margin-bottom
                                                    text-input">
                                                <div class="text-field-type-2
                                                        address">
                                                    <div class="md-field
                                                            md-theme-default
                                                            md-focused
                                                            md-has-value"><label class="has-text-black38
                                                                label-text en">Name</label><input type="text"
                                                            placeholder="Enter
                                                                Name" class="text-field-type-1
                                                                md-textarea" value=""></div>
                                                </div>
                                            </div>
                                            <div class="has-margin-bottom
                                                    text-input has-prefix">
                                                <div class="text-field-type-2
                                                        address en">
                                                    <div class="md-field
                                                            md-theme-default
                                                            md-focused
                                                            md-has-value
                                                            has-prefix"><label class="has-text-black38
                                                                label-text en">Phone
                                                            Number</label><input type="text" placeholder="501******"
                                                            class="text-field-type-1
                                                                md-textarea" pattern="[+0-9]*" value="">
                                                        <div class="prefix">+971</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="has-margin-bottom
                                                    text-input">
                                                <div class="text-field-type-2
                                                        address">
                                                    <div class="md-field
                                                            md-theme-default
                                                            md-focused
                                                            md-has-value"><label class="has-text-black38
                                                                label-text en">Email</label><input type="email"
                                                            placeholder="Enter
                                                                Email" class="text-field-type-1
                                                                md-textarea" value=""></div>
                                                </div>
                                            </div><label class="has-text-black38
                                                    label-text
                                                    home-request-description">Request
                                                Description</label><textarea placeholder="Enter Request
                                                    Description" class="textarea
                                                    home-request-desc-text"></textarea>
                                            <div class="is-flex
                                                    next-button-container"><button type="submit" class="button is-rounded
                                                        has-text-white
                                                        has-text-weight-bold
                                                        next-step is-secondary
                                                        has-text-weight-bold
                                                        has-text-white btn-width">Submit</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

@endsection