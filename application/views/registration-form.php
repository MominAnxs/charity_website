<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

      <?php $this->load->view('web-links') ?>

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
    
    <form id="donationForm">
      <div class="registration-form-section">
        <div class="registration-form-section-title">Basic Details</div>
        
        <div class="registration-form-field">
          <label class="registration-form-label" for="fullName">Full Name</label>
          <input class="registration-form-input" type="text" id="fullName" placeholder=" " required>
        </div>
        
        <div class="registration-form-field">
          <label class="registration-form-label" for="email">Email Address</label>
          <input class="registration-form-input" type="email" id="email" placeholder=" " required>
        </div>
        
        <div class="registration-form-row">
          <div class="registration-form-column">
            <div class="registration-form-field">
              <label class="registration-form-label" for="phone">Phone Number</label>
              <input class="registration-form-input" type="tel" id="phone" placeholder=" ">
            </div>
          </div>
          
          <div class="registration-form-column">
            <div class="registration-form-field">
              <label class="registration-form-label" for="gender">Gender</label>
              <input class="registration-form-input" type="text" id="gender" placeholder=" ">
            </div>
          </div>          
          <div class="registration-form-column">
            <div class="registration-form-field">
              <label class="registration-form-label" for="gender">Date Of Birth</label>
              <input class="registration-form-input" type="text" id="gender" placeholder=" ">
            </div>
          </div>
        </div>

        <div class="registration-form-field">
          <label class="registration-form-label" for="email">Address</label>
          <textarea rows="4" class="w-100 registration-form-input"></textarea>
        </div>

        <div class="registration-form-row">
          <div class="registration-form-column">
            <div class="registration-form-field">
              <label class="registration-form-label" for="phone">Years OF Experiance</label>
              <input class="registration-form-input" type="text" id="exp" placeholder=" ">
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
                <input class="registration-form-checkbox" type="checkbox" id="anonymous">
                <span class="registration-form-checkbox-ui"></span>
              </div>
              <label class="registration-form-label" for="anonymous">Weekdays Morning</label>
            </div>

            <div class="registration-form-anonymous">
              <div class="registration-form-checkbox-container">
                <input class="registration-form-checkbox" type="checkbox" id="anonymous">
                <span class="registration-form-checkbox-ui"></span>
              </div>
              <label class="registration-form-label" for="anonymous">Weekdays Evening</label>
            </div>

            <div class="registration-form-anonymous">
              <div class="registration-form-checkbox-container">
                <input class="registration-form-checkbox" type="checkbox" id="anonymous">
                <span class="registration-form-checkbox-ui"></span>
              </div>
              <label class="registration-form-label" for="anonymous">Weekends Morning</label>
            </div>

            <div class="registration-form-anonymous">
              <div class="registration-form-checkbox-container">
                <input class="registration-form-checkbox" type="checkbox" id="anonymous">
                <span class="registration-form-checkbox-ui"></span>
              </div>
              <label class="registration-form-label" for="anonymous">Weekends Evening</label>
            </div>

            <div class="registration-form-anonymous">
              <div class="registration-form-checkbox-container">
                <input class="registration-form-checkbox" type="checkbox" id="anonymous">
                <span class="registration-form-checkbox-ui"></span>
              </div>
              <label class="registration-form-label" for="anonymous">24/7</label>
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

<?php $this->load->view('web-footer') ?>