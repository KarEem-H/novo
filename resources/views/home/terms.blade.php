@extends('home.layouts.default')
@section('content')
<!-- Start -->
<html lang="en">

<head>
    <base href="/">
    <meta charset="utf-8">
    <link rel="icon" href="/logo.png">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#000000">
    <meta name="description" content="Your trusted home service in UAE starting from AED 30 per hour">
    <link rel="apple-touch-icon" href="/logo.png">
    <link rel="manifest" href="/manifest.json">
    <title>Terms - novo Web</title>
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://connect.facebook.net/signals/config/192088292930255?v=2.9.55&amp;r=stable" async=""></script>
    <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script>
    ! function(e, t, n, c, o, a, f) {
        e.fbq || (o = e.fbq = function() {
            o.callMethod ? o.callMethod.apply(o, arguments) : o.queue.push(arguments)
        }, e._fbq || (e._fbq = o), o.push = o, o.loaded = !0, o.version = "2.0", o.queue = [], (a = t
            .createElement(n)).async = !0, a.src = "https://connect.facebook.net/en_US/fbevents.js", (f = t
            .getElementsByTagName(n)[0]).parentNode.insertBefore(a, f))
    }(window, document, "script"), fbq("init", "192088292930255"), fbq("track", "PageView")
    </script><noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=192088292930255&ev=PageView&noscript=1" /></noscript>
    <link href="/static/css/2.f2108134.chunk.css" rel="stylesheet">
    <link href="/static/css/main.48a87d2f.chunk.css" rel="stylesheet">
    <script src="https://js.stripe.com/v3"></script>
</head>

<body class="en undefined" data-new-gr-c-s-check-loaded="14.1052.0" data-gr-ext-installed=""><noscript>You need to
        enable JavaScript to run this app.</noscript>
    <div id="root">
        <div id="__nuxt">
            <div id="__layout">
                <div>
                    <div class="main-wrapper en  lang-terms">
                        <!-- <nav id="main-nav" role="navigation" aria-label="main navigation"
                            class="navbar is-fixed-top scrolled en">
                            <div class="container">
                                <div class="navbar-brand">
                                    <div class="is-flex"></div><a class="logo" href="/"><img
                                            src="../../assets/images/logo-latest.png" alt="Logo"></a>
                                    <div class="is-hidden-desktop mobile-login en">
                                        <div class="funnel-badge"><span id="login-btn"
                                                class="button is-small has-text-black38 is-uppercase is-rounded is-transparent is-bordered is-half-padding">
                                                <p class="helper-text-item is-uppercase  has-text-black60">Login</p><img
                                                    src="../../assets/fonts/avatar.svg" alt="Image"
                                                    class="avatar has-margin-left">
                                            </span></div>
                                    </div>
                                </div>
                                <div id="navbarMenu" class="navbar-menu is-hidden-touch">
                                    <div class="navbar-end">
                                        <div class="navbar-item navbar-dropdown-header">
                                            <div class="funnel-badge mini-button"
                                                style="align-self: center; margin-right: 10px;"><a
                                                    class="button is-small has-text-black38 is-uppercase is-rounded is-primary"
                                                    href="/service/home_cleaning"
                                                    style="background-color: rgb(255, 168, 0);">
                                                    <p class="helper-text-item is-uppercase has-text-white">Book Now</p>
                                                </a></div>
                                            <div class="funnel-badge"><span id="login-btn"
                                                    class="button is-small has-text-black38 is-uppercase is-rounded is-transparent is-bordered is-half-padding">
                                                    <p class="helper-text-item is-uppercase  has-text-black60">Login</p>
                                                    <img src="../../assets/fonts/avatar.svg" alt="Image"
                                                        class="avatar has-margin-left">
                                                </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav> -->
                        <div class="modal loginModalOpened false">
                            <div class="modal-card ">
                                <header class="modal-card-head">
                                    <p class="title-text-item modal-card-title has-text-black87 en">Please verify your
                                        number</p>
                                    <div class="close-icon-container"><img src="assets/images/closeIcon.png"></div>
                                </header>
                                <form>
                                    <section class="modal-card-body has-padding">
                                        <p class="is-uppercase overline has-margin-bottom has-text-alternate">Your
                                            mobile number</p>
                                        <div class="has-prefix">
                                            <div class="input-container-text-field"><input type="number"
                                                    placeholder="501234567"
                                                    class="text-field-type-1 has-shadow has-extra-padding" value="">
                                            </div>
                                            <div class="prefix">+971</div>
                                        </div>
                                        <div class="is-flex next-button-container"><button type="submit"
                                                class="button is-rounded has-text-white has-text-weight-bold next-step is-secondary has-text-weight-bold has-text-white btn-width "
                                                disabled="">Continue</button></div>
                                    </section>
                                </form>
                            </div>
                        </div>
                        <div class="sliding-menu  en">
                            <div class="top-content"><img alt="Avatar" class="margin1rem" src="assets/fonts/avatar.svg"
                                    lazy="loaded" style="border-radius: 100%;">
                                <h3 class="h3-text-item margin05rem has-text-white">-</h3>
                                <p class="helper-text-item phone-container has-text-secondary en">-</p>
                            </div> <a href="/settings">
                                <div class="list-item is-flex height72">
                                    <p class="button-text-item has-text-white">Settings</p>
                                    <div class="is-flex items-centered en"> <img src="/assets/images/settings_white.svg"
                                            alt="Icon" class="icon-img"></div>
                                </div>
                            </a><a href="/bookings">
                                <div class="list-item is-flex height72">
                                    <p class="button-text-item has-text-white">Bookings</p>
                                    <div class="is-flex items-centered en"> <img
                                            src="/assets/images/appointment_white.svg" alt="Icon" class="icon-img">
                                    </div>
                                </div>
                            </a><a href="/novo_credit">
                                <div class="list-item is-flex height72">
                                    <p class="button-text-item has-text-white">Top-up &amp; Credit</p>
                                    <div class="is-flex items-centered en"> <img src="/assets/images/wallet-white.svg"
                                            alt="Icon" class="icon-img"></div>
                                </div>
                            </a><a href="/support">
                                <div class="list-item is-flex height72">
                                    <p class="button-text-item has-text-white">Support</p>
                                    <div class="is-flex items-centered en"> <img src="/assets/images/support_white.svg"
                                            alt="Icon" class="icon-img"></div>
                                </div>
                            </a>
                            <div class="list-item is-flex height72">
                                <p class="button-text-item has-text-white text-danger">Logout</p>
                                <div class="is-flex items-centered en"></div>
                            </div>
                        </div>
                        <div class="wrapper">
                            <div class="container">
                                <div class="container"><a class="nuxt-link-active">
                                        <p
                                            class="is-uppercase overline has-margin-bottom has-text-black38 has-text-centered is-hidden-touch">
                                            home</p>
                                    </a>
                                    <h3
                                        class="h3-text-item has-text-black87 has-text-centered has-mobile-right is-hidden-touch">
                                        Terms &amp; Conditions</h3>
                                </div>
                                <div class="columns has-margin-top main-column">
                                    <div class="column is-12-desktop is-12-touch">
                                        <div class="content has-text-black87">
                                            <p>Novo CLEANING SERVICES maintains the www.Novo Website
                                                ('Site'). The following are the terms of use that govern use of the Site
                                                ('Terms of Use'). By using the Site you expressly agree to be bound by
                                                these Terms of Use and the Novo privacy policy and to follow
                                                these Terms of Use and all applicable laws and regulations governing use
                                                of the Site. Novo SERVICES reserves the right to change these Terms
                                                of Use at any time, effective immediately upon posting on the Site.
                                                Please check this page of the Site periodically. We will note when there
                                                are updates to the Terms of Use at the bottom of the Terms of Use. If
                                                you violate these Terms of Use, Novo SERVICES may terminate your use
                                                of the Site, bar you from future use of the Site, and/or take
                                                appropriate legal action against you.</p>
                                            <p><strong>LIMITED LICENSE.</strong> You are granted a limited,
                                                non-exclusive, revocable and non-transferable license to utilize and
                                                access the Site pursuant to the requirements and restrictions of these
                                                Terms of Use. Novo SERVICES may change, suspend, or discontinue any
                                                aspect of the Site at any time. Novo SERVICES may also, without
                                                notice or liability, impose limits on certain features and services or
                                                restrict your access to all or portions of the Site. You shall have no
                                                rights to the proprietary software and related documentation, if any,
                                                provided to you in order to access the Site. Except as provided in the
                                                Terms of Use, you shall have no right to directly or indirectly, own,
                                                use, loan, sell, rent, lease, license, sublicense, assign, copy,
                                                translate, modify, adapt, improve, or create any new or derivative works
                                                from, or display, distribute, perform, or in any way exploit the Site,
                                                or any of its contents (including software) in whole or in part.</p>
                                            <p><strong>1. SITE OPERATION.</strong> United Arab Emirates is our Country
                                                of Domicile. Novo SERVICES controls this Site from the U.A.E. TASK
                                                novo SERVICES makes no representation that this Site is appropriate for
                                                use in other locations. If you use this Site from other locations you
                                                are responsible for ensuring compliance with local laws. You may not
                                                use, export or re-export any materials from this Site in violation of
                                                any applicable laws or regulations, including, but not limited to any
                                                U.A.E export laws and regulations.</p>
                                            <p><strong>2. APPLICABLE LAW.</strong> The Laws of the United Arab Emirates
                                                shall govern the use of the Site and the Terms of Use, without regards
                                                to conflict of laws principals. All disputes arising in connection
                                                therewith shall be heard only by a court of competent jurisdiction in
                                                U.A.E.</p>
                                            <p><strong>3. MULTI-CURRENCY PRICED TRANSACTION : </strong>The displayed
                                                price and currency selected by you, will be the same price and currency
                                                charged to the Card and printed on the Transaction Receipt.</p>
                                            <p><strong>4. PURCHASES.</strong> Novo SERVICES accepts payment by Visa
                                                or Mastercard debit and credit cards in AED for its products and
                                                services. All online purchases are also governed by the terms and
                                                conditions of respective merchant service providers. Please review
                                                respective merchant service provider’s user agreement and privacy policy
                                                before entering any transaction. Interpretation. These Terms of Use
                                                supersede all other written and oral communications or agreements with
                                                regard to the subject matters discussed in these Terms of Use. A waiver
                                                or modification of these Terms of Use will only be effective if made in
                                                writing signed by an authorized officer of Novo SERVICES. All
                                                refunds will be made onto the original mode of payment.</p>
                                            <p><strong>5. OFFICE FOREIGN ASSETS CONTROL (OFAC) SANCTIONED
                                                    COUNTRIES.</strong>Novo SERVICES will not trade with or provide
                                                any services to individuals and companies owned or controlled by, or
                                                acting for or on behalf of, OFAC targeted countries AND individuals,
                                                groups, and entities, such as terrorists and narcotics traffickers
                                                designated under the OFAC programs that are not country specific</p>
                                            <p><strong>6. REPRESENTATIONS BY YOU.</strong> By visiting the Site, you
                                                represent, warrant and covenant that (a) you are at least 18 years old;
                                                (b) that all materials of any kind submitted by you to Novo SERVICES
                                                through the Site or for inclusion on the Site will not plagiarize,
                                                violate or infringe upon the rights of any third-party including trade
                                                secret, copyright, trademark, trade dress, privacy, patent, or other
                                                personal or proprietary rights. The customer using the website who are
                                                Minor /under the age of 18 shall not register as a User of the website
                                                and shall not transact on or use the website.</p>
                                            <p><strong>7. PERMITTED USE.</strong> You agree that you are only authorized
                                                to visit, view and to retain a copy of pages of this Site for your own
                                                personal use, that you shall not duplicate, download, publish, modify or
                                                otherwise distribute the material on this Site for any purpose other
                                                than for personal use, unless otherwise specifically authorized by TASK
                                                novo SERVICES to do so. You also agree not to deep-link to the site for
                                                any purpose, unless specifically authorized by Novo SERVICES to do
                                                so. The content and software on this Site is the property of Novo
                                                SERVICES. The cardholder must retain a copy of transaction records and
                                                Merchant policies and rules.</p>
                                            <p><strong>8. YOUR ACCOUNT..</strong>If you use Novo SERVICES Site, you
                                                are responsible for maintaining the confidentiality of your account and
                                                password and for restricting access to your account from any devices,
                                                and you agree to accept responsibility for all activities that occur
                                                under your account or password. The Site shall not be responsible or
                                                liable, directly or indirectly, in any way for any loss or damage of any
                                                kind incurred as a result of, or in connection with, your failure to
                                                comply with this section.</p>
                                            <p><strong>NO COMMERCIAL USE.</strong> This Site may not be used by you for
                                                any commercial purposes such as to conduct sales of merchandise or
                                                services of any kind. You must obtain Novo SERVICES’s prior written
                                                consent to make commercial offers of any kind on the Site, whether by
                                                advertising, solicitations, links, or any other form of communication.
                                                Novo SERVICES will investigate and take appropriate legal action
                                                against anyone who violates this provision, including without
                                                limitation, removing the offending communication from the Site and
                                                barring such violators from use of the Site.</p>
                                            <p><strong>LINKS AND SEARCH RESULTS.</strong> The Site may automatically
                                                produce search results that reference and/or link to third party sites
                                                throughout the World Wide Web. Novo SERVICES has no control over
                                                these sites or the content within them. Novo SERVICES does not
                                                guarantee, represent or warrant that the content contained in the sites
                                                is accurate, legal and/or inoffensive. Novo SERVICES does not
                                                endorse the content of any third party site, nor does it make any
                                                representation or warranty about these sites, including that they will
                                                not contain viruses or otherwise impact your computer. By using the Site
                                                to search for or link to another site, you agree and understand that you
                                                may not make any claim against Novo SERVICES for any damages or
                                                losses, whatsoever, resulting from your use of the Site to obtain search
                                                results or to link to another site. If you have a problem with a link
                                                from the Site, you may notify us at <a>support@Novo</a>.</p>
                                            <p><strong>COPYRIGHT POLICY.</strong> Novo SERVICES may terminate the
                                                privileges of any user who uses this Site to unlawfully transmit
                                                copyrighted material without a license, express consent, valid defense
                                                or fair use exemption to do so. If you submit information to this Site,
                                                you warrant that the information does not infringe the copyrights or
                                                other rights of third parties..</p>
                                            <p><strong>INTELLECTUAL PROPERTY.</strong> Although Novo SERVICES is not
                                                responsible for the content, quality or accuracy of data provided by
                                                users, compilations of such data, text, information and other materials
                                                made available to users through Novo SERVICES’s system. The On-line
                                                Materials are Novo SERVICES’s intellectual property, and are
                                                protected by U.S. and international intellectual property laws. The
                                                On-line Materials may not be copied or redistributed either in whole or
                                                in part without prior written consent of Novo SERVICES, except as
                                                expressly and specifically permitted under these Terms of Use.</p>
                                            <p>The On-line Materials are and will remain the exclusive property of TASK
                                                novo SERVICES. All rights, titles and interests in and to the On-line
                                                Materials will be and remain vested solely in Novo SERVICES. Under
                                                no circumstances will you have any right, directly or indirectly, to
                                                own, use, copy, loan, sell, rent, lease, license, sublicense,
                                                redistribute, assign or otherwise convey the On- line Materials, or any
                                                rights thereto, except as expressly and specifically provided in the
                                                Terms of Use. Nothing in these Terms of Use will convey to you any
                                                right, title or interest, except that of a license with the express
                                                rights and subject to all limitations herein. Nothing in these Terms of
                                                Use grants you the right, directly or indirectly, to use the On-line
                                                Materials to create a product for resale or to use the On-line Materials
                                                in any way that competes with Novo SERVICES.</p>
                                            <p> You acknowledge and agree that Novo SERVICES will own all rights,
                                                titles and interests in and to any copy, translation, modification,
                                                adaptation, derivative work or improvement of the On- line Materials
                                                made by or for you. At Novo SERVICES’s request, you must execute, or
                                                obtain the execution of, any instrument that may be necessary to assign
                                                these rights, titles or interests to Novo SERVICES or perfect these
                                                rights, titles or interests in Novo SERVICES’s name. DISCLAIMER OF
                                                WARRANTY, LIMITATION OF DAMAGES. Novo SERVICES MAKES NO WARRANTY OR
                                                REPRESENTATION OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING BUT NOT
                                                LIMITED TO WARRANTY OF TITLE OR NON-INFRINGEMENT OR IMPLIED WARRANTY OF
                                                MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE,NON-INFRINGEMENT OR
                                                OTHER VIOLATION OF RIGHTS IN RELATION TO THE AVAILABILITY, ACCURACY,
                                                VALIDITY, RELIABILITY OR CONTENT OF THESE PAGES AND/OR THE SITE. TASK
                                                novo SERVICES ALSO DOES NOT MAKE ANY REPRESENTATION OR WARRANTY REGARDING
                                                THE ACCURACY OR RELIABILITY OF ANY ADVICE, OPINION, STATEMENT OR OTHER
                                                INFORMATION THAT IS SUBMITTED, DISPLAYED OR UPLOADED THROUGH THE SITE BY
                                                ANY USER. Novo SERVICES SHALL NOT BE LIABLE FOR ANY DIRECT,
                                                INDIRECT, INCIDENTAL, SPECIAL OR CONSEQUENTIAL DAMAGES, LOST PROFITS OR
                                                FOR BUSINESS INTERRUPTION ARISING OUT OF THE USE OF OR INABILITY TO USE
                                                THIS SITE, EVEN IF Novo SERVICES HAS BEEN ADVISED OF THE POSSIBILITY
                                                OF SUCH DAMAGES. SOME JURISDICTIONS DO NOT ALLOW EXCLUSION OF CERTAIN
                                                WARRANTIES OR LIMITATIONS OF LIABILITY, SO THE ABOVE LIMITATIONS OR
                                                EXCLUSIONS MAY NOT APPLY TO YOU. THE LIABILITY OF Novo SERVICES
                                                WOULD IN SUCH CASE BE LIMITED TO THE GREATEST EXTENT OF LIABILITY
                                                PERMITTED BY LAW.</p>
                                            <p><strong>VIOLATION OF TERMS OF USE.</strong> You understand and agree that
                                                in Novo SERVICES’s sole discretion, and without prior notice, TASK
                                                novo SERVICES may terminate your access to the Site, or exercise any
                                                other remedy available and remove any unauthorized user information, if
                                                Novo SERVICES believes that the information you provide has violated
                                                or is inconsistent with these Terms of Use, or violates the rights of
                                                Novo SERVICES, or any third party, or violates the law. You agree
                                                that monetary damages may not provide a sufficient remedy to Novo
                                                SERVICES for violations of these Terms of Use and you consent to
                                                injunctive or other equitable relief for such violations. Novo
                                                SERVICES may release user information about you if required by law or
                                                subpoena.</p>
                                            <p><strong>INDEMNITY.</strong> You agree to indemnify and hold Novo
                                                SERVICES, its subsidiaries, affiliates, officers, agents and other
                                                partners and employees, harmless from any loss, liability, claim or
                                                demand, including reasonable attorneys’ fees, made by any third party
                                                due to or arising out of or relating to your use of the Site, including
                                                also your use of the Site to provide a link to another site or to upload
                                                content or other information to the Site, or your breach of the Terms of
                                                Use.</p>
                                            <p><strong>LICENCE GRANTED TO YOU.</strong> By providing materials to TASK
                                                novo SERVICES, including by submitting or uploading content or materials
                                                for use on the Site you represent and warrant that you or the owner of
                                                all rights to such content or materials has expressly granted Novo
                                                SERVICES an irrevocable world-wide right in all languages and in
                                                perpetuity to use and exploit all or any part of the content and
                                                materials provided by you. Novo SERVICES may publish and distribute
                                                any such submitted content or materials at its sole discretion by any
                                                method now existing or later developed. You agree that you shall waive
                                                all claims and have no recourse against Novo SERVICES for any
                                                alleged or actual infringement or misappropriation of any proprietary
                                                rights in any communication, content or material submitted to Novo
                                                SERVICES. Any communication or materials you send to Novo SERVICES
                                                will be treated as non- confidential and non-proprietary and may be
                                                disseminated or used by Novo SERVICES for any purpose, including,
                                                but not limited to, developing, creating, manufacturing or marketing
                                                products or services.</p>
                                            <p><strong> ADVERTISING.</strong> The Site may contain advertisements and/or
                                                sponsorships. The advertisers and/or sponsors that provide these
                                                advertisements and sponsorships are solely responsible for insuring that
                                                the materials submitted for inclusion on the Site are accurate and
                                                comply with all applicable laws. Novo SERVICES is not responsible
                                                for the acts or omissions of any advertiser or sponsor.</p>
                                            <p><strong> SEVERABILITY.</strong> If any provision of the Terms of Use is
                                                held to be invalid, void or unenforceable, the remaining provisions
                                                shall nevertheless continue in full force and effect.</p>
                                            <p>Headings section titles in this Agreement are for convenience and do not
                                                define, limit, or extend any provision of this Agreement.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="wrapper footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2"><a class="logo" href="/"><img
                                            src="../../assets/images/footer-logo-latest.png" alt="Logo"></a></div>
                                <div class="col-md-4">
                                    <div class="contact-details">
                                        <h3>Contact Us</h3>
                                        <ul>
                                            <li><label>Address:</label><a class="mr-2"
                                                    href="https://goo.gl/maps/Nv1s1mGTWR7H1f7YA"
                                                    target="_blank">#4-308-3, Fordeal Business Center, Deira, Dubai</a>
                                            </li>
                                            <li><label>Country:</label>
                                                <p> UAE</p>
                                            </li>
                                            <li><label>Email:</label><a href="mailto:support@Novo">
                                                    support@Novo</a></li>
                                            <li><label>Contact Number:</label><a
                                                    href="tel:+971585570005">+971585570005</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sp-side">
                                        <h3>Secure Payments</h3>
                                        <div class="img-box"><img src="../assets/images/vm-cards.png"
                                                alt="Accepted Cards Image"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="links-container columns en">
                                <div class="links-left-side is-flex column is-6-desktop is-12-touch"><a
                                        href="/terms_conditions">
                                        <p class="caption-text-item has-text-white">Terms</p>
                                    </a><a href="/privacy_policy">
                                        <p class="caption-text-item has-text-white">Privacy</p>
                                    </a><a href="/payment_refund_policy">
                                        <p class="caption-text-item has-text-white">Payment &amp; Refund Policy</p>
                                    </a><a href="/about-us">
                                        <p class="caption-text-item has-text-white">About us</p>
                                    </a><a href="/support">
                                        <p class="caption-text-item has-text-white">Contact us</p>
                                    </a></div>
                                <div
                                    class="links-right-side is-flex column is-6-desktop is-12-touch footer-social-icons">
                                    <a href="https://www.facebook.com/novoofficial" target="_blank">
                                        <p class="caption-text-item has-text-alternate"><i class="fab fa-facebook"></i>
                                        </p>
                                    </a><a href="https://www.instagram.com/mynovo/" target="_blank">
                                        <p class="caption-text-item has-text-alternate"><i class="fab fa-instagram"></i>
                                        </p>
                                    </a><a href="https://api.whatsapp.com/send?phone=+971585570005" target="_blank">
                                        <p class="caption-text-item has-text-alternate"><i class="fab fa-whatsapp"></i>
                                        </p>
                                    </a></div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="Toastify"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/lazyload.min.js"></script>
    <script src="./assets/js/slick.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
    ! function(e) {
        function t(t) {
            for (var n, a, i = t[0], c = t[1], f = t[2], s = 0, p = []; s < i.length; s++) a = i[s], Object.prototype
                .hasOwnProperty.call(o, a) && o[a] && p.push(o[a][0]), o[a] = 0;
            for (n in c) Object.prototype.hasOwnProperty.call(c, n) && (e[n] = c[n]);
            for (l && l(t); p.length;) p.shift()();
            return u.push.apply(u, f || []), r()
        }

        function r() {
            for (var e, t = 0; t < u.length; t++) {
                for (var r = u[t], n = !0, i = 1; i < r.length; i++) {
                    var c = r[i];
                    0 !== o[c] && (n = !1)
                }
                n && (u.splice(t--, 1), e = a(a.s = r[0]))
            }
            return e
        }
        var n = {},
            o = {
                1: 0
            },
            u = [];

        function a(t) {
            if (n[t]) return n[t].exports;
            var r = n[t] = {
                i: t,
                l: !1,
                exports: {}
            };
            return e[t].call(r.exports, r, r.exports, a), r.l = !0, r.exports
        }
        a.e = function(e) {
            var t = [],
                r = o[e];
            if (0 !== r)
                if (r) t.push(r[2]);
                else {
                    var n = new Promise((function(t, n) {
                        r = o[e] = [t, n]
                    }));
                    t.push(r[2] = n);
                    var u, i = document.createElement("script");
                    i.charset = "utf-8", i.timeout = 120, a.nc && i.setAttribute("nonce", a.nc), i.src = function(
                    e) {
                        return a.p + "static/js/" + ({} [e] || e) + "." + {
                            3: "a63f2ad6"
                        } [e] + ".chunk.js"
                    }(e);
                    var c = new Error;
                    u = function(t) {
                        i.onerror = i.onload = null, clearTimeout(f);
                        var r = o[e];
                        if (0 !== r) {
                            if (r) {
                                var n = t && ("load" === t.type ? "missing" : t.type),
                                    u = t && t.target && t.target.src;
                                c.message = "Loading chunk " + e + " failed.\n(" + n + ": " + u + ")", c.name =
                                    "ChunkLoadError", c.type = n, c.request = u, r[1](c)
                            }
                            o[e] = void 0
                        }
                    };
                    var f = setTimeout((function() {
                        u({
                            type: "timeout",
                            target: i
                        })
                    }), 12e4);
                    i.onerror = i.onload = u, document.head.appendChild(i)
                } return Promise.all(t)
        }, a.m = e, a.c = n, a.d = function(e, t, r) {
            a.o(e, t) || Object.defineProperty(e, t, {
                enumerable: !0,
                get: r
            })
        }, a.r = function(e) {
            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                value: "Module"
            }), Object.defineProperty(e, "__esModule", {
                value: !0
            })
        }, a.t = function(e, t) {
            if (1 & t && (e = a(e)), 8 & t) return e;
            if (4 & t && "object" == typeof e && e && e.__esModule) return e;
            var r = Object.create(null);
            if (a.r(r), Object.defineProperty(r, "default", {
                    enumerable: !0,
                    value: e
                }), 2 & t && "string" != typeof e)
                for (var n in e) a.d(r, n, function(t) {
                    return e[t]
                }.bind(null, n));
            return r
        }, a.n = function(e) {
            var t = e && e.__esModule ? function() {
                return e.default
            } : function() {
                return e
            };
            return a.d(t, "a", t), t
        }, a.o = function(e, t) {
            return Object.prototype.hasOwnProperty.call(e, t)
        }, a.p = "/", a.oe = function(e) {
            throw console.error(e), e
        };
        var i = this["webpackJsonpnovo-web"] = this["webpackJsonpnovo-web"] || [],
            c = i.push.bind(i);
        i.push = t, i = i.slice();
        for (var f = 0; f < i.length; f++) t(i[f]);
        var l = c;
        r()
    }([])
    </script>
    <script src="/static/js/2.ab461fe0.chunk.js"></script>
    <script src="/static/js/main.aa66c0d7.chunk.js"></script><iframe name="__privateStripeMetricsController7380"
        frameborder="0" allowtransparency="true" scrolling="no" allow="payment *"
        src="https://js.stripe.com/v3/m-outer-9fe86c29346daf61dc2cc0586b4fad18.html#url=https%3A%2F%2FNovo%2Fterms_conditions&amp;title=Terms%20-%20novo%20Web&amp;referrer=https%3A%2F%2FNovo%2F&amp;muid=2d525de5-2b06-4254-8552-b964e19bd273437c6e&amp;sid=NA&amp;version=6&amp;preview=false"
        aria-hidden="true" tabindex="-1"
        style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; visibility: hidden !important; position: fixed !important; height: 1px !important; pointer-events: none !important; user-select: none !important;"></iframe>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>
<!-- End -->
@endsection