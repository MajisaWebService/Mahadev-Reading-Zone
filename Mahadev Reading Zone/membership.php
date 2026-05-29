<?php 
$pageTitle = "Plans & Pricing"; 
include('includes/header.php'); 
?>

<style>
    @media (min-width: 1200px) {
        .monthly-grid {
            grid-template-columns: repeat(4, 1fr) !important;
        }
    }
    .saver-tag {
        background-color: #27ae60;
        color: white;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 0.8rem;
        font-weight: bold;
        display: inline-block;
        margin-bottom: 10px;
    }
    
    /* Small tweak to make facility cards compact on this page */
    .facility-list-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        margin-bottom: 60px;
    }
    .f-item {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        display: flex;
        align-items: center;
        gap: 15px;
        border-left: 4px solid var(--trishul-bronze);
        transition: transform 0.3s ease;
    }
    .f-item:hover { transform: translateY(-5px); }
    .f-icon { font-size: 1.5rem; }
    .f-text { font-weight: 700; color: var(--shiv-blue); text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px;}
</style>

<section class="page-header">
    <div class="container">
        <h1>Invest In Your Future</h1>
        <div class="breadcrumbs"><a href="index.php">Home</a> <span>/</span> Membership</div>
    </div>
</section>

<section class="section-padding" style="background-color: var(--soft-white); padding-bottom: 40px;">
    <div class="container">
        <div class="section-header-center">
            <h2 class="section-title">Premium Facilities</h2>
            <p class="section-subtitle">What makes your investment worth it.</p>
        </div>

        <div class="facility-list-grid">
            <div class="f-item">
                <span class="f-icon">❄️</span>
                <span class="f-text">Fully A.C. Hall</span>
            </div>
            <div class="f-item">
                <span class="f-icon">🪑</span>
                <span class="f-text">Comfortable Seating</span>
            </div>
            <div class="f-item">
                <span class="f-icon">📶</span>
                <span class="f-text">High Speed Wi-Fi</span>
            </div>
            <div class="f-item">
                <span class="f-icon">📹</span>
                <span class="f-text">CCTV Surveillance</span>
            </div>
            <div class="f-item">
                <span class="f-icon">💧</span>
                <span class="f-text">Purified Drinking Water</span>
            </div>
            <div class="f-item">
                <span class="f-icon">☕</span>
                <span class="f-text">Refreshment Facility</span>
            </div>
        </div>
    </div>
</section>

<section class="section-padding" style="padding-top: 0;">
    <div class="container">
        <div class="section-header-center">
            <h2 class="section-title">Monthly Plans</h2>
            <p class="section-subtitle">Flexible options designed for your schedule.</p>
        </div>

        <div class="pricing-grid monthly-grid">
            
            <div class="price-card featured">
                <div class="p-tag">Most Popular</div>
                <div class="p-header">
                    <h3>Reserved Seat</h3>
                    <div class="cost">₹1800<span>/mo</span></div>
                </div>
                <div class="p-body">
                    <ul>
                        <li><span class="tick">✔</span> <strong>Fixed Personal Seat</strong></li>
                        <li><span class="tick">✔</span> <strong>Personal Cabin Light</strong></li>
                        <li><span class="tick">✔</span> 24/7 Access</li>
                        <li><span class="tick">✔</span> High-Speed Wi-Fi</li>
                    </ul>
                    <a href="register.php?plan=reserved_1" class="btn btn-primary full-width">Join Now</a>
                </div>
            </div>

            <div class="price-card">
                <div class="p-header">
                    <h3>Non-Reserved</h3>
                    <div class="cost">₹1199<span>/mo</span></div>
                </div>
                <div class="p-body">
                    <ul>
                        <li><span class="tick">✔</span> <strong>Standard Seating</strong></li>
                        <li><span class="tick">✔</span> Any Available Spot</li>
                        <li><span class="tick">✔</span> Peaceful Environment</li>
                        <li><span class="tick">✔</span> RO Water Access</li>
                    </ul>
                    <a href="register.php?plan=non_reserved_1" class="btn btn-secondary full-width">Join Now</a>
                </div>
            </div>

            <div class="price-card">
                <div class="p-header">
                    <h3>Night Owl</h3>
                    <div class="cost">₹999<span>/mo</span></div>
                </div>
                <div class="p-body">
                    <ul>
                        <li><span class="tick">✔</span> <strong>10:00 PM - 07:30 AM</strong></li>
                        <li><span class="tick">✔</span> Non-Reserved Seat</li>
                        <li><span class="tick">✔</span> Pin-Drop Silence</li>
                        <li><span class="tick">✔</span> Night Safety</li>
                    </ul>
                    <a href="register.php?plan=night" class="btn btn-secondary full-width">Join Now</a>
                </div>
            </div>

             <div class="price-card">
                <div class="p-header">
                    <h3>Half Day</h3>
                    <div class="cost">₹899<span>/mo</span></div>
                </div>
                <div class="p-body">
                    <ul>
                        <li><span class="tick">✔</span> <strong>Any 6 Hours Slot</strong></li>
                        <li><span class="tick">✔</span> Non-Reserved Seat</li>
                        <li><span class="tick">✔</span> Ideal for Part-timers</li>
                        <li><span class="tick">✔</span> High-Speed Wi-Fi</li>
                    </ul>
                    <a href="register.php?plan=half_day" class="btn btn-secondary full-width">Join Now</a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section-padding" style="background-color: var(--soft-white);">
    <div class="container">
        <div class="section-header-center">
            <h2 class="section-title">Long Term Saver Packs</h2>
            <p class="section-subtitle">Pay once, save big. (Reserved Seats Only)</p>
        </div>

        <div class="pricing-grid" style="max-width: 900px; margin: 0 auto;">
            
            <div class="price-card">
                <div class="p-header">
                    <h3>3 Months Package</h3>
                    <div class="cost">₹5000</div>
                    <div style="text-decoration: line-through; color: #999; font-size: 0.9rem;">was ₹5400</div>
                </div>
                <div class="p-body" style="text-align: center;">
                    <span class="saver-tag">YOU SAVE ₹400</span>
                    <ul style="margin-top: 15px;">
                        <li><span class="tick">✔</span> <strong>One-Time Payment</strong></li>
                        <li><span class="tick">✔</span> Fixed Personal Cabin</li>
                        <li><span class="tick">✔</span> Valid for 90 Days</li>
                    </ul>
                    <a href="register.php?plan=reserved_3" class="btn btn-primary full-width">Claim Offer</a>
                </div>
            </div>

            <div class="price-card featured">
                <div class="p-header">
                    <h3>6 Months Package</h3>
                    <div class="cost">₹10000</div>
                    <div style="text-decoration: line-through; color: #999; font-size: 0.9rem;">was ₹10800</div>
                </div>
                <div class="p-body" style="text-align: center;">
                    <span class="saver-tag">YOU SAVE ₹800</span>
                    <ul style="margin-top: 15px;">
                        <li><span class="tick">✔</span> <strong>One-Time Payment</strong></li>
                        <li><span class="tick">✔</span> Fixed Personal Cabin</li>
                        <li><span class="tick">✔</span> Valid for 180 Days</li>
                    </ul>
                    <a href="register.php?plan=reserved_6" class="btn btn-primary full-width">Claim Offer</a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="extra-costs">
            <h3>🧮 Fee Calculator</h3>
            <div style="margin-top: 20px;">
                <div class="form-group">
                    <label style="display:block; margin-bottom:10px; font-weight:bold; color:var(--shiv-blue);">Choose Plan</label>
                    <select id="calcPlan" onchange="calculateTotal()" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:4px;">
                        <option value="1800">Reserved Seat (₹1800/mo)</option>
                        <option value="1199">Non-Reserved (₹1199/mo)</option>
                        <option value="999">Night Only (₹999/mo)</option>
                        <option value="899">Half Day (₹899/mo)</option>
                    </select>
                </div>
                <div class="form-group" style="margin-top:20px;">
                    <label style="display:block; margin-bottom:10px; font-weight:bold; color:var(--shiv-blue);">Duration</label>
                    <select id="calcDuration" onchange="calculateTotal()" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:4px;">
                        <option value="1">1 Month</option>
                        <option value="3">3 Months (Saver Offer)</option>
                        <option value="6">6 Months (Super Saver)</option>
                    </select>
                </div>
                <div style="background:var(--soft-white); padding:20px; margin-top:30px; border-radius:8px; text-align:center;">
                    <span style="font-size:1.2rem; color:var(--shiv-blue);">Total Estimate: </span>
                    <strong id="displayTotal" style="font-size:1.5rem; color:var(--trishul-bronze);">₹1800</strong>
                    <div id="savingsMsg" style="color: green; font-size: 0.9rem; margin-top: 5px; display: none;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function calculateTotal() {
        const planPrice = parseInt(document.getElementById('calcPlan').value);
        const duration = parseInt(document.getElementById('calcDuration').value);
        let total = 0;
        let savings = 0;

        if (planPrice === 1800) {
            if (duration === 3) { total = 5000; savings = (1800 * 3) - 5000; } 
            else if (duration === 6) { total = 10000; savings = (1800 * 6) - 10000; } 
            else { total = planPrice * duration; }
        } else {
            total = planPrice * duration;
        }

        document.getElementById('displayTotal').innerText = "₹" + total;
        const saveMsg = document.getElementById('savingsMsg');
        if(savings > 0) {
            saveMsg.style.display = 'block';
            saveMsg.innerText = "🎉 You save ₹" + savings + " with this pack!";
        } else { saveMsg.style.display = 'none'; }
    }
</script>

<?php include('includes/footer.php'); ?>