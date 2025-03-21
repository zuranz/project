<html lang="en"><head>
    <meta charset="UTF-8">
    <title>Вход в аккаунт</title>

    <link rel="stylesheet" type="text/css" href="/-/static/fontawesome/css/all.css?v=30bcab9c">

    <script src="/-/static/system.js?v=a27e096d" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="/-/static/system.css?v=956d8119">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />

    <link rel="stylesheet" href="/assets/vendor/notyf/notyf.min.css">
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Custom Theme files -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- for bootstrap working -->
    <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
    <!-- //for bootstrap working -->
    <!-- web-fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <script src="{{asset('js/responsiveslides.min.js')}}"></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
    <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
    <!--/script-->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>


</head>
<body >

<div class="container-fluid text-center ">




    <div class="card" style="width: 30%; margin-top: 10%; margin-left: 33%; margin-bottom: 10%; height: 30% ">


       @yield('auth')




    </div>



    <a  href="/"> Назад на сайт</a>


</div>

<div class="footer">
    <div class="footer-top">
        <div class="wrap">
            <div class="col-md-3 col-xs-6 col-sm-4 footer-grid">
                <h4 class="footer-head">About Us</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
            </div>
            <div class="col-md-2 col-xs-6 col-sm-2 footer-grid">
                <h4 class="footer-head">Categories</h4>
                <ul class="cat">
                    <li><a href="business.html">Business</a></li>
                    <li><a href="technology.html">Technology</a></li>
                    <li><a href="entertainment.html">Entertainment</a></li>
                    <li><a href="sports.html">Sports</a></li>
                    <li><a href="shortcodes.html">Health</a></li>
                    <li><a href="fashion.html">Fashion</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-xs-6 col-sm-6 footer-grid">
                <h4 class="footer-head">Flickr Feed</h4>
                <ul class="flickr">
                    <li><a href="#"><img src="{{asset('images/bus4.jpg')}}"></a></li>
                    <li><a href="#"><img src="{{asset('images/bus2.jpg')}}"></a></li>
                    <li><a href="#"><img src="{{asset('images/bus3.jpg')}}"></a></li>
                    <li><a href="#"><img src="{{asset('images/bus4.jpg')}}"></a></li>
                    <li><a href="#"><img src="{{asset('images/tec2.jpg')}}"></a></li>
                    <li><a href="#"><img src="{{asset('images/tec3.jpg')}}"></a></li>
                    <li><a href="#"><img src="{{asset('images/bus2.jpg')}}"></a></li>
                    <li><a href="#"><img src="{{asset('images/bus3.jpg')}}"></a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <div class="col-md-3 col-xs-12 footer-grid">
                <h4 class="footer-head">Contact Us</h4>
                <span class="hq">Our headquaters</span>
                <address>
                    <ul class="location">
                        <li><span class="glyphicon glyphicon-map-marker"></span></li>
                        <li>CENTER FOR FINANCIAL ASSISTANCE TO DEPOSED NIGERIAN ROYALTY</li>
                        <div class="clearfix"></div>
                    </ul>
                    <ul class="location">
                        <li><span class="glyphicon glyphicon-earphone"></span></li>
                        <li>+0 561 111 235</li>
                        <div class="clearfix"></div>
                    </ul>
                    <ul class="location">
                        <li><span class="glyphicon glyphicon-envelope"></span></li>
                        <li><a href="mailto:info@example.com">mail@example.com</a></li>
                        <div class="clearfix"></div>
                    </ul>
                </address>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="wrap">
            <div class="copyrights col-md-6">
                <p> © 2015 Express News. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
            </div>
            <div class="footer-social-icons col-md-6">
                <ul>
                    <li><a class="facebook" href="#"></a></li>
                    <li><a class="twitter" href="#"></a></li>
                    <li><a class="flickr" href="#"></a></li>
                    <li><a class="googleplus" href="#"></a></li>
                    <li><a class="dribbble" href="#"></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- footer-section-ends-here -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
        wrapID: 'toTop', // fading element id
        wrapHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear'
        };
        */
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
</script>

<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!---->
<script src="/assets/vendor/notyf/notyf.min.js.js"></script>
</body></html>
