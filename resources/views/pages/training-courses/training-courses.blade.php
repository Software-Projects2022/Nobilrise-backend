@extends('layouts.app')
@section('title', 'Training Courses')
@section('styles')
<style>
    .modal-overlay { display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.6); z-index: 9999; justify-content: center; align-items: center; }
    .modal-overlay.active { display: flex; }
</style>
@endsection
@section('content')
  <main>
     <!-- ========================== Page Hero ========================== -->
        <section class="page-hero training_coursesh">

            <div class="container">

                <div class="hero-content">

                    <!-- Breadcrumb -->
                    <div class="breadcrumb">

                        <a href="{{ route('home') }}">
                            <i class="fas fa-home"></i>
                            {{ __('common.home') }}
                        </a>

                        <i class="fas {{ app()->getLocale() == 'ar' ? 'fa-chevron-left' : 'fa-chevron-right' }}"></i>

                        <span>{{ __('nav.courses') }}</span>

                    </div>

                    <!-- Title -->
                    <h1 class="page-title">
                        {{ __('courses.hero_title') }}
                        <span class="highlight">
                            {{ __('courses.hero_highlight') }}
                        </span>
                    </h1>

                    <!-- Description -->
                    <p class="page-description">
                        {{ __('courses.hero_desc') }}
                    </p>

                    <!-- Tabs -->
                    <div class="hero-tabs">

                        <a href="#courses" class="hero-tab active" id="tab-courses">
                            <i class="fas fa-graduation-cap"></i>
                            {{ __('courses.tab_courses') }}
                        </a>

                        <a href="#sessions" class="hero-tab" id="tab-sessions">
                            <i class="fas fa-brain"></i>
                            {{ __('sessions.tab_sessions') }}
                        </a>

                    </div>

                </div>

            </div>

        </section>
       <!-- ========================== COURSES SECTION ========================== -->
        <section class="courses-section" id="courses">

            <div class="container">

                <div class="section-header" data-aos="fade-up">

                    <div class="section-badge">
                        <i class="fas fa-graduation-cap"></i>
                        <span>{{ __('courses.badge') }}</span>
                    </div>

                    <h2 class="section-title">
                        {{ __('courses.title') }}
                        <span class="highlight">{{ __('courses.title_highlight') }}</span>
                    </h2>

                </div>

                <!-- Filters -->
                <div class="course-filters" data-aos="fade-up" data-aos-delay="100">

                    <button class="filter-btn active" data-filter="all">
                        {{ __('common.all') }}
                    </button>

                    @foreach($categories as $category)
                        <button class="filter-btn" data-filter="{{ $category->trans('name') }}">
                            {{ $category->trans('name') }}
                        </button>
                    @endforeach

                </div>

                <!-- Courses -->
                <div class="courses-grid">

                    @foreach($courses as $index => $course)

                    <div class="course-card"
                        data-aos="fade-up"
                        data-aos-delay="{{ ($index % 3 + 1) * 100 }}"
                        data-category="{{ $course->trainingCourseCategory?->trans('name') }}">

                        <div class="course-image">

                            @if($course->image)
                                <img src="{{ Storage::url($course->image) }}"
                                    alt="{{ $course->trans('name') }}">
                            @endif

                            <div class="course-badge">
                                <div class="course-category">
                                    <i class="fas fa-graduation-cap"></i>
                                    <span>{{ $course->trainingCourseCategory?->trans('name') }}</span>
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

                                <div style="display:flex;gap:8px;align-items:center;flex-wrap:wrap;">
                                    <a href="{{ route('course-details', $course->id) }}" class="course-btn">
                                        {{ __('common.details') }}
                                        <i class="fas {{ app()->getLocale() == 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' }}"></i>
                                    </a>
                                </div>

                            </div>

                        </div>

                    </div>

                    @endforeach

                </div>

            </div>

        </section>
        <!-- ========================== SESSIONS SECTION ========================== -->
        <section class="sessions-page-section" id="sessions">

            <div class="container">

                <div class="section-header" data-aos="fade-up">

                    <div class="section-badge"
                        style="background: rgba(197,167,115,0.1); border: 1px solid rgba(197,167,115,0.3); color: #c5a773;">

                        <i class="fas fa-brain"></i>
                        <span>{{ __('sessions.badge') }}</span>

                    </div>

                    <h2 class="section-title">
                        {{ __('sessions.title') }}
                        <span class="highlight">{{ __('sessions.title_highlight') }}</span>
                    </h2>

                    <p class="section-description" style="color: rgba(0, 0, 0, 0.7);">
                        {{ __('sessions.desc') }}
                    </p>

                </div>

                <div class="sessions-grid">

                    @foreach($sessions as $index => $session)

                    <div class="session-card"
                        data-aos="fade-up"
                        data-aos-delay="{{ ($index % 3 + 1) * 100 }}">

                        <div class="session-image">

                            @if($session->image)
                                <img src="{{ Storage::url($session->image) }}"
                                    alt="{{ $session->trans('name') }}">
                            @endif

                            <div class="session-type-badge">
                                <i class="fas fa-brain"></i>
                                {{ $session->psychologicalSessionCategory?->trans('name') }}
                            </div>

                        </div>

                        <div class="session-content">

                            <h3 class="session-title">
                                {{ $session->trans('name') }}
                            </h3>

                            <p class="session-desc">
                                {{ $session->trans('short_description') }}
                            </p>

                            <div class="session-meta-row">

                                @if($session->duration)
                                    <span>
                                        <i class="fas fa-clock"></i>
                                        {{ $session->duration }} {{ __('sessions.minutes') }}
                                    </span>
                                @endif

                                @if($session->people_count)
                                    <span>
                                        <i class="fas fa-users"></i>
                                        {{ $session->people_count }} {{ __('sessions.people') }}
                                    </span>
                                @endif

                            </div>

                            <div class="session-footer">

                                <div class="session-price">

                                    @if($session->discount_price)
                                        <span class="s-old-price">
                                            {{ $session->price }} {{ __('common.currency') }}
                                        </span>
                                        <span class="s-new-price">
                                            {{ $session->discount_price }} {{ __('common.currency') }}
                                        </span>
                                    @else
                                        <span class="s-new-price">
                                            {{ $session->price }} {{ __('common.currency') }}
                                        </span>
                                    @endif

                                </div>

                                <a href="#"
                                class="session-book-btn open-modal"
                                data-session="{{ $session->trans('name') }}">

                                    {{ __('common.book_now') }}
                                    <i class="fas {{ app()->getLocale() == 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' }}"></i>

                                </a>

                            </div>

                        </div>

                    </div>

                    @endforeach

                </div>

            </div>

        </section>
        <!-- ========================== Course Payment Modal ========================== -->
        <div class="modal-overlay" id="coursePayModal">
            <div class="booking-modal">
                <div class="modal-close" id="closeCourseModal"><i class="fas fa-times"></i></div>
                <div class="modal-header-box">
                    <h3>تأكيد التسجيل في الدورة</h3>
                    <p id="courseModalName"></p>
                </div>

                <div style="background:rgba(197,167,115,0.08);border:1px solid rgba(197,167,115,0.3);border-radius:12px;padding:16px;margin-bottom:20px;text-align:center;">
                    <i class="fas fa-money-bill-wave" style="font-size:32px;color:#c5a773;margin-bottom:8px;display:block;"></i>
                    <p style="font-size:15px;font-weight:700;color:#1a1a1a;margin-bottom:4px;">طريقة الدفع: كاش</p>
                    <p style="font-size:13px;color:#666;">سيتم الدفع نقداً عند الحضور للمقر</p>
                </div>

                <div style="display:flex;justify-content:space-between;padding:12px 0;border-top:1px solid #f0f0f0;font-weight:700;font-size:16px;">
                    <span>المبلغ الإجمالي</span>
                    <span id="courseModalPrice" style="color:#c5a773;"></span>
                </div>

                <button class="submit-btn-modal" id="coursePayBtn">
                    <i class="fas fa-check-circle"></i> تأكيد التسجيل
                </button>
                <p style="text-align:center;font-size:12px;color:#999;margin-top:10px;">
                    <i class="fas fa-shield-alt"></i> سيتم تأكيد تسجيلك فور مراجعة الإدارة
                </p>
            </div>
        </div>
        <!-- ========================== Booking Modal ========================== --></div>
        <div class="modal-overlay" id="bookingModal">
            <div class="booking-modal">
                <div class="modal-close" id="closeModal"><i class="fas fa-times"></i></div>
                <div class="modal-header-box">
                    <h3>احجز جلستك النفسية</h3>
                    <p id="modalSessionType">جلسة فردية</p>
                </div>
                <div class="form-row-two">
                    <div class="form-group">
                        <label class="form-label"><i class="fas fa-user"></i> الاسم الكامل</label>
                        <input type="text" class="form-ctrl" placeholder="أدخل اسمك الكامل">
                    </div>
                    <div class="form-group">
                        <label class="form-label"><i class="fas fa-phone"></i> رقم الهاتف</label>
                        <input type="tel" class="form-ctrl" placeholder="01XX XXX XXXX" dir="ltr">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label"><i class="fas fa-envelope"></i> البريد الإلكتروني</label>
                    <input type="email" class="form-ctrl" placeholder="example@email.com" dir="ltr">
                </div>
                <div class="form-row-two">
                    <div class="form-group">
                        <label class="form-label"><i class="fas fa-calendar-alt"></i> تاريخ الجلسة</label>
                        <input type="date" class="form-ctrl">
                    </div>
                    <div class="form-group">
                        <label class="form-label"><i class="fas fa-user-md"></i> المعالج المفضل</label>
                        <div class="select-wrap">
                            <i class="fas fa-chevron-down sel-arrow"></i>
                            <select class="form-ctrl is-select">
                                <option value="">اختر المعالج</option>
                                <option value="any">أي معالج متاح</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label"><i class="fas fa-clock"></i> الوقت المناسب</label>
                    <div class="time-slots">
                        <div class="time-slot">9:00 ص</div>
                        <div class="time-slot">10:30 ص</div>
                        <div class="time-slot">12:00 م</div>
                        <div class="time-slot">2:00 م</div>
                        <div class="time-slot">4:00 م</div>
                        <div class="time-slot">6:00 م</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label"><i class="fas fa-comment-dots"></i> ملاحظات إضافية <span style="font-weight:400; color:#bbb; font-size:12px;">(اختياري)</span></label>
                    <textarea class="form-ctrl is-textarea" rows="3" placeholder="اكتب أي معلومات تريد مشاركتها مع المعالج..."></textarea>
                </div>
                <button class="submit-btn-modal" id="sessionSubmitBtn">
                    <i class="fas fa-calendar-check"></i> تأكيد الحجز
                </button>
            </div>
        </div>
    </main>
@section('scripts')
<script>
// ===== Course Payment Modal =====
var currentCourseId = null;

document.querySelectorAll('.open-course-modal').forEach(function(btn) {
    btn.addEventListener('click', function() {
        @auth('client')
            currentCourseId = this.dataset.courseId;
            document.getElementById('courseModalName').textContent = this.dataset.courseName;
            document.getElementById('courseModalPrice').textContent = this.dataset.coursePrice + ' ج.م';
            document.getElementById('coursePayModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        @else
            window.location.href = '{{ route("login") }}';
        @endauth
    });
});

document.getElementById('closeCourseModal').addEventListener('click', function() {
    document.getElementById('coursePayModal').classList.remove('active');
    document.body.style.overflow = '';
});

document.getElementById('coursePayModal').addEventListener('click', function(e) {
    if (e.target === this) { this.classList.remove('active'); document.body.style.overflow = ''; }
});

document.getElementById('coursePayBtn').addEventListener('click', function() {
    var btn = this;
    btn.disabled = true;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> جاري التسجيل...';

    fetch('/courses/' + currentCourseId + '/enroll', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Content-Type': 'application/json',
            'Accept': 'application/json',
        },
    })
    .then(function(res) { return res.json(); })
    .then(function(data) {
        document.getElementById('coursePayModal').classList.remove('active');
        document.body.style.overflow = '';
        alert(data.message);
        if (data.redirect_url) { window.location.href = data.redirect_url; }
        btn.disabled = false;
        btn.innerHTML = '<i class="fas fa-check-circle"></i> تأكيد التسجيل';
    })
    .catch(function() {
        alert('حدث خطأ، يرجى المحاولة مرة أخرى.');
        btn.disabled = false;
        btn.innerHTML = '<i class="fas fa-check-circle"></i> تأكيد التسجيل';
    });
});

// ===== Session Booking Modal =====
document.querySelectorAll('.open-modal').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        @auth('client')
            document.getElementById('modalSessionType').textContent = this.dataset.session || '';
            document.getElementById('bookingModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        @else
            window.location.href = '{{ route("login") }}';
        @endauth
    });
});

document.getElementById('closeModal').addEventListener('click', function() {
    document.getElementById('bookingModal').classList.remove('active');
    document.body.style.overflow = '';
});

document.getElementById('bookingModal').addEventListener('click', function(e) {
    if (e.target === this) { this.classList.remove('active'); document.body.style.overflow = ''; }
});

document.querySelectorAll('.time-slot').forEach(function(slot) {
    slot.addEventListener('click', function() {
        document.querySelectorAll('.time-slot').forEach(function(s) { s.classList.remove('selected'); });
        this.classList.add('selected');
    });
});

document.getElementById('sessionSubmitBtn').addEventListener('click', function() {
    var selected = document.querySelector('.time-slot.selected');
    if (!selected) { return alert('من فضلك اختر وقت الجلسة'); }

    var inputs = document.querySelectorAll('#bookingModal .form-ctrl');
    var name  = inputs[0].value.trim();
    var phone = inputs[1].value.trim();
    var email = inputs[2].value.trim();
    var date  = inputs[3].value;

    if (!name || !phone || !email || !date) {
        return alert('من فضلك ملّي جميع الحقول المطلوبة');
    }

    var btn = this;
    btn.disabled = true;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> جاري الحجز...';

    fetch('{{ route("bookings.store") }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Content-Type': 'application/json',
            'Accept': 'application/json',
        },
        body: JSON.stringify({
            name: name,
            phone: phone,
            email: email,
            date: date,
            time: selected.textContent.trim(),
            session_type: document.getElementById('modalSessionType').textContent,
            notes: document.querySelector('.is-textarea').value,
        }),
    })
    .then(function(res) { return res.json(); })
    .then(function(data) {
        document.getElementById('bookingModal').classList.remove('active');
        document.body.style.overflow = '';
        alert(data.message);
        btn.disabled = false;
        btn.innerHTML = '<i class="fas fa-calendar-check"></i> تأكيد الحجز';
    })
    .catch(function() {
        alert('حدث خطأ، يرجى المحاولة مرة أخرى');
        btn.disabled = false;
        btn.innerHTML = '<i class="fas fa-calendar-check"></i> تأكيد الحجز';
    });
});
</script>
@endsection

