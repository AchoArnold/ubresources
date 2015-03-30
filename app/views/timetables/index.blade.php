@extends('/layouts/default')
@include('timetables/partials/_header')
@include('../shared/spec-form')

@section('head')
	<meta name="description" content="Timetable for students in the University Of Buea showing the leture time for the all courses">
@stop

@section('error')
   <div class="alert alert-danger fade in">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       <strong>Sorry!</strong> We only have timetables for the faculty of Engineering and Technology. Please do check later for other timetables OR help us by submitting your timetable {{HTML::link('contribute/timetables','here')}}
   </div>
@stop

@section('content')
	<div class="alert alert-danger fade in">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       <strong>Sorry!</strong> We only have timetables for the faculty of Engineering and Technology. Please do check later for other timetables OR help us by submitting your timetable {{HTML::link('contribute/timetables','here')}}
   </div>


   <div class="text-center">
   	 <br>
   	 <h1>Complete <b>second semester</b> timetable for the faculty of engineering and technology for the 2014/2015 academic year</h1>
	 <br>
	 <a href="{{asset('packages/timetables/fet-timetable.pdf')}}" download class="btn btn-success">Click to Download <span class="glyphicon glyphicon-cloud-download"></span></a>
   </div>
  


  {{-- @yield('spec-form') --}}
@stop