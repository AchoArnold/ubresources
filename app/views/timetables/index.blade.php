@extends('../layouts/default')
@include('../shared/spec-form')

@section('head')
	<meta name="description" content="Links to some useful Material">
@stop
@section('header')
   <h1>Time Table</h1>
    <p>This regularly updated timetable will help to ensure that you don't miss lectures</p>
@stop

@section('error')
   <div class="alert alert-danger">
       <strong>Sorry!</strong> We only have timetables for the faculty of Engineering and Technology. Please do check later for other timetables OR help us by submitting your timetable {{HTML::link('contribute/timetables','here')}}
   </div>
@stop

@section('content')
  @yield('spec-form')
@stop