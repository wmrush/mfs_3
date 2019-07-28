<!DOCTYPE html>
<!--
Template Name:  SmartAdmin Responsive WebApp - Template build with Twitter Bootstrap 4
Version: 4.0.0
Author: Sunnyat Ahmmed
Website: http://gootbootstrap.com
Purchase: https://wrapbootstrap.com/theme/smartadmin-responsive-webapp-WB0573SK0
License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        MFS 3.0 AdminPanel
    </title>
    <meta name="description" content="Basic Inputs">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
    <link rel="stylesheet" media="screen, print" href="/public/admin/css/vendors.bundle.css">
    <link rel="stylesheet" media="screen, print" href="/public/admin/css/app.bundle.css">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="/public/admin/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/public/admin/img/favicon/favicon-32x32.png">
    <link rel="mask-icon" href="/public/admin/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
</head>
<body class="mod-bg-1 ">


<!-- BEGIN Page Wrapper -->
<div class="page-wrapper">
    <div class="page-inner">
        <!-- BEGIN Left Aside -->
        <? if (isset($_SESSION['Admin'])): ?>
            <? require_once 'blocks/menu.php'; ?>
        <? endif; ?>
        <!-- END Left Aside -->
        <div class="page-content-wrapper">
            <!-- BEGIN Page Header -->
            <header class="page-header" role="banner">
                <!-- we need this logo when user switches to nav-function-top -->
                <div class="page-logo">
                    <a href="#" class="page-logo-link press-scale-down d-flex align-items-center" data-toggle="modal"
                       data-target="#modal-shortcut">
                        <img src="/public/admin/img/logo.png" alt="MFS 3.0 AdminPanel" aria-roledescription="logo">
                        <span class="page-logo-text mr-1">MFS 3.0 AdminPanel</span>
                        <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                    </a>
                </div>
                <!-- DOC: nav menu layout change shortcut -->
                <div class="hidden-md-down dropdown-icon-menu position-relative">
                    <a href="#" class="header-btn btn js-waves-off" data-action="toggle"
                       data-class="nav-function-hidden" title="Hide Navigation">
                        <i class="ni ni-menu"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify"
                               title="Minify Navigation">
                                <i class="ni ni-minify-nav"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-fixed"
                               title="Lock Navigation">
                                <i class="ni ni-lock-nav"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- DOC: mobile button appears during mobile width -->
                <div class="hidden-lg-up">
                    <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
                        <i class="ni ni-menu"></i>
                    </a>
                </div>


            </header>
            <!-- END Page Header -->
            <!-- BEGIN Page Content -->
            <!-- the #js-page-content id is needed for some plugins to initialize -->
            <main id="js-page-content" role="main" class="page-content">
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="#">AdminPanel</a></li>
                </ol>
                <div class="subheader">
                    <h1 class="subheader-title">
                        <i class='subheader-icon fal fa-edit'></i> <?= $PageTitle; ?>
                        <small>
                            <?= $PageDescription; ?>
                        </small>
                    </h1>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <?= TextMessageInfo(); ?>


                    </div>
                </div>
                <?= $CONTENT; ?>
            </main>
            <!-- this overlay is activated only when mobile menu is triggered -->
            <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
            <!-- END Page Content -->
            <!-- BEGIN Page Footer -->
            <footer class="page-footer" role="contentinfo">
                <div class="d-flex align-items-center flex-1 text-muted">
                    <span class="hidden-md-down fw-700">2019 © MFS 3.0 by &nbsp;<a href='https://sfb.su'
                                                                                   class='text-primary fw-500'
                                                                                   title='gotbootstrap.com'
                                                                                   target='_blank'>WmRush</a></span>
                </div>
                <div>
                    <ul class="list-table m-0">
                        <li><a href="#" class="text-secondary fw-700">About</a></li>
                        <li class="pl-3"><a href="#" class="text-secondary fw-700">License</a></li>
                        <li class="pl-3"><a href="#" class="text-secondary fw-700">Documentation</a></li>
                        <li class="pl-3 fs-xl"><a href="#" class="text-secondary"><i class="fal fa-question-circle"
                                                                                     aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </footer>
            <!-- END Page Footer -->
            <!-- BEGIN Shortcuts -->
            <!-- modal shortcut -->

        </div>
    </div>
    <!-- END Page Wrapper -->


    <script src="/public/admin/js/vendors.bundle.js"></script>
    <script src="/public/admin/js/app.bundle.js"></script>

</body>
</html>
