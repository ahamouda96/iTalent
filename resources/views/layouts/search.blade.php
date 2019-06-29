<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b style="color:#E0245E"> {{ $query }} </b> are :</p>
        
            @foreach($details as $user)
               



            <div class="profile-info" style="margin-bottom:20px">
            <div class="nav-profile-imge">
            <a href="{{route('front.profile', ['id'=>$user->id])}}">
            
                <img src="/uploads/images/{{ $user->profile_image }}" style="width: 30px; height: 30px; border-radius: 50%;">
            </a>
            </div>
            <div class="nav-profile-name">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" 
                style="margin-top: 2px;">
                {{$user->name}}
                </a>
            </div>


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
                    <span >follow</span>

                @endif
                </a>
                <form id="follow-form-{{ $user->id }}" method="POST" action="{{ route('user.follow',$user->id) }}" style="display: none;">
                @csrf
                </form>
                @endguest
                @endif

                @endif <!-- end if auth check-->
                <!-- end follow here-->
                @endforeach
                @endif
                </div>
</div>