@extends('layouts.app')
@section('title', 'Course Details')
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/course-details.css') }}" />
@endsection
@section('content')
   <main>
        <!-- Hero -->
        <section class="cd-hero">
            <div class="container">
                <div class="cd-breadcrumb">
                    <a href="index.html"><i class="fas fa-home"></i> الرئيسية</a>
                    <i class="fas fa-chevron-left"></i>
                    <a href="training_courses.html">الدورات</a>
                    <i class="fas fa-chevron-left"></i>
                    <span id="cd-breadcrumb-title">تفصيل الدورة</span>
                </div>
                <div class="cd-hero-grid">
                    <!-- Info -->
                    <div class="cd-hero-info" data-aos="fade-right">
                        <div class="cd-category-badge">
                            <i id="cd-category-icon" class="fas fa-lightbulb"></i>
                            <span id="cd-category-text">تطوير الذات</span>
                        </div>
                        <h1 class="cd-title" id="cd-title">دورة تطوير الذات الشاملة</h1>
                        <p class="cd-desc" id="cd-desc">رحلة متكاملة لاكتشاف قدراتك وتطوير مهاراتك.</p>
                        <div class="cd-meta-row">
                            <div class="cd-meta-item">
                                <i class="fas fa-star"></i>
                                <span id="cd-rating">4.8</span>
                                <span class="cd-meta-label">(320 تقييم)</span>
                            </div>
                            <div class="cd-meta-item"><i class="fas fa-users"></i><span>+1200 طالب</span></div>
                            <div class="cd-meta-item"><i class="fas fa-clock"></i><span>24 ساعة</span></div>
                            <div class="cd-meta-item"><i class="fas fa-signal"></i><span>مبتدئ - متقدم</span></div>
                        </div>
                        <div class="cd-instructor-row">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="المدرب"
                                class="cd-instructor-img">
                            <div>
                                <span class="cd-instructor-label">المدرب</span>
                                <span class="cd-instructor-name">د. سارة أحمد</span>
                            </div>
                        </div>
                    </div>
                    <!-- Enroll Card -->
                    <div class="cd-enroll-card" data-aos="fade-left">
                        <img src="https://images.unsplash.com/photo-1552581234-26160f608093?w=600" alt="الدورة"
                            class="cd-course-thumb" id="cd-cover-img">
                        <div class="cd-card-body">
                            <div class="cd-price-wrap">
                                <span class="cd-new-price" id="cd-new-price">1200 ج.م</span>
                                <span class="cd-old-price" id="cd-old-price">1500 ج.م</span>
                                <span class="cd-discount-badge" id="cd-discount-badge">خصم 20%</span>
                            </div>
                            <button class="cd-pay-btn" onclick="openPayModal()">
                                <i class="fas fa-credit-card"></i> ادفع والتحق بالدورة
                            </button>
                            <p class="cd-guarantee"><i class="fas fa-shield-alt"></i> ضمان استرداد المبلغ خلال 7 أيام
                            </p>
                            <ul class="cd-includes">
                                <li><i class="fas fa-book-open"></i> محتوى نصي تفاعلي</li>
                                <li><i class="fas fa-file-alt"></i> مواد تدريبية قابلة للتحميل</li>
                                <li><i class="fas fa-infinity"></i> وصول مدى الحياة</li>
                                <li><i class="fas fa-certificate"></i> شهادة إتمام معتمدة</li>
                                <li><i class="fas fa-mobile-alt"></i> متاح على الجوال والكمبيوتر</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Body -->
        <section class="cd-body">
            <div class="container">
                <div class="cd-body-grid">
                    <!-- Main Content -->
                    <div>
                        <!-- What you learn -->
                        <div class="cd-section-card" data-aos="fade-up">
                            <h2 class="cd-section-title"><i class="fas fa-check-circle"></i>ماذا ستتعلم</h2>
                            <div class="cd-learn-grid">
                                <div class="cd-learn-item"><i class="fas fa-check"></i><span>اكتشاف نقاط قوتك وتطويرها
                                        بشكل فعّال</span></div>
                                <div class="cd-learn-item"><i class="fas fa-check"></i><span>بناء عادات يومية تقودك
                                        للنجاح</span></div>
                                <div class="cd-learn-item"><i class="fas fa-check"></i><span>إدارة الوقت والأولويات
                                        باحترافية</span></div>
                                <div class="cd-learn-item"><i class="fas fa-check"></i><span>تطوير مهارات التواصل
                                        والتأثير</span></div>
                                <div class="cd-learn-item"><i class="fas fa-check"></i><span>التغلب على العقبات والخوف
                                        من الفشل</span></div>
                                <div class="cd-learn-item"><i class="fas fa-check"></i><span>وضع أهداف واضحة
                                        وتحقيقها</span></div>
                                <div class="cd-learn-item"><i class="fas fa-check"></i><span>تعزيز الثقة بالنفس والتقدير
                                        الذاتي</span></div>
                                <div class="cd-learn-item"><i class="fas fa-check"></i><span>تحقيق التوازن بين الحياة
                                        الشخصية والمهنية</span></div>
                            </div>
                        </div>

                        <!-- Curriculum -->
                        <div class="cd-section-card" data-aos="fade-up">
                            <h2 class="cd-section-title"><i class="fas fa-list"></i>محتوى الدورة</h2>
                            <p style="font-size:14px;color:#888;margin-bottom:18px">8 أقسام • 42 درس • 24 ساعة إجمالية
                            </p>

                            <p></p>
                        </div>

                        <!-- Instructor -->
                        <div class="cd-section-card" data-aos="fade-up">
                            <h2 class="cd-section-title"><i class="fas fa-chalkboard-teacher"></i>المدرب</h2>
                            <div class="cd-instructor-card">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="د. سارة أحمد">
                                <div>
                                    <h3>د. سارة أحمد</h3>
                                    <p class="cd-inst-title">خبيرة تطوير الذات والتدريب المهني</p>
                                    <div class="cd-inst-stats">
                                        <span class="cd-inst-stat"><i class="fas fa-star"></i> 4.9 تقييم</span>
                                        <span class="cd-inst-stat"><i class="fas fa-users"></i> +5000 طالب</span>
                                        <span class="cd-inst-stat"><i class="fas fa-book"></i> 12 دورة</span>
                                    </div>
                                    <p>دكتورة في علم النفس التطبيقي مع خبرة تزيد عن 15 عاماً في مجال التدريب وتطوير
                                        الذات. ساعدت آلاف الأشخاص على تحقيق أهدافهم.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews -->
                        <div class="cd-section-card" data-aos="fade-up">
                            <h2 class="cd-section-title"><i class="fas fa-star"></i>تقييمات الطلاب</h2>
                            <div class="cd-rating-summary">
                                <div class="cd-rating-big">
                                    <div class="num">4.8</div>
                                    <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star-half-alt"></i></div>
                                    <div class="total">320 تقييم</div>
                                </div>
                                <div class="cd-rating-bars">
                                    <div class="cd-rating-bar-row"><span>5 ★</span>
                                        <div class="cd-bar-track">
                                            <div class="cd-bar-fill" style="width:75%"></div>
                                        </div><span>75%</span>
                                    </div>
                                    <div class="cd-rating-bar-row"><span>4 ★</span>
                                        <div class="cd-bar-track">
                                            <div class="cd-bar-fill" style="width:18%"></div>
                                        </div><span>18%</span>
                                    </div>
                                    <div class="cd-rating-bar-row"><span>3 ★</span>
                                        <div class="cd-bar-track">
                                            <div class="cd-bar-fill" style="width:5%"></div>
                                        </div><span>5%</span>
                                    </div>
                                    <div class="cd-rating-bar-row"><span>2 ★</span>
                                        <div class="cd-bar-track">
                                            <div class="cd-bar-fill" style="width:1%"></div>
                                        </div><span>1%</span>
                                    </div>
                                    <div class="cd-rating-bar-row"><span>1 ★</span>
                                        <div class="cd-bar-track">
                                            <div class="cd-bar-fill" style="width:1%"></div>
                                        </div><span>1%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cd-review-card">
                                <div class="cd-review-top">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                                    <div>
                                        <div class="cd-review-name">أحمد محمد</div>
                                        <div class="cd-review-stars"><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                    </div>
                                    <span class="cd-review-date">منذ أسبوعين</span>
                                </div>
                                <p class="cd-review-text">دورة رائعة جداً، غيّرت طريقة تفكيري بشكل كامل. المحتوى منظم
                                    ومفيد والدكتورة سارة أسلوبها ممتاز. أنصح بها بشدة.</p>
                            </div>
                            <div class="cd-review-card">
                                <div class="cd-review-top">
                                    <img src="https://randomuser.me/api/portraits/women/28.jpg" alt="">
                                    <div>
                                        <div class="cd-review-name">نورا إبراهيم</div>
                                        <div class="cd-review-stars"><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                                    </div>
                                    <span class="cd-review-date">منذ شهر</span>
                                </div>
                                <p class="cd-review-text">محتوى عملي وقابل للتطبيق فعلاً في الحياة اليومية. استفدت
                                    كثيراً من قسم إدارة الوقت والعادات.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div>
                        <div class="cd-sidebar-card" data-aos="fade-up">
                            <h3 class="cd-sidebar-title">دورات مشابهة</h3>
                            <a href="course-details.html?id=2" class="cd-related-course">
                                <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=200" alt="">
                                <div>
                                    <div class="cd-related-course-title">فن التواصل الفعّال والإقناع</div>
                                    <div class="cd-related-course-price">1000 ج.م</div>
                                </div>
                            </a>
                            <a href="course-details.html?id=3" class="cd-related-course">
                                <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=200" alt="">
                                <div>
                                    <div class="cd-related-course-title">إدارة الوقت وتعزيز الإنتاجية</div>
                                    <div class="cd-related-course-price">750 ج.م</div>
                                </div>
                            </a>
                            <a href="course-details.html?id=5" class="cd-related-course">
                                <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?w=200" alt="">
                                <div>
                                    <div class="cd-related-course-title">الذكاء العاطفي والتحكم بالمشاعر</div>
                                    <div class="cd-related-course-price">850 ج.م</div>
                                </div>
                            </a>
                        </div>
                        <div class="cd-sidebar-card" data-aos="fade-up">
                            <h3 class="cd-sidebar-title">متطلبات الدورة</h3>
                            <ul style="list-style:none;padding:0;margin:0">
                                <li
                                    style="display:flex;gap:10px;padding:8px 0;font-size:14px;color:var(--color-text-gray);border-bottom:1px solid #f5f5f5">
                                    <i class="fas fa-dot-circle"
                                        style="color:var(--color-primary);margin-top:3px;flex-shrink:0"></i>لا يوجد
                                    متطلبات مسبقة
                                </li>
                                <li
                                    style="display:flex;gap:10px;padding:8px 0;font-size:14px;color:var(--color-text-gray);border-bottom:1px solid #f5f5f5">
                                    <i class="fas fa-dot-circle"
                                        style="color:var(--color-primary);margin-top:3px;flex-shrink:0"></i>الرغبة في
                                    التطوير والتغيير
                                </li>
                                <li
                                    style="display:flex;gap:10px;padding:8px 0;font-size:14px;color:var(--color-text-gray)">
                                    <i class="fas fa-dot-circle"
                                        style="color:var(--color-primary);margin-top:3px;flex-shrink:0"></i>الالتزام
                                    بتطبيق التمارين العملية
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Payment Modal -->
    <div class="pay-modal-overlay" id="payModal">
        <div class="pay-modal">
            <button class="pay-modal-close" onclick="closePayModal()"><i class="fas fa-times"></i></button>
            <h3>إتمام الدفع</h3>
            <p class="pay-modal-sub">دورة: <span id="pay-modal-course-name">دورة تطوير الذات الشاملة</span></p>

            <p
                style="font-size:11px;font-weight:700;color:#888;text-transform:uppercase;letter-spacing:.5px;margin-bottom:8px">
                طريقة الدفع</p>
            <div class="pay-methods">
                <div class="pay-method active" onclick="selectMethod(this)">
                    <i class="fas fa-credit-card"></i>بطاقة بنكية
                </div>
                <div class="pay-method" onclick="selectMethod(this)">
                    <i class="fas fa-mobile-alt"></i>محفظة إلكترونية
                </div>
                <div class="pay-method" onclick="selectMethod(this)">
                    <i class="fas fa-university"></i>تحويل بنكي
                </div>
            </div>

            <div class="pay-f-group">
                <label class="pay-f-label"><i class="fas fa-user"></i> الاسم الكامل</label>
                <input type="text" class="pay-f-input" placeholder="محمد أحمد">
            </div>
            <div class="pay-f-group">
                <label class="pay-f-label"><i class="fas fa-credit-card"></i> رقم البطاقة</label>
                <input type="text" class="pay-f-input" placeholder="0000 0000 0000 0000" dir="ltr" maxlength="19"
                    id="card-number-input">
            </div>
            <div class="pay-f-row">
                <div class="pay-f-group">
                    <label class="pay-f-label"><i class="fas fa-calendar"></i> تاريخ الانتهاء</label>
                    <input type="text" class="pay-f-input" placeholder="MM / YY" dir="ltr" maxlength="7">
                </div>
                <div class="pay-f-group">
                    <label class="pay-f-label"><i class="fas fa-lock"></i> CVV</label>
                    <input type="text" class="pay-f-input" placeholder="000" dir="ltr" maxlength="3">
                </div>
            </div>

            <div class="pay-total-row">
                <span>المبلغ الإجمالي</span>
                <span id="pay-modal-price">1200 ج.م</span>
            </div>

            <button class="pay-submit-btn" onclick="submitPayment()">
                <i class="fas fa-lock"></i> ادفع الآن
            </button>
            <p class="pay-secure-note"><i class="fas fa-shield-alt"></i> الدفع آمن ومشفر بالكامل</p>
        </div>
    </div>
@endsection

@section('scripts')
<script>
function openPayModal() {
    document.getElementById('payModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closePayModal() {
    document.getElementById('payModal').style.display = 'none';
    document.body.style.overflow = '';
}

function selectMethod(el) {
    document.querySelectorAll('.pay-method').forEach(m => m.classList.remove('active'));
    el.classList.add('active');
}

function submitPayment() {
    alert('تم الدفع بنجاح!');
    closePayModal();
}

document.getElementById('payModal').addEventListener('click', function(e) {
    if (e.target === this) { closePayModal(); }
});
</script>
@endsection
