@extends('layouts.app')
@section('title', 'Home')
@section('content')

   <main>
        <!-- ========================== Hero ========================== -->
        <section class="hero-banner" id="home">

            <div class="container">

                <div class="hero-row">

                    <!-- Content -->
                    <div class="hero-content">

                        <h1 class="hero-title">
                            {{ $settings?->home_banner_title ?? __('hero.default_title') }}
                            <span class="highlight">
                                {{ $settings?->home_banner_highlight ?? __('hero.default_highlight') }}
                            </span>
                        </h1>

                        <p class="hero-subtitle">
                            {{ $settings?->home_banner_description ?? __('hero.default_desc') }}
                        </p>

                        <a href="{{ route('training-courses') }}#sessions" class="hero-cta">
                            {{ __('hero.cta') }}
                        </a>

                        <!-- Features -->
                        <div class="hero-features">

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-user-md"></i>
                                </div>
                                <div class="feature-text">
                                    {{ __('hero.professionals') }}
                                </div>
                                <div class="feature-subtext">
                                    {{ __('hero.professionals_sub') }}
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon icon-brain">
                                    <i class="fas fa-brain"></i>
                                </div>
                                <div class="feature-text">
                                    {{ __('hero.sessions') }}
                                </div>
                                <div class="feature-subtext">
                                    {{ __('hero.sessions_sub') }}
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon icon-lock">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div class="feature-text">
                                    {{ __('hero.privacy') }}
                                </div>
                                <div class="feature-subtext">
                                    {{ __('hero.privacy_sub') }}
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- Image -->
                    <div class="hero-visual">

                        <div class="deco-element deco-circle"></div>
                        <div class="deco-element deco-dots"></div>

                        <div class="hero-image-wrapper">

                            <div class="circular-images">

                                <div class="circle-image image-1">
                                    <img src="{{ $settings?->home_banner_image1 ? Storage::url($settings->home_banner_image1) : asset('assets/img/hero.jpg') }}"
                                        alt="{{ __('hero.image_1') }}"
                                        fetchpriority="high"
                                        loading="eager" />
                                </div>

                                <div class="circle-image image-2">
                                    <img src="{{ $settings?->home_banner_image2 ? Storage::url($settings->home_banner_image2) : asset('assets/img/main_hero.jpg') }}"
                                        alt="{{ __('hero.image_2') }}" />
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- ========================== About ========================== -->
   <section class="about-section" id="about">
            <div class="container">
                <div class="row align-items-center mb-5">

                    <div class="col-lg-6 col-md-12 {{ app()->getLocale() === 'en' ? 'order-lg-2' : '' }}" data-aos="fade-right" data-aos-duration="1000">
                        <div class="about-content">

                            <div class="section-badge">
                                <i class="fas fa-heart"></i>
                                <span>{{ __('about.badge') }}</span>
                            </div>

                            <h2 class="section-title">
                                {{ $about?->trans('title') ?? __('about.default_title') }}
                            </h2>

                            <p class="section-description">
                                {{ $about?->trans('description') ?? __('about.default_desc') }}
                            </p>

                            <div class="about-features">

                                <div class="feature-row">

                                    <div class="feature-box">

                                        <div class="feature-icon-box">
                                            <i class="fas fa-check-circle"></i>
                                        </div>

                                        <div class="feature-info">
                                            <h4>{{ __('about.feature_1_title') }}</h4>
                                            <p>{{ __('about.feature_1_desc') }}</p>
                                        </div>

                                    </div>

                                    <div class="feature-box">

                                        <div class="feature-icon-box">
                                            <i class="fas fa-user-shield"></i>
                                        </div>

                                        <div class="feature-info">
                                            <h4>{{ __('about.feature_2_title') }}</h4>
                                            <p>{{ __('about.feature_2_desc') }}</p>
                                        </div>

                                    </div>

                                </div>

                                <div class="feature-row">

                                    <div class="feature-box">

                                        <div class="feature-icon-box">
                                            <i class="fas fa-clock"></i>
                                        </div>

                                        <div class="feature-info">
                                            <h4>{{ __('about.feature_3_title') }}</h4>
                                            <p>{{ __('about.feature_3_desc') }}</p>
                                        </div>

                                    </div>

                                    <div class="feature-box">

                                        <div class="feature-icon-box">
                                            <i class="fas fa-star"></i>
                                        </div>

                                        <div class="feature-info">
                                            <h4>{{ __('about.feature_4_title') }}</h4>
                                            <p>{{ __('about.feature_4_desc') }}</p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <a href="#sessions" class="btn-about">
                                <span>{{ __('about.cta') }}</span>
                                <i class="fas fa-arrow-left"></i>
                            </a>

                        </div>

                    </div>

                    <div class="col-lg-6 col-md-12 {{ app()->getLocale() === 'en' ? 'order-lg-1' : '' }}"
                        data-aos="fade-left"
                        data-aos-duration="1000"
                        data-aos-delay="200">

                        <div class="about-img-wrap">

                            <img src="{{ $about?->image ? Storage::url($about->image) : asset('assets/img/main_hero.jpg') }}"
                                alt="{{ __('about.title') }}"
                                class="about-side-img" />

                            <div class="about-img-badge">
                                <i class="fas fa-award"></i>
                                <span>{{ __('about.experience') }}</span>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="row" data-aos="fade-up" data-aos-duration="1000">

                    <div class="col-12">

                        <div class="stats-card">

                            <div class="stats-grid">

                                <div class="stat-box">

                                    <div class="stat-icon">
                                        <img src="{{ asset('assets/img/User.png') }}" alt="" />
                                    </div>

                                    <div class="stat-content">

                                        <h3 class="stat-number">
                                            <span class="counter" data-target="5000">0</span>+
                                        </h3>

                                        <p class="stat-label">
                                            {{ __('about.stat_clients') }}
                                        </p>

                                    </div>

                                </div>

                                <div class="stat-box">

                                    <div class="stat-icon">
                                        <img src="{{ asset('assets/img/successful.png') }}" alt="" />
                                    </div>

                                    <div class="stat-content">

                                        <h3 class="stat-number">
                                            <span class="counter" data-target="15000">0</span>+
                                        </h3>

                                        <p class="stat-label">
                                            {{ __('about.stat_sessions') }}
                                        </p>

                                    </div>

                                </div>

                                <div class="stat-box">

                                    <div class="stat-icon">
                                        <img src="https://cdn-icons-png.flaticon.com/512/2785/2785482.png"
                                            alt="" />
                                    </div>

                                    <div class="stat-content">

                                        <h3 class="stat-number">
                                            <span class="counter" data-target="50">0</span>+
                                        </h3>

                                        <p class="stat-label">
                                            {{ __('about.stat_therapists') }}
                                        </p>

                                    </div>

                                </div>

                                <div class="stat-box">

                                    <div class="stat-icon">
                                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png"
                                            alt="" />
                                    </div>

                                    <div class="stat-content">

                                        <h3 class="stat-number">
                                            <span class="counter" data-target="98">0</span>%
                                        </h3>

                                        <p class="stat-label">
                                            {{ __('about.stat_satisfaction') }}
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- ========================== Services ========================== -->
        <section class="services-section" id="services">

        <div class="container">

            <div class="section-header" data-aos="fade-up">

                <div class="section-badge">
                    <i class="fas fa-hand-holding-heart"></i>
                    <span>{{ __('services.badge') }}</span>
                </div>

                <h2 class="section-title">
                    {{ __('services.title') }}
                    <span class="highlight">{{ __('services.title_highlight') }}</span>
                </h2>

                <p class="section-description">
                    {{ __('services.desc') }}
                </p>

            </div>

            <div class="services-grid">

                @foreach($services as $index => $service)

                <div class="service-card {{ $service->most_requested ? 'featured' : '' }}"
                    data-aos="fade-up"
                    data-aos-delay="{{ ($index + 1) * 100 }}">

                    @if($service->most_requested)
                        <div class="featured-badge">
                            {{ __('services.most_requested') }}
                        </div>
                    @endif

                    <div class="service-icon">

                        @if($service->image)
                            <img src="{{ Storage::url($service->image) }}"
                                alt="{{ $service->trans('name') }}" />
                        @endif

                        <div class="icon-bg-circle"></div>

                    </div>

                    <h3 class="service-title">
                        {{ $service->trans('name') }}
                    </h3>

                    <p class="service-description">
                        {{ $service->trans('short_description') }}
                    </p>

                    <a href="#sessions" class="service-btn">

                        <span>{{ __('common.book_now') }}</span>
                        <i class="fas fa-arrow-left"></i>

                    </a>

                </div>

                @endforeach

            </div>

        </div>

        <div class="stats-decoration_tow">
            <div class="deco-element deco-circle"></div>
            <div class="deco-element deco-dots"></div>
        </div>

        </section>

        <!-- ========================== Courses ========================== -->
        <section class="courses-section" id="courses">
    <div class="container">

        <div class="section-header" data-aos="fade-up">

            <div class="section-badge">
                <i class="fas fa-graduation-cap"></i>
                <span>{{ __('courses.badge') }}</span>
            </div>

            <h2 class="section-title">
                {{ __('courses.title') }}
                <span class="highlight">{{ __('courses.view_all') }}</span>
            </h2>

        </div>

        <!-- Filters -->
        <div class="course-filters" data-aos="fade-up" data-aos-delay="100">

            <button class="filter-btn active" data-filter="all">
                {{ __('common.all') }}
            </button>

            @foreach($courseCategories as $category)
                <button class="filter-btn" data-filter="{{ $category->name }}">
                    {{ $category->name }}
                </button>
            @endforeach

        </div>

    </div>

    <div class="container">

        <div class="courses-grid">

            @foreach($courses as $index => $course)

            <div class="course-card"
                    data-aos="fade-up"
                    data-aos-delay="{{ ($index + 1) * 100 }}"
                    data-category="{{ $course->trainingCourseCategory?->name }}">

                <div class="course-image">

                    @if($course->image)
                        <img src="{{ Storage::url($course->image) }}"
                                alt="{{ $course->trans('name') }}" />
                    @endif

                    <div class="course-badge">

                        <div class="course-category">
                            <i class="fas fa-graduation-cap"></i>
                            <span>{{ $course->trainingCourseCategory?->name }}</span>
                        </div>

                    </div>

                </div>

                <div class="course-content">

                    <h3 class="course-title">
                        {{ $course->trans('name') }}
                    </h3>

                    <p class="course-desc">
                        {{ $course->trans('short_description') }}
                    </p>

                    <div class="course-footer">

                        <div class="course-price">

                            @if($course->discount_price)

                                <span class="old-price">
                                    {{ $course->price }} {{ __('common.currency') }}
                                </span>

                                <span class="new-price">
                                    {{ $course->discount_price }} {{ __('common.currency') }}
                                </span>

                            @else

                                <span class="new-price">
                                    {{ $course->price }} {{ __('common.currency') }}
                                </span>

                            @endif

                        </div>

                        <a href="{{ route('course-details', $course->id) }}"
                            class="course-btn">

                            {{ __('common.details') }}
                            <i class="fas fa-arrow-left"></i>

                        </a>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

        <div class="courses-footer" data-aos="fade-up">

            <a href="{{ route('training-courses') }}" class="view-all-btn">
                {{ __('courses.view_all') }}
                <i class="fas fa-arrow-left"></i>
            </a>

        </div>

    </div>
        </section>

        <!-- ========================== How It Works ========================== -->
        <section class="how-it-works-section" id="how-it-works">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <div class="section-badge">
                        <i class="fas fa-route"></i>
                        <span>{{ __('steps.badge') }}</span>
                    </div>
                    <h2 class="section-title">
                        {{ __('steps.title') }} <span class="highlight">{{ __('steps.title_highlight') }}</span>
                    </h2>
                    <p class="section-description">{{ __('steps.desc') }}</p>
                </div>
                <div class="steps-container">
                    <div class="step-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="step-number"><span>01</span><div class="step-circle"></div></div>
                        <div class="step-content">
                            <div class="step-icon"><i class="fas fa-user-plus"></i></div>
                            <h3 class="step-title">{{ __('steps.1_title') }}</h3>
                            <p class="step-description">{{ __('steps.1_desc') }}</p>
                        </div>
                    </div>
                    <div class="step-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="step-number"><span>02</span><div class="step-circle"></div></div>
                        <div class="step-content">
                            <div class="step-icon"><i class="fas fa-clipboard-list"></i></div>
                            <h3 class="step-title">{{ __('steps.2_title') }}</h3>
                            <p class="step-description">{{ __('steps.2_desc') }}</p>
                        </div>
                    </div>
                    <div class="step-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="step-number"><span>03</span><div class="step-circle"></div></div>
                        <div class="step-content">
                            <div class="step-icon"><i class="fas fa-calendar-check"></i></div>
                            <h3 class="step-title">{{ __('steps.3_title') }}</h3>
                            <p class="step-description">{{ __('steps.3_desc') }}</p>
                        </div>
                    </div>
                    <div class="step-item" data-aos="fade-up" data-aos-delay="400">
                        <div class="step-number"><span>04</span><div class="step-circle"></div></div>
                        <div class="step-content">
                            <div class="step-icon"><i class="fas fa-credit-card"></i></div>
                            <h3 class="step-title">{{ __('steps.4_title') }}</h3>
                            <p class="step-description">{{ __('steps.4_desc') }}</p>
                        </div>
                    </div>
                    <div class="step-item" data-aos="fade-up" data-aos-delay="500">
                        <div class="step-number"><span>05</span><div class="step-circle"></div></div>
                        <div class="step-content">
                            <div class="step-icon"><i class="fas fa-video"></i></div>
                            <h3 class="step-title">{{ __('steps.5_title') }}</h3>
                            <p class="step-description">{{ __('steps.5_desc') }}</p>
                        </div>
                    </div>
                    <div class="connecting-line"></div>
                </div>
                <div class="how-it-works-footer" data-aos="fade-up" data-aos-delay="600">
                    <a href="#sessions" class="start-now-btn">
                        <span>{{ __('steps.start_now') }}</span>
                        <i class="fas fa-arrow-left"></i>
                    </a>
                    <p class="footer-text">{{ __('steps.join_count') }}</p>
                </div>
            </div>
            <div class="stats-decoration_tow">
                <div class="deco-element deco-circle"></div>
                <div class="deco-element deco-dots"></div>
            </div>
        </section>

        <!-- ========================== Testimonials ========================== -->
        <section class="testimonials-section" id="testimonials">
    <div class="container">

        <div class="section-header" data-aos="fade-up">

            <div class="section-badge">
                <i class="fas fa-star"></i>
                <span>{{ __('testimonials.badge') }}</span>
            </div>

            <h2 class="section-title">
                {{ __('testimonials.title') }}
                <span class="highlight">{{ __('testimonials.title_highlight') }}</span>
            </h2>

            <p class="section-description">
                {{ __('testimonials.desc') }}
            </p>

        </div>

        <!-- Testimonials Slider -->
        <div class="testimonials-slider" data-aos="fade-up" data-aos-delay="100">

            @foreach($testimonials as $testimonial)

            <div class="testimonial-slide">
                <div class="testimonial-card">

                    <div class="card-top">

                        <div class="quote-icon">
                            <i class="fas fa-quote-right"></i>
                        </div>

                        <div class="stars">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $testimonial->rating)
                                    <i class="fas fa-star"></i>
                                @elseif($i - 0.5 <= $testimonial->rating)
                                    <i class="fas fa-star-half-alt"></i>
                                @else
                                    <i class="far fa-star"></i>
                                @endif
                            @endfor
                        </div>

                    </div>

                    <p class="testimonial-text">
                        {{ $testimonial->review }}
                    </p>

                    <div class="testimonial-footer">

                        <div class="client-avatar">
                            @if($testimonial->image)
                                <img src="{{ Storage::url($testimonial->image) }}" alt="{{ $testimonial->name }}" />
                            @endif
                        </div>

                        <div class="client-info">
                            <h4 class="client-name">{{ $testimonial->name }}</h4>
                            <p class="client-role">{{ $testimonial->job }}</p>
                        </div>

                        <div class="verified-badge">
                            <i class="fas fa-check-circle"></i>
                            {{ __('common.verified') }}
                        </div>

                    </div>

                </div>
            </div>

            @endforeach

        </div>

    </div>

    <div class="bg-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
    </div>
        </section>

        <!-- ========================== swepr ========================== -->
        <section class="app-showcase-section">
            <div class="container">
            <div class="app-showcase-inner">

                <!-- Text Side -->
                <div class="app-text-side">

                    <div class="section-badge">
                        <i class="fas fa-mobile-alt"></i>
                        <span>{{ __('app.mobile_app') }}</span>
                    </div>

                    <h2 class="app-title">
                        {{ __('app.experience_title') }}
                        <span class="highlight">{{ __('app.experience_highlight') }}</span>
                    </h2>

                    <p class="app-desc">
                        {{ __('app.description') }}
                    </p>

                    <ul class="app-features-list">
                        <li><i class="fas fa-check-circle"></i> {{ __('app.feature_1') }}</li>
                        <li><i class="fas fa-check-circle"></i> {{ __('app.feature_2') }}</li>
                        <li><i class="fas fa-check-circle"></i> {{ __('app.feature_3') }}</li>
                        <li><i class="fas fa-check-circle"></i> {{ __('app.feature_4') }}</li>
                    </ul>

                    <div class="app-store-btns">

                        <a href="{{ $settings?->app_store_link ?? '#' }}" class="store-btn">
                            <i class="fab fa-apple"></i>
                            <div>
                                <span>{{ __('app.download_from') }}</span>
                                <strong>{{ __('app.app_store') }}</strong>
                            </div>
                        </a>

                        <a href="{{ $settings?->google_play_link ?? '#' }}" class="store-btn">
                            <i class="fab fa-google-play"></i>
                            <div>
                                <span>{{ __('app.download_from') }}</span>
                                <strong>{{ __('app.google_play') }}</strong>
                            </div>
                        </a>

                    </div>
                </div>

                <!-- Phone Mockup Side -->
                <div class="app-phone-side">
                    <div class="phone-mockup-wrap">
                        <div class="phone-glow"></div>

                        <div class="phone-device">
                            <img src="{{ $settings?->app_phone_frame ? Storage::url($settings->app_phone_frame) : asset('assets/img/iphone-mask.png') }}"
                                alt="iPhone Frame"
                                class="phone-frame-img" />

                            <div class="phone-screen">
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide">
                                            <img src="{{ $settings?->app_screenshot_1 ? Storage::url($settings->app_screenshot_1) : asset('assets/img/Screenshot.png') }}"
                                                alt="App Screen 1" />
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ $settings?->app_screenshot_2 ? Storage::url($settings->app_screenshot_2) : asset('assets/img/Screenshot.png') }}"
                                                alt="App Screen 2" />
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ $settings?->app_screenshot_3 ? Storage::url($settings->app_screenshot_3) : asset('assets/img/Screenshot.png') }}"
                                                alt="App Screen 3" />
                                        </div>

                                    </div>

                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>

                        <div class="float-badge badge-top">
                            <i class="fas fa-star"></i>
                            <div>
                                <strong>{{ $settings?->app_rating ?? '4.9' }}</strong>
                                <span>{{ __('app.user_rating') }}</span>
                            </div>
                        </div>

                        <div class="float-badge badge-bottom">
                            <i class="fas fa-download"></i>
                            <div>
                                <strong>{{ $settings?->app_downloads ?? '+10K' }}</strong>
                                <span>{{ __('app.downloads') }}</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        </section>
    </main>
@endsection
