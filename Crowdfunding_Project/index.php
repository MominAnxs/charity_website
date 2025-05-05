<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>


<!-- Google Fonts (DM Sans) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

<!-- Google Fonts (Libre-Baskerville) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

<!-- Bootstrap(5.3) css CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

<!-- font-awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- swiper.js -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.min.css" />

<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

    <!-- Top Bar -->
    <div class="top-bar">
        <div class="wrapper">
            <div class="contact-info">
                <span><i class="fas fa-envelope"></i> example@gamil.com</span>
                <span><i class="fas fa-map-marker-alt"></i> 12 Green Road, 05 New York</span>
            </div>
            <div class="social-icons">
                <span>Follow Us On:</span>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <!-- Main Navbar -->
    <div class="navbar-container">
        <div class="wrapper">
            <nav class="navbar">
                <div class="logo">
                    <div class="logo-text"><img src="images/logo-1.png"></div>
                </div>

                <div class="hamburger" id="burgerBtn">
                  <i class="fas fa-bars"></i>
                </div>

                <ul class="nav-links mb-0">
                    <li><a href="index.php">Home</i></a></li>
                    <li><a href="about_us.php">About</a></li>
                    <li><a href="campaigns.php">Campaigns</a></li>
                    <li><a href="reports.php">Reports</a></li>
                    <li><a href="contact-us.php">Contact</a></li>
                    <li><a href="sign-up.php">Sign-up</a></li>
                </ul>

                <div class="right-section">
                    <a href="donation-form.php" class="donate-btn me-2">
                        DONATE NOW
                        <i class="fas fa-arrow-right" style="font-size: 20px;"></i>
                    </a>                    
                    <a href="registration-form.php" class="donate-btn ms-2">
                        BECOME A VOLUNTEER
                        <i class="fas fa-arrow-right" style="font-size: 20px;"></i>
                    </a>
                </div>
            </nav>

    <!-- Off-canvas menu starts-->
    <div class="off-canvas" id="offCanvas">
        <div class="off-canvas-logo">
            <img src="images/logo-2.png" alt="Anity Logo">
            <button class="close-btn" id="closeBtn"><i class="fa-solid fa-xmark"></i></button>
        </div>
        
        <ul class="off-canvas-menu">
            <li style="border-top: 1px solid rgba(255, 255, 255, 0.1);">
                <a href="index.php">
                    Home
                    <div class="submenu-toggle">></div>
                </a>
            </li>            
            <li>
                <a href="aboutus.php">
                    About us
                    <div class="submenu-toggle">></div>
                </a>
            </li>
            <li>
                <a href="campaigns.php">
                    campaigns
                    <div class="submenu-toggle">></div>
                </a>
            </li>
            <li>
                <a href="reports.php">
                    Reports
                    <div class="submenu-toggle">></div>
                </a>
            </li>
            <li>
                <a href="contact-us.php">
                    Contact
                    <div class="submenu-toggle">></div>
                </a>
            </li>
            <li>
                <a href="sign-up.php">
                    Sign-up
                    <div class="submenu-toggle">></div>
                </a>
            </li>
        </ul>
        
        <div class="canvas-contact-info">
            <a href="mailto:needhelp@anity" class="contact-item">
                <div class="contact-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                    </svg>
                </div>
                needhelp@anity
            </a>
            
            <a href="tel:6668880000" class="contact-item">
                <div class="contact-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                </div>
                666 888 0000
            </a>
        </div>
        
        <div class="social-media">
            <a href="#" class="social-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                </svg>
            </a>
            <a href="#" class="social-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg>
            </a>
            <a href="#" class="social-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"/>
                </svg>
            </a>
            <a href="#" class="social-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                </svg>
            </a>
        </div>
    </div>
    <!-- Off-canvas menu ends -->
    
    <!-- Overlay -->
    <div class="overlay" id="overlay"></div>

        </div>
    </div>

<!-- hero-section starts -->
        
<div class="hero-section">
    <div class="wrapper">
        <!-- Swiper -->
        <div class="swiper heroSwiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide slide-1">
                    <div class="content-container">
                        <p class="subheading">We help companies</p>
                        <h1 class="main-heading">Together, we can make the world better</h1>
                        <a href="donation-form.php" class="donate-btn">
                            DONATE NOW
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                <div class="swiper-slide slide-2">
                    <div class="content-container">
                        <p class="subheading">We create solutions</p>
                        <h1 class="main-heading">Building a sustainable future for everyone</h1>
                        <a href="#" class="donate-btn">
                            LEARN MORE
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Slide 3 -->
                <div class="swiper-slide slide-3">
                    <div class="content-container">
                        <p class="subheading">Join our mission</p>
                        <h1 class="main-heading">Empowering communities</h1>
                        <a href="#" class="donate-btn">
                            GET INVOLVED
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="navigation">
            <button class="nav-btn swiper-prev">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
                </svg>
            </button>
            <button class="nav-btn swiper-next">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
                </svg>
            </button>
        </div>
    </div>
</div>

<!-- hero-section ends -->

<!-- welcome-section starts -->

<div class="wrapper">
    
    <div class="welcome-container">
        <div class="left-content">
            <p class="welcome-text">Welcome to [chairt's name]</p>
            <h1>Every Rupee Makes a Difference.</h1>
            <p class="welcome-description">In a world where many face challenges, your generosity can bring hope. At [Charity Name], we're dedicated to [insert cause or mission], but we can't do it alone. We need the support of kind-hearted individuals like you to continue our work.</p>
            
            <div class="stats">
                <div class="stat">
                    <div class="stat-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="#ff6b35" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="9" cy="7" r="4" stroke="#ff6b35" stroke-width="2" stroke-linecap="round"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" stroke="#ff6b35" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div>
                        <div class="stat-number">1200 +</div>
                        <div class="stat-label">Volunteers</div>
                    </div>
                </div>
                
                <div class="stat">
                    <div class="stat-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="24" width="24">
                          <path stroke-linecap="round" stroke-width="2" stroke="#ff6b35" d="M6 4H18"></path>
                          <path stroke-linecap="round" stroke-width="2" stroke="#ff6b35" d="M6 8H16C16 10.2091 14.2091 12 12 12H6"></path>
                          <path stroke-linecap="round" stroke-width="2" stroke="#ff6b35" d="M12 12L18 20"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="stat-number">2200 ₹</div>
                        <div class="stat-label">Trusted Funds</div>
                    </div>
                </div>
            </div>
            
            <a href="registration-form.php" class="donate-btn">
                BECOME A VOLUNTEER
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        
        <div class="right-content">

  <div class="donation-form-container">
    <h1 class="donation-form-title">Easy Donation</h1>
    
    <input type="text" class="donation-form-input" placeholder="Name...">
    <input type="email" class="donation-form-input" placeholder="Email...">
    
    <div class="donation-form-dropdown" id="sausesDropdown">
      <span>Select Sauses</span>
      <span class="donation-form-dropdown-arrow">▼</span>
      <div class="donation-form-dropdown-content">
        <div class="donation-form-dropdown-item">Education</div>
        <div class="donation-form-dropdown-item">Healthcare</div>
        <div class="donation-form-dropdown-item">Environment</div>
        <div class="donation-form-dropdown-item">Animal Welfare</div>
        <div class="donation-form-dropdown-item">Disaster Relief</div>
        <div class="donation-form-dropdown-item">Hunger & Poverty</div>
      </div>
    </div>
    
    <label class="donation-form-section-label">Amount</label>
    <div class="donation-form-amount-options">
      <div class="donation-form-amount-option selected">$10</div>
      <div class="donation-form-amount-option">$20</div>
      <div class="donation-form-amount-option">$30</div>
      <div class="donation-form-amount-option">$40</div>
      <div class="donation-form-amount-option">$50</div>
      <div class="donation-form-amount-option">$100</div>
      <div class="donation-form-amount-option">$500</div>
    </div>
    
    <input type="text" class="donation-form-input" placeholder="Custom Amount...">
    
    <label class="donation-form-section-label">Payment Method</label>
    <div class="donation-form-payment-methods">
      <div class="donation-form-payment-method">
        <div class="donation-form-radio-button selected"></div>
        <span>Test Donation</span>
      </div>
      <div class="donation-form-payment-method">
        <div class="donation-form-radio-button"></div>
        <span>Offline Donation</span>
      </div>
      <div class="donation-form-payment-method">
        <div class="donation-form-radio-button"></div>
        <span>Credit Card</span>
      </div>
    </div>

    <a href="#" class="donate-btn">
        DONATE NOW
        <i class="fas fa-arrow-right"></i>
    </a>    

  </div>

        </div>

</div>

<!-- welcome-section ends -->

</div>
<!-- Wrapper-ends -->

<!-- about-us-section starts -->

<div class="about-us-section my-5">
    
    <div class="wrapper">
        
      <div class="about-container">
        <div class="image-section">
          <img src="images/about-one-img-1.jpg" alt="img-1" class="main-image">
          <img src="images/about-one-img-2.jpg" alt="img-2" class="fence-image">
          <div class="stats-box">
            <div class="icon">
                <i class="fa-solid fa-hand-holding-medical"></i>
            </div>

            <div class="number-label">
            <div class="number">250+</div>
            <div class="label">Services we provide</div>
            </div>
          </div>
        </div>
        
        <div class="content-section">
          <div class="section-label">ABOUT US</div>
          <h2 class="section-heading text-start">
            <span>Unite for a Cause</span>
            <span>Change the World</span>
          </h2>
          
          <div class="tabs-container">
            <button class="tab-button active">Mission</button>
            <button class="tab-button">Vision</button>
            <button class="tab-button">Goal</button>
          </div>
          
          <div class="tab-content">
            Our mission is to empower underprivileged communities by connecting them with resources and opportunities.
          </div>

          <div class="abt-last-btn d-flex justify-content-between align-items-center">
          <a href="donation-form.php" class="donate-btn">
            DONATE NOW
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="registration-form.php" class="donate-btn">
            BECOME A VOLUNTEER
            <i class="fas fa-arrow-right"></i>
          </a>
          </div>

        </div>
      </div>

    </div>

</div>

<!-- about-us-section ends -->

<!-- campaigns-section starts -->

<div class="campaigns-section">
<div class="wrapper">
    
    <div class="campaigns-container">

        <div class="section-heading">
            <h2>Campaigns</h2>
        </div>
        
        <div class="campaigns-wrapper">
            <div class="campaign-card">
                <div class="campaign-image">
                    <img src="images/campaign-img-1.jpg" alt="Education Drive">
                    <div class="campaign-date">Date: 15 Aug 2025</div>
                </div>
                <div class="campaign-content">
                    <h3 class="campaign-title">Independence Day Education Drive (Live)</h3>
                    <p class="campaign-description">Empowering young minds by providing educational kits to underprivileged children.</p>
                    <a href="#" class="donate-btn mx-auto">
                        DONATE NOW
                        <i class="fas fa-arrow-right" style="font-size: 20px;"></i>
                    </a>
                </div>
            </div>
            
            <div class="campaign-card">
                <div class="campaign-image">
                    <img src="images/campaign-img-2.jpg" alt="Teacher's Day">
                    <div class="campaign-date">Date: 05 Oct 2025</div>
                </div>
                <div class="campaign-content">
                    <h3 class="campaign-title">World Teacher's Day Fundraiser (Up-Coming)</h3>
                    <p class="campaign-description">Supporting teachers with training programs and better classroom resources.</p>
                    <a href="#" class="donate-btn mx-auto">
                        DONATE NOW
                        <i class="fas fa-arrow-right" style="font-size: 20px;"></i>
                    </a>
                </div>
            </div>
            
            <div class="campaign-card">
                <div class="campaign-image">
                    <img src="images/campaign-img-3.jpg" alt="Scholarship Program">
                    <div class="campaign-date">Date: 14 Nov 2025</div>
                </div>
                <div class="campaign-content">
                    <h3 class="campaign-title">Children's Day Scholarship Program (Up-Coming)</h3>
                    <p class="campaign-description">Providing financial aid to children in need, ensuring they have access to education for a brighter future.</p>
                    <a href="#" class="donate-btn mx-auto">
                        DONATE NOW
                        <i class="fas fa-arrow-right" style="font-size: 20px;"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <a href="campaigns.php" class="view-all">View All</a>
    </div>

</div>
</div>
<!-- campaigns-section ends -->

<!-- story-section starts -->

<div class="success-story-container">

  <section class="success-story-section">
      <div class="section-heading">
        <h2>Success Stories</h2>
      </div>
      
      <div class="swiper success-story-swiper">
        <div class="swiper-wrapper">
          <!-- Success Story 1 -->
          <div class="swiper-slide">
            <div class="success-story-slide">
              <div class="story-category">Student</div>
              <h3 class="story-title">From Street to School: Aarav's Journey</h3>
              <div class="story-content">
                Aarav, a 10-year-old boy from a small village in India, spent most of his childhood helping his mother sell vegetables. With no financial support, he never held a pencil or read a book.
              </div>
              <div class="story-person">
                <div class="person-avatar">AM</div>
                <div class="person-info">
                  <h4>Aarav Malhotra</h4>
                  <p>Student</p>
                </div>
              </div>
              <button class="read-more">Read More</button>
            </div>
          </div>
          
          <!-- Success Story 2 -->
          <div class="swiper-slide">
            <div class="success-story-slide">
              <div class="story-category">Teacher</div>
              <h3 class="story-title">The Teacher Who Refused to Give Up</h3>
              <div class="story-content">
                Meera always dreamed of becoming a teacher. After basic studies, she wanted to give back by teaching. She found it challenging to engage students effectively.
              </div>
              <div class="story-person">
                <div class="person-avatar">ML</div>
                <div class="person-info">
                  <h4>Meera Lokhande</h4>
                  <p>Teacher</p>
                </div>
              </div>
              <button class="read-more">Read More</button>
            </div>
          </div>
          
          <!-- Success Story 3 -->
          <div class="swiper-slide">
            <div class="success-story-slide">
              <div class="story-category">Program</div>
              <h3 class="story-title">Building Schools in Remote Areas</h3>
              <div class="story-content">
                Our initiative to build schools in remote villages has provided education to over 5,000 children who previously had no access to learning facilities or qualified teachers.
              </div>
              <div class="story-person">
                <div class="person-avatar">RS</div>
                <div class="person-info">
                  <h4>Rahul Sharma</h4>
                  <p>Program Director</p>
                </div>
              </div>
              <button class="read-more">Read More</button>
            </div>
          </div>
          
          <!-- Success Story 4 -->
          <div class="swiper-slide">
            <div class="success-story-slide">
              <div class="story-category">Community</div>
              <h3 class="story-title">Village Transformation Through Education</h3>
              <div class="story-content">
                Chandrapur village saw remarkable transformation when literacy rates improved from 30% to 85% in just five years through our comprehensive education program.
              </div>
              <div class="story-person">
                <div class="person-avatar">SP</div>
                <div class="person-info">
                  <h4>Sangeeta Patil</h4>
                  <p>Community Leader</p>
                </div>
              </div>
              <button class="read-more">Read More</button>
            </div>
          </div>

          <!-- Success Story 5 -->
          <div class="swiper-slide">
            <div class="success-story-slide">
              <div class="story-category">Scholarship</div>
              <h3 class="story-title">From Farm Worker to Doctor</h3>
              <div class="story-content">
                Priya worked in the fields with her parents since childhood. After receiving our scholarship, she pursued her dream of becoming a doctor and now serves her rural community.
              </div>
              <div class="story-person">
                <div class="person-avatar">PD</div>
                <div class="person-info">
                  <h4>Priya Desai</h4>
                  <p>Medical Doctor</p>
                </div>
              </div>
              <button class="read-more">Read More</button>
            </div>
          </div>
          
          <!-- Success Story 6 -->
          <div class="swiper-slide">
            <div class="success-story-slide">
              <div class="story-category">Technology</div>
              <h3 class="story-title">Bringing Digital Learning to Rural Schools</h3>
              <div class="story-content">
                Our solar-powered digital classrooms have revolutionized learning for 12,000 students in areas without electricity, providing access to modern educational resources.
              </div>
              <div class="story-person">
                <div class="person-avatar">VK</div>
                <div class="person-info">
                  <h4>Vikram Kumar</h4>
                  <p>Tech Innovation Lead</p>
                </div>
              </div>
              <button class="read-more">Read More</button>
            </div>
          </div>
          
          <!-- Success Story 7 -->
          <div class="swiper-slide">
            <div class="success-story-slide">
              <div class="story-category">Special Education</div>
              <h3 class="story-title">Breaking Barriers for Differently-Abled</h3>
              <div class="story-content">
                Arjun, born with visual impairment, thrived in our inclusive education program and is now a successful musician teaching other visually impaired children.
              </div>
              <div class="story-person">
                <div class="person-avatar">AS</div>
                <div class="person-info">
                  <h4>Arjun Singh</h4>
                  <p>Musician & Teacher</p>
                </div>
              </div>
              <button class="read-more">Read More</button>
            </div>
          </div>
          
          <!-- Success Story 8 -->
          <div class="swiper-slide">
            <div class="success-story-slide">
              <div class="story-category">Women Empowerment</div>
              <h3 class="story-title">Girls Leading the Way</h3>
              <div class="story-content">
                Our girls' education program has helped reduce child marriage by 65% in participating villages and increased female higher education enrollment by 300%.
              </div>
              <div class="story-person">
                <div class="person-avatar">LJ</div>
                <div class="person-info">
                  <h4>Leela Joshi</h4>
                  <p>Program Coordinator</p>
                </div>
              </div>
              <button class="read-more">Read More</button>
            </div>
          </div>
        </div>
        
        <!-- Add pagination -->
        <div class="swiper-pagination mt-4"></div>
      </div>
  </section>

</div>
<!-- story-section ends -->

<!-- testimonials-section starts -->

<div class="testimonial-container">
    
  <section class="testimonial-section">
      <div class="section-heading">
        <h2>Testimonial</h2>
      </div>
      
      <div class="swiper testimonial-swiper">
        <div class="swiper-wrapper">
          <!-- Testimonial 1 -->
          <div class="swiper-slide">
            <div class="testimonial-slide">
              <div class="testimonial-stars">
                <span class="star" style="--i:1">★</span>
                <span class="star" style="--i:2">★</span>
                <span class="star" style="--i:3">★</span>
                <span class="star" style="--i:4">★</span>
                <span class="star" style="--i:5">★</span>
              </div>
              <div class="testimonial-content">
                Listened carefully to Lisa's needs and translated them into a stunning website. The design is modern and calming, with beautiful imagery that captures the essence of Blooming.
              </div>
              <div class="testimonial-author">
                <div class="author-avatar">LA</div>
                <div class="author-info">
                  <h4>Leslie Alexander</h4>
                  <p>Web Designer</p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Testimonial 2 -->
          <div class="swiper-slide">
            <div class="testimonial-slide">
              <div class="testimonial-stars">
                <span class="star" style="--i:1">★</span>
                <span class="star" style="--i:2">★</span>
                <span class="star" style="--i:3">★</span>
                <span class="star" style="--i:4">★</span>
                <span class="star" style="--i:5">★</span>
              </div>
              <div class="testimonial-content">
                Listened carefully to Lisa's needs and translated them into a stunning website. The design is modern and calming, with beautiful imagery that captures the essence of Blooming.
              </div>
              <div class="testimonial-author">
                <div class="author-avatar">CW</div>
                <div class="author-info">
                  <h4>Cameron Williamson</h4>
                  <p>Medical Assistant</p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Testimonial 3 -->
          <div class="swiper-slide">
            <div class="testimonial-slide">
              <div class="testimonial-stars">
                <span class="star" style="--i:1">★</span>
                <span class="star" style="--i:2">★</span>
                <span class="star" style="--i:3">★</span>
                <span class="star" style="--i:4">★</span>
                <span class="star" style="--i:5">★</span>
              </div>
              <div class="testimonial-content">
                Listened carefully to Lisa's needs and translated them into a stunning website. The design is modern and calming, with beautiful imagery that captures the essence of Blooming.
              </div>
              <div class="testimonial-author">
                <div class="author-avatar">DR</div>
                <div class="author-info">
                  <h4>Darlene Robertson</h4>
                  <p>Web Designer</p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Testimonial 4 -->
          <div class="swiper-slide">
            <div class="testimonial-slide">
              <div class="testimonial-stars">
                <span class="star" style="--i:1">★</span>
                <span class="star" style="--i:2">★</span>
                <span class="star" style="--i:3">★</span>
                <span class="star" style="--i:4">★</span>
                <span class="star" style="--i:5">★</span>
              </div>
              <div class="testimonial-content">
                Listened carefully to Lisa's needs and translated them into a stunning website. The design is modern and calming, with beautiful imagery that captures the essence of Blooming.
              </div>
              <div class="testimonial-author">
                <div class="author-avatar">RF</div>
                <div class="author-info">
                  <h4>Robert Fox</h4>
                  <p>Marketing Director</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Additional Testimonials -->
          <!-- Testimonial 5 -->
          <div class="swiper-slide">
            <div class="testimonial-slide">
              <div class="testimonial-stars">
                <span class="star" style="--i:1">★</span>
                <span class="star" style="--i:2">★</span>
                <span class="star" style="--i:3">★</span>
                <span class="star" style="--i:4">★</span>
                <span class="star" style="--i:5">★</span>
              </div>
              <div class="testimonial-content">
                The attention to detail was impressive. Every element of our website was thoughtfully crafted to reflect our brand identity. The user experience is intuitive and our customers love it.
              </div>
              <div class="testimonial-author">
                <div class="author-avatar">JC</div>
                <div class="author-info">
                  <h4>Jane Cooper</h4>
                  <p>Business Owner</p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Testimonial 6 -->
          <div class="swiper-slide">
            <div class="testimonial-slide">
              <div class="testimonial-stars">
                <span class="star" style="--i:1">★</span>
                <span class="star" style="--i:2">★</span>
                <span class="star" style="--i:3">★</span>
                <span class="star" style="--i:4">★</span>
                <span class="star" style="--i:5">★</span>
              </div>
              <div class="testimonial-content">
                From concept to completion, the process was seamless. They took our vision and elevated it beyond what we imagined possible. The final website perfectly represents our brand values.
              </div>
              <div class="testimonial-author">
                <div class="author-avatar">MJ</div>
                <div class="author-info">
                  <h4>Michael Johnson</h4>
                  <p>CEO</p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Testimonial 7 -->
          <div class="swiper-slide">
            <div class="testimonial-slide">
              <div class="testimonial-stars">
                <span class="star" style="--i:1">★</span>
                <span class="star" style="--i:2">★</span>
                <span class="star" style="--i:3">★</span>
                <span class="star" style="--i:4">★</span>
                <span class="star" style="--i:5">★</span>
              </div>
              <div class="testimonial-content">
                Our online presence has dramatically improved since launching our new website. The responsive design works flawlessly on all devices and the performance metrics are outstanding.
              </div>
              <div class="testimonial-author">
                <div class="author-avatar">SW</div>
                <div class="author-info">
                  <h4>Sarah Williams</h4>
                  <p>Marketing Manager</p>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Testimonial 8 -->
          <div class="swiper-slide">
            <div class="testimonial-slide">
              <div class="testimonial-stars">
                <span class="star" style="--i:1">★</span>
                <span class="star" style="--i:2">★</span>
                <span class="star" style="--i:3">★</span>
                <span class="star" style="--i:4">★</span>
                <span class="star" style="--i:5">★</span>
              </div>
              <div class="testimonial-content">
                The communication throughout the project was exceptional. They kept us informed at every stage and incorporated our feedback quickly. The result speaks for itself.
              </div>
              <div class="testimonial-author">
                <div class="author-avatar">TB</div>
                <div class="author-info">
                  <h4>Thomas Brown</h4>
                  <p>Creative Director</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial 9 -->
          <div class="swiper-slide">
            <div class="testimonial-slide">
              <div class="testimonial-stars">
                <span class="star" style="--i:1">★</span>
                <span class="star" style="--i:2">★</span>
                <span class="star" style="--i:3">★</span>
                <span class="star" style="--i:4">★</span>
                <span class="star" style="--i:5">★</span>
              </div>
              <div class="testimonial-content">
                We've received countless compliments on our website redesign. The modern aesthetic combined with intuitive navigation has significantly increased our customer engagement metrics.
              </div>
              <div class="testimonial-author">
                <div class="author-avatar">ED</div>
                <div class="author-info">
                  <h4>Emily Davis</h4>
                  <p>E-commerce Director</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial 10 -->
          <div class="swiper-slide">
            <div class="testimonial-slide">
              <div class="testimonial-stars">
                <span class="star" style="--i:1">★</span>
                <span class="star" style="--i:2">★</span>
                <span class="star" style="--i:3">★</span>
                <span class="star" style="--i:4">★</span>
                <span class="star" style="--i:5">★</span>
              </div>
              <div class="testimonial-content">
                Working with this team was a pleasure from start to finish. Their expertise and creative solutions helped us overcome several technical challenges while maintaining our timeline.
              </div>
              <div class="testimonial-author">
                <div class="author-avatar">DW</div>
                <div class="author-info">
                  <h4>Daniel Wilson</h4>
                  <p>Product Manager</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial 11 -->
          <div class="swiper-slide">
            <div class="testimonial-slide">
              <div class="testimonial-stars">
                <span class="star" style="--i:1">★</span>
                <span class="star" style="--i:2">★</span>
                <span class="star" style="--i:3">★</span>
                <span class="star" style="--i:4">★</span>
                <span class="star" style="--i:5">★</span>
              </div>
              <div class="testimonial-content">
                The SEO optimization included in our website development has dramatically improved our search rankings. We're now reaching more customers than ever before.
              </div>
              <div class="testimonial-author">
                <div class="author-avatar">OM</div>
                <div class="author-info">
                  <h4>Olivia Martinez</h4>
                  <p>Digital Strategist</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial 12 -->
          <div class="swiper-slide">
            <div class="testimonial-slide">
              <div class="testimonial-stars">
                <span class="star" style="--i:1">★</span>
                <span class="star" style="--i:2">★</span>
                <span class="star" style="--i:3">★</span>
                <span class="star" style="--i:4">★</span>
                <span class="star" style="--i:5">★</span>
              </div>
              <div class="testimonial-content">
                The custom features developed for our website have streamlined our business processes and improved customer satisfaction. A worthwhile investment with excellent returns.
              </div>
              <div class="testimonial-author">
                <div class="author-avatar">JT</div>
                <div class="author-info">
                  <h4>James Taylor</h4>
                  <p>Operations Manager</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Add pagination -->
        <div class="swiper-pagination mt-4"></div>
        
      </div>
  </section>

</div>

<!-- testimonials-section ends -->

<!-- red & green Boxes starts -->
    
    <div class="wrapper d-flex justify-content-center mb-5">
    <div class="box-container">
        <div class="card donate-card">
            <div class="corner-bl"></div>
            <div class="card-content">
                <div>
                    <h2>Help Them With Donation</h2>
                    <p>Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernaturaur odit aut fugit, sed quia consequntur. Dicta sunt explicabo. Nemo</p>
                </div>
                <a href="donation-form.php" class="donate-btn mx-auto">
                    DONATE NOW
                    <i class="fas fa-arrow-right" style="font-size: 20px;"></i>
                </a>
            </div>
        </div>

        <div class="card volunteer-card">
            <div class="corner-bl"></div>
            <div class="card-content">
                <div>
                    <h2>Join With Us As Volunteer</h2>
                    <p>Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernaturaur odit aut fugit, sed quia consequntur. Dicta sunt explicabo. Nemo</p>
                </div>
                <a href="registration-form.php" class="donate-btn mx-auto">
                    JOIN NOW
                    <i class="fas fa-arrow-right" style="font-size: 20px;"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- red & green Boxes ends -->

<!-- footer starts -->

    <footer class="footer">
        <div class="wrapper">
        <div class="footer-container">
            <!-- Navigation Links - Column 1 -->
            <div class="footer-nav">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="about_us.php">About us</a></li>
                    <li><a href="contact-us.php">Contact us</a></li>
                    <li><a href="our-services.php">Our Services</a></li>
                    <li><a href="#">Thank You</a></li>
                </ul>
            </div>

            <!-- Navigation Links - Column 2 -->
            <div class="footer-nav">
                <h3>Resources</h3>
                <ul class="footer-links">
                    <li><a href="#">FAQ's</a></li>
                    <li><a href="#">Reviews</a></li>
                </ul>
                
                <!-- Social Media Section -->
                <div class="social-section">
                    <h3 class="social-title">Find us on</h3>
                    <div class="social-icons">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="Telegram"><i class="fab fa-telegram-plane"></i></a>
                    </div>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="cta-section">
                <a href="donation-form.php" class="cta-button primary-btn">Donate Now</a>
                <a href="#" class="cta-button secondary-btn">Log in/Sign up</a>
            </div>

            <!-- Contact Information -->
            <div class="contact-section">
                <h3 class="office-title">Mumbai Office</h3>
                <p class="company-name">XYZ Pvt. Ltd.</p>
                <p class="address-line">12th Floor, BKC Tower, Bandra Kurla Complex,</p>
                <p class="address-line">Bandra East, Mumbai, Maharashtra – 400051</p>
                <div class="contact-phone">
                    <i class="fas fa-phone-alt"></i>
                    <span>+91 22 1234 5678</span>
                </div>
            </div>
        </div>
    </div>
    </footer>

<!-- footer ends -->

<!-- Bootstrap(5.3) js CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.min.js"></script>

    <script>

        // Get DOM elements
        const burgerBtn = document.getElementById('burgerBtn');
        const closeBtn = document.getElementById('closeBtn');
        const offCanvas = document.getElementById('offCanvas');
        const overlay = document.getElementById('overlay');
        
        // Open off-canvas menu
        burgerBtn.addEventListener('click', function() {
            offCanvas.classList.add('active');
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        });
        
        // Close off-canvas menu
        function closeOffCanvas() {
            offCanvas.classList.remove('active');
            overlay.classList.remove('active');
            document.body.style.overflow = ''; // Re-enable scrolling
        }
        
        closeBtn.addEventListener('click', closeOffCanvas);
        overlay.addEventListener('click', closeOffCanvas);
        
        // Close menu when window is resized beyond breakpoint
        window.addEventListener('resize', function() {
            if (window.innerWidth > 1199) {
                closeOffCanvas();
            }
        });

        // hero-section swiper
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.heroSwiper', {
                speed: 800,
                loop: true,
                effect: 'flip',
                flipEffect: {
                  slideShadows: true,
                  limitRotation: true,
                },
                navigation: {
                    nextEl: '.swiper-next',
                    prevEl: '.swiper-prev',
                },
            });
        });


    // Dropdown functionality
    const dropdown = document.getElementById('sausesDropdown');
    const dropdownContent = dropdown.querySelector('.donation-form-dropdown-content');
    
    dropdown.addEventListener('click', function() {
      dropdown.classList.toggle('open');
      if (dropdown.classList.contains('open')) {
        dropdownContent.style.display = 'block';
      } else {
        dropdownContent.style.display = 'none';
      }
    });
    
    // Close dropdown when clicking outside
    window.addEventListener('click', function(e) {
      if (!dropdown.contains(e.target)) {
        dropdown.classList.remove('open');
        dropdownContent.style.display = 'none';
      }
    });
    
    // Select option from dropdown
    const options = dropdownContent.querySelectorAll('.donation-form-dropdown-item');
    options.forEach(option => {
      option.addEventListener('click', function() {
        dropdown.querySelector('span').textContent = this.textContent;
      });
    });
    
    // Amount options
    const amountOptions = document.querySelectorAll('.donation-form-amount-option');
    amountOptions.forEach(option => {
      option.addEventListener('click', function() {
        amountOptions.forEach(opt => opt.classList.remove('selected'));
        this.classList.add('selected');
      });
    });
    
    // Payment methods
    const paymentMethods = document.querySelectorAll('.donation-form-payment-method');
    paymentMethods.forEach(method => {
      method.addEventListener('click', function() {
        paymentMethods.forEach(m => m.querySelector('.donation-form-radio-button').classList.remove('selected'));
        this.querySelector('.donation-form-radio-button').classList.add('selected');
      });
    });

    // Mission, Vision, Goal button js


  const tabButtons = document.querySelectorAll('.tab-button');
  const tabContent = document.querySelector('.tab-content');

  const contentData = [
    "Our mission is to empower underprivileged communities by connecting them with resources and opportunities.",
    "Our vision is a world where every individual has the opportunity and means to thrive and contribute to society.",
    "Our goal is to support 10,000+ students by 2030 through education, mentorship, and community development."
  ];

  tabButtons.forEach((btn, index) => {
    btn.addEventListener('click', () => {
      // Remove active class from all buttons
      tabButtons.forEach(b => b.classList.remove('active'));
      // Add active class to clicked button
      btn.classList.add('active');
      // Update tab content
      tabContent.textContent = contentData[index];
    });
  });



    // success-story-swiper
    document.addEventListener('DOMContentLoaded', function() {
      const swiper = new Swiper('.success-story-swiper', {
        slidesPerView: "auto",
        spaceBetween: 20,
        grabCursor: true,
        initialSlide: 0,
        centeredSlides: false,
        loop: false,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
          dynamicBullets: true,
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          640: {
            slidesPerView: 1.5,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1440: {
            slidesPerView: 4,
            spaceBetween: 30,
          }
        },
        autoplay: {
          delay: 3000,
          pauseOnMouseEnter: true,
          disableOnInteraction: true,
        },
        speed: 800,
        on: {
          init: function() {
            this.el.style.visibility = 'visible';
          }
        }
      });
    });

    // testimonials-swiper
    document.addEventListener('DOMContentLoaded', function() {
      const swiper = new Swiper('.testimonial-swiper', {
        slidesPerView: "auto",
        spaceBetween: 20,
        grabCursor: true,
        initialSlide: 0,
        centeredSlides: false,
        slideToClickedSlide: true,
        loop: false,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
          dynamicBullets: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          640: {
            slidesPerView: 1.5,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1440: {
            slidesPerView: 4,
            spaceBetween: 30,
          }
        },
        autoplay: {
          delay: 3000,
          pauseOnMouseEnter: true,
          disableOnInteraction: false,
        },
        speed: 800,
        on: {
          init: function() {
            this.el.style.visibility = 'visible';
          }
        }
      });
    });

    </script>

</body>
</html>