@extends('admin.layouts.app')
@section('content')
<button class="button-menu-mobile open-left disable-btn">
    <i class="mdi mdi-menu"></i>
</button>
<!-- <div class="app-search">
    <form>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="mdi mdi-magnify"></span>
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </div>
    </form>
</div> -->
<div class="row">
  <div class="col-md-12">

      <div class="profile-content">
        <table class="table">
          <h1 style="text-align:center">Trips</h1>
          @include('message.error')
          @include('message.success')
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
                    <th scope="row">{{$id++}}</th>
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
                    <a href="{{url('admin/trips/details')}}/{{$trip->trip_id}}" class="btn btn-primary">Details</a>
                    <a href="{{url('admin/trips/delete/')}}/{{$trip->trip_id}}" class="btn btn-danger">Delete</a> </td>
                </tr>
              @endforeach
            </tbody>
        </table>


            {{$data['trips']->onEachSide(1)->links() }}

      </div>

  </div>
</div>
<!-- end row-->


@endsection
