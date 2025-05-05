<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE 4 | Fixed Sidebar">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"><!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous"><!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous"><!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous"><!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
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
                        <li class="nav-item"> <a href="volunteer-dashboard.php" class="nav-link"> <i class="nav-icon bi bi-speedometer"></i>
                                <p>
                                    Dashboard
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                        </li>                        
                        <li class="nav-item"> <a href="volunteers-appointments.php" class="nav-link"> <i class="nav-icon bi bi-speedometer"></i>
                                <p>
                                    Appointments
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                        </li>                        
                        <li class="nav-item"> <a href="volunteer-d-history.php" class="nav-link"> <i class="nav-icon bi bi-speedometer"></i>
                                <p>
                                    Donation History
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                        </li>                        
                        <li class="nav-item"> <a href="volunteer-notification.php" class="nav-link"> <i class="nav-icon bi bi-speedometer"></i>
                                <p>
                                    Notifications
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                        </li>                        
                        <li class="nav-item"> <a href="volunteer-profile.php" class="nav-link"> <i class="nav-icon bi bi-speedometer"></i>
                                <p>
                                    Profile
                                    <i class="nav-arrow bi bi-chevron-right"></i>
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

                            <!-- notification-section starts -->

                            <div class="notification-page-container my-5">
                                <div class="notification-page-header">
                                    <button class="notification-page-clear-all">Clear All Notifications</button>
                                </div>

                                <div class="notification-page-items">
                                    <!-- Notification Item 1 -->
                                    <div class="notification-page-item">
                                        <div class="notification-page-avatar">
                                            <i class="fas fa-user notification-page-avatar"></i>
                                        </div>
                                        <div class="notification-page-content">
                                            <div class="notification-page-user-info">
                                                <span class="notification-page-avatar-text">XYZ</span>
                                                <span class="notification-page-admin">(Admin)</span>
                                            </div>
                                            <p class="notification-page-message">Messages will be appear here...</p>
                                            <div class="notification-page-actions">
                                                <button class="notification-page-clear">Clear Notification</button>
                                            </div>
                                        </div>
                                        <div class="notification-page-metadata">
                                            <div class="notification-page-time">3:30 PM</div>
                                            <div class="notification-page-date">22/03/2025</div>
                                        </div>
                                    </div>

                                    <!-- Notification Item 2 -->
                                    <div class="notification-page-item">
                                        <div class="notification-page-avatar">
                                            <i class="fas fa-user notification-page-avatar"></i>
                                        </div>
                                        <div class="notification-page-content">
                                            <div class="notification-page-user-info">
                                                <span class="notification-page-avatar-text">XYZ</span>
                                                <span class="notification-page-admin">(Admin)</span>
                                            </div>
                                            <p class="notification-page-message">Messages will be appear here...</p>
                                            <div class="notification-page-actions">
                                                <button class="notification-page-clear">Clear Notification</button>
                                            </div>
                                        </div>
                                        <div class="notification-page-metadata">
                                            <div class="notification-page-time">3:30 PM</div>
                                            <div class="notification-page-date">22/03/2025</div>
                                        </div>
                                    </div>

                                    <!-- Notification Item 3 -->
                                    <div class="notification-page-item">
                                        <div class="notification-page-avatar">
                                            <i class="fas fa-user notification-page-avatar"></i>
                                        </div>
                                        <div class="notification-page-content">
                                            <div class="notification-page-user-info">
                                                <span class="notification-page-avatar-text">XYZ</span>
                                                <span class="notification-page-admin">(Admin)</span>
                                            </div>
                                            <p class="notification-page-message">Messages will be appear here...</p>
                                            <div class="notification-page-actions">
                                                <button class="notification-page-clear">Clear Notification</button>
                                            </div>
                                        </div>
                                        <div class="notification-page-metadata">
                                            <div class="notification-page-time">3:30 PM</div>
                                            <div class="notification-page-date">22/03/2025</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- notification-section ends -->

                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content-->
        </main> <!--end::App Main--> <!--begin::Footer-->
    </div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script> <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script> <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="AdminLTE/dist/js/adminlte.js"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
        const Default = {
            scrollbarTheme: "os-theme-light",
            scrollbarAutoHide: "leave",
            scrollbarClickScroll: true,
        };
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (
                sidebarWrapper &&
                typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
            ) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });

    </script> <!--end::OverlayScrollbars Configure--> <!--end::Script-->
</body><!--end::Body-->

</html>