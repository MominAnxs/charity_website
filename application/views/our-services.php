<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <?php $this->load->view('web-links'); ?>

</head>
<body>

    <?php $this->load->view('web-header'); ?>

    <!-- our-services starts -->

    <div class="our-services-container my-5">
        <header class="our-services-header">
            <h1 class="our-services-title">Our Services</h1>
            <p class="our-services-subtitle">We believe that education is a powerful tool for breaking the cycle of poverty. Our mission is simple: to make education accessible for every child, regardless of their background or financial situation.</p>
        </header>
        
        <div class="our-services-grid">
            <!-- Service Card 1 -->
            <div class="our-services-card">
                <div class="our-services-content">
                    <h3 class="our-services-card-title">
                        Educational Support
                    </h3>
                    <p class="our-services-description">We connect students and educators with donors to fund education through innovative crowdfunding solutions. Our platform bridges the gap between passionate learners and generous supporters, creating pathways to success for disadvantaged students worldwide.</p>
                    <a href="about_us.php" class="our-services-button">Learn More</a>
                </div>
            </div>
            
            <!-- Service Card 2 -->
            <div class="our-services-card">
                <div class="our-services-content">
                    <h3 class="our-services-card-title">
                        Volunteer Involvement
                    </h3>
                    <p class="our-services-description">Our volunteers play a vital role in bringing our mission to life. They contribute by:</p>
                    <ul class="our-services-features">
                        <li class="our-services-feature-item">
                            <i class="fas fa-check-circle our-services-feature-icon"></i>
                            <span>Identifying deserving students in their communities</span>
                        </li>
                        <li class="our-services-feature-item">
                            <i class="fas fa-check-circle our-services-feature-icon"></i>
                            <span>Assisting with application processes for sponsorship</span>
                        </li>
                        <li class="our-services-feature-item">
                            <i class="fas fa-check-circle our-services-feature-icon"></i>
                            <span>Running awareness campaigns to promote the value of education</span>
                        </li>
                    </ul>
                    <a href="registration-form.php" class="our-services-button">Join Us</a>
                </div>
            </div>
            
            <!-- Service Card 3 -->
            <div class="our-services-card">
                <div class="our-services-content">
                    <h3 class="our-services-card-title">
                        Donor Engagement
                    </h3>
                    <p class="our-services-description">We offer donors full transparency and the joy of making a real difference. Through our platform, donors can:</p>
                    <ul class="our-services-features">
                        <li class="our-services-feature-item">
                            <i class="fas fa-check-circle our-services-feature-icon"></i>
                            <span>Track the impact of their donations</span>
                        </li>
                        <li class="our-services-feature-item">
                            <i class="fas fa-check-circle our-services-feature-icon"></i>
                            <span>Donate on behalf of others through our Walking Donation feature</span>
                        </li>
                    </ul>
                    <a href="donation-form.php" class="our-services-button">Donate Now</a>
                </div>
            </div>
        </div>
        
        <div class="our-services-cta">
            <h2 class="our-services-cta-title">Together, We're Building Brighter Futures</h2>
            <p class="our-services-cta-text">Join our mission to transform lives through education. Whether you donate, volunteer, or spread the word, your contribution makes a difference—one student at a time.</p>
        </div>
    </div>

    <!-- our-services ends -->

    <?php $this->load->view('web-footer'); ?>