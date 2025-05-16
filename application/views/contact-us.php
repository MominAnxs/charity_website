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

<!-- contact-us section starts -->

    <div class="contact-us-container">
        <div class="wrapper">
                        <!-- <h1 class="about-us-title text-center w-100 my-5">Contact Us</h1> -->
        <div class="contact-us-header-text">
            <h1>Have questions or need support ?</h1>
            <p>Whether you're a student, donor, or volunteer, we're here to assist you. Contact us and let's work together to make education accessible for all!</p>
        </div>

        <div class="contact-us-section">
            <div class="contact-us-info">
                <h2>Contact Information</h2>
                <div class="contact-us-info-item">
                    <strong>Email:</strong>
                    <p>support@exampleorg.com</p>
                </div>                
                <div class="contact-us-info-item">
                    <strong>Phone:</strong>
                    <p>+91 22 2345 6789</p>
                </div>
                <div class="contact-us-info-item">
                    <strong>Office Address:</strong>
                    <p>12th Floor, BKC Tower, Bandra Kurla Complex,
                    Bandra East, Mumbai, Maharashtra – 400051<br>
                    </p>
                </div>
            </div>

            <div class="contact-us-form-container">
                <h2>Contact Form</h2>
                <form class="contact-us-form">
                    <div class="contact-us-form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="contact-us-form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="contact-us-form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="contact-us-form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="contact-us-btn">Submit</button>
                </form>
            </div>
        </div>

        <div class="contact-us-map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.1160984289!2d72.74109995644224!3d19.08219783958221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1713464058893!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="contact-us-social">
            <h2>Our Social Media</h2>
            <div class="contact-us-social-icons">
                <a href="#" class="contact-us-social-icon">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="contact-us-social-icon">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="contact-us-social-icon">
                    <i class="fab fa-telegram"></i>
                </a>
            </div>
        </div>

        <div class="contact-us-footer">
            <div class="contact-us-cta">
                <p>Looking Ahead to Support</p>
                <a href="../HomeController/donate_now" class="contact-us-footer-btn">Donate Now</a>
            </div>
            <div class="contact-us-cta">
                <p>Get to Know Us</p>
                <a href="../HomeController/about_us" class="contact-us-footer-btn">About Us</a>
            </div>
        </div>
        </div>
    </div>

<!-- contact-us section ends -->

<?php $this->load->view('web-footer'); ?>

