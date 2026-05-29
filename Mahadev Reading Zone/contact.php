<?php 
$pageTitle = "Visit Us"; 
include('includes/header.php'); 

// Set the WhatsApp number here (Country Code + Number, no spaces or +)
$whatsapp_no = "917435933573"; 
?>

<section class="page-header">
    <div class="container">
        <h1>A Unique Place To Achieve Your Goals</h1>
        <div class="breadcrumbs"><a href="index.php">Home</a> <span>/</span> Contact</div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="contact-layout">
            
            <div class="contact-details">
                <h3>Contact Information</h3>
                <p>We are located in the educational hub of Gandhinagar.</p>
                
                <div class="c-item">
                    <span class="icon">📍</span>
                    <p>3rd Floor, ACME House, Sector 6,<br>Gandhinagar, Gujarat - 382006</p>
                </div>

                <div class="c-item">
                    <span class="icon">📞</span>
                    <p><a href="tel:+917435933573">+91 74359 33573</a></p>
                </div>

                <div class="c-item">
                    <span class="icon">✉️</span>
                    <p><a href="mailto:jahanvibhanushali03@gmail.com">jahanvibhanushali03@gmail.com</a></p>
                </div>

                <div class="c-item">
                    <span class="icon">🕒</span>
                    <p>
                        <strong>Opening Hours:</strong><br>
                        Mon - Sun: 0:00 AM - 12:00 PM<br>
                        <span style="font-size: 0.85rem; opacity: 0.8;">(Open 24 hours)</span>
                    </p>
                </div>

                <div style="margin-top: 40px;">
                    <a href="https://www.google.com/maps/search/?api=1&query=Mahadev+Reading+Zone+Gandhinagar" 
                       target="_blank" 
                       class="btn btn-secondary">
                       Get Directions on Map ↗
                    </a>
                </div>
            </div>

            <div class="contact-form-area">
                <form id="contactForm">
                    <h3>Enquiry Form</h3>
                    
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" id="contactName" placeholder="Enter your name" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="tel" id="contactPhone" placeholder="+91" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Which exam are you preparing for?</label>
                        <input type="text" id="contactExam" placeholder="e.g. UPSC, GPSC, CA">
                    </div>
                    
                    <div class="form-group">
                        <label>Message</label>
                        <textarea id="contactMessage" rows="4" placeholder="How can we help you?" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary full-width">
                        <span style="margin-right: 8px;">📱</span> Send via WhatsApp
                    </button>
                </form>
            </div>
            
        </div>
    </div>
</section>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // 1. Get Values from Form
        const name = document.getElementById('contactName').value;
        const phone = document.getElementById('contactPhone').value;
        const exam = document.getElementById('contactExam').value || 'Not specified';
        const message = document.getElementById('contactMessage').value;

        // 2. Format the WhatsApp Message
        const whatsappMsg = `*!! 📝 New General Enquiry from website's contact page  !!*%0A%0A` +
                            `*Name:* ${name}%0A` +
                            `*Phone:* ${phone}%0A` +
                            `*Exam:* ${exam}%0A%0A` +
                            `*Message:* ${message}%0A%0A` +
                            `-----------------------%0A` +
                            `*Mahadev Reading Zone*`;

        // 3. Open WhatsApp in new tab
        const whatsappUrl = `https://wa.me/<?php echo $whatsapp_no; ?>?text=${whatsappMsg}`;
        window.open(whatsappUrl, '_blank');
        
        // 4. Reset form after sending
        this.reset();
    });
</script>

<?php include('includes/footer.php'); ?>