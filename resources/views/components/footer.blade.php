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
                            <p class="footer-desc">{{ __('footer.desc') }}</p>
                            <div class="social-links">
                                <a href="{{ $settings?->facebook ?? '#' }}" class="social-link"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ $settings?->twitter ?? '#' }}" class="social-link"><i class="fab fa-twitter"></i></a>
                                <a href="{{ $settings?->instagram ?? '#' }}" class="social-link"><i class="fab fa-instagram"></i></a>
                                <a href="{{ $settings?->linkedin ?? '#' }}" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                                <a href="{{ $settings?->youtube ?? '#' }}" class="social-link"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">{{ __('footer.quick_links') }}</h4>
                            <ul class="footer-links">
                                <li><a href="{{ route('home') }}"><i class="fas fa-chevron-left"></i> {{ __('nav.home') }}</a></li>
                                <li><a href="{{ route('training-courses') }}"><i class="fas fa-chevron-left"></i> {{ __('footer.courses') }}</a></li>
                                <li><a href="{{ route('training-courses') }}"><i class="fas fa-chevron-left"></i> {{ __('footer.sessions') }}</a></li>
                                <li><a href="{{ route('about') }}"><i class="fas fa-chevron-left"></i> {{ __('nav.about') }}</a></li>
                                <li><a href="{{ route('contact') }}"><i class="fas fa-chevron-left"></i> {{ __('nav.contact') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">{{ __('footer.services') }}</h4>
                            <ul class="footer-links">
                                <li><a href="{{ route('training-courses') }}"><i class="fas fa-chevron-left"></i> {{ __('footer.individual') }}</a></li>
                                <li><a href="{{ route('training-courses') }}"><i class="fas fa-chevron-left"></i> {{ __('footer.group') }}</a></li>
                                <li><a href="{{ route('training-courses') }}"><i class="fas fa-chevron-left"></i> {{ __('footer.online') }}</a></li>
                                <li><a href="{{ route('training-courses') }}"><i class="fas fa-chevron-left"></i> {{ __('footer.self_dev') }}</a></li>
                                <li><a href="{{ route('training-courses') }}"><i class="fas fa-chevron-left"></i> {{ __('footer.leadership') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget">
                            <h4 class="widget-title">{{ __('footer.contact_info') }}</h4>
                            <ul class="contact-info">
                                <li>
                                    <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                                    <div class="contact-text">
                                        <span>{{ __('footer.address') }}</span>
                                        <p>{{ $settings?->address_ar ?? '' }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
                                    <div class="contact-text">
                                        <span>{{ __('footer.phone') }}</span>
                                        <p dir="ltr">{{ $settings?->phone ?? '' }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                                    <div class="contact-text">
                                        <span>{{ __('footer.email') }}</span>
                                        <p>{{ $settings?->email ?? '' }}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <p class="copyright">&copy; {{ date('Y') }} <span>الصعود النبيل</span>. {{ __('footer.rights') }}</p>
                </div>
            </div>
        </div>
        <button class="scroll-top" id="scrollTop">
            <i class="fas fa-arrow-up"></i>
        </button>
    </footer>
