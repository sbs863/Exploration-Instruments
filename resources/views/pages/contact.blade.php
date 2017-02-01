@extends('layouts.app')
@section('body')
    <link href="{{ secure_asset('css/contact.css') }}" media="all" rel="stylesheet" type="text/css"/>

    <div class="container">


        {!! Form::open(array('route' => 'pages.contact', 'class' => 'form')) !!}
        <h1>Contact us</h1>
        <p>
            We are here to answer any questions you may have about our equipment and rentals.
            We love talking about projects and equipment, reach out to us and
            we'll respond as soon as we can.
        </p>

        <div class="form-group">
            {!! Form::label('Your Name') !!}
            {!! Form::text('name', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Your name')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Your E-mail Address') !!}
            {!! Form::text('email', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Your e-mail address')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Your Message') !!}
            {!! Form::textarea('message', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Your message')) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Contact Us!',
              array('class'=>'btn btn-primary')) !!}
        </div>
        {!! Form::close() !!}

        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB8-QgVR6oGFZMnrDu1kl_7fR_sJnRqkaM
                            &q=Exploration+Instruments,Austin+TX&zoom=11" allowfullscreen>

                    </iframe>
                </div>

            </div>

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB8-QgVR6oGFZMnrDu1kl_7fR_sJnRqkaM
                                    &q=5000+Paxton+St,Harrisburg+PA&zoom=11" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        </div>
    </div>
@endsection