@extends('layouts.app')

@section('title')
    Home
@endsection

@section('body')

    <link href="{{ asset('css/default.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/home.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/component.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/animate.css') }}" media="all" rel="stylesheet" type="text/css"/>




    <div class="parallax">
        <div id="group1" class="parallax__group">
            <div class="parallax__layer parallax__layer--base">
                <div class="title">
                    <figure class="homeGraphic">
                        <img class="img-responsive" src="../../images/logo.png" alt="logo">
                        <h1>
                            Equipping you with the tools that model the future
                        </h1>
                    </figure>
                </div>
                <footer class="footer">
                    <div class="container">
                        <span class="text-muted"> Scroll to Explore </span>
                    </div>
                </footer>
            </div>
        </div>
        {{--Group 2--}}
        <div id="group2" class="parallax__group">
            <div class="parallax__layer parallax__layer--base">
                <div class="row aboutExi">
                    <div class="col-xs-4  col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-6 ">

                        <h2 class="textBox">
                            Exploration Instruments is the largest and best-known geophysical equipment rental company
                            in North America specializing in near-surface applications. We carry over 81 different types
                            of systems and hundreds of units in our inventory. Seismic, EM, Ground Penetrating Radar,
                            Gravity, Magnetics and Resistivity are a few types of equipment used to support
                            Geotechnical, Groundwater, Environmental, Archaeology, NDT, and Structural Imaging
                            Investigations.

                            Make Exploration Instruments your source for geophysical equipment rentals and let us be
                            your

                            Partners in Technology.

                        </h2>
                    </div>
                    <div class="col-lg-2 col-lg-offset-1 col-md-3 col-md-offset-1  col-sm-4 col-sm-offset-1 col-xs-5 col-xs-offset-2 thumb">
                        <a class="thumbnail" href="#">
                            <img class="img-responsive execute" src="../../images/logos_home/AEG.png" alt="">
                        </a>
                        <a class="thumbnail" href="#">
                            <img class="img-responsive execute" src="../../images/logos_home/enengs.png" alt="">
                        </a>
                        <a class="thumbnail" href="#">
                            <img class="img-responsive execute" src="../../images/logos_home/GWBlogo.jpg" alt="">
                        </a>
                    </div>

                </div>
            </div>
            <div class="parallax__layer parallax__layer--back">
                <div class="title">

                </div>
            </div>
        </div>
        GROUP 3
        <div id="group3" class="parallax__group">
            <div class="parallax__layer parallax__layer--fore">
                <div class="title">

                </div>
            </div>
            <div class="parallax__layer parallax__layer--base">
                <div class="title">


                </div>
            </div>
        </div>
        {{--GROUP 4--}}
        <div id="group4" class="parallax__group">
            <div class="parallax__layer parallax__layer--base">
                <div class="title">

                </div>
            </div>
            <div class="parallax__layer parallax__layer--back">
                <div class="title">Background</div>
            </div>
            <div class="parallax__layer parallax__layer--deep">
                <div class="title">DEEP</div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/modernizr.custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/dynamic.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/grid.js') }}"></script>
    <script src=""></script>
@endsection


