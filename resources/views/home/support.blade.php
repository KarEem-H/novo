@extends('home.layouts.default')
@section('content')
<!-- start -->
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
    <title>Support - novo Web</title>
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
                    <div class="main-wrapper en  lang-my-account-support footer-min-height">
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
                                <div class="container">
                                    <div class="nuxt-link-active">
                                        <p
                                            class="is-uppercase overline has-margin-bottom has-text-black38 has-text-centered is-hidden-touch">
                                            Account</p>
                                    </div>
                                    <h3
                                        class="h3-text-item has-text-black87 has-text-centered has-mobile-right is-hidden-touch">
                                        Support</h3>
                                </div>
                                <div class="columns has-margin-top main-column">
                                    <div
                                        class="column is-6-desktop is-12-touch is-offset-3-desktop tf-credit-mobile-override">
                                        <div class="header-area">
                                            <p class="title-text-item has-text-black87 en">We are always ready to help .
                                            </p>
                                            <div class="is-flex">
                                                <p class="body-text-item has-text-black60 has-margin-top">You can reach
                                                    us by phone between 09:00 AM – 08:00 PM (All Days)</p>
                                            </div>
                                        </div>
                                        <div class="support-buttons">
                                            <div><a href="mailto:support@Novo">
                                                    <div class="list-item is-flex height48">
                                                        <div class="is-flex">
                                                            <p class="body-text-item has-text-black87">Email Us</p>
                                                        </div>
                                                        <div class="is-flex items-centered en"><img
                                                                src="/home_assets/page_assets/assets/images/right-arrow.svg" alt="Icon"
                                                                class="icon-img"></div>
                                                    </div>
                                                </a></div>
                                            <div><a target="_blank"
                                                    href="https://api.whatsapp.com/send?phone=+971585570005">
                                                    <div class="list-item is-flex height48">
                                                        <div class="is-flex">
                                                            <p class="body-text-item has-text-black87">Chat with us on
                                                                WhatsApp</p>
                                                        </div>
                                                        <div class="is-flex items-centered en"><img
                                                                src="/home_assets/page_assets/assets/images/right-arrow.svg" alt="Icon"
                                                                class="icon-img"></div>
                                                    </div>
                                                </a></div>
                                            <div><a href="tel:+971585570005">
                                                    <div class="list-item is-flex height48 has-shadow-none">
                                                        <div class="is-flex">
                                                            <p class="body-text-item has-text-black87">Call Us</p>
                                                        </div>
                                                        <div class="is-flex items-centered en"><img
                                                                src="/home_assets/page_assets/assets/images/right-arrow.svg" alt="Icon"
                                                                class="icon-img"></div>
                                                    </div>
                                                </a></div>
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
    <script src="/static/js/main.aa66c0d7.chunk.js"></script><iframe name="__privateStripeMetricsController4820"
        frameborder="0" allowtransparency="true" scrolling="no" allow="payment *"
        src="https://js.stripe.com/v3/m-outer-9fe86c29346daf61dc2cc0586b4fad18.html#url=https%3A%2F%2FNovo%2Fsupport&amp;title=Support%20-%20novo%20Web&amp;referrer=https%3A%2F%2FNovo%2F&amp;muid=2d525de5-2b06-4254-8552-b964e19bd273437c6e&amp;sid=NA&amp;version=6&amp;preview=false"
        aria-hidden="true" tabindex="-1"
        style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; visibility: hidden !important; position: fixed !important; height: 1px !important; pointer-events: none !important; user-select: none !important;"></iframe>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>
<!-- End -->
@endsection