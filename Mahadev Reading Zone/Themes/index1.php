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
    
    <!-- Google Fonts: Cinzel (Spiritual/Royal) & Lato (Clean/Modern) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;800&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <style>
        /* --- CSS VARIABLES & THEME --- */
        :root {
            /* Palette */
            --shiv-blue: #1B263B;        /* Deep Dark Blue */
            --shiv-light: #415A77;       /* Muted Blue */
            --ash-grey: #E0E1DD;         /* Vibhuti/Ash Tone */
            --soft-white: #F4F4F8;       /* Background */
            --trishul-bronze: #C19A6B;   /* Accent Gold/Bronze */
            --rudraksha-brown: #5D4037;  /* Accent Brown */
            --text-main: #2C3E50;
            
            /* Spacing & Layout */
            --container-width: 1200px;
            --header-height: 70px;
            
            /* Transitions */
            --transition-smooth: all 0.3s ease-in-out;
        }

        /* --- RESET & TYPOGRAPHY --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Lato', sans-serif;
            background-color: var(--soft-white);
            color: var(--text-main);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Cinzel', serif;
            color: var(--shiv-blue);
            font-weight: 700;
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
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
            left: 50%;
            transform: translateX(-50%);
        }

        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background-color: var(--trishul-bronze);
            margin: 10px auto 0;
            border-radius: 2px;
        }

        .section-subtitle {
            text-align: center;
            color: var(--shiv-light);
            margin-bottom: 50px;
            font-size: 1.1rem;
        }

        /* --- HEADER & NAVIGATION --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
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
            font-family: 'Cinzel', serif;
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--shiv-blue);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .logo span {
            color: var(--trishul-bronze);
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            font-weight: 600;
            font-size: 0.95rem;
            color: var(--shiv-blue);
            transition: var(--transition-smooth);
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--trishul-bronze);
            transition: var(--transition-smooth);
        }

        .nav-links a:hover::after,
        .nav-links a.active::after {
            width: 100%;
        }

        .hamburger {
            display: none;
            cursor: pointer;
            flex-direction: column;
            gap: 5px;
        }

        .bar {
            width: 25px;
            height: 3px;
            background-color: var(--shiv-blue);
            transition: var(--transition-smooth);
        }

        /* --- HERO SECTION --- */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(27, 38, 59, 0.85), rgba(27, 38, 59, 0.7)),
                        url('https://images.unsplash.com/photo-1544383835-bda2bc66a55d?q=80&w=2021&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Parallax */
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            padding-top: var(--header-height);
        }

        .hero-content {
            max-width: 800px;
            animation: fadeIn 1.5s ease-out;
        }

        .hero h1 {
            font-size: 3.5rem;
            color: #fff;
            margin-bottom: 20px;
            text-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 1.4rem;
            margin-bottom: 40px;
            font-weight: 300;
            color: var(--ash-grey);
        }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            border-radius: 4px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: var(--transition-smooth);
            cursor: pointer;
        }

        .btn-primary {
            background-color: var(--trishul-bronze);
            color: #fff;
            border: 2px solid var(--trishul-bronze);
        }

        .btn-primary:hover {
            background-color: transparent;
            color: var(--trishul-bronze);
        }

        .btn-secondary {
            background-color: transparent;
            color: #fff;
            border: 2px solid #fff;
            margin-left: 15px;
        }

        .btn-secondary:hover {
            background-color: #fff;
            color: var(--shiv-blue);
        }

        /* --- ABOUT SECTION --- */
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .about-text h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        .about-text p {
            margin-bottom: 20px;
            color: #555;
            text-align: justify;
        }

        .about-image {
            position: relative;
        }
        
        .about-image img {
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .about-image::before {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            width: 100px;
            height: 100px;
            border-top: 4px solid var(--trishul-bronze);
            border-left: 4px solid var(--trishul-bronze);
            z-index: -1;
        }

        /* --- FACILITIES --- */
        .facilities {
            background-color: #fff;
        }

        .facilities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .facility-card {
            background-color: var(--soft-white);
            padding: 30px;
            text-align: center;
            border-radius: 8px;
            transition: var(--transition-smooth);
            border-bottom: 3px solid transparent;
        }

        .facility-card:hover {
            transform: translateY(-10px);
            border-bottom: 3px solid var(--trishul-bronze);
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }

        .icon-box {
            font-size: 2.5rem;
            color: var(--shiv-blue);
            margin-bottom: 20px;
        }

        .facility-card h4 {
            margin-bottom: 10px;
        }

        /* --- MEMBERSHIP --- */
        .membership-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .plan-card {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            position: relative;
            transition: var(--transition-smooth);
            border: 1px solid #eee;
        }

        .plan-card.recommended {
            border: 2px solid var(--trishul-bronze);
            transform: scale(1.05);
            z-index: 1;
        }

        .plan-card:hover {
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .plan-badge {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: var(--trishul-bronze);
            color: #fff;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .price {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--shiv-blue);
            margin: 20px 0;
            font-family: 'Cinzel', serif;
        }

        .price span {
            font-size: 1rem;
            color: #777;
            font-weight: 400;
            font-family: 'Lato', sans-serif;
        }

        .plan-features {
            margin-bottom: 30px;
        }

        .plan-features li {
            margin-bottom: 12px;
            color: #666;
        }

        /* --- RULES --- */
        .rules-section {
            background-color: var(--shiv-blue);
            color: var(--ash-grey);
            position: relative;
            overflow: hidden;
        }
        
        .rules-section .section-title {
            color: #fff;
        }

        .rules-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .rule-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .rule-number {
            font-family: 'Cinzel', serif;
            font-size: 3rem;
            color: rgba(255,255,255,0.1);
            line-height: 1;
        }

        .rule-content h4 {
            color: var(--trishul-bronze);
            margin-bottom: 5px;
        }

        /* --- GALLERY --- */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 15px;
        }

        .gallery-item {
            overflow: hidden;
            border-radius: 8px;
            cursor: pointer;
            height: 250px;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }
        
        /* Lightbox (Hidden by default) */
        .lightbox {
            display: none;
            position: fixed;
            z-index: 2000;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.9);
            justify-content: center;
            align-items: center;
        }
        
        .lightbox img {
            max-width: 90%;
            max-height: 80vh;
            border: 2px solid var(--trishul-bronze);
        }
        
        .close-lightbox {
            position: absolute;
            top: 20px;
            right: 30px;
            color: #fff;
            font-size: 40px;
            cursor: pointer;
        }

        /* --- CONTACT & FOOTER --- */
        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            background: #fff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            border-radius: 8px;
            overflow: hidden;
        }

        .contact-info {
            padding: 50px;
            background-color: var(--shiv-blue);
            color: #fff;
        }

        .contact-info h3 {
            color: #fff;
            margin-bottom: 20px;
        }

        .info-item {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .info-icon {
            color: var(--trishul-bronze);
            font-size: 1.2rem;
        }

        .map-frame {
            width: 100%;
            height: 100%;
            min-height: 300px;
        }

        footer {
            background-color: #111;
            color: #888;
            text-align: center;
            padding: 30px 0;
            border-top: 3px solid var(--trishul-bronze);
        }

        footer p {
            font-size: 0.9rem;
        }

        .footer-quote {
            font-family: 'Cinzel', serif;
            color: #fff;
            margin-bottom: 10px;
            font-style: italic;
        }

        /* --- ANIMATIONS --- */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* --- MOBILE RESPONSIVENESS --- */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.2rem; }
            .about-content { grid-template-columns: 1fr; }
            .membership-grid { grid-template-columns: 1fr; }
            .contact-container { grid-template-columns: 1fr; }
            
            .hamburger { display: flex; z-index: 1001; }
            
            .nav-links {
                position: fixed;
                top: 0;
                right: -100%;
                width: 70%;
                height: 100vh;
                background-color: var(--shiv-blue);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: 0.4s ease;
                z-index: 1000;
            }
            
            .nav-links.active { right: 0; }
            .nav-links a { color: #fff; font-size: 1.2rem; }
            
            .bar.active:nth-child(1) { transform: rotate(-45deg) translate(-5px, 6px); background-color: #fff; }
            .bar.active:nth-child(2) { opacity: 0; }
            .bar.active:nth-child(3) { transform: rotate(45deg) translate(-5px, -6px); background-color: #fff; }
            
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
                    <!-- Simple CSS Trident Icon Representation -->
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="var(--trishul-bronze)">
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
            <h1>Peace. Focus. Knowledge.</h1>
            <p>A disciplined study environment inspired by the stillness of the Himalayas.</p>
            <a href="#facilities" class="btn btn-primary">Explore Facilities</a>
            <a href="#membership" class="btn btn-secondary">Join Now</a>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="section-padding">
        <div class="container">
            <h2 class="section-title">Our Vision</h2>
            <div class="about-content">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?q=80&w=1973&auto=format&fit=crop" alt="Quiet Reading Space">
                </div>
                <div class="about-text">
                    <h3>A Sanctuary for Aspirants</h3>
                    <p>Located in the heart of Gandhinagar, <strong>Mahadev Reading Zone</strong> is more than just a library. It is a dedicated space for those who seek knowledge with unwavering focus.</p>
                    <p>Inspired by the meditative energy of Lord Mahadev, we maintain an atmosphere of absolute silence and discipline. Whether you are preparing for GPSC, UPSC, or academic exams, our environment ensures your mind remains calm and your goal remains clear.</p>
                    <p><em>"Knowledge is the third eye of insight."</em></p>
                </div>
            </div>
        </div>
    </section>

    <!-- FACILITIES SECTION -->
    <section id="facilities" class="section-padding facilities">
        <div class="container">
            <h2 class="section-title">Facilities</h2>
            <p class="section-subtitle">Designed for comfort, optimized for concentration.</p>
            
            <div class="facilities-grid">
                <!-- Facility 1 -->
                <div class="facility-card">
                    <div class="icon-box">🤫</div>
                    <h4>Pin-Drop Silence</h4>
                    <p>Strictly monitored silent zones to ensure zero distractions during your study hours.</p>
                </div>
                <!-- Facility 2 -->
                <div class="facility-card">
                    <div class="icon-box">🪑</div>
                    <h4>Ergonomic Seating</h4>
                    <p>Premium chairs designed for long sitting hours to support your posture.</p>
                </div>
                <!-- Facility 3 -->
                <!-- <div class="icon-box">💡</div> Fix for structure consistency -->
                <div class="facility-card">
                     <div class="icon-box">💡</div>
                    <h4>Personal Lighting</h4>
                    <p>Individual desk lamps and ample ambient lighting to reduce eye strain.</p>
                </div>
                <!-- Facility 4 -->
                <div class="facility-card">
                     <div class="icon-box">❄️</div>
                    <h4>AC & Ventilation</h4>
                    <p>Fully air-conditioned halls with proper ventilation for a fresh mind.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- MEMBERSHIP SECTION -->
    <section id="membership" class="section-padding">
        <div class="container">
            <h2 class="section-title">Membership Plans</h2>
            <p class="section-subtitle">Invest in your future with our affordable plans.</p>

            <div class="membership-grid">
                <!-- Plan 1 -->
                <div class="plan-card">
                    <h3>Daily Pass</h3>
                    <div class="price">₹100 <span>/day</span></div>
                    <ul class="plan-features">
                        <li>Access 08:00 AM - 08:00 PM</li>
                        <li>Standard Desk</li>
                        <li>Wi-Fi Access</li>
                        <li>RO Water</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary">Book Seat</a>
                </div>

                <!-- Plan 2 (Recommended) -->
                <div class="plan-card recommended">
                    <span class="plan-badge">Most Popular</span>
                    <h3>Monthly</h3>
                    <div class="price">₹1200 <span>/month</span></div>
                    <ul class="plan-features">
                        <li><strong>Fixed Reserved Seat</strong></li>
                        <li>Access 06:00 AM - 11:00 PM</li>
                        <li>Personal Locker</li>
                        <li>High-Speed Wi-Fi</li>
                        <li>Power Backup</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary">Join Now</a>
                </div>

                <!-- Plan 3 -->
                <div class="plan-card">
                    <h3>Quarterly</h3>
                    <div class="price">₹3300 <span>/3 months</span></div>
                    <ul class="plan-features">
                        <li><strong>Includes ₹300 Discount</strong></li>
                        <li>Fixed Reserved Seat</li>
                        <li>All Premium Facilities</li>
                        <li>Priority Support</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary">Join Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- RULES SECTION -->
    <section class="section-padding rules-section">
        <div class="container">
            <h2 class="section-title">Library Discipline</h2>
            <p class="section-subtitle">To maintain the sanctity of the reading zone.</p>
            
            <div class="rules-grid">
                <div class="rule-item">
                    <div class="rule-number">01</div>
                    <div class="rule-content">
                        <h4>Silence is Mandatory</h4>
                        <p>Mobile phones must be on silent mode. No group discussions allowed inside the reading hall.</p>
                    </div>
                </div>
                <div class="rule-item">
                    <div class="rule-number">02</div>
                    <div class="rule-content">
                        <h4>Respect the Space</h4>
                        <p>Keep your desk clean. Do not leave books or trash behind after your slot ends.</p>
                    </div>
                </div>
                <div class="rule-item">
                    <div class="rule-number">03</div>
                    <div class="rule-content">
                        <h4>Shoe Discipline</h4>
                        <p>Shoes must be removed or placed in the designated rack outside the main hall.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY SECTION -->
    <section id="gallery" class="section-padding">
        <div class="container">
            <h2 class="section-title">Our Ambience</h2>
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
    <section id="contact" class="section-padding" style="background-color: var(--soft-white);">
        <div class="container">
            <h2 class="section-title">Visit Us</h2>
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
                    <a href="https://wa.me/919876543210" class="btn btn-primary" style="background-color: #25D366; border-color: #25D366;">WhatsApp Us</a>
                </div>
                <div class="map-wrapper">
                    <!-- Static Google Map Embed (Placeholder) -->
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
            <p style="font-size: 0.8rem; margin-top: 10px; color: #555;">Designed with Focus & Discipline.</p>
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

        // 2. Sticky Header Effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.boxShadow = "0 5px 20px rgba(0,0,0,0.1)";
                header.style.height = "60px";
            } else {
                header.style.boxShadow = "0 2px 15px rgba(0,0,0,0.05)";
                header.style.height = "70px";
            }
        });

        // 3. Smooth Scroll (Vanilla JS Fallback)
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