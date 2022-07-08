<header class="header">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="m-2">
                        <a><img src="{{asset('/storage/images/logo/'.'logocakeshop.png')}}" alt="" height="60" width="90" >
                        </a>
                    </div>
                    <nav class="header__menu mobile-menu col-9">
                        <ul>
                            <li><a href="{{route('auth.home')}}">Home</a></li>
                            <li class="offset-1"><a href="{{route('Client.About')}}">About</a></li>
                            <li class="offset-1"><a href="{{route('auth.home')}}#event">Event</a>
                            <li class="offset-1"><a href="{{route('Client.Cake')}}">Cake</a></li>
                            <li ><a href="{{route('Client.signup')}}">Sign up</a></li>
                        </ul>
                    </nav>
                    <div class="col-1">
                        <div class="m-3">
                            <a href="#" class="search-switch"><img src="{{asset('img/icon/search.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form" action="{{route('Client.search')}}" method="get">
            @csrf
            <input type="text" id="search-input" name="search" placeholder="Search here.....">
            <button class="btn au-btn--submit">Submit</button>
        </form>
    </div>
</div>


