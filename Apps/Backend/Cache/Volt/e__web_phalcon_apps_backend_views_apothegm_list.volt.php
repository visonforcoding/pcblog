<!DOCTYPE html>
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
                                
    <div class="row-fluid">
        <div class="span12 widget">
            <div class="widget-header">
                <span class="title">节点</span>
                <a href="<?php echo $this->url->get('admin/apothegm/add'); ?>" class="btn"><i class="icol-add"></i> 添加节点</a>
            </div>
            <div class="widget-content table-container">
                <table id="demo-dtable-02" class="table table-striped">
                    <thead>
                        <tr>
                            <th>名称</th>
                            <th>路径</th>
                            <th>样式</th>
                            <th>是否显示菜单</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($menus as $menu) { ?>    
                        <tr>
                            <td><?php echo $menu['html']; ?><?php echo $menu['name']; ?></td>
                            <td><?php echo $menu['node']; ?></td>
                            <td><?php echo $menu['class']; ?></td>
                            <td><?php echo $menu['is_menu']; ?></td>
                            <td><?php echo $menu['status']; ?></td>
                            <td class="action-col">
                                <span class="btn-group">
                                    <a href="{:U('user/access_config',array('role_id'=>$v['Id']))}" title="查看拥有权限" class="btn btn-small"><i class="icon-search"></i></a>
                                    <a href="/admin/menu/menuEdit?id=<?php echo $menu['id']; ?>" class="btn btn-small"><i class="icon-pencil"></i></a>
                                    <a  menu_id="<?php echo $menu['id']; ?>" class="del-button btn btn-small"><i class="icon-trash"></i></a>
                                </span>
                            </td>
                        </tr>
                    <?php } ?>
                    <tfoot>
                        <tr>
                            <th>Country</th>
                            <th>Death rate</th>
                            <th>Population aged 0-14</th>
                            <th>Population aged 15-64</th>
                            <th>Population aged 65++</th>
                        </tr>
                    </tfoot>
                </tbody>
                </table>
            </div>
        </div>
    </div>

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

    <script>
        $(function () {
            $('.del-button').on('click', function (e) {
                var $obj = $(this);
                $.msgbox("你确定要删除这条记录?", {
                    type: "confirm",
                    buttons: [
                        {type: "submit", value: "是的"},
                        {type: "cancel", value: "取消"}
                    ]
                }, function (result) {
                    if (result === '是的') {
                        var menu_id = $obj.attr('menu_id');
                        $.ajax({
                            url: "/admin/menu/menuDel",
                            type: 'post',
                            dataType: 'json',
                            data: {'menu_id': menu_id},
                            success: function (msg) {
                                $.msgbox(msg.info);
                                window.location.reload();
                            }
                        });
                    }
                }
                );

            });

        });
      </script>

</body>
</html>
