<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="//fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">

    <link href="{{ secure_asset('css/app.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{ secure_asset('css/style.css') }}" media="all" rel="stylesheet" type="text/css"/>

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
            <li class="active"><a class="navItem" href="{{ secure_url('/home') }}">Home</a></li>
            <li class="dropdown">
                <a href="{{ secure_url('#') }}" class="dropdown-toggle" data-toggle="dropdown" role="button"
                   aria-expanded="false"> Equipment
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a class="navItem" href="{{ secure_url('/rentals') }}">For Rent</a>
                        <a class="navItem" href="{{ secure_url('/sales') }}">For Sale</a>
                    </li>
                </ul>
            </li>

            <li><a class="navItem" href="{{ secure_url('/about') }}">About Us</a></li>
            <li><a class="navItem" href="{{ secure_url('/news') }}">News & Articles</a></li>
            <li><a class="navItem" href="{{ secure_url('/newCustomer') }}">New Customer Forms</a></li>
            <li><a class="navItem" href="{{ secure_url('/portal') }}">Customer Portal</a></li>
            <li><a class="navItem" href="{{ secure_url('/contact') }}">Contact</a></li>
        </ul>
        @if (Auth::guest())
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ secure_url('/login') }}">Login</a></li>
                <li><a href="{{ secure_url('/register') }}">Register</a></li>
            </ul>
        @else
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="{{ secure_url('#') }}" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ secure_url('/logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ secure_url('/logout') }}" method="POST"
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
                    <li class="active"><a class="navItem" href="{{ secure_url('/home') }}">Home</a></li>
                    <li><a class="modalA" href="{{ secure_url('/rentals') }}">For Rent</a></li>
                    <li><a class="modalA" href="{{ secure_url('/sales') }}">For Sale</a></li>
                    <li><a class="modalA" href="{{ secure_url('/about') }}">About Us</a></li>
                    <li><a class="modalA" href="{{ secure_url('/news') }}">News & Articles</a></li>
                    <li><a class="modalA" href="{{ secure_url('/newCustomer') }}">New Customer Forms</a></li>
                    <li><a class="modalA" href="{{ secure_url('/portal') }}">Customer Portal</a></li>
                    <li><a class="modalA" href="{{ secure_url('/contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ secure_asset('js/app.js') }}"></script>
@yield('body')


<!-- Scripts -->

</body>
</html>