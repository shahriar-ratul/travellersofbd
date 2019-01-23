<!DOCTYPE html>
<html lang="en">
<!-- Head -->

<head>
    <title>Travelers of BD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Travel,travelersofbd,bangladesh travel" />

    <link href="{!! asset('web/css/JiSlider.css') !!}" rel="stylesheet"> <!-- banner js-->

    <link rel="stylesheet" href="{!! asset('web/css/flexslider.css') !!}" type="text/css" media="screen" />
    <!-- Testimonials js-->

    <link href="{!! asset('web/css/simplelightbox.min.css') !!}" rel='stylesheet' type='text/css'>
    <!-- lightbox css -->
    <!-- gallery js -->


    <!-- default css files -->
    <link rel="stylesheet" href="{!! asset('web/css/bootstrap.css') !!}" type="text/css" media="all">
    <link rel="stylesheet" href="{!! asset('web/css/style.css') !!}" type="text/css" media="all">
    <link rel="stylesheet" href="{!! asset('web/css/font-awesome.min.css') !!}" />
    <!-- default css files -->
    <script src="{{asset('/js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/js/jquery-migrate-3.0.1.js')}}"></script>
   <script src="{{asset('/js/gijgo.min.js')}}" type="text/javascript"></script>
   <link href="{{asset('/js/gijgo.min.css')}}" rel="stylesheet" type="text/css" />


    <!--web font-->
    <link href="//fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,devanagari,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <!--//web font-->

    <style>
    .social-icon a {
  font-size: 1.7em;
  color: #da0606;
  margin: 0px 0.5em;
  display: inline-block;
  text-align: center;
  font-weight: bold;
}
.navbar-nav > li {
    margin: 10px 0px;
}
.navbar-default .navbar-nav > li > a {
    color: #0f5c1f;
}
.navbar-nav > li > a {
    text-transform: uppercase;
    font-weight: 800;
    font-size: 20px;
}

        @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

#social {
  margin: 5px 5px;
  text-align: center;
}

.smGlobalBtn { /* global button class */
    display: inline-block;
    position: relative;
    cursor: pointer;
    width: 50px;
    height: 50px;
    border:2px solid #ddd; /* add border to the buttons */
    box-shadow: 0 3px 3px #999;
    padding: 0px;
    text-decoration: none;
    text-align: center;
    color: #fff;
    font-size: 25px;
    font-weight: normal;
    line-height: 2em;
    border-radius: 27px;
    -moz-border-radius:27px;
    -webkit-border-radius:27px;
}

/* facebook button class*/
.facebookBtn{
    background: #4060A5;
}

.facebookBtn:before{ /* use :before to add the relevant icons */
    font-family: "FontAwesome";
    content: "\f09a"; /* add facebook icon */
}

.facebookBtn:hover{
    color: #4060A5;
    background: #fff;
    border-color: #4060A5; /* change the border color on mouse hover */
}

/* twitter button class*/
.twitterBtn{
    background: #00ABE3;
}

.twitterBtn:before{
      font-family: "FontAwesome";
      content: "\f099"; /* add twitter icon */

}

.twitterBtn:hover{
      color: #00ABE3;
      background: #fff;
      border-color: #00ABE3;
}

/* google plus button class*/
.googleplusBtn{
    background: #e64522;
}

.googleplusBtn:before{
      font-family: "FontAwesome";
      content: "\f0d5"; /* add googleplus icon */
}

.googleplusBtn:hover{
      color: #e64522;
      background: #fff;
      border-color: #e64522;
}

/* linkedin button class*/
.linkedinBtn{
    background: #0094BC;
}

.linkedinBtn:before{
      font-family: "FontAwesome";
      content: "\f0e1"; /* add linkedin icon */
}

.linkedinBtn:hover{
      color: #0094BC;
      background: #fff;
      border-color: #0094BC;
}

/* pinterest button class*/
.pinterestBtn{
    background: #cb2027;
}

.pinterestBtn:before{
      font-family: "FontAwesome";
      content: "\f0d2"; /* add pinterest icon */
}

.pinterestBtn:hover{
      color: #cb2027;
      background: #fff;
      border-color: #cb2027;
}

/* tumblr button class*/
.tumblrBtn{
    background: #3a5876;
}

.tumblrBtn:before{
      font-family: "FontAwesome";
      content: "\f173"; /* add tumblr icon */
}

.tumblrBtn:hover{
      color: #3a5876;
      background: #fff;
      border-color: #3a5876;
}

/* rss button class*/
.rssBtn{
    background: #e88845;
}

.rssBtn:before{
      font-family: "FontAwesome";
      content: "\f09e"; /* add rss icon */
}

.rssBtn:hover{
      color: #e88845;
      background: #fff;
      border-color: #e88845;
}

.w3-agile-post-img1 a {
    background: url(../images/blog1.jpg) no-repeat 0px 0px;
    background-size: cover;
}


</style>

</head>

<!-- Body -->

<body>

    <!-- banner -->
    <div class="main_section_agile" id="home">
        <div class="container">
            <div class="agileits_w3layouts_banner_nav">
                <nav class="navbar navbar-default">
                    <div class="navbar-header navbar-left">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div id="logo">
                            <a href="{{url('/')}}"><img src="{{ asset('/web/') }}/images/logo.png" alt="" title="" /></a>
                        </div>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                        <nav class="menu--iris">
                            <ul class="nav navbar-nav menu__list">
                                <li ><a href="{{url('/welcome')}}">Home</a></li>
                                <li ><a href="">Trip</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="">Community</a></li>
                                <li ><a href="">About us</a></li>
                                <li ><a href="">Contact us</a></li>
                            </ul>
                            @guest
                              <div class="social-icon">
                                  <a href="{{url('/login')}}" class="social-button facebook">Log In</a>

                                  <a href="{{url('/register')}}" class="social-button google">Sign Up</a>
                              </div>
                            @else
                              <div class="social-icon">
                                  <a href="{{url('/users/logout')}}" class="social-button facebook">logout</a>
                              </div>
                            @endguest

                        </nav>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- banner -->
    <div class="banner-silder">
        <div id="JiSlider" class="jislider">
            <ul>
                <li>
                    <div class="w3layouts-banner-top">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <h3>Make Your Dream Live </h3>
                                <h3>Adventures fill your soul</h3>
                                <p>Travel Adventure</p>

                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top1">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <h3>Adventure awaits for you</h3>
                                <h3>Lets travel to see the world</h3>
                                <p>Travel Adventure</p>

                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top2">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <h3>One Way To Get Out Of Life</h3>
                                <h3>Lets find some beautiful place</h3>
                                <p>Travel Adventure</p>

                            </div>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top2 w3layouts-banner-top3">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <h3>One Way To Get Out Of Life</h3>
                                <h3>Lets find some beautiful place</h3>
                                <p>Travel Adventure</p>

                            </div>

                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
    <!-- //banner -->

    <!-- about -->
    <div class="about" id="about">
        <div class="container">
            <div class="abouthead" style="border:none; width:80%;">
                <h1 style="color:#d20000;padding-bottom:10px;text-transform: uppercase;">About Traveler Of Bangladesh</h1>
                <p style="font-size:18px">Travelers of Bangladesh is an online travelling social platform which is
                    designed for minimizing travelling cost of the travelers. Moreover, it will help to know about the
                    tourism spot of our country and for this the
                    tourism sector of Bangladesh will be benefited as well as the travelers.</p>
            </div>

            <div class="clearfix"></div>

        </div>
    </div>
    <!-- //about -->


    <!-- gallery -->
    <div class="gallery">
        <div class="container">
            <h3 class="w3ls-title">Trips By Division</h3>
            <div class="gallery-agileinfo">
              @if($data['trips']!=NULL)
              @foreach($data['trips'] as $trip)
                <div class="col-sm-4 col-xs-6 w3gallery-grids">
                    <a href="{{url('/trips/details')}}/{{$trip->trip_id}}" class="imghvr-hinge-right figure">
                        <img src="{{asset('/user_file_image/trips_image')}}/{{$trip->image1}}" alt="{{$trip->title}}"/>
                        <div class="agile-figcaption">
                            <h2>{{$trip->title}}</h2>
                        </div>
                    </a>
                </div>
              @endforeach
            @endif
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <!-- //gallery -->


    <div class="container">
        <div class="abouthead" style="border:none; width:60%;">
            <h2 class="heading" style="color:#00d2be;text-transform: uppercase;">Goals</h2>

            <p style="font-size:18px">*To create an travelling community among the travelers.</p>
            <p style="font-size:18px">*To minimize travelling cost of the travelers.</p>
            <p style="font-size:18px">*Introducing tourism spot of our country as well as out of our country.</p>
            <p style="font-size:18px">*To develop the tourism sector of our country.</p>

        </div>
    </div>



    <!-- blog -->
    <div class="blog" id="blog">
        <div class="container">

            <h3 class="w3ls-title">Travelling Blog</h3>
            <div class="agile_inner_w3ls-grids">

              @if($data['blogs']!=NULL)
              @foreach($data['blogs'] as $blog)

                <div class="col-sm-6 w3-agile-post-grids">
                    <a href="#">
  <div class="w3-agile-post-img w3-agile-post-img1"
   style=" background: url({{asset('/user_file_image/blog_image')}}/{{$blog->blog_image_1}}) no-repeat 0px 0px;">
<img src="{{asset('/user_file_image/blog_image')}}/{{$blog->blog_image_1}}" alt="">

  </div>
                    <div class="w3-agile-post-info">
                        <h4><a href="#">{{$blog->blog_title}}</a></h4>
                        <p>{{$blog->short_description}}</p>
                        <ul>
                            <li>By     <a href="#">{{$blog->userName->username}}</a></li>
                            <li>{{ date('d.m.Y', strtotime($blog->created_at))}}</li>
                        </ul>
                    </div>
                </div>
              @endforeach
            @endif

            <div class="clearfix"> </div>
        </div>
    </div>
    </div>
    <!-- //blog -->

    <!--count-->
    <div class="count-agileits" id="stats">
        <div class="count-grids">
            <div class="count-bgcolor-w3ls">
                <div class="col-md-3 count-grid">
                    <div class="count hvr-bounce-to-bottom">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='148' data-delay='.5' data-increment="1">148</div>
                        <span></span>
                        <h5>Tours</h5>
                    </div>
                </div>
                <div class="col-md-3 count-grid">
                    <div class="count hvr-bounce-to-bottom">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='372' data-delay='.5' data-increment="1">372</div>
                        <span></span>
                        <h5>Plans</h5>
                    </div>
                </div>
                <div class="col-md-3 count-grid">
                    <div class="count hvr-bounce-to-bottom">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='389' data-delay='.5' data-increment="1">389</div>
                        <span></span>
                        <h5>Travel</h5>
                    </div>
                </div>
                <div class="col-md-3 count-grid">
                    <div class="count hvr-bounce-to-bottom">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='109' data-delay='.5' data-increment="1">109</div>
                        <span></span>
                        <h5>Gifts</h5>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--count-->

    <!-- social -->
    <div class="contact" id="contact">

        <h3 class="w3ls-title">Follow Us On</h3>
        <div id="social">
            <a class="facebookBtn smGlobalBtn" href="#"></a>
            <a class="twitterBtn smGlobalBtn" href="#"></a>
            <a class="googleplusBtn smGlobalBtn" href="#"></a>
            <a class="linkedinBtn smGlobalBtn" href="#"></a>
            <a class="pinterestBtn smGlobalBtn" href="#"></a>
            <a class="tumblrBtn smGlobalBtn" href="#"></a>
            <a class="rssBtn smGlobalBtn" href="#"></a>
        </div>

    </div>

    <!-- social -->


    <!-- copyright -->
    <div class="footer-w3layouts">
        <div class="container">
            <div class="agile-copy">
                <p>&copy;by ratul</p>
            </div>


            <div class="agileits-social">
                <ul>
                    <li><a href="" >Home</a></li>
                    <li><a href="" >About</a></li>
                    <li><a href="" >Team</a></li>
                    <li><a href="">Gallery</a></li>
                    <li><a href="">Testimonials</a></li>
                    <li><a href="">Blog</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>

    <!-- copyright -->


    <!-- Default-JavaScript-File -->
    <script type="text/javascript" src="{{asset('/web/js/jquery-2.1.4.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('/web/js/bootstrap.js')}}">
    </script>
    <!-- //Default-JavaScript-File -->

    <!-- gallery plugin -->
    <script type="text/javascript" src="{{asset('/web/js/simple-lightbox.min.js')}}">
    </script>
    <script>
        $(function() {
            var gallery = $('.w3gallery-grids a').simpleLightbox({
                navText: ['&lsaquo;', '&rsaquo;']
            });
        });
    </script>
    <!-- //gallery plugin -->

    <!-- ji slider -->
    <!-- banner js script -->
    <script src="{{asset('/web/js/JiSlider.js')}}">
    </script>
    <script>
        $(window).load(function() {
            $('#JiSlider').JiSlider({
                color: '#fff',
                start: 1,
                reverse: true
            }).addClass('ff')
        })
    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
                '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <!-- //ji slider -->
    <!-- //banner js script -->

    <!-- for-Testimonials -->
    <script defer src="{{asset('/web/js/jquery.flexslider.js')}}">
    </script>
    <!--Start-slider-script-->
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!--End-slider-script-->
    <!-- //for-Testimonials -->

    <script type="text/javascript" src="{{asset('/web/js/numscroller-1.0.js')}}">
    </script><!-- numscroller js file -->

    <!-- smooth scrolling -->
    <script src="{{asset('web/js/SmoothScroll.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('/web/js/move-top.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('/web/js/easing.js')}}">
    </script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            	var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear'
            	};
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //here ends scrolling icon -->
    <!-- smooth scrolling -->

    <!-- scrolling script -->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //scrolling script -->

    <script src="{{asset('/web/js/jquery.vide.min.js')}}">
    </script><!-- video js file -->


</body>
<!-- //Body -->

</html>
