@extends('fan.layouts.app')
@push('css')
    <style>
        .favorite_posts{
            color: #E0245E;
        }
    </style>
@endpush
@section('content')

<div class="contant">
  <div class="center">
    <div class="body">
       
      @include('posts.leftaside')

<!-- start posts-->
<div class="col-sm-6">
@if (Session::has('success'))
<div class="alert alert-success">
<a href="#" class="close" data-dismiss="alert">&times;</a>
{{ Session::get('success') }}
</div>
@endif


<!-- Start Section Posts -->
<div class="posts current-post"> 
<!-- Start Create Poste -->


@foreach ($posts as $post)<!--start foreach loop posts-->

<div class="post">

@if(request()->has('search')&& request()->get('search') != '')
you are search on {{request()->get('search')}}
@endif

<div class="post-icon">
@if (Auth::check())
@php
  $i = Auth::user()->likes()->count();
  $commentCount = $post->comments()->where('comment', '!=', null)->count();
  @endphp
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
<a href="{{ route('post.show', [$post->id]) }}">
    <i class="fa fa-comment"></i>
    
    {{ $commentCount }}
    
    </a>
</div>

<!-- post-data-->

<div class="post-head">
<div class="post-info">
<img src="/uploads/images/{{$post->user->profile_image}}" alt="profile user image">
<div class="post-info-name">
<span class="name">

<a href="{{route('front.profile', ['id' => $post->user->id]) }}" style="text-decoration: none;color: #666;">
{{ $post->user->name }}
</a>

</span>
<span class="time">
{{$post->updated_at->diffForHumans() }} </span>
</div>
</div>

@if(Auth()->user()->id == $post->user->id) <!--check authentication to edit or delete posts-->
<ul class="my-dropdown">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
<span class="title-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>

<ul class="dropdown-menu dropdown-menu-right">
<li><a href="{{ route('post.show', [$post->id]) }}">Show Post</a></li>
<li><a href="{{ route('post.edit', [$post->id]) }}">Edit Post</a></li>
<li>
{!! Form::open(['method'=>'DELETE','action'=>['PostsController@destroy',$post->id]]) !!}
{!! Form::submit('Delete',['style'=>'border:none; background: #fff;margin-left:13px;cursor: pointer;']) !!}
{!! Form::close() !!}
</li>
</ul>
</li>
</ul>
@endif <!--end check authentication to edit or delete posts-->
</div>

<div class="post-content">
<p>{{ $post->body }}</p>
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
  <br>
  @endif
@endif
<a href="{{ route('fan.category.showAll', [$post->category? $post->category->name : 'uncategoeized']) }}" class="badge">{{ $post->category->name }}</a>
</div>

<!-- post interacts-->


<!-- post interacts-->


<div class="post-footer">
</div>
</div>

@endforeach <!-- end foreach loop for posts -->
</div><!--end class [posts current-post]-->
<!-- end posts-->
</div><!--end col-sm-6-->


<!-- start right side-->

@include('posts.rightaside')


<!-- end right side section--> 
</div> <!--end body-->
</div><!--end center-->
</div><!--end contain-->

@endsection