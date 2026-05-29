<?php
/**
 * Mahadev Reading Zone - ULTRA PREMIUM EDITION
 * Integrating 3 Client-Finalized Themes: Rudra (Shiv), Kailash (Zen), Aranya (Forest)
 * Features: Glassmorphism, Cinematic Hero, Detailed Theme System
 */

// Site Configuration
define('SITE_NAME', 'Mahadev Reading Zone');
define('SITE_TAGLINE', 'Focus. Discipline. Knowledge.');
define('LOCATION', 'Gandhinagar, Gujarat');
define('CONTACT_PHONE', '+91 98765 43210');
define('CONTACT_EMAIL', 'info@mahadevreadingzone.com');

// Data Arrays (Generalized for all themes)
$facilities = [
    ['icon' => '🔇', 'title' => 'Deep Silence', 'desc' => 'Acoustically treated zones designed for absolute focus and deep work.'],
    ['icon' => '🪑', 'title' => 'Ergonomic Comfort', 'desc' => 'Premium high-back chairs engineered for 12+ hour study marathons.'],
    ['icon' => '💡', 'title' => 'Focused Lighting', 'desc' => 'Individual desk lamps with eye-care technology mimicking natural daylight.'],
    ['icon' => '❄️', 'title' => 'Climate Control', 'desc' => 'Centralized AC with HEPA air purification for a fresh and alert mind.'],
    ['icon' => '⚡', 'title' => 'Uninterrupted', 'desc' => '24/7 Power backup and high-speed fiber internet for seamless online learning.'],
    ['icon' => '☕', 'title' => 'Refreshment', 'desc' => 'RO water and a dedicated calming breakout zone for tea/coffee breaks.'],
];

$plans = [
    [
        'name' => 'Day Pass',
        'price' => '₹100',
        'period' => '/day',
        'features' => ['Access 8AM - 8PM', 'Flexi-Seating', 'High-Speed Wi-Fi', 'Refreshments', 'Shared Locker Access'],
        'highlight' => false
    ],
    [
        'name' => 'Monthly',
        'price' => '₹1,200',
        'period' => '/month',
        'features' => ['Reserved Desk', 'Access 6AM - 11PM', 'Personal Locker', 'Power Backup', 'Guest Passes (2)', 'Free Printing (50 Pages)'],
        'highlight' => true
    ],
    [
        'name' => 'Quarterly',
        'price' => '₹3,300',
        'period' => '/quarter',
        'features' => ['Best Value Plan', 'Reserved Desk', 'All Premium Perks', 'Priority Support', 'Guest Passes (6)', 'Access to Discussion Room'],
        'highlight' => false
    ],
];

$rules = [
    '🤫 <strong>Silence is Sacred:</strong> Maintain absolute quiet in reading zones to respect the sanctity of focus.',
    '📱 <strong>Digital Discipline:</strong> Phones must remain on silent mode at all times inside the reading hall.',
    '🧹 <strong>Respect the Space:</strong> Keep your desk clean and organized. Leave no trace behind.',
    '👞 <strong>Decorum:</strong> Please use the designated shoe rack and dress appropriately for a study environment.',
    '🤝 <strong>Community Spirit:</strong> Respect the privacy and focus of fellow aspirants. We grow together.'
];

$nav_items = [
    'Home' => '#home',
    'Vision' => '#about',
    'Facilities' => '#facilities',
    'Membership' => '#membership',
    'Contact' => '#contact'
];
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A premium study environment in Gandhinagar inspired by Mahadev.">
    <title><?php echo SITE_NAME; ?> | The Sanctuary</title>
    
    <!-- FONTS: Loading all 3 Theme Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Rudra: Cinzel + Lato | Kailash: Cormorant + Montserrat | Aranya: DM Serif + Outfit -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Lato:wght@300;400;700&family=Cormorant+Garamond:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600&family=DM+Serif+Display:ital@0;1&family=Outfit:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        /* --- MASTER THEME SYSTEM --- */
        :root {
            /* DEFAULT: RUDRA (SHIV/ROYAL) */
            --theme-name: "Rudra";
            --bg-body: #F0F2F5;
            --bg-glass: rgba(255, 255, 255, 0.7); /* Glass Effect Base */
            --bg-glass-border: rgba(255, 255, 255, 0.4);
            --bg-card: #FFFFFF;
            --text-primary: #1B263B;
            --text-secondary: #415A77;
            --text-muted: #778DA9;
            
            --accent-primary: #1B263B;   /* Deep Blue */
            --accent-secondary: #C19A6B; /* Bronze */
            --accent-glow: rgba(193, 154, 107, 0.3);
            
            --border-radius: 8px;        /* Slightly Rounded */
            --font-heading: 'Cinzel', serif;
            --font-body: 'Lato', sans-serif;
            
            --shadow-sm: 0 4px 6px -1px rgba(27, 38, 59, 0.1), 0 2px 4px -1px rgba(27, 38, 59, 0.06);
            --shadow-md: 0 10px 15px -3px rgba(27, 38, 59, 0.1), 0 4px 6px -2px rgba(27, 38, 59, 0.05);
            --shadow-lg: 0 20px 25px -5px rgba(27, 38, 59, 0.1), 0 10px 10px -5px rgba(27, 38, 59, 0.04);
            --hero-overlay: linear-gradient(135deg, rgba(27,38,59,0.85), rgba(27,38,59,0.6));
            
            --transition: 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            --blur-strength: 15px;
        }

        /* THEME 2: KAILASH (ZEN/HIMALAYAN) */
        [data-theme="kailash"] {
            --theme-name: "Kailash";
            --bg-body: #FAFAFA;
            --bg-glass: rgba(255, 255, 255, 0.65);
            --bg-glass-border: rgba(255, 255, 255, 0.5);
            --bg-card: #FFFFFF;
            --text-primary: #2D3436;
            --text-secondary: #636E72;
            --text-muted: #B2BEC3;
            
            --accent-primary: #2D3436;   /* Stone */
            --accent-secondary: #D35400; /* Saffron */
            --accent-glow: rgba(211, 84, 0, 0.2);
            
            --border-radius: 16px;       /* Smooth */
            --font-heading: 'Cormorant Garamond', serif;
            --font-body: 'Montserrat', sans-serif;
            
            --shadow-sm: 0 5px 15px rgba(0,0,0,0.05);
            --shadow-md: 0 15px 35px rgba(0,0,0,0.08);
            --shadow-lg: 0 25px 50px rgba(0,0,0,0.1);
            --hero-overlay: linear-gradient(to right, rgba(255,255,255,0.8), rgba(255,255,255,0.3));
        }

        /* THEME 3: ARANYA (FOREST/BIOPHILIC) */
        [data-theme="aranya"] {
            --theme-name: "Aranya";
            --bg-body: #F1F8E9;
            --bg-glass: rgba(255, 255, 255, 0.75);
            --bg-glass-border: rgba(255, 255, 255, 0.6);
            --bg-card: #FFFFFF;
            --text-primary: #1B4332;     /* Deep Forest */
            --text-secondary: #2D6A4F;   /* Leaf Green */
            --text-muted: #52B788;
            
            --accent-primary: #081C15;   /* Dark Jungle */
            --accent-secondary: #D08C60; /* Wood/Terracotta */
            --accent-glow: rgba(45, 106, 79, 0.25);
            
            --border-radius: 24px;       /* Organic */
            --font-heading: 'DM Serif Display', serif;
            --font-body: 'Outfit', sans-serif;
            
            --shadow-sm: 0 4px 6px rgba(27, 67, 50, 0.08);
            --shadow-md: 0 10px 15px rgba(27, 67, 50, 0.1);
            --shadow-lg: 0 20px 25px rgba(27, 67, 50, 0.12);
            --hero-overlay: linear-gradient(180deg, rgba(232, 245, 233, 0.4), rgba(232, 245, 233, 0.9));
        }

        /* RESET & BASE */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        
        body {
            font-family: var(--font-body);
            background-color: var(--bg-body);
            color: var(--text-primary);
            line-height: 1.8;
            overflow-x: hidden;
            transition: background-color 0.6s ease, color 0.6s ease;
        }

        h1, h2, h3, h4 {
            font-family: var(--font-heading);
            color: var(--text-primary);
            font-weight: 700;
            line-height: 1.3;
        }
        
        [data-theme="kailash"] h1, [data-theme="kailash"] h2 { font-weight: 600; }
        [data-theme="aranya"] h1, [data-theme="aranya"] h2 { font-weight: 400; }

        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }
        img { max-width: 100%; display: block; border-radius: var(--border-radius); }
        .no-js .js-only { display: none; }

        .container {
            width: 90%; max-width: 1200px; margin: 0 auto;
        }

        /* --- GLASSMORPHISM HEADER --- */
        .header {
            position: fixed; top: 20px; left: 50%; transform: translateX(-50%);
            width: 90%; max-width: 1200px; height: 70px;
            background: var(--bg-glass);
            backdrop-filter: blur(var(--blur-strength));
            -webkit-backdrop-filter: blur(var(--blur-strength));
            border: 1px solid var(--bg-glass-border);
            border-radius: 50px;
            z-index: 1000;
            display: flex; align-items: center;
            box-shadow: var(--shadow-sm);
            transition: all 0.4s ease;
        }
        
        .header.scrolled {
            top: 10px; width: 95%; max-width: 1300px;
            box-shadow: var(--shadow-md);
        }

        .navbar { display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 0 30px; }

        .logo {
            font-family: var(--font-heading); font-size: 1.4rem; font-weight: 700;
            color: var(--text-primary); display: flex; align-items: center; gap: 10px;
        }
        .logo svg { width: 26px; height: 26px; fill: var(--accent-secondary); transition: transform 0.4s ease; }
        .logo:hover svg { transform: rotate(15deg); }

        .nav-menu { display: flex; gap: 30px; }
        .nav-link {
            font-weight: 600; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;
            color: var(--text-primary); position: relative; padding: 5px 0;
        }
        .nav-link::after {
            content: ''; position: absolute; width: 0; height: 2px;
            bottom: 0; left: 50%; background-color: var(--accent-secondary);
            transition: all 0.3s ease; transform: translateX(-50%);
        }
        .nav-link:hover::after { width: 100%; }

        /* CONTROLS */
        .nav-controls { display: flex; gap: 15px; align-items: center; }

        .theme-selector { position: relative; display: inline-block; }
        
        .theme-btn {
            background: rgba(255,255,255,0.5); border: 1px solid var(--accent-secondary);
            color: var(--accent-primary); padding: 8px 16px; border-radius: 30px;
            cursor: pointer; font-family: var(--font-body); font-weight: 700; font-size: 0.8rem;
            display: flex; align-items: center; gap: 6px; transition: var(--transition);
        }
        .theme-btn:hover { background: var(--accent-secondary); color: #fff; border-color: var(--accent-secondary); }

        /* THEME POPUP */
        .theme-options {
            position: absolute; top: 140%; right: 0;
            background: var(--bg-card); padding: 10px; border-radius: 12px;
            box-shadow: var(--shadow-lg); display: none; flex-direction: column; gap: 5px;
            min-width: 150px; border: 1px solid rgba(0,0,0,0.05); z-index: 101;
            transform-origin: top right;
        }
        .theme-options.active { display: flex; animation: scaleIn 0.2s ease forwards; }
        
        @keyframes scaleIn { from { opacity: 0; transform: scale(0.9); } to { opacity: 1; transform: scale(1); } }
        
        .theme-option {
            padding: 10px; cursor: pointer; border-radius: 8px;
            font-size: 0.9rem; color: var(--text-primary); transition: 0.2s;
            display: flex; align-items: center; gap: 10px; font-weight: 500;
        }
        .theme-option:hover { background: var(--bg-body); color: var(--accent-secondary); }
        .theme-dot { width: 10px; height: 10px; border-radius: 50%; }

        /* MOBILE MENU */
        .mobile-menu-btn { display: none; background: none; border: none; cursor: pointer; padding: 5px; }
        .hamburger { width: 24px; height: 2px; background: var(--text-primary); position: relative; transition: 0.3s; }
        .hamburger::before, .hamburger::after {
            content:''; position: absolute; width: 24px; height: 2px; background: var(--text-primary);
            left: 0; transition: 0.3s;
        }
        .hamburger::before { top: -8px; } .hamburger::after { top: 8px; }

        /* SECTIONS */
        .section { padding: 120px 0; position: relative; }
        
        .section-header { text-align: center; margin-bottom: 70px; max-width: 700px; margin-left: auto; margin-right: auto; }
        
        .section-title {
            font-size: 3rem; margin-bottom: 15px; position: relative; display: inline-block;
        }
        
        .section-subtitle {
            font-size: 1.1rem; color: var(--text-muted); line-height: 1.6;
        }

        /* --- CINEMATIC HERO --- */
        .hero {
            height: 100vh; display: flex; align-items: center; justify-content: center;
            position: relative; overflow: hidden; text-align: center;
        }
        
        .hero-bg {
            position: absolute; top:0; left:0; width:100%; height:100%;
            background-image: url('https://images.unsplash.com/photo-1519682337058-a5ca05e24b0b?q=80&w=2000&auto=format&fit=crop');
            background-size: cover; background-position: center; z-index: -2;
            transform: scale(1.1); animation: slowZoom 20s infinite alternate;
        }
        
        @keyframes slowZoom { from { transform: scale(1.1); } to { transform: scale(1.2); } }
        
        .hero-overlay {
            position: absolute; top:0; left:0; width:100%; height:100%;
            background: var(--hero-overlay); z-index: -1; transition: background 0.8s;
        }
        
        .particles-container { position: absolute; top:0; left:0; width:100%; height:100%; z-index: 0; pointer-events: none; }
        
        .hero-content { position: relative; z-index: 1; max-width: 900px; padding: 30px; animation: fadeInUp 1s ease-out; }
        
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        
        .hero h1 { 
            font-size: 4.5rem; margin-bottom: 25px; color: var(--accent-primary); 
            text-shadow: 0 4px 20px rgba(0,0,0,0.1); line-height: 1.1;
        }
        [data-theme="rudra"] .hero h1 { color: #fff; text-shadow: 0 4px 20px rgba(0,0,0,0.4); }
        
        .hero p { 
            font-size: 1.4rem; margin-bottom: 50px; color: var(--text-secondary); font-weight: 400; max-width: 700px; margin-left: auto; margin-right: auto;
        }
        [data-theme="rudra"] .hero p { color: rgba(255,255,255,0.9); }

        .btn {
            display: inline-block; padding: 18px 45px; border-radius: 50px;
            font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; font-size: 0.9rem;
            cursor: pointer; transition: all 0.3s ease; border: 2px solid transparent;
            position: relative; overflow: hidden; z-index: 1;
        }
        
        .btn-primary {
            background: var(--accent-secondary); color: #fff;
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
        }
        .btn-primary:hover { 
            background: var(--accent-primary); transform: translateY(-5px); 
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        
        .btn-secondary {
            background: transparent; border-color: var(--accent-secondary); color: var(--accent-secondary); margin-left: 20px;
            backdrop-filter: blur(5px);
        }
        [data-theme="rudra"] .btn-secondary { border-color: rgba(255,255,255,0.6); color: #fff; }
        .btn-secondary:hover { background: var(--accent-secondary); color: #fff; border-color: var(--accent-secondary); }

        /* --- PREMIUM ABOUT --- */
        .about-grid { 
            display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; 
        }
        
        .about-content-box {
            padding-right: 20px;
        }
        
        .about-highlight {
            display: inline-block; padding: 5px 15px; background: var(--accent-glow);
            color: var(--accent-primary); border-radius: 20px; font-weight: 700; font-size: 0.85rem;
            text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;
        }
        
        .about-text {
            font-size: 1.15rem; color: var(--text-secondary); margin-bottom: 25px; line-height: 1.8;
        }
        
        .about-stats {
            display: flex; gap: 40px; margin-top: 40px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);
        }
        .stat-item h3 { font-size: 2.5rem; color: var(--accent-secondary); margin-bottom: 5px; }
        .stat-item p { font-size: 0.9rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: 1px; }

        .about-img-wrapper {
            position: relative;
        }
        .about-img-wrapper img {
            width: 100%; border-radius: var(--border-radius); box-shadow: var(--shadow-lg);
            transition: transform 0.5s ease;
        }
        .about-img-wrapper:hover img { transform: scale(1.02); }
        
        /* Floating Badge */
        .about-badge {
            position: absolute; bottom: -30px; left: -30px; background: var(--bg-card);
            padding: 30px; border-radius: var(--border-radius); box-shadow: var(--shadow-md);
            max-width: 200px;
        }
        .about-badge p { font-size: 0.9rem; color: var(--text-primary); font-weight: 600; line-height: 1.5; }
        .about-badge span { color: var(--accent-secondary); font-size: 2rem; display: block; margin-bottom: 10px; }

        /* FACILITIES */
        .facilities-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; }
        
        .facility-card {
            background: var(--bg-card); padding: 50px 40px; border-radius: var(--border-radius);
            box-shadow: var(--shadow-sm); transition: all 0.4s ease; text-align: left;
            border: 1px solid rgba(0,0,0,0.03); position: relative; overflow: hidden;
        }
        .facility-card::before {
            content: ''; position: absolute; top: 0; left: 0; width: 4px; height: 0;
            background: var(--accent-secondary); transition: 0.4s ease;
        }
        .facility-card:hover { transform: translateY(-10px); box-shadow: var(--shadow-lg); }
        .facility-card:hover::before { height: 100%; }
        
        .f-icon {
            font-size: 3rem; margin-bottom: 25px; display: inline-block;
            color: var(--accent-primary); transition: var(--transition);
        }
        .facility-card:hover .f-icon { transform: scale(1.1); color: var(--accent-secondary); }

        [data-theme="aranya"] .f-icon {
            background: var(--accent-glow); width: 80px; height: 80px; line-height: 80px; border-radius: 50%; text-align: center;
        }

        .facility-card h3 { font-size: 1.5rem; margin-bottom: 15px; }
        .facility-card p { font-size: 1rem; color: var(--text-muted); line-height: 1.7; }

        /* PLANS */
        .plans-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; }
        
        .plan-card {
            background: var(--bg-card); padding: 50px 40px; border-radius: var(--border-radius);
            box-shadow: var(--shadow-sm); transition: var(--transition); position: relative;
            border: 1px solid rgba(0,0,0,0.06); display: flex; flex-direction: column;
        }
        .plan-card.highlight { 
            border: 2px solid var(--accent-secondary); transform: scale(1.05); z-index: 2; 
            box-shadow: var(--shadow-md);
        }
        .plan-tag {
            position: absolute; top: 20px; right: 20px; background: var(--accent-secondary); color: #fff;
            padding: 5px 12px; border-radius: 20px; font-size: 0.7rem; font-weight: 700; text-transform: uppercase;
        }
        
        .plan-card h3 { font-size: 1.6rem; text-transform: uppercase; letter-spacing: 1px; color: var(--text-primary); margin-bottom: 10px;}

        .plan-price { font-size: 3.2rem; font-family: var(--font-heading); color: var(--accent-primary); margin: 20px 0; font-weight: 700; }
        .plan-price span { font-size: 1rem; color: var(--text-muted); font-family: var(--font-body); font-weight: 400; margin-left: 5px; }
        
        .plan-features { margin-bottom: 40px; flex-grow: 1; margin-top: 10px; }
        .plan-features li { 
            margin-bottom: 18px; color: var(--text-secondary); display: flex; align-items: center; gap: 15px; font-size: 1rem; 
        }
        .plan-features li::before { content: '✓'; color: var(--accent-secondary); font-weight: 900; font-size: 1.1rem; }
        
        .btn-plan { 
            width: 100%; text-align: center; margin-top: auto; background: var(--bg-body); color: var(--text-primary); 
            border: 1px solid transparent; padding: 15px; border-radius: 10px; font-weight: 700; transition: 0.3s;
        }
        .btn-plan:hover { background: var(--text-primary); color: #fff; }
        .plan-card.highlight .btn-plan { background: var(--accent-primary); color: #fff; }
        .plan-card.highlight .btn-plan:hover { background: var(--accent-secondary); }

        /* CONTACT */
        .contact-grid { display: grid; grid-template-columns: 1fr 1.2fr; gap: 60px; }
        .contact-info { 
            background: var(--bg-card); padding: 50px; border-radius: var(--border-radius); 
            box-shadow: var(--shadow-md); border-top: 5px solid var(--accent-secondary);
        }
        .contact-info h3 { color: var(--accent-primary); margin-bottom: 30px; font-size: 2rem; }
        
        .info-row { display: flex; gap: 20px; margin-bottom: 30px; align-items: flex-start; }
        .info-icon { 
            width: 50px; height: 50px; background: var(--accent-glow); border-radius: 50%; 
            display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: var(--accent-primary);
            flex-shrink: 0;
        }
        
        .map-box {
            background: var(--bg-card); height: 100%; min-height: 450px;
            border-radius: var(--border-radius); display: flex; align-items: center; justify-content: center;
            color: var(--text-muted); overflow: hidden; box-shadow: var(--shadow-sm); position: relative;
        }
        .map-box iframe { width: 100%; height: 100%; border: 0; filter: grayscale(100%); transition: 0.5s; }
        .map-box:hover iframe { filter: grayscale(0%); }

        /* --- GLASSMORPHISM FOOTER --- */
        footer {
            margin-top: 100px;
            background: var(--accent-primary); color: rgba(255,255,255,0.7); 
            padding: 80px 0 40px; text-align: center; position: relative;
            overflow: hidden;
        }
        /* Footer Glass Overlay */
        footer::before {
            content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(to bottom, rgba(255,255,255,0.05), transparent);
            pointer-events: none;
        }
        
        .footer-logo { font-family: var(--font-heading); font-size: 2rem; color: #fff; margin-bottom: 30px; }
        .footer-quote { font-family: var(--font-heading); font-size: 1.5rem; color: #fff; margin-bottom: 40px; font-style: italic; opacity: 0.9; max-width: 600px; margin-left: auto; margin-right: auto; }
        .copyright { border-top: 1px solid rgba(255,255,255,0.1); padding-top: 30px; font-size: 0.9rem; letter-spacing: 1px; }

        /* RESPONSIVE */
        @media (max-width: 900px) {
            .hero h1 { font-size: 3rem; }
            .section { padding: 80px 0; }
            .section-title { font-size: 2.2rem; }
            .about-grid, .contact-grid { grid-template-columns: 1fr; gap: 50px; }
            .about-badge { display: none; }
            .header { top: 10px; width: 95%; }
        }

        @media (max-width: 768px) {
            .nav-menu { display: none; }
            .mobile-menu-btn { display: block; }
            .hero h1 { font-size: 2.5rem; }
            .plan-card.highlight { transform: none; }
            .plans-grid { gap: 30px; }
            .header { height: 60px; }
        }
    </style>
</head>
<body>

    <!-- Glass Header -->
    <header class="header" id="header">
        <div class="navbar">
            <a href="#home" class="logo">
                <svg viewBox="0 0 24 24"><path d="M12 2C10.5 2 9 3 9 5V14H6V5C6 4.45 5.55 4 5 4C4.45 4 4 4.45 4 5V15C4 16.66 5.34 18 7 18H11V22H13V18H17C18.66 18 20 16.66 20 15V5C20 4.45 19.55 4 19 4C18.45 4 18 4.45 18 5V14H15V5C15 3 13.5 2 12 2Z"/></svg>
                <span><?php echo SITE_NAME; ?></span>
            </a>

            <ul class="nav-menu">
                <?php foreach ($nav_items as $l => $u): ?>
                    <li><a href="<?php echo $u; ?>" class="nav-link"><?php echo $l; ?></a></li>
                <?php endforeach; ?>
            </ul>

            <div class="nav-controls">
                <!-- Theme Switcher -->
                <div class="theme-selector">
                    <button class="theme-btn" id="themeBtn">
                        <span>🎨 Theme</span>
                    </button>
                    <div class="theme-options" id="themeOptions">
                        <div class="theme-option" onclick="setTheme('rudra')">
                            <span class="theme-dot" style="background:#1B263B;"></span> Rudra (Shiv)
                        </div>
                        <div class="theme-option" onclick="setTheme('kailash')">
                            <span class="theme-dot" style="background:#D35400;"></span> Kailash (Zen)
                        </div>
                        <div class="theme-option" onclick="setTheme('aranya')">
                            <span class="theme-dot" style="background:#2D6A4F;"></span> Aranya (Forest)
                        </div>
                    </div>
                </div>
                <button class="mobile-menu-btn"><div class="hamburger"></div></button>
            </div>
        </div>
    </header>

    <main>
        <!-- Cinematic Hero -->
        <section class="hero" id="home">
            <div class="particles-container" id="particles"></div>
            <div class="hero-overlay"></div>
            <div class="hero-bg"></div>
            <div class="hero-content">
                <h1><?php echo SITE_TAGLINE; ?></h1>
                <p>A disciplined environment tailored for high-focus learning and competitive success. Experience the synergy of silence and knowledge.</p>
                <div>
                    <a href="#membership" class="btn btn-primary">Join the Sanctuary</a>
                    <a href="#about" class="btn btn-secondary">Explore Vision</a>
                </div>
            </div>
        </section>

        <!-- Premium About -->
        <section class="section" id="about">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">The <span>Sanctuary</span></h2>
                    <p class="section-subtitle">More than a library. A discipline.</p>
                </div>
                <div class="about-grid">
                    <div class="about-content-box">
                        <span class="about-highlight">Our Philosophy</span>
                        <h3 style="font-size: 2rem; margin-bottom: 20px; color: var(--text-primary); font-family: var(--font-heading);">Where Focus Meets Stillness</h3>
                        <p class="about-text">
                            In a world of constant noise, <strong>Mahadev Reading Zone</strong> offers the ultimate luxury: <em>Silence</em>. Inspired by the stillness of the Himalayas, we have curated a space where your mind can find its center.
                        </p>
                        <p class="about-text">
                            We combine modern ergonomics with ancient principles of concentration. Whether you are preparing for UPSC, GPSC, or academic excellence, our environment adapts to your need for absolute focus.
                        </p>
                        <div class="about-stats">
                            <div class="stat-item">
                                <h3>500+</h3>
                                <p>Successful Students</p>
                            </div>
                            <div class="stat-item">
                                <h3>12hr</h3>
                                <p>Daily Focus Time</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?q=80&w=2073&auto=format&fit=crop" alt="Study Space">
                        <div class="about-badge">
                            <span>🏛️</span>
                            <p>Designed for Serious Aspirants</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Facilities -->
        <section class="section" id="facilities" style="background-color: var(--bg-body);">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Premium <span>Amenities</span></h2>
                    <p class="section-subtitle">Crafted for endurance and comfort.</p>
                </div>
                <div class="facilities-grid">
                    <?php foreach ($facilities as $f): ?>
                        <div class="facility-card">
                            <span class="f-icon"><?php echo $f['icon']; ?></span>
                            <h3><?php echo $f['title']; ?></h3>
                            <p><?php echo $f['desc']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Membership -->
        <section class="section" id="membership">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Membership <span>Plans</span></h2>
                    <p class="section-subtitle">Invest in your future today.</p>
                </div>
                <div class="plans-grid">
                    <?php foreach ($plans as $p): ?>
                        <div class="plan-card <?php echo $p['highlight'] ? 'highlight' : ''; ?>">
                            <?php if($p['highlight']): ?><span class="plan-tag">Most Popular</span><?php endif; ?>
                            <h3><?php echo $p['name']; ?></h3>
                            <div class="plan-price">
                                <?php echo $p['price']; ?><span><?php echo $p['period']; ?></span>
                            </div>
                            <ul class="plan-features">
                                <?php foreach ($p['features'] as $ft): ?>
                                    <li><?php echo $ft; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="#contact" class="btn btn-plan">Choose Plan</a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section class="section" id="contact">
            <div class="container">
                <div class="contact-grid">
                    <div class="contact-info">
                        <h3>Start Your Journey</h3>
                        <p style="margin-bottom: 40px; color: var(--text-secondary);">Visit us today to experience the atmosphere of success.</p>
                        
                        <div class="info-row">
                            <div class="info-icon">📍</div>
                            <div>
                                <h4 style="margin-bottom: 5px;">Address</h4>
                                <p style="color: var(--text-secondary);"><?php echo LOCATION; ?></p>
                            </div>
                        </div>
                        
                        <div class="info-row">
                            <div class="info-icon">📞</div>
                            <div>
                                <h4 style="margin-bottom: 5px;">Phone</h4>
                                <p style="color: var(--text-secondary);"><?php echo CONTACT_PHONE; ?></p>
                            </div>
                        </div>

                        <div class="info-row">
                            <div class="info-icon">✉️</div>
                            <div>
                                <h4 style="margin-bottom: 5px;">Email</h4>
                                <p style="color: var(--text-secondary);"><?php echo CONTACT_EMAIL; ?></p>
                            </div>
                        </div>

                        <a href="https://wa.me/919876543210" class="btn" style="background: var(--accent-secondary); color: #fff; margin-top: 20px; text-align: center; display: block; border: none;">Chat on WhatsApp</a>
                    </div>
                    <div class="map-box">
                        <!-- Placeholder for real map -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.497262629853!2d72.6369!3d23.2156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDEyJzU2LjIiTiA3MsKwMzgnMTIuOCJF!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Glass Footer -->
    <footer>
        <div class="container">
            <div class="footer-logo"><?php echo SITE_NAME; ?></div>
            <p class="footer-quote">"When the mind is still, the entire universe surrenders."</p>
            <div class="copyright">
                <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // --- THEME SWITCHER LOGIC ---
        const themeBtn = document.getElementById('themeBtn');
        const themeOptions = document.getElementById('themeOptions');
        
        themeBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            themeOptions.classList.toggle('active');
        });

        document.addEventListener('click', (e) => {
            if (!themeBtn.contains(e.target)) themeOptions.classList.remove('active');
        });

        function setTheme(themeName) {
            if(themeName === 'rudra') {
                document.documentElement.removeAttribute('data-theme');
            } else {
                document.documentElement.setAttribute('data-theme', themeName);
            }
            // Update Particles Color after transition
            setTimeout(() => {
                const color = getComputedStyle(document.documentElement).getPropertyValue('--accent-secondary').trim();
                initParticles(color);
            }, 100);
        }

        // --- PARTICLES LOGIC ---
        const particlesContainer = document.getElementById('particles');
        
        function initParticles(color) {
            particlesContainer.innerHTML = '';
            for(let i=0; i<35; i++) {
                const p = document.createElement('div');
                const size = Math.random() * 4 + 2;
                p.style.width = size + 'px';
                p.style.height = size + 'px';
                p.style.background = color;
                p.style.position = 'absolute';
                p.style.left = Math.random() * 100 + '%';
                p.style.top = Math.random() * 100 + '%';
                p.style.opacity = Math.random() * 0.4 + 0.1;
                p.style.borderRadius = '50%';
                
                // Simple animation
                const duration = Math.random() * 20 + 15;
                const delay = Math.random() * 5;
                p.style.animation = `float ${duration}s ${delay}s infinite linear`;
                
                particlesContainer.appendChild(p);
            }
        }
        
        // CSS Animation for Particles
        const styleSheet = document.createElement("style");
        styleSheet.innerText = `
            @keyframes float {
                0% { transform: translateY(0) translateX(0); opacity: 0; }
                50% { opacity: 0.5; }
                100% { transform: translateY(-120px) translateX(30px); opacity: 0; }
            }
        `;
        document.head.appendChild(styleSheet);

        // Init Default Particles (Bronze for Rudra)
        initParticles('#C19A6B');

        // --- SCROLL HEADER ---
        window.addEventListener('scroll', () => {
            const h = document.getElementById('header');
            window.scrollY > 50 ? h.classList.add('scrolled') : h.classList.remove('scrolled');
        });
        
        // --- MOBILE MENU ---
        const mobileBtn = document.querySelector('.mobile-menu-btn');
        const navMenu = document.querySelector('.nav-menu');
        
        mobileBtn.addEventListener('click', () => {
            if(navMenu.style.display === 'flex') {
                navMenu.style.display = 'none';
            } else {
                navMenu.style.display = 'flex';
                navMenu.style.position = 'absolute';
                navMenu.style.top = '80px';
                navMenu.style.right = '20px';
                navMenu.style.background = 'var(--bg-card)';
                navMenu.style.flexDirection = 'column';
                navMenu.style.padding = '30px';
                navMenu.style.borderRadius = '15px';
                navMenu.style.boxShadow = 'var(--shadow-lg)';
                navMenu.style.width = '250px';
                navMenu.style.zIndex = '1002';
            }
        });
    </script>
</body>
</html>