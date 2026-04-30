<div>
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
                    <div class="p-avatar-wrap">
                        <div class="p-avatar" id="avatarEl">
                            {{ strtoupper(substr($client->name, 0, 2)) }}
                        </div>
                        <label class="p-avatar-edit" for="avatarInput" style="cursor:pointer;">
                            <i class="fas fa-camera"></i>
                        </label>
                        <input type="file" id="avatarInput" accept="image/*" style="display:none" onchange="handleAvatar(event)">
                    </div>

                    <div class="p-name">
                        {{ strtoupper($client->name) }}
                    </div>

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

                        <button class="p-tab active" onclick="switchTab(this,'courses')">
                            <i class="fas fa-graduation-cap"></i>
                            {{ __('profile.courses_tab') }}
                        </button>

                        <button class="p-tab" onclick="switchTab(this,'sessions')">
                            <i class="fas fa-brain"></i>
                            {{ __('profile.sessions_tab') }}
                        </button>

                    </div>
                </div>

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

                                    <span class="p-badge">
                                        {{ match($course->pivot->status) {
                                            'completed' => __('profile.completed_status'),
                                            'cancelled' => __('profile.cancelled_status'),
                                            default => __('profile.ongoing_status'),
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

                            <span class="p-s-badge">مؤكدة</span>
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
                <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    @method('PUT')
                    <div class="p-modal-body">
                        <div class="p-field">
                            <label>{{ __('profile.full_name') }}</label>
                            <input name="name" value="{{ $client->name }}" required />
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
                <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    @method('PUT')
                    <div class="p-modal-body">
                        <div class="p-field">
                            <label>{{ __('profile.full_name') }}</label>
                            <input type="text" name="name" value="{{ $client->name }}" required />
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

            function showToast() {
                var toast = document.getElementById('toast');
                if (toast) {
                    toast.classList.add('show');
                    setTimeout(function() { toast.classList.remove('show'); }, 3000);
                }
            }

            function switchTab(btn, name) {
                document.querySelectorAll('.p-tab').forEach(function(t) {
                    t.classList.remove('active');
                });
                document.querySelectorAll('.p-tab-content').forEach(function(c) {
                    c.classList.remove('active');
                });
                btn.classList.add('active');
                var target = document.getElementById('tab-' + name);
                if (target) {
                    target.classList.add('active');
                }
            }
        </script>
    @endsection

</div>
