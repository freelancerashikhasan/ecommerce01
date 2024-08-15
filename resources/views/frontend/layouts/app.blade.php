<!DOCTYPE html>
@if(get_session_language()->rtl == 1)
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@else
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endif

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ getBaseURL() }}">
    <meta name="file-base-url" content="{{ getFileBaseURL() }}">

    <title>@yield('meta_title', get_setting('website_name').' | '.get_setting('site_motto'))</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="@yield('meta_description', get_setting('meta_description') )" />
    <meta name="keywords" content="@yield('meta_keywords', get_setting('meta_keywords') )">

    @yield('meta')

    @if(!isset($detailedProduct) && !isset($customer_product) && !isset($shop) && !isset($page) && !isset($blog))
        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="{{ get_setting('meta_title') }}">
        <meta itemprop="description" content="{{ get_setting('meta_description') }}">
        <meta itemprop="image" content="{{ uploaded_asset(get_setting('meta_image')) }}">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="product">
        <meta name="twitter:site" content="@publisher_handle">
        <meta name="twitter:title" content="{{ get_setting('meta_title') }}">
        <meta name="twitter:description" content="{{ get_setting('meta_description') }}">
        <meta name="twitter:creator" content="@author_handle">
        <meta name="twitter:image" content="{{ uploaded_asset(get_setting('meta_image')) }}">

        <!-- Open Graph data -->
        <meta property="og:title" content="{{ get_setting('meta_title') }}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ route('home') }}" />
        <meta property="og:image" content="{{ uploaded_asset(get_setting('meta_image')) }}" />
        <meta property="og:description" content="{{ get_setting('meta_description') }}" />
        <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
        <meta property="fb:app_id" content="{{ env('FACEBOOK_PIXEL_ID') }}">
    @endif

    <!-- Favicon -->
    <link rel="icon" href="{{ uploaded_asset(get_setting('site_icon')) }}">

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,200;1,300;1,500;1,700;1,900&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,500;1,700;1,900&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,200;1,300;1,500;1,700;1,900&amp;family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <script>
        var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: '{!! translate('Nothing selected', null, true) !!}',
            nothing_found: '{!! translate('Nothing found', null, true) !!}',
            choose_file: '{{ translate('Choose file') }}',
            file_selected: '{{ translate('File selected') }}',
            files_selected: '{{ translate('Files selected') }}',
            add_more_files: '{{ translate('Add more files') }}',
            adding_more_files: '{{ translate('Adding more files') }}',
            drop_files_here_paste_or: '{{ translate('Drop files here, paste or') }}',
            browse: '{{ translate('Browse') }}',
            upload_complete: '{{ translate('Upload complete') }}',
            upload_paused: '{{ translate('Upload paused') }}',
            resume_upload: '{{ translate('Resume upload') }}',
            pause_upload: '{{ translate('Pause upload') }}',
            retry_upload: '{{ translate('Retry upload') }}',
            cancel_upload: '{{ translate('Cancel upload') }}',
            uploading: '{{ translate('Uploading') }}',
            processing: '{{ translate('Processing') }}',
            complete: '{{ translate('Complete') }}',
            file: '{{ translate('File') }}',
            files: '{{ translate('Files') }}',
        }
    </script>
    @if (get_setting('google_analytics') == 1)
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('TRACKING_ID') }}"></script>

        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '{{ env('TRACKING_ID') }}');
        </script>
    @endif

    @if (get_setting('facebook_pixel') == 1)
        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '{{ env('FACEBOOK_PIXEL_ID') }}');
            fbq('track', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{ env('FACEBOOK_PIXEL_ID') }}&ev=PageView&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->
    @endif
    <style>
        :root {
            --main-color-one: #006045 !important;
            --secondary-color: #0088dd;
            --heading-color: #1b1c25 !important;
            --special-color: #E9EDF7 !important;
            --paragraph-color: #666666 !important;
            --form-bg-color: #F2F3F5;
            --footer-bg-color: #151315;
            --heading-font: "Rubik", sans-serif;
            --body-font: "Roboto", sans-serif;
            --extra-font: Inter, serif;
        }
    </style>

    @stack('styles')

    <link rel="stylesheet" href="{{ static_asset('fontend/assets/css/bootstrap5.min.css') }}">
    <!-- animate -->
    <link rel="stylesheet" href="{{ static_asset('fontend/assets/css/animate.css') }}">
    <!-- slick carousel  -->
    <link rel="stylesheet" href="{{ static_asset('fontend/assets/css/slick.css') }}">
    <!-- LineAwesome -->
    <link rel="stylesheet" href="{{ static_asset('fontend/assets/css/line-awesome.min.css') }}">
    <!-- Plugins css -->
    <link rel="stylesheet" href="{{ static_asset('fontend/assets/css/plugins.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ static_asset('fontend/assets/css/style.css') }}">


    <link rel="stylesheet" href="{{ static_asset('fontend/assets/common/css/toastr.css') }}">


    <link rel="stylesheet" href="{{ static_asset('fontend/assets/frontend/css/dynamic-style.css') }}">
    @php
        echo get_setting('header_script');
    @endphp
</head>


<body>
    <!-- Header area Starts -->
    @include('frontend.inc.nav')

    @yield('content')

     <!-- cookies agreement -->
     @if (get_setting('show_cookies_agreement') == 'on')
     <div class="aiz-cookie-alert shadow-xl">
         <div class="p-3 bg-dark rounded">
             <div class="text-white mb-3">
                 @php
                     echo get_setting('cookies_agreement_text');
                 @endphp
             </div>
             <button class="btn btn-primary aiz-cookie-accept">
                 {{ translate('Ok. I Understood') }}
             </button>
         </div>
     </div>
 @endif

    @include('frontend.inc.footer')

    <div class="modal fade" id="addToCart">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader text-center p-3">
                    <i class="las la-spinner la-spin la-3x"></i>
                </div>
                <button type="button" class="close absolute-top-right btn-icon close z-1 btn-circle bg-gray mr-2 mt-2 d-flex justify-content-center align-items-center" data-dismiss="modal" aria-label="Close" style="background: #ededf2; width: calc(2rem + 2px); height: calc(2rem + 2px);">
                    <span aria-hidden="true" class="fs-24 fw-700" style="margin-left: 2px;">&times;</span>
                </button>
                <div id="addToCart-modal-body">

                </div>
            </div>
        </div>
    </div>


    @yield('modal')
    <script src="{{ static_asset('assets/js/vendors.js') }}"></script>
    <script src="{{ static_asset('assets/js/aiz-core.js?v=') }}{{ rand(1000,9999) }}"></script>
    <!-- jquery -->
    <script src="{{ static_asset('fontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- jquery Migrate -->
    <script src="{{ static_asset('fontend/assets/js/jquery-migrate.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ static_asset('fontend/assets/js/bootstrap5.bundle.min.js') }}"></script>
    <!-- Lazy Load Js -->
    <script src="{{ static_asset('fontend/assets/js/jquery.lazy.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ static_asset('fontend/assets/js/slick.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ static_asset('fontend/assets/js/plugins.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ static_asset('fontend/assets/js/nouislider-8.5.1.min.js') }}"></script>
    <!-- All Plugins two js -->
    <script src="{{ static_asset('fontend/assets/js/plugin-two.js') }}"></script>
    <!-- Nice Scroll -->
    <script src="{{ static_asset('fontend/assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ static_asset('fontend/assets/frontend/js/loopcounter.js') }}"></script>
    <!-- main js -->
    <script src="{{ static_asset('fontend/assets/js/select2.min.js') }}"></script>
    <script src="{{ static_asset('fontend/assets/js/helpers.js') }}"></script>
    <script src="{{ static_asset('fontend/assets/js/main.js') }}"></script>


    <script src="../www.google.com/recaptcha/api4e7b.js?render=6LeaWQ4pAAAAALoyClErxga4n1PxmB4lviSTwm1K"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute("6LeaWQ4pAAAAALoyClErxga4n1PxmB4lviSTwm1K", {
                action: 'homepage'
            }).then(function(token) {
                let gcaptcha_token = document.getElementById('gcaptcha_token');
                if (gcaptcha_token) {
                    gcaptcha_token.value = token;
                }
            });
        });
    </script>
    <link rel="stylesheet" href="{{ static_asset('fontend/assets/frontend/css/jquery.ihavecookies.css') }}">
    <script src="{{ static_asset('fontend/assets/frontend/js/jquery.ihavecookies.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            var delayTime = "5000";
            delayTime = delayTime ? delayTime : 4000;

            $('body').ihavecookies({
                title: "Cookies &amp; Privacy",
                message: "Is education residence conveying so so. Suppose shyness say ten behaved morning had. Any unsatiable assistance compliment occasional too reasonably advantages.",
                expires: "30",
                link: "https://safecart.bytesed.com/p/privacy-policy/2",
                delay: delayTime,
                moreInfoLabel: "More information",
                acceptBtnLabel: "Accept Cookie",
                advancedBtnLabel: "Decline Cookie"
            });
            $('body').on('click', '#gdpr-cookie-close', function(e) {
                e.preventDefault();
                $(this).parent().remove();
            });
        });
    </script>
    <script>
        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        (function($) {
            "use strict";

            $(window).on('scroll', function() {

                if ($(window).width() > 992) {
                    /*--------------------------
                    sticky menu activation
                   -------------------------*/
                    var st = $(this).scrollTop();
                    var mainMenuTop = $('.navbar-area');
                    if ($(window).scrollTop() > 1000) {
                        // active sticky menu on scrollup
                        mainMenuTop.addClass('nav-fixed');
                    } else {
                        mainMenuTop.removeClass('nav-fixed ');
                    }
                }
            });
            $(document).on('click', '.language_dropdown ul li', function(e) {
                var el = $(this);
                el.parent().parent().find('.selected-language').text(el.text());
                el.parent().removeClass('show');
                $.ajax({
                    url: "https://safecart.bytesed.com/lang",
                    type: "GET",
                    data: {
                        'lang': el.data('value')
                    },
                    success: function(data) {
                        location.reload();
                    }
                })
            });
            $(document).on('click', '.newsletter-form-wrap .form-btn-2', function(e) {
                e.preventDefault();
                var email = $('.newsletter-form-wrap input[type="email"]').val();
                var errrContaner = $(this).parent().parent().parent().find('.form-message-show');
                errrContaner.html('');
                var paperIcon = 'lar la-paper-plane';
                var spinnerIcon = 'las la-spinner la-spin';
                var el = $(this);
                el.find('i').removeClass(paperIcon).addClass(spinnerIcon);
                $.ajax({
                    url: "https://safecart.bytesed.com/subscribe-newsletter",
                    type: "POST",
                    data: {
                        _token: "dU4Wk7LBjRyP5FrCrAKrXU1AVdvGulm21GnEnLZL",
                        email: email
                    },
                    success: function(data) {
                        errrContaner.html('<div class="alert alert-' + data.type + '">' + data.msg +
                            '</div>');
                        el.find('i').addClass(paperIcon).removeClass(spinnerIcon);
                    },
                    error: function(data) {
                        el.find('i').addClass(paperIcon).removeClass(spinnerIcon);
                        var errors = data.responseJSON.errors;
                        errrContaner.html('<div class="alert alert-danger">' + errors.email[0] +
                            '</div>');
                    }
                });
            });

            $('.category_filter_section .category_item').on('click', function() {
                $('.category_filter_section .category_item').removeClass('active');
                $(this).addClass('active');
                let category_id = $(this).data('catid');
                let item_count = $(this).closest('.category_filter_section').data('items');
                $('.lds-ellipsis').show();
                $.ajax({
                    url: 'https://safecart.bytesed.com/filter-category',
                    type: 'GET',
                    data: {
                        id: category_id,
                        item_count: item_count
                    },
                    success: function(data) {
                        $('.lds-ellipsis').hide();
                        $('.category_filter_section_product_container').html(data);
                    },
                    error: function(error) {
                        $('.lds-ellipsis').hide();
                    }
                });
            });


        }(jQuery));
    </script>
    <script src="{{ static_asset('fontend/assets/common/js/toastr.min.js') }}"></script>
    <script src="{{ static_asset('fontend/assets/frontend/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ static_asset('fontend/assets/frontend/js/jquery-ui.js') }}"></script>
    <script src="{{ static_asset('fontend/assets/frontend/js/md5.js') }}"></script>

    <script>
        $(function() {


        });
    </script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            // make hide all logo available
            $(".footer-logo-wrapper").addClass('d-none');
            // first need to get footer
            let footer = $('.footer-area');
            // now get footer variant
            let variant = footer.attr('data-footer-variant');
            // check variant and enable logo
            if (variant == 3 || variant == 2) {
                $('.logo-style-two').removeClass("d-none");
            } else {
                $('.logo-style-one').removeClass("d-none");
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            loopcounter("loopCounter_global")
        });
    </script>

    <script>
        $(document).ready(function() {
            /*
            ========================================
                Countdown js
            ========================================
            */
            // check this class is exist or not if exist then run this code
            if ($('.flashCountdown').length > 0) {
                loopcounter('flashCountdown');
            }
        });

        $(document).on('submit', '.subscribe-form form', function(e) {
            e.preventDefault();

            const email = $(this).find('input[type="email"]');
            const errrContaner = $(this).parent().parent().parent().find('.form-message-show');
            const paperIcon = 'la-paper-plane';
            const spinnerIcon = 'la-spinner la-spin';
            const el = $(this);

            $(this).find("button").attr('disabled', true);

            errrContaner.html('');

            el.find('i').removeClass(paperIcon).removeClass('lar').addClass(spinnerIcon).addClass('las');

            $.ajax({
                url: "https://safecart.bytesed.com/subscribe-newsletter",
                type: "POST",
                data: {
                    _token: "dU4Wk7LBjRyP5FrCrAKrXU1AVdvGulm21GnEnLZL",
                    email: email.val()
                },
                success: function(data) {
                    email.val('')
                    errrContaner.html('<div class="alert alert-' + data.type + '">' + data.msg +
                        '</div>');
                    el.find('i').addClass(paperIcon).addClass('lar').removeClass(spinnerIcon)
                        .removeClass('las');
                    $(this).find("button").removeAttr('disabled');
                },
                error: function(data) {
                    email.val('')
                    el.find('i').addClass(paperIcon).addClass('lar').removeClass(spinnerIcon)
                        .removeClass('las');
                    const errors = data.responseJSON.errors;
                    errrContaner.html('<div class="alert alert-danger">' + errors.email[0] + '</div>');
                    $(this).find("button").removeAttr('disabled');
                }
            });
        });

        $(document).on('submit', '.custom-form-builder-form', function(e) {
            e.preventDefault();
            const btn = $(this).find('button[type="submit"]');
            let btnOldText = btn.text();
            const form = $(this);
            const formID = form.attr('id');
            const msgContainer = form.find('.error-message');
            const formSelector = document.getElementById(formID);
            const formData = new FormData(formSelector);
            msgContainer.html('');

            $.ajax({
                url: "https://safecart.bytesed.com/submit-custom-form",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': "dU4Wk7LBjRyP5FrCrAKrXU1AVdvGulm21GnEnLZL",
                },
                beforeSend: function() {
                    btn.html(`<i class="las la-spinner la-spin mr-1"></i> Submitting..`);
                },
                processData: false,
                contentType: false,
                data: formData,
                success: function(data) {
                    form.find('.ajax-loading-wrap').removeClass('show').addClass('hide');
                    msgContainer.html('<div class="alert alert-' + data.type + '">' + data.msg +
                        '</div>');
                    btn.text(btnOldText);
                    form.trigger("reset");

                },
                error: function(data) {
                    form.find('.ajax-loading-wrap').removeClass('show').addClass('hide');
                    var errors = data.responseJSON.errors;
                    var markup = '<ul class="alert alert-danger">';
                    $.each(errors, function(index, value) {
                        markup += '<li>' + value + '</li>';
                    })
                    markup += '</ul>';
                    msgContainer.html(markup);
                    btn.text(btnOldText);
                    form.trigger("reset");
                }
            });
        });

        /**
         * Cart script
         * */

        // $(document).on('click', '.ff-jost[data-label=Close]', function(e) {
        //     let el = $(this);
        //     let product_hash_id = el.data('product_hash_id');

        //     let data = new FormData();
        //     data.append("product_hash_id", product_hash_id);
        //     data.append("rowId", product_hash_id);
        //     data.append("_token", "dU4Wk7LBjRyP5FrCrAKrXU1AVdvGulm21GnEnLZL");

        //     send_ajax_request('POST', data, 'shop-page/cart/ajax/remove.html', () => {
        //         if ($(this).data('type') === 'tr') {
        //             $(this).closest("tr").addClass("disabled");
        //         }

        //         $(this).find('.icon-close i').removeClass("la-times").addClass("la-spinner");
        //         $('.cart-item-count-amount').html("<i class='las la-spinner'></i>");
        //     }, (data) => {
        //         if (data.msg) {
        //             toastr.success(data.msg);
        //             $('.coupon-contents').parent().load(location.href + " .coupon-contents");
        //             $('.navbar-right-flex .cart-shopping').load(location.href + " .cart-shopping");

        //             if ($(this).data('type') === 'tr') {
        //                 $(".cart-page-wrapper").load(location.href + " .cart-page-wrapper");
        //             }
        //         }

        //         $('.loader').hide();
        //         loadHeaderCardAndWishlistArea(data)
        //     }, (err) => {
        //         if ($(this).data('type') === 'tr') {
        //             $(this).closest("tr").removeClass("disabled");
        //         }

        //         $(this).find('.icon-close i').removeClass("la-spinner").addClass("la-times");
        //         prepare_errors(err)
        //     })
        // });

        // $(document).on('click', '.vendor_search_tab', function() {
        //     let url = 'frontend/vendor.html';
        //     let limit = 12;

        //     if ($(this).attr("data-tab-two") ?? false) {
        //         url += "?type=" + $(this).attr('data-tab-two') + '&limit=' + limit;
        //     }

        //     loadFilterData(url, '#all_vendor_list');
        // });

        // $(document).on('click', '#product_filter_featured_products', function(e) {
        //     let url = 'filter-top-rated.html';

        //     if ($(this).attr('data-card-style') == 2) {
        //         url += "?card_style=2";
        //     }

        //     if ($(this).attr("data-item-limit")) {
        //         if (url.indexOf("?")) {
        //             url += "&limit=" + $(this).attr("data-item-limit");
        //         } else {
        //             url += "?limit=" + $(this).attr("data-item-limit");
        //         }
        //     }

        //     loadFilterData(url);
        // });

        // $(document).on('click', '#product_filter_top_selling', function(e) {
        //     let url = 'filter-top-selling.html';

        //     if ($(this).attr('data-card-style') == 2) {
        //         url += "?card_style=2";
        //     }

        //     if ($(this).attr("data-item-limit")) {
        //         if (url.indexOf("?")) {
        //             url += "&limit=" + $(this).attr("data-item-limit");
        //         } else {
        //             url += "?limit=" + $(this).attr("data-item-limit");
        //         }
        //     }

        //     loadFilterData(url);
        // });

        // $(document).on('click', '#product_filter_new_products', function(e) {
        //     let url = 'filter-new.html';

        //     if ($(this).attr('data-card-style') == 2) {
        //         url += "?card_style=2";
        //     }

        //     if ($(this).attr("data-item-limit")) {
        //         if (url.indexOf("?")) {
        //             url += "&limit=" + $(this).attr("data-item-limit");
        //         } else {
        //             url += "?limit=" + $(this).attr("data-item-limit");
        //         }
        //     }

        //     loadFilterData(url);
        // });

        // function loadFilterData(url, selector = '#product_filter_section') {
        //     $('.lds-ellipsis').show();
        //     $.ajax({
        //         url: url,
        //         type: 'GET',
        //         success: function(data) {
        //             if (data) {
        //                 $(selector).html(data);
        //                 $('.lds-ellipsis').hide();
        //             }
        //         },
        //         erorr: function(err) {
        //             toastr.error('Something went wrong');
        //             $('.lds-ellipsis').hide();
        //         }
        //     });
        // }

        // function amount_with_currency_symbol(amount) {
        //     let symbol = "$";
        //     let position = "left";

        //     let return_val = symbol + amount;

        //     if (position == 'right') {
        //         return_val = amount + symbol;
        //     }

        //     return return_val;
        // }

        // /*
        //  *
        //  * todo:: Those line of code is only for without variant product
        //  *
        //  * */
        // $(document).on('click', '.add_to_cart_ajax', function(e) {
        //     e.preventDefault();
        //     let pid_id = ''; //getQuickViewAttributesForCart();

        //     let currentEl = $(this)
        //     let product_id = $(this).data('id');
        //     let quantity = 1;
        //     let attributes = {};
        //     let product_variant = null;

        //     let icon = currentEl.find("i");
        //     let oldIconClass = icon.attr("class");

        //     const condition = (currentEl.attr('data-type') ?? false) === 'text';

        //     if (condition) {
        //         currentEl.text('Adding to cart...').append(
        //             `<i class='las la-spinner icon la-spin'></i>`);
        //     } else {
        //         icon.attr("class", "las la-spinner icon la-spin");
        //     }

        //     attributes['price'] = null;

        //     $.ajax({
        //         url: 'https://safecart.bytesed.com/shop-page/cart/ajax/add-to-cart',
        //         type: 'POST',
        //         data: {
        //             product_id: product_id,
        //             quantity: quantity,
        //             pid_id: pid_id,
        //             product_variant: product_variant,
        //             attributes: attributes,
        //             _token: 'dU4Wk7LBjRyP5FrCrAKrXU1AVdvGulm21GnEnLZL'
        //         },
        //         success: function(data) {
        //             if (data.type ?? false) {
        //                 toastr[data.type](data.msg);
        //             } else {
        //                 toastr.success(data.msg);
        //             }

        //             if (data.quantity_msg) {
        //                 toastr.warning(data.quantity_msg)
        //             }

        //             if (condition) {
        //                 currentEl.text(currentEl.attr('data-old-text'))
        //             } else {
        //                 icon.attr("class", oldIconClass);
        //             }

        //             loadHeaderCardAndWishlistArea(data);
        //         },
        //         erorr: function(err) {
        //             if (condition) {
        //                 currentEl.text(currentEl.attr('data-old-text'))
        //             } else {
        //                 icon.attr("class", oldIconClass);
        //             }

        //             toastr.error('An error occurred');
        //         }
        //     });
        // });

        // $(document).on('click', '.add_to_wishlist_ajax', function(e) {
        //     e.preventDefault();
        //     let pid_id = ''; //getQuickViewAttributesForCart();

        //     let product_id = $(this).data('id');
        //     let quantity = 1;
        //     let attributes = {};
        //     let product_variant = null;

        //     attributes['price'] = null;

        //     $.ajax({
        //         url: 'https://safecart.bytesed.com/shop-page/wishlist/ajax-add-to-wishlist',
        //         type: 'POST',
        //         data: {
        //             product_id: product_id,
        //             quantity: quantity,
        //             pid_id: pid_id,
        //             product_variant: product_variant,
        //             attributes: attributes,
        //             _token: 'dU4Wk7LBjRyP5FrCrAKrXU1AVdvGulm21GnEnLZL'
        //         },
        //         success: function(data) {
        //             if (data.type ?? false) {
        //                 if (data.quantity_msg) {
        //                     toastr.warning(data.quantity_msg)
        //                     return;
        //                 } else {
        //                     toastr[data.type](data.msg);
        //                 }
        //             } else {
        //                 toastr.success(data.msg);
        //             }

        //             loadHeaderCardAndWishlistArea(data);
        //         },
        //         erorr: function(err) {
        //             toastr.error('An error occurred');
        //         }
        //     });
        // });

        // $(document).on('click', '.add_to_compare_ajax', function(e) {
        //     e.preventDefault();
        //     let pid_id = ''; //getQuickViewAttributesForCart();

        //     let product_id = $(this).data('id');
        //     let quantity = 1;
        //     let attributes = {};
        //     let product_variant = null;

        //     attributes['price'] = null;

        //     $.ajax({
        //         url: 'https://safecart.bytesed.com/shop-page/compare/add',
        //         type: 'POST',
        //         data: {
        //             product_id: product_id,
        //             quantity: quantity,
        //             pid_id: pid_id,
        //             product_variant: product_variant,
        //             attributes: attributes,
        //             _token: 'dU4Wk7LBjRyP5FrCrAKrXU1AVdvGulm21GnEnLZL'
        //         },
        //         success: function(data) {
        //             if (data.type ?? false) {
        //                 if (data.quantity_msg) {
        //                     toastr.warning(data.quantity_msg)
        //                     return;
        //                 } else {
        //                     toastr[data.type](data.msg);
        //                 }
        //             } else {
        //                 toastr.success(data.msg);
        //             }


        //             loadHeaderCardAndWishlistArea(data);
        //         },
        //         erorr: function(err) {
        //             toastr.error('An error occurred');
        //         }
        //     });
        // });

        // /* end hare without variant product js code */
        // $(document).on("click", ".product-quick-view-ajax", function(e) {
        //     e.preventDefault();

        //     let currentEl = $(this)
        //     let action_route = currentEl.data('action-route');
        //     let icon = currentEl.find("i");
        //     let oldIconClass = icon.attr("class");
        //     const condition = (currentEl.attr('data-type') ?? false) === 'text';

        //     if (condition) {
        //         currentEl.text('Opening...').append(`<i class='las la-spinner icon la-spin'></i>`);
        //     } else {
        //         icon.attr("class", "las la-spinner icon la-spin");
        //     }


        //     $.ajax({
        //         url: action_route,
        //         type: 'GET',
        //         success: function(data) {
        //             if (condition) {
        //                 currentEl.text(currentEl.attr('data-old-text'))
        //             } else {
        //                 icon.attr("class", oldIconClass);
        //             }

        //             $("#product_quick_view").html(data);
        //             $("#product_quick_view").modal("show");

        //             // write slider code here

        //             /*
        //             ========================================
        //                 Global Slider Init
        //             ========================================
        //             */
        //             let globalSlickInit = $('.global-slick-quick-view-init');
        //             if (globalSlickInit.length > 0) {
        //                 //todo have to check slider item
        //                 $.each(globalSlickInit, function(index, value) {
        //                     if ($(this).children('div').length > 1) {
        //                         //todo configure slider settings object
        //                         let sliderSettings = {};
        //                         let allData = $(this).data();
        //                         let infinite = typeof allData.infinite == 'undefined' ? false :
        //                             allData.infinite;
        //                         let arrows = typeof allData.arrows == 'undefined' ? false :
        //                             allData.arrows;
        //                         let focusOnSelect = typeof allData.focusonselect ==
        //                             'undefined' ? false : allData.focusonselect;
        //                         let swipeToSlide = typeof allData.swipetoslide == 'undefined' ?
        //                             false : allData.swipetoslide;
        //                         let slidesToShow = typeof allData.slidestoshow == 'undefined' ?
        //                             1 : allData.slidestoshow;
        //                         let slidesToScroll = typeof allData.slidestoscroll ==
        //                             'undefined' ? 1 : allData.slidestoscroll;
        //                         let speed = typeof allData.speed == 'undefined' ? '500' :
        //                             allData.speed;
        //                         let dots = typeof allData.dots == 'undefined' ? false : allData
        //                             .dots;
        //                         let cssEase = typeof allData.cssease == 'undefined' ? 'linear' :
        //                             allData.cssease;
        //                         let prevArrow = typeof allData.prevarrow == 'undefined' ? '' :
        //                             allData.prevarrow;
        //                         let nextArrow = typeof allData.nextarrow == 'undefined' ? '' :
        //                             allData.nextarrow;
        //                         let centerMode = typeof allData.centermode == 'undefined' ?
        //                             false : allData.centermode;
        //                         let centerPadding = typeof allData.centerpadding ==
        //                             'undefined' ? false : allData.centerpadding;
        //                         let rows = typeof allData.rows == 'undefined' ? 1 : parseInt(
        //                             allData.rows);
        //                         let autoplay = typeof allData.autoplay == 'undefined' ? false :
        //                             allData.autoplay;
        //                         let autoplaySpeed = typeof allData.autoplayspeed ==
        //                             'undefined' ? 2000 : parseInt(allData.autoplayspeed);
        //                         let lazyLoad = typeof allData.lazyload == 'undefined' ? false :
        //                             allData
        //                             .lazyload; // have to remove it from settings object if it undefined
        //                         let appendDots = typeof allData.appenddots == 'undefined' ?
        //                             false : allData.appenddots;
        //                         let appendArrows = typeof allData.appendarrows == 'undefined' ?
        //                             false : allData.appendarrows;
        //                         let asNavFor = typeof allData.asnavfor == 'undefined' ? false :
        //                             allData.asnavfor;
        //                         let verticalSwiping = typeof allData.verticalswiping ==
        //                             'undefined' ? false : allData.verticalswiping;
        //                         let vertical = typeof allData.vertical == 'undefined' ? false :
        //                             allData.vertical;
        //                         let fade = typeof allData.fade == 'undefined' ? false : allData
        //                             .fade;
        //                         let rtl = typeof allData.rtl == 'undefined' ? false : allData
        //                             .rtl;
        //                         let responsive = typeof $(this).data('responsive') ==
        //                             'undefined' ? false : $(this).data('responsive');
        //                         //slider settings object setup
        //                         sliderSettings.infinite = infinite;
        //                         sliderSettings.arrows = arrows;
        //                         sliderSettings.autoplay = autoplay;
        //                         sliderSettings.focusOnSelect = focusOnSelect;
        //                         sliderSettings.swipeToSlide = swipeToSlide;
        //                         sliderSettings.slidesToShow = slidesToShow;
        //                         sliderSettings.slidesToScroll = slidesToScroll;
        //                         sliderSettings.speed = speed;
        //                         sliderSettings.dots = dots;
        //                         sliderSettings.cssEase = cssEase;
        //                         sliderSettings.prevArrow = prevArrow;
        //                         sliderSettings.nextArrow = nextArrow;
        //                         sliderSettings.rows = rows;
        //                         sliderSettings.autoplaySpeed = autoplaySpeed;
        //                         sliderSettings.autoplay = autoplay;
        //                         sliderSettings.verticalSwiping = verticalSwiping;
        //                         sliderSettings.vertical = vertical;
        //                         sliderSettings.rtl = rtl;
        //                         if (centerMode != false) {
        //                             sliderSettings.centerMode = centerMode;
        //                         }
        //                         if (centerPadding != false) {
        //                             sliderSettings.centerPadding = centerPadding;
        //                         }
        //                         if (lazyLoad != false) {
        //                             sliderSettings.lazyLoad = lazyLoad;
        //                         }
        //                         if (appendDots != false) {
        //                             sliderSettings.appendDots = appendDots;
        //                         }
        //                         if (appendArrows != false) {
        //                             sliderSettings.appendArrows = appendArrows;
        //                         }
        //                         if (asNavFor != false) {
        //                             sliderSettings.asNavFor = asNavFor;
        //                         }
        //                         if (fade != false) {
        //                             sliderSettings.fade = fade;
        //                         }
        //                         if (responsive != false) {
        //                             sliderSettings.responsive = responsive;
        //                         }
        //                         $(this).slick(sliderSettings);
        //                     }
        //                 });
        //             }
        //         },
        //         erorr: function(err) {
        //             if (condition) {
        //                 currentEl.text(currentEl.attr('data-old-text'))
        //             } else {
        //                 icon.attr("class", oldIconClass);
        //             }
        //             toastr.error('An error occurred');
        //         }
        //     });
        // });

        // // close quick view details model and make empty
        // $(document).on("click", "#product_quick_view .quick-view-close-btn", function() {
        //     $("#product_quick_view").modal("hide");

        //     setTimeout(function() {
        //         $("#product_quick_view").empty();
        //     }, 200);
        // });

        // $(document).on("click", "#quick_view .quick-view-close-btn", function() {
        //     $("#quick_view").fadeOut();
        //     $("#quick_view").removeClass('show');
        //     $(".modal-backdrop").fadeOut();
        // });

        // $(document).on('click', '.quick-view-size-lists li', function(event) {
        //     let el = $(this);
        //     let value = el.data('displayValue');
        //     let parentWrap = el.parent().parent();
        //     el.addClass('active');
        //     el.siblings().removeClass('active');
        //     parentWrap.find('input[type=text]').val(value);
        //     parentWrap.find('input[type=hidden]').val(el.data('value'));

        //     // selected attributes
        //     selectedAttributeSearch(this);
        // });

        // $(document).on('click', '.add_to_cart_single_page_quick_view', function(e) {
        //     e.preventDefault();
        //     let selected_size = $('#quick_view_selected_size').val();
        //     let selected_color = $('#quick_view_selected_color').val();
        //     let site_currency_symbol = "$";

        //     $(".quick-view-size-lists.active")

        //     let pid_id = getQuickViewAttributesForCart();

        //     let product_id = $(this).data('id');
        //     let quantity = Number($('#quick-view-quantity').val().trim());
        //     let price = $('#quick-view-price').text().split(site_currency_symbol)[1];
        //     let attributes = {};
        //     let product_variant = pid_id;

        //     attributes['price'] = price;

        //     // if selected attribute is a valid product item
        //     if (quickViewValidateSelectedAttributes()) {
        //         $.ajax({
        //             url: 'https://safecart.bytesed.com/shop-page/cart/ajax/add-to-cart',
        //             type: 'POST',
        //             data: {
        //                 product_id: product_id,
        //                 quantity: quantity,
        //                 pid_id: pid_id,
        //                 product_variant: product_variant,
        //                 selected_size: selected_size,
        //                 selected_color: selected_color,
        //                 attributes: attributes,
        //                 _token: 'dU4Wk7LBjRyP5FrCrAKrXU1AVdvGulm21GnEnLZL'
        //             },
        //             success: function(data) {
        //                 if (data.type ?? false) {
        //                     toastr[data.type](data.msg);
        //                 } else {
        //                     toastr.success(data.msg);
        //                 }

        //                 if (data.quantity_msg) {
        //                     toastr.warning(data.quantity_msg)
        //                 }

        //                 loadHeaderCardAndWishlistArea(data);
        //             },
        //             erorr: function(err) {
        //                 toastr.error('An error occurred');
        //             }
        //         });
        //     } else {
        //         toastr.error('Select all attribute to proceed');
        //     }
        // });

        // $(document).on('click', '.buy_now_single_page_quick_view', function(e) {
        //     e.preventDefault();
        //     let selected_size = $('#quick_view_selected_size').val();
        //     let selected_color = $('#quick_view_selected_color').val();
        //     let site_currency_symbol = "$";

        //     $(".quick-view-size-lists.active")

        //     let pid_id = getQuickViewAttributesForCart();

        //     let product_id = $(this).data('id');
        //     let quantity = Number($('#quick-view-quantity').val().trim());
        //     let price = $('#quick-view-price').text().split(site_currency_symbol)[1];
        //     let attributes = {};
        //     let product_variant = pid_id;

        //     attributes['price'] = price;

        //     // if selected attribute is a valid product item
        //     if (quickViewValidateSelectedAttributes()) {
        //         $.ajax({
        //             url: 'https://safecart.bytesed.com/shop-page/cart/ajax/add-to-cart',
        //             type: 'POST',
        //             data: {
        //                 product_id: product_id,
        //                 quantity: quantity,
        //                 pid_id: pid_id,
        //                 product_variant: product_variant,
        //                 selected_size: selected_size,
        //                 selected_color: selected_color,
        //                 attributes: attributes,
        //                 _token: 'dU4Wk7LBjRyP5FrCrAKrXU1AVdvGulm21GnEnLZL'
        //             },
        //             success: function(data) {
        //                 if (data.type ?? false) {
        //                     toastr[data.type](data.msg);
        //                 } else {
        //                     toastr.success(data.msg);
        //                 }

        //                 if (data.quantity_msg) {
        //                     toastr.warning(data.quantity_msg)
        //                 }

        //                 setTimeout(function() {
        //                     window.location.href = "checkout.html";
        //                 }, 1500);
        //             },
        //             erorr: function(err) {
        //                 toastr.error('An error occurred');
        //             }
        //         });
        //     } else {
        //         toastr.error('Select all attribute to proceed');
        //     }
        // });

        // $(document).on('click', '.add_to_buy_now_ajax', function(e) {
        //     e.preventDefault();
        //     let pid_id = ''; //getQuickViewAttributesForCart();

        //     let product_id = $(this).data('id');
        //     let quantity = 1;
        //     let attributes = {};
        //     let product_variant = null;

        //     attributes['price'] = null;

        //     $.ajax({
        //         url: 'https://safecart.bytesed.com/shop-page/cart/ajax/add-to-cart',
        //         type: 'POST',
        //         data: {
        //             product_id: product_id,
        //             quantity: quantity,
        //             pid_id: pid_id,
        //             product_variant: product_variant,
        //             attributes: attributes,
        //             _token: 'dU4Wk7LBjRyP5FrCrAKrXU1AVdvGulm21GnEnLZL'
        //         },
        //         success: function(data) {
        //             if (data.type ?? false) {
        //                 toastr[data.type](data.msg);
        //             } else {
        //                 toastr.success(data.msg);
        //             }

        //             if (data.quantity_msg) {
        //                 toastr.warning(data.quantity_msg)
        //             }

        //             loadHeaderCardAndWishlistArea(data);

        //             setTimeout(function() {
        //                 window.location.href = "checkout.html";
        //             }, 1500);
        //         },
        //         erorr: function(err) {
        //             toastr.error('An error occurred');
        //         }
        //     });
        // });

        // $(document).on('click', '.add_to_wishlist_single_page_quick_view', function(e) {
        //     e.preventDefault();
        //     let selected_size = $('#quick_view_selected_size').val();
        //     let selected_color = $('#quick_view_selected_color').val();
        //     let site_currency_symbol = "$";

        //     $(".quick-view-size-lists.active")

        //     let pid_id = getQuickViewAttributesForCart();

        //     let product_id = $(this).data('id');
        //     let quantity = Number($('#quick-view-quantity').val().trim());
        //     let price = $('#quick-view-price').text().split(site_currency_symbol)[1];
        //     let attributes = {};
        //     let product_variant = pid_id;

        //     attributes['price'] = price;

        //     // if selected attribute is a valid product item
        //     if (quickViewValidateSelectedAttributes()) {
        //         $.ajax({
        //             url: 'https://safecart.bytesed.com/shop-page/wishlist/ajax-add-to-wishlist',
        //             type: 'POST',
        //             data: {
        //                 product_id: product_id,
        //                 quantity: quantity,
        //                 pid_id: pid_id,
        //                 product_variant: product_variant,
        //                 selected_size: selected_size,
        //                 selected_color: selected_color,
        //                 attributes: attributes,
        //                 _token: 'dU4Wk7LBjRyP5FrCrAKrXU1AVdvGulm21GnEnLZL'
        //             },
        //             success: function(data) {
        //                 if (data.type ?? false) {
        //                     toastr[data.type](data.msg);
        //                 } else {
        //                     toastr.success(data.msg);
        //                 }

        //                 if (data.quantity_msg) {
        //                     toastr.warning(data.quantity_msg)
        //                 }

        //                 loadHeaderCardAndWishlistArea(data);
        //             },
        //             erorr: function(err) {
        //                 toastr.error('An error occurred');
        //             }
        //         });
        //     } else {
        //         toastr.error('Select all attribute to proceed');
        //     }
        // });

        // $(document).on('click', '.add_to_compare_single_page_quick_view', function(e) {
        //     e.preventDefault();
        //     let selected_size = $('#quick_view_selected_size').val();
        //     let selected_color = $('#quick_view_selected_color').val();
        //     let site_currency_symbol = "$";

        //     $(".quick-view-size-lists.active")

        //     let pid_id = getQuickViewAttributesForCart();

        //     let product_id = $(this).data('id');
        //     let quantity = Number($('#quick-view-quantity').val().trim());
        //     let price = $('#quick-view-price').text().split(site_currency_symbol)[1];
        //     let attributes = {};
        //     let product_variant = pid_id;

        //     attributes['price'] = price;

        //     // if selected attribute is a valid product item
        //     if (quickViewValidateSelectedAttributes()) {
        //         $.ajax({
        //             url: 'https://safecart.bytesed.com/shop-page/compare/add',
        //             type: 'POST',
        //             data: {
        //                 product_id: product_id,
        //                 quantity: quantity,
        //                 pid_id: pid_id,
        //                 product_variant: product_variant,
        //                 selected_size: selected_size,
        //                 selected_color: selected_color,
        //                 attributes: attributes,
        //                 _token: 'dU4Wk7LBjRyP5FrCrAKrXU1AVdvGulm21GnEnLZL'
        //             },
        //             success: function(data) {
        //                 if (data.type ?? false) {
        //                     toastr[data.type](data.msg);
        //                 } else {
        //                     toastr.success(data.msg);
        //                 }

        //                 if (data.quantity_msg) {
        //                     toastr.warning(data.quantity_msg)
        //                 }

        //                 loadHeaderCardAndWishlistArea(data);
        //             },
        //             erorr: function(err) {
        //                 toastr.error('An error occurred');
        //             }
        //         });
        //     } else {
        //         toastr.error('Select all attribute to proceed');
        //     }
        // });

        // function selectedAttributeSearch(selected_item) {
        //     /*
        //      * search based on all selected attributes
        //      *
        //      * 1. get all selected attributes in {key:value} format
        //      * 2. search in attribute_store for all available matches
        //      * 3. display available matches (keep available matches selectable, and rest as disabled)
        //      * */

        //     let available_variant_types = [];
        //     let selected_options = {};

        //     // get all selected attributes in {key:value} format
        //     quick_view_available_options.map(function(k, option) {
        //         let selected_option = $(option).find('li.active');
        //         let type = selected_option.closest('.quick-view-size-lists').data('type');
        //         let value = selected_option.data('displayValue');

        //         if (type) {
        //             available_variant_types.push(type);
        //         }

        //         if (type && value) {
        //             selected_options[type] = value;
        //         }
        //     });

        //     quickViewSyncImage(get_quick_view_selected_options());
        //     quickViewSyncPrice(get_quick_view_selected_options());
        //     quickViewSyncStock(get_quick_view_selected_options());

        //     // search in attribute_store for all available matches
        //     let available_variants_selection = [];
        //     let selected_attributes_by_type = {};
        //     quick_view_attribute_store.map(function(arr) {
        //         let matched = true;

        //         Object.keys(selected_options).map(function(type) {

        //             if (arr[type] != selected_options[type]) {
        //                 matched = false;
        //             }
        //         })

        //         if (matched) {
        //             available_variants_selection.push(arr);

        //             // insert as {key: [value, value...]}
        //             Object.keys(arr).map(function(type) {
        //                 // not array available for the given key
        //                 if (!selected_attributes_by_type[type]) {
        //                     selected_attributes_by_type[type] = []
        //                 }

        //                 // insert value if not inserted yet
        //                 if (selected_attributes_by_type[type].indexOf(arr[type]) <= -1) {
        //                     selected_attributes_by_type[type].push(arr[type]);
        //                 }
        //             })
        //         }
        //     });

        //     // selected item not contain product then de-select all selected option hare
        //     if (Object.keys(selected_attributes_by_type).length == 0) {
        //         $('.quick-view-size-lists li.active').each(function() {
        //             let sizeItem = $(this).parent().parent();

        //             sizeItem.find('input[type=hidden]').val('');
        //             sizeItem.find('input[type=text]').val('');
        //         });

        //         $('.quick-view-size-lists li.active').removeClass("active");
        //         $('.quick-view-size-lists li.disabled-option').removeClass("disabled-option");

        //         let el = $(selected_item);
        //         let value = el.data('displayValue');

        //         el.addClass("active");
        //         $(this).find('input[type=hidden]').val(value);
        //         $(this).find('input[type=text]').val(el.data('value'));

        //         selectedAttributeSearch();
        //     }

        //     // keep only available matches selectable
        //     Object.keys(selected_attributes_by_type).map(function(type) {
        //         // initially, disable all buttons
        //         $('.quick-view-size-lists[data-type="' + type + '"] li').addClass('disabled-option');

        //         // make buttons selectable for the available options
        //         selected_attributes_by_type[type].map(function(value) {
        //             let available_buttons = $('.quick-view-size-lists[data-type="' + type +
        //                 '"] li[data-display-value="' + value + '"]');
        //             available_buttons.map(function(key, el) {
        //                 $(el).removeClass('disabled-option');
        //             })
        //         });
        //     });
        //     //  check is empty object
        //     // selected_attributes_by_type
        // }

        // function quickViewSyncImage(selected_options) {
        //     //todo fire when attribute changed
        //     let hashed_key = getQuickViewSelectionHash(selected_options);
        //     let product_image_el = $('.quick-view-shop-details-thumb-wrapper.quick-view-product-image img');

        //     let img_original_src = product_image_el.parent().data('src');

        //     // if selection has any image to it
        //     if (quick_view_additional_info_store[hashed_key]) {
        //         let attribute_image = quick_view_additional_info_store[hashed_key].image;
        //         if (attribute_image) {
        //             product_image_el.attr('src', attribute_image);
        //         } else {
        //             product_image_el.attr('src', img_original_src);
        //         }
        //     } else {
        //         product_image_el.attr('src', img_original_src);
        //     }
        // }

        // function quickViewSyncPrice(selected_options) {
        //     let hashed_key = getQuickViewSelectionHash(selected_options);

        //     let product_price_el = $('#quick-view-price');
        //     let product_main_price = Number(String(product_price_el.data('mainPrice'))).toFixed(0);
        //     let tax_percentage = Number(String(product_price_el.data('price-percentage'))).toFixed(0);
        //     let site_currency_symbol = product_price_el.data('currencySymbol');

        //     // if selection has any additional price to it
        //     if (quick_view_additional_info_store[hashed_key]) {
        //         let attribute_price = quick_view_additional_info_store[hashed_key]['additional_price'];
        //         if (attribute_price) {
        //             product_main_price = Number(product_main_price) + Number(attribute_price);
        //             let price = calculatePercentage(product_main_price, Number(tax_percentage));

        //             product_price_el.text(site_currency_symbol + (Number(price) + Number(product_main_price)));
        //         } else {
        //             product_price_el.text(site_currency_symbol + (calculatePercentage(Number(product_main_price), Number(
        //                 tax_percentage)) + Number(product_main_price)));
        //         }
        //     } else {
        //         product_price_el.text(site_currency_symbol + (calculatePercentage(Number(product_main_price), Number(
        //             tax_percentage)) + Number(product_main_price)));
        //     }
        // }

        // function quickViewSyncStock(selected_options) {
        //     let hashed_key = getQuickViewSelectionHash(selected_options);
        //     let product_stock_el = $('.quick-view-availability');
        //     let product_item_left_el = $('.quick-view-stock-available');

        //     // if selection has any size and color to it

        //     if (quick_view_additional_info_store[hashed_key]) {
        //         let stock_count = quick_view_additional_info_store[hashed_key]['stock_count'];

        //         let stock_message = '';
        //         if (Number(stock_count) > 0) {
        //             stock_message = `<span class="text-success">In Stock</span>`;
        //             product_item_left_el.text(`Only! ${stock_count} Item Left!`);
        //             product_item_left_el.addClass('text-success');
        //             product_item_left_el.removeClass('text-danger');
        //         } else {
        //             stock_message = `<span class="text-danger">Our fo Stock</span>`;
        //             product_item_left_el.text(`No Item Left!`);
        //             product_item_left_el.addClass('text-danger');
        //             product_item_left_el.removeClass('text-success');
        //         }

        //         product_stock_el.html(stock_message);

        //     } else {
        //         product_stock_el.html(product_stock_el.data("stock-text"))
        //         product_item_left_el.html(product_item_left_el.data("stock-text"))
        //     }
        // }

        // function attributeSelected() {
        //     let total_options_count = $('.quick-view-size-lists').length;
        //     let selected_options_count = $('.quick-view-size-lists li.active').length;
        //     return total_options_count === selected_options_count;
        // }

        // function addslashes(str) {
        //     return (str + '').replace(/[\\"']/g, '\\$&').replace(/\u0000/g, '\\0');
        // }

        // function getQuickViewSelectionHash(selected_options) {
        //     return MD5(JSON.stringify(selected_options));
        // }

        // function get_quick_view_selected_options() {
        //     let selected_options = {};
        //     let quick_view_available_options = $('.quick-view-value-input-area');
        //     // get all selected attributes in {key:value} format
        //     quick_view_available_options.map(function(k, option) {
        //         let selected_option = $(option).find('li.active');
        //         let type = selected_option.closest('.quick-view-size-lists').data('type');
        //         let value = selected_option.data('displayValue');

        //         if (type && value) {
        //             selected_options[type] = value;
        //         }
        //     });

        //     let ordered_data = {};
        //     let selected_options_keys = Object.keys(selected_options).sort();
        //     selected_options_keys.map(function(e) {
        //         ordered_data[e] = String(selected_options[e]);
        //     });

        //     return ordered_data;
        // }

        // function getQuickViewAttributesForCart() {
        //     let selected_options = get_quick_view_selected_options();
        //     let cart_selected_options = selected_options;
        //     let hashed_key = getQuickViewSelectionHash(selected_options);

        //     // if selected attribute set is available
        //     if (quick_view_additional_info_store[hashed_key]) {
        //         return quick_view_additional_info_store[hashed_key]['pid_id'];
        //     }

        //     // if selected attribute set is not available
        //     if (Object.keys(selected_options).length) {
        //         toastr.error('Attribute not available')
        //     }

        //     return '';
        // }

        // function send_ajax_response_get_response(type, url) {
        //     $.ajax({
        //         url: url,
        //         type: type,
        //         data: {
        //             style: "two",
        //             limit: $(".product-filter-two-wrapper").data("item-limit")
        //         },
        //         headers: {
        //             'X-CSRF-TOKEN': "dU4Wk7LBjRyP5FrCrAKrXU1AVdvGulm21GnEnLZL",
        //         },
        //         beforeSend: function() {
        //             $(".product-filter-two-wrapper").attr("style", "height:912px");
        //             $(".filter-style-block-preloader.lds-ellipsis").show();
        //         },
        //         success: function(data) {
        //             $(".filter-style-block-preloader.lds-ellipsis").hide(300);
        //             $(".product-filter-two-wrapper").removeAttr("style");
        //             $(".product-filter-two-wrapper").html(data).removeAttr("style");

        //             if (data.success == false) {
        //                 toastr.warning('There something is wrong please try again');
        //             }
        //         },
        //         erorr: function(err) {
        //             $(".product-filter-two-wrapper").removeAttr("style");
        //             $(".filter-style-block-preloader.lds-ellipsis").hide(300);
        //             toastr.error('An error occurred');
        //         }
        //     });
        // }

        // function quickViewValidateSelectedAttributes() {
        //     let selected_options = get_quick_view_selected_options();
        //     let hashed_key = getQuickViewSelectionHash(selected_options);

        //     // validate if product has any attribute
        //     if (quick_view_attribute_store.length) {
        //         if (!Object.keys(selected_options).length) {
        //             return false;
        //         }

        //         if (!quick_view_additional_info_store[hashed_key]) {
        //             return false;
        //         }

        //         return !!quick_view_additional_info_store[hashed_key]['pid_id'];
        //     }

        //     return true;
        // }

        // function loadHeaderCardAndWishlistArea(data) {
        //     if (data.header_area != undefined) {
        //         $(".header-card-area-content-wrapper").html(data.header_area);
        //     }

        //     return '';
        // }


        // $(document).ready(function() {
        //     loopcounter("loopCounter_global")
        // });

        // $(document).on('keyup', '#search_form_input', function(e) {
        //     let input_values = $(this).val();
        //     let category_id = $('#search_selected_category').val();
        //     let search_result_category = $('#search_result_categories');
        //     let search_result_products = $('#search_result_products');
        //     let sppinnerHtml = '<i class="las la-spinner la-spin"></i>';
        //     let btnIns = $(this).parent().find('button');
        //     let btnOldText = `<i class="las la-search"></i>`;
        //     let site_currency_symbol = "$";

        //     if (!input_values.length) {
        //         search_result_category.html('');
        //         search_result_products.html('');
        //         $('#search_suggestions_wrap').hide();
        //     } else {
        //         //enable preloader
        //         btnIns.html(sppinnerHtml)
        //         $.get('https://safecart.bytesed.com/shop-page/search', {
        //             name: input_values,
        //             category: category_id
        //         }).then(function(data) {
        //             $('#search_suggestions_wrap').show();
        //             search_result_category.html('');
        //             if (data['product_url']) {
        //                 $('#search_result_all').attr('href', data['product_url']);
        //             }
        //             let fetchedCategory = data['categories'];
        //             if (data['categories']) {
        //                 search_result_category.parent().show();
        //                 $('#no_product_found_div').hide();
        //                 //check it ther category avialble or not
        //                 Object.values(data['categories']).forEach(function(category) {
        //                     search_result_category.append(`<li class="list">
        //                             <a href="${category['url']}" class="item">${category['title']}</a>
        //                         </li>`);
        //                 });
        //             }

        //             if (fetchedCategory.length === 0) {
        //                 $('#search_result_categories').parent().hide();
        //             }

        //             let fetchedProdcuts = data['products'];
        //             search_result_products.html('');
        //             if (data['products']) {
        //                 $('#search_result_products').parent().show();
        //                 $('#no_product_found_div').hide();
        //                 let searchResultForProducts = "";
        //                 Object.values(data['products']).forEach(function(product) {
        //                     searchResultForProducts += `
        //                             <li class="list">
        //                                 <a href="${product['url']}" class="item">
        //                                     <div class="product-image"><img src="${product['img_url']}" alt="img"></div>
        //                                     <div class="product-info">
        //                                         <div class="product-info-top">
        //                                             <h6 class="product-name">${product['title']}</h6>
        //                                         </div>
        //                                         <div class="product-price mt-2">
        //                                             <div class="price-update-through">
        //                                                 <span class="flash-price fw-500">${site_currency_symbol + product['discount_price']}</span>
        //                                                 <span class="flash-old-prices">${site_currency_symbol + product['price']}</span>
        //                                             </div>
        //                                             <span class="stock-out">${product['stock_count'] > 0 ? 'In Stock' : 'Stock Out'}</span>
        //                                         </div>
        //                                     </div>
        //                                 </a>
        //                             </li>
        //                         `
        //                 });

        //                 $("#search_result_products").html(searchResultForProducts);
        //             }

        //             if (fetchedProdcuts.length === 0 && fetchedCategory.length === 0) {
        //                 $('#no_product_found_div').show();
        //             }

        //             //  disable preloader
        //             btnIns.html(btnOldText);

        //             $('.category-searchbar').show();
        //             $('#search_suggestions_wrap').addClass("show");
        //         });
        //     }
        // });

        $(document).ready(function(){
            if ($('#lang-change').length > 0) {
                $('#lang-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e){
                        e.preventDefault();
                        var $this = $(this);
                        var locale = $this.data('flag');
                        $.post('{{ route('language.change') }}',{_token: AIZ.data.csrf, locale:locale}, function(data){
                            location.reload();
                        });

                    });
                });
            }

            if ($('#currency-change').length > 0) {
                $('#currency-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e){
                        e.preventDefault();
                        var $this = $(this);
                        var currency_code = $this.data('currency');
                        $.post('{{ route('currency.change') }}',{_token: AIZ.data.csrf, currency_code:currency_code}, function(data){
                            location.reload();
                        });

                    });
                });
            }
        });

    </script>


    @if (get_setting('facebook_chat') == 1)
        <script type="text/javascript">
            window.fbAsyncInit = function() {
                FB.init({
                  xfbml            : true,
                  version          : 'v3.3'
                });
              };

              (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <div id="fb-root"></div>
        <!-- Your customer chat code -->
        <div class="fb-customerchat"
          attribution=setup_tool
          page_id="{{ env('FACEBOOK_PAGE_ID') }}">
        </div>
    @endif

    <script>
        @foreach (session('flash_notification', collect())->toArray() as $message)
            AIZ.plugins.notify('{{ $message['level'] }}', '{{ $message['message'] }}');
        @endforeach
    </script>

    <script>
        $(document).ready(function() {
            $('.category-nav-element').each(function(i, el) {
                $(el).on('mouseover', function(){
                    if(!$(el).find('.sub-cat-menu').hasClass('loaded')){
                        $.post('{{ route('category.elements') }}', {_token: AIZ.data.csrf, id:$(el).data('id')}, function(data){
                            $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                        });
                    }
                });
            });

            if ($('#lang-change').length > 0) {
                $('#lang-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e){
                        e.preventDefault();
                        var $this = $(this);
                        var locale = $this.data('flag');
                        $.post('{{ route('language.change') }}',{_token: AIZ.data.csrf, locale:locale}, function(data){
                            location.reload();
                        });

                    });
                });
            }

            if ($('#currency-change').length > 0) {
                $('#currency-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e){
                        e.preventDefault();
                        var $this = $(this);
                        var currency_code = $this.data('currency');
                        $.post('{{ route('currency.change') }}',{_token: AIZ.data.csrf, currency_code:currency_code}, function(data){
                            location.reload();
                        });

                    });
                });
            }
        });

        $('#search').on('keyup', function(){
            search();
        });

        $('#search').on('focus', function(){
            search();
        });

        function search(){
            var searchKey = $('#search').val();
            if(searchKey.length > 0){
                $('body').addClass("typed-search-box-shown");

                $('.typed-search-box').removeClass('d-none');
                $('.search-preloader').removeClass('d-none');
                $.post('{{ route('search.ajax') }}', { _token: AIZ.data.csrf, search:searchKey}, function(data){
                    if(data == '0'){
                        // $('.typed-search-box').addClass('d-none');
                        $('#search-content').html(null);
                        $('.typed-search-box .search-nothing').removeClass('d-none').html('{{ translate('Sorry, nothing found for') }} <strong>"'+searchKey+'"</strong>');
                        $('.search-preloader').addClass('d-none');

                    }
                    else{
                        $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                        $('#search-content').html(data);
                        $('.search-preloader').addClass('d-none');
                    }
                });
            }
            else {
                $('.typed-search-box').addClass('d-none');
                $('body').removeClass("typed-search-box-shown");
            }
        }

        $(".aiz-user-top-menu").on("mouseover", function (event) {
            $(".hover-user-top-menu").addClass('active');
        })
        .on("mouseout", function (event) {
            $(".hover-user-top-menu").removeClass('active');
        });

        $(document).on("click", function(event){
            var $trigger = $("#category-menu-bar");
            if($trigger !== event.target && !$trigger.has(event.target).length){
                $("#click-category-menu").slideUp("fast");;
                $("#category-menu-bar-icon").removeClass('show');
            }
        });

        function updateNavCart(view,count){
            $('.cart-count').html(count);
            $('#cart_items').html(view);
        }

        function removeFromCart(key){
            $.post('{{ route('cart.removeFromCart') }}', {
                _token  : AIZ.data.csrf,
                id      :  key
            }, function(data){
                updateNavCart(data.nav_cart_view,data.cart_count);
                $('#cart-summary').html(data.cart_view);
                AIZ.plugins.notify('success', "{{ translate('Item has been removed from cart') }}");
                $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())-1);
            });
        }

        function showLoginModal() {
            $('#login_modal').modal();
        }

        function addToCompare(id){
            $.post('{{ route('compare.addToCompare') }}', {_token: AIZ.data.csrf, id:id}, function(data){
                $('#compare').html(data);
                AIZ.plugins.notify('success', "{{ translate('Item has been added to compare list') }}");
                $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html())+1);
            });
        }

        function addToWishList(id){
            @if (Auth::check() && Auth::user()->user_type == 'customer')
                $.post('{{ route('wishlists.store') }}', {_token: AIZ.data.csrf, id:id}, function(data){
                    if(data != 0){
                        $('#wishlist').html(data);
                        AIZ.plugins.notify('success', "{{ translate('Item has been added to wishlist') }}");
                    }
                    else{
                        AIZ.plugins.notify('warning', "{{ translate('Please login first') }}");
                    }
                });
            @elseif(Auth::check() && Auth::user()->user_type != 'customer')
                AIZ.plugins.notify('warning', "{{ translate('Please Login as a customer to add products to the WishList.') }}");
            @else
                AIZ.plugins.notify('warning', "{{ translate('Please login first') }}");
            @endif
        }

        function showAddToCartModal(id){
            if(!$('#modal-size').hasClass('modal-lg')){
                $('#modal-size').addClass('modal-lg');
            }
            $('#addToCart-modal-body').html(null);
            $('#addToCart').modal();
            $('.c-preloader').show();
            $.post('{{ route('cart.showCartModal') }}', {_token: AIZ.data.csrf, id:id}, function(data){
                $('.c-preloader').hide();
                $('#addToCart-modal-body').html(data);
                AIZ.plugins.slickCarousel();
                AIZ.plugins.zoom();
                AIZ.extra.plusMinus();
                getVariantPrice();
            });
        }

        $('#option-choice-form input').on('change', function(){
            getVariantPrice();
        });

        function getVariantPrice(){
            if($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()){
                $.ajax({
                    type:"POST",
                    url: '{{ route('products.variant_price') }}',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data){
                        $('.product-gallery-thumb .carousel-box').each(function (i) {
                            if($(this).data('variation') && data.variation == $(this).data('variation')){
                                $('.product-gallery-thumb').slick('slickGoTo', i);
                            }
                        })

                        $('#option-choice-form #chosen_price_div').removeClass('d-none');
                        $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                        $('#available-quantity').html(data.quantity);
                        $('.input-number').prop('max', data.max_limit);
                        if(parseInt(data.in_stock) == 0 && data.digital  == 0){
                           $('.buy-now').addClass('d-none');
                           $('.add-to-cart').addClass('d-none');
                           $('.out-of-stock').removeClass('d-none');
                        }
                        else{
                           $('.buy-now').removeClass('d-none');
                           $('.add-to-cart').removeClass('d-none');
                           $('.out-of-stock').addClass('d-none');
                        }

                        AIZ.extra.plusMinus();
                    }
                });
            }
        }

        function checkAddToCartValidity(){
            var names = {};
            $('#option-choice-form input:radio').each(function() { // find unique names
                names[$(this).attr('name')] = true;
            });
            var count = 0;
            $.each(names, function() { // then count them
                count++;
            });

            if($('#option-choice-form input:radio:checked').length == count){
                return true;
            }

            return false;
        }

        function addToCart(){
            @if(Auth::check() && Auth::user()->user_type != 'customer')
                AIZ.plugins.notify('warning', "{{ translate('Please Login as a customer to add products to the Cart.') }}");
                return false;
            @endif

            if(checkAddToCartValidity()) {
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                    type:"POST",
                    url: '{{ route('cart.addToCart') }}',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data){
                       $('#addToCart-modal-body').html(null);
                       $('.c-preloader').hide();
                       $('#modal-size').removeClass('modal-lg');
                       $('#addToCart-modal-body').html(data.modal_view);
                       AIZ.extra.plusMinus();
                       AIZ.plugins.slickCarousel();
                       updateNavCart(data.nav_cart_view,data.cart_count);
                    }
                });
            }
            else{
                AIZ.plugins.notify('warning', "{{ translate('Please choose all the options') }}");
            }
        }

        function buyNow(){
            @if(Auth::check() && Auth::user()->user_type != 'customer')
                AIZ.plugins.notify('warning', "{{ translate('Please Login as a customer to add products to the Cart.') }}");
                return false;
            @endif

            if(checkAddToCartValidity()) {
                $('#addToCart-modal-body').html(null);
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                    type:"POST",
                    url: '{{ route('cart.addToCart') }}',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data){
                        if(data.status == 1){
                            $('#addToCart-modal-body').html(data.modal_view);
                            updateNavCart(data.nav_cart_view,data.cart_count);
                            window.location.replace("{{ route('cart') }}");
                        }
                        else{
                            $('#addToCart-modal-body').html(null);
                            $('.c-preloader').hide();
                            $('#modal-size').removeClass('modal-lg');
                            $('#addToCart-modal-body').html(data.modal_view);
                        }
                    }
               });
            }
            else{
                AIZ.plugins.notify('warning', "{{ translate('Please choose all the options') }}");
            }
        }

        function bid_single_modal(bid_product_id, min_bid_amount){
            @if (Auth::check() && (isCustomer() || isSeller()))
                var min_bid_amount_text = "({{ translate('Min Bid Amount: ')}}"+min_bid_amount+")";
                $('#min_bid_amount').text(min_bid_amount_text);
                $('#bid_product_id').val(bid_product_id);
                $('#bid_amount').attr('min', min_bid_amount);
                $('#bid_for_product').modal('show');
            @elseif (Auth::check() && isAdmin())
                AIZ.plugins.notify('warning', '{{ translate("Sorry, Only customers & Sellers can Bid.") }}');
            @else
                $('#login_modal').modal('show');
            @endif
        }

        function clickToSlide(btn,id){
            $('#'+id+' .aiz-carousel').find('.'+btn).trigger('click');
            $('#'+id+' .slide-arrow').removeClass('link-disable');
            var arrow = btn=='slick-prev' ? 'arrow-prev' : 'arrow-next';
            if ($('#'+id+' .aiz-carousel').find('.'+btn).hasClass('slick-disabled')) {
                $('#'+id).find('.'+arrow).addClass('link-disable');
            }
        }

        function goToView(params) {
            document.getElementById(params).scrollIntoView({behavior: "smooth", block: "center"});
        }

        function copyCouponCode(code){
            navigator.clipboard.writeText(code);
            AIZ.plugins.notify('success', "{{ translate('Coupon Code Copied') }}");
        }

        $(document).ready(function(){
            $('.cart-animate').animate({margin : 0}, "slow");

            $({deg: 0}).animate({deg: 360}, {
                duration: 2000,
                step: function(now) {
                    $('.cart-rotate').css({
                        transform: 'rotate(' + now + 'deg)'
                    });
                }
            });

            setTimeout(function(){
                $('.cart-ok').css({ fill: '#d43533' });
            }, 2000);

        });
    </script>

    @if (addon_is_activated('otp_system'))
        <script type="text/javascript">
            // Country Code
            var isPhoneShown = true,
                countryData = window.intlTelInputGlobals.getCountryData(),
                input = document.querySelector("#phone-code");

            for (var i = 0; i < countryData.length; i++) {
                var country = countryData[i];
                if (country.iso2 == 'bd') {
                    country.dialCode = '88';
                }
            }

            var iti = intlTelInput(input, {
                separateDialCode: true,
                utilsScript: "{{ static_asset('assets/js/intlTelutils.js') }}?1590403638580",
                onlyCountries: @php echo get_active_countries()->pluck('code') @endphp,
                customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                    if (selectedCountryData.iso2 == 'bd') {
                        return "01xxxxxxxxx";
                    }
                    return selectedCountryPlaceholder;
                }
            });

            var country = iti.getSelectedCountryData();
            $('input[name=country_code]').val(country.dialCode);

            input.addEventListener("countrychange", function(e) {
                // var currentMask = e.currentTarget.placeholder;
                var country = iti.getSelectedCountryData();
                $('input[name=country_code]').val(country.dialCode);

            });

            function toggleEmailPhone(el) {
                if (isPhoneShown) {
                    $('.phone-form-group').addClass('d-none');
                    $('.email-form-group').removeClass('d-none');
                    $('input[name=phone]').val(null);
                    isPhoneShown = false;
                    $(el).html('*{{ translate('Use Phone Instead') }}');
                } else {
                    $('.phone-form-group').removeClass('d-none');
                    $('.email-form-group').addClass('d-none');
                    $('input[name=email]').val(null);
                    isPhoneShown = true;
                    $(el).html('<i>*{{ translate('Use Email Instead') }}</i>');
                }
            }
        </script>
    @endif

    <script>
        var acc = document.getElementsByClassName("aiz-accordion-heading");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
    @yield('script')
    <script src="{{ static_asset('fontend/assets/frontend/js/dynamic-script.js') }}"></script>

    @php
        echo get_setting('footer_script');
    @endphp
</body>
</html>
