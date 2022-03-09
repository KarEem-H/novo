$(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $(".home .navbar").addClass("scrolled");
    } else {
        $(".home .navbar").removeClass("scrolled");
    }
});
$(window).ready(function () {
    $("img.lazy").lazyload({
        data_attribute: "src",
        skip_invisible: false
    });
    $(".seo-link").hover(
        function () {
            $(this).addClass("active");
        },
        function () {
            $(this).removeClass("active");
        }
    );
    $(".seo-link").hover(
        function () {
            $(this)
                .find("p.subtitle-text-item")
                .addClass("has-text-white")
                .removeClass("has-text-black-87");
        },
        function () {
            $(this)
                .find("p.subtitle-text-item")
                .removeClass("has-text-white")
                .addClass("has-text-black-87");
        }
    );
    $(".seo-link").hover(
        function () {
            $(this)
                .find("p.caption-text-item")
                .addClass("has-text-white")
                .removeClass("has-text-black60");
        },
        function () {
            $(this)
                .find("p.caption-text-item")
                .removeClass("has-text-white")
                .addClass("has-text-black60");
        }
    );
    $(".seo-link").hover(
        function () {
            $(this).find("a.button").addClass("is-secondary").removeClass("is-primary");
        },
        function () {
            $(this).find("a.button").removeClass("is-secondary").addClass("is-primary");
        }
    );
    // $(".seo-slider").slick({
    //     slidesToShow: 6,
    //     slidesToScroll: 1,
    //     autoplay: false,
    //     autoplaySpeed: 2000,
    //     infinite: true,
    //     nextArrow: $(".seo-links-container .slide.left-arrow"),
    //     prevArrow: $(".seo-links-container .slide.right-arrow")
    // });
    $(".seo-slider-rtl").slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: false,
        infinite: true,
        autoplaySpeed: 2000,
        rtl: true,
        nextArrow: $(".seo-links-container .slide.left-arrow"),
        prevArrow: $(".seo-links-container .slide.right-arrow")
    });
    $(".swiper-wrapper").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        arrows: false
    });
    $(".tabs a").click(function (event) {
        event.preventDefault();
        $(this).closest(".tabs").find("li.is-active").removeClass("is-active");
        $(this).parent().addClass("is-active");
        var tab = $(this).attr("btr");
        $(".tab-contents").find(".tab-content").removeClass("is-active");
        $("#" + tab).addClass("is-active");
        // $(window).scrollTop($(window).scrollTop() + 1).scrollTop($(window).scrollTop() - 1);
    });
    $(".accordion .accordion-header").on("click", function () {
        if ($(this).parent(".accordion").hasClass("toggle")) {
            $(this).parent(".accordion").removeClass("toggle");
            //   $(this).siblings(".accordion-body").add(200);
        } else {
            $(".accordion").removeClass("toggle");
            $(this).parent(".accordion").addClass("toggle");
            //   $(".accordion-body").slideUp(200);
            //   $(this).siblings(".content").slideDown(200);
        }
    });
    $("body").on("click", "#login-btn", function () {
        $("#login-modal").toggleClass("is-active");
    });
    $("body").on("click", ".modal .modal-card-head svg", function () {
        $(".modal").removeClass("is-active");
    });
    function success() {
        if ($("#login-modal input").val().length === 0) {
            $("#login-modal").find("button").attr("disabled");
            $("#login-modal").find("button").addClass("is-black38").removeClass("is-secondary");
        } else {
            $("#login-modal").find("button").removeAttr("disabled");
            $("#login-modal").find("button").removeClass("is-black38").addClass("is-secondary");
        }
    }
    $("#login-modal input").keyup(function () {
        setTimeout(function () {
            success();
        }, 10);
    });
    $('input[type="tel"]').on("keypress", function (event) {
        var regex = new RegExp("^[0-9]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });
    $(".lang-checkout section.funnel-section .columns .card-content .is-relative").hover(
        function () {
            $(this).find(".arrow").addClass("visible");
        },
        function () {
            $(this).find(".arrow").removeClass("visible");
        }
    );
    function sticktothetop() {
        var window_top = $(window).scrollTop();
        let el = $(".lang-checkout section.funnel-section .funnel-left-side-column");
        if (!el.offset()) {
            return;
        }
        var top =
            $(".lang-checkout section.funnel-section .funnel-left-side-column").offset().top - 50;
        if (window_top > top) {
            $(".lang-checkout section.funnel-section .category-container").addClass("scrolled");
        } else {
            $(".lang-checkout section.funnel-section .category-container").removeClass("scrolled");
        }
    }
    $(function () {
        $(window).scroll(function () {
            sticktothetop();
        });
        sticktothetop();
    });
});
