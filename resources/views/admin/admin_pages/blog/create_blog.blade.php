@extends('admin.layouts.app')
@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>


@endsection
@section('content')
  <br>

  <section class="top-category-widget-area pt-90 pb-90 ">
    <br>
    <br>
    <br>

     @include('message.error')
     @include('message.success')
      <!-- <div id="summernote">Hello Summernote</div> -->

    <div class="container">
      <form  class="form-horizontal" role="form"  action="{{ url('/blogs/') }}/store-blogs" method="post" enctype="multipart/form-data" >
                  {{ csrf_field() }}
          <input  type="hidden" name="admin_id" value="{{Auth::user()->id}}">
          <div class="form-group">
              <label for="title" class="col-sm-3 control-label font-bold">Title*</label>
              <div class="col-sm-12">
                  <input type="text" name="title" id="title" placeholder="Title" class="form-control" autofocus>
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-3 control-label">Blog Image</label>
              <div class="col-sm-12">
                  <input type="file" name="image"  accept="image/*">
              </div>
          </div>
          <!-- <div class="form-group">
              <label for="title" class="col-sm-3 control-label font-bold">Tags*</label>
              <div class="col-sm-9">
                <select  class="demo" multiple>
                  <option value="1">Acura</option>
                  <option value="2">Audi</option>
                  <option value="3">BMW</option>
                  <option value="4">Cadillac</option>
                  <option value="5">Chevrolet</option>
                  <option value="6">Ferrari</option>
                  <option value="7">Ford</option>
                  <option value="8">Honda</option>
                  <option value="9">Lexus</option>
                  <option value="10">Mercedes-Benz</option>
                </select>
              </div>
          </div> -->
          <div class="form-group">
              <label for="Destination" class="col-sm-3 control-label font-bold">Post Short Description*</label>
              <div class="col-sm-12">
                  <textarea class="form-control" placeholder="Short Description"  name="short_description" rows="5"></textarea>

                </div>
          </div>
          <div class="form-group">
              <label for="Destination" class="col-sm-3 control-label font-bold">Post Description*</label>
              <div class="col-sm-12">
                  <textarea id="summernote" name="long_description"></textarea>
              </div>
          </div>
          <div class="form-group">
              <div class="col-sm-12 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block">Create Blog</button>
              </div>
          </div>


      </form>

    </div>

</section>

@endsection
