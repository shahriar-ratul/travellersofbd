@extends('admin.layouts.app')
@section('content')

<!-- Start Content-->
<div class="container-fluid">

<!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box">
<div class="page-title-right">
<ol class="breadcrumb m-0">
  <li class="breadcrumb-item"><a href="{{url('admin/trips/show')}}">Trip</a></li>
  <li class="breadcrumb-item active">Trip Details</li>
</ol>
</div>
<h4 class="page-title">Trip Details</h4>
</div>
</div>
</div>
<!-- end page title -->

<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<div class="row">
  <div class="col-lg-5">
      <!-- trip image -->
      <a href="javascript: void(0);" class="text-center d-block mb-4">
          <img src="{{asset('/user_file_image/trips_image')}}/{{$trip->image1}}" class="img-fluid" style="max-width: 280px;" alt="trip-img" />
      </a>

      <div class="d-lg-flex d-none justify-content-center">
          <a href="javascript: void(0);">
              <img src="{{asset('/user_file_image/trips_image')}}/{{$trip->image2}}" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="trip-img" />
          </a>
          <a href="javascript: void(0);" class="ml-2">
              <img src="{{asset('/user_file_image/trips_image')}}/{{$trip->image3}}" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="trip-img" />
          </a>
          <a href="javascript: void(0);" class="ml-2">
              <img src="{{asset('/user_file_image/trips_image')}}/{{$trip->image4}}" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="trip-img" />
          </a>
      </div>
  </div> <!-- end col -->
  <div class="col-lg-7">

          <!-- trip title -->
          <h3 class="mt-0" style="color:red">{{$trip->trip_title}} </h3>
          <p class="mb-1">From Date: <span style="color:red">{{ date('d.m.Y', strtotime($trip->from_date))}}</span> </p>
          <p class="mb-1">To Date: <span style="color:red">{{ date('d.m.Y', strtotime($trip->to_date))}}</span></p>

          <!-- trip description -->
          <div class="mt-4">
              <h6 class="font-18">Trip Budget:</h6>
              <h3>
                @if($trip->budget==1) BDT 0 - BDT 2000
                @elseif($trip->budget==2) BDT 2000 - BDT 4000
                @elseif($trip->budget==3) BDT 4000 - BDT 6000
                @elseif($trip->budget==4) BDT 6000 - BDT 8000
                @elseif($trip->budget==5) BDT 8000 - BDT 10000
                @elseif($trip->budget==6) BDT 10000 - BDT 15000
                @elseif($trip->budget==7) BDT 15000 - BDT 20000
                @elseif($trip->budget==8) BDT 20000+
                @endif

               </h3>
          </div>

          <!-- trip description -->
          <div class="mt-4">
              <h6 class="font-14">Description:</h6>
              <p>{{$trip->short_description}}</p>
          </div>

          <!-- trip information -->
          <div class="mt-4">
              <div class="row">
                  <div class="col-md-4">
                      <h6 class="font-14">Contact No:</h6>
                      <p class="text-sm lh-150">{{$trip->contact_no}}</p>
                  </div>
                  <div class="col-md-4">
                      <h6 class="font-14">Trip To:</h6>
                      <p class="text-sm lh-150">{{$trip->destination}}</p>
                  </div>
                  <div class="col-md-4">
                      <h6 class="font-14">Post By:</h6>
                      <p class="text-sm lh-150">{{$trip->userName->username}}</p>
                  </div>
              </div>
          </div>

  </div> <!-- end col -->
</div> <!-- end row-->

<div class="table-responsive mt-4">
  <table class="table table-bordered table-centered mb-0">
      <h3>Trip comments</h3>
      <thead class="thead-light">
          <tr>
              <th>Comment</th>
              <th>Reply</th>
              <th>user</th>
              <th>date</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($data['comments'] as $comment)
          <tr>
              <td>{{$comment->post}}</td>
              <td></td>
              <td>{{$comment->userName->username}}</td>
              <td>{{ date('F d, Y H:i A', strtotime($comment->created_at)) }}</td>
              <td>
                <a href="" class="btn btn-primary">Details</a>
                <a href="" class="btn btn-danger">Delete</a>
              </td>
          </tr>
          @foreach ($data['reply'] as $reply)
            @if($comment->trip_comment_id == $reply->trip_comment_id)
            <tr>
                <td></td>
                <td>{{$reply->post}}</td>
                <td>{{$reply->userName->username}}</td>
                <td>{{ date('F d, Y H:i A', strtotime($reply->created_at)) }}</td>
                <td>
                  <a href="" class="btn btn-primary">Details</a>
                  <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @else
            @endif
            @endforeach
          @endforeach
      </tbody>
  </table>
</div> <!-- end table-responsive-->

</div> <!-- end card-body-->
</div> <!-- end card-->
</div> <!-- end col-->
</div>
<!-- end row-->

</div> <!-- container -->


@endsection
