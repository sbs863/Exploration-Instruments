@extends('layouts.app')
@section('title')
    Rentals - Exploration Instruments
@endsection

@section('body')
    <link href="{{ secure_asset('css/products.css') }}" media="all" rel="stylesheet" type="text/css"/>
  <header>
  	<h1>EX</h1>
  </header>


    <div class="container">
     <div class="row">

            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
              <div id="product_list">

              </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-lg-o">
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

<script src="{{ secure_asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ secure_asset('js/products.js') }}"></script>

   





   
