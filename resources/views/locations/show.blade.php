@extends('layouts.guest')
@section('content')
    <!-- ============================ Page Title Start================================== -->
			<div class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">Property List</h2>
							<span class="ipn-subtitle">Property List With Sidebar</span>
							
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
								<a href="javascript:void(0);" onclick="openFilterSearch()">Search Property<i class="ml-2 ti-menu"></i></a>
							</div>
						</div>
					</div>
					
					<div class="row">
					
						<!-- property Sidebar -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="simple-sidebar sm-sidebar" id="filter_search"  style="left:0;">							
							
								<div class="search-sidebar_header">
									<h4 class="ssh_heading">Close Filter</h4>
									<button onclick="closeFilterSearch()" class="w3-bar-item w3-button w3-large"><i class="ti-close"></i></button>
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
														<a href="#where" data-bs-toggle="collapse" aria-expanded="false" role="button" class="collapsed">Where<span class="selected">Chicago</span></a>
													</h4>
													
												</div>
												<div class="widget-boxed-body collapse" id="where" data-parent="#where">
													<div class="side-list no-border">
														<!-- Single Filter Card -->
														<div class="single_filter_card">
															<div class="card-body pt-0">
																<div class="inner_widget_link">
																	<ul class="no-ul-list filter-list">
																		<li>
																			<input id="b1" class="radio-custom" name="where" type="radio">
																			<label for="b1" class="radio-custom-label">Atlanta</label>
																		</li>
																		<li>
																			<input id="b2" class="radio-custom" name="where" type="radio">
																			<label for="b2" class="radio-custom-label">Austin</label>
																		</li>
																		<li>
																			<input id="b3" class="radio-custom" name="where" type="radio">
																			<label for="b3" class="radio-custom-label">Boston</label>
																		</li>
																		<li>
																			<input id="b4" class="radio-custom" name="where" type="radio" checked>
																			<label for="b4" class="radio-custom-label">Chicago</label>
																		</li>
																		<li>
																			<input id="b5" class="radio-custom" name="where" type="radio">
																			<label for="b5" class="radio-custom-label">Dallas</label>
																		</li>
																		<li>
																			<input id="b6" class="radio-custom" name="where" type="radio">
																			<label for="b6" class="radio-custom-label">Denver</label>
																		</li>
																		<li>
																			<input id="b7" class="radio-custom" name="where" type="radio">
																			<label for="b7" class="radio-custom-label">Houston</label>
																		</li>
																		<li>
																			<input id="b8" class="radio-custom" name="where" type="radio">
																			<label for="b8" class="radio-custom-label">Jacksonville</label>
																		</li>
																		<li>
																			<input id="b9" class="radio-custom" name="where" type="radio">
																			<label for="b9" class="radio-custom-label">Los Angeles</label>
																		</li>
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
														<a href="#fptype" data-bs-toggle="collapse" aria-expanded="false" role="button" class="collapsed">Property Types<span class="selected">Apartment</span></a>
													</h4>
													
												</div>
												<div class="widget-boxed-body collapse" id="fptype" data-parent="#fptype">
													<div class="side-list no-border">
														<!-- Single Filter Card -->
														<div class="single_filter_card">
															<div class="card-body pt-0">
																<div class="inner_widget_link">
																	<ul class="no-ul-list filter-list">
																		<li>
																			<input id="c1" class="radio-custom" name="ptype" type="radio">
																			<label for="c1" class="radio-custom-label">House</label>
																		</li>
																		<li>
																			<input id="c2" class="radio-custom" name="ptype" type="radio">
																			<label for="c2" class="radio-custom-label">Office Desk</label>
																		</li>
																		<li>
																			<input id="c3" class="radio-custom" name="ptype" type="radio">
																			<label for="c3" class="radio-custom-label">Villa</label>
																		</li>
																		<li>
																			<input id="c4" class="radio-custom" name="ptype" type="radio" checked>
																			<label for="c4" class="radio-custom-label">Apartment</label>
																		</li>
																		<li>
																			<input id="c5" class="radio-custom" name="ptype" type="radio">
																			<label for="c5" class="radio-custom-label">Condo</label>
																		</li>
																		<li>
																			<input id="c6" class="radio-custom" name="ptype" type="radio">
																			<label for="c6" class="radio-custom-label">Denver</label>
																		</li>
																		<li>
																			<input id="c7" class="radio-custom" name="ptype" type="radio">
																			<label for="c7" class="radio-custom-label">Studio</label>
																		</li>
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
														<a href="#fbedrooms" data-bs-toggle="collapse" aria-expanded="false" role="button" class="collapsed">Bedrooms<span class="selected">2 Beds</span></a>
													</h4>
													
												</div>
												<div class="widget-boxed-body collapse" id="fbedrooms" data-parent="#fbedrooms">
													<div class="side-list no-border">
														<!-- Single Filter Card -->
														<div class="single_filter_card">
															<div class="card-body pt-0">
																<div class="inner_widget_link">
																	<ul class="no-ul-list filter-list">
																		<li>
																			<input id="a1" class="radio-custom" name="bed" type="radio">
																			<label for="a1" class="radio-custom-label">01 Bedrooms</label>
																		</li>
																		<li>
																			<input id="a2" class="radio-custom" name="bed" type="radio">
																			<label for="a2" class="radio-custom-label">02 Bedrooms</label>
																		</li>
																		<li>
																			<input id="a3" class="radio-custom" name="bed" type="radio">
																			<label for="a3" class="radio-custom-label">03 Bedrooms</label>
																		</li>
																		<li>
																			<input id="a4" class="radio-custom" name="bed" type="radio" checked>
																			<label for="a4" class="radio-custom-label">04 Bedrooms</label>
																		</li>
																		<li>
																			<input id="a5" class="radio-custom" name="bed" type="radio">
																			<label for="a5" class="radio-custom-label">05 Bedrooms</label>
																		</li>
																		<li>
																			<input id="a6" class="radio-custom" name="bed" type="radio">
																			<label for="a6" class="radio-custom-label">06+ Bedrooms</label>
																		</li>
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
														<a href="#fprice" data-bs-toggle="collapse" aria-expanded="false" role="button" class="collapsed">Price Range<span class="selected">$10,000 - $15,000</span></a>
													</h4>
													
												</div>
												<div class="widget-boxed-body collapse" id="fprice" data-parent="#fprice">
													<div class="side-list no-border">
														<!-- Single Filter Card -->
														<div class="single_filter_card">
															<div class="card-body pt-0">
																<div class="inner_widget_link">
																	<ul class="no-ul-list filter-list">
																		<li>
																			<input id="e1" class="radio-custom" name="prices" type="radio">
																			<label for="e1" class="radio-custom-label">Less Then $10,000</label>
																		</li>
																		<li>
																			<input id="e2" class="radio-custom" name="prices" type="radio">
																			<label for="e2" class="radio-custom-label">$10,000 - $15,000</label>
																		</li>
																		<li>
																			<input id="e3" class="radio-custom" name="prices" type="radio">
																			<label for="e3" class="radio-custom-label">$12,000 - $25,000</label>
																		</li>
																		<li>
																			<input id="e4" class="radio-custom" name="prices" type="radio" checked>
																			<label for="e4" class="radio-custom-label">$30,000 - $35,000</label>
																		</li>
																		<li>
																			<input id="e5" class="radio-custom" name="prices" type="radio">
																			<label for="e5" class="radio-custom-label">$40,000 - $45,000</label>
																		</li>
																		<li>
																			<input id="e6" class="radio-custom" name="prices" type="radio">
																			<label for="e6" class="radio-custom-label">$50,000 - $55,000</label>
																		</li>
																		<li>
																			<input id="e7" class="radio-custom" name="prices" type="radio">
																			<label for="e7" class="radio-custom-label">$60,000 - $65,000</label>
																		</li>
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
														<a href="#mood" data-bs-toggle="collapse" aria-expanded="false" role="button" class="collapsed">Mood<span class="selected">Any Mood</span></a>
													</h4>
													
												</div>
												<div class="widget-boxed-body collapse" id="mood" data-parent="#mood">
													<div class="side-list no-border">
														<!-- Single Filter Card -->
														<div class="single_filter_card">
															<div class="card-body pt-0">
																<div class="inner_widget_link">
																	<ul class="no-ul-list filter-list">
																		<li>
																			<input id="f1" class="radio-custom" name="moods" type="radio">
																			<label for="f1" class="radio-custom-label">Any Mood</label>
																		</li>
																		<li>
																			<input id="f2" class="radio-custom" name="moods" type="radio">
																			<label for="f2" class="radio-custom-label">Professional</label>
																		</li>
																		<li>
																			<input id="f3" class="radio-custom" name="moods" type="radio">
																			<label for="f3" class="radio-custom-label">Essentials</label>
																		</li>
																		<li>
																			<input id="f4" class="radio-custom" name="moods" type="radio" checked>
																			<label for="f4" class="radio-custom-label">Unique</label>
																		</li>
																		<li>
																			<input id="f5" class="radio-custom" name="moods" type="radio">
																			<label for="f5" class="radio-custom-label">Lively</label>
																		</li>
																		<li>
																			<input id="f6" class="radio-custom" name="moods" type="radio">
																			<label for="f6" class="radio-custom-label">Luxe</label>
																		</li>
																		<li>
																			<input id="f7" class="radio-custom" name="moods" type="radio">
																			<label for="f7" class="radio-custom-label">Luxe</label>
																		</li>
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
														<a href="#ameneties" data-bs-toggle="collapse" aria-expanded="false" role="button" class="collapsed">Ameneties<span class="selected">ADA Compliant</span></a>
													</h4>
													
												</div>
												<div class="widget-boxed-body collapse" id="ameneties" data-parent="#ameneties">
													<div class="side-list no-border">
														<!-- Single Filter Card -->
														<div class="single_filter_card">
															<div class="card-body pt-0">
																<div class="inner_widget_link">
																	<ul class="no-ul-list filter-list">
																		<li>
																			<input id="g1" class="checkbox-custom" name="ADA" type="checkbox" checked>
																			<label for="g1" class="checkbox-custom-label">ADA Compliant</label>
																		</li>
																		<li>
																			<input id="g2" class="checkbox-custom" name="Parking" type="checkbox">
																			<label for="g2" class="checkbox-custom-label">Parking Options</label>
																		</li>
																		<li>
																			<input id="g3" class="checkbox-custom" name="Coffee" type="checkbox">
																			<label for="g3" class="checkbox-custom-label">Coffee Provided</label>
																		</li>
																		<li>
																			<input id="g4" class="checkbox-custom" name="Mother" type="checkbox">
																			<label for="g4" class="checkbox-custom-label">Mother's Room</label>
																		</li>
																		<li>
																			<input id="g5" class="checkbox-custom" name="Outdoor" type="checkbox">
																			<label for="g5" class="checkbox-custom-label">Outdoor Space</label>
																		</li>
																		<li>
																			<input id="g6" class="checkbox-custom" name="Pet" type="checkbox">
																			<label for="g6" class="checkbox-custom-label">Pet Friendly</label>
																		</li>
																		<li>
																			<input id="g7" class="checkbox-custom" name="Beauty" type="checkbox">
																			<label for="g7" class="checkbox-custom-label">Beauty & Message</label>
																		</li>
																		<li>
																			<input id="g8" class="checkbox-custom" name="Bike" type="checkbox">
																			<label for="g8" class="checkbox-custom-label">Bike Parking</label>
																		</li>
																		<li>
																			<input id="g9" class="checkbox-custom" name="Phone" type="checkbox">
																			<label for="g9" class="checkbox-custom-label">Phone Line</label>
																		</li>
																		<li>
																			<input id="g11" class="checkbox-custom" name="Private" type="checkbox">
																			<label for="g11" class="checkbox-custom-label">Private Areas</label>
																		</li>
																		<li>
																			<input id="g12" class="checkbox-custom" name="Free" type="checkbox">
																			<label for="g12" class="checkbox-custom-label">Free WiFi</label>
																		</li>
																		<li>
																			<input id="g13" class="checkbox-custom" name="Swiming" type="checkbox">
																			<label for="g13" class="checkbox-custom-label">Swiming Pool</label>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
										</div>
										
										<div class="form-group filter_button">
											<button type="submit" class="btn btn btn-theme-light-2 rounded full-width">22 Results Show</button>
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
											<div class="left-column pull-left"><h4 class="m-0">Found 1-10 of 142 Results</h4></div>
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
												<li><a href="grid-layout-with-sidebar.html"><i class="ti-layout-grid2"></i></a></li>
												<li><a href="listings-list-with-sidebar.html" class="active"><i class="ti-view-list"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">

								<!-- Single Property Start -->
								<div class="col-lg-12 col-md-12">
									<div class="property-listing property-1">
											
										<div class="listing-img-wrapper">
											<a href="single-property-2.html">
												<img src="https://via.placeholder.com/1200x800" class="img-fluid mx-auto" alt="" />
											</a>
										</div>
										
										<div class="listing-content">
										
											<div class="listing-detail-wrapper-box">
												<div class="listing-detail-wrapper">
													<div class="listing-short-detail">
														<h4 class="listing-name"><a href="single-property-2.html">Resort Valley Ocs</a></h4>
														<div class="fr-can-rating">
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star"></i>
															<span class="reviews_text">(42 Reviews)</span>
														</div>
														<span class="prt-types sale">For Sale</span>
													</div>
													<div class="list-price">
														<h6 class="listing-card-info-price">$7,000</h6>
													</div>
												</div>
											</div>
											
											<div class="price-features-wrapper">
												<div class="list-fx-features">
													<div class="listing-card-info-icon">
														<div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>3 Beds
													</div>
													<div class="listing-card-info-icon">
														<div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>1 Bath
													</div>
													<div class="listing-card-info-icon">
														<div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>800 sqft
													</div>
												</div>
											</div>
										
											<div class="listing-footer-wrapper">
												<div class="listing-locate">
													<span class="listing-location"><i class="ti-location-pin"></i>Quice Market, Canada</span>
												</div>
												<div class="listing-detail-btn">
													<a href="single-property-2.html" class="more-btn">View</a>
												</div>
											</div>
											
										</div>
										
									</div>
								</div>
								<!-- Single Property End -->
								
								<!-- Single Property Start -->
								<div class="col-lg-12 col-md-12">
									<div class="property-listing property-1">
											
										<div class="listing-img-wrapper">
											<a href="single-property-2.html">
												<img src="https://via.placeholder.com/1200x800" class="img-fluid mx-auto" alt="" />
											</a>
										</div>
										
										<div class="listing-content">
										
											<div class="listing-detail-wrapper-box">
												<div class="listing-detail-wrapper">
													<div class="listing-short-detail">
														<h4 class="listing-name"><a href="single-property-2.html">Adobe Property Advisors</a></h4>
														<div class="fr-can-rating">
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star"></i>
															<span class="reviews_text">(42 Reviews)</span>
														</div>
														<span class="prt-types rent">For Rent</span>
													</div>
													<div class="list-price">
														<h6 class="listing-card-info-price">$6,800</h6>
													</div>
												</div>
											</div>
											
											<div class="price-features-wrapper">
												<div class="list-fx-features">
													<div class="listing-card-info-icon">
														<div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>3 Beds
													</div>
													<div class="listing-card-info-icon">
														<div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>1 Bath
													</div>
													<div class="listing-card-info-icon">
														<div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>800 sqft
													</div>
												</div>
											</div>
										
											<div class="listing-footer-wrapper">
												<div class="listing-locate">
													<span class="listing-location"><i class="ti-location-pin"></i>Quice Market, Canada</span>
												</div>
												<div class="listing-detail-btn">
													<a href="single-property-2.html" class="more-btn">View</a>
												</div>
											</div>
											
										</div>
										
									</div>
								</div>
								<!-- Single Property End -->

								<!-- Single Property Start -->
								<div class="col-lg-12 col-md-12">
									<div class="property-listing property-1">
											
										<div class="listing-img-wrapper">
											<a href="single-property-2.html">
												<img src="https://via.placeholder.com/1200x800" class="img-fluid mx-auto" alt="" />
											</a>
										</div>
										
										<div class="listing-content">
										
											<div class="listing-detail-wrapper-box">
												<div class="listing-detail-wrapper">
													<div class="listing-short-detail">
														<h4 class="listing-name"><a href="single-property-2.html">Bluebell Real Estate</a></h4>
														<div class="fr-can-rating">
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star"></i>
															<span class="reviews_text">(42 Reviews)</span>
														</div>
														<span class="prt-types rent">For Rent</span>
													</div>
													<div class="list-price">
														<h6 class="listing-card-info-price">$7,000</h6>
													</div>
												</div>
											</div>
											
											<div class="price-features-wrapper">
												<div class="list-fx-features">
													<div class="listing-card-info-icon">
														<div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>3 Beds
													</div>
													<div class="listing-card-info-icon">
														<div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>1 Bath
													</div>
													<div class="listing-card-info-icon">
														<div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>800 sqft
													</div>
												</div>
											</div>
										
											<div class="listing-footer-wrapper">
												<div class="listing-locate">
													<span class="listing-location"><i class="ti-location-pin"></i>Quice Market, Canada</span>
												</div>
												<div class="listing-detail-btn">
													<a href="single-property-2.html" class="more-btn">View</a>
												</div>
											</div>
											
										</div>
										
									</div>
								</div>
								<!-- Single Property End -->

								<!-- Single Property Start -->
								<div class="col-lg-12 col-md-12">
									<div class="property-listing property-1">
											
										<div class="listing-img-wrapper">
											<a href="single-property-2.html">
												<img src="https://via.placeholder.com/1200x800" class="img-fluid mx-auto" alt="" />
											</a>
										</div>
										
										<div class="listing-content">
										
											<div class="listing-detail-wrapper-box">
												<div class="listing-detail-wrapper">
													<div class="listing-short-detail">
														<h4 class="listing-name"><a href="single-property-2.html">Agile Real Estate Group</a></h4>
														<div class="fr-can-rating">
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star"></i>
															<span class="reviews_text">(42 Reviews)</span>
														</div>
														<span class="prt-types sale">For Sale</span>
													</div>
													<div class="list-price">
														<h6 class="listing-card-info-price">$8,100</h6>
													</div>
												</div>
											</div>
											
											<div class="price-features-wrapper">
												<div class="list-fx-features">
													<div class="listing-card-info-icon">
														<div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>3 Beds
													</div>
													<div class="listing-card-info-icon">
														<div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>1 Bath
													</div>
													<div class="listing-card-info-icon">
														<div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>800 sqft
													</div>
												</div>
											</div>
										
											<div class="listing-footer-wrapper">
												<div class="listing-locate">
													<span class="listing-location"><i class="ti-location-pin"></i>Quice Market, Canada</span>
												</div>
												<div class="listing-detail-btn">
													<a href="single-property-2.html" class="more-btn">View</a>
												</div>
											</div>
											
										</div>
										
									</div>
								</div>
								<!-- Single Property End -->

								<!-- Single Property Start -->
								<div class="col-lg-12 col-md-12">
									<div class="property-listing property-1">
											
										<div class="listing-img-wrapper">
											<a href="single-property-2.html">
												<img src="https://via.placeholder.com/1200x800" class="img-fluid mx-auto" alt="" />
											</a>
										</div>
										
										<div class="listing-content">
										
											<div class="listing-detail-wrapper-box">
												<div class="listing-detail-wrapper">
													<div class="listing-short-detail">
														<h4 class="listing-name"><a href="single-property-2.html">Nestled Real Estate</a></h4>
														<div class="fr-can-rating">
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star"></i>
															<span class="reviews_text">(42 Reviews)</span>
														</div>
														<span class="prt-types sale">For Sale</span>
													</div>
													<div class="list-price">
														<h6 class="listing-card-info-price">$5,700</h6>
													</div>
												</div>
											</div>
											
											<div class="price-features-wrapper">
												<div class="list-fx-features">
													<div class="listing-card-info-icon">
														<div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>3 Beds
													</div>
													<div class="listing-card-info-icon">
														<div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>1 Bath
													</div>
													<div class="listing-card-info-icon">
														<div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>800 sqft
													</div>
												</div>
											</div>
										
											<div class="listing-footer-wrapper">
												<div class="listing-locate">
													<span class="listing-location"><i class="ti-location-pin"></i>Quice Market, Canada</span>
												</div>
												<div class="listing-detail-btn">
													<a href="single-property-2.html" class="more-btn">View</a>
												</div>
											</div>
											
										</div>
										
									</div>
								</div>
								<!-- Single Property End -->

								<!-- Single Property Start -->
								<div class="col-lg-12 col-md-12">
									<div class="property-listing property-1">
											
										<div class="listing-img-wrapper">
											<a href="single-property-2.html">
												<img src="https://via.placeholder.com/1200x800" class="img-fluid mx-auto" alt="" />
											</a>
										</div>
										
										<div class="listing-content">
										
											<div class="listing-detail-wrapper-box">
												<div class="listing-detail-wrapper">
													<div class="listing-short-detail">
														<h4 class="listing-name"><a href="single-property-2.html">Flow Group Real Estate</a></h4>
														<div class="fr-can-rating">
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star filled"></i>
															<i class="fas fa-star"></i>
															<span class="reviews_text">(42 Reviews)</span>
														</div>
														<span class="prt-types rent">For Rent</span>
													</div>
													<div class="list-price">
														<h6 class="listing-card-info-price">$5,900</h6>
													</div>
												</div>
											</div>
											
											<div class="price-features-wrapper">
												<div class="list-fx-features">
													<div class="listing-card-info-icon">
														<div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>3 Beds
													</div>
													<div class="listing-card-info-icon">
														<div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>1 Bath
													</div>
													<div class="listing-card-info-icon">
														<div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>800 sqft
													</div>
												</div>
											</div>
										
											<div class="listing-footer-wrapper">
												<div class="listing-locate">
													<span class="listing-location"><i class="ti-location-pin"></i>Quice Market, Canada</span>
												</div>
												<div class="listing-detail-btn">
													<a href="single-property-2.html" class="more-btn">View</a>
												</div>
											</div>
											
										</div>
										
									</div>
								</div>
								<!-- Single Property End -->				
								
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