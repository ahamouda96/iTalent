<!-- start right side-->
<div class="col-sm-3">
<div class="aside-right">
<div class="top-post">
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
<i class='fas fa-plus-circle' style='font-size:30px;color:#00A4F6'></i>
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