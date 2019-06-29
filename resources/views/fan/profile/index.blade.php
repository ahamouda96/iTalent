
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
            <div class="tool-par-links">


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


<form id="follow-form-{{ $user->id }}" method="POST" action="{{ route('fan.user.follow',$user->id) }}" style="display: none;">
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
<!-- End Aside Left -->
<div class="col-md-12">
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
                    

</div>
</div>
              




</div>
</div>                
@endsection
        
            
        
        