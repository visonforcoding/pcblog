{# empty Twig template #}
<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8"/>
        <title>{% block title %}{% endblock %}</title>

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
     {#   <link rel="stylesheet" href="/public/frontend/css/jquery.tweet.css" media="all"  /> 
        <script src="/frontend/js/tweet/jquery.tweet.js" ></script> #}
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
          {% block javascript %}{% endblock %}
        {% block css %}
      
        {% endblock %}
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
                     {{elements.getMenu() }}
                </ul>
                <div id="combo-holder"></div>
                <!-- ends nav -->
                <!-- SLIDER -->				
            {% block slider %}{% endblock %}
            <!-- ENDS SLIDER -->
        </div>
    </header>
{% block main %}{% endblock %}
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