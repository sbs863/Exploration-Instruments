@extends('layouts.app')
@section('title')
    Rentals - Exploration Instruments
@endsection

@section('body')
    <link href="{{ asset('css/products.css') }}" media="all" rel="stylesheet" type="text/css"/>
  <header>
  	<h1>EX</h1>
  </header>


    <div class="container">
     <div class="row">

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
              <div id="product_list">

              </div>
            </div>
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
             <div class="panel panel-default">
              <div class="panel-heading">
               <h3 class="panel-title">Products Types</h3>
              </div>
              <div class="panel-body" style="max-height:600px;overflow-y: scroll;">
               <div id="product_Type" class="row">

               </div>
              </div>
              </div>

            </div>

    </div>
  </div>
@endsection

<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/products.js') }}"></script>

   





   
