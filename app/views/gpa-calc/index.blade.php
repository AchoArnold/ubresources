@extends('../layouts/default')
@include('../shared/spec-form')

@section('head')
	<meta name="description" content="Fast and efficient GPA calculator fot the University of Buea">
      {{HTML::script('assets/js/gpa_calc.js')}}
@stop

@section('header')
  <h1>GPA Calculator</h1>
  <p>Easily calculate you GPA with this GPA calculator which is modified specifically for students in the {{HTML::link('http://www.ubuea.net','University of Buea')}}
	</p>
@stop

@section('error')
     <div class="alert alert-danger fade in">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <p><strong>Sorry!</strong> This GPA calculator has been configured only for the Faculty of Engineering and technology. Please check later for the GPA calculator for your faculty</p>
  </div>
@stop

@section('content')
  @yield('spec-form')
@stop