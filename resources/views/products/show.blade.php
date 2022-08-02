@extends('layouts.guest')
@section('content')
    <div class="featured_slick_gallery gray">
        <div class="featured_slick_gallery-slide">
            @if ($product->photo)
                <div class="featured_slick_padd"><a href="#" class="mfp-gallery"><img
                            src="{{ $product->photo->getUrl('preview') }}"
                            style="width:1200 px !important; width: 800px !important; " class="img-fluid mx-auto"
                            alt="" /></a></div>
            @endif


        </div>
    </div>
    <section class="gray-simple">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">

                    <div class="property_block_wrap style-2 p-4">
                        <div class="prt-detail-title-desc">

                            <h3>{{ $product->name }}</h3>
                            @foreach ($product->locations as $key => $location)
                                <span><i class="lni-map-marker" style="display: inline-block;"></i>
                                    {{ $location->name }}</span>
                            @endforeach

                            <h3 class="prt-price-fix">RWF {{ number_format($product->price) }}</h3>

                        </div>
                    </div>


                    <!-- Single Block Wrap -->
                    <div class="property_block_wrap style-2">

                        <div class="property_block_wrap_header">
                            <a data-bs-toggle="collapse" data-parent="#dsrp" data-bs-target="#clTwo" aria-controls="clTwo"
                                href="javascript:void(0);" aria-expanded="true">
                                <h4 class="property_block_title">Description</h4>
                            </a>
                        </div>
                        <div id="clTwo" class="panel-collapse collapse show" aria-expanded="true">
                            <div class="block-body">
                                <p>{{ $product->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- property Sidebar -->
                <div class="col-lg-4 col-md-12 col-sm-12">


                    <div class="details-sidebar">

                        <!-- Agent Detail -->
                        <div class="sides-widget">
                            {{-- <div class="sides-widget-header">
                                <div class="agent-photo"><img src="https://via.placeholder.com/400x400" alt=""></div>
                                <div class="sides-widget-details">
                                    <h4><a href="#">{{ $house->created_by->name }}</a></h4>
                                    <span><i class="lni-phone-handset"></i>{{ $house->created_by->mobile }}</span>
                                </div>
                                <div class="clearfix"></div>
                            </div> --}}

                        </div>


                        <!-- Featured Property -->
                        <div class="sidebar-widgets">

                            <h4>You May Also Like</h4>

                            <div class="sidebar_featured_property">

                                <!-- List Sibar Property -->
                                @foreach ($mightAlsoLikes as $like)
                                    <div class="sides_list_property">
                                        <div class="sides_list_property_thumb">
                                            @if ($like->photo)
                                                <img src="{{ $like->photo->getUrl('preview') }}" class="img-fluid"
                                                    alt="{{ $like->name }}">
                                            @endif
                                        </div>
                                        <div class="sides_list_property_detail">
                                            <h4><a href="{{ route('product-show', $like->slug) }}">{{ $like->name }}</a>
                                            </h4>
                                            @foreach ($product->locations as $key => $location)
                                                <span><i class="lni-map-marker" style="display: inline-block;"></i>
                                                    {{ $location->name }}</span>
                                            @endforeach
                                            <div class="lists_property_price">

                                                <div class="lists_property_price_value">
                                                    <h4>RWF {{ number_format($like->price) }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
