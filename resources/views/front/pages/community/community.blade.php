@extends('front.layouts.app')
@section('css')
<style media="screen">
    .purple-border textarea {
        border: 1px solid #ba68c8;
    }

    .media .avatar {
        width: 64px;
    }

    .shadow-textarea textarea.form-control::placeholder {
        font-weight: 300;
    }

    .shadow-textarea textarea.form-control {
        padding-left: 0.8rem;
    }
    .comments-area .date {
    font-size: 13px;
    color: #ff1111;
  }
  .comments-area .comment-list.left-padding {
    padding-left: 76px;
}
</style>

@endsection
@section('body')

<div class="comments-area">
  <h2 style="text-align:center;color:red">Community</h2>
  @include('message.error')
  @include('message.success')
<div class="user justify-content-between d-flex">
    <div class="media mt-3 shadow-textarea">
        <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="{{asset('/user_file_image/original/')}}/{{Auth::user()->image}}" alt="">
        <br>
        <h2>{{Auth::user()->username}}</h2>
    </div>
    <br>
</div>
<form  action="{{ url('/posts') }}/store-posts" method="post" enctype="multipart/form-data" >
            {{ csrf_field() }}
    <input  type="hidden" name="user_id" value="{{Auth::user()->id}}">
    <div class="form-group  purple-border">
        <br>
        <textarea class="form-control mb-10" rows="5" name="post" placeholder="Write your comment..."></textarea>
    </div>
      <div class="col-md-12 text-center">
    <input type="submit" value="post" class="btn btn-primary" >
    </div>
</form>
</div>
<div class="comments-area">
    @foreach($data['posts'] as $post)
    <div class="comment-list">
        <div class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
                <div class="media mt-3 shadow-textarea">
                    <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="{{asset('/user_file_image/original/')}}/{{$post->userName->image}}" alt="">
                </div>
                <div class="desc">
                    <h5>{{$post->userName->username}}</h5>
                    <p class="date">{{ date('F d, Y H:i A', strtotime($post->created_at)) }} </p>
                    <p class="comment">
                          {{$post->post}}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="comment-list left-padding">
      @foreach($data['comments'] as $comments)
        @if(($post->post_id)==($comments->post_id))
        <div class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
                <div class="media mt-3 shadow-textarea">
                    <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="{{asset('/user_file_image/original/')}}/{{$comments->userName->image}}" alt="">
                </div>
                <div class="desc">
                    <h5><a href="#">{{$comments->userName->username}}</a></h5>
                    <p class="date">{{ date('F d, Y H:i A', strtotime($comments->created_at)) }}</p>
                    <p class="comment">
                        {{$comments->post}}
                    </p>
                </div>
            </div>
        </div>
      @else
      @endif
      @endforeach
        <div class="media mt-3 shadow-textarea">
            <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="{{asset('/user_file_image/original/')}}/{{Auth::user()->image}}" alt="">
            <div class="media-body">
                <form  action="{{ url('/posts/comment/') }}/store-post" method="post" enctype="multipart/form-data" >
                            {{ csrf_field() }}
                    <input  type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input  type="hidden" name="post_id" value="{{$post->post_id}}">
                    <h5 class="mt-0 font-weight-bold blue-text">{{Auth::user()->username}}</h5>
                    <br>
                    <div class="form-group basic-textarea rounded-corners">
                        <textarea class="form-control z-depth-1" name="post_name" rows="3" placeholder="Write your comment..."></textarea>
                    </div>
                    <input type="submit" value="reply" class="btn btn-primary" >
                </form>
            </div>
        </div>
    </div>
  @endforeach

</div>




@endsection
