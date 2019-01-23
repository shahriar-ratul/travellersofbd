@extends('front.layouts.app')
@section('css')
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">

@endsection
@section('body')
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
          <input  type="hidden" name="user_id" value="{{Auth::user()->id}}">
          <div class="form-group">
              <label for="title" class="col-sm-3 control-label font-bold">Title*</label>
              <div class="col-sm-9">
                  <input type="text" name="title" id="title" placeholder="Title" class="form-control" autofocus>
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-3 control-label">Blog Image</label>
              <div class="col-sm-9">
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
              <div class="col-sm-9">
                  <textarea class="form-control" placeholder="Short Description"  name="short_description" rows="5"></textarea>

                </div>
          </div>
          <div class="form-group">
              <label for="Destination" class="col-sm-3 control-label font-bold">Post Description*</label>
              <div class="col-sm-9">
                  <textarea id="summernote" name="long_description"></textarea>
              </div>
          </div>
          <div class="form-group">
              <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block">Create Blog</button>
              </div>
          </div>


      </form>

    </div>

</section>

@endsection
