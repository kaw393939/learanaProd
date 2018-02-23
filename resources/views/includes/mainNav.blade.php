<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="/" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">L</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">{{ config('app.name', 'Laravel') }}</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->

            @guest
                <style>

                    .content-wrapper, .main-footer {
                        margin-left: 0px;
                    }  </style>
            @else
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
        @endguest

        <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- Notifications Menu -->

                    @guest

                        <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        <li><a class="nav-link" href="{{ route('user.index') }}">Users</a></li>

                    @else
                        <li><a class="nav-link" href="{{ route('user.index') }}">Users</a></li>

                        <li>
                            <form class="navbar-form .form-control" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn "><i class="text-muted fa fa-sign-out "></i></button>
                            </form>
                        </li>

                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-comments-o"></i><span
                                        class="label label-warning">10</span></a>
                        </li>
                @endguest
                <!-- User Account Menu -->

                </ul>
            </div>
        </nav>
    </header>
@auth
    @include('includes.leftSide')
@endauth







