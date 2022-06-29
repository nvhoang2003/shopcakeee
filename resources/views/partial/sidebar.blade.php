<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            {{--                <img src="images/icon/logo.png" alt="Cool Admin" />--}}
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a class="js-arrow" href="#">
                        <i class="fas fa-birthday-cake"></i>Cake</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{route('Cake.index')}}">View Cake</a>
                        </li>
                        <li>
                            <a href="{{route('Cake.create')}}">New Cake</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="js-arrow" href="#">
                        <i class="fas fa-calendar"></i></i>Event</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{route('Event.index')}}">View Event</a>
                        </li>
                        <li>
                            <a href="{{route('Event.create')}}">New Event</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('admin.index')}}">
                        <i class="far fa-user"></i>View Admin</a>
                </li>
                <li>
                    <a href="{{route('Cus.index')}}">
                        <i class="fas fa-users"></i>View Customer</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->

<!-- PAGE CONTAINER-->
<div class="page-container">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap">
                    @include('partial.message')
                        <div class="account-wrap  offset-2">
                            <div class="account-item clearfix js-item-menu">
                                <div class="content">
                                    <a class="js-acc-btn name" href="#">{{\Illuminate\Support\Facades\Session::has('username')?
                \Illuminate\Support\Facades\Session::get('username') : ''}}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix ">
                                            <span class="email">{{\Illuminate\Support\Facades\Session::has('email')?
                \Illuminate\Support\Facades\Session::get('email') : ''}}</span>
                                    </div>
                                    <div class="info clearfix ">
                                            <span class="contact">{{\Illuminate\Support\Facades\Session::has('contact')?
                \Illuminate\Support\Facades\Session::get('contact') : ''}}</span>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="{{route('auth.signout')}}">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <!-- HEADER DESKTOP-->
</div>
