<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    {!! SEOMeta::generate() !!}

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

    <!-- Custom Color Option -->
    <link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet">

</head>

<body class="blue-skin">

    <div id="preloader">
        <div class="preloader"><span></span><span></span></div>
    </div>
    <div id="main-wrapper">

        <div class="top-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6">
                        <div class="cn-info">
                            <ul>
                                <li><i class="lni-phone-handset"></i>+250 789 638 130</li>
                                <li><i class="ti-email"></i>support@nextdeals.rw</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <ul class="top-social">
                            <li><a href="https://www.facebook.com/nextdesalsrwanda" target="_blank"><i
                                        class="lni-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/nextdealsrwanda/?viewAsMember=true"><i
                                        class="lni-linkedin" target="_blank"></i></a></li>
                            <li><a href="https://www.instagram.com/nextdealsrwanda/" target="_blank"><i
                                        class="lni-instagram"></i></a></li>
                            <li><a href="https://twitter.com/next_deals" target="_blank"><i class="lni-twitter"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <x-header-component></x-header-component>
        <div class="clearfix"></div>


        <!-- ============================ Hero Banner  Start================================== -->
        <div class="image-cover hero-banner" style="background:#2540a2 url(assets/img/banner-6.png) no-repeat;">
            <div class="container">
                <div class="simple-search-wrap">
                    <div class="hero-search-2">
                        <p class="lead-i text-light">Find your Favorite Product</p>
                        <h2 class="text-light mb-4">And Support the Producers</h2>
                        <div class="pk-input-group">
                            <input type="text" class="email form-control" placeholder="Search for a location">
                            <button class="btn btn-black" type="submit">Go & Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================ Step How To Use Start ================================== -->
        <section>
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-10 text-center">
                        <div class="sec-heading center">
                            <h2>How It Works?</h2>
                            {{-- <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores</p> --}}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="middle-icon-features-item">
                            <div class="icon-features-wrap">
                                <div class="middle-icon-large-features-box f-light-success"><i
                                        class="ti-receipt text-success"></i></div>
                            </div>
                            <div class="middle-icon-features-content">
                                <h4>Love the Item</h4>
                                <p>Evaluate the Item first by looking at the description and the price.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="middle-icon-features-item">
                            <div class="icon-features-wrap">
                                <div class="middle-icon-large-features-box f-light-warning"><i
                                        class="ti-user text-warning"></i></div>
                            </div>
                            <div class="middle-icon-features-content">
                                <h4>Place the Order </h4>
                                <p>Contact and meet the seller or buy online and have it delivered.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="middle-icon-features-item remove">
                            <div class="icon-features-wrap">
                                <div class="middle-icon-large-features-box f-light-blue"><i
                                        class="ti-shield text-blue"></i>
                                </div>
                            </div>
                            <div class="middle-icon-features-content">
                                <h4>Enjoy</h4>
                                <p>Pick the item, enjoy and come back for more.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <div class="clearfix"></div>
        <section class="bg-whites">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-10 text-center">
                        <div class="sec-heading center mb-4">
                            <h2>Latest Products</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="property-slide">
                            @foreach ($latests as $latest)
                                <div class="single-items">
                                    <div class="property-listing shadow-none property-2 border">

                                        <div class="listing-img-wrapper">
                                            <div class="list-img-slide">
                                                <div class="click">
                                                    @if ($latest->photo)
                                                        <div><a href="{{ route('product-show', $latest->slug) }}"><img
                                                                    src="{{ $latest->photo->getUrl('preview') }}"
                                                                    class="img-fluid mx-auto" alt="" /></a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="listing-detail-wrapper">
                                            <div class="listing-short-detail-wrap">
                                                <div class="listing-short-detail">

                                                    <h4 class="listing-name verified"><a
                                                            href="{{ route('product-show', $latest->slug) }}"
                                                            class="prt-link-detail">{{ $latest->name }}</a></h4>
                                                </div>
                                                <div class="listing-short-detail-flex">
                                                    <h6 class="listing-card-info-price">
                                                        RWF {{ number_format($latest->price) }}</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="price-features-wrapper">
                                            <div class="list-fx-features">

                                            </div>
                                        </div>

                                        <div class="listing-detail-footer">
                                            <div class="footer-first">

                                            </div>
                                            <div class="footer-flex">
                                                <a href="{{ route('product-show', $latest->slug) }}"
                                                    class="prt-view">View</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section class="bg-light">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-10 text-center">
                        <div class="sec-heading center mb-4">
                            <h2>Explore more categories and products of your choice</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="property-slide">
                            @foreach ($categories as $category)
                                <div class="single-items">
                                    <div class="property-listing shadow-none property-2 border">

                                        <div class="listing-img-wrapper">
                                            <div class="list-img-slide">
                                                <div class="click">
                                                    {{-- @foreach ($category->product - show_image as $key => $media)
                                                    <div><a href="{{ route('product-show',$category->slug) }}"><img
                                                                src="{{$media->getUrl('preview')}}"
                                                                class="img-fluid mx-auto" alt=""/></a></div>
                                                @endforeach --}}


                                                </div>
                                            </div>
                                        </div>

                                        <div class="listing-detail-wrapper">
                                            <div class="listing-short-detail-wrap">
                                                <div class="listing-short-detail">

                                                    <h4 class="listing-name verified"><a
                                                            href="{{ route('category-show', $category->slug) }}"
                                                            class="prt-link-detail">{{ $category->name }}</a></h4>
                                                </div>
                                                <div class="listing-short-detail-flex">
                                                    <h6 class="listing-card-info-price">
                                                        {{-- RWF {{ number_format($category->price) }} --}}</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="price-features-wrapper">
                                            <div class="list-fx-features">

                                            </div>
                                        </div>

                                        <div class="listing-detail-footer">
                                            <div class="footer-first">

                                            </div>
                                            <div class="footer-flex">
                                                <a href="{{ route('category-show', $category->slug) }}"
                                                    class="prt-view">View</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <section class="bg-orange">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-10 text-center">
                        <div class="sec-heading center">
                            <h2>Unique Handmade Items</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="property-slide">
                            @foreach ($tags as $tag)
                                <div class="single-items">
                                    <div class="property-listing shadow-none property-2 border">

                                        <div class="listing-img-wrapper">
                                            <div class="list-img-slide">
                                                <div class="click">
                                                    {{-- @foreach ($product->product_gallery as $key => $media)
                                                    <div><a href="{{ route('product',$product->slug) }}"><img
                                                                src="{{ $media->getUrl('preview') }}"
                                                                class="img-fluid mx-auto" alt="{{ $product->title }}"/></a>
                                                    </div>
                                                @endforeach --}}

                                                </div>
                                            </div>
                                        </div>

                                        <div class="listing-detail-wrapper">
                                            <div class="listing-short-detail-wrap">
                                                <div class="listing-short-detail">
                                                    <h4 class="listing-name verified"><a
                                                            href="{{ route('tag-show', $tag->slug) }}"
                                                            class="prt-link-detail">{{ $tag->name }}</a></h4>
                                                </div>
                                                <div class="listing-short-detail-flex">
                                                    <h6 class="listing-card-info-price">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="price-features-wrapper">
                                            <div class="list-fx-features">

                                            </div>
                                        </div>

                                        <div class="listing-detail-footer">
                                            <div class="footer-first">
                                            </div>
                                            <div class="footer-flex">
                                                <a href="{{ route('tag-show', $tag->slug) }}"
                                                    class="prt-view">View</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>

                <!-- Pagination -->
                <div class="row pt-4 mt-4">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        {{-- <a href="{{ route('products') }}" class="btn btn-theme-light rounded">Browse More
                        Products</a> --}}
                    </div>
                </div>

            </div>
        </section>

        <div class="clearfix"></div>

       

        <!-- ========================== Download App Section =============================== -->
        <section class="bg-light">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                        <div class="content_block_2">
                            <div class="content-box">
                                <div class="sec-title light">
                                    <p class="text-blue">Download apps</p>
                                    <h2>Download App Free App For Android and iPhone</h2>
                                </div>
                                <div class="text">
                                    <p>We are launching our mobile app soon. Do you want to be the beta version tester?
                                        Feel free to send us an email on support@nextdeals.rw</p>
                                </div>
                                <div class="btn-box clearfix mt-5">
                                    <a href="{{ route('welcome') }}" class="download-btn play-store">
                                        <i class="fab fa-google-play"></i>
                                        <span>Download on</span>
                                        <h3>Google Play</h3>
                                    </a>

                                    <a href="{{ route('welcome') }}" class="download-btn app-store">
                                        <i class="fab fa-apple"></i>
                                        <span>Download on</span>
                                        <h3>App Store</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image"><img src="https://via.placeholder.com/600x600" class="img-fluid"
                                    alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================== Download App Section =============================== -->


        <x-footer-component></x-footer-component>

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/rangeslider.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/slider-bg.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/imagesloaded.js"></script>

    <script src="assets/js/custom.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

</body>

</html>
