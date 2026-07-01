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
                            <span>{{ $course->trainingCourseCategory?->trans('name') }}</span>
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
                                <i class="fas fa-check-circle"></i> سجّل الآن (كاش)
                            </button>
                            <p class="cd-guarantee"><i class="fas fa-money-bill-wave"></i> الدفع نقداً عند الحضور للمقر</p>
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
                        @if($canSeeReviews)
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
                                    <!-- <div class="cd-rating-bar-row"><span>5 ★</span>
                                        <div class="cd-bar-track">
                                            <div class="cd-bar-fill" style="width:75%"></div>
                                        </div><span>75%</span>
                                    </div> -->
                                    <!-- <div class="cd-rating-bar-row"><span>4 ★</span>
                                        <div class="cd-bar-track">
                                            <div class="cd-bar-fill" style="width:18%"></div>
                                        </div><span>18%</span>
                                    </div> -->
                                    <!-- <div class="cd-rating-bar-row"><span>3 ★</span>
                                        <div class="cd-bar-track">
                                            <div class="cd-bar-fill" style="width:5%"></div>
                                        </div><span>5%</span>
                                    </div> -->
                                    <!-- <div class="cd-rating-bar-row"><span>2 ★</span>
                                        <div class="cd-bar-track">
                                            <div class="cd-bar-fill" style="width:1%"></div>
                                        </div><span>1%</span>
                                    </div> -->
                                    <!-- <div class="cd-rating-bar-row"><span>1 ★</span>
                                        <div class="cd-bar-track">
                                            <div class="cd-bar-fill" style="width:1%"></div>
                                        </div><span>1%</span>
                                    </div> -->
                                </div>
                            </div>
                            @foreach($course->reviews as $review)
                            <div class="cd-review-card">
                                <div class="cd-review-top">
                                    @if($review->reviewer_image)
                                        <img src="{{ Storage::url($review->reviewer_image) }}" alt="{{ $review->reviewer_name }}">
                                    @endif
                                    <!-- <div>
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
                                    </div> -->
                                    <!-- <span class="cd-review-date">{{ $review->review_date }}</span> -->
                                </div>
                                <!-- <p class="cd-review-text">{{ $review->review }}</p> -->
                            </div>
                            @endforeach

                        </div>
                        @endif
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
            <h3>تأكيد التسجيل في الدورة</h3>
            <p class="pay-modal-sub">دورة: <span id="pay-modal-course-name">{{ $course->trans('name') }}</span></p>

            <div style="background:rgba(197,167,115,0.08);border:1px solid rgba(197,167,115,0.3);border-radius:12px;padding:20px;margin:16px 0;text-align:center;">
                <i class="fas fa-money-bill-wave" style="font-size:36px;color:#c5a773;margin-bottom:10px;display:block;"></i>
                <p style="font-size:15px;font-weight:700;color:#1a1a1a;margin-bottom:4px;">طريقة الدفع: كاش</p>
                <p style="font-size:13px;color:#666;margin:0;">سيتم الدفع نقداً عند الحضور للمقر</p>
            </div>

            <div class="pay-total-row">
                <span>المبلغ الإجمالي</span>
                <span id="pay-modal-price">{{ $course->discount_price ?? $course->price }} ج.م</span>
            </div>

            <button class="pay-submit-btn" onclick="submitPayment()">
                <i class="fas fa-check-circle"></i> تأكيد التسجيل
            </button>
            <p class="pay-secure-note"><i class="fas fa-shield-alt"></i> سيتم تأكيد تسجيلك فور مراجعة الإدارة</p>
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
    const btn = document.querySelector('.pay-submit-btn');
    btn.disabled = true;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> جاري التسجيل...';

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
        btn.disabled = false;
        btn.innerHTML = '<i class="fas fa-check-circle"></i> تأكيد التسجيل';
    })
    .catch(() => {
        btn.disabled = false;
        btn.innerHTML = '<i class="fas fa-check-circle"></i> تأكيد التسجيل';
        alert('حدث خطأ، يرجى المحاولة مرة أخرى.');
    });
}

document.getElementById('payModal').addEventListener('click', function(e) {
    if (e.target === this) { closePayModal(); }
});
</script>
@endsection
