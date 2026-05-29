<?php 
$pageTitle = "Focus Tracker"; 
include('includes/header.php'); 
?>

<section class="page-header">
    <div class="container">
        <h1>Study Focus</h1>
        <div class="breadcrumbs"><a href="index.php">Home</a> <span>/</span> Focus Tracker</div>
    </div>
</section>

<section class="section-padding" style="background-color: var(--shiv-blue); color: #fff;">
    <div class="container">
        <div class="tracker-layout">
            
            <div class="timer-container">
                <div class="timer-circle">
                    <svg class="progress-ring" width="300" height="300">
                        <circle class="progress-ring__circle" stroke="var(--trishul-bronze)" stroke-width="8" fill="transparent" r="140" cx="150" cy="150"/>
                    </svg>
                    <div class="time-display" id="timeDisplay">30:00</div>
                    <div class="mode-label" id="modeLabel">Session Focus</div>
                </div>

                <div class="timer-controls">
                    <button class="btn-control" onclick="startTimer()">▶ Start</button>
                    <button class="btn-control" onclick="pauseTimer()">⏸ Pause</button>
                    <button class="btn-control" onclick="resetTimer()">↺ Reset</button>
                </div>

                <div class="timer-modes" style="display: flex; gap: 10px; flex-wrap: wrap; justify-content: center;">
                    <button class="mode-btn active" onclick="setMode(30)">30m</button>
                    <button class="mode-btn" onclick="setMode(45)">45m</button>
                    <button class="mode-btn" onclick="setMode(60)">60m</button>
                    <button class="mode-btn" onclick="setMode(120)">2 Hrs</button>
                    <button class="mode-btn" onclick="setMode(180)">3 Hrs</button>
                    <button class="mode-btn" style="border-color: var(--trishul-bronze);" onclick="setManualMode()">Manual</button>
                </div>
            </div>

            <div class="stats-panel">
                <h3>Today's Progress</h3>
                
                <div class="stat-grid">
                    <div class="stat-box">
                        <span class="stat-val" id="totalSessions">0</span>
                        <span class="stat-label">Sessions</span>
                    </div>
                    <div class="stat-box">
                        <span class="stat-val" id="totalMinutes">0</span>
                        <span class="stat-label">Minutes</span>
                    </div>
                </div>

                <hr style="border-color: rgba(255,255,255,0.1); margin: 30px 0;">

                <h4>Session Log (Local)</h4>
                <ul class="session-log" id="sessionLog">
                    <li class="empty-msg">No sessions completed yet today.</li>
                </ul>
                
                <button class="btn btn-secondary full-width" style="margin-top: 20px;" onclick="clearHistory()">Clear History</button>
            </div>

        </div>
    </div>
</section>

<audio id="bellSound" src="https://actions.google.com/sounds/v1/alarms/bugle_tune.ogg"></audio>

<script src="assets/js/main.js"></script>
<?php include('includes/footer.php'); ?>