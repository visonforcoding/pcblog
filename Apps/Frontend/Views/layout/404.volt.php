<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap Stylesheet -->
<link rel="stylesheet" href="/public/css/bootstrap.min.css" media="screen">

<!-- Main Layout Stylesheet -->
<link rel="stylesheet" href="/public/css/error.css" media="screen">

<title>MoonCake :: Responsive Admin Template</title>

</head>

<body>

    <div id="error-wrap">

        <div id="error-digits">
            <span class="animated">4</span>
            <span class="animated delay300">0</span>
            <span class="animated delay600">4</span>
        </div>

        <h1>We seem to have misguided you to the wrong page.</h1>
        <p>The page you're looking for is not found. Maybe you should <a href="dashboard.html">go back home</a> or search for what you are looking below.</p>

        <form id="error-form" class="form-search" method="post">
            <div class="input-append">
                <input type="text" class="search-query input-xxlarge" placeholder="Search...">
                <button type="submit" class="btn">Search</button>
            </div>
        </form>

    </div>

    <!-- Core Scripts -->
    <script src="/public/js/jquery-1.8.2.min.js"></script>
    <script src="/public/js/jquery.placeholder.min.js"></script>

    <script>
        function support() {
            var vendorPrefixes = "O Ms Webkit Moz".split( ' ' ),    
                i = vendorPrefixes.length, support = true, 
                divStyle = document.createElement('div').style;

            while( i-- ) {
                for(var a = 0, support = true; a < arguments.length; a++) {
                    support = (vendorPrefixes[ i ] + arguments[ a ] in divStyle);
                }

                if( support ) return true;
            }

            return false;
        }

        $(document).ready(function() {
            support( 'Animation' ) && $('#error-digits > span').each( function(i, span) {
                $(span).addClass('bounceInDown');
            });
        });

    </script>

</body>

</html>
