<nav class="nav-container">
<div class="navbar">
    <div class="navbar-brand logo">
        <a href="{{url('/home')}}">
            <img src="/images/LOGO.png" width="45px" height="40px">
        </a>
    </div>
    <!--check authentication-->
    @if (Auth::guest())
        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="{{ url('/register') }}">Register</a></li>
    @else

    <div class="nav-form">
        <form>
            <input type="text" placeholder="Search here people or pages...">
        </form>
    </div>

    <div class="notifcation" style="margin-top:-9px; font-size: 25px;">
        <a href="{{url('/home')}}">
            <i class="fa fa-home" style="color: #fff;"></i>
        </a>
    </div>


                
    <div class="nav-profile-name">
        <ul class="my-dropdown">
            <li class="dropdown">

                <a href="#" style="text-decoration: none;color: #fff; font-size: 25px;" data-toggle="dropdown" role="button" aria-expanded="false">
                    <i class="fa fa-bell-o"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                    @foreach (Auth::user()->friends1->where('approved', '=', false) as $friend1)
                    <li>
                    <img src="/uploads/images/{{ $friend1->user1->profile_image }}" alt="Profile Picture" width="50" height="50">
                    <div style="display: inline-block">
                    {{ $friend1->user1->name }}
                    <div data-userid="{{ $friend1->user1->id }}">
                    <a href="#" class="btn btn-success btn-sm request">Accept</a>
                    <a href="#" class="btn btn-danger btn-sm request">Cancel</a>
                    </div>
                    </div>
                    </li>
                    @endforeach
                    @if (Auth::user()->friends1->where('approved', '=', false)->count() == 0)
                    You Don't have any Friend Request
                    @endif
                </ul>
            </li>
        </ul>
    </div>
    <div class="notifcation" style="color:#fff; margin-top: -9px;font-size: 25px;">
        <i class="fa fa-trophy"></i> 
    </div>
                

    <div class="profile-info">

        
        <div class="nav-profile-name">
        <ul class="my-dropdown">
            <li class="dropdown">
                <a href="#" style="text-decoration: none;color: #fff" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" 
                style="margin-top: 5px">
                    <div class="nav-profile-imge">
                        @if (auth()->user()->image)
                        <img src="/uploads/images/{{ (auth()->user()->image) }}" style="width: 30px; height: 30px; border-radius: 50%;">
                        @endif
                        {{ Auth::user()->name }}
                    </div>   
                </a>
            <ul class="dropdown-menu">
            <li>
                <a href="{{ route('front.profile', ['id'=>auth()->user()->id]) }}"><i class="fa fa-btn fa-user"></i>Profile</a>
            </li>
            <li>
                <a href="{{ url('/editprofile') }}"><i class="fa fa-btn fa-sign-out"></i>Edit Profile</a>
            </li>
            <li><a href="{{ url('/users') }}"><i class="fa fa-btn fa-user"></i>Users</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="fa fa-btn fa-sign-out"></i>Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>        
            </li>
            </ul>
            </li>
        </ul>

        </div>
    @endif
    </div>
</div>
</nav>