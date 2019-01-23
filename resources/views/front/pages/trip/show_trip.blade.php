@extends('front.layouts.app')
@section('css')
  <link rel="stylesheet" type="text/css" href="{{asset('/trip_page_file')}}/styles/bootstrap4/bootstrap.min.css">
  <!-- <link href="{{asset('/trip_page_file')}}/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->

  <link rel="stylesheet" type="text/css" href="{{asset('/trip_page_file')}}/styles/offers_styles.css">
  <link rel="stylesheet" type="text/css" href="{{asset('/trip_page_file')}}/styles/offers_responsive.css">



  <style>
  @media only screen and (max-width: 991px){
.item_content {
    width: 80%;
}
}
.item_content {
    width: 85%;
  }
  .item_image {
    width: 10%;
    float: left;
    }
    .item_heading{
        font-size: 25px;
        font-weight: 600;
        color: #28a745;
        font-stretch: expanded;
        float: left;
    }


    .half{
      width:40%
    }
    .genric-btn{

        padding: 0px 10px;
    }
    .genric-btn.primary {
        color: #fff;
        background: #09712d;
        font-size:25px;
        border: 1px solid transparent;
    }
    .genric-btn.radius {
        border-radius: 3px;
    }
    p{
      font-size: 18px;
      font-weight: 700;
      color: #191a1a;
    }

    .span{
      color: #09712d;
    }
    h3{
      font-size: 20px;
      font-weight: 700;
    }
    .genric-btn {
    padding: 5px 30px;
    }
    .gj-datepicker-md [role=right-icon] {
    position: absolute;
    right: 10px;
    top: 11px;
    font-size: 24px;
}

.find_item:nth-child(2) {
    width: 25.122%;
}
.find_item:nth-child(3) {
    width: 13.122%;
}
.find_item:nth-child(4) {
    width: 13.122%;
}
.find_item:nth-child(5) {
    width: 20.122%;
}
.dropdown_item_select{
color: #00f337 !important;
background: #02030c;
}

.select2-container .select2-search--inline .select2-search__field {
height: 56px;
}
</style>

@endsection

@section('body')


  	<!-- Home -->

  	   <div class="home">
  		  <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('/trip_page_file')}}/images/offers.jpg" data-speed="0.8"></div>
  		 <div class="container">
  			<div class="row">
  				<div class="col">
  					<div class="home_content">
  						<div class="home_content_inner">
  							<div class="home_title"></div>
  							<div class="home_breadcrumbs">

  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>

  	<!-- Find Form -->

  	<div class="find">
  		<!-- Image by https://unsplash.com/@garciasaldana_ -->
  		<div class="find_background_container prlx_parent">
  			<div class="find_background prlx" style="background-image:url({{asset('/trip_page_file')}}/images/find.jpg)"></div>
  		</div>
  		<div class="find_background parallax-window" data-parallax="scroll" data-image-src="{{asset('/trip_page_file')}}/images/find.jpg" data-speed="0.8"></div>
  		<div class="container">
  			<div class="row">
  				<div class="col-12">
  					<div class="find_title text-center">Find the Adventure of a lifetime</div>
  				</div>
  				<div class="col-12">
  					<div class="find_form_container">
  						<form action="{{ url('/trips/') }}/search-trips" id="find_form" class="find_form d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-between justify-content-start flex-wrap" method="post" enctype="multipart/form-data" >
                          {{ csrf_field() }}
  							<div class="find_item">
  								<div>Destination:</div>
                   <select name="destination[]"  class="js-example-placeholder-multiple dropdown_item_select find_input" multiple="multiple">
                  @foreach($data['districts'] as $district)
                        <option value="{{$district->destination}}">{{$district->destination}}</option>
                  @endforeach
                   </select>
  							</div>
  							<div class="find_item">
  								<div>From Date:</div>
  								<input type="text" name="from_date" class="destination find_input"  id="datepicker1"  autocomplete="off">
  							</div>
  							<div class="find_item">
  								<div>To Date</div>
  								<input type="text" name="to_date" class="destination find_input" id="datepicker"  autocomplete="off">
  							</div>
  							<div class="find_item">
  								<div>Max price</div>
  								<select name="budget_id"  class="dropdown_item_select find_input">
                    <!-- <select name="budget_id" class="form-control"> -->
                             <option value="1">BDT 0 - BDT 2000</option>
                             <option value="2">BDT 2000 - BDT 4000</option>
                             <option value="3">BDT 4000 - BDT 6000</option>
                             <option value="4">BDT 6000 - BDT 8000</option>
                             <option value="5">BDT 8000 - BDT 10000</option>
                             <option value="6">BDT 10000 - BDT 15000</option>
                             <option value="7">BDT 15000 - BDT 20000</option>
                             <option value="8">BDT 20000 +</option>
                     </select>
  							</div>
  							<button class="button find_button">Find</button>
  						</form>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>

    <div class="offers">
    		<div class="container">
    			<div class="row">
    				<div class="col">
    					<div class="section_title text-center">
    						<h2>Top destinations</h2>
    						<div>take a look at these offers</div>
    					</div>
    				</div>
    			</div>
    			<!-- <div class="row filtering_row">
    				<div class="col">
    					<div class="sorting_group_1">
    						<ul class="item_sorting">
    							<li>
    								<span class="sorting_text">Filter by</span>
    								<i class="fa fa-angle-down"></i>
    								<ul>
    									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Show All</span></li>
    									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
    									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Name</span></li>
    								</ul>
    							</li>
    							<li>
    								<span class="sorting_text">Stars</span>
    								<i class="fa fa-angle-down"></i>
    								<ul>
    									<li class="item_filter_btn" data-filter="*"><span>Show All</span></li>
    									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Ascending</span></li>
    									<li class="item_filter_btn" data-filter=".rating_1"><span>1</span></li>
    									<li class="item_filter_btn" data-filter=".rating_2"><span>2</span></li>
    									<li class="item_filter_btn" data-filter=".rating_3"><span>3</span></li>
    									<li class="item_filter_btn" data-filter=".rating_4"><span>4</span></li>
    									<li class="item_filter_btn" data-filter=".rating_5"><span>5</span></li>
    								</ul>
    							</li>
    							<li>
    								<span class="sorting_text">Price</span>
    								<i class="fa fa-angle-down"></i>
    								<ul>
    									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
    									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
    								</ul>
    							</li>
    							<li>
    								<span class="sorting_text">Facility</span>
    								<i class="fa fa-angle-down"></i>
    								<ul>
    									<li><span>Facility</span></li>
    									<li><span>Facility</span></li>
    									<li><span>Facility</span></li>
    								</ul>
    							</li>
    						</ul>
    					</div>
    					<div class="sorting_group_2 clearfix">
    					 <ul>
    							<li>Airplane X</li>
    							<li>5 stars X</li>
    							<li>Romantic X</li>
    						</ul>
    					 <div class="sorting_icons clearfix">
    							<div class="detail_view"><i class="fa fa-bars" aria-hidden="true"></i></div>
    							<div class="box_view"><i class="fa fa-th-large" aria-hidden="true"></i></div>
    						</div>
    					</div>
    				</div>
    			</div> -->
        </div>
        </div>
          @if($data['trips']!=NULL)
          @foreach($data['trips'] as $trip)
            <h1></h1>
        <div class="container">
    			<div class="row">
    				<div class="col">
    					<div class="items item_grid clearfix">

    						<!-- Item -->
    						<div class="item clearfix rating_5">
    							<div class="item_image"><img src="{{asset('/user_file_image/trips_image')}}/{{$trip->image4}}" alt=""></div>
                  <div class="item_content" >
                  <div class="item_heading">{{$trip->trip_title}}</div>
                    <a href="{{url('/trips/details')}}/{{$trip->trip_id}}" class="genric-btn primary radius" style="float:right">Details</a>
                  </div>
                  <div class="item_content" >
                  <div class="item_heading"></div>
                  <span class="item_title">{{ date('d.m.Y', strtotime($trip->from_date))}} </span>
                  <span class="item_title">-</span>
                  <span class="item_title">{{ date('d.m.Y', strtotime($trip->to_date))}}</span>
                  <h3 class="span">({{$trip->how_many_days}}) </h3>
                  </div>
                  <div class="item_content" >
                  <div class="item_heading"></div>
                    <h5> By <a href="#"  class="genric-btn default-border" style="font-size:16px">{{$trip->userName->username}}</a></h5>
                    <h3>Trip To :<span> {{$trip->destination}}</span> </h3>
                    <br>
                  </div>

    							<div class="item_content half">
                  <div class="item_title">
                    <p><i class="far fa-user">

                    </i> &nbsp;&nbsp;Looking for:
                     <span>
                      @if($trip->find_gender==1) Male
                      @elseif($trip->find_gender==2) Female
                      @elseif($trip->find_gender==3) Male group
                      @elseif($trip->find_gender==4) Female group
                      @elseif($trip->find_gender==0) Any
                      @endif
                      </span>
                      </p>
                      </div>
                    <br>
    								<div class="item_title">
                       <p><i class="fas fa-bed"></i>&nbsp;&nbsp;Room share: <span>@if($trip->room_sharing==0) No
                         @else Yes
                        @endif

                        </span>
                      </p>
                      </div>
    							</div>
                  <div class="item_content half">
                    <div class="item_title"> <p> <i class="far fa-credit-card"></i>&nbsp;&nbsp;Budget:
                      <span>
                      @if($trip->budget==1) BDT 0 - BDT 2000
                                    @elseif($trip->budget==2) BDT 2000 - BDT 3500
                                    @elseif($trip->budget==3) BDT 3500 - BDT 5000
                                    @elseif($trip->budget==4) BDT 5000 - BDT 7000
                                    @elseif($trip->budget==5) BDT 7000 - BDT 8000
                                    @elseif($trip->budget==6) BDT 8000 - BDT 9000
                                    @elseif($trip->budget==7) BDT 9000 - BDT 10000
                                    @elseif($trip->budget==8) BDT 10000+
                            @endif
                              </span>  </p>  </div>
                    <br>
    								<div class="item_title"><p><i class="fas fa-exclamation-circle"></i>&nbsp;&nbsp;Place want to see: <span>{{$trip->place_want_to_see}}
                    </span></p></div>
    						</div>
    						</div>
    					</div>
    				</div>
    			</div>
        </div>
        @endforeach
      @else

         @include('message.error')

      @endif

      {{ $data['trips']->onEachSide(2)->links() }}

@endsection






@section('javascript')
    <!-- <script src="{{asset('/trip_page_file')}}/js/jquery-3.2.1.min.js"></script> -->
    <script src="{{asset('/trip_page_file')}}/styles/bootstrap4/popper.js"></script>
    <!-- <script src="{{asset('/trip_page_file')}}/styles/bootstrap4/bootstrap.min.js"></script> -->
    <script src="{{asset('/trip_page_file')}}/plugins/greensock/TweenMax.min.js"></script>
    <script src="{{asset('/trip_page_file')}}/plugins/greensock/TimelineMax.min.js"></script>
    <script src="{{asset('/trip_page_file')}}/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="{{asset('/trip_page_file')}}/plugins/greensock/animation.gsap.min.js"></script>
    <script src="{{asset('/trip_page_file')}}/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="{{asset('/trip_page_file')}}/plugins/Isotope/isotope.pkgd.min.js"></script>
    <script src="{{asset('/trip_page_file')}}/plugins/easing/easing.js"></script>
    <script src="{{asset('/trip_page_file')}}/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="{{asset('/trip_page_file')}}/js/offers_custom.js"></script>



@endsection
