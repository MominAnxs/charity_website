<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <?php $this->load->view('web-links.php'); ?>

<!-- swiper.js -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.min.css" />


</head>
<body>

    <?php $this->load->view('web-header.php'); ?>

<!-- campaigns-section starts -->

    <div class="cmpgn-page-decorative-circle cmpgn-page-circle-1"></div>
    <div class="cmpgn-page-decorative-circle cmpgn-page-circle-2"></div>
    <div class="cmpgn-page-decorative-circle cmpgn-page-circle-3"></div>
    
    <div class="cmpgn-page-container mt-5">

        <div class="wrapper">
        <!-- Header Section -->
        <div class="contact-us-header-text">
            <h1>Participate in our Campaigns !</h1>
            <p>Join us in transforming lives through education. Every contribution makes a difference.</p>
        </div>
        
        <!-- Campaigns Grid - First Row -->
        <div class="cmpgn-page-grid">
            <!-- Campaign 1 -->
            <div class="cmpgn-page-card">
                <div class="cmpgn-page-status cmpgn-page-status-ongoing">Ongoing</div>
                <div class="cmpgn-page-image-container">
                    <img class="cmpgn-page-image" src="/api/placeholder/200/200" alt="Education Drive">
                </div>
                <div class="cmpgn-page-content">
                    <h3 class="cmpgn-page-card-title">Independence Day Education Drive</h3>
                    <p class="cmpgn-page-card-text">"Empowering young minds by providing educational kits to underprivileged children."</p>
                    <div class="cmpgn-page-card-date">Date : 15 Aug 2025</div>
                    <a href="#" class="cmpgn-page-card-button">Read More</a>
                </div>
            </div>
            
            <!-- Campaign 2 -->
            <div class="cmpgn-page-card">
                <div class="cmpgn-page-status cmpgn-page-status-upcoming">Upcoming</div>
                <div class="cmpgn-page-image-container">
                    <img class="cmpgn-page-image" src="/api/placeholder/200/200" alt="Teacher's Day">
                </div>
                <div class="cmpgn-page-content">
                    <h3 class="cmpgn-page-card-title">World Teacher's Day Fundraiser</h3>
                    <p class="cmpgn-page-card-text">"Supporting teachers with training programs and better classroom resources."</p>
                    <div class="cmpgn-page-card-date">Date : 05 Oct 2025</div>
                    <a href="#" class="cmpgn-page-card-button">Read More</a>
                </div>
            </div>
            
            <!-- Campaign 3 -->
            <div class="cmpgn-page-card">
                <div class="cmpgn-page-status cmpgn-page-status-upcoming">Upcoming</div>
                <div class="cmpgn-page-image-container">
                    <img class="cmpgn-page-image" src="/api/placeholder/200/200" alt="Children's Day">
                </div>
                <div class="cmpgn-page-content">
                    <h3 class="cmpgn-page-card-title">Children's Day Scholarship Program</h3>
                    <p class="cmpgn-page-card-text">"Providing financial aid to children in need for their continued education."</p>
                    <div class="cmpgn-page-card-date">Date : 14 Nov 2025</div>
                    <a href="#" class="cmpgn-page-card-button">Read More</a>
                </div>
            </div>
        </div>
        
        <!-- Campaigns Grid - Second Row -->
        <div class="cmpgn-page-grid">
            <!-- Campaign 4 -->
            <div class="cmpgn-page-card">
                <div class="cmpgn-page-status cmpgn-page-status-ongoing">Ongoing</div>
                <div class="cmpgn-page-image-container">
                    <img class="cmpgn-page-image" src="/api/placeholder/200/200" alt="Education Drive">
                </div>
                <div class="cmpgn-page-content">
                    <h3 class="cmpgn-page-card-title">Rural Education Initiative</h3>
                    <p class="cmpgn-page-card-text">"Bringing quality education resources to rural communities and establishing learning centers."</p>
                    <div class="cmpgn-page-card-date">Date : 15 Aug 2025</div>
                    <a href="#" class="cmpgn-page-card-button">Read More</a>
                </div>
            </div>
            
            <!-- Campaign 5 -->
            <div class="cmpgn-page-card">
                <div class="cmpgn-page-status cmpgn-page-status-ongoing">Ongoing</div>
                <div class="cmpgn-page-image-container">
                    <img class="cmpgn-page-image" src="/api/placeholder/200/200" alt="Digital Literacy">
                </div>
                <div class="cmpgn-page-content">
                    <h3 class="cmpgn-page-card-title">Digital Literacy Campaign</h3>
                    <p class="cmpgn-page-card-text">"Equipping students with necessary digital skills and providing access to technology."</p>
                    <div class="cmpgn-page-card-date">Date : 15 Aug 2025</div>
                    <a href="#" class="cmpgn-page-card-button">Read More</a>
                </div>
            </div>
            
            <!-- Campaign 6 -->
            <div class="cmpgn-page-card">
                <div class="cmpgn-page-status cmpgn-page-status-ongoing">Ongoing</div>
                <div class="cmpgn-page-image-container">
                    <img class="cmpgn-page-image" src="/api/placeholder/200/200" alt="Book Drive">
                </div>
                <div class="cmpgn-page-content">
                    <h3 class="cmpgn-page-card-title">Books For All Initiative</h3>
                    <p class="cmpgn-page-card-text">"Collecting and distributing educational books to schools and libraries in need."</p>
                    <div class="cmpgn-page-card-date">Date : 15 Aug 2025</div>
                    <a href="#" class="cmpgn-page-card-button">Read More</a>
                </div>
            </div>
        </div>

        <!-- Campaigns Grid - Expired Campaigns -->
        <div class="cmpgn-page-grid">
            <!-- Expired Campaign 1 -->
            <div class="cmpgn-page-card">
                <div class="cmpgn-page-status cmpgn-page-status-expired">Expired</div>
                <div class="cmpgn-page-image-container">
                    <img class="cmpgn-page-image" src="/api/placeholder/200/200" alt="Past Initiative">
                </div>
                <div class="cmpgn-page-content">
                    <h3 class="cmpgn-page-card-title">School Supplies Distribution</h3>
                    <p class="cmpgn-page-card-text">"Provided essential school supplies to underprivileged students in local communities."</p>
                    <div class="cmpgn-page-card-date">Date : 15 Jan 2025</div>
                    <a href="#" class="cmpgn-page-card-button">View Results</a>
                </div>
            </div>
            
            <!-- Expired Campaign 2 -->
            <div class="cmpgn-page-card">
                <div class="cmpgn-page-status cmpgn-page-status-expired">Expired</div>
                <div class="cmpgn-page-image-container">
                    <img class="cmpgn-page-image" src="/api/placeholder/200/200" alt="Past Workshop">
                </div>
                <div class="cmpgn-page-content">
                    <h3 class="cmpgn-page-card-title">Teacher Training Workshop</h3>
                    <p class="cmpgn-page-card-text">"Empowered teachers with modern teaching techniques and digital classroom strategies."</p>
                    <div class="cmpgn-page-card-date">Date : 20 Feb 2025</div>
                    <a href="#" class="cmpgn-page-card-button">View Results</a>
                </div>
            </div>
            
            <!-- Expired Campaign 3 -->
            <div class="cmpgn-page-card">
                <div class="cmpgn-page-status cmpgn-page-status-expired">Expired</div>
                <div class="cmpgn-page-image-container">
                    <img class="cmpgn-page-image" src="/api/placeholder/200/200" alt="Past Scholarship">
                </div>
                <div class="cmpgn-page-content">
                    <h3 class="cmpgn-page-card-title">Spring Scholarship Fund</h3>
                    <p class="cmpgn-page-card-text">"Awarded educational scholarships to deserving students from low-income backgrounds."</p>
                    <div class="cmpgn-page-card-date">Date : 05 Mar 2025</div>
                    <a href="#" class="cmpgn-page-card-button">View Results</a>
                </div>
            </div>
        </div>
        
</div>
    </div>

<!-- campaigns-section ends -->

    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.min.js"></script>

    <?php $this->load->view('web-footer.php'); ?>