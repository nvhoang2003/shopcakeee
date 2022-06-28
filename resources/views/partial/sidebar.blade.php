<div class="page-wrapper">
    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar">
        <div class="logo">
            <a href="#">
                <img src="{{asset('/storage/images/logo/'.'logo.png')}}" alt="" height="60" width="90" >
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li >
                        <a class="js-arrow" href="#">
                            <i class="fas fa-birthday-cake"></i>Cake</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="{{route('Cake.index')}}">View Cake</a>
                            </li>
                            <li>
                                <a href="{{route('Cake.create')}}">Create New Cake</a>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <a class="js-arrow" href="#">
                            <i class="fas fa-calendar"></i>Event</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="{{route('Event.index')}}">View Event</a>
                            </li>
                            <li>
                                <a href="{{route('Event.create')}}">Create New Event</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('admin.index')}}">
                            <i class="fas fa-user-circle"></i>Admin</a>
                    </li>
                    <li>
                        <a href="{{route('Cus.index')}}">
                            <i class="fas fa-users"></i>Customer</a>
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

                    <div class="account-wrap">
                        @include('partial.message')
                        <div class="account-item clearfix js-item-menu name">
                            <div class="content ">
                                <a class="js-acc-btn name" href="#">{{\Illuminate\Support\Facades\Session::has('username')?
                \Illuminate\Support\Facades\Session::get('username') : ''}}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">

                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#"></a>
                                        </h5>
                                        <span class="email"></span>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="#">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>
