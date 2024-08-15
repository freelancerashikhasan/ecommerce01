@extends('frontend.layouts.app')
@push('styles')
    <style>
        #time{
            display: flex !important;
            gap: 5px !important;
        }
        #time .circle svg{
            display: none !important;
        }
        #days{
            display: flex !important;
            border: 1px solid #999999 !important;
            padding: 2px !important;
        }
        #hours{
            display: flex !important;
            border: 1px solid #999999 !important;
            padding: 2px !important;
        }
        #minutes{
            display: flex !important;
            border: 1px solid #999999 !important;
            padding: 2px !important;
        }
        #seconds{
            display: flex !important;
            border: 1px solid #999999 !important;
            padding: 2px !important;
        }
    </style>
@endpush
@section('content')

<div class="body-overlay"></div>
<div class="body-overlay-desktop"></div>
<!-- Breadcrumb area Starts -->
<div class="breadcrumb-area breadcrumb-padding bg-item-badge d-none">
    <div class="breadcrumb-shapes">
        <img src="{{ static_asset('assets/img/shop/badge-s1.png') }}" alt="">
        <img src="{{ static_asset('assets/img/shop/badge-s2.png') }}" alt="">
        <img src="{{ static_asset('assets/img/shop/badge-s3.png') }}" alt="">
    </div>

    <div class="container container-one">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-contents">
                    <h2 class="breadcrumb-title">
                    </h2>

                    <ul class="breadcrumb-list">
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb area end -->
<main class="main">
    <!-- Banner area Starts -->
    <div class="banner__area padding-top-20 padding-bottom-">
        <div class="container container_1608">
            <div class="row g-4">
                <div class="col-xxl-4">
                    <div class="banner__height">
                        <div class="row g-4">
                            <div class="col-xxl-12 col-lg-6">
                                <div class="banner__card bg__blue radius-5">
                                    <div class="banner__card__flex">
                                        <div class="banner__card__contents">
                                            <span class="banner__card__subtitle mb-2">NOVEMBERS GADGET
                                                MADNESS</span>
                                            <h2 class="banner__card__title">20% OFF</h2>
                                            <div class="btn_wrapper mt-4">
                                                <a href="campaign/flash-sale.html"
                                                    class="cmn_btn btn_bg_yellow radius-30">GET Offer</a>
                                            </div>
                                        </div>
                                        <div class="banner__card__thumb">
                                            <img alt=''
                                                src='{{ static_asset('fontend/assets/uploads/media-uploader/banner-card1-654756d8c47281699174142.webp') }}'
                                                class=''>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-lg-6">
                                <div class="banner__card bg__yellow text-center radius-5">
                                    <div class="banner__card__contents">
                                        <span class="banner__card__subtitle mb-2">HOME APPLIANCES</span>
                                        <h2 class="banner__card__title">CYBER MONDAY SPECIAL</h2>
                                    </div>
                                    <div class="banner__card__thumb">
                                        <img alt=''
                                            src='{{ static_asset('fontend/assets/uploads/media-uploader/banner-card2-654756d7f21061699174143.webp') }}'
                                            class=''>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8">
                    <div class="banner__slider bg__blue banner__height radius-5">
                        <div class="banner__slider__waveShape">
                            <img src="{{ static_asset('fontend/assets/frontend/img/banner/banner_waves.png') }}" alt="banner_waves">
                        </div>
                        <div class="global-slick-init dot-style-one slider-inner-margin" data-infinite="true"
                            data-arrows="false" data-dots="true" data-slidesToShow="1" data-swipeToSlide="true"
                            data-autoplay="false" data-autoplaySpeed="2500"
                            data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>'
                            data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>'
                            data-responsive='[{"breakpoint": 1600,"settings": {"slidesToShow": 1}},{"breakpoint": 1200,"settings": {"slidesToShow": 1}},{"breakpoint": 992,"settings": {"slidesToShow": 1}},{"breakpoint": 576, "settings": {"slidesToShow": 1} }]'>
                            <div class="banner__slider__item">
                                <div class="banner__wrap">
                                    <div class="banner__contents">
                                        <span class="banner__contents__subtitle mb-3">WINTER 2024 Offer</span>
                                        <h2 class="banner__contents__title">
                                            Grab the best fashion deals in this winter
                                        </h2>
                                        <div class="btn_wrapper mt-5 mt-lg-5">
                                            <a href="campaign/flash-sale.html"
                                                class="cmn_btn btn_bg_black radius-30">
                                                Get Deals
                                            </a>
                                        </div>
                                    </div>
                                    <div class="banner__wrap__thumb">
                                        <img alt=''
                                            src='assets/uploads/media-uploader/banner-man-654756d877ca21699174142.webp'
                                            class=''>
                                    </div>
                                </div>
                            </div>
                            <div class="banner__slider__item">
                                <div class="banner__wrap">
                                    <div class="banner__contents">
                                        <span class="banner__contents__subtitle mb-3">WINTER 2024 Offer</span>
                                        <h2 class="banner__contents__title">
                                            Grab the best fashion deals in this winter
                                        </h2>
                                        <div class="btn_wrapper mt-5 mt-lg-5">
                                            <a href="campaign/flash-sale.html"
                                                class="cmn_btn btn_bg_black radius-30">
                                                Get Deals
                                            </a>
                                        </div>
                                    </div>
                                    <div class="banner__wrap__thumb">
                                        <img alt=''
                                            src='assets/uploads/media-uploader/banner-man-654756d877ca21699174142.webp'
                                            class=''>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner area end -->
    <!-- Popular Porduct Starts -->
    <section class="popularProduct__area padding-top-50 padding-bottom-50 ">
        <div class="container container_1608">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-left section_borderBottom">
                        <h2 class="title">Popular Products</h2>
                        <div class="btn_wrapper">
                            <a href="shop-page.html" class="viewAll_btn">
                                View All <i class="las la-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-5 mt-1">
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__card__thumb">
                            <a href="shop-page/quantumcore-pro-gaming-motherboard.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/14cb6b848089175d68451d7d1261706168588.html'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/quantumcore-pro-gaming-motherboard.html">
                                    QuantumCore Pro Gaming Motherboard
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$240.00</span>
                                <s class="product__price__old">$250.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="Add to Cart" href="#1"
                                    data-attributes="" data-id="3"
                                    class="product__card__cart__outline radius-30 add_to_cart_ajax ">
                                    Add to Cart
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="3"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a href="#1" data-id="3"
                                        class=" add_to_wishlist_ajax icon cart-loading product__card__cart__btn__icon">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__offer">
                            <span class="product__offer__para">6% Off</span>
                        </div>
                        <div class="product__card__thumb">
                            <a href="shop-page/titanpro-gaming-laptop.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/macbook-pro-laptop-653e0c1326fcd1698846943.webp'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/titanpro-gaming-laptop.html">
                                    TitanPro Gaming Laptop
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$500.00</span>
                                <s class="product__price__old">$533.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="View Details"
                                    data-action-route="shop-page/quick-viewpage/titanpro-gaming-laptop.html"
                                    data-attributes="" data-id="4"
                                    class="product__card__cart__btn radius-30 product-quick-view-ajax ">
                                    View Details
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="4"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a class=" product-quick-view-ajax favourite icon cart-loading product__card__cart__btn__icon"
                                        href="#1"
                                        data-action-route="shop-page/quick-viewpage/titanpro-gaming-laptop.html">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__offer">
                            <span class="product__offer__para">56% Off</span>
                        </div>
                        <div class="product__card__thumb">
                            <a href="shop-page/guardianeye-hd-surveillance-camera.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/51692277637-6542446c83e371698841719.webp'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/guardianeye-hd-surveillance-camera.html">
                                    GuardianEye HD Surveillance Camera
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$140.00</span>
                                <s class="product__price__old">$321.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="Add to Cart" href="#1"
                                    data-attributes="" data-id="5"
                                    class="product__card__cart__outline radius-30 add_to_cart_ajax ">
                                    Add to Cart
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="5"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a href="#1" data-id="5"
                                        class=" add_to_wishlist_ajax icon cart-loading product__card__cart__btn__icon">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__card__thumb">
                            <a href="shop-page/swiftglide-precision-mouse.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/41692277636-654244b547d551698841794.webp'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/swiftglide-precision-mouse.html">
                                    SwiftGlide Precision Mouse
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$1000.00</span>
                                <s class="product__price__old">$800.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="Add to Cart" href="#1"
                                    data-attributes="" data-id="6"
                                    class="product__card__cart__outline radius-30 add_to_cart_ajax ">
                                    Add to Cart
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="6"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a href="#1" data-id="6"
                                        class=" add_to_wishlist_ajax icon cart-loading product__card__cart__btn__icon">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__card__thumb">
                            <a href="shop-page/phoenixtech-motherboard-x7-1.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/21692277634-654243f9e7edd1698841606.webp'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/phoenixtech-motherboard-x7-1.html">
                                    PhoenixTech Motherboard X7
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$200.00</span>
                                <s class="product__price__old">$223.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="Add to Cart" href="#1"
                                    data-attributes="" data-id="7"
                                    class="product__card__cart__outline radius-30 add_to_cart_ajax ">
                                    Add to Cart
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="7"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a href="#1" data-id="7"
                                        class=" add_to_wishlist_ajax icon cart-loading product__card__cart__btn__icon">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__card__thumb">
                            <a href="shop-page/intle-gaming-laptop-test.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/xiaomi-mi-notebook-air-125-653e0c275553b1698904025.webp'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/intle-gaming-laptop-test.html">
                                    Intle Gaming Laptop
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$258.40</span>
                                <s class="product__price__old">$340.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="View Details"
                                    data-action-route="shop-page/quick-viewpage/intle-gaming-laptop-test.html"
                                    data-attributes="" data-id="8"
                                    class="product__card__cart__btn radius-30 product-quick-view-ajax ">
                                    View Details
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="8"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a class=" product-quick-view-ajax favourite icon cart-loading product__card__cart__btn__icon"
                                        href="#1"
                                        data-action-route="shop-page/quick-viewpage/intle-gaming-laptop-test.html">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__offer">
                            <span class="product__offer__para">17% Off</span>
                        </div>
                        <div class="product__card__thumb">
                            <a href="shop-page/phoenixtech-motherboard-x7.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/21692277634-654243f9e7edd1698841606.webp'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/phoenixtech-motherboard-x7.html">
                                    PhoenixTech Motherboard X7
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$200.00</span>
                                <s class="product__price__old">$240.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="Add to Cart" href="#1"
                                    data-attributes="" data-id="10"
                                    class="product__card__cart__outline radius-30 add_to_cart_ajax ">
                                    Add to Cart
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="10"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a href="#1" data-id="10"
                                        class=" add_to_wishlist_ajax icon cart-loading product__card__cart__btn__icon">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__card__thumb">
                            <a href="shop-page/ultravision-4k-monitor.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/11692277634-654245937ebab1698842015.webp'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/ultravision-4k-monitor.html">
                                    UltraVision 4K Monitor
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$190.00</span>
                                <s class="product__price__old">$250.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="Add to Cart" href="#1"
                                    data-attributes="" data-id="11"
                                    class="product__card__cart__outline radius-30 add_to_cart_ajax ">
                                    Add to Cart
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="11"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a href="#1" data-id="11"
                                        class=" add_to_wishlist_ajax icon cart-loading product__card__cart__btn__icon">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__card__thumb">
                            <a href="shop-page/philosopy.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/store221684992299-6542463f3f7401698842199.webp'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/philosopy.html">
                                    Philosopy
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$50.00</span>
                                <s class="product__price__old">$60.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="Add to Cart" href="#1"
                                    data-attributes="" data-id="12"
                                    class="product__card__cart__outline radius-30 add_to_cart_ajax ">
                                    Add to Cart
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="12"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a href="#1" data-id="12"
                                        class=" add_to_wishlist_ajax icon cart-loading product__card__cart__btn__icon">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__card__thumb">
                            <a href="shop-page/maison-francis.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/image-1-65433760576ef1698903973.webp'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/maison-francis.html">
                                    Maison Francis
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$55.00</span>
                                <s class="product__price__old">$60.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="Add to Cart" href="#1"
                                    data-attributes="" data-id="13"
                                    class="product__card__cart__outline radius-30 add_to_cart_ajax ">
                                    Add to Cart
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="13"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a href="#1" data-id="13"
                                        class=" add_to_wishlist_ajax icon cart-loading product__card__cart__btn__icon">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__card__thumb">
                            <a href="shop-page/dior.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/cl121684992083-6542463e3d2c91698842199.webp'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/dior.html">
                                    Dior
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$321.00</span>
                                <s class="product__price__old">$452.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="Add to Cart" href="#1"
                                    data-attributes="" data-id="14"
                                    class="product__card__cart__outline radius-30 add_to_cart_ajax ">
                                    Add to Cart
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="14"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a href="#1" data-id="14"
                                        class=" add_to_wishlist_ajax icon cart-loading product__card__cart__btn__icon">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__card__thumb">
                            <a href="shop-page/chanel.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/cl111684992030-6542469db0e551698842277.webp'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/chanel.html">
                                    Chanel
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$30.00</span>
                                <s class="product__price__old">$40.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="View Details"
                                    data-action-route="shop-page/quick-viewpage/chanel.html" data-attributes=""
                                    data-id="15"
                                    class="product__card__cart__btn radius-30 product-quick-view-ajax ">
                                    View Details
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="15"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a class=" product-quick-view-ajax favourite icon cart-loading product__card__cart__btn__icon"
                                        href="#1" data-action-route="shop-page/quick-viewpage/chanel.html">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Porduct end -->
    <!-- Category area Starts -->
    <section class="category__area padding-top-50 padding-bottom-50">
        <div class="container container_1608">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-left section_borderBottom">
                        <h2 class="title">Categories</h2>
                        <div class="append_category"></div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="category__slider">
                        <div class="global-slick-init slider-inner-margin" data-appendArrows=".append_category"
                            data-infinite="true" data-arrows="true" data-dots="false" data-slidesToShow="9"
                            data-swipeToSlide="true" data-autoplay="false" data-autoplaySpeed="2500"
                            data-prevArrow='<div class="prev-icon"><i class="las la-arrow-left"></i></div>'
                            data-nextArrow='<div class="next-icon"><i class="las la-arrow-right"></i></div>'
                            data-responsive='[{"breakpoint": 1600,"settings": {"slidesToShow": 7}},{"breakpoint": 1200,"settings": {"slidesToShow": 5}},{"breakpoint": 992,"settings": {"slidesToShow": 4}},{"breakpoint": 768,"settings": {"slidesToShow": 3}},{"breakpoint": 500, "settings": {"slidesToShow": 2} }]'>
                                @include('frontend.partials.category_menu')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category area end -->
    <!-- Promo area start -->
    <section class="promo_area padding-top-50 padding-bottom-50">
        <div class="container container_1608">
            <div class="promo__wrapper bg-white">
                <div class="row gy-4 gx-2">
                    <div class="col-xxl-3 col-xl-4 col-md-6">
                        <div class="promo__item">
                            <div class="promo__item__flex">
                                <div class="promo__item__icon">
                                    <img alt=''
                                        src='assets/uploads/media-uploader/svg/secure1699175042.svg'
                                        class=''>
                                </div>
                                <div class="promo__item__contents">
                                    <h4 class="promo__item__title">Secure Payment Gateways</h4>
                                    <p class="promo__item__para mt-1">
                                        Partnered with 48+ gateways for your safety
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-md-6">
                        <div class="promo__item">
                            <div class="promo__item__flex">
                                <div class="promo__item__icon">
                                    <img alt=''
                                        src='assets/uploads/media-uploader/svg/reviews1699175042.svg'
                                        class=''>
                                </div>
                                <div class="promo__item__contents">
                                    <h4 class="promo__item__title">Customer Reviews</h4>
                                    <p class="promo__item__para mt-1">
                                        Verified reviews are featured in our platforms
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-md-6">
                        <div class="promo__item">
                            <div class="promo__item__flex">
                                <div class="promo__item__icon">
                                    <img alt=''
                                        src='assets/uploads/media-uploader/svg/return1699175043.svg'
                                        class=''>
                                </div>
                                <div class="promo__item__contents">
                                    <h4 class="promo__item__title">30 Day No-Hassle Return</h4>
                                    <p class="promo__item__para mt-1">
                                        We guarantee happiness, If you’re not return it
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-md-6">
                        <div class="promo__item">
                            <div class="promo__item__flex">
                                <div class="promo__item__icon">
                                    <img alt=''
                                        src='assets/uploads/media-uploader/svg/support1699175043.svg'
                                        class=''>
                                </div>
                                <div class="promo__item__contents">
                                    <h4 class="promo__item__title">24/7 Customer Support</h4>
                                    <p class="promo__item__para mt-1">
                                        Questions? Our support team is available 24/7
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Promo area end --><!-- Today Deals Porduct Starts -->
    @if(count($todays_deal_products) > 0)
        <section class="trendingProduct__area padding-top-50 padding-bottom-50">
            <div class="container container_1608">
                @if (get_setting('todays_deal_banner') != null || get_setting('todays_deal_banner_small') != null)
                    <div class="overflow-hidden d-none d-md-block">
                        <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}"
                            data-src="{{ uploaded_asset(get_setting('todays_deal_banner')) }}"
                            alt="{{ env('APP_NAME') }} promo" class="lazyload img-fit h-100 has-transition"
                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                    </div>
                    <div class="overflow-hidden d-md-none">
                        <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}"
                            data-src="{{ get_setting('todays_deal_banner_small') != null ? uploaded_asset(get_setting('todays_deal_banner_small')) : uploaded_asset(get_setting('todays_deal_banner')) }}"
                            alt="{{ env('APP_NAME') }} promo" class="lazyload img-fit h-100 has-transition"
                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                    </div>
                @endif
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title text-left section_borderBottom" >
                            <h2 class="title">Today's Deal</h2>
                            <div class="allProduct__tab">
                                <ul class="tabs">
                                    <li data-card-style="2" data-item-limit="12"
                                        id="product_filter_featured_products" data-tab="featured_product"
                                        class="tabs_list"><a href="{{ route('todays-deal') }}">{{ translate('View All') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gy-5 mt-1" id="product_filter_section">
                    @foreach ($todays_deal_products as $key => $product)
                        <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6" title="{{  $product->getTranslation('name')  }}">
                            <div class="product__card">
                                <div class="product__offer">
                                    <span class="product__offer__para">{{ home_discounted_base_price($product) }}</span>
                                </div>
                                <div class="product__card__thumb">
                                    <a href="{{ route('product', $product->slug) }}">
                                        <img alt=''
                                        src="{{ uploaded_asset($product->thumbnail_img) }}"
                                        data-src="{{ uploaded_asset($product->thumbnail_img) }}"
                                        alt="{{ $product->getTranslation('name') }}"
                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                    </a>
                                </div>
                                <div class="product__card__contents mt-3">
                                    <h6 class="product__card__contents__title mt-2">
                                        <a href="{{ route('product', $product->slug) }}">
                                            {{  $product->getTranslation('name')  }}
                                        </a>
                                    </h6>
                                    <div class="product__price mt-2">
                                        <span class="product__price__current color-two">{{ home_discounted_base_price($product) }}</span>
                                        @if(home_base_price($product) != home_discounted_base_price($product))
                                            <s class="product__price__old">{{ home_base_price($product) }}</s>
                                        @endif
                                    </div>
                                    <div class="product__card__cart mt-3">
                                        <a href="javascript:;"
                                            @if (Auth::check()) onclick="showAddToCartModal({{ $product->id }})" @else onclick="showLoginModal()" @endif
                                            class="product__card__cart__outline radius-30 add_to_cart_ajax ">
                                            Add to Cart
                                        </a>

                                        <div class="product__card__cart__right">
                                            <a href="javascript:void(0)"  onclick="addToCompare({{ $product->id }})" data-id="3"
                                                class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                                <i class="las la-retweet"></i>
                                            </a>

                                            <a href="javascript:;" onclick="addToWishList({{ $product->id }})" data-id="3"
                                                class=" add_to_wishlist_ajax icon cart-loading product__card__cart__btn__icon">
                                                <i class="lar la-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    @endif
    <!-- Trending Porduct end --><!-- Trending Porduct end -->
    <!-- All Porduct start -->
    <section class="allProduct__area padding-top-50 padding-bottom-50">
        <div class="container container_1608">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-left section_borderBottom">
                        <div class="allProduct__tab">
                            <ul class="tabs tabs_two">
                                <li data-tab-two="top_rated" class="vendor_search_tab tabs_list_two">Top Rated
                                </li>
                                <li data-tab-two="top_selling" class="vendor_search_tab tabs_list_two">Top
                                    Selling</li>
                                <li data-tab-two="weekly_top" class="vendor_search_tab tabs_list_two">Weekly Top
                                </li>
                            </ul>
                        </div>
                        <div class="btn_wrapper">
                            <a href="vendors.html" class="viewAll_btn">View All
                                <i class="las la-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="" id="all_vendor_list">
                <div class="row g-4 mt-4">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="allProduct__item radius-10 bg-white">
                            <div class="allProduct__item__thumb">
                                <a href="vendors/hamill.html">
                                    <img alt=''
                                        src='assets/uploads/media-uploader/imgae-2-65477806930d91699186278.webp'
                                        class=''>
                                </a>
                            </div>
                            <div class="allProduct__item__contents">
                                <div class="allProduct__item__brand overflow-hidden">
                                    <a href="vendors/hamill.html">
                                        <img alt=''
                                            src='assets/uploads/media-uploader/logo-5-65477606a93aa1699186270.webp'
                                            class=''>
                                    </a>
                                </div>
                                <h4 class="allProduct__item__title mt-2">
                                    <a href="vendors/hamill.html">
                                        Ms. Cassie Carter V
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="allProduct__item radius-10 bg-white">
                            <div class="allProduct__item__thumb">
                                <a href="vendors/favian.html">
                                    <img alt=''
                                        src='assets/uploads/media-uploader/imgae-2-65477806930d91699186278.webp'
                                        class=''>
                                </a>
                            </div>
                            <div class="allProduct__item__contents">
                                <div class="allProduct__item__brand overflow-hidden">
                                    <a href="vendors/favian.html">
                                        <img alt=''
                                            src='assets/uploads/media-uploader/logo-5-65477606a93aa1699186270.webp'
                                            class=''>
                                    </a>
                                </div>
                                <h4 class="allProduct__item__title mt-2">
                                    <a href="vendors/favian.html">
                                        Mr. Parker Reichel
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="allProduct__item radius-10 bg-white">
                            <div class="allProduct__item__thumb">
                                <a href="vendors/oaltenwerth.html">
                                    <img alt=''
                                        src='assets/uploads/media-uploader/imgae-7-654778027bebc1699186282.webp'
                                        class=''>
                                </a>
                            </div>
                            <div class="allProduct__item__contents">
                                <div class="allProduct__item__brand overflow-hidden">
                                    <a href="vendors/oaltenwerth.html">
                                        <img alt=''
                                            src='assets/uploads/media-uploader/logo-3-65477606119721699186274.webp'
                                            class=''>
                                    </a>
                                </div>
                                <h4 class="allProduct__item__title mt-2">
                                    <a href="vendors/oaltenwerth.html">
                                        Jacynthe Jacobson V
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="allProduct__item radius-10 bg-white">
                            <div class="allProduct__item__thumb">
                                <a href="vendors/hadley98.html">
                                    <img alt=''
                                        src='assets/uploads/media-uploader/imgae-7-654778027bebc1699186282.webp'
                                        class=''>
                                </a>
                            </div>
                            <div class="allProduct__item__contents">
                                <div class="allProduct__item__brand overflow-hidden">
                                    <a href="vendors/hadley98.html">
                                        <img alt=''
                                            src='assets/uploads/media-uploader/logo-2-65477606212931699186274.webp'
                                            class=''>
                                    </a>
                                </div>
                                <h4 class="allProduct__item__title mt-2">
                                    <a href="vendors/hadley98.html">
                                        Prof. Dannie Dietrich
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="allProduct__item radius-10 bg-white">
                            <div class="allProduct__item__thumb">
                                <a href="vendors/anita74.html">
                                    <img alt=''
                                        src='assets/uploads/media-uploader/imgae-1-65477807a0c5d1699186278.webp'
                                        class=''>
                                </a>
                            </div>
                            <div class="allProduct__item__contents">
                                <div class="allProduct__item__brand overflow-hidden">
                                    <a href="vendors/anita74.html">
                                        <img alt=''
                                            src='assets/uploads/media-uploader/logo-6-65477607447011699186270.webp'
                                            class=''>
                                    </a>
                                </div>
                                <h4 class="allProduct__item__title mt-2">
                                    <a href="vendors/anita74.html">
                                        Rahsaan Bradtke
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="allProduct__item radius-10 bg-white">
                            <div class="allProduct__item__thumb">
                                <a href="vendors/alexandrea33.html">
                                    <img alt=''
                                        src='assets/uploads/media-uploader/imgae-4-654777ff7fa771699186280.webp'
                                        class=''>
                                </a>
                            </div>
                            <div class="allProduct__item__contents">
                                <div class="allProduct__item__brand overflow-hidden">
                                    <a href="vendors/alexandrea33.html">
                                        <img alt=''
                                            src='assets/uploads/media-uploader/logo-7-654776074d9541699186272.webp'
                                            class=''>
                                    </a>
                                </div>
                                <h4 class="allProduct__item__title mt-2">
                                    <a href="vendors/alexandrea33.html">
                                        Prof. Dario Herzog DDS
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="allProduct__item radius-10 bg-white">
                            <div class="allProduct__item__thumb">
                                <a href="vendors/rmurazik.html">
                                    <img alt=''
                                        src='assets/uploads/media-uploader/imgae-3-654778084c75c1699186279.webp'
                                        class=''>
                                </a>
                            </div>
                            <div class="allProduct__item__contents">
                                <div class="allProduct__item__brand overflow-hidden">
                                    <a href="vendors/rmurazik.html">
                                        <img alt=''
                                            src='assets/uploads/media-uploader/logo-7-654776074d9541699186272.webp'
                                            class=''>
                                    </a>
                                </div>
                                <h4 class="allProduct__item__title mt-2">
                                    <a href="vendors/rmurazik.html">
                                        Chance Jakubowski
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="allProduct__item radius-10 bg-white">
                            <div class="allProduct__item__thumb">
                                <a href="vendors/wwaters.html">
                                    <img alt=''
                                        src='assets/uploads/media-uploader/imgae-1-65477807a0c5d1699186278.webp'
                                        class=''>
                                </a>
                            </div>
                            <div class="allProduct__item__contents">
                                <div class="allProduct__item__brand overflow-hidden">
                                    <a href="vendors/wwaters.html">
                                        <img alt=''
                                            src='assets/uploads/media-uploader/logo-6-65477607447011699186270.webp'
                                            class=''>
                                    </a>
                                </div>
                                <h4 class="allProduct__item__title mt-2">
                                    <a href="vendors/wwaters.html">
                                        Loyce Hickle
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="allProduct__item radius-10 bg-white">
                            <div class="allProduct__item__thumb">
                                <a href="vendors/franz.html">
                                    <img alt=''
                                        src='assets/uploads/media-uploader/imgae-7-654778027bebc1699186282.webp'
                                        class=''>
                                </a>
                            </div>
                            <div class="allProduct__item__contents">
                                <div class="allProduct__item__brand overflow-hidden">
                                    <a href="vendors/franz.html">
                                        <img alt=''
                                            src='assets/uploads/media-uploader/logo-3-65477606119721699186274.webp'
                                            class=''>
                                    </a>
                                </div>
                                <h4 class="allProduct__item__title mt-2">
                                    <a href="vendors/franz.html">
                                        Dr. Zachary Bruen V
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="allProduct__item radius-10 bg-white">
                            <div class="allProduct__item__thumb">
                                <a href="vendors/walton.html">
                                    <img alt=''
                                        src='assets/uploads/media-uploader/imgae-5-65477800521181699186281.webp'
                                        class=''>
                                </a>
                            </div>
                            <div class="allProduct__item__contents">
                                <div class="allProduct__item__brand overflow-hidden">
                                    <a href="vendors/walton.html">
                                        <img alt=''
                                            src='assets/uploads/media-uploader/logo-65477608023bd1699186273.webp'
                                            class=''>
                                    </a>
                                </div>
                                <h4 class="allProduct__item__title mt-2">
                                    <a href="vendors/walton.html">
                                        Cecilia Feeney
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="allProduct__item radius-10 bg-white">
                            <div class="allProduct__item__thumb">
                                <a href="vendors/virginie47.html">
                                    <img alt=''
                                        src='assets/uploads/media-uploader/imgae-8-65477803d781e1699186282.webp'
                                        class=''>
                                </a>
                            </div>
                            <div class="allProduct__item__contents">
                                <div class="allProduct__item__brand overflow-hidden">
                                    <a href="vendors/virginie47.html">
                                        <img alt=''
                                            src='assets/uploads/media-uploader/logo-3-65477606119721699186274.webp'
                                            class=''>
                                    </a>
                                </div>
                                <h4 class="allProduct__item__title mt-2">
                                    <a href="vendors/virginie47.html">
                                        Wilhelmine Schuster
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="allProduct__item radius-10 bg-white">
                            <div class="allProduct__item__thumb">
                                <a href="vendors/fannie86.html">
                                    <img alt=''
                                        src='assets/uploads/media-uploader/imgae-2-65477806930d91699186278.webp'
                                        class=''>
                                </a>
                            </div>
                            <div class="allProduct__item__contents">
                                <div class="allProduct__item__brand overflow-hidden">
                                    <a href="vendors/fannie86.html">
                                        <img alt=''
                                            src='assets/uploads/media-uploader/logo-5-65477606a93aa1699186270.webp'
                                            class=''>
                                    </a>
                                </div>
                                <h4 class="allProduct__item__title mt-2">
                                    <a href="vendors/fannie86.html">
                                        Laura Gislason
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- All Porduct end --><!-- Flash Sale Starts -->
    @php
        $flash_deal = get_featured_flash_deal();
    @endphp
    @if($flash_deal != null)
    <section class="flashSale__area padding-top-50 padding-bottom-50">
        <div class="container container_1608">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-left section_borderBottom">
                        <h2 class="title">{{ translate('Flash Sale') }}</h2>

                        <div class="global__countdown">
                            <div class="flashCountdown" data-date="2025-01-30">
                                <div class="aiz-count-down-circle d-flex" end-date="{{ date('Y/m/d H:i:s', $flash_deal->end_date) }}"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @php
                    $flash_deals = $flash_deal->flash_deal_products->take(10);
                @endphp
            <div class="row gy-5 mt-1">
                @foreach ($flash_deals as $key => $flash_deal_product)
                        @php
                            $product = get_single_product($flash_deal_product->product_id);
                        @endphp
                        @if ($product != null && $product->published != 0)
                            @php
                                $product_url = route('product', $product->slug);
                                if($product->auction_product == 1) {
                                    $product_url = route('auction-product', $product->slug);
                                }
                            @endphp
                    <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                        <div class="product__card">
                            <div class="product__offer">
                                <span class="product__offer__para">{{ home_discounted_base_price($product) }}</span>
                            </div>
                            <div class="product__card__thumb">
                                <a href="{{ $product_url }}" title="{{  $product->getTranslation('name')  }}">
                                    <img alt=''
                                        src='{{ uploaded_asset($product->thumbnail_img) }}'
                                        class='' alt="{{  $product->getTranslation('name')  }}" onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                </a>
                            </div>
                            <div class="product__card__contents mt-3">
                                <h6 class="product__card__contents__title mt-2">
                                    <a href="{{ $product_url }}" title="{{  $product->getTranslation('name')  }}">
                                        {{  $product->getTranslation('name')  }}
                                    </a>
                                </h6>
                                <div class="product__price mt-2">
                                    <span class="product__price__current color-two">{{ home_discounted_base_price($product) }}</span>
                                    @if(home_base_price($product) != home_discounted_base_price($product))
                                        <s class="product__price__old">{{ home_base_price($product) }}</s>
                                    @endif
                                </div>
                                <div class="product__card__cart mt-3">
                                    <a href="javascript:;"
                                    @if (Auth::check()) onclick="showAddToCartModal({{ $product->id }})" @else onclick="showLoginModal()" @endif
                                    class="product__card__cart__outline radius-30 add_to_cart_ajax ">
                                    Add to Cart
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)"  onclick="addToCompare({{ $product->id }})" data-id="3"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a href="javascript:;" onclick="addToWishList({{ $product->id }})" data-id="3"
                                        class=" add_to_wishlist_ajax icon cart-loading product__card__cart__btn__icon">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            @endforeach
        </div>
    </section>
    @endif
    <!-- Flash Sale end --><!-- Brand Logo start -->
    {{-- @if (get_setting('top_brands') != null) --}}

    <div class="brand_area padding-top-50 padding-bottom-50">
        <div class="container container_1608">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand__slider">
                        <div class="global-slick-init slider-inner-margin" data-infinite="true"
                            data-arrows="false" data-dots="false" data-slidesToShow="6"
                            data-swipeToSlide="true" data-autoplay="false" data-autoplaySpeed="2500"
                            data-prevArrow='<div class="prev-icon"><i class="las la-arrow-left"></i></div>'
                            data-nextArrow='<div class="next-icon"><i class="las la-arrow-right"></i></div>'
                            data-responsive='[{"breakpoint": 1600,"settings": {"slidesToShow": 5}},{"breakpoint": 1400,"settings": {"slidesToShow": 5}},{"breakpoint": 1200,"settings": {"slidesToShow": 4}},{"breakpoint": 992,"settings": {"slidesToShow": 3}},{"breakpoint": 576,"settings": {"slidesToShow": 2}},{"breakpoint": 425, "settings": {"slidesToShow": 2} }]'>
                            <div class="brand__slider__item">
                                <div class="brand__item text-center">
                                    <div class="brand__item__thumb">
                                        <img alt=''
                                            src='{{ asset('fontend/assets/uploads/media-uploader/logo-4-6558a431d17161700308196.webp') }}'
                                            class=''>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @endif --}}
    <!-- Brand Logo end --><!-- Winter Product start -->
    <section class="winterProduct__area padding-top-50 padding-bottom-50">
        <div class="container container_1608">
            <div class="row g-4">
                <div class="col-xl-7">
                    <div class="winterProduct radius-10 winter__bg1">
                        <div class="row align-items-end">
                            <div class="col-md-6">
                                <div class="winterProduct__contents">
                                    <div class="winterProduct__subtitle">
                                        <h2 class="winterProduct__title">Winter</h2> ON the Door
                                    </div>

                                    <div class="winterProduct__list mt-4">
                                        <span class="winterProduct__list__item">Skin Care</span>
                                        <span class="winterProduct__list__item">Fashion Wear</span>
                                        <span class="winterProduct__list__item">Electronic Items</span>
                                        <span class="winterProduct__list__item">Furniture</span>
                                    </div>

                                    <div class="btn_wrapper mt-5">
                                        <a href="campaign/flash-sale.html" class="cmn_btn btn_bg_3 radius-5">Get
                                            Offers</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="winterProduct__thumb">
                                    <img alt=''
                                        src='assets/uploads/media-uploader/winter1-65475b51a5c6c1699175279.webp'
                                        class=''>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="winterProduct">
                        <div class="row g-4">
                            <div class="col-xl-12 col-md-6">
                                <div class="winterProduct__single radius-10 winter__bg2">
                                    <div class="row align-items-center flex-row-reverse">
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="winterProduct__single__contents text-center">
                                                <h3 class="winterProduct__single__contents__title">
                                                    Enjoy your texas style winter fashion 2023
                                                </h3>
                                                <div class="btn_wrapper mt-4">
                                                    <a href="campaign/flash-sale.html"
                                                        class="cmn_btn btn_bg_2 radius-5">View Products</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="winterProduct__single__thumb bg_image"
                                                style="background-image: url('assets/uploads/media-uploader/winter-text-65475b50756da1699175280.webp');">
                                                <img alt=''
                                                    src='assets/uploads/media-uploader/winter2-65475b51452b01699175279.webp'
                                                    class=''>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <div class="winterProduct__single radius-10 winter__bg3">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="winterProduct__single__contents text-center">
                                                <h3 class="winterProduct__single__contents__title">
                                                    NAILS CARE?GET YOUR WINTER KIT NOW
                                                </h3>
                                                <div class="btn_wrapper mt-4">
                                                    <a href="campaign/flash-sale.html"
                                                        class="cmn_btn btn_bg_black radius-5">View product</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="winterProduct__single__thumb">
                                                <img alt=''
                                                    src='assets/uploads/media-uploader/winter3-65475b5085a8b1699175280.webp'
                                                    class=''>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Winter Product end --><!-- Popular Porduct Starts -->
    <section class="popularProduct__area padding-top-50 padding-bottom-50 ">
        <div class="container container_1608">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-left section_borderBottom">
                        <h2 class="title">Best Sold</h2>
                        <div class="btn_wrapper">
                            <a href="shop-page.html" class="viewAll_btn">
                                View All <i class="las la-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-5 mt-1">
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__card__thumb">
                            <a href="shop-page/quantumcore-pro-gaming-motherboard.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/14cb6b848089175d68451d7d1261706168588.html'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/quantumcore-pro-gaming-motherboard.html">
                                    QuantumCore Pro Gaming Motherboard
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$240.00</span>
                                <s class="product__price__old">$250.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="Add to Cart" href="#1"
                                    data-attributes="" data-id="3"
                                    class="product__card__cart__outline radius-30 add_to_cart_ajax ">
                                    Add to Cart
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="3"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a href="#1" data-id="3"
                                        class=" add_to_wishlist_ajax icon cart-loading product__card__cart__btn__icon">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__offer">
                            <span class="product__offer__para">6% Off</span>
                        </div>
                        <div class="product__card__thumb">
                            <a href="shop-page/titanpro-gaming-laptop.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/macbook-pro-laptop-653e0c1326fcd1698846943.webp'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/titanpro-gaming-laptop.html">
                                    TitanPro Gaming Laptop
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$500.00</span>
                                <s class="product__price__old">$533.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="View Details"
                                    data-action-route="shop-page/quick-viewpage/titanpro-gaming-laptop.html"
                                    data-attributes="" data-id="4"
                                    class="product__card__cart__btn radius-30 product-quick-view-ajax ">
                                    View Details
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)"  onclick="addToCompare({{ $product->id }})"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a class=" product-quick-view-ajax favourite icon cart-loading product__card__cart__btn__icon"
                                       onclick="addToWishList({{ $product->id }})">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__offer">
                            <span class="product__offer__para">56% Off</span>
                        </div>
                        <div class="product__card__thumb">
                            <a href="shop-page/guardianeye-hd-surveillance-camera.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/51692277637-6542446c83e371698841719.webp'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/guardianeye-hd-surveillance-camera.html">
                                    GuardianEye HD Surveillance Camera
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$140.00</span>
                                <s class="product__price__old">$321.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="Add to Cart" href="#1"
                                    data-attributes="" data-id="5"
                                    class="product__card__cart__outline radius-30 add_to_cart_ajax ">
                                    Add to Cart
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="5"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a href="#1" data-id="5"
                                        class=" add_to_wishlist_ajax icon cart-loading product__card__cart__btn__icon">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__card__thumb">
                            <a href="shop-page/swiftglide-precision-mouse.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/41692277636-654244b547d551698841794.webp'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/swiftglide-precision-mouse.html">
                                    SwiftGlide Precision Mouse
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$1000.00</span>
                                <s class="product__price__old">$800.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="Add to Cart" href="#1"
                                    data-attributes="" data-id="6"
                                    class="product__card__cart__outline radius-30 add_to_cart_ajax ">
                                    Add to Cart
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="6"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a href="#1" data-id="6"
                                        class=" add_to_wishlist_ajax icon cart-loading product__card__cart__btn__icon">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__card__thumb">
                            <a href="shop-page/phoenixtech-motherboard-x7-1.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/21692277634-654243f9e7edd1698841606.webp'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/phoenixtech-motherboard-x7-1.html">
                                    PhoenixTech Motherboard X7
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$200.00</span>
                                <s class="product__price__old">$223.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="Add to Cart" href="#1"
                                    data-attributes="" data-id="7"
                                    class="product__card__cart__outline radius-30 add_to_cart_ajax ">
                                    Add to Cart
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="7"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a href="#1" data-id="7"
                                        class=" add_to_wishlist_ajax icon cart-loading product__card__cart__btn__icon">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__card__thumb">
                            <a href="shop-page/intle-gaming-laptop-test.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/xiaomi-mi-notebook-air-125-653e0c275553b1698904025.webp'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/intle-gaming-laptop-test.html">
                                    Intle Gaming Laptop
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$258.40</span>
                                <s class="product__price__old">$340.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="View Details"
                                    data-action-route="shop-page/quick-viewpage/intle-gaming-laptop-test.html"
                                    data-attributes="" data-id="8"
                                    class="product__card__cart__btn radius-30 product-quick-view-ajax ">
                                    View Details
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="8"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a class=" product-quick-view-ajax favourite icon cart-loading product__card__cart__btn__icon"
                                        href="#1"
                                        data-action-route="shop-page/quick-viewpage/intle-gaming-laptop-test.html">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__offer">
                            <span class="product__offer__para">17% Off</span>
                        </div>
                        <div class="product__card__thumb">
                            <a href="shop-page/phoenixtech-motherboard-x7.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/21692277634-654243f9e7edd1698841606.webp'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/phoenixtech-motherboard-x7.html">
                                    PhoenixTech Motherboard X7
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$200.00</span>
                                <s class="product__price__old">$240.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="Add to Cart" href="#1"
                                    data-attributes="" data-id="10"
                                    class="product__card__cart__outline radius-30 add_to_cart_ajax ">
                                    Add to Cart
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="10"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a href="#1" data-id="10"
                                        class=" add_to_wishlist_ajax icon cart-loading product__card__cart__btn__icon">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__card__thumb">
                            <a href="shop-page/ultravision-4k-monitor.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/11692277634-654245937ebab1698842015.webp'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/ultravision-4k-monitor.html">
                                    UltraVision 4K Monitor
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$190.00</span>
                                <s class="product__price__old">$250.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="Add to Cart" href="#1"
                                    data-attributes="" data-id="11"
                                    class="product__card__cart__outline radius-30 add_to_cart_ajax ">
                                    Add to Cart
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="11"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a href="#1" data-id="11"
                                        class=" add_to_wishlist_ajax icon cart-loading product__card__cart__btn__icon">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__card__thumb">
                            <a href="shop-page/philosopy.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/store221684992299-6542463f3f7401698842199.webp'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/philosopy.html">
                                    Philosopy
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$50.00</span>
                                <s class="product__price__old">$60.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="Add to Cart" href="#1"
                                    data-attributes="" data-id="12"
                                    class="product__card__cart__outline radius-30 add_to_cart_ajax ">
                                    Add to Cart
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="12"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a href="#1" data-id="12"
                                        class=" add_to_wishlist_ajax icon cart-loading product__card__cart__btn__icon">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__card__thumb">
                            <a href="shop-page/maison-francis.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/image-1-65433760576ef1698903973.webp'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/maison-francis.html">
                                    Maison Francis
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$55.00</span>
                                <s class="product__price__old">$60.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="Add to Cart" href="#1"
                                    data-attributes="" data-id="13"
                                    class="product__card__cart__outline radius-30 add_to_cart_ajax ">
                                    Add to Cart
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="13"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a href="#1" data-id="13"
                                        class=" add_to_wishlist_ajax icon cart-loading product__card__cart__btn__icon">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__card__thumb">
                            <a href="shop-page/dior.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/cl121684992083-6542463e3d2c91698842199.webp'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/dior.html">
                                    Dior
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$321.00</span>
                                <s class="product__price__old">$452.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="Add to Cart" href="#1"
                                    data-attributes="" data-id="14"
                                    class="product__card__cart__outline radius-30 add_to_cart_ajax ">
                                    Add to Cart
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="14"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a href="#1" data-id="14"
                                        class=" add_to_wishlist_ajax icon cart-loading product__card__cart__btn__icon">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-6">
                    <div class="product__card">
                        <div class="product__card__thumb">
                            <a href="shop-page/chanel.html">
                                <img alt=''
                                    src='assets/uploads/media-uploader/cl111684992030-6542469db0e551698842277.webp'
                                    class=''>
                            </a>
                        </div>
                        <div class="product__card__contents mt-3">
                            <h6 class="product__card__contents__title mt-2">
                                <a href="shop-page/chanel.html">
                                    Chanel
                                </a>
                            </h6>
                            <div class="product__price mt-2">
                                <span class="product__price__current color-two">$30.00</span>
                                <s class="product__price__old">$40.00</s>
                            </div>
                            <div class="product__card__cart mt-3">
                                <a data-type="text" data-old-text="View Details"
                                    data-action-route="shop-page/quick-viewpage/chanel.html" data-attributes=""
                                    data-id="15"
                                    class="product__card__cart__btn radius-30 product-quick-view-ajax ">
                                    View Details
                                </a>

                                <div class="product__card__cart__right">
                                    <a href="javascript:void(0)" data-id="15"
                                        class=" product__card__cart__btn__icon cart-loading icon add_to_compare_ajax">
                                        <i class="las la-retweet"></i>
                                    </a>

                                    <a class=" product-quick-view-ajax favourite icon cart-loading product__card__cart__btn__icon"
                                        href="#1" data-action-route="shop-page/quick-viewpage/chanel.html">
                                        <i class="lar la-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Porduct end -->
    <!-- All Product area Start -->

    <!-- All Product area ends -->
</main>
<!-- Left Right area starts -->
<div class="left-right-area">
    <div class="container container-one">
        <div class="row flex-xxl-row flex-column-reverse">
            <div class="col-xxl-3">

            </div>
            <div class="col-xxl-9">

            </div>
        </div>
    </div>
</div>
<!-- Left Right area ends -->

<!-- back to top area start -->
<div class="back-to-top bg-color-two">
    <span class="back-top"> <i class="las la-angle-up"></i> </span>
</div>
<!-- back to top area end -->



<div class="modal product-quick-view-bg-color" id="product_quick_view" tabindex="-1" role="dialog"
    aria-labelledby="productModal" aria-hidden="true">

</div>

<div class="scroll-to-top d-none">
    <i class="las la-angle-up"></i>
</div>

@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $.post('{{ route('home.section.featured') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_featured').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.best_selling') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_selling').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.auction_products') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#auction_products').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.home_categories') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_home_categories').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.best_sellers') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_sellers').html(data);
                AIZ.plugins.slickCarousel();
            });
        });
    </script>
@endsection
