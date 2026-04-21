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
                    <a href="{{ route('home') }}"><i class="fas fa-home"></i> الرئيسية</a>
                    <i class="fas fa-chevron-left"></i>
                    <a href="{{ route('training-courses') }}">الدورات</a>
                    <i class="fas fa-chevron-left"></i>
                    <span>{{ $course->trans('name') }}</span>
                </div>
                <div class="cd-hero-grid">
                    <!-- Info -->
                    <div class="cd-hero-info" data-aos="fade-right">
                        <div class="cd-category-badge">
                            <i class="fas fa-graduation-cap"></i>
                            <span>{{ $course->trainingCourseCategory?->name }}</span>
                        </div>
                        <h1 class="cd-title">{{ $course->trans('name') }}</h1>
                        <p class="cd-desc">{{ $course->trans('short_description') }}</p>
                        <div class="cd-meta-row">
                            @if($course->rating)
                                <div class="cd-meta-item">
                                    <i class="fas fa-star"></i>
                                    <span>{{ $course->rating }}</span>
                                    <span class="cd-meta-label">({{ $course->reviews_count }} تقييم)</span>
                                </div>
                            @endif
                            @if($course->enrolled_students_count)
                                <div class="cd-meta-item"><i class="fas fa-users"></i><span>+{{ $course->enrolled_students_count }} طالب</span></div>
                            @endif
                            @if($course->duration_hours)
                                <div class="cd-meta-item"><i class="fas fa-clock"></i><span>{{ $course->duration_hours }} ساعة</span></div>
                            @endif
                        </div>
                        @if($course->instructor_name)
                        <div class="cd-instructor-row">
                            @if($course->instructor_image)
                                <img src="{{ Storage::url($course->instructor_image) }}" alt="{{ $course->instructor_name }}" class="cd-instructor-img">
                            @endif
                            <div>
                                <span class="cd-instructor-label">المدرب</span>
                                <span class="cd-instructor-name">{{ $course->instructor_name }}</span>
                            </div>
                        </div>
                        @endif
                    </div>
                    <!-- Enroll Card -->
                    <div class="cd-enroll-card" data-aos="fade-left">
                        @if($course->image)
                            <img src="{{ Storage::url($course->image) }}" alt="{{ $course->trans('name') }}" class="cd-course-thumb">
                        @endif
                        <div class="cd-card-body">
                            <div class="cd-price-wrap">
                                @if($course->discount_price)
                                    <span class="cd-new-price">{{ $course->discount_price }} ج.م</span>
                                    <span class="cd-old-price">{{ $course->price }} ج.م</span>
                                @else
                                    <span class="cd-new-price">{{ $course->price }} ج.م</span>
                                @endif
                            </div>
                            <button class="cd-pay-btn" onclick="openPayModal()">
                                <i class="fas fa-credit-card"></i> ادفع والتحق بالدورة
                            </button>
                            <p class="cd-guarantee"><i class="fas fa-shield-alt"></i> ضمان استرداد المبلغ خلال 7 أيام</p>
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
                            <h2 class="cd-section-title"><i class="fas fa-check-circle"></i>وصف الدورة</h2>
                            <div style="color: #000">{!! $course->description !!}</div>
                        </div>

                        <!-- Instructor -->
                        @if($course->instructor_name)
                        <div class="cd-section-card" data-aos="fade-up">
                            <h2 class="cd-section-title"><i class="fas fa-chalkboard-teacher"></i>المدرب</h2>
                            <div class="cd-instructor-card">
                                @if($course->instructor_image)
                                    <img src="{{ Storage::url($course->instructor_image) }}" alt="{{ $course->instructor_name }}">
                                @endif
                                <div>
                                    <h3>{{ $course->instructor_name }}</h3>
                                    <p class="cd-inst-title">{{ $course->instructor_title }}</p>
                                    <div class="cd-inst-stats">
                                        @if($course->rating)
                                            <span class="cd-inst-stat"><i class="fas fa-star"></i> {{ $course->rating }} تقييم</span>
                                        @endif
                                        @if($course->enrolled_students_count)
                                            <span class="cd-inst-stat"><i class="fas fa-users"></i> +{{ $course->enrolled_students_count }} طالب</span>
                                        @endif
                                    </div>
                                    <p>{{ $course->instructor_bio }}</p>
                                </div>
                            </div>
                        </div>
                        @endif

                        <!-- Reviews -->
                        <div class="cd-section-card" data-aos="fade-up">
                            <h2 class="cd-section-title"><i class="fas fa-star"></i>تقييمات الطلاب</h2>
                            <div class="cd-rating-summary">
                                <div class="cd-rating-big">
                                    <div class="num">{{ $course->rating ?? '0' }}</div>
                                    <div class="stars">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= $course->rating)
                                                <i class="fas fa-star"></i>
                                            @elseif($i - 0.5 <= $course->rating)
                                                <i class="fas fa-star-half-alt"></i>
                                            @else
                                                <i class="far fa-star"></i>
                                            @endif
                                        @endfor
                                    </div>
                                    <div class="total">{{ $course->reviews_count ?? 0 }} تقييم</div>
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
                            @foreach($course->reviews as $review)
                            <div class="cd-review-card">
                                <div class="cd-review-top">
                                    @if($review->reviewer_image)
                                        <img src="{{ Storage::url($review->reviewer_image) }}" alt="{{ $review->reviewer_name }}">
                                    @endif
                                    <div>
                                        <div class="cd-review-name">{{ $review->reviewer_name }}</div>
                                        <div class="cd-review-stars">
                                            @for($i = 1; $i <= 5; $i++)
                                                @if($i <= $review->rating)
                                                    <i class="fas fa-star"></i>
                                                @elseif($i - 0.5 <= $review->rating)
                                                    <i class="fas fa-star-half-alt"></i>
                                                @else
                                                    <i class="far fa-star"></i>
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                    <span class="cd-review-date">{{ $review->review_date }}</span>
                                </div>
                                <p class="cd-review-text">{{ $review->review }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div>
                        <div class="cd-sidebar-card" data-aos="fade-up">
                            <h3 class="cd-sidebar-title">دورات مشابهة</h3>
                            @foreach($relatedCourses as $related)
                            <a href="{{ route('course-details', $related->id) }}" class="cd-related-course">
                                @if($related->image)
                                    <img src="{{ Storage::url($related->image) }}" alt="{{ $related->name }}">
                                @endif
                                <div>
                                    <div class="cd-related-course-title">{{ $related->name }}</div>
                                    <div class="cd-related-course-price">{{ $related->discount_price ?? $related->price }} ج.م</div>
                                </div>
                            </a>
                            @endforeach
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
                <input type="text" class="pay-f-input" placeholder="محمد أحمد" id="card-name-input">
            </div>
            <div class="pay-f-group">
                <label class="pay-f-label"><i class="fas fa-credit-card"></i> رقم البطاقة</label>
                <input type="text" class="pay-f-input" placeholder="0000 0000 0000 0000" dir="ltr" maxlength="19"
                    id="card-number-input">
            </div>
            <div class="pay-f-row">
                <div class="pay-f-group">
                    <label class="pay-f-label"><i class="fas fa-calendar"></i> تاريخ الانتهاء</label>
                    <input type="text" class="pay-f-input" placeholder="MM / YY" dir="ltr" maxlength="7" id="card-expiry-input">
                </div>
                <div class="pay-f-group">
                    <label class="pay-f-label"><i class="fas fa-lock"></i> CVV</label>
                    <input type="text" class="pay-f-input" placeholder="000" dir="ltr" maxlength="3" id="card-cvv-input">
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
    @auth('client')
        document.getElementById('payModal').style.display = 'flex';
        document.body.style.overflow = 'hidden';
    @else
        window.location.href = '{{ route('login') }}';
    @endauth
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
    const cardName   = document.getElementById('card-name-input').value.trim();
    const cardNumber = document.getElementById('card-number-input').value.replace(/\s/g, '');
    const cardExpiry = document.getElementById('card-expiry-input').value.trim();
    const cardCvv    = document.getElementById('card-cvv-input').value.trim();

    if (! cardName) {
        return alert('يرجى إدخال الاسم الكامل.');
    }
    if (cardNumber.length < 16) {
        return alert('يرجى إدخال رقم بطاقة صحيح (16 رقم).');
    }
    if (! /^\d{2}\s?\/\s?\d{2}$/.test(cardExpiry)) {
        return alert('يرجى إدخال تاريخ انتهاء صحيح (MM / YY).');
    }
    if (cardCvv.length < 3) {
        return alert('يرجى إدخال رمز CVV الصحيح.');
    }

    const btn = document.querySelector('.pay-submit-btn');
    btn.disabled = true;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> جاري المعالجة...';

    fetch('{{ route('courses.enroll', $course->id) }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Content-Type': 'application/json',
            'Accept': 'application/json',
        },
    })
    .then(res => res.json())
    .then(data => {
        closePayModal();
        if (data.redirect_url) {
            window.location.href = data.redirect_url;
        } else {
            alert(data.message);
        }
    })
    .catch(() => {
        btn.disabled = false;
        btn.innerHTML = '<i class="fas fa-lock"></i> ادفع الآن';
        alert('حدث خطأ، يرجى المحاولة مرة أخرى.');
    });
}

document.getElementById('payModal').addEventListener('click', function(e) {
    if (e.target === this) { closePayModal(); }
});
</script>
@endsection
