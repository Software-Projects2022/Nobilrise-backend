@extends('layouts.app')
@section('title', 'About')
@section('content')
    <main>
        <!-- ===================== HERO ===================== -->
        <section class="page-hero">
            <div class="container">
                <div class="hero-content">
                    <div class="breadcrumb">
                        <a href="index.html"><i class="fas fa-home"></i> الرئيسية</a>
                        <i class="fas fa-chevron-left"></i>
                        <span>من نحن</span>
                    </div>
                    <h1 class="page-title">
                        نساعدك على تحقيق <span class="highlight">التوازن النفسي</span>
                    </h1>
                    <p class="page-description">
                        منصة الصعود النبيل هي منصة متخصصة في تقديم الاستشارات النفسية والجلسات العلاجية بأعلى معايير
                        الجودة
                        والاحترافية. نؤمن بأن الصحة النفسية حق للجميع ونسعى لتقديم الدعم النفسي المتخصص لكل من يبحث عن
                        حياة
                        أفضل.
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
                                نساعدك على تحقيق
                                <span class="highlight">التوازن النفسي</span>
                            </h2>
                            <p class="section-description">
                                منصة الصعود النبيل هي منصة متخصصة في تقديم الاستشارات النفسية والجلسات العلاجية بأعلى
                                معايير الجودة والاحترافية. نؤمن بأن الصحة النفسية حق للجميع.
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
                            <img src="./assets/img/main_hero.jpg" alt="من نحن" class="about-side-img">
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
                                    <div class="stat-icon"><img src="./assets/img/User.png" alt=""></div>
                                    <div class="stat-content">
                                        <h3 class="stat-number"><span class="counter" data-target="5000">0</span>+</h3>
                                        <p class="stat-label">عميل سعيد</p>
                                    </div>
                                </div>
                                <div class="stat-box">
                                    <div class="stat-icon"><img src="./assets/img/successful.png" alt=""></div>
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
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                        <div class="value-card">
                            <div class="value-icon"><i class="fas fa-shield-halved"></i></div>
                            <div class="value-title">الأمان والسرية التامة</div>
                            <div class="value-desc">كل ما تشاركه معنا يبقى بيننا. نحمي خصوصيتك بأعلى معايير السرية
                                والاحترام
                                المهني.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="value-card">
                            <div class="value-icon"><i class="fas fa-heart"></i></div>
                            <div class="value-title">التعاطف بلا حكم</div>
                            <div class="value-desc">نستقبلك كما أنت، بقصتك كاملة، بلا حكم مسبق ولا توقعات. أنت آمن هنا
                                تماماً.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="value-card">
                            <div class="value-icon"><i class="fas fa-microscope"></i></div>
                            <div class="value-title">الاحترافية العلمية</div>
                            <div class="value-desc">جميع متخصصينا حاصلون على أعلى المؤهلات، ويواكبون أحدث أساليب العلاج
                                النفسي المعتمد.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                        <div class="value-card">
                            <div class="value-icon"><i class="fas fa-earth-africa"></i></div>
                            <div class="value-title">الشمولية والتنوع</div>
                            <div class="value-desc">نؤمن أن الصحة النفسية حق للجميع بغض النظر عن الخلفية أو الثقافة أو
                                الوضع
                                الاجتماعي.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="value-card">
                            <div class="value-icon"><i class="fas fa-leaf"></i></div>
                            <div class="value-title">النمو المستدام</div>
                            <div class="value-desc">لا نبحث عن حلول مؤقتة، بل نبني معك أدوات للحياة تدوم وتنمو معك على
                                مدى
                                السنين.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="value-card">
                            <div class="value-icon"><i class="fas fa-hands-holding-circle"></i></div>
                            <div class="value-title">الشراكة الحقيقية</div>
                            <div class="value-desc">أنت الخبير في حياتك ونحن الخبراء في أدوات التحول. معاً نرسم خريطة
                                رحلتك
                                الخاصة.</div>
                        </div>
                    </div>
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
                        <a href="index.html#sessions" class="btn-gold">احجز جلستك المجانية</a>
                        <a href="index.html#courses" class="btn-ghost">تصفح الدورات</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
