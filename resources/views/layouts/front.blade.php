<!DOCTYPE html>
<html>
<head>
    <title>Express|Home</title>
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
<body>
<!-- header-section-starts-here -->
<div class="header">
    <div class="header-top">
        <div class="wrap">
            <div class="top-menu">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>


    <div class="header-bottom">
        <div class=" newsletter conten">
            <input type="submit" value="Login" style="width: 100px">

        </div>

        <div class="logo text-center">
            <a href="/"><img src="{{asset('images/logo.jpg')}}" alt="" /></a>

        </div>
        <div class="navigation">
            <nav class="navbar navbar-default" role="navigation">
                <div class="wrap">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <!--/.navbar-header-->

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="sports.html">Sports</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Entertainment<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="entertainment.html">Movies</a></li>
                                    <li class="divider"></li>
                                    <li><a href="entertainment.html">Another action</a></li>
                                    <li class="divider"></li>
                                    <li><a href="entertainment.html">Articles</a></li>
                                    <li class="divider"></li>
                                    <li><a href="entertainment.html">celebrity</a></li>
                                    <li class="divider"></li>
                                    <li><a href="entertainment.html">One more separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="shortcodes.html">Health</a></li>
                            <li><a href="fashion.html">Fashion</a></li>
                            <li class="dropdown">
                                <a href="business.html" class="dropdown-toggle" data-toggle="dropdown">Business<b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-2">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="business.html">Action</a></li>
                                                <li class="divider"></li>
                                                <li><a href="business.html">bulls</a></li>
                                                <li class="divider"></li>
                                                <li><a href="business.html">markets</a></li>
                                                <li class="divider"></li>
                                                <li><a href="business.html">Reviews</a></li>
                                                <li class="divider"></li>
                                                <li><a href="shortcodes.html">Short codes</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="business.html">features</a></li>
                                                <li class="divider"></li>
                                                <li><a href="entertainment.html">Movies</a></li>
                                                <li class="divider"></li>
                                                <li><a href="sports.html">sports</a></li>
                                                <li class="divider"></li>
                                                <li><a href="business.html">Reviews</a></li>
                                                <li class="divider"></li>
                                                <li><a href="business.html">Stock</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="technology.html">Technology</a></li>
                            <div class="clearfix"></div>
                        </ul>
                        <div class="search">
                            <!-- start search-->
                            <div class="search-box">
                                <div id="sb-search" class="sb-search">
                                    <form>
                                        <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                                        <input class="sb-search-submit" type="submit" value="">
                                        <span class="sb-icon-search"> </span>
                                    </form>
                                </div>
                            </div>
                            <!-- search-scripts -->
                            <script src="{{asset('js/classie.js')}}"></script>
                            <script src="{{asset('js/uisearch.js')}}"></script>
                            <script>
                                new UISearch( document.getElementById( 'sb-search' ) );
                            </script>
                            <!-- //search-scripts -->
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </nav>
                <!--/.navbar-collapse-->
                <!--/.navbar-->
        </div>
        </nav>
    </div>
</div>
<!-- header-section-ends-here -->
<div class="wrap">

</div>
<!-- content-section-starts-here -->
<div class="main-body">
    <div class="wrap">
        <div class="col-md-8 content-left">
            <div class="slider">
                <div class="callbacks_wrap">
                    <ul class="rslides" id="slider">
                        <li>
                            <img src="{{asset('images/3.jpg')}}" alt="">
                            <div class="caption">
                                <a href="single.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry</a>
                            </div>
                        </li>
                        <li>
                            <img src="{{asset('images/2.jpg')}}" alt="">
                            <div class="caption">
                                <a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</a>
                            </div>
                        </li>
                        <li>
                            <img src="{{asset('images/1.jpg')}}" alt="">
                            <div class="caption">
                                <a href="single.html">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="articles">






                @yield('content')



            </div>
        </div>
        <div class="col-md-4 side-bar">
            <div class="first_half">



                <x-category-component/>




                <div class="newsletter">
                    <h1 class="side-title-head">Newsletter</h1>
                    <p class="sign">Sign up to receive our free newsletters!</p>
                    <form>
                        <input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
                        <input type="submit" value="submit">
                    </form>
                </div>
                <div class="list_vertical">
                    <section class="accordation_menu">
                        <div>
                        <input id="label-1" name="lida" type="radio" checked/>
                        <label for="label-1" id="item1"><i class="ferme"> </i>Popular Posts<i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
                        <div class="content" id="a1">
                            <div class="scrollbar" id="style-2">
                                <div class="force-overflow">
                                    <div class="popular-post-grids">





                                        <x-top/>






                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                        <div>
                            <input id="label-2" name="lida" type="radio"/>
                            <label for="label-2" id="item2"><i class="icon-leaf" id="i2"></i>Recent Posts<i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
                            <div class="content" id="a2">
                                <div class="scrollbar" id="style-2">
                                    <div class="force-overflow">
                                        <div class="popular-post-grids">
                                            <div class="popular-post-grid">
                                                <div class="post-img">
                                                    <a href="single.html"><img src="{{asset('images/tec2.jpg')}}" alt="" /></a>
                                                </div>
                                                <div class="post-text">
                                                    <a class="pp-title" href="single.html"> The section of the mass media industry</a>
                                                    <p>On Feb 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>3 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="popular-post-grid">
                                                <div class="post-img">
                                                    <a href="single.html"><img src="{{asset('images/tec1.jpg')}}" alt="" /></a>
                                                </div>
                                                <div class="post-text">
                                                    <a class="pp-title" href="single.html"> Lorem Ipsum is simply dummy text printing</a>
                                                    <p>On Apr 14 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>2 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="popular-post-grid">
                                                <div class="post-img">
                                                    <a href="single.html"><img src="{{asset('images/tec3.jpg')}}" alt="" /></a>
                                                </div>
                                                <div class="post-text">
                                                    <a class="pp-title" href="single.html">There are many variations of Lorem</a>
                                                    <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="popular-post-grid">
                                                <div class="post-img">
                                                    <a href="single.html"><img src="{{asset('images/tec4.jpg')}}" alt="" /></a>
                                                </div>
                                                <div class="post-text">
                                                    <a class="pp-title" href="single.html">Sed ut perspiciatis unde omnis iste natus</a>
                                                    <p>On Jan 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>1 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <input id="label-3" name="lida" type="radio"/>
                            <label for="label-3" id="item3"><i class="icon-trophy" id="i3"></i>Comments<i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
                            <div class="content" id="a3">
                                <div class="scrollbar" id="style-2">
                                    <div class="force-overflow">
                                        <div class="response">
                                            <div class="media response-info">
                                                <div class="media-left response-text-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('images/icon1.png')}}" alt="" />
                                                    </a>
                                                    <h5><a href="#">Username</a></h5>
                                                </div>
                                                <div class="media-body response-text-right">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <ul>
                                                        <li>MARCH 21, 2015</li>
                                                        <li><a href="single.html">Reply</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="media response-info">
                                                <div class="media-left response-text-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('images/icon1.png')}}" alt="" />
                                                    </a>
                                                    <h5><a href="#">Username</a></h5>
                                                </div>
                                                <div class="media-body response-text-right">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <ul>
                                                        <li>MARCH 26, 2015</li>
                                                        <li><a href="single.html">Reply</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="media response-info">
                                                <div class="media-left response-text-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('images/icon1.png')}}" alt="" />
                                                    </a>
                                                    <h5><a href="#">Username</a></h5>
                                                </div>
                                                <div class="media-body response-text-right">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <ul>
                                                        <li>MAY 25, 2015</li>
                                                        <li><a href="single.html">Reply</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="media response-info">
                                                <div class="media-left response-text-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('images/icon1.png')}}" alt="" />
                                                    </a>
                                                    <h5><a href="#">Username</a></h5>
                                                </div>
                                                <div class="media-body response-text-right">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <ul>
                                                        <li>FEB 13, 2015</li>
                                                        <li><a href="single.html">Reply</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="media response-info">
                                                <div class="media-left response-text-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('images/icon1.png')}}" alt="" />
                                                    </a>
                                                    <h5><a href="#">Username</a></h5>
                                                </div>
                                                <div class="media-body response-text-right">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <ul>
                                                        <li>JAN 28, 2015</li>
                                                        <li><a href="single.html">Reply</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="media response-info">
                                                <div class="media-left response-text-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('images/icon1.png')}}" alt="" />
                                                    </a>
                                                    <h5><a href="#">Username</a></h5>
                                                </div>
                                                <div class="media-body response-text-right">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <ul>
                                                        <li>APR 18, 2015</li>
                                                        <li><a href="single.html">Reply</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="media response-info">
                                                <div class="media-left response-text-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('images/icon1.png')}}" alt="" />
                                                    </a>
                                                    <h5><a href="#">Username</a></h5>
                                                </div>
                                                <div class="media-body response-text-right">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <ul>
                                                        <li>DEC 25, 2014</li>
                                                        <li><a href="single.html">Reply</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="side-bar-articles">
                    <div class="side-bar-article">
                        <a href="single.html"><img src="{{asset('images/sai.jpg')}}" alt="" /></a>
                        <div class="side-bar-article-title">
                            <a href="single.html">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
                        </div>
                    </div>
                    <div class="side-bar-article">
                        <a href="single.html"><img src="{{asset('images/sai2.jpg')}}" alt="" /></a>
                        <div class="side-bar-article-title">
                            <a href="single.html">There are many variations of passages of Lorem</a>
                        </div>
                    </div>
                    <div class="side-bar-article">
                        <a href="single.html"><img src="{{asset('images/sai3.jpg')}}" alt="" /></a>
                        <div class="side-bar-article-title">
                            <a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="secound_half">

                <div class="popular-news">
                    <header>
                        <h3 class="title-popular">popular News</h3>
                    </header>
                    <div class="popular-grids">



                        <x-popular-news/>



                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- content-section-ends-here -->
<!-- footer-section-starts-here -->
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
</body>
</html>
