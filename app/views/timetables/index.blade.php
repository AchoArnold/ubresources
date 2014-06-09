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
  @yield('spec-form')
@stop