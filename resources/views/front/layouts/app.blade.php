<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>TravellerofBd</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
			CSS
			============================================= -->

    <link rel="stylesheet" href="{{ asset('/template/') }}/css/linearicons.css">
    <link rel="stylesheet" href="{{ asset('/template/') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/template/') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/template/') }}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{ asset('/template/') }}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('/template/') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('/template/') }}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('/template/') }}/css/main.css">

    <!-- new -->
      <link href="{{asset('js/gijgo.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- <script src="https://code.jquery.com/jquery-3.0.0.js"></script> -->
     <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
     <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
     <script src="{{asset('js/jquery-migrate-3.0.1.js')}}"></script>
    <script src="{{asset('js/gijgo.min.js')}}" type="text/javascript"></script>

    <!-- <script src="//code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script> -->
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
        <!-- include libraries(jQuery, bootstrap) -->

      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
      <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>  -->
      <script src="{!! asset('/js/bootstrap.js') !!}"></script>
      <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

        <!-- include summernote css/js -->
      <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script> -->

        <!-- include summernote css/js -->
      <link href="{{asset('/js/summernote.css')}}" rel="stylesheet">
      <script src="{{asset('/js/summernote.js')}}"></script>


      <!-- <script src="{{ asset('/tokenize2/') }}/tokenize2.min.js"></script>
      <link href="{{ asset('/tokenize2/') }}/tokenize2.min.css" rel="stylesheet" /> -->




    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script> -->
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->

  <link href="{{asset('/js/select2.min.css')}}" rel="stylesheet" />
 <script src="{{asset('/js/select2.min.js')}}"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

@yield('css')
    <style>
        body {
          background-color:white;
        }

        @media (max-width: 991px) {
            .img-responsive {
                margin: 0 auto;
            }
            .img-responsive ul{
              padding:0 100px 0 0;
              float:left;
            }

        }
        .footer-area {
        background-color: #262525;
        color: #fff !important;
      }
        .footer-area p{
        color: #fff !important;
        font-size: 15px;
        font-weight: 400;
      }
      /* .single-footer-widget h4 {
    color: #fff !important;
    margin-bottom: 25px;
    font-weight: 500;
} */
    </style>

    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <!-- Magnific Popup core CSS file -->

    <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->

    <!-- <script src="{{ asset('/template/') }}/js/vendor/jquery-2.2.4.min.js"></script> -->

</head>

<body>
    <header id="header">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('/template/') }}/img/logo.png" alt="" title="" /></a>
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                      @if((Auth::user()->level)==0)
                        <li><a href="{{url('/admin')}}">admin</a></li>
                      @endif
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li  class="menu-has-children">
                          <a href="">Trip</a>
                          <ul>
                              <li><a href="{{url('/trips/create')}}">Create trip</a></li>
                              <li><a href="{{url('/trips/all')}}">Show trip</a></li>
                          </ul>
                        </li>
                        <li><a href="{{url('users/community')}}">Community</a></li>
                          <li><a href="{{url('/blogs/all')}}">Blogs</a></li>
                        <!-- <li><a href="">Create Trip</a></li> -->
                        <!-- <li class="menu-has-children"><a href="">Blog</a>
                            <ul>
                                <li><a href="{{url('/blogs/all')}}">Blog list</a></li>
                                <li><a href="{{url('/blogs/create')}}">Create Blog </a></li>
                            </ul>
                        </li> -->

                        <li><a href="{{ url('/') }}">Support</a></li>
                    </ul>
                </nav>
                <!-- #nav-menu-container -->
                <div class="row img-responsive">
                  <ul class="nav-menu">
                    @guest
                      <li class="menu-has-children"><a href="">NAME</a>
                    @else

                    <li class="menu-has-children"><a href="">  {{ Auth::user()->username }}</a>
                        <ul>
                            <li><a href="{{url('/user/profile')}}/{{ Auth::user()->id }}">Profile</a></li>

                            <li><a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                        </ul>
                    </li>
                    @endguest
                  </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- #header -->
    @yield('body')


    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="single-footer-widget">
                        <h4>About Us</h4>
                        <p>
                            We have tested a number of registry fix and clean utilities and present our top 3 list on
                            our site for your convenience.
                        </p>
                        <p class="footer-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All
                            rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i>
                        </p>
                    </div>
                </div>
                <!-- <div class="col-lg-5 col-md-6 col-sm-6"> -->
                    <!-- <div class="single-footer-widget">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends</p>
                        <div class="" id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '"
                                        required="" type="email">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <span class="lnr lnr-arrow-right"></span>
                                        </button>
                                    </div>
                                    <div class="info"></div>
                                </div>
                            </form>
                        </div>
                    </div> -->
                <!-- </div> -->
                <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                    <div class="single-footer-widget">
                        <h4>Follow Us</h4>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- End footer Area -->
    <script>
        // $('#datepicker').datepicker();
        $(document).ready(function() {

          $(".js-example-placeholder-multiple").select2({
            placeholder: "Select Place For Destination",
            allowClear: true,
            });


          $('#datepicker').datepicker({
              format: 'dd/mm/yyyy',
              minDate: new Date(),


          });
          $('#datepicker1').datepicker({
              format: 'dd/mm/yyyy',
              minDate: new Date(),


          });
          $('#datepicker2').datepicker({
            format: 'dd/mm/yyyy',
            minDate: new Date(),

          });
          $('#datepicker3').datepicker({
            format: 'dd/mm/yyyy',
            minDate: new Date(),

          });
          $('#summernote').summernote({
            placeholder: 'Full Description',

            height: 400,
            // toolbar: [
            //   ['view', ['fullscreen'/*, 'codeview' */]],
            // ]
          });
          $('#summernote1').summernote({
            placeholder: 'Short Description',

            height: 100,
            toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'hr']],
                    ['view', ['fullscreen'/*, 'codeview' */]],   // remove codeview button
                    ['help', ['help']]
                  ]

          });

        });


    </script>


@yield('javascript')
    <!-- <script src="{{ asset('/js/typeahead.js') }}"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/corejs-typeahead/1.2.1/bloodhound.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.js"></script> -->


    <script src="{{ asset('/template/') }}/js/popper.min.js">

    </script>
    <script src="{{ asset('/template/') }}/js/vendor/bootstrap.min.js">

    </script>
    <script src="{{ asset('/template/') }}/js/easing.min.js">

    </script>
    <script src="{{ asset('/template/') }}/js/hoverIntent.js">

    </script>
    <script src="{{ asset('/template/') }}/js/superfish.min.js">

    </script>
    <script src="{{ asset('/template/') }}/js/jquery.ajaxchimp.min.js">

    </script>
    <script src="{{ asset('/template/') }}/js/jquery.magnific-popup.min.js">

    </script>
    <script src="{{ asset('/template/') }}/js/jquery.tabs.min.js">

    </script>
    <script src="{{ asset('/template/') }}/js/jquery.nice-select.min.js">

    </script>
    <script src="{{ asset('/template/') }}/js/isotope.pkgd.min.js">

    </script>
    <!-- <script src="{{ asset('/template/') }}/js/waypoints.min.js"></script> -->
    <script src="{{ asset('/template/') }}/js/jquery.counterup.min.js">

    </script>
    <script src="{{ asset('/template/') }}/js/simple-skillbar.js">

    </script>
    <script src="{{ asset('/template/') }}/js/owl.carousel.min.js">

    </script>
    <script src="{{ asset('/template/') }}/js/mail-script.js">

    </script>


      <script src="{{ asset('/template/') }}/js/main.js">



    </script>



</body>

</html>
