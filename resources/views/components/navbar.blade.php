{{-- Navbar --}}
  <!-- ========================== Header ========================== -->
    <header class="header" id="header">
        <div class="container">
            <div class="header-container">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="الصعود النبيل Logo" class="logo-img" />
                    <div class="logo-text">
                        <h1 class="logo-title">الصعود النبيل</h1>
                        <p class="logo-subtitle">Your Path to Excellence</p>
                    </div>
                </a>

                <nav>
                    <ul class="nav-menu" id="navMenu">
                        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">{{ __('nav.home') }}</a></li>
                        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">{{ __('nav.about') }}</a></li>
                        <li><a href="{{ route('training-courses') }}" class="{{ request()->routeIs('training-courses', 'course-details') ? 'active' : '' }}">{{ __('nav.courses') }}</a></li>
                        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">{{ __('nav.contact') }}</a></li>
                        <div class="auth-buttons d-lg-none">
                            @auth('client')
                                <a href="{{ route('profile') }}" class="btn-login">
                                    <i class="fas fa-user-circle"></i> {{ Auth::guard('client')->user()->name }}
                                </a>
                                <form method="POST" action="{{ route('logout') }}" style="display:inline">
                                    @csrf
                                    <button type="submit" class="btn-register">{{ __('nav.logout') }}</button>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="btn-login">{{ __('nav.login') }}</a>
                                <a href="{{ route('register') }}" class="btn-register">{{ __('nav.register') }}</a>
                            @endauth
                        </div>
                    </ul>
                </nav>

                <div class="auth-buttons d-none d-lg-flex">
                    <a href="{{ route('lang.switch', app()->getLocale() === 'ar' ? 'en' : 'ar') }}"
                       class="btn-login" style="min-width:auto;padding:8px 16px;">
                        {{ app()->getLocale() === 'ar' ? 'EN' : 'ع' }}
                    </a>
                    @auth('client')
                        <a href="{{ route('profile') }}" class="btn-login">
                            <i class="fas fa-user-circle"></i> {{ Auth::guard('client')->user()->name }}
                        </a>
                        <form method="POST" action="{{ route('logout') }}" style="display:inline">
                            @csrf
                            <button type="submit" class="btn-register">{{ __('nav.logout') }}</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn-login">{{ __('nav.login') }}</a>
                        <a href="{{ route('register') }}" class="btn-register">{{ __('nav.register') }}</a>
                    @endauth
                </div>

                <div class="menu-toggle" id="menuToggle">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
    </header>
