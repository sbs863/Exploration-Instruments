@extends('layouts.app')

@section('title')

@endsection

@section('body')

    <link href="{{ asset('css/home.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/animate.css') }}" media="all" rel="stylesheet" type="text/css"/>

    <div class="parallax">
        <div id="group1" class="parallax__group">
            <div class="parallax__layer parallax__layer--base">
                <div class="title">
                    <div class="homeGraphic">
                        <figure>
                            <img class="img-responsive" src="../../images/logo.png" alt="logo">

                                <h1>
                                   Providing the tools to model our future
                                </h1>

                        </figure>
                    </div>
                </div>
            </div>
        </div>
        {{--Group 2--}}
        <div id="group2" class="parallax__group">
            <div class="parallax__layer parallax__layer--base">
                <div class="title aboutExi">

                    <h2>

                        Exploration Instruments is the largest and best-known geophysical equipment rental company in
                        North
                        America specializing in near-surface applications. We carry over 81 different types of systems
                        and
                        hundreds of units in our inventory. Seismic, EM, Ground Penetrating Radar, Gravity, Magnetics
                        and
                        Resistivity are a few types of equipment used to support Geotechnical, Groundwater,
                        Environmental,
                        Archaeology, NDT, and Structural Imaging Investigations.

                        Make Exploration Instruments your source for geophysical equipment rentals and let us be your

                        Partners in Technology.
                    </h2>

                </div>
            </div>
            <div class="parallax__layer parallax__layer--back">
                <div class="title">

                </div>
            </div>
        </div>
        {{--GROUP 3--}}
        <div id="group3" class="parallax__group">
            <div class="parallax__layer parallax__layer--fore">
                <div class="title">FRONT</div>
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
        {{--GROUP 5--}}
        {{--<div id="group5" class="parallax__group">--}}
        {{--<div class="parallax__layer parallax__layer--fore">--}}
        {{--<div class="title">Foreground Layer</div>--}}
        {{--</div>--}}
        {{--<div class="parallax__layer parallax__layer--base">--}}
        {{--<div class="title">Base Layer</div>--}}
        {{--</div>--}}
        {{--</div>--}}
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/dynamic.js') }}"></script>
@endsection


