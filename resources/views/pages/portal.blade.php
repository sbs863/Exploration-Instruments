@extends('layouts.app')

@section('body')
    <link href="{{ asset('css/portal.css') }}" media="all" rel="stylesheet" type="text/css"/>
<div class="jumbotron">
	<div class="container">
        <div id="homeCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#homeCarousel" data-slide-to="1"></li>
                <li data-target="#homeCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="../../../images/featured/df.jpg" alt="slide one">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
            <div class="item">
                <img src="../../../images/featured/df.jpg" alt="slide two">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
                ...
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
	</div>
</div>

    @endsection