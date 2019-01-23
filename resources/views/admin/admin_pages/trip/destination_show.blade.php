@extends('admin.layouts.app')
@section('content')

  <div class="col-md-12">

      <div class="profile-content">
          <table class="table">
              <h1 style="text-align:center">Destinations</h1>
              @include('message.error')
              @include('message.success')
              {{$data['destinations']->links() }}
              <thead class="thead-dark">
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Destination</th>
                      <th scope="col">Action</th>

                  </tr>
              </thead>
              <tbody>
                  @foreach($data['destinations'] as $destination)
                  <tr>
                      <th scope="row">{{$i++}}</th>
                      <td>{{$destination->destination}}</td>
                      <td>
                      <a href="{{url('/admin/trips/destination/edit')}}/{{$destination->id}}" class="btn btn-primary">Edit</a>
                      <a href="{{url('/admin/trips/destination/delete')}}/{{$destination->id}}" class="btn btn-danger">Delete</a> </td>
                  </tr>
                @endforeach

              </tbody>

          </table>
            {{$data['destinations']->onEachSide(1)->links() }}

      </div>

  </div>
@endsection
