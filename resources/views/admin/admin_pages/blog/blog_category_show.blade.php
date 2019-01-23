@extends('admin.layouts.app')
@section('content')

  <div class="col-md-12">

      <div class="profile-content">
          <table class="table">
              <h1 style="text-align:center">Blog Categories</h1>
              @include('message.error')
              @include('message.success')
              {{$data['tags']->links() }}
              <thead class="thead-dark">
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Categories</th>
                      <th scope="col">Description</th>
                      <th scope="col">image</th>
                      <th scope="col">Action</th>

                  </tr>
              </thead>
              <tbody>
                  @foreach($data['tags'] as $tag)
                  <tr>
                      <th scope="row">{{$i++}}</th>
                      <td>{{$tag->tag_name}}</td>
                      <td>{{$tag->description}}</td>
                      <td>
                        <a target="_blank" href="{{asset('/user_file_image/blog_category')}}/{{$tag->image}}">
                          <img src="{{asset('/user_file_image/blog_category')}}/{{$tag->image}}" alt="{{$tag->tag_name}}" style="width:150px">
                        </a>

                        </td>
                      <td>
                      <a href="{{url('admin/blog/category/edit')}}/{{$tag->tag_id}}" class="btn btn-primary">edit</a>
                      <a href="{{url('admin/blog/category/delete')}}/{{$tag->tag_id}}" class="btn btn-danger">Delete</a> </td>
                  </tr>
                @endforeach

              </tbody>

          </table>
            {{$data['tags']->onEachSide(1)->links() }}

      </div>

  </div>
@endsection
