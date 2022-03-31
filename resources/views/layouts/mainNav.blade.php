<!-- header start -->
   <div>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
<a href="#" class="navbar-brand"><img src="http://localhost/praful/images/logo3.png" class="logo"></a>
<button type="button" class="navbar-toggler bg-dark" data-toggle="collapse" data-target="#nav">
<span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse justify-content-between" id="nav">
<ul class="navbar-nav ml-auto">

<li class="nav-item">
<a href="{{url('/')}}" class="nav-link" style="color:white;">Home</a>
</li>
<li class="nav-item">
<a href="{{url('/membership')}}" class="nav-link" style="color:white;">Membership</a>
</li>

<li class="nav-item">
<a href="{{url('/experts')}}"  class="nav-link" style="color:white;">Fitness Experts</a>
</li>

<li class="nav-item">
<a href="{{url('/product')}}"  class="nav-link" style="color:white;">Fitness Products</a>
</li>
<li class="nav-item">
<a href="{{url('/contact')}}" class="nav-link" style="color:white;">Contact</a>
</li>

<li class="nav-item">
@if (Route::has('login'))            
 @auth
<a href="{{ url('/dashboard') }}" class="nav-link" style="color:#FF2626;">{{ Auth::user()->name }}</a>
</li>

<li class="nav-item">
<a href="{{ route('logout') }}" class="nav-link" style="color:white;">Logout</a>
</li>

@else
<li class="nav-item">
<a href="{{ route('login') }}"  class="nav-link" style="color:white;">Log in</a>
</li>

<li class="nav-item">
@if (Route::has('register'))
<a href="{{ route('register') }}"  class="nav-link" style="color:white;">Register</a>
@endif
</li>
@endauth
@endif
</li>
<li class="nav-item">
                    @auth('admin')
                    <a href="{{ route('admin.dashboard')}}" class="nav-link" style="color:white;"> ADMIN DASHBOARD</a>
                    @else
                    <a href="{{ route('admin.login')}}" class="nav-link" style="color:white;"> ADMIN LOGIN</a>
                    @endauth
</li>
<li class="nav-item">
<form class="d-flex" style="margin-top:9px; margin-right:-25px;">
                <input type="text"
                    placeholder=" Search..."
                    name="search" size="15px">
                <button>
                    <i class="fa fa-search"
                        style="font-size: 30px;">
                    </i>
                </button>
        </form>  
</li>
</ul>
</div>
</nav>
 </div>


<!-- 
 <div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Dropdown button
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Link 1</a>
    <a class="dropdown-item" href="#">Link 2</a>
    <a class="dropdown-item" href="#">Link 3</a>
  </div>
</div> -->