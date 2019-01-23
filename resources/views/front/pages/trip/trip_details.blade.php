@extends('front.layouts.app')
@section('css')
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

<link rel="stylesheet" href="{{asset('/trip_details_page_file')}}/css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="{{asset('/trip_details_page_file')}}/css/animate.css">
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
<link rel="stylesheet" href="{{asset('/trip_details_page_file')}}/css/owl.carousel.min.css">
<link rel="stylesheet" href="{{asset('/trip_details_page_file')}}/css/owl.theme.default.min.css">
<link rel="stylesheet" href="{{asset('/trip_details_page_file')}}/css/magnific-popup.css">

<link rel="stylesheet" href="{{asset('/trip_details_page_file')}}/css/aos.css">

<link rel="stylesheet" href="{{asset('/trip_details_page_file')}}/css/ionicons.min.css">



<link rel="stylesheet" href="{{asset('/trip_details_page_file')}}/css/flaticon.css">
<link rel="stylesheet" href="{{asset('/trip_details_page_file')}}/css/icomoon.css">
<link rel="stylesheet" href="{{asset('/trip_details_page_file')}}/css/style.css">
<style media="screen">
.item_content_top {
width: 90%;
padding-left: 29px;
margin-top: -4px;
float: left;
}

.item_content {
width: 70%;
padding-left: 29px;
margin-top: -4px;
float: left;
}
.item_date {
font-size: 28px;
font-weight: 700;
color:#000000;
}

.item_content_right {
float: right;
position: relative;
}

.item.box .item_content {
width: 50%;
}

.item_content ul {
margin-top: 13px;
}

.item_content ul li {
display: inline-block;
font-size: 12px;
color: #878c9b;
}

.item_content ul li:not(:last-of-type)::after {
content: '/';
margin-left: 5px;
}

.item_price {
font-size: 14px;
font-weight: 500;
color: #131a2f;
}

.item_title {
font-size: 20px;
font-weight: 500;
color: #131a2f;
margin-top: 1px;
}
.half{
width:50%
}
p{
font-size: 18px;
font-weight: 700;
color: #191a1a;
}

.span{
color: #09712d;

}
.span1{
color: red;

}
h3{
font-size: 20px;
font-weight: 700;
}
h1{
font-size: 45px;
font-weight: 900;
}
h2{
font-size: 35px;
font-weight: 900;
}
.row1{
float:right;
padding-top: 50px;
}

.purple-border textarea {
    border: 1px solid #ba68c8;
}

.media .avatar {
    width: 64px;
}

.shadow-textarea textarea.form-control::placeholder {
    font-weight: 300;
}

.shadow-textarea textarea.form-control {
    padding-left: 0.8rem;
}
.comments-area .date {
font-size: 13px;
color: #ff1111;
}
.comments-area .comment-list.left-padding {
padding-left: 76px;
}
</style>

@endsection

@section('body')



<section class="ftco-section ftco-degree-bg">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="row1">
<a href="javascript:history.back()" class="primary-btn text-uppercase">Back</a>
</div>
<div class="row">


@if((($data['trips']->image1) != NUll) || (($data['trips']->image2) != NUll)||(($data['trips']->image3) != NUll))
<div class="col-md-2"></div>
<div class="col-md-8 ftco-animate">
    <div class="single-slider owl-carousel">
        <div class="item">
            <div class="hotel-img" style="background-image: url({{asset('/user_file_image/trips_image')}}/{{$data['trips']->image1}});"></div>
        </div>
        <div class="item">
            <div class="hotel-img" style="background-image: url({{asset('/user_file_image/trips_image')}}/{{$data['trips']->image2}});"></div>
        </div>
        <div class="item">
            <div class="hotel-img" style="background-image: url({{asset('/user_file_image/trips_image')}}/{{$data['trips']->image3}});"></div>
        </div>
    </div>
</div>
@else
<div class="col-md-2"></div>
<div class="col-md-10"></div>
@endif
<div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
    <div class="container">

        <!-- <a href="#" class="genric-btn primary e-large" style="float:right">Extra Large</a>
<a href="#" class="genric-btn primary e-large" style="float:right">Primary</a> -->
        <h1>{{$data['trips']->trip_title}}</h1>
        <div class="item_date">
            <div class="item_heading">
                <h2>Trip To :<span class="span"> {{$data['trips']->destination}}</span> </h2>
            </div>
            <span class="">{{ date('d.m.Y', strtotime($data['trips']->from_date))}} </span>
            <span class="">-</span>
            <span class="">{{ date('d.m.Y', strtotime($data['trips']->to_date))}} </span>
            <span class="span">({{$data['trips']->how_many_days}})</span>
        </div>

        <h3>By <span class="span">{{$data['trips']->userName->username}}</span></h3>

        <div class="container">
            <p>{{$data['trips']->short_description}}</p>
        </div>


        <div class="container">
            <br>
            <div class="item_content half">
                <br>
                <div class="item_title">
                    <p><i class="far fa-user"></i> &nbsp;&nbsp;Looking for:
                        <span class="span">
                            @if($data['trips']->find_gender==1) Male
                                @elseif($data['trips']->find_gender==2) Female
                                    @elseif($data['trips']->find_gender==3) Male group
                                        @elseif($data['trips']->find_gender==4) Female group
                                            @elseif($data['trips']->find_gender==0) Any
                                                @endif
                        </span>
                    </p>
                </div>
                <br>
                <div class="item_title">
                    <p><i class="fas fa-bed"></i>&nbsp;&nbsp;Room share: <span class="span">
                            @if($data['trips']->room_sharing==0) No
                                @else Yes
                                @endif

                        </span>
                    </p>
                </div>

                <br>
                <div class="item_title">
                    <p><i class="fas fa-bed"></i>&nbsp;&nbsp;First Time visit: <span class="span">
                            @if($data['trips']->first_time_visit==0) No
                                @else Yes
                                @endif

                        </span>
                    </p>
                </div>
                <br>
                <div class="item_title">
                    <p><i class="fas fa-bed"></i>&nbsp;&nbsp;Itinerary: <span class="span">
                            @if($data['trips']->Itinerary==1) Fixed
                                @elseif($data['trips']->Itinerary==2) Flexible
                                    @else
                                    None
                                    @endif

                        </span>
                    </p>
                </div>
                <br>
                <div class="item_title">
                    <p>
                        <i class="far fa-user"></i>
                        Work &amp; Travel:
                        <span class="span">
                            @if($data['trips']->work_and_travel==0) No
                                @else Yes
                                @endif

                        </span>
                    </p>
                </div>
                <br>
                <div class="item_title">
                    <p><i class="fas fa-bed"></i>
                        place want to see :
                        <span class="span">
                            {{$data['trips']->place_want_to_see}}
                        </span>
                    </p>
                </div>
            </div>
            <div class="item_content half">
                <br>
                <div class="item_title">
                    <p><i class="far fa-credit-card"></i> Budget: <span class="span">
                      @if($data['trips']->budget==1) BDT 0 - BDT 2000
                      @elseif($data['trips']->budget==2) BDT 2000 - BDT 3500
                      @elseif($data['trips']->budget==3) BDT 3500 - BDT 5000
                      @elseif($data['trips']->budget==4) BDT 5000 - BDT 7000
                      @elseif($data['trips']->budget==5) BDT 7000 - BDT 8000
                      @elseif($data['trips']->budget==6) BDT 8000 - BDT 9000
                      @elseif($data['trips']->budget==7) BDT 9000 - BDT 10000
                      @elseif($data['trips']->budget==8) BDT 10000+
                      @endif
                        </span></p>
                </div>
                <br>
                <div class="item_title">
                    <p><i class="fas fa-exclamation-circle"></i>Type of Journey : <span class="span"> {{$data['trips']->type_of_journey}} </span></p>
                </div>
                <br>
                <div class="item_title">
                    <p><i class="fas fa-exclamation-circle"></i>accomodation :
                        <span class="span">
                            @if($data['trips']->accomodation==1) Hotel
                            @elseif($data['trips']->accomodation==2)Homestay
                            @elseif($data['trips']->accomodation==3)Campside
                            @elseif($data['trips']->accomodation==4)Hostel
                            @elseif($data['trips']->accomodation==5)Other
                            @endif

                        </span></p>
                </div>
                <br>

                <div class="item_title">
                    <p><i class="fas fa-exclamation-circle"></i>Things Want to do : <span class="span"> {{$data['trips']->things_want_to_do}} </span></p>
                </div>
                <br>

                <div class="item_title">
                    <p><i class="fas fa-exclamation-circle"></i>Member Needed: <span class="span"> {{$data['trips']->member_list}} </span></p>
                </div>
                <br>

                <div class="item_title">
                    <p><i class="fas fa-exclamation-circle"></i>Meeting Before Trip : <span class="span"> {{$data['trips']->meeting_before_trip}} </span></p>
                </div>
                <br>

            </div>
            <div class="container" style="align:center">
                <h3>Contact No : <span class="span1">{{$data['trips']->contact_no}}</span></h3>
            </div>
        </div>
    </div>

</div>
<div class="comments-area">
  <h3 class="span1">Total Comment ( {{count($data['posts'])}})</h3>
  <h5>Write your comment</h5>
  <form  action="{{ url('/trips/store-comment') }}" method="post" enctype="multipart/form-data" >
              {{ csrf_field() }}
      <input  type="hidden" name="user_id" value="{{Auth::user()->id}}">
      <input  type="hidden" name="trip_id" value="{{$data['trips']->trip_id}}">
      <div class="form-group  purple-border">
          <br>
          <textarea class="form-control mb-10" rows="5" name="post" placeholder="Write your comment..."></textarea>
      </div>
        <div class="col-md-12 text-center">
      <input type="submit" value="Comment" class="btn btn-primary" >
      </div>
  </form>
    @foreach($data['posts'] as $post)
    <div class="comment-list">
        <div class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
                <div class="media mt-3 shadow-textarea">
                    <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="{{asset('/user_file_image/original/')}}/{{$post->userName->image}}" alt="">
                </div>
                <div class="desc">

                    <h5>{{$post->userName->username}}</h5>
                    <p class="date">{{ date('F d, Y H:i A', strtotime($post->created_at)) }} </p>
                    <p class="comment">
                          {{$post->post}}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="comment-list left-padding">
      @foreach($data['comments'] as $comments)
        @if(($post->trip_comment_id)==($comments->trip_comment_id))
        <div class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
                <div class="media mt-3 shadow-textarea">
                    <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="{{asset('/user_file_image/original/')}}/{{$comments->userName->image}}" alt="">
                </div>
                <div class="desc">
                    <h5><a href="#">{{$comments->userName->username}}</a></h5>
                    <p class="date">{{ date('F d, Y H:i A', strtotime($comments->created_at)) }}</p>
                    <p class="comment">
                        {{$comments->post}}
                    </p>
                </div>
            </div>
        </div>
      @else
      @endif
      @endforeach
        <div class="media mt-3 shadow-textarea">
            <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="{{asset('/user_file_image/original/')}}/{{Auth::user()->image}}" alt="">
            <div class="media-body">
                <form  action="{{ url('/trips/store-reply') }}" method="post" enctype="multipart/form-data" >
                            {{ csrf_field() }}
                    <input  type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input  type="hidden" name="trip_comment_id" value="{{$post->trip_comment_id}}">
                    <input  type="hidden" name="trip_id" value="{{$data['trips']->trip_id}}">
                    <h5 class="mt-0 font-weight-bold blue-text">{{Auth::user()->username}}</h5>
                    <br>
                    <div class="form-group basic-textarea rounded-corners">
                        <textarea class="form-control z-depth-1" name="post_name" rows="3" placeholder="Write your Reply..."></textarea>
                    </div>
                    <input type="submit" value="reply" class="btn btn-primary" >
                </form>
            </div>
        </div>
    </div>
  @endforeach

</div>




<div class="col-md-12 hotel-single ftco-animate mb-5 mt-5">
    <h4 class="mb-4">Related Trips</h4>
    <div class="row">
        @foreach($data['trips_1'] as $trip)
        <div class="col-md-4">
            <div class="destination">
                <a href="{{url('/trips/details')}}/{{$trip->trip_id}}"> <img src="{{asset('/user_file_image/trips_image')}}/{{$trip->image1}}" alt="" class="img img-2" style="width: 85%;"></a>
                <div class="text p-3">
                    <div class="d-flex">
                        <div class="one">
                            <h3><a href="{{url('/trips/details')}}/{{$trip->trip_id}}"> {{$trip->trip_title}}</a></h3>
                            <h5> By {{$trip->userName->username}}</h5>


                            <h3>
                                @if($trip->budget==1) BDT 0 - BDT 2000
                                @elseif($trip->budget==2) BDT 2000 - BDT 3500
                                @elseif($trip->budget==3) BDT 3500 - BDT 5000
                                @elseif($trip->budget==4) BDT 5000 - BDT 7000
                                @elseif($trip->budget==5) BDT 7000 - BDT 8000
                                @elseif($trip->budget==6) BDT 8000 - BDT 9000
                                @elseif($trip->budget==7) BDT 9000 - BDT 10000
                                @elseif($trip->budget==8) BDT 10000+
                                @endif
                            </h3>
                        </div>
                    </div>
                    <p class="bottom-area d-flex">
                        <span>{{ date('d.m.Y', strtotime($trip->from_date))}} --</span>
                        <span>{{ date('d.m.Y', strtotime($trip->to_date))}}({{$trip->how_many_days}}) </span>
                    </p>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

</div>
</div> <!-- .col-md-8 -->
</div>
</div>
</section> <!-- .section -->
@endsection





@section('javascript')
<script src="{{asset('/trip_details_page_file')}}/js/jquery.min.js"></script>
<script src="{{asset('/trip_details_page_file')}}/js/jquery-migrate-3.0.1.min.js"></script>
<script src="{{asset('/trip_details_page_file')}}/js/popper.min.js"></script>
<script src="{{asset('/trip_details_page_file')}}/js/bootstrap.min.js"></script>
<script src="{{asset('/trip_details_page_file')}}/js/jquery.easing.1.3.js"></script>
<script src="{{asset('/trip_details_page_file')}}/js/jquery.waypoints.min.js"></script>
<script src="{{asset('/trip_details_page_file')}}/js/jquery.stellar.min.js"></script>
<script src="{{asset('/trip_details_page_file')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('/trip_details_page_file')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('/trip_details_page_file')}}/js/aos.js"></script>
<script src="{{asset('/trip_details_page_file')}}/js/jquery.animateNumber.min.js"></script>
<script src="{{asset('/trip_details_page_file')}}/js/bootstrap-datepicker.js"></script>
<script src="{{asset('/trip_details_page_file')}}/js/jquery.timepicker.min.js"></script>
<script src="{{asset('/trip_details_page_file')}}/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('/trip_details_page_file')}}/js/google-map.js"></script>
<script src="{{asset('/trip_details_page_file')}}/js/main.js"></script>



@endsection
