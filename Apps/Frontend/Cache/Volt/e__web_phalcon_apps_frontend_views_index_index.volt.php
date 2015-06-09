
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

    <!-- ENDS HEADER -->
    <!-- MAIN -->
    <div id="main">
        <div class="wrapper cf">
            <!-- featured -->
            <div class="home-featured">
                <ul id="filter-buttons">
                    <li><a href="#" data-filter="*" class="selected">show all</a></li>
                        <?php foreach ($catList as $cat) { ?>
                        <li><a href="#" data-filter=".<?php echo $cat->name; ?>"><?php echo $cat->name; ?></a></li>
                        <?php } ?>
                </ul>
                <!-- Filter container -->
                <div id="filter-container" class="cf">
                    <?php foreach ($catList as $cat) { ?>
                        <?php foreach ($blogList as $blog) { ?>
                            <?php if ($cat == $blog->blogcat) { ?>
                                <figure class="<?php echo $cat->name; ?>">
                                    <a href="/blog/single-<?php echo $blog->id; ?>" class="thumb"><img src="<?php echo $blog->cover; ?>" alt="alt" /></a>
                                    <figcaption>
                                        <a href="/blog/single-<?php echo $blog->id; ?>"><h3 class="heading"><?php echo $blog->title; ?></h3></a>
                                            <?php echo $blog->guide; ?>
                                    </figcaption>
                                </figure>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                </div><!-- ENDS Filter container -->
            </div>
            <!-- ENDS featured -->
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