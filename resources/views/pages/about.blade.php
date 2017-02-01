@extends('layouts.app')
@section('title')
    About - Exploration Instruments
@endsection

@section('body')

    <link href="{{ asset('css/about.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/animate.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <div class=container-fluid>
        <div class="row">
            <div class="aboutBackground">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <div></div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg- aboutGraphic">

                        <h1>About Us</h1>

                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <div></div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <div></div>
                </div>
            </div>
        </div>

        <ol class="breadcrumb">
            <li>
                <a href="/home">Home</a>
            </li>
            <li class="active">About Us</li>
        </ol>

        <div class="container-fluid">
            <div class="row aboutContent">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" id="aboutScrollSpy">
                        <nav>
                            <ul class="nav nav-pills nav-stacked">
                                <li class="active"><a class="aboutTabs animated fadeinDown" id="history" href="#about1">Our
                                        Mission</a></li>
                                <li><a class=" aboutTabs animated fadeInDown" id="values" href="#about2">Our Values</a>
                                </li>
                                <li><a class="aboutTabs animated fadeInDown" id="mission" href="#about3">Our History</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 animated fadeInUpBig aboutTxt" data-spy="scroll"
                         data-target="#aboutScrollSpy">

                        <div id="about1">
                            <h1>Our Mission</h1>
                            <hr>
                            <p>
                                Since our inception in 1998 (and as J.D. Fett Instruments for the 20 years prior to
                                that)
                                our goal has been to provide customers with the best equipment - wherever and
                                whenever
                                they
                                need it. And we'll strive to meet that goal with each and every order you place with
                                us.

                                Dennis M. Mills, President of Exploration Instruments, has been involved in many
                                aspects
                                of
                                geophysical exploration for the past 30 years; ranging from contract geophysics to
                                software
                                development. His broad background of field-work and interpretation gives him a
                                unique
                                perspective on the needs of EXI clients:

                                " I know what it's like to be in the field and dependent on equipment provided by
                                someone
                                else", says Dennis. "We want our customers to have complete confidence in our
                                ability to
                                support their projects."

                                Let's face it - we want you to be successful and profitable in your business so that
                                we
                                can
                                be the same in ours. We'd like to be considered as more than your equipment supplier
                                ...
                                we
                                want to be your partner in technology.
                            </p>
                        </div>

                        <div id="about2">
                            <h1>Our Values</h1>
                            <hr>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum
                                has
                                been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley
                                of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries,
                                but also the leap into electronic typesetting, remaining essentially unchanged. It
                                was
                                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages,
                                and more recently with desktop publishing software like Aldus PageMaker including
                                versions
                                of
                                Lorem Ipsum

                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum
                                has
                                been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley
                                of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries,
                                but also the leap into electronic typesetting, remaining essentially unchanged. It
                                was
                                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages,
                                and more recently with desktop publishing software like Aldus PageMaker including
                                versions
                                of
                                Lorem Ipsum
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum
                                has
                                been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley
                                of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries,
                                but also the leap into electronic typesetting, remaining essentially unchanged. It
                                was
                                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages,
                                and more recently with desktop publishing software like Aldus PageMaker including
                                versions
                                of
                                Lorem Ipsum
                            </p>
                        </div>

                        <div id="about3">
                            <h1>Our History</h1>
                            <hr>
                            <p>
                                Twenty years ago, John Fett and his wife Rheo started a geophysical
                                instrument rental business in their house in Hemet, California. Beginning with
                                gravity meters and after expanding into a larger range of geophysical equipment,
                                J.D. Fett Instruments moved to Austin,
                                Texas and grew into the best-known rental company in North America for providing
                                quality instrumentation to the environmental, engineering, and mining industries. In
                                the
                                spring of 1998, John and Rheo decided to retire and sold the assets to a new
                                company: Exploration
                                Instruments.
                            </p>
                            <p>
                                Beginning with geothermal exploration work in the mid- 70’s, Dennis has been working
                                in geophysical
                                positions from crew chief to management for almost 30 years. As a Partner in
                                Electrodyne Surveys
                                (Reno) in the late 70’s, Field Operations/Data Processing Manager for Phoenix
                                Geophysics (Denver) in
                                the early 80’s, VP Marketing for Phoenix Geophysics (Denver/Toronto) in the
                                mid-80’s, and VP
                                Administration/Field Ops at Phoenix Geoscience (Denver), he has participated in and
                                directed operations for geophysical surveys all over the world.Moving to Austin,
                                Texas in
                                1990 as Vice
                                President Marketing at Geotools, Inc., Dennis turned his attentions to software and
                                for the next 8 years concentrated on EM workstation software. For the past 15 years,
                                Dennis has
                                been at the helm of Exploration Instruments of Austin, Texas, a geophysical
                                equipment rental company, where he is a Founder, Partner and the President/CEO. At
                                EXI, Dennis oversees the provision of
                                Seismic,
                                Electromagnetic, Gravity, Resistivity, Magnetic, Ground Penetrating Radar, Borehole
                                Imaging,
                                Radiometric, Hydrologic, and other equipment to an international client-base. He is
                                a
                                member
                                of
                                the
                                Environmental and Engineering Geophysical Society, Association of Engineering
                                Geologists,
                                American
                                Geophysical Union and 23 year member of the Society of Exploration Geophysicists. He
                                is
                                a
                                registered
                                Professional Geoscientist in the State of Texas, past Vice-President of the
                                Environmental
                                and
                                Engineering Geophysical Society (EEGS)and currently serves as Chairman of the Board
                                for
                                the
                                EEGS
                                Foundation.
                            </p>
                        </div>
                    </div>

            </div>
        </div>
    </div>

@endsection

