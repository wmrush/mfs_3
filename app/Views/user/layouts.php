<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $InfoSite['title']; ?></title>
    <meta data-react-helmet="true" name="description" content="<?= $InfoSite['desc']; ?>"/>
    <!-- base:css -->
    <link rel="stylesheet" href="/public/default/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/public/default/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <link rel="stylesheet" href="/public/default/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="/public/default/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="/public/default/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/public/default/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/public/default/images/favicon.png"/>
</head>
<body class="boxed-layout">
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center">
            <a class="navbar-brand brand-logo" href="index.html"><img src="/public/default/images/logo.svg" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/public/default/images/logo-mini.svg"
                                                                           alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav mr-lg-2">
                <li class="nav-item nav-search d-none d-lg-block">

                    Тут банер 468*60


                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                       id="messageDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-email-outline mx-0"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                         aria-labelledby="messageDropdown">
                        <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="/public/default/images/faces/face4.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                                </h6>
                                <p class="font-weight-light small-text text-muted mb-0">
                                    The meeting is cancelled
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="/public/default/images/faces/face2.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                                </h6>
                                <p class="font-weight-light small-text text-muted mb-0">
                                    New product launch
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="/public/default/images/faces/face3.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                                </h6>
                                <p class="font-weight-light small-text text-muted mb-0">
                                    Upcoming board meeting
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
                       id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-bell-outline mx-0"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                         aria-labelledby="notificationDropdown">
                        <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="mdi mdi-information mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="mdi mdi-settings mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal">Settings</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                    <i class="mdi mdi-account-box mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
                        <img src="/public/default/images/faces/face5.jpg" alt="profile"/>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item">
                            <i class="mdi mdi-settings "></i>
                            Settings
                        </a>
                        <a class="dropdown-item">
                            <i class="mdi mdi-logout"></i>
                            Logout
                        </a>
                    </div>
                </li>
                <li class="nav-item nav-settings d-none d-lg-flex">
                    <a class="nav-link" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close mdi mdi-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div>
                    Light
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div>
                    Dark
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles primary"></div>
                    <div class="tiles secondary"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <ul class="nav nav-tabs" id="setting-panel" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
                       aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
                       aria-controls="chats-section">CHATS</a>
                </li>
            </ul>
            <div class="tab-content" id="setting-content">
                <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                     aria-labelledby="todo-section">
                    <div class="add-items d-flex px-3 mb-0">
                        <form class="form w-100">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="list-wrapper px-3">
                        <ul class="d-flex flex-column-reverse todo-list">
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Team review meeting at 3.00 PM
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Prepare for presentation
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Resolve all the low priority tickets due today
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Schedule meeting for next week
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Project review
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="events py-4 border-bottom px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                            <span>Feb 11 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
                        <p class="text-gray mb-0">build a js based app</p>
                    </div>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                            <span>Feb 7 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                        <p class="text-gray mb-0 ">Call Sarah Graves</p>
                    </div>
                </div>
                <!-- To do section tab ends -->
                <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">
                            See All
                        </small>
                    </div>
                    <ul class="chat-list">
                        <li class="list active">
                            <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span
                                        class="online"></span></div>
                            <div class="info">
                                <p>Thomas Douglas</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">19 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span
                                        class="offline"></span></div>
                            <div class="info">
                                <div class="wrapper d-flex">
                                    <p>Catherine</p>
                                </div>
                                <p>Away</p>
                            </div>
                            <div class="badge badge-primary badge-pill my-auto mx-2">4</div>
                            <small class="text-muted my-auto">23 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span
                                        class="online"></span></div>
                            <div class="info">
                                <p>Daniel Russell</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">14 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span
                                        class="offline"></span></div>
                            <div class="info">
                                <p>James Richardson</p>
                                <p>Away</p>
                            </div>
                            <small class="text-muted my-auto">2 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span
                                        class="online"></span></div>
                            <div class="info">
                                <p>Madeline Kennedy</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">5 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span
                                        class="online"></span></div>
                            <div class="info">
                                <p>Sarah Graves</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">47 min</small>
                        </li>
                    </ul>
                </div>
                <!-- chat tab ends -->
            </div>
        </div>
        <!-- partial -->


        <? require "blocks/sidebar.php"; ?>


        <div class="main-panel">
            <div class="content-wrapper">
                <div class="dashboard-header d-flex flex-column grid-margin">
                    <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
                        <div class="d-flex align-items-center">
                            <h4 class="mb-0 font-weight-bold">Sales Trends</h4>
                            <button class="btn btn-inverse-info tx-12 btn-sm btn-rounded mx-3">Enterprise</button>
                            <div class="d-none d-md-flex">
                                <p class="text-muted mb-0 tx-13 cursor-pointer">Home</p>
                                <i class="mdi mdi-chevron-right text-muted"></i>
                                <p class="text-muted mb-0 tx-13 cursor-pointer">Dashboard</p>
                            </div>
                        </div>
                        <div class="button-wrapper d-flex align-items-center mt-md-3 mt-xl-0">
                            <div class="dropdown mr-3 d-none d-md-block">
                                <button class="btn btn-sm text-muted border-0 dropdown-toggle px-0" type="button"
                                        id="dropdownMenuSizeButton2" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">UTC time zone
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton2">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="dropdown mr-3 d-none d-md-block">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Filter by
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm mr-3 d-none d-md-block">Download Report</button>
                            <button class="btn btn-outline-primary btn-sm  d-none d-md-block">Data Export</button>
                        </div>
                    </div>
                    <div class="d-md-flex align-items-center justify-content-between flex-wrap">
                        <div class="d-flex align-items-center">
                            <p class="mb-0 font-weight-medium mr-2 d-none d-md-block">Categories :</p>
                            <div class="p-1 bg-danger mr-1"></div>
                            <p class="mb-0 font-weight-medium cursor-pointer mr-3">#Sales</p>
                            <div class="p-1 bg-success mr-1"></div>
                            <p class="mb-0 font-weight-medium cursor-pointer mr-3">#Purchases</p>
                            <div class="p-1 bg-info mr-1"></div>
                            <p class="mb-0 font-weight-medium cursor-pointer mr-3">#Returns</p>
                        </div>
                        <div class="d-flex mt-3 mt-lg-0">
                            <div class="d-none d-md-flex">
                                <div class="d-flex align-items-center mr-3">
                                    <i class="mdi mdi-square-edit-outline icon-sm text-primary"></i>
                                    <p class="mb-0 ml-1 text-dark cursor-pointer">Edit</p>
                                </div>
                                <div class="d-flex align-items-center mr-3">
                                    <i class="mdi mdi-cash-usd icon-sm text-danger"></i>
                                    <p class="mb-0 ml-1 text-dark cursor-pointer">Plans & billing</p>
                                </div>
                                <div class="d-flex align-items-center mr-3">
                                    <i class="mdi mdi-progress-upload icon-sm text-success"></i>
                                    <p class="mb-0 ml-1 text-dark cursor-pointer">Archive</p>
                                </div>
                                <div class="d-flex align-items-center mr-3">
                                    <i class="mdi mdi-logout-variant icon-sm text-info"></i>
                                    <p class="mb-0 ml-1 text-dark cursor-pointer">Leave</p>
                                </div>
                            </div>
                            <div class="btn-group mt-3 mt-md-0" role="group" aria-label="Button group">
                                <button type="button" class="btn btn-outline-secondary border">
                                    <i class="mdi mdi-magnify text-body"></i>
                                </button>
                                <button type="button" class="btn btn-outline-secondary border">
                                    <i class="mdi mdi-reload text-body"></i>
                                </button>
                                <button type="button" class="btn btn-outline-secondary border">
                                    <i class="mdi mdi-chart-line text-body"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">

                        <?= TextMessageInfo(); ?>


                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12 grid-margin">


                        <?= $CONTENT; ?>


                    </div>
                </div>


            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a
                                href="https://wmrush.info/" target="_blank" class="text-muted">WmRush</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Претор сосет хуй)))) <i
                                class="mdi mdi-heart-outline text-primary"></i></span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- base:js -->
<script src="/public/default/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="/public/default/vendors/jquery.flot/jquery.flot.js"></script>
<script src="/public/default/vendors/jquery.flot/jquery.flot.crosshair.js"></script>
<script src="/public/default/vendors/jquery.flot/jquery.flot.pie.js"></script>
<script src="/public/default/vendors/jquery.flot/jquery.flot.resize.js"></script>
<script src="/public/default/vendors/jqvmap/jquery.vmap.min.js"></script>
<script src="/public/default/vendors/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="/public/default/vendors/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="/public/default/vendors/peity/jquery.peity.min.js"></script>
<script src="/public/default/js/jquery.flot.dashes.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="/public/default/js/off-canvas.js"></script>
<script src="/public/default/js/hoverable-collapse.js"></script>
<script src="/public/default/js/template.js"></script>
<script src="/public/default/js/settings.js"></script>
<script src="/public/default/js/todolist.js"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="/public/default/js/dashboard.js"></script>
<!-- End custom js for this page-->
</body>

</html>

