<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $branch->title }}</title>
    <meta property="og:title" content="{{ $branch->title }}" />
    <meta name="keywords" content="{{ $branch->keyword }}">
    <meta name="description" content="{{ $branch->description }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&family=Inter:wght@400;500&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary: #800000;
            --primary-dark: #4d0000;
            --gold: #d4af37;
            --gold-light: #f4e0a1;
            --dark: #1a1a1a;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: #444;
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: 'Outfit', sans-serif;
        }

        .navbar {
            background: white;
            border-bottom: 2px solid var(--gold);
            padding: 10px 0;
        }

        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('https://images.unsplash.com/photo-1610375461246-83df859d849d?auto=format&fit=crop&q=80');
            background-size: cover;
            background-position: center;
            height: 60vh;
            min-height: 450px;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
        }

        .hero h1 {
            font-size: clamp(2rem, 4vw, 3.5rem);
            font-weight: 800;
        }

        .hero span {
            color: var(--gold);
        }

        .btn-gold {
            background: linear-gradient(45deg, var(--gold), #f4e0a1);
            color: var(--primary-dark) !important;
            font-weight: 700;
            padding: 14px 35px;
            border-radius: 50px;
            border: none;
            transition: 0.3s;
            text-transform: uppercase;
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
        }

        .btn-gold:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.4);
        }

        .section-padding {
            padding: 60px 0;
        }

        .section-title {
            color: var(--primary);
            font-weight: 800;
            position: relative;
            margin-bottom: 40px;
            text-align: center;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: var(--gold);
        }

        .step-card {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            height: 100%;
            transition: 0.3s;
            border: 1px solid #eee;
            position: relative;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .step-card:hover {
            border-color: var(--gold);
            transform: translateY(-5px);
        }

        .step-number {
            font-size: 2rem;
            font-weight: 800;
            color: var(--gold-light);
            display: block;
            margin-bottom: 10px;
        }

        .highlight {
            background: var(--primary);
            color: white;
            padding: 50px 0;
        }

        .counter {
            font-size: 2.8rem;
            font-weight: 800;
            color: var(--gold);
        }

        /* FAQ Custom Styles */
        .accordion-item {
            border: 1px solid #eee;
            margin-bottom: 10px;
            border-radius: 10px !important;
            overflow: hidden;
        }

        .accordion-button:not(.collapsed) {
            background-color: var(--gold-light);
            color: var(--primary);
            font-weight: 700;
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: var(--gold);
        }

        .accordion-button {
            font-weight: 600;
            color: var(--primary-dark);
        }

        .sticky-call {
            position: fixed;
            bottom: 25px;
            right: 25px;
            background: var(--primary);
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            text-decoration: none;
        }
    </style>
</head>

<body>
    @php
        $branchName = $branch->name ?: 'your city';
        $branchAddress = $branch->address ?: '-';
        $branchArea = $branch->area ?: '-';
        $branchMap = $branch->map ?: '#';
        $branchCity = optional($branch->city)->name ?: '-';
        $branchState = optional($branch->state)->name ?: '-';
        $branchPincode = $branch->pincode ?: '-';
        $branchDay = $branch->day ?: 'Monday - Sunday';
        $branchTime = $branch->time ?: '10:00 AM - 8:00 PM';
    @endphp

    <nav class="navbar sticky-top">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand fw-bold" href="#" style="color:var(--primary)">ATTICA GOLD COMPANY</a>
            <a href="tel:+918880300300" class="btn btn-outline-danger btn-sm rounded-pill px-3 d-none d-md-block">Call
                8880 300 300</a>
        </div>
    </nav>

    <section class="hero">
        <div class="container" data-aos="fade-up">
            <h1>Best Gold <span>Buyers</span> in {{ $branchName }}</h1>
            <p class="lead mb-4">Best Gold Buyers | 22K & 24K Gold | Live Gold Rate</p>
            <a href="tel:+918880300300" class="btn btn-gold"><i class="fa fa-phone-alt me-2"></i> Get Instant Cash</a>
        </div>
    </section>

    <section class="container section-padding text-center">
        <h2 class="section-title">Trusted Gold Buyers for Instant Cash in {{ $branchName }}</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <p class="text-muted mb-3">Looking to sell gold for cash in {{ $branchName }}? We buy 22K and 24K gold
                    jewellery, coins, bullion bars, temple jewellery, antique jewellery, and pledged gold at the best
                    market rate.</p>
                <p>Our evaluation process is transparent, fast, and powered by advanced <strong>German XRF purity
                        testing machines</strong>. We apply live gold rates, ensure zero hidden deductions, and provide
                    secure payment within minutes.</p>
            </div>
        </div>
    </section>

    <section class="bg-light section-padding">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h3 class="mb-4 fw-bold" style="color:var(--primary)">What Gold Can You Sell?</h3>
                    <div class="row g-3">
                        <div class="col-6">? 22K & 24K Gold</div>
                        <div class="col-6">? Unused Ornaments</div>
                        <div class="col-6">? Broken Jewellery</div>
                        <div class="col-6">? Coins & Bullion</div>
                        <div class="col-6">? Pledged Gold</div>
                        <div class="col-6">? Antique Jewellery</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 rounded-4 text-white" style="background:var(--primary-dark)">
                        <h5 class="text-warning mb-3">Evaluation Based On</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">1. Verified Purity Percentage</li>
                            <li class="mb-2">2. Exact Net Weight</li>
                            <li class="mb-2">3. Live Market Gold Rate</li>
                            <li>4. No Hidden Deductions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container section-padding">
        <h2 class="section-title">How to Sell Gold � 4 Transparent Steps</h2>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="step-card">
                    <span class="step-number"></span>
                    <i class="fa fa-id-card text-warning mb-2"></i>
                    <h5>Verification</h5>
                    <p class="small text-muted">Carry a valid ID (Aadhar/PAN) for a secure, KYC-compliant transaction.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="step-card">
                    <span class="step-number"></span>
                    <i class="fa fa-microscope text-warning mb-2"></i>
                    <h5>Purity Check</h5>
                    <p class="small text-muted">German XRF technology determines exact purity without any melting.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="step-card">
                    <span class="step-number"></span>
                    <i class="fa fa-calculator text-warning mb-2"></i>
                    <h5>Live Valuation</h5>
                    <p class="small text-muted">We apply the current market gold rate to ensure you get maximum value.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="step-card">
                    <span class="step-number"></span>
                    <i class="fa fa-money-check-alt text-warning mb-2"></i>
                    <h5>Instant Pay</h5>
                    <p class="small text-muted">Receive your payment instantly via Cash or Bank Transfer (IMPS).</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-white">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="accordion" id="goldFAQ">
                        <div class="accordion-item shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1">
                                    What documents are required to sell gold in {{ $branchName }}?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#goldFAQ">
                                <div class="accordion-body">
                                    To ensure a secure and legal transaction, you need to provide a valid
                                    Government-issued ID proof (Aadhar Card, PAN Card, or Voter ID) along with your
                                    local address proof.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    How do you determine the purity of my gold?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#goldFAQ">
                                <div class="accordion-body">
                                    We use advanced German XRF (X-Ray Fluorescence) technology. This allows us to check
                                    the exact purity of your gold ornaments instantly without causing any damage or
                                    weight loss to your jewellery.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq3">
                                    Do you buy gold that is currently pledged in a bank?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#goldFAQ">
                                <div class="accordion-body">
                                    Yes, we specialize in releasing pledged gold. We will pay the bank/finance company
                                    the required amount to release your gold and pay you the remaining balance instantly
                                    after valuation.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq4">
                                    How is the final price calculated?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#goldFAQ">
                                <div class="accordion-body">
                                    The price is based on three factors: The exact net weight of the gold (excluding
                                    stones), the purity verified by XRF, and the current live market gold rate at the
                                    time of the transaction.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq5">
                                    What are the payment modes available?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#goldFAQ">
                                <div class="accordion-body">
                                    We offer instant payments. You can choose to receive your money via Cash (within
                                    legal limits) or immediate bank transfers like IMPS, NEFT, or RTGS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light section-padding">
        <div class="container">
            <h2 class="section-title">Visit {{ $branchName }} Branch</h2>
            <div class="row g-0 rounded-4 overflow-hidden shadow-sm bg-white">
                <div class="col-lg-6 p-5">
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-danger bg-opacity-10 p-3 rounded-circle me-3">
                            <i class="fa fa-map-marker-alt text-danger fs-4"></i>
                        </div>
                        <h4 class="mb-0 fw-bold" style="color:var(--primary)">Location Details</h4>
                    </div>

                    <address class="mb-4">
                        <p class="h5 fw-bold mb-2">Attica Gold Company</p>
                        <p class="text-muted lh-base">
                            {{ $branchAddress }}<br>
                            {{ $branchArea }}<br>
                            {{ $branchCity }}, {{ $branchState }} {{ $branchPincode }}
                        </p>
                    </address>

                    <div class="d-flex align-items-center mb-4">
                        <i class="fa fa-phone-alt text-success me-3"></i>
                        <div>
                            <span class="text-muted d-block small">Call for Query</span>
                            <a href="tel:+918880300300" class="text-decoration-none fw-bold fs-5 text-dark">8880 300
                                300</a>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col-sm-6">
                            <a href="tel:+918880300300" class="btn btn-gold w-100 py-3">Call Branch</a>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ $branchMap }}" target="_blank" class="btn btn-outline-danger w-100 py-3">
                                <i class="fa fa-directions me-2"></i>Directions
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-center text-center p-5"
                    style="background: linear-gradient(135deg, var(--primary), var(--primary-dark)); color: white;">
                    <div>
                        <div class="mb-4">
                            <i class="fa fa-location-dot fa-4x text-warning opacity-75"></i>
                        </div>
                        <h3 class="fw-bold">Easy to Reach</h3>
                        <p class="lead opacity-75">{{ $branchArea }}</p>
                        <hr class="w-25 mx-auto border-warning opacity-50">
                        <p class="small">Open {{ $branchDay }}<br>{{ $branchTime }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="pt-5 pb-3 bg-dark text-white">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <h4 class="fw-bold mb-1" style="color: var(--gold-light)">Attica Gold Company</h4>
                    <p class="text-white-50 mb-0">India's No.1 Trusted Gold Buying Company.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="social-links">
                        <a href="#" class="text-white me-3 opacity-75 text-decoration-none"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3 opacity-75 text-decoration-none"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white opacity-75 text-decoration-none"><i
                                class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4 opacity-25">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="small text-white-50 mb-0">© 2026 Attica Gold Company {{ $branchName }}. All Rights
                        Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <a href="tel:+918880300300" class="sticky-call"><i class="fa fa-phone"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        const counters = document.querySelectorAll('.counter');
        const animateCounters = () => {
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                const updateCount = () => {
                    const count = +counter.innerText.replace(/,/g, '');
                    const inc = target / 50;
                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc).toLocaleString();
                        setTimeout(updateCount, 25);
                    } else {
                        counter.innerText = target.toLocaleString();
                    }
                };
                updateCount();
            });
        };
        let animated = false;
        window.addEventListener('scroll', () => {
            const section = document.querySelector('.highlight');
            if (section && section.getBoundingClientRect().top < window.innerHeight && !animated) {
                animateCounters();
                animated = true;
            }
        });
    </script>

</body>

</html>
