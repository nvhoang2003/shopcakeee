<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/site.css">

</head>

<body>
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
                        <div class="row ">
                            @include('partial.message')
                            <div class="account-item clearfix js-item-menu name offset-2">
                                <div class="content ">
                                    <a class="js-acc-btn name" href="#">{{\Illuminate\Support\Facades\Session::has('username')?
                \Illuminate\Support\Facades\Session::get('username') : ''}}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">

                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">{{\Illuminate\Support\Facades\Session::has('username')?
                \Illuminate\Support\Facades\Session::get('username') : ''}}</a>
                                            </h5>
                                            <span class="email">{{\Illuminate\Support\Facades\Session::has('email')?
                \Illuminate\Support\Facades\Session::get('email') : ''}}</span>
                                        </div>
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
    </div>
    <div class="offset-3 col-9">
        <div class="container form_cake" >
            <h1 class="display-4 text-center font-weight_bold">New Cake</h1>

            @include('partial.error')

            <form action="{{route('Cake.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="cakename" class="font-weight-bold">Cakename</label>
                    <input type="text" class="form-control" id="cakename" name="cakename" value="{{old('cakename')}}">
                </div>

                <div class="form-group">
                    <label for="flavor" class="font-weight-bold">Flavor</label>
                    <input type="text" class="form-control" id="flavor" name="flavor" value="{{old('flavor')}}">
                </div>

                <div class="form-group">
                    <label for="price" class="font-weight-bold">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}">
                </div>

                <div class="form-group">
                    <label for="expiry" class="font-weight-bold">Expiry</label>
                    <input type="text" class="form-control" id="expiry" name="expiry" value="{{old('expiry')}}">
                </div>

                <div class="form-group">
                    <label for="image" class="font-weight-bold">Image</label>
                    <input type="file" id="image" name="image">
                </div>

                <div class="form-group">
                    <label for="size" class="font-weight-bold">Size</label>
                    <input type="text" class="form-control" id="size" name="size" value="{{old('size')}}">
                </div>
                {{--                @php--}}
                {{--                    $cakeid =old('event')?? $cake->event?? null;--}}
                {{--                @endphp--}}
                {{--                <div class="form-group">--}}
                {{--                    <label for="event" class="font-weight-bold">Event</label>--}}
                {{--                    <select name="event" class="form-control" id="event" required>--}}
                {{--                        <option value="0">Please select a event cake </option>--}}
                {{--                        @foreach($event as $e)--}}
                {{--                            <option value="{{ $e->eventid}}"--}}
                {{--                                {{($cakeid !=null && $e->eventid==$cakeid)?'selected':''}}--}}
                {{--                            >{{ $e->eventname }}</option>--}}
                {{--                        @endforeach--}}
                {{--                    </select>--}}
                {{--                </div>--}}
                <button type="submit" class="btn btn-dark">Submit</button>
                <a href="{{route('Cake.index')}}" class="btn btn-info">Cancel</a>
            </form>
        </div>
    </div>


    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
</div>
</body>

</html>
<!-- end document-->
