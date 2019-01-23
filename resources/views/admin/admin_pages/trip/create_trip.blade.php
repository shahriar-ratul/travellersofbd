@extends('admin.layouts.app')
@section('content')
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
                    <label for="Destination" class="col-sm-3 control-label font-bold">Destination*</label>
                    <div class="col-sm-9">
                        <input type="text" name="destination" id="Destination" placeholder="Destination" class="form-control" autofocus>
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
                    <label for="lastName" class="col-sm-7 control-label">Number of Member needed*</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="5" class="form-control" name= "how_many_member">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Trip Title*</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="Dhaka to Chittagong" class="form-control" name= "trip_title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Trip Contact*</label>
                    <div class="col-sm-9">
                        <input type="text"  placeholder="Contact" class="form-control" name= "contact">
                    </div>
                </div>
                <div class="form-group">
                    <label for="budget" class="col-sm-3 control-label">Budget</label>
                    <div class="col-sm-9">
                      <select name="budget_id" class="form-control">
                               <option value="1">BDT 0 - BDT 2000</option>
                               <option value="2">BDT 2000 - BDT 3500</option>
                               <option value="3">BDT 3500 - BDT 5000</option>
                               <option value="4">BDT 5000 - BDT 7000</option>
                               <option value="5">BDT 7000 - BDT 8000</option>
                               <option value="6">BDT 8000 - BDT 9000</option>
                               <option value="7">BDT 9000 - BDT 10000</option>
                               <option value="8">BDT 10000 +</option>
                       </select>
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
                        <label for="Height" class="col-sm-3 control-label">Accomodation* </label>
                    <div class="col-sm-9">
                      <select name="accomodation" class="form-control" >
                              <option value="1">Hotel</option>
                              <!-- <option value="2">Couchsurfing</option> -->
                              <option value="3">Homestay</option>
                              <option value="4">Campside</option>
                              <option value="6">Hostel</option>
                             <option value="5">Other</option>
                           </select>

                    </div>
                </div>
                 <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Itinerary* </label>
                    <div class="col-sm-9">
                      <select name="intinerary_id" class="form-control" >
                          <option value="">Itinerary</option>
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
                      <textarea class="form-control" name="description" placeholder="Shortly describe your trip" rows="5"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-7 control-label">Places I want to see*</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="want_to_see" placeholder="Places I want to see" rows="5"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-7 control-label">Things I want to do</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="things_to_do" placeholder="Things I want to do" rows="5"></textarea>
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
      @endsection
