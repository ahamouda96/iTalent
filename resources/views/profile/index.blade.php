
@extends('layouts.app')
@section('content')
               
<!-- Start Center -->
            
<div class="center">
    <div class="head">
        <div class="background-img">
            <img src="/images/BC.jpg" alt="cover image">
        </div>

        <div class="tool-par">
            <div class="profile-img">
                <img src="/uploads/images/{{ $user->profile_image }}" alt="">
                <span class="name">{{ $user->name }}</span>
            </div>

            <div class="tool-par-links" data-friendid="{{ $user->id }}">
            @if(Auth()->user()->id != $user->id)
                @if (Auth::check())
                    @php
                        $i = Auth::user()->friends()->count();
                        $c = 1;
                    @endphp
                    @foreach (Auth::user()->friends as $user_1)
                    @if ($user_1->user2->id == $user->id)
                    <a href="#" class="margin-center  remove-friend">unfollow</a>
                    @break
                    @elseif ($i == $c)
                    <a href="#" class="margin-center btn btn-link friend">follow</a>
                    @endif
                    @php
                        $c++;
                    @endphp
                    @endforeach
                    @if ($i == 0)
                    <a href="#" class="margin-center btn btn-link friend">follow</a>
                    @endif
                @endif
            @endif 
                <a href="{{ route('friend.show', $user->id) }}" class="margin-right btn btn-link">
                    View Friends
                </a>   
            </div>
                                           
            <div class="tool-par-links">
                <a href="#" class="margin-left"></a>
                <a href="#" class="margin-left"></a>   
            </div>
        </div>
   </div>
            
<div class="body">

<!-- End Aside Left -->
<div class="col-sm-3">
<div class="aside-left">
<div class="profile-intro">
<div class="title">
    <span class="title-name">Profile intro</span>
</div>
<hr class="hr">

<div class="items">
<p class="items-title">About Me:</p>
<span class="items-info">
    {{ $user->email }}
</span>
</div>
<div class="items">
<p class="items-title">Favourite:</p>
<span class="items-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut est facilisis.</span>
</div>

<div class="items">
<p class="items-title">Other Network:</p>
<a class="facebook" href="https://www.facebook.com/">
<i class="fa fa-facebook"></i>

</a>
<a class="twitter" href="https://twitter.com/login?lang=ar">
<i class="fa fa-twitter"></i>
</a>
<a class="instagram" href="https://www.instagram.com/accounts/login/">
<i class="fa fa-instagram"></i>

</a>
</div>

<hr class="hr">
<div class="items-play">
<p><span> &copy;  2019 ITalent About Us Help
Terms Privacy policy
Marketing Bussiness Developers</span> </p>

<a href="https://play.google.com/store?hl=ar">
<button style='font-size:24px'>Google Play <i class='fab fa-google-play'></i></button>
</a>
</div>
</div>

</div>

</div>
<!-- End Aside Left -->
                    
<!-- Start Section Posts -->
<div class="col-sm-6">
<div class="posts">                      
<div class="create-poste-content">
<div class="upload">
<div class="upload-selction">
<div>
<i class="fa fa-photo"></i>
<span>Add Photo / Video</span>
</div>
<i class="fa fa-times close-create-post"></i>
</div>
<div class="upload-text">
<img src="/images/PU2.png" alt="Oops">
<form>
<textarea placeholder="What's on your mind?" id="text1" autofocus></textarea>
<div class="validation">
<div class="validation-box">
    <span>The Post is empty</span>
</div>
</div>
</form>
</div>
<div class="upload-post">
<form>
<input type="button" value="Post"  id="uplod-button">
</form>
</div>
</div>
</div>
<!-- End Create Poste -->

<!-- create post-->
<div class="upload" id="upload">
    <form method="post" enctype="multipart/form-data">
        <div class="upload-selction">
            <input type="file" name="media" id="file" style="display: none;"/>
            <i class="fa fa-photo" style="cursor: pointer;"></i>
            <span>Add Photo / Video</span>
        </div>
        <div class="upload-text form-group {{ $errors->has('body') ? 'has-error' : '' }}">
            <img src="/uploads/images/{{Auth::user()->profile_image}}" alt="profile image">
            <form>
            <textarea name="body" placeholder="What's on your mind?" id="open-create"></textarea>
            </form>
            @if ($errors->has('body'))
            <small class="text-danger">{{ $errors->first('body') }}</small>
            @endif 
        </div>
        <div class="upload-post">
            <select class="form-control" name="category">
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        </div>
        <div class="upload-post">
            <form>
                <input type="submit" value="Post">
            </form>
        </div>
    </form>
</div>  

<!--dispaly posts-->
@foreach ($user->posts as $post)
<div class="post">
<div class="post-icon">
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
    <i class="fa fa-comment"></i><h5>{{ $commentCount }}</h5>
</div>


<div class="post-head">
<div class="post-info">
<img src="/images/PU2.png" alt="Oops">
<div class="post-info-name">
<span class="name">{{ $user->name }}</span>
<span class="time">{{$post->updated_at->diffForHumans()}}</span>
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
<!-- dropdown menu posts-->
<ul class="dropdown-menu dropdown-menu-right">
    <li><a href="{{ route('post.show', [$post->id]) }}">Show Post</a></li>
    <li>
        <a href="{{ route('post.edit', [$post->id]) }}">Edit Post</a>
    </li>
    <li>
        <a href="#" onclick="document.getElementById('delete').submit()">Delete Post</a>
        {!! Form::open(['method' => 'DELETE', 'id' => 'delete', 'route' => ['post.delete', $post->id]]) !!}
        {!! Form::close() !!}
    </li>
</ul>
<!-- dropdown menu posts-->
</li>
</ul>
</div>
<!-- post content-->
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
    @endif
@endif
</div>
<!-- post content-->

<!-- post interacts-->
<div class="post-icon">
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
    <i class="fa fa-comment"></i><h5>{{ $commentCount }}</h5>
</div>
<!-- post interacts-->

<div class="post-footer">
    <a href="{{ route('category.showAll', [$post->category? $post->category->name : 'uncategoeized']) }}" class="badge">{{ $post->category->name }}</a>
</div>
</div>
@endforeach
<!--end display posts-->
</div>
</div>
<!-- End Posts -->



<div class="col-sm-3">
<div class="aside-right">

<div class="top-post">
    <div class="title">
    <span class="title-name">Latest Post</span>
    </div>

    <hr class="hr">
    <div class="posts-photo">
    @if($post->postMedia)
        <img src="/uploads/posts/images/{{$post->postMedia->path}}">
    @endif
    </div>
</div>
</div>
</div>              

<!-- <div class="col-sm-3">
<div class="top-post">
<div class="title">
<span class="title-name">Top Posts</span>

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
<li><a href="#">Edit</a></li>
</ul>
</li>
</ul>

</div>
<hr class="hr">
<div class="posts-photo">
<img src="images/PU2.png" alt="Oops">
<img src="images/PU2.png" alt="Oops">
<img src="images/PU2.png" alt="Oops">
<img src="images/PU2.png" alt="Oops">
<img src="images/PU2.png" alt="Oops">
<img src="images/PU2.png" alt="Oops">
<img src="images/PU2.png" alt="Oops">
<img src="images/PU2.png" alt="Oops">
<img src="images/PU2.png" alt="Oops">
</div>
</div>
</div>
 -->


</div>
</div>                
@endsection
        
            
        
        