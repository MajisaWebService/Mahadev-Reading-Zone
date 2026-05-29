<?php 
$pageTitle = "Visual Tour"; 
include('includes/header.php'); 
?>

<section class="page-header">
    <div class="container">
        <h1>Visual Tour</h1>
        <div class="breadcrumbs"><a href="index.php">Home</a> <span>/</span> Gallery</div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        
        <div class="gallery-tabs">
            <button class="tab-btn active" data-filter="all">All View</button>
            <button class="tab-btn" data-filter="interior">Interiors</button>
            <button class="tab-btn" data-filter="focus">Focus Desks</button>
            <button class="tab-btn" data-filter="amenities">Relax Zone</button>
        </div>

        <div class="masonry-wrapper">
            
            <div class="masonry-item interior">
                <div class="m-card" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?q=80&w=2190&auto=format&fit=crop" alt="Main Hall">
                    <div class="m-overlay">
                        <div class="m-text">
                            <h4>Silence Zone</h4>
                            <p>Main Reading Hall</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="masonry-item focus">
                <div class="m-card" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1544890697-7d9aa9c47087?q=80&w=1974&auto=format&fit=crop" alt="Private Desk">
                    <div class="m-overlay">
                        <div class="m-text">
                            <h4>Private Desk</h4>
                            <p>For Deep Focus</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="masonry-item amenities">
                <div class="m-card" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?q=80&w=2070&auto=format&fit=crop" alt="Coffee Area">
                    <div class="m-overlay">
                        <div class="m-text">
                            <h4>Cafeteria</h4>
                            <p>Refresh & Recharge</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="masonry-item interior">
                <div class="m-card" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1568667256549-094345857637?q=80&w=2030&auto=format&fit=crop" alt="Bookshelf">
                    <div class="m-overlay">
                        <div class="m-text">
                            <h4>Resource Center</h4>
                            <p>Access to Knowledge</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="masonry-item focus">
                <div class="m-card" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?q=80&w=2073&auto=format&fit=crop" alt="Night View">
                    <div class="m-overlay">
                        <div class="m-text">
                            <h4>Night Shift</h4>
                            <p>Open till 11:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>

             <div class="masonry-item amenities">
                <div class="m-card" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1555447405-0588697950bd?q=80&w=1980&auto=format&fit=crop" alt="Lounge">
                    <div class="m-overlay">
                        <div class="m-text">
                            <h4>Lounge Area</h4>
                            <p>Take a break</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div id="lightbox" class="lightbox">
    <span class="close-lightbox" onclick="closeLightbox()">×</span>
    <img id="lightbox-img" src="" alt="Gallery Preview">
</div>

<?php include('includes/footer.php'); ?>

<script>
    const filterBtns = document.querySelectorAll('.tab-btn');
    const items = document.querySelectorAll('.masonry-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Active State
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            
            const filterValue = btn.getAttribute('data-filter');

            items.forEach(item => {
                if (filterValue === 'all' || item.classList.contains(filterValue)) {
                    item.style.display = 'inline-block'; // Essential for column layout
                    setTimeout(() => item.style.opacity = '1', 50);
                } else {
                    item.style.opacity = '0';
                    setTimeout(() => item.style.display = 'none', 300);
                }
            });
        });
    });
</script>