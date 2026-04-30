@extends('layouts.app')
@section('title', 'About')
@section('content')
    <main>
        <!-- ===================== HERO ===================== -->
        <section class="page-hero">

    <div class="container">

        <div class="hero-content">

            <!-- Breadcrumb -->
            <div class="breadcrumb">

                <a href="{{ route('home') }}">
                    <i class="fas fa-home"></i>
                    {{ __('common.home') }}
                </a>

                <i class="fas fa-chevron-left"></i>

                <span>{{ __('about.title') }}</span>

            </div>

            <!-- Title -->
            <h1 class="page-title">

                {{ $about?->trans('title') ?? __('about.default_title') }}

            </h1>

            <!-- Description -->
            <p class="page-description">
                {{ $about?->trans('description') ?? __('about.default_desc') }}
            </p>

        </div>

    </div>

        </section>

        <div class="gold-divider"></div>

        <!-- ===================== ABOUT ===================== -->
        <section class="about-section" id="about">

            <div class="container">

                <!-- Row 1 -->
                <div class="row align-items-center mb-5">

                    <!-- Text -->
                    <div class="col-lg-6 col-md-12" data-aos="fade-right" data-aos-duration="1000">

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

                            <!-- Features -->
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

                    <!-- Image -->
                    <div class="col-lg-6 col-md-12"
                        data-aos="fade-left"
                        data-aos-duration="1000"
                        data-aos-delay="200">

                        <div class="about-img-wrap">

                            <img src="{{ $about?->image ? Storage::url($about->image) : asset('assets/img/main_hero.jpg') }}"
                                alt="{{ __('about.title') }}"
                                class="about-side-img">

                            <div class="about-img-badge">
                                <i class="fas fa-award"></i>
                                <span>{{ __('about.experience') }}</span>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- Row 2: Stats -->
                <div class="row" data-aos="fade-up" data-aos-duration="1000">

                    <div class="col-12">

                        <div class="stats-card">

                            <div class="stats-grid">

                                <div class="stat-box">
                                    <div class="stat-icon">
                                        <img src="{{ asset('assets/img/User.png') }}" alt="">
                                    </div>
                                    <div class="stat-content">
                                        <h3 class="stat-number">
                                            <span class="counter" data-target="5000">0</span>+
                                        </h3>
                                        <p class="stat-label">{{ __('about.stat_clients') }}</p>
                                    </div>
                                </div>

                                <div class="stat-box">
                                    <div class="stat-icon">
                                        <img src="{{ asset('assets/img/successful.png') }}" alt="">
                                    </div>
                                    <div class="stat-content">
                                        <h3 class="stat-number">
                                            <span class="counter" data-target="15000">0</span>+
                                        </h3>
                                        <p class="stat-label">{{ __('about.stat_sessions') }}</p>
                                    </div>
                                </div>

                                <div class="stat-box">
                                    <div class="stat-icon">
                                        <img src="https://cdn-icons-png.flaticon.com/512/2785/2785482.png" alt="">
                                    </div>
                                    <div class="stat-content">
                                        <h3 class="stat-number">
                                            <span class="counter" data-target="50">0</span>+
                                        </h3>
                                        <p class="stat-label">{{ __('about.stat_therapists') }}</p>
                                    </div>
                                </div>

                                <div class="stat-box">
                                    <div class="stat-icon">
                                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" alt="">
                                    </div>
                                    <div class="stat-content">
                                        <h3 class="stat-number">
                                            <span class="counter" data-target="98">0</span>%
                                        </h3>
                                        <p class="stat-label">{{ __('about.stat_satisfaction') }}</p>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

<!-- ===================== QUOTE ===================== -->
<div class="quote-banner">
    <div class="container">

        <blockquote data-aos="fade-up">
            {{ __('quote.text_1') }}<br>
            {{ __('quote.text_2') }}
            <span class="gold">{{ __('quote.highlight') }}</span>
            {{ __('quote.text_3') }}
        </blockquote>

        <div class="quote-attr">
            {{ __('quote.author') }}
        </div>

    </div>
</div>


<!-- ===================== VALUES ===================== -->
<section class="values-section" id="values">

    <div class="container">

        <div class="text-center mb-5" data-aos="fade-up">
            <div class="sec-label">{{ __('values.badge') }}</div>
            <h2 class="sec-title">{{ __('values.title') }}</h2>
        </div>

        <div class="row g-4">

            @foreach($values as $index => $value)

            <div class="col-lg-4 col-md-6"
                 data-aos="fade-up"
                 data-aos-delay="{{ ($index % 3) * 100 }}">

                <div class="value-card">

                    <div class="value-icon">
                        @if($value->image)
                            <img src="{{ Storage::disk('public')->url($value->image) }}"
                                 alt="{{ $value->trans('title') }}"
                                 style="width:40px">
                        @else
                            <i class="fas fa-star"></i>
                        @endif
                    </div>

                    <div class="value-title">
                        {{ $value->trans('title') }}
                    </div>

                    <div class="value-desc">
                        {{ $value->trans('description') }}
                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>


<!-- ===================== CTA ===================== -->
<section class="cta-section">

    <div class="container">

        <div class="cta-inner" data-aos="fade-up">

            <div class="cta-text">

                <div class="sec-label">
                    {{ __('cta.badge') }}
                </div>

                <h2 class="sec-title">
                    {{ __('cta.title') }}
                </h2>

                <p class="sec-body" style="color: var(--color-text-muted); max-width: 50ch;">
                    {{ __('cta.desc') }}
                </p>

            </div>

            <div class="cta-btns">

                <a href="{{ route('training-courses') }}" class="btn-gold">
                    {{ __('cta.primary_btn') }}
                </a>

                <a href="{{ route('training-courses') }}" class="btn-ghost">
                    {{ __('cta.secondary_btn') }}
                </a>

            </div>

        </div>

    </div>

</section>
    </main>

@endsection
