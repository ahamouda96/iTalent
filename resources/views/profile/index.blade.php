
@extends('layouts.app')
@push('css')
    <style>
        .favorite_posts{
            color: red;
        }
        .followings{
            color: #E0245E;
        }

        .aside-right .top-post{
            height: 100%;
        }
    </style>
@endpush
@section('content')
               
<!-- Start Center -->
<div class='contant'>       
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

            <!-- <div class="tool-par-links" data-friendid="{{ $user->id }}">
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
            </div> -->
                                           
            <div class="tool-par-links">
            <!-- <a href="{{ route('user.follow', $user->id) }}">Follow User</a>
            <a href="{{ route('user.unfollow', $user->id) }}">Unfollow User</a> -->


@if(Auth()->user()->id != $user->id) <!-- check if auth user-->       
@if (Auth::check())
<!-- start follow here-->
@guest
<a href="javascript:void(0);" onclick="('To follow user. You need to login first.','Info',{
closeButton: true,
progressBar: true,
})">
<i class="fa fa-add"></i>
{{$user->followers->count()}}
 follow
</a>
@else
<a href="javascript:void(0);" onclick="document.getElementById('follow-form-{{ $user->id }}').submit();"
class="{{ !Auth::user()->followings->where('pivot.leader_id',$user->id)->count()  == 0 ? 'followings' : ''}}">

@if($user->followers->count() == 1)
    <span class="followings">unfollow</span>

@else
    <span>follow</span>

@endif
</a>


<form id="follow-form-{{ $user->id }}" method="POST" action="{{ route('user.follow',$user->id) }}" style="display: none;">
@csrf
</form>
@endguest
@endif

@endif <!-- end if auth check-->
<!-- end follow here-->


            </div>
        </div>
   </div>
            
<div class="body">
<div class='row'>
@if(auth()->user()->role_id == 4)
<div class="col-sm-3"></div>
<div class="col-sm-6" style="margin-left: 50%;width: 745px !important">
<div class="aside-left">
<div class="profile-intro">
<div class="title">
    <span class="title-name">Profile intro</span>
</div>
<hr class="hr">

<div class="items">
<p class="items-title">About Me:</p>
<span class="items-info">
{{ $user->bio }}
</span>
</div>
<div class="items">
<p class="items-title">Favourite:</p>
<span class="items-info">
{{ $user->bio }}
</span>
</div>

<div class="items">
<p class="items-title">Other Network:</p>
<a class="facebook" href="{{$user->links}}">
<i class="fa fa-facebook"></i>
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
<div class="col-sm-3"></div>
@endif 
@if(auth()->user()->role_id != 4) 
<!-- start Aside Left -->
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
{{ $user->bio }}
</span>
</div>
<div class="items">
<p class="items-title">Favourite:</p>
<span class="items-info">
{{ $user->bio }}
</span>
</div>

<div class="items">
<p class="items-title">Other Network:</p>
<a class="facebook" href="{{$user->links}}">
<i class="fa fa-facebook"></i>
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

<!-- End Create Poste -->

<!-- create post-->

  
<div class="upload" id="upload">
@include('profile.create')
</div>



<!--dispaly posts-->
@foreach ($user->posts as $post)
@if($post != null)
<div class="post">
<div class="post-icon">
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
                <!-- end like here-->
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
        @endif
    @endif
@endif
</div>
<!-- post content-->

<!-- post interacts-->
<div class="post-icon">
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
                <!-- end like here-->
    
    <i class="fa fa-comment"></i><h5>{{ $commentCount }}</h5>
</div>
<!-- post interacts-->

<div class="post-footer">
    <a href="{{ route('category.showAll', [$post->category? $post->category->name : 'uncategoeized']) }}" class="badge">{{ $post->category->name }}</a>
</div>

</div>
@endif
@endforeach

<!--end display posts-->
</div>

</div>
<!-- End Posts -->



<div class="col-sm-3">
<div class="aside-right" style="width:100%;">

<div class="top-post">
    <div class="title">
    <span class="title-name">Latest Post</span>
    </div>

    <hr class="hr">
   
    <div style="width: 271px;">
    @foreach ($user->posts as $post)
    @if($post)
        @if($post->image != null)
        <img src="/uploads/posts/images/{{$post->image}}" style='width:85%;height:85%;margin-left: 17px;margin-bottom:10px'>
        @endif
        @if($post->image == null)
            @if($post->postMedia)
                @if($post->postMedia->type=="image")
                <img src="/uploads/posts/images/{{$post->postMedia->path}}" style='width:85%;height:85%;margin-left:17px;margin-bottom:10px'>
                @endif 
            @endif
        @endif
    @endif
    @endforeach
    </div>
    
    </div>
</div>
</div>
@endif
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
        
            
        
        