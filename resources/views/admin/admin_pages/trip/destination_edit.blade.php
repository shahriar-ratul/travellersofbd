@extends('admin.layouts.app')
@section('content')
    <h2 class="mb-3 header-title" style="text-align:center">Add Destination</h2>
    @include('message.error')
    @include('message.success')
    <form class="form-horizontal"action="{{ url('/admin/trips/destination/') }}/store" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }}
      <input type="hidden" name="id" class="form-control" value="{{$destination->id}}">
      <div class="form-group mb-6">
          <label for="destination">Destination</label>
          <input type="text" name="destination" class="form-control" value="{{$destination->destination}}">
      </div>

    <div class="form-group mb- justify-content-end row">

        <div class="col-9">
            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </div>
  </form>

@endsection
