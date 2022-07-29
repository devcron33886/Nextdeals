<div class="header header-light">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="#">
                    <img src="{{ asset('assets/img/nextdeals.png') }}" class="logo" alt=""/>
                </a>
                <div class="nav-toggle"></div>
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">
                <ul class="nav-menu">
                    @foreach($categories as $category)
                        <li><a href="{{ route('category-show',$category->slug) }}">{{ $category->name }}</a>
                    @endforeach

                    <li><a href="{{ route('about-us') }}">About us</a></li>
                    <li><a href="{{ route('contact.index') }}">Contact us</a></li>


                </ul>

                <ul class="nav-menu nav-menu-social align-to-right">
                    @guest

                        @if(Route::has('login'))
                            <li>
                                <a href="{{ route('login') }}" class="text-success">
                                    <i class="fas fa-user-circle mr-2"></i>Sign in
                                </a>
                            </li>
                        @endif
                        @if(Route::has('register'))
                            <li>
                                <a class="text-success" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @else
                        <ul class="nav-menu nav-menu-social align-to-right">
                            <li class="">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <img src="{{ asset('assets/img/off.svg')}}" class="mr-2" width="17" alt="">Sign
                                    Out {{ Auth::user()->name }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>
</div>
