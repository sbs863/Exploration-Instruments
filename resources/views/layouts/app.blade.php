<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

    {{--<div class="row-fluid top">--}}
    {{--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">--}}
    {{--<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 logo ">--}}
    {{--<img src="../../images/logoSmall.png" class="exi" alt="Image">--}}
    {{--</div>--}}
    {{--<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 header">--}}
    {{--EXPLORATION INSTRUMENTS--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</div>--}}

            <nav class="navbar navbar-fixed-top" role="navigation">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed " data-toggle="modal" data-target="#nav-modal"
                            aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a class="navItem" href="/home">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false"> Equipment
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a class="navItem" href="/rentals">For Rent</a>
                                    <a class="navItem" href="/saless">For Sale</a>
                                </li>
                            </ul>
                        </li>

                        <li><a class="navItem" href="/about">About Us</a></li>
                        <li><a class="navItem" href="/news">News & Articles</a></li>
                        <li><a class="navItem" href="/newCustomer">New Customer Forms</a></li>
                        <li><a class="navItem" href="/portal">Customer Portal</a></li>
                        <li><a class="navItem" href="/contact">Contact</a></li>
                    </ul>
                    @if (Auth::guest())
                        {{--<ul class="nav navbar-nav navbar-right">--}}
                        {{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
                        {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                        {{--</ul>--}}
                    @else
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @endif
                </div>

            </nav>
            <!-- Modal -->
            <div class="modal fade" id="nav-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-nav-content">
                        <div class="modal-nav-body">
                            <ul>
                                <li class="active"><a class="navItem" href="/home">Home</a></li>
                                <li><a class="modalA" href="/rentals">For Rent</a></li>
                                <li><a class="modalA" href="/sales">For Sale</a></li>
                                <li><a class="modalA" href="/about">About Us</a></li>
                                <li><a class="modalA" href="/news">News & Articles</a></li>
                                <li><a class="modalA" href="/newCustomer">New Customer Forms</a></li>
                                <li><a class="modalA" href="/portal">Customer Portal</a></li>
                                <li><a class="modalA" href="/contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

{{--<div class="row-fluid">--}}
{{--<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">--}}
{{--<ul class="nav navbar-nav">--}}

{{--</ul>--}}
{{--</nav>--}}

{{--</div>--}}

@yield('body')


<!-- Scripts -->




</body>
</html>