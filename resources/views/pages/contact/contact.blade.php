@extends('layouts.app')
@section('title', 'Contact')
@section('styles')
<style>
    @font-face {
        font-family: 'CAREEM';
        src: url('./assets/fonts/CAREEM-REGULAR.DB5F2BCA26992ED25A89.otf') format('opentype');
        font-display: swap;
    }

    :root {
        --color-primary: #c5a773;
        --color-primary-dark: #a88b5a;
        --color-primary-rgb: 197, 167, 115;
        --color-bg-dark: #0a0a0a;
        --color-bg-darker: #000000;
        --color-bg-light: rgba(10, 10, 10, 0.95);
        --color-bg-transparent: rgba(10, 10, 10, 0.98);
        --color-bg-white: #ffffff;
        --color-bg-gray-light: #f8f9fa;
        --color-text-white: #ffffff;
        --color-text-light: rgba(255, 255, 255, 0.7);
        --color-text-muted: rgba(255, 255, 255, 0.6);
        --color-text-dark: #1a1a1a;
        --color-text-gray: #4a4a4a;
        --color-text-gray-light: #6a6a6a;
        --color-border: rgba(197, 167, 115, 0.2);
        --color-border-light: rgba(197, 167, 115, 0.3);
        --color-shadow: rgba(197, 167, 115, 0.1);
        --color-shadow-medium: rgba(197, 167, 115, 0.2);
        --color-shadow-strong: rgba(197, 167, 115, 0.3);
        --color-shadow-intense: rgba(197, 167, 115, 0.4);
        --header-height: 100px;
        --header-height-scrolled: 90px;
        --transition-fast: 0.3s ease;
        --transition-medium: 0.4s ease;
    }

    .contact-page-hero {
        padding: 160px 0 80px;
        position: relative;
        overflow: hidden;
    }

    .contact-orb {
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
        filter: blur(80px);
    }

    .contact-orb-1 {
        width: 500px; height: 500px;
        background: radial-gradient(circle, rgba(197,167,115,0.08), transparent 70%);
        top: -100px; right: -100px;
        animation: orbFloat 12s ease-in-out infinite;
    }

    .contact-orb-2 {
        width: 400px; height: 400px;
        background: radial-gradient(circle, rgba(168,139,90,0.06), transparent 70%);
        bottom: -50px; left: -50px;
        animation: orbFloat 15s ease-in-out infinite reverse;
    }

    @keyframes orbFloat {
        0%,100% { transform: translate(0,0) scale(1); }
        33%      { transform: translate(30px,-30px) scale(1.05); }
        66%      { transform: translate(-20px,20px) scale(0.95); }
    }

    .contact-page-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image:
            linear-gradient(rgba(197,167,115,0.04) 1px, transparent 1px),
            linear-gradient(90deg, rgba(197,167,115,0.04) 1px, transparent 1px);
        background-size: 60px 60px;
    }

    .contact-hero-inner { position: relative; z-index: 2; text-align: center; }

    .contact-hero-badge {
        display: inline-flex; align-items: center; gap: 8px;
        padding: 8px 20px;
        background: rgba(197,167,115,0.12);
        border: 1px solid var(--color-border);
        border-radius: 50px;
        font-size: 13px; color: var(--color-primary); font-weight: 600;
        margin-bottom: 25px;
    }

    .contact-hero-title {
        font-size: 58px; font-weight: 900;
        color: var(--color-text-white);
        line-height: 1.2; margin-bottom: 20px;
    }

    .contact-hero-title span {
        background: linear-gradient(135deg, var(--color-primary), var(--color-primary-dark), #f0deb4);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: shimmer 4s linear infinite;
    }

    @keyframes shimmer {
        0%   { background-position: 0% center; }
        100% { background-position: 200% center; }
    }

    .contact-hero-sub {
        font-size: 18px; color: var(--color-text-muted);
        max-width: 560px; margin: 0 auto 50px; line-height: 1.8;
    }

    .contact-quick-pills { display: flex; justify-content: center; gap: 14px; flex-wrap: wrap; }

    .contact-quick-pill {
        display: inline-flex; align-items: center; gap: 10px;
        padding: 12px 24px;
        background: #1a1a1a;
        border: 1px solid var(--color-border);
        border-radius: 50px;
        color: var(--color-text-light);
        text-decoration: none; font-size: 14px; font-weight: 600;
        transition: all var(--transition-fast);
    }

    .contact-quick-pill:hover {
        border-color: var(--color-primary); color: var(--color-primary);
        transform: translateY(-3px);
        box-shadow: 0 8px 25px var(--color-shadow);
    }

    .contact-quick-pill i { color: var(--color-primary); font-size: 16px; }

    .contact-main-section { padding: 60px 0 100px; background: var(--color-bg-white); }

    .contact-main-grid {
        display: grid;
        grid-template-columns: 1fr 1.4fr;
        gap: 40px; align-items: start;
    }

    .contact-info-col { display: flex; flex-direction: column; gap: 20px; }

    .contact-info-card {
        background: var(--color-bg-white);
        border-radius: 20px; padding: 28px;
        transition: all var(--transition-medium);
        position: relative; overflow: hidden;
        box-shadow: 0 20px 40px rgba(0,0,0,0.05);
    }

    .contact-info-card::before {
        content: ''; position: absolute;
        top: 0; right: 0; left: 0; height: 2px;
        background: linear-gradient(90deg, transparent, var(--color-primary), transparent);
        transform: scaleX(0); transition: transform 0.4s ease;
    }

    .contact-info-card:hover { transform: translateY(-4px); box-shadow: 0 8px 30px rgba(0,0,0,0.12); }
    .contact-info-card:hover::before { transform: scaleX(1); }

    .contact-info-card-header { display: flex; align-items: center; gap: 15px; margin-bottom: 20px; }

    .contact-info-ico {
        width: 50px; height: 50px;
        background: rgba(197,167,115,0.12);
        border: 1px solid var(--color-border);
        border-radius: 14px;
        display: flex; align-items: center; justify-content: center;
        font-size: 20px; color: var(--color-primary);
        flex-shrink: 0; transition: all var(--transition-fast);
    }

    .contact-info-card:hover .contact-info-ico { background: var(--color-primary); color: #000; }

    .contact-info-card-title { font-size: 17px; font-weight: 800; color: var(--color-text-dark); }
    .contact-info-card-sub { font-size: 12px; color: var(--color-text-gray-light); margin-top: 3px; }

    .contact-info-items { display: flex; flex-direction: column; gap: 12px; }

    .contact-info-item {
        display: flex; align-items: center; gap: 12px;
        padding: 12px 15px;
        background: rgba(197,167,115,0.04);
        border-radius: 10px; text-decoration: none;
        transition: background var(--transition-fast);
    }

    .contact-info-item:hover { background: rgba(197,167,115,0.08); }
    .contact-info-item i { color: var(--color-primary); font-size: 14px; width: 18px; text-align: center; }
    .contact-info-item span { font-size: 14px; color: var(--color-text-gray); font-weight: 500; }

    .contact-hours-grid { display: flex; flex-direction: column; gap: 8px; }

    .contact-hour-row {
        display: flex; justify-content: space-between; align-items: center;
        padding: 10px 14px;
        background: rgba(197,167,115,0.04);
        border-radius: 10px;
    }

    .contact-hour-day { font-size: 13px; color: var(--color-text-gray-light); }
    .contact-hour-time { font-size: 13px; font-weight: 700; color: var(--color-text-dark); }

    .contact-hour-badge {
        font-size: 10px; padding: 3px 8px;
        border-radius: 10px; font-weight: 700;
    }

    .contact-hour-badge.open  { background: rgba(76,175,80,0.15); color: #4caf50; }
    .contact-hour-badge.closed { background: rgba(255,77,77,0.12); color: #ff4d4d; }

    .contact-social-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }

    .contact-soc-btn {
        display: flex; align-items: center; gap: 10px;
        padding: 12px 16px;
        background: rgba(197,167,115,0.04);
        border: 1px solid rgba(197,167,115,0.1);
        border-radius: 12px; text-decoration: none;
        transition: all var(--transition-fast);
        font-size: 13px; font-weight: 700; color: var(--color-text-gray);
    }

    .contact-soc-btn:hover { transform: translateY(-2px); }
    .contact-soc-btn i { font-size: 18px; color: var(--color-primary); }
    .contact-soc-btn.fb:hover { border-color:#1877f2; color:#1877f2; background:rgba(24,119,242,0.08); }
    .contact-soc-btn.tw:hover { border-color:#1da1f2; color:#1da1f2; background:rgba(29,161,242,0.08); }
    .contact-soc-btn.ig:hover { border-color:#e1306c; color:#e1306c; background:rgba(225,48,108,0.08); }
    .contact-soc-btn.wa:hover { border-color:#25d366; color:#25d366; background:rgba(37,211,102,0.08); }
    .contact-soc-btn.yt:hover { border-color:#ff0000; color:#ff0000; background:rgba(255,0,0,0.08); }
    .contact-soc-btn.li:hover { border-color:#0077b5; color:#0077b5; background:rgba(0,119,181,0.08); }

    .contact-form-card {
        background: var(--color-bg-white);
        border-radius: 24px; padding: 40px;
        position: relative; overflow: hidden;
        box-shadow: 0 20px 40px rgba(0,0,0,0.05);
    }

    .contact-form-card::after {
        content: ''; position: absolute;
        top: -80px; left: -80px;
        width: 250px; height: 250px;
        background: radial-gradient(circle, rgba(197,167,115,0.07), transparent 70%);
        pointer-events: none;
    }

    .contact-form-head { margin-bottom: 30px; }
    .contact-form-head h2 { font-size: 26px; font-weight: 900; color: var(--color-text-dark); margin-bottom: 8px; }
    .contact-form-head h2 span {
        background: linear-gradient(135deg, var(--color-primary), var(--color-primary-dark));
        -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
    }
    .contact-form-head p { font-size: 14px; color: var(--color-text-gray-light); line-height: 1.7; }

    .contact-topic-label {
        font-size: 12px; font-weight: 700; color: var(--color-text-gray-light);
        text-transform: uppercase; letter-spacing: 0.5px;
        margin-bottom: 10px; display: block;
    }

    .contact-topic-pills { display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 22px; }

    .contact-topic-pill {
        padding: 8px 16px;
        border: 1.5px solid rgba(197,167,115,0.2);
        border-radius: 50px; font-size: 12px; font-weight: 700;
        color: var(--color-text-gray-light);
        cursor: pointer; transition: all 0.25s;
        font-family: 'CAREEM', sans-serif; background: transparent;
    }

    .contact-topic-pill:hover { border-color: rgba(197,167,115,0.4); color: var(--color-primary); }
    .contact-topic-pill.active { background: rgba(197,167,115,0.12); border-color: var(--color-primary); color: var(--color-primary); }

    .contact-f-group { margin-bottom: 18px; }

    .contact-f-label {
        display: flex; align-items: center; gap: 7px;
        font-size: 12px; font-weight: 700; color: var(--color-text-gray-light);
        text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 8px;
    }

    .contact-f-label i { color: var(--color-primary); font-size: 11px; }

    .contact-f-input {
        width: 100%; height: 50px; padding: 0 18px;
        background: rgba(197,167,115,0.04);
        border: 1.5px solid rgba(197,167,115,0.15);
        border-radius: 12px; font-size: 14px; color: var(--color-text-dark);
        font-family: 'CAREEM', sans-serif;
        outline: none; transition: all var(--transition-fast);
        -webkit-appearance: none;
    }

    .contact-f-input::placeholder { color: rgba(0,0,0,0.3); font-size: 13px; }
    .contact-f-input:hover { border-color: rgba(197,167,115,0.3); background: rgba(197,167,115,0.06); }
    .contact-f-input:focus { border-color: var(--color-primary); background: rgba(197,167,115,0.08); box-shadow: 0 0 0 3px var(--color-shadow); }

    .contact-f-textarea { height: auto; padding-top: 15px; padding-bottom: 15px; min-height: 130px; resize: none; line-height: 1.7; }

    .contact-f-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }

    .contact-select-wrap { position: relative; }
    .contact-select-wrap .sel-arr {
        position: absolute; left: 16px; top: 50%; transform: translateY(-50%);
        color: var(--color-text-gray-light); font-size: 10px; pointer-events: none;
    }

    .contact-f-input.contact-is-select { padding-left: 36px; cursor: pointer; }
    .contact-f-input.contact-is-select option { background: var(--color-bg-white); color: var(--color-text-dark); }

    .contact-rating-wrap { display: flex; gap: 8px; align-items: center; }

    .contact-star-btn {
        background: none; border: none; font-size: 26px; cursor: pointer;
        color: rgba(0,0,0,0.15); transition: all 0.2s; padding: 0;
    }

    .contact-star-btn.active, .contact-star-btn:hover { color: var(--color-primary); transform: scale(1.2); }

    .contact-f-submit {
        width: 100%; height: 55px;
        background: linear-gradient(135deg, var(--color-primary), var(--color-primary-dark) 50%, var(--color-primary));
        background-size: 200% auto;
        border: none; border-radius: 13px;
        font-family: 'CAREEM', sans-serif; font-size: 16px; font-weight: 800; color: #000;
        cursor: pointer; transition: all 0.4s;
        box-shadow: 0 8px 25px var(--color-shadow-medium);
        display: flex; align-items: center; justify-content: center; gap: 10px;
        margin-top: 24px;
    }

    .contact-f-submit:hover { background-position: right center; transform: translateY(-2px); box-shadow: 0 14px 35px var(--color-shadow-strong); }

    .contact-char-counter { text-align: left; font-size: 11px; color: var(--color-text-gray-light); margin-top: 5px; }

    .contact-map-section { padding: 0 0 100px; background: var(--color-bg-white); }

    .contact-map-wrap {
        border-radius: 24px; overflow: hidden;
        border: 1px solid var(--color-border); position: relative;
    }

    .contact-map-wrap iframe {
        width: 100%; height: 380px;
        filter: invert(90%) hue-rotate(180deg) brightness(0.85) saturate(0.7);
        display: block;
    }

    .contact-map-badge {
        position: absolute; top: 20px; right: 20px;
        background: var(--color-bg-white);
        border: 1px solid var(--color-border);
        border-radius: 12px; padding: 14px 18px;
        display: flex; align-items: center; gap: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .contact-map-badge i { color: var(--color-primary); font-size: 20px; }
    .contact-map-badge strong { display: block; font-size: 14px; color: var(--color-text-dark); }
    .contact-map-badge span { font-size: 12px; color: var(--color-text-gray-light); }

    /* Alert success */
    .contact-alert-success {
        padding: 14px 20px;
        background: rgba(76,175,80,0.12);
        border: 1px solid #4caf50;
        border-radius: 12px;
        color: #2e7d32;
        margin-bottom: 20px;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    @media (max-width: 992px) {
        .contact-main-grid { grid-template-columns: 1fr; }
    }

    @media (max-width: 768px) {
        .contact-hero-title { font-size: 38px; }
        .contact-f-row { grid-template-columns: 1fr; }
        .contact-social-grid { grid-template-columns: 1fr 1fr; }
        .contact-form-card { padding: 25px 20px; }
        .contact-page-hero { padding: 130px 0 60px; }
    }

    @media (max-width: 480px) {
        .contact-hero-title { font-size: 30px; }
        .contact-quick-pills { flex-direction: column; align-items: center; }
    }
</style>
@endsection

@section('content')
<main>

    {{-- ========================== Page Hero ========================== --}}
   <section class="page-hero training_coursesh">
    <div class="container">
        <div class="hero-content">
            <div class="breadcrumb">
                <a href="{{ route('home') }}">
                    <i class="fas fa-home"></i> {{ __('common.home') }}
                </a>
                <i class="fas fa-chevron-left"></i>
                <span>{{ __('contact.title') }}</span>
            </div>

            <h1 class="page-title">
                {{ __('contact.hero_we_are') ?? 'نحن هنا' }}
                <span class="highlight">{{ __('contact.hero_for_you') ?? 'من أجلك' }}</span>
            </h1>

            <p class="page-description">
                {{ __('contact.hero_desc') ?? 'هل لديك سؤال أو استفسار؟ فريقنا المتخصص على أتمّ الاستعداد للإجابة عليك ومساعدتك في اختيار البرنامج المناسب لك' }}
            </p>

            <div class="hero-tabs">
                <a href="#contact-form" class="hero-tab active" id="tab-form">
                    <i class="fas fa-envelope"></i> {{ __('contact.send_message') }}
                </a>

                <a href="#contact-info" class="hero-tab" id="tab-info">
                    <i class="fas fa-phone-alt"></i> {{ __('contact.info') }}
                </a>
            </div>
        </div>
    </div>
    </section>

    {{-- ═══════ MAIN CONTACT GRID ═══════ --}}
    <section class="contact-main-section" id="contact-info">
        <div class="container">
        <div class="contact-main-grid">

            {{-- Info Column --}}
            <div class="contact-info-col">

                <div class="contact-info-card">
                    <div class="contact-info-card-header">
                        <div class="contact-info-ico"><i class="fas fa-address-book"></i></div>
                        <div>
                            <div class="contact-info-card-title">{{ __('contact.info') }}</div>
                            <div class="contact-info-card-sub">{{ __('contact.info_sub') ?? 'نسعد بتواصلك معنا' }}</div>
                        </div>
                    </div>

                    <div class="contact-info-items">
                        @if($settings?->phone)
                        <a href="tel:{{ $settings->phone }}" class="contact-info-item">
                            <i class="fas fa-phone-alt"></i>
                            <span>{{ $settings->phone }}</span>
                        </a>
                        @endif

                        @if($settings?->email)
                        <a href="mailto:{{ $settings->email }}" class="contact-info-item">
                            <i class="fas fa-envelope"></i>
                            <span>{{ $settings->email }}</span>
                        </a>
                        @endif

                        @if($settings?->address_ar)
                        <a href="#" class="contact-info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>{{ $settings->address_ar }}</span>
                        </a>
                        @endif

                        @if($settings?->whatsapp)
                        <a href="https://wa.me/{{ preg_replace('/\D/', '', $settings->whatsapp) }}"
                           class="contact-info-item" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                            <span>{{ __('contact.whatsapp') }}: {{ $settings->whatsapp }}</span>
                        </a>
                        @endif
                    </div>
                </div>

                {{-- Work Hours --}}
                <div class="contact-info-card">
                    <div class="contact-info-card-header">
                        <div class="contact-info-ico"><i class="fas fa-clock"></i></div>
                        <div>
                            <div class="contact-info-card-title">{{ __('contact.work_hours') }}</div>
                            <div class="contact-info-card-sub">{{ __('contact.available') ?? 'متاحون لخدمتك' }}</div>
                        </div>
                    </div>

                    <div class="contact-hours-grid">
                        @if($settings?->work_hours_sat_wed)
                        <div class="contact-hour-row">
                            <span class="contact-hour-day">{{ $settings->work_hours_sat_wed_day ?? __('contact.sat_wed') }}</span>
                            <span class="contact-hour-time">{{ $settings->work_hours_sat_wed }}</span>
                            <span class="contact-hour-badge open">{{ __('common.open') ?? 'مفتوح' }}</span>
                        </div>
                        @endif

                        @if($settings?->work_hours_thu)
                        <div class="contact-hour-row">
                            <span class="contact-hour-day">{{ $settings->work_hours_thu_day ?? __('contact.thu') }}</span>
                            <span class="contact-hour-time">{{ $settings->work_hours_thu }}</span>
                            <span class="contact-hour-badge open">{{ __('common.open') ?? 'مفتوح' }}</span>
                        </div>
                        @endif

                        <div class="contact-hour-row">
                            <span class="contact-hour-day">{{ $settings?->work_hours_fri_day ?? __('contact.fri') }}</span>
                            <span class="contact-hour-time">—</span>
                            <span class="contact-hour-badge {{ $settings?->work_hours_fri_closed ? 'closed' : 'open' }}">
                                {{ $settings?->work_hours_fri_closed ? __('common.closed') : __('common.open') }}
                            </span>
                        </div>
                    </div>
                </div>

                {{-- Social --}}
                <div class="contact-info-card">
                    <div class="contact-info-card-header">
                        <div class="contact-info-ico"><i class="fas fa-share-alt"></i></div>
                        <div>
                            <div class="contact-info-card-title">{{ __('contact.social') }}</div>
                            <div class="contact-info-card-sub">{{ __('contact.social_sub') ?? 'كن على تواصل دائم معنا' }}</div>
                        </div>
                    </div>

                    <div class="contact-social-grid">
                        <a href="{{ $settings?->facebook ?? '#' }}" class="contact-soc-btn fb"><i class="fab fa-facebook-f"></i> Facebook</a>
                        <a href="{{ $settings?->twitter ?? '#' }}" class="contact-soc-btn tw"><i class="fab fa-twitter"></i> Twitter</a>
                        <a href="{{ $settings?->instagram ?? '#' }}" class="contact-soc-btn ig"><i class="fab fa-instagram"></i> Instagram</a>
                        <a href="{{ $settings?->whatsapp ?? '#' }}" class="contact-soc-btn wa"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                        <a href="{{ $settings?->youtube ?? '#' }}" class="contact-soc-btn yt"><i class="fab fa-youtube"></i> YouTube</a>
                        <a href="{{ $settings?->linkedin ?? '#' }}" class="contact-soc-btn li"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
                    </div>
                </div>

            </div>

            {{-- Form Column --}}
            <div class="contact-form-col" id="contact-form">
                <div class="contact-form-card">

                    <div class="contact-form-head">
                        <h2>{{ __('contact.send_message') }} <span></span></h2>
                        <p>{{ __('contact.reply_hint') ?? 'سنرد عليك في أقرب وقت ممكن' }}</p>
                    </div>

                    @if(session('success'))
                        <div class="contact-alert-success">
                            <i class="fas fa-check-circle"></i>
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" id="contactForm">
                        @csrf

                        <span class="contact-topic-label">{{ __('contact.topic') ?? 'موضوع التواصل' }}</span>

                        <div class="contact-topic-pills">
                            @foreach(['general','course','session','support','complaint','suggestion'] as $topic)
                                <button type="button"
                                    class="contact-topic-pill {{ old('topic','general') === $topic ? 'active' : '' }}"
                                    onclick="selectTopic(this, '{{ $topic }}')">
                                    {{ __("contact.topic_$topic") ?? $topic }}
                                </button>
                            @endforeach
                            <input type="hidden" name="topic" id="topicInput" value="{{ old('topic','general') }}">
                        </div>

                        <div class="contact-f-row">
                            <div class="contact-f-group">
                                <label class="contact-f-label">{{ __('contact.name_first') }}</label>
                                <input type="text" name="first_name" class="contact-f-input"
                                    value="{{ old('first_name') }}">
                            </div>

                            <div class="contact-f-group">
                                <label class="contact-f-label">{{ __('contact.name_last') }}</label>
                                <input type="text" name="last_name" class="contact-f-input"
                                    value="{{ old('last_name') }}">
                            </div>
                        </div>

                        <div class="contact-f-row">
                            <div class="contact-f-group">
                                <label class="contact-f-label">{{ __('contact.email') }}</label>
                                <input type="email" name="email" class="contact-f-input"
                                    value="{{ old('email') }}">
                            </div>

                            <div class="contact-f-group">
                                <label class="contact-f-label">{{ __('contact.phone') }}</label>
                                <input type="tel" name="phone" class="contact-f-input"
                                    value="{{ old('phone') }}">
                            </div>
                        </div>

                        <div class="contact-f-group">
                            <label class="contact-f-label">{{ __('contact.service') ?? 'الخدمة' }}</label>
                            <select name="service" class="contact-f-input">
                                <option value="">{{ __('common.select') ?? 'اختر الخدمة' }}</option>
                                @foreach(['courses','sessions','consultation','other'] as $service)
                                    <option value="{{ $service }}">{{ __("contact.service_$service") ?? $service }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="contact-f-group">
                            <label class="contact-f-label">{{ __('contact.message') }}</label>
                            <textarea name="message" class="contact-f-input contact-f-textarea">{{ old('message') }}</textarea>
                        </div>

                        <button type="submit" class="contact-f-submit">
                            <i class="fas fa-paper-plane"></i>
                            <span>{{ __('contact.submit') }}</span>
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>

    {{-- ═══════ MAP ═══════ --}}
    @if($settings?->map_embed_url)
    <section class="contact-map-section">
        <div class="container">
            <div class="contact-map-wrap">
                <iframe src="{{ $settings->map_embed_url }}" allowfullscreen="" loading="lazy"></iframe>
                @if($settings?->address_ar)
                <div class="contact-map-badge">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <strong>موقعنا</strong>
                        <span>{{ $settings->address_ar }}</span>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
    @endif

</main>

<script>
    // ── Topic Selector ──
    function selectTopic(btn, value) {
        document.querySelectorAll('.contact-topic-pill').forEach(p => p.classList.remove('active'));
        btn.classList.add('active');
        document.getElementById('topicInput').value = value;
    }

    // ── Star Rating ──
    function setRating(val) {
        document.getElementById('ratingInput').value = val;
        document.querySelectorAll('.contact-star-btn').forEach((btn, i) => {
            btn.classList.toggle('active', i < val);
        });
    }

    // ── Char Counter ──
    const msgArea = document.getElementById('messageArea');
    const charCount = document.getElementById('charCount');
    if (msgArea) {
        charCount.textContent = msgArea.value.length;
        msgArea.addEventListener('input', () => {
            charCount.textContent = msgArea.value.length;
        });
    }
</script>
@endsection
