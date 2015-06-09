
<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8"/>
        <title>小绾的博客</title>

        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" media="all" href="/frontend/css/style.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->		

        <!-- JS -->
        <script src="/frontend/js/jquery-1.7.1.min.js"></script>
        <script src="/frontend/js/custom.js"></script>
        <script src="/frontend/js/tabs.js"></script>
        <script src="/frontend/js/css3-mediaqueries.js"></script>
        <script src="/frontend/js/jquery.columnizer.min.js"></script>

        <!-- Isotope -->
        <script src="/frontend/js/jquery.isotope.min.js"></script>

        <!-- Lof slider -->
        <script src="/frontend/js/jquery.easing.js"></script>
        <script src="/frontend/js/lof-slider.js"></script>
        <link rel="stylesheet" href="/frontend/css/lof-slider.css" media="all"  /> 
        <!-- ENDS slider -->

        <!-- Tweet -->
     
        <!-- ENDS Tweet -->

        <!-- superfish -->
        <link rel="stylesheet" media="screen" href="/frontend/css/superfish.css" /> 
        <!-- ENDS superfish -->

        <!-- prettyPhoto -->
        <script  src="/frontend/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <link rel="stylesheet" href="/frontend/js/prettyPhoto/css/prettyPhoto.css"  media="screen" />
        <!-- ENDS prettyPhoto -->

        <!-- poshytip -->
        <link rel="stylesheet" href="/frontend/js/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
        <link rel="stylesheet" href="/frontend/js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
        <script  src="/frontend/js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
        <!-- ENDS poshytip -->

        <!-- JCarousel -->
        <script type="text/javascript" src="/frontend/js/jquery.jcarousel.min.js"></script>
        <link rel="stylesheet" media="screen" href="/frontend/css/carousel.css" /> 
        <!-- ENDS JCarousel -->

        <!-- GOOGLE FONTS -->
        <!-- <link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'> -->

        <!-- modernizr -->
        <script src="/frontend/js/modernizr.js"></script>

        <!-- SKIN -->
        <link rel="stylesheet" media="all" href="/frontend/css/skin.css"/>

        <!-- Less framework -->
        <link rel="stylesheet" media="all" href="/frontend/css/lessframework.css"/>

        <!-- flexslider -->
        <link rel="stylesheet" href="/frontend/css/flexslider.css" >
        <script src="/frontend/js/jquery.flexslider.js"></script>
        <!--icomoon-->
        <link rel="stylesheet" href="/plugins/icomoon/style.css" >
          
    <!-- ueditor -->
    <link href="/public/plugins/ueditor/third-party/SyntaxHighlighter/shCoreDefault.css')}}" rel="stylesheet" type="text/css" />  
    <script src="/public/plugins/ueditor/third-party/SyntaxHighlighter/shCore.js')}}" ></script>
    <script>
        $(function () {
            SyntaxHighlighter.all();
        })
    </script>

        
    <style>
        .wrapper {
            width: 1020px;
        }
        #posts-list {
            width: 720px;
        }
        #posts-list article .box {
            background: #F8F5F2;
        }
        #posts-list article .box .excerpt {
            float: none;
            width: 100%;
        }
        #posts-list article .box {
            padding-right: 20px;
        }
    </style>
    </head>
    <body>
        <!-- HEADER -->
        <header>
            <div class="wrapper cf">
                <div id="logo">
                    <a href="index.html"><h1>小绾的博客</h1>    <span style="display: inline-block;margin-left:60px;">你说过有梦该去追逐，奔跑吧，少年。</span></a>
                </div>
                <!-- nav -->
                <ul id="nav" class="sf-menu">
                     <?php echo $this->elements->getMenu(); ?>
                </ul>
                <div id="combo-holder"></div>
                <!-- ends nav -->
                <!-- SLIDER -->				
            
            <!-- ENDS SLIDER -->
        </div>
    </header>

        <!-- MAIN -->
        <div id="main">
            <div class="wrapper cf">
                <!-- masthead -->
                
                <!-- ENDS masthead -->
                <!-- posts list -->
                <div id="posts-list" class="cf">        	
                    <!-- Standard -->
                    <article class="format-standard">
                        
                        <div class="box cf">
                            <div class="entry-date"><div class="number"><?php echo $time_d; ?></div><div class="month"><?php echo $time_m; ?></div></div>
                            <div class="excerpt">
                                <div class="post-heading" ><?php echo $blog->title; ?></div>
                                <div class="post-bar">
                                    <span class="icon-user"><a href="#"> <?php echo $blog->author->username; ?></a></span>
                                    <span class="icon-tag"><a href="#"> <?php echo $blog->blogcat->name; ?></a></span>
                                    <span class="icon-calendar"><a href="#"> <?php echo $blog->ctime; ?></a></span>
                                </div>
                                <div class="entry-content">
                                    <?php echo $blog->content; ?>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- ENDS  Standard -->
                    <!-- comments list -->
                    <div id="comments-wrap">
                        <!-- 多说评论框 start -->
                        <div class="ds-thread" data-thread-key="<?php echo $blog->id; ?>" data-title="<?php echo $blog->title; ?>" data-url="http://sfblog/blog/single-<?php echo $blog->id; ?>"></div>
                        <!-- 多说评论框 end -->
                        <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
                        <script type="text/javascript">
                            var duoshuoQuery = {short_name: "caowenpeng1990"};
                            (function () {
                                var ds = document.createElement('script');
                                ds.type = 'text/javascript';
                                ds.async = true;
                                ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
                                ds.charset = 'UTF-8';
                                (document.getElementsByTagName('head')[0]
                                        || document.getElementsByTagName('body')[0]).appendChild(ds);
                            })();
                        </script>
                        <!-- 多说公共JS代码 end -->
                    </div>
                    <!-- ENDS Respond -->
                </div>
                <!-- ENDS posts list -->
                <!-- sidebar -->
                <aside id="sidebar">
                    <?php echo $this->elements->getBlogRight(); ?>
                </aside>
                <!-- ENDS sidebar -->


            </div><!-- ENDS WRAPPER -->
        </div>
        <!-- ENDS MAIN -->

    
<!-- FOOTER -->
<footer>
    <div class="wrapper cf">
        <!-- bottom -->
        <div class="footer-bottom">
            <div class="left">由 <a href="http://luiszuno.com" >symfony框架基础上纯手写驱动</a></div>
        </div>	
        <!-- ENDS bottom -->
    </div>
</footer>
<!-- ENDS FOOTER -->
</body>
</html>