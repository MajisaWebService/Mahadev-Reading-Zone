<?php
// ============================================
// MAHADEV READING ZONE - GLASS MORPHISM PREMIUM
// ============================================

// Configuration
$siteName = "Mahadev Reading Zone";
$tagline = "Where Focus Meets Enlightenment";
$location = "Gandhinagar, Gujarat";
$contactPhone = "+91 98765 43210";
$contactEmail = "info@mahadevreadingzone.com";
$whatsappNumber = "919876543210";

// Theme Selection
$selectedTheme = isset($_GET['theme']) ? $_GET['theme'] : 'zen';

// Theme Data with Glass Morphism
$themes = [
    'classic' => [
        'name' => 'Classic Mahadev',
        'colors' => [
            'primary' => 'rgb(27, 38, 59)',      // Deep Blue
            'secondary' => 'rgb(65, 90, 119)',   // Muted Blue
            'accent' => 'rgb(193, 154, 107)',    // Trishul Gold
            'glass' => 'rgba(255, 255, 255, 0.15)',
            'glass-border' => 'rgba(255, 255, 255, 0.2)',
            'text' => 'rgb(255, 255, 255)',
            'text-secondary' => 'rgba(255, 255, 255, 0.8)'
        ],
        'fonts' => [
            'heading' => "'Cinzel', serif",
            'body' => "'Lato', sans-serif"
        ],
        'hero-bg' => 'linear-gradient(135deg, rgba(27, 38, 59, 0.9) 0%, rgba(65, 90, 119, 0.7) 100%)'
    ],
    'zen' => [
        'name' => 'Himalayan Zen',
        'colors' => [
            'primary' => 'rgb(45, 52, 54)',      // Dark Stone
            'secondary' => 'rgb(99, 110, 114)',  // Grey
            'accent' => 'rgb(211, 84, 0)',       // Saffron
            'glass' => 'rgba(255, 255, 255, 0.12)',
            'glass-border' => 'rgba(255, 255, 255, 0.18)',
            'text' => 'rgb(255, 255, 255)',
            'text-secondary' => 'rgba(255, 255, 255, 0.85)'
        ],
        'fonts' => [
            'heading' => "'Cormorant Garamond', serif",
            'body' => "'Montserrat', sans-serif"
        ],
        'hero-bg' => 'linear-gradient(135deg, rgba(45, 52, 54, 0.85) 0%, rgba(99, 110, 114, 0.75) 100%)'
    ],
    'modern' => [
        'name' => 'Modern Focus',
        'colors' => [
            'primary' => 'rgb(41, 128, 185)',    // Blue
            'secondary' => 'rgb(52, 152, 219)',  // Light Blue
            'accent' => 'rgb(243, 156, 18)',     // Gold
            'glass' => 'rgba(255, 255, 255, 0.1)',
            'glass-border' => 'rgba(255, 255, 255, 0.15)',
            'text' => 'rgb(255, 255, 255)',
            'text-secondary' => 'rgba(255, 255, 255, 0.9)'
        ],
        'fonts' => [
            'heading' => "'Playfair Display', serif",
            'body' => "'Poppins', sans-serif"
        ],
        'hero-bg' => 'linear-gradient(135deg, rgba(41, 128, 185, 0.85) 0%, rgba(52, 152, 219, 0.75) 100%)'
    ]
];

$currentTheme = $themes[$selectedTheme];

// Features Data
$features = [
    ['icon' => '🤫', 'title' => 'Absolute Silence', 'desc' => 'Sound-proof rooms with noise monitoring'],
    ['icon' => '🪑', 'title' => 'Ergonomic Seating', 'desc' => 'Premium ergonomic chairs with lumbar support'],
    ['icon' => '💡', 'title' => 'Smart Lighting', 'desc' => 'Adjustable LED lighting system'],
    ['icon' => '❄️', 'title' => 'Climate Control', 'desc' => 'Central AC with air purification'],
    ['icon' => '⚡', 'title' => 'Power Backup', 'desc' => '24/7 UPS & generator backup'],
    ['icon' => '📶', 'title' => 'High-Speed WiFi', 'desc' => 'Fiber optic internet 100 Mbps'],
    ['icon' => '🔒', 'title' => 'Secure Lockers', 'desc' => 'Personal lockers with digital locks'],
    ['icon' => '💧', 'title' => 'RO Water', 'desc' => 'Purified drinking water & refreshments'],
];

$plans = [
    [
        'name' => 'Daily Pass',
        'price' => '150',
        'period' => 'day',
        'duration' => '8 hours',
        'features' => ['Flexible seating', 'WiFi Access', 'Water & Tea', 'Basic amenities'],
        'highlight' => false
    ],
    [
        'name' => 'Monthly Prime',
        'price' => '2,500',
        'period' => 'month',
        'duration' => 'Unlimited',
        'features' => ['Reserved desk', 'Personal locker', 'AC Facility', 'Priority support', 'Free printing'],
        'highlight' => true
    ],
    [
        'name' => 'Quarterly Pro',
        'price' => '6,500',
        'period' => '3 months',
        'duration' => '24/7 Access',
        'features' => ['All Prime benefits', '24/7 access', 'Study materials', 'Guest passes', 'Event discounts'],
        'highlight' => false
    ],
];

$testimonials = [
    ['name' => 'Rahul Sharma', 'role' => 'UPSC Aspirant', 'text' => 'Best study environment in Gandhinagar! The silence and discipline helped me focus like never before.', 'rating' => 5],
    ['name' => 'Priya Patel', 'role' => 'GPSC Student', 'text' => 'The glass partitions and comfortable seating make 10+ hour study sessions possible without fatigue.', 'rating' => 5],
    ['name' => 'Amit Desai', 'role' => 'CA Student', 'text' => 'Power backup and high-speed WiFi are game-changers for online lectures. Highly recommended!', 'rating' => 5],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $siteName; ?> - Premium Study Sanctuary</title>
    <meta name="description" content="Premium glass-morphism study space in Gandhinagar with Mahadev-inspired focus and discipline.">
    
    <!-- All Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Lato:wght@300;400;700&family=Cormorant+Garamond:wght@400;600;700&family=Montserrat:wght@300;400;500;600&family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* ===== CSS VARIABLES - GLASS MORPHISM THEME ===== */
        :root {
            /* Theme Colors - Dynamic from PHP */
            --primary: <?php echo $currentTheme['colors']['primary']; ?>;
            --secondary: <?php echo $currentTheme['colors']['secondary']; ?>;
            --accent: <?php echo $currentTheme['colors']['accent']; ?>;
            --glass-bg: <?php echo $currentTheme['colors']['glass']; ?>;
            --glass-border: <?php echo $currentTheme['colors']['glass-border']; ?>;
            --text-primary: <?php echo $currentTheme['colors']['text']; ?>;
            --text-secondary: <?php echo $currentTheme['colors']['text-secondary']; ?>;
            --bg-dark: rgba(0, 0, 0, 0.8);
            --bg-light: rgba(255, 255, 255, 0.05);
            
            /* Theme Fonts */
            --font-heading: <?php echo $currentTheme['fonts']['heading']; ?>;
            --font-body: <?php echo $currentTheme['fonts']['body']; ?>;
            
            /* Glass Effects */
            --glass-blur: blur(15px);
            --glass-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
            
            /* Animations */
            --transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* ===== BASE STYLES ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px;
        }

        body {
            font-family: var(--font-body);
            color: var(--text-primary);
            line-height: 1.7;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 80%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255,255,255,0.05) 0%, transparent 50%);
            z-index: -1;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: var(--font-heading);
            font-weight: 600;
            margin-bottom: 1rem;
            letter-spacing: -0.02em;
        }

        p {
            margin-bottom: 1.5rem;
            color: var(--text-secondary);
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: var(--transition);
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section {
            padding: 100px 0;
            position: relative;
        }

        .section-title {
            font-size: 3.5rem;
            text-align: center;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
            left: 50%;
            transform: translateX(-50%);
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: var(--accent);
            margin: 20px auto 30px;
            border-radius: 2px;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto 50px;
            color: var(--text-secondary);
        }

        /* ===== GLASS MORPHISM COMPONENTS ===== */
        .glass-card {
            background: var(--glass-bg);
            backdrop-filter: var(--glass-blur);
            -webkit-backdrop-filter: var(--glass-blur);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            box-shadow: var(--glass-shadow);
            padding: 40px;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .glass-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
            transition: 0.6s;
        }

        .glass-card:hover::before {
            left: 100%;
        }

        .glass-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
        }

        .glass-btn {
            background: var(--glass-bg);
            backdrop-filter: var(--glass-blur);
            -webkit-backdrop-filter: var(--glass-blur);
            border: 1px solid var(--glass-border);
            border-radius: 50px;
            padding: 16px 32px;
            color: var(--text-primary);
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .glass-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .glass-btn-primary {
            background: linear-gradient(135deg, var(--accent), color-mix(in srgb, var(--accent) 80%, white));
            border: none;
            color: white;
        }

        .glass-btn-primary:hover {
            background: linear-gradient(135deg, color-mix(in srgb, var(--accent) 80%, white), var(--accent));
            transform: translateY(-3px) scale(1.05);
        }

        /* ===== HEADER WITH GLASS MORPHISM ===== */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: var(--glass-bg);
            backdrop-filter: var(--glass-blur);
            -webkit-backdrop-filter: var(--glass-blur);
            border-bottom: 1px solid var(--glass-border);
            z-index: 1000;
            padding: 15px 0;
            transition: var(--transition);
        }

        header.scrolled {
            padding: 10px 0;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .logo-text {
            font-family: var(--font-heading);
            font-size: 1.8rem;
            font-weight: 700;
            background: linear-gradient(135deg, var(--text-primary), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-link {
            font-weight: 500;
            font-size: 1rem;
            position: relative;
            padding: 8px 0;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent);
            transition: var(--transition);
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        .theme-switcher {
            display: flex;
            gap: 10px;
            margin-left: 30px;
        }

        .theme-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid var(--glass-border);
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .theme-btn:hover {
            transform: scale(1.1);
            border-color: var(--accent);
        }

        .theme-btn.active {
            border-color: var(--accent);
            box-shadow: 0 0 15px var(--accent);
        }

        .theme-btn.classic { background: linear-gradient(135deg, #1B263B, #415A77); }
        .theme-btn.zen { background: linear-gradient(135deg, #2D3436, #636e72); }
        .theme-btn.modern { background: linear-gradient(135deg, #2980b9, #3498db); }

        .hamburger {
            display: none;
            flex-direction: column;
            gap: 4px;
            cursor: pointer;
            padding: 10px;
            background: none;
            border: none;
        }

        .hamburger span {
            width: 25px;
            height: 2px;
            background: var(--text-primary);
            transition: var(--transition);
            border-radius: 2px;
        }

        /* ===== HERO SECTION - PREMIUM DESIGN ===== */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            padding-top: 80px;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: <?php echo $currentTheme['hero-bg']; ?>;
            z-index: -2;
        }

        .hero-particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.3;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .hero-title {
            font-size: 5rem;
            line-height: 1.1;
            margin-bottom: 30px;
            background: linear-gradient(135deg, var(--text-primary), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            animation: titleGlow 3s ease-in-out infinite alternate;
        }

        @keyframes titleGlow {
            from {
                text-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            }
            to {
                text-shadow: 0 15px 40px rgba(0, 0, 0, 0.5), 0 0 20px rgba(255, 255, 255, 0.1);
            }
        }

        .hero-subtitle {
            font-size: 1.4rem;
            margin-bottom: 40px;
            color: var(--text-secondary);
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-stats {
            display: flex;
            justify-content: center;
            gap: 50px;
            margin-top: 60px;
            flex-wrap: wrap;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--accent);
            display: block;
            font-family: var(--font-heading);
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 1rem;
            color: var(--text-secondary);
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* ===== ABOUT SECTION ===== */
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-text h3 {
            font-size: 2.5rem;
            margin-bottom: 25px;
            color: var(--accent);
        }

        .about-features {
            margin-top: 30px;
        }

        .about-feature {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 20px;
        }

        .feature-check {
            width: 24px;
            height: 24px;
            background: var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.8rem;
            flex-shrink: 0;
        }

        .about-image {
            position: relative;
        }

        .about-image img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            transition: var(--transition);
        }

        .about-image:hover img {
            transform: scale(1.02) rotate(1deg);
        }

        /* ===== FEATURES SECTION ===== */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .feature-card {
            text-align: center;
            padding: 40px 30px;
        }

        .feature-icon {
            font-size: 3.5rem;
            margin-bottom: 25px;
            display: inline-block;
            width: 80px;
            height: 80px;
            line-height: 80px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transition: var(--transition);
        }

        .feature-card:hover .feature-icon {
            background: var(--accent);
            transform: rotateY(180deg) scale(1.1);
        }

        .feature-title {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: var(--accent);
        }

        /* ===== PLANS SECTION ===== */
        .plans-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }

        .plan-card {
            text-align: center;
            position: relative;
            overflow: visible;
        }

        .plan-card.featured {
            transform: scale(1.05);
            z-index: 1;
        }

        .plan-badge {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(135deg, var(--accent), color-mix(in srgb, var(--accent) 80%, white));
            color: white;
            padding: 8px 25px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .plan-header {
            margin-bottom: 30px;
            padding-bottom: 30px;
            border-bottom: 1px solid var(--glass-border);
        }

        .plan-name {
            font-size: 1.8rem;
            margin-bottom: 15px;
        }

        .plan-price {
            display: flex;
            align-items: baseline;
            justify-content: center;
            gap: 5px;
        }

        .price {
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--accent);
            font-family: var(--font-heading);
        }

        .period {
            font-size: 1.2rem;
            color: var(--text-secondary);
        }

        .plan-duration {
            font-size: 1rem;
            color: var(--text-secondary);
            margin-top: 10px;
        }

        .plan-features {
            list-style: none;
            margin-bottom: 40px;
            text-align: left;
        }

        .plan-features li {
            padding: 12px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .plan-features li i {
            color: var(--accent);
        }

        /* ===== TESTIMONIALS SECTION ===== */
        .testimonials-slider {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }

        .testimonial-card {
            padding: 40px;
            margin: 20px;
        }

        .testimonial-text {
            font-size: 1.1rem;
            font-style: italic;
            margin-bottom: 25px;
            position: relative;
        }

        .testimonial-text::before {
            content: '"';
            font-size: 4rem;
            color: var(--accent);
            position: absolute;
            top: -20px;
            left: -10px;
            opacity: 0.3;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            background: var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
        }

        .author-info h4 {
            margin-bottom: 5px;
        }

        .author-role {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        .testimonial-rating {
            margin-top: 10px;
        }

        .testimonial-rating i {
            color: var(--accent);
            margin-right: 2px;
        }

        /* ===== CONTACT SECTION ===== */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 50px;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }

        .contact-icon {
            width: 60px;
            height: 60px;
            background: var(--glass-bg);
            backdrop-filter: var(--glass-blur);
            border: 1px solid var(--glass-border);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--accent);
            flex-shrink: 0;
        }

        .contact-details h4 {
            margin-bottom: 10px;
            color: var(--accent);
        }

        .contact-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        /* ===== FOOTER WITH GLASS MORPHISM ===== */
        footer {
            background: var(--glass-bg);
            backdrop-filter: var(--glass-blur);
            -webkit-backdrop-filter: var(--glass-blur);
            border-top: 1px solid var(--glass-border);
            padding: 80px 0 30px;
            position: relative;
            margin-top: 100px;
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.1));
            z-index: -1;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 50px;
            margin-bottom: 50px;
        }

        .footer-logo {
            font-family: var(--font-heading);
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
            background: linear-gradient(135deg, var(--text-primary), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .footer-quote {
            font-family: var(--font-heading);
            font-size: 1.5rem;
            font-style: italic;
            color: var(--accent);
            margin-bottom: 30px;
            padding: 20px;
            border-left: 3px solid var(--accent);
        }

        .footer-links h4 {
            margin-bottom: 25px;
            color: var(--accent);
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a:hover {
            color: var(--accent);
            padding-left: 10px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 25px;
        }

        .social-link {
            width: 45px;
            height: 45px;
            background: var(--glass-bg);
            backdrop-filter: var(--glass-blur);
            border: 1px solid var(--glass-border);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            transition: var(--transition);
        }

        .social-link:hover {
            background: var(--accent);
            transform: translateY(-5px);
            border-color: var(--accent);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid var(--glass-border);
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        /* ===== RESPONSIVE DESIGN ===== */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 4rem;
            }
            
            .about-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .about-image {
                order: -1;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hamburger {
                display: flex;
            }
            
            .hero-title {
                font-size: 3rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .section-title {
                font-size: 2.5rem;
            }
            
            .section {
                padding: 70px 0;
            }
            
            .plan-card.featured {
                transform: none;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .glass-btn {
                width: 100%;
                justify-content: center;
            }
            
            .hero-stats {
                gap: 30px;
            }
            
            .stat-number {
                font-size: 2.5rem;
            }
        }

        /* ===== ANIMATIONS ===== */
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }
    </style>
</head>
<body>
    <!-- Header with Glass Morphism -->
    <header id="header">
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div class="logo-text"><?php echo $siteName; ?></div>
                </div>
                
                <div class="nav-links">
                    <a href="#home" class="nav-link active">Home</a>
                    <a href="#about" class="nav-link">About</a>
                    <a href="#features" class="nav-link">Features</a>
                    <a href="#plans" class="nav-link">Plans</a>
                    <a href="#testimonials" class="nav-link">Reviews</a>
                    <a href="#contact" class="nav-link">Contact</a>
                </div>
                
                <div class="theme-switcher">
                    <a href="?theme=classic" class="theme-btn classic <?php echo $selectedTheme == 'classic' ? 'active' : ''; ?>" title="Classic Theme"></a>
                    <a href="?theme=zen" class="theme-btn zen <?php echo $selectedTheme == 'zen' ? 'active' : ''; ?>" title="Zen Theme"></a>
                    <a href="?theme=modern" class="theme-btn modern <?php echo $selectedTheme == 'modern' ? 'active' : ''; ?>" title="Modern Theme"></a>
                </div>
                
                <button class="hamburger" id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </nav>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu" style="display: none;">
        <nav class="mobile-nav">
            <a href="#home" class="nav-link">Home</a>
            <a href="#about" class="nav-link">About</a>
            <a href="#features" class="nav-link">Features</a>
            <a href="#plans" class="nav-link">Plans</a>
            <a href="#testimonials" class="nav-link">Reviews</a>
            <a href="#contact" class="nav-link">Contact</a>
        </nav>
    </div>

    <!-- Hero Section -->
    <section id="home" class="hero section">
        <div class="hero-bg"></div>
        <div class="hero-particles" id="particles"></div>
        
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title floating">Find Your Zen</h1>
                <p class="hero-subtitle">Experience ultimate focus in our premium glass-morphism study sanctuary. Designed for serious learners who demand perfection in their study environment.</p>
                
                <div class="hero-buttons">
                    <a href="#plans" class="glass-btn glass-btn-primary">
                        <i class="fas fa-crown"></i> View Premium Plans
                    </a>
                    <a href="#features" class="glass-btn">
                        <i class="fas fa-star"></i> Explore Features
                    </a>
                </div>
                
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Successful Students</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">99%</span>
                        <span class="stat-label">Satisfaction Rate</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">24/7</span>
                        <span class="stat-label">Study Support</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <h2 class="section-title">Our Philosophy</h2>
            <p class="section-subtitle">More than just a study space - it's a sanctuary for focused minds</p>
            
            <div class="about-content">
                <div class="about-text">
                    <div class="glass-card">
                        <h3>The Art of Deep Focus</h3>
                        <p>At <strong>Mahadev Reading Zone</strong>, we believe that environment shapes performance. Inspired by the discipline and focus of Lord Mahadev, we've created a space where distractions fade and concentration flows naturally.</p>
                        <p>Our glass-morphism design isn't just aesthetic - it's functional. The translucent partitions create private study zones while maintaining an open, airy feel that reduces mental clutter.</p>
                        
                        <div class="about-features">
                            <div class="about-feature">
                                <div class="feature-check">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div>
                                    <h4>Sound Engineering</h4>
                                    <p>Acoustic panels and white noise systems create perfect silence</p>
                                </div>
                            </div>
                            <div class="about-feature">
                                <div class="feature-check">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div>
                                    <h4>Ergonomic Design</h4>
                                    <p>Every chair and desk scientifically designed for long study hours</p>
                                </div>
                            </div>
                            <div class="about-feature">
                                <div class="feature-check">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div>
                                    <h4>Air Quality Control</h4>
                                    <p>HEPA filters and oxygen concentrators for optimal brain function</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?q=80&w=2070&auto=format&fit=crop" alt="Modern Study Space" class="glass-card">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="section" style="background: rgba(0,0,0,0.1);">
        <div class="container">
            <h2 class="section-title">Premium Features</h2>
            <p class="section-subtitle">Everything you need for uninterrupted, deep work sessions</p>
            
            <div class="features-grid">
                <?php foreach ($features as $feature): ?>
                <div class="glass-card feature-card">
                    <div class="feature-icon"><?php echo $feature['icon']; ?></div>
                    <h3 class="feature-title"><?php echo $feature['title']; ?></h3>
                    <p><?php echo $feature['desc']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Plans Section -->
    <section id="plans" class="section">
        <div class="container">
            <h2 class="section-title">Membership Plans</h2>
            <p class="section-subtitle">Choose your path to academic excellence</p>
            
            <div class="plans-container">
                <?php foreach ($plans as $plan): ?>
                <div class="glass-card plan-card <?php echo $plan['highlight'] ? 'featured' : ''; ?>">
                    <?php if ($plan['highlight']): ?>
                    <div class="plan-badge">Most Popular</div>
                    <?php endif; ?>
                    
                    <div class="plan-header">
                        <h3 class="plan-name"><?php echo $plan['name']; ?></h3>
                        <div class="plan-price">
                            <span class="price">₹<?php echo $plan['price']; ?></span>
                            <span class="period">/ <?php echo $plan['period']; ?></span>
                        </div>
                        <div class="plan-duration"><?php echo $plan['duration']; ?> Access</div>
                    </div>
                    
                    <ul class="plan-features">
                        <?php foreach ($plan['features'] as $feature): ?>
                        <li><i class="fas fa-check-circle"></i> <?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    
                    <a href="https://wa.me/<?php echo $whatsappNumber; ?>?text=Interested in <?php echo urlencode($plan['name']); ?> plan" 
                       class="glass-btn <?php echo $plan['highlight'] ? 'glass-btn-primary' : ''; ?>" 
                       target="_blank">
                        <i class="fab fa-whatsapp"></i> Enquire Now
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="section" style="background: rgba(0,0,0,0.1);">
        <div class="container">
            <h2 class="section-title">Student Stories</h2>
            <p class="section-subtitle">What our members say about their experience</p>
            
            <div class="testimonials-slider">
                <div class="glass-card testimonial-card">
                    <?php 
                    $testimonial = $testimonials[0];
                    ?>
                    <div class="testimonial-text">
                        <?php echo $testimonial['text']; ?>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <?php echo substr($testimonial['name'], 0, 1); ?>
                        </div>
                        <div class="author-info">
                            <h4><?php echo $testimonial['name']; ?></h4>
                            <div class="author-role"><?php echo $testimonial['role']; ?></div>
                            <div class="testimonial-rating">
                                <?php for($i=0; $i<$testimonial['rating']; $i++): ?>
                                <i class="fas fa-star"></i>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <h2 class="section-title">Visit Our Sanctuary</h2>
            <p class="section-subtitle">Begin your journey to focused learning today</p>
            
            <div class="contact-grid">
                <div class="glass-card contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Our Location</h4>
                            <p>Sector 16, Government Complex Road<br><?php echo $location; ?> - 382016</p>
                            <p><small>Near IIT Gandhinagar Campus</small></p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Contact Details</h4>
                            <p><?php echo $contactPhone; ?></p>
                            <p><?php echo $contactEmail; ?></p>
                            <p><strong>Hours:</strong> 6:00 AM - 11:00 PM (All Days)</p>
                        </div>
                    </div>
                    
                    <div class="contact-buttons">
                        <a href="tel:<?php echo str_replace(' ', '', $contactPhone); ?>" class="glass-btn glass-btn-primary">
                            <i class="fas fa-phone"></i> Call Now
                        </a>
                        <a href="https://wa.me/<?php echo $whatsappNumber; ?>" class="glass-btn" target="_blank">
                            <i class="fab fa-whatsapp"></i> WhatsApp
                        </a>
                        <a href="https://maps.google.com/?q=<?php echo urlencode('Mahadev Reading Zone ' . $location); ?>" class="glass-btn" target="_blank">
                            <i class="fas fa-directions"></i> Directions
                        </a>
                    </div>
                </div>
                
                <div class="glass-card map-container" style="padding: 0; overflow: hidden;">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.497262629853!2d72.6369!3d23.2156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDEyJzU2LjIiTiA3MsKwMzgnMTIuOCJF!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin" 
                        width="100%" 
                        height="400" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer with Glass Morphism -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-about">
                    <div class="footer-logo"><?php echo $siteName; ?></div>
                    <p class="footer-quote">"In the silence of focus, we find the voice of knowledge"</p>
                    <p>A premium study sanctuary designed for those who seek excellence through disciplined learning and perfect environment.</p>
                    
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">Our Philosophy</a></li>
                        <li><a href="#features">Premium Features</a></li>
                        <li><a href="#plans">Membership Plans</a></li>
                        <li><a href="#testimonials">Success Stories</a></li>
                        <li><a href="#contact">Book a Visit</a></li>
                    </ul>
                </div>
                
                <div class="footer-links">
                    <h4>Our Facilities</h4>
                    <ul>
                        <?php foreach ($features as $feature): ?>
                        <li><a href="#features"><?php echo $feature['title']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; <?php echo date('Y'); ?> <?php echo $siteName; ?>. All rights reserved.</p>
                <p style="margin-top: 15px; font-size: 0.8rem; letter-spacing: 2px;">
                    DESIGNED WITH FOCUS • BUILT WITH DISCIPLINE
                </p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile Menu Toggle
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');
        
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            mobileMenu.style.display = mobileMenu.style.display === 'block' ? 'none' : 'block';
            
            // Animate hamburger
            const spans = hamburger.querySelectorAll('span');
            if (hamburger.classList.contains('active')) {
                spans[0].style.transform = 'rotate(45deg) translate(6px, 6px)';
                spans[1].style.opacity = '0';
                spans[2].style.transform = 'rotate(-45deg) translate(6px, -6px)';
            } else {
                spans[0].style.transform = 'none';
                spans[1].style.opacity = '1';
                spans[2].style.transform = 'none';
            }
        });

        // Header Scroll Effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    const headerHeight = document.querySelector('header').offsetHeight;
                    const targetPosition = targetElement.offsetTop - headerHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    if (hamburger.classList.contains('active')) {
                        hamburger.click();
                    }
                }
            });
        });

        // Active Nav Link on Scroll
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');
        
        window.addEventListener('scroll', () => {
            let current = '';
            const scrollPosition = window.scrollY + 100;
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                
                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });

        // Particle Background for Hero
        const createParticles = () => {
            const particlesContainer = document.getElementById('particles');
            if (!particlesContainer) return;
            
            for (let i = 0; i < 50; i++) {
                const particle = document.createElement('div');
                particle.style.position = 'absolute';
                particle.style.width = Math.random() * 5 + 2 + 'px';
                particle.style.height = particle.style.width;
                particle.style.background = 'rgba(255, 255, 255, 0.3)';
                particle.style.borderRadius = '50%';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = Math.random() * 100 + '%';
                particle.style.animation = `float ${Math.random() * 10 + 10}s linear infinite`;
                particlesContainer.appendChild(particle);
            }
        };

        // Initialize
        document.addEventListener('DOMContentLoaded', () => {
            createParticles();
            
            // Add floating animation to theme buttons
            const themeButtons = document.querySelectorAll('.theme-btn');
            themeButtons.forEach((btn, index) => {
                btn.style.animationDelay = (index * 0.2) + 's';
                btn.classList.add('floating');
            });
        });

        // Hover effect for glass cards
        document.querySelectorAll('.glass-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) rotateX(5deg)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) rotateX(0)';
            });
        });
    </script>
</body>
</html>