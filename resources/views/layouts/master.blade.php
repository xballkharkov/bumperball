<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <title>@yield('title')</title>

        <meta name="description" content="@yield('description')" />
        <meta name="keywords" content="@yield('keywords')" />
        
        <meta content="website" property="og:type">
        <meta content="Бампербол - футбол в шарах в Харькове" property="og:title">
        <meta content="http://www.xball.kh.ua" property="og:url">
        <meta content="http://www.xball.kh.ua/img/logos/bumber_ball_xball.jpg" property="og:image">
        <meta content="www.xball.kh.ua" property="og:site_name">
        <meta content="300" property="og:image:width">
        <meta content="225" property="og:image:height">
        
        <!--bootstrap css -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen" />
        <!--font-->
        <link href='https://fonts.googleapis.com/css?family=Ubuntu+Condensed&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="/css/fonts/ico-parallax/icoparallax.css"/>
        <link rel="stylesheet" href="/css/fonts/font-mm/font-mm.css"/>
        <link rel="stylesheet" href="/css/fonts/ionicons/ionicons.min.css"/>
        <link rel="stylesheet" href="/css/fonts/fontawesome/font-awesome.min.css"/>
        <link rel="stylesheet" href="/css/fonts/font-icons-lp/icon-lp.css"/>
        <!--.css files -->
        <link rel="stylesheet" href="/css/libs/mmenu/jquery.mmenu.all.css"/>
        <link rel="stylesheet" href="/css/libs/owl-carousel/owl.carousel.css"/>
        <link rel="stylesheet" href="/css/libs/owl-carousel/owl.theme.css"/>
        <link rel="stylesheet" href="/css/libs/owl-carousel/owl.transitions.css"/>
        <link rel="stylesheet" href="/css/libs/form-styler/jquery.formstyler.css"/>
        <link rel="stylesheet" href="/css/libs/gallery/magnific-popup.css"/>
        <link rel="stylesheet" href="/css/libs/master-slider/masterslider.css"/>
        <link rel="stylesheet" href="/css/libs/notify/toastr.min.css"/>
        <link rel="stylesheet" href="/css/libs/animated/animate.css"/>

        <link rel="stylesheet" href="/css/style.css"/>
        <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png">
        <!-- Jquery -->
        <script src="/js/libs/jquery.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="/css/libs/fancybox/jquery.fancybox.css?v=2.1.4" media="screen" />
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112532937-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-112532937-1');
        </script>
    </head>
    
    <body>
        <div id="scrollTop-btn" class="sticky-btns">
            <span><i class="fa fa-chevron-up"></i></span>
        </div>

        @yield('layout')
    </body>
</html>

<!-- Bootstrap Jquery -->
<script src="/js/libs/bootstrap.min.js" type="text/javascript"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="/js/libs/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="/js/libs/fancybox/jquery.fancybox.js?v=2.1.4"></script>
