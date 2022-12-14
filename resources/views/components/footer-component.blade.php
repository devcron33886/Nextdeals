@if (!auth())
    <section class="theme-bg call-to-act-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="call-to-act">
                        <div class="call-to-act-head">
                            <h3>Want to Become a Real Estate Agent?</h3>
                            <span>We'll help you to grow your career and growth.</span>
                        </div>
                        <a href="{{ route('register') }}" class="btn btn-call-to-act">SignUp Today</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endif
<footer class="dark-footer skin-dark-footer">
    <div>
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-3">
                    <div class="footer-widget">
                        <img src="{{ asset('assets/img/nextdeals.png') }}" class="img-footer" alt="" />
                        <div class="footer-add">
                            <p>KG 236 ST, KIMIRONKO, GASABO.</p>
                            <p>+250 789 638 130</p>
                            <p>info@nextdeals.rw</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="footer-widget">
                        <h4 class="widget-title">Navigations</h4>
                         <ul class="footer-menu">
                            <li><a href="{{ route('about-us') }}">About Us</a></li>
                            <li><a href="{{ route('contact.index') }}">Contact</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Login</a></li>
                        </ul>
                    </div>
                </div>



                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget">
                        <h4 class="widget-title">My Account</h4>
                        <ul class="footer-menu">
                            {{-- <li><a href="{{ route('frontend.home') }}">My Account</a></li>
                            <li><a href="{{ route('frontend.listing') }}">My Property</a></li> --}}

                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h4 class="widget-title">Download Apps</h4>
                        <a href="#" class="other-store-link">
                            <div class="other-store-app">
                                <div class="os-app-icon">
                                    <i class="lni-playstore theme-cl"></i>
                                </div>
                                <div class="os-app-caps">
                                    Google Play
                                    <span>Get It Now</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="other-store-link">
                            <div class="other-store-app">
                                <div class="os-app-icon">
                                    <i class="lni-apple theme-cl"></i>
                                </div>
                                <div class="os-app-caps">
                                    App Store
                                    <span>Now it Available</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6">
                    <p class="mb-0">?? {{ config('app.name') }} {{ date('Y') }}. Powered By <a
                            href="https://nextvisibility.com">Next visibility</a> All Rights Reserved</p>
                </div>

                <div class="col-lg-6 col-md-6 text-right">
                    <ul class="footer-bottom-social">
                        <li><a href="https://www.facebook.com/nextdesalsrwanda" target="_blank"><i class="lni-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/nextdealsrwanda/?viewAsMember=true"><i class="lni-linkedin" target="_blank"></i></a></li>
                        <li><a href="https://www.instagram.com/nextdealsrwanda/" target="_blank"><i class="lni-instagram"></i></a></li>
                        <li><a href="https://twitter.com/next_deals" target="_blank"><i class="lni-twitter"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>
