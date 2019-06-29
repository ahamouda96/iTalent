@push('css')
<style>
        .favorite_posts{
            color: red;
        }
        .followings{
            color: #E0245E;
        }
    </style>
    @endpush
<!-- start right side-->
<div class="col-sm-3">
<div class="aside-right">
<div class="top-post" style="height: 385px !important;">
<div class="Fimage">
<div class="title">
<span class="title-name">Friend Suggestion</span>

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
<div class="posts-photo-N">
<ul>

<table>
@foreach($users as $user)
<tr>
<td>
<a href="{{route('front.profile', ['id' => $user->id])}}">
<img src="/uploads/images/{{$user->profile_image}}" alt="profile user image">
</a>
</td>
<td>
<h5><a href="{{route('front.profile', ['id' => $user->id])}}">{{$user->name}}</a></h5>
</td>
<td>
@if(Auth()->user()->id != $user->id)         
@if (Auth::check())
<!-- like here-->
@guest
<a href="javascript:void(0);" onclick="('To follow user. You need to login first.','Info',{
closeButton: true,
progressBar: true,
})">
<i class="fa fa-add"></i>
{{$user->followers->count()}}
 
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
@endif
</td>
</tr>
@endforeach
</table>
</ul>
</div>

</div>
</div>



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
</div><!--end aside right div-->
</div><!--end col-sm-3 div-->