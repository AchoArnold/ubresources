@extends('/layouts/default')
@include('layouts/side-nav')
@include('../shared/spec-form')

@section('head')
	<meta name="description" content="Links to some useful Material">
@stop

@section('header')
   <h1>Course Outline</h1>
      <p>An overview of the courses taken at the {{HTML::link('http://www.ubuea.net','University of Buea')}}.<br/> You can print a copy or read the online version here.
   </p>
@stop

@section('error')
	   <div class="alert alert-danger fade in">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <p><strong>Sorry!</strong> We only have information about courses  taken in the faculty of Engineering and Technology. Please do check later for courses in other faculties OR help us by submitting your course list {{HTML::link('contribute/course-outlines','here')}}.</p>
 	</div>
@stop

@section('content')
  @yield('spec-form')
@stop