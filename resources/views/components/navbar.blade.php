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
                        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">الرئيسية</a></li>
                        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">من نحن</a></li>
                        <li><a href="{{ route('training-courses') }}" class="{{ request()->routeIs('training-courses', 'course-details') ? 'active' : '' }}">الدورات و الجلسات</a></li>
                        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">تواصل معنا</a></li>
                        <div class="auth-buttons d-lg-none">
                            <button class="btn-login">تسجيل الدخول</button>
                            <button class="btn-register">إنشاء حساب</button>
                        </div>
                    </ul>
                </nav>

                <div class="auth-buttons d-none d-lg-flex">
                    @auth('client')
                        <a href="{{ route('profile') }}" class="btn-login">
                            <i class="fas fa-user-circle"></i> {{ Auth::guard('client')->user()->name }}
                        </a>
                        <form method="POST" action="{{ route('logout') }}" style="display:inline">
                            @csrf
                            <button type="submit" class="btn-register">تسجيل الخروج</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn-login">تسجيل الدخول</a>
                        <a href="{{ route('register') }}" class="btn-register">إنشاء حساب</a>
                    @endauth
                </div>

                <div class="menu-toggle" id="menuToggle">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
    </header>
