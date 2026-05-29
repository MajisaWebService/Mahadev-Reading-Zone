<?php
// Mahadev Reading Zone - Configuration & Main Entry
// In a real deployment, move configuration to config.php

$siteTitle = "Mahadev Reading Zone";
$location = "Gandhinagar, Gujarat";
$contactPhone = "+91 98765 43210";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A peaceful, disciplined study space in Gandhinagar inspired by the focus of Mahadev.">
    <title><?php echo $siteTitle; ?> | Focus & Knowledge</title>
    
    <!-- Google Fonts: Montserrat (Modern) & Cormorant Garamond (Elegant/Spiritual) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        /* --- CSS VARIABLES & THEME (HIMALAYAN ZEN) --- */
        :root {
            /* Palette */
            --primary-stone: #2D3436;    /* Dark Stone for Text */
            --accent-saffron: #D35400;   /* Deep Saffron/Orange */
            --himalaya-ice: #DFE6E9;     /* Light Blue-Grey */
            --snow-white: #F9F9F9;       /* Main Background */
            --glass-bg: rgba(255, 255, 255, 0.85); /* Frost Effect */
            --glass-border: rgba(255, 255, 255, 0.3);
            
            /* Spacing & Layout */
            --container-width: 1200px;
            --header-height: 80px;
            
            /* Transitions */
            --transition-smooth: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            
            /* Shadows */
            --shadow-soft: 0 10px 30px -10px rgba(0, 0, 0, 0.08);
            --shadow-hover: 0 20px 40px -10px rgba(0, 0, 0, 0.15);
        }

        /* --- RESET & TYPOGRAPHY --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--snow-white);
            color: var(--primary-stone);
            line-height: 1.7;
            overflow-x: hidden;
            background-image: linear-gradient(to bottom, #fff, #f4f7f6);
        }

        h1, h2, h3, h4 {
            font-family: 'Cormorant Garamond', serif;
            color: var(--primary-stone);
            font-weight: 700;
            letter-spacing: -0.02em;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .container {
            width: 88%;
            max-width: var(--container-width);
            margin: 0 auto;
        }

        .section-padding {
            padding: 100px 0;
        }

        .section-title {
            text-align: center;
            font-size: 3rem;
            margin-bottom: 0.5rem;
            position: relative;
            color: var(--primary-stone);
        }

        /* Artistic Underline */
        .section-title::after {
            content: '•';
            display: block;
            font-size: 2rem;
            color: var(--accent-saffron);
            line-height: 0.5;
            margin-top: 10px;
        }

        .section-subtitle {
            text-align: center;
            color: #636e72;
            margin-bottom: 60px;
            font-size: 1.1rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 300;
        }

        /* --- HEADER & NAVIGATION --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-bottom: 1px solid rgba(0,0,0,0.03);
            z-index: 1000;
            height: var(--header-height);
            display: flex;
            align-items: center;
            transition: var(--transition-smooth);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .logo {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-stone);
            display: flex;
            align-items: center;
            gap: 12px;
            letter-spacing: 0.05em;
        }
        
        .logo span {
            color: var(--accent-saffron);
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-links a {
            font-weight: 500;
            font-size: 0.9rem;
            color: var(--primary-stone);
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: var(--transition-smooth);
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -5px;
            left: 50%;
            background-color: var(--accent-saffron);
            transition: var(--transition-smooth);
            transform: translateX(-50%);
        }

        .nav-links a:hover::after,
        .nav-links a.active::after {
            width: 100%;
        }

        .hamburger {
            display: none;
            cursor: pointer;
            flex-direction: column;
            gap: 6px;
        }

        .bar {
            width: 30px;
            height: 2px;
            background-color: var(--primary-stone);
            transition: var(--transition-smooth);
        }

        /* --- HERO SECTION --- */
        .hero {
            height: 100vh;
            /* Lighter, misty mountain feel */
            background: linear-gradient(to right, rgba(255,255,255,0.8), rgba(255,255,255,0.4)),
                        url('https://images.unsplash.com/photo-1518098268026-4e187743369b?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: flex-start; /* Align Left */
            color: var(--primary-stone);
            padding-top: var(--header-height);
        }

        .hero-content {
            width: 100%;
            max-width: var(--container-width);
            margin: 0 auto;
            padding: 0 5%;
            animation: slideUp 1.2s cubic-bezier(0.2, 0.8, 0.2, 1);
        }

        .hero h1 {
            font-size: 4.5rem;
            color: var(--primary-stone);
            line-height: 1.1;
            margin-bottom: 25px;
        }
        
        .hero h1 span {
            color: var(--accent-saffron);
            font-style: italic;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 45px;
            font-weight: 400;
            color: #555;
            max-width: 500px;
            border-left: 3px solid var(--accent-saffron);
            padding-left: 20px;
        }

        .btn {
            display: inline-block;
            padding: 16px 36px;
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: var(--transition-smooth);
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background-color: var(--primary-stone);
            color: #fff;
            box-shadow: 0 10px 20px rgba(45, 52, 54, 0.2);
        }

        .btn-primary:hover {
            background-color: var(--accent-saffron);
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(211, 84, 0, 0.3);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--primary-stone);
            margin-left: 20px;
            border: 1px solid var(--primary-stone);
        }

        .btn-secondary:hover {
            background-color: var(--primary-stone);
            color: #fff;
        }

        /* --- ABOUT SECTION --- */
        .about-content {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 80px;
            align-items: center;
        }

        .about-text h3 {
            font-size: 2.2rem;
            margin-bottom: 25px;
        }

        .about-text p {
            margin-bottom: 25px;
            color: #666;
            font-size: 1.05rem;
        }

        .about-image {
            position: relative;
        }
        
        .about-image img {
            border-radius: 20px 0 20px 0; /* Leaf/Organic shape */
            box-shadow: var(--shadow-soft);
            filter: grayscale(20%);
            transition: var(--transition-smooth);
        }
        
        .about-image:hover img {
            filter: grayscale(0%);
            transform: scale(1.02);
        }

        /* --- FACILITIES (Glass Cards) --- */
        .facilities {
            background-color: #f4f7f6;
            position: relative;
        }

        .facilities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 40px;
        }

        .facility-card {
            background: #fff;
            padding: 40px 30px;
            text-align: left;
            border-radius: 12px;
            transition: var(--transition-smooth);
            border: 1px solid rgba(0,0,0,0.03);
            box-shadow: var(--shadow-soft);
            position: relative;
            overflow: hidden;
        }

        .facility-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 0;
            background-color: var(--accent-saffron);
            transition: 0.4s ease;
        }

        .facility-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
        }
        
        .facility-card:hover::before {
            height: 100%;
        }

        .icon-box {
            font-size: 2rem;
            color: var(--accent-saffron);
            margin-bottom: 20px;
            background: rgba(211, 84, 0, 0.1);
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .facility-card h4 {
            font-size: 1.4rem;
            margin-bottom: 12px;
        }
        
        .facility-card p {
            font-size: 0.95rem;
            color: #777;
        }

        /* --- MEMBERSHIP --- */
        .membership-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
            padding: 20px;
        }

        .plan-card {
            background: #fff;
            padding: 50px 40px;
            border-radius: 20px;
            text-align: center;
            box-shadow: var(--shadow-soft);
            position: relative;
            transition: var(--transition-smooth);
            border: 1px solid #f0f0f0;
        }

        .plan-card.recommended {
            background: var(--primary-stone);
            color: #fff;
            transform: scale(1.05);
            z-index: 10;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }
        
        .plan-card.recommended h3,
        .plan-card.recommended .price,
        .plan-card.recommended .plan-features li,
        .plan-card.recommended .price span {
            color: #fff;
        }
        
        .plan-card.recommended .plan-features li {
            color: rgba(255,255,255,0.8);
        }

        .plan-card:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: var(--shadow-hover);
        }

        .plan-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: var(--accent-saffron);
            color: #fff;
            padding: 5px 12px;
            border-radius: 4px;
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .price {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary-stone);
            margin: 20px 0;
            font-family: 'Cormorant Garamond', serif;
        }

        .price span {
            font-size: 1rem;
            color: #999;
            font-weight: 400;
            font-family: 'Montserrat', sans-serif;
        }

        .plan-features {
            margin: 30px 0;
            text-align: left;
        }

        .plan-features li {
            margin-bottom: 15px;
            color: #555;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .plan-features li::before {
            content: '✓';
            color: var(--accent-saffron);
            font-weight: bold;
        }

        /* --- RULES --- */
        .rules-section {
            background-color: #fff;
            position: relative;
            overflow: hidden;
            border-top: 1px solid #eee;
        }
        
        .rules-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .rule-item {
            display: flex;
            flex-direction: column;
            padding: 30px;
            background: #fafafa;
            border-radius: 8px;
            transition: var(--transition-smooth);
        }
        
        .rule-item:hover {
            background: #fff;
            box-shadow: var(--shadow-soft);
        }

        .rule-number {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.5rem;
            color: var(--himalaya-ice);
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .rule-item:hover .rule-number {
            color: var(--accent-saffron);
        }

        .rule-content h4 {
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        /* --- GALLERY --- */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Tighter grid */
            gap: 20px;
        }

        .gallery-item {
            overflow: hidden;
            border-radius: 0; /* Sharp corners */
            cursor: pointer;
            height: 300px;
            position: relative;
        }
        
        .gallery-item::after {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.2);
            opacity: 0;
            transition: var(--transition-smooth);
        }

        .gallery-item:hover::after {
            opacity: 1;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }
        
        /* Lightbox */
        .lightbox {
            display: none;
            position: fixed;
            z-index: 2000;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.95); /* White overlay instead of black */
            justify-content: center;
            align-items: center;
        }
        
        .lightbox img {
            max-width: 90%;
            max-height: 80vh;
            box-shadow: 0 20px 50px rgba(0,0,0,0.2);
        }
        
        .close-lightbox {
            position: absolute;
            top: 30px;
            right: 40px;
            color: #333;
            font-size: 50px;
            cursor: pointer;
            line-height: 1;
        }

        /* --- CONTACT & FOOTER --- */
        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            background: #fff;
            box-shadow: var(--shadow-hover);
            border-radius: 12px;
            overflow: hidden;
            margin-top: 40px;
        }

        .contact-info {
            padding: 60px;
            background-color: var(--primary-stone);
            color: #fff;
            position: relative;
            overflow: hidden;
        }
        
        /* Abstract decorative circle */
        .contact-info::after {
            content: '';
            position: absolute;
            bottom: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(255,255,255,0.05);
        }

        .contact-info h3 {
            color: #fff;
            margin-bottom: 30px;
            font-size: 2rem;
        }

        .info-item {
            margin-bottom: 25px;
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }
        
        .info-icon {
            color: var(--accent-saffron);
            font-size: 1.2rem;
            margin-top: 4px;
        }

        .map-frame {
            width: 100%;
            height: 100%;
            min-height: 400px;
            filter: grayscale(100%); /* B&W Map */
        }

        footer {
            background-color: #fff;
            color: var(--primary-stone);
            text-align: center;
            padding: 60px 0;
            border-top: 1px solid #eee;
        }

        .footer-quote {
            font-family: 'Cormorant Garamond', serif;
            color: var(--accent-saffron);
            font-size: 1.5rem;
            margin-bottom: 15px;
            font-style: italic;
        }

        /* --- ANIMATIONS --- */
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* --- MOBILE RESPONSIVENESS --- */
        @media (max-width: 900px) {
            .hero h1 { font-size: 3rem; }
            .about-content { grid-template-columns: 1fr; gap: 40px; }
            .about-image { order: -1; } /* Image on top */
            .contact-container { grid-template-columns: 1fr; }
            .gallery-grid { grid-template-columns: repeat(2, 1fr); }
            
            .hamburger { display: flex; z-index: 1001; }
            
            .nav-links {
                position: fixed;
                top: 0;
                right: -100%;
                width: 100%; /* Full width menu */
                height: 100vh;
                background-color: #fff;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: 0.5s cubic-bezier(0.77, 0, 0.175, 1);
                z-index: 1000;
            }
            
            .nav-links.active { right: 0; }
            .nav-links a { color: var(--primary-stone); font-size: 1.5rem; }
            
            .bar.active:nth-child(1) { transform: rotate(-45deg) translate(-6px, 6px); }
            .bar.active:nth-child(2) { opacity: 0; }
            .bar.active:nth-child(3) { transform: rotate(45deg) translate(-6px, -6px); }
            
            .plan-card.recommended { transform: none; }
        }
    </style>
</head>
<body>

    <!-- HEADER / NAVIGATION -->
    <header id="header">
        <div class="container">
            <nav>
                <div class="logo">
                    <!-- Geometric Trident Icon -->
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="var(--primary-stone)">
                        <path d="M12 2C10.5 2 9 3 9 5V14H6V5C6 4.45 5.55 4 5 4C4.45 4 4 4.45 4 5V15C4 16.66 5.34 18 7 18H11V22H13V18H17C18.66 18 20 16.66 20 15V5C20 4.45 19.55 4 19 4C18.45 4 18 4.45 18 5V14H15V5C15 3 13.5 2 12 2Z"/>
                    </svg>
                    Mahadev <span>Zone</span>
                </div>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#facilities">Facilities</a></li>
                    <li><a href="#membership">Membership</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="hamburger">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </nav>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Silence is the<br>Language of <span>Focus</span>.</h1>
            <p>Elevate your preparation in a sanctuary designed for absolute concentration. Inspired by the stillness of the Himalayas.</p>
            <button onclick="location.href='#membership'" class="btn btn-primary">View Plans</button>
            <button onclick="location.href='#facilities'" class="btn btn-secondary">Our Space</button>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="section-padding">
        <div class="container">
            <h2 class="section-title">The Philosophy</h2>
            <p class="section-subtitle">Why we created this space.</p>
            
            <div class="about-content">
                <div class="about-text">
                    <h3>More Than Just a Library</h3>
                    <p>In the chaos of the modern world, finding a place of true stillness is rare. <strong>Mahadev Reading Zone</strong> was conceived not just as a facility, but as a discipline.</p>
                    <p>Located in Gandhinagar, we cater specifically to serious aspirants of GPSC, UPSC, and other competitive exams. We believe that environment dictates performance. Our space is curated to minimize sensory distractions and maximize mental endurance.</p>
                    <p><em>"When the mind is still, the entire universe surrenders."</em></p>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1507842217343-583bb7260b66?q=80&w=2190&auto=format&fit=crop" alt="Minimalist Study Space">
                </div>
            </div>
        </div>
    </section>

    <!-- FACILITIES SECTION -->
    <section id="facilities" class="section-padding facilities">
        <div class="container">
            <h2 class="section-title">Amenities</h2>
            <p class="section-subtitle">Curated for long hours of study.</p>
            
            <div class="facilities-grid">
                <!-- Facility 1 -->
                <div class="facility-card">
                    <div class="icon-box"><i style="font-style:normal;">🔇</i></div>
                    <h4>Acoustic Silence</h4>
                    <p>Sound-dampening flooring and strict no-talk zones to ensure deep work capability.</p>
                </div>
                <!-- Facility 2 -->
                <div class="facility-card">
                    <div class="icon-box"><i style="font-style:normal;">🪑</i></div>
                    <h4>Premium Ergonomics</h4>
                    <p>High-back mesh chairs with lumbar support designed for 12+ hour sitting sessions.</p>
                </div>
                <!-- Facility 3 -->
                <div class="facility-card">
                     <div class="icon-box"><i style="font-style:normal;">💡</i></div>
                    <h4>Focused Lighting</h4>
                    <p>Warm ambient light coupled with individual cool-white desk lamps for reduced eye strain.</p>
                </div>
                <!-- Facility 4 -->
                <div class="facility-card">
                     <div class="icon-box"><i style="font-style:normal;">❄️</i></div>
                    <h4>Climate Control</h4>
                    <p>Centralized air conditioning with air purifiers to maintain oxygen levels and freshness.</p>
                </div>
                 <!-- Facility 5 -->
                 <div class="facility-card">
                     <div class="icon-box"><i style="font-style:normal;">⚡</i></div>
                    <h4>Uninterrupted Power</h4>
                    <p>Heavy-duty generator backup ensuring your flow state is never broken by outages.</p>
                </div>
                 <!-- Facility 6 -->
                 <div class="facility-card">
                     <div class="icon-box"><i style="font-style:normal;">🌐</i></div>
                    <h4>High-Speed Fiber</h4>
                    <p>Dedicated leased line internet for seamless access to online lectures and materials.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- MEMBERSHIP SECTION -->
    <section id="membership" class="section-padding">
        <div class="container">
            <h2 class="section-title">Invest In Yourself</h2>
            <p class="section-subtitle">Simple, transparent pricing for serious students.</p>

            <div class="membership-grid">
                <!-- Plan 1 -->
                <div class="plan-card">
                    <h3>Day Pass</h3>
                    <div class="price">₹100 <span>/day</span></div>
                    <ul class="plan-features">
                        <li>Access 08:00 AM - 08:00 PM</li>
                        <li>Flexi-Desk Access</li>
                        <li>High-Speed Wi-Fi</li>
                        <li>Mineral Water</li>
                    </ul>
                    <a href="#contact" class="btn btn-secondary" style="margin-left:0; width:100%; text-align:center; display:block;">Book Slot</a>
                </div>

                <!-- Plan 2 (Recommended) -->
                <div class="plan-card recommended">
                    <span class="plan-badge">Most Popular</span>
                    <h3>Monthly Prime</h3>
                    <div class="price">₹1200 <span>/month</span></div>
                    <ul class="plan-features">
                        <li><strong>Reserved Personal Desk</strong></li>
                        <li>Full Access (06:00 AM - 11:00 PM)</li>
                        <li>Personal Locker Included</li>
                        <li>Charging Point at Desk</li>
                        <li>Newspaper Access</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary" style="background:#fff; color:var(--primary-stone); width:100%; text-align:center; display:block;">Join Now</a>
                </div>

                <!-- Plan 3 -->
                <div class="plan-card">
                    <h3>Quarterly</h3>
                    <div class="price">₹3300 <span>/3 months</span></div>
                    <ul class="plan-features">
                        <li><strong>Save ₹300</strong></li>
                        <li>Reserved Personal Desk</li>
                        <li>All Prime Benefits</li>
                        <li>Guest Pass (2 Days/Month)</li>
                    </ul>
                    <a href="#contact" class="btn btn-secondary" style="margin-left:0; width:100%; text-align:center; display:block;">Join Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- RULES SECTION -->
    <section class="section-padding rules-section">
        <div class="container">
            <h2 class="section-title">Code of Conduct</h2>
            <p class="section-subtitle">Discipline is the bridge between goals and accomplishment.</p>
            
            <div class="rules-grid">
                <div class="rule-item">
                    <div class="rule-number">01.</div>
                    <div class="rule-content">
                        <h4>Absolute Silence</h4>
                        <p>Phones must be on silent. Conversations are restricted to the break area outside.</p>
                    </div>
                </div>
                <div class="rule-item">
                    <div class="rule-number">02.</div>
                    <div class="rule-content">
                        <h4>Cleanliness</h4>
                        <p>Respect the space. Desks must be cleared of trash and personal items upon leaving.</p>
                    </div>
                </div>
                <div class="rule-item">
                    <div class="rule-number">03.</div>
                    <div class="rule-content">
                        <h4>Decorum</h4>
                        <p>Footwear must be placed in racks. Eatables are strictly prohibited inside the hall.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY SECTION -->
    <section id="gallery" class="section-padding">
        <div class="container">
            <h2 class="section-title">The Space</h2>
            <p class="section-subtitle">A glimpse into your future study zone.</p>
            <div class="gallery-grid">
                <div class="gallery-item" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?q=80&w=2073&auto=format&fit=crop" alt="Study Desk">
                </div>
                <div class="gallery-item" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1541829070764-84a7d30dd3f3?q=80&w=1969&auto=format&fit=crop" alt="Library Bookshelf">
                </div>
                <div class="gallery-item" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?q=80&w=2070&auto=format&fit=crop" alt="Concentration">
                </div>
                <div class="gallery-item" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1568667256549-094345857637?q=80&w=2030&auto=format&fit=crop" alt="Peaceful Environment">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Lightbox Modal -->
    <div id="lightbox" class="lightbox">
        <span class="close-lightbox" onclick="closeLightbox()">&times;</span>
        <img id="lightbox-img" src="" alt="Gallery Preview">
    </div>

    <!-- CONTACT SECTION -->
    <section id="contact" class="section-padding">
        <div class="container">
            <h2 class="section-title">Begin Your Journey</h2>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Mahadev Reading Zone</h3>
                    <div class="info-item">
                        <span class="info-icon">📍</span>
                        <p>Sector 6, Near Sargasan Cross Road,<br>Gandhinagar, Gujarat - 382006</p>
                    </div>
                    <div class="info-item">
                        <span class="info-icon">📞</span>
                        <p><?php echo $contactPhone; ?></p>
                    </div>
                    <div class="info-item">
                        <span class="info-icon">✉️</span>
                        <p>contact@mahadevreadingzone.com</p>
                    </div>
                    <div class="info-item">
                        <span class="info-icon">🕒</span>
                        <p>Mon - Sun: 06:00 AM - 11:00 PM</p>
                    </div>
                    <br>
                    <a href="https://wa.me/919876543210" class="btn btn-primary" style="background-color: #25D366; border:none; box-shadow:none; width:100%; text-align:center; display:block;">Chat on WhatsApp</a>
                </div>
                <div class="map-wrapper">
                    <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.497262629853!2d72.6369!3d23.2156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDEyJzU2LjIiTiA3MsKwMzgnMTIuOCJF!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <p class="footer-quote">"Om Namah Shivay"</p>
            <p>&copy; <?php echo date("Y"); ?> Mahadev Reading Zone. All Rights Reserved.</p>
            <p style="font-size: 0.8rem; margin-top: 15px; color: #999; letter-spacing:1px;">DESIGNED WITH DISCIPLINE</p>
        </div>
    </footer>

    <!-- JAVASCRIPT -->
    <script>
        // 1. Mobile Menu Toggle
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');
        const links = document.querySelectorAll('.nav-links li');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            
            // Animate Hamburger
            const bars = document.querySelectorAll('.bar');
            bars.forEach(bar => bar.classList.toggle('active'));
        });
        
        // Close menu when link is clicked
        links.forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                const bars = document.querySelectorAll('.bar');
                bars.forEach(bar => bar.classList.remove('active'));
            });
        });

        // 2. Sticky Header Effect with Blur
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.style.background = "rgba(255, 255, 255, 0.95)";
                header.style.boxShadow = "0 5px 20px rgba(0,0,0,0.05)";
                header.style.height = "70px";
            } else {
                header.style.background = "rgba(255, 255, 255, 0.8)";
                header.style.boxShadow = "none";
                header.style.height = "80px";
            }
        });

        // 3. Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // 4. Lightbox Functions
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        
        function openLightbox(element) {
            const imgSrc = element.querySelector('img').src;
            lightboxImg.src = imgSrc;
            lightbox.style.display = 'flex';
        }
        
        function closeLightbox() {
            lightbox.style.display = 'none';
        }
        
        // Close on outside click
        lightbox.addEventListener('click', (e) => {
            if(e.target === lightbox) {
                closeLightbox();
            }
        });
    </script>
</body>
</html>