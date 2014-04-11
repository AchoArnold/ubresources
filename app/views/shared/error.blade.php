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
    @else
        <div class="panel search-panel panel-success">
          <div class="panel-heading">
              <h3 class="text-center">The requested URL <code>{{Request::url()}}</code> was not found on this server</h3>
            </div>
            <div class="panel-body">
              <p> Thanks for noticing&mdash;we're going to fix it up and have things back to normal soon.</p>
          </div>
        </div>
       @endif
@stop