<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NAFF | จำหน่ายเครื่องเขียน วัสดุสำนักงาน อุปกรณ์ครบวงจร</title>
    <link rel="shortcut icon" href="img/logo/2.png">

    <!-- Google Fonts: Prompt for Headings, IBM Plex Sans Thai Looped for Body -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@300;400;500;600;700&family=Prompt:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- FontAwesome & Plugins CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="polo/css/plugins.css" rel="stylesheet">
    <link href="polo/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">

    <style>
        :root {
            --primary-orange: #F9A01B;
            --text-dark: #222222;
            --cat-art: #3f73b9;
            --cat-office: #35b34b;
            --cat-paper: #ec3034;
            --cat-filing: #ef5295;
            --cat-cleaning: #fac218;
            --cat-electrical: #19b2e4;
            --cat-other: #cf1e7b;
        }

        body {
            font-family: 'IBM Plex Sans Thai Looped', sans-serif !important;
            color: var(--text-dark);
            overflow-x: clip;
            background-color: #ffffff;
            font-size: 17px;
        }

        /* Container standard width */
        .container {
            max-width: 1320px !important;
            padding-left: 20px;
            padding-right: 20px;
        }

        h1, h2, h3, h4, h5, h6, .font-heading {
            font-family: 'Prompt', sans-serif !important;
            font-weight: 600;
        }

        /* Top Navbar */
        #header {
            background: #ffffff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 999;
        }

        #header .container {
            max-width: 1320px !important;
        }

        .header-inner {
            padding: 8px 0;
        }

        .nav-logo-box {
            display: flex;
            align-items: center;
        }

        .nav-logo-box img {
            width: 180px;
            max-width: 100%;
            height: 48px;
            object-fit: contain;
            object-position: left center;
        }

        .main-nav-list {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            align-items: center;
            justify-content: center;
            gap: clamp(6px, 0.75vw, 12px);
            white-space: nowrap;
        }

        .main-nav-list li a {
            font-family: 'Prompt', sans-serif;
            font-weight: 500;
            font-size: 14px;
            color: #333333;
            text-transform: uppercase;
            transition: color 0.2s ease;
            text-decoration: none;
            white-space: nowrap;
        }

        #header .lang-switch,
        #header .social-round-btn {
            flex-shrink: 0;
        }

        #header .social-round-btn {
            margin-left: 4px;
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            #header .nav-logo-box {
                width: 22%;
            }

            #header .col-lg-7 {
                width: 58%;
            }

            #header .col-lg-2 {
                width: 20%;
            }

            .main-nav-list li a {
                font-size: 11.5px;
            }

            .nav-logo-box img {
                width: 150px;
            }

            #header .social-round-btn {
                width: 30px;
                height: 30px;
                font-size: 12px;
            }
        }

        @media (max-width: 991px) {
            .nav-logo-box img {
                width: 150px;
                height: 44px;
            }

            #header .social-round-btn {
                width: 31px;
                height: 31px;
                margin-left: 3px;
            }

            #header .lang-switch {
                margin-right: 5px !important;
            }
        }

        .mobile-menu-toggle {
            display: none;
        }

        @media (max-width: 991px) {
            #header .header-row {
                display: grid;
                grid-template-columns: 40px minmax(0, 1fr) auto;
                gap: 8px;
                padding-top: 8px;
                padding-bottom: 8px;
            }

            #header .mobile-menu-toggle {
                display: inline-flex;
                grid-column: 1;
                align-items: center;
                justify-content: center;
                width: 40px;
                height: 40px;
                padding: 0;
                border: 0;
                border-radius: 50%;
                background: transparent;
                color: #222;
                font-size: 21px;
            }

            #header .nav-logo-box {
                grid-column: 2;
                justify-content: center;
                width: auto !important;
            }

            #header .nav-logo-box img {
                width: 165px;
                height: 44px;
                object-position: center;
            }

            #header .main-nav-panel {
                display: none !important;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100% !important;
                padding: 8px 24px 18px;
                background: #fff;
                box-shadow: 0 10px 18px rgba(0, 0, 0, 0.1);
            }

            #header.mobile-nav-open .main-nav-panel {
                display: block !important;
            }

            #header .main-nav-list {
                display: flex;
                flex-direction: column;
                align-items: stretch;
                gap: 0;
            }

            #header .main-nav-list li a {
                display: block;
                padding: 12px 4px;
                border-bottom: 1px solid #f0f0f0;
                font-size: 15px;
            }

            #header .header-actions {
                grid-column: 3;
                width: auto !important;
                gap: 2px;
                padding: 0;
            }

            #header .lang-switch {
                display: inline-flex;
            }

            #header .social-round-btn {
                display: none;
            }
        }

        .main-nav-list li a:hover, .main-nav-list li a.active {
            color: var(--primary-orange) !important;
        }

        /* Language Switcher Button (Clean Rounded Pill) */
        .lang-switch {
            display: inline-flex;
            align-items: center;
            background: #f0f0f0;
            border-radius: 30px;
            padding: 2px 4px;
            height: 32px;
            box-sizing: border-box;
            font-family: 'Prompt', sans-serif;
            font-size: 13px;
            font-weight: 600;
            border: 1px solid #e0e0e0;
        }

        .lang-switch a {
            color: #666;
            text-decoration: none;
            padding: 3px 8px;
            border-radius: 20px;
            transition: all 0.2s ease;
            line-height: 1;
        }

        .lang-switch a.active {
            background: var(--primary-orange);
            color: #ffffff !important;
            box-shadow: 0 2px 6px rgba(249, 160, 27, 0.35);
        }

        .lang-switch span {
            color: #ccc;
            font-size: 10px;
            line-height: 1;
            user-select: none;
        }

        /* Top Social Round Buttons */
        .social-round-btn {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: var(--primary-orange);
            color: white !important;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-left: 4px;
            font-size: 12px;
            transition: transform 0.2s ease;
            text-decoration: none;
        }

        .social-round-btn:hover {
            transform: scale(1.1);
        }

        /* Hero Banner Section (Page 1) */
        .hero-banner {
            position: relative;
            background: url('img/banner/hero-office-bg.jpg') center bottom / cover no-repeat;
            min-height: 620px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0;
            overflow: hidden;
        }

        .hero-banner-inner {
            width: 100%;
            height: 100%;
            min-height: 620px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            padding: 40px 15px 0;
            position: relative;
            z-index: 2;
        }

        .hero-top-content {
            margin-top: 20px;
        }

        .hero-logo-box {
            margin-bottom: 15px;
        }

        .hero-tagline-clean {
            font-family: 'Prompt', sans-serif;
            font-size: 1.75rem;
            color: #1a1a1a;
            font-weight: 600;
            line-height: 1.5;
            margin: 0;
            max-width: 960px;
            text-shadow: 0 1px 3px rgba(255, 255, 255, 0.95), 0 0 15px rgba(255, 255, 255, 0.9);
        }

        .hero-products-bottom {
            width: 94vw;
            max-width: 1540px;
            margin: 20px auto 0;
            display: block;
        }

        .hero-products-bottom img {
            width: 100%;
            height: auto;
            display: block;
            margin: auto;
            filter: drop-shadow(0 10px 15px rgba(0,0,0,0.15));
        }

        /* Section Titles */
        .section-header-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .section-header-title h2 {
            font-size: 3rem;
            color: #222;
            margin: 0;
        }

        .section-header-title h2 span.orange {
            color: var(--primary-orange);
        }

        .section-header-title p {
            color: #666;
            font-size: 1rem;
            margin-top: 6px;
        }

        #products .container,
        #bestseller .container {
            width: 100%;
            max-width: none !important;
            padding-left: clamp(20px, 4vw, 72px);
            padding-right: clamp(20px, 4vw, 72px);
        }

        /* Products Category Grid (Page 2) - Balanced & Centered */
        .category-icons-grid {
            display: grid;
            grid-template-columns: repeat(7, minmax(0, 1fr));
            gap: clamp(12px, 1.4vw, 22px);
            margin-bottom: 25px;
            max-width: none;
            margin-left: auto;
            margin-right: auto;
        }

        .category-card {
            background: #ffffff;
            border: 1px solid #ebebeb;
            border-radius: 16px;
            padding: clamp(18px, 2vw, 28px) 12px;
            width: auto;
            min-width: 0;
            text-align: center;
            cursor: pointer;
            transition: all 0.25s ease;
            box-shadow: 0 3px 10px rgba(0,0,0,0.03);
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }

        .category-card:hover, .category-card.active {
            transform: translateY(-4px);
            box-shadow: 0 8px 18px rgba(0,0,0,0.08);
            border-color: #ddd;
        }

        .cat-circle-icon {
            width: clamp(70px, 5.5vw, 92px);
            height: clamp(70px, 5.5vw, 92px);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: clamp(28px, 2.2vw, 38px);
            margin-bottom: 12px;
            transition: transform 0.28s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 0.28s ease;
            position: relative;
        }

        .category-card:hover .cat-circle-icon {
            transform: translateY(-7px) scale(1.1) rotate(-4deg);
            box-shadow: 0 10px 18px rgba(0, 0, 0, 0.16);
            animation: icon-bounce 0.55s ease both;
        }

        @keyframes icon-bounce {
            0% { transform: translateY(0) scale(1); }
            55% { transform: translateY(-9px) scale(1.12) rotate(-5deg); }
            100% { transform: translateY(-7px) scale(1.1) rotate(-4deg); }
        }

        @media (prefers-reduced-motion: reduce) {
            .category-card:hover .cat-circle-icon {
                animation: none;
                transform: scale(1.06);
            }
        }

        .cat-title {
            font-family: 'Prompt', sans-serif;
            font-size: clamp(13px, 1vw, 16px);
            font-weight: 600;
            color: #333333;
            line-height: 1.35;
            min-height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Product Showcase & Custom Colored Tabs (Page 3) */
        .product-nav-tabs {
            display: flex;
            flex-wrap: nowrap;
            justify-content: flex-start;
            overflow-x: auto;
            gap: 8px;
            border-bottom: 2px solid #eaeaea;
            margin-bottom: 30px;
            padding: 0;
            list-style: none;
            scrollbar-width: thin;
        }

        .product-nav-tabs li {
            flex: 0 0 auto;
        }

        .product-nav-tabs li a {
            display: block;
            padding: 10px 14px;
            font-family: 'Prompt', sans-serif;
            font-weight: 500;
            font-size: 16px;
            color: #666;
            text-decoration: none;
            border-bottom: 3px solid transparent;
            margin-bottom: -2px;
            transition: all 0.2s ease;
        }

        .product-nav-tabs li a[data-cat="1"].active { border-color: var(--cat-art); color: var(--cat-art); font-weight: 600; }
        .product-nav-tabs li a[data-cat="2"].active { border-color: var(--cat-office); color: var(--cat-office); font-weight: 600; }
        .product-nav-tabs li a[data-cat="3"].active { border-color: var(--cat-paper); color: var(--cat-paper); font-weight: 600; }
        .product-nav-tabs li a[data-cat="4"].active { border-color: var(--cat-filing); color: var(--cat-filing); font-weight: 600; }
        .product-nav-tabs li a[data-cat="5"].active { border-color: var(--cat-cleaning); color: var(--cat-cleaning); font-weight: 600; }
        .product-nav-tabs li a[data-cat="6"].active { border-color: var(--cat-electrical); color: var(--cat-electrical); font-weight: 600; }
        .product-nav-tabs li a[data-cat="7"].active { border-color: var(--cat-other); color: var(--cat-other); font-weight: 600; }

        /* Product Cards Grid (10 items: 5 per row, compact & clean) */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 1fr));
            gap: clamp(14px, 1.5vw, 24px);
            margin-bottom: 20px;
        }

        @media (max-width: 1100px) {
            .product-grid { grid-template-columns: repeat(4, minmax(0, 1fr)); }
            .category-icons-grid { grid-template-columns: repeat(4, minmax(0, 1fr)); }
        }
        @media (max-width: 850px) { .product-grid { grid-template-columns: repeat(3, 1fr); gap: 12px; } }
        @media (max-width: 580px) {
            .product-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10px; }
            .category-icons-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }

        .product-item-card {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #ededed;
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
            text-align: center;
            padding: clamp(10px, 1.2vw, 20px);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-item-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.06);
            border-color: #ddd;
        }

        .product-item-card img {
            width: 100%;
            height: clamp(150px, 16vw, 230px);
            object-fit: contain;
            border-radius: 6px;
            margin-bottom: 8px;
            cursor: zoom-in;
        }

        .product-item-card img:focus-visible,
        .bestseller-card img:focus-visible {
            outline: 3px solid var(--primary-orange);
            outline-offset: 3px;
        }

        .product-badge {
            font-size: 14px;
            font-weight: 500;
            color: #444;
            line-height: 1.35;
        }

        .product-footer-note {
            text-align: center;
            font-size: 0.95rem;
            color: #777;
            margin: 20px auto 0;
            max-width: 800px;
        }

        /* Best Seller Gradient Cards (Page 4) */
        .bestseller-card {
            background: linear-gradient(180deg, #f4eef9 0%, #fff9f0 100%);
            border-radius: 14px;
            padding: 14px 10px;
            min-height: 260px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 1px solid #ebdcf5;
            transition: all 0.25s;
            text-align: center;
        }

        .bestseller-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 18px rgba(180, 150, 210, 0.18);
        }

        .bestseller-card img {
            max-height: 175px;
            object-fit: contain;
            margin-bottom: 8px;
            cursor: zoom-in;
        }

        .product-image-viewer {
            position: fixed;
            inset: 0;
            z-index: 2100;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 24px;
            background: rgba(0, 0, 0, 0.82);
        }

        .product-image-viewer.is-open {
            display: flex;
        }

        .product-image-viewer-content {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 94vw;
            max-height: 94vh;
        }

        .product-image-viewer-image {
            display: block;
            max-width: 94vw;
            max-height: 82vh;
            object-fit: contain;
            background: #fff;
            border-radius: 8px;
        }

        .product-image-viewer-caption {
            margin: 12px 0 0;
            color: #fff;
            font-size: 1rem;
            font-weight: 500;
            text-align: center;
        }

        .product-image-viewer-close {
            position: absolute;
            top: -18px;
            right: -18px;
            z-index: 1;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            padding: 0;
            border: 0;
            border-radius: 50%;
            background: #fff;
            color: #222;
            font-size: 20px;
            cursor: pointer;
        }

        .product-image-viewer-open {
            overflow: hidden;
        }

        @media (max-width: 580px) {
            .product-image-viewer {
                padding: 16px;
            }

            .product-image-viewer-close {
                top: -12px;
                right: -12px;
            }
        }

        /* Online Stores (Page 5) */
        .store-platform-container {
            position: relative;
            padding: 50px 0;
        }

        .store-pill-btn {
            display: flex;
            align-items: center;
            background: #ffffff;
            border: 1px solid #e8e8e8;
            border-radius: 50px;
            padding: 8px 22px 8px 8px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.04);
            text-decoration: none;
            color: #333;
            font-family: 'Prompt', sans-serif;
            font-weight: 600;
            font-size: 15px;
            transition: all 0.25s ease;
            max-width: 350px;
            margin: auto;
        }

        .store-pill-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 18px rgba(0,0,0,0.08);
            color: var(--primary-orange);
            border-color: #ddd;
        }

        .store-icon-circle {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            margin-right: 14px;
            flex-shrink: 0;
        }

        .icon-shopee { background: #EE4D2D; }
        .icon-lazada { background: #0F146D; }
        .icon-tiktok { background: #000000; }

        .store-clips-decor {
            position: absolute;
            right: 5%;
            top: 20px;
            width: 120px;
            pointer-events: none;
            z-index: 5;
        }

        @media (max-width: 991px) {
            .store-clips-decor { display: none; }
        }

        /* About Us Carousel (Page 6) */
        .about-section-wrapper {
            background-color: #F8E4C5;
            padding: 55px 0;
            position: relative;
        }

        .about-carousel-box img {
            border-radius: 12px;
            width: 100%;
            height: 390px;
            object-fit: cover;
            box-shadow: 0 8px 18px rgba(0,0,0,0.08);
        }

        .about-text-content {
            padding-left: 15px;
        }

        .about-text-content h2 {
            font-size: 3.6rem;
            margin-bottom: 16px;
        }

        .about-text-content h2 span {
            color: var(--primary-orange);
        }

        .about-text-content p {
            font-size: 1.15rem;
            line-height: 1.8;
            color: #333;
            margin-bottom: 12px;
        }

        /* Footer & Contact Section (Page 8) */
        .footer-main-contact {
            background-color: #F9A01B;
            color: #ffffff;
            padding: 45px 0 35px;
        }

        .footer-info-col h3 {
            font-size: 1.8rem;
            color: #ffffff;
            margin-bottom: 6px;
        }

        .footer-info-col h4 {
            font-size: 1.15rem;
            font-weight: 500;
            color: #ffffff;
            margin-bottom: 15px;
        }

        .contact-item-row {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 8px;
            font-size: 1rem;
            color: #ffffff;
        }

        .contact-item-row i {
            font-size: 1.15rem;
            width: 22px;
            text-align: center;
        }

        .contact-item-row a {
            color: #ffffff;
            text-decoration: none;
        }

        .contact-item-row a:hover {
            text-decoration: underline;
        }

        .bottom-copyright-bar {
            background-color: #2c2c2c;
            color: #ffffff;
            padding: 12px 0;
            font-size: 13px;
            text-align: center;
        }

        .floating-contact-widget {
            position: fixed;
            right: 16px;
            bottom: 16px;
            z-index: 1100;
        }

        .floating-contact-menu {
            position: absolute;
            right: 0;
            bottom: 72px;
            display: flex;
            flex-direction: column;
            gap: 12px;
            visibility: hidden;
            opacity: 0;
            pointer-events: none;
            transform: translateY(10px);
            transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s;
        }

        .floating-contact-widget.is-open .floating-contact-menu {
            visibility: visible;
            opacity: 1;
            pointer-events: auto;
            transform: translateY(0);
        }

        .floating-contact-action,
        .floating-contact-toggle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--primary-orange);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.23);
            cursor: pointer;
            transition: transform 0.2s ease, background-color 0.2s ease;
            text-decoration: none;
        }

        .floating-contact-action:hover,
        .floating-contact-toggle:hover {
            transform: scale(1.06);
            color: #fff;
        }

        .floating-contact-toggle {
            border: 0;
        }

        .floating-contact-action:focus-visible,
        .floating-contact-toggle:focus-visible {
            outline: 3px solid #222;
            outline-offset: 3px;
        }

        @media (prefers-reduced-motion: reduce) {
            .floating-contact-menu,
            .floating-contact-action,
            .floating-contact-toggle {
                transition: none;
            }
        }

        .branch-section {
            padding: 75px 0;
            background: #fffaf3 url('img/bg/2.png') center / cover no-repeat;
        }

        .branch-carousel {
            margin: 0 -12px 28px;
        }

        .branch-carousel .slick-slide {
            height: auto;
            padding: 12px;
        }

        .branch-carousel .slick-slide > div {
            height: 100%;
        }

        .branch-card {
            height: 100%;
            overflow: hidden;
            border: 1px solid #eee6dc;
            border-radius: 18px;
            background: #fff;
            box-shadow: 0 8px 24px rgba(70, 50, 25, 0.08);
            text-align: center;
        }

        .branch-card iframe {
            display: block;
            width: 100%;
            height: 270px;
            border: 0;
        }

        .branch-card-content {
            padding: 22px 18px 24px;
        }

        .branch-card h3 {
            margin: 0 0 8px;
            color: #292929;
            font-size: 1.25rem;
        }

        .branch-card p {
            margin: 0;
            color: #666;
            font-size: 1rem;
        }

        .branch-card a {
            color: inherit;
            text-decoration: none;
        }

        .branch-card a:hover {
            color: var(--primary-orange);
        }

        .branch-carousel .bg-white {
            overflow: hidden;
            padding: 0 !important;
            border: 1px solid #eee6dc;
            border-radius: 18px !important;
            background: #fff;
            box-shadow: 0 8px 24px rgba(70, 50, 25, 0.08) !important;
        }

        .branch-carousel .bg-white iframe {
            height: 270px !important;
            border: 0 !important;
            border-radius: 0 !important;
        }

        .branch-carousel .bg-white h4 {
            margin: 22px 18px 8px !important;
            color: #292929;
            font-size: 1.25rem !important;
        }

        .branch-carousel .bg-white p {
            margin: 0 18px 24px !important;
            font-size: 1rem;
        }

        .branch-carousel .slick-prev,
        .branch-carousel .slick-next {
            z-index: 2;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: var(--primary-orange);
        }

        .branch-carousel .slick-prev {
            left: -2px;
        }

        .branch-carousel .slick-next {
            right: -2px;
        }

        .branch-carousel .slick-prev:before,
        .branch-carousel .slick-next:before {
            color: #fff;
            font-size: 20px;
            opacity: 1;
        }

        .branch-carousel .slick-dots {
            bottom: -28px;
        }

        .branch-carousel .slick-dots li button:before {
            color: var(--primary-orange);
            font-size: 10px;
        }

        @media (max-width: 767px) {
            .branch-section {
                padding: 55px 0;
            }

            .branch-card iframe {
                height: 240px;
            }

            .branch-carousel .bg-white iframe {
                height: 240px !important;
            }

            .branch-carousel .slick-prev {
                left: 0;
            }

            .branch-carousel .slick-next {
                right: 0;
            }
        }
    </style>
</head>

<body>
    <!-- Top Header -->
    <header id="header">
        <div class="container">
            <div class="row header-row align-items-center py-2">
                <button class="mobile-menu-toggle" type="button" aria-label="เปิดเมนู" aria-expanded="false" aria-controls="main-navigation">
                    <i class="fas fa-bars" aria-hidden="true"></i>
                </button>
                <!-- NEW Logo as per Slide 1 -->
                <div class="col-lg-3 col-6 nav-logo-box">
                    <a href="#home">
                        <img src="img/logo/Logo_NAFF_New.png" alt="NAFF Stationery">
                    </a>
                </div>

                <!-- Navigation Ordered as per Slide 9 -->
                <div class="col-lg-7 main-nav-panel" id="main-navigation">
                    <ul class="main-nav-list">
                        <li><a href="#home" class="active" data-i18n="nav_home">หน้าหลัก</a></li>
                        <li><a href="#aboutus" data-i18n="nav_about">รู้จักเรา</a></li>
                        <li><a href="#products" data-i18n="nav_products">สินค้าของเรา</a></li>
                        <li><a href="#bestseller" data-i18n="nav_bestseller">สินค้าขายดี</a></li>
                        <li><a href="#onlinestore" data-i18n="nav_store">ร้านค้าออนไลน์</a></li>
                        <li><a href="#branch" data-i18n="nav_branch">สาขาของ NAFF</a></li>
                        <li><a href="#contact" data-i18n="nav_contact">ติดต่อเรา</a></li>
                    </ul>
                </div>

                <!-- Language Switcher & Quick Contact (Slide 1 & 9) -->
                <div class="col-lg-2 col-6 text-end d-flex align-items-center justify-content-end header-actions">
                    <div class="lang-switch me-2">
                        <a href="javascript:void(0)" class="active" id="btn-th">TH</a>
                        <span>/</span>
                        <a href="javascript:void(0)" id="btn-en">EN</a>
                    </div>
                    <a target="_blank" href="https://www.facebook.com/NaffStationery1" class="social-round-btn" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a target="_blank" href="https://line.me/R/ti/p/@280pxmci" class="social-round-btn" title="Line"><i class="fab fa-line"></i></a>
                    <a href="tel:0864695163" class="social-round-btn" title="Phone"><i class="fas fa-phone-alt"></i></a>
                </div>
            </div>
        </div>
    </header>

    <!-- SECTION: HOME / HERO (Slide 1: Clean background with logo, tagline & products row) -->
    <section id="home" class="hero-banner">
        <div class="container hero-banner-inner">
            <div class="hero-top-content">
                <!-- Large Logo NEW (Slide 1) -->
                <div class="hero-logo-box">
                    <img src="img/logo/Logo_NAFF_New.png" alt="NAFF" style="width: 300px; max-width: 70vw; height: 86px; object-fit: contain;">
                </div>

                <h1 class="hero-tagline-clean" data-i18n="hero_tagline">
                    จำหน่ายเครื่องเขียน วัสดุสำนักงาน อุปกรณ์ทำความสะอาด งานบ้านงานครัว และรับเทรดดิ้งสินค้าทุกประเภท
                </h1>
            </div>

            <!-- Products Row Image uploaded by user -->
            <div class="hero-products-bottom">
                <img src="img/banner/hero-products.png" alt="NAFF Products Showcase">
            </div>
        </div>
    </section>

    <!-- SECTION: ABOUT US / รู้จักเรา (ย้ายมาไว้ก่อน สินค้าของเรา ตามคำขอ พร้อมรูปจากไดรฟ์) -->
    <section id="aboutus" class="about-section-wrapper" style="background-color: #F8E4C5; padding: 60px 0;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left: 4-image Carousel (จาก Google Drive) -->
                <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                    <div class="about-carousel-box" id="about-slider">
                        <div><img src="img/aboutus/slide1.jpg" alt="About NAFF 1"></div>
                        <div><img src="img/aboutus/slide2.jpg" alt="About NAFF 2"></div>
                        <div><img src="img/aboutus/slide3.jpg" alt="About NAFF 3"></div>
                        <div><img src="img/aboutus/slide4.jpg" alt="About NAFF 4"></div>
                    </div>
                </div>

                <!-- Right: Text Content -->
                <div class="col-lg-6 col-12 about-text-content">
                    <h2><span data-i18n="about_title_span">รู้</span><span data-i18n="about_title_rest">จักเรา</span></h2>
                    <p data-i18n="about_p1">
                        บริษัท นาฟ จำกัด ก่อตั้งขึ้นเมื่อวันที่ 10 สิงหาคม 2543 (เดิมชื่อ บริษัท นาฟ สเตชั่นเนอรี่ จำกัด) ดำเนินธุรกิจด้านการจัดหาและจำหน่ายวัสดุสำนักงานทุกประเภท (Office Supplies Trader Company) สำหรับโรงงานอุตสาหกรรม บริษัทเอกชนทั่วไป และหน่วยงานราชการต่างๆ อีกทั้งให้บริการทางออนไลน์บนแพลตฟอร์มชั้นนำ เพื่อให้บริการและตอบสนองความต้องการของลูกค้าอย่างครบวงจร
                    </p>
                    <p data-i18n="about_p2">
                        ด้วยประสบการณ์ในการดำเนินธุรกิจมายาวนานกว่า 25 ปี เรามุ่งมั่นพัฒนาการให้บริการด้วยความซื่อสัตย์ และคัดสรรสินค้าที่มีคุณภาพ เพื่อสร้างความพึงพอใจและความเชื่อมั่นให้แก่ลูกค้าอย่างต่อเนื่อง
                    </p>
                    <p style="font-weight: 500;" data-i18n="about_p3">
                        ปัจจุบันบริษัทมีสำนักงานใหญ่ตั้งอยู่ที่จังหวัดนครราชสีมา และมีสาขาให้บริการในจังหวัดระยอง จังหวัดปราจีนบุรี และกรุงเทพมหานคร พร้อมรองรับการให้บริการลูกค้าในพื้นที่ต่างๆ อย่างครอบคลุม
                    </p>
                    <p data-i18n="about_history">
                        ในปี 2555 บริษัทเคยขยายสาขาย่อยบริเวณมหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน เพื่อดูแลลูกค้ากลุ่มมหาวิทยาลัยและโรงพยาบาล
                    </p>
                    <p data-i18n="about_mission">
                        ภารกิจของเราคือช่วยเหลือลูกค้าในการจัดหาสินค้าและบริการอย่างรับผิดชอบและซื่อตรง
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: PRODUCTS / สินค้าของเรา (Slide 2 & 3) -->
    <section id="products" style="padding: 70px 0 50px; background-color: #fbfbfb;">
        <div class="container">
            <div class="section-header-title">
                <h2><span class="orange" data-i18n="prod_head_span">สินค้า</span><span data-i18n="prod_head_rest">ของเรา</span></h2>
                <p data-i18n="prod_head_sub">เลือกหมวดหมู่สินค้าที่ต้องการค้นหาได้ทันที</p>
            </div>

            <!-- 7 Category Circle Icons (Slide 2) -->
            <div class="category-icons-grid" id="cat-icon-container">
                <!-- 1: เครื่องเขียนและอุปกรณ์ศิลปะ (#3f73b9) -->
                <a href="#product-showcase" class="category-card" onclick="selectCategory(1)">
                    <div class="cat-circle-icon" style="background-color: var(--cat-art);">
                        <i class="fas fa-palette"></i>
                    </div>
                    <span class="cat-title" data-i18n="cat_1">เครื่องเขียน<br>และอุปกรณ์ศิลปะ</span>
                </a>

                <!-- 2: อุปกรณ์สำนักงาน (#35b34b) -->
                <a href="#product-showcase" class="category-card" onclick="selectCategory(2)">
                    <div class="cat-circle-icon" style="background-color: var(--cat-office);">
                        <i class="fas fa-paperclip"></i>
                    </div>
                    <span class="cat-title" data-i18n="cat_2">อุปกรณ์สำนักงาน</span>
                </a>

                <!-- 3: กระดาษ (#ec3034) -->
                <a href="#product-showcase" class="category-card" onclick="selectCategory(3)">
                    <div class="cat-circle-icon" style="background-color: var(--cat-paper);">
                        <i class="fas fa-copy"></i>
                    </div>
                    <span class="cat-title" data-i18n="cat_3">กระดาษ</span>
                </a>

                <!-- 4: แฟ้มและอุปกรณ์จัดเก็บเอกสาร (#ef5295) -->
                <a href="#product-showcase" class="category-card" onclick="selectCategory(4)">
                    <div class="cat-circle-icon" style="background-color: var(--cat-filing);">
                        <i class="fas fa-folder-open"></i>
                    </div>
                    <span class="cat-title" data-i18n="cat_4">แฟ้มและอุปกรณ์<br>จัดเก็บเอกสาร</span>
                </a>

                <!-- 5: ผลิตภัณฑ์ทำความสะอาด (#fac218) -->
                <a href="#product-showcase" class="category-card" onclick="selectCategory(5)">
                    <div class="cat-circle-icon" style="background-color: var(--cat-cleaning);">
                        <i class="fas fa-spray-can"></i>
                    </div>
                    <span class="cat-title" data-i18n="cat_5">ผลิตภัณฑ์<br>ทำความสะอาด</span>
                </a>

                <!-- 6: เครื่องใช้ไฟฟ้าสำนักงาน (#19b2e4) -->
                <a href="#product-showcase" class="category-card" onclick="selectCategory(6)">
                    <div class="cat-circle-icon" style="background-color: var(--cat-electrical);">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <span class="cat-title" data-i18n="cat_6">เครื่องใช้ไฟฟ้า<br>สำนักงาน</span>
                </a>

                <!-- 7: สินค้าอื่นๆ (#cf1e7b) -->
                <a href="#product-showcase" class="category-card" onclick="selectCategory(7)">
                    <div class="cat-circle-icon" style="background-color: var(--cat-other);">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <span class="cat-title" data-i18n="cat_7">สินค้าอื่นๆ</span>
                </a>
            </div>

            <!-- PRODUCT SHOWCASE WITH COLORED UNDERLINE TABS (Slide 3) -->
            <div id="product-showcase" style="margin-top: 50px;">
                <!-- Custom Underlined Tabs according to the 7 category colors -->
                <ul class="product-nav-tabs">
                    <li><a href="javascript:void(0)" class="active" data-cat="1" onclick="switchTab(1)" data-i18n="tab_1">เครื่องเขียนและอุปกรณ์ศิลปะ</a></li>
                    <li><a href="javascript:void(0)" data-cat="2" onclick="switchTab(2)" data-i18n="tab_2">อุปกรณ์สำนักงาน</a></li>
                    <li><a href="javascript:void(0)" data-cat="3" onclick="switchTab(3)" data-i18n="tab_3">กระดาษ</a></li>
                    <li><a href="javascript:void(0)" data-cat="4" onclick="switchTab(4)" data-i18n="tab_4">แฟ้มและอุปกรณ์จัดเก็บเอกสาร</a></li>
                    <li><a href="javascript:void(0)" data-cat="5" onclick="switchTab(5)" data-i18n="tab_5">ผลิตภัณฑ์ทำความสะอาด</a></li>
                    <li><a href="javascript:void(0)" data-cat="6" onclick="switchTab(6)" data-i18n="tab_6">เครื่องใช้ไฟฟ้าสำนักงาน</a></li>
                    <li><a href="javascript:void(0)" data-cat="7" onclick="switchTab(7)" data-i18n="tab_7">สินค้าอื่นๆ</a></li>
                </ul>

                <!-- 10 Product Cards Grid (Slide 3) -->
                <div class="product-grid" id="product-items-display">
                    <!-- Dynamic rendering via JS for categories -->
                </div>

                <!-- Note as required in Slide 3 -->
                <p class="product-footer-note" data-i18n="product_footer_note">
                    สินค้ามากกว่า 1,000 รายการพร้อมส่ง! สินค้าที่แสดงเป็นเพียงตัวอย่างบางส่วน หากต้องการเรียนรู้สินค้าเพิ่มเติม สามารถติดต่อสอบถามได้เลย
                </p>
            </div>
        </div>
    </section>

    <!-- SECTION: BEST SELLER / สินค้าขายดี (Slide 4) -->
    <section id="bestseller" style="padding: 70px 0; background-color: #ffffff;">
        <div class="container">
            <div class="section-header-title">
                <h2><span class="orange" data-i18n="best_head_span">สินค้า</span><span data-i18n="best_head_rest">ขายดี</span></h2>
                <p data-i18n="best_head_sub">สินค้ายอดนิยมที่ลูกค้าธุรกิจและสำนักงานเลือกใช้มากที่สุด</p>
            </div>

            <div class="product-grid">
                <!-- 10 Best Seller Items with pastel gradient cards -->
                <div class="bestseller-card">
                    <img src="img/product/cat1/1.png" alt="Best Seller 1">
                    <div class="product-badge" data-i18n="best_item_1">ปากกาหมึกเจลคุณภาพสูง</div>
                </div>
                <div class="bestseller-card">
                    <img src="img/product/cat1/n1.png" alt="Best Seller 2">
                    <div class="product-badge" data-i18n="best_item_2">ชุดดินสอกดและยางลบ</div>
                </div>
                <div class="bestseller-card">
                    <img src="img/product/cat2/n1.png" alt="Best Seller 3">
                    <div class="product-badge" data-i18n="best_item_3">เครื่องเย็บกระดาษ Heavy Duty</div>
                </div>
                <div class="bestseller-card">
                    <img src="img/product/cat3/1.png" alt="Best Seller 4">
                    <div class="product-badge" data-i18n="best_item_4">กระดาษถ่ายเอกสาร A4 80 แกรม</div>
                </div>
                <div class="bestseller-card">
                    <img src="img/product/cat4/1.png" alt="Best Seller 5">
                    <div class="product-badge" data-i18n="best_item_5">แฟ้มตราช้างก้านยก 3 นิ้ว</div>
                </div>
                <div class="bestseller-card">
                    <img src="img/product/cat5/1.png" alt="Best Seller 6">
                    <div class="product-badge" data-i18n="best_item_6">น้ำยาทำความสะอาดอเนกประสงค์</div>
                </div>
                <div class="bestseller-card">
                    <img src="img/product/cat6/1.png" alt="Best Seller 7">
                    <div class="product-badge" data-i18n="best_item_7">เครื่องทำลายเอกสารสำนักงาน</div>
                </div>
                <div class="bestseller-card">
                    <img src="img/product/cat7/1.png" alt="Best Seller 8">
                    <div class="product-badge" data-i18n="best_item_8">เทปใสกาวเหนียวพิเศษ</div>
                </div>
                <div class="bestseller-card">
                    <img src="img/product/cat2/2.png" alt="Best Seller 9">
                    <div class="product-badge" data-i18n="best_item_9">กรรไกรสเตนเลสแท้</div>
                </div>
                <div class="bestseller-card">
                    <img src="img/product/cat1/3.png" alt="Best Seller 10">
                    <div class="product-badge" data-i18n="best_item_10">ชุดปากกาเน้นข้อความหลากสี</div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: ONLINE STORE / ร้านค้าออนไลน์ (Slide 5: Shopee, Lazada, TikTok) -->
    <section id="onlinestore" class="store-platform-container" style="background-color: #fbfbfb; padding: 60px 0;">
        <img class="store-clips-decor" src="img/bg/1.png" alt="Clips decor">
        <div class="container">
            <div class="section-header-title">
                <h2><span class="orange" data-i18n="store_head_span">ร้านค้า</span><span data-i18n="store_head_rest">ออนไลน์</span></h2>
                <p data-i18n="store_head_sub">ช่องทางการจัดจำหน่ายบนแพลตฟอร์มออนไลน์ของเรา</p>
            </div>

            <div class="row justify-content-center g-4">
                <!-- Shopee -->
                <div class="col-lg-4 col-md-6 col-11">
                    <a target="_blank" href="https://shope.ee/LGI3m3Jdy" class="store-pill-btn">
                        <div class="store-icon-circle icon-shopee">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <div>
                            <div style="font-size: 13px; color: #888;" data-i18n="store_shopee">Shopee Official</div>
                            <div>Naffstationery</div>
                        </div>
                    </a>
                </div>

                <!-- Lazada -->
                <div class="col-lg-4 col-md-6 col-11">
                    <a target="_blank" href="https://s.lazada.co.th/s.RDUdS" class="store-pill-btn">
                        <div class="store-icon-circle icon-lazada">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div>
                            <div style="font-size: 13px; color: #888;" data-i18n="store_lazada">Lazada Official</div>
                            <div data-i18n="store_lazada_name">นาฟ สเตชั่นเนอรี่</div>
                        </div>
                    </a>
                </div>

                <!-- TikTok (Added as per Slide 5) -->
                <div class="col-lg-4 col-md-6 col-11">
                    <a target="_blank" href="https://www.tiktok.com/@naff.tiktok" class="store-pill-btn">
                        <div class="store-icon-circle icon-tiktok">
                            <i class="fab fa-tiktok"></i>
                        </div>
                        <div>
                            <div style="font-size: 13px; color: #888;" data-i18n="store_tiktok">TikTok Shop</div>
                            <div>Naffstationery</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: BRANCHES / สาขาของ NAFF (Slide 7: Kept intact) -->
    <section id="branch" class="branch-section">
        <div class="container">
            <div class="section-header-title">
                <h2><span data-i18n="branch_head_prefix">สาขาของ </span><span class="orange">NAFF</span></h2>
                <p data-i18n="branch_head_sub">ศูนย์กระจายสินค้าและสาขาให้บริการครอบคลุมทั่วประเทศ</p>
            </div>

            <div class="branch-carousel" id="branch-carousel">
                <div class="branch-slide">
                    <article class="branch-card">
                        <iframe title="แผนที่สำนักงานใหญ่ นครราชสีมา" data-i18n-title="map_hq" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d495.8776669466488!2d102.10545051019858!3d14.987821410967452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTTCsDU5JzE2LjEiTiAxMDLCsDA2JzIwLjQiRQ!5e0!3m2!1sen!2sth!4v1678777221534!5m2!1sen!2sth" loading="lazy" allowfullscreen></iframe>
                        <div class="branch-card-content">
                            <h3 data-i18n="branch_hq">สำนักงานใหญ่ นครราชสีมา</h3>
                            <p><span data-i18n="tel_label">โทร.</span> <a href="tel:044247982">044-247982</a>, <a href="tel:044256375">044-256375</a></p>
                        </div>
                    </article>
                </div>
                <div class="branch-slide">
                    <article class="branch-card">
                        <iframe title="แผนที่สาขาปราจีนบุรี" data-i18n-title="map_prachin" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d498.31098618939177!2d101.58675966655547!3d13.898927393983495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTPCsDUzJzU1LjkiTiAxMDHCsDM1JzEzLjAiRQ!5e0!3m2!1sen!2sth!4v1678777385212!5m2!1sen!2sth" loading="lazy" allowfullscreen></iframe>
                        <div class="branch-card-content">
                            <h3 data-i18n="branch_prachin">สาขาปราจีนบุรี</h3>
                            <p><span data-i18n="tel_label">โทร.</span> <a href="tel:037573491">037-573491</a>-<a href="tel:037573492">2</a></p>
                        </div>
                    </article>
                </div>
                <div class="branch-slide">
                    <article class="branch-card">
                        <iframe title="แผนที่สาขาระยอง" data-i18n-title="map_rayong" src="https://maps.google.com/maps?q=13.0073889%2C101.1241944&hl=th&z=16&output=embed" loading="lazy" allowfullscreen></iframe>
                        <div class="branch-card-content">
                            <h3 data-i18n="branch_rayong">สาขาระยอง</h3>
                            <p><span data-i18n="tel_label">โทร.</span> <a href="tel:033650156">033-650156</a></p>
                        </div>
                    </article>
                </div>
                <div class="branch-slide">
                    <article class="branch-card">
                        <iframe title="แผนที่สาขากรุงเทพมหานคร" data-i18n-title="map_bangkok" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d914.4301150674597!2d100.65561510594085!3d13.765615492391388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTPCsDQ1JzU2LjAiTiAxMDDCsDM5JzIxLjMiRQ!5e0!3m2!1sen!2sth!4v1678777771340!5m2!1sen!2sth" loading="lazy" allowfullscreen></iframe>
                        <div class="branch-card-content">
                            <h3 data-i18n="branch_bangkok">สาขากรุงเทพมหานคร</h3>
                            <p><span data-i18n="tel_label">โทร.</span> <a href="tel:0621153381">062-115-3381</a></p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: CONTACT / ติดต่อเรา (Slide 8 Updated Contact Info) -->
    <footer id="contact">
        <div class="footer-main-contact">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Contact Info (Slide 8) -->
                    <div class="col-lg-4 col-md-6 col-12 footer-info-col mb-4 mb-lg-0">
                        <h3 data-i18n="footer_contact_title">ติดต่อเรา NAFF</h3>
                        <h4 data-i18n="footer_hours">เวลาทำการ จันทร์-ศุกร์ เวลา 8.00 น. - 17.30 น.</h4>

                        <div class="contact-item-row">
                            <i class="fab fa-facebook"></i>
                            <span>FB - <a target="_blank" href="https://www.facebook.com/NaffStationery1">Naff Stationery</a></span>
                        </div>
                        <div class="contact-item-row">
                            <i class="fas fa-phone-alt"></i>
                            <span><span data-i18n="footer_tel">โทร.</span> 044-247-982, 044-256-375</span>
                        </div>
                        <div class="contact-item-row">
                            <i class="fas fa-headset"></i>
                            <span>086-469-5163 (<span data-i18n="footer_sales">ฝ่ายขาย</span>)</span>
                        </div>
                        <div class="contact-item-row">
                            <i class="fas fa-globe"></i>
                            <span>065-234-7944 (<span data-i18n="footer_online">แผนกออนไลน์</span>)</span>
                        </div>
                    </div>

                    <!-- Middle: Facebook Widget -->
                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 text-center">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FNaffStationery1%2F&tabs=timeline&width=340&height=280&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true" 
                                width="340" height="280" style="border:none; overflow:hidden; border-radius: 12px; background:#fff;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>

                    <!-- Right: Main HQ Map -->
                    <div class="col-lg-4 col-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3854.0512168269975!2d102.11555041445753!3d14.989861871438126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31194b8029c9debf%3A0x2b288a32a2ce8efe!2z4LiZ4Liy4LifIOC4quC5gOC4leC4iuC4seC5iOC4meC5gOC4meC4reC4o-C4teC5iA!5e0!3m2!1sth!2sth!4v1677656514905!5m2!1sth!2sth"
                                width="100%" height="280" style="border: 0; border-radius: 12px;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="bottom-copyright-bar">
            <div class="container">
                © 2026 All rights reserved | NAFF Stationery Co.,Ltd.
            </div>
        </div>
    </footer>

    <div class="floating-contact-widget" id="floating-contact-widget">
        <div class="floating-contact-menu" id="floating-contact-menu" aria-hidden="true">
            <a class="floating-contact-action" href="https://www.facebook.com/NaffStationery1" target="_blank" rel="noopener noreferrer" data-contact-label="facebook">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
            </a>
            <a class="floating-contact-action" href="https://line.me/R/ti/p/@280pxmci" target="_blank" rel="noopener noreferrer" data-contact-label="line">
                <i class="fab fa-line" aria-hidden="true"></i>
            </a>
            <a class="floating-contact-action" href="tel:044247982" data-contact-label="phone_main_1">
                <i class="fas fa-phone-alt" aria-hidden="true"></i>
            </a>
            <a class="floating-contact-action" href="tel:044256375" data-contact-label="phone_main_2">
                <i class="fas fa-phone-alt" aria-hidden="true"></i>
            </a>
            <a class="floating-contact-action" href="tel:0864695163" data-contact-label="phone_sales">
                <i class="fas fa-phone-alt" aria-hidden="true"></i>
            </a>
        </div>
        <button class="floating-contact-toggle" id="floating-contact-toggle" type="button" aria-controls="floating-contact-menu" aria-expanded="false">
            <i class="fas fa-comment-dots" aria-hidden="true"></i>
        </button>
    </div>

    <div class="product-image-viewer" id="product-image-viewer" role="dialog" aria-modal="true" aria-hidden="true" aria-label="รูปสินค้า">
        <div class="product-image-viewer-content">
            <button class="product-image-viewer-close" id="product-image-viewer-close" type="button" aria-label="ปิดรูปสินค้า">
                <i class="fas fa-times" aria-hidden="true"></i>
            </button>
            <img class="product-image-viewer-image" id="product-image-viewer-image" alt="">
            <p class="product-image-viewer-caption" id="product-image-viewer-caption"></p>
        </div>
    </div>

    <!-- Scripts -->
    <script src="polo/js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        const englishTranslations = {
            nav_home: "Home",
            nav_about: "About Us",
            nav_products: "Products",
            nav_bestseller: "Best Sellers",
            nav_store: "Online Store",
            nav_branch: "Branches",
            nav_contact: "Contact",
            hero_tagline: "Stationery, office supplies, cleaning products, household and kitchen goods, and general trading.",
            about_title_span: "About ",
            about_title_rest: "Us",
            about_p1: "Naff Co., Ltd. was established on 10 August 2000 (formerly Naff Stationery Co., Ltd.). We supply a wide range of office products to factories, private companies, and government agencies, and serve customers through leading online platforms.",
            about_p2: "With more than 25 years of experience, we continue to improve our service with integrity and carefully selected quality products to earn our customers' trust.",
            about_p3: "Our head office is in Nakhon Ratchasima, with branches in Rayong, Prachinburi, and Bangkok to serve customers across multiple regions.",
            about_history: "In 2012, the company opened a satellite branch near Rajamangala University of Technology Isan to serve universities and hospitals.",
            about_mission: "Our mission is to help customers source the products and services they need with responsibility and integrity.",
            prod_head_span: "Our ",
            prod_head_rest: "Products",
            prod_head_sub: "Choose a product category to start browsing.",
            cat_1: "Stationery<br> & Art Supplies",
            cat_2: "Office Supplies",
            cat_3: "Paper",
            cat_4: "Filing &<br>Document Storage",
            cat_5: "Cleaning<br>Products",
            cat_6: "Office<br>Appliances",
            cat_7: "Other Products",
            tab_1: "Stationery & Art Supplies",
            tab_2: "Office Supplies",
            tab_3: "Paper",
            tab_4: "Filing & Document Storage",
            tab_5: "Cleaning Products",
            tab_6: "Office Appliances",
            tab_7: "Other Products",
            product_footer_note: "More than 1,000 items are available. The products shown are only a small sample. Contact us to learn more.",
            best_head_span: "Best ",
            best_head_rest: "Sellers",
            best_head_sub: "Popular products chosen by business and office customers.",
            best_item_1: "Premium gel pen",
            best_item_2: "Mechanical pencil and eraser set",
            best_item_3: "Heavy-duty stapler",
            best_item_4: "A4 80 gsm copy paper",
            best_item_5: "Elephant 3-inch lever arch file",
            best_item_6: "All-purpose cleaner",
            best_item_7: "Office paper shredder",
            best_item_8: "Strong-adhesive clear tape",
            best_item_9: "Stainless steel scissors",
            best_item_10: "Multicolor highlighter set",
            store_head_span: "Online ",
            store_head_rest: "Store",
            store_head_sub: "Shop with us on our online platforms.",
            store_shopee: "Shopee Official",
            store_lazada: "Lazada Official",
            store_lazada_name: "Naff Stationery",
            store_tiktok: "TikTok Shop",
            branch_head_prefix: "Our branches ",
            branch_head_sub: "Distribution centers and branches serving customers across the country.",
            branch_hq: "Head Office, Nakhon Ratchasima",
            branch_prachin: "Prachinburi Branch",
            branch_rayong: "Rayong Branch",
            branch_bangkok: "Bangkok Branch",
            tel_label: "Tel.",
            footer_contact_title: "Contact NAFF",
            footer_hours: "Business hours: Monday–Friday, 8:00 a.m.–5:30 p.m.",
            footer_tel: "Tel.",
            footer_sales: "Sales Department",
            footer_online: "Online Department"
        };
        const englishTitleTranslations = {
            map_hq: "Map to NAFF head office in Nakhon Ratchasima",
            map_prachin: "Map to the Prachinburi branch",
            map_rayong: "Map to the Rayong branch",
            map_bangkok: "Map to the Bangkok branch"
        };
        const floatingContactLabels = {
            th: {
                open: "เปิดช่องทางติดต่อ",
                close: "ปิดช่องทางติดต่อ",
                facebook: "เปิดเพจ Facebook ของ NAFF",
                line: "ติดต่อ NAFF ทาง LINE",
                phone_main_1: "โทร. 044-247-982",
                phone_main_2: "โทร. 044-256-375",
                phone_sales: "โทร. 086-469-5163"
            },
            en: {
                open: "Open contact options",
                close: "Close contact options",
                facebook: "NAFF Facebook page",
                line: "Contact NAFF on LINE",
                phone_main_1: "Call 044-247-982",
                phone_main_2: "Call 044-256-375",
                phone_sales: "Call 086-469-5163"
            }
        };

        const productTitlesEnglish = {
            "ปากกาเจล Sarasa Clip": "Sarasa Clip Gel Pen",
            "ปากกาลูกลื่น Lancer Spiral": "Lancer Spiral Ballpoint Pen",
            "ชุดสีไม้คลีนเลอร์ 24 สี": "Clean Color 24-Color Pencil Set",
            "ยางลบดินสอ Pentel Ain": "Pentel Ain Eraser",
            "ดินสอกด Rotring Tikky": "Rotring Tikky Mechanical Pencil",
            "ปากกาเคมี 2 หัว Horse": "Horse Twin-Tip Marker",
            "ปากกาไวท์บอร์ด Pilot": "Pilot Whiteboard Marker",
            "ชุดพู่กันสีน้ำสง่ามยุระ": "Sangmayura Watercolor Brush Set",
            "เทปลบคำผิด PLUS Whiper": "PLUS Whiper Correction Tape",
            "ไฮไลท์ Stabilo Boss Pastel": "Stabilo BOSS Pastel Highlighter",
            "ที่เย็บกระดาษ MAX HD-10": "MAX HD-10 Stapler",
            "กรรไกรตราช้าง 8 นิ้ว": "Elephant 8-Inch Scissors",
            "แท่นตัดเทปตราช้าง": "Elephant Tape Dispenser",
            "คัตเตอร์ Olfa Heavy Duty": "OLFA Heavy-Duty Cutter",
            "ลวดเย็บกระดาษ MAX No.10": "MAX No. 10 Staples",
            "คลิปหนีบกระดาษดำ Robin": "Robin Black Binder Clips",
            "กาวตราช้าง Elephant Stick": "Elephant Glue Stick",
            "ตรายางหมึกในตัว Shiny": "Shiny Self-Inking Stamp",
            "เครื่องเจาะกระดาษ 2 รู": "2-Hole Paper Punch",
            "ไม้บรรทัดเหล็ก 30 ซม.": "30 cm Steel Ruler",
            "กระดาษ Double A 80 แกรม A4": "Double A A4 Copy Paper, 80 gsm",
            "กระดาษ IDEA Work A4 80g": "IDEA Work A4 Paper, 80 gsm",
            "กระดาษถ่ายเอกสารการ์ดสี": "Colored Cardstock",
            "กระดาษต่อเนื่อง 9x11 นิ้ว": "9 x 11 in Continuous Paper",
            "กระดาษโฟโต้กันน้ำมันวาว": "Waterproof Glossy Photo Paper",
            "กระดาษคาร์บอนดำ Horse": "Horse Black Carbon Paper",
            "กระดาษสติกเกอร์ขาวด้าน": "Matte White Sticker Paper",
            "กระดาษความร้อนใบเสร็จ 80mm": "80 mm Thermal Receipt Paper",
            "กระดาษเขียนแบบ A3": "A3 Drafting Paper",
            "สมุดบันทึกริมลวดมีเส้น": "Wirebound Ruled Notebook",
            "แฟ้มตราช้าง 120A4 ก้านยก": "Elephant A4 Lever Arch File",
            "แฟ้มห่วง 2 ห่วง Robin": "Robin 2-Ring Binder",
            "แฟ้มซองพลาสติกใส A4": "A4 Clear Plastic Document Folder",
            "ไส้แฟ้มถนอมเอกสาร 11 รู": "11-Hole Sheet Protectors",
            "กล่องใส่เอกสารกระดาษลูกฟูก": "Corrugated Document Storage Box",
            "แฟ้มแขวน ตราช้าง 924": "Elephant 924 Hanging File",
            "แฟ้มคลิปสปริงสำหรับเสนองาน": "Spring-Clip Presentation Folder",
            "ตู้เอกสารพลาสติก 5 ชั้น": "5-Tier Plastic Storage Cabinet",
            "กระเป๋าใส่เอกสารขยายข้าง": "Expandable Document Bag",
            "คลิปบอร์ดไม้สำหรับตรวจงาน": "Wooden Inspection Clipboard",
            "น้ำยาทำความสะอาดพื้น Magiclean": "Magiclean Floor Cleaner",
            "สบู่เหลวล้างมือฆ่าเชื้อแบคทีเรีย": "Antibacterial Liquid Hand Soap",
            "กระดาษทิชชู่ม้วนจัมโบ้ JRT": "Jumbo JRT Tissue Roll",
            "ถุงขยะดำเหนียวพิเศษ ขนาด 30x40": "Heavy-Duty Black Garbage Bags, 30 x 40",
            "สเปรย์แอลกอฮอล์ทำความสะอาด": "Alcohol Cleaning Spray",
            "ไม้ถูพื้นไมโครไฟเบอร์แบบบิดล็อค": "Twist-Lock Microfiber Mop",
            "ถังขยะฝาแกว่ง 40 ลิตร": "40 L Swing-Lid Trash Bin",
            "น้ำยาเช็ดกระจกสูตรไร้คราบ": "Streak-Free Glass Cleaner",
            "ถุงมือยางอนามัยป้องกันเคมี": "Chemical-Resistant Rubber Gloves",
            "ฟองน้ำใยขัด Scotch-Brite": "Scotch-Brite Scouring Sponge",
            "เครื่องคิดเลขตั้งโต๊ะ Casio 12 หลัก": "Casio 12-Digit Desktop Calculator",
            "เครื่องเคลือบบัตรและเอกสาร A3": "A3 Document Laminator",
            "เครื่องเจาะและเข้าเล่มกระดูกงู": "Comb Binding Machine",
            "เครื่องนับธนบัตรอัตโนมัติ": "Automatic Banknote Counter",
            "ปลั๊กไฟมาตรฐาน มอก. 5 ช่อง": "TIS-Certified 5-Outlet Power Strip",
            "พัดลมตั้งโต๊ะประหยัดไฟเบอร์ 5": "No. 5 Energy-Efficient Desk Fan",
            "เครื่องสแกนบาร์โค้ดความเร็วสูง": "High-Speed Barcode Scanner",
            "กาต้มน้ำร้อนสเตนเลสสำหรับออฟฟิศ": "Stainless Steel Office Kettle",
            "เครื่องตีเบอร์อัตโนมัติ MAX": "MAX Automatic Numbering Machine",
            "เครื่องตัดนามบัตรไฟฟ้า": "Electric Business Card Cutter",
            "เทปปิดกล่อง OPP ใส/น้ำตาล 2 นิ้ว": "2-Inch Clear/Brown OPP Packing Tape",
            "ฟิล์มยืดพันพาเลท Stretch Film": "Pallet Stretch Film",
            "พลาสติกกันกระแทก Air Bubble": "Air Bubble Wrap",
            "สายรัดพลาสติก PP แบบม้วน": "PP Plastic Strapping Roll",
            "เชือกฟางพลาสติกเกรด A": "Grade A Plastic Twine",
            "กระสอบพลาสติกสานเกรดโรงงาน": "Industrial-Grade Woven Sacks",
            "กล่องพัสดุไปรษณีย์เบอร์ 00 - เบอร์ 7": "Shipping Boxes, Sizes 00–7",
            "ปืนยิงกาวร้อนแท่งไฟฟ้า": "Electric Hot Glue Gun",
            "กระดาษกาวสองหน้าโฟม 3M": "3M Double-Sided Foam Tape",
            "ถุงซิปล็อคขนาดมาตรฐาน": "Standard-Size Zip Bags"
        };

        const thaiOriginals = new Map();
        document.querySelectorAll('[data-i18n]').forEach(function(element) {
            thaiOriginals.set(element, element.innerHTML);
        });
        const thaiTitleAttributes = new Map();
        document.querySelectorAll('[data-i18n-title]').forEach(function(element) {
            thaiTitleAttributes.set(element, element.getAttribute('title'));
        });
        const thaiPageTitle = document.title;
        let currentLanguage = 'th';
        let currentCategoryId = 1;

        function updateFloatingContactLabels() {
            const widget = document.getElementById('floating-contact-widget');
            const labels = floatingContactLabels[currentLanguage];
            const isOpen = widget.classList.contains('is-open');
            const toggleLabel = isOpen ? labels.close : labels.open;
            const toggle = document.getElementById('floating-contact-toggle');

            toggle.setAttribute('aria-label', toggleLabel);
            toggle.setAttribute('title', toggleLabel);
            widget.querySelectorAll('.floating-contact-action').forEach(function(action) {
                const label = labels[action.getAttribute('data-contact-label')];
                action.setAttribute('aria-label', label);
                action.setAttribute('title', label);
            });
        }

        function setFloatingContactMenuOpen(isOpen) {
            const widget = document.getElementById('floating-contact-widget');
            widget.classList.toggle('is-open', isOpen);
            document.getElementById('floating-contact-toggle').setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            document.getElementById('floating-contact-menu').setAttribute('aria-hidden', isOpen ? 'false' : 'true');
            updateFloatingContactLabels();
        }

        let lastFocusedProductImage = null;

        function updateProductImageAccessibility() {
            document.querySelectorAll('.product-item-card img, .bestseller-card img').forEach(function(image) {
                const card = image.closest('.product-item-card, .bestseller-card');
                const badge = card ? card.querySelector('.product-badge') : null;
                const productName = badge ? badge.innerText.trim() : image.alt;
                image.alt = productName;
                image.setAttribute('role', 'button');
                image.setAttribute('tabindex', '0');
                image.setAttribute('aria-label', currentLanguage === 'en'
                    ? 'View product image: ' + productName
                    : 'ดูรูปสินค้า: ' + productName);
            });
        }

        function updateProductImageViewerLanguage() {
            const isEnglish = currentLanguage === 'en';
            const label = isEnglish ? 'Product image' : 'รูปสินค้า';
            const closeLabel = isEnglish ? 'Close product image' : 'ปิดรูปสินค้า';
            document.getElementById('product-image-viewer').setAttribute('aria-label', label);
            document.getElementById('product-image-viewer-close').setAttribute('aria-label', closeLabel);
            document.getElementById('product-image-viewer-close').setAttribute('title', closeLabel);
        }

        function openProductImageViewer(image) {
            const viewer = document.getElementById('product-image-viewer');
            const viewerImage = document.getElementById('product-image-viewer-image');
            const card = image.closest('.product-item-card, .bestseller-card');
            const badge = card ? card.querySelector('.product-badge') : null;

            lastFocusedProductImage = image;
            viewerImage.src = image.currentSrc || image.src;
            viewerImage.alt = image.alt;
            document.getElementById('product-image-viewer-caption').innerText = badge
                ? badge.innerText.trim()
                : image.alt;
            viewer.classList.add('is-open');
            viewer.setAttribute('aria-hidden', 'false');
            document.body.classList.add('product-image-viewer-open');
            document.getElementById('product-image-viewer-close').focus();
        }

        function closeProductImageViewer() {
            const viewer = document.getElementById('product-image-viewer');
            viewer.classList.remove('is-open');
            viewer.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('product-image-viewer-open');
            if (lastFocusedProductImage) {
                lastFocusedProductImage.focus();
            }
        }

        // Sample 10 items for each of the 7 categories (Slide 3)
        const categoryData = {
            1: [
                { title: "ปากกาเจล Sarasa Clip", img: "img/product/cat1/1.png" },
                { title: "ปากกาลูกลื่น Lancer Spiral", img: "img/product/cat1/n1.png" },
                { title: "ชุดสีไม้คลีนเลอร์ 24 สี", img: "img/product/cat1/n2.png" },
                { title: "ยางลบดินสอ Pentel Ain", img: "img/product/cat1/n3.png" },
                { title: "ดินสอกด Rotring Tikky", img: "img/product/cat1/n4.png" },
                { title: "ปากกาเคมี 2 หัว Horse", img: "img/product/cat1/3.png" },
                { title: "ปากกาไวท์บอร์ด Pilot", img: "img/product/cat1/13.png" },
                { title: "ชุดพู่กันสีน้ำสง่ามยุระ", img: "img/product/cat1/n5.png" },
                { title: "เทปลบคำผิด PLUS Whiper", img: "img/product/cat1/1.png" },
                { title: "ไฮไลท์ Stabilo Boss Pastel", img: "img/product/cat1/n1.png" }
            ],
            2: [
                { title: "ที่เย็บกระดาษ MAX HD-10", img: "img/product/cat2/n1.png" },
                { title: "กรรไกรตราช้าง 8 นิ้ว", img: "img/product/cat2/2.png" },
                { title: "แท่นตัดเทปตราช้าง", img: "img/product/cat2/3.png" },
                { title: "คัตเตอร์ Olfa Heavy Duty", img: "img/product/cat2/n2.png" },
                { title: "ลวดเย็บกระดาษ MAX No.10", img: "img/product/cat2/5.png" },
                { title: "คลิปหนีบกระดาษดำ Robin", img: "img/product/cat2/n3.png" },
                { title: "กาวตราช้าง Elephant Stick", img: "img/product/cat2/7.png" },
                { title: "ตรายางหมึกในตัว Shiny", img: "img/product/cat2/8.png" },
                { title: "เครื่องเจาะกระดาษ 2 รู", img: "img/product/cat2/n1.png" },
                { title: "ไม้บรรทัดเหล็ก 30 ซม.", img: "img/product/cat2/2.png" }
            ],
            3: [
                { title: "กระดาษ Double A 80 แกรม A4", img: "img/product/cat3/1.png" },
                { title: "กระดาษ IDEA Work A4 80g", img: "img/product/cat3/2.png" },
                { title: "กระดาษถ่ายเอกสารการ์ดสี", img: "img/product/cat3/bro.png" },
                { title: "กระดาษต่อเนื่อง 9x11 นิ้ว", img: "img/product/cat3/n1.png" },
                { title: "กระดาษโฟโต้กันน้ำมันวาว", img: "img/product/cat3/5.png" },
                { title: "กระดาษคาร์บอนดำ Horse", img: "img/product/cat3/6.png" },
                { title: "กระดาษสติกเกอร์ขาวด้าน", img: "img/product/cat3/n2.png" },
                { title: "กระดาษความร้อนใบเสร็จ 80mm", img: "img/product/cat3/n3.png" },
                { title: "กระดาษเขียนแบบ A3", img: "img/product/cat3/1.png" },
                { title: "สมุดบันทึกริมลวดมีเส้น", img: "img/product/cat3/2.png" }
            ],
            4: [
                { title: "แฟ้มตราช้าง 120A4 ก้านยก", img: "img/product/cat4/1.png" },
                { title: "แฟ้มห่วง 2 ห่วง Robin", img: "img/product/cat4/2.png" },
                { title: "แฟ้มซองพลาสติกใส A4", img: "img/product/cat4/n1.png" },
                { title: "ไส้แฟ้มถนอมเอกสาร 11 รู", img: "img/product/cat4/n2.png" },
                { title: "กล่องใส่เอกสารกระดาษลูกฟูก", img: "img/product/cat4/n3.png" },
                { title: "แฟ้มแขวน ตราช้าง 924", img: "img/product/cat4/n4.png" },
                { title: "แฟ้มคลิปสปริงสำหรับเสนองาน", img: "img/product/cat4/7.png" },
                { title: "ตู้เอกสารพลาสติก 5 ชั้น", img: "img/product/cat4/8.png" },
                { title: "กระเป๋าใส่เอกสารขยายข้าง", img: "img/product/cat4/1.png" },
                { title: "คลิปบอร์ดไม้สำหรับตรวจงาน", img: "img/product/cat4/2.png" }
            ],
            5: [
                { title: "น้ำยาทำความสะอาดพื้น Magiclean", img: "img/product/cat5/1.png" },
                { title: "สบู่เหลวล้างมือฆ่าเชื้อแบคทีเรีย", img: "img/product/cat5/2.png" },
                { title: "กระดาษทิชชู่ม้วนจัมโบ้ JRT", img: "img/product/cat5/3.png" },
                { title: "ถุงขยะดำเหนียวพิเศษ ขนาด 30x40", img: "img/product/cat5/4.png" },
                { title: "สเปรย์แอลกอฮอล์ทำความสะอาด", img: "img/product/cat5/5.png" },
                { title: "ไม้ถูพื้นไมโครไฟเบอร์แบบบิดล็อค", img: "img/product/cat5/6.png" },
                { title: "ถังขยะฝาแกว่ง 40 ลิตร", img: "img/product/cat5/n1.png" },
                { title: "น้ำยาเช็ดกระจกสูตรไร้คราบ", img: "img/product/cat5/8.png" },
                { title: "ถุงมือยางอนามัยป้องกันเคมี", img: "img/product/cat5/1.png" },
                { title: "ฟองน้ำใยขัด Scotch-Brite", img: "img/product/cat5/2.png" }
            ],
            6: [
                { title: "เครื่องคิดเลขตั้งโต๊ะ Casio 12 หลัก", img: "img/product/cat6/1.png" },
                { title: "เครื่องเคลือบบัตรและเอกสาร A3", img: "img/product/cat6/n1.png" },
                { title: "เครื่องเจาะและเข้าเล่มกระดูกงู", img: "img/product/cat6/n2.png" },
                { title: "เครื่องนับธนบัตรอัตโนมัติ", img: "img/product/cat6/n3.png" },
                { title: "ปลั๊กไฟมาตรฐาน มอก. 5 ช่อง", img: "img/product/cat6/5.png" },
                { title: "พัดลมตั้งโต๊ะประหยัดไฟเบอร์ 5", img: "img/product/cat6/red.png" },
                { title: "เครื่องสแกนบาร์โค้ดความเร็วสูง", img: "img/product/cat6/7.png" },
                { title: "กาต้มน้ำร้อนสเตนเลสสำหรับออฟฟิศ", img: "img/product/cat6/n4.png" },
                { title: "เครื่องตีเบอร์อัตโนมัติ MAX", img: "img/product/cat6/1.png" },
                { title: "เครื่องตัดนามบัตรไฟฟ้า", img: "img/product/cat6/n1.png" }
            ],
            7: [
                { title: "เทปปิดกล่อง OPP ใส/น้ำตาล 2 นิ้ว", img: "img/product/cat7/1.png" },
                { title: "ฟิล์มยืดพันพาเลท Stretch Film", img: "img/product/cat7/2.png" },
                { title: "พลาสติกกันกระแทก Air Bubble", img: "img/product/cat7/3.png" },
                { title: "สายรัดพลาสติก PP แบบม้วน", img: "img/product/cat7/4.png" },
                { title: "เชือกฟางพลาสติกเกรด A", img: "img/product/cat7/thong.png" },
                { title: "กระสอบพลาสติกสานเกรดโรงงาน", img: "img/product/cat7/6.png" },
                { title: "กล่องพัสดุไปรษณีย์เบอร์ 00 - เบอร์ 7", img: "img/product/cat7/7.png" },
                { title: "ปืนยิงกาวร้อนแท่งไฟฟ้า", img: "img/product/cat7/8.png" },
                { title: "กระดาษกาวสองหน้าโฟม 3M", img: "img/product/cat7/1.png" },
                { title: "ถุงซิปล็อคขนาดมาตรฐาน", img: "img/product/cat7/2.png" }
            ]
        };

        function renderProducts(catId) {
            currentCategoryId = catId;
            const list = categoryData[catId] || categoryData[1];
            const container = document.getElementById('product-items-display');
            let html = '';
            list.forEach(item => {
                const title = currentLanguage === 'en'
                    ? (productTitlesEnglish[item.title] || item.title)
                    : item.title;
                html += `
                    <div class="product-item-card">
                        <img src="${item.img}" alt="${title}" onerror="this.src='img/product/cat1/1.png'">
                        <div class="product-badge">${title}</div>
                    </div>
                `;
            });
            container.innerHTML = html;
            updateProductImageAccessibility();
        }

        function applyLanguage(language) {
            currentLanguage = language;
            document.documentElement.lang = language;
            document.title = language === 'en' ? 'NAFF | Stationery and Office Supplies' : thaiPageTitle;

            document.querySelectorAll('[data-i18n]').forEach(function(element) {
                const key = element.getAttribute('data-i18n');
                const translatedText = englishTranslations[key];
                element.innerHTML = language === 'en' && translatedText
                    ? translatedText
                    : thaiOriginals.get(element);
            });

            document.querySelectorAll('[data-i18n-title]').forEach(function(element) {
                const key = element.getAttribute('data-i18n-title');
                if (language === 'en' && englishTitleTranslations[key]) {
                    element.setAttribute('title', englishTitleTranslations[key]);
                } else if (thaiTitleAttributes.has(element)) {
                    element.setAttribute('title', thaiTitleAttributes.get(element));
                }
            });

            document.getElementById('btn-th').classList.toggle('active', language === 'th');
            document.getElementById('btn-en').classList.toggle('active', language === 'en');
            document.getElementById('btn-th').setAttribute('aria-pressed', language === 'th' ? 'true' : 'false');
            document.getElementById('btn-en').setAttribute('aria-pressed', language === 'en' ? 'true' : 'false');

            const menuToggle = document.querySelector('.mobile-menu-toggle');
            if (menuToggle) {
                const isOpen = document.getElementById('header').classList.contains('mobile-nav-open');
                menuToggle.setAttribute('aria-label', language === 'en'
                    ? (isOpen ? 'Close menu' : 'Open menu')
                    : (isOpen ? 'ปิดเมนู' : 'เปิดเมนู'));
            }

            updateFloatingContactLabels();
            updateProductImageViewerLanguage();
            renderProducts(currentCategoryId);
        }

        function switchTab(catId) {
            document.querySelectorAll('.product-nav-tabs li a').forEach(a => {
                a.classList.remove('active');
                if (a.getAttribute('data-cat') == catId) {
                    a.classList.add('active');
                }
            });
            renderProducts(catId);
        }

        function selectCategory(catId) {
            switchTab(catId);
            setTimeout(() => {
                const el = document.getElementById('product-showcase');
                if (el) el.scrollIntoView({ behavior: 'smooth' });
            }, 100);
        }

        // Initialize Carousel & Default Products
        $(document).ready(function(){
            renderProducts(1);

            $('#about-slider').slick({
                dots: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
                slidesToShow: 1,
                adaptiveHeight: true
            });

            $('#branch-carousel').slick({
                dots: true,
                arrows: true,
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: { slidesToShow: 2 }
                    },
                    {
                        breakpoint: 576,
                        settings: { slidesToShow: 1 }
                    }
                ]
            });

            const menuToggle = document.querySelector('.mobile-menu-toggle');
            const header = document.getElementById('header');
            menuToggle.addEventListener('click', function() {
                const isOpen = header.classList.toggle('mobile-nav-open');
                menuToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
                menuToggle.setAttribute('aria-label', currentLanguage === 'en'
                    ? (isOpen ? 'Close menu' : 'Open menu')
                    : (isOpen ? 'ปิดเมนู' : 'เปิดเมนู'));
                menuToggle.innerHTML = isOpen
                    ? '<i class="fas fa-times" aria-hidden="true"></i>'
                    : '<i class="fas fa-bars" aria-hidden="true"></i>';
            });

            document.querySelectorAll('#main-navigation a').forEach(function(link) {
                link.addEventListener('click', function() {
                    header.classList.remove('mobile-nav-open');
                    menuToggle.setAttribute('aria-expanded', 'false');
                    menuToggle.setAttribute('aria-label', currentLanguage === 'en' ? 'Open menu' : 'เปิดเมนู');
                    menuToggle.innerHTML = '<i class="fas fa-bars" aria-hidden="true"></i>';
                });
            });

            const contactWidget = document.getElementById('floating-contact-widget');
            document.getElementById('floating-contact-toggle').addEventListener('click', function() {
                setFloatingContactMenuOpen(!contactWidget.classList.contains('is-open'));
            });
            contactWidget.querySelectorAll('.floating-contact-action').forEach(function(action) {
                action.addEventListener('click', function() {
                    setFloatingContactMenuOpen(false);
                });
            });
            document.addEventListener('click', function(event) {
                if (!contactWidget.contains(event.target) && contactWidget.classList.contains('is-open')) {
                    setFloatingContactMenuOpen(false);
                }
            });
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape' && contactWidget.classList.contains('is-open')) {
                    setFloatingContactMenuOpen(false);
                    document.getElementById('floating-contact-toggle').focus();
                }
            });

            const imageViewer = document.getElementById('product-image-viewer');
            document.getElementById('product-image-viewer-close').addEventListener('click', closeProductImageViewer);
            imageViewer.addEventListener('click', function(event) {
                if (event.target === imageViewer) {
                    closeProductImageViewer();
                }
            });
            document.addEventListener('click', function(event) {
                const target = event.target instanceof Element ? event.target : null;
                const image = target ? target.closest('.product-item-card img, .bestseller-card img') : null;
                if (image) {
                    openProductImageViewer(image);
                }
            });
            document.addEventListener('keydown', function(event) {
                if (imageViewer.classList.contains('is-open')) {
                    if (event.key === 'Escape') {
                        closeProductImageViewer();
                    } else if (event.key === 'Tab') {
                        event.preventDefault();
                        document.getElementById('product-image-viewer-close').focus();
                    }
                    return;
                }

                const target = event.target instanceof Element ? event.target : null;
                const image = target ? target.closest('.product-item-card img, .bestseller-card img') : null;
                if (image && (event.key === 'Enter' || event.key === ' ')) {
                    event.preventDefault();
                    openProductImageViewer(image);
                }
            });

            $('#btn-th, #btn-en').on('click', function(event) {
                event.preventDefault();
                applyLanguage(this.id === 'btn-en' ? 'en' : 'th');
            });
            applyLanguage('th');
        });
    </script>
</body>
</html>
