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
        /* --- CSS VARIABLES & THEME SYSTEM --- */
        :root {
            /* LIGHT MODE (Default) */
            --bg-body: #F4F6F8;          /* Soft White/Grey */
            --bg-glass: rgba(255, 255, 255, 0.9);
            --bg-card: #FFFFFF;
            --text-main: #2C3E50;        /* Dark Slate */
            --text-muted: #546E7A;
            --accent-primary: #1B263B;   /* Shiv Blue - Deep */
            --accent-glow: #415A77;      /* Shiv Blue - Light */
            --accent-trishul: #8D6E63;   /* Subtle Bronze/Wood */
            --divider: #E0E0E0;
            --shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            --shadow-hover: 0 10px 25px rgba(0, 0, 0, 0.1);
            
            /* Spacing & Layout */
            --container-width: 1200px;
            --header-height: 70px;
            --transition-speed: 0.3s;
        }

        /* DARK MODE OVERRIDES */
        [data-theme="dark"] {
            --bg-body: #121212;          /* Deep Ash/Charcoal */
            --bg-glass: rgba(30, 30, 30, 0.9);
            --bg-card: #1E1E24;          /* Dark Card */
            --text-main: #E0E0E0;        /* Soft White */
            --text-muted: #B0BEC5;
            --accent-primary: #82B1FF;   /* Muted Blue Highlight */
            --accent-glow: #2962FF;      /* Blue Glow */
            --accent-trishul: #A1887F;   /* Muted Bronze */
            --divider: #333333;
            --shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            --shadow-hover: 0 10px 25px rgba(0, 0, 0, 0.6);
        }

        /* --- RESET & GLOBAL STYLES --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--bg-body);
            color: var(--text-main);
            line-height: 1.7;
            overflow-x: hidden;
            transition: background-color var(--transition-speed) ease, color var(--transition-speed) ease;
        }

        h1, h2, h3, h4 {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            letter-spacing: -0.02em;
            color: var(--text-main);
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: color 0.2s;
        }

        ul {
            list-style: none;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .container {
            width: 90%;
            max-width: var(--container-width);
            margin: 0 auto;
        }

        .section-padding {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 10px;
            position: relative;
        }

        /* Minimalist Underline */
        .section-title::after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background-color: var(--accent-primary);
            margin: 15px auto 0;
            border-radius: 2px;
            opacity: 0.7;
        }

        .section-subtitle {
            text-align: center;
            color: var(--text-muted);
            margin-bottom: 60px;
            font-size: 1.1rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* --- HEADER & NAVIGATION --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: var(--bg-glass);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--divider);
            z-index: 1000;
            height: var(--header-height);
            display: flex;
            align-items: center;
            transition: background-color var(--transition-speed), border-color var(--transition-speed);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .logo {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.6rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .logo span {
            color: var(--accent-primary);
        }

        /* Desktop Nav */
        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            font-weight: 500;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: var(--accent-primary);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Nav Controls (Theme Toggle + Hamburger) */
        .nav-controls {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        /* Theme Toggle Button */
        .theme-toggle {
            background: none;
            border: 2px solid var(--divider);
            cursor: pointer;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-main);
            transition: all 0.3s ease;
        }

        .theme-toggle:hover {
            border-color: var(--accent-primary);
            color: var(--accent-primary);
        }
        
        /* Hamburger Menu */
        .hamburger {
            display: none;
            cursor: pointer;
            flex-direction: column;
            gap: 5px;
            z-index: 1001;
        }

        .bar {
            width: 25px;
            height: 2px;
            background-color: var(--text-main);
            transition: all 0.3s ease;
        }

        /* --- HERO SECTION --- */
        .hero {
            height: 100vh;
            /* Subtle overlay for readability in both modes */
            background-image: 
                linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.3)), 
                url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding-top: var(--header-height);
            position: relative;
        }

        /* Dark mode overlay adjustment via pseudo-element or CSS variable logic */
        [data-theme="dark"] .hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0, 0, 0, 0.6); /* Darker overlay for dark mode */
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            padding: 0 20px;
            animation: fadeIn 1.2s ease-out;
        }

        .hero h1 {
            font-size: 3.5rem;
            color: #fff; /* Always white in hero */
            margin-bottom: 20px;
            text-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 40px;
            font-weight: 300;
            letter-spacing: 0.5px;
        }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            border-radius: 50px; /* Pill shape for modern look */
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background-color: var(--accent-primary);
            color: #fff;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            background-color: var(--accent-glow);
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }

        .btn-secondary {
            background-color: transparent;
            color: #fff;
            border: 1px solid rgba(255,255,255,0.6);
            margin-left: 15px;
        }

        .btn-secondary:hover {
            background-color: #fff;
            color: #111;
        }

        /* --- ABOUT SECTION --- */
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-image img {
            border-radius: 12px;
            box-shadow: var(--shadow);
            filter: grayscale(10%);
            transition: filter 0.3s;
        }
        
        .about-image:hover img {
            filter: grayscale(0%);
        }

        /* --- FACILITIES (Grid) --- */
        .facilities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .facility-card {
            background-color: var(--bg-card);
            padding: 35px;
            border-radius: 12px;
            text-align: left;
            transition: all 0.3s ease;
            border: 1px solid var(--divider);
            box-shadow: var(--shadow);
        }

        .facility-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
            border-color: var(--accent-primary);
        }

        .icon-box {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--accent-primary);
            opacity: 0.9;
        }

        .facility-card h4 {
            font-size: 1.3rem;
            margin-bottom: 10px;
        }
        
        .facility-card p {
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        /* --- MEMBERSHIP --- */
        .membership-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .plan-card {
            background-color: var(--bg-card);
            padding: 40px;
            border-radius: 16px;
            text-align: center;
            border: 1px solid var(--divider);
            transition: all 0.3s ease;
            position: relative;
        }

        .plan-card.highlight {
            border: 2px solid var(--accent-primary);
            box-shadow: var(--shadow-hover);
            transform: scale(1.03);
            z-index: 2;
        }

        .plan-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .plan-badge {
            background-color: var(--accent-primary);
            color: #fff;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.75rem;
            text-transform: uppercase;
            font-weight: 700;
            display: inline-block;
            margin-bottom: 15px;
        }

        .price {
            font-size: 2.8rem;
            font-weight: 700;
            color: var(--text-main);
            margin: 15px 0 25px;
            font-family: 'Cormorant Garamond', serif;
        }
        
        .price span {
            font-size: 1rem;
            color: var(--text-muted);
            font-weight: 400;
            font-family: 'Montserrat', sans-serif;
        }

        .plan-features li {
            margin-bottom: 12px;
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        /* --- RULES --- */
        .rules-section {
            background-color: var(--bg-card); /* Card bg for contrast section */
        }
        
        .rules-list {
            max-width: 800px;
            margin: 0 auto;
            display: grid;
            gap: 20px;
        }
        
        .rule-item {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 20px;
            border-bottom: 1px solid var(--divider);
        }
        
        .rule-icon {
            color: var(--accent-trishul);
            font-size: 1.5rem;
        }

        /* --- GALLERY --- */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 15px;
        }

        .gallery-item {
            height: 250px;
            border-radius: 8px;
            overflow: hidden;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.08);
        }
        
        /* Lightbox */
        .lightbox {
            display: none;
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.95);
            z-index: 2000;
            justify-content: center;
            align-items: center;
        }
        
        .lightbox img {
            max-width: 90%;
            max-height: 85vh;
            border-radius: 4px;
        }
        
        .close-lightbox {
            position: absolute;
            top: 20px; right: 30px;
            color: #fff;
            font-size: 2rem;
            cursor: pointer;
        }

        /* --- CONTACT --- */
        .contact-wrapper {
            background-color: var(--bg-card);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow);
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        
        .contact-text {
            padding: 50px;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
            color: var(--text-muted);
        }
        
        .contact-item i {
            color: var(--accent-primary);
        }

        /* --- FOOTER --- */
        footer {
            text-align: center;
            padding: 40px 0;
            background-color: var(--bg-card);
            border-top: 1px solid var(--divider);
            color: var(--text-muted);
        }
        
        .om-symbol {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2rem;
            color: var(--accent-primary);
            display: block;
            margin-bottom: 10px;
        }

        /* --- ANIMATIONS --- */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* --- MOBILE RESPONSIVENESS --- */
        @media (max-width: 900px) {
            .hero h1 { font-size: 2.5rem; }
            .about-content { grid-template-columns: 1fr; }
            .contact-wrapper { grid-template-columns: 1fr; }
            .map-frame { height: 300px; }
            
            .hamburger { display: flex; }
            
            /* Mobile Menu Slide-in */
            .nav-links {
                position: fixed;
                top: 0;
                right: -100%; /* Hidden by default */
                width: 75%;
                height: 100vh;
                background-color: var(--bg-card);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                box-shadow: -5px 0 20px rgba(0,0,0,0.1);
                transition: right 0.4s cubic-bezier(0.77, 0, 0.175, 1);
                z-index: 1000;
            }
            
            .nav-links.active {
                right: 0;
            }
            
            .nav-links a {
                font-size: 1.2rem;
                margin-bottom: 20px;
            }

            .plan-card.highlight { transform: none; }
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <header id="header">
        <div class="container">
            <nav>
                <!-- Logo -->
                <a href="#" class="logo">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C10.5 2 9 3 9 5V14H6V5C6 4.45 5.55 4 5 4C4.45 4 4 4.45 4 5V15C4 16.66 5.34 18 7 18H11V22H13V18H17C18.66 18 20 16.66 20 15V5C20 4.45 19.55 4 19 4C18.45 4 18 4.45 18 5V14H15V5C15 3 13.5 2 12 2Z"/>
                    </svg>
                    Mahadev <span>Zone</span>
                </a>

                <!-- Desktop Menu -->
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#facilities">Facilities</a></li>
                    <li><a href="#membership">Membership</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>

                <!-- Nav Controls: Theme Toggle + Mobile Hamburger -->
                <div class="nav-controls">
                    <!-- Theme Toggle Button -->
                    <button id="theme-toggle" class="theme-toggle" aria-label="Toggle Dark Mode">
                        <!-- Sun Icon (for Dark Mode) -->
                        <svg class="sun-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:none;">
                            <circle cx="12" cy="12" r="5"></circle>
                            <line x1="12" y1="1" x2="12" y2="3"></line>
                            <line x1="12" y1="21" x2="12" y2="23"></line>
                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                            <line x1="1" y1="12" x2="3" y2="12"></line>
                            <line x1="21" y1="12" x2="23" y2="12"></line>
                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                        </svg>
                        <!-- Moon Icon (for Light Mode) -->
                        <svg class="moon-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                        </svg>
                    </button>

                    <!-- Hamburger -->
                    <div class="hamburger">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>A Peaceful Space for<br>Focused Minds</h1>
            <p>Experience the stillness of the Himalayas in Gandhinagar. <br>Dedicated to aspirants and serious readers.</p>
            <div>
                <a href="#facilities" class="btn btn-primary">Explore Library</a>
                <a href="#membership" class="btn btn-secondary">Become a Member</a>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="section-padding">
        <div class="container">
            <h2 class="section-title">The Vision</h2>
            <p class="section-subtitle">Discipline, Focus, Knowledge</p>
            <div class="about-content">
                <div class="about-text">
                    <p>Mahadev Reading Zone is not just a library; it is a sanctuary for concentration. In a world full of noise, we provide the silence you need to achieve your dreams.</p>
                    <p>Designed with a minimalistic approach, our space is free from distractions. Whether you are preparing for UPSC, GPSC, or simply love to read, our environment aligns with the focused energy of Lord Mahadev.</p>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1457369804613-52c61a468e7d?q=80&w=2070&auto=format&fit=crop" alt="Quiet Study Area">
                </div>
            </div>
        </div>
    </section>

    <!-- FACILITIES SECTION -->
    <section id="facilities" class="section-padding">
        <div class="container">
            <h2 class="section-title">Facilities</h2>
            <p class="section-subtitle">Everything you need for long study sessions</p>
            
            <div class="facilities-grid">
                <!-- 1 -->
                <div class="facility-card">
                    <div class="icon-box">🤫</div>
                    <h4>Silent Zones</h4>
                    <p>Strictly monitored silence to ensure deep focus and zero distractions.</p>
                </div>
                <!-- 2 -->
                <div class="facility-card">
                    <div class="icon-box">🪑</div>
                    <h4>Comfort Seating</h4>
                    <p>Ergonomic chairs designed for 10+ hours of comfortable sitting.</p>
                </div>
                <!-- 3 -->
                <div class="facility-card">
                    <div class="icon-box">💡</div>
                    <h4>Proper Lighting</h4>
                    <p>Individual desk lamps + ambient lighting to reduce eye strain.</p>
                </div>
                <!-- 4 -->
                <div class="facility-card">
                    <div class="icon-box">❄️</div>
                    <h4>Climate Control</h4>
                    <p>AC and air purification for a fresh and cool environment.</p>
                </div>
                <!-- 5 -->
                <div class="facility-card">
                    <div class="icon-box">⚡</div>
                    <h4>Power Backup</h4>
                    <p>24/7 uninterrupted power supply for laptops and devices.</p>
                </div>
                <!-- 6 -->
                <div class="facility-card">
                    <div class="icon-box">💧</div>
                    <h4>RO Water</h4>
                    <p>Clean and chilled drinking water facility available.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- MEMBERSHIP PLANS -->
    <section id="membership" class="section-padding">
        <div class="container">
            <h2 class="section-title">Membership Plans</h2>
            <p class="section-subtitle">Invest in your future</p>
            
            <div class="membership-grid">
                <!-- Daily -->
                <div class="plan-card">
                    <h3>Daily Pass</h3>
                    <div class="price">₹100 <span>/day</span></div>
                    <ul class="plan-features">
                        <li>Access 08:00 AM - 08:00 PM</li>
                        <li>Flexi-Desk</li>
                        <li>Wi-Fi Access</li>
                    </ul>
                    <a href="#contact" class="btn btn-secondary" style="border-color:var(--divider); color:var(--text-main);">Book Now</a>
                </div>
                
                <!-- Monthly (Highlighted) -->
                <div class="plan-card highlight">
                    <span class="plan-badge">Most Popular</span>
                    <h3>Monthly</h3>
                    <div class="price">₹1200 <span>/month</span></div>
                    <ul class="plan-features">
                        <li><strong>Fixed Reserved Seat</strong></li>
                        <li>Full Day Access (6AM - 11PM)</li>
                        <li>Personal Locker</li>
                        <li>High-Speed Wi-Fi</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary">Join Now</a>
                </div>
                
                <!-- Quarterly -->
                <div class="plan-card">
                    <h3>Quarterly</h3>
                    <div class="price">₹3300 <span>/3 mos</span></div>
                    <ul class="plan-features">
                        <li><strong>Includes Discount</strong></li>
                        <li>Fixed Reserved Seat</li>
                        <li>All Premium Facilities</li>
                    </ul>
                    <a href="#contact" class="btn btn-secondary" style="border-color:var(--divider); color:var(--text-main);">Join Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- RULES SECTION -->
    <section class="section-padding rules-section">
        <div class="container">
            <h2 class="section-title">Library Discipline</h2>
            <p class="section-subtitle">Respect the space, Respect the knowledge</p>
            
            <div class="rules-list">
                <div class="rule-item">
                    <span class="rule-icon">🔇</span>
                    <p><strong>Silence is Mandatory:</strong> Mobile phones must be on silent. No group discussions inside the hall.</p>
                </div>
                <div class="rule-item">
                    <span class="rule-icon">👞</span>
                    <p><strong>Footwear:</strong> Please remove shoes outside or place them in the designated rack.</p>
                </div>
                <div class="rule-item">
                    <span class="rule-icon">🧹</span>
                    <p><strong>Cleanliness:</strong> Keep your desk clean. Do not leave waste on the table.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY -->
    <section class="section-padding">
        <div class="container">
            <h2 class="section-title">Gallery</h2>
            <div class="gallery-grid">
                <div class="gallery-item" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?q=80&w=2073&auto=format&fit=crop" alt="Desk">
                </div>
                <div class="gallery-item" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1568667256549-094345857637?q=80&w=2030&auto=format&fit=crop" alt="Library">
                </div>
                <div class="gallery-item" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1541829070764-84a7d30dd3f3?q=80&w=1969&auto=format&fit=crop" alt="Books">
                </div>
                <div class="gallery-item" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?q=80&w=2070&auto=format&fit=crop" alt="Focus">
                </div>
            </div>
        </div>
    </section>

    <!-- LIGHTBOX -->
    <div id="lightbox" class="lightbox">
        <span class="close-lightbox" onclick="closeLightbox()">&times;</span>
        <img id="lightbox-img" src="" alt="Zoomed Image">
    </div>

    <!-- CONTACT -->
    <section id="contact" class="section-padding">
        <div class="container">
            <h2 class="section-title">Visit Us</h2>
            <div class="contact-wrapper">
                <div class="contact-text">
                    <h3>Contact Details</h3>
                    <br>
                    <div class="contact-item">
                        <i>📍</i>
                        <p>Sector 6, Near Sargasan Cross Road, Gandhinagar, Gujarat</p>
                    </div>
                    <div class="contact-item">
                        <i>📞</i>
                        <p><?php echo $contactPhone; ?></p>
                    </div>
                    <div class="contact-item">
                        <i>✉️</i>
                        <p>info@mahadevreadingzone.com</p>
                    </div>
                    <br>
                    <a href="https://wa.me/919876543210" class="btn btn-primary" style="background-color:#25D366; width:100%; text-align:center; display:block;">WhatsApp Us</a>
                </div>
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.497262629853!2d72.6369!3d23.2156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDEyJzU2LjIiTiA3MsKwMzgnMTIuOCJF!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin" width="100%" height="100%" style="border:0; min-height:300px;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <span class="om-symbol">🕉️</span>
            <p>&copy; <?php echo date("Y"); ?> Mahadev Reading Zone. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- JAVASCRIPT -->
    <script>
        // --- THEME TOGGLE LOGIC ---
        const themeToggleBtn = document.getElementById('theme-toggle');
        const sunIcon = document.querySelector('.sun-icon');
        const moonIcon = document.querySelector('.moon-icon');

        // Check Local Storage or System Preference
        const currentTheme = localStorage.getItem('theme');
        const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

        if (currentTheme === 'dark' || (!currentTheme && systemPrefersDark)) {
            document.documentElement.setAttribute('data-theme', 'dark');
            sunIcon.style.display = 'block';
            moonIcon.style.display = 'none';
        } else {
            sunIcon.style.display = 'none';
            moonIcon.style.display = 'block';
        }

        themeToggleBtn.addEventListener('click', () => {
            const isDark = document.documentElement.getAttribute('data-theme') === 'dark';
            
            if (isDark) {
                // Switch to Light
                document.documentElement.removeAttribute('data-theme');
                localStorage.setItem('theme', 'light');
                sunIcon.style.display = 'none';
                moonIcon.style.display = 'block';
            } else {
                // Switch to Dark
                document.documentElement.setAttribute('data-theme', 'dark');
                localStorage.setItem('theme', 'dark');
                sunIcon.style.display = 'block';
                moonIcon.style.display = 'none';
            }
        });

        // --- MOBILE MENU LOGIC ---
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');
        const links = document.querySelectorAll('.nav-links li');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // Close menu when a link is clicked
        links.forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
            });
        });

        // --- SCROLL EFFECTS ---
        const header = document.querySelector('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.style.boxShadow = "0 5px 20px rgba(0,0,0,0.1)";
            } else {
                header.style.boxShadow = "none";
            }
        });

        // --- LIGHTBOX ---
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');

        function openLightbox(element) {
            lightboxImg.src = element.querySelector('img').src;
            lightbox.style.display = 'flex';
        }

        function closeLightbox() {
            lightbox.style.display = 'none';
        }

        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) closeLightbox();
        });
    </script>
</body>
</html>