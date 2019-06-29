@extends('layouts.app')
@push('css')
    <style>
        .favorite_posts{
            color: #E0245E;
        }
        .category-showall{
            margin-top: 5%;
        }
        .pull-right{
            margin-top: -40px;
        }
    </style>
@endpush
@section('content')
    <div class="category-showall container">
        <div class="col-sm-6 col-sm-offset-3">
            @foreach ($posts as $post)
                 <div class="panel panel-default">
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
                    {{ $post->body }} <br>
                    @if($post->postMedia) 
                        @if($post->postMedia->type=="image")
                        <img src="/uploads/posts/images/{{$post->postMedia->path}}" style='width:100%;height:600px;'>
                        @endif
                        @if($post->postMedia->type=="video")
                        <video style='width:100%;height:600px;' controls>
                            <source src="/uploads/posts/video/{{$post->postMedia->path}}">
                        </video>
                        @endif
                        <br>
                        <a href="{{ route('category.showAll', [$post->category->name]) }}" class="badge">{{ $post->category->name }}</a>                    
                    @endif
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
                <!-- end like here-->
                  <a href="#" class="btn btn-link">Comment</a>
              </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection