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
                <h1>Welcome Back!<br>Login to Continue</h1>
            </div>
            
            <form class="sign-up-page-form" id="loginForm" method="post">
                <div class="sign-up-page-form-field">
                    <label class="sign-up-page-label" for="email">Email Address:</label>
                    <input class="sign-up-page-input" type="email" id="email" name="email" required>
                </div>
                
                <div class="sign-up-page-form-field">
                    <label class="sign-up-page-label" for="password">Password:</label>
                    <input class="sign-up-page-input" type="password" id="password" name="password" required>
                </div>
                
                <div class="sign-up-page-buttons">
                    <div>
                        <span class="sign-up-page-login-text">New Here?</span>
                        <a href="<?php echo base_url('HomeController/sign_up'); ?>" class="sign-up-page-login">Sign Up</a>
                    </div>                    
                    <div>
                        <span class="sign-up-page-login-text">Forgot Password?</span>
                        <button type="button" class="sign-up-page-login">Password Recovery</button>
                    </div>
                    <button type="submit" class="sign-up-page-submit">Login</button>
                </div>
            </form>
        </div>
        <div id="loginError" class="w-100 text-center" style="color: red; margin-top: 10px;"></div>
    </div>
</div>

<!-- jquery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $('#loginForm').on('submit', function(e) {
        e.preventDefault();

        // Prepare form data
        var formData = new FormData();
        formData.append('email', $('#email').val());
        formData.append('password', $('#password').val());

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url("LoginLogoutController/login"); ?>',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    window.location.href = "<?php echo base_url('HomeController/index'); ?>"; // Redirect after login
                } else {
                    $('#loginError').text(response.message);
                }
            },
            error: function() {
                $('#loginError').text('An error occurred. Please try again.');
            }
        });
    });
</script>

    <?php $this->load->view('web-footer'); ?>