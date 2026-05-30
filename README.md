# 🔱 Mahadev Reading Zone

> **Peace. Focus. Knowledge.**  
> A premium, highly disciplined study sanctuary designed to help aspirants achieve absolute focus and clear their goals (UPSC, GPSC, DySO, etc.).

---

## 🌟 Key Features

The **Mahadev Reading Zone** website is more than a standard landing page. It is a full-featured study companion packed with interactive, browser-persisted utilities designed to help serious students track their productivity and consistency.

### 1. ⏱️ Study Focus Pomodoro Timer (`focus-tracker.php`)
An interactive Pomodoro focus wheel designed to structure study sessions.
*   **Custom Sessions:** Choose between `30m`, `45m`, `60m`, `2 Hrs`, `3 Hrs`, or **Manual** custom configurations.
*   **Visual Ring Indicator:** A dynamic SVG progress ring that animates as the session goes on.
*   **Local Session Logging:** Tracks total sessions completed and minutes studied in the active day.
*   **Sound Notification:** Sounds a bugle alarm when the focus session ends to remind students to take a break.
*   **LocalStorage Persistence:** Keeps progress stats saved securely in the user's browser.

### 2. 🔥 Path of Discipline Consistency Tracker (`streak-edit.php`)
A visual daily attendance marker modeled after popular gaming and productivity habit-loop systems.
*   **Daily Check-In:** Students mark their attendance daily to keep their streak burning.
*   **Fire Animation:** Activates a bright, colorful fire emoji when a streak is active, turning grayscale if the streak is broken.
*   **Monthly Visual Log:** Generates a 28-day calendar grid tracking which days the student visited the reading zone.
*   **Streak Safeguards:** Automatically calculates if a day was missed and resets the fire streak if consecutive attendance is broken.

### 3. 🎯 Mission Mode Exam Target Tracker (`target.php`)
A customizable, highly focused exam countdown tracker to build urgency and discipline.
*   **Countdown Clock:** Down-to-the-second live countdown showing Days, Hours, Minutes, and Seconds remaining.
*   **Motivation Engine:** Renders dynamic motivational quotes randomly on load to keep spirits high.
*   **Persistent Countdown:** Uses `localStorage` to save the student's exam target (e.g., *GPSC Class 1-2 2026*) and date across browser reloads.

### 4. 💳 Flexible Membership Comparison (`membership.php` & `register.php`)
A premium layout displaying various membership tiers tailored to student schedules:
*   **Reserved Seat (₹1800/mo):** Personal fixed desk, personal cabin light, 24/7 unlimited access.
*   **Non-Reserved Seat (₹1199/mo):** Standard seating, any available spot, peaceful environment.
*   **Night Owl (₹999/mo):** 10:00 PM to 07:30 AM slot.
*   **Half Day (₹899/mo):** Flexible 6-hour slot.
*   **3 Months Saver (₹5000/Total):** Value package saving ₹400 instantly.

---

## 🛠️ Tech Stack & Architecture

*   **Front-End:** 
    *   **HTML5** (semantic structure)
    *   **CSS3** (custom HSL variables, fluid glassmorphism, responsive flex/grid layouts)
    *   **Vanilla JS** (interactive countdowns, SVGs, calendar render engines, local database simulation)
*   **Back-End:**
    *   **PHP** (modular architecture splitting layouts into reusable headers, footers, config files, and core pages)
*   **Persistence:** Browser-based `localStorage` (requiring no database server configuration for standard client usage).

---

## 📁 Repository Structure

```text
Mahadev Reading Zone/
├── Mahadev Reading Zone/         # Main Web Project Root
│   ├── index.php                 # Home Page
│   ├── about.php                 # About Us & Vision Page
│   ├── contact.php               # Reach Us Form
│   ├── gallery.php               # Photo Gallery Lightbox
│   ├── rules.php                 # Library Discipline Regulations
│   ├── membership.php            # Membership Comparison Table
│   ├── register.php              # Seat Booking & Registration
│   ├── focus-tracker.php         # Pomodoro Timer Tool
│   ├── streak.php                # Attendance / Streak Habit Tracker
│   ├── target.php                # Live Exam Countdown Clock
│   ├── includes/                 # Reusable PHP Layout Snippets
│   │   ├── config.php            # Global Variables (Phone, Title, etc.)
│   │   ├── header.php            # Core Navigation Bar & Stylesheet Links
│   │   └── footer.php            # Footer, Lightbox Logic, & Closing Tags
│   └── assets/                   # Client-side Static Files
│       ├── css/
│       │   └── style.css         # Main stylesheet (premium theme)
│       ├── js/
│       │   └── main.js           # Core JS & Timer functionalities
│       └── images/               # Gallery Assets & Logos
└── README.md                     # This Repository Documentation
```

---

## ⚙️ Quick Setup Guide

Since this is a **PHP project**, it requires a local web server with a PHP interpreter to run properly. Open static `.php` files in your browser directly will result in unrendered code. Below are the easiest ways to launch the site:

### Method A: Using the PHP Built-in Server (Fastest, No Install)

If you already have **PHP** installed on your system's Command Prompt/Terminal, follow these steps:

1.  Open your Terminal (or Command Prompt / PowerShell on Windows).
2.  Navigate to the project root directory:
    ```bash
    cd "Mahadev Reading Zone/Mahadev Reading Zone"
    ```
3.  Start the built-in development server:
    ```bash
    php -S localhost:8000
    ```
4.  Open your browser and navigate to: **[http://localhost:8000](http://localhost:8000)**

---

### Method B: Using XAMPP (Highly Recommended for Windows Users)

1.  **Download XAMPP** from [apachefriends.org](https://www.apachefriends.org/) and install it.
2.  **Move Project Files:**
    *   Copy the entire `Mahadev Reading Zone` folder.
    *   Paste it inside your XAMPP installation directory under: `C:\xampp\htdocs\`
3.  **Start Services:**
    *   Open the **XAMPP Control Panel**.
    *   Click **Start** next to the **Apache** module.
4.  **Launch Webpage:**
    *   Open your web browser.
    *   Navigate to: **`http://localhost/Mahadev Reading Zone/Mahadev Reading Zone/`**

---

### Method C: Using Visual Studio Code (Live Server Extension)

1.  Open VS Code and install the **PHP Server** extension by *brapanshin*.
2.  Open the folder `"Mahadev Reading Zone/Mahadev Reading Zone"` in VS Code.
3.  Right-click on `index.php` and select **PHP Server: Serve project**.
4.  It will automatically spin up a local port and launch your default browser.

---

## 🔱 Core Library Rules (Sanctuary Values)

To maintain absolute peace and focused study environment:
1.  **Silence is Mandatory:** Mobile phones must remain on silent. No group discussions inside the study hall.
2.  **Desk Care:** Keep desks clean. No debris or scrap papers.
3.  **Shoe Discipline:** Shoes must be kept outside the hall on the dedicated racks.
4.  **No Food inside Hall:** Designated zones are provided for breaks and refreshments.

---

## 👤 Contacts & Information

For queries or membership registrations:
*   **Location:** Ahmedabad, Gujarat
*   **Phone:** +91 90160 72082
*   **WhatsApp:** +91 90160 72082

---

*Mahadev Reading Zone - Inspired by the meditative energy of Lord Mahadev, shaping successful minds.*
