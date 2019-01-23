@extends('front.layouts.app')
@section('body')

<!-- Start portfolio-area Area -->
<section class="portfolio-area section-gap" id="portfolio">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Users Latest Trips</h1>

                </div>
            </div>
        </div>


        <!-- <div class="filters">
            <ul>
                <li class="active" data-filter="*">All</li>
                <li data-filter=".vector">Adventure</li>
                <li data-filter=".raster">Hill</li>
                <li data-filter=".ui">Hicking/Tracking</li>
                <li data-filter=".printing">Relax</li>
            </ul>
        </div> -->

        <div class="filters-content">
            <div class="row grid">
              @if($data['trips']!=NULL)
              @foreach($data['trips'] as $trip)

            <div class="single-portfolio col-sm-4 all vector">
                <div class="relative">
                    <div class="thumb">

                        <a href="{{url('/trips/details')}}/{{$trip->trip_id}}">
                      <img class="image img-fluid" src="{{asset('/user_file_image/trips_image')}}/{{$trip->image1}}" alt="">
                        </a>
                    </div>

                </div>
                <div class="p-inner">
                    <h4>{{$trip->destination}}</h4>
                    <div class="cat">{{$trip->userName->username}}</div>
                </div>
            </div>

              @endforeach
            @endif


            </div>
        </div>

    </div>
</section>
<!-- End portfolio-area Area -->

<!-- Start testimonial Area -->
<section class="testimonial-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">User’s Feedback About Our Site</h1>
                    <p>It is very easy to start smoking but it is an uphill task to quit it. Ask any chain smoker or even a person.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-testimonial">
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{asset('/template')}}/img/elements/user1.png" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
                        </p>
                        <h4>Harriet Maxwell</h4>
                        <p>CEO at Google</p>
                    </div>
                </div>
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{asset('/template')}}/img/elements/user2.png" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
                        </p>
                        <h4>Carolyn Craig</h4>
                        <p>CEO at Facebook</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End testimonial Area -->

<!-- Start price Area -->
<section class="price-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Choose Your Travel Plan</h1>
                    <p>When someone does something that they know that they shouldn’t do, did they.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 single-price">
                <div class="top-part">
                    <h1 class="package-no">01</h1>
                    <h4>Low Budget</h4>
                    <p class="mt-10">Short Trip</p>
                </div>
                <div class="package-list">
                    <ul>
                        <li>Group tour</li>
                        <li>Enjoy the tour</li>
                        <li>More fun with friend</li>
                    </ul>
                </div>
                <div class="bottom-part">
                    <h1>3000 TK</h1>
                    <a class="price-btn text-uppercase" href="#">Join Now</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 single-price">
                <div class="top-part">
                    <h1 class="package-no">02</h1>
                    <h4>Medium Budget</h4>
                    <p class="mt-10">Short trip</p>
                </div>
                <div class="package-list">
                    <ul>
                        <li>Group tourr</li>
                        <li>Enjoy the tour</li>
                        <li>More fun with friend</li>
                    </ul>
                </div>
                <div class="bottom-part">
                    <h1>5000 TK</h1>
                    <a class="price-btn text-uppercase" href="#">Join Now</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 single-price">
                <div class="top-part">
                    <h1 class="package-no">03</h1>
                    <h4>High Budget</h4>
                    <p class="mt-10">short trip</p>
                </div>
                <div class="package-list">
                    <ul>
                        <li>Group tour</li>
                        <li>Enjoy the tour</li>
                        <li>More fun with friend</li>
                    </ul>
                </div>
                <div class="bottom-part">
                    <h1>7000 TK</h1>
                    <a class="price-btn text-uppercase" href="#">Join Now</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 single-price">
                <div class="top-part">
                    <h1 class="package-no">04</h1>
                    <h4>Exclusive</h4>
                    <p class="mt-10">Relax</p>
                </div>
                <div class="package-list">
                    <ul>
                        <li>Group tour</li>
                        <li>Enjoy the tour</li>
                        <li>More fun with friend</li>
                    </ul>
                </div>
                <div class="bottom-part">
                    <h1>10000 TK</h1>
                    <a class="price-btn text-uppercase" href="#">Join Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End price Area -->

<!-- Start recent-blog Area -->
<section class="recent-blog-area section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-30 header-text">
                <h1>Latest posts from blog</h1>
                <!-- <p>
                    You may be a skillful, effective employer but if you don’t trust your personnel and the opposite, then the chances of improving and expanding the business
                </p> -->
            </div>
        </div>
        <div class="row">
          @if($data['blogs']!=NULL)
          @foreach($data['blogs'] as $blog)
            <div class="single-recent-blog col-lg-4 col-md-4">
              <a href="{{url('/blogs/details/')}}/{{$blog->blog_id}}">
                <div class="thumb">
                    <img class="f-img img-fluid mx-auto" src="{{asset('/user_file_image/blog_image')}}/{{$blog->blog_image_1}}" alt="">
                </div>
                <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <!-- <img class="img-fluid" src="{{asset('/user_file_image/blog_image')}}/{{$blog->blog_image_1}}" alt=""> -->
                        <span>{{$blog->userName->username}}</span>
                    </div>
                    <div class="meta">
                        {{ date('d.m.Y', strtotime($blog->created_at))}}
                        <!-- <span class="lnr lnr-heart"></span> 15
                        <span class="lnr lnr-bubble"></span> 04 -->
                    </div>
                </div>

                    <h4>{{$blog->blog_title}}</h4>

                <p>
                {{$blog->short_description}}
                </p>
            </div>
            </a>
          @endforeach
        @endif

        </div>
    </div>
</section>
<!-- end recent-blog Area -->

<!-- Start brands Area -->
<section class="brands-area">
    <div class="container">
        <div class="brand-wrap">
            <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="{{asset('/template/img/l1.png')}}" alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="{{asset('/template/img/l2.png')}}" alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="{{asset('/template/img/l3.png')}}" alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="{{asset('/template/img/l4.png')}}" alt=""></a>
                </div>
                <div class="col single-brand">
                    <a href="#"><img class="mx-auto" src="{{asset('/template/img/l5.png')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End brands Area -->


@endsection
