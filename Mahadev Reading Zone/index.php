<?php include('includes/header.php'); ?>

<section id="home" class="hero">
    <div class="hero-content" style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; margin-top: 30px;">
        <h1>Peace. Focus. Knowledge.</h1>
        <p>A disciplined study environment and peaceful environment.</p>
        <a href="#facilities" class="btn btn-primary">Explore Facilities</a>
        <a href="membership.php" class="btn btn-secondary">Join Now</a>
    </div>
</section>

<section id="about" class="section-padding">
    <div class="container">
        <h2 class="section-title">Our Vision</h2>
        <div class="about-content">
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?q=80&w=1973&auto=format&fit=crop" alt="Quiet Reading Space">
            </div>
            <div class="about-text">
                <h3>A Sanctuary for Aspirants</h3>
                <!-- <p>Located in the heart of Gandhinagar, <strong>Mahadev Reading Zone</strong> is more than just a library. It is a dedicated space for those who seek knowledge with unwavering focus.</p> -->
                <p>Inspired by the meditative energy of Lord Mahadev, we maintain an atmosphere of absolute silence and discipline. Whether you are preparing for GPSC, UPSC, or academic exams, our environment ensures your mind remains calm and your goal remains clear.</p>
                <p><em>"Knowledge is the third eye of insight."</em></p>

                <a href="about.php" class="btn btn-primary">Know more about us</a>
            </div>
        </div>
    </div>
</section>

<section id="facilities" class="section-padding facilities">
    <div class="container">
        <h2 class="section-title">Facilities</h2>
        <p class="section-subtitle">Premium amenities designed for your comfort and focus.</p>

        <div class="facilities-grid">

            <div class="facility-card">
                <div class="icon-box">❄️</div>
                <h4>Fully A.C. Hall</h4>
                <p>Powerful climate control to keep the environment cool and fresh all day long.</p>
            </div>

            <div class="facility-card">
                <div class="icon-box">🪑</div>
                <h4>Comfortable Seating</h4>
                <p>Ergonomic chairs designed for long study hours to support your posture.</p>
            </div>

            <div class="facility-card">
                <div class="icon-box">📶</div>
                <h4>High Speed Wi-Fi</h4>
                <p>Seamless internet connectivity for your video lectures and online research.</p>
            </div>

            <div class="facility-card">
                <div class="icon-box">📹</div>
                <h4>CCTV Surveillance</h4>
                <p>24/7 monitoring to ensure the safety and security of every student.</p>
            </div>

            <div class="facility-card">
                <div class="icon-box">💧</div>
                <h4>Purified Drinking Water</h4>
                <p>Clean and chilled RO water available to keep you hydrated.</p>
            </div>

            <div class="facility-card">
                <div class="icon-box">☕</div>
                <h4>Refreshment Facility</h4>
                <p>A designated zone to take breaks and refresh your mind.</p>
            </div>

        </div>
    </div>
</section>

<section id="membership" class="section-padding">
    <div class="container">
        <h2 class="section-title">Membership Plans</h2>
        <p class="section-subtitle">Invest in your future with our flexible and affordable plans.</p>

        <div class="membership-grid">

            <div class="plan-card recommended">
                <span class="plan-badge">Most Popular</span>
                <h3>Reserved Seat</h3>
                <div class="price">₹1800 <span>/mo</span></div>
                <ul class="plan-features">
                    <li><strong>Fixed Personal Seat</strong></li>
                    <li><strong>Personal Cabin Light</strong></li>
                    <li>24/7 Unlimited Access</li>
                    <li>High-Speed Wi-Fi</li>
                </ul>
                <a href="register.php?plan=reserved_1" class="btn btn-primary">Join Now</a>
            </div>

            <div class="plan-card">
                <h3>Non-Reserved</h3>
                <div class="price">₹1199 <span>/mo</span></div>
                <ul class="plan-features">
                    <li><strong>Standard Seating</strong></li>
                    <li>Any Available Spot</li>
                    <li>Peaceful Environment</li>
                    <li>High-Speed Wi-Fi</li>
                </ul>
                <a href="register.php?plan=non_reserved_1" class="btn btn-primary">Book Seat</a>
            </div>

            <div class="plan-card">
                <h3>Night Owl</h3>
                <div class="price">₹999 <span>/mo</span></div>
                <ul class="plan-features">
                    <li><strong>10:00 PM - 07:30 AM</strong></li>
                    <li>Non-Reserved Spot</li>
                    <li>Pin-Drop Silence</li>
                    <li>Night Safety</li>
                </ul>
                <a href="register.php?plan=night" class="btn btn-primary">Book Night</a>
            </div>

            <div class="plan-card">
                <h3>Half Day</h3>
                <div class="price">₹899 <span>/mo</span></div>
                <ul class="plan-features">
                    <li><strong>Any 6 Hour Slot</strong></li>
                    <li>Flexible Timing</li>
                    <li>Ideal for Part-timers</li>
                    <li>High-Speed Wi-Fi</li>
                </ul>
                <a href="register.php?plan=half_day" class="btn btn-primary">Book Slot</a>
            </div>

            <div class="plan-card" style="border: 2px solid var(--trishul-bronze);">
                <h3>3 Months Saver</h3>
                <div class="price">₹5000 <span>/Total</span></div>
                <ul class="plan-features">
                    <li><strong>Saves ₹400 Instantly</strong></li>
                    <li>Fixed Personal Cabin</li>
                    <li>One-time Payment</li>
                    <li>Valid for 90 Days</li>
                </ul>
                <a href="register.php?plan=reserved_3" class="btn btn-primary">Claim Offer</a>
            </div>

        </div>

        <div style="text-align: center; margin-top: 40px;">
            <a href="membership.php" class="btn btn-secondary" style="color: var(--shiv-blue); border-color: var(--shiv-blue);">Compare All Plans</a>
        </div>
    </div>
</section>

<section class="section-padding rules-section">
    <div class="container">
        <h2 class="section-title">Library Discipline</h2>
        <p class="section-subtitle">To maintain the sanctity of the reading zone.</p>

        <div class="rules-grid">
            <div class="rule-item">
                <div class="rule-number">01</div>
                <div class="rule-content">
                    <h4>Silence is Mandatory</h4>
                    <p>Mobile phones must be on silent mode. No group discussions allowed inside the reading hall.</p>
                </div>
            </div>
            <div class="rule-item">
                <div class="rule-number">02</div>
                <div class="rule-content">
                    <h4>Respect the Space</h4>
                    <p>Keep your desk clean. Do not leave books or trash behind after your slot ends.</p>
                </div>
            </div>
            <div class="rule-item">
                <div class="rule-number">03</div>
                <div class="rule-content">
                    <h4>Shoe Discipline</h4>
                    <p>Shoes must be removed or placed in the designated rack outside the main hall.</p>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 40px;">
            <a href="rules.php" class="btn btn-secondary">Rules list</a>
        </div>
    </div>
</section>

<section id="gallery" class="section-padding">
    <div class="container">
        <h2 class="section-title">Our Ambience</h2>
        <div class="gallery-grid">
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?q=80&w=2073&auto=format&fit=crop" alt="Study Desk">
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="https://images.unsplash.com/photo-1541829070764-84a7d30dd3f3?q=80&w=1969&auto=format&fit=crop" alt="Library Bookshelf">
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?q=80&w=2070&auto=format&fit=crop" alt="Concentration">
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="https://images.unsplash.com/photo-1568667256549-094345857637?q=80&w=2030&auto=format&fit=crop" alt="Peaceful Environment">
            </div>
        </div>
    </div>
</section>

<div id="lightbox" class="lightbox">
    <span class="close-lightbox" onclick="closeLightbox()">×</span>
    <img id="lightbox-img" src="" alt="Gallery Preview">
</div>

<section class="section-padding testimonials-section">
    <div class="container">
        <h2 class="section-title">Success Stories</h2>
        <p class="section-subtitle">Real aspirants. Real results. Join the hall of achievers.</p>

        <div class="testimonial-grid">
            <div class="testimonial-card">
                <div class="quote-icon">“</div>
                <p class="review-text">
                    "The silence here is addictive. I cleared my GPSC prelims only because I could study for 10 hours straight without a single distraction. The best library in Gandhinagar."
                </p>
                <div class="student-info">
                    <div class="student-avatar">R</div>
                    <div class="student-details">
                        <h5>Rahul Mehta</h5>
                        <span>GPSC Aspirant</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-card featured">
                <div class="quote-icon">“</div>
                <p class="review-text">
                    "The competitive atmosphere here is unmatched. Seeing other serious GPSC aspirants study with such dedication keeps me motivated to push my limits every single day."
                </p>
                <div class="student-info">
                    <div class="student-avatar">A</div>
                    <div class="student-details">
                        <h5>Anjali Desai</h5>
                        <span>GPSC Class 1-2 Aspirant</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="quote-icon">“</div>
                <p class="review-text">
                    "I struggled with consistency at home. Since joining Mahadev Zone, my study hours have doubled. The 24/7 access is a blessing for last-minute DySO exam revision."
                </p>
                <div class="student-info">
                    <div class="student-avatar">V</div>
                    <div class="student-details">
                        <h5>Vikram Solanki</h5>
                        <span>DySO Aspirant</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="location-map" class="section-padding">
    <div class="container">
        <h2 class="section-title">Find Your Focus</h2>
        <p class="section-subtitle">Located centrally in Gandhinagar for easy access.</p>

        <div class="map-wrapper">
            <div class="map-overlay-card">
                <h4>Mahadev Reading Zone</h4>
                <p>3rd Floor, ACME House,<br>Sector 6, Gandhinagar</p>

                <a href="https://www.google.com/maps/search/?api=1&query=3rd+Floor,+ACME+House,+Sector+6,+Gandhinagar"
                    target="_blank"
                    class="btn btn-primary btn-map">
                    Get Directions
                </a>
            </div>

            <iframe
                class="map-frame"
                src="https://maps.google.com/maps?q=3rd+Floor,+ACME+House,+Sector+6,+Gandhinagar&t=&z=15&ie=UTF8&iwloc=&output=embed"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>