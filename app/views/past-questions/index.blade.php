@extends('../layouts/default')
@include('../shared/spec-form')

   
@section('head')
	<meta name="description" content="Links to some useful Material">
@stop
@section('header')
   <h1>Past Questions</h1>
   <p>Easily obtain past Exam and CA Question papers.<br /> Select your preferred question paper and download it compressed zip format.
   </p>
@stop

@section('error')
	<div class="alert alert-danger fade in">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	   <p><strong>Sorry!</strong> We only have past questions for  courses  taken in the faculty of Engineering and Technology. Please do check later for other faculties OR help us by submitting your past questions {{HTML::link('contribute/past-questions','here')}}.</p>
 	</div>
@stop

@section('content')
  @yield('spec-form')
@stop