<!DOCTYPE php>
<php lang="zxx">


<!-- Mirrored from phpdemo.net/lendex/lendex/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Aug 2025 14:11:04 GMT -->
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lendex - Personal Portfolio Bootstrap Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" /> -->

    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/logo.png" />

    <!-- CSS
    ============================================ -->

    <!-- Vendor CSS (Contain Bootstrap, Icon Fonts) -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/icofont.min.css" /> -->

    <!-- Plugin CSS (Global Plugins Files) -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/venobox.min.css" /> -->

    <!-- Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    
    <!-- Minify Version -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

</head>

<body>

    <main class="main-wrapper">
        <!-- .....:::::: Start Header Section :::::.... -->
        <header class="header-section sticky-header d-none d-lg-block">
            <div class="header-wrapper">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col">
                            <!-- Start Header Logo -->
                            <a href="index.php" class="header-logo">
                                <img src="assets/images/logo/logo.png" alt="">
                            </a>
                            <!-- End Header Logo -->
                        </div>
                        <div class="col-auto">
                            <!-- Start Header Menu -->
                            <ul class="header-nav">

                                <li><a href="index.php">Home</a></li>

                                <li><a href="#services">Services</a></li>
                                
                                <li><a href="#works">Works</a></li>

                                <li><a href="#testimonial">Testimonial</a></li>

                                <li><a href="#contact">Contact</a></li>

                            </ul>
                            <!-- End Header Menu -->
                        </div>
                        <div class="col">
                            <div class="header-btn-link text-end">
                               <a href="#" data-cal-namespace="30min" data-cal-config='{"layout":"month_view"}' data-cal-link="divine-daniel/30min" class="btn btn-sm btn-outline-one icon-space-left">Let's talk<i class="icofont-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- .....:::::: End Header Section :::::.... -->

        <!-- .....:::::: Start Mobile Header Section :::::.... -->
        <div class="mobile-header d-block d-lg-none">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col">
                        <div class="mobile-logo">
                            <a href="index.php"><img src="assets/images/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mobile-action-link text-end">
                            <a href="#mobile-menu-offcanvas" class="offcanvas-toggle offside-menu"><i class="icofont-navigation-menu"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .....:::::: Start MobileHeader Section :::::.... -->

        <!--  Start Offcanvas Mobile Menu Section -->
        <div id="mobile-menu-offcanvas" class="offcanvas offcanvas-rightside offcanvas-mobile-menu-section">
            <!-- Start Offcanvas Header -->
            <div class="offcanvas-header text-end">
                <button class="offcanvas-close"><i class="icofont-close-line"></i></button>
            </div> <!-- End Offcanvas Header -->
            <!-- Start Offcanvas Mobile Menu Wrapper -->
            <div class="offcanvas-mobile-menu-wrapper">
                <!-- Start Mobile Menu  -->
                <div class="mobile-menu-bottom">
                    <!-- Start Mobile Menu Nav -->
                    <div class="offcanvas-menu">
                        <ul>
                            <li>
                                <a href="index.php"><span>Home</span></a>
                            </li>
                            <li>
                                <a href="#"><span>Services</span></a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="./demo/service-list.php">Service List</a></li>
                                    <li><a href="./demo/service-details.php">Service Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span>Blog</span></a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="./demo/blog-list.php">Blog List Full Width</a></li>
                                    <li><a href="./demo/blog-list-sidebar-left.php">Blog List Left Sidebar</a></li>
                                    <li><a href="./demo/blog-list-sidebar-right.php">Blog List Right Sidebar</a></li>
                                    <li><a href="./demo/blog-details.php">Blog Details Full Width</a></li>
                                    <li><a href="./demo/blog-details-sidebar-left.php">Blog Details Left Sidebar</a></li>
                                    <li><a href="./demo/blog-details-sidebar-right.php">Blog Details Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span>Pages</span></a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="./demo/about.php">About Us</a></li>
                                    <li><a href="./demo/project-list.php">Project</a></li>
                                    <li><a href="./demo/project-details.php">Project Details</a></li>
                                    <li><a href="./demo/faq.php">FAQ</a></li>
                                    <li><a href="./demo/404-page.php">404 Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" data-cal-namespace="30min" data-cal-config='{"layout":"month_view"}' data-cal-link="divine-daniel/30min" class="btn btn-sm btn-outline-one icon-space-left">Let's talk<i class="icofont-double-right"></i></a>
                            </li>
                        </ul>
                    </div> <!-- End Mobile Menu Nav -->
                </div> <!-- End Mobile Menu -->

                <!-- Start Mobile contact Info -->
                <div class="mobile-contact-info text-center">
                    <ul class="social-link">
                        <li><a target="_blank" href="https://example.com/"><i class="icofont-facebook"></i></a>
                        </li>
                        <li><a target="_blank" href="https://example.com/"><i class="icofont-twitter"></i></a>
                        </li>
                        <li><a target="_blank" href="https://example.com/"><i class="icofont-skype"></i></a></li>
                    </ul>
                </div>
                <!-- End Mobile contact Info -->

            </div> <!-- End Offcanvas Mobile Menu Wrapper -->
        </div>
        <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

        <!-- Offcanvas Overlay -->
        <div class="offcanvas-overlay"></div>