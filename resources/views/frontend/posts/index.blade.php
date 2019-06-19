@extends('layouts.app')

@section('content')

<div class="contant">
  <div class="center">
    <div class="body">
      
      @include('posts.leftaside');

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
@include('posts.create');

@foreach ($posts as $post)<!--start foreach loop posts-->

<div class="post">
<div data-postid="{{ $post->id }}">
@php
$i = Auth::user()->likes()->count();
$c = 1;
$likeCount = $post->likes()->where('like', '=', true)->count();
$commentCount = $post->comments()->where('comment', '!=', null)->count();
@endphp
@foreach (Auth::user()->likes as $like) <!-- start foreach loop likes--> 
@if ($like->post_id == $post->id)
@if ($like->like)
<i class="fa fa-heart-o like"></i><h5>{{ $likeCount }}</h5>
@else
<i class="fa fa-heart-o like"></i><h5>{{ $likeCount }}</h5>
@endif
@break
@elseif ($i == $c)
<i class="fa fa-heart-o like"></i><h5>{{ $likeCount }}</h5>
@endif
@php
$c++;
@endphp
@endforeach <!-- end foreach loop likes--> 
@if ($i == 0)
<i class="fa fa-heart-o like"></i>{{ $likeCount }}
@endif
<i class="fa fa-comment"></i>{{ $commentCount }}


<!-- comments section-->
@include('posts.comments');
<!--comments-->            

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
<a href="#" onclick="document.getElementById('delete').submit()">Delete Post</a>
{!! Form::open(['method' => 'DELETE', 'id' => 'delete', 'route' => ['post.delete', $post->id]]) !!}
{!! Form::close() !!}
</li>
</ul>
</li>
</ul>

</div>
<div class="post-content">
<p>{{ $post->body }}</p>
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
<a href="{{ route('category.showAll', [$post->category? $post->category->name : 'uncategoeized']) }}" class="badge">{{ $post->category->name }}</a>
</div>
<div class="post-footer">
</div>
</div>

@endforeach
</div><!--end class [posts current-post]-->
<!-- end posts-->
</div><!--end col-sm-6-->

@include('posts.rightaside');

<!-- end right side section--> 
</div> <!--end body-->
</div><!--end center-->
</div><!--end contain-->

@endsection