<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block bg-light">
    <div class="logo bg-white">
        <a href="#">
            <img src="{{asset('/storage/images/logo/'.'logocakeshop.png')}}" alt="" class="mb-1" height="120" width="120" />
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
                <li>
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user-circle"></i>{{\Illuminate\Support\Facades\Session::has('username')?
                  \Illuminate\Support\Facades\Session::get('username') : ''}}</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="#"><span class="contact">{{\Illuminate\Support\Facades\Session::has('contact')?
                \Illuminate\Support\Facades\Session::get('contact') : ''}}</span></a>
                            </li>
                            <li>
                                <a href="{{route('auth.signout')}}">
                                    <i class="fas fa-power-off"></i>Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    {{--            <div class="header-wrap">--}}
{{--                <div class="account-wrap">--}}
{{--                    <div class="account-item clearfix js-item-menu">--}}
{{--                        <div class="content">--}}
{{--                            <a class="js-acc-btn name" href="#">{{\Illuminate\Support\Facades\Session::has('username')?--}}
{{--                \Illuminate\Support\Facades\Session::get('username') : ''}}</a>--}}
{{--                        </div>--}}
{{--                        <div class="account-dropdown js-dropdown">--}}
{{--                            <div class="info clearfix ">--}}

{{--                            </div>--}}
{{--                            <div class="info clearfix ">--}}

{{--                            </div>--}}
{{--                            <div class="account-dropdown__footer">--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
</aside>
<!-- END MENU SIDEBAR-->

<!-- PAGE CONTAINER-->
{{--<div class="page-container">--}}
{{--    <!-- HEADER DESKTOP-->--}}
{{--    <header class="header-desktop">--}}

{{--    </header>--}}
{{--    <!-- HEADER DESKTOP-->--}}
{{--</div>--}}
