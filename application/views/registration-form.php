<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

      <?php $this->load->view('web-links') ?>

  <style>

    .error-message {
        color: red;
        font-size: 0.9em;
        margin-top: 2px;
      }

  </style>

</head>
<body>

  <?php $this->load->view('web-header') ?>

<!-- Registration-form starts -->

<div class="wrapper">
  <div class="registration-form-container-2 my-5 mx-auto">
    <div class="registration-form-bg-circle registration-form-bg-circle-1"></div>
    <div class="registration-form-bg-circle registration-form-bg-circle-2"></div>
    
    <div class="registration-form-header">
      <h1>Become a Volunteer!</h1>
    </div>
    
    <form id="registrationForm" encrypt="multipart/form-data">
      <div class="registration-form-section">
        <div class="registration-form-section-title">Basic Details</div>
        
        <div class="registration-form-field">
          <label class="registration-form-label" for="first_name">First Name</label>
          <input class="registration-form-input" type="text" id="first_name" name="first_name" placeholder="Enter First Name" required>
        </div>

        <div class="registration-form-field">
          <label class="registration-form-label" for="last_name">First Name</label>
          <input class="registration-form-input" type="text" id="last_name" name="last_name" placeholder="Enter Last Name" required>
        </div>
        
        <div class="registration-form-field">
          <label class="registration-form-label" for="email">Email Address</label>
          <input class="registration-form-input" type="email" id="email" name="email" placeholder="Enter Email Address" required>
        </div>

        <div class="registration-form-field">
          <label class="registration-form-label" for="password">Create Password</label>
          <input class="registration-form-input" type="password" id="password" name="password" placeholder="Create Your Password" required>
        </div>

        <div class="registration-form-field">
          <label class="registration-form-label" for="conf_password">Confirm Password</label>
          <input class="registration-form-input" type="password" id="conf_password" name="conf_password" placeholder="Create Your Password" required>
        </div>

        <div class="registration-form-field">
          <label class="registration-form-label" for="phone">Phone Number</label>
          <input class="registration-form-input" type="tel" id="phone" name="phone" placeholder="Enter Phone Number" required>
        </div>

        
        <div class="registration-form-row">
          
          <div class="registration-form-column">
            <div class="registration-form-field">
              <label class="registration-form-label" for="gender">Gender <em>(MALE, FEMALE, OTHER)</em></label>
              <input class="registration-form-input" type="text" id="gender" name="gender" placeholder="Enter Your Gender (in capital letters)" required>
            </div>
          </div>          
          <div class="registration-form-column">
            <div class="registration-form-field">
              <label class="registration-form-label" for="dob">Date Of Birth (<em>DD/MM/YY</em>)</label>
              <input class="registration-form-input" type="text" id="dob" name="dob" placeholder="Enter Date Of Birth" required>
            </div>
          </div>
        </div>

        <div class="registration-form-field">
          <label class="registration-form-label" for="address">Address</label>
          <textarea rows="4" class="w-100 registration-form-input" id="address" name="address" required></textarea>
        </div>

        <div class="registration-form-row">
          <div class="registration-form-column">
            <div class="registration-form-field">
              <label class="registration-form-label" for="exp">Years OF Experiance</label>
              <input class="registration-form-input" type="text" id="exp" name="exp" placeholder="Enter Years Of Experience" required>
            </div>

          <div class="upload-section mt-5">
            
            <div class="upload-row">
              <label class="upload-label">Passport size Photo:</label>
              <div class="custom-upload">
                <label class="upload-btn" for="photo-upload">Upload</label>
                <input type="file" class="upload-input" id="photo-upload" name="passport_photo">
              </div>
            </div>

            <div class="upload-row">
              <label class="upload-label">Adhaar or PAN:</label>
              <div class="custom-upload">
                <label class="upload-btn" for="id-upload">Upload</label>
                <input type="file" class="upload-input" id="id-upload" name="aadhaar_pan">
              </div>
            </div>

          </div>

          </div>          
        <div class="registration-form-column">
          <div class="registration-form-field">
            <label class="registration-form-label">Availability</label>
            
            <div class="availability-grid">
            <div class="registration-form-anonymous">
              <div class="registration-form-checkbox-container">
                <input class="registration-form-checkbox" type="checkbox" id="wday_mor">
                <span class="registration-form-checkbox-ui"></span>
              </div>
              <label class="registration-form-label" for="wday_mor">Weekdays Morning</label>
            </div>

            <div class="registration-form-anonymous">
              <div class="registration-form-checkbox-container">
                <input class="registration-form-checkbox" type="checkbox" id="wday_eve">
                <span class="registration-form-checkbox-ui"></span>
              </div>
              <label class="registration-form-label" for="wday_eve">Weekdays Evening</label>
            </div>

            <div class="registration-form-anonymous">
              <div class="registration-form-checkbox-container">
                <input class="registration-form-checkbox" type="checkbox" id="wend_mor">
                <span class="registration-form-checkbox-ui"></span>
              </div>
              <label class="registration-form-label" for="wend_mor">Weekends Morning</label>
            </div>

            <div class="registration-form-anonymous">
              <div class="registration-form-checkbox-container">
                <input class="registration-form-checkbox" type="checkbox" id="wend_eve">
                <span class="registration-form-checkbox-ui"></span>
              </div>
              <label class="registration-form-label" for="wend_eve">Weekends Evening</label>
            </div>

            <div class="registration-form-anonymous">
              <div class="registration-form-checkbox-container">
                <input class="registration-form-checkbox" type="checkbox" id="24/7">
                <span class="registration-form-checkbox-ui"></span>
              </div>
              <label class="registration-form-label" for="24/7">24/7</label>
            </div>
            </div>
          </div>
        </div>
        </div>

<!-- // -->


      </div>
      
      <div class="registration-form-section">
        <button type="submit" class="registration-form-submit" id="submitBtn">
          <span>Register Now</span>
          <div class="registration-form-loading" id="loadingIcon"></div>
        </button>
      </div>
    </form>
  </div>
  </div>

<!-- Registration-form ends -->

<!-- jquery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

// Add event listeners for real-time validation
document.addEventListener("DOMContentLoaded", function() {
  // Get all form inputs that need validation
  const inputs = [
    document.getElementById('first_name'),
    document.getElementById('last_name'),
    document.getElementById('email'),
    document.getElementById('phone'),
    document.getElementById('gender'),
    document.getElementById('password'),
    document.getElementById('conf_password'),
    document.getElementById('dob'),
    document.getElementById('address'),
    document.getElementById('exp'),
    document.getElementById('photo-upload'),
    document.getElementById('id-upload'),
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
        }, 200); // 300ms delay to reduce performance impact
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

// Function to validate a single field with updated logic to handle payment method change
function validateField(inputElement) {
  const nameRegex = /^[a-zA-Z0-9]+$/;
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const phoneRegex = /^\d+$/;
  const genderRegex = /^(MALE|FEMALE|OTHER)$/;
  const passwordRegex = /^(?!^[!@#$%^&*()_\-+=<>?{}[\]~]+$)[A-Za-z\d!@#$%^&*()_\-+=<>?{}[\]~]{8,}$/;
  const dobRegex = /^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{2}$/;
  const addressRegex = /^[a-zA-Z0-9\s,.\-\/#()&:]+$/;
  const expRegex = /^\d+$/;
  
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
      
    case 'gender':
      if (!genderRegex.test(value)) {
        showError(inputElement, 'Gender must be MALE, FEMALE, or OTHER (all caps).');
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

    case 'dob': 
      if (!dobRegex.test(value)) {
        showError(inputElement, 'Date of Birth must be in DD/MM/YY format.');
        return false;
      }
      break;
    case 'address':
      if (!addressRegex.test(value)) {
        showError(inputElement, 'Address must be alphanumeric and can include Common punctuation { , . - / # ( ) & : }.');
        return false;
      }
      break;
    case 'exp':
      if (!expRegex.test(value)) {
        showError(inputElement, 'Experience must be a number.');
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
    document.getElementById('dob'),
    document.getElementById('address'),
    document.getElementById('exp'),
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
    $('#registrationForm').submit(function (event) {
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
      formData.append('gender', $('#gender').val());
      formData.append('password', $('#password').val());
      formData.append('dob', $('#dob').val());
      formData.append('address', $('#address').val());
      formData.append('exp', $('#exp').val());

      // Check and alert if files are missing

      if (!$('#photo-upload')[0].files[0] && !$('#id-upload')[0].files[0]) {
        alert('Please upload your passport-size photo and Aadhaar or PAN card.');
        return false;
      }

      if (!$('#photo-upload')[0].files[0]) {
        alert('Please upload your passport-size photo.');
        return false;
      }

      if (!$('#id-upload')[0].files[0]) {
        alert('Please upload your Aadhaar or PAN card.');
        return false;
      }

      // Correctly append file data if files exist
      if ($('#photo-upload')[0].files[0]) {
        formData.append('passport_photo', $('#photo-upload')[0].files[0]);
      }
      
      if ($('#id-upload')[0].files[0]) {
        formData.append('aadhaar_pan', $('#id-upload')[0].files[0]);
      }

      // Collect availability data - corrected selector for 24/7
      var availabilityValues = [];
      
      if ($('#wday_mor').is(':checked')) availabilityValues.push('Weekdays Morning');
      if ($('#wday_eve').is(':checked')) availabilityValues.push('Weekdays Evening');
      if ($('#wend_mor').is(':checked')) availabilityValues.push('Weekends Morning');
      if ($('#wend_eve').is(':checked')) availabilityValues.push('Weekends Evening');
      if ($('#24\\/7').is(':checked') || $('#24\\/7').is(':checked')) availabilityValues.push('24/7');
      
      // Join all selected values with commas and append to form data
      formData.append('availability', availabilityValues.join(','));

      $.ajax({
        url: "<?php echo base_url('RegistrationFormController/submitRegistration'); ?>",
        method: "POST",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (response) {
          if (response.status === 'success') {
            alert("Registration successful!");
            $('#registrationForm')[0].reset(); // Corrected form reset method
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

<?php $this->load->view('web-footer') ?>