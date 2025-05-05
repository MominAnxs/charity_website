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
                        <div class="col-12"> <!-- Default box -->

                            <!-- data table starts -->

                            <div class="d-history-page-container mt-5">
                                <h1 class="d-history-page-title">Registered Volunteers</h1>
                                
                                <div class="d-history-page-header">
                                    <button class="d-history-page-button">Message to Volunteers</button>
                                    <button class="d-history-page-button">Volunteer Approval Request</button>
                                    <button class="d-history-page-button">Add Volunteer</button>
                                </div>
                                
                                <table id="donationTable" class="d-history-page-table table table-striped dt-responsive nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Volunteer Name</th>
                                            <th>Registered on</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>abc</td>
                                            <td>26/03/2026</td>
                                            </td>
                                            <td>
                                                <button class="d-history-page-action-btn d-history-page-edit-btn">Edit</button>
                                                <button class="d-history-page-action-btn d-history-page-edit-btn">Delete</button>
                                        </tr>
                                        <tr>
                                            <td>abc</td>
                                            <td>26/03/2026</td>
                                            </td>
                                            <td>
                                                <button class="d-history-page-action-btn d-history-page-edit-btn">Edit</button>
                                                <button class="d-history-page-action-btn d-history-page-edit-btn">Delete</button>
                                        </tr>
                                        <tr>
                                            <td>abc</td>
                                            <td>26/03/2026</td>
                                            </td>
                                            <td>
                                                <button class="d-history-page-action-btn d-history-page-edit-btn">Edit</button>
                                                <button class="d-history-page-action-btn d-history-page-edit-btn">Delete</button>
                                        </tr>
                                        <tr>
                                            <td>abc</td>
                                            <td>26/03/2026</td>
                                            </td>
                                            <td>
                                                <button class="d-history-page-action-btn d-history-page-edit-btn">Edit</button>
                                                <button class="d-history-page-action-btn d-history-page-edit-btn">Delete</button>
                                        </tr>
                                        <tr>
                                            <td>Abc</td>
                                            <td>26/03/2026</td>
                                            </td>
                                            <td>
                                                <button class="d-history-page-action-btn d-history-page-edit-btn">Edit</button>
                                                <button class="d-history-page-action-btn d-history-page-edit-btn">Delete</button>
                                        </tr>
                                        <tr>
                                            <td>Abc</td>
                                            <td>26/03/2026</td>
                                            </td>
                                            <td>
                                                <button class="d-history-page-action-btn d-history-page-edit-btn">Edit</button>
                                                <button class="d-history-page-action-btn d-history-page-edit-btn">Delete</button>
                                        </tr>
                                        <tr>
                                            <td>Abc</td>
                                            <td>26/03/2026</td>
                                            </td>
                                            <td>
                                                <button class="d-history-page-action-btn d-history-page-edit-btn">Edit</button>
                                                <button class="d-history-page-action-btn d-history-page-edit-btn">Delete</button>
                                        </tr>                                        
                                        <tr>
                                            <td>Abc</td>
                                            <td>26/03/2026</td>
                                            </td>
                                            <td>
                                                <button class="d-history-page-action-btn d-history-page-edit-btn">Edit</button>
                                                <button class="d-history-page-action-btn d-history-page-edit-btn">Delete</button>
                                        </tr>                                        
                                        <tr>
                                            <td>Abc</td>
                                            <td>26/03/2026</td>
                                            </td>
                                            <td>
                                                <button class="d-history-page-action-btn d-history-page-edit-btn">Edit</button>
                                                <button class="d-history-page-action-btn d-history-page-edit-btn">Delete</button>
                                        </tr>                                        
                                        <tr>
                                            <td>Abc</td>
                                            <td>26/03/2026</td>
                                            </td>
                                            <td>
                                                <button class="d-history-page-action-btn d-history-page-edit-btn">Edit</button>
                                                <button class="d-history-page-action-btn d-history-page-edit-btn">Delete</button>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- data table ends -->

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
                paging: false,
                columnDefs: [
                    { responsivePriority: 2, targets: 0 },
                    { responsivePriority: 3, targets: 1 },
                    { responsivePriority: 1, targets: 2 }
                ]
            });

    </script> <!--end::OverlayScrollbars Configure--> <!--end::Script-->
</body><!--end::Body-->

</html>