@extends('layouts.guest')
@section('content')
    <!-- ============================ Page Title Start================================== -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <h2 class="ipt-title">{{ $category->name }}</h2>


                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ All Property ================================== -->
    <section class="gray">

        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="filter_search_opt">
                        <a href="javascript:void(0);" onclick="openFilterSearch()">Search Property<i
                                class="ml-2 ti-menu"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- property Sidebar -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="simple-sidebar sm-sidebar" id="filter_search" style="left:0;">

                        <div class="search-sidebar_header">
                            <h4 class="ssh_heading">Close Filter</h4>
                            <button onclick="closeFilterSearch()" class="w3-bar-item w3-button w3-large"><i
                                    class="ti-close"></i></button>
                        </div>

                        <!-- Find New Property -->
                        <div class="sidebar-widgets">

                            <div class="search-inner p-0">

                                <div class="filter-search-box">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text" class="form-control" placeholder="Search by space name…">
                                            <i class="ti-search"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter_wraps">

                                    <!-- Single Search -->
                                    <div class="single_search_boxed">
                                        <div class="widget-boxed-header">
                                            <h4>
                                                Locations
                                            </h4>

                                        </div>
                                        <div class="widget-boxed-body">
                                            <div class="side-list no-border">
                                                <!-- Single Filter Card -->
                                                <div class="single_filter_card">
                                                    <div class="card-body pt-0">
                                                        <div class="inner_widget_link">
                                                            <ul class="no-ul-list filter-list">
                                                                @foreach ($locations as $location)
                                                                    <li>
                                                                        <input id="b1" class="radio-custom"
                                                                            name="where" type="radio">
                                                                        <label for="b1"
                                                                            class="radio-custom-label">{{ $location->name }}</label>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Search -->
                                    <div class="single_search_boxed">
                                        <div class="widget-boxed-header">
                                            <h4>
                                                Tags
                                            </h4>

                                        </div>
                                        <div class="widget-boxed-body collapse">
                                            <div class="side-list no-border">
                                                <!-- Single Filter Card -->
                                                <div class="single_filter_card">
                                                    <div class="card-body pt-0">
                                                        <div class="inner_widget_link">
                                                            <ul class="no-ul-list filter-list">
                                                                @foreach ($tags as $tag)
                                                                    <li>
                                                                        <input id="b1" class="radio-custom"
                                                                            name="where" type="radio">
                                                                        <label for="b1"
                                                                            class="radio-custom-label">{{ $tag->name }}</label>
                                                                    </li>
                                                                @endforeach

                                                            </ul>
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
                    <!-- Sidebar End -->

                </div>

                <div class="col-lg-8 col-md-12 list-layout">

                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="item-shorting-box">
                                <div class="item-shorting clearfix">
                                    <div class="left-column pull-left">
                                        <h4 class="m-0">Found {{ $products->count() }} of 142 Results</h4>
                                    </div>
                                </div>
                                <div class="item-shorting-box-right">
                                    <div class="shorting-by">
                                        <select id="shorty" class="form-control">
                                            <option value="">&nbsp;</option>
                                            <option value="1">Low Price</option>
                                            <option value="2">High Price</option>
                                            <option value="3">Most Popular</option>
                                        </select>
                                    </div>
                                    <ul class="shorting-list">
                                        <li><a href="grid-layout-with-sidebar.html"><i class="ti-layout-grid2"></i></a>
                                        </li>
                                        <li><a href="listings-list-with-sidebar.html" class="active"><i
                                                    class="ti-view-list"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">


                        @forelse ($products as $product)
                            <div class="col-lg-12 col-md-12">
                                <div class="property-listing property-1">

                                    <div class="listing-img-wrapper">
                                        <a href="{{ route('product-show', $product->slug) }}">
                                            <img src="{{ $product->photo->getUrl('preview') }}" class="img-fluid mx-auto"
                                                alt="" />
                                        </a>
                                    </div>

                                    <div class="listing-content">

                                        <div class="listing-detail-wrapper-box">
                                            <div class="listing-detail-wrapper">
                                                <div class="listing-short-detail">
                                                    <h4 class="listing-name"><a
                                                            href="{{ route('product-show', $product->slug) }}">{{ $product->name }}</a>
                                                    </h4>

                                                </div>
                                                <div class="list-price">
                                                    <h6 class="listing-card-info-price">{{ number_format($product->price) }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="listing-footer-wrapper">
                                            <div class="listing-locate">
                                                @foreach ($product->locations as $location)
                                                    <span class="listing-location"><i
                                                            class="ti-location-pin"></i>{{ $location->name }}</span>
                                                @endforeach
                                            </div>
                                            <div class="listing-detail-btn">
                                                <a href="{{ route('product-show', $product->slug) }}"
                                                    class="more-btn">View</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        @empty
                            <div class="col-lg-12 col-md-12">
                                <div class="alert alert-warning">
                                    <h4>No products found</h4>
                                </div>
                        @endforelse


                    </div>

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <ul class="pagination p-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span class="ti-arrow-left"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">18</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span class="ti-arrow-right"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- ============================ All Property ================================== -->
@endsection
