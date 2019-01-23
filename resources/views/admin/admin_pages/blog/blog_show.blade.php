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
          <h1 style="text-align:center">Blogs</h1>
          @include('message.error')
          @include('message.success')
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Date</th>
                    <th scope="col">User</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach($data['blogs'] as $blog)
                <tr>
                    <th scope="row">{{$id++}}</th>
                    <td scope="row">{{$blog->blog_title}}</td>
                    <td>{{ date('d.m.Y', strtotime($blog->created_at))}}</td>
                    <td> {{$blog->userName->username}}</td>
                    <td>
                    <a href="{{url('/admin/blog/details')}}/{{$blog->blog_id}}" class="btn btn-primary">edit</a>
                    <a href="{{url('/admin/blog/details')}}/{{$blog->blog_id}}" class="btn btn-info">Details</a>
                    <a href="{{url('/admin/blog/delete')}}/{{$blog->blog_id}}" class="btn btn-danger">Delete</a> </td>
                </tr>
              @endforeach
            </tbody>
        </table>


            {{$data['blogs']->onEachSide(1)->links() }}

      </div>

  </div>
</div>
<!-- end row-->


@endsection
