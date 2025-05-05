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

    <div class="wrapper">
        <div class="sign-up-page-container my-5 mx-auto">
            <div class="sign-up-page-bg-circle sign-up-page-bg-circle-1"></div>
            <div class="sign-up-page-bg-circle sign-up-page-bg-circle-2"></div>
            
            <div class="sign-up-page-header">
                <h1>Join Us & Make a Difference</h1>
            </div>
            
            <form class="sign-up-page-form">
                <div class="sign-up-page-form-field">
                    <label class="sign-up-page-label" for="fullName">Full Name:</label>
                    <input class="sign-up-page-input" type="text" id="fullName" name="fullName" required>
                </div>
                
                <div class="sign-up-page-form-field">
                    <label class="sign-up-page-label" for="email">Email Address:</label>
                    <input class="sign-up-page-input" type="email" id="email" name="email" required>
                </div>
                
                <div class="sign-up-page-form-field">
                    <label class="sign-up-page-label" for="phone">Phone Number:</label>
                    <input class="sign-up-page-input" type="tel" id="phone" name="phone" required>
                </div>
                
                <div class="sign-up-page-form-field">
                    <label class="sign-up-page-label" for="password">Password:</label>
                    <input class="sign-up-page-input" type="password" id="password" name="password" required>
                </div>
                
                <div class="sign-up-page-form-field">
                    <label class="sign-up-page-label" for="confirmPassword">Confirm Password:</label>
                    <input class="sign-up-page-input" type="password" id="confirmPassword" name="confirmPassword" required>
                </div>
                
                <div class="sign-up-page-form-field">
                    <div class="donation-form-dropdown" id="gender-dropdown">
                      <span>Gender</span>
                      <span class="donation-form-dropdown-arrow">▼</span>
                      <div class="donation-form-dropdown-content">
                        <div class="donation-form-dropdown-item">Male</div>
                        <div class="donation-form-dropdown-item">Female</div>
                        <div class="donation-form-dropdown-item">Other</div>
                        <div class="donation-form-dropdown-item">Prefer Not to Say</div>
                      </div>
                    </div>
                </div>
                
                <div class="sign-up-page-form-field">
                    <div class="donation-form-dropdown" id="user-dropdown">
                      <span>User type selection:</span>
                      <span class="donation-form-dropdown-arrow">▼</span>
                      <div class="donation-form-dropdown-content">
                        <div class="donation-form-dropdown-item">Donor</div>
                        <div class="donation-form-dropdown-item">Volunteer</div>
                    </div>
                </div>
                
                <div class="sign-up-page-buttons">
                    <div>
                        <span class="sign-up-page-login-text">Already a member?</span>
                        <a href="../HomeController/log_in" class="sign-up-page-login">Login</a>
                    </div>
                    <button type="submit" class="sign-up-page-submit">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    
const dropdownIds = ['gender-dropdown', 'user-dropdown'];

dropdownIds.forEach(id => {
  const dropdown = document.getElementById(id);
  const dropdownContent = dropdown.querySelector('.donation-form-dropdown-content');

  // Toggle dropdown open/close
  dropdown.addEventListener('click', function (e) {
    e.stopPropagation(); // Prevent closing when clicking inside
    dropdown.classList.toggle('open');
    dropdownContent.style.display = dropdown.classList.contains('open') ? 'block' : 'none';
  });

  // Handle selecting an item
  const options = dropdownContent.querySelectorAll('.donation-form-dropdown-item');
  options.forEach(option => {
    option.addEventListener('click', function () {
      dropdown.querySelector('span').textContent = this.textContent;
    });
  });
});

// Close any open dropdown when clicking outside
window.addEventListener('click', function () {
  dropdownIds.forEach(id => {
    const dropdown = document.getElementById(id);
    dropdown.classList.remove('open');
    dropdown.querySelector('.donation-form-dropdown-content').style.display = 'none';
  });
});

</script>

<?php $this->load->view('web-footer'); ?>
