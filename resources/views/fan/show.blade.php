@extends('fan.layouts.app')
@push('css')
    <style>
        .favorite_posts{
            color: #E0245E;
        }
        .show-post{
            margin-top: 5%;
        }
        .pull-right{
            margin-top: -40px;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <div class="show-post col-sm-6 col-sm-offset-3">
            <div class="panel panel-default" style="margin: 0; border-radius: 0;">
            <div class="panel-heading">
            <h3 class="panel-title">  
                <img src="/uploads/images/{{$post->user->profile_image}}" alt="user image" style="width:40px; height:40px;border-radius: 50%;">
                <a href="{{route('front.profile', ['id'=>$post->user->id])}}" style="text-decoration: none; color: #666">
                <span style="margin-left: 5px; font-weight: 600">{{ $post->user->name }}</span> <br>
                </a> 
                <span style="margin-left: 45px;">{{$post->updated_at->diffForHumans() }}</span> 
            </h3>
              </div>
              <div class="panel-body">
                {{ $post->body }}
                @if($post->image != null)
                <img src="/uploads/posts/images/{{$post->image}}" style='width:100%;height:600px;'>
                @endif
                @if($post->image == null)
                    @if($post->postMedia)
                        @if($post->postMedia->type=="image")
                        <img src="/uploads/posts/images/{{$post->postMedia->path}}" style='width:100%;height:600px;'>
                        @endif
                        @if($post->postMedia->type=="video")
                        <video style='width:100%;height:600px;' controls>
                            <source src="/uploads/posts/video/{{$post->postMedia->path}}">
                        </video>
                        <!-- <video src="/uploads/posts/video/{{$post->postMedia->path}}" controls style='width:250px;height:250px;'> -->
                        @endif
                    @endif
                @endif
                <br />
                <a href="{{ route('category.showAll', [$post->category->name]) }}" class="badge">{{ $post->category->name }}</a>
              </div>
              <div class="panel-footer" data-postid="{{ $post->id }}">
              @if (Auth::check())
                      @php
                          $i = Auth::user()->likes()->count();
                          $commentCount = $post->comments()->where('comment', '!=', null)->count();
                      @endphp
            
                <!-- like here-->
                @guest
                <a href="javascript:void(0);" onclick="('To add favorite list. You need to login first.','Info',{
                    closeButton: true,
                    progressBar: true,
                    })">
                <i class="fa fa-heart"></i>
                {{ $post->favorite_to_users->count() }}
                </a>
                @else
                    <a href="javascript:void(0);" onclick="document.getElementById('favorite-form-{{ $post->id }}').submit();"
                        class="{{ !Auth::user()->favorite_posts->where('pivot.post_id',$post->id)->count()  == 0 ? 'favorite_posts' : ''}}">
                        <i class="fa fa-heart"></i>
                        {{ $post->favorite_to_users->count() }}
                    </a>

                    <form id="favorite-form-{{ $post->id }}" method="POST" action="{{ route('post.favorite',$post->id) }}" style="display: none;">
                    @csrf
                    </form>
                @endguest
                @endif
                @php
                $commentCount = $post->comments()->where('comment', '!=', null)->count();
                @endphp
                <!-- end like here-->
                <span style="display:inline-block;margin-left:20px; color:#23527C">
                <i class="fa fa-comment"></i>{{ $commentCount }}
                </span>
                
              </div>
            </div>
            @foreach ($post->comments as $comment)
                <div class="panel panel-default" style="margin: 0; border-radius: 0;">
                  <div class="panel-body">
                      <div class="col-sm-9">
                      
                <a href="{{route('front.profile', ['id'=>$comment->user->id])}}" style="text-decoration: none; color: #666">
                <img src="/uploads/images/{{$comment->user->profile_image}}" alt="user image" style="width:40px; height:40px;border-radius: 50%;">
                {{ $comment->user->name }}
                </a>
                          
                      </div>
                      <div class="col-sm-3 text-right">
                          <small>
                          {{ $comment->comment }}
                          </small>
                      </div>
                  </div>
                </div>
            @endforeach
            @if (Auth::check())
                <div class="panel panel-default" style="margin: 0; border-radius: 0;">
                  <div class="panel-body">
                      <form action="{{ url('/comment') }}" method="POST" style="display: flex;">
                          {{ csrf_field() }}
                          <input type="hidden" name="post_id" value="{{ $post->id }}">
                          <input type="text" name="comment" placeholder="Enter your Comment" class="form-control" style="border-radius: 0;">
                          <input type="submit" value="Comment" class="btn btn-primary" style="border-radius: 0;">
                      </form>
                      @if (count($errors) > 0)
                          <div class="alert alert-danger">
                              <a href="#" class="close" data-dismiss="alert">&times;</a>
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      {{ $error }}
                                  @endforeach
                              </ul>
                          </div>
                      @endif
                      @if (Session::has('success'))
                          <div class="alert alert-success">
                              <a href="#" class="close" data-dismiss="alert">&times;</a>
                              {{ Session::get('success') }}
                          </div>
                      @endif
                  </div>
                </div>
            @endif
        </div>
    </div>
@endsection
