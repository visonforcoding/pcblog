a:9:{i:0;s:2049:"<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

    <head>
        <title>sfblog</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap Stylesheet -->
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">

        <!-- jquery-ui Stylesheets -->

        <link rel="stylesheet" type="text/css" href="/admin/assets/jui/css/jquery.ui.all.css">
        <link rel="stylesheet" type="text/css" href="/admin/assets/jui/jquery-ui.custom.css">
        <link rel="stylesheet" type="text/css" href="/admin/assets/jui/timepicker/jquery-ui-timepicker.css">
        <!-- Uniform Stylesheet -->
        <link rel="stylesheet" type="text/css" href="/plugins/uniform/css/uniform.default.css">
        <!-- Plugin Stylsheets first to ease overrides -->
        <!-- iButton -->
        <link rel="stylesheet" type="text/css" href="/plugins/ibutton/jquery.ibutton.css">

        <!-- Circular Stat -->
        <link rel="stylesheet" type="text/css" href="/custom-plugins/circular-stat/circular-stat.css">
        <!-- msgBox -->
        <link rel="stylesheet" type="text/css" href="/plugins/msgbox/jquery.msgbox.css">
        <!-- pnotify -->
        <link rel="stylesheet" type="text/css" href="/plugins/pnotify/jquery.pnotify.css">
        <!-- End Plugin Stylesheets -->
        <!-- Main Layout Stylesheet -->
        <link rel="stylesheet" type="text/css" href="/admin/assets/css/fonts/icomoon/style.css">
        <link rel="stylesheet" type="text/css" href="/admin/assets/css/main-style.css">
        <link rel="stylesheet" type="text/css" href="/css/base.css">
    ";s:10:"javascript";N;i:1;s:2:"
";s:3:"css";N;i:2;s:4915:"
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js></script>
<![endif]-->

<script type="text/javascript">
    document.domain = "multiple.test";
</script>

</head>
<body>
    <div id="customizer">
        <div id="showButton"><i class="icon-cogs"></i></div>
        <div id="layoutMode">
            <label class="checkbox"><input type="checkbox" class="uniform" name="layout-mode" value="boxed"> Boxed</label>
        </div>
    </div>

    <div id="wrapper">
        <header id="header" class="navbar navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <div class="brand-wrap pull-left">
                        <div class="brand-img">
                            <a class="brand" href="#">
                                <!--<img src="/Public/Admin/images/logo.png" alt="">-->sfblog
                            </a>
                        </div>
                    </div>

                    <div id="header-right" class="clearfix">
                        <div id="nav-toggle" data-toggle="collapse" data-target="#navigation" class="collapsed">
                            <i class="icon-caret-down"></i>
                        </div>
                        <div id="header-search">
                            <span id="search-toggle" data-toggle="dropdown">
                                <i class="icon-search"></i>
                            </span>
                            <form class="navbar-search">
                                <input type="text" class="search-query" placeholder="Search">
                            </form>
                        </div>
                        <div id="dropdown-lists">
                            <a class="item" href="#">
                                <span class="item-icon"><i class="icon-exclamation-sign"></i></span>
                                <span class="item-label">Notifications</span>
                                <span class="item-count">4</span>
                            </a>
                            <a class="item" href="mail.html">
                                <span class="item-icon"><i class="icon-envelope"></i></span>
                                <span class="item-label">Messages</span>
                                <span class="item-count">16</span>
                            </a>
                        </div>

                        <div id="header-functions" class="pull-right">
                            <div id="user-info" class="clearfix">
                                <span class="info">
                                    欢迎您
                                    <span class="name"></span>
                                </span>
                                <div class="avatar">
                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                        <img src="/admin/assets/images/pp.jpg" alt="Avatar">
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="profile.html"><i class="icol-user"></i> My Profile</a></li>
                                        <li><a href="#"><i class="icol-layout"></i> My Invoices</a></li>                                        
                                        <li class="divider"></li>
                                        <li><a href="index.html"><i class="icol-key"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="logout-ribbon">
                                <a href="index.html"><i class="icon-off"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="content-wrap">
            <div id="content">
                <div id="content-outer">
                    <div id="content-inner">
                        <aside id="sidebar">
                            <nav id="navigation" class="collapse">
                                <ul>
                                    <?php echo $this->elements->getAdminMenu(); ?>
                                </ul>
                            </nav>
                        </aside>

                        <div id="sidebar-separator"></div>

                        <section id="main" class="clearfix">
                            <div id="main-header" class="page-header">

                            </div>
                            <div id="main-content">
                                ";s:4:"main";a:1:{i:0;a:4:{s:4:"type";i:357;s:5:"value";s:34:"
                                ";s:4:"file";s:38:"../Apps/Backend/Views/layout/base.volt";s:4:"line";i:143;}}i:3;s:3509:"
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <footer id="footer">
            <div class="footer-left">MoonCake - Responsive Admin Template</div>
            <div class="footer-right"><p>Copyright 2012. All Rights Reserved.</p></div>
        </footer>

    </div>

    <!-- Core Scripts -->
    <script src="/admin/assets/js/libs/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/admin/assets/js/libs/jquery.placeholder.min.js" type="text/javascript"></script>
    <script src="/admin/assets/js/libs/jquery.mousewheel.min.js" type="text/javascript"></script>

    <!-- Template Script -->
    <script src="/admin/assets/js/template.js" type="text/javascript"></script>
    <script src="/admin/assets/js/setup.js" type="text/javascript"></script>

    <!-- Customizer, remove if not needed -->
    <script src="/admin/assets/js/customizer.js" type="text/javascript"></script>

    <!-- Uniform Script -->
    <script src="/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>

    <!-- jquery-ui Scripts -->
    <script src="/admin/assets/jui/js/jquery-ui-1.8.24.min.js" type="text/javascript"></script>
    <script src="/admin/assets/jui/jquery-ui.custom.min.js" type="text/javascript"></script>
    <script src="/admin/assets/jui/timepicker/jquery-ui-timepicker.min.js" type="text/javascript"></script>
    <script src="/admin/assets/jui/jquery.ui.touch-punch.min.js" type="text/javascript"></script>

    <!-- Plugin Scripts -->

    <!-- Flot -->
    <!--[if lt IE 9]>
    <script src="assets/js/libs/excanvas.min.js></script>
    <![endif]-->
    <script src="/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
    <script src="/plugins/flot/plugins/jquery.flot.tooltip.min.js" type="text/javascript"></script>
    <script src="/plugins/flot/plugins/jquery.flot.pie.min.js" type="text/javascript"></script>
    <script src="/plugins/flot/plugins/jquery.flot.resize.min.js" type="text/javascript"></script>

    <!-- Circular Stat -->
    <script src="/custom-plugins/circular-stat/circular-stat.min.js" type="text/javascript"></script>

    <!-- SparkLine -->
    <script src="/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>

    <!-- iButton -->
    <script src="/plugins/ibutton/jquery.ibutton.min.js" type="text/javascript"></script>

    <!-- msgBox -->
    <script src="/plugins/msgbox/jquery.msgbox.min.js" type="text/javascript"></script>

    <!-- pnotify -->
    <script src="/plugins/pnotify/jquery.pnotify.min.js" type="text/javascript"></script>

    <!-- DataTables -->
    <script src="/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="/plugins/datatables/TableTools/js/TableTools.min.js" type="text/javascript"></script>
    <script src="/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="/plugins/datatables/jquery.dataTables.columnFilter.js" type="text/javascript"></script>
    <!-- Demo Scripts -->
    <script src="/admin/assets/js/demo/dashboard.js" type="text/javascript"></script>
    <script src="/admin/assets/js/demo/dataTables.js" type="text/javascript"></script>
    <script src="/js/script.js" type="text/javascript"></script>
";s:6:"script";N;i:4;s:20:"
</body>
</html>
";}