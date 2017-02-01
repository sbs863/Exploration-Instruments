@extends('layouts.app')
@section('body')
    <link href="{{ secure_asset('css/news.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <!-- Body -->
    <div class="container ">
        <div class="row newsContainer">
            <div class="col-md-8">

                <h1>Latest Posts</h1>

                <article>
                    <h3><a href="singlepost.html">Exploration Instruments opens new office in Harrisburg, PA</a></h3>

                    <hr>

                    <img src="../../images/news/paxton.png" class="img-responsive">

                    <br/>

                    <p class="lead">Exploration Instruments, of Austin, Texas, has opened a new branch office in
                        Harrisburg, Pennsylvania. The Harrisburg office is fully staffed with 4 experienced personnel
                        and carries the complete line of instrumentation generally available from EXI. Lead Technician
                        Jeff Sinski has spent more than 20 years in the geophysical equipment rental industry and is
                        looking forward to continuing to provide his knowledge and expertise to the many clients he has
                        worked with over the years.</p>

                    <p>Located at 5000 Paxton St., this EXI location occupies 3,500 sq ft of office space and warehouse
                        in its own building with easy drive-up access and lots of parking. Ideally situated to service
                        the Mid-Atlantic and Eastern states, customers will reduce shipping expenses by picking up
                        instruments at the facility or availing themselves of 1 day Fedex or UPS ground service.</p>

                    <p class="text-right">
                        <a href="singlepost.html">
                            continue reading...
                        </a>
                    </p>

                    <hr>
                </article>

                <article>
                    <h3><a href="singlepost.html">Exploration Instruments opens new office in Harrisburg, PA</a></h3>

                    <hr>

                    <img src="../../images/news/ess1.jpg" class="img-responsive">

                          <br/>

                    <p class="lead">Exploration Instruments is now offering the new ESS Mini Accelerated Weight Drop
                        Source. This light-weight source weighs only 150 lbs total and delivers quite a punch in energy
                        ~ 208 joules. Preliminary testing indicates it should provide signal as deeply as 200 feet.
                        Shipping in only 3 Pelican-style cases, it's easy to get the source to you in a time and
                        cost-effective manner. See it on our web page</p>


                    <p class="text-right">
                        <a href="singlepost.html">
                            continue reading...
                        </a>
                    </p>

                    <hr>
                </article>


                <ul class="pager">
                    <li class="previous"><a href="#">&larr; Previous</a></li>
                    <li class="next"><a href="#">Next &rarr;</a></li>
                </ul>

            </div>
            <div class="col-md-4">

                <div class="well text-center">
                    <p class="lead">
                        Don't want to miss updates?
                    </p>
                    <button class="btn btn-primary btn-lg">Subscribe to our Newsletter</button>
                </div>

                <!-- Latest Posts -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Latest Posts</h4>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#">1. Aries Sun Sign March 21 - April 19</a></li>
                        <li class="list-group-item"><a href="singlepost.html">1. Exploration Instruments opens new
                                office </a></li>
                        <li class="list-group-item"><a href="singlepost.html">2. New ESS Mini AWD Seismic Source</a>
                        </li>
                        <li class="list-group-item"><a href="singlepost.html">3. Seminars on Applied Geophysics</a></li>
                        <li class="list-group-item"><a href="singlepost.html">4. Take Advantage of SuperSting Wifi! </a>
                        </li>
                    </ul>
                </div>

                <!-- Categories -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Categories</h4>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#">Announcements</a></li>
                        <li class="list-group-item"><a href="#">Gear of The Month</a></li>
                        <li class="list-group-item"><a href="#">Industry News</a></li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
@endsection