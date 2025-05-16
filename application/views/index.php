<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

<!-- swiper.js -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.min.css" />

<?php $this->load->view('web-links.php'); ?>

</head>
<body>

  <?php $this->load->view('web-header.php'); ?>

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
                        <a href="<?php echo base_url('HomeController/log_in'); ?>" class="donate-btn">
                            DONATE NOW
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                <div class="swiper-slide slide-3">
                    <div class="content-container">
                        <p class="subheading">Join our mission</p>
                        <h1 class="main-heading">Empowering communities</h1>
                        <a href="<?php echo base_url('HomeController/registration'); ?>" class="donate-btn">
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
            <p class="welcome-text">Welcome to FUNDamental Grow</p>
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
            
            <a href="<?php echo base_url('HomeController/registration'); ?>" class="donate-btn">
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

    <a href="<?php echo base_url('HomeController/donate_now'); ?>" class="donate-btn">
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
          <img src="<?php echo base_url('assets/images/about-one-img-1.jpg') ?>" alt="img-1" class="main-image">
          <img src="<?php echo base_url('assets/images/about-one-img-2.jpg') ?>" alt="img-2" class="fence-image">
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
          <a href="<?php echo base_url('HomeController/donate_now'); ?>" class="donate-btn">
            DONATE NOW
            <i class="fas fa-arrow-right"></i>
          </a>
          <a href="<?php echo base_url('HomeController/registration'); ?>" class="donate-btn">
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
                    <a href="<?php echo base_url('HomeController/donate_now'); ?>" class="donate-btn mx-auto">
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
        
        <a href="<?php echo base_url('HomeController/campaigns'); ?>" class="view-all">View All</a>
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
                <a href="<?php echo base_url('HomeController/donate_now'); ?>" class="donate-btn mx-auto">
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
                <a href="<?php echo base_url('HomeController/registration'); ?>" class="donate-btn mx-auto">
                    JOIN NOW
                    <i class="fas fa-arrow-right" style="font-size: 20px;"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- red & green Boxes ends -->

    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.min.js"></script>

    <script>

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

    <?php $this->load->view('web-footer'); ?>