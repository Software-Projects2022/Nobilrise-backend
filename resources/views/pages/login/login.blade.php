@extends('layouts.app')
@section('title', __('auth.login_title'))
@section('content')
    <main>
        <div class="auth-form-panel">
            <div class="auth-box">
                <div class="auth-tabs">
                    <button class="auth-tab active" id="tab-login" onclick="switchTab('login')">
                        {{ __('auth.login_title') }}
                    </button>
                    <button class="auth-tab" id="tab-register" onclick="switchTab('register')">
                        {{ __('auth.register_title') }}
                    </button>
                </div>
                <!-- LOGIN FORM -->
                <div class="login-panel active" id="panel-login">
                    <div class="login-head">
                        <h1>{{ __('auth.welcome_back') }} <span>👋</span></h1>
                        <p>{{ __('auth.login_subtitle') }}</p>
                    </div>

                    @if ($errors->any())
                        <div style="color:red;margin-bottom:10px">{{ $errors->first() }}</div>
                    @endif

                    <form method="POST" action="{{ route('login.post') }}">
                        @csrf
                        <div class="f-divider"><span>{{ __('auth.or_email') }}</span></div>

                        <div class="f-group">
                            <label class="f-label"><i class="fas fa-envelope"></i> {{ __('auth.email') }}</label>
                            <input type="email" name="email" class="f-input" placeholder="example@email.com" dir="ltr" value="{{ old('email') }}">
                        </div>

                        <div class="f-group">
                            <label class="f-label"><i class="fas fa-lock"></i> {{ __('auth.password') }}</label>
                            <div class="pass-wrap">
                                <input type="password" name="password" class="f-input" placeholder="••••••••" dir="ltr" id="login-pass">
                                <button type="button" class="pass-toggle" onclick="togglePass('login-pass', this)">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="f-forgot">
                            <a href="#">{{ __('auth.forgot') }}</a>
                        </div>

                        <button type="submit" class="login-submit">
                            <i class="fas fa-arrow-right-to-bracket"></i>
                            {{ __('auth.login_btn') }}
                        </button>
                    </form>
                </div>
                <!-- REGISTER FORM -->
                <div class="signin-panel" id="panel-register">
                    <div class="signin-head">
                        <h1>{{ __('auth.join_title') }} <span>الصعود النبيل</span></h1>
                        <p>{{ __('auth.join_subtitle') }}</p>
                    </div>

                    <form method="POST" action="{{ route('register.post') }}">
                        @csrf
                        <div class="f-divider"><span>{{ __('auth.or_fill') }}</span></div>

                        <div class="f-row-two">
                            <div class="f-group">
                                <label class="f-label"><i class="fas fa-user"></i> {{ __('auth.first_name') }}</label>
                                <input type="text" name="first_name" class="f-input" placeholder="{{ app()->getLocale() === 'ar' ? 'محمد' : 'John' }}">
                            </div>
                            <div class="f-group">
                                <label class="f-label"><i class="fas fa-user"></i> {{ __('auth.last_name') }}</label>
                                <input type="text" name="last_name" class="f-input" placeholder="{{ app()->getLocale() === 'ar' ? 'أحمد' : 'Doe' }}">
                            </div>
                        </div>

                        <div class="f-group">
                            <label class="f-label"><i class="fas fa-envelope"></i> {{ __('auth.email') }}</label>
                            <input type="email" name="email" class="f-input" placeholder="example@email.com" dir="ltr">
                        </div>

                        <div class="f-group">
                            <label class="f-label"><i class="fas fa-phone"></i> {{ __('auth.phone') }}</label>
                            <input type="tel" name="phone" class="f-input" placeholder="01XX XXX XXXX" dir="ltr">
                        </div>

                        <div class="f-group">
                            <label class="f-label"><i class="fas fa-lock"></i> {{ __('auth.password') }}</label>
                            <div class="pass-wrap">
                                <input type="password" name="password" class="f-input" placeholder="••••••••" dir="ltr" id="reg-pass" oninput="checkStrength(this)">
                                <button type="button" class="pass-toggle" onclick="togglePass('reg-pass', this)">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                            <div class="pass-strength" id="pass-strength">
                                <div class="strength-bars">
                                    <div class="strength-bar" id="bar1"></div>
                                    <div class="strength-bar" id="bar2"></div>
                                    <div class="strength-bar" id="bar3"></div>
                                    <div class="strength-bar" id="bar4"></div>
                                </div>
                                <span class="strength-text" id="strength-text">{{ __('auth.password_hint') }}</span>
                            </div>
                        </div>

                        <div class="f-group">
                            <label class="f-label"><i class="fas fa-lock"></i> {{ __('auth.confirm_password') }}</label>
                            <div class="pass-wrap">
                                <input type="password" name="password_confirmation" class="f-input" placeholder="••••••••" dir="ltr" id="reg-pass2">
                                <button type="button" class="pass-toggle" onclick="togglePass('reg-pass2', this)">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="f-terms">
                            <input type="checkbox" id="terms-check" required>
                            <label for="terms-check">
                                {{ __('auth.terms') }}
                                <a href="#" onclick="openTermsModal('terms-modal'); return false;">{{ __('auth.terms_link') }}</a>
                                {{ app()->getLocale() === 'ar' ? 'و' : '&' }}
                                <a href="#" onclick="openTermsModal('privacy-modal'); return false;">{{ __('auth.privacy_link') }}</a>
                            </label>
                        </div>

                        <button type="submit" class="signin-submit">
                            <i class="fas fa-user-plus"></i>
                            {{ __('auth.register_btn') }}
                        </button>
                    </form>
                </div>
                <div style="padding-bottom: 10px;" class="back-home">
                    <a href="{{ route('home') }}">
                        <i class="fas fa-arrow-{{ app()->getLocale() === 'ar' ? 'right' : 'left' }}"></i>
                        {{ __('auth.back_home') }}
                    </a>
                </div>
            </div>
        </div>

        {{-- Terms & Conditions Modal --}}
        <div class="terms-modal-overlay" id="terms-modal">
            <div class="terms-modal-box">
                <div class="terms-modal-header">
                    <h2>{{ __('auth.terms_link') }}</h2>
                    <button type="button" class="terms-modal-close" onclick="closeTermsModal('terms-modal')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="terms-modal-body">
                    <p>{{ __('auth.terms_content') }}</p>
                </div>
                <div class="terms-modal-footer">
                    <button type="button" class="terms-modal-btn" onclick="closeTermsModal('terms-modal')">
                        {{ __('auth.modal_close') }}
                    </button>
                </div>
            </div>
        </div>

        {{-- Privacy Policy Modal --}}
        <div class="terms-modal-overlay" id="privacy-modal">
            <div class="terms-modal-box">
                <div class="terms-modal-header">
                    <h2>{{ __('auth.privacy_link') }}</h2>
                    <button type="button" class="terms-modal-close" onclick="closeTermsModal('privacy-modal')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="terms-modal-body">
                    <p>{{ __('auth.privacy_content') }}</p>
                </div>
                <div class="terms-modal-footer">
                    <button type="button" class="terms-modal-btn" onclick="closeTermsModal('privacy-modal')">
                        {{ __('auth.modal_close') }}
                    </button>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
<script>
    function openTermsModal(id) {
        document.getElementById(id).classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeTermsModal(id) {
        document.getElementById(id).classList.remove('active');
        document.body.style.overflow = '';
    }

    document.querySelectorAll('.terms-modal-overlay').forEach(function(overlay) {
        overlay.addEventListener('click', function(e) {
            if (e.target === overlay) {
                closeTermsModal(overlay.id);
            }
        });
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            document.querySelectorAll('.terms-modal-overlay.active').forEach(function(modal) {
                closeTermsModal(modal.id);
            });
        }
    });
</script>
@endsection
