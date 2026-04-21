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
                        <button class="filter-btn" data-filter="{{ $category->name }}">
                            {{ $category->name }}
                        </button>
                    @endforeach

                </div>

                <!-- Courses -->
                <div class="courses-grid">

                    @foreach($courses as $index => $course)

                    <div class="course-card"
                        data-aos="fade-up"
                        data-aos-delay="{{ ($index % 3 + 1) * 100 }}"
                        data-category="{{ $course->trainingCourseCategory?->name }}">

                        <div class="course-image">

                            @if($course->image)
                                <img src="{{ Storage::url($course->image) }}"
                                    alt="{{ $course->trans('name') }}">
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
                                    <i class="fas {{ app()->getLocale() == 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' }}"></i>
                                </a>

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
                                {{ $session->psychologicalSessionCategory?->name }}
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
            </main>

    <!-- ========================== Booking Modal ========================== -->
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
            <input class="form-group">
                <label class="form-label"><i class="fas fa-envelope"></i> البريد الإلكتروني</label>
                <input type="email" class="form-ctrl" placeholder="example@email.com" dir="ltr">
            </input>
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
            <button class="submit-btn-modal">
                <i class="fas fa-calendar-check"></i> تأكيد الحجز
            </button>
        </div>
    </div>

@section('scripts')
<script>
$('.submit-btn-modal').click(function() {
    const selected = $('.time-slot.selected').text();
    if (!selected) { alert('من فضلك اختر وقت الجلسة'); return; }

    $.ajax({
        url: '{{ route("bookings.store") }}',
        method: 'POST',
        data: {
            _token: '{{ csrf_token() }}',
            name: $('.form-ctrl').eq(0).val(),
            phone: $('.form-ctrl').eq(1).val(),
            email: $('.form-ctrl').eq(2).val(),
            date: $('.form-ctrl').eq(3).val(),
            time: selected,
            session_type: $('#modalSessionType').text(),
            notes: $('.is-textarea').val(),
        },
        success: function(res) {
            alert(res.message);
            $('#bookingModal').removeClass('active');
            $('body').css('overflow', '');
        },
        error: function() {
            alert('حدث خطأ، من فضلك تأكد من ملء جميع الحقول');
        }
    });
});
</script>
@endsection
