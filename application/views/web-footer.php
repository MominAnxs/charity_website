<!-- footer starts -->

<footer class="footer">
        <div class="wrapper">
        <div class="footer-container">
            <!-- Navigation Links - Column 1 -->
            <div class="footer-nav">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                <li><a href="<?php echo base_url('HomeController/about_us'); ?>">About</a></li>
                <li><a href="<?php echo base_url('HomeController/contact_us'); ?>">Contact</a></li>
                    <li><a href="<?php echo base_url('HomeController/our-services'); ?>">Our Services</a></li>
                    
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
                <a href="<?php echo base_url('HomeController/donate_now'); ?>" class="cta-button primary-btn">Donate Now</a>
                
                <?php if ($this->session->userdata('donor_logged_in')) { ?>
                    <a href="<?php echo base_url('LoginLogoutController/logout'); ?>" class="cta-button secondary-btn">Log out</a>
                <?php } else { ?>
                    <a href="<?php echo base_url('HomeController/log_in'); ?>" class="cta-button secondary-btn">Log in</a>
                    <a href="<?php echo base_url('HomeController/sign_up'); ?>" class="cta-button secondary-btn">Sign up</a>
                <?php } ?>
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
    </script>

</body>
</html>