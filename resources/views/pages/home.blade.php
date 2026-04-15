@extends('layouts.app')
@section('title', 'Home')
@section('content')

   <main>
        <!-- ========================== Hero ========================== -->
        <section class="hero-banner" id="home">
            <div class="container">
                <div class="hero-row">
                    <div class="hero-content">
                        <h1 class="hero-title">
                            رحلتك نحو <span class="highlight">صحة نفسية</span> أفضل
                        </h1>
                        <p class="hero-subtitle">
                            عزّز صحتك النفسية من خلال جلسات استشارية متخصصة مع معالجين
                            نفسيين محترفين، واحصل على الدعم والإرشاد الذي تحتاجه لتحقيق
                            التوازن والسعادة في حياتك.
                        </p>
                        <a href="#sessions" class="hero-cta">احجز جلستك الاستشارية الآن</a>
                        <div class="hero-features">
                            <div class="feature-item">
                                <div class="feature-icon"><i class="fas fa-user-md"></i></div>
                                <div class="feature-text">معالجون محترفون</div>
                                <div class="feature-subtext">معتمدون ومتخصصون</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon icon-brain">
                                    <i class="fas fa-brain"></i>
                                </div>
                                <div class="feature-text">جلسات متنوعة</div>
                                <div class="feature-subtext">فردية وجماعية</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon icon-lock">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div class="feature-text">خصوصية تامة</div>
                                <div class="feature-subtext">سرية كاملة</div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-visual">
                        <div class="deco-element deco-circle"></div>
                        <div class="deco-element deco-dots"></div>
                        <div class="hero-image-wrapper">
                            <div class="circular-images">
                                <div class="circle-image image-1">
                                    <img src="./assets/img/hero.jpg" alt="مستشارة نفسية" />
                                </div>
                                <div class="circle-image image-2">
                                    <img src="./assets/img/main_hero.jpg" alt="مستشار نفسي" />
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
                                منصة الصعود النبيل هي منصة متخصصة في تقديم الاستشارات النفسية
                                والجلسات العلاجية بأعلى معايير الجودة والاحترافية. نؤمن بأن
                                الصحة النفسية حق للجميع.
                            </p>
                            <div class="about-features">
                                <div class="feature-row">
                                    <div class="feature-box">
                                        <div class="feature-icon-box">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <div class="feature-info">
                                            <h4>معالجون معتمدون</h4>
                                            <p>فريق من المعالجين النفسيين المحترفين والمعتمدين</p>
                                        </div>
                                    </div>
                                    <div class="feature-box">
                                        <div class="feature-icon-box">
                                            <i class="fas fa-user-shield"></i>
                                        </div>
                                        <div class="feature-info">
                                            <h4>خصوصية مطلقة</h4>
                                            <p>نضمن لك السرية التامة في جميع جلساتك</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature-row">
                                    <div class="feature-box">
                                        <div class="feature-icon-box">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                        <div class="feature-info">
                                            <h4>مرونة في المواعيد</h4>
                                            <p>احجز في الوقت الذي يناسبك على مدار الأسبوع</p>
                                        </div>
                                    </div>
                                    <div class="feature-box">
                                        <div class="feature-icon-box">
                                            <i class="fas fa-star"></i>
                                        </div>
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
                            <img src="./assets/img/main_hero.jpg" alt="من نحن" class="about-side-img" />
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
                                    <div class="stat-icon">
                                        <img src="./assets/img/User.png" alt="" />
                                    </div>
                                    <div class="stat-content">
                                        <h3 class="stat-number">
                                            <span class="counter" data-target="5000">0</span>+
                                        </h3>
                                        <p class="stat-label">عميل سعيد</p>
                                    </div>
                                </div>
                                <div class="stat-box">
                                    <div class="stat-icon">
                                        <img src="./assets/img/successful.png" alt="" />
                                    </div>
                                    <div class="stat-content">
                                        <h3 class="stat-number">
                                            <span class="counter" data-target="15000">0</span>+
                                        </h3>
                                        <p class="stat-label">جلسة ناجحة</p>
                                    </div>
                                </div>
                                <div class="stat-box">
                                    <div class="stat-icon">
                                        <img src="https://cdn-icons-png.flaticon.com/512/2785/2785482.png"
                                            alt="معالج محترف" />
                                    </div>
                                    <div class="stat-content">
                                        <h3 class="stat-number">
                                            <span class="counter" data-target="50">0</span>+
                                        </h3>
                                        <p class="stat-label">معالج محترف</p>
                                    </div>
                                </div>
                                <div class="stat-box">
                                    <div class="stat-icon">
                                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png"
                                            alt="نسبة الرضا" />
                                    </div>
                                    <div class="stat-content">
                                        <h3 class="stat-number">
                                            <span class="counter" data-target="98">0</span>%
                                        </h3>
                                        <p class="stat-label">نسبة الرضا</p>
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
                        <span>خدماتنا</span>
                    </div>
                    <h2 class="section-title">
                        نقدم لك أفضل <span class="highlight">الخدمات النفسية</span>
                    </h2>
                    <p class="section-description">
                        مجموعة متنوعة من الخدمات المتخصصة في الصحة النفسية والدعم العلاجي
                    </p>
                </div>
                <div class="services-grid">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/4807/4807231.png" alt="جلسات فردية" />
                            <div class="icon-bg-circle"></div>
                        </div>
                        <h3 class="service-title">جلسات فردية</h3>
                        <p class="service-description">
                            جلسات خاصة وشخصية مع معالج نفسي متخصص لمساعدتك على التعامل مع
                            التحديات
                        </p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> خصوصية تامة وسرية كاملة</li>
                            <li><i class="fas fa-check"></i> معالجون معتمدون</li>
                            <li><i class="fas fa-check"></i> مواعيد مرنة تناسبك</li>
                        </ul>
                        <a href="#sessions" class="service-btn"><span>احجز جلستك</span><i
                                class="fas fa-arrow-left"></i></a>
                    </div>
                    <div class="service-card featured" data-aos="fade-up" data-aos-delay="200">
                        <div class="featured-badge">الأكثر طلباً</div>
                        <div class="service-icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/3774/3774299.png" alt="جلسات جماعية" />
                            <div class="icon-bg-circle"></div>
                        </div>
                        <h3 class="service-title">جلسات جماعية</h3>
                        <p class="service-description">
                            انضم إلى مجموعات الدعم النفسي وشارك تجاربك مع الآخرين في بيئة
                            آمنة
                        </p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> بيئة داعمة ومشجعة</li>
                            <li><i class="fas fa-check"></i> تبادل الخبرات والتجارب</li>
                            <li><i class="fas fa-check"></i> إشراف متخصص</li>
                        </ul>
                        <a href="#sessions" class="service-btn"><span>انضم الآن</span><i
                                class="fas fa-arrow-left"></i></a>
                    </div>
                    <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/10337/10337577.png"
                                alt="استشارات أونلاين" />
                            <div class="icon-bg-circle"></div>
                        </div>
                        <h3 class="service-title">استشارات أونلاين</h3>
                        <p class="service-description">
                            احصل على الدعم النفسي من أي مكان عبر جلسات الفيديو أو المكالمات
                            الصوتية
                        </p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> راحة من منزلك</li>
                            <li><i class="fas fa-check"></i> جودة عالية في التواصل</li>
                            <li><i class="fas fa-check"></i> توفير الوقت والجهد</li>
                        </ul>
                        <a href="#sessions" class="service-btn"><span>ابدأ الآن</span><i
                                class="fas fa-arrow-left"></i></a>
                    </div>
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
                        <span>الدورات التدريبية</span>
                    </div>
                    <h2 class="section-title">
                        استثمر في نفسك من خلال
                        <span class="highlight">دوراتنا المتميزة</span>
                    </h2>
                </div>
                <div class="course-filters" data-aos="fade-up" data-aos-delay="100">
                    <button class="filter-btn active" data-filter="all">الكل</button>
                    <button class="filter-btn" data-filter="personal">
                        تطوير الذات
                    </button>
                    <button class="filter-btn" data-filter="skills">
                        المهارات الشخصية
                    </button>
                    <button class="filter-btn" data-filter="development">
                        التنمية البشرية
                    </button>
                    <button class="filter-btn" data-filter="leadership">
                        القيادة والإدارة
                    </button>
                </div>
                <div class="courses-grid">
                    <!-- Course 1 -->
                    <div class="course-card" data-aos="fade-up" data-aos-delay="100" data-category="personal">
                        <div class="course-image">
                            <img src="https://images.unsplash.com/photo-1552581234-26160f608093?w=600"
                                alt="تطوير الذات" />
                            <div class="course-badge">
                                <div class="course-category">
                                    <i class="fas fa-lightbulb"></i><span>تطوير الذات</span>
                                </div>
                            </div>
                        </div>
                        <div class="course-content">
                            <h3 class="course-title">دورة تطوير الذات الشاملة</h3>
                            <p class="course-desc">
                                رحلة متكاملة لاكتشاف قدراتك وتطوير مهاراتك لتحقيق النجاح
                                والتميز
                            </p>
                            <div class="course-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                </div>
                                <span>4.8</span>
                            </div>
                            <div class="course-footer">
                                <div class="course-price">
                                    <span class="old-price">1500 ج.م</span>
                                    <span class="new-price">1200 ج.م</span>
                                </div>
                                <a href="#" class="course-btn">احجز الآن <i class="fas fa-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Course 2 -->
                    <div class="course-card" data-aos="fade-up" data-aos-delay="200" data-category="skills">
                        <div class="course-image">
                            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=600"
                                alt="المهارات الشخصية" />
                            <div class="course-badge">
                                <div class="course-category">
                                    <i class="fas fa-user-tie"></i><span>المهارات الشخصية</span>
                                </div>
                            </div>
                        </div>
                        <div class="course-content">
                            <h3 class="course-title">فن التواصل الفعّال والإقناع</h3>
                            <p class="course-desc">
                                تعلم مهارات التواصل الاحترافي وبناء العلاقات القوية والتأثير
                            </p>
                            <div class="course-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <span>5.0</span>
                            </div>
                            <div class="course-footer">
                                <div class="course-price">
                                    <span class="new-price">1000 ج.م</span>
                                </div>
                                <a href="#" class="course-btn">احجز الآن <i class="fas fa-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Course 3 -->
                    <div class="course-card" data-aos="fade-up" data-aos-delay="300" data-category="development">
                        <div class="course-image">
                            <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=600"
                                alt="التنمية البشرية" />
                            <div class="course-badge">
                                <div class="course-category">
                                    <i class="fas fa-brain"></i><span>التنمية البشرية</span>
                                </div>
                            </div>
                        </div>
                        <div class="course-content">
                            <h3 class="course-title">إدارة الوقت وتعزيز الإنتاجية</h3>
                            <p class="course-desc">
                                اكتشف أسرار إدارة الوقت بفعالية وزيادة إنتاجيتك بكفاءة عالية
                            </p>
                            <div class="course-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <span>4.9</span>
                            </div>
                            <div class="course-footer">
                                <div class="course-price">
                                    <span class="old-price">900 ج.م</span>
                                    <span class="new-price">750 ج.م</span>
                                </div>
                                <a href="#" class="course-btn">احجز الآن <i class="fas fa-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Course 4 -->
                    <div class="course-card" data-aos="fade-up" data-aos-delay="400" data-category="leadership">
                        <div class="course-image">
                            <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=600"
                                alt="القيادة والإدارة" />
                            <div class="course-badge">
                                <div class="course-category">
                                    <i class="fas fa-chess-king"></i><span>القيادة والإدارة</span>
                                </div>
                            </div>
                        </div>
                        <div class="course-content">
                            <h3 class="course-title">مهارات القيادة الاحترافية</h3>
                            <p class="course-desc">
                                طور مهاراتك القيادية وقد فريقك بنجاح وحقق الأهداف بكفاءة
                            </p>
                            <div class="course-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <span>4.9</span>
                            </div>
                            <div class="course-footer">
                                <div class="course-price">
                                    <span class="new-price">1800 ج.م</span>
                                </div>
                                <a href="#" class="course-btn">احجز الآن <i class="fas fa-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Course 5 -->
                    <div class="course-card" data-aos="fade-up" data-aos-delay="500" data-category="development">
                        <div class="course-image">
                            <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?w=600"
                                alt="الذكاء العاطفي" />
                            <div class="course-badge">
                                <div class="course-category">
                                    <i class="fas fa-heart"></i><span>التنمية البشرية</span>
                                </div>
                            </div>
                        </div>
                        <div class="course-content">
                            <h3 class="course-title">الذكاء العاطفي والتحكم بالمشاعر</h3>
                            <p class="course-desc">
                                تعلم فهم مشاعرك والآخرين وطور قدرتك على التحكم العاطفي
                            </p>
                            <div class="course-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                </div>
                                <span>4.7</span>
                            </div>
                            <div class="course-footer">
                                <div class="course-price">
                                    <span class="new-price">850 ج.م</span>
                                </div>
                                <a href="#" class="course-btn">احجز الآن <i class="fas fa-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Course 6 -->
                    <div class="course-card" data-aos="fade-up" data-aos-delay="600" data-category="skills">
                        <div class="course-image">
                            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600"
                                alt="حل المشكلات" />
                            <div class="course-badge">
                                <div class="course-category">
                                    <i class="fas fa-puzzle-piece"></i><span>المهارات الشخصية</span>
                                </div>
                            </div>
                        </div>
                        <div class="course-content">
                            <h3 class="course-title">التفكير الإبداعي وحل المشكلات</h3>
                            <p class="course-desc">
                                اكتسب مهارات التفكير الإبداعي والابتكار في حل المشكلات
                            </p>
                            <div class="course-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                </div>
                                <span>4.8</span>
                            </div>
                            <div class="course-footer">
                                <div class="course-price">
                                    <span class="old-price">1300 ج.م</span>
                                    <span class="new-price">950 ج.م</span>
                                </div>
                                <a href="#" class="course-btn">احجز الآن <i class="fas fa-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="courses-footer" data-aos="fade-up">
                    <a href="#all-courses" class="view-all-btn">
                        استكشف جميع الدورات <i class="fas fa-arrow-left"></i>
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
                        <span>كيف نعمل</span>
                    </div>
                    <h2 class="section-title">
                        ابدأ رحلتك معنا في <span class="highlight">5 خطوات بسيطة</span>
                    </h2>
                    <p class="section-description">
                        عملية سهلة وواضحة للحصول على الدعم النفسي والاستشارات التي تحتاجها
                    </p>
                </div>
                <div class="steps-container">
                    <div class="step-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="step-number">
                            <span>01</span>
                            <div class="step-circle"></div>
                        </div>
                        <div class="step-content">
                            <div class="step-icon"><i class="fas fa-user-plus"></i></div>
                            <h3 class="step-title">سجل حساب جديد</h3>
                            <p class="step-description">
                                أنشئ حسابك الشخصي في دقائق معدودة بمعلومات بسيطة وآمنة تماماً
                            </p>
                        </div>
                    </div>
                    <div class="step-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="step-number">
                            <span>02</span>
                            <div class="step-circle"></div>
                        </div>
                        <div class="step-content">
                            <div class="step-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <h3 class="step-title">اختر نوع الجلسة</h3>
                            <p class="step-description">
                                حدد نوع الجلسة المناسبة لك: فردية، جماعية، أو استشارة أونلاين
                            </p>
                        </div>
                    </div>
                    <div class="step-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="step-number">
                            <span>03</span>
                            <div class="step-circle"></div>
                        </div>
                        <div class="step-content">
                            <div class="step-icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <h3 class="step-title">حدد الموعد المناسب</h3>
                            <p class="step-description">
                                اختر التاريخ والوقت الذي يناسبك من المواعيد المتاحة مع المعالج
                            </p>
                        </div>
                    </div>
                    <div class="step-item" data-aos="fade-up" data-aos-delay="400">
                        <div class="step-number">
                            <span>04</span>
                            <div class="step-circle"></div>
                        </div>
                        <div class="step-content">
                            <div class="step-icon"><i class="fas fa-credit-card"></i></div>
                            <h3 class="step-title">ادفع بأمان</h3>
                            <p class="step-description">
                                أتمم عملية الدفع بطريقة آمنة ومشفرة عبر بوابة الدفع الإلكتروني
                            </p>
                        </div>
                    </div>
                    <div class="step-item" data-aos="fade-up" data-aos-delay="500">
                        <div class="step-number">
                            <span>05</span>
                            <div class="step-circle"></div>
                        </div>
                        <div class="step-content">
                            <div class="step-icon"><i class="fas fa-video"></i></div>
                            <h3 class="step-title">احضر جلستك</h3>
                            <p class="step-description">
                                انضم للجلسة في الموعد المحدد واحصل على الدعم النفسي الذي
                                تحتاجه
                            </p>
                        </div>
                    </div>
                    <div class="connecting-line"></div>
                </div>
                <div class="how-it-works-footer" data-aos="fade-up" data-aos-delay="600">
                    <a href="#sessions" class="start-now-btn">
                        <span>ابدأ الآن</span>
                        <i class="fas fa-arrow-left"></i>
                    </a>
                    <p class="footer-text">انضم لأكثر من 5000+ شخص بدأوا رحلتهم معنا</p>
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
                        <span>آراء العملاء</span>
                    </div>
                    <h2 class="section-title">
                        ماذا يقول <span class="highlight">عملاؤنا عنا</span>
                    </h2>
                    <p class="section-description">
                        آراء حقيقية من أشخاص حقيقيين استفادوا من خدماتنا وغيرنا حياتهم
                        للأفضل
                    </p>
                </div>

                <!-- Testimonials Slider -->
                <div class="testimonials-slider" data-aos="fade-up" data-aos-delay="100">
                    <!-- Card 1 -->
                    <div class="testimonial-slide">
                        <div class="testimonial-card">
                            <div class="card-top">
                                <div class="quote-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <div class="stars">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <p class="testimonial-text">
                                الجلسات الجماعية كانت تجربة استثنائية، تعرفت على أشخاص يمرون
                                بنفس التحديات وهذا منحني قوة إضافية. المنصة توفر بيئة آمنة
                                ومحترمة للجميع.
                            </p>
                            <div class="testimonial-footer">
                                <div class="client-avatar">
                                    <img src="https://randomuser.me/api/portraits/men/52.jpg" alt="عمر حسن" />
                                </div>
                                <div class="client-info">
                                    <h4 class="client-name">عمر حسن</h4>
                                    <p class="client-role">مهندس - الكويت</p>
                                </div>
                                <div class="verified-badge">
                                    <i class="fas fa-check-circle"></i> موثق
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="testimonial-slide">
                        <div class="testimonial-card">
                            <div class="card-top">
                                <div class="quote-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <div class="stars">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <p class="testimonial-text">
                                الجلسات الجماعية كانت تجربة استثنائية، تعرفت على أشخاص يمرون
                                بنفس التحديات وهذا منحني قوة إضافية. المنصة توفر بيئة آمنة
                                ومحترمة للجميع.
                            </p>
                            <div class="testimonial-footer">
                                <div class="client-avatar">
                                    <img src="https://randomuser.me/api/portraits/men/52.jpg" alt="عمر حسن" />
                                </div>
                                <div class="client-info">
                                    <h4 class="client-name">عمر حسن</h4>
                                    <p class="client-role">مهندس - الكويت</p>
                                </div>
                                <div class="verified-badge">
                                    <i class="fas fa-check-circle"></i> موثق
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="testimonial-slide">
                        <div class="testimonial-card">
                            <div class="card-top">
                                <div class="quote-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <div class="stars">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <p class="testimonial-text">
                                الجلسات الجماعية كانت تجربة استثنائية، تعرفت على أشخاص يمرون
                                بنفس التحديات وهذا منحني قوة إضافية. المنصة توفر بيئة آمنة
                                ومحترمة للجميع.
                            </p>
                            <div class="testimonial-footer">
                                <div class="client-avatar">
                                    <img src="https://randomuser.me/api/portraits/men/52.jpg" alt="عمر حسن" />
                                </div>
                                <div class="client-info">
                                    <h4 class="client-name">عمر حسن</h4>
                                    <p class="client-role">مهندس - الكويت</p>
                                </div>
                                <div class="verified-badge">
                                    <i class="fas fa-check-circle"></i> موثق
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="testimonial-slide">
                        <div class="testimonial-card">
                            <div class="card-top">
                                <div class="quote-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <div class="stars">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <p class="testimonial-text">
                                الجلسات الجماعية كانت تجربة استثنائية، تعرفت على أشخاص يمرون
                                بنفس التحديات وهذا منحني قوة إضافية. المنصة توفر بيئة آمنة
                                ومحترمة للجميع.
                            </p>
                            <div class="testimonial-footer">
                                <div class="client-avatar">
                                    <img src="https://randomuser.me/api/portraits/men/52.jpg" alt="عمر حسن" />
                                </div>
                                <div class="client-info">
                                    <h4 class="client-name">عمر حسن</h4>
                                    <p class="client-role">مهندس - الكويت</p>
                                </div>
                                <div class="verified-badge">
                                    <i class="fas fa-check-circle"></i> موثق
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="testimonial-slide">
                        <div class="testimonial-card">
                            <div class="card-top">
                                <div class="quote-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <div class="stars">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <p class="testimonial-text">
                                الجلسات الجماعية كانت تجربة استثنائية، تعرفت على أشخاص يمرون
                                بنفس التحديات وهذا منحني قوة إضافية. المنصة توفر بيئة آمنة
                                ومحترمة للجميع.
                            </p>
                            <div class="testimonial-footer">
                                <div class="client-avatar">
                                    <img src="https://randomuser.me/api/portraits/men/52.jpg" alt="عمر حسن" />
                                </div>
                                <div class="client-info">
                                    <h4 class="client-name">عمر حسن</h4>
                                    <p class="client-role">مهندس - الكويت</p>
                                </div>
                                <div class="verified-badge">
                                    <i class="fas fa-check-circle"></i> موثق
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 6 -->
                    <div class="testimonial-slide">
                        <div class="testimonial-card">
                            <div class="card-top">
                                <div class="quote-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <div class="stars">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <p class="testimonial-text">
                                الجلسات الجماعية كانت تجربة استثنائية، تعرفت على أشخاص يمرون
                                بنفس التحديات وهذا منحني قوة إضافية. المنصة توفر بيئة آمنة
                                ومحترمة للجميع.
                            </p>
                            <div class="testimonial-footer">
                                <div class="client-avatar">
                                    <img src="https://randomuser.me/api/portraits/men/52.jpg" alt="عمر حسن" />
                                </div>
                                <div class="client-info">
                                    <h4 class="client-name">عمر حسن</h4>
                                    <p class="client-role">مهندس - الكويت</p>
                                </div>
                                <div class="verified-badge">
                                    <i class="fas fa-check-circle"></i> موثق
                                </div>
                            </div>
                        </div>
                    </div>
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
                            <span>تطبيقنا المحمول</span>
                        </div>
                        <h2 class="app-title">
                            تجربتك في راحة
                            <span class="highlight">يدك</span>
                        </h2>
                        <p class="app-desc">
                            حمّل تطبيق الصعود النبيل واحصل على جلساتك الاستشارية، دوراتك التدريبية، ومتابعة تقدمك في أي
                            وقت ومن أي مكان.
                        </p>
                        <ul class="app-features-list">
                            <li><i class="fas fa-check-circle"></i> حجز الجلسات بضغطة واحدة</li>
                            <li><i class="fas fa-check-circle"></i> متابعة تقدمك في الدورات</li>
                            <li><i class="fas fa-check-circle"></i> إشعارات فورية بمواعيدك</li>
                            <li><i class="fas fa-check-circle"></i> تواصل مباشر مع المعالج</li>
                        </ul>
                        <div class="app-store-btns">
                            <a href="#" class="store-btn">
                                <i class="fab fa-apple"></i>
                                <div>
                                    <span>حمّل من</span>
                                    <strong>App Store</strong>
                                </div>
                            </a>
                            <a href="#" class="store-btn">
                                <i class="fab fa-google-play"></i>
                                <div>
                                    <span>حمّل من</span>
                                    <strong>Google Play</strong>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Phone Mockup Side -->
                    <div class="app-phone-side">
                        <div class="phone-mockup-wrap">
                            <div class="phone-glow"></div>
                            <div class="phone-device">
                                <img src="./assets/img/iphone-mask.png" alt="iPhone Frame" class="phone-frame-img" />
                                <div class="phone-screen">
                                    <div class="swiper mySwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="./assets/img/Screenshot .png" alt="شاشة التطبيق 1" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets/img/Screenshot .png" alt="شاشة التطبيق 2" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="./assets/img/Screenshot .png" alt="شاشة التطبيق 3" />
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="float-badge badge-top">
                                <i class="fas fa-star"></i>
                                <div>
                                    <strong>4.9</strong>
                                    <span>تقييم المستخدمين</span>
                                </div>
                            </div>
                            <div class="float-badge badge-bottom">
                                <i class="fas fa-download"></i>
                                <div>
                                    <strong>+10K</strong>
                                    <span>تحميل</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
