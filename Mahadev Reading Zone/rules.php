<?php 
$pageTitle = "Code of Conduct"; 
include('includes/header.php'); 
?>

<style>
    /* --- 1. TIMELINE CONTAINER --- */
    .constitution-section {
        background-color: #fff;
        overflow-x: hidden; /* Prevents horizontal scroll on mobile animations */
    }

    .timeline {
        position: relative;
        max-width: 1000px;
        margin: 0 auto;
        padding: 40px 0;
    }

    /* --- 2. THE PEN LINE (Thin & Sharp) --- */
    .timeline::after {
        content: '';
        position: absolute;
        width: 2px; /* The "Pen Line" width */
        background-color: var(--trishul-bronze);
        top: 0;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%); /* Perfect Center */
        z-index: 0;
    }

    /* --- 3. THE ITEM ROW --- */
    .rule-row {
        position: relative;
        width: 100%;
        margin-bottom: 40px;
        clear: both;
    }
    
    /* Clearfix for floats */
    .rule-row::after { content: ""; display: table; clear: both; }

    /* --- 4. THE CONTENT BOXES --- */
    .t-content {
        width: 45%; /* Leaves 10% gap in middle */
        padding: 30px;
        background-color: var(--soft-white);
        border-radius: 12px;
        border-left: 4px solid var(--trishul-bronze);
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        position: relative;
        z-index: 1;
        transition: transform 0.4s ease, box-shadow 0.3s ease;
        opacity: 0; /* Hidden for animation */
    }

    /* Left Side Box */
    .left .t-content {
        float: left;
        text-align: right;
        border-left: none;
        border-right: 4px solid var(--trishul-bronze);
        transform: translateX(-50px); /* Start pos for animation */
    }

    /* Right Side Box */
    .right .t-content {
        float: right;
        text-align: left;
        transform: translateX(50px); /* Start pos for animation */
    }

    /* Hover Effect */
    .t-content:hover {
        transform: translateY(-5px) !important; /* !important to override animation end state slightly */
        background-color: #fff;
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }

    /* --- 5. THE CENTER DOTS (Based on your image) --- */
    .dot {
        position: absolute;
        top: 30px; /* Align with top text */
        left: 50%;
        transform: translateX(-50%); /* Dead Center */
        width: 20px;
        height: 20px;
        background-color: var(--trishul-bronze); /* Gold Fill */
        border: 4px solid var(--shiv-blue); /* Dark Blue Border */
        border-radius: 50%;
        z-index: 2;
        box-shadow: 0 0 0 4px #fff; /* White ring to separate from line */
        transition: all 0.5s ease;
    }

    /* Active Animation State */
    .rule-row.active .t-content {
        opacity: 1;
        transform: translateX(0);
    }

    .rule-row.active .dot {
        transform: translateX(-50%) scale(1.2);
        box-shadow: 0 0 15px var(--trishul-bronze);
    }

    /* Typography */
    .t-content h3 { margin: 0 0 10px; color: var(--shiv-blue); font-size: 1.4rem; font-family: 'Cinzel', serif; }
    .t-content p { margin: 0; color: #666; line-height: 1.6; }
    .rule-badge {
        display: inline-block;
        background: var(--shiv-blue);
        color: #fff;
        font-size: 0.7rem;
        padding: 3px 8px;
        border-radius: 4px;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* --- 6. MOBILE RESPONSIVENESS (The Fix) --- */
    @media screen and (max-width: 768px) {
        /* Move Line to Left */
        .timeline::after {
            left: 20px;
            transform: none;
        }

        /* Move Dots to Left */
        .dot {
            left: 20px;
            transform: translateX(-50%);
        }
        
        /* Reset Float & Width for all boxes */
        .t-content {
            width: 85%; /* Make card wide */
            float: right; /* Push to right of line */
            margin-left: 15%; /* Space from line */
            text-align: left !important; /* Force left align text */
            border-right: none !important;
            border-left: 4px solid var(--trishul-bronze) !important;
        }

        /* Adjust Animations for Mobile (Slide Up instead of Sideways) */
        .left .t-content, .right .t-content {
            transform: translateY(30px);
        }
        
        .rule-row.active .t-content {
            transform: translateY(0);
        }
    }
</style>

<section class="page-header">
    <div class="container">
        <h1>Library Rules</h1>
        <div class="breadcrumbs"><a href="index.php">Home</a> <span>/</span> Rules</div>
    </div>
</section>

<section class="section-padding constitution-section">
    <div class="container">
        
        <div class="section-header-center">
            <h2 class="section-title">Strictly Enforced</h2>
            <p class="section-subtitle">Discipline is the bridge between goals and accomplishment.</p>
        </div>

        <div class="timeline">
            
            <div class="rule-row left">
                <div class="dot"></div>
                <div class="t-content">
                    <span class="rule-badge">Rule 01</span>
                    <h3>The Golden Rule of Silence</h3>
                    <p>Inside the reading hall, silence is absolute. No phone calls, no whispering, no group studies. Step outside for any conversation.</p>
                </div>
            </div>

            <div class="rule-row right">
                <div class="dot"></div>
                <div class="t-content">
                    <span class="rule-badge">Rule 02</span>
                    <h3>Digital Discipline</h3>
                    <p>All mobile phones must be on Silent Mode (not vibration). Keypad tones must be off. Headphones are mandatory for video lectures.</p>
                </div>
            </div>

            <div class="rule-row left">
                <div class="dot"></div>
                <div class="t-content">
                    <span class="rule-badge">Rule 03</span>
                    <h3>Seat Sanctity</h3>
                    <p>Do not hoard seats. If you are absent for more than 3 days without notice, your reserved seat may be released to the next aspirant.</p>
                </div>
            </div>

            <div class="rule-row right">
                <div class="dot"></div>
                <div class="t-content">
                    <span class="rule-badge">Rule 04</span>
                    <h3>Cleanliness Protocol</h3>
                    <p>Eat only in the designated cafeteria area. No food is allowed at the desks to prevent pests. Water bottles must be closed tightly.</p>
                </div>
            </div>

            <div class="rule-row left">
                <div class="dot"></div>
                <div class="t-content">
                    <span class="rule-badge">Rule 05</span>
                    <h3>Mutual Respect</h3>
                    <p>Respect the staff and fellow aspirants. Any aggressive behavior or harassment will result in an immediate and permanent ban.</p>
                </div>
            </div>

            <div class="rule-row right">
                <div class="dot"></div>
                <div class="t-content">
                    <span class="rule-badge">Rule 06</span>
                    <h3>Power Usage</h3>
                    <p>Charging points are for laptops and phones only. Heavy appliances like heaters or kettles are strictly prohibited to ensure safety.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const items = document.querySelectorAll('.rule-row');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, {
            threshold: 0.2 // Trigger when 20% of the item is visible
        });

        items.forEach(item => {
            observer.observe(item);
        });
    });
</script>

<?php include('includes/footer.php'); ?>