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
                <a href="../HomeController/donate_now" class="about-us-cta-button">
                    Make a Contribution
                    <span class="about-us-cta-button-shine"></span>
                </a>
            </div>        

            <div class="about-us-cta-container">
                <a href="../HomeController/registration" class="about-us-cta-button">
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

    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.min.js"></script>

    <script>

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

    <?php $this->load->view('web-footer.php'); ?>