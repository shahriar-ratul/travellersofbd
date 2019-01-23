@extends('admin.layouts.app')
@section('content')
    <h2 class="mb-3 header-title" style="text-align:center">Add Blog Categories</h2>
    @include('message.error')
    @include('message.success')
    <form class="form-horizontal"action="{{ url('admin/blog/category/') }}/store" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }}
    <input type="hidden" name="tag_id" class="form-control" value="{{$tag->tag_id}}">
      <div class="form-group mb-6">
          <label for="Category">Category</label>
          <input type="text" name="tag_name" class="form-control" value="{{$tag->tag_name}}">
      </div>
      <div class="form-group mb-6">
          <label for="Category">Category Description</label>
          <input type="text" name="description" class="form-control" value="{{$tag->description}}">
      </div>

    <div class="form-group mb- justify-content-end row">

        <div class="col-9">
            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </div>
  </form>

@endsection
