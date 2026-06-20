<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>شهادة إتمام الدورة</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Tajawal:wght@300;400;500;700;800&family=Scheherazade+New:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            font-family: 'Tajawal', sans-serif;
        }

        .cert {
            width: 520px;
            height: 735px;
            position: relative;
            box-shadow: 0 20px 60px rgba(0,0,0,.55);
            overflow: hidden;
        }

        .cert-bg {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: fill;
            z-index: 0;
        }

        .cert-layer {
            position: absolute;
            inset: 0;
            z-index: 1;
        }

        /* ── Company name (navy top area) ── */
        .cert-company {
            position: absolute;
            top: 40px;
            left: 0;
            right: 135px;
            text-align: center;
        }

        .cert-company .logo-ring {
            width: 100px;
            height: 100px;
            border: 2px solid #d4920c;
            border-radius: 50%;
            background: rgba(16,21,92,.6);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            position: relative;
            margin-bottom: 10px;
        }

        .cert-company .logo-ring::before {
            content: '';
            position: absolute;
            inset: -6px;
            border-radius: 50%;
            border: 1.5px dashed rgba(212,146,12,.5);
        }

        .cert-company .name {
            color: #d4920c;
            font-size: 1.65rem;
            font-weight: 800;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            text-shadow: 0 2px 8px rgba(0,0,0,.5);
            line-height: 1;
        }

        .cert-company .tagline {
            color: rgba(255,255,255,.75);
            font-size: .72rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-top: 5px;
        }

        /* ── QR code (on the stripe, where badge was) ── */
    .cert-qr {
    position: absolute;
    top: 378px;
    right: 33px;
    width: 108px;
    height: 108px;
    background: #fff;
    padding: 5px;
    border: 2px solid #d4920c;
    box-shadow: 0 3px 10px rgba(0, 0, 0, .35);
    z-index: 5;
    border-radius: 45%;
}

        .cert-qr img {
            width: 100%;
            height: 100%;
            display: block;
        }

        /* ── CERTIFICATE label ── */
        .cert-title {
            position: absolute;
            top: 402px;
            left: 44px;
            right: 135px;
            text-align: center;
        }

        .cert-title .box {
            display: inline-block;
            background: linear-gradient(90deg, #b07000, #e8a820, #b07000);
            color: #fff;
            font-size: 1.2rem;
            font-weight: 800;
            letter-spacing: 4px;
            text-transform: uppercase;
            padding: 7px 28px;
        }

        .cert-title .of {
            color: #666;
            font-size: .9rem;
            margin-top: 5px;
        }

        /* ── Presented to ── */
        .cert-presented {
            position: absolute;
            top: 476px;
            left: 44px;
            right: 135px;
            text-align: center;
            font-family: 'Amiri', serif;
            font-style: italic;
            color: #555;
            font-size: .98rem;
        }

        /* ── Student name ── */
        .cert-name {
            position: absolute;
            top: 504px;
            left: 44px;
            right: 135px;
            text-align: center;
        }

        .cert-name span {
            font-family: 'Amiri', serif;
            font-style: italic;
            font-size: 2.2rem;
            color: #111;
            border-bottom: 1.5px solid #444;
            padding-bottom: 2px;
        }

        /* ── Description ── */
        .cert-desc {
            position: absolute;
            top: 574px;
            left: 44px;
            right: 135px;
            color: #888;
            font-size: .74rem;
            line-height: 1.9;
            text-align: justify;
        }

        /* ── Footer ── */
        .cert-footer {
            position: absolute;
            bottom: 30px;
            left: 44px;
            right: 135px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }

        .footer-col {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 3px;
            min-width: 110px;
        }

        .footer-col .f-val {
            font-family: 'Amiri', serif;
            font-style: italic;
            font-size: 1.1rem;
            color: #222;
        }

        .footer-col .f-line {
            width: 100%;
            border-top: 1.5px solid #555;
        }

        .footer-col .f-lbl {
            font-size: .75rem;
            font-weight: 700;
            letter-spacing: 1px;
            color: #444;
        }

        @media print {
            body { background: none; padding: 0; }
            .no-print { display: none !important; }
        }
    </style>
</head>
<body>

<div class="no-print" style="position:fixed;top:20px;left:20px;z-index:999;">
    <button onclick="window.print()"
        style="background:#b07000;color:#fff;border:none;padding:10px 22px;border-radius:6px;
               font-family:'Tajawal',sans-serif;font-size:.9rem;cursor:pointer;">
        <i class="fa-solid fa-print" style="margin-left:8px;"></i> طباعة الشهادة
    </button>
</div>

<div class="cert">

    <img class="cert-bg" src="{{ asset('assets/img/pngtree-vertical.png') }}" alt="" />

    <div class="cert-layer">

        {{-- Company name --}}
        <div class="cert-company">
            <div class="logo-ring">
                <img src="{{ asset('assets/img/logo.png') }}" alt="logo"
                     style="width:100px;height:100px;object-fit:contain;border-radius:50%;" />
            </div>
            <div class="name">الصعود النبيل</div>
            <div class="tagline">منصة التعليم والاستشارات</div>
        </div>

        {{-- QR code (where badge was) --}}
        <div class="cert-qr">
            <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data={{ urlencode(route('home')) }}" alt="QR" />
        </div>

        {{-- CERTIFICATE title --}}
        <div class="cert-title">
            <div class="box">شهادة</div>
            <div class="of">تقدير وإتمام</div>
        </div>

        {{-- Presented to --}}
            <div class="cert-presented">
            تُمنح هذه الشهادة بكل فخر إلى:
        </div>

        {{-- Student name --}}
        <div class="cert-name">
            <span>{{ $studentName }}</span>
        </div>

        {{-- Description --}}
        <div class="cert-desc">
            لقد أتم المتدرب المذكور أعلاه متطلبات دورة
            <strong style="color:#555;">{{ $courseName }}</strong>
            بجدارة واجتهاد، وأبدى مستوىً عالياً من الالتزام والتفوق طوال فترة التدريب.
            نتمنى له التوفيق والنجاح في مسيرته المهنية والعلمية.
        </div>

        {{-- Footer --}}
        <div class="cert-footer">
            <div class="footer-col">
                <div class="f-val">{{ $issueDate }}</div>
                <div class="f-line"></div>
                <div class="f-lbl">Date</div>
            </div>
            <div class="footer-col">
                <div class="f-val" style="font-family:'Amiri',serif;font-style:italic;font-size:1.4rem;color:#b07000;letter-spacing:1px;">الصعود النبيل</div>
                <div class="f-line"></div>
                <div class="f-lbl">التوقيع</div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
