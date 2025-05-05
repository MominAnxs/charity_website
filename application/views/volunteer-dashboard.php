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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">

    <?php $this->load->view('volunteer-links'); ?>

</head> <!--end::Head--> <!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Start Navbar Links-->
                <ul class="navbar-nav w-100 d-flex justify-content-between align-items-center px-3">
                    <li> <div class="sidebar-brand p-0"> <!--begin::Brand Link--> <a href="" class="brand-link"> <!--begin::Brand Image--> <img src="" alt="" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">xcfdh</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> </li>
                    <li class="nav-item"> <a class="nav-link p-0 d-flex align-items-center" data-lte-toggle="sidebar" href="#" role="button"> <i class="fa-solid fa-bars fs-3"></i> </a> </li>
                </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->
            </div> <!--end::Container-->
        </nav> <!--end::Header--> <!--begin::Sidebar-->

        <?php $this->load->view('volunteer-sidebar') ?>

        <!--begin::App Main-->
        <main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-12"> <!-- Default box -->
                            <!-- initial-four-boxes starts -->
                            <div class="container initial-boxes-container">
                                <div class="row g-4">
                                    <!-- Total Number of Appointments -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="initial-boxes-card">
                                            <i class="fas fa-calendar-check initial-boxes-icon"></i>
                                            <div class="initial-boxes-title">Total Number of appointments</div>
                                            <div class="initial-boxes-value">12</div>
                                            <button class="initial-boxes-btn">View Appointments</button>
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
                                    
                                    <!-- Total Collection -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="initial-boxes-card collection">
                                            <i class="fas fa-indian-rupee-sign initial-boxes-icon"></i>
                                            <div class="initial-boxes-title">Total Collection</div>
                                            <div class="initial-boxes-value">13,456</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- initial-four-boxes ends -->

                            <!-- appointments stars -->

                            <div class="appointments-container">
                                <div class="appointments-header">Appointments</div>
                                <div class="appointments-content">
                                    <!-- Appointments List -->
                                    <div class="appointments-list">
                                        <!-- Appointment 1 -->
                                        <div class="appointments-item">
                                            <div class="appointments-time">11:30 PM</div>
                                            <div class="appointments-details">
                                                <div class="appointments-name">Appointment Name</div>
                                                <div class="appointments-actions">
                                                    <button class="appointments-btn-view">View</button>
                                                    <button class="appointments-btn-cancel">Cancel</button>
                                                </div>
                                            </div>
                                            <div class="appointments-date">21/03/2025</div>
                                        </div>
                                        
                                        <!-- Appointment 2 -->
                                        <div class="appointments-item">
                                            <div class="appointments-time">1:45 PM</div>
                                            <div class="appointments-details">
                                                <div class="appointments-name">Appointment Name</div>
                                                <div class="appointments-actions">
                                                    <button class="appointments-btn-view">View</button>
                                                    <button class="appointments-btn-cancel">Cancel</button>
                                                </div>
                                            </div>
                                            <div class="appointments-date">22/03/2025</div>
                                        </div>
                                        
                                        <!-- Appointment 3 -->
                                        <div class="appointments-item">
                                            <div class="appointments-time">10:45 AM</div>
                                            <div class="appointments-details">
                                                <div class="appointments-name">Appointment Name</div>
                                                <div class="appointments-actions">
                                                    <button class="appointments-btn-view">View</button>
                                                    <button class="appointments-btn-cancel">Cancel</button>
                                                </div>
                                            </div>
                                            <div class="appointments-date">22/03/2025</div>
                                        </div>
                                        
                                        <!-- Appointment 4 -->
                                        <div class="appointments-item">
                                            <div class="appointments-time">3:00 PM</div>
                                            <div class="appointments-details">
                                                <div class="appointments-name">Appointment Name</div>
                                                <div class="appointments-actions">
                                                    <button class="appointments-btn-view">View</button>
                                                    <button class="appointments-btn-cancel">Cancel</button>
                                                </div>
                                            </div>
                                            <div class="appointments-date">24/03/2025</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Manage Appointments Button -->
                                <div class="appointments-manage">
                                    <button class="appointments-manage-btn">Manage Appointments</button>
                                </div>
                            </div>

                            <!-- appointments ends -->

                            <!-- donation-history starts -->

                            <div class="d-history-container my-5">
                                <div class="d-history-header">Recent Donation</div>
                                <div class="d-history-content">
                                    <table class="d-history-table" id="donationTable">
                                        <thead class="d-history-table-header">
                                            <tr>
                                                <th width="40%">Donor</th>
                                                <th width="30%">Amount Donated</th>
                                                <th width="30%">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Donation 1 -->
                                            <tr class="d-history-table-row">
                                                <td>
                                                    <div class="d-history-donor">
                                                        <div class="d-history-avatar">
                                                            <i class="fas fa-user"></i>
                                                        </div>
                                                        <div>
                                                            <span class="d-history-name">Anonymous</span>
                                                            <span class="d-history-type">(walking Donation)</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="d-history-amount">1200 ₹</td>
                                                <td class="d-history-date">20/03/2025</td>
                                            </tr>
                                            
                                            <!-- Donation 2 -->
                                            <tr class="d-history-table-row">
                                                <td>
                                                    <div class="d-history-donor">
                                                        <div class="d-history-avatar">
                                                            <i class="fas fa-user"></i>
                                                        </div>
                                                        <div>
                                                            <span class="d-history-name">Ashok Malhotra</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="d-history-amount">1500 ₹</td>
                                                <td class="d-history-date">21/03/2025</td>
                                            </tr>
                                            
                                            <!-- Donation 3 -->
                                            <tr class="d-history-table-row">
                                                <td>
                                                    <div class="d-history-donor">
                                                        <div class="d-history-avatar">
                                                            <i class="fas fa-user"></i>
                                                        </div>
                                                        <div>
                                                            <span class="d-history-name">Purav Patil</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="d-history-amount">900 ₹</td>
                                                <td class="d-history-date">22/03/2025</td>
                                            </tr>
                                            
                                            <!-- Donation 4 -->
                                            <tr class="d-history-table-row">
                                                <td>
                                                    <div class="d-history-donor">
                                                        <div class="d-history-avatar">
                                                            <i class="fas fa-user"></i>
                                                        </div>
                                                        <div>
                                                            <span class="d-history-name">Anonymous</span>
                                                            <span class="d-history-type">(walking Donation)</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="d-history-amount">2300 ₹</td>
                                                <td class="d-history-date">23/03/2025</td>
                                            </tr>
                                            
                                            <!-- Donation 5 -->
                                            <tr class="d-history-table-row">
                                                <td>
                                                    <div class="d-history-donor">
                                                        <div class="d-history-avatar">
                                                            <i class="fas fa-user"></i>
                                                        </div>
                                                        <div>
                                                            <span class="d-history-name">Anonymous</span>
                                                            <span class="d-history-type">(walking Donation)</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="d-history-amount">700 ₹</td>
                                                <td class="d-history-date">24/03/2025</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <!-- Manage History Button -->
                                <div class="d-history-manage">
                                    <button class="d-history-manage-btn">Manage History</button>
                                </div>
                            </div>

                            <!-- donation-history ends -->

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

            $('#donationTable').DataTable({
                responsive: true,
                scrollCollapse: true,
                paging: false
            });

    </script> <!--end::OverlayScrollbars Configure--> <!--end::Script-->
</body><!--end::Body-->

</html>