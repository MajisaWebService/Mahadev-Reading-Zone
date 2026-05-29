<?php 
$pageTitle = "Exam Target"; 
include('includes/header.php'); 
?>

<section class="page-header">
    <div class="container">
        <h1>Mission Mode</h1>
        <div class="breadcrumbs"><a href="index.php">Home</a> <span>/</span> Target Tracker</div>
    </div>
</section>

<section class="section-padding" style="background-color: #f8f9fa;">
    <div class="container">
        
        <div class="target-layout">
            
            <div id="setupPanel" class="target-card">
                <h3>🎯 Set Your Target</h3>
                <p>Tell us your goal, and we will keep you on track.</p>
                
                <form id="targetForm" onsubmit="saveTarget(event)">
                    <div class="form-group">
                        <label>Exam Name</label>
                        <input type="text" id="examName" placeholder="e.g. UPSC CSE 2026" required>
                    </div>
                    <div class="form-group">
                        <label>Exam Date</label>
                        <input type="date" id="examDate" required>
                    </div>
                    <button type="submit" class="btn btn-primary full-width">Start Countdown</button>
                </form>
            </div>

            <div id="countdownPanel" class="target-card hidden">
                <div class="target-header">
                    <span class="sub-label">MISSION:</span>
                    <h2 id="dispExamName">UPSC 2026</h2>
                    <button onclick="resetTarget()" class="btn-reset" title="Reset Target">×</button>
                </div>

                <div class="timer-grid">
                    <div class="time-box">
                        <span id="d_days" class="t-val">00</span>
                        <span class="t-label">Days</span>
                    </div>
                    <div class="time-box">
                        <span id="d_hours" class="t-val">00</span>
                        <span class="t-label">Hours</span>
                    </div>
                    <div class="time-box">
                        <span id="d_mins" class="t-val">00</span>
                        <span class="t-label">Mins</span>
                    </div>
                    <div class="time-box">
                        <span id="d_secs" class="t-val">00</span>
                        <span class="t-label">Secs</span>
                    </div>
                </div>

                <div class="motivation-box">
                    <p id="quoteDisplay">"The pain of discipline is far less than the pain of regret."</p>
                </div>
            </div>

        </div>

    </div>
</section>

<script>
    // --- 1. DYNAMIC QUOTES LIBRARY ---
    const quotes = [
        "The pain of discipline is far less than the pain of regret.",
        "Your future is created by what you do today, not tomorrow.",
        "Work hard in silence, let your success be your noise.",
        "Don't count the days, make the days count.",
        "A goal without a timeline is just a dream. Stay focused!",
        "Every second you waste is a second someone else is using to beat you.",
        "Success is no accident. It is hard work, perseverance, and study."
    ];

    function changeQuote() {
        const randomIndex = Math.floor(Math.random() * quotes.length);
        document.getElementById("quoteDisplay").innerText = `"${quotes[randomIndex]}"`;
    }


    // --- 2. TIMER LOGIC ---
    let countdownInterval;

    document.addEventListener("DOMContentLoaded", () => {
        const savedExam = localStorage.getItem("myExamName");
        const savedDate = localStorage.getItem("myExamDate");

        if (savedExam && savedDate) {
            showCountdown(savedExam, savedDate);
        } else {
            document.getElementById("setupPanel").classList.remove("hidden");
        }
    });

    function saveTarget(e) {
        e.preventDefault();
        const name = document.getElementById("examName").value;
        const date = document.getElementById("examDate").value;

        // Validation: Date must be in the future
        const today = new Date();
        today.setHours(0,0,0,0);
        if (new Date(date) < today) {
            alert("Please select a future date!");
            return;
        }

        // Saving to Local Storage (This prevents reset on refresh)
        localStorage.setItem("myExamName", name);
        localStorage.setItem("myExamDate", date);

        showCountdown(name, date);
    }

    function showCountdown(name, dateStr) {
        document.getElementById("setupPanel").classList.add("hidden");
        document.getElementById("countdownPanel").classList.remove("hidden");
        document.getElementById("dispExamName").innerText = name;

        // Change the quote dynamically when the countdown loads
        changeQuote();

        // Target Date set to midnight of the selected day
        const targetDate = new Date(dateStr).setHours(23, 59, 59, 999);

        // Update every second
        countdownInterval = setInterval(() => {
            const now = new Date().getTime();
            const distance = targetDate - now;

            if (distance < 0) {
                clearInterval(countdownInterval);
                document.querySelector(".timer-grid").innerHTML = "<h3>EXAM DAY IS HERE! GOOD LUCK!</h3>";
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Adding .padStart(2, '0') so "5 seconds" looks like "05"
            document.getElementById("d_days").innerText = days.toString().padStart(2, '0');
            document.getElementById("d_hours").innerText = hours.toString().padStart(2, '0');
            document.getElementById("d_mins").innerText = minutes.toString().padStart(2, '0');
            document.getElementById("d_secs").innerText = seconds.toString().padStart(2, '0');

        }, 1000);
    }

    // --- 3. RESET FUNCTION ---
    function resetTarget() {
        if(confirm("Are you sure you want to reset your target exam?")) {
            clearInterval(countdownInterval);
            localStorage.removeItem("myExamName");
            localStorage.removeItem("myExamDate");
            
            // Reload page to show the form again
            location.reload();
        }
    }
</script>

<?php include('includes/footer.php'); ?>