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
    
    <div class="about-us-container mt-5">
        <!-- Header Section -->
        <div class="wrapper">
        <div class="about-us-header">
            <h1 class="about-us-title">About US</h1>
            <p class="about-us-header-description">Connecting dreams with opportunities through the power of community support</p>
        </div>
        
        <!-- What We Do Section -->
        <div class="about-us-section">
            <div class="about-us-section-decoration-top"></div>
            <div class="about-us-section-decoration-corner"></div>
            <h2 class="about-us-section-title">
                What We Do?
                <span class="about-us-section-title-underline"></span>
            </h2>
            <p class="about-us-paragraph">
                We connect students and educators with donors to fund education through innovative crowdfunding solutions. Our platform bridges the gap between passionate learners and generous supporters, creating pathways to success for disadvantaged students worldwide.
            </p>
            <p class="about-us-paragraph">
                By providing financial support for tuition, resources, and academic opportunities, we ensure that quality education becomes accessible to all, regardless of financial circumstances. Together, we're building a brighter future—one student at a time.
            </p>
        </div>

        <!-- Why Choose Us Section -->
        <div class="about-us-section">
            <div class="about-us-section-decoration-top"></div>
            <div class="about-us-section-decoration-corner"></div>
            <h2 class="about-us-section-title">
                Why Choose Us?
                <span class="about-us-section-title-underline"></span>
            </h2>
            <ul class="about-us-features-list">
                <li class="about-us-feature-item">
                    <span class="about-us-feature-bullet"></span>
                    <p class="about-us-feature-text"><strong class="about-us-feature-highlight">100% secure & transparent donation process:</strong> Every donation is tracked and utilized with complete transparency, giving you peace of mind about your contribution.</p>
                </li>
                <li class="about-us-feature-item">
                    <span class="about-us-feature-bullet"></span>
                    <p class="about-us-feature-text"><strong class="about-us-feature-highlight">Direct impact on Students $ Educators:</strong> Your support directly reaches students and educators, creating immediate and lasting change in their educational journey.</p>
                </li>
                <li class="about-us-feature-item">
                    <span class="about-us-feature-bullet"></span>
                    <p class="about-us-feature-text"><strong class="about-us-feature-highlight">Global reach, allowing anyone to contribute:</strong> Join donors from around the world in our mission to make education accessible for all, regardless of geographic boundaries.</p>
                </li>
                <li class="about-us-feature-item">
                    <span class="about-us-feature-bullet"></span>
                    <p class="about-us-feature-text"><strong class="about-us-feature-highlight">Success Stories & Testimonials:</strong> With thousands of success stories and testimonials, our impact speaks for itself through transformed lives and communities.</p>
                </li>
            </ul>
        </div>

        <!-- Mission & Vision Section -->
        <div class="about-us-mission-vision-container">
            <div class="about-us-mission-box">
                <div class="about-us-mission-decoration"></div>
                <div class="about-us-mission-corner"></div>
                <h2 class="about-us-mission-title">
                    Our Mission
                    <span class="about-us-mission-title-underline"></span>
                </h2>
                <p class="about-us-mission-paragraph">
                    Our mission is to democratize education by eliminating financial barriers that prevent talented individuals from pursuing their academic dreams. We empower students, educators, and institutions by creating meaningful connections with compassionate donors worldwide.
                </p>
                <p class="about-us-mission-paragraph">
                    By addressing the root causes of educational funding gaps, we aim to create a world where no person's potential remains untapped due to financial constraints. Through our platform, we're cultivating a community that believes in the transformative power of education.
                </p>
            </div>
            <div class="about-us-vision-box">
                <div class="about-us-vision-decoration"></div>
                <div class="about-us-vision-corner"></div>
                <h2 class="about-us-vision-title">
                    Our Vision
                    <span class="about-us-vision-title-underline"></span>
                </h2>
                <p class="about-us-vision-paragraph">
                    We envision a world where quality education is universally accessible to all, regardless of socioeconomic status or geographical location. Our platform aspires to be the ultimate bridge connecting those in need of educational support with those willing to provide guidance and financial assistance.
                </p>
                <p class="about-us-vision-paragraph">
                    Through innovative technological approaches, strategic partnerships, and collective community efforts, we're building a future where every student can learn, grow, and succeed. Our vision extends beyond funding—we're creating an ecosystem where education becomes the greatest equalizer.
                </p>
            </div>
        </div>

        <!-- Impact Section -->
        <div class="about-us-section about-us-impact-section">
            <div class="about-us-section-decoration-top"></div>
            <div class="about-us-section-decoration-corner"></div>
            <h2 class="about-us-section-title">
                Our Impact
                <span class="about-us-section-title-underline"></span>
            </h2>
            <div class="about-us-impact-stats">
                <div class="about-us-impact-item">
                    <div class="about-us-impact-number">10.7 Cr.</div>
                    <div class="about-us-impact-label">Funds Raised</div>
                    <div class="about-us-impact-underline"></div>
                </div>
                <div class="about-us-impact-item">
                    <div class="about-us-impact-number">14,567</div>
                    <div class="about-us-impact-label">Students Empowered</div>
                    <div class="about-us-impact-underline"></div>
                </div>
                <div class="about-us-impact-item">
                    <div class="about-us-impact-number">8,376</div>
                    <div class="about-us-impact-label">Generous Donors</div>
                    <div class="about-us-impact-underline"></div>
                </div>
            </div>
        </div>
        </div>


            <!-- Call to Action -->

        <div class="w-100 d-flex justify-content-evenly">
            <div class="about-us-cta-container">
                <a href="donation-form.php" class="about-us-cta-button">
                    Make a Contribution
                    <span class="about-us-cta-button-shine"></span>
                </a>
            </div>        

            <div class="about-us-cta-container">
                <a href="registration-form.php" class="about-us-cta-button">
                    Join Our Mission Today
                    <span class="about-us-cta-button-shine"></span>
                </a>
            </div>
        </div>

        <!-- testimonial-section starts-->


<div class="testimonial-container">
    
  <section class="testimonial-section">
      <div class="section-heading">
        <h2>What People Say About Us</h2>
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
    </div>

<!-- footer starts -->

    <footer class="footer">
        <div class="wrapper">
        <div class="footer-container">
            <!-- Navigation Links - Column 1 -->
            <div class="footer-nav">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Our Services</a></li>
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

    // testimonials-swiper
    document.addEventListener('DOMContentLoaded', function() {
      const swiper = new Swiper('.testimonial-swiper', {
        slidesPerView: "auto",
        spaceBetween: 20,
        grabCursor: true,
        initialSlide: 4,
        centeredSlides: false,
        slideToClickedSlide: true,
        loop: true,
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