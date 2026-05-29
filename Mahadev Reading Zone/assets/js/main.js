/* ==========================================================================
   1. MOBILE MENU TOGGLE (With Click Outside Fix)
   ========================================================================== */
const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');
const links = document.querySelectorAll('.nav-links li');
const body = document.body;

if (hamburger) {
    hamburger.addEventListener('click', (e) => {
        e.stopPropagation(); 
        toggleMenu();
    });
}

function toggleMenu() {
    navLinks.classList.toggle('active');
    body.classList.toggle('menu-open'); 
    const bars = document.querySelectorAll('.bar');
    bars.forEach(bar => bar.classList.toggle('active'));
}

function closeMenu() {
    if (navLinks) navLinks.classList.remove('active');
    if (body) body.classList.remove('menu-open');
    const bars = document.querySelectorAll('.bar');
    bars.forEach(bar => bar.classList.remove('active'));
}

links.forEach(link => {
    link.addEventListener('click', closeMenu);
});

document.addEventListener('click', (e) => {
    if (navLinks && navLinks.classList.contains('active') && 
        !navLinks.contains(e.target) && 
        !hamburger.contains(e.target)) {
        closeMenu();
    }
});


/* ==========================================================================
   2. STICKY HEADER EFFECT
   ========================================================================== */
window.addEventListener('scroll', () => {
    const header = document.querySelector('header');
    if (header) {
        if (window.scrollY > 100) {
            header.style.boxShadow = "0 5px 20px rgba(0,0,0,0.1)";
            header.style.height = "60px";
        } else {
            header.style.boxShadow = "0 2px 15px rgba(0,0,0,0.05)";
            header.style.height = "70px";
        }
    }
});


/* ==========================================================================
   3. SMOOTH SCROLL FOR ANCHOR LINKS
   ========================================================================== */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        
        const target = document.querySelector(targetId);
        if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth' });
        }
    });
});


/* ==========================================================================
   4. LIGHTBOX FUNCTIONS
   ========================================================================== */
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');

window.openLightbox = function(element) {
    if (lightbox && lightboxImg) {
        const imgSrc = element.querySelector('img').src;
        lightboxImg.src = imgSrc;
        lightbox.style.display = 'flex';
    }
};

window.closeLightbox = function() {
    if (lightbox) {
        lightbox.style.display = 'none';
    }
};

if (lightbox) {
    lightbox.addEventListener('click', (e) => {
        if(e.target === lightbox) {
            closeLightbox();
        }
    });
}


/* ==========================================================================
   5. CONTACT FORM HANDLING
   ========================================================================== */
const contactForm = document.getElementById('contactForm');
const formResponse = document.getElementById('formResponse');

if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
        e.preventDefault();
        if(formResponse) formResponse.textContent = 'Sending...';
        const formData = new FormData(contactForm);

        fetch('process-contact.php', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if(formResponse) formResponse.textContent = data.message;
            if (data.status === 'success') {
                contactForm.reset();
                if (data.whatsapp) {
                    window.open(data.whatsapp, '_blank');
                }
            }
        })
        .catch(() => {
            if(formResponse) formResponse.textContent = 'Something went wrong. Please try again.';
        });
    });
}


/* ==========================================================================
   6. SCROLL REVEAL ANIMATIONS
   ========================================================================== */
const revealElements = document.querySelectorAll('.reveal');

if (revealElements.length > 0) {
    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15,
        rootMargin: "0px 0px -50px 0px"
    });

    revealElements.forEach(el => {
        revealObserver.observe(el);
    });
}


/* ==========================================================================
   7. STUDY FOCUS TRACKER LOGIC (REFRESH PROOF)
   ========================================================================== */
document.addEventListener("DOMContentLoaded", () => {
    // Safety Check
    const trackerContainer = document.querySelector('.tracker-layout');
    const circle = document.querySelector('.progress-ring__circle');
    
    if (!trackerContainer || !circle) return;

    // --- VARIABLES ---
    let totalDuration = 30 * 60; // Seconds (Default 30m)
    let timeLeft = totalDuration;
    let timerInterval = null;
    let isRunning = false;

    // --- SVG SETUP ---
    const radius = circle.r.baseVal.value;
    const circumference = radius * 2 * Math.PI;
    circle.style.strokeDasharray = `${circumference} ${circumference}`;
    circle.style.strokeDashoffset = circumference;

    // --- DISPLAY FUNCTION ---
    function updateDisplay() {
        const m = Math.floor(timeLeft / 60);
        const s = timeLeft % 60;
        
        const displayM = m < 10 ? "0" + m : m;
        const displayS = s < 10 ? "0" + s : s;
        
        const displayEl = document.getElementById('timeDisplay');
        if(displayEl) displayEl.innerText = `${displayM}:${displayS}`;
        
        // Update Circle
        const percent = ((totalDuration - timeLeft) / totalDuration);
        const offset = percent * circumference;
        circle.style.strokeDashoffset = offset;
    }

    // --- PERSISTENCE HELPERS (SAVE/LOAD) ---
    function saveState(status) {
        // Status: 'running', 'paused', 'stopped'
        localStorage.setItem('timer_status', status);
        localStorage.setItem('timer_total_duration', totalDuration);
        
        if (status === 'running') {
            // If running, we save the TARGET TIMESTAMP (When it will end)
            // This handles page refreshes accurately
            const targetTime = Date.now() + (timeLeft * 1000);
            localStorage.setItem('timer_target_time', targetTime);
        } else if (status === 'paused') {
            // If paused, we just save how much time was left
            localStorage.setItem('timer_remaining', timeLeft);
        }
    }

    function loadState() {
        const status = localStorage.getItem('timer_status');
        const savedTotal = localStorage.getItem('timer_total_duration');
        
        if (!status) return; // No saved state

        if (savedTotal) {
            totalDuration = parseInt(savedTotal);
            // Update UI label
            updateLabel(totalDuration / 60);
        }

        if (status === 'running') {
            const targetTime = parseInt(localStorage.getItem('timer_target_time'));
            const now = Date.now();
            const secondsRemaining = Math.round((targetTime - now) / 1000);

            if (secondsRemaining > 0) {
                timeLeft = secondsRemaining;
                window.startTimer(); // Auto-resume
            } else {
                // Time finished while page was closed
                timeLeft = 0;
                updateDisplay();
                // Optional: Alert user or just reset
                window.resetTimer(); 
            }
        } else if (status === 'paused') {
            const savedRemaining = localStorage.getItem('timer_remaining');
            if (savedRemaining) {
                timeLeft = parseInt(savedRemaining);
                updateDisplay();
                // Don't start, just update display
            }
        }
    }

    // --- GLOBAL CONTROLS ---

    window.startTimer = function() {
        if (timerInterval) return; // Already running
        
        isRunning = true;
        
        // Save state immediately as running
        saveState('running');

        timerInterval = setInterval(() => {
            // Recalculate based on target time to prevent drift
            // But for simple UI, decrementing is fine provided we re-sync on refresh
            timeLeft--;
            updateDisplay();

            if (timeLeft <= 0) {
                clearInterval(timerInterval);
                timerInterval = null;
                isRunning = false;
                
                const bell = document.getElementById('bellSound');
                if(bell) bell.play();
                
                alert("Session Complete! Great focus.");
                saveSession(Math.round(totalDuration / 60)); // Save history
                
                // Clear persistence
                localStorage.removeItem('timer_status');
                localStorage.removeItem('timer_target_time');
                
                // Reset logic
                window.resetTimer();
            }
        }, 1000);
    };

    window.pauseTimer = function() {
        clearInterval(timerInterval);
        timerInterval = null;
        isRunning = false;
        saveState('paused'); // Save paused state
    };

    window.resetTimer = function() {
        window.pauseTimer();
        
        // Clear persistence
        localStorage.removeItem('timer_status');
        localStorage.removeItem('timer_target_time');
        localStorage.removeItem('timer_remaining');
        
        // Default back to totalDuration (or default 30m if completely reset)
        timeLeft = totalDuration;
        updateDisplay();
    };

    // --- MODE SELECTION ---
    window.setMode = function(minutes) {
        // Stop current timer
        window.pauseTimer();
        
        totalDuration = minutes * 60;
        timeLeft = totalDuration;
        
        updateLabel(minutes);
        
        // Clear old persistence to avoid conflicts
        localStorage.removeItem('timer_status');
        localStorage.removeItem('timer_target_time');
        localStorage.removeItem('timer_remaining');

        updateDisplay();
        
        // Visual Active State
        document.querySelectorAll('.mode-btn').forEach(btn => btn.classList.remove('active'));
        if(event && event.target) event.target.classList.add('active');
    };

    function updateLabel(minutes) {
        let label = Math.round(minutes) + " MINUTES FOCUS";
        if(minutes >= 60) {
            let hours = minutes / 60;
            label = parseFloat(hours.toFixed(1)) + (hours === 1 ? " HOUR" : " HOURS") + " FOCUS";
        }
        document.getElementById('modeLabel').innerText = label;
    }

    // --- MANUAL MODE ---
    window.setManualMode = function() {
        let input = prompt("Enter study duration in minutes:", "90");
        if (input != null && input > 0) {
            window.setMode(parseInt(input));
            document.getElementById('modeLabel').innerText = "CUSTOM (" + input + "m)";
        }
    };

    // --- HISTORY LOGIC ---
    function saveSession(minsEarned) {
        let sessions = parseInt(localStorage.getItem('study_sessions') || 0) + 1;
        let minutes = parseInt(localStorage.getItem('study_minutes') || 0) + minsEarned;
        localStorage.setItem('study_sessions', sessions);
        localStorage.setItem('study_minutes', minutes);

        let log = JSON.parse(localStorage.getItem('study_log') || '[]');
        log.unshift({
            minutes: minsEarned,
            time: new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })
        });
        if (log.length > 5) log.pop();
        localStorage.setItem('study_log', JSON.stringify(log));

        loadStats();
    }

    function loadStats() {
        const totalSessionsEl = document.getElementById('totalSessions');
        const totalMinutesEl = document.getElementById('totalMinutes');
        
        if(totalSessionsEl) totalSessionsEl.innerText = localStorage.getItem('study_sessions') || 0;
        if(totalMinutesEl) totalMinutesEl.innerText = localStorage.getItem('study_minutes') || 0;

        const log = JSON.parse(localStorage.getItem('study_log') || '[]');
        const logContainer = document.getElementById('sessionLog');
        if(!logContainer) return;

        logContainer.innerHTML = '';
        if (log.length === 0) {
            logContainer.innerHTML = '<li class="empty-msg">No sessions today.</li>';
        } else {
            log.forEach(item => {
                logContainer.innerHTML += `<li><span>${item.time}</span> <strong>${item.minutes} min Focus</strong></li>`;
            });
        }
    }

    window.clearHistory = function() {
        if(confirm("Are you sure you want to clear your study history?")) {
            localStorage.removeItem('study_sessions');
            localStorage.removeItem('study_minutes');
            localStorage.removeItem('study_log');
            loadStats();
        }
    };

    // --- INITIALIZE ---
    updateDisplay();
    loadStats();
    loadState(); // <--- THIS IS THE MAGIC LINE that restores timer on refresh
});