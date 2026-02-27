<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M7SYHTT96J"></script>
    <script>
        window.dataLayer = window.dataLayer || []

        function gtag() {
            dataLayer.push(arguments)
        }
        gtag('js', new Date())
        gtag('config', 'G-M7SYHTT96J')
    </script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Attica Gold Company | India's No.1 Gold Buyer | Instant Cash for Gold
    </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('user/assets/images/favicon.jpg>') }}" />
    <meta name="description"
        content="Sell your gold at the best price. Attica Gold Company - India's largest gold buyer with 200+ branches. Get instant cash with transparent evaluation." />
    <style>
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --red: #990000;
            --dark-red: #990000;
            --gold: #d4a843;
            --light-gold: #f5e6c8;
            --white: #ffffff;
            --off-white: #fff9f0;
            --dark: #1a1a1a;
            --gray: #666;
            --light-gray: #f5f5f5;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark);
            background: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* ===== NAVBAR ===== */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: linear-gradient(135deg,
                    #990000 0%,
                    #990000 50%,
                    #990000 100%);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.18);
            transition: all 0.3s ease;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 70px;
        }

        .logo {
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }

        .logo img {
            height: 48px;
            width: auto;
            filter: brightness(0) invert(1);
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 32px;
            align-items: center;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--white);
            font-weight: 600;
            font-size: 0.95rem;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
            transition: color 0.3s;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--light-gold);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--light-gold);
            transition: width 0.3s;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-cta {
            background: var(--white) !important;
            color: var(--red) !important;
            padding: 10px 24px;
            border-radius: 50px;
            font-weight: 600 !important;
            transition: all 0.3s !important;
        }

        .nav-cta:hover {
            background: var(--light-gold) !important;
            color: var(--dark-red) !important;
            transform: translateY(-1px);
        }

        .nav-cta::after {
            display: none !important;
        }

        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 5px;
        }

        .hamburger span {
            width: 28px;
            height: 3px;
            background: var(--white);
            border-radius: 3px;
            transition: all 0.3s;
        }

        /* ===== HERO ===== */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg,
                    var(--off-white) 0%,
                    var(--light-gold) 50%,
                    var(--off-white) 100%);
            padding-top: 70px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 80%;
            height: 200%;
            background: radial-gradient(ellipse,
                    rgba(212, 168, 67, 0.12) 0%,
                    transparent 70%);
            pointer-events: none;
        }

        .hero-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 24px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(153, 0, 0, 0.08);
            border: 1px solid rgba(153, 0, 0, 0.15);
            padding: 8px 18px;
            border-radius: 50px;
            font-size: 0.85rem;
            color: var(--red);
            font-weight: 600;
            margin-bottom: 24px;
        }

        .hero-badge::before {
            content: '';
            width: 8px;
            height: 8px;
            background: var(--red);
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.5;
                transform: scale(1.3);
            }
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.1;
            color: var(--dark);
            margin-bottom: 20px;
        }

        .hero h1 .highlight {
            background: linear-gradient(135deg,
                    var(--red) 0%,
                    var(--dark-red) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero h1 .gold-text {
            background: linear-gradient(135deg, var(--gold) 0%, #b8860b 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-desc {
            font-size: 1.15rem;
            color: var(--gray);
            margin-bottom: 36px;
            max-width: 480px;
            line-height: 1.7;
        }

        .hero-buttons {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg,
                    var(--red) 0%,
                    var(--dark-red) 100%);
            color: var(--white);
            padding: 16px 36px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1rem;
            transition: all 0.3s;
            box-shadow: 0 4px 20px rgba(153, 0, 0, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(153, 0, 0, 0.4);
        }

        .btn-secondary {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--white);
            color: var(--dark);
            padding: 16px 36px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1rem;
            transition: all 0.3s;
            border: 2px solid var(--gold);
        }

        .btn-secondary:hover {
            background: var(--gold);
            color: var(--white);
            transform: translateY(-2px);
        }

        .hero-stats {
            display: flex;
            gap: 40px;
            margin-top: 48px;
            padding-top: 32px;
            border-top: 1px solid rgba(212, 168, 67, 0.3);
        }

        .stat-item h3 {
            font-size: 2rem;
            font-weight: 800;
            color: var(--red);
        }

        .stat-item p {
            font-size: 0.85rem;
            color: var(--gray);
            font-weight: 500;
        }

        .hero-image {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: flex-end;
        }

        .hero-image img {
            width: 100%;
            max-width: 480px;
            height: auto;
            border-radius: 0 0 240px 240px;
            position: relative;
            z-index: 2;
            filter: drop-shadow(0 20px 40px rgba(0, 0, 0, 0.15));
        }

        .hero-image::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 85%;
            height: 90%;
            background: linear-gradient(180deg,
                    rgba(212, 168, 67, 0.15) 0%,
                    rgba(212, 168, 67, 0.3) 100%);
            border-radius: 0 0 240px 240px;
            z-index: 1;
        }

        .hero-image::after {
            content: '';
            position: absolute;
            top: 20px;
            right: -10px;
            width: 80px;
            height: 80px;
            border: 3px solid var(--gold);
            border-radius: 50%;
            opacity: 0.3;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        /* ===== TRUST BAR ===== */
        .trust-bar {
            background: linear-gradient(135deg, var(--dark) 0%, #2d1b00 100%);
            padding: 24px 0;
        }

        .trust-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
            display: flex;
            justify-content: center;
            gap: 60px;
            flex-wrap: wrap;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--white);
        }

        .trust-icon {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: rgba(212, 168, 67, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .trust-item span {
            font-weight: 600;
            font-size: 0.9rem;
        }

        /* ===== SECTIONS COMMON ===== */
        .section {
            padding: 100px 0;
        }

        .section-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-label {
            display: inline-block;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: var(--gold);
            margin-bottom: 12px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 16px;
        }

        .section-header p {
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
            font-size: 1.05rem;
        }

        /* ===== WHY US ===== */
        .why-us {
            background: var(--off-white);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .feature-card {
            background: var(--white);
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            transition: all 0.4s;
            border: 1px solid rgba(212, 168, 67, 0.1);
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--red), var(--gold));
            transform: scaleX(0);
            transition: transform 0.4s;
        }

        .feature-card:hover::before {
            transform: scaleX(1);
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            border-radius: 20px;
            background: linear-gradient(135deg,
                    rgba(153, 0, 0, 0.08),
                    rgba(212, 168, 67, 0.08));
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 1.8rem;
        }

        .feature-card h3 {
            font-size: 1.2rem;
            margin-bottom: 12px;
            color: var(--dark);
        }

        .feature-card p {
            color: var(--gray);
            font-size: 0.92rem;
            line-height: 1.6;
        }

        /* ===== HOW IT WORKS ===== */
        .steps-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            position: relative;
        }

        .steps-grid::before {
            content: '';
            position: absolute;
            top: 50px;
            left: 12%;
            width: 76%;
            height: 2px;
            background: linear-gradient(90deg, var(--red), var(--gold), var(--red));
            opacity: 0.2;
        }

        .step-card {
            text-align: center;
            position: relative;
        }

        .step-number {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--red), var(--dark-red));
            color: var(--white);
            font-size: 1.4rem;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            position: relative;
            z-index: 2;
            box-shadow: 0 4px 15px rgba(153, 0, 0, 0.3);
        }

        .step-card h3 {
            font-size: 1.1rem;
            margin-bottom: 8px;
            color: var(--dark);
        }

        .step-card p {
            color: var(--gray);
            font-size: 0.88rem;
        }

        /* ===== BRANCH LOCATOR ===== */
        .branch-locator {
            background: linear-gradient(180deg, var(--off-white), var(--white));
        }

        .branch-search-box {
            max-width: 700px;
            margin: 0 auto 40px;
            position: relative;
        }

        .branch-search-box input {
            width: 100%;
            padding: 18px 24px 18px 54px;
            border: 2px solid rgba(212, 168, 67, 0.3);
            border-radius: 60px;
            font-size: 1rem;
            outline: none;
            transition: all 0.3s;
            background: var(--white);
        }

        .branch-search-box input:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 4px rgba(212, 168, 67, 0.1);
        }

        .search-icon {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .filter-row {
            display: flex;
            gap: 16px;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .filter-select {
            padding: 12px 20px;
            border: 2px solid rgba(212, 168, 67, 0.25);
            border-radius: 50px;
            font-size: 0.92rem;
            background: var(--white);
            color: var(--dark);
            outline: none;
            cursor: pointer;
            min-width: 180px;
            transition: border-color 0.3s;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%23D4A843' stroke-width='2' fill='none'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 16px center;
            padding-right: 40px;
        }

        .filter-select:focus {
            border-color: var(--gold);
        }

        .branch-count {
            text-align: center;
            margin-bottom: 24px;
            color: var(--gray);
            font-size: 0.95rem;
        }

        .branch-count strong {
            color: var(--red);
        }

        .branch-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            max-height: 600px;
            overflow-y: auto;
            padding-right: 10px;
        }

        .branch-grid::-webkit-scrollbar {
            width: 6px;
        }

        .branch-grid::-webkit-scrollbar-track {
            background: var(--light-gray);
            border-radius: 3px;
        }

        .branch-grid::-webkit-scrollbar-thumb {
            background: var(--gold);
            border-radius: 3px;
        }

        .branch-card {
            background: var(--white);
            border-radius: 16px;
            padding: 24px;
            border: 1px solid rgba(212, 168, 67, 0.12);
            transition: all 0.3s;
            cursor: default;
        }

        .branch-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
            border-color: var(--gold);
        }

        .branch-card h4 {
            font-size: 1rem;
            color: var(--dark-red);
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .branch-card h4::before {
            content: '';
            width: 8px;
            height: 8px;
            background: var(--gold);
            border-radius: 50%;
            flex-shrink: 0;
        }

        .branch-card p {
            color: var(--gray);
            font-size: 0.85rem;
            line-height: 1.5;
        }

        .no-results {
            grid-column: 1 / -1;
            text-align: center;
            padding: 60px 20px;
            color: var(--gray);
        }

        .no-results h3 {
            color: var(--dark);
            margin-bottom: 8px;
        }

        /* ===== CTA SECTION ===== */
        .cta-section {
            background: linear-gradient(135deg,
                    var(--red) 0%,
                    var(--dark-red) 100%);
            padding: 80px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -20%;
            width: 60%;
            height: 200%;
            background: radial-gradient(ellipse,
                    rgba(212, 168, 67, 0.1) 0%,
                    transparent 70%);
            pointer-events: none;
        }

        .cta-section h2 {
            font-size: 2.5rem;
            color: var(--white);
            margin-bottom: 16px;
            font-weight: 800;
        }

        .cta-section p {
            color: rgba(255, 255, 255, 0.85);
            font-size: 1.1rem;
            margin-bottom: 36px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-buttons {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-white {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--white);
            color: var(--red);
            padding: 16px 36px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .btn-white:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        }

        .btn-outline-white {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: transparent;
            color: var(--white);
            padding: 16px 36px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1rem;
            transition: all 0.3s;
            border: 2px solid rgba(255, 255, 255, 0.4);
        }

        .btn-outline-white:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--white);
            transform: translateY(-2px);
        }

        /* ===== LEAD MODAL ===== */
        .lead-modal {
            position: fixed;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            background: rgba(0, 0, 0, 0.55);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.25s ease, visibility 0.25s ease;
            z-index: 2000;
        }

        .lead-modal.active {
            opacity: 1;
            visibility: visible;
        }

        .lead-modal-card {
            width: 100%;
            max-width: 560px;
            background: var(--white);
            border-radius: 20px;
            padding: 28px;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.25);
            position: relative;
            overflow: hidden;
        }

        .lead-modal-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--red), var(--gold));
        }

        .lead-modal-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 12px;
        }

        .lead-modal-title h3 {
            font-size: 1.4rem;
            color: var(--dark);
            margin-bottom: 6px;
            font-weight: 800;
        }

        .lead-modal-title p {
            color: var(--gray);
            font-size: 0.95rem;
        }

        .lead-modal-close {
            border: none;
            background: var(--light-gray);
            color: var(--dark);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.2s ease;
            flex-shrink: 0;
        }

        .lead-modal-close:hover {
            background: var(--gold);
            color: var(--white);
        }

        .lead-form {
            display: grid;
            grid-template-columns: 1fr;
            gap: 14px;
            margin-top: 16px;
        }

        .lead-form input,
        .lead-form select,
        .lead-form textarea {
            width: 100%;
            padding: 12px 14px;
            border-radius: 12px;
            border: 1px solid rgba(212, 168, 67, 0.35);
            font-size: 0.95rem;
            outline: none;
            background: var(--white);
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .lead-form textarea {
            grid-column: 1 / -1;
            min-height: 110px;
            resize: vertical;
        }

        .lead-form input:focus,
        .lead-form select:focus,
        .lead-form textarea:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 3px rgba(212, 168, 67, 0.15);
        }

        .lead-form .full {
            grid-column: 1 / -1;
        }

        .lead-submit {
            grid-column: 1 / -1;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            background: linear-gradient(135deg, var(--red), var(--dark-red));
            color: var(--white);
            border: none;
            padding: 14px 20px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 0 8px 20px rgba(153, 0, 0, 0.25);
        }

        .lead-submit:hover {
            transform: translateY(-1px);
            box-shadow: 0 12px 28px rgba(153, 0, 0, 0.35);
        }

        @media (max-width: 640px) {
            .lead-form {
                grid-template-columns: 1fr;
            }
        }

        /* ===== FOOTER ===== */
        .footer {
            background: var(--dark);
            color: rgba(255, 255, 255, 0.7);
            padding: 60px 0 30px;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .footer-top {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 60px;
            margin-bottom: 40px;
        }

        .footer-brand .logo {
            display: inline-block;
            margin-bottom: 16px;
        }

        .footer-brand .logo img {
            height: 42px;
            filter: brightness(0) invert(1);
        }

        .footer-brand p {
            font-size: 0.9rem;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .footer-contact a {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--gold);
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: color 0.3s;
        }

        .footer-contact a:hover {
            color: var(--white);
        }

        .footer h4 {
            color: var(--white);
            font-size: 1rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.6);
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: var(--gold);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            padding-top: 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.85rem;
        }

        /* ===== MOBILE ===== */
        @media (max-width: 1024px) {
            .hero h1 {
                font-size: 2.8rem;
            }

            .features-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .steps-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .steps-grid::before {
                display: none;
            }

            .branch-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-top {
                grid-template-columns: 1fr 1fr;
                gap: 40px;
            }
        }

        @media (max-width: 768px) {
            .hamburger {
                display: flex;
            }

            .nav-links {
                display: none;
                position: absolute;
                top: 70px;
                left: 0;
                width: 100%;
                background: linear-gradient(135deg, #990000 0%, #990000 100%);
                flex-direction: column;
                padding: 20px 24px;
                gap: 16px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            }

            .nav-links.active {
                display: flex;
            }

            .hero {
                min-height: auto;
            }

            .hero-container {
                display: flex;
                flex-direction: column;
                gap: 0;
                padding: 30px 20px 0;
            }

            .hero-content {
                display: contents;
            }

            .hero-badge {
                order: 1;
                margin-bottom: 12px;
            }

            .hero h1 {
                order: 2;
                font-size: 2rem;
                margin-bottom: 16px;
                text-align: center;
            }

            .hero-desc {
                order: 4;
                font-size: 0.9rem;
                margin-bottom: 20px;
                text-align: center;
            }

            .hero-buttons {
                order: 5;
                flex-direction: column;
                gap: 10px;
                align-items: center;
            }

            .btn-primary,
            .btn-secondary {
                padding: 14px 28px;
                font-size: 0.9rem;
                justify-content: center;
                width: 100%;
            }

            .hero-stats {
                order: 6;
                gap: 24px;
                margin-top: 28px;
                padding-top: 20px;
                justify-content: center;
            }

            .stat-item h3 {
                font-size: 1.5rem;
            }

            .stat-item p {
                font-size: 0.78rem;
            }

            .hero-badge {
                font-size: 0.78rem;
                padding: 6px 14px;
                align-self: center;
            }

            .hero-image {
                order: 3;
                margin: 0 auto 20px;
                max-width: 260px;
            }

            .hero-image img {
                max-width: 100%;
                border-radius: 0 0 130px 130px;
            }

            .hero-image::before {
                border-radius: 0 0 130px 130px;
            }

            .hero-image::after {
                display: none;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .steps-grid {
                grid-template-columns: 1fr 1fr;
            }

            .branch-grid {
                grid-template-columns: 1fr;
            }

            .section-header h2 {
                font-size: 2rem;
            }

            .cta-section h2 {
                font-size: 2rem;
            }

            .trust-container {
                gap: 30px;
            }

            .footer-top {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }

            .filter-row {
                flex-direction: column;
                align-items: center;
            }

            .filter-select {
                min-width: 260px;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 1.7rem;
            }

            .hero-image {
                max-width: 220px;
            }
        }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="logo"><img src="{{ asset('user/assets/images/attica_logo.png') }}"
                    alt="Attica Gold Company" width="180" height="48" /></a>
            <ul class="nav-links" id="navLinks">
                <li><a href="#why-us">Why Us</a></li>
                <li><a href="#how-it-works">How It Works</a></li>
                <li><a href="#branches">Branches</a></li>
                <li><a href="tel:8880300300" class="nav-cta">Call Now</a></li>
            </ul>
            <div class="hamburger" id="hamburger" onclick="toggleMenu()">
                <span></span><span></span><span></span>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-badge">India's No.1 Gold Buyer</div>
                <h1>
                    Get <span class="highlight">Instant Cash</span><br />
                    for Your <span class="gold-text">Gold</span>
                </h1>
                <p class="hero-desc">
                    Trusted by lakhs of customers across India. We offer the best market
                    rates with transparent evaluation and immediate payment.
                </p>
                <div class="hero-buttons">
                    <a href="tel:8880300300" class="btn-primary">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                        </svg>
                        8880 300 300
                    </a>
                    <a href="#branches" class="btn-secondary">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                        </svg>
                        Find Branch
                    </a>
                </div>
                <div class="hero-stats">
                    <div class="stat-item">
                        <h3>200+</h3>
                        <p>Branches Pan India</p>
                    </div>
                    <div class="stat-item">
                        <h3>1 CR+</h3>
                        <p>Happy Customers</p>
                    </div>
                    <div class="stat-item">
                        <h3>15+</h3>
                        <p>Years of Trust</p>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('user/assets/images/img.png') }}" alt="Welcome to Attica Gold Company" width="480"
                    height="600" loading="eager" />
            </div>
        </div>
    </section>

    <!-- TRUST BAR -->
    <div class="trust-bar">
        <div class="trust-container">
            <div class="trust-item">
                <div class="trust-icon">&#9733;</div>
                <span>Best Market Rates</span>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#9889;</div>
                <span>Instant Cash Payment</span>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128274;</div>
                <span>100% Transparent</span>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#10004;</div>
                <span>BIS Certified Testing</span>
            </div>
        </div>
    </div>

    <!-- WHY US -->
    <section class="section why-us" id="why-us">
        <div class="section-container">
            <div class="section-header">
                <span class="section-label">Why Choose Us</span>
                <h2>India's Most Trusted Gold Buyer</h2>
                <p>We make selling your gold simple, safe, and rewarding</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#990000"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="1" x2="12" y2="23" />
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                        </svg>
                    </div>
                    <h3>Best Price Guaranteed</h3>
                    <p>
                        We offer the highest market price for your gold with no hidden
                        deductions. Get more value for every gram.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#990000"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                        </svg>
                    </div>
                    <h3>Instant Payment</h3>
                    <p>
                        Walk in with your gold, walk out with cash. No waiting period, no
                        delays - instant bank transfer or cash.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#990000"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" />
                            <line x1="21" y1="21" x2="16.65" y2="16.65" />
                            <line x1="8" y1="11" x2="14" y2="11" />
                            <line x1="11" y1="8" x2="11" y2="14" />
                        </svg>
                    </div>
                    <h3>Scientific Testing</h3>
                    <p>
                        BIS hallmark certified German XRF machines ensure precise purity
                        testing right before your eyes.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#990000"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                    </div>
                    <h3>200+ Branches</h3>
                    <p>
                        India's largest chain of gold buying stores. Find a branch near
                        you across 5 states.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#990000"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <h3>5 Lakh+ Customers</h3>
                    <p>
                        Trusted by over 5 lakh happy customers. Join the family of people
                        who made the right choice.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#990000"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                            <circle cx="12" cy="16" r="1" />
                        </svg>
                    </div>
                    <h3>Safe & Secure</h3>
                    <p>
                        Complete transparency with CCTV surveillance, proper
                        documentation, and GST billing for every transaction.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW IT WORKS -->
    <section class="section" id="how-it-works">
        <div class="section-container">
            <div class="section-header">
                <span class="section-label">Simple Process</span>
                <h2>How It Works</h2>
                <p>Sell your gold in just 4 easy steps</p>
            </div>
            <div class="steps-grid">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h3>Visit a Branch</h3>
                    <p>Walk into any of our 200+ branches near you</p>
                </div>
                <div class="step-card">
                    <div class="step-number">2</div>
                    <h3>Gold Evaluation</h3>
                    <p>Scientific purity testing with German XRF machines</p>
                </div>
                <div class="step-card">
                    <div class="step-number">3</div>
                    <h3>Best Price Quote</h3>
                    <p>Get the best market rate with full transparency</p>
                </div>
                <div class="step-card">
                    <div class="step-number">4</div>
                    <h3>Instant Cash</h3>
                    <p>Receive immediate cash or bank transfer</p>
                </div>
            </div>
        </div>
    </section>

    <!-- BRANCH LOCATOR -->
    <section class="section branch-locator" id="branches">
        <div class="section-container">
            <div class="section-header">
                <span class="section-label">Find Us</span>
                <h2>Branch Locator</h2>
                <p>
                    200+ branches across India. Find your nearest Attica Gold branch.
                </p>
            </div>

            <div class="branch-search-box">
                <span class="search-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="#D4A843" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8" />
                        <line x1="21" y1="21" x2="16.65" y2="16.65" />
                    </svg></span>
                <input type="text" id="branchSearch" placeholder="Search by branch name, city, or area..."
                    autocomplete="off" />
            </div>

            <div class="filter-row">
                <select class="filter-select" id="stateFilter">
                    <option value="">All States</option>
                </select>
                <select class="filter-select" id="cityFilter">
                    <option value="">All Cities</option>
                </select>
            </div>

            <div class="branch-count" id="branchCount"></div>

            <div class="branch-grid" id="branchGrid"></div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section">
        <div class="section-container">
            <h2>Ready to Sell Your Gold?</h2>
            <p>
                Visit your nearest branch today and get the best value for your gold.
                It's quick, transparent, and rewarding.
            </p>
            <div class="cta-buttons">
                <a href="tel:8880300300" class="btn-white">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                    </svg>
                    Call 8880 300 300
                </a>
                <a href="#branches" class="btn-outline-white">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                    </svg>
                    Find Nearest Branch
                </a>
            </div>
        </div>
    </section>

    <div class="lead-modal" id="leadModal" aria-hidden="true">
        <div class="lead-modal-card" role="dialog" aria-modal="true" aria-labelledby="leadModalTitle">
            <div class="lead-modal-header">
                <div class="lead-modal-title">
                    <h3 id="leadModalTitle">Contact Us</h3>
                </div>
                <button class="lead-modal-close" type="button" aria-label="Close form" id="leadModalClose">
                    &times;
                </button>
            </div>
            <form class="lead-form" id="contactForm" action="https://atticagold.in/Config/Enquiry/index.php"
                method="post">
                <input type="hidden" name="lead_from" value="atticagold.in" />
                <input type="text" id="name" name="name" placeholder="Full Name" required />
                <input type="tel" id="mobile" name="mobile" placeholder="Phone Number" pattern="[0-9]{10}"
                    required />
                <input type="number" name="gold_weight" placeholder="Enter Gold Weight" step="0.01"
                    min="0" inputmode="decimal" required />
                <select id="enquiryType" name="type" required>
                    <option value="">Select Type</option>
                    <option value="Physical Gold">Physical Gold</option>
                    <option value="Release Gold">Release Gold</option>
                </select>
                <select id="stateSelect" name="state" required>
                    <option value="">Select State</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Tamilnadu">Tamilnadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Pondicherry">Pondicherry</option>
                </select>

                <button class="lead-submit" type="submit">Submit</button>
            </form>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-top">
                <div class="footer-brand">
                    <a href="#" class="logo"><img
                            src="https://www.atticagoldcompany.com/wp-content/uploads/2024/07/dsda.png"
                            alt="Attica Gold Company" /></a>
                    <p>
                        India's largest and most trusted gold buying company with 200+
                        branches across 5 states. We offer the best market rates with
                        instant cash payment.
                    </p>
                    <div class="footer-contact">
                        <a href="tel:8880300300">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                            </svg>
                            8880 300 300
                        </a>
                    </div>
                </div>
                <div>
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="#why-us">Why Us</a></li>
                        <li><a href="#how-it-works">How Works</a></li>
                        <li><a href="#branches">Branch Locator</a></li>
                        <li>
                            <a href="https://www.atticagoldcompany.com/" target="_blank" rel="noopener">Main
                                Website</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4>Our Presence</h4>
                    <ul class="footer-links">
                        <li><a href="#branches">Karnataka</a></li>
                        <li><a href="#branches">Tamil Nadu</a></li>
                        <li><a href="#branches">Andhra Pradesh</a></li>
                        <li><a href="#branches">Telangana</a></li>
                        <li><a href="#branches">Pondicherry</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 Attica Gold Company. All rights reserved.</p>
                <p>India's No.1 Gold Buyer</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        function toggleMenu() {
            document.getElementById('navLinks').classList.toggle('active')
        }

        // Close mobile menu on link click
        document.querySelectorAll('.nav-links a').forEach(function(link) {
            link.addEventListener('click', function() {
                document.getElementById('navLinks').classList.remove('active')
            })
        })

        // Branch data (only name and address, active branches only)
        var branches = [{
                name: 'Queens Road',
                addr: '11/04, Ground Floor, Next to Sanjevani Press, Queens Road, Bangalore-560052',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Jayanagar',
                addr: 'No.14/1 Anand Chambers 2nd Floor, Elephant Rock Road, 3rd Block, Jayanagar, Bangalore',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Malleshwaram',
                addr: 'No.353/1, 2nd Floor, 10th Cross Sampige Road, Next to Fastrack Showroom, Malleshwaram, Bangalore-3',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Indiranagar',
                addr: 'No.12 Anu Arcade, 2nd Floor, Above Sangeetha Showroom, CMH Road, Near Yamaha Showroom, Indiranagar, Bangalore-38',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Mysore',
                addr: 'No.10 to 14, 2nd Floor, Ashoka Road, Royal Crown Building, Opp Clock Tower, Mysore',
                city: 'Mysore',
                state: 'Karnataka',
            },
            {
                name: 'Hubli',
                addr: 'Samyukta Karnataka Building, 1st Floor, Koppikar Road, Hubli-580020',
                city: 'Hubli',
                state: 'Karnataka',
            },
            {
                name: 'Davangere',
                addr: '1-30, 1st Floor, Ashaktha Poshaks Trust, P.B Road, Old Bus Stand, Davanagere-577001',
                city: 'Davangere',
                state: 'Karnataka',
            },
            {
                name: 'Kathriguppe',
                addr: 'No.27, 2nd Floor, 100 Feet Ring Road, Kathriguppe Circle, Above Prestige Showroom, BSK 3rd Stage, Bangalore-560085',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Bannerghatta',
                addr: '#71, Sitharam Complex, 1st Floor, Near Vishal Mega Mart, Opp IIMB, Bilekehalli, BG Road, Bangalore-560076',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Hosa Road',
                addr: 'No.51, 2nd Floor, Beside Cycle World, Opp Chenakeshwar School, Hosa Road, Electronic City, Bengaluru-560068',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Marathahalli',
                addr: '401, 3rd Floor, Above Khazana Jewellery, Krishna Summit, Outer Ring Road, Marathahalli, Bengaluru-560037',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Tumkur',
                addr: '1st Floor, Shivakumar Swamiji Circle, Above ICICI Bank, BH Road, Tumkur-572102',
                city: 'Tumkur',
                state: 'Karnataka',
            },
            {
                name: 'Yelahanka',
                addr: 'No.1299, 1st Floor, Sanitary Core, Yelahanka, Near Chikka Bommasandra Circle, Bengaluru-560064',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Yeshwanthpur',
                addr: 'No.1289/4, 1st Floor, Near Lakshmi Kalyana Mantappa, Triveni Main Road, Yeshwanthpur, Bengaluru-560022',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Hosur',
                addr: '#2B, 2nd Floor, Opposite to Krishna Temple, Bagalur Circle Taluk Office Road, Near Bypass Circle, Hosur-635109',
                city: 'Hosur',
                state: 'Tamilnadu',
            },
            {
                name: 'Mangalore',
                addr: 'Essel Wilcon, 1st Floor, Bendoorwell Kankanadi Junction, Mangaluru-575002',
                city: 'Mangalore',
                state: 'Karnataka',
            },
            {
                name: 'Shivamogga',
                addr: 'Sree Guru Malnad Arcade, 1st Floor, BH Road, Opposite to Vinayaka Theatre, Shivamogga-577201',
                city: 'Shivamogga',
                state: 'Karnataka',
            },
            {
                name: 'Hassan',
                addr: '#368/1722, 2nd Floor, Sree Venkateshwara Plaza, BM Road, Near Suvarna Hotel, Hassan-573201',
                city: 'Hassan',
                state: 'Karnataka',
            },
            {
                name: 'Kengeri',
                addr: 'No.865, 1st Main, 2nd Floor, Kengeri Satellite Town, Near Kanthi Sweets, Kengeri, Bangalore-560060',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Himayathnagar',
                addr: '3-6-10, Shop No 18, Ground Floor, Annusuya Commercial Complex, Himayatnagar, Hyderabad-500029',
                city: 'Hyderabad',
                state: 'Telangana',
            },
            {
                name: 'Secunderabad',
                addr: 'No.7, Ground Floor, Suryakiran Complex Swapnalok, Beside Soma Fabric Raymond Showroom, Secunderabad-500003',
                city: 'Hyderabad',
                state: 'Telangana',
            },
            {
                name: 'Chittoor',
                addr: '15/2150, Opp MSR Movie Land, MSR Junction, Vellore Road, Chittoor-517001',
                city: 'Chittoor',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Guntur',
                addr: '1st Floor, Surayteja Arcade 4/7, Above Big C, Brodipet, Guntur-522002',
                city: 'Guntur',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Hoskote',
                addr: '1st Floor, Above Black Bird Showroom, JD Complex, Near KEB Circle, Hoskote-562114',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Chennai - Tambaram',
                addr: 'No.38, 1st Floor, GST Road, Nehru Street, Kadapery, Tambaram, Opp Saravana Store, Chennai-640045',
                city: 'Chennai',
                state: 'Tamilnadu',
            },
            {
                name: 'Chennai - T Nagar',
                addr: 'No.8/6, Bharathi Nagar, No.32A, 1st Floor, North Usman Road, Near Indian Bank, T Nagar-600017',
                city: 'Chennai',
                state: 'Tamilnadu',
            },
            {
                name: 'Chennai - Velachery',
                addr: 'No.7, Srinivasan Complex, Opp Vijaya Nagar Bus Stand, Vijaya Nagar Main Road, Velachery, Chennai-600042',
                city: 'Chennai',
                state: 'Tamilnadu',
            },
            {
                name: 'Coimbatore - Hopes',
                addr: 'No.146, 2nd Floor, Avinashi Road, Hope College Bus Stop, Coimbatore-641004',
                city: 'Coimbatore',
                state: 'Tamilnadu',
            },
            {
                name: 'Coimbatore - Cross Cut Road',
                addr: 'Door No.286, 287, 2nd Floor, Arasan Tower, Opp PSR Silks, Cross Cut Road, Gandhipuram, Coimbatore-641012',
                city: 'Coimbatore',
                state: 'Tamilnadu',
            },
            {
                name: 'Dindigul',
                addr: '1/51, 1st Floor, Dudley School Complex, Opp to Flower Market, AMC Road, Dindigul-624003',
                city: 'Dindigul',
                state: 'Tamilnadu',
            },
            {
                name: 'Erode',
                addr: '129 A/2, KVK Complex, 1st Floor, Opp to Bus Stand, Mettur Main Road, Erode-638001',
                city: 'Erode',
                state: 'Tamilnadu',
            },
            {
                name: 'Kanchipuram',
                addr: 'No.22-AB, 1st Floor, Kamarajar Street, Near IOB Bank, Kanchipuram-631501',
                city: 'Kanchipuram',
                state: 'Tamilnadu',
            },
            {
                name: 'Karaikudi',
                addr: '19/3, 1st Floor, LM Complex, Near Ibaco Ice Cream, 100 Feet Road, Sekkalai Road, Karaikudi-630001',
                city: 'Karaikudi',
                state: 'Tamilnadu',
            },
            {
                name: 'Karur',
                addr: 'No.56, Mini Bustand Opp, West Pradhakshanam Road, Above Andaver Malligai Shop, Karur-639001',
                city: 'Karur',
                state: 'Tamilnadu',
            },
            {
                name: 'Madurai - Kalavasal',
                addr: '2nd Floor, PM Tower, Kalavasal, Near Kalavasal Signal, Madurai-625016',
                city: 'Madurai',
                state: 'Tamilnadu',
            },
            {
                name: 'Pondicherry',
                addr: 'No.250, Rajendra Building, 1st Floor, Jawaharlal Nehru Street, Ward C, Block 6, Pondicherry-605001',
                city: 'Pondicherry',
                state: 'Pondicherry',
            },
            {
                name: 'Ramanathapuram',
                addr: '216, 1st Floor, Arignar Anna Salai, Malabar Gold Upstairs, Ramanathapuram-623501',
                city: 'Ramanathapuram',
                state: 'Tamilnadu',
            },
            {
                name: 'Salem',
                addr: '1st Floor, VSA Commercial Complex, Near New Bus Stand, Salem-636004',
                city: 'Salem',
                state: 'Tamilnadu',
            },
            {
                name: 'Sivakasi',
                addr: 'No.116/16,17 Pandiyan Complex, Sattur Road, Sivakasi, Virudhunagar-626123',
                city: 'Sivakasi',
                state: 'Tamilnadu',
            },
            {
                name: 'Tanjavur',
                addr: 'No.1054, Raghuram Complex, East Rampat, Next to Kalyan Jewelers, Tanjavur-613001',
                city: 'Tanjavur',
                state: 'Tamilnadu',
            },
            {
                name: 'Theni',
                addr: '1st Floor, SPS Building, Madurai Main Road, Near Anantham Textile, Theni-625531',
                city: 'Theni',
                state: 'Tamilnadu',
            },
            {
                name: 'Tirunelveli',
                addr: '1/1, Bose Complex, 1st Floor, Madurai Road, Near Old Junction Bus Stand, Tirunelveli-627001',
                city: 'Tirunelveli',
                state: 'Tamilnadu',
            },
            {
                name: 'Tiruppur',
                addr: 'No.18, PRS Towers, Kumaran Road, Opp to Siva Textiles, Tiruppur-641601',
                city: 'Tiruppur',
                state: 'Tamilnadu',
            },
            {
                name: 'Trichy',
                addr: '1st Floor, Bharat Shopping Mall, Opposite Government Hospital, Trichy-620017',
                city: 'Trichy',
                state: 'Tamilnadu',
            },
            {
                name: 'Vellore',
                addr: 'No.19, 2nd Floor, Josalukkas Building, Katpadi Road, Thottapalayam, Vellore-632004',
                city: 'Vellore',
                state: 'Tamilnadu',
            },
            {
                name: 'Lingarajapuram',
                addr: 'No.10, No.247, 1st Floor, Kariyannapalya, 2nd Cross, 3rd Main, Hennur Main Road, Lingarajapuram, Bengaluru-560084',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Chennai - Vadapalani',
                addr: '174/321, Shop No 16, 1st Floor, Doshi Garden, Arcot Road, Vadapalani, Opp Vadapalani Bus Stop, Chennai-600026',
                city: 'Chennai',
                state: 'Tamilnadu',
            },
            {
                name: 'Chennai - Purasawalkam',
                addr: '1st Floor, Prince Towers, Shop No F-22, Purasawalkam High Road, Chennai-600010',
                city: 'Chennai',
                state: 'Tamilnadu',
            },
            {
                name: 'Chennai - Padi',
                addr: '115/65, Near Vasanth & Co, Madras Thiruvallur High Road, Padi, Chennai-600050',
                city: 'Chennai',
                state: 'Tamilnadu',
            },
            {
                name: 'Peenya - Jalahalli',
                addr: 'No.628, 2nd Floor, NH 4th Main Road, Jalahalli Cross, Bangalore-560057',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Sunkadakatte',
                addr: 'No.01, Sy No.112/1, Sri Manjunatha Complex, Anjananagar, Magadi Main Road, Bangalore-560091',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Kolar',
                addr: 'Ground Floor, Above Belaku Opticals, Opp Apollo Pharmacy, M.B. Road, Near Sante Gate, Kolar-563101',
                city: 'Kolar',
                state: 'Karnataka',
            },
            {
                name: 'Ananthapuram',
                addr: '#15-1, 1st Floor, Beside HP Petrol Bunk, Near Raghuveera Towers, Subhash Road, Anantapur-515001',
                city: 'Anantapur',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Vijayawada',
                addr: '37/1-70, 2nd Floor, Bandar Road, Labbipeta, Opp Gateway Hotel, Beside Rangoli, Vijayawada-520010',
                city: 'Vijayawada',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Rajahmundry',
                addr: '5-75/1, 1st Floor, Shaymala Center Main Road, Next to Apollo Pharmacy, Rajahmundry-533103',
                city: 'Rajahmundry',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Nellore',
                addr: 'No.24/6/322, Beside Hotel Minerva Grand, Nellore-524003',
                city: 'Nellore',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Visakhapatnam',
                addr: '10-50-11/2, Saivinayaka Plaza, Ramnagar, Near Care Hospital, Visakhapatnam-530002',
                city: 'Visakhapatnam',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Karimnagar',
                addr: '2-7-873,874, 1st Floor, Mukarampura, Near Maharaja Sweet House, Karimnagar-505001',
                city: 'Karimnagar',
                state: 'Telangana',
            },
            {
                name: 'Mancherial',
                addr: 'H.No 7-375, Gangareddy Road, Opposite Hotel Vaibhav, Beside Viswanatha Swamy Temple, Mancherial-504208',
                city: 'Mancherial',
                state: 'Telangana',
            },
            {
                name: 'Warangal',
                addr: '9-8-77/1, Jayaprakash Narayan Road, Opposite Karur Vyshya Bank, Near Nirmal Mall, Warangal-506001',
                city: 'Warangal',
                state: 'Telangana',
            },
            {
                name: 'Khammam',
                addr: '11-2/23, Siddik Complex, Near Congress Party Office, Wyra Road, Beside Kazana Jewellery, Khammam-507001',
                city: 'Khammam',
                state: 'Telangana',
            },
            {
                name: 'Bhimavaram',
                addr: '16-9-4, P.P. Road, Beside Annapurna Theatre, Near New Bus Stand, Bhimavaram-534201',
                city: 'Bhimavaram',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Tirupati',
                addr: '19-8-9, Ground Floor, 8th Air By-pass Road, Annamayya Circle Bus Stop, Near Apollo Medicals, Tirupati-517501',
                city: 'Tirupati',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Kukatpally',
                addr: 'SriRamulu Complex, Above ICICI Bank, Opp Kukatpally Police Station, Hyderabad-500072',
                city: 'Hyderabad',
                state: 'Telangana',
            },
            {
                name: 'Dilsukhnagar',
                addr: '3-4, 2nd Floor, Chaitanya Puri, Beside Khazana Jewellery, Dilsukhnagar, Hyderabad-500060',
                city: 'Hyderabad',
                state: 'Telangana',
            },
            {
                name: 'Chennai - Perambur',
                addr: 'No.93/4, SRP Kovil Street, Pervallure South, Jawaharnagar, Chennai-600082',
                city: 'Chennai',
                state: 'Tamilnadu',
            },
            {
                name: 'Chennai - Avadi',
                addr: 'No.382, CTH Road, Avadi Check Post, Opp Lakshmi Vilas Bank, Avadi, Chennai-600054',
                city: 'Chennai',
                state: 'Tamilnadu',
            },
            {
                name: 'Chennai - Adyar',
                addr: '30A, Kalki Krishnamurthi Salai, LB Road, Thiruvanmiyur, Chennai-600041',
                city: 'Chennai',
                state: 'Tamilnadu',
            },
            {
                name: 'Chennai - Ambattur',
                addr: '418/B, Lakshmi Complex, M.T.H. Road, Opp Airtel Store, Ambattur, Chennai-600053',
                city: 'Chennai',
                state: 'Tamilnadu',
            },
            {
                name: 'Rajajinagar',
                addr: 'No.331, Ground Floor, 12th Main, 80ft Road, Rajajinagar, Bangalore-560010',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Ganganagar',
                addr: 'No.37, Naveen Complex, 2nd Floor, Bellary Road, Above A2B Restaurant, Ganganagar, Bangalore-560032',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Bommanahalli',
                addr: 'No.78/2, 1st Floor, Bommanahalli Signal, Hosur Main Road, Bangalore-560068',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Gandhi Bazaar',
                addr: '65, S.S.R Arcade, Opp Venkateswara Sweet House, Gandhi Bazaar Main Road, Basavanagudi, Bangalore-560004',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Vizag - NAD Junction',
                addr: '58-1-258/2, NAD X Road, Sivalayam Backside, Above DTDC Courier, Visakhapatnam-530027',
                city: 'Visakhapatnam',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Bhavanipuram',
                addr: '76-8-11/2, Crombay Road, Andhra Bank Building, 1st Floor, Swathi Theater Road, Bhavanipuram, Vijayawada-520012',
                city: 'Vijayawada',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Ongole',
                addr: '3-2-(44), Vijaya Complex, 1st Floor, Kurnool Road, Near APSRTC Bus Stand, Ongole-523001',
                city: 'Ongole',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Kakinada',
                addr: 'No.20-1-46, 1st Floor, Opp SRMT, Main Road, Kakinada-533001',
                city: 'Kakinada',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Madurai - Anna Nagar',
                addr: '1st Floor, Hyder Complex, 80 Feet Road, Above IndusInd Bank, Anna Nagar, Madurai-625020',
                city: 'Madurai',
                state: 'Tamilnadu',
            },
            {
                name: 'Uttarahalli',
                addr: 'No.15, 17, 21, 21A and 22, 1st Floor, Dr Vishuvardhan Road, Opp ICICI Bank, Near Bharath Petrol Bunk, Uttarahalli, Bangalore-560061',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Fraser Town',
                addr: '79, MM Road, Pulakeshi Nagar, Frazer Town, Bengaluru-560051',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'KR Puram',
                addr: '51/A, 1st Main, 2nd Cross, Subhash Nagar, SM Tower, Bhattarahalli, Bangalore-560049',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Whitefield',
                addr: '#2, 1st Floor, Mayura Bakery Lane, Whitefield Main Road, Opp Shree Lakshmi Vaibhav Hotel, Whitefield-560066',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Ramanagara',
                addr: 'SLV Complex, #1386, Ward No.28, BM Road, Near Sangeetha Mobiles, Ramanagara-562159',
                city: 'Ramanagara',
                state: 'Karnataka',
            },
            {
                name: 'Trichy - Thillainagar',
                addr: 'No.3, Annamalai Tower, New Karur Bypass Road, Annamalai Nagar, Trichy-620018',
                city: 'Trichy',
                state: 'Tamilnadu',
            },
            {
                name: 'Hosur - MG Road',
                addr: '8/101-D, MG Road, Hosur-635109',
                city: 'Hosur',
                state: 'Tamilnadu',
            },
            {
                name: 'Kumbakonam',
                addr: 'No.94, Someswarar, Sannathi Street, Kumbakonam-612001',
                city: 'Kumbakonam',
                state: 'Tamilnadu',
            },
            {
                name: 'Madurai - Simmakkal',
                addr: 'No.36, Thiru.Vi.Ka. Salai, Mathi Auto Batteries Upstairs, Simmakkal Roundana, Madurai-625001',
                city: 'Madurai',
                state: 'Tamilnadu',
            },
            {
                name: 'Madurai - Villapuram',
                addr: 'No.249N, Aruppukottai Main Road, Maheswaran Milk Depo Upstairs, Madurai-625012',
                city: 'Madurai',
                state: 'Tamilnadu',
            },
            {
                name: 'Tiruppur - New Bus Stand',
                addr: '772, 1st Floor, PN Road, Sri Srimagal Complex, Tiruppur-641602',
                city: 'Tiruppur',
                state: 'Tamilnadu',
            },
            {
                name: 'Coimbatore - Ganapathy',
                addr: 'No.1420/B1, 1st Floor, Above SBI, Sathy Main Road, Ganapathy, Coimbatore-641006',
                city: 'Coimbatore',
                state: 'Tamilnadu',
            },
            {
                name: 'Coimbatore - 100 Feet Road',
                addr: 'No.282, 1st Floor, Dr. Rajendraprasad Road, 100 Ft. Road, Gandhipuram, Coimbatore-641012',
                city: 'Coimbatore',
                state: 'Tamilnadu',
            },
            {
                name: 'Coimbatore - Town Hall',
                addr: 'No.693, 1st Floor, GKR Building, Oppanakara Street, Above ICICI Bank, Coimbatore-641001',
                city: 'Coimbatore',
                state: 'Tamilnadu',
            },
            {
                name: 'Dharmapuri',
                addr: 'No.2E2, Opp GRT, Adhiyaman Bypass Road, Dharmapuri-636701',
                city: 'Dharmapuri',
                state: 'Tamilnadu',
            },
            {
                name: 'Krishnagiri',
                addr: 'No.440/1, 1st Floor, Above MKN Jewellery, Bangalore Road, Krishnagiri-635001',
                city: 'Krishnagiri',
                state: 'Tamilnadu',
            },
            {
                name: 'Chennai - Koyambedu',
                addr: 'No.194/4, Sri Sakthi Nagar, 100 Feet Road, Near Jai Nagar Park, Metro Pillar No.90, Arumbakkam, Chennai-600106',
                city: 'Chennai',
                state: 'Tamilnadu',
            },
            {
                name: 'Chennai - Triplicane',
                addr: 'No.259, 1st Floor, Bharathi Salai, Chennai-600005',
                city: 'Chennai',
                state: 'Tamilnadu',
            },
            {
                name: 'Chennai - Ashok Pillar',
                addr: 'No.24, 1st Floor, Front Portion, Rani Arcade, 1st Street Avenue, Ashoknagar, Chennai-600083',
                city: 'Chennai',
                state: 'Tamilnadu',
            },
            {
                name: 'Chennai - Chengalpattu',
                addr: '84, Rattinakinar GST Road, ICICI Complex, 1st Floor, Chengalpattu-603001',
                city: 'Chennai',
                state: 'Tamilnadu',
            },
            {
                name: 'Chennai - Valasaravakkam',
                addr: '4/15, East Kamakotinagar, Opp Chennai Mobile, Near KVB Bank, Valasaravakkam, Chennai-600087',
                city: 'Chennai',
                state: 'Tamilnadu',
            },
            {
                name: 'Chennai - ECR',
                addr: 'No.1/174, Ground Floor, East Coast Road, Palavakkam, Chennai-600041',
                city: 'Chennai',
                state: 'Tamilnadu',
            },
            {
                name: 'Tirupati - Bhavani Nagar',
                addr: '18-1-606A, VV Mahal Road, Bhavani Nagar, Opposite Lalitha Jewellers, Tirupati-517501',
                city: 'Tirupati',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Guntur - Arundelpet',
                addr: '6/19/9-5, 16th Lane, Arundelpet Main Road, Opp Saroja Oil Company, Guntur-522002',
                city: 'Guntur',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Anakapalle',
                addr: 'Arun Ice Cream Building, MOP ICICI Bank Main Road, Anakapalle-531001',
                city: 'Anakapalle',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Gajuwaka',
                addr: '26/17/15, 1st Floor, East and Middle Shops, Near R.K. Hospital, Chinagantyada, Visakhapatnam-530026',
                city: 'Visakhapatnam',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Gopalapatnam',
                addr: 'DNO:10-47-7, 1st Floor, Main Road, Gopalapatnam, Upstairs Subhapradha Clothes, Visakhapatnam-530027',
                city: 'Visakhapatnam',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Isukathota',
                addr: '#54-2-51, 2nd Floor, Opp TVS Showroom, MVP Double Road, Main Signal Point, Isukathota, Visakhapatnam-530013',
                city: 'Visakhapatnam',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Vijayawada - Governorpet',
                addr: 'Shanmukha Complex, 1st Floor, Nearby Vijaya Talkies, Eluru Road, Vijayawada-520002',
                city: 'Vijayawada',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Vizianagaram',
                addr: '1-9-1/49, Shop No.2, Sri Sai Complex, Opp Vytla Residence, Vizianagaram-535002',
                city: 'Vizianagaram',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Chikmagalur',
                addr: '1st Floor, MG Tower, Hanumanthappa Circle, KM Road, MG Road, Chikmagalur-577101',
                city: 'Chikmagalur',
                state: 'Karnataka',
            },
            {
                name: 'Vizag - Rama Talkies',
                addr: '48-14-84/6, Rama Talkies Junction, Opp Subham Prema Hospital, Visakhapatnam-530016',
                city: 'Visakhapatnam',
                state: 'Andhra Pradesh',
            },
            {
                name: 'L.B Nagar',
                addr: '3-2-369, Above Sangeetha Mobiles, Saroor Nagar Road, Hyderabad-500074',
                city: 'Hyderabad',
                state: 'Telangana',
            },
            {
                name: 'Nizampet',
                addr: 'No.964, 1st Floor, Above Kotak Mahindra Bank, Metro Pillar No.691, Nizampet, Hyderabad-500090',
                city: 'Hyderabad',
                state: 'Telangana',
            },
            {
                name: 'Seva Nagar',
                addr: 'No.15/3, Sharadamma Munikalappa Complex, Ground Floor, Banaswadi Main Road, Bangalore-560033',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Hosur - Bagalur',
                addr: '#6, Krishna Sweets Upstairs, 1st Floor, Behind GRT Jewellers, Bagalur Main Road, Hosur-635109',
                city: 'Hosur',
                state: 'Tamilnadu',
            },
            {
                name: 'Tiruvallur',
                addr: 'No.4/120, JN Road, ICICI Bank Complex, Thiruvallur-602001',
                city: 'Tiruvallur',
                state: 'Tamilnadu',
            },
            {
                name: 'Uppal',
                addr: '#2, 1-89, Main Road, Laxma Reddy Colony, Opposite Mahaankali Temple, Hyderabad-500039',
                city: 'Hyderabad',
                state: 'Telangana',
            },
            {
                name: 'Jakkur',
                addr: '188/1, 1st Floor, 5th Main Road, Naveen Complex, Sahakaranagar Post, Byatarayanapura Bus Stop, Bangalore-560092',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Mulbagal',
                addr: '1st Floor, Shankaraiah Shetty Complex, MC Road, Near Gangamma Temple Road, Mulbagal, Kolar-563131',
                city: 'Kolar',
                state: 'Karnataka',
            },
            {
                name: 'Vidyaranyapura',
                addr: '1st Floor, Beside Liberty Showroom, Chamundeswari Layout, Vidyaranyapura, Bengaluru-560097',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Koramangala',
                addr: 'No.20, 7th Main, 1st Block, Opposite SBI Bank, Koramangala, Bengaluru-560034',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Mahalakshmi Layout',
                addr: 'Near Mahalakshmi Layout Metro Station, Opposite Sapthagiri Kalyana Mantapa, Bengaluru-560086',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'AS Rao Nagar',
                addr: 'No.1-12, 1st Floor, Shop No.04, Opposite Spirit Club, AS Rao Nagar, Hyderabad-500062',
                city: 'Hyderabad',
                state: 'Telangana',
            },
            {
                name: 'Rajahmundry - Devi Chowk',
                addr: 'D.No 20-29-6, 1st Floor, Above Coastal Bank, Beside Lalitha Jewellers, Devi Chowk, Rajahmundry-533101',
                city: 'Rajahmundry',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Mandya',
                addr: 'No.1, KVS Commercial Complex, Beside Malabar Gold & Diamonds, MC Road, Mandya-571401',
                city: 'Mandya',
                state: 'Karnataka',
            },
            {
                name: 'Mysore - Devaraj Urs Road',
                addr: '15/1, 1st Floor, Near KR Circle, Devraj Urs Road, Near City Bus Stand and Bata Showroom, Mysore-570001',
                city: 'Mysore',
                state: 'Karnataka',
            },
            {
                name: 'Kallakurichi',
                addr: '#93/41, 1st Floor, Satyanarayanan, Salem Main Road, Kallakkurichi-606202',
                city: 'Kallakurichi',
                state: 'Tamilnadu',
            },
            {
                name: 'Thiruvarur',
                addr: 'No.2, South Main Street, Near Krishna Sweets, Thiruvarur-610001',
                city: 'Thiruvarur',
                state: 'Tamilnadu',
            },
            {
                name: 'Dharwad',
                addr: 'S.No.29/2, 1st Floor, Tollanaka, P.B. Road, Dharwad-580004',
                city: 'Dharwad',
                state: 'Karnataka',
            },
            {
                name: 'Madurai - Nethaji Road',
                addr: 'No.45 A & B, Ground & 1st Floor, East Avna Moola Street, Meenakshi Amman Temple East Tower, Madurai-625001',
                city: 'Madurai',
                state: 'Tamilnadu',
            },
            {
                name: 'Panjagutta',
                addr: 'No.6-3-883/4/1, KPR Plaza Premises, Panjagutta, Hyderabad-500082',
                city: 'Hyderabad',
                state: 'Telangana',
            },
            {
                name: 'AS Rao Nagar - Radhika Theatre',
                addr: 'No.265/4/3, Srinivasa Nagar, Kapra Road, Brindavan Colony, Secunderabad-500062',
                city: 'Hyderabad',
                state: 'Telangana',
            },
            {
                name: 'Habsiguda',
                addr: 'H.No.1-1-17, 1st Floor, Street No.1, Habsiguda, Hyderabad-500007',
                city: 'Hyderabad',
                state: 'Telangana',
            },
            {
                name: 'Dilshuknagar - Konark Theatre',
                addr: 'No.9-6, 2nd Floor, Opp Bus Depot, Lalitha Nagar, Dilshuknagar Metro Station, Hyderabad-500060',
                city: 'Hyderabad',
                state: 'Telangana',
            },
            {
                name: 'Kukatpally Y Junction',
                addr: 'No.698/P, 670 & 671, KKR Complex, Y Junction Kukatpally, Hyderabad-500072',
                city: 'Hyderabad',
                state: 'Telangana',
            },
            {
                name: 'Tolichowki',
                addr: '8-1-400/48, Deluxe Colony, Gachibowli Road, Tolichowki, Hyderabad-500008',
                city: 'Hyderabad',
                state: 'Telangana',
            },
            {
                name: 'Miyapur',
                addr: 'SSR Complex, Shop No F-4, Miyapur Alwayn X Road, Miyapur, Hyderabad-500049',
                city: 'Hyderabad',
                state: 'Telangana',
            },
            {
                name: 'Vijayanagar',
                addr: 'No.1225-1226, 1st Floor, 9th Main, Opp Indraprastha Hotel, Near Vijayanagar Bus Stop, Bengaluru-560040',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Ramamurthy Nagar',
                addr: '#43, JR Arcade, 1st Floor, Ramamurthy Nagar Main Road, Near Channasandra Main Road, Bengaluru-560016',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Kadapa',
                addr: '#21/478, 1st Floor, Above Anand Studio, Opp Hotel Siva Ram Biryani, Near Gokul Lodge & Krishna Circle, Kadapa-516002',
                city: 'Kadapa',
                state: 'Andhra Pradesh',
            },
            {
                name: 'Basaveshwara Nagar',
                addr: 'No.E37, 1st Floor, 80 Feet Road, Opp Punya Hospital, Basaveshwara Nagar, Bangalore-560079',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Madurai - Kalavasal 2',
                addr: '#114, Vignesh Complex, Theni Main Road, Near Thanamayil Jewellery, Madurai-625016',
                city: 'Madurai',
                state: 'Tamilnadu',
            },
            {
                name: 'Thanisandra',
                addr: 'No.4 and 5, K No.373, 1st Floor, Thanisandra Village, SRK Nagar Post, Bangalore-560077',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Yeshwanthpur 2',
                addr: '1st Floor, No.38, MS Ramaiah Road, Next to Bank of Baroda, Dr. Ambedkar Nagar, Yeshwanthpur, Bengaluru-560022',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Kothanur',
                addr: 'No.50/9, 1st Floor, Hennur-Bagalur Main Road, Kothanur, Bengaluru-560077',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Basaveshwara Nagar 3',
                addr: '1st Floor, No.478, Opp Priyadarshini Grand Hotel, 1st Cross, 6th Main, 3rd Stage, 3rd Block, Basaveshwara Nagar, Bangalore-560079',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
            {
                name: 'Pallavaram',
                addr: '#5/92, Bajanai Koil Street, Cantonment, Near Inayath Mahal, Above A1 Snacks, Pallavaram, Chennai-600043',
                city: 'Chennai',
                state: 'Tamilnadu',
            },
            {
                name: 'Guduvancherry',
                addr: 'No.84, GST Road, Guduvancherry-603202',
                city: 'Chennai',
                state: 'Tamilnadu',
            },
            {
                name: 'JP Nagar',
                addr: 'No.537, JP Nagar 7th Phase, RBI Layout, 2nd Floor, Opp Brigade Millennium, Bangalore-560078',
                city: 'Bengaluru',
                state: 'Karnataka',
            },
        ]

        // Build states and cities from data
        var statesAndCities = {}
        branches.forEach(function(b) {
            if (!statesAndCities[b.state]) statesAndCities[b.state] = {}
            statesAndCities[b.state][b.city] = true
        })

        // Populate state filter
        var stateFilter = document.getElementById('stateFilter')
        var cityFilter = document.getElementById('cityFilter')
        var states = Object.keys(statesAndCities).sort()
        states.forEach(function(s) {
            var opt = document.createElement('option')
            opt.value = s
            opt.textContent = s
            stateFilter.appendChild(opt)
        })

        // Update city filter based on state
        function updateCityFilter() {
            var selectedState = stateFilter.value
            cityFilter.innerHTML = '<option value="">All Cities</option>'
            var cities = {}
            branches.forEach(function(b) {
                if (!selectedState || b.state === selectedState) {
                    cities[b.city] = true
                }
            })
            Object.keys(cities)
                .sort()
                .forEach(function(c) {
                    var opt = document.createElement('option')
                    opt.value = c
                    opt.textContent = c
                    cityFilter.appendChild(opt)
                })
        }

        // Render branches
        function renderBranches() {
            var search = document.getElementById('branchSearch').value.toLowerCase()
            var selectedState = stateFilter.value
            var selectedCity = cityFilter.value
            var grid = document.getElementById('branchGrid')
            var countEl = document.getElementById('branchCount')

            var filtered = branches.filter(function(b) {
                var matchSearch = !search ||
                    b.name.toLowerCase().indexOf(search) !== -1 ||
                    b.addr.toLowerCase().indexOf(search) !== -1 ||
                    b.city.toLowerCase().indexOf(search) !== -1
                var matchState = !selectedState || b.state === selectedState
                var matchCity = !selectedCity || b.city === selectedCity
                return matchSearch && matchState && matchCity
            })

            countEl.innerHTML =
                'Showing <strong>' +
                filtered.length +
                '</strong> of <strong>' +
                branches.length +
                '</strong> branches'

            if (filtered.length === 0) {
                grid.innerHTML =
                    '<div class="no-results"><h3>No branches found</h3><p>Try adjusting your search or filters</p></div>'
                return
            }

            var html = ''
            filtered.forEach(function(b) {
                html +=
                    '<div class="branch-card"><h4>' +
                    b.name +
                    '</h4><p>' +
                    b.addr +
                    '</p></div>'
            })
            grid.innerHTML = html
        }

        // Event listeners
        stateFilter.addEventListener('change', function() {
            updateCityFilter()
            renderBranches()
        })

        cityFilter.addEventListener('change', renderBranches)

        var searchTimeout
        document
            .getElementById('branchSearch')
            .addEventListener('input', function() {
                clearTimeout(searchTimeout)
                searchTimeout = setTimeout(renderBranches, 200)
            })

        // Init
        updateCityFilter()
        renderBranches()

        // Lead modal behavior
        var leadModal = document.getElementById('leadModal')
        var leadModalClose = document.getElementById('leadModalClose')

        function openLeadModal() {
            if (!leadModal) return
            leadModal.classList.add('active')
            leadModal.setAttribute('aria-hidden', 'false')
        }

        function closeLeadModal() {
            if (!leadModal) return
            leadModal.classList.remove('active')
            leadModal.setAttribute('aria-hidden', 'true')
        }

        if (leadModalClose) {
            leadModalClose.addEventListener('click', closeLeadModal)
        }

        if (leadModal) {
            leadModal.addEventListener('click', function(e) {
                if (e.target === leadModal) closeLeadModal()
            })
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeLeadModal()
        })

        // Auto-open on page load
        setTimeout(openLeadModal, 600)

        // Submit lead form to API
        var contactForm = document.getElementById('contactForm')
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault()

                var formData = new FormData(contactForm)
                fetch(contactForm.action, {
                        method: 'POST',
                        body: formData,
                    })
                    .then(function(response) {
                        if (!response.ok) throw new Error('Network response was not ok')
                        return response.text()
                    })
                    .then(function() {
                        window.location.href =
                            'https://atticagold.in/Config/Enquiry/thankyou.html'
                    })
                    .catch(function() {
                        contactForm.submit()
                    })
            })
        }
    </script>
</body>

</html>
