<nav class="navbar navbar-expand-md  fixed-top justify-content-center" id="pink">
    <div>
        <img src="{{asset('/storage/images/logo/'.'logo_1.png')}}" alt="" height="60" width="90" >
    </div>
    <div class="container col-1">
        <div class="collapse navbar-collapse text-dark" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Event
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item " href="{{route('Event.index')}}">View Event</a>
                        <a class="dropdown-item" href="{{route('Event.create')}}">New Event</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>


    <div class="container col-1">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Cake
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"
                           href="{{route('Cake.index')}}"
                        >View Cake</a>
                        <a class="dropdown-item"
                           href="{{route('Cake.create')}}"
                        >New Cake</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="container col-1">
        <div class="collapse navbar-collapse text-dark" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                    <a class="nav-button text-dark font-weight-bold" href="{{route('admin.index')}}">Admin</a>
            </ul>
        </div>
    </div>
    <div class="container col-1">
        <div class="collapse navbar-collapse text-dark" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <a class="nav-button text-dark font-weight-bold" href="{{route('auth.home')}}">Home</a>
            </ul>
        </div>
    </div>

    <div class="container col-1">
        <div class="collapse navbar-collapse text-dark" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-button text-dark font-weight-bold" href="{{route('Cus.index')}}">Customer</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="offset-1 font-weight-bold">
        {{\Illuminate\Support\Facades\Session::has('username')?
                \Illuminate\Support\Facades\Session::get('username') : ''}}
    </div>
    <div class="container offset-1 col-1">
        <div class="collapse navbar-collapse text-dark" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-button text-dark font-weight-bold" href="{{route('auth.signout')}}">Logout</a>
                </li>
            </ul>
        </div>
    </div>




</nav>
