@extends('layouts.master')

@section('layout')
    <div class="page lp-page lp-vape grey">
        <!--Header-->
        <header>
            <div class="container">
                <div class="header-inner">
                    <div class="header-top clearfix hidden-xs">
                        <div class="scroll-menu">
                            <div class="scroll-menu-container">
                                <div class="scroll-hide-menu">
                                    <a class="mini-logo" href="/">
                                        <img alt="Bumperball" src="/img/logo_mini.png">
                                    </a>
                                </div>
                                <ul class="nav navbar-nav navbar-left">
                                    <li class="social-btn">
                                        <a href="https://www.facebook.com/xball.kharkov/" class="social-box" title="facebook" target="_blank">
                                            <span class="icon icon-facebook"></span>
                                        </a>
                                        <a href="https://vk.com/xball_kharkov" class="social-box" title="vkontakte" target="_blank">
                                            <span class="icon icon-vk"></span>
                                        </a>
                                        <a href="https://twitter.com/XballKharkov" class="social-box" title="twitter" target="_blank">
                                            <span class="icon icon-twitter"></span>
                                        </a>
                                        <a href="https://www.instagram.com/xball_kharkov/" class="social-box" title="instagram" target="_blank">
                                            <span class="icon icon-instagram"></span>
                                        </a>
                                        {{-- <a href="#" class="social-box" title="youtube" target="_blank">
                                            <span class="icon icon-youtube"></span>  
                                        </a> --}}           
                                    </li>
                                </ul>
                                
                                <div class="phone-list">
                                    <span>0994059722</span>
                                    <span>0734823238</span>
                                    <span>xballkh@gmail.com</span>
                                </div>

                                <div class="nav-site pull-right">
                                    <button type="button" class="navbar-toggle">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                    <div class="navbar-collapse" id="top-menu">
                                        <ul class="nav navbar-nav">
                                            <li><a href="/faq"><span>Вопросы и ответы</span></a></li>
                                            <li><a href="/price"><span>Оплата</span></a></li>
                                            <li><a href="/map"><span>Стадионы</span></a></li>
                                            <li><a href="/contacts"><span>Контакты</span></a></li>
                                        </ul>
                                    </div>                                                                   
                                </div>

                                {{-- <ul class="nav navbar-nav navbar-right">
                                    <li class="menu-dropdown">
                                        <div class="current">
                                            <span><i class="ion-android-person"></i> Меню</span>
                                        </div>
                                    </li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>

                    <div class="main-header">
                        <ul class="main-menu">
                            
                            <li class="logo">
                                <div class="inner">
                                    <a href="/"><img src="/img/logo.png" alt="Bumperball"/></a>
                                </div>
                            </li> 
                            {{--
                            <li class="btn-catalog-menu">
                                <div class="inner">
                                    <a href="/gallery" class="hidden-xs"><i class="ion-images"></i> галерея </a>
                                </div>
                            </li>
                            <li class="btn-second-menu">
                                <div class="inner">
                                    <a href="/video" class="hidden-xs"><i class="ion-ios-videocam"></i> видео </a>
                                </div>
                            </li>
                            <li class="btn-third-menu">
                                <div class="inner">
                                    <a href="/promo" class="hidden-xs"><i class="ion-alert"></i> акции </a>
                                </div>
                            </li>  --}}
                        </ul> 

                        <div class="clearfix visible-xs"></div>

                        {{--<div class="xs-search visible-xs">
                            <div class="xs-header-search">
                                <div class="search-dropdown">
                                    <div class="input-box">
                                        <form action="/shops/search" method="get">
                                            <input type="text" name="q" class="form-control" placeholder="Поиск"/>
                                            <button type="submit"><i class="ion-ios-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </header>
        <!--Header End-->

        <div class="header-margin"></div>

        @yield('content')
        
    </div>    

    <!--Footer-->
    <footer>
        <div class="container">
        </div>
        <div class="bottom-block">
            <div class="container">
                <div class="col-sm-6 no-padd">
                    <div class="copyright">
                        &copy; 2017 - {{ date('Y') }} Bumperball в Харькове
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer End-->
    <div id="message-block"></div>
    <div id="error-block"></div>
    
    
    <!-- Modals -->
    @include('dialogs/order')
    @include('dialogs/callback')

    <!-- Custom js file -->
    <script src="/js/libs/mmenu/jquery.mmenu.min.all.js" type="text/javascript"></script>
    <script src="/js/libs/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script src="/js/libs/parallax-js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
    <script src="/js/libs/form-styler/jquery.formstyler.min.js" type="text/javascript"></script>
    <script src="/js/libs/gallery/jquery.magnific-popup.js" type="text/javascript"></script>
    <script src="/js/libs/master-slider/masterslider.min.js" type="text/javascript"></script>
    <script src="/js/libs/jquery.dotdotdot.js" type="text/javascript"></script>
    <script src="/js/libs/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script src="/js/libs/validator/is.mobile.js" type="text/javascript"></script>
    <script src="/js/libs/validator/formcheck.js" type="text/javascript"></script>
    <script src="/js/libs/notify/toastr.min.js" type="text/javascript"></script>
    <script src="/js/libs/jquery-ui.js" type="text/javascript"></script>
    <script src="/js/custom.js" type="text/javascript"></script>
                   
    <script src="/js/libs/isotope/isotope.pkgd.js" type="text/javascript"></script>
    <script src="/js/libs/isotope/masonry.min.js" type="text/javascript"></script>
    <script src="/js/libs/isotope/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="/js/libs/jquery.stellar.min.js" type="text/javascript"></script>
    <script src="/js/libs/animated/wow.min.js" type="text/javascript"></script>
    <script src="/js/libs/waypoints.min.js" type="text/javascript"></script>
    <script src="/js/libs/ytplayer/jquery.vide.js" type="text/javascript"></script>

    <script type="text/javascript">
        /*=================================================================
         Parallax Background
         =================================================================*/
        $(window).stellar({
            responsive: true,
            horizontalScrolling: false,
            hideDistantElements: false,
            horizontalOffset: 0,
            verticalOffset: 0
        });

        wow = new WOW(
            {
                boxClass:     'wow',
                animateClass: 'animated',
                offset:       300,
                mobile:       false,
                live:         true
            }
        );
        wow.init();

        $(function(){
            $("#main-carousel").owlCarousel({
                autoPlay: 5000,
                navigation : false, // Show next and prev buttons
                slideSpeed : 3000,
                paginationSpeed : 1000,
                singleItem: true,
                stopOnHover: true,
                pagination: true
            });

            /*
             *  PARALLAX
             */
            if ($.fn.parallax) {
                //parallax on fullscreen slider
                $.each($('.parallax-bg'), function(i) {
                    var background = $(this).data('background');
                    $(this).css({
                        'background': 'url(' + background + ') 50% 0 / cover no-repeat',
                        'background-attachment': 'fixed'
                    });
                });
                $('.parallax-bg').parallax("50%", 0.5);
            }

            //        var BV = new $.BigVideo();
            //        BV.init();
            //        BV.show('/img/lp_vape/vape-video.mp4');

            var e = $(".container-masonry");
            e.imagesLoaded(function() {
                e.isotope({
                    itemSelector: ".nf-item",
                    layoutMode: "masonry",
                    masonry: {
                        columnWidth: 0,
                        gutter: 0
                    }
                })
            }), $(".container-filter").on("click", ".categories", function() {
                var a = $(this).attr("data-filter");
                e.isotope({
                    filter: a
                })
            });
            var a = $(".container-grid");
            a.imagesLoaded(function() {
                a.isotope({
                    itemSelector: ".nf-item",
                    layoutMode: "fitRows"
                })
            }), $(".container-filter").on("click", ".categories", function() {
                var e = $(this).attr("data-filter");
                a.isotope({
                    filter: e
                })
            }), $(".categories-filter").each(function(e, a) {
                var i = $(a);
                i.on("click", ".categories", function() {
                    i.find(".active").removeClass("active"), $(this).addClass("active")
                })
            });

            /** Magnific Popup Init
             **********************************************************/
            // Image Popup
            if($('.popup-img').length > 0) {
                $('.popup-img').magnificPopup({
                    type:'image',
                    gallery:{
                        enabled:true
                    },
                    removalDelay: 300,
                    mainClass: 'mfp-fade'

                });
            }

            /* ---------------------------------------------- /*
             * Scrolling Animations
             /* ---------------------------------------------- */
            $('.scrollimation').waypoint(function(){
                $(this).addClass('in');
            },{offset:'80%'});
            
            $(window).scroll(function(){
                if ($(this).scrollTop() > 100) {
                    $('header .header-top').addClass('scrolling');
                } else {
                    $('header .header-top').removeClass('scrolling');
                }
            });
        })
    </script>
    
    @if (isset($show_map))
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDLswQA5KjMVA08IWy-F41z9Iesjubd8vI&callback=initMap" type="text/javascript"></script>
        <script type="text/javascript" src="/js/libs/map/infobox.js"></script>

        <script type="text/javascript">
            // AIzaSyDLswQA5KjMVA08IWy-F41z9Iesjubd8vI 
            var markers = {!! $markers !!};
            /*var markers = [{
                        "key" : "item_1",
                        "name" : "Унифект",
                        "location_latitude" : 49.99643,
                        "location_longitude" : 36.22415,
                        "map_image_url" : "images",
                        "name_point" : "Унифект",
                        "description_point" : "",
                        "url_point" : ""
                    }];           */
            var centerLon = 36.22415,
                centerLat = 49.99643;

            var mainOptions = {route: []};

            mainOptions.route.push({
                'initMap': {
                    markersData: markers,
                    centerLat: centerLat,
                    centerLon: centerLon
                }
            });

            Main.init(mainOptions);
        </script>
    @endif
    
@endsection