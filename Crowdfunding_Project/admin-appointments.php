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
                        <div class="col-12">

                            <div class="admin-appt-container">
                                <div class="admin-appt-header">
                                    <div class="admin-appt-stats-box">
                                        <p class="admin-appt-stats-title">Total Number of appointments</p>
                                        <p class="admin-appt-stats-number">12</p>
                                    </div>
                                    
                                    <div class="admin-appt-stats-box">
                                        <p class="admin-appt-stats-title">Total Number of Up-Coming appointments</p>
                                        <p class="admin-appt-stats-number">8</p>
                                    </div>
                                    
                                    <button class="admin-appt-create-btn">Create appointments</button>
                                    
                                </div>
                                
                                <div class="admin-appt-table-container">
                                    <table id="admin-appt-datatable" class="admin-appt-datatable table table-striped dt-responsive nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Volunteer's Name</th>
                                                <th>Time</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="admin-appt-avatar"></span>
                                                    <span class="admin-appt-volunteer">Sarah Johnson</span>
                                                </td>
                                                <td class="admin-appt-time">11:30 PM</td>
                                                <td class="admin-appt-date">21/03/2025</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="admin-appt-avatar"></span>
                                                    <span class="admin-appt-volunteer">Michael Smith</span>
                                                </td>
                                                <td class="admin-appt-time">1:45 PM</td>
                                                <td class="admin-appt-date">22/03/2025</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="admin-appt-avatar"></span>
                                                    <span class="admin-appt-volunteer">Jessica Wong</span>
                                                </td>
                                                <td class="admin-appt-time">10:45 AM</td>
                                                <td class="admin-appt-date">23/03/2025</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="admin-appt-avatar"></span>
                                                    <span class="admin-appt-volunteer">David Chen</span>
                                                </td>
                                                <td class="admin-appt-time">3:00 PM</td>
                                                <td class="admin-appt-date">24/03/2025</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="admin-appt-avatar"></span>
                                                    <span class="admin-appt-volunteer">Priya Patel</span>
                                                </td>
                                                <td class="admin-appt-time">10:00 AM</td>
                                                <td class="admin-appt-date">25/03/2025</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="admin-appt-avatar"></span>
                                                    <span class="admin-appt-volunteer">Marcus Thompson</span>
                                                </td>
                                                <td class="admin-appt-time">2:00 PM</td>
                                                <td class="admin-appt-date">26/03/2025</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="admin-appt-avatar"></span>
                                                    <span class="admin-appt-volunteer">Emily Rodriguez</span>
                                                </td>
                                                <td class="admin-appt-time">9:15 AM</td>
                                                <td class="admin-appt-date">27/03/2025</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="admin-appt-avatar"></span>
                                                    <span class="admin-appt-volunteer">James Wilson</span>
                                                </td>
                                                <td class="admin-appt-time">4:30 PM</td>
                                                <td class="admin-appt-date">28/03/2025</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="admin-appt-avatar"></span>
                                                    <span class="admin-appt-volunteer">Olivia Brown</span>
                                                </td>
                                                <td class="admin-appt-time">1:00 PM</td>
                                                <td class="admin-appt-date">29/03/2025</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="admin-appt-avatar"></span>
                                                    <span class="admin-appt-volunteer">Alex Martinez</span>
                                                </td>
                                                <td class="admin-appt-time">11:15 AM</td>
                                                <td class="admin-appt-date">30/03/2025</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="admin-appt-avatar"></span>
                                                    <span class="admin-appt-volunteer">Sophia Lee</span>
                                                </td>
                                                <td class="admin-appt-time">3:45 PM</td>
                                                <td class="admin-appt-date">31/03/2025</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="admin-appt-avatar"></span>
                                                    <span class="admin-appt-volunteer">Daniel Jackson</span>
                                                </td>
                                                <td class="admin-appt-time">9:30 AM</td>
                                                <td class="admin-appt-date">01/04/2025</td>
                                            </tr>
                                        </tbody>
                                    </table>
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

            $('#admin-appt-datatable').DataTable({
                responsive: true,
                scrollCollapse: true,
                paging: false
            });

    </script> <!--end::OverlayScrollbars Configure--> <!--end::Script-->
</body><!--end::Body-->

</html>