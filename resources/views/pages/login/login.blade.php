@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <main>
        <!-- Left Visual Panel -->
        <div class="auth-visual" style="display:none">
            <img class="bg-img" src="./assets/img/hero.jpg" alt="background">
            <div class="visual-overlay"></div>

            <!-- Shapes -->
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>

            <div class="visual-content">
                <a href="index.html" class="v-logo">
                    <img src="./assets/img/logo.png" alt="الصعود النبيل" onerror="this.style.display='none'">
                    <div class="v-logo-text">
                        <h2>الصعود النبيل</h2>
                        <p>Your Path to Excellence</p>
                    </div>
                </a>

                <div class="v-middle">
                    <h1 class="v-tagline">
                        ابدأ رحلتك<br>
                        نحو <span>الصعود</span><br>
                        والتميز
                    </h1>
                    <p class="v-desc">
                        منصتك المتكاملة للدورات التدريبية والجلسات النفسية الاحترافية. استثمر في نفسك اليوم وحقق أهدافك.
                    </p>
                    <div class="v-stats">
                        <div class="v-stat">
                            <span class="v-stat-num">+5000</span>
                            <span class="v-stat-label">عميل سعيد</span>
                        </div>
                        <div class="v-stat">
                            <span class="v-stat-num">98%</span>
                            <span class="v-stat-label">رضا العملاء</span>
                        </div>
                        <div class="v-stat">
                            <span class="v-stat-num">+50</span>
                            <span class="v-stat-label">دورة ومتخصص</span>
                        </div>
                    </div>
                </div>

                <div class="v-bottom">
                    <div class="v-dot active"></div>
                    <div class="v-dot"></div>
                    <div class="v-dot"></div>
                </div>
            </div>
        </div>

        <!-- Right Form Panel -->
        <div class="auth-form-panel">
            <div class="auth-box">

                <!-- Tab Switcher -->
                <div class="auth-tabs">
                    <button class="auth-tab active" id="tab-login" onclick="switchTab('login')">
                        تسجيل الدخول
                    </button>
                    <button class="auth-tab" id="tab-register" onclick="switchTab('register')">
                        إنشاء حساب
                    </button>
                </div>

                <!-- ══ LOGIN FORM ══ -->
                <div class="login-panel active" id="panel-login">
                    <div class="login-head">
                        <h1>أهلاً بعودتك <span>👋</span></h1>
                        <p>سجّل دخولك للوصول إلى دوراتك وجلساتك</p>
                    </div>

                    <div class="f-divider"><span>أو بالبريد الإلكتروني</span></div>

                    <div class="f-group">
                        <label class="f-label"><i class="fas fa-envelope"></i> البريد الإلكتروني</label>
                        <input type="email" class="f-input" placeholder="example@email.com" dir="ltr" id="login-email">
                    </div>

                    <div class="f-group">
                        <label class="f-label"><i class="fas fa-lock"></i> كلمة المرور</label>
                        <div class="pass-wrap">
                            <input type="password" class="f-input" placeholder="••••••••" dir="ltr" id="login-pass">
                            <button class="pass-toggle" onclick="togglePass('login-pass', this)">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="f-forgot">
                        <a href="#">نسيت كلمة المرور؟</a>
                    </div>

                    <a href="{{ route('profile') }}" class="login-submit" onclick="handleLogin()">
                        <i class="fas fa-arrow-right-to-bracket"></i>
                        تسجيل الدخول
                    </a>
                </div>

                <!-- ══ REGISTER FORM ══ -->
                <div class="signin-panel" id="panel-register">
                    <div class="signin-head">
                        <h1>انضم إلى <span>الصعود النبيل</span></h1>
                        <p>أنشئ حسابك وابدأ رحلتك نحو التميز</p>
                    </div>

                    <div class="f-divider"><span>أو بملء البيانات</span></div>

                    <div class="f-row-two">
                        <div class="f-group">
                            <label class="f-label"><i class="fas fa-user"></i> الاسم الأول</label>
                            <input type="text" class="f-input" placeholder="محمد" id="reg-fname">
                        </div>
                        <div class="f-group">
                            <label class="f-label"><i class="fas fa-user"></i> الاسم الأخير</label>
                            <input type="text" class="f-input" placeholder="أحمد" id="reg-lname">
                        </div>
                    </div>

                    <div class="f-group">
                        <label class="f-label"><i class="fas fa-envelope"></i> البريد الإلكتروني</label>
                        <input type="email" class="f-input" placeholder="example@email.com" dir="ltr" id="reg-email">
                    </div>

                    <div class="f-row-two">
                        <div class="f-group">
                            <label class="f-label"><i class="fas fa-phone"></i> رقم الهاتف</label>
                            <input type="tel" class="f-input" placeholder="01XX XXX XXXX" dir="ltr" id="reg-phone">
                        </div>
                        <div class="f-group">
                            <label class="f-label"><i class="fas fa-venus-mars"></i> النوع</label>
                            <div class="select-wrap">
                                <i class="fas fa-chevron-down sel-arrow"></i>
                                <select class="f-input is-select" id="reg-gender">
                                    <option value="">اختر</option>
                                    <option value="male">ذكر</option>
                                    <option value="female">أنثى</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="f-group">
                        <label class="f-label"><i class="fas fa-lock"></i> كلمة المرور</label>
                        <div class="pass-wrap">
                            <input type="password" class="f-input" placeholder="••••••••" dir="ltr" id="reg-pass"
                                oninput="checkStrength(this)">
                            <button class="pass-toggle" onclick="togglePass('reg-pass', this)">
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
                            <input type="password" class="f-input" placeholder="••••••••" dir="ltr" id="reg-pass2">
                            <button class="pass-toggle" onclick="togglePass('reg-pass2', this)">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="f-terms">
                        <input type="checkbox" id="terms-check">
                        <label for="terms-check">
                            أوافق على <a href="#">الشروط والأحكام</a> و<a href="#">سياسة الخصوصية</a> الخاصة بالمنصة
                        </label>
                    </div>

                    <button class="signin-submit" onclick="handleRegister()">
                        <i class="fas fa-user-plus"></i>
                        إنشاء الحساب
                    </button>
                </div>

                <!-- Back to home -->
                <div class="back-home">
                    <a href="index.html">
                        <i class="fas fa-arrow-right"></i>
                        العودة للصفحة الرئيسية
                    </a>
                </div>

            </div>
        </div>
    </main>
@endsection
