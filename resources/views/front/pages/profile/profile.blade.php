@extends('front.layouts.app')
@section('css')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style media="screen">
    /***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

    body {
        background: #F1F3FA;
    }

    /* Profile container */
    .profile {
        margin: 20px 0;
    }

    .nav {
        display: inline-grid;
    }

    /* Profile sidebar */
    .profile-sidebar {
        padding: 20px 0 10px 0;
        background: #fff;
    }

    .profile-userpic img {
        float: none;
        margin: 0 auto;
        width: 50%;
        height: 50%;
        -webkit-border-radius: 50% !important;
        -moz-border-radius: 50% !important;
        border-radius: 50% !important;
    }

    .profile-usertitle {
        text-align: center;
        margin-top: 20px;
    }

    .profile-usertitle-name {
        color: #5a7391;
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 7px;
    }

    .profile-usertitle-job {
        text-transform: uppercase;
        color: #5b9bd1;
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .profile-userbuttons {
        text-align: center;
        margin-top: 10px;
    }

    .profile-userbuttons .btn {
        text-transform: uppercase;
        font-size: 11px;
        font-weight: 600;
        padding: 6px 15px;
        margin-right: 5px;
    }

    .profile-userbuttons .btn:last-child {
        margin-right: 0px;
    }

    .profile-usermenu {
        margin-top: 30px;
    }

    .profile-usermenu ul li {
        border-bottom: 1px solid #f0f4f7;
    }

    .profile-usermenu ul li:last-child {
        border-bottom: none;
    }

    .profile-usermenu ul li a {
        color: #93a3b5;
        font-size: 14px;
        font-weight: 400;
    }

    .profile-usermenu ul li a i {
        margin-right: 8px;
        font-size: 14px;
    }

    .profile-usermenu ul li a:hover {
        background-color: #fafcfd;
        color: #5b9bd1;
    }

    .profile-usermenu ul li.active {
        border-bottom: none;
    }

    .profile-usermenu ul li.active a {
        color: #5b9bd1;
        background-color: #f6f9fb;
        border-left: 2px solid #5b9bd1;
        margin-left: -2px;
    }

    /* Profile Content */
    .profile-content {
        padding: 20px;
        background: #fff;
        min-height: 460px;
    }
    .single-footer-widget h4 {
    color: #fff !important;
    margin-bottom: 25px;
    font-weight: 500;
}
.footer-area p {
    color: #fff !important;
    font-size: 16px;
    font-weight: 400;
}
</style>

@endsection
@section('body')
<section class="price-area section-gap">
    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="{{asset('/user_file_image/original/') }}/{{Auth::user()->image}}" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            {{Auth::user()->username}}
                        </div>
                        <!-- <div class="profile-usertitle-job">
                            @if((Auth::user()->level)==0)
                                Admin
                                @elseif((Auth::user()->level)==1)
                                    Bloger
                                    @elseif((Auth::user()->level)==2)
                                        User
                                        @elseif((Auth::user()->level)==3)

                                            @endif
                        </div> -->
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <!-- <div class="profile-userbuttons">
  					<button type="button" class="btn btn-success btn-sm">Follow</button>
  					<button type="button" class="btn btn-danger btn-sm">Message</button>
  				</div> -->
                    <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="#">
                                    <i class="glyphicon glyphicon-home"></i>
                                    Overview </a>
                            </li>
                            <li>
                                <a href="{{url('/blogs/create')}}" target="_blank">
                                    <i class="glyphicon glyphicon-user"></i>
                                    Create Blog</a>
                            </li>
                            <li>
                                <a href="{{url('trips/create')}}" target="_blank">
                                    <i class="glyphicon glyphicon-ok"></i>
                                    Create Trip </a>
                            </li>
                            <!-- <li>
                                <a href="#" target="_blank">
                                    <i class="glyphicon glyphicon-ok"></i>
                                    Tasks </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="glyphicon glyphicon-flag"></i>
                                    Help </a>
                            </li> -->
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
            </div>
            <div class="col-md-9">
                <div class="profile-content">
                    <table class="table">
                      <h1 style="text-align:center">Trips</h1>
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">From Date</th>
                                <th scope="col">To Date</th>
                                <th scope="col">Destination</th>
                                <th scope="col">Budget</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($data['trips'] as $trip)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td scope="row">{{$trip->trip_title}}</td>
                                <td>{{ date('d.m.Y', strtotime($trip->from_date))}}</td>
                                <td>{{ date('d.m.Y', strtotime($trip->to_date))}}</td>
                                <td> {{$trip->destination}}</td>
                                <td>  @if($trip->budget==1) BDT 0 - BDT 2000
                                                @elseif($trip->budget==2) BDT 2000 - BDT 3500
                                                @elseif($trip->budget==3) BDT 3500 - BDT 5000
                                                @elseif($trip->budget==4) BDT 5000 - BDT 7000
                                                @elseif($trip->budget==5) BDT 7000 - BDT 8000
                                                @elseif($trip->budget==6) BDT 8000 - BDT 9000
                                                @elseif($trip->budget==7) BDT 9000 - BDT 10000
                                                @elseif($trip->budget==8) BDT 10000+
                                        @endif</td>
                                <td>
                                <a href="{{url('/trips/details')}}/{{$trip->trip_id}}" class="btn btn-primary">Details</a>
                                <a href="{{url('/trips/delete')}}/{{$trip->trip_id}}" class="btn btn-danger">Delete</a> </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>

                </div>

                <div class="profile-content">
                    <table class="table">
                        <h1 style="text-align:center">Blogs</h1>
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data['blogs'] as $blog)
                            <tr>
                                <th scope="row">{{$j++}}</th>
                                <td>{{$blog->blog_title}}</td>
                                <td>{{ date('F d, Y H:i A', strtotime($blog->created_at)) }}</td>
                                <td>
                                <a href="#" class="btn btn-info">Details</a>
                                <a href="#" class="btn btn-primary">edit</a>
                                <a href="#" class="btn btn-danger">Delete</a> </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
</section>
<!-- <center>
  <strong>Powered by <a href="http://j.mp/metronictheme" target="_blank">KeenThemes</a></strong>
  </center> -->
<br>
<br>


@endsection
