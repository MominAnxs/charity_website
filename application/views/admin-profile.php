<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE 4 | Fixed Sidebar">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"><!--end::Primary Meta Tags-->

    <?php $this->load->view('admin-links'); ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">

</head> <!--end::Head--> <!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Start Navbar Links-->
                <ul class="navbar-nav w-100 d-flex justify-content-between align-items-center px-3">
                    <li> <div class="sidebar-brand p-0"> <!--begin::Brand Link--> <a href="../index.php" class="brand-link"> <!--begin::Brand Image--> <img src="" alt="" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">xcfdh</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> </li>
                    <li class="nav-item"> <a class="nav-link p-0 d-flex align-items-center" data-lte-toggle="sidebar" href="#" role="button"> <i class="fa-solid fa-bars fs-3"></i> </a> </li>
                </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->
            </div> <!--end::Container-->
        </nav> <!--end::Header-->

        <?php $this->load->view('admin-sidebar'); ?>

        <!--begin::App Main-->
        <main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-12"> <!-- Default box -->

                            <!-- profile-section-starts -->

                            <div class="volunteer-profile-container mt-5">
                                <div class="volunteer-profile-header">
                                    <button id="editProfileBtn" class="volunteer-profile-edit-btn">Edit Profile</button>
                                    <button id="saveProfileBtn" class="volunteer-profile-save-btn">Save Changes</button>
                                    <button id="cancelEditBtn" class="volunteer-profile-cancel-btn">Cancel</button>
                                </div>
                                
                                <form id="profileForm" class="volunteer-profile-form">
                                    <div class="volunteer-profile-field">
                                        <label for="fullName">Full Name:</label>
                                        <input type="text" id="fullName" class="volunteer-profile-input" value="XYZ" placeholder="Enter your full name" disabled>
                                    </div>
                                    
                                    <div class="volunteer-profile-field">
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" class="volunteer-profile-input" value="xyz123@example.com" placeholder="Enter your email" disabled>
                                    </div>
                                    
                                    <div class="volunteer-profile-field">
                                        <label for="dob">Date of Birth:</label>
                                        <input type="text" id="dob" class="volunteer-profile-input" value="XYZ" placeholder="DD/MM/YYYY" disabled>
                                    </div>
                                    
                                    <div class="volunteer-profile-field">
                                        <label for="phone">Phone Number:</label>
                                        <input type="tel" id="phone" class="volunteer-profile-input" value="0000000000" placeholder="Enter your phone number" disabled>
                                    </div>
                                    
                                    <div class="volunteer-profile-field" style="grid-column: span 2;">
                                        <label for="address">Address:</label>
                                        <textarea id="address" class="volunteer-profile-input volunteer-profile-textarea" placeholder="Enter your address" disabled>xyz123@example.com</textarea>
                                    </div>
                                </form>
                            </div>

                            <!-- profile-section-ends -->

                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content-->
        </main> <!--end::App Main--> <!--begin::Footer-->
    </div> <!--end::App Wrapper--> <!--begin::Script--> 
    <!--begin::Required Plugin(AdminLTE)-->
    <script src="AdminLTE/dist/js/adminlte.js"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            const editBtn = document.getElementById('editProfileBtn');
            const saveBtn = document.getElementById('saveProfileBtn');
            const cancelBtn = document.getElementById('cancelEditBtn');
            const form = document.getElementById('profileForm');
            const inputs = form.querySelectorAll('input, textarea');
            
            // Store original values for cancel functionality
            let originalValues = {};
            
            // Initialize with image placeholders visible and upload elements hidden
            document.querySelectorAll('.volunteer-profile-image-icon, .volunteer-profile-image-text').forEach(el => {
                el.style.display = 'none';
            });
            
            // Enable edit mode
            editBtn.addEventListener('click', function() {
                // Store original values
                inputs.forEach(input => {
                    originalValues[input.id] = input.value;
                });
                
                // Enable all inputs
                inputs.forEach(input => {
                    input.disabled = false;
                });
                
                // Show save and cancel buttons
                editBtn.style.display = 'none';
                saveBtn.style.display = 'inline-block';
                cancelBtn.style.display = 'inline-block';
                
                // Show upload elements
                document.querySelectorAll('.volunteer-profile-image-icon, .volunteer-profile-image-text').forEach(el => {
                    el.style.display = 'block';
                });
            });
            
            // Cancel edit mode
            cancelBtn.addEventListener('click', function() {
                // Restore original values
                inputs.forEach(input => {
                    if (originalValues[input.id]) {
                        input.value = originalValues[input.id];
                    }
                });
                
                // Disable all inputs
                inputs.forEach(input => {
                    input.disabled = true;
                });
                
                // Hide save and cancel buttons
                editBtn.style.display = 'inline-block';
                saveBtn.style.display = 'none';
                cancelBtn.style.display = 'none';
                
                // Hide upload elements
                document.querySelectorAll('.volunteer-profile-image-icon, .volunteer-profile-image-text').forEach(el => {
                    el.style.display = 'none';
                });
            });
            
            // Save changes
            saveBtn.addEventListener('click', function() {
                // Disable all inputs
                inputs.forEach(input => {
                    input.disabled = true;
                });
                
                // Hide save and cancel buttons
                editBtn.style.display = 'inline-block';
                saveBtn.style.display = 'none';
                cancelBtn.style.display = 'none';

                // Update original values with new values
                inputs.forEach(input => {
                    originalValues[input.id] = input.value;
                });
                
                // Hide upload elements
                document.querySelectorAll('.volunteer-profile-image-icon, .volunteer-profile-image-text').forEach(el => {
                    el.style.display = 'none';
                });
                
            });
            
        });

    </script> <!--end::OverlayScrollbars Configure--> <!--end::Script-->
</body><!--end::Body-->

</html>