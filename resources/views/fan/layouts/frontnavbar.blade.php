<nav class="nav-container">
<div class="navbar">
    <div class="logo">
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
        <form action="/search" method="POST" role="search">
            {{ csrf_field() }}
            
            <input type="text" class="form-control" name="q"
                placeholder="Search users"> <span class="input-group-btn">
                
            </span>
            
        </form>
    </div>

    <div class="notifcation" style="margin-top:-9px; font-size: 25px;">
        <a href="{{url('/home')}}">
            <i class="fa fa-home" style="color: #fff;"></i>
        </a>
    </div>


                    
        <div class="profile-info">
            <div class="nav-profile-imge">
            <a href="{{route('fan.front.profile', ['id'=>auth()->user()->id])}}">
                @if (auth()->user()->image)
                <img src="/uploads/images/{{ (auth()->user()->image) }}" style="width: 30px; height: 30px; border-radius: 50%;">
                @endif
            </a>
            </div>
            <div class="nav-profile-name">
                <ul class="my-dropdown">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="margin-top: 2px">
                        {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu">
                        <li>
                            <a href="{{route('fan.front.profile', ['id'=>auth()->user()->id])}}" style="color:#000">
                            <i class="fa fa-btn fa-user"></i> Profile
                            </a>
                        </li>
                        <li id="setting-button">
                            <span>
                            <a href="{{url('/editprofile')}}" style="color:#000">
                            <i class="fa fa-btn fa-edit"></i>Edit profile
                            </a>
                            </span>
                        </li>
                        
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" style="color:#000">
                            <i class="fa fa-btn fa-sign-out"></i>Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>        
                        </li>
                        </ul>
                    </li>
                </ul>
            </div>
            </div>
    @endif
    </div>
</nav>