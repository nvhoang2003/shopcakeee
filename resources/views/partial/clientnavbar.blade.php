<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header__top__inner">
                        <div class="header__top__left">
                            <ul>
                                <li>USD <span class="arrow_carrot-down"></span>
                                    <ul>
                                        <li>EUR</li>
                                        <li>USD</li>
                                    </ul>
                                </li>
                                <li>ENG <span class="arrow_carrot-down"></span>
                                    <ul>
                                        <li>Spanish</li>
                                        <li>ENG</li>
                                    </ul>
                                </li>
                                <li><a href="#">Sign up</a> <span class="arrow_carrot-down"></span></li>
                            </ul>
                        </div>
                        <div class="header__logo">
                            <a href="./index.html"><img src="{{asset('/storage/images/logo/'.'logo.png')}}" alt="" height="60" width="90" style="border-radius: 50%">
                            </a>
                        </div>

                        <div class="header__top__right">
                            <div class="header__top__right__links">
                                <a href="#" class="search-switch"><img src="{{asset('img/icon/search.png')}}" alt=""></a>
                                <a href="#"><img src="img/icon/heart.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i><p></p></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li> <a href="{{route('auth.home')}}">Home</a></li>
                        <li><a href="./about.html">About</a></li>
                        <li><a href="./shop.html">Shop</a></li>
                        <li><a href="{{route('View.Category')}}">Event</a>
                        <li><a href="./contact.html">Cake</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </nav>
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

@include('partial.error')

