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
            
            <form class="sign-up-page-form">
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
                        <a href="../HomeController/sign_up" class="sign-up-page-login">Sign Up</a>
                    </div>                    
                    <div>
                        <span class="sign-up-page-login-text">Forgot Password?</span>
                        <button type="button" class="sign-up-page-login">Password Recovery</button>
                    </div>
                    <button type="submit" class="sign-up-page-submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <?php $this->load->view('web-footer'); ?>