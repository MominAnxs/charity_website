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

<!-- donation-form starts -->

<div class="wrapper">
  <div class="donation-form-container-2 my-5 mx-auto">
    <div class="donation-form-bg-circle donation-form-bg-circle-1"></div>
    <div class="donation-form-bg-circle donation-form-bg-circle-2"></div>
    
    <div class="donation-form-sparkles" id="sparkles"></div>
    <div class="donation-form-success-icon" id="successIcon"></div>
    
    <div class="donation-form-header">
      <h1>Make a Donation!</h1>
    </div>
    
    <form id="donationForm" class="donation-registration-form">
      <div class="donation-form-section">
        <div class="donation-form-section-title">Basic Details</div>
        
        <div class="donation-form-field">
          <label class="donation-form-label" for="first_name">First Name</label>
          <input class="donation-form-input" type="text" id="first_name" name="first_name" placeholder="Enter First Name" required>

        </div>

        <div class="donation-form-field">

          <label class="donation-form-label" for="last_name">Last Name</label>
          <input class="donation-form-input" type="text" id="last_name" name="last_name" placeholder="Enter Last Name" required>

        </div>
        
        <div class="donation-form-field">
          <label class="donation-form-label" for="email">Email Address</label>
          <input class="donation-form-input" type="email" id="email" name="email" placeholder="Enter Email Address" required>
        </div>

        <div class="donation-form-field">
          <label class="donation-form-label" for="password">Create Password</label>
          <input class="donation-form-input" type="password" id="password" name="password" placeholder="Create Your Password" required>
        </div>
        
        <div class="donation-form-row">
          <div class="donation-form-column">
            <div class="donation-form-field">
              <label class="donation-form-label" for="phone">Phone Number</label>
              <input class="donation-form-input" type="tel" id="phone" name="phone" placeholder="Enter Phone Number">
            </div>
          </div>
          
          <div class="donation-form-column">
            <div class="donation-form-field">
              <label class="donation-form-label" for="gender">Gender <em>(MALE, FEMALE or OTHER)</em></label>
              <input class="donation-form-input" type="text" id="gender" name="gender"  placeholder="Enter Your Gender (in capital)">
            </div>
          </div>

        </div>

        <div class="donation-form-row mb-3">
          <div class="donation-form-column">
            <div class="donation-form-field d-flex align-items-center" style="gap: 10px;">
              <label class="donation-form-label mb-0" for="donate_now">Donate Now</label>
              <input type="radio" id="donate_now" name="donation_status" checked>
            </div>
          </div>

          <div class="donation-form-column">
            <div class="donation-form-field d-flex align-items-center" style="gap: 10px;">
              <label class="donation-form-label mb-0" for="donate_later">Donate Later</label>
              <input type="radio" id="donate_later" name="donation_status">
            </div>
          </div>
        </div>

        <div class="donation-form-field mb-0" id="donationAmountSection">
          <label class="donation-form-label" for="donationamount">Donation Amount</label>
          <input class="donation-form-input" type="number" id="donationamount" name="donation_amount" placeholder="Enter Donation Amount" required>
        </div>

      </div>
      <div id="paymentSection">
      <div class="donation-form-section">
        <div class="donation-form-section-title">Bank Details</div>
        
        <div class="donation-form-field">
          <label class="donation-form-label" for="cardNumber">Card Number</label>
          <input class="donation-form-input" type="text" id="cardNumber" name="card_number" placeholder="Enter Card Number" required>
        </div>
        
        <div class="donation-form-row">
          <div class="donation-form-column">
            <div class="donation-form-field">
              <label class="donation-form-label" for="expiryDate">Expiration Date <em>(MM/YY)</em></label>
              <input class="donation-form-input" type="text" id="expiryDate" name="exp_date" placeholder="Enter Expiration Date" required>
            </div>
          </div>
          
          <div class="donation-form-column">
            <div class="donation-form-field">
              <label class="donation-form-label" for="cvv">CVV Number</label>
              <input class="donation-form-input" type="text" id="cvv" name="cvv_number" placeholder="Enter CVV Number" required>
            </div>
          </div>
        </div>
        
        <div class="donation-form-field">
          <label class="donation-form-label" for="cardHolder">Card Holder's Name</label>
          <input class="donation-form-input" type="text" id="cardHolder" name="ch_name" placeholder="Enter Card Holder's Name" required>
        </div>
      </div>
    </div>
      
      <div class="donation-form-section">
        <div class="donation-form-section-title justify-content-center">OR</div>
        
        <div class="donation-form-payment-methods">
          <div class="donation-form-payment-option" data-method="gpay">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
            <path fill="#e64a19" d="M42.858,11.975c-4.546-2.624-10.359-1.065-12.985,3.481L23.25,26.927  c-1.916,3.312,0.551,4.47,3.301,6.119l6.372,3.678c2.158,1.245,4.914,0.506,6.158-1.649l6.807-11.789   C48.176,19.325,46.819,14.262,42.858,11.975z"></path><path fill="#fbc02d" d="M35.365,16.723l-6.372-3.678c-3.517-1.953-5.509-2.082-6.954,0.214l-9.398,16.275  c-2.624,4.543-1.062,10.353,3.481,12.971c3.961,2.287,9.024,0.93,11.311-3.031l9.578-16.59 C38.261,20.727,37.523,17.968,35.365,16.723z"></path><path fill="#43a047" d="M36.591,8.356l-4.476-2.585c-4.95-2.857-11.28-1.163-14.137,3.787L9.457,24.317    c-1.259,2.177-0.511,4.964,1.666,6.22l5.012,2.894c2.475,1.43,5.639,0.582,7.069-1.894l9.735-16.86 c2.017-3.492,6.481-4.689,9.974-2.672L36.591,8.356z"></path><path fill="#1e88e5" d="M19.189,13.781l-4.838-2.787c-2.158-1.242-4.914-0.506-6.158,1.646l-5.804,10.03    c-2.857,4.936-1.163,11.252,3.787,14.101l3.683,2.121l4.467,2.573l1.939,1.115c-3.442-2.304-4.535-6.92-2.43-10.555l1.503-2.596 l5.504-9.51C22.083,17.774,21.344,15.023,19.189,13.781z"></path>
            </svg>
            <span class="donation-form-payment-name">Google Pay</span>
          </div>
          
          <div class="donation-form-payment-option" data-method="phonepe">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
            <path fill="#4527a0" d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5    V37z"></path><path fill="#fff" d="M32.267,20.171c0-0.681-0.584-1.264-1.264-1.264h-2.334l-5.35-6.25  c-0.486-0.584-1.264-0.778-2.043-0.584l-1.848,0.584c-0.292,0.097-0.389,0.486-0.195,0.681l5.836,5.666h-8.851  c-0.292,0-0.486,0.195-0.486,0.486v0.973c0,0.681,0.584,1.506,1.264,1.506h1.972v4.305c0,3.502,1.611,5.544,4.723,5.544 c0.973,0,1.378-0.097,2.35-0.486v3.112c0,0.875,0.681,1.556,1.556,1.556h0.786c0.292,0,0.584-0.292,0.584-0.584V21.969h2.812    c0.292,0,0.486-0.195,0.486-0.486V20.171z M26.043,28.413c-0.584,0.292-1.362,0.389-1.945,0.389c-1.556,0-2.097-0.778-2.097-2.529   v-4.305h4.043V28.413z"></path>
            </svg>
            <span class="donation-form-payment-name">PhonePe</span>
          </div>
          
          <div class="donation-form-payment-option" data-method="paytm">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
            <path fill="#0d47a1" d="M5.446 18.01H.548c-.277 0-.502.167-.503.502L0 30.519c-.001.3.196.45.465.45.735 0 1.335 0 2.07 0C2.79 30.969 3 30.844 3 30.594 3 29.483 3 28.111 3 27l2.126.009c1.399-.092 2.335-.742 2.725-2.052.117-.393.14-.733.14-1.137l.11-2.862C7.999 18.946 6.949 18.181 5.446 18.01zM4.995 23.465C4.995 23.759 4.754 24 4.461 24H3v-3h1.461c.293 0 .534.24.534.535V23.465zM13.938 18h-3.423c-.26 0-.483.08-.483.351 0 .706 0 1.495 0 2.201C10.06 20.846 10.263 21 10.552 21h2.855c.594 0 .532.972 0 1H11.84C10.101 22 9 23.562 9 25.137c0 .42.005 1.406 0 1.863-.008.651-.014 1.311.112 1.899C9.336 29.939 10.235 31 11.597 31h4.228c.541 0 1.173-.474 1.173-1.101v-8.274C17.026 19.443 15.942 18.117 13.938 18zM14 27.55c0 .248-.202.45-.448.45h-1.105C12.201 28 12 27.798 12 27.55v-2.101C12 25.202 12.201 25 12.447 25h1.105C13.798 25 14 25.202 14 25.449V27.55zM18 18.594v5.608c.124 1.6 1.608 2.798 3.171 2.798h1.414c.597 0 .561.969 0 .969H19.49c-.339 0-.462.177-.462.476v2.152c0 .226.183.396.422.396h2.959c2.416 0 3.592-1.159 3.591-3.757v-8.84c0-.276-.175-.383-.342-.383h-2.302c-.224 0-.355.243-.355.422v5.218c0 .199-.111.316-.29.316H21.41c-.264 0-.409-.143-.409-.396v-5.058C21 18.218 20.88 18 20.552 18c-.778 0-1.442 0-2.22 0C18.067 18 18 18.263 18 18.594L18 18.594z"></path><path fill="#00adee" d="M27.038 20.569v-2.138c0-.237.194-.431.43-.431H28c1.368-.285 1.851-.62 2.688-1.522.514-.557.966-.704 1.298-.113L32 18h1.569C33.807 18 34 18.194 34 18.431v2.138C34 20.805 33.806 21 33.569 21H32v9.569C32 30.807 31.806 31 31.57 31h-2.14C29.193 31 29 30.807 29 30.569V21h-1.531C27.234 21 27.038 20.806 27.038 20.569L27.038 20.569zM42.991 30.465c0 .294-.244.535-.539.535h-1.91c-.297 0-.54-.241-.54-.535v-6.623-1.871c0-1.284-2.002-1.284-2.002 0v8.494C38 30.759 37.758 31 37.461 31H35.54C35.243 31 35 30.759 35 30.465V18.537C35 18.241 35.243 18 35.54 18h1.976c.297 0 .539.241.539.537v.292c1.32-1.266 3.302-.973 4.416.228 2.097-2.405 5.69-.262 5.523 2.375 0 2.916-.026 6.093-.026 9.033 0 .294-.244.535-.538.535h-1.891C45.242 31 45 30.759 45 30.465c0-2.786 0-5.701 0-8.44 0-1.307-2-1.37-2 0v8.44H42.991z"></path>
            </svg>
            <span class="donation-form-payment-name">Paytm</span>
          </div>
        </div>
        
        <div class="donation-form-anonymous">
          <div class="donation-form-checkbox-container">
            <input class="donation-form-checkbox" type="checkbox" id="anonymous" name="anonymous">
            <span class="donation-form-checkbox-ui"></span>
          </div>
          <label class="donation-form-label mb-0" for="anonymous">Donate Anonymously</label>
        </div>
      </div>
      
      <div class="donation-form-section">
        <button type="submit" class="donation-form-submit" id="donate_button">
          <span>Donate Now</span>
        </button>
      </div>
    </form>
  </div>
  </div>

<!-- donation-form ends -->

<!-- Jquery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

// handling the donation form and registration form toggle
document.addEventListener("DOMContentLoaded", function () {
  const donateNow = document.getElementById("donate_now");
  const donateLater = document.getElementById("donate_later");

  const donationForm = document.getElementById("donationForm"); // target original form
  const password = document.getElementsByClassName("donation-form-field")[3];
  const passwordInput = document.getElementById("password");

  const donationAmount = document.getElementById("donationamount")?.closest(".donation-form-field");
  const bankDetailsSection = document.querySelectorAll(".donation-form-section")[1];
  const upiSection = document.querySelectorAll(".donation-form-section")[2];
  const anonymousCheckbox = document.querySelector(".donation-form-anonymous");
  const submitButton = document.getElementById("donate_button");
  const headerText = document.querySelector(".donation-form-header h1");

  // Initially hide password and remove required
  if (passwordInput) {
    passwordInput.removeAttribute("required");
  }
  if (password) password.style.display = "none";

  function toggleDonationFields(show) {
    if (password) {
      password.style.display = show ? "none" : "block";
      if (passwordInput) {
        if (show) {
          passwordInput.removeAttribute("required");
        } else {
          passwordInput.setAttribute("required", true);
        }
      }
    }

    if (donationAmount) donationAmount.style.display = show ? "block" : "none";
    if (bankDetailsSection) bankDetailsSection.style.display = show ? "block" : "none";
    if (upiSection) upiSection.style.display = show ? "block" : "none";
    if (anonymousCheckbox) anonymousCheckbox.style.display = show ? "flex" : "none";
    if (submitButton) submitButton.innerText = show ? "Donate Now" : "Get Registered";
    if (headerText) headerText.innerText = show ? "Make a Donation!" : "Register Without Donation";

    if (donationForm) {
      donationForm.id = show ? "donationForm" : "registrationForm";
    }
  }

  donateNow.addEventListener("change", function () {
    toggleDonationFields(true);

    document.getElementById("paymentSection").style.display = "block";

    document.getElementById("donationamount").setAttribute("required", true);
    document.getElementById("cardNumber").setAttribute("required", true);
    document.getElementById("expiryDate").setAttribute("required", true);
    document.getElementById("cvv").setAttribute("required", true);
    document.getElementById("cardHolder").setAttribute("required", true);
  });

  donateLater.addEventListener("change", function () {
    toggleDonationFields(false);

    document.getElementById("paymentSection").style.display = "none";

    document.getElementById("donationamount").removeAttribute("required");
    document.getElementById("cardNumber").removeAttribute("required");
    document.getElementById("expiryDate").removeAttribute("required");
    document.getElementById("cvv").removeAttribute("required");
    document.getElementById("cardHolder").removeAttribute("required");
  });
});


// Add event listeners for real-time validation
document.addEventListener("DOMContentLoaded", function() {
  // Get all form inputs that need validation
  const inputs = [
    document.getElementById('first_name'),
    document.getElementById('last_name'),
    document.getElementById('email'),
    document.getElementById('phone'),
    document.getElementById('gender'),
    document.getElementById('password') ,
    document.getElementById('donationamount'),
    document.getElementById('cardNumber'),
    document.getElementById('expiryDate'),
    document.getElementById('cvv'),
    document.getElementById('cardHolder')
  ];
  
  // Add blur (focus lost) event listeners to each input
  inputs.forEach(input => {
    if (input) {
      input.addEventListener('blur', function() {
        validateField(this);
      });
    }
  });
  
  // Add input event listeners for real-time validation on some critical fields
  const criticalFields = [
    document.getElementById('email'),
    document.getElementById('cardNumber'),
    document.getElementById('expiryDate'),
    document.getElementById('cvv')
  ];
  
  criticalFields.forEach(field => {
    if (field) {
      field.addEventListener('input', function() {
        validateField(this);
      });
    }
  });
});

// Function to validate a single field
function validateField(inputElement) {
  const nameRegex = /^[a-zA-Z0-9]+$/;
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const phoneRegex = /^\d+$/;
  const genderRegex = /^(MALE|FEMALE|OTHER)$/;
  const passworRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
  const AmountRegex = /^\d+$/;
  const cardNumberRegex = /^\d{15,16}$/;
  const expiryDateRegex = /^(0[1-9]|1[0-2])\/\d{2}$/;
  const cvvRegex = /^\d{3,4}$/;
  const cardHolderRegex = /^[a-zA-Z\s]+$/;
  
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
 
    case 'donationamount':
      if (!AmountRegex.test(value)) {
        showError(inputElement, 'Donation amount must be a number.');
        return false;
      }
      break;
      
    case 'cardNumber':
      if (isNaN(value)) {
        showError(inputElement, 'Card number must contain only numbers.');
        return false;
      }
      if (!/^\d{15,16}$/.test(value)) {
        showError(inputElement, 'Card number must be 15 to 16 digits.');
        return false;
      }
      break;
      
    case 'expiryDate':
      if (!/^(0[1-9]|1[0-2])\/(\d{2}|\d{4})$/.test(value)) {
        showError(inputElement, 'Enter a valid expiry date (MM/YY or MM/YYYY).');
        return false;
      }
      break;
      
    case 'cvv':
      if (isNaN(value)) {
        showError(inputElement, 'CVV must contain only numbers.');
        return false;
      }
      if (!/^\d{3,4}$/.test(value)) {
        showError(inputElement, 'CVV must be 3 or 4 digits.');
        return false;
      }
      break;
      
    case 'cardHolder':
      if (!/^[a-zA-Z\s]+$/.test(value)) {
        showError(inputElement, 'Card holder name must contain only letters.');
        return false;
      }
      break;
  }
  
  return true;
}

// Modify the existing validateForm function to use the new validateField function
function validateForm() {
  let isValid = true;
  
  const fields = [
    document.getElementById('first_name'),
    document.getElementById('last_name'),
    document.getElementById('email'),
    document.getElementById('phone'),
    document.getElementById('gender')
  ];
  
  // Validate basic fields
  fields.forEach(field => {
    if (field && !validateField(field)) {
      isValid = false;
    }
  });

  function setupExpiryDateAutoFormat() {
  const expiryDateInput = document.getElementById('expiryDate');
  
  if (expiryDateInput) {
    expiryDateInput.addEventListener('input', function(e) {
      let value = e.target.value;
      
      // Remove any non-digit characters
      value = value.replace(/[^\d]/g, '');
      
      // Add slash after month automatically
      if (value.length >= 2) {
        // Format as MM/YY or MM/YYYY
        value = value.substring(0, 2) + '/' + value.substring(2);
      }
      
      // Update the input value
      e.target.value = value;
    });
    
    // Additional logic to handle backspace and delete
    expiryDateInput.addEventListener('keydown', function(e) {
      const value = e.target.value;
      
      // Handle backspace at the slash position
      if ((e.key === 'Backspace' || e.key === 'Delete') && 
          (value.length === 3 && value.charAt(2) === '/')) {
        e.preventDefault();
        e.target.value = value.substring(0, 2);
      }
    });
  }
}
  
// Check if it's a donation form
const isDonation = document.getElementById('donate_now').checked;
  
  if (isDonation) {
    const donationFields = [
      document.getElementById('donationamount'),
      document.getElementById('cardNumber'),
      document.getElementById('expiryDate'),
      document.getElementById('cvv'),
      document.getElementById('cardHolder')
    ];
    
    // Validate donation fields
    donationFields.forEach(field => {
      if (field && !validateField(field)) {
        isValid = false;
      }
    });
  }
  
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

// AJAX form submission with validation integrated
$(document).ready(function () {
  $('.donation-registration-form').submit(function (event) {
    event.preventDefault();
    
    // Run the validation first
    if (!validateForm()) {
      console.log("Form validation failed");
      return false; // Stop form submission if validation fails
    }
    
    console.log("Form validation passed, proceeding with submission");

    const formId = $(this).attr('id');
    const isDonation = formId === "donationForm";

    // Prepare form data
    var formData = new FormData();
    formData.append('first_name', $('#first_name').val());
    formData.append('last_name', $('#last_name').val());
    formData.append('email', $('#email').val());
    formData.append('phone', $('#phone').val());
    formData.append('gender', $('#gender').val());
    formData.append('password', $('#password').val());

    if (isDonation) {
      formData.append('donation_amount', $('#donationamount').val());
      formData.append('card_number', $('#cardNumber').val());
      formData.append('exp_date', $('#expiryDate').val());
      formData.append('cvv_number', $('#cvv').val());
      formData.append('ch_name', $('#cardHolder').val());
      formData.append('anonymous', $('#anonymous').is(':checked') ? 1 : 0);
    }

    formData.append('form_type', isDonation ? 'donation' : 'registration');

    $.ajax({
      url: "<?php echo base_url('DonationFormController/submitDonation'); ?>",
      method: "POST",
      data: formData,
      processData: false,
      contentType: false,
      dataType: "json",
      success: function (response) {
        if (response.status === 'success') {
          alert("Submission successful!");
          $('.donation-registration-form')[0].reset(); // reset form
        } else {
          alert(response.message || "Submission failed.");
        }
      },
      error: function (xhr, status, error) {
        console.error(error);
        alert("An error occurred. Please try again.");
      }
    });
  });
});

</script>

<?php $this->load->view('web-footer') ?>