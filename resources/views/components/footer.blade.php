{{-- Footer --}}
  <!-- ========================== Footer ========================== -->
    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="الصعود النبيل" />
                                <h3>الصعود النبيل</h3>
                            </div>
                            <p class="footer-desc">
                                منصة متخصصة في تقديم الاستشارات النفسية والدورات التدريبية
                                بأعلى معايير الجودة والاحترافية.
                            </p>
                            <div class="social-links">
                                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">روابط سريعة</h4>
                            <ul class="footer-links">
                                <li>
                                    <a href="{{ route('home') }}"><i class="fas fa-chevron-left"></i> الرئيسية</a>
                                </li>
                                <li>
                                    <a href="{{ route('training-courses') }}"><i class="fas fa-chevron-left"></i> الدورات</a>
                                </li>
                                <li>
                                    <a href="{{ route('training-courses') }}"><i class="fas fa-chevron-left"></i> الجلسات</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}"><i class="fas fa-chevron-left"></i> من نحن</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}"><i class="fas fa-chevron-left"></i> تواصل معنا</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">خدماتنا</h4>
                            <ul class="footer-links">
                                <li>
                                    <a href="{{ route('training-courses') }}"><i class="fas fa-chevron-left"></i> جلسات فردية</a>
                                </li>
                                <li>
                                    <a href="{{ route('training-courses') }}"><i class="fas fa-chevron-left"></i> جلسات جماعية</a>
                                </li>
                                <li>
                                    <a href="{{ route('training-courses') }}"><i class="fas fa-chevron-left"></i> استشارات أونلاين</a>
                                </li>
                                <li>
                                    <a href="{{ route('training-courses') }}"><i class="fas fa-chevron-left"></i> دورات تطوير الذات</a>
                                </li>
                                <li>
                                    <a href="{{ route('training-courses') }}"><i class="fas fa-chevron-left"></i> دورات القيادة</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget">
                            <h4 class="widget-title">معلومات التواصل</h4>
                            <ul class="contact-info">
                                <li>
                                    <div class="contact-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-text">
                                        <span>العنوان</span>
                                        <p>القاهرة، مصر - شارع التحرير</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="contact-text">
                                        <span>الهاتف</span>
                                        <p dir="ltr">+20 123 456 7890</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="contact-text">
                                        <span>البريد الإلكتروني</span>
                                        <p>info@nobelrise.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <p class="copyright">
                        &copy; 2024 <span>الصعود النبيل</span>. جميع الحقوق محفوظة.
                    </p>
                    <div class="footer-bottom-links">
                        <a href="#privacy">سياسة الخصوصية</a>
                        <span class="separator">|</span>
                        <a href="#terms">الشروط والأحكام</a>
                        <span class="separator">|</span>
                        <a href="#cookies">سياسة ملفات تعريف الارتباط</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="scroll-top" id="scrollTop">
            <i class="fas fa-arrow-up"></i>
        </button>
    </footer>
