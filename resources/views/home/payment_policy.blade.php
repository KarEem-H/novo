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
    <title>novo Web - novo Web</title>
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
                    <div class="main-wrapper en  lang-privacy">
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
                        <div class="wrapper privacy-main">
                            <div class="container">
                                <div class="container"><a class="nuxt-link-active">
                                        <p
                                            class="is-uppercase overline has-margin-bottom has-text-black38 has-text-centered is-hidden-touch">
                                            home</p>
                                    </a>
                                    <h3
                                        class="h3-text-item has-text-black87 has-text-centered has-mobile-right is-hidden-touch">
                                        Payment and Refund Policy</h3>
                                </div>
                                <div class="columns has-margin-top main-column">
                                    <div class="column is-12-desktop is-12-touch">
                                        <div class="content has-text-black87">
                                            <p>This is Novo Services’s policy for Payments (“Policy”). This policy
                                                applies only to activities Novo Services (“Company”) engages in on
                                                its website Novo and/or its related mobile applications (“Site”)
                                                and does not apply to Company activities that are 'offline or unrelated
                                                to the website. Any products or services that a user requests on our
                                                Site are referred to as “Service(s)”.</p>
                                            <h3>Modes of Payment</h3>
                                            <p>The Site accepts payment by cash or through Visa or Mastercard debit and
                                                credit cards for its products and services. Services booked via the Site
                                                are also governed by the terms and conditions of respective merchant
                                                service providers.</p>
                                            <p>If you choose to pay the fee by your credit card, you, as the cardholder,
                                                must retain a copy of transaction records and our policies and rules.
                                            </p>
                                            <p>You are responsible for maintaining the confidentiality of all the
                                                information in your account.</p>
                                            <h3>Paying for Services</h3>
                                            <h4>PAYMENT DEDUCTION</h4>
                                            <p>Novo will charge you for your finalized bookings through the payment
                                                method specified on the website (e.g. a credit card or cash). If you
                                                happen to pay any applicable charges with your credit card, we may seek
                                                pre-authorization of your credit card account prior to your purchase.
                                            </p>
                                            <h4>MULTI-CURRENCY PRICED TRANSACTION</h4>
                                            <p> The displayed price and currency selected by you, will be the same price
                                                and currency charged to the Card and printed on the Transaction Receipt.
                                                Where VAT or optional extras apply, the transaction amount will be shown
                                                to the user as “Total to pay”.</p>
                                            <h4>PAYMENT CONFIRMATION</h4>
                                            <p>The Site user will receive payment confirmation by email on the email
                                                address given at the time of order, through a notification sent in an
                                                app, or both. The confirmation will be sent after the payment has been
                                                processed within 24 hours of receipt of payment.</p>
                                            <h4>PAYMENT REFUNDS</h4>
                                            <p>If you want to cancel your booking, you are required to give a minimum of
                                                24 hours’ notice of cancellation. Notification must be in written format
                                                and to be sent to <a>support@Novo</a>. We reserve the right to
                                                levy a certain charge up to AED 100 cover any relevant administrative
                                                expenses.</p>
                                            <h4>REFUND POLICY</h4>
                                            <p>Refunds will be done only through the Original Mode of Payment.</p>
                                            <h4>Administrative Charges</h4>
                                            <p>Users who book services on the Site can manage their Services through the
                                                website or mobile apps. It is possible to change the dates, time or the
                                                specific requirements of any given service, provided it is done so
                                                reasonably in advance before the start of the booked service.</p>
                                            <p>Failure to provide sufficient notice when cancelling or changing services
                                                may result in administrative fees being charged to the user. These fees
                                                are governed by the Cancellations Policy and maybe amended from time to
                                                time.</p>
                                            <p>By booking the services on the Site you agree to abide by these policies
                                                and agree to pay any applicable charges. The Company reserves the right
                                                to use any legal means it may have at its disposal to recover such
                                                charges or to deny further use of the Site’s Services to the user, as it
                                                may deem necessary.</p>
                                            <h3>Cancellations Policy</h3>
                                            <h4>LATE CANCELLATIONS &amp; CHANGES</h4>
                                            <p>For late cancellations or change requests (late is defined as less than
                                                24 hours before the start of the service) <br> OR</p>
                                            <h4>NO SHOWS</h4>
                                            <p>Where a customer was not present to avail the scheduled service and as a
                                                consequence the service was not delivered </p>
                                            <p>In such cases Administrative charges will apply. Such charges will depend
                                                on the type of service which was scheduled.</p>
                                            <h4>PAYMENT OF CHARGES</h4>
                                            <p>Any applicable administrative charges will be communicated to the
                                                Customer at the time when the request for cancellation or changes is
                                                made.</p>
                                            <ul>
                                                <li>
                                                    <p>Charges are deducted at the time of cancellation in case of a
                                                        late cancellation and for late changes at the time of completion
                                                        of the delivery of the service.</p>
                                                </li>
                                                <li>
                                                    <p>Charges for No Shows are applied once our agent notified NOVO.</p>
                                                </li>
                                            </ul>
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
    <script src="/static/js/main.aa66c0d7.chunk.js"></script><iframe name="__privateStripeMetricsController3660"
        frameborder="0" allowtransparency="true" scrolling="no" allow="payment *"
        src="https://js.stripe.com/v3/m-outer-9fe86c29346daf61dc2cc0586b4fad18.html#url=https%3A%2F%2FNovo%2Fpayment_refund_policy&amp;title=novo%20Web%20-%20novo%20Web&amp;referrer=https%3A%2F%2FNovo%2F&amp;muid=2d525de5-2b06-4254-8552-b964e19bd273437c6e&amp;sid=c10429f5-91d0-4bb3-8848-04a91f774058362458&amp;version=6&amp;preview=false"
        aria-hidden="true" tabindex="-1"
        style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; visibility: hidden !important; position: fixed !important; height: 1px !important; pointer-events: none !important; user-select: none !important;"></iframe>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>
<!-- End -->
@endsection