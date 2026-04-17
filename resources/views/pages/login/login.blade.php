@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <main>
        <!-- ══════════════════════════════  Form Panel ══════════════════════════════ -->
        <div class="auth-form-panel">
            <div class="auth-box">

                <!-- ══════════════════════════════ Tab Switcher ══════════════════════════════ -->
                <div class="auth-tabs">
                    <button class="auth-tab active" id="tab-login" onclick="switchTab('login')">
                        تسجيل الدخول
                    </button>
                    <button class="auth-tab" id="tab-register" onclick="switchTab('register')">
                        إنشاء حساب
                    </button>
                </div>

                <!-- ══════════════════════════════ LOGIN FORM ════════════════════════════════ -->
                <div class="login-panel active" id="panel-login">
                    <div class="login-head">
                        <h1>أهلاً بعودتك <span>👋</span></h1>
                        <p>سجّل دخولك للوصول إلى دوراتك وجلساتك</p>
                    </div>

                    @if ($errors->any())
                        <div style="color:red;margin-bottom:10px">{{ $errors->first() }}</div>
                    @endif

                    <form method="POST" action="{{ route('login.post') }}">
                        @csrf
                        <div class="f-divider"><span>أو بالبريد الإلكتروني</span></div>

                        <div class="f-group">
                            <label class="f-label"><i class="fas fa-envelope"></i> البريد الإلكتروني</label>
                            <input type="email" name="email" class="f-input" placeholder="example@email.com" dir="ltr" value="{{ old('email') }}">
                        </div>

                        <div class="f-group">
                            <label class="f-label"><i class="fas fa-lock"></i> كلمة المرور</label>
                            <div class="pass-wrap">
                                <input type="password" name="password" class="f-input" placeholder="••••••••" dir="ltr" id="login-pass">
                                <button type="button" class="pass-toggle" onclick="togglePass('login-pass', this)">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="f-forgot">
                            <a href="#">نسيت كلمة المرور؟</a>
                        </div>

                        <button type="submit" class="login-submit">
                            <i class="fas fa-arrow-right-to-bracket"></i>
                            تسجيل الدخول
                        </button>
                    </form>
                </div>

                <!-- ══════════════════════════════ REGISTER FORM ══════════════════════════════ -->
                <div class="signin-panel" id="panel-register">
                    <div class="signin-head">
                        <h1>انضم إلى <span>الصعود النبيل</span></h1>
                        <p>أنشئ حسابك وابدأ رحلتك نحو التميز</p>
                    </div>

                    <form method="POST" action="{{ route('register.post') }}">
                        @csrf
                        <div class="f-divider"><span>أو بملء البيانات</span></div>

                        <div class="f-row-two">
                            <div class="f-group">
                                <label class="f-label"><i class="fas fa-user"></i> الاسم الأول</label>
                                <input type="text" name="first_name" class="f-input" placeholder="محمد">
                            </div>
                            <div class="f-group">
                                <label class="f-label"><i class="fas fa-user"></i> الاسم الأخير</label>
                                <input type="text" name="last_name" class="f-input" placeholder="أحمد">
                            </div>
                        </div>

                        <div class="f-group">
                            <label class="f-label"><i class="fas fa-envelope"></i> البريد الإلكتروني</label>
                            <input type="email" name="email" class="f-input" placeholder="example@email.com" dir="ltr">
                        </div>

                        <div class="f-group">
                            <label class="f-label"><i class="fas fa-phone"></i> رقم الهاتف</label>
                            <input type="tel" name="phone" class="f-input" placeholder="01XX XXX XXXX" dir="ltr">
                        </div>

                        <div class="f-group">
                            <label class="f-label"><i class="fas fa-lock"></i> كلمة المرور</label>
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
                                <span class="strength-text" id="strength-text">أدخل كلمة مرور قوية</span>
                            </div>
                        </div>

                        <div class="f-group">
                            <label class="f-label"><i class="fas fa-lock"></i> تأكيد كلمة المرور</label>
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
                                أوافق على <a href="#">الشروط والأحكام</a> و<a href="#">سياسة الخصوصية</a>
                            </label>
                        </div>

                        <button type="submit" class="signin-submit">
                            <i class="fas fa-user-plus"></i>
                            إنشاء الحساب
                        </button>
                    </form>
                </div>

                <!-- ══════════════════════════════ Back to home ══════════════════════════════ -->
                <div style="padding-bottom: 10px;" class="back-home">
                    <a href="{{ route('home') }}">
                        <i class="fas fa-arrow-right"></i>
                        العودة للصفحة الرئيسية
                    </a>
                </div>

            </div>
        </div>
    </main>
@endsection
