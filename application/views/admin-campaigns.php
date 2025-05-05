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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">

    <link rel="stylesheet" href="css/admin-panel.css"><!--end::style.css-->
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
                        <li class="nav-item"> <a href="admin-dashboard.php" class="nav-link"> <i class="fa-solid fa-gauge mt-1"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>                        
                        <li class="nav-item"> <a href="admin-volunteers.php" class="nav-link"> <i class="fa-solid fa-person"></i>
                                <p>
                                    Volunteers
                                </p>
                            </a>
                        </li>                        
                        <li class="nav-item"> <a href="admin-donor.php" class="nav-link"> <i class="fa-solid fa-hand-holding-heart"></i>
                                <p>
                                    Donors
                                </p>
                            </a>
                        </li>                                              
                        <li class="nav-item"> <a href="admin-campaigns.php" class="nav-link"> <i class="fa-solid fa-ribbon"></i>
                                <p>
                                    Campaigns
                                </p>
                            </a>
                        </li>                        
                        <li class="nav-item"> <a href="admin-appointments.php" class="nav-link"> <i class="fa-regular fa-calendar-check mt-1"></i>
                                <p>
                                    Appointments
                                </p>
                            </a>
                        </li>                        
                        <li class="nav-item"> <a href="admin-donation.php" class="nav-link"> <i class="fa-solid fa-clock-rotate-left mt-1"></i>
                                <p>
                                    Donation
                                </p>
                            </a>
                        </li>                        
                        <li class="nav-item"> <a href="admin-profile.php" class="nav-link"> <i class="fa-solid fa-user mt-1"></i>
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
                        <div class="col-12 cmpgn-page-container">

                            <div class="w-100 d-flex justify-content-end my-5">
                            <button class="d-history-page-button">Create Camapigns</button>
                            </div>

                            <!-- Campaigns Grid - First Row -->
                            <div class="cmpgn-page-grid">
                                <!-- Campaign 1 -->
                                <div class="cmpgn-page-card">
                                    <div class="cmpgn-page-status cmpgn-page-status-ongoing">Ongoing</div>
                                    <div class="cmpgn-page-image-container">
                                        <img class="cmpgn-page-image" src="/api/placeholder/200/200" alt="Education Drive">
                                    </div>
                                    <div class="cmpgn-page-content">
                                        <h3 class="cmpgn-page-card-title">Independence Day Education Drive</h3>
                                        <p class="cmpgn-page-card-text">"Empowering young minds by providing educational kits to underprivileged children."</p>
                                        <div class="cmpgn-page-card-date">Date : 15 Aug 2025</div>
                                        <a href="#" class="cmpgn-page-card-button">Read More</a>
                                    </div>
                                </div>
                                
                                <!-- Campaign 2 -->
                                <div class="cmpgn-page-card">
                                    <div class="cmpgn-page-status cmpgn-page-status-upcoming">Upcoming</div>
                                    <div class="cmpgn-page-image-container">
                                        <img class="cmpgn-page-image" src="/api/placeholder/200/200" alt="Teacher's Day">
                                    </div>
                                    <div class="cmpgn-page-content">
                                        <h3 class="cmpgn-page-card-title">World Teacher's Day Fundraiser</h3>
                                        <p class="cmpgn-page-card-text">"Supporting teachers with training programs and better classroom resources."</p>
                                        <div class="cmpgn-page-card-date">Date : 05 Oct 2025</div>
                                        <a href="#" class="cmpgn-page-card-button">Read More</a>
                                    </div>
                                </div>
                                
                                <!-- Campaign 3 -->
                                <div class="cmpgn-page-card">
                                    <div class="cmpgn-page-status cmpgn-page-status-upcoming">Upcoming</div>
                                    <div class="cmpgn-page-image-container">
                                        <img class="cmpgn-page-image" src="/api/placeholder/200/200" alt="Children's Day">
                                    </div>
                                    <div class="cmpgn-page-content">
                                        <h3 class="cmpgn-page-card-title">Children's Day Scholarship Program</h3>
                                        <p class="cmpgn-page-card-text">"Providing financial aid to children in need for their continued education."</p>
                                        <div class="cmpgn-page-card-date">Date : 14 Nov 2025</div>
                                        <a href="#" class="cmpgn-page-card-button">Read More</a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Campaigns Grid - Second Row -->
                            <div class="cmpgn-page-grid">
                                <!-- Campaign 4 -->
                                <div class="cmpgn-page-card">
                                    <div class="cmpgn-page-status cmpgn-page-status-ongoing">Ongoing</div>
                                    <div class="cmpgn-page-image-container">
                                        <img class="cmpgn-page-image" src="/api/placeholder/200/200" alt="Education Drive">
                                    </div>
                                    <div class="cmpgn-page-content">
                                        <h3 class="cmpgn-page-card-title">Rural Education Initiative</h3>
                                        <p class="cmpgn-page-card-text">"Bringing quality education resources to rural communities and establishing learning centers."</p>
                                        <div class="cmpgn-page-card-date">Date : 15 Aug 2025</div>
                                        <a href="#" class="cmpgn-page-card-button">Read More</a>
                                    </div>
                                </div>
                                
                                <!-- Campaign 5 -->
                                <div class="cmpgn-page-card">
                                    <div class="cmpgn-page-status cmpgn-page-status-ongoing">Ongoing</div>
                                    <div class="cmpgn-page-image-container">
                                        <img class="cmpgn-page-image" src="/api/placeholder/200/200" alt="Digital Literacy">
                                    </div>
                                    <div class="cmpgn-page-content">
                                        <h3 class="cmpgn-page-card-title">Digital Literacy Campaign</h3>
                                        <p class="cmpgn-page-card-text">"Equipping students with necessary digital skills and providing access to technology."</p>
                                        <div class="cmpgn-page-card-date">Date : 15 Aug 2025</div>
                                        <a href="#" class="cmpgn-page-card-button">Read More</a>
                                    </div>
                                </div>
                                
                                <!-- Campaign 6 -->
                                <div class="cmpgn-page-card">
                                    <div class="cmpgn-page-status cmpgn-page-status-ongoing">Ongoing</div>
                                    <div class="cmpgn-page-image-container">
                                        <img class="cmpgn-page-image" src="/api/placeholder/200/200" alt="Book Drive">
                                    </div>
                                    <div class="cmpgn-page-content">
                                        <h3 class="cmpgn-page-card-title">Books For All Initiative</h3>
                                        <p class="cmpgn-page-card-text">"Collecting and distributing educational books to schools and libraries in need."</p>
                                        <div class="cmpgn-page-card-date">Date : 15 Aug 2025</div>
                                        <a href="#" class="cmpgn-page-card-button">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Campaigns Grid - Expired Campaigns -->
                            <div class="cmpgn-page-grid">
                                <!-- Expired Campaign 1 -->
                                <div class="cmpgn-page-card">
                                    <div class="cmpgn-page-status cmpgn-page-status-expired">Expired</div>
                                    <div class="cmpgn-page-image-container">
                                        <img class="cmpgn-page-image" src="/api/placeholder/200/200" alt="Past Initiative">
                                    </div>
                                    <div class="cmpgn-page-content">
                                        <h3 class="cmpgn-page-card-title">School Supplies Distribution</h3>
                                        <p class="cmpgn-page-card-text">"Provided essential school supplies to underprivileged students in local communities."</p>
                                        <div class="cmpgn-page-card-date">Date : 15 Jan 2025</div>
                                        <a href="#" class="cmpgn-page-card-button">View Results</a>
                                    </div>
                                </div>
                                
                                <!-- Expired Campaign 2 -->
                                <div class="cmpgn-page-card">
                                    <div class="cmpgn-page-status cmpgn-page-status-expired">Expired</div>
                                    <div class="cmpgn-page-image-container">
                                        <img class="cmpgn-page-image" src="/api/placeholder/200/200" alt="Past Workshop">
                                    </div>
                                    <div class="cmpgn-page-content">
                                        <h3 class="cmpgn-page-card-title">Teacher Training Workshop</h3>
                                        <p class="cmpgn-page-card-text">"Empowered teachers with modern teaching techniques and digital classroom strategies."</p>
                                        <div class="cmpgn-page-card-date">Date : 20 Feb 2025</div>
                                        <a href="#" class="cmpgn-page-card-button">View Results</a>
                                    </div>
                                </div>
                                
                                <!-- Expired Campaign 3 -->
                                <div class="cmpgn-page-card">
                                    <div class="cmpgn-page-status cmpgn-page-status-expired">Expired</div>
                                    <div class="cmpgn-page-image-container">
                                        <img class="cmpgn-page-image" src="/api/placeholder/200/200" alt="Past Scholarship">
                                    </div>
                                    <div class="cmpgn-page-content">
                                        <h3 class="cmpgn-page-card-title">Spring Scholarship Fund</h3>
                                        <p class="cmpgn-page-card-text">"Awarded educational scholarships to deserving students from low-income backgrounds."</p>
                                        <div class="cmpgn-page-card-date">Date : 05 Mar 2025</div>
                                        <a href="#" class="cmpgn-page-card-button">View Results</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content-->
        </main> <!--end::App Main--> <!--begin::Footer-->
    </div> <!--end::App Wrapper--> <!--begin::Script-->
    <!--begin::Required Plugin(AdminLTE)-->
    <script src="AdminLTE/dist/js/adminlte.js"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
    <script>

    </script> <!--end::OverlayScrollbars Configure--> <!--end::Script-->
</body><!--end::Body-->

</html>