 <!-- Top Bar Banner -->
 @if (get_setting('topbar_banner') != null)
 <div class="position-relative top-banner removable-session z-1035 d-none" data-key="top-banner"
     data-value="removed">
     <a href="{{ get_setting('topbar_banner_link') }}" class="d-block text-reset">
         <img src="{{ uploaded_asset(get_setting('topbar_banner')) }}" class="d-none d-xl-block img-fit" alt="{{ translate('topbar_banner') }}">
         <!-- For Large device -->
         <img src="{{ get_setting('topbar_banner_medium') != null ? uploaded_asset(get_setting('topbar_banner_medium')) : uploaded_asset(get_setting('topbar_banner')) }}"
             class="d-none d-md-block d-xl-none img-fit" alt="{{ translate('topbar_banner') }}"> <!-- For Medium device -->
         <img src="{{ get_setting('topbar_banner_small') != null ? uploaded_asset(get_setting('topbar_banner_small')) : uploaded_asset(get_setting('topbar_banner')) }}"
             class="d-md-none img-fit" alt="{{ translate('topbar_banner') }}"> <!-- For Small device -->
     </a>
     <button class="btn text-white h-100 absolute-top-right set-session" data-key="top-banner"
         data-value="removed" data-toggle="remove-parent" data-parent=".top-banner">
         <i class="la la-close la-2x"></i>
     </button>
 </div>
@endif
<header class="header-style-01">
    <div class="topbar-area hover-color-two topbar-bg-1">
        <div class="container container-one">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="topbar-left-contents">
                        <div class="topbar-left-flex">
                            <ul class="topbar-social">
                                <li class="link-item">
                                    <a href="https://twitter.com/xgenious1">
                                        <i class="lab la-twitter icon"></i>
                                    </a>
                                </li>
                                <li class="link-item">
                                    <a href="https://www.facebook.com/xgenious">
                                        <i class="lab la-facebook-f icon"></i>
                                    </a>
                                </li>
                                <li class="link-item">
                                    <a href="lorem.html">
                                        <i class="lab la-accessible-icon icon"></i>
                                    </a>
                                </li>
                                <li class="link-item">
                                    <a href="#">
                                        <i class="lab la-instagram icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="topbar-right-contents">
                        <div class="topbar-right-flex">
                            <ul class="list">

                                <li>
                                    <a href="faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>

                                <li class="ml-2"><a href="shop-page/track-order.html">Tracking order</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="topbar-bottom-area index-02 color-two">
        <div class="container container-one">
            <div class="row align-items-center">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="topbar-logo">
                        <a class="d-block py-20px mr-3 ml-0" href="{{ route('home') }}">
                            @php
                                $header_logo = get_setting('header_logo');
                            @endphp
                            @if ($header_logo != null)
                                <img src="{{ uploaded_asset($header_logo) }}" alt="{{ env('APP_NAME') }}"
                                    class="mw-100 h-30px h-md-40px" height="40">
                            @else
                                <img src="{{ static_asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}"
                                    class="mw-100 h-30px h-md-40px" height="40">
                            @endif
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="category-searchbar">
                        <form action="{{ route('search') }}"  method="GET"  class="single-searchbar searchbar-suggetions">
                            <input autocomplete="off" class="form--control radius-5" id="search_form_input" id="search" name="keyword" type="text"
                                @isset($query)
                                    value="{{ $query }}"
                                @endisset
                                placeholder="{{ translate('I am shopping for...') }}">
                            <button  type="submit" class="right-position-button margin-2 radius-5"> <i
                                    class="las la-search"></i> </button>
                            <div class="search-suggestions" id="search_suggestions_wrap">
                                <div class="search-inner">
                                    <div class="category-suggestion item-suggestions">
                                        <h6 class="item-title">Category Suggestions</h6>
                                        <ul id="search_result_categories" class="category-suggestion-list mt-4">

                                        </ul>
                                    </div>
                                    <div class="product-suggestion item-suggestions">
                                        <h6 class="item-title">Product Suggestions</h6>
                                        <ul id="search_result_products" class="product-suggestion-list mt-4">

                                        </ul>
                                    </div>

                                    <div class="product-suggestion item-suggestions" style="display:none;"
                                        id="no_product_found_div">
                                        <h6 class="item-title d-flex justify-content-between">
                                            <span>
                                                No Product Found
                                            </span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="topbar-bottom-right-content navbar-right-flex">
                        <div class="topbar-bottom-right-flex">
                            {{-- <div class="track-icon-list header-card-area-content-wrapper">
                                <div class="single-icon">
                                    <a class="icon" href="{{ route('wishlists.index') }}"  data-toggle="tooltip" data-title="{{ translate('Wishlist') }}" data-placement="top"> <i
                                            class="lar la-heart"></i> </a>
                                        @if(Auth::check() && count(Auth::user()->wishlists)>0)
                                            <a href="#1" class="icon-notification"> {{ count(Auth::user()->wishlists)}} </a>
                                        @endif
                                </div>
                                <div class="single-icon cart-shopping">
                                    <div class="single-icon cart-shopping">
                                        <a class="icon" href="shop-page/cart/all.html"> <i
                                                class="las la-shopping-cart"></i> </a>
                                        <a href="#1" class="icon-notification cart-item-count-amount"> {{(isset($cart) && count($cart) > 0) ? count($cart) : 0 }}</span> </a>
                                        <div class="addto-cart-contents ">
                                            <div class="single-addto-cart-wrappers">
                                                <div class="single-addto-carts">
                                                    @include('frontend.partials.cart')
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="single-icon">
                                    <a class="icon" href="{{ route('compare') }}"> <i
                                            class="las la-retweet"></i> </a>
                                </div>
                                <div class="track-icon-list-item single-icon">
                                    @if (!isAdmin())
                                    <!-- Notifications -->
                                        <ul class="list-inline mb-0 h-100 d-none d-xl-flex justify-content-end align-items-center">
                                            <li class="list-inline-item ml-3 mr-3 pr-3 pl-0 dropdown">
                                                <a class="dropdown-toggle no-arrow text-secondary fs-12" data-toggle="dropdown"
                                                    href="javascript:void(0);" role="button" aria-haspopup="false"
                                                    aria-expanded="false">
                                                    <span class="">
                                                        <span class="position-relative d-inline-block">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14.668" height="16"
                                                                viewBox="0 0 14.668 16">
                                                                <path id="_26._Notification" data-name="26. Notification"
                                                                    d="M8.333,16A3.34,3.34,0,0,0,11,14.667H5.666A3.34,3.34,0,0,0,8.333,16ZM15.06,9.78a2.457,2.457,0,0,1-.727-1.747V6a6,6,0,1,0-12,0V8.033A2.457,2.457,0,0,1,1.606,9.78,2.083,2.083,0,0,0,3.08,13.333H13.586A2.083,2.083,0,0,0,15.06,9.78Z"
                                                                    transform="translate(-0.999)" fill="#91919b" />
                                                            </svg>
                                                            @if (Auth::check() && count(Auth::user()->unreadNotifications) > 0)
                                                                <span
                                                                    class="badge badge-primary badge-inline badge-pill absolute-top-right--10px">{{ count(Auth::user()->unreadNotifications) }}</span>
                                                            @endif
                                                        </span>
                                                </a>

                                                @auth
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg py-0 rounded-0">
                                                        <div class="p-3 bg-light border-bottom">
                                                            <h6 class="mb-0">{{ translate('Notifications') }}</h6>
                                                        </div>
                                                        <div class="px-3 c-scrollbar-light overflow-auto " style="max-height:300px;">
                                                            <ul class="list-group list-group-flush">
                                                                @forelse(Auth::user()->unreadNotifications as $notification)
                                                                    <li class="list-group-item">
                                                                        @if ($notification->type == 'App\Notifications\OrderNotification')
                                                                            @if (Auth::user()->user_type == 'customer')
                                                                                <a href="{{ route('purchase_history.details', encrypt($notification->data['order_id'])) }}"
                                                                                    class="text-secondary fs-12">
                                                                                    <span class="ml-2">
                                                                                        {{ translate('Order code: ') }}
                                                                                        {{ $notification->data['order_code'] }}
                                                                                        {{ translate('has been ' . ucfirst(str_replace('_', ' ', $notification->data['status']))) }}
                                                                                    </span>
                                                                                </a>
                                                                            @elseif (Auth::user()->user_type == 'seller')
                                                                                <a href="{{ route('seller.orders.show', encrypt($notification->data['order_id'])) }}"
                                                                                    class="text-secondary fs-12">
                                                                                    <span class="ml-2">
                                                                                        {{ translate('Order code: ') }}
                                                                                        {{ $notification->data['order_code'] }}
                                                                                        {{ translate('has been ' . ucfirst(str_replace('_', ' ', $notification->data['status']))) }}
                                                                                    </span>
                                                                                </a>
                                                                            @endif
                                                                        @endif
                                                                    </li>
                                                                @empty
                                                                    <li class="list-group-item">
                                                                        <div class="py-4 text-center fs-16">
                                                                            {{ translate('No notification found') }}
                                                                        </div>
                                                                    </li>
                                                                @endforelse
                                                            </ul>
                                                        </div>
                                                        <div class="text-center border-top">
                                                            <a href="{{ route('all-notifications') }}"
                                                                class="text-secondary fs-12 d-block py-2">
                                                                {{ translate('View All Notifications') }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endauth
                                            </li>
                                        </ul>
                                    @endif
                                    <div class="login-account">
                                        <a class="accounts" href="#1"> <i class="las la-user"></i> </a>
                                        <ul class="account-list-item">
                                            <li class="list"> <a href="{{ route('user.login') }}"> {{ translate('Login') }} </a>
                                            </li>
                                            <li class="list"> <a href="{{ route('user.registration') }}"> {{ translate('Registration') }}
                                                </a> </li>
                                    </div>
                                </div>
                            </div>
                            <div class="login-account">
                                @auth
                                    <span
                                        class="d-none d-xl-flex align-items-center nav-user-info py-20px @if (isAdmin()) ml-5 @endif"
                                        id="nav-user-info">
                                        <!-- Image -->
                                        <span
                                            class="size-40px rounded-circle overflow-hidden border border-transparent nav-user-img">
                                            @if (Auth::user()->avatar_original != null)
                                                <img src="{{ uploaded_asset(Auth::user()->avatar_original) }}"
                                                    class="img-fit h-100" alt="{{ translate('avatar') }}"
                                                    style="max-width: 30px !important;"
                                                    onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">
                                            @else
                                                <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="image" alt="{{ translate('avatar') }}"
                                                style="max-width: 30px !important;"
                                                    onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">
                                            @endif
                                        </span>
                                        <!-- Name -->
                                        <h4 class="h5 fs-14 fw-700 text-dark ml-2 mb-0">{{ Auth::user()->name }}</h4>
                                    </span>
                                @else
                                    <a class="accounts" href="#1"> <i class="las la-user"></i> </a>
                                    <ul class="account-list-item">
                                        <li class="list"> <a href="{{ route('user.login') }}"> {{ translate('Login') }} </a>
                                        </li>
                                        <li class="list"> <a href="{{ route('user.registration') }}"> {{ translate('Registration') }}
                                            </a> </li>
                                    </ul>
                                @endauth
                            </div> --}}
                            {{-- <div class="aiz-top-menu-sidebar collapse-sidebar-wrap sidebar-xl sidebar-left d-lg-none z-1035">
                                <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle"
                                    data-target=".aiz-top-menu-sidebar" data-same=".hide-top-menu-bar"></div>
                                <div class="collapse-sidebar c-scrollbar-light text-left">
                                    <button type="button" class="btn btn-sm p-4 hide-top-menu-bar" data-toggle="class-toggle"
                                        data-target=".aiz-top-menu-sidebar">
                                        <i class="las la-times la-2x text-primary"></i>
                                    </button>
                                    @auth
                                        <span class="d-flex align-items-center nav-user-info pl-4">
                                            <!-- Image -->
                                            <span class="size-40px rounded-circle overflow-hidden border border-transparent nav-user-img">
                                                @if (Auth::user()->avatar_original != null)
                                                    <img src="{{ uploaded_asset(Auth::user()->avatar_original) }}" class="img-fit h-100" alt="{{ translate('avatar') }}"
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">
                                                @else
                                                    <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="image" alt="{{ translate('avatar') }}"
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">
                                                @endif
                                            </span>
                                            <!-- Name -->
                                            <h4 class="h5 fs-14 fw-700 text-dark ml-2 mb-0">{{ Auth::user()->name }}</h4>
                                        </span>
                                    @else
                                        <!--Login & Registration -->
                                        <span class="d-flex align-items-center nav-user-info pl-4">
                                            <!-- Image -->
                                            <span
                                                class="size-40px rounded-circle overflow-hidden border d-flex align-items-center justify-content-center nav-user-img">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.902" height="20.012"
                                                    viewBox="0 0 19.902 20.012">
                                                    <path id="fe2df171891038b33e9624c27e96e367"
                                                        d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1.006,1.006,0,1,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1,10,10,0,0,0-6.25-8.19ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z"
                                                        transform="translate(-2.064 -1.995)" fill="#91919b" />
                                                </svg>
                                            </span>
                                            <a href="{{ route('user.login') }}"
                                                class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block border-right border-soft-light border-width-2 pr-2 ml-3">{{ translate('Login') }}</a>
                                            <a href="{{ route('user.registration') }}"
                                                class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block py-2 pl-2">{{ translate('Registration') }}</a>
                                        </span>
                                    @endauth
                                    <hr>
                                    <ul class="mb-0 pl-3 pb-3 h-100">
                                        @if (get_setting('header_menu_labels') != null)
                                            @foreach (json_decode(get_setting('header_menu_labels'), true) as $key => $value)
                                                <li class="mr-0">
                                                    <a href="{{ json_decode(get_setting('header_menu_links'), true)[$key] }}"
                                                        class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                                                    @if (url()->current() == json_decode(get_setting('header_menu_links'), true)[$key]) active @endif">
                                                        {{ translate($value) }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        @endif
                                        @auth
                                            @if (isAdmin())
                                                <hr>
                                                <li class="mr-0">
                                                    <a href="{{ route('admin.dashboard') }}"
                                                        class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links">
                                                        {{ translate('My Account') }}
                                                    </a>
                                                </li>
                                            @else
                                                <hr>
                                                <li class="mr-0">
                                                    <a href="{{ route('dashboard') }}"
                                                        class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                                                        {{ areActiveRoutes(['dashboard'], ' active') }}">
                                                        {{ translate('My Account') }}
                                                    </a>
                                                </li>
                                            @endif
                                            @if (isCustomer())
                                                <li class="mr-0">
                                                    <a href="{{ route('all-notifications') }}"
                                                        class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                                                        {{ areActiveRoutes(['all-notifications'], ' active') }}">
                                                        {{ translate('Notifications') }}
                                                    </a>
                                                </li>
                                                <li class="mr-0">
                                                    <a href="{{ route('wishlists.index') }}"
                                                        class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                                                        {{ areActiveRoutes(['wishlists.index'], ' active') }}">
                                                        {{ translate('Wishlist') }}
                                                    </a>
                                                </li>
                                                <li class="mr-0">
                                                    <a href="{{ route('compare') }}"
                                                        class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                                                        {{ areActiveRoutes(['compare'], ' active') }}">
                                                        {{ translate('Compare') }}
                                                    </a>
                                                </li>
                                            @endif
                                            <hr>
                                            <li class="mr-0">
                                                <a href="{{ route('logout') }}"
                                                    class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-primary header_menu_links">
                                                    {{ translate('Logout') }}
                                                </a>
                                            </li>
                                        @endauth
                                    </ul>
                                    <br>
                                    <br>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar bottom area Ends -->
    <!-- Menu area Starts -->
    <nav class="navbar navbar-area index-02 white-nav nav-color-two navbar-expand-lg">
        <div class="container-one nav-container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="top-menu-category style-02">
                        <div class="top-menu-toggle">
                            <a href="#1" class="single-category-flex bg-color-two radius-5">
                                <h6 class="category-title text-white"> Browse Category </h6>
                                <span class="icon-bar text-white fs-22"> <i class="las la-bars"></i> </span>
                            </a>
                        </div>
                        <div class="navbar-area-side">
                            <div class="nav-container-side">
                                <div class="navbar-collapse">
                                    <ul class="navbar-nav-side">
                                        @foreach (get_level_zero_categories()->take(10) as $key => $category)
                                            <li data-id="{{ $category->id }}" >
                                                <a href="{{ route('products.category', $category->slug) }}"  class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                                                    <img class="cat-image lazyload mr-2 opacity-60"
                                                    src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                    data-src="{{ uploaded_asset($category->icon) }}"
                                                    width="16"
                                                    alt="{{ $category->getTranslation('name') }}"
                                                    onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                                <span class="cat-name has-transition ml-2">{{ $category->getTranslation('name') }}</span>
                                                </a>
                                                @if(count(\App\Utility\CategoryUtility::get_immediate_children_ids($category->id))>0)
                                                    <div class="sub-cat-menu c-scrollbar-light border p-4 shadow-none">
                                                        <div class="c-preloader text-center absolute-center">
                                                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                                        </div>
                                                    </div>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="navbar-inner-all">
                        <div class="responsive-mobile-menu d-lg-none d-block">
                            <div class="logo-wrapper">
                                <a href="{{ route('home') }}">
                                    @php
                                        $header_logo = get_setting('header_logo');
                                    @endphp
                                    @if ($header_logo != null)
                                        <img src="{{ uploaded_asset($header_logo) }}" alt="{{ env('APP_NAME') }}"
                                            class="mw-100 h-30px h-md-40px" height="40">
                                    @else
                                        <img src="{{ static_asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}"
                                            class="mw-100 h-30px h-md-40px" height="40">
                                    @endif
                                </a>
                            </div>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#mares_main_menu">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="mares_main_menu">
                            <ul class="navbar-nav">
                                @if (get_setting('header_menu_labels') != null)
                                    @foreach (json_decode(get_setting('header_menu_labels'), true) as $key => $value)

                                        <li class=" menu-item">
                                            <a href="{{ json_decode(get_setting('header_menu_links'), true)[$key] }}" class=" @if (url()->current() == json_decode(get_setting('header_menu_links'), true)[$key]) active @endif">{{ translate($value) }}</a>
                                        </li>
                                    @endforeach
                                @endif
                                @auth

                            @else
                                <li class=" menu-item">
                                    <a href="{{ route('user.login') }}"
                                        class="">{{ translate('Login') }}</a>
                                    <a href="{{ route('user.registration') }}"
                                        class="">{{ translate('Registration') }}</a>
                                </li>
                            @endauth

                                @auth
                                    @if (isAdmin())
                                        <li class="mr-0">
                                            <a href="{{ route('admin.dashboard') }}"
                                                class="">
                                                {{ translate('My Account') }}
                                            </a>
                                        </li>
                                    @else
                                        <li class="mr-0">
                                            <a href="{{ route('dashboard') }}"
                                                class="
                                                {{ areActiveRoutes(['dashboard'], ' active') }}">
                                                {{ translate('My Account') }}
                                            </a>
                                        </li>
                                    @endif
                                    @if (isCustomer())
                                        <li class="mr-0">
                                            <a href="{{ route('all-notifications') }}"
                                                class="
                                                {{ areActiveRoutes(['all-notifications'], ' active') }}">
                                                {{ translate('Notifications') }}
                                            </a>
                                        </li>
                                        <li class="mr-0">
                                            <a href="{{ route('wishlists.index') }}"
                                                class="
                                                {{ areActiveRoutes(['wishlists.index'], ' active') }}">
                                                {{ translate('Wishlist') }}
                                            </a>
                                        </li>
                                        <li class="mr-0">
                                            <a href="{{ route('compare') }}"
                                                class="
                                                {{ areActiveRoutes(['compare'], ' active') }}">
                                                {{ translate('Compare') }}
                                            </a>
                                        </li>
                                    @endif
                                    <li class="mr-0">
                                        <a href="{{ route('logout') }}"
                                            class="">
                                            {{ translate('Logout') }}
                                        </a>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
       <!-- Modal -->
       <div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
       aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
           <div class="modal-content">
               <div id="order-details-modal-body">

               </div>
           </div>
       </div>
   </div>

   @section('script')
       <script type="text/javascript">
           function show_order_details(order_id) {
               $('#order-details-modal-body').html(null);

               if (!$('#modal-size').hasClass('modal-lg')) {
                   $('#modal-size').addClass('modal-lg');
               }

               $.post('{{ route('orders.details') }}', {
                   _token: AIZ.data.csrf,
                   order_id: order_id
               }, function(data) {
                   $('#order-details-modal-body').html(data);
                   $('#order_details').modal();
                   $('.c-preloader').hide();
                   AIZ.plugins.bootstrapSelect('refresh');
               });
           }
       </script>
   @endsection

    <!-- Menu area end -->
</header>
