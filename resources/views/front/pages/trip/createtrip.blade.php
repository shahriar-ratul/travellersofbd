@extends('front.layouts.app')
@section('css')
  <!-- Font Icon -->
  <!-- <link rel="stylesheet" href="{{asset('/register_file')}}/fonts/material-icon/css/material-design-iconic-font.min.css"> -->

  <!-- Main css -->
  <!-- <link rel="stylesheet" href="{{asset('/register_file')}}/css/style.css"> -->
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- <link rel="stylesheet" type="text/css" href="{{asset('/trip_page_file')}}/styles/bootstrap4/bootstrap.min.css"> -->
  <!-- <link href="{{asset('/trip_page_file')}}/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->

 <link rel="stylesheet" type="text/css" href="{{asset('/trip_page_file')}}/styles/offers_styles.css">
  <link rel="stylesheet" type="text/css" href="{{asset('/trip_page_file')}}/styles/offers_responsive.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

<style media="screen">
.home{
  width: 70%;
}

@media only screen and (max-width: 575px){
.home {
    /* height: 372px; */
    width: 100%;
}
}
@media only screen and (max-width: 640px){
.home {
    /* height: 372px; */
    width: 100%;
}
}
.gj-datepicker-md [role=right-icon] {
    position: absolute;
    right: 10px;
    top: 10px;
    font-size: 24px;
}
.form-control {
      line-height: 2;
      font-weight: 600;

}
label{
  font-weight: 700;
  font-size: 18px;
}


</style>

@endsection
@section('body')





    	 <div class="home" style="margin: 0 auto;padding-top:135px;padding-bottom:200px; position: relative;">
         <!-- View code -->
         @include('message.error')
         @include('message.success')
         <!-- @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>**{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif -->

      <div class="container" >
          <h2 style="text-align:left;padding-left: 100px;
          padding-bottom:20px;">Create Trip</h2>
          <div class="form-group">
              <div class="col-sm-9 col-sm-offset-3">
                  <span class="help-block" style="color:red">*Required fields</span>
              </div>
          </div>
            <form class="form-horizontal" role="form"  action="{{ url('/trips/') }}/store-trips" method="post" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                <input  type="hidden" name="user_id" value="{{Auth::user()->id}}">
              <div class="container" >

                <div class="form-group">
                    <label class="col-sm-3 control-label">Trip Title*</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="Dhaka to Chittagong" class="form-control" name= "trip_title" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Destination" class="col-sm-3 control-label font-bold">Destination*</label>
                    <div class="col-sm-9">

                           <select name="destination[]" placeholder="Dhaka" class="js-example-placeholder-multiple js-states form-control" multiple="multiple">
                        @foreach($data['destinations'] as $destination)
                              <option value="{{$destination->destination}}">{{$destination->destination}}</option>
                        @endforeach
                      </select>
                    </div>
                </div>



                <div class="form-group">
                    <label for="From_date" class="col-sm-5 control-label">From Date*</label>
                    <div class="col-sm-9">
                        <input name="from_date"  id="datepicker" type="text" class="form-control"  autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label for="To Date" class="col-sm-3 control-label"> To Date*</label>
                    <div class="col-sm-9">
                        <input name="to_date"  id="datepicker1" type="text" class="form-control" autocomplete="off">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-3 control-label">Trip Contact*</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="Contact" class="form-control" name= "contact" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label for="budget" class="col-sm-3 control-label">Budget*</label>
                    <div class="col-sm-9">
                      <select name="budget_id" class="form-control">
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
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-5 control-label">Member needed*</label>
                    <div class="col-sm-9">

                        <select class="form-control" name="member_type" >
                              <option value="0">Any</option>
                              <option value="1">Male</option>
                              <option value="2">Female</option>
                              <option value="3">Male group</option>
                              <option value="4">Female group</option>
                              <!-- <option value="">Any</option> -->
                          </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-7 control-label">Number of Member needed</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="5" class="form-control" name= "how_many_member" autocomplete="off">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-5 control-label">Room Sharing</label>
                    <div class="col-sm-9">
                      <select name="room_share" class="form-control">

                                <option value="1">Yes</option>
                                <option value="0">No</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-5 control-label">Meet Before Trip</label>
                    <div class="col-sm-9">
                      <select name="meeting_before_trip" class="form-control">

                                <option value="1">Yes</option>
                                <option value="0">No</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                        <label for="Height" class="col-sm-3 control-label">Accomodation</label>
                    <div class="col-sm-9">
                      <select name="accomodation" class="form-control" >
                              <option value="1">Hotel</option>
                              <!-- <option value="2">Couchsurfing</option> -->
                              <option value="2">Homestay</option>
                              <option value="3">Campside</option>
                              <option value="4">Hostel</option>
                             <option value="5">Other</option>
                           </select>

                    </div>
                </div>
                 <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Itinerary*</label>
                    <div class="col-sm-9">
                      <select name="intinerary_id" class="form-control" >
                          <option value="1">Fixed</option>
                          <option value="2">Flexible</option>
                          <option value="3">None</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Trip Image</label>
                    <div class="col-sm-9">
                        <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                        <input type="file" name="image1"  accept="image/*">


                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Trip Image</label>
                    <div class="col-sm-9">

                        <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                        <input type="file" name="image2"  accept="image/*">



                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Trip Image</label>
                    <div class="col-sm-9">

                        <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                        <input type="file" name="image3"  accept="image/*">


                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-7">First Time Visit</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input name="first_time_visit" type="radio"  value="1">Yes
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input name="first_time_visit" type="radio" value="0">No
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-label col-sm-5">Work &amp; Travel</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input name="work_and_travel" type="radio"  value="1">Yes
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input name="work_and_travel" type="radio" value="0">No
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label class="col-sm-7 control-label">Shortly describe your trip*</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" name="short_description" placeholder="Shortly describe your trip" rows="5" autocomplete="off"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-7 control-label">Places I want to see*</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="place_want_to_see" placeholder="Places I want to see" rows="5" autocomplete="off"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-7 control-label">Things I want to do</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="things_to_do" placeholder="Things I want to do" rows="5" autocomplete="off"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                      <button type="submit" class="btn btn-primary btn-block">Create trip</button>
                    </div>
                </div>
          </div>
                <!-- <button type="submit" class="btn btn-primary btn-block">Create trip</button> -->
            </form> <!-- /form -->
        </div> <!-- ./container -->
	</div>

@endsection
