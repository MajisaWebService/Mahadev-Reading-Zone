<?php 
$pageTitle = "New Admission"; 
include('includes/header.php'); 
?>

<style>
    .centered-form-wrapper {
        max-width: 500px;
        margin: 0 auto;
    }
</style>

<section class="page-header">
    <div class="container">
        <h1>Join The Zone</h1>
        <div class="breadcrumbs"><a href="index.php">Home</a> <span>/</span> Register</div>
    </div>
</section>

<section class="section-padding" style="background-color: var(--soft-white);">
    <div class="container">
        
        <div class="centered-form-wrapper">
            <div class="reg-form-container" style="background: #fff; padding: 40px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #eee;">
                <h3 class="form-title" style="text-align: center; display: block; margin-bottom: 30px; color: var(--shiv-blue); font-family: 'Cinzel', serif; font-size: 1.8rem;">Student Registration</h3>
                
                <form id="admissionForm">
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label style="display:block; margin-bottom:8px; font-weight:bold; color:var(--shiv-blue);">Full Name</label>
                        <input type="text" id="regName" placeholder="Enter your full name" style="width:100%; padding:12px; border:1px solid #ddd; border-radius:4px;" required>
                    </div>

                    <div class="form-group" style="margin-bottom: 20px;">
                        <label style="display:block; margin-bottom:8px; font-weight:bold; color:var(--shiv-blue);">Mobile Number</label>
                        <input type="tel" id="regPhone" placeholder="+91" style="width:100%; padding:12px; border:1px solid #ddd; border-radius:4px;" required>
                    </div>

                    <div class="form-group" style="margin-bottom: 20px;">
                        <label style="display:block; margin-bottom:8px; font-weight:bold; color:var(--shiv-blue);">Preparing For</label>
                        <input type="text" id="regExam" placeholder="e.g. UPSC, GPSC, CA" style="width:100%; padding:12px; border:1px solid #ddd; border-radius:4px;" required>
                    </div>

                    <div class="form-group" style="margin-bottom: 20px;">
                        <label style="display:block; margin-bottom:8px; font-weight:bold; color:var(--shiv-blue);">Select Plan</label>
                        <select id="regShift" style="width:100%; padding:12px; border:1px solid #ddd; border-radius:4px;">
                            <option value="reserved_1">Monthly Reserved Seat - ₹1800</option>
                            <option value="non_reserved_1">Monthly Non-Reserved Seat - ₹1199</option>
                            <option value="reserved_3">3 Month Reserved Seat (Offer) - ₹5000</option>
                            <option value="reserved_6">6 Month Reserved Seat (Offer) - ₹10000</option>
                            <option value="night">Only Night (10 PM - 7:30 AM) - ₹999</option>
                            <option value="half_day">Half Day (6 Hours) - ₹899</option>
                        </select>
                    </div>

                    <div class="form-group" style="margin-bottom: 30px;">
                        <label style="display:block; margin-bottom:8px; font-weight:bold; color:var(--shiv-blue);">Joining Date</label>
                        <input type="date" id="regDate" style="width:100%; padding:12px; border:1px solid #ddd; border-radius:4px;" required>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%; padding: 15px; font-size: 1.1rem;">
                        Register Now
                    </button>
                </form>
            </div>
        </div>

    </div>
</section>

<script>
    // --- 1. AUTO-SELECT LOGIC (Reads URL) ---
    document.addEventListener("DOMContentLoaded", function() {
        const urlParams = new URLSearchParams(window.location.search);
        const selectedPlan = urlParams.get('plan');

        if (selectedPlan) {
            const dropdown = document.getElementById('regShift');
            // Loop through options and select the one that matches the URL parameter
            for(let i=0; i<dropdown.options.length; i++) {
                if(dropdown.options[i].value === selectedPlan) {
                    dropdown.selectedIndex = i;
                    break;
                }
            }
        }
    });

    // --- 2. GOOGLE SHEETS / WHATSAPP SUBMISSION LOGIC ---
    document.getElementById('admissionForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Get readable text of the selected plan (e.g. "3 Month Reserved Seat - ₹5000")
        const shiftDropdown = document.getElementById('regShift');
        const selectedShiftText = shiftDropdown.options[shiftDropdown.selectedIndex].text;

        const name = document.getElementById('regName').value;
        const phone = document.getElementById('regPhone').value;
        const exam = document.getElementById('regExam').value;
        const date = document.getElementById('regDate').value;

        // WhatsApp Redirect Logic (Replace with Google Sheets if you prefer)
        const message = `*!! New Admission Request from website !!*%0A%0A` +
                        `*Name:* ${name}%0A` +
                        `*Phone:* ${phone}%0A` +
                        `*Exam:* ${exam}%0A` +
                        `*Selected Plan:* ${selectedShiftText}%0A` +
                        `*Joining Date:* ${date}%0A%0A` +
                        `-----------------------%0A` +
                        `*Mahadev Reading Zone*`;

        const whatsappUrl = `https://wa.me/<?php echo $whatsappNumber; ?>?text=${message}`;
        window.open(whatsappUrl, '_blank');
    });
</script>

<?php include('includes/footer.php'); ?>