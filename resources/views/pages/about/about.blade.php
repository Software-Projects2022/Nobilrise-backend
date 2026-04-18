@extends('layouts.app')
@section('title', 'About')
@section('content')
    <main>
        <!-- ===================== HERO ===================== -->
        <section class="page-hero">
            <div class="container">
                <div class="hero-content">
                    <div class="breadcrumb">
                        <a href="{{ route('home') }}"><i class="fas fa-home"></i> الرئيسية</a>
                        <i class="fas fa-chevron-left"></i>
                        <span>من نحن</span>
                    </div>
                    <h1 class="page-title">
                        {{ $about?->title ?? 'نساعدك على تحقيق' }} <span class="highlight">{{ $about?->title_ar ?? 'التوازن النفسي' }}</span>
                    </h1>
                    <p class="page-description">
                        {{ $about?->description ?? 'منصة الصعود النبيل هي منصة متخصصة في تقديم الاستشارات النفسية والجلسات العلاجية.' }}
                    </p>
                </div>
            </div>
        </section>

        <div class="gold-divider"></div>

        <!-- ===================== ABOUT ===================== -->
        <section class="about-section" id="about">
            <div class="container">
                <!-- Row 1: Text + Image -->
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6 col-md-12" data-aos="fade-right" data-aos-duration="1000">
                        <div class="about-content">
                            <div class="section-badge">
                                <i class="fas fa-heart"></i>
                                <span>من نحن</span>
                            </div>
                            <h2 class="section-title">
                                {{ $about?->title ?? 'نساعدك على تحقيق' }}
                                <span class="highlight">{{ $about?->title_ar ?? 'التوازن النفسي' }}</span>
                            </h2>
                            <p class="section-description">
                                {{ $about?->description ?? 'منصة الصعود النبيل هي منصة متخصصة في تقديم الاستشارات النفسية.' }}
                            </p>
                            <div class="about-features">
                                <div class="feature-row">
                                    <div class="feature-box">
                                        <div class="feature-icon-box"><i class="fas fa-check-circle"></i></div>
                                        <div class="feature-info">
                                            <h4>معالجون معتمدون</h4>
                                            <p>فريق من المعالجين النفسيين المحترفين والمعتمدين</p>
                                        </div>
                                    </div>
                                    <div class="feature-box">
                                        <div class="feature-icon-box"><i class="fas fa-user-shield"></i></div>
                                        <div class="feature-info">
                                            <h4>خصوصية مطلقة</h4>
                                            <p>نضمن لك السرية التامة في جميع جلساتك</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature-row">
                                    <div class="feature-box">
                                        <div class="feature-icon-box"><i class="fas fa-clock"></i></div>
                                        <div class="feature-info">
                                            <h4>مرونة في المواعيد</h4>
                                            <p>احجز في الوقت الذي يناسبك على مدار الأسبوع</p>
                                        </div>
                                    </div>
                                    <div class="feature-box">
                                        <div class="feature-icon-box"><i class="fas fa-star"></i></div>
                                        <div class="feature-info">
                                            <h4>جودة عالية</h4>
                                            <p>جلسات علاجية فعالة بأحدث الأساليب النفسية</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#sessions" class="btn-about">
                                <span>ابدأ رحلتك العلاجية</span>
                                <i class="fas fa-arrow-left"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                        <div class="about-img-wrap">
                            <img src="{{ $about?->image ? Storage::url($about->image) : asset('assets/img/main_hero.jpg') }}" alt="من نحن" class="about-side-img">
                            <div class="about-img-badge">
                                <i class="fas fa-award"></i>
                                <span>+5 سنوات خبرة</span>
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
                                    <div class="stat-icon"><img src="{{ asset('assets/img/User.png') }}" alt=""></div>
                                    <div class="stat-content">
                                        <h3 class="stat-number"><span class="counter" data-target="5000">0</span>+</h3>
                                        <p class="stat-label">عميل سعيد</p>
                                    </div>
                                </div>
                                <div class="stat-box">
                                    <div class="stat-icon"><img src="{{ asset('assets/img/successful.png') }}" alt=""></div>
                                    <div class="stat-content">
                                        <h3 class="stat-number"><span class="counter" data-target="15000">0</span>+</h3>
                                        <p class="stat-label">جلسة ناجحة</p>
                                    </div>
                                </div>
                                <div class="stat-box">
                                    <div class="stat-icon"><img src="https://cdn-icons-png.flaticon.com/512/2785/2785482.png" alt="معالج محترف"></div>
                                    <div class="stat-content">
                                        <h3 class="stat-number"><span class="counter" data-target="50">0</span>+</h3>
                                        <p class="stat-label">معالج محترف</p>
                                    </div>
                                </div>
                                <div class="stat-box">
                                    <div class="stat-icon"><img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" alt="نسبة الرضا"></div>
                                    <div class="stat-content">
                                        <h3 class="stat-number"><span class="counter" data-target="98">0</span>%</h3>
                                        <p class="stat-label">نسبة الرضا</p>
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
                    "طلب المساعدة ليس ضعفاً،<br>
                    بل هو <span class="gold">أشجع خطوة</span> يمكن أن تخطوها."
                </blockquote>
                <div class="quote-attr">— فلسفتنا في الصعود النبيل</div>
            </div>
        </div>

        <!-- ===================== VALUES ===================== -->
        <section class="values-section" id="values">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <div class="sec-label">قيمنا</div>
                    <h2 class="sec-title">ما الذي يجعلنا مختلفين</h2>
                </div>
                <div class="row g-4">
                    @foreach($values as $index => $value)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
                        <div class="value-card">
                            <div class="value-icon">
                                @if($value->image)
                                    <img src="{{ Storage::url($value->image) }}" alt="{{ $value->title }}" style="width:40px">
                                @else
                                    <i class="fas fa-star"></i>
                                @endif
                            </div>
                            <div class="value-title">{{ $value->title }}</div>
                            <div class="value-desc">{{ $value->description }}</div>
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
                        <div class="sec-label">الخطوة التالية</div>
                        <h2 class="sec-title">مستعد تبدأ رحلتك؟</h2>
                        <p class="sec-body" style="color: var(--color-text-muted); max-width: 50ch;">
                            الجلسة الأولى مجانية، لأننا نريدك أن تعرفنا قبل أن تقرر. لا التزامات، فقط محادثة صادقة.
                        </p>
                    </div>
                    <div class="cta-btns">
                        <a href="{{ route('training-courses') }}" class="btn-gold">احجز جلستك المجانية</a>
                        <a href="{{ route('training-courses') }}" class="btn-ghost">تصفح الدورات</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
