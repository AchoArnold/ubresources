@extends('/layouts/default')
@include('layouts/side-nav')
   
@section('head')
  <meta name="description" content="Error: Request cannot be processed!">
@stop

@section('header')
    <h1>Error</h1>
      <p>Sorry, Your request cannot be processed at the moment</p>
@stop

@section('content')
        <div class="panel search-panel panel-success">
          <div class="panel-heading">
              <h3 class="text-center">Sorry Your request cannot be processed at the moment</br>
                Thanks for noticing, we're going to fix it up and have things back to normal soon.
              </h3>
        </div>
        <div class="panel-body">
          <div class="text-center">
            {{HTML::link('/','Take me home',array('class' => 'btn btn-warning btn-lg'))}}
          </div>
        </div>
@stop