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
                                                    <a href="#">john doe</a>
                                                </h5>
                                                <span class="email">johndoe@example.com</span>
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
    <div class="offset-4 col-8">
        <h1 class="display-4 text-center font-weight_bold">New Event</h1>

        @include('partial.error')

        <form action="{{route('Event.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="eventname" class="font-weight-bold">Eventname</label>
                <input type="text" class="form-control" id="eventname" name="eventname"
                       value="{{old('eventname')?? null }}"
                >
            </div>

            <div class="form-group">
                <label for="image" class="font-weight-bold">Image</label>
            </div>
            <input type="file" name="image" id="image" class="mb-3"/>

            <div class="form-group">
                <label for="description" class="font-weight-bold">Description</label>
                <input  type="text" class="form-control" id="description" name="description" value="{{old('description')?? null}}">
            </div>

            <button type="submit" class="btn btn-dark">Submit</button>
            <a href="{{route('Event.index')}}" class="btn btn-secondary">Cancel</a>

        </form>
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

</body>

</html>
<!-- end document-->
