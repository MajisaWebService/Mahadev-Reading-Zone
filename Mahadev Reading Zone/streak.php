<?php 
$pageTitle = "Consistency Tracker"; 
include('includes/header.php'); 
?>

<section class="page-header">
    <div class="container">
        <h1>The Path of Discipline</h1>
        <div class="breadcrumbs"><a href="index.php">Home</a> <span>/</span> Streak</div>
    </div>
</section>

<section class="section-padding" style="background-color: #f4f4f8;">
    <div class="container">
        
        <div class="streak-layout">
            
            <div class="streak-main">
                <div class="fire-animation">
                    <span id="fireIcon">🔥</span>
                </div>
                
                <div class="streak-count">
                    <span id="streakNumber">0</span>
                    <span class="label">Day Streak</span>
                </div>

                <p id="streakMsg" class="streak-msg">Start your journey today.</p>

                <button id="checkInBtn" class="btn btn-primary full-width" onclick="markAttendance()">
                    Mark Attendance (Check-In)
                </button>
                <p class="reset-note">Miss one day, and the fire goes out.</p>
            </div>

            <div class="streak-history">
                <h3>This Month's Log</h3>
                <div class="calendar-grid" id="calendarGrid">
                    </div>
                
                <div class="stats-row">
                    <div>
                        <strong>Total Days</strong>
                        <span id="totalCheckins">0</span>
                    </div>
                    <div>
                        <strong>Best Streak</strong>
                        <span id="bestStreak">0</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    const STORAGE_KEY = 'mahadev_streak_dates';
    const todayStr = new Date().toLocaleDateString('en-CA'); // YYYY-MM-DD format

    function getHistory() {
        return JSON.parse(localStorage.getItem(STORAGE_KEY)) || [];
    }

    function calculateStreak(history) {
        if (history.length === 0) return 0;
        
        let sorted = history.sort((a, b) => new Date(b) - new Date(a));
        
        let currentStreak = 0;
        let checkDate = new Date();
        
        const dateStr = checkDate.toLocaleDateString('en-CA');
        if (!sorted.includes(dateStr)) {
            checkDate.setDate(checkDate.getDate() - 1);
            const yesterdayStr = checkDate.toLocaleDateString('en-CA');
            if (!sorted.includes(yesterdayStr)) {
                return 0; 
            }
        }

        checkDate = new Date();
        if (!sorted.includes(new Date().toLocaleDateString('en-CA'))) {
             checkDate.setDate(checkDate.getDate() - 1);
        }

        for (let i = 0; i < sorted.length; i++) {
            const historyDate = sorted[i]; 
            const expectedDate = checkDate.toLocaleDateString('en-CA');

            if (historyDate === expectedDate) {
                currentStreak++;
                checkDate.setDate(checkDate.getDate() - 1); 
            } else {
                break; 
            }
        }
        return currentStreak;
    }

    function renderUI() {
        const history = getHistory();
        const streak = calculateStreak(history);
        const btn = document.getElementById('checkInBtn');
        const msg = document.getElementById('streakMsg');

        document.getElementById('streakNumber').innerText = streak;
        document.getElementById('totalCheckins').innerText = history.length;
        document.getElementById('bestStreak').innerText = Math.max(streak, parseInt(localStorage.getItem('best_streak') || 0));

        if (history.includes(todayStr)) {
            btn.innerText = "Attended Today ✅";
            btn.classList.add('btn-disabled');
            document.getElementById('fireIcon').style.filter = "grayscale(0%)";
            msg.innerText = "Great job! Keep the fire burning.";
        } else {
            btn.innerText = "Mark Attendance (Check-In)";
            btn.classList.remove('btn-disabled');
            document.getElementById('fireIcon').style.filter = streak > 0 ? "grayscale(0%)" : "grayscale(100%)";
            msg.innerText = streak > 0 ? "Don't break the chain!" : "Start your journey today.";
        }

        renderCalendar(history);
    }

    function markAttendance() {
        let history = getHistory();
        if (!history.includes(todayStr)) {
            history.push(todayStr);
            localStorage.setItem(STORAGE_KEY, JSON.stringify(history));
            
            alert("Attendance Marked! The fire burns brighter.");
            
            const current = calculateStreak(history);
            const best = parseInt(localStorage.getItem('best_streak') || 0);
            if (current > best) localStorage.setItem('best_streak', current);
            
            renderUI();
        }
    }

    function renderCalendar(history) {
        const grid = document.getElementById('calendarGrid');
        grid.innerHTML = '';
        
        for (let i = 27; i >= 0; i--) {
            const d = new Date();
            d.setDate(d.getDate() - i);
            const dStr = d.toLocaleDateString('en-CA');
            const dayNum = d.getDate();

            const div = document.createElement('div');
            div.className = 'cal-day';
            div.innerText = dayNum;

            if (history.includes(dStr)) {
                div.classList.add('active');
            }
            
            if (dStr === todayStr) {
                div.style.border = "2px solid #fff";
            }

            grid.appendChild(div);
        }
    }

    // Init
    renderUI();
</script>

<?php include('includes/footer.php'); ?>