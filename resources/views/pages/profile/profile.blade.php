@extends('layouts.app')
    @section('title', 'Profile')
    @section('styles')
        <style>
            .p-tab-content {
                display: none;
            }

            .p-tab-content.active {
                display: block;
            }

            .p-overlay {
                display: none;
            }

            .p-overlay.open {
                display: flex;
            }
        </style>
    @endsection
    @section('content')

        <!-- ========================== main ========================== -->
      <main class="profile-page">
        <div class="container">

            @if(session('success'))
                <div style="background:rgba(76,175,80,0.12);border:1px solid #4caf50;border-radius:12px;padding:14px 20px;margin-bottom:20px;color:#2e7d32;display:flex;align-items:center;gap:10px;">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                </div>
            @endif

            @if(session('review_success'))
                <div style="background:rgba(76,175,80,0.12);border:1px solid #4caf50;border-radius:12px;padding:14px 20px;margin-bottom:20px;color:#2e7d32;display:flex;align-items:center;gap:10px;">
                    <i class="fas fa-star"></i> {{ session('review_success') }}
                </div>
            @endif

            <!-- Top Bar -->
            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:24px;">
                <h2 style="font-size:22px;font-weight:900;color:#1a1a1a;margin:0;">
                    {{ __('profile.title') }}
                </h2>

                <button class="p-edit-btn" onclick="openModal('main')">
                    <i class="fas fa-pen"></i> {{ __('profile.edit_data') }}
                </button>
            </div>

            <div class="profile-layout">

                <!-- ================= SIDEBAR ================= -->
                <div class="p-sidebar">

                    <!-- Avatar -->
                    <div class="p-card p-avatar-card">
                        <form method="POST" action="{{ route('profile.avatar') }}" enctype="multipart/form-data" id="avatar-form">
                            @csrf
                            <div class="p-avatar-wrap">
                                @if($client->avatar)
                                    <div class="p-avatar" id="avatarEl" style="background-image:url('{{ Storage::url($client->avatar) }}');background-size:cover;background-position:center;"></div>
                                @else
                                    <div class="p-avatar" id="avatarEl">
                                        {{ strtoupper(substr($client->name, 0, 2)) }}
                                    </div>
                                @endif
                                <label class="p-avatar-edit" for="avatarInput" style="cursor:pointer;">
                                    <i class="fas fa-camera"></i>
                                </label>
                                <input type="file" id="avatarInput" name="avatar" accept="image/*" style="display:none"
                                    onchange="handleAvatar(event)">
                            </div>
                        </form>

                        <div class="p-name">
                            {{ strtoupper($client->name) }}
                        </div>
                        </form>

                        <div class="p-title">
                            {{ __('profile.registered_on_platform') }}
                        </div>

                        <div class="p-stats">
                            <div class="p-stat">
                                <div class="p-stat-num">{{ $client->trainingCourses->count() }}</div>
                                <div class="p-stat-lbl">{{ __('profile.courses') }}</div>
                            </div>

                            <div class="p-stat">
                                <div class="p-stat-num">
                                    {{ $client->trainingCourses->where('pivot.status','completed')->count() }}
                                </div>
                                <div class="p-stat-lbl">{{ __('profile.completed') }}</div>
                            </div>

                            <div class="p-stat">
                                <div class="p-stat-num">{{ $client->bookings->count() }}</div>
                                <div class="p-stat-lbl">{{ __('profile.sessions') }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact -->
                    <div class="p-card">
                        <div class="p-card-inner">

                            <div class="p-card-header">
                                <span class="p-card-title">{{ __('profile.contact_info') }}</span>

                                <button class="p-edit-btn" onclick="openModal('contact')">
                                    <i class="fas fa-pen"></i> {{ __('profile.edit') }}
                                </button>
                            </div>

                            <div class="p-info-row">
                                <span class="p-info-label"><i class="fas fa-envelope"></i> {{ __('profile.email') }}</span>
                                <span class="p-info-val">{{ $client->email }}</span>
                            </div>

                            <div class="p-info-row">
                                <span class="p-info-label"><i class="fas fa-phone"></i> {{ __('profile.phone') }}</span>
                                <span class="p-info-val">{{ $client->phone ?? __('profile.no_phone') }}</span>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- ================= MAIN ================= -->
                <div class="p-main">

                    <!-- Tabs -->
                    <div class="p-card">
                        <div class="p-tabs">

                            <button class="p-tab active" id="btn-courses" onclick="profileSwitchTab(this,'courses')">
                                <i class="fas fa-graduation-cap"></i>
                                {{ __('profile.courses_tab') }}
                            </button>

                            <button class="p-tab" id="btn-sessions" onclick="profileSwitchTab(this,'sessions')">
                                <i class="fas fa-brain"></i>
                                {{ __('profile.sessions_tab') }}
                            </button>

                        </div>
                    </div>

                    <script>
                        function profileSwitchTab(btn, name) {
                            document.querySelectorAll('.p-tab').forEach(function(t) { t.classList.remove('active'); });
                            document.querySelectorAll('.p-tab-content').forEach(function(c) {
                                c.style.display = 'none';
                            });
                            btn.classList.add('active');
                            var target = document.getElementById('tab-' + name);
                            if (target) { target.style.display = 'flex'; }
                        }
                        document.addEventListener('DOMContentLoaded', function() {
                            document.querySelectorAll('.p-tab-content').forEach(function(c) { c.style.display = 'none'; });
                            var first = document.getElementById('tab-courses');
                            if (first) { first.style.display = 'flex'; }
                        });
                    </script>

                    <!-- ================= COURSES ================= -->
                    <div class="p-tab-content active" id="tab-courses">

                        @forelse($client->trainingCourses as $course)

                            <div class="p-course-card">

                                <div class="p-course-ico">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>

                                <div class="p-course-body">

                                    <div class="p-course-top">
                                        <div class="p-course-name">{{ $course->name }}</div>

                                        <span class="p-badge" style="background: {{ match($course->pivot->status ?? 'pending') { 'active' => 'rgba(76,175,80,0.15)', 'completed' => 'rgba(33,150,243,0.15)', 'cancelled' => 'rgba(244,67,54,0.15)', default => 'rgba(255,152,0,0.15)' } }}; color: {{ match($course->pivot->status ?? 'pending') { 'active' => '#2e7d32', 'completed' => '#1565c0', 'cancelled' => '#c62828', default => '#e65100' } }}">
                                            {{ match($course->pivot->status ?? 'pending') {
                                                'active'    => 'مقبولة',
                                                'completed' => 'مكتملة',
                                                'cancelled' => 'ملغية',
                                                default     => 'قيد المراجعة',
                                            } }}
                                        </span>
                                    </div>

                                    <div class="p-course-meta">
                                        {{ __('profile.instructor') }}: {{ $course->instructor_name }}
                                    </div>

                                    <div class="p-prog-row">
                                        <span>
                                            {{ __('profile.registration_date') }}:
                                            {{ $course->pivot->created_at->format('d/m/Y') }}
                                        </span>

                                        @if(($course->pivot->status ?? '') === 'completed')
                                            <div style="display:flex;gap:8px;align-items:center;flex-wrap:wrap;">
                                                <a href="{{ route('certificate.show', $course->pivot->id) }}"
                                                target="_blank"
                                                style="display:inline-flex;align-items:center;gap:6px;background:linear-gradient(90deg,#b07000,#e8a820);color:#fff;padding:5px 14px;border-radius:20px;font-size:.8rem;font-weight:700;text-decoration:none;">
                                                    <i class="fas fa-certificate"></i> عرض الشهادة
                                                </a>

                                                @php
                                                    $hasReviewed = \App\Models\CourseReview::where('training_course_id', $course->id)
                                                        ->where('reviewer_name', $client->name)
                                                        ->exists();
                                                @endphp

                                                @if(!$hasReviewed)
                                                    <button type="button"
                                                        onclick="openReviewModal({{ $course->id }}, '{{ addslashes($course->name) }}')"
                                                        style="display:inline-flex;align-items:center;gap:6px;background:rgba(197,167,115,0.15);border:1px solid #c5a773;color:#a88b5a;padding:5px 14px;border-radius:20px;font-size:.8rem;font-weight:700;cursor:pointer;">
                                                        <i class="fas fa-star"></i> قيّم الدورة
                                                    </button>
                                                @else
                                                    <span style="font-size:.8rem;color:#4caf50;display:flex;align-items:center;gap:4px;">
                                                        <i class="fas fa-check-circle"></i> تم التقييم
                                                    </span>
                                                @endif
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            </div>

                        @empty
                            <p style="text-align:center;color:#888;padding:30px 0">
                                {{ __('profile.no_courses') }}
                            </p>
                        @endforelse

                    </div>

                    <!-- ================= SESSIONS ================= -->
                    <div class="p-tab-content" id="tab-sessions">

                        @forelse($client->bookings as $booking)

                            <div class="p-session-row">
                                <div class="p-s-dot"></div>

                                <div class="p-s-info">
                                    <div class="p-s-title">{{ $booking->session_type }}</div>

                                    <div class="p-s-date">
                                        <i class="fas fa-calendar-alt"></i>
                                        {{ \Carbon\Carbon::parse($booking->date)->format('d/m/Y') }}
                                        · {{ $booking->time }}
                                    </div>
                                </div>

                                <span class="p-s-badge" style="background: {{ match($booking->status ?? 'pending') { 'accepted' => 'rgba(76,175,80,0.15)', 'rejected' => 'rgba(244,67,54,0.15)', default => 'rgba(255,152,0,0.15)' } }}; color: {{ match($booking->status ?? 'pending') { 'accepted' => '#2e7d32', 'rejected' => '#c62828', default => '#e65100' } }}">
                                    {{ match($booking->status ?? 'pending') { 'accepted' => 'مقبولة', 'rejected' => 'مرفوضة', default => 'قيد الانتظار' } }}
                                </span>
                            </div>

                        @empty
                            <p style="text-align:center;color:#888;padding:30px 0">
                                {{ __('profile.no_sessions') }}
                            </p>
                        @endforelse

                    </div>

                </div>
            </div>
        </div>
        <!-- Modal: Edit Main -->
        <div class="p-overlay" id="modal-main" onclick="if(event.target===this)closeModal('main')">
            <div class="p-modal">
                <div class="p-modal-head">
                    <h3>{{ __('profile.edit_data') }}</h3>
                    <button class="p-modal-close" onclick="closeModal('main')"><i class="fas fa-times"></i></button>
                </div>
                <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="p-modal-body">
                        <div class="p-field">
                            <label>{{ __('profile.full_name') }}</label>
                            <input name="name" value="{{ $client->name }}" required />
                        </div>
                        <div class="p-field">
                            <label>{{ __('auth.email') }}</label>
                            <input type="email" name="email" value="{{ $client->email }}" required />
                        </div>
                        <div class="p-field">
                            <label>{{ __('profile.phone') }}</label>
                            <input name="phone" value="{{ $client->phone }}" />
                        </div>
                    </div>
                    <div class="p-modal-foot">
                        <button type="button" class="p-btn-cancel" onclick="closeModal('main')">{{ __('common.cancel') }}</button>
                        <button type="submit" class="p-btn-save">{{ __('common.save') }}</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Modal: Edit Contact -->
        <div class="p-overlay" id="modal-contact" onclick="if(event.target===this)closeModal('contact')">
            <div class="p-modal">
                <div class="p-modal-head">
                    <h3>{{ __('profile.contact_info') }}</h3>
                    <button class="p-modal-close" onclick="closeModal('contact')"><i class="fas fa-times"></i></button>
                </div>
                <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="p-modal-body">
                        <div class="p-field">
                            <label>{{ __('profile.full_name') }}</label>
                            <input type="text" name="name" value="{{ $client->name }}" required />
                        </div>
                        <div class="p-field">
                            <label>{{ __('auth.email') }}</label>
                            <input type="email" name="email" value="{{ $client->email }}" required />
                        </div>
                        <div class="p-field">
                            <label>{{ __('profile.phone') }}</label>
                            <input name="phone" value="{{ $client->phone }}" />
                        </div>
                    </div>
                    <div class="p-modal-foot">
                        <button type="button" class="p-btn-cancel" onclick="closeModal('contact')">{{ __('common.cancel') }}</button>
                        <button type="submit" class="p-btn-save">{{ __('common.save') }}</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="p-toast" id="toast"><i class="fas fa-check-circle"></i> {{ __('common.save') }}</div>

        {{-- Review Modal --}}
        <div class="p-overlay" id="modal-review" onclick="if(event.target===this)closeModal('review')">
            <div class="p-modal">
                <div class="p-modal-head">
                    <h3><i class="fas fa-star" style="color:#c5a773;margin-left:6px;"></i> تقييم الدورة</h3>
                    <button class="p-modal-close" onclick="closeModal('review')"><i class="fas fa-times"></i></button>
                </div>
                <form method="POST" id="review-form" action="">
                    @csrf
                    <div class="p-modal-body">
                        <p id="review-course-name" style="font-weight:700;color:#1a1a1a;margin-bottom:16px;font-size:15px;"></p>

                        @if(session('review_success'))
                            <div style="background:rgba(76,175,80,0.12);border:1px solid #4caf50;border-radius:10px;padding:12px;color:#2e7d32;margin-bottom:12px;font-size:13px;">
                                <i class="fas fa-check-circle"></i> {{ session('review_success') }}
                            </div>
                        @endif

                        <div class="p-field">
                            <label style="font-size:13px;font-weight:700;color:#555;display:block;margin-bottom:8px;">تقييمك بالنجوم</label>
                            <div style="display:flex;flex-direction:row-reverse;justify-content:flex-end;gap:4px;" id="star-container">
                                @for($s = 5; $s >= 1; $s--)
                                    <input type="radio" name="rating" id="pstar{{ $s }}" value="{{ $s }}" style="display:none">
                                    <label for="pstar{{ $s }}" style="font-size:32px;cursor:pointer;color:#ddd;transition:color 0.2s;" class="pstar-lbl">★</label>
                                @endfor
                            </div>
                            @error('rating') <span style="color:#e53935;font-size:12px;">{{ $message }}</span> @enderror
                        </div>

                        <div class="p-field" style="margin-top:14px;">
                            <label style="font-size:13px;font-weight:700;color:#555;display:block;margin-bottom:8px;">تعليقك على الدورة</label>
                            <textarea name="review" rows="4"
                                style="width:100%;padding:12px;border:1.5px solid rgba(0,0,0,0.12);border-radius:10px;font-family:inherit;font-size:14px;resize:none;outline:none;"
                                placeholder="شاركنا رأيك...">{{ old('review') }}</textarea>
                            @error('review') <span style="color:#e53935;font-size:12px;">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="p-modal-foot">
                        <button type="button" class="p-btn-cancel" onclick="closeModal('review')">إلغاء</button>
                        <button type="submit" class="p-btn-save"><i class="fas fa-paper-plane"></i> إرسال التقييم</button>
                    </div>
                </form>
            </div>
        </div>
        </main>

    @endsection

    @section('scripts')
        <script>
            function openCert(title, trainer, date, duration, certId) {
                document.getElementById('cert-title').textContent = title;
                document.getElementById('cert-recipient').textContent = document.getElementById('dispName').textContent;
                document.getElementById('cert-trainer').textContent = trainer;
                document.getElementById('cert-date').textContent = date;
                document.getElementById('cert-duration').textContent = duration;
                document.getElementById('cert-id').textContent = certId;
                openModal('cert');
            }

            function saveContact() {
                document.getElementById('dispEmail').textContent = document.getElementById('f-email').value;
                document.getElementById('dispPhone').textContent = document.getElementById('f-phone').value;
                document.getElementById('dispCity').textContent = document.getElementById('f-city').value;
                document.getElementById('dispAge').textContent = document.getElementById('f-age').value;
                closeModal('contact');
                showToast();
            }

            function saveAbout() {
                document.getElementById('dispAbout').textContent = document.getElementById('f-about').value;
                closeModal('about');
                showToast();
            }

            function saveInterests() {
                var tags = document.getElementById('f-interests').value.split('،').map(t => t.trim()).filter(t => t);
                var list = document.getElementById('tagList');
                list.innerHTML = tags.map(t => '<span class="p-tag">' + t + '</span>').join('');
                closeModal('interests');
                showToast();
            }

            function handleAvatar(event) {
                var file = event.target.files[0];
                if (!file) { return; }
                var reader = new FileReader();
                reader.onload = function(e) {
                    var avatar = document.getElementById('avatarEl');
                    avatar.style.backgroundImage = 'url(' + e.target.result + ')';
                    avatar.style.backgroundSize = 'cover';
                    avatar.style.backgroundPosition = 'center';
                    avatar.textContent = '';
                };
                reader.readAsDataURL(file);
                document.getElementById('avatar-form').submit();
            }

            function openModal(name) {
                var overlay = document.getElementById('modal-' + name);
                if (overlay) {
                    overlay.classList.add('open');
                    document.body.style.overflow = 'hidden';
                }
            }

            function closeModal(name) {
                var overlay = document.getElementById('modal-' + name);
                if (overlay) {
                    overlay.classList.remove('open');
                    document.body.style.overflow = '';
                }
            }

            function openReviewModal(courseId, courseName) {
                document.getElementById('review-form').action = '/courses/' + courseId + '/review';
                document.getElementById('review-course-name').textContent = courseName;
                // Reset stars
                document.querySelectorAll('input[name="rating"]').forEach(function(r) { r.checked = false; });
                document.querySelectorAll('.pstar-lbl').forEach(function(l) { l.style.color = '#ddd'; });
                openModal('review');
            }

            // Star hover effect
            document.querySelectorAll('.pstar-lbl').forEach(function(lbl, idx, all) {
                lbl.addEventListener('mouseover', function() {
                    all.forEach(function(l, i) { l.style.color = i >= idx ? '#c5a773' : '#ddd'; });
                });
                lbl.addEventListener('mouseleave', function() {
                    var checked = document.querySelector('input[name="rating"]:checked');
                    if (checked) {
                        var val = parseInt(checked.value);
                        all.forEach(function(l, i) { l.style.color = (5 - i) <= val ? '#c5a773' : '#ddd'; });
                    } else {
                        all.forEach(function(l) { l.style.color = '#ddd'; });
                    }
                });
                lbl.addEventListener('click', function() {
                    var val = parseInt(lbl.getAttribute('for').replace('pstar', ''));
                    all.forEach(function(l, i) { l.style.color = (5 - i) <= val ? '#c5a773' : '#ddd'; });
                });
            });

            function showToast() {
                var toast = document.getElementById('toast');
                if (toast) {
                    toast.classList.add('show');
                    setTimeout(function() { toast.classList.remove('show'); }, 3000);
                }
            }
        </script>
    @endsection
