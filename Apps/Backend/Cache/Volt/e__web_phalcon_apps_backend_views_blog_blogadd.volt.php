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
    
    <!-- ueditor -->
    <script src="/plugins/ueditor/ueditor.config.js" ></script>
    <script src="/plugins/ueditor/ueditor.all.js" ></script>
    <script href="/plugins/ueditor/lang/zh-cn/zh-cn.js" ></script>    


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
                <span class="title">博文修改</span>
            </div>
            <div class="widget-content form-container">
                <form id="validate-1" class="form-vertical" method="post">
                    <div class="control-group">
                        <label class="control-label">标题 <span class="required">*</span></label>
                        <div class="controls">
                            <input type="text" name="title"  class="span12">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">父节点<span class="required">*</span></label>
                        <div class="controls">
                            <select id="input01" name="category" class="span12">

                                <?php foreach ($catlist as $cat) { ?>
                                    <option value="<?php echo $cat['id']; ?>" ><?php echo $cat['html']; ?><?php echo $cat['name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="input05">引言</label>
                        <div class="controls">
                            <textarea class="span12" name="guide" id="input05" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="input05">封面</label>
                        <div class="controls">
                            <div id="tdimgcover" style="display: inline-block">
                                <div class="showImg" style="height:163px;">
                                    <div id="discover" class="showImgC">
                                    </div>
                                    <div id="btnimgcover">
                                        <input type="button" style="width: 133px;" class="btn btn-primary" id="coverBtn" value="上传图片" />
                                    </div>
                                    <input type="hidden" name="cover" id="cover"  />
                                </div>
                                <script id="covereditor"></script>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">内容</label>
                        <div class="controls">
                            <!-- 加载编辑器的容器 -->
                            <script id="container" name="content" type="text/plain"></script>
                            <!-- 实例化编辑器 -->
                            <script type="text/javascript">
                                var ue = UE.getEditor('container');
                            </script>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">seo关键字<span class="required">*</span></label>
                        <div class="controls">
                            <input type="text" name="keywords"  class="span12">
                        </div>
                    </div>
                              <div class="control-group">
                        <label class="control-label" for="input05">seo描述</label>
                        <div class="controls">
                            <textarea class="span12" name="description" id="input05" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <input type="submit" value="确认" class="btn btn-primary pull-right">
                    </div>
                </form>
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

    <!-- Bootstrap FileInput -->
    <!--<script src="custom-plugins/bootstrap-fileinput.min.js></script>-->
    <!-- Select2 -->
    <script src="/plugins/select2/select2.min.js" type="text/javascript"></script>
    <!-- Validation -->
    <script src="/plugins/validate/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/plugins/validate/localization/messages_zh.js" type="text/javascript"></script>
    <script>
      $(function () {
                         /*图片上传*/
                                                        $(function () {
                                                            initImageUpload('covereditor', 'cover', 'discover', 'coverBtn');
                                                        });
                                                        $("#validate-1").validate({
                                                            rules: {
                                                                title: {
                                                                    required: true
                                                                },
                                                                guide: {
                                                                    required: true
                                                                },
                                                                keywords: {
                                                                    required: true
                                                                },
                                                            },
                                                            invalidHandler: function (form, validator) {
                                                                var errors = validator.numberOfInvalids();
                                                                if (errors) {
                                                                    var message = errors == 1
                                                                            ? 'You missed 1 field. It has been highlighted'
                                                                            : 'You missed ' + errors + ' fields. They have been highlighted';
                                                                    $("#da-ex-val1-error").html(message).show();
                                                                } else {
                                                                    $("#da-ex-val1-error").hide();
                                                                }
                                                            },
                                                            submitHandler: function (form) {
                                                                $.ajax({
                                                                    type: $(form).attr('method'),
                                                                    url: $(form).attr('action'),
                                                                    data: $(form).serialize(),
                                                                    dataType: 'json',
                                                                    success: function (msg) {
                                                                        if (typeof msg === 'object') {
                                                                            if (msg.status) {
                                                                                alert(msg.info);
                                                                                window.location.href = msg.url;
                                                                            } else {
                                                                                $.msgbox(msg.info, {type: "error"});
                                                                            }
                                                                        }
                                                                    }
                                                                });
                                                                return false; // required 
                                                            }
                                                        });
                                                    });
    </script>

</body>
</html>
