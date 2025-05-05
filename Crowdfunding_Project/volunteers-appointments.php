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
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="AdminLTE/dist/css/adminlte.css"><!--end::Required Plugin(AdminLTE)-->

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/volunteer-panel.css"><!--end::style.css-->
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
        </nav> <!--end::Header--> <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
            <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="../index.php" class="brand-link"> <!--begin::Brand Image--> <img src="" alt="" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light"></span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2"> <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                        <li class="nav-item"> <a href="volunteer-dashboard.php" class="nav-link"> <i class="fa-solid fa-gauge mt-1"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>                        
                        <li class="nav-item"> <a href="volunteers-appointments.php" class="nav-link"> <i class="fa-regular fa-calendar-check mt-1"></i>
                                <p>
                                    Appointments
                                </p>
                            </a>
                        </li>                        
                        <li class="nav-item"> <a href="volunteer-d-history.php" class="nav-link"> <i class="fa-solid fa-clock-rotate-left mt-1"></i>
                                <p>
                                    Donation History
                                </p>
                            </a>
                        </li>                                              
                        <li class="nav-item"> <a href="volunteer-profile.php" class="nav-link"> <i class="fa-solid fa-user mt-1"></i>
                                <p>
                                    Profile
                                </p>
                            </a>
                        </li>
                    </ul> <!--end::Sidebar Menu-->
                </nav>
            </div> <!--end::Sidebar Wrapper-->
        </aside> <!--end::Sidebar--> <!--begin::App Main-->
        <main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-12"> <!-- Default box -->
                            <!-- initial-three-appt-boxes starts -->
                            <div class="container initial-boxes-container">
                                <div class="row g-4 d-flex justify-content-center">
                                    <!-- Total Number of Appointments -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="initial-boxes-card">
                                            <i class="fas fa-calendar-check initial-boxes-icon"></i>
                                            <div class="initial-boxes-title">Total Number of appointments</div>
                                            <div class="initial-boxes-value">12</div>
                                        </div>
                                    </div>
                                    
                                    <!-- Up-Coming Appointments -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="initial-boxes-card">
                                            <i class="fas fa-calendar-alt initial-boxes-icon"></i>
                                            <div class="initial-boxes-title">Up-Coming Appointments</div>
                                            <div class="initial-boxes-value">4</div>
                                        </div>
                                    </div>
                                    
                                    <!-- Past Appointments -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="initial-boxes-card">
                                            <i class="fas fa-history initial-boxes-icon"></i>
                                            <div class="initial-boxes-title">Past Appointments</div>
                                            <div class="initial-boxes-value">8</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- initial-three-appt-boxes ends -->

                            <!-- appt-section starts -->

                            <div class="appt-page-container">
                                <!-- Appointments Grid -->
                                <div class="appt-page-appointments-container animate__animated animate__fadeInUp" style="animation-delay: 0.3s">
                                    <div class="appt-page-section-title">Your Appointments</div>
                                    <div class="appt-page-appointments-grid">
                                        <!-- Appointment 1 -->
                                        <div class="appt-page-appointment-card appt-page-past animate__animated animate__fadeIn" style="animation-delay: 0.4s">
                                            <div class="appt-page-avatar">
                                                <i class="fas fa-user"></i>
                                            </div>
                                            <div class="appt-page-appointment-name">Appointment Name</div>
                                            <div class="appt-page-appointment-time">11:30 PM</div>
                                            <div class="appt-page-appointment-date">21/03/2025</div>
                                            <div class="appt-page-status-indicator">Past</div>
                                        </div>
                                        
                                        <!-- Appointment 2 -->
                                        <div class="appt-page-appointment-card appt-page-past animate__animated animate__fadeIn" style="animation-delay: 0.5s">
                                            <div class="appt-page-avatar">
                                                <i class="fas fa-user"></i>
                                            </div>
                                            <div class="appt-page-appointment-name">Appointment Name</div>
                                            <div class="appt-page-appointment-time">1:45 PM</div>
                                            <div class="appt-page-appointment-date">22/03/2025</div>
                                            <div class="appt-page-status-indicator">Past</div>
                                        </div>
                                        
                                        <!-- Appointment 3 -->
                                        <div class="appt-page-appointment-card appt-page-past animate__animated animate__fadeIn" style="animation-delay: 0.6s">
                                            <div class="appt-page-avatar">
                                                <i class="fas fa-user"></i>
                                            </div>
                                            <div class="appt-page-appointment-name">Appointment Name</div>
                                            <div class="appt-page-appointment-time">10:45 AM</div>
                                            <div class="appt-page-appointment-date">23/03/2025</div>
                                            <div class="appt-page-status-indicator">Past</div>
                                        </div>
                                        
                                        <!-- Appointment 4 -->
                                        <div class="appt-page-appointment-card appt-page-upcoming animate__animated animate__fadeIn" style="animation-delay: 0.7s">
                                            <div class="appt-page-avatar">
                                                <i class="fas fa-user"></i>
                                            </div>
                                            <div class="appt-page-appointment-name">Appointment Name</div>
                                            <div class="appt-page-appointment-time">3:00 PM</div>
                                            <div class="appt-page-appointment-date">24/03/2025</div>
                                            <div class="appt-page-status-indicator">Upcoming</div>
                                        </div>
                                        
                                        <!-- Appointment 5 -->
                                        <div class="appt-page-appointment-card appt-page-upcoming animate__animated animate__fadeIn" style="animation-delay: 0.8s">
                                            <div class="appt-page-avatar">
                                                <i class="fas fa-user"></i>
                                            </div>
                                            <div class="appt-page-appointment-name">Appointment Name</div>
                                            <div class="appt-page-appointment-time">10:00 AM</div>
                                            <div class="appt-page-appointment-date">25/03/2025</div>
                                            <div class="appt-page-status-indicator">Upcoming</div>
                                        </div>
                                        
                                        <!-- Appointment 6 -->
                                        <div class="appt-page-appointment-card appt-page-upcoming animate__animated animate__fadeIn" style="animation-delay: 0.9s">
                                            <div class="appt-page-avatar">
                                                <i class="fas fa-user"></i>
                                            </div>
                                            <div class="appt-page-appointment-name">Appointment Name</div>
                                            <div class="appt-page-appointment-time">2:00 PM</div>
                                            <div class="appt-page-appointment-date">26/03/2025</div>
                                            <div class="appt-page-status-indicator">Upcoming</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- appt-section ends -->

                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content-->
        </main> <!--end::App Main--> <!--begin::Footer-->
    </div> <!--end::App Wrapper--> <!--begin::Script-->
    <!--begin::Required Plugin(AdminLTE)-->
    <script src="AdminLTE/dist/js/adminlte.js"></script> 
    <!--end::Required Plugin(AdminLTE)-->
</body><!--end::Body-->

</html>