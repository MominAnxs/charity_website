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
            
            <form class="sign-up-page-form" id="signup_Form" method="post" enctype="multipart/form-data">
                <div class="sign-up-page-form-field">
                    <label class="sign-up-page-label" for="first_name">First Name</label>
                    <input class="sign-up-page-input" type="text" id="first_name" name="first_name" required>
                </div>

                <div class="sign-up-page-form-field">
                    <label class="sign-up-page-label" for="last_name">Last Name</label>
                    <input class="sign-up-page-input" type="text" id="last_name" name="last_name" required>
                </div>
                
                <div class="sign-up-page-form-field">
                    <label class="sign-up-page-label" for="email">Email Address</label>
                    <input class="sign-up-page-input" type="email" id="email" name="email" required>
                    <span id="emailError" style="color:red;"></span>
                </div>
                
                <div class="sign-up-page-form-field">
                    <label class="sign-up-page-label" for="phone">Phone Number</label>
                    <input class="sign-up-page-input" type="tel" id="phone" name="phone" required>
                    <span id="phoneError" style="color:red;"></span>
                </div>
                
                <div class="sign-up-page-form-field">
                    <label class="sign-up-page-label" for="password">Create Password</label>
                    <input class="sign-up-page-input" type="password" id="password" name="password" required>
                </div>
                
                <div class="sign-up-page-form-field">
                    <label class="sign-up-page-label" for="conf_password">Confirm Password</label>
                    <input class="sign-up-page-input" type="password" id="conf_password" name="conf_password" required>
                </div>
                
                <div class="sign-up-page-form-field">
                    <label class="sign-up-page-label" for="gender">Gender <em>(MALE, FEMALE, OTHER)</em></label>
                    <input class="sign-up-page-input" type="text" id="gender" name="gender" required>
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

<!-- jquery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script type="text/javascript">

// Add event listeners for real-time validation
document.addEventListener("DOMContentLoaded", function() {
  // Get all form inputs that need validation
  const inputs = [
    document.getElementById('first_name'),
    document.getElementById('last_name'),
    document.getElementById('email'),
    document.getElementById('phone'),
    document.getElementById('password'),
    document.getElementById('conf_password'),
    document.getElementById('gender'),
  ];

  // Add input event listeners for real-time validation and error removal
  inputs.forEach(input => {
    if (input) {
      input.addEventListener('input', function() {
        // Remove error in real-time as user types
        removeError(this);
        
        // Only validate after a short delay to avoid constant validation
        clearTimeout(this.validationTimer);
        this.validationTimer = setTimeout(() => {
          validateField(this);
        }, 200); // 200ms delay to reduce performance impact
      });
    }
  });
  
  // Add blur (focus lost) event listeners to each input
  inputs.forEach(input => {
    if (input) {
      input.addEventListener('blur', function() {
        validateField(this);
      });
    }
  });
});

function validateField(inputElement) {
  const nameRegex = /^[a-zA-Z0-9]+$/;
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const phoneRegex = /^\d+$/;
  const passwordRegex = /^(?!^[!@#$%^&*()_\-+=<>?{}[\]~]+$)[A-Za-z\d!@#$%^&*()_\-+=<>?{}[\]~]{8,}$/;
  const genderRegex = /^(MALE|FEMALE|OTHER)$/;

  
  const id = inputElement.id;
  const value = inputElement.value.trim();
  
  // Clear previous errors first
  removeError(inputElement);
  
  // Check if field is required and empty
  if (inputElement.hasAttribute('required') && value === '') {
    showError(inputElement, `${inputElement.previousElementSibling.textContent.trim()} is required.`);
    return false;
  }
  
  // Skip further validation if field is empty and not required
  if (value === '') {
    return true;
  }
  
  // Field-specific validation
  switch(id) {
    case 'first_name':
    case 'last_name':
      if (!nameRegex.test(value)) {
        showError(inputElement, `${inputElement.previousElementSibling.textContent.trim()} must be alphanumeric without special characters.`);
        return false;
      }
      break;
      
    case 'email':
      if (!emailRegex.test(value)) {
        showError(inputElement, 'Enter a valid email address.');
        return false;
      }
      break;
      
    case 'phone':
      if (!phoneRegex.test(value)) {
        showError(inputElement, 'Phone number must contain only digits.');
        return false;
      }
      if (value.length < 10) {
        showError(inputElement, 'Phone number must be at least 10 digits long.');
        return false;
      }
      if (value.length > 15) {
        showError(inputElement, 'Phone number must be at most 15 digits long.');
        return false;
      }
      break;

      case 'password':
      if (!passwordRegex.test(value)) {
        showError(inputElement, 'Password must be at least 8 characters and include uppercase, lowercase, and a number.');
        return false;
      }
      break;

      case 'conf_password':
      const passwordValue = $('#password').val();
      if (value !== passwordValue) {
        showError(inputElement, 'Passwords do not match.');
        return false;
      }
      break;
      
    case 'gender':
      if (!genderRegex.test(value)) {
        showError(inputElement, 'Gender must be MALE, FEMALE, or OTHER (all caps).');
        return false;
      }
      break;
  }
  
  return true;
}

function validateForm() {
  let isValid = true;
  
  // Basic fields that are always required
  const basicFields = [
    document.getElementById('first_name'),
    document.getElementById('last_name'),
    document.getElementById('email'),
    document.getElementById('password'),
    document.getElementById('conf_password'),
    document.getElementById('phone'),
  ];
  
  // Optional fields
  const optionalFields = [
    document.getElementById('gender')
  ];
  
  // Validate required basic fields
  basicFields.forEach(field => {
    if (field && !validateField(field)) {
      isValid = false;
    }
  });
  
  // Validate optional fields if they have values
  optionalFields.forEach(field => {
    if (field && field.value.trim() !== '' && !validateField(field)) {
      isValid = false;
    }
  });
  
  return isValid;
}

// Update the showError and removeError functions to add visual indicators
function showError(inputElement, message) {
  removeError(inputElement); // Clear any existing error
  
  // Add error message
  const error = document.createElement('div');
  error.className = 'error-message';
  error.textContent = message;
  inputElement.insertAdjacentElement('afterend', error);
  
  // Add invalid class to input
  inputElement.classList.add('invalid');
  inputElement.classList.remove('valid');
}

// Function to remove error message and invalid class
function removeError(inputElement) {
  // Remove error message if it exists
  const next = inputElement.nextElementSibling;
  if (next && next.classList.contains('error-message')) {
    next.remove();
  }
  
  // Remove invalid class if validation passes
  if (inputElement.value.trim() !== '') {
    inputElement.classList.remove('invalid');
    inputElement.classList.add('valid');
  } else {
    inputElement.classList.remove('invalid');
    inputElement.classList.remove('valid');
  }
}

// validating password and confirm password
function validatePassword() {
  const password = $('#password').val();
  const confPassword = $('#conf_password').val();

  if (password !== confPassword) {
    alert("Passwords do not match.");
    return false;
  }

  return true;
}

// AJAX request
$(document).ready(function () {
    $('#signup_Form').submit(function (event) {
      event.preventDefault();
      
      // Run the validation first
      if (!validateForm()) {
        alert("Form validation failed");
        return false; // Stop form submission if validation fails
      }

      if (!validatePassword()) {
        return false;
      }

      // Prepare form data
      var formData = new FormData();
      formData.append('first_name', $('#first_name').val());
      formData.append('last_name', $('#last_name').val());
      formData.append('email', $('#email').val());
      formData.append('phone', $('#phone').val());
      formData.append('password', $('#password').val());
      formData.append('gender', $('#gender').val());

      $.ajax({
        url: "<?php echo base_url('RegistrationFormController/submitDonorRegistration'); ?>",
        method: "POST",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (response) {
          if (response.status === 'success') {
            alert("Registration successful!");
            $('#signup_Form')[0].reset(); // Corrected form reset method
            $('.sign-up-page-input').removeClass('valid invalid');
            window.location.href = "<?php echo base_url('RegistrationFormController/index'); ?>";
          } else if (response.status === 'error') {
                if (response.field === 'email') {
                    $('#emailError').text(response.message);
                }
                if (response.field === 'phone') {
                    $('#phoneError').text(response.message);
                }
            } else {
            alert(response.message || "Registration failed.");
          }
        },
        error: function (xhr, status, error) {
          console.error(xhr.responseText);
          alert("Something went wrong while submitting the form. Please try again.");
        }
      });
    });
  });

</script>

<?php $this->load->view('web-footer'); ?>
